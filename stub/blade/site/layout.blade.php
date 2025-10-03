<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ url('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ url('ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <title>@yield('title') - {{ env('APP_NAME') }}</title>

    {{-- SEO Meta Tags --}}
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="">
    <meta name="robots" content="@yield('robots', 'index, follow')">

    {{-- Open Graph Meta Tags --}}
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:title" content="@yield('title') - {{ env('APP_NAME') }}">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="{{ env('APP_NAME') }}">
    <meta property="og:image" content="@yield('og_image', asset('image/logo.png'))">
    <meta property="og:locale" content="{{ app()->getLocale() }}">

    {{-- Twitter Card Meta Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title') - {{ env('APP_NAME') }}">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="@yield('og_image', asset('image/logo.png'))">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Hreflang Tags --}}
    <link rel="alternate" hreflang="de" href="{{ url('/') }}">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @yield('content')


    <script>
        'use strict';
        // Global scroll function
        document.addEventListener("DOMContentLoaded", function() {
            if (window.location.hash) {
                const element = document.querySelector(window.location.hash);
                if (element) {
                    element.scrollIntoView({
                        behavior: "smooth"
                    });
                }
            }
        });

        window.scrollToElement = function(idName) {
            if (idName) {
                const element = document.getElementById(idName);
                if (element) {
                    element.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        }
    </script>
</body>

</html>
