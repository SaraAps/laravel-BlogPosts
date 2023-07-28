@props(['comment'])

<article class="flex bg-gray-100 border border-gray-200 p-6 rounded-xl space-x-4">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/100?u={{$comment->id}}" alt="avatar" width="60" height="60" class="rounded-xl">
    </div>
    <div>
        <header class="mb-4">
{{--           Eagerloading--}}

            <strong>{{$comment->author->username}}</strong>
            <p class="text-xs">
                <time>Posted 3 days ago.</time>
            </p>
        </header>
        <p>
            {{$comment->body}}
        </p>
    </div>
</article>
