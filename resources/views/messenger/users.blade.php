<div class="col-md-3">
    <div class="list-group">
        @foreach($users as $user)
            <a class="list-group-item" href="{{ route('messenger_show', $user->id) }}">{{ $user->pseudo }}</a>
        @endforeach

    </div>
</div>