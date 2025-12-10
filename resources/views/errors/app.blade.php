<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error - @yield('title')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://unpkg.com/alpinejs" defer></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Include all your existing styles --}}
    <link rel="stylesheet" href="{{ asset('css/home-layouts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/topbars.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer-layouts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skill.css') }}">
    <link rel="stylesheet" href="{{ asset('css/darkmode.css') }}">

    <script src="{{ asset('js/main.js') }}"></script>
</head>

<body class="min-h-screen relative overflow-hidden">
    <main class="flex-1">
        @yield('content')
    </main>
</body>
</html>
