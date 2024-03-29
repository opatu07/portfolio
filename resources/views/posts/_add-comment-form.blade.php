@auth
    <div class="mb-8">
        <x-panel>
            <form method="POST" action="/posts/{{ $post->slug }}/comments">
                @csrf

                <header class="flex items-center">
                    <h2 class="ml-4">コメントを作成</h2>
                </header>

                <div class="mt-6">
                    <textarea
                        name="body"
                        class="w-full text-sm focus:outline-none focus:ring"
                        rows="5"
                        placeholder="自由にコメントしてください。"
                        required></textarea>

                    @error('body')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                    <x-form.button>コメントする</x-form.button>
                </div>
            </form>
        </x-panel>
    </div>
@else
    <p class="font-semibold text-center mb-8">
        この記事にコメントするには<a href="/register" class="hover:text-orange-600 text-orange-500">ユーザー登録</a> か
        <a href="/login" class="hover:underline text-orange-500 hover:text-orange-600">ログイン</a>してください。
    </p>
@endauth
