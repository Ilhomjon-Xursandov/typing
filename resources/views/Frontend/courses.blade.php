@extends('layouts.main')

@section('title', 'courses')

@section('content')
<div class="py-4">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
            <div>
                <h2 class="fw-bold text-white">Mashhur kurslar</h2>
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
                            <h5 class="card-title fw-bold fs-4">{{ $service->title }}</h5>
                            <p class="card-text text-white-50">{{$service->description}}</p>

                            <div class="d-flex gap-3 text-white-50 small mb-3">
                                <span><i class="bi bi-clock me-1"></i>12 hafta</span>
                                <span><i class="bi bi-camera-reels me-1"></i>48 soat</span>
                                <span><i class="bi bi-star-fill text-warning me-1"></i>4.9</span>
                            </div>

                            <div class="d-flex align-items-center gap-3 pt-3 border-top border-secondary">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80"
                                     class="rounded-circle" width="40" height="40" style="object-fit: cover;">
                                <div>
                                    <h6 class="mb-0 text-white">Shahzod Karimov</h6>
                                    <small class="text-white-50">Senior Frontend</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer bg-black border-secondary d-flex justify-content-between align-items-center">
                            <div class="text-primary fw-bold mb-0">{{$service->price}}<small class="fs-6 text-white-50"> so'm</small></div>
                            <button class="btn btn-primary rounded-pill px-4">Batafsil</button>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
</div>
@endsection
