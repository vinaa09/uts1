<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Travel Destinations')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            color: #fff;
            background: url('{{ asset("images/download (3).jpeg") }}') no-repeat center center fixed;
            background-size: cover;
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0.5);
            min-height: 100vh;
            width: 100%;
        }

        nav.navbar {
            background-color: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(10px);
        }

        nav .nav-link {
            color: #fff !important;
            font-weight: 500;
        }

        nav .nav-link:hover,
        nav .nav-link.active {
            color: #ffc107 !important;
        }

        footer {
            text-align: center;
            padding: 10px;
            color: #ddd;
            background-color: rgba(0, 0, 0, 0.6);
            font-size: 14px;
        }

        /* Gaya grid destinasi */
        .destination-card {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .destination-card:hover {
            transform: scale(1.03);
        }

        .destination-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            filter: brightness(85%);
        }

        .destination-card .caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            text-align: left;
            padding: 10px;
            font-weight: 500;
        }

        .creator {
            text-align: center;
            font-size: 18px;
            font-weight: 500;
            margin: 30px 0;
        }

        .hero-text {
            text-align: center;
            font-size: 28px;
            font-weight: 600;
            margin-top: 40px;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
        }
    </style>
</head>

<body>
    <div class="overlay">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand fw-bold text-warning" href="/">Welcome to the Culinary World!</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container py-4">
            @yield('content')
        </main>

        <footer>
            © 2025 Culinary Destinations | Dibuat oleh Vina Ananda & Dira Dwi Ananda
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
