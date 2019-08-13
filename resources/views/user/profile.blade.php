@extends('layouts.app')
@section('content')
    <div class="container mx-auto pt-16">
        <h1 class="text-3xl text-black">{{ $user->name }}</h1>
        @if(Auth::user()->id === $user->id)
            <a href="{{ route('edit user', ['user' => $user]) }}">Edit</a>
        @endif
    </div>
@endsection
