<div class="py-2 px-4 d-flex justify-content-between align-items-center bg-white border-bottom">
    <div class="d-flex align-items-center gap-3">
        <a href="{{ url('/') }}" class="text-dark text-decoration-none d-flex align-items-center gap-2">
            <img src="{{ asset('images/logo.png') }}" height="40">
            <button class="btn text-uppercase px-3 btn-sm border"
                    style="border-radius: 20px;"
                    onclick="window.location.href='{{ url('/Logout') }}'">
                Admin
            </button>
        </a>

        <!-- Mobile Menu Button -->
        <button class="d-lg-none border-0 bg-transparent" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
            <i class="fas fa-bars fs-3 text-dark"></i>
        </button>
    </div>

    <!-- Logout -->
    <div class="d-none d-lg-block">
        <button class="btn btn-primary text-uppercase px-4"
                style="border-radius: 30px;"
                onclick="window.location.href='{{ url('/Logout') }}'">
            Logout
        </button>
    </div>
</div>
