<x-card>
    @if (count($listings) != 0)
        @foreach ($listings as $listing)
            <x-posts-card :listing="$listing" />
        @endforeach
    @else
        <p>No listings found</p>
    @endif
    <div class="px-3 mt-3">
        {{ $listings->links() }}
    </div>
</x-card>
