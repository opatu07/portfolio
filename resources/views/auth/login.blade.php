<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">ログイン画面</h1>

                <form method="POST" action="/login" class="mt-10">
                    @csrf
                    <!--メールアドレス-->

                    <x-form.label name="メールアドレス"/>  
                        <input class="border border-gray-200 p-2 w-full rounded"
                            name="email"
                            id="email"
                            type="email"
                        >
                    <x-form.error name="email"/>

                    <!--パスワード-->

                    <div class="pt-2">
                        <x-form.label name="パスワード"/>  
                            <input class="border border-gray-200 p-2 w-full rounded"
                                name="password"
                                id="password"
                                type="password"
                            >
                        <x-form.error name="password"/>
                    </div>

                    <x-form.button>ログイン!</x-form.button>
                </form>
                <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('パスワードを忘れてしまった方へ') }}
                            </a>
                        @endif
                </div>
            </x-panel>
        </main>
    </section>
</x-layout>
