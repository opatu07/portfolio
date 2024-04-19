<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">パスワード再設定</h1>

                <form method="POST" action="{{ route('password.store') }}" class="mt-10">
                    @csrf

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token">

                    <!-- Email Address -->
                    <div>
                        <x-form.label name="現在のメールアドレス"/>  
                        <input class="border border-gray-200 p-2 w-full rounded"
                            name="email"
                            id="email"
                        >
                        <x-form.error name="email"/>
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-form.label name="新しいパスワード"/>  
                        <input class="border border-gray-200 p-2 w-full rounded"
                            name="new_password"
                            id="new_password"
                            type="password"
                        >
                        <x-form.error name="new_password"/>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-form.label name="パスワードの確認"/>  
                        <input class="border border-gray-200 p-2 w-full rounded"
                            name="new_password_confirmation"
                            id="new_password_confirmation"
                            type="password"
                        >
                        <x-form.error name="new_password_confirmation"/>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-form.button>
                            {{ __('パスワードを再設定') }}
                        </x-form.button>
                    </div>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>
