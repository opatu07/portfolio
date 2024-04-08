<x-layout>
    <x-setting heading="新規投稿">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf

            <div class="py-2">
                <x-form.label name="タイトル"/>  
                    <input class="border border-gray-200 p-2 w-full rounded"
                        name="title"
                        id="title"
                    >
                <x-form.error name="title"/>
            </div>
            <div class="py-2">
                <x-form.label name="スラッグ"/>  
                    <input class="border border-gray-200 p-2 w-full rounded"
                        name="slug"
                        id="slug"
                    >
                <x-form.error name="slug"/>
            </div>
            <div class="py-2">
                <x-form.label name="サムネイル"/>  
                    <input class="border border-gray-200 p-2 w-full rounded"
                        name="thumbnail"
                        id="thumbnail"
                        type="file"
                    >
                <x-form.error name="thumbnail"/>
            </div>
            <div class="py-2">
                <x-form.label name="要約"/>  
                    <textarea class="border border-gray-200 p-2 w-full rounded"
                        name="excerpt"
                        id="excerpt"
                    ></textarea>
                <x-form.error name="excerpt"/>
            </div>
            <div class="py-2">
                <x-form.label name="内容"/>  
                    <textarea class="border border-gray-200 p-2 w-full rounded"
                        name="body"
                        id="body"
                    ></textarea>
                <x-form.error name="body"/>
            </div>

            <x-form.field>
                <x-form.label name="カテゴリー"/>

                <select name="category_id" id="category_id" required>
                    @foreach (\App\Models\Category::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}
                        >{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                <x-form.error name="category"/>
            </x-form.field>

            <x-form.button>投稿</x-form.button>
        </form>
    </x-setting>
</x-layout>
