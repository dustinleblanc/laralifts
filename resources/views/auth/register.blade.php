@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 md:px-8 flex h-screen content-center items-center justify-center">
        <div class="shadow-2xl bg-white border border-gray-300 rounded px-12 py-8">
            <div class="font-hairline text-3xl leading-loose">{{ __('Register') }}</div>
            {!! Form::open(['route' => 'register']) !!}
            {!! Form::control('text', 'name', $errors, [
                'label' => 'Name',
                'placeholder' => 'Tyler Otwell',
            ]) !!}
            {!! Form::control('email', 'email', $errors, [
                'label' => 'E-Mail Address',
                'placeholder' => 'tyler@thereallaravel.com',
            ]) !!}
            {!! Form::control('password', 'password', $errors, [
                'label' => 'Password',
            ]) !!}
            {!! Form::control('password', 'password_confirmation', $errors, [
                'label' => 'Confirm Password',
                'name' => 'password-confirm',
            ]) !!}
            {!! Form::submit('Register') !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
