@extends('layouts.app')

@section('content')
 <div class="d-flex flex-column min-vh-100">
 <main class="flex-grow-1">

<!-- Now this content will be hidden until spinner finishes -->
@include('header')

 <div class="container d-flex  justify-content-center align-items-center min-vh-300">
  <div class="border shadow-lg p-5 rounded" style="width: 100%; max-width: 400px;">
    <h4 class=" ">Login</h4>
    <p class="mb-4"> Please login to book appointment </p>

    <!-- Your login form goes here -->
    <form>
    
      <div class="mb-3">
 <div class="mb-3">
        <label for="email" class="form-label">Email </label>
        <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
      <div class="mb-3">

        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
      </div>
      {{-- <button type="submit" class="btn  w-100" style="background-color: #5F6FFF; color:#FFFFFF">Create account</button> --}}
<button type="button" id="createAccountBtn" class="btn w-100" style="background-color: #5F6FFF; color:#FFFFFF" onclick="window.location.href='/profile'">
  <span class="button-text">Create account</span>
  <span class="spinner-border spinner-border-sm ms-2 d-none" role="status" aria-hidden="true"></span>
</button>



    </form>
  </div>
</div>

 </main>
   @include('footer')
 </div>
 
 <script>
    document.getElementById('createAccountBtn').addEventListener('click', function () {
        const btn = this;
        const text = btn.querySelector('.button-text');
        const spinner = btn.querySelector('.spinner-border');

        // Disable button and show spinner
        btn.disabled = true;
        spinner.classList.remove('d-none');
        text.textContent = 'Loading...';

        // Redirect after 3 seconds
        setTimeout(() => {
            window.location.href = '/profile';
        }, 3000);
    });
</script>
