<div style="width: 220px; background-color: #FFFFFF; border-right: 1px solid #BEBEBE;">
    <div class="p-3">
        <ul class="nav flex-column gap-3">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link text-dark d-flex align-items-center">
                    <img src="{{ asset('images/dashboard.png') }}" class="me-3" height="20">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/doctor') }}" class="nav-link text-dark d-flex align-items-center">
                    <img src="{{ asset('images/appointment.png') }}" class="me-3" height="20">
                    Appointments
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/about') }}" class="nav-link text-dark d-flex align-items-center">
                    <img src="{{ asset('images/doctor.png') }}" class="me-3" height="20">
                    Add Doctor
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/contact') }}" class="nav-link text-dark d-flex align-items-center">
                    <img src="{{ asset('images/add.png') }}" class="me-3" height="20">
                    Doctors List
                </a>
            </li>
        </ul>
    </div>
</div>
