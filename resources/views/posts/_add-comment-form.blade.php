@auth
<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10">
        <x-panel>
            <h1 class="text-center font-bold text-xl">コメントする</h1>
            <form method="POST" action="/posts/{{ $post->slug }}/comments">
                @csrf

                <div class="mt-6">
                    <textarea name="body" class="w-full text-sm outline outline-gray-200 focus:outline-orange-300" rows="5" placeholder="自由にコメントしてください。" required></textarea>

                    @error('body')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                    <x-form.button>コメントする</x-form.button>
                </div>
            </form>
        </x-panel>
    </main>
</section>
@else
<p class="font-semibold text-center mb-8">
    この記事にコメントするには<a href="/register" class="hover:underline">ユーザー登録</a> か
    <a href="/login" class="hover:underline">ログイン</a>してください。
</p>
@endauth
