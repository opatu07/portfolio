<x-layout>
    <x-setting :heading="'記事を編集する: ' . $post->title">
        <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="py-2">
                <x-form.label name="タイトル"/>  
                    <input class="border border-gray-200 p-2 w-full rounded"
                        name="title"
                        id="title"
                        value="{{ old('title', $post->title) }}"
                    >
                <x-form.error name="title"/>
            </div>

            <div class="py-2">
                <x-form.label name="スラッグ"/>  
                    <input class="border border-gray-200 p-2 w-full rounded"
                        name="slug"
                        id="slug"
                        value="{{ old('slug', $post->slug) }}"
                    >
                <x-form.error name="slug"/>
            </div>

            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.label name="サムネイル"/>  
                        <input class="border border-gray-200 p-2 w-full rounded"
                            name="thumbnail"
                            id="thumbnail"
                            type="file"
                            value="{{ old('thumbnail', $post->thumbnail) }}"
                        >
                    <x-form.error name="thumbnail"/>
                </div>
                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl ml-6" width="100">
            </div>

            <div class="py-2">
                <x-form.label name="要約"/>  
                    <textarea class="border border-gray-200 p-2 w-full rounded"
                        name="excerpt"
                        id="excerpt"
                    >{{ old('excerpt', $post->excerpt) }}</textarea>
                <x-form.error name="excerpt"/>
            </div>

            <div class="py-2">
                <x-form.label name="内容"/>  
                    <textarea class="border border-gray-200 p-2 w-full rounded"
                        name="body"
                        id="body"
                    >{{ old('body', $post->body) }}</textarea>
                <x-form.error name="body"/>
            </div>

            <x-form.field>
                <x-form.label name="カテゴリー"/>

                <select name="category_id" id="category_id" required>
                    @foreach (\App\Models\Category::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}
                        >{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                <x-form.error name="category"/>
            </x-form.field>

            <x-form.button>更新</x-form.button>
        </form>
    </x-setting>
</x-layout>
