<nav class="navbar navbar-expand-lg bg-body-tertiary p-0 sticky-top shadow-sm mb-2">
    <x-flash-message />
    <div class="container-fluid ps-0">
        <a class="m-0" href="{{ route('listings') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="73" height="73"
                class="d-inline-block align-text-top m-0">
        </a>

        <button id="menuIco" class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav align-items-lg-center fs-6 ms-auto p-3 p-lg-0">
                @auth
                    <li class="nav-item fw-bold text-uppercase me-3">
                        Welcome {{ Auth()->user()->name }}
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('manage') }}">
                            <i class="fa-solid fa-screwdriver-wrench"></i>
                            Manage Listings
                        </a>
                    </li>

                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="btn nav-link text-danger" type="submit">
                                <i class="fa-solid fa-door-open"></i>
                                Logout
                            </button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">
                            <i class="fa-solid fa-user-plus" style="vertical-align: middle;"></i>
                            Register
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            <i class="fa-solid fa-arrow-right-to-bracket" style="vertical-align: middle;"></i>
                            Login
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
