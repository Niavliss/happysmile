<?php
/**
 * Created by PhpStorm.
 * User: roms
 * Date: 16/05/18
 * Time: 15:19
 */

namespace App;


use App\Utils\Strings;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractModel extends Model
{


    const ORDER_ASC = 'asc';
    const ORDER_DESC = 'desc';

    const QUERY_COLUMN = 'column';
    const QUERY_OPERATOR = 'operator';
    const QUERY_VALUE = 'value';

    const DEFAULT_LIMIT = 16;

    /**
     * Find posts.
     *
     * @param array $queries ...
     * @param array $sorts ...
     * @param int $limit Limit of number post to return
     *
     * @return array
     */
    public static function findBy($queries = [], $sorts = [], $limit = null)
    {
        /** @var self $qb */
        $qb = self::query();

        if ($limit !== null) {
            $qb->take($limit);
        }

        // Add Queries
        foreach ($queries as $query) {
            if (array_key_exists(self::QUERY_COLUMN, $query)
                and array_key_exists(self::QUERY_OPERATOR, $query)
                and array_key_exists(self::QUERY_VALUE, $query)
            ) {
                $qb->where($query[self::QUERY_COLUMN],
                    $query[self::QUERY_OPERATOR],
                    $query[self::QUERY_VALUE]
                );
            }
        }

        /**
         * Add order by
         * @var string $field
         * @var string $sort
         */
        foreach ($sorts as $column => $direction) {
            $qb->orderBy($column, $direction);
        }

        return $qb->get();
    }

    /**
     * @param string $method
     * @param array $parameters
     * @return array|bool|mixed
     * @throws \Exception
     */
    public static function __callStatic($method, $parameters)
    {
        if (preg_match('/findBy([\w].*)/', $method, $match)) {
            $string = $match[1];
            if (preg_match('/All/', $string, $match)) {

                $sorts = [];

                if (array_key_exists(0, $parameters)) {
                    $sorts = $parameters[0];
                }

                return self::findBy(
                    [],
                    $sorts
                );
            } else if (preg_match('/([\w].*)/', $string, $match)) {
                /** @var string $column */
                $column = Strings::fromCamelCase($match[1]);

                if (!array_key_exists(0, $parameters)) {
                    return false;
                }

                $value = null;

                if (array_key_exists(0, $parameters)) {
                    $value = $parameters[0];
                }

                $sorts = [];

                if (array_key_exists(1, $parameters)) {
                    $sorts = $parameters[1];
                    if (!is_array($sorts)) {
                        throw new \Exception("Parameters 2 must be an array.");
                    }
                }

                $limit = self::DEFAULT_LIMIT;
                if (array_key_exists(2, $parameters)) {
                    $limit = $parameters[2];
                    if (!is_numeric($limit)) {
                        throw new \Exception("Parameters 3 must be an integer or null.");
                    }
                }

                return self::findBy(
                    [
                        [
                            Post::QUERY_COLUMN => $column,
                            Post::QUERY_OPERATOR => '=',
                            Post::QUERY_VALUE => $value,
                        ],
                    ],
                    $sorts,
                    $limit
                );
            }

        } else {
            return self::__callStatic($method, $parameters);
        }
    }

}