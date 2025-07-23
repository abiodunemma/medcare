<!-- Wrapper: Header + Sidebar + Main -->
<div style="min-height: 100vh; display: flex; flex-direction: column;">

    <!-- Header -->
    <div class="py-2 px-4 d-flex justify-between align-items-center"
         style="background-color: #FFFFFF; border-bottom: 1px solid #BEBEBE;">
        
        <!-- Left Side: Logo + Admin -->
        <div class="d-flex align-items-center gap-3">
            <a href="{{ url('/') }}" class="text-decoration-none text-dark d-flex align-items-center gap-2">
                <img src="{{ asset('images/logo.png') }}" height="40">
                <button class="btn text-uppercase px-3"
                        style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 10px; border-radius: 20px; border: 1px solid #BEBEBE;"
                        onclick="window.location.href='{{ url('/Logout') }}'">
                    Admin
                </button>
            </a>

            <!-- Hamburger for mobile -->
            <button class="d-lg-none border-0 bg-transparent" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
                <i class="fas fa-bars fs-3 text-dark"></i>
            </button>
        </div>

        <!-- Right Side: Logout -->
        <div class="ms-auto d-none d-lg-block">
            <button class="btn btn-primary text-uppercase px-4 me-2"
                    style="font-family: 'Poppins', sans-serif; font-weight: 500; font-size: 16px; border-radius: 30px;"
                    onclick="window.location.href='{{ url('/Logout') }}'">
                Logout
            </button>
        </div>
    </div>

    <!-- Content Area with Sidebar -->
    <div class="d-flex flex-grow-1" style="min-height: calc(100vh - 60px);">

        <!-- Sidebar (Left) -->
        <div style="width: 220px; background-color: #FFFFFF; border-right: 1px solid #BEBEBE;">
            <div class="p-3" style="font-family: 'Poppins', sans-serif;">
              
                <ul class="nav flex-column gap-3">
                    <li class="nav-item">
                      <a href="{{ url('/') }}" class="nav-link text-dark d-flex align-items-center">
    <span><img src="{{ asset('images/dashboard.png') }}" class="me-3" height="20"> </span>
    Dashboard
</a>

                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/doctor') }}" class="nav-link text-dark d-flex align-items-center">
                            <span><img src="{{ asset('images/appointment.png') }}" class="me-3" height="20"> </span>
                            Appointments</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/about') }}" class="nav-link text-dark">
                             <span><img src="{{ asset('images/doctor.png') }}" class="me-3" height="20"> </span>
                            Add Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/contact') }}" class="nav-link text-dark">
                             <span><img src="{{ asset('images/add.png') }}" class="me-3" height="20"> </span>
                            Doctors List</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="flex-grow-1 p-4">
            <h2>9128457095</h2>
            <p>Opay</p>
            <p>transfer sharp </p>
        </div>
    </div>
</div>
