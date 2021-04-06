@extends('master')

@section('header')
    @include('header')
@endsection

@section('main')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
    </section><!-- End Breadcrumbs -->

    <section id="register" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Account</h2>
                <h3>Register <span>Now</span></h3>
            </div>
        </div>

        <div class="offset-lg-4 col-lg-4">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')"/>

            <form method="POST" action="{{ route('register') }}" class="php-form">
                @csrf
                <div class="form-group">
                    <input type="name" class="form-control" name="name" id="name"
                           placeholder="Your Name" data-rule="text"
                           data-msg="Please enter a valid name"/>
                    <div class="validate"></div>
                </div>
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
                <div class="form-group">
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                           placeholder="Confirm Password" data-rule="password"
                           data-msg="Please enter a valid password"/>
                    <div class="validate"></div>
                </div>
                <div class="text-center">
                    <button type="submit">Register</button>
                </div>
            </form>
        </div>
    </section>
@endsection


{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--            <!-- Name -->--}}
{{--            <div>--}}
{{--                <x-label for="name" :value="__('Name')" />--}}

{{--                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Email Address -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <!-- Confirm Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--                <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password_confirmation" required />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}
