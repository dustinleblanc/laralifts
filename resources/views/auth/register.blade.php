@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 clearfix">
        <div class="shadow-lg bg-white border border-gray-300 rounded px-12 py-8 w-1/2 mx-auto">
            <div class="font-hairline text-3xl leading-loose mb-8">{{ __('Register') }}</div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                @include('partials.forms.input', ['id' => 'name', 'label' => 'Name', 'type' => 'text', 'required' => true])
                @include('partials.forms.input', ['id' => 'email', 'label' => 'E-Mail Address', 'type' => 'email', 'required' => true])
                @include('partials.forms.input', ['id' => 'password', 'label' => 'Password', 'type' => 'password', 'required' => true])
                @include('partials.forms.input', ['id' => 'password-confirm', 'label' => 'Confirm Password', 'type' => 'password', 'name' => 'password_confirmation', 'autocomplete' => 'new-password', 'required' => true])
                <div class="py-4">
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-500 text-white px-6 py-2 rounded-full">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
