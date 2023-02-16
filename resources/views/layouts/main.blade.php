<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js') }}"></script>

    {{-- fontawesome --}}
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.2.1-web/css/all.min.css') }}">
    <title>@yield('title')</title>
    @yield('style')
</head>

<body>

    @yield('content')

    @yield('script')
</body>

</html>
