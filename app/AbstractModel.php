<?php
/**
 * Created by PhpStorm.
 * User: roms
 * Date: 16/05/18
 * Time: 15:19
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

abstract class AbstractModel extends Model
{
    const ORDER_ASC = 'asc';
    const ORDER_DESC = 'desc';

    const QUERY_COLUMN = 'column';
    const QUERY_OPERATOR = 'operator';
    const QUERY_VALUE = 'value';

    const DEFAULT_LIMIT = 16;

    const PRIVACY = [
        Post::QUERY_COLUMN => 'privacy',
        Post::QUERY_OPERATOR => '=',
        Post::QUERY_VALUE => 0,
    ];

    protected $perPage = 16;

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
        } else {
            $qb->take(self::DEFAULT_LIMIT);
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

    public static function findByAll()
    {
        $posts = Post::findBy(
            [
                Post::PRIVACY
            ],
            [
                Post::FIELD_TITLE => Post::ORDER_ASC,
                Post::FIELD_CREATED_AT => Post::ORDER_DESC,
            ]);
        return $posts;
    }

    public static function findByCategorie($categorie)
    {
        $posts = Post::findBy(
            [
                Post::PRIVACY,
                [
                    Post::QUERY_COLUMN => 'type_media',
                    Post::QUERY_OPERATOR => '=',
                    Post::QUERY_VALUE => $categorie,
                ],

            ],
            [
                Post::FIELD_TITLE => Post::ORDER_ASC,
                Post::FIELD_CREATED_AT => Post::ORDER_DESC,
            ]);
        return $posts;
    }
}