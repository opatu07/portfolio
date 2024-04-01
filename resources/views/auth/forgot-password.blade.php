<x-layout>
    <section class="px-6 py-8">
        <main class="w-3/4 mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">パスワードリセット画面</h1>

                <div class="mb-4 text-sm py-2 text-gray-600 dark:text-gray-400">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-form.label name="メールアドレス"/>  
                        <input class="border border-gray-200 p-2 w-full rounded"
                            name="email"
                            id="email"
                            type="email"
                        >
                        <x-form.error name="email"/>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-form.button>
                            {{ __('送信！') }}
                        </x-form.button>
                    </div>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
