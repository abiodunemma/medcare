@extends('layouts.app')

@section('content')
 <div class="d-flex flex-column min-vh-100">
 <main class="flex-grow-1">

<!-- Now this content will be hidden until spinner finishes -->
@include('header1')
<div class="container mt-1" style="color: #4B5563">
  <div class="d-flex align-items-start mt-2 ms-1">
    <!-- Left image: Profile -->
    <img src="{{ asset('images/profile.png') }}" height="160" class="mb-3 me-4" style="object-fit: contain;">

    <!-- Right image: Upload -->
    <img src="{{ asset('images/upload_area.png') }}" height="160" class="mb-3" style="object-fit: contain;">
  </div>

  <h3 class="" style="color:#1F2937">Edward Vincent </h3>

  <!-- Divider Line -->
        <hr class="border opacity-60 mt-3" style="background-color: #ADADAD; height: 1px;">
       <div class="text-decoration-underline" style="color: #4B5563;">
  CONTACT INFORMATION
</div>
<div class="mt-2">
<p class="mb-2">
  <span style="display: inline-block; width: 90px; ">Email:</span>
  <span style="color: #3C96FF;">richardjameswap@example.com</span>
</p>

<p class="mb-2">
  <span style="display: inline-block; width: 90px; ">Phone:</span>
  <span style="color: #3C96FF;">+1 234 567 890</span>
</p>

<p class="mb-2">
  <span style="display: inline-block; width: 90px; ">Address:</span>
  <span>57th Cross, Richmond</span>
</p>

</div>

  <div class="text-decoration-underline mt-5" style="color: #4B5563;">
  BASIC INFORMATION
</div>
<div class="mt-2">
<p class="mb-2">
  <span style="display: inline-block; width: 90px; ">Gender:</span>
  <span >Male</span>
</p>

<p class="mb-5">
  <span style="display: inline-block; width: 90px; ">Birthday:</span>
  <span >20 July, 2024</span>
</p>

<div class="d-flex gap-3 mt-5">
  <button class="btn"
    style="font-family: 'Outfit', sans-serif; font-weight: 500; border: 1px solid #5F6FFF; border-radius: 90px; width: 100px; color: #5F6FFF;">
    Edit
  </button>

  <button class="btn"
    style="font-family: 'Outfit', sans-serif; font-weight: 500; border: 1px solid #5F6FFF; color:  #5F6FFF; border-radius: 90px; width: 160px;">
    Save information
  </button>
</div>

</div>

 </main>

     @include('footer')
 </div>
     
@endsection