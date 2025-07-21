

<!-- Header Start -->
<div class="container-fluid bg-whit py-3">
    <div class="container">
       <div class="d-flex justify-between align-items-center w-full">
    <!-- Logo and Hamburger in one flex row -->
    <div class="d-flex align-items-center gap-3">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="text-decoration-none text-dark">
            <img src="{{ asset('images/logo.png') }}" height="40">
        </a>

        <!-- Hamburger Button -->
        <button class="d-lg-none border-0 bg-transparent" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
            <i class="fas fa-bars fs-3 text-dark"></i>
        </button>
    </div>

            <!-- Main Navigation (Desktop) -->
            <ul class="nav text-uppercase d-none d-lg-flex mx-auto gap-4"
                style="font-family: 'Poppins', sans-serif; font-weight: 300; font-size: 16px;">
                <li class="nav-item">
                    <a class="nav-link text-dark {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ request()->is('doctor') ? 'active' : '' }}" href="{{ url('/doctor') }}">All Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark {{ request()->is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>
                </li>
            </ul>

            <!-- Contact Button (always visible on large) -->
            <div class="d-none d-lg-block">
             xzfz


</div>


            </div>
        </div>

        <!-- Divider Line -->
        <hr class="border opacity-60 mt-3" style="background-color: #ADADAD; height: 1px;">
    </div>
</div>

<!-- Offcanvas Sidebar (Mobile Menu) -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu"
     style="max-width: 250px; background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px); border-right: 1px solid #ccc;">
    
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title fw-semibold" style="font-family: 'Poppins', sans-serif;">Prescripto</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body px-3 pt-3">
        <ul class="nav flex-column gap-3" style="font-family: 'Outfit', sans-serif; font-size: 16px;">
            <li class="nav-item">
                <a href="{{ url('/about') }}" class="nav-link text-dark d-flex align-items-center gap-2">
                    <i class="fas fa-home"></i> Home
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/services') }}" class="nav-link text-dark d-flex align-items-center gap-2">
                    <i class="fas fa-user-md"></i> All Doctors
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/blog') }}" class="nav-link text-dark d-flex align-items-center gap-2">
                    <i class="fas fa-book"></i> About
                </a>
            </li>
          
        </ul>

        <div class="mt-4">
          
            stst
        </div>
    </div>
</div>

<!-- Header End -->
