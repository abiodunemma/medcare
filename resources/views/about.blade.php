@extends('layouts.app')

@section('content')
 <div class="d-flex flex-column min-vh-100">
 <main class="flex-grow-1">

<!-- Now this content will be hidden until spinner finishes -->
@include('header')

 <div class="container">
  <div class="text-center mt-4 mb-5">
  <h1 style="color: #4B5563; font-family: 'Outfit', sans-serif; font-weight: 50;">
    About <span class="fw-bold">Us</span>
  </h1>
</div>

<div class="container mt-0">
  <div class="row">
    <!-- Image Column -->
    <div class="col-md-5 p-0">
      <img src="{{ asset('images/about_1.png') }}" alt="Doctor Image"
           class="img-fluid w-100 rounded"
           style="margin-bottom: 0; height: 100%; object-fit: cover; max-height: 400px;">
    </div>

    <!-- Text Column -->
    <div class="col-md-7 ps-5 d-flex align-items-start"
         style="max-height: 500px; overflow: hidden; font-family: 'Outfit', sans-serif; font-weight: 100; color: #4B5563;">
      <div>
        <p>
          Welcome to <strong>Prescripto</strong>, your trusted partner in managing your healthcare needs conveniently 
          and efficiently.
        </p>
        <p>
          At Prescripto, we understand the challenges individuals face when it comes to scheduling doctor appointments and managing their health records.
        </p>

        <p class="mt-4">
          Prescripto is committed to excellence in healthcare technology. We continuously strive to enhance our platform, integrating the latest advancements to improve user experience and deliver superior service. Whether you're booking your first appointment or managing ongoing care, Prescripto is here to support you every step of the way.
        </p>

        <p class="mt-4" style="font-weight: 500; font-size: 20px;">Our Vision</p>
        <p>
          Our vision at Prescripto is to create a seamless healthcare experience for every user. We aim to bridge the gap between patients and healthcare providers, making it easier for you to access the care you need, when you need it.
        </p>
      </div>
    </div>
  </div>
</div>

 <div class=" mt-5 mb-5">
  <h1 style="color: #4B5563; font-family: 'Outfit', sans-serif; font-weight: 50;">
    Why  <span class="fw-bold">Choose Us</span>
  </h1>
</div>
<div class="container my-5 " style="margin-bottom: 60%">
  <div class="row border  rounded p-4" style=" min-height: 250px; border-color: #B4B4B4; margin-bottom: 40%">
    
    <!-- Column 1 -->
    <div class="col-sm-4 border-end d-flex flex-column justify-content-center" style="min-height: 100%;">
      <div class="fw-bold ms-3 mb-4" style="font-family: 'Outfit', sans-serif; color: #1F2937;">
        Efficiency:
      </div>
      <p class="ms-3 style="font-family: 'Outfit', sans-serif; color: #4B5563;">
       Streamlined appointment scheduling that fits into your busy lifestyle.
      </p>
    </div>

    <!-- Column 2 -->
    <div class="col-sm-4 border-end d-flex flex-column justify-content-center" style="min-height: 100%;">
      <div class="fw-bold ms-3 mb-4" style="font-family: 'Outfit', sans-serif; color: #1F2937;">
       Convenience:
      </div>
      <p class="ms-3" style="font-family: 'Outfit', sans-serif; color: #4B5563;">
       Access to a network of trusted healthcare professionals in your area.
      </p>
    </div>

    <!-- Column 3 -->
    <div class="col-sm-4 d-flex flex-column justify-content-center" style="min-height: 100%;">
      <div class="fw-bold ms-3 mb-4" style="font-family: 'Outfit', sans-serif; color: #1F2937;">
        Reliability:
      </div>
      <p  clas="ms-3  " style="font-family: 'Outfit', sans-serif; color: #4B5563;" >
       Tailored recommendations and reminders to help you stay on top of your health.
      </p>
    </div>

  </div>
</div>

 @include('footer')

</div>


   </main>
 
<!-- Footer -->


</div>


@endsection
