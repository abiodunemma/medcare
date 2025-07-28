@extends('layouts.app')

@section('content')

<!-- Now this content will be hidden until spinner finishes -->
@include('header')

<div class="container mt-4 p-0" style="background-color: #5F6FFF; border-radius: 12px;">
    <div class="row m-0 p-0" style="min-height: 400px;">
        <!-- Left Section -->
        <div class="col-md-6 d-flex sm:text- justify-content-center flex-column justify-content-center ps-5 pe-5">
<p class="mt-3 h1 text-white  wow animate__animated animate__fadeInDown" data-wow-delay=".2s"data-wow-delay=".2s" style="font-weight: 300; font-family: 'Outfit', sans-serif; animation-delay: 0.3s;">
  Book Appointment
</p>

<p class="mt-1 h1 text-white  wow animate__animated animate__fadeInDown" data-wow-delay=".2s" style="font-weight: 300; font-family: 'Outfit', sans-serif; animation-delay: 0.6s;">
  With Trusted Doctors
</p>


            <div class="d-flex align-items-center mt- wow animate__animated animate__fadeInDown" data-wow-delay=".2s" style="animation-delay: 0.9s;">
                <img src="{{ asset('images/group.png') }}" alt="Doctor Image"
                     class="img-fluid me-3" style="max-width: 90px; height: auto; border-radius: 12px;">
                <span class="text-white" style="font-size: 1rem;">
                    Simply browse through our extensive list of trusted doctors, 
                    schedule your appointment hassle-free.
                </span>
            </div>

            <div class="d-flex mt-4  wow animate__animated animate__fadeInDown" data-wow-delay=".2s" style="animation-delay: 1.2s;">
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
        <div class="col-md-6 p-0 d-flex justify-content-center align-items-center   wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
            <img src="{{ asset('images/doc.png') }}" alt="Doctor Image"
                 class="img-fluid w-100 h-100 " style="object-fit: cover; border-top-right-radius: 12px; border-bottom-right-radius: 12px; ">
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="mb-4 wow animate__animated animate__fadeInDown" data-wow-delay=".2s" style="font-family: 'Outfit', sans-serif; font-weight: 300;">
               Find by Speciality 
            </h2>
          <p class="mb-1  wow animate__animated animate__fadeInDown" data-wow-delay=".1s" style="font-family: 'Poppins', sans-serif; font-weight: 300; font-size: 16px;">
    Simply browse through our extensive list of trusted doctors, schedule
</p>
<p class="mb-0 wow animate__animated animate__fadeInDown" data-wow-delay=".1s" style="font-family: 'Poppins', sans-serif; font-weight: 300; font-size: 16px;">
    your appointment hassle-free.
</p>

    </div>


<div class="container mt-4">
    <div class="row text-center">

          {{-- <div class="col-6 col-sm-4 col-md-2 mb-4"> --}}
            <div class="col-6 col-sm-4 col-md-2 mb-4 wow animate__animated animate__fadeInLeft" data-wow-delay=".2s">

            <div class="d-flex flex-column align-items-center hover-effect">
                <img src="{{ asset('images/Dermatologist.png') }}" alt="Doctor Image"
                     class="img-fluid mt-3" style="max-width: 90px; border-radius: 12px; width: 70px;">
                <p class="mt-2 fw-semibold"
                   style="font-family: 'Outfit', sans-serif; font-weight: 200; font-size: 14px; color: #4B5563;">
                      Dermatologist
                </p>
            </div>
        </div>

        {{-- <div class="col-6 col-sm-4 col-md-2 mb-4"> --}}
            <div class="col-6 col-sm-4 col-md-2 mb-4 wow animate__animated animate__fadeInLeft" data-wow-delay=".2s">

            <div class="d-flex flex-column align-items-center hover-effect">
                <img src="{{ asset('images/Gastroenterologist.png') }}" alt="Doctor Image"
                     class="img-fluid mt-3" style="max-width: 90px; border-radius: 12px; width: 70px;">
                <p class="mt-2 fw-semibold"
                   style="font-family: 'Outfit', sans-serif; font-weight: 200; font-size: 14px; color: #4B5563;">
                    Gastroenterologist
                </p>
            </div>
        </div>

      

{{-- <div class="col-6 col-sm-4 col-md-2 mb-4"> --}}
    <div class="col-6 col-sm-4 col-md-2 mb-4 wow animate__animated animate__fadeInLeft" data-wow-delay=".2s">

  <div class="d-flex flex-column align-items-center hover-effect">
    <img src="{{ asset('images/General_physician.png') }}" alt="Doctor Image"
         class="img-fluid mt-3" style="max-width: 90px; border-radius: 12px; width: 70px;">
    <p class="mt-2 fw-semibold"
       style="font-family: 'Outfit', sans-serif; font-weight: 200; font-size: 14px; color: #4B5563;">
      General Physician
    </p>
  </div>
</div>


        {{-- <div class="col-6 col-sm-4 col-md-2 mb-4"> --}}
            <div class="col-6 col-sm-4 col-md-2 mb-4 wow animate__animated animate__fadeInRight" data-wow-delay=".2s">

            <div class="d-flex flex-column align-items-center hover-effect">
                <img src="{{ asset('images/Neurologist.png') }}" alt="Doctor Image"
                     class="img-fluid mt-3" style="max-width: 90px; border-radius: 12px; width: 70px;">
                <p class="mt-2 fw-semibold"
                   style="font-family: 'Outfit', sans-serif; font-weight: 200; font-size: 14px; color: #4B5563;">
                    Neurologist
                </p>
            </div>
        </div>

        {{-- <div class="col-6 col-sm-4 col-md-2 mb-4"> --}}
            <div class="col-6 col-sm-4 col-md-2 mb-4 wow animate__animated animate__fadeInRight" data-wow-delay=".2s">

            <div class="d-flex flex-column align-items-center hover-effect">
                <img src="{{ asset('images/Pediatricians.png') }}" alt="Doctor Image"
                     class="img-fluid mt-3" style="max-width: 90px; border-radius: 12px; width: 70px;">
                <p class="mt-2 fw-semibold"
                   style="font-family: 'Outfit', sans-serif; font-weight: 200; font-size: 14px; color: #4B5563;">
                    Pediatrician
                </p>
            </div>
        </div>

        {{-- <div class="col-6 col-sm-4 col-md-2 mb-4"> --}}
            <div class="col-6 col-sm-4 col-md-2 mb-4 wow animate__animated animate__fadeInRight" data-wow-delay=".2s">

            <div class="d-flex flex-column align-items-center hover-effect rounded-lg">
                <img src="{{ asset('images/Gynecologist.png') }}" alt="Doctor Image"
                     class="img-fluid mt-3" style="max-width: 90px; border-radius: 12px; width: 70px;">
                <p class="mt-2 fw-semibold"
                   style="font-family: 'Outfit', sans-serif; font-weight: 200; font-size: 14px; color: #4B5563;">
                    Gynecologist
                </p>
            </div>
        </div>

    </div>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12 text-center">
         
<h2 class="mb-4 wow animate__animated animate__fadeInUp" data-wow-delay=".2s" style="font-family: 'Outfit', sans-serif; font-weight: 300;">
   Top Doctors to Book
</h2>
            <p class="mb-1  wow animate__animated animate__fadeInUp " data-wow-delay=".2s" style="font-family: 'Poppins', sans-serif; font-weight: 300; font-size: 16px;">
               Simply browse through our extensive list of trusted doctors.
            </p>
         
        </div>
    </div>
 
    <div class="container mt-4">
    <div class="row">
        <!-- Card 1 -->
       <div class="col-md-3 mb-4 ">
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
        <div class="col-md-3 mb-4">
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
        <div class="col-md-3 mb-4">
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
        <div class="col-md-3 mb-4">
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

        <!-- Repeat for Cards 5 to 12 -->
        <div class="col-md-3 mb-4">
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

        <div class="col-md-3 mb-4 ">
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

        <div class="col-md-3 mb-4">
           <div class="card  shadow-md hover-effect" style="height: 320px; border-radius: 12px; overflow: hidden;">
        
        <!-- Top image section with background color -->
        <div style="background-color: #EAEFFF; padding: 20px; text-align: center;">
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

        <div class="col-md-3 mb-4">
            <div class="card  shadow-md hover-effect" style="height: 320px; border-radius: 12px; overflow: hidden;">
        
        <!-- Top image section with background color -->
        <div style="background-color: #EAEFFF; padding: 20px; text-align: center;">
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

        
        
    </div>
</div>

 <!-- more button -->

 <div>
    <button type="button" class="btn text-dark d-block mx-auto mt-4"
            style="background-color: #EAEFFF; border-radius: 28px; padding: 10px 40px;
                   font-size: 16px; font-weight: 300; font-family: 'Outfit', sans-serif;">
        More 
    </button>
 </div>

<!-- testimonials section -->



 <div class="container mt-4 mb-3 p-0" style="background-color: #5F6FFF; border-radius: 12px;">
    <div class="row m-0 p-0" style="min-height: 400px;">
        <!-- Left Section -->
        <div class="col-md-6 d-flex sm:text- justify-content-center flex-column justify-content-center ps-5 pe-5">
            <p class="mt-3 h1 text-white  wow animate__animated animate__fadeInUp" data-wow-delay=".2s" style="font-weight: 300; font-family: 'Outfit', sans-serif;">
                Book Appointment
            </p>
            <p class="mt-1 h1 text-white  wow animate__animated animate__fadeInUp" data-wow-delay=".2s" style="font-weight: 300; font-family: 'Outfit', sans-serif;">
              Book Appointment 
With 100+ Trusted Doctors
            </p>


            <div class="d-flex mt-4  wow animate__animated animate__fadeInDown" data-wow-delay=".2s">
                <button type="button" class="btn border-0"
                    style="background-color: #FFFFFF; border-radius: 24px;
                    padding: 10px 20px; font-size: 16px; font-weight: 300;
                    font-family: 'Outfit', sans-serif; color: #595959;">
                  Create account
                   
                </button>
            </div>
        </div>

        <!-- Right Section -->
        <div class="col-md-6 p-0 d-flex  ">
            <img src="{{ asset('images/gal.png') }}" alt="Doctor Image"
                 class="img-fluid w-100 h-100" style="object-fit: cover; border-top-right-radius: 12px; border-bottom-right-radius: 12px;">
        </div>
    </div>
</div>

<!-- Now this content will be hidden until spinner finishes -->
@include('footer')