@extends('layouts.main')

@section('style')
    <style>
        .form-control::placeholder {
            color: rgb(165, 165, 165);
        }

        a:hover {
            color: #dc3545 !important;
        }
    </style>
@endsection

@section('content')
    <x-form-card action="{{ route('authenticate') }}" method="POST">
        @csrf
        <h4 class="text-end"><b>Login</b></h4>
        <x-login-form-fields />
    </x-form-card>
@endsection
