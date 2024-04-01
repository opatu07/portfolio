@props(['post'])

<article
    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 md:py-6 px-5 flex">
        <div class="flex-1 mr-8 mt-20 md:mt-10 md:ml-10">
            <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="画像はありません。" class="rounded-xl" width="300" height="400">
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                    <x-category-button :category="$post->category" />
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/posts/{{ $post->slug }}">
                            {{ $post->title }}
                        </a>
                    </h1>

                    <div class="text-sm mt-2 space-y-4">
                        {{ $post->excerpt }}
                    </div>
                </div>
            </header>



            <span class="mt-2 block text-gray-400 text-xs">
                投稿日 <time>{{ $post->created_at->diffForHumans() }}</time>
            </span>

            <footer class="flex justify-between items-center mt-8">
                <div>
                    <a href="/posts/{{ $post->slug }}"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8 "
                    >この記事を読む</a>
                </div>
            </footer>
        </div>
    </div>
</article>
