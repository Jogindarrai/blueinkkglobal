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

</body>
</html>