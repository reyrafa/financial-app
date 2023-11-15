<x-guest-layout>
    <div class="h-screen md:flex sm:items-center">
       
        <div class=" bg-yellow-400 rounded shadow-xl text-center py-3 w-full px-3  md:w-1/4 md:mx-auto">
        

            <div class=" text-xl mb-2">Login</div>
            <x-validation-errors class="mb-4" />
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <div>
                    <x-label for="company_id" class="md:text-start" value="{{ __('Company ID') }}" />
                    <x-input id="company_id" class="block mt-1 w-full" type="number" name="company_id" :value="old('company_id')" required autofocus autocomplete="username" />
                </div>
    
                <div class="mt-4">
                    <x-label for="password" class="md:text-start" value="{{ __('Password') }}" />
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                </div>
    
    
                <div class="flex items-center justify-end mt-4">
                 
    
                    <x-button class="ml-4">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
        </div>
        
    </div>

    {{-- <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card> --}}
</x-guest-layout>
