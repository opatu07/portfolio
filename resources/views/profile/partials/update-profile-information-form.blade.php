<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('プロフィール情報を変更する') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("ユーザーネームとメールアドレスを更新できます。") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="admin/email/verification-notification">
        @csrf
    </form>

    <form method="post" action="/profile" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-form.label name="ユーザーネーム"/>  
                <input class="border border-gray-200 p-2 w-full rounded"
                    name="username"
                    id="username"
                    value="{{ old('username', $user->username) }}"
                >
            <x-form.error name="username"/>
        </div>

        <div>
            <x-form.label name="メールアドレス"/>  
                <input class="border border-gray-200 p-2 w-full rounded"
                    name="email"
                    id="email"
                    value="{{ old('email', $user->email) }}"
                >
            <x-form.error name="email"/>
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-form.button>{{ __('Save') }}</x-form.button>
        </div>
    </form>
</section>
