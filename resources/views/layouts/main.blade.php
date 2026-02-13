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
                    <a class="nav-link {{ request()->routeIs('courses')?'active':'text-white-50' }} " href="{{ route('courses') }}">Kurslar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('mentors') ? 'active' : 'text-white-50' }}"
                       href="{{ route('mentors') }}">Mentorlar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white-50" href="#">Aloqa</a>
                </li>
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link text-white-50">Kirish</a></li>
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
<footer class="bg-black py-5 mt-5 border-top border-secondary">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <a class="navbar-brand text-white fw-bold fs-3 d-inline-block mb-3" href="#">
                    <i class="bi bi-code-square text-primary"></i> IT Kurslar
                </a>
                <p class="text-white-50">
                    O'zbekistonning eng yirik IT ta'lim platformasi.
                    10,000+ o'quvchilar, 100+ mentor va 50+ zamonaviy kasblar.
                </p>
                <div class="d-flex gap-2">
                    <a href="#" class="btn btn-outline-primary rounded-circle p-2">
                        <i class="bi bi-telegram fs-5"></i>
                    </a>
                    <a href="#" class="btn btn-outline-primary rounded-circle p-2">
                        <i class="bi bi-instagram fs-5"></i>
                    </a>
                    <a href="#" class="btn btn-outline-primary rounded-circle p-2">
                        <i class="bi bi-facebook fs-5"></i>
                    </a>
                    <a href="#" class="btn btn-outline-primary rounded-circle p-2">
                        <i class="bi bi-youtube fs-5"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold text-white mb-3">Kompaniya</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Biz haqimizda</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Blog</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Mentorlik</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Hamkorlik</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold text-white mb-3">Yordam</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">FAQ</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">To'lov usullari</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Maxfiylik</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Qo'llab-quvvatlash</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h6 class="fw-bold text-white mb-3">Yangiliklarga obuna bo'ling</h6>
                <p class="text-white-50 small">Eng so'nggi yangiliklar va chegirmalardan xabardor bo'ling.</p>
                <div class="input-group">
                    <input type="email" class="form-control bg-black border-secondary text-white" placeholder="Email manzilingiz">
                    <button class="btn btn-primary" type="button">Obuna</button>
                </div>
            </div>
        </div>
        <hr class="border-secondary my-4">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <small class="text-white-50">© 2024 IT Kurslar. Barcha huquqlar himoyalangan.</small>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <a href="#" class="text-white-50 text-decoration-none small me-3">Foydalanish shartlari</a>
                <a href="#" class="text-white-50 text-decoration-none small">Cookie siyosati</a>
            </div>
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
