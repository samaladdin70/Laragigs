@extends('layouts.main')

@section('title')
    test
@endsection

@section('style')
    <style>
        .form-control:focus {
            box-shadow: none;
            box-shadow: 0 0 3px 1px gray;
            border: none;
        }

        #search::placeholder {
            color: gray;
        }

        #search+i {
            left: 20px;
            opacity: .7
        }

        #search+i:hover {
            cursor: text;
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
    <script>
        document.querySelector('#search').oninput = () => {
            if (document.querySelector('#search').value != '') {
                document.querySelector('#search+i').style.display = 'none';
            } else {
                document.querySelector('#search+i').style.display = 'inline';
            }
        };

        document.querySelector('#search+i').onclick = () => {
            document.querySelector('#search').focus();
        };
    </script>
@endsection
