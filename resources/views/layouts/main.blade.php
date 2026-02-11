<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'IT Kurslar')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @stack('styles')
</head>

<body class="bg-dark text-white" style="background-color: #0a0c0f !important;">

<!-- 🔹 NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black sticky-top border-bottom border-secondary">
    <div class="container">
        <a class="navbar-brand text-white fw-bold fs-3" href="{{ route('index') }}">
            <i class="bi bi-code-square text-primary"></i> IT Kurslar
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('index') ? 'active text-white' : 'text-white-50' }}"
                       href="{{ route('index') }}">Bosh sahifa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white-50" href="#">Kurslar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white-50" href="#">Kategoriyalar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('mentors') ? 'active text-white' : 'text-white-50' }}"
                       href="{{ route('mentors') }}">Mentorlar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white-50" href="#">Aloqa</a>
                </li>
            </ul>

            <div class="d-flex">
                <div class="input-group">
                    <span class="input-group-text bg-black border-secondary text-white-50">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" class="form-control bg-black border-secondary text-white"
                           placeholder="Kurslarni qidirish..." style="width: 250px;">
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- 🔹 PAGE CONTENT (HAR SAHIFA SHU YERGA KELADI) -->
<main>
    @yield('content')
</main>

<!-- 🔹 FOOTER -->
<footer class="bg-black py-5 mt-5 border-top border-secondary">
    <div class="container text-center">
        <p class="text-white-50 mb-2">© {{ date('Y') }} IT Kurslar. Barcha huquqlar himoyalangan.</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="#" class="text-white-50"><i class="bi bi-telegram"></i></a>
            <a href="#" class="text-white-50"><i class="bi bi-instagram"></i></a>
            <a href="#" class="text-white-50"><i class="bi bi-youtube"></i></a>
        </div>
    </div>
</footer>

<!-- 🔹 Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init({
        once: false,
        mirror: true,
        duration: 800,
        easing: 'ease-in-out',
        offset: 100
    });
</script>

@stack('scripts')
</body>
</html>
