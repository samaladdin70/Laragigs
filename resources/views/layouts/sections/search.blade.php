<div class="container-fluid mt-2 px-2">
    <form class="d-flex position-relative" role="search" action="{{ route('listings') }}">
        <input id="search" name="search" class="form-control" type="search" placeholder="     Search Laravel Gigs . ."
            aria-label="Search" style="height: 50px;" value="{{ request('search') }}">
        <i class="fa-solid fa-magnifying-glass position-absolute text-secondary top-50 translate-middle"></i>
        <button class="btn btn-danger position-absolute top-50 translate-middle py-0" type="submit"
            style="right: -30px;">Search</button>
    </form>
</div>
