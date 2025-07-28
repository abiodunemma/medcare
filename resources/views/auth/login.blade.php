@extends('layouts.app')

@section('content')
 <div class="d-flex flex-column min-vh-100">
 <main class="flex-grow-1">

<!-- Now this content will be hidden until spinner finishes -->
@include('header')

 <div class="container d-flex justify-content-center align-items-center min-vh-300 wow animate__animated animate__rubberBand" data-wow-delay=".2s">
  <div class="border shadow-lg p-5 rounded" style="width: 100%; max-width: 400px;">
    <h4 class=" ">Create Account</h4>
    <p class="mb-4"> Please sign up to book appointment </p>

    <!-- Your login form goes here -->
    <form>
      <div class="mb-3">
        <label for="email" class="form-label">Full Name</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
      <div class="mb-3">
 <div class="mb-3">
        <label for="email" class="form-label">Email </label>
        <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
      <div class="mb-3">

        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
      </div>
      <button type="submit" class="btn  w-100" style="background-color: #5F6FFF; color:#FFFFFF">Create account</button>
<p class="fw-light mt-1">
  Already have an account?
  <a href="/auth/register" style="color: #5F6FFF; text-decoration: none;">
    Login here
  </a>
</p>


    </form>
  </div>
</div>

 </main>
   @include('footer')
 </div>
 