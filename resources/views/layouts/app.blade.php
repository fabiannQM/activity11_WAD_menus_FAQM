<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vacation Menus - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/modern.css') }}">
</head>

<body>
    <header>
        <a href="{{ route('destinations') }}" class="logo">Explore.</a>
        <nav>
            <ul>
                <li>
                    <a href="{{ route('destinations') }}"
                        class="{{ request()->routeIs('destinations') ? 'active' : '' }}">
                        Destinations
                    </a>
                </li>
                <li>
                    <a href="{{ route('gems') }}" class="{{ request()->routeIs('gems') ? 'active' : '' }}">
                        Hidden Gems
                    </a>
                </li>
                <li>
                    <a href="{{ route('log') }}" class="{{ request()->routeIs('log') ? 'active' : '' }}">
                        Travel Log
                    </a>
                </li>
                <li>
                    <a href="{{ route('bookings') }}" class="{{ request()->routeIs('bookings') ? 'active' : '' }}">
                        Bookings
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="header-overlay"></div>

    @yield('content')

    <footer>
        <div class="fade-up">
            <p>Application Web Design - Menus Activity 11</p>
            <div class="creator-info">Fabian Quintero - FAQM | faqm.faqm@gmail.com</div>
            <p style="margin-top: 15px; font-size: 0.9rem;">© 2026 Urban Travel Exploration. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>