<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('アカウントを削除する') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('アカウントを削除すると、全てのデータとファイルが完全に削除されます。アカウントを削除する前に必要なデータがあれば事前にダウンロードの実施をお願いします。') }}
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >{{ __('Delete Account') }}</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="profile" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('アカウントを削除すると、全てのデータとファイルが完全に削除されます。完全にアカウントを削除するためには、確認のために再度パスワードを入力してください。') }}
            </p>

            <div class="mt-6">
                <div class="pt-2">
                    <x-form.label name="現在のパスワード"/>  
                        <input class="border border-gray-200 p-2 w-full rounded"
                            name="account_password"
                            id="account_password"
                            type="password"
                        >
                    <x-form.error name="account_password"/>
                 </div>
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
