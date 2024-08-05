<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
           <img src="frontend/img/logo.png">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" style="border: 1px solid gray; transition: border-color 0.2s; outline: none;" onfocus="this.style.borderColor='#ff7e00'; this.style.boxShadow='0 0 0 1px #ff7e00';" onblur="this.style.borderColor='gray'; this.style.boxShadow='none';" />
            </div>
            

            <div class="flex items-center justify-end mt-4">
                <x-button style="background-color: darkorange">
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
