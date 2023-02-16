@extends('layouts.main')

@section('title')
    Listing
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
    <style>
        a:hover {
            color: #dc3545 !important;
        }
    </style>
@endsection

@section('content')
    @include('layouts.sections.nav1')
    <a class="nav-link fw-bold m-0" href="{{ url()->previous() }}" style="margin-top: -5px !important;">
        <div class="px-2">
            <i class="fa-solid fa-arrow-left"></i> Back
        </div>
    </a>
    @include('layouts.sections.hero')
    @include('layouts.sections.search')
    @include('layouts.sections.post')
    @include('layouts.sections.footer')
@endsection

@section('script')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
