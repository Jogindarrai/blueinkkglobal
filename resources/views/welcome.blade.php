<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coming Soon</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="min-vh-100 d-flex align-items-center justify-content-center text-center">
        <div class="container">
            {{-- Logo --}}
            <img
                src="{{ asset('images/logo.webp') }}"
                alt="Logo"
                class="img-fluid mb-4"
                style="max-width: 200px;"
            >

            {{-- Heading --}}
            <h1 class="fw-bold mb-3">
                Coming Soon
            </h1>

            {{-- Description --}}
            <p class="text-muted mb-0">
                Our website is currently under development.
                <br>
                We will be launching soon.
            </p>
        </div>
    </div>
</body>
</html>
