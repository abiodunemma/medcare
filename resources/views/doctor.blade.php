@extends('layouts.app')

@section('content')
 <div class="d-flex flex-column min-vh-100">
 <main class="flex-grow-1">

<!-- Now this content will be hidden until spinner finishes -->
@include('header')

 
<div class="container mt-2 ">
  <div class="row justify-content-center   " >
    <!-- Smaller Box -->
  <div class="col-md-4 p-0 border rounded overflow-hidden" style="background-color: #5F6FFF;">
  <img src="{{ asset('images/new.png') }}" alt="Doctor Image" class="img-fluid w-100 d-block wow animate__animated animate__fadeInLeft" data-wow-delay=".1s" style="margin-bottom: 0;">
</div>

    <!-- Small Space -->
    <div class="col-md-1 d-none d-md-block"></div>

    <!-- Bigger Box -->
    <div class="col-md-7 bg-light p-4 border rounded wow animate__animated animate__fadeInRight" data-wow-delay=".1s" >
    <h2 class="mb-2 d-flex align-items-center gap-2">
    Dr. Richard James
    <span class="badge  d-flex align-items-center" style="padding: 4px 10px;">
      <img src="{{ asset('images/Vector.png') }}" alt="Verified" class="img-fluid" style="width: 20px; height: 20px;">
    </span>
  </h2>

 <p class="mb-2" style="font-family: 'Outfit', sans-serif; font-weight: 500; color: #4B5563;">
  MBBS - General Physician 
  <span class="border border-1 rounded-pill px-3 py-1 text-dark d-inline-block" style="border-color: #4B5563;">
    2 Years
  </span>
</p>

    <p class="fw-semibold"> About
      <span><img src="{{ asset ('images/about.png') }}" alt= "about" class="img-fluid" style="width: 15px; height: 15px;" </span> 
    </p>
    <p  style="font-family: 'Outfit', sans-serif; font-weight: 100; color: #4B5563;">Dr. Davis has a strong commitment to delivering comprehensive medical care, 
      focusing on preventive medicine, early diagnosis, and effective treatment strategies.
       Dr. Davis has a strong commitment to delivering comprehensive medical care, focusing on preventive medicine,
        early diagnosis, and effective 
treatment strategies.
    </p>
   <p  style="font-family: 'Outfit', sans-serif; font-weight: 200; color: #4B5563;">Appointment fee: <span class="fw-bold">$50</span></p>

    </div>
  </div>

</div>

<div class="container  mt-4" >
 <h4 class="text-center wow animate__animated animate__fadeInDown" data-wow-delay=".2s" style="animation-delay: 1.2s;" style="font-family: 'Outfit', sans-serif; font-weight: 200; color: #4B5563; "> Booking slots </h4>
</div>

<!-- Booking Slots Row -->

<div class="container mt-4 wow animate__animated animate__fadeInDown" data-wow-delay=".2s" style="animation-delay: 1.2s;">
  <div class="row">
    <!-- Full width row -->
    <div class="col-12">
      <div class="d-flex flex-wrap" style="margin-left: 40%;">
        <!-- MON (Active/Highlighted) -->
        <div class="border border-1  text-center shadow-sm me-2"
             style="padding: 16px 0; width: 55px; font-weight: 300; font-family: 'Outfit', sans-serif; border-radius: 90px; background-color: #5F6FFF; color: white;">
          MON
          <p class="mb-0" >10</p>
        </div>

        <!-- TUE -->
        <div class="border border-1  text-center shadow-sm me-2"
             style="padding: 16px 0; width: 55px; font-weight: 500; font-family: 'Outfit', sans-serif; border-radius: 90px; ">
          TUE
            <p class="mb-0" >11</p>
        </div>

        <!-- WED -->
        <div class="border border-1 text-center shadow-sm me-2"
             style="padding: 16px 0; width: 55px; font-weight: 500; font-family: 'Outfit', sans-serif; border-radius: 90px; ">
          WED
            <p class="mb-0" >12</p>
        </div>

        <!-- THU -->
        <div class="border border-1  text-center shadow-sm me-2"
             style="padding: 16px 0; width: 55px; font-weight: 500; font-family: 'Outfit', sans-serif; border-radius: 90px; ">
          THU
            <p class="mb-0" >13</p>
        </div>

        <!-- FRI -->
        <div class="border border-1 text-center shadow-sm me-2"
             style="padding: 16px 0; width: 55px; font-weight: 500; font-family: 'Outfit', sans-serif; border-radius: 90px;">
          FRI
            <p class="mb-0" >14</p>
        </div>

        <!-- SAT -->
        <div class="border border-1  text-center shadow-sm"
             style="padding: 16px 0; width: 55px; font-weight: 500; font-family: 'Outfit', sans-serif; border-radius: 90px;  ">
          SAT
            <p class="mb-0" >15</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Booking Slots time -->  
<div class="container mt-4 wow animate__animated animate__fadeInUp" data-wow-delay=".2s" style="animation-delay: 1.2s;"">
  <div class="row">
    <div class="col-12">
      <!-- Align to the left but start from center-left area -->
      <div class="d-flex flex-wrap" style="margin-left: 40%;">
        <!-- Slot 1 -->
        <div class="border border-1 text-center shadow-sm me-2"
             style="padding: 6px 0; width: 100px; font-weight: 500; font-family: 'Outfit', sans-serif; border-radius: 90px;">
          10:00 AM
        </div>

        <!-- Slot 2 -->
        <div class="border border-1 text-center shadow-sm me-2"
             style="padding: 6px 0; width: 100px; font-weight: 500; font-family: 'Outfit', sans-serif; border-radius: 90px; background-color: #5F6FFF; color: white;">
          11:00 AM
        </div>

        <!-- Slot 3 -->
        <div class="border border-1 text-center shadow-sm me-2"
             style="padding: 6px 0; width: 100px; font-weight: 500; font-family: 'Outfit', sans-serif; border-radius: 90px;">
          12:00 PM
        </div>

        <!-- Slot 4 -->
        <div class="border border-1 text-center shadow-sm me-2"
             style="padding: 6px 0; width: 100px; font-weight: 500; font-family: 'Outfit', sans-serif; border-radius: 90px;">
          01:00 PM
        </div>

        <!-- Slot 5 -->
        <div class="border border-1 text-center shadow-sm"
             style="padding: 6px 0; width: 100px; font-weight: 500; font-family: 'Outfit', sans-serif; border-radius: 90px;">
          02:00 PM
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-4 mb-5 wow animate__animated animate__fadeInUp" data-wow-delay=".2s" style="animation-delay: 1.2s;">
  <div class="d-flex justify-content-start">
    <div style="margin-left: 40%;">
      <button class="btn btn-primary"
        style="font-family: 'Outfit', sans-serif; font-weight: 500; background-color: #5F6FFF; border-color: #5F6FFF; border-radius: 90px; width: 200px;">
        Book Appointment
      </button>
    </div>
  </div>
</div>


<div class="container ">
    <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="mb-4 wow animate__animated animate__bounceIn" data-wow-delay=".1s" style="font-family: 'Outfit', sans-serif; font-weight: 300;">
  Related Doctors
</h2>

            <p class="mb-1 wow animate__animated animate__fadeInLeft" data-wow-delay=".1s" style="font-family: 'Poppins', sans-serif; font-weight: 300; font-size: 16px;">
               Simply browse through our extensive list of trusted doctors.
            </p>
         
        </div>
    </div>
 
    <div class="container mt-4 ">
            <a href="{{ url('/details') }}" class="text-decoration-none">
    <div class="row">

        <!-- Card 1 -->
       <div class="col-md-3 wow animate__animated animate__fadeInLeft " style="margin-bottom: 60%">
    <div class="card  shadow-md hover-effect" style="height: 320px; border-radius: 12px; overflow: hidden;">
        
        <!-- Top image section with background color -->
        <div  style="background-color: #EAEFFF; padding: 20px; text-align: center;">
    
            <img src="{{ asset('images/dov2.png') }}" class="card-img-top" alt="Doctor Image"
                 style="border-radius: 12px; max-height: 150px; width: auto;">

        </div>

        <!-- Bottom text section with white background -->
        <div style="background-color: white; padding: 16px;">
            <!-- Available indicator -->
            <p style="margin: 0; color: #0FBF00; font-family: 'Outfit', sans-serif; display: flex; align-items: center; gap: 6px;">
                <span style="display: inline-block; width: 8px; height: 8px; background-color: #0FBF00; border-radius: 50%;"></span>
                Available
            </p>

            <!-- Doctor name -->
            <p style="margin: 4px 0 0 0; color: #1F2937; font-family: 'Outfit', sans-serif; font-weight: 400; font-size: 16px;">
                Dr. Richard James
            </p>

            <!-- Job title -->
            <p style="margin: 0; color: #4B5563; font-family: 'Outfit', sans-serif; font-size: 14px;">
                General Physician
            </p>
        </div>

    </div>

        </div>

        <!-- Card 2 -->
        <div class="col-md-3 mb-4 wow animate__animated animate__fadeInLeft" data-wow-delay=".1s">
            <div class="card  shadow-md hover-effect" style="height: 320px; border-radius: 12px; overflow: hidden;">
        
        <!-- Top image section with background color -->
        <div style="background-color: #EAEFFF; padding: 20px; text-align: center;">
            <img src="{{ asset('images/dov3.png') }}" class="card-img-top" alt="Doctor Image"
                 style="border-radius: 12px; max-height: 150px; width: auto;">
        </div>

        <!-- Bottom text section with white background -->
        <div style="background-color: white; padding: 16px;">
            <!-- Available indicator -->
            <p style="margin: 0; color: #0FBF00; font-family: 'Outfit', sans-serif; display: flex; align-items: center; gap: 6px;">
                <span style="display: inline-block; width: 8px; height: 8px; background-color: #0FBF00; border-radius: 50%;"></span>
                Available
            </p>

            <!-- Doctor name -->
            <p style="margin: 4px 0 0 0; color: #1F2937; font-family: 'Outfit', sans-serif; font-weight: 400; font-size: 16px;">
                Dr. Richard James
            </p>

            <!-- Job title -->
            <p style="margin: 0; color: #4B5563; font-family: 'Outfit', sans-serif; font-size: 14px;">
                General Physician
            </p>
        </div>

    </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-3 mb-4 wow animate__animated animate__fadeInRight" data-wow-delay=".1s">
             <div class="card  shadow-md hover-effect" style="height: 320px; border-radius: 12px; overflow: hidden;">
        
        <!-- Top image section with background color -->
        <div style="background-color: #EAEFFF; padding: 20px; text-align: center;">
            <img src="{{ asset('images/dov4.png') }}" class="card-img-top" alt="Doctor Image"
                 style="border-radius: 12px; max-height: 150px; width: auto;">
        </div>

        <!-- Bottom text section with white background -->
        <div style="background-color: white; padding: 16px;">
            <!-- Available indicator -->
            <p style="margin: 0; color: #0FBF00; font-family: 'Outfit', sans-serif; display: flex; align-items: center; gap: 6px;">
                <span style="display: inline-block; width: 8px; height: 8px; background-color: #0FBF00; border-radius: 50%;"></span>
                Available
            </p>

            <!-- Doctor name -->
            <p style="margin: 4px 0 0 0; color: #1F2937; font-family: 'Outfit', sans-serif; font-weight: 400; font-size: 16px;">
                Dr. Richard James
            </p>

            <!-- Job title -->
            <p style="margin: 0; color: #4B5563; font-family: 'Outfit', sans-serif; font-size: 14px;">
                General Physician
            </p>
        </div>

    </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-3 mb-4 wow animate__animated animate__zoomIn" 
     data-wow-delay=".3s" 
     data-wow-duration="1.2s">
            <div class="card  shadow-md hover-effect" style="height: 320px; border-radius: 12px; overflow: hidden;">
        
        <!-- Top image section with background color -->
        <div style="background-color: #EAEFFF; padding: 20px; text-align: center;">
            <img src="{{ asset('images/dov1.png') }}" class="card-img-top" alt="Doctor Image"
                 style="border-radius: 12px; max-height: 150px; width: auto;">
        </div>

        <!-- Bottom text section with white background -->
        <div style="background-color: white; padding: 16px;">
            <!-- Available indicator -->
            <p style="margin: 0; color: #0FBF00; font-family: 'Outfit', sans-serif; display: flex; align-items: center; gap: 6px;">
                <span style="display: inline-block; width: 8px; height: 8px; background-color: #0FBF00; border-radius: 50%;"></span>
                Available
            </p>

            <!-- Doctor name -->
            <p style="margin: 4px 0 0 0; color: #1F2937; font-family: 'Outfit', sans-serif; font-weight: 400; font-size: 16px;">
                Dr. Richard James
            </p>

            <!-- Job title -->
            <p style="margin: 0; color: #4B5563; font-family: 'Outfit', sans-serif; font-size: 14px;">
                General Physician
            </p>
        </div>

    </div>
        </div>
    </div>
            </a>
    </div>
      @include('footer')
</div>

  </main>



  </div>
</div>


<!-- Footer -->


@endsection
