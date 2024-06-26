<!doctype html>

<title>portfolio</title>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://cdn.tailwindcss.com"></script>

<style>
    html {
        scroll-behavior: smooth;
    }

    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
</style>

<body class="flex flex-col min-h-screen">
    <section class="px-6 pt-8">
        <nav class="flex justify-between items-center">
            <div>
                <a href="{{ route('home') }}">
                    <img src="/images/trans_icon.png" alt="portfolio Logo" width="130" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                <x-dropdown>
                    <x-slot name="trigger">
                        <button class="text-xl text-orange-400 font-bold">
                            こんにちは {{ auth()->user()->username }}さん!
                        </button>
                    </x-slot>

                    @admin
                    <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">
                        投稿一覧
                    </x-dropdown-item>
                    @endadmin

                    <x-dropdown-item href="{{ route('profile.edit') }}">
                        プロフィール
                    </x-dropdown-item>

                    <x-dropdown-item href="{{ route('logout') }}" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">
                        ログアウト
                    </x-dropdown-item>

                    <form id="logout-form" method="POST" action="/logout" class="hidden">
                        @csrf
                    </form>
                </x-dropdown>
                @else
                <a href="{{ route('user.register.view') }}" class="md:text-xl text-orange-400 font-bold uppercase">
                    ユーザー登録
                </a>

                <a href="{{ route('login.view') }}" class="md:text-xl md:mx-14 ml-7 text-orange-400  font-bold uppercase">
                    ログイン
                </a>
                @endauth
            </div>
        </nav>

        {{ $slot }}
        <footer class="bg-gray-200">
            <p class="p-2 text-center text-xs">&copy; 2024 Nishi</p>
        </footer>
    </section>
    <x-flash />
</body>
