<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Blueinkk Global')</title>

    <meta name="description"
          content="@yield('meta_description', 'Blueinkk Global - Professional global business and trademark solutions.')">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    {{-- Header --}}
    @include('partials.header')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Success message: modal aur normal form dono ke liye --}}
@if(session('success'))
    <div
        class="toast-container position-fixed top-0 end-0 p-3"
        style="z-index: 99999; margin-top: 70px;"
    >
        <div
            id="successToast"
            class="toast text-bg-success border-0"
            role="alert"
            aria-live="assertive"
            aria-atomic="true"
        >
            <div class="d-flex">
                <div class="toast-body">
                    <strong>Enquiry Submitted!</strong><br>
                    {{ session('success') }}
                </div>

                <button
                    type="button"
                    class="btn-close btn-close-white me-2 m-auto"
                    data-bs-dismiss="toast"
                    aria-label="Close"
                ></button>
            </div>
        </div>
    </div>
@endif

@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toastElement = document.getElementById('successToast');

            if (
                toastElement &&
                typeof bootstrap !== 'undefined'
            ) {
                bootstrap.Toast
                    .getOrCreateInstance(toastElement, {
                        autohide: true,
                        delay: 6000
                    })
                    .show();
            }
        });
    </script>
@endif

</body>
</html>