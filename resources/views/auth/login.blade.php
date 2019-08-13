@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 md:px-8 flex h-screen content-center items-center justify-center">
    <div class="shadow-2xl flex flex-col bg-white border border-gray-300 rounded px-12 py-8 mx-auto ">
        <div class="font-hairline text-3xl leading-loose">{{ __('Login') }}</div>
        {!! Form::open(['route' => 'login'], ) !!}
            {!! Form::control('email', 'email', $errors, [
                'label' => 'E-Mail Address',
                'placeholder' => 'tyler@thereallaravel.com'
            ]) !!}
            {!! Form::control('password', 'password', $errors, [
                'label' => 'Password'
            ]) !!}
            <div class="mb-2">
                {!! Form::control('checkbox', 'remember', $errors, [
                    'label' => 'Remember Me'
                ]) !!}
            </div>
            {!! Form::submit('Sign in') !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection
