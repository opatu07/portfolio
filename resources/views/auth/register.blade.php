@extends('layout')

@section('content')
    <div class="container">
        <form action="/register" method="post">
            @csrf
                <p class="fsize">新規登録</p>
                <input type="text" name="username" placeholder="ユーザーネーム" value="{{ old('username')}}">
                @error('username')
                    <div class="error"><span>{{ $message }}</span></div>
                @enderror
                <input type="text" name="email" placeholder="メールアドレス" value="{{ old('email')}}">
                @error('email')
                    <div class="error"><span>{{ $message }}</span></div>
                @enderror
                <input type="password" name="password" placeholder="パスワード" value="{{ old('password') }}">
                @error('password')
                    <div class="error"><span>{{ $message }}</span></div>
                @enderror
                <button type="submit" value="send">登録</button>
        </form>
    </div>
@endsection
