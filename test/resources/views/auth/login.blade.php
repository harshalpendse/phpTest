<x-navibar> </x-navibar>
<div class="h-screen bg-gray-100 pt-32">
<div  class='max-w-sm mx-auto my-6 bg-white text-black rounded-lg shadow-md overflow-hidden pl-6 pt-6 px-10 pr-6 mt-4'>
<h2 class="flex justify-center items-center text-2xl  font-bold mb-4">Login</h2>  
   
   
   <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
       

        
            <x-primary-button class="flex justify-center items-center text-2xl my-6 font-bold mb-4">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    </div>
    </div>
    </div>