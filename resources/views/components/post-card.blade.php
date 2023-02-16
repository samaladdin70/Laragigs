@props(['listing'])
<div class="col-12 p-2 position-relative">
    <div class="rounded shadow w-100 p-2 d-flex flex-column align-items-center"
        style="background-color: rgb(237, 236, 236); overflow:hidden;">
        <div class="d-md-flex d-lg-flex justify-content-center align-items-center me-3 ms-1" style="width: 17%;">
            <img class="d-md-inline-block d-lg-inline-block h-75 w-100"
                src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}"
                alt="">
        </div>

        <div class="flex-grow-1 text-center w-100">
            <a class="nav-link" href="{{ route('listing', $listing['id']) }}">
                <h3 title="{{ $listing['tags'] }}">
                    {{ $listing['title'] }}
                </h3>
            </a>

            <h5><b>{{ $listing->company }}</b></h5>

            <x-tags-card :tags="$listing->tags" />

            <h6><i class="fa-solid fa-location-dot"></i> {{ $listing->location }}</h6>
            <hr>
            <h2><b>Job Description</b></h2>
            <p class="px-5">
                {{ $listing['description'] }}
            </p>
            <p class="px-5">
                <a class="btn btn-danger form-control" href="mailto:{{ $listing['email'] }}">
                    <i class="fa-solid fa-envelope"></i> Contact Employer
                </a>
            </p>
            <p class="px-5" style="margin-top: -20px;">
                <a class="btn btn-dark form-control mt-3" href="{{ $listing['website'] }}">
                    <i class="fa-solid fa-globe"></i> Visit Our Websit
                </a>
            </p>
        </div>

    </div>
    {{--     <div class="mt-3 px-4 d-flex align-items-center position-absolute top-0 end-0">
        <a class="me-3" href="{{ route('edit', $listing->id) }}" title="update">
            <i class="fa-solid fa-pencil"></i>
        </a>
        |

        <button class="btn ms-1" type="btn" title="delete" data-bs-toggle="modal" data-bs-target="#delModal">
            <i class="fa-solid fa-trash text-danger"></i>
        </button>

    </div>
    <x-modal :listing="$listing" /> --}}
</div>
