<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MedPharma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="">MedPharma</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('client.home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('client.gallery') }}">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('client.booking_form') }}">Booking</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('client.about') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('client.contact')}}">Contact</a></li>
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

    <div class="container py-4">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
