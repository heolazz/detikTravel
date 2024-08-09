<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Explore Thailand by detikTravel')</title>
    <link href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @stack('styles')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('images/logo-nav.png') }}" alt="Logo" class="navbar-logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}#home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}#about">Tentang Program</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}#news">Berita</a>
            </li>
            <li class="nav-item">
                <a class="nav-link registrasi-link text-white" href="{{ route('registrasi') }}">Registrasi</a>
            </li>
        </ul>
    </div>
</nav>


    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 detikTravel. All Rights Reserved.</p>
        <img src="{{ asset('images/logo-footer.png') }}" alt="Logo Footer">
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('https://code.jquery.com/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js') }}"></script>
    @stack('scripts')
</body>
</html>
