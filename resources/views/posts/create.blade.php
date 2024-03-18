@extends('layout')

@section('content')
    <div class="container">
        <form action="/register" method="post" enctype="multipart/form-data">
            @csrf
                <p class="fsize">新規記事登録</p>
                <input type="text" name="title" placeholder="タイトル" value="{{ old('title')}}">
                @error('username')
                    <div class="error"><span>{{ $message }}</span></div>
                @enderror

                <input type="text" name="slug" placeholder="スラッグ" value="{{ old('slug') }}">
                @error('slug')
                    <div class="error"><span>{{ $message }}</span></div>
                @enderror

                <input type="text" name="excerpt" placeholder="要約" value="{{ old('excerpt')}}">
                @error('excerpt')
                    <div class="error"><span>{{ $message }}</span></div>
                @enderror

                <input type="file" name="thumbnail" placeholder="要約" value="{{ old('thumbnail')}}">
                @error('thumbnail')
                    <div class="error"><span>{{ $message }}</span></div>
                @enderror

                <input type="text" name="body" placeholder="内容" value="{{ old('body') }}">
                @error('body')
                    <div class="error"><span>{{ $message }}</span></div>
                @enderror

                <button type="submit" value="send">投稿</button>
        </form>
    </div>
@endsection
