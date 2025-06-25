@extends('layouts.app')

@section('content')
 <div class="d-flex flex-column min-vh-100">
 <main class="flex-grow-1">

<!-- Now this content will be hidden until spinner finishes -->
@include('header')



    <div class="container mt-1" style="color: #4B5563">
    Browse through the doctors specialist.
</div>

<div class="container mt-4">
    
  <div class="row justify-content-center">
    <!-- Left box -->
    <div class="col-md-3 p-0 rounded overflow-hidden">
<div class="border border-1 rounded mb-2   hover-slot mt-2 ms-1 p-2" style="border-color: #B4B4B4;">General physician</div>
<div class="border border-1 rounded mb-2  hover-slot  mt-2 ms-1 p-2" style="border-color: #B4B4B4;">Gynecologist</div>
<div class="border border-1 rounded mb-2  hover-slot  mt-2 ms-1 p-2" style="border-color: #B4B4B4;">Dermatologist</div>
<div class="border border-1 rounded mb-2  hover-slot  mt-2 ms-1 p-2" style="border-color: #B4B4B4;">Pediatricians</div>
<div class="border border-1 rounded mb-2  hover-slot  mt-2 ms-1 p-2" style="border-color: #B4B4B4;">Neurologist</div>
<div class="border border-1 rounded mb-2  hover-slot  mt-2 ms-1 p-2" style="border-color: #B4B4B4;">Gastroenterologist</div>

    </div>

    <!-- Space -->
    <div class="col-md-1"></div>

    <!-- Right box with more width -->
    <div class="col-md-8  p-4  rounded">
   <div class="container mt-0">
  <div class="row justify-content-center">
    @foreach (range(1, 12) as $i)
      <div class="col-md-4 mb-4 d-flex justify-content-center">
        <a href="{{ url('/details') }}" class="text-decoration-none">
          <div class="card shadow-md hover-effect" 
               style="height: 330px; width: 120%; border-radius: 14px; overflow: hidden;">
            <!-- Top image section -->
            <div style="background-color: #EAEFFF; padding: 20px; text-align: center;">
              <img src="{{ asset('images/dov' . (($i % 4) + 1) . '.png') }}" class="card-img-top" alt="Doctor Image"
                   style="border-radius: 12px; max-height: 150px; width: auto;">
            </div>

            <!-- Bottom text section -->
            <div style="background-color: white; padding: 16px;">
              <p style="margin: 0; color: #0FBF00; font-family: 'Outfit', sans-serif; display: flex; align-items: center; gap: 6px;">
                <span style="display: inline-block; width: 8px; height: 8px; background-color: #0FBF00; border-radius: 50%;"></span>
                Available
              </p>
              <p style="margin: 4px 0 0 0; color: #1F2937; font-family: 'Outfit', sans-serif; font-weight: 400; font-size: 16px;">
                Dr. Richard James
              </p>
              <p style="margin: 0; color: #4B5563; font-family: 'Outfit', sans-serif; font-size: 14px;">
                General Physician
              </p>
            </div>
          </div>
        </a>
      </div>
    @endforeach
  </div>
</div>

        
    </div>
    </div>
  </div>
</div>

 </main>

     @include('footer')
 </div>
     
@endsection