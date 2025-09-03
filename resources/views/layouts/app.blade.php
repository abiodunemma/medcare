<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Prescripto') }}</title>

    <!-- Fonts & Icons -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Bootstrap 5 only -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Custom CSS animation -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
  new WOW().init();
</script>


    <style>
        /* Hide page content until spinner fades */
        #page-content {
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        #spinner {
            transition: opacity 0.5s ease;
            z-index: 9999;
        }
    </style>
</head>
{{-- <body> --}}
    <body style="overflow-x: hidden;">


<!-- SKELETON LOADER -->
<div id="spinner" class="position-fixed top-0 start-0 w-100 vh-100 bg-white z-50" style="opacity: 1; transition: opacity 0.5s ease;">
  <!-- Header -->
  <div class="skeleton skeleton-header w-100"></div>

  <div class="d-flex h-100">
    <!-- Sidebar -->


    <!-- Main content -->
    <div class="flex-grow-1 px-4 py-3 overflow-auto" style="height: calc(100vh - 60px);">
      <div class="row gy-4">
        <!-- Card 1 -->
        <div class="col-md-6">
          <div class="skeleton-card p-3 rounded">
            <div class="skeleton skeleton-title mb-2" style="width: 40%; height: 20px;"></div>
            <div class="d-flex align-items-center mb-3">
              <div class="skeleton skeleton-avatar me-2"></div>
              <div class="skeleton skeleton-text" style="width: 75%; height: 14px;"></div>
            </div>
            <div class="skeleton skeleton-text mb-2" style="height: 14px;"></div>
            <div class="skeleton skeleton-text mb-2" style="height: 14px;"></div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6">
          <div class="skeleton-card p-3 rounded">
            <div class="skeleton skeleton-title mb-2" style="width: 40%; height: 20px;"></div>
            <div class="d-flex align-items-center mb-3">
              <div class="skeleton skeleton-avatar me-2"></div>
              <div class="skeleton skeleton-text" style="width: 75%; height: 14px;"></div>
            </div>
            <div class="skeleton skeleton-text mb-2" style="height: 14px;"></div>
            <div class="skeleton skeleton-text mb-2" style="height: 14px;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- MAIN PAGE CONTENT (initially hidden) -->
<div id="page-content" style="opacity: 0; transition: opacity 0.5s ease;">
  @yield('content')
</div>




<script>
  window.addEventListener('load', () => {
    setTimeout(() => {
      const spinner = document.getElementById('spinner');
      const page = document.getElementById('page-content');

      if (spinner && page) {
        // Fade out skeleton
        spinner.style.opacity = '0';
        spinner.style.pointerEvents = 'none';

        // Fade in real content
        setTimeout(() => {
          spinner.style.display = 'none';
          page.style.opacity = '1';
        }, 500); // Wait for transition
      }
    }, 2000); // Show loader for 2 seconds
  });
</script>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<!-- Add Bootstrap JS (usually before </body>) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

{{-- <script>
  window.addEventListener('load', function () {
    const loader = document.getElementById('skeleton-loader');
    if (loader) {
      loader.style.display = 'none'; // Hides the skeleton loader
    }
  });
</script> --}}


</body>
</html>
