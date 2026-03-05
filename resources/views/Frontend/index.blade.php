@extends('layouts.main')

@section('title', 'index')

@section('content')
<div class="container py-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-6" data-aos="fade-right" data-aos-once="false">
            <h2 class="display-2 fw-bold mb-4">
                Kelajagingizni <span class="text-primary">IT</span> bilan<br>quring
            </h2>
            <p class="fs-5 text-white-50 mb-4">
                Eng so'nggi zamonaviy IT kasblarini o'zbek tilida o'rganing.
                {{ $serviceCount }}+ kurs va 10+ mentor sizni kutmoqda.
            </p>
            <div class="d-flex gap-3 mb-5">
                <a class="btn btn-primary rounded-pill px-4 py-2 fw-semibold" href="{{route('register')}}">
                    <i class="bi bi-play-circle me-2"></i>Ro'yxatdan o'tish
                </a>
                <a class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold" href="{{ route('login') }}">
                    Kirish <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>

            <div class="row g-4">
                <div class="col-4" data-aos="fade-up" data-aos-delay="100" data-aos-once="false">
                    <div class="bg-black bg-opacity-50 p-3 rounded-4 border border-secondary">
                        <h2 class="text-primary fw-bold mb-0">{{ $serviceCount }}+</h2>
                        <span class="text-white-50">Kurslar</span>
                    </div>
                </div>
                <div class="col-4" data-aos="fade-up" data-aos-delay="200" data-aos-once="false">
                    <div class="bg-black bg-opacity-50 p-3 rounded-4 border border-secondary">
                        <h2 class="text-primary fw-bold mb-0">10+</h2>
                        <span class="text-white-50">Mentorlar</span>
                    </div>
                </div>
                <div class="col-4" data-aos="fade-up" data-aos-delay="300" data-aos-once="false">
                    <div class="bg-black bg-opacity-50 p-3 rounded-4 border border-secondary">
                        <h2 class="text-primary fw-bold mb-0">{{ $userCount }}+</h2>
                        <span class="text-white-50">Talabalar</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-once="false">
            <div class="position-relative">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                     class="img-fluid rounded-4 border border-secondary" alt="Team">

                <!-- Floating badge 2 -->
                <div class="position-absolute bottom-0 start-0 translate-middle-y bg-black p-3 rounded-4 border border-primary"
                     data-aos="zoom-in" data-aos-delay="600" data-aos-once="false">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-people-fill text-info fs-5"></i>
                        <div>
                            <strong class="text-white">{{ $userCount }}+</strong>
                            <span class="text-white-50 small">o'quvchi</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- Filter Buttons - Bootstrap only -->
<section class="py-4">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
            <div>
                <h2 class="fw-bold text-white">Kurslar</h2>
                <p class="text-white-50 mb-0">Eng ko'p tanlangan zamonaviy kasblar</p>
            </div>
        </div>

        <!-- Courses Grid - Bootstrap Cards only -->
        <div class="row g-4">
            @foreach($services as $service)
                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-once="false">
                    <div class="card bg-black text-white h-100 border-secondary overflow-hidden">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                 class="card-img-top" alt="Frontend" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold fs-4">{{ $service->title}}</h5>
                            <p class="card-text text-white-50">{{ $service->description }}</p>

                            <div class="d-flex gap-3 text-white-50 small mb-3">
                                <span><i class="bi bi-clock me-1"></i>12 hafta</span>
                                <span><i class="bi bi-camera-reels me-1"></i>48 soat</span>
                                <span><i class="bi bi-star-fill text-warning me-1"></i>4.9</span>
                            </div>
                        </div>
                        <div class="card-footer bg-black border-secondary d-flex justify-content-between align-items-center">
                            <div class="text-primary fw-bold mb-0">{{$service->price}}<small class="fs-6 text-white-50"> so'm</small></div>
                            <button class="btn btn-primary rounded-pill px-3">Batafsil</button>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="text-center mt-5" data-aos="fade-up" data-aos-once="false">
            <button class="btn btn-outline-primary btn-lg rounded-pill px-5 py-3">
                Barcha kurslarni ko'rish <i class="bi bi-arrow-right ms-2"></i>
            </button>
        </div>
    </div>
@endsection
