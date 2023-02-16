@if (session()->has('message'))
    <div id="flashMessage" class=" position-fixed top-0 d-flex justify-content-center w-100">
        <p class="alert alert-danger">
            {{ session('message') }}
        </p>
    </div>
@endif
