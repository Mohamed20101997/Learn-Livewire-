<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap 5 CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Include Livewire styles -->
        @livewireStyles

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- Check if the current request matches the route and add 'active' class -->
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('todo') ? 'active' : '' }}" href="todo">Todos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('counter') ? 'active' : '' }}" href="counter">Counter</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('post') ? 'active' : '' }}" href="post">Posts</a>
                        </li>
                        <!-- Add more nav links as needed -->
                    </ul>
                </div>
            </div>
        </nav>
        <main class="container mt-4">
            {{ $slot }}
        </main>

        <!-- Bootstrap 5 JS and Popper.js CDN -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Include Livewire scripts -->
        @livewireScripts
    </body>
</html>
