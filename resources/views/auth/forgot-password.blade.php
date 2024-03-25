<x-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-form.input name="email" type="email" required />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-form.button>
                {{ __('Email Password Reset Link') }}
            </x-form.button>
        </div>
    </form>
</x-layout>
