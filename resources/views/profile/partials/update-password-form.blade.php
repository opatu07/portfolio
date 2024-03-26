<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('パスワードを更新する') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('アカウントのセキュリティを高めるために、パスワードを強力なものにしてください。') }}
        </p>
    </header>

    <form method="post" action="password" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <div>
            <x-form.label name="現在のパスワード"/>  
                <input class="border border-gray-200 p-2 w-full rounded"
                    name="current_password"
                    id="current_password"
                    type="password"
                >
            <x-form.error name="current_password"/>
        </div>

        <div>
            <x-form.label name="新しいパスワード"/>  
                <input class="border border-gray-200 p-2 w-full rounded"
                    name="password"
                    id="password"
                    type="password"
                >
            <x-form.error name="password"/>
        </div>

        <div>
            <x-form.label name="パスワードの確認"/>  
                <input class="border border-gray-200 p-2 w-full rounded"
                    name="password_confirmation"
                    id="password_confirmation"
                    type="password"
                >
            <x-form.error name="password_confirmation"/>
        </div>

        <div class="flex items-center gap-4">
            <x-form.button>{{ __('Save') }}</x-form.button>
        </div>
    </form>
</section>
