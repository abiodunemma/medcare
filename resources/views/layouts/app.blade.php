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

<!-- Spinner (fullscreen) -->
<div id="spinner" class="position-fixed top-0 start-0 w-100 vh-100 bg-white d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<!-- Hidden content (revealed after spinner) -->
<div id="page-content">
    @yield('content')
</div>

<script>
    window.addEventListener('load', () => {
        setTimeout(() => {
            const spinner = document.getElementById('spinner');
            const page = document.getElementById('page-content');

            if (spinner && page) {
                spinner.style.opacity = '0';
                spinner.style.pointerEvents = 'none';

                setTimeout(() => {
                    spinner.style.display = 'none';
                    page.style.opacity = '1';
                }, 500); // Wait for fade out
            }
        }, 2000); // Show spinner for 3s
    });
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<!-- Add Bootstrap JS (usually before </body>) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
