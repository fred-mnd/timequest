@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-navbar-bg flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-6 text-center text-3xl font-display font-bold text-logo-gold">
            Sign in to TimeQuest
        </h2>
        <p class="mt-2 text-center text-sm text-subheading-gold">
            Discover Timeless Elegance
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-black bg-opacity-50 py-8 px-4 shadow sm:rounded-lg sm:px-10 border border-logo-gold/30">
            <form class="space-y-6" action="{{ route('login') }}" method="POST">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-subheading-gold">
                        Email address
                    </label>
                    <div class="mt-1">
                        <input id="email" name="email" type="email" autocomplete="email" required 
                               class="appearance-none block w-full px-3 py-2 border border-logo-gold bg-black bg-opacity-50 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-logo-gold focus:border-logo-gold sm:text-sm text-menu-text">
                    </div>
                    @error('email')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-subheading-gold">
                        Password
                    </label>
                    <div class="mt-1">
                        <input id="password" name="password" type="password" autocomplete="current-password" required 
                               class="appearance-none block w-full px-3 py-2 border border-logo-gold bg-black bg-opacity-50 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-logo-gold focus:border-logo-gold sm:text-sm text-menu-text">
                    </div>
                    @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox" 
                               class="h-4 w-4 text-logo-gold focus:ring-logo-gold border-logo-gold rounded">
                        <label for="remember_me" class="ml-2 block text-sm text-subheading-gold">
                            Remember me
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="{{ route('password.request') }}" class="font-medium text-logo-gold hover:text-subheading-gold">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div>
                    <button type="submit" 
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-button-text bg-logo-gold hover:bg-subheading-gold focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-logo-gold">
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection