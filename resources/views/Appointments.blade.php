@extends('layouts.app')

@section('content')
 <div class="d-flex flex-column min-vh-100">
 <main class="flex-grow-1">

<!-- Now this content will be hidden until spinner finishes -->
@include('header1')

 <div class="container">
  <div class="text-center mt-4 mb-5">
  <h1 style="color: #4B5563; font-family: 'Outfit', sans-serif; font-weight: 50;">
    About <span class="fw-bold">Us</span>
  </h1>
</div>


 </main>

     @include('footer')
 </div>
     
@endsection