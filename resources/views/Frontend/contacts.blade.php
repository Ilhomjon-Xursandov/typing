@extends('layouts.main')
@section('title', 'contacts')
@section('content')
<!-- Contact Header -->
<div class="py-5">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="d-inline-block bg-primary bg-opacity-10 rounded-pill px-4 py-2 mb-4">
                    <span class="text-primary"><i class="bi bi-headset me-2"></i>24/7 Qo'llab-quvvatlash</span>
                </div>
                <h1 class="display-2 fw-bold mb-4">
                    Biz bilan <span class="text-primary">bog'laning</span>
                </h1>
                <p class="fs-5 text-white-50 mb-4">
                    Savollaringiz bormi? Yordam kerakmi? Bizning jamoa sizga har doim yordam berishga tayyor.
                    Quyidagi ma'lumotlar orqali biz bilan bog'lanishingiz mumkin.
                </p>
                <div class="row g-4 mt-4">
                    <div class="col-md-4">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-clock-history text-primary fs-3"></i>
                            <div>
                                <h3 class="fw-bold text-white mb-0">24/7</h3>
                                <span class="text-white-50">Qo'llab-quvvatlash</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-people text-info fs-3"></i>
                            <div>
                                <h3 class="fw-bold text-white mb-0">15 min</h3>
                                <span class="text-white-50">Javob vaqti</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-emoji-smile text-warning fs-3"></i>
                            <div>
                                <h3 class="fw-bold text-white mb-0">98%</h3>
                                <span class="text-white-50">Mamnuniyat</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                         class="img-fluid rounded-4 border border-secondary" alt="Contact us">
                    <div class="position-absolute top-0 end-0 translate-middle-y bg-black p-3 rounded-4 border border-primary">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-chat-dots-fill text-primary fs-3"></i>
                            <div>
                                <strong class="text-white fs-5">+998 71 200 99 99</strong>
                                <span class="text-white-50 d-block">Ishonch telefoni</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Cards -->
<div class="py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Manzil Kartasi -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-black p-5 rounded-4 border border-secondary h-100 text-center">
                    <div class="bg-primary bg-opacity-10 p-4 rounded-circle d-inline-block mb-4">
                        <i class="bi bi-geo-alt-fill text-primary fs-1"></i>
                    </div>
                    <h4 class="fw-bold text-white mb-3">Manzil</h4>
                    <p class="text-white-50 mb-3">
                        Toshkent shahri, Mirzo Ulug'bek tumani,<br>
                        University str. 2, IT Park, 3-qavat
                    </p>
                    <button class="btn btn-outline-primary rounded-pill px-4" onclick="window.open('https://www.google.com/maps?q=41.338119,69.240898', '_blank')">
                        <i class="bi bi-map me-2"></i>Xaritada ko'rish
                    </button>
                </div>
            </div>

            <!-- Telefon Kartasi -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-black p-5 rounded-4 border border-secondary h-100 text-center">
                    <div class="bg-info bg-opacity-10 p-4 rounded-circle d-inline-block mb-4">
                        <i class="bi bi-telephone-fill text-info fs-1"></i>
                    </div>
                    <h4 class="fw-bold text-white mb-3">Telefon</h4>
                    <p class="text-white-50 mb-2">
                        <i class="bi bi-telegram me-2 text-primary"></i>+998 (71) 200-99-99
                    </p>
                    <p class="text-white-50 mb-2">
                        <i class="bi bi-telegram me-2 text-primary"></i>+998 (90) 123-45-67
                    </p>
                    <p class="text-white-50 mb-3">
                        <i class="bi bi-telegram me-2 text-primary"></i>+998 (93) 765-43-21
                    </p>
                    <span class="badge bg-success bg-opacity-10 text-success border border-success rounded-pill px-3 py-2">
                            <i class="bi bi-clock me-1"></i>24/7 Ishlaymiz
                        </span>
                </div>
            </div>

            <!-- Email Kartasi -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="bg-black p-5 rounded-4 border border-secondary h-100 text-center">
                    <div class="bg-warning bg-opacity-10 p-4 rounded-circle d-inline-block mb-4">
                        <i class="bi bi-envelope-fill text-warning fs-1"></i>
                    </div>
                    <h4 class="fw-bold text-white mb-3">Email</h4>
                    <p class="text-white-50 mb-2">
                        <i class="bi bi-envelope me-2 text-warning"></i>info@itkurslar.uz
                    </p>
                    <p class="text-white-50 mb-2">
                        <i class="bi bi-envelope me-2 text-warning"></i>support@itkurslar.uz
                    </p>
                    <p class="text-white-50 mb-3">
                        <i class="bi bi-envelope me-2 text-warning"></i>mentor@itkurslar.uz
                    </p>
                    <span class="badge bg-warning bg-opacity-10 text-warning border border-warning rounded-pill px-3 py-2">
                            <i class="bi bi-lightning-charge me-1"></i>Tezkor javob
                        </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Xarita va Geolokatsiya -->
<div class="py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Google Maps Karta -->
            <div class="col-lg-7" data-aos="fade-right" data-aos-delay="100">
                <div class="bg-black p-4 rounded-4 border border-secondary h-100">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h4 class="fw-bold text-white mb-1">Bizning manzil</h4>
                            <p class="text-white-50 mb-0">IT Park, Toshkent</p>
                        </div>
                        <span class="badge bg-primary rounded-pill px-3 py-2">
                                <i class="bi bi-geo-alt-fill me-1"></i>GPS: 41.3381, 69.2409
                            </span>
                    </div>

                    <!-- Google Maps iframe - Sizning geolokatsiyangiz -->
                    <div class="ratio ratio-16x9 rounded-3 overflow-hidden border border-secondary">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.811853371686!2d69.23870931542354!3d41.33811927926768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8bf4c8a7f5a5%3A0x8e8a3f2f7e5b3b0!2sIT%20Park%20Uzbekistan!5e0!3m2!1sen!2s!4v1620000000000!5m2!1sen!2s"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            title="IT Park Uzbekistan manzili"
                            class="w-100 h-100">
                        </iframe>
                    </div>

                    <div class="mt-3 text-end">
                        <small class="text-white-50">
                            <i class="bi bi-info-circle me-1"></i>
                            Aniq manzil: IT Park, 2-uy, Mirzo Ulug'bek tumani, Toshkent
                        </small>
                    </div>
                </div>
            </div>

            <!-- Geolokatsiya Kartasi - Sizning joylashuvingiz -->
            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="200">
                <div class="bg-black p-4 rounded-4 border border-primary h-100">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="bg-primary bg-opacity-10 p-3 rounded-circle">
                            <i class="bi bi-crosshair2 text-primary fs-2"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold text-white mb-1">Sizning geolokatsiyangiz</h4>
                            <p class="text-white-50 mb-0" id="location-status">Joylashuvingiz aniqlanmoqda...</p>
                        </div>
                    </div>

                    <!-- Geolokatsiya kartasi -->
                    <div class="ratio ratio-1x1 rounded-3 overflow-hidden border border-secondary mb-3" id="map-container">
                        <!-- Google Maps joylashuv ko'rinishi -->
                        <iframe
                            id="userLocationMap"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.811853371686!2d69.23870931542354!3d41.33811927926768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8bf4c8a7f5a5%3A0x8e8a3f2f7e5b3b0!2sIT%20Park%20Uzbekistan!5e0!3m2!1sen!2s!4v1620000000000!5m2!1sen!2s"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            title="Sizning joylashuvingiz"
                            class="w-100 h-100">
                        </iframe>
                    </div>

                    <!-- Geolokatsiya tugmalari -->
                    <div class="d-flex gap-2 mt-3">
                        <button class="btn btn-primary flex-grow-1 rounded-pill" onclick="getUserLocation()">
                            <i class="bi bi-geo-alt-fill me-2"></i>Mening joylashuvim
                        </button>
                        <button class="btn btn-outline-primary rounded-pill px-4" onclick="openGoogleMaps()">
                            <i class="bi bi-box-arrow-up-right"></i>
                        </button>
                    </div>

                    <!-- GPS koordinatalari -->
                    <div class="mt-3 pt-2 border-top border-secondary">
                        <div class="d-flex justify-content-between align-items-center">
                                <span class="text-white-50 small">
                                    <i class="bi bi-info-circle me-1"></i>
                                    Kenglik: <span id="latitude">41.3381</span>
                                </span>
                            <span class="text-white-50 small">
                                    Uzunlik: <span id="longitude">69.2409</span>
                                </span>
                            <span class="badge bg-dark border border-secondary rounded-pill px-3" id="accuracy-badge">
                                    <i class="bi bi-dot me-1"></i>Aniqlik: 100m
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ijtimoiy Tarmoqlar -->
<div class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold display-6 text-white">Bizni kuzatib boring</h2>
            <p class="text-white-50 fs-5">Ijtimoiy tarmoqlarda biz bilan bog'planing</p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="bg-black p-4 rounded-4 border border-secondary text-center">
                    <div class="bg-primary bg-opacity-10 p-3 rounded-circle d-inline-block mb-3">
                        <i class="bi bi-telegram text-primary fs-1"></i>
                    </div>
                    <h5 class="fw-bold text-white">Telegram</h5>
                    <p class="text-white-50 small mb-3">@itkurslar_uz</p>
                    <a href="#" class="btn btn-outline-primary w-100 rounded-pill">
                        <i class="bi bi-send me-2"></i>Yozish
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="bg-black p-4 rounded-4 border border-secondary text-center">
                    <div class="bg-danger bg-opacity-10 p-3 rounded-circle d-inline-block mb-3">
                        <i class="bi bi-instagram text-danger fs-1"></i>
                    </div>
                    <h5 class="fw-bold text-white">Instagram</h5>
                    <p class="text-white-50 small mb-3">@itkurslar.uz</p>
                    <a href="#" class="btn btn-outline-danger w-100 rounded-pill">
                        <i class="bi bi-camera me-2"></i>Kuzatish
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="bg-black p-4 rounded-4 border border-secondary text-center">
                    <div class="bg-info bg-opacity-10 p-3 rounded-circle d-inline-block mb-3">
                        <i class="bi bi-facebook text-info fs-1"></i>
                    </div>
                    <h5 class="fw-bold text-white">Facebook</h5>
                    <p class="text-white-50 small mb-3">/itkurslar.uz</p>
                    <a href="#" class="btn btn-outline-info w-100 rounded-pill">
                        <i class="bi bi-hand-thumbs-up me-2"></i>Like
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="bg-black p-4 rounded-4 border border-secondary text-center">
                    <div class="bg-danger bg-opacity-10 p-3 rounded-circle d-inline-block mb-3">
                        <i class="bi bi-youtube text-danger fs-1"></i>
                    </div>
                    <h5 class="fw-bold text-white">YouTube</h5>
                    <p class="text-white-50 small mb-3">IT Kurslar</p>
                    <a href="#" class="btn btn-outline-danger w-100 rounded-pill">
                        <i class="bi bi-play-btn me-2"></i>Obuna
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    // AOS init
    AOS.init({
        once: false,
        mirror: true,
        duration: 800,
        easing: 'ease-in-out',
        offset: 100
    });

    // Geolokatsiya funksiyasi - Sizning joylashuvingizni aniqlaydi
    function getUserLocation() {
        const status = document.getElementById('location-status');
        const mapFrame = document.getElementById('userLocationMap');
        const latitudeSpan = document.getElementById('latitude');
        const longitudeSpan = document.getElementById('longitude');
        const accuracyBadge = document.getElementById('accuracy-badge');

        status.innerHTML = '<i class="bi bi-arrow-repeat me-2 spinner"></i>Joylashuvingiz aniqlanmoqda...';
        status.classList.add('text-warning');

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                // Muvaffaqiyatli
                function(position) {
                    const lat = position.coords.latitude;
                    const lng = position.coords.longitude;
                    const accuracy = Math.round(position.coords.accuracy);

                    // Koordinatalarni ko'rsatish
                    latitudeSpan.textContent = lat.toFixed(4);
                    longitudeSpan.textContent = lng.toFixed(4);
                    accuracyBadge.innerHTML = `<i class="bi bi-dot me-1"></i>Aniqlik: ${accuracy}m`;

                    // Google Maps iframe ni yangilash
                    mapFrame.src = `https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995!2d${lng}!3d${lat}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2z!5e0!3m2!1sen!2s!4v1620000000000!5m2!1sen!2s`;

                    status.innerHTML = '<i class="bi bi-check-circle-fill me-2 text-success"></i>Joylashuvingiz aniqlandi!';
                    status.classList.remove('text-warning');
                    status.classList.add('text-success');

                    // Muvaffaqiyatli animatsiya
                    accuracyBadge.classList.add('bg-success', 'bg-opacity-10', 'text-success', 'border-success');
                },
                // Xatolik
                function(error) {
                    let errorMessage = '';
                    switch(error.code) {
                        case error.PERMISSION_DENIED:
                            errorMessage = 'Joylashuvga ruxsat berilmadi';
                            break;
                        case error.POSITION_UNAVAILABLE:
                            errorMessage = 'Joylashuv ma\'lumoti mavjud emas';
                            break;
                        case error.TIMEOUT:
                            errorMessage = 'So\'rov vaqti tugadi';
                            break;
                        default:
                            errorMessage = 'Noma\'lum xatolik';
                    }
                    status.innerHTML = `<i class="bi bi-exclamation-triangle-fill me-2 text-danger"></i>${errorMessage}`;
                    status.classList.add('text-danger');
                    accuracyBadge.classList.add('bg-danger', 'bg-opacity-10', 'text-danger', 'border-danger');
                }
            );
        } else {
            status.innerHTML = '<i class="bi bi-exclamation-triangle-fill me-2 text-danger"></i>Brauzeringiz geolokatsiyani qo\'llab-quvvatlamaydi';
            status.classList.add('text-danger');
        }
    }

    // Google Maps ni ochish
    function openGoogleMaps() {
        const lat = document.getElementById('latitude').textContent || '41.3381';
        const lng = document.getElementById('longitude').textContent || '69.2409';
        window.open(`https://www.google.com/maps?q=${lat},${lng}`, '_blank');
    }

    // Sahifa yuklanganda avtomatik geolokatsiya
    window.onload = function() {
        setTimeout(getUserLocation, 1000);
    };
</script>

<style>
    /* Geolokatsiya spinner animatsiyasi */
    .spinner {
        animation: spin 1s linear infinite;
        display: inline-block;
    }
    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
</style>
@endsection
