<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MedPharma</title>

    <link rel="icon" type="image/x-icon" href="{{asset('images/identity/MedPharma_logof.png')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="{{ asset('js/script.js') }}"></script>
</head>

<body class="bg-light-custom">
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid px-4 px-lg-5">
            <a class="navbar-brand" href="{{route('client.home')}}">
                <img src="{{ asset('images/identity/logo_only.png') }}" alt="MedPharma Logo"
                    class="d-inline-block logo">
                MedPharma
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('client.home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('client.gallery') }}">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('client.booking_form') }}">Booking</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('client.about') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('client.contact') }}">Contact</a></li>
                    {{-- Link Admin só para autenticados (opcional) --}}
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.home') }}">Admin</a>
                        </li>
                    @endauth

                    {{-- AQUI entra o login/logout --}}
                    <li class="nav-item">
                        @auth
                            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-link nav-link">Logout</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        @endauth
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <div class="container py-4 my-4">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>

    <footer class="footer text-center">
        <div class="container-fluid">
            <p class="mb-0">&copy; {{ date('Y') }} MedPharma Solutions. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
