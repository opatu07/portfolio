@extends('layout')

@section('content')
    <div class="container">
        <form action="/login" method="post">
            @csrf
                <p class="fsize">ログイン</p>
                <input type="text" name="email" placeholder="メールアドレス">
                @error('email')
                    <div class="error"><span>{{ $message }}</span></div>
                @enderror
                <input type="password" name="password" placeholder="パスワード">
                @error('password')
                    <div class="error"><span>{{ $message }}</span></div>
                @enderror
                <button type="submit" value="send">ログイン</button>
        </form>
    </div>
@endsection

