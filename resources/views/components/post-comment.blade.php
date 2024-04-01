@props(['comment'])

<x-panel class="bg-gray-50">
    <article class="flex space-x-4">
        <div>
            <header class="mb-4">
                <h3 class="font-bold">{{ $comment->author->username }}</h3>

                <p class="text-xs">
                    投稿日
                    <time>{{ $comment->created_at-> }}</time>
                </p>
            </header>

            <p>
                {{ $comment->body }}
            </p>
        </div>
    </article>
</x-panel>
