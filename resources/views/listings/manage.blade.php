@extends('layouts.main')

@section('title')
    manage
@endsection

@section('style')
    <style>
        td {
            height: 50px;
            line-height: 50px;
        }

        .edidel>a>i {
            vertical-align: middle;
        }

        @media (max-width:992px) {
            .table {
                width: 100% !important;
            }
        }

        @media (max-width:664px) {
            .edidel {
                width: 40%;
            }

            .edidel,
            .edidel i {
                font-size: .8rem;
            }
        }
    </style>
@endsection


@section('content')
    @include('layouts.sections.nav1')
    @php
        //$listings = array_reverse($listings, true);
    @endphp
    <x-card class="mt-5 p-5">
        <h3 class="fw-bold text-center">MANAGE GIGS</h3>
        <table class="table table-striped w-75 mt-3 mx-auto shadow rounded">
            <tbody>
                @if (count($listings) != 0)
                    @foreach ($listings as $listing)
                        <tr>
                            <td class="fw-bold">
                                <img src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}"
                                    style="width: 40px; height:35px;">
                                {{ $listing->title }} &nbsp <span class="text-info">[COMPANY:
                                    {{ $listing->company }}]</span>
                            </td>
                            <td class="edidel">
                                <a class="me-3 text-decoration-none" href="{{ route('edit', $listing->id) }}" title="update">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                |
                                <button class="btn ms-1" type="btn" title="delete" data-bs-toggle="modal"
                                    data-bs-target="#delModal">
                                    <i class="fa-solid fa-trash text-danger"></i>
                                </button>
                            </td>
                        </tr>
                        <x-modal :listing="$listing" />
                    @endforeach
                @else
                    <tr>
                        <td class="fw-bold text-center">
                            <p>No Listings Found</p>
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </x-card>
    @include('layouts.sections.footer')
@endsection

@section('script')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
