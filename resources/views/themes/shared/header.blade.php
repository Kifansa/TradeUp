<nav class="navbar navbar-expand-lg bg-light fixed-top py-4 shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Trade<span>Up</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="input-group mx-auto mt-5 mt-lg-0">
                <input type="text" class="form-control" placeholder="Mau cari apa?" aria-label="Mau cari apa?"
                    aria-describedby="button-addon2">
                <button class="btn btn-outline-warning" type="button" id="button-addon2"><i
                        class="bx bx-search"></i></button>
            </div>
            <ul class="navbar-nav ms-auto mt-3 mt-sm-0">
                <!-- mobile menu -->
                <div class="dropdown mt-3 d-lg-none">
                    <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Home</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.index') }}">Category</a></li>
                    </ul>
                </div>

                <!-- Jika sudah login, tampilkan username -->
                @auth
                <li class="nav-item mt-3 mt-lg-0 text-center">
                    <a class="nav-link" href="#">
                        {{ Auth::user()->name }} <!-- Tampilkan nama pengguna -->
                    </a>
                </li>
                <li class="nav-item mt-3 mt-lg-0 text-center">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                <!-- Jika belum login, tampilkan tombol login dan register -->
                @else
                <li class="nav-item mt-5 mt-lg-0 text-center">
                    <a class="nav-link btn-second me-lg-3" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item mt-3 mt-lg-0 text-center">
                    <a class="nav-link btn-first" href="{{ route('register') }}">Register</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
