<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header class="page-header wrapper">
        <h1><a href="/">portfolio</a></h1>
        @auth
            <div class="dropdown" id="dropdown">
                <i class="bx bx-plus-circle">
                    こんにちは {{ auth()->user()->username }}さん
                </i>
                
                @admin
                    <a href="admin/posts">ダッシュボード</a>
                    <a href="admin/profile">プロフィール</a>
                @endadmin

                <form method="POST" action="/logout" class="dropdown-item">
                    @csrf
                    <button type="submit">ログアウト</button>
                </form>

                @else
                <ul class="main-nav">
                    <li><a href="login">ログイン</a></li>
                    <li><a href="register">新規登録</a></li>
                </ul>
            </div>
        @endauth
    </header>
    @yield('title')
    @yield('content')
</body>

<footer>
    <div class="wrapper">
        <p><small>&copy; 2024 Nishi</small></p>
    </div>
</footer>

</html>
