<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="password" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <div>
            <x-form.input name="current_password"  required/>
        </div>

        <div>
            <x-form.input name="password"  required/>
        </div>

        <div>
            <x-form.input  name="password_confirmation"  required/>
        </div>

        <div class="flex items-center gap-4">
            <x-form.button>{{ __('Save') }}</x-form.button>
        </div>
    </form>
</section>
