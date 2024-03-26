<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        投稿記事一覧
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
            <x-category-dropdown />
        </div>

        <!-- Search -->
        <div class="relative lg:inline-flex items-center bg-gray-100 rounded-xl px-3 ">
            <form method="GET" action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                <input type="text"
                       name="search"
                       placeholder="タイトル検索"
                       class="bg-transparent placeholder-gray-500 font-semibold text-sm py-2"
                       value="{{ request('search') }}"
                >
            </form>
        </div>
    </div>
</header>
