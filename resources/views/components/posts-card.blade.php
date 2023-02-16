@props(['listing'])
<div class="col-sm-12 col-md-6 p-2">
    <div class="rounded shadow w-100 h-100 p-2 d-flex " style="background-color: rgb(237, 236, 236); overflow:hidden;">
        <div class="d-none d-md-flex d-lg-flex justify-content-center align-items-center me-3 ms-1 w-25">
            <img class="d-sm-none d-md-inline-block d-lg-inline-block h-75 w-100"
                src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}"
                alt="">
        </div>

        <div class="flex-grow-1">
            <a class="nav-link" href="{{ route('listing', $listing['id']) }}">
                <h4 title="{{ $listing['tags'] }}">{{ $listing['title'] }}</h4>
            </a>

            <x-tags-card :tags="$listing->tags" />

            <h6><i class="fa-solid fa-location-dot"></i> {{ $listing->location }}</h6>
        </div>
    </div>
</div>
