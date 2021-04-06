@extends('master')

@section('header')
    @include('header')
@endsection

@section('main')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
    </section><!-- End Breadcrumbs -->

    <section id="login" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Account</h2>
                <h3>Log In <span>Now</span></h3>
            </div>
        </div>

        <div class="offset-lg-4 col-lg-4">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')"/>

            <form method="POST" action="{{ route('login') }}" class="php-form">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email"
                           placeholder="Your Email" data-rule="email"
                           data-msg="Please enter a valid email"/>
                    <div class="validate"></div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password"
                           placeholder="Your Password" data-rule="password"
                           data-msg="Please enter a valid password"/>
                    <div class="validate"></div>
                </div>
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                               class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                               name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex float-right mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 mr-2"
                           href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <button type="submit">Log In</button>
                </div>
            </form>
        </div>
    </section>
{{--    <x-guest-layout>--}}
{{--        <x-auth-card>--}}
{{--            <x-slot name="logo">--}}
{{--                <a href="/">--}}
{{--                    <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>--}}
{{--                </a>--}}
{{--            </x-slot>--}}

{{--            <!-- Session Status -->--}}
{{--            <x-auth-session-status class="mb-4" :status="session('status')"/>--}}

{{--            <!-- Validation Errors -->--}}
{{--            <x-auth-validation-errors class="mb-4" :errors="$errors"/>--}}

{{--            <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <!-- Email Address -->--}}
{{--                <div>--}}
{{--                    <x-label for="email" :value="__('Email')"/>--}}

{{--                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"--}}
{{--                             required autofocus/>--}}
{{--                </div>--}}

{{--                <!-- Password -->--}}
{{--                <div class="mt-4">--}}
{{--                    <x-label for="password" :value="__('Password')"/>--}}

{{--                    <x-input id="password" class="block mt-1 w-full"--}}
{{--                             type="password"--}}
{{--                             name="password"--}}
{{--                             required autocomplete="current-password"/>--}}
{{--                </div>--}}

{{--                <!-- Remember Me -->--}}
{{--                <div class="block mt-4">--}}
{{--                    <label for="remember_me" class="inline-flex items-center">--}}
{{--                        <input id="remember_me" type="checkbox"--}}
{{--                               class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"--}}
{{--                               name="remember">--}}
{{--                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                    </label>--}}
{{--                </div>--}}

{{--                <div class="flex items-center justify-end mt-4">--}}
{{--                    @if (Route::has('password.request'))--}}
{{--                        <a class="underline text-sm text-gray-600 hover:text-gray-900"--}}
{{--                           href="{{ route('password.request') }}">--}}
{{--                            {{ __('Forgot your password?') }}--}}
{{--                        </a>--}}
{{--                    @endif--}}

{{--                    <x-button class="ml-3">--}}
{{--                        {{ __('Log in') }}--}}
{{--                    </x-button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </x-auth-card>--}}
{{--    </x-guest-layout>--}}
@endsection
