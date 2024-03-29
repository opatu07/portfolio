<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="md:text-4xl">
        投稿記事一覧
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <div class="relative inline-flex bg-gray-100 rounded-xl w-40">
            <x-category-dropdown />
        </div>

        <!-- Search -->
        <div class="relative inline-flex items-center bg-gray-100 rounded-xl px-3 w-40">
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
