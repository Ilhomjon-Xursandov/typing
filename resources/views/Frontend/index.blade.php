@extends('layouts.main')

@section('title', 'index')

@section('content')
<div class="container py-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-6" data-aos="fade-right" data-aos-once="false">
            <h1 class="display-2 fw-bold mb-4">
                Kelajagingizni <span class="text-primary">IT</span> bilan<br>quring
            </h1>
            <p class="fs-5 text-white-50 mb-4">
                Eng so'nggi zamonaviy IT kasblarini o'zbek tilida o'rganing.
                50+ kurs va 100+ mentor sizni kutmoqda.
            </p>
            <div class="d-flex gap-3 mb-5">
                <button class="btn btn-primary rounded-pill px-4 py-2 fw-semibold">
                    <i class="bi bi-play-circle me-2"></i>Bepul sinov
                </button>
                <button class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold">
                    Kurslar <i class="bi bi-arrow-right ms-2"></i>
                </button>
            </div>

            <div class="row g-4">
                <div class="col-4" data-aos="fade-up" data-aos-delay="100" data-aos-once="false">
                    <div class="bg-black bg-opacity-50 p-3 rounded-4 border border-secondary">
                        <h2 class="text-primary fw-bold mb-0">50+</h2>
                        <span class="text-white-50">Kurslar</span>
                    </div>
                </div>
                <div class="col-4" data-aos="fade-up" data-aos-delay="200" data-aos-once="false">
                    <div class="bg-black bg-opacity-50 p-3 rounded-4 border border-secondary">
                        <h2 class="text-primary fw-bold mb-0">100+</h2>
                        <span class="text-white-50"><a href="{{ route('mentors') }}">Mentorlar</a></span>
                    </div>
                </div>
                <div class="col-4" data-aos="fade-up" data-aos-delay="300" data-aos-once="false">
                    <div class="bg-black bg-opacity-50 p-3 rounded-4 border border-secondary">
                        <h2 class="text-primary fw-bold mb-0">5K+</h2>
                        <span class="text-white-50">Talabalar</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6" data-aos="fade-left" data-aos-once="false">
            <div class="position-relative">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                     class="img-fluid rounded-4 border border-secondary" alt="Team">

                <!-- Floating badge 1 -->
                <div class="position-absolute top-0 end-0 translate-middle-y bg-black p-3 rounded-4 border border-primary"
                     data-aos="zoom-in" data-aos-delay="500" data-aos-once="false">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-star-fill text-warning fs-5"></i>
                        <div>
                            <strong class="text-white">4.9</strong>
                            <span class="text-white-50 small">(245)</span>
                        </div>
                    </div>
                </div>

                <!-- Floating badge 2 -->
                <div class="position-absolute bottom-0 start-0 translate-middle-y bg-black p-3 rounded-4 border border-primary"
                     data-aos="zoom-in" data-aos-delay="600" data-aos-once="false">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-people-fill text-info fs-5"></i>
                        <div>
                            <strong class="text-white">5000+</strong>
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
                <h2 class="fw-bold text-white">Mashhur kurslar</h2>
                <p class="text-white-50 mb-0">Eng ko'p tanlangan zamonaviy kasblar</p>
            </div>
            <div class="d-flex gap-2 flex-wrap">
                <button class="btn btn-primary rounded-pill px-4 active">Barchasi</button>
                <button class="btn btn-outline-secondary text-white-50 rounded-pill px-4 border-secondary">Boshlang'ich</button>
                <button class="btn btn-outline-secondary text-white-50 rounded-pill px-4 border-secondary">O'rta</button>
                <button class="btn btn-outline-secondary text-white-50 rounded-pill px-4 border-secondary">Murakkab</button>
            </div>
        </div>

        <!-- Courses Grid - Bootstrap Cards only -->
        <div class="row g-4">
            <!-- Frontend -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-once="false">
                <div class="card bg-black text-white h-100 border-secondary overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                             class="card-img-top" alt="Frontend" style="height: 200px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-primary bg-gradient rounded-pill px-3 py-2">
                                Boshlang'ich
                            </span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-4">Frontend Dasturlash</h5>
                        <p class="card-text text-white-50">HTML, CSS, JavaScript, React, Next.js. Zamonaviy veb-saytlar yaratish.</p>

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
                        <h4 class="text-primary fw-bold mb-0">799<small class="fs-6 text-white-50"> so'm</small></h4>
                        <button class="btn btn-primary rounded-pill px-4">Batafsil</button>
                    </div>
                </div>
            </div>

            <!-- Backend -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200" data-aos-once="false">
                <div class="card bg-black text-white h-100 border-secondary overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                             class="card-img-top" alt="Backend" style="height: 200px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-info bg-gradient rounded-pill px-3 py-2">
                                O'rta
                            </span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-4">Backend Dasturlash</h5>
                        <p class="card-text text-white-50">Python, Django, FastAPI, PostgreSQL. API va server qismi.</p>

                        <div class="d-flex gap-3 text-white-50 small mb-3">
                            <span><i class="bi bi-clock me-1"></i>14 hafta</span>
                            <span><i class="bi bi-camera-reels me-1"></i>56 soat</span>
                            <span><i class="bi bi-star-fill text-warning me-1"></i>4.8</span>
                        </div>

                        <div class="d-flex align-items-center gap-3 pt-3 border-top border-secondary">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80"
                                 class="rounded-circle" width="40" height="40" style="object-fit: cover;">
                            <div>
                                <h6 class="mb-0 text-white">Jasur Aliyev</h6>
                                <small class="text-white-50">Senior Backend</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-black border-secondary d-flex justify-content-between align-items-center">
                        <h4 class="text-primary fw-bold mb-0">899<small class="fs-6 text-white-50"> so'm</small></h4>
                        <button class="btn btn-primary rounded-pill px-4">Batafsil</button>
                    </div>
                </div>
            </div>

            <!-- Full Stack -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300" data-aos-once="false">
                <div class="card bg-black text-white h-100 border-secondary overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                             class="card-img-top" alt="Full Stack" style="height: 200px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-warning bg-gradient rounded-pill px-3 py-2">
                                Murakkab
                            </span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-4">Full Stack Development</h5>
                        <p class="card-text text-white-50">Frontend + Backend + Database. To'liq veb-ilovalar.</p>

                        <div class="d-flex gap-3 text-white-50 small mb-3">
                            <span><i class="bi bi-clock me-1"></i>24 hafta</span>
                            <span><i class="bi bi-camera-reels me-1"></i>96 soat</span>
                            <span><i class="bi bi-star-fill text-warning me-1"></i>4.9</span>
                        </div>

                        <div class="d-flex align-items-center gap-3 pt-3 border-top border-secondary">
                            <img src="https://images.unsplash.com/photo-1494790108755-4cd7b7e1d5da?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80"
                                 class="rounded-circle" width="40" height="40" style="object-fit: cover;">
                            <div>
                                <h6 class="mb-0 text-white">Madina Rahimova</h6>
                                <small class="text-white-50">Tech Lead</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-black border-secondary d-flex justify-content-between align-items-center">
                        <h4 class="text-primary fw-bold mb-0">1.499<small class="fs-6 text-white-50"> so'm</small></h4>
                        <button class="btn btn-primary rounded-pill px-4">Batafsil</button>
                    </div>
                </div>
            </div>

            <!-- Mobile -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400" data-aos-once="false">
                <div class="card bg-black text-white h-100 border-secondary overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                             class="card-img-top" alt="Mobile" style="height: 200px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-info bg-gradient rounded-pill px-3 py-2">
                                O'rta
                            </span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-4">Mobile Development</h5>
                        <p class="card-text text-white-50">Flutter, React Native. iOS va Android ilovalar.</p>

                        <div class="d-flex gap-3 text-white-50 small mb-3">
                            <span><i class="bi bi-clock me-1"></i>16 hafta</span>
                            <span><i class="bi bi-camera-reels me-1"></i>64 soat</span>
                            <span><i class="bi bi-star-fill text-warning me-1"></i>4.7</span>
                        </div>

                        <div class="d-flex align-items-center gap-3 pt-3 border-top border-secondary">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80"
                                 class="rounded-circle" width="40" height="40" style="object-fit: cover;">
                            <div>
                                <h6 class="mb-0 text-white">Bobur Hamidov</h6>
                                <small class="text-white-50">Mobile Dev</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-black border-secondary d-flex justify-content-between align-items-center">
                        <h4 class="text-primary fw-bold mb-0">999<small class="fs-6 text-white-50"> so'm</small></h4>
                        <button class="btn btn-primary rounded-pill px-4">Batafsil</button>
                    </div>
                </div>
            </div>

            <!-- Data Science -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-once="false">
                <div class="card bg-black text-white h-100 border-secondary overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                             class="card-img-top" alt="Data Science" style="height: 200px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-warning bg-gradient rounded-pill px-3 py-2">
                                Murakkab
                            </span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-4">Data Science & AI</h5>
                        <p class="card-text text-white-50">Python, Pandas, ML, TensorFlow, Sun'iy intellekt.</p>

                        <div class="d-flex gap-3 text-white-50 small mb-3">
                            <span><i class="bi bi-clock me-1"></i>20 hafta</span>
                            <span><i class="bi bi-camera-reels me-1"></i>80 soat</span>
                            <span><i class="bi bi-star-fill text-warning me-1"></i>4.8</span>
                        </div>

                        <div class="d-flex align-items-center gap-3 pt-3 border-top border-secondary">
                            <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80"
                                 class="rounded-circle" width="40" height="40" style="object-fit: cover;">
                            <div>
                                <h6 class="mb-0 text-white">Dilnoza Azimova</h6>
                                <small class="text-white-50">Data Scientist</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-black border-secondary d-flex justify-content-between align-items-center">
                        <h4 class="text-primary fw-bold mb-0">1.299<small class="fs-6 text-white-50"> so'm</small></h4>
                        <button class="btn btn-primary rounded-pill px-4">Batafsil</button>
                    </div>
                </div>
            </div>

            <!-- Cybersecurity -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200" data-aos-once="false">
                <div class="card bg-black text-white h-100 border-secondary overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                             class="card-img-top" alt="Cybersecurity" style="height: 200px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-info bg-gradient rounded-pill px-3 py-2">
                                O'rta
                            </span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-4">Kiberxavfsizlik</h5>
                        <p class="card-text text-white-50">Network security, Penetration testing, Ethical hacking.</p>

                        <div class="d-flex gap-3 text-white-50 small mb-3">
                            <span><i class="bi bi-clock me-1"></i>18 hafta</span>
                            <span><i class="bi bi-camera-reels me-1"></i>72 soat</span>
                            <span><i class="bi bi-star-fill text-warning me-1"></i>4.6</span>
                        </div>

                        <div class="d-flex align-items-center gap-3 pt-3 border-top border-secondary">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80"
                                 class="rounded-circle" width="40" height="40" style="object-fit: cover;">
                            <div>
                                <h6 class="mb-0 text-white">Rustam Normatov</h6>
                                <small class="text-white-50">Security Expert</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-black border-secondary d-flex justify-content-between align-items-center">
                        <h4 class="text-primary fw-bold mb-0">1.199<small class="fs-6 text-white-50"> so'm</small></h4>
                        <button class="btn btn-primary rounded-pill px-4">Batafsil</button>
                    </div>
                </div>
            </div>

            <!-- DevOps -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300" data-aos-once="false">
                <div class="card bg-black text-white h-100 border-secondary overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1667372393119-3d4c48d07fc9?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                             class="card-img-top" alt="DevOps" style="height: 200px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-warning bg-gradient rounded-pill px-3 py-2">
                                Murakkab
                            </span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-4">DevOps Engineering</h5>
                        <p class="card-text text-white-50">Docker, Kubernetes, CI/CD, AWS Cloud, IaC.</p>

                        <div class="d-flex gap-3 text-white-50 small mb-3">
                            <span><i class="bi bi-clock me-1"></i>16 hafta</span>
                            <span><i class="bi bi-camera-reels me-1"></i>64 soat</span>
                            <span><i class="bi bi-star-fill text-warning me-1"></i>4.8</span>
                        </div>

                        <div class="d-flex align-items-center gap-3 pt-3 border-top border-secondary">
                            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80"
                                 class="rounded-circle" width="40" height="40" style="object-fit: cover;">
                            <div>
                                <h6 class="mb-0 text-white">Sherzod Karimov</h6>
                                <small class="text-white-50">DevOps Engineer</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-black border-secondary d-flex justify-content-between align-items-center">
                        <h4 class="text-primary fw-bold mb-0">1.399<small class="fs-6 text-white-50"> so'm</small></h4>
                        <button class="btn btn-primary rounded-pill px-4">Batafsil</button>
                    </div>
                </div>
            </div>

            <!-- UX/UI Design -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400" data-aos-once="false">
                <div class="card bg-black text-white h-100 border-secondary overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                             class="card-img-top" alt="UX/UI" style="height: 200px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-primary bg-gradient rounded-pill px-3 py-2">
                                Boshlang'ich
                            </span>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-4">UX/UI Dizayn</h5>
                        <p class="card-text text-white-50">Figma, Adobe XD, prototyping, dizayn tizimlari.</p>

                        <div class="d-flex gap-3 text-white-50 small mb-3">
                            <span><i class="bi bi-clock me-1"></i>10 hafta</span>
                            <span><i class="bi bi-camera-reels me-1"></i>40 soat</span>
                            <span><i class="bi bi-star-fill text-warning me-1"></i>4.9</span>
                        </div>

                        <div class="d-flex align-items-center gap-3 pt-3 border-top border-secondary">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80"
                                 class="rounded-circle" width="40" height="40" style="object-fit: cover;">
                            <div>
                                <h6 class="mb-0 text-white">Lola Murodova</h6>
                                <small class="text-white-50">Senior UX Designer</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-black border-secondary d-flex justify-content-between align-items-center">
                        <h4 class="text-primary fw-bold mb-0">699<small class="fs-6 text-white-50"> so'm</small></h4>
                        <button class="btn btn-primary rounded-pill px-4">Batafsil</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" data-aos="fade-up" data-aos-once="false">
            <button class="btn btn-outline-primary btn-lg rounded-pill px-5 py-3">
                Barcha kurslarni ko'rish <i class="bi bi-arrow-right ms-2"></i>
            </button>
        </div>
    </div>
@endsection
