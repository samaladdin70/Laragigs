@extends('layouts.main')
@section('title')
    Listings
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
    <style>
        a:hover {
            color: #dc3545 !important;
        }

        .active>.page-link,
        .page-link.active,
        .page-link:hover {
            z-index: 0;
        }
    </style>
@endsection
@section('content')
    @include('layouts.sections.nav1')

    @include('layouts.sections.hero')
    @include('layouts.sections.search')
    @include('layouts.sections.posts')

    @include('layouts.sections.footer')
@endsection

@section('script')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
