@extends('layouts.app')

@section('content')

<!-- Now this content will be hidden until spinner finishes -->
@include('header')

<div class="container mt-4 p-0" style="background-color: #5F6FFF; border-radius: 12px;">
    <div class="row m-0 p-0" style="min-height: 400px;">
        <!-- Left Section -->
        <div class="col-md-6 d-flex sm:text- justify-content-center flex-column justify-content-center ps-5 pe-5">
            <p class="mt-3 h1 text-white" style="font-weight: 300; font-family: 'Outfit', sans-serif;">
                Book Appointment
            </p>
            <p class="mt-1 h1 text-white" style="font-weight: 300; font-family: 'Outfit', sans-serif;">
                With Trusted Doctors
            </p>

            <div class="d-flex align-items-center mt-3">
                <img src="{{ asset('images/group.png') }}" alt="Doctor Image"
                     class="img-fluid me-3" style="max-width: 90px; height: auto; border-radius: 12px;">
                <span class="text-white" style="font-size: 1rem;">
                    Simply browse through our extensive list of trusted doctors, 
                    schedule your appointment hassle-free.
                </span>
            </div>

            <div class="d-flex mt-4">
                <button type="button" class="btn border-0"
                    style="background-color: #FFFFFF; border-radius: 24px;
                    padding: 10px 20px; font-size: 16px; font-weight: 300;
                    font-family: 'Outfit', sans-serif; color: #595959;">
                    Book appointment  
                    <i class="fas fa-arrow-right ms-2" style="font-size: 14px;"></i>
                </button>
            </div>
        </div>

        <!-- Right Section -->
        <div class="col-md-6 p-0 d-flex justify-content-center align-items-center">
            <img src="{{ asset('images/doc.png') }}" alt="Doctor Image"
                 class="img-fluid w-100 h-100" style="object-fit: cover; border-top-right-radius: 12px; border-bottom-right-radius: 12px;">
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="mb-4" style="font-family: 'Outfit', sans-serif; font-weight: 300;">
               Find by Speciality 
            </h2>
          <p class="mb-1" style="font-family: 'Poppins', sans-serif; font-weight: 300; font-size: 16px;">
    Simply browse through our extensive list of trusted doctors, schedule
</p>
<p class="mb-0" style="font-family: 'Poppins', sans-serif; font-weight: 300; font-size: 16px;">
    your appointment hassle-free.
</p>

<div class="row mt-4 mb-2 py-7 border border-2 border-dark" style="height: 200px; ">
  <div class="col-sm-2">.col-sm-4</div>
  <div class="col-sm-2">.col-sm-4</div>
  <div class="col-sm-2">.col-sm-4</div>
   <div class="col-sm-2">.col-sm-4</div>
    <div class="col-sm-2">.col-sm-4</div>
     <div class="col-sm-2">.col-sm-4</div>
</div>
        </div>
    </div>
  