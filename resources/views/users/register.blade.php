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
    <x-form-card action="{{ route('storeUser') }}" method="POST">
        @csrf
        <h4 class="text-center"><b>REGISTER NEW USER</b></h4>
        <x-register-form-fields />
    </x-form-card>
@endsection
