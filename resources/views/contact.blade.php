@extends('layouts.app')

@section('content')
 <div class="d-flex flex-column min-vh-100">
 <main class="flex-grow-1">

<!-- Now this content will be hidden until spinner finishes -->
@include('header')

 <div class="container">
  <div class="text-center mt-4 mb-5">
  <h1 style="color: #4B5563; font-family: 'Outfit', sans-serif; font-weight: 50;">
    CONTACT  <span class="fw-bold">Us</span>
  </h1>
</div>


<div class="container mt-0">
  <div class="row">
    <!-- Image Column -->
    <div class="col-md-5 p-0">
      <img src="{{ asset('images/attend.png') }}" alt="Doctor Image"
           class="img-fluid w-100 rounded"
           style="margin-bottom: 0; height: 100%; object-fit: cover; max-height: 400px;">
    </div>

    <!-- Text Column -->
    <div class="col-md-7 ps-5 d-flex align-items-start"
         style="max-height: 500px; overflow: hidden; font-family: 'Outfit', sans-serif; font-weight: 100; color: #4B5563;">
      <div>
        <p class="mt-4" style="font-weight: 500; font-size: 20px;">OUR OFFICE</p>

        <!-- Address and Contact Information -->

<p class="mb-0"  style="color: #4B5563">54709 Willms Station</p>
<p class="mt-0 mb-4" style="color: #4B5563">Suite 350, Washington, USA</p>

   <!-- Address and Contact Information -->
<p class="mb-0"  style="color: #4B5563">Tel: (415) 555‑0132</p>
<p class="mt-0 mb-4" style="color: #4B5563">Email: greatstackdev@gmail.com</p>

<!-- Contact Form -->
<p class="mt-0 text-capitalize fw-medium" style="font-size: 20px;">
  CAREER AT PRESCRIPTO
</p>


    <p class="mb-4"  style="color: #4B5563">Learn more about our teams and job openings.</p>

  <div class="container">
  <div class="row">
    <div class="col-md-6">
      <p class="mt-0 mb-0 border p-4" style="color: #4B5563;">
        Explore Jobs
      </p>
    </div>
  </div>
</div>


      </div>
    </div>
  </div>
</div>




 </div>
 </main>
  @include('footer')
 </div>
 