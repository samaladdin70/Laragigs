@props(['tags'])

@php
    //$tags_str = $listing['tags'];
    $tags = explode(', ', $tags);
@endphp
<h6>

    @foreach ($tags as $tag)
        <a href="{{ route('listings') }}/?tag={{ $tag }}" class=" text-decoration-none">
            <span class="badge bg-dark mt-2">
                {{ $tag }}
            </span>
        </a>
    @endforeach

</h6>
