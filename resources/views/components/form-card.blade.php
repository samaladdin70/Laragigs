<div class="container w-100">
    <form {{ $attributes->merge(['action' => '', 'method' => '', 'enctype' => '']) }}
        class="bg-light rounded shadow mx-auto px-4 py-5 my-5" style="max-width: 400px;">
        {{ $slot }}
    </form>
</div>
