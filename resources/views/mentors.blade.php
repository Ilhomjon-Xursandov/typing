@extends('layouts.main')

@section('title', 'mentorlar')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-5">
            <div>
                <h2 class="fw-bold text-white">Barcha mentorlar</h2>
                <p class="text-white-50 mb-0">O'z sohasining eng yaxshi mutaxassislari</p>
            </div>
            <div class="d-flex gap-2 flex-wrap">
                <button class="btn btn-primary rounded-pill px-4 active">Barchasi</button>
                <button class="btn btn-outline-secondary text-white-50 rounded-pill px-4 border-secondary">Frontend</button>
                <button class="btn btn-outline-secondary text-white-50 rounded-pill px-4 border-secondary">Backend</button>
                <button class="btn btn-outline-secondary text-white-50 rounded-pill px-4 border-secondary">Mobile</button>
                <button class="btn btn-outline-secondary text-white-50 rounded-pill px-4 border-secondary">Data Science</button>
                <button class="btn btn-outline-secondary text-white-50 rounded-pill px-4 border-secondary">DevOps</button>
            </div>
        </div>

        <!-- Mentors Grid -->
        <div class="row g-4">
            <!-- Mentor 1 - Shahzod Karimov -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-once="false">
                <div class="card bg-black text-white h-100 border-secondary overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                             class="card-img-top" alt="Shahzod Karimov" style="height: 280px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-primary rounded-pill px-3 py-2">
                                <i class="bi bi-patch-check-fill me-1"></i>Top mentor
                            </span>
                        <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <span class="fw-bold">4.98</span>
                                <span class="text-white-50">(245 ta baho)</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h4 class="card-title fw-bold mb-1">Shahzod Karimov</h4>
                                <p class="text-primary mb-0">Senior Frontend Developer</p>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary border-secondary text-white-50 rounded-circle p-2" data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark bg-black border-secondary">
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-person-lines-fill me-2"></i>Profil</a></li>
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-chat-dots me-2"></i>Xabar yozish</a></li>
                                    <li><hr class="dropdown-divider border-secondary"></li>
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-book me-2"></i>Kurslari</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-primary bg-opacity-10 text-primary border border-primary rounded-pill px-3 py-2">React</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary border border-primary rounded-pill px-3 py-2">Next.js</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary border border-primary rounded-pill px-3 py-2">TypeScript</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary border border-primary rounded-pill px-3 py-2">+3</span>
                        </div>

                        <p class="text-white-50 small mb-3">
                            <i class="bi bi-briefcase me-2"></i>8 yil tajriba · Ex-Amazon, Ex-EPAM
                        </p>

                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="d-flex align-items-center gap-1">
                                <i class="bi bi-people-fill text-info"></i>
                                <span class="small">1,250 o'quvchi</span>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <i class="bi bi-play-circle-fill text-success"></i>
                                <span class="small">4 kurs</span>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-primary flex-grow-1 rounded-pill">
                                <i class="bi bi-person-plus me-2"></i>Kuzatish
                            </a>
                            <a href="#" class="btn btn-outline-primary rounded-pill px-3">
                                <i class="bi bi-chat-dots"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mentor 2 - Madina Rahimova -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200" data-aos-once="false">
                <div class="card bg-black text-white h-100 border-secondary overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1494790108755-4cd7b7e1d5da?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                             class="card-img-top" alt="Madina Rahimova" style="height: 280px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-warning rounded-pill px-3 py-2">
                                <i class="bi bi-patch-check-fill me-1"></i>Expert
                            </span>
                        <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <span class="fw-bold">4.96</span>
                                <span class="text-white-50">(189 ta baho)</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h4 class="card-title fw-bold mb-1">Madina Rahimova</h4>
                                <p class="text-info mb-0">Tech Lead · Full Stack</p>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary border-secondary text-white-50 rounded-circle p-2" data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark bg-black border-secondary">
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-person-lines-fill me-2"></i>Profil</a></li>
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-chat-dots me-2"></i>Xabar yozish</a></li>
                                    <li><hr class="dropdown-divider border-secondary"></li>
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-book me-2"></i>Kurslari</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-info bg-opacity-10 text-info border border-info rounded-pill px-3 py-2">Node.js</span>
                            <span class="badge bg-info bg-opacity-10 text-info border border-info rounded-pill px-3 py-2">Python</span>
                            <span class="badge bg-info bg-opacity-10 text-info border border-info rounded-pill px-3 py-2">AWS</span>
                            <span class="badge bg-info bg-opacity-10 text-info border border-info rounded-pill px-3 py-2">+4</span>
                        </div>

                        <p class="text-white-50 small mb-3">
                            <i class="bi bi-briefcase me-2"></i>10 yil tajriba · Ex-Google, Ex-Yandex
                        </p>

                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="d-flex align-items-center gap-1">
                                <i class="bi bi-people-fill text-info"></i>
                                <span class="small">980 o'quvchi</span>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <i class="bi bi-play-circle-fill text-success"></i>
                                <span class="small">6 kurs</span>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-info flex-grow-1 rounded-pill text-white">
                                <i class="bi bi-person-plus me-2"></i>Kuzatish
                            </a>
                            <a href="#" class="btn btn-outline-info rounded-pill px-3">
                                <i class="bi bi-chat-dots"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mentor 3 - Jasur Aliyev -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300" data-aos-once="false">
                <div class="card bg-black text-white h-100 border-secondary overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                             class="card-img-top" alt="Jasur Aliyev" style="height: 280px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-success rounded-pill px-3 py-2">
                                <i class="bi bi-patch-check-fill me-1"></i>Senior
                            </span>
                        <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <span class="fw-bold">4.94</span>
                                <span class="text-white-50">(156 ta baho)</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h4 class="card-title fw-bold mb-1">Jasur Aliyev</h4>
                                <p class="text-success mb-0">Senior Backend Engineer</p>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary border-secondary text-white-50 rounded-circle p-2" data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark bg-black border-secondary">
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-person-lines-fill me-2"></i>Profil</a></li>
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-chat-dots me-2"></i>Xabar yozish</a></li>
                                    <li><hr class="dropdown-divider border-secondary"></li>
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-book me-2"></i>Kurslari</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-success bg-opacity-10 text-success border border-success rounded-pill px-3 py-2">Django</span>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success rounded-pill px-3 py-2">FastAPI</span>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success rounded-pill px-3 py-2">PostgreSQL</span>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success rounded-pill px-3 py-2">+2</span>
                        </div>

                        <p class="text-white-50 small mb-3">
                            <i class="bi bi-briefcase me-2"></i>7 yil tajriba · Ex-EPAM, Ex-Uzcard
                        </p>

                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="d-flex align-items-center gap-1">
                                <i class="bi bi-people-fill text-info"></i>
                                <span class="small">890 o'quvchi</span>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <i class="bi bi-play-circle-fill text-success"></i>
                                <span class="small">3 kurs</span>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-success flex-grow-1 rounded-pill">
                                <i class="bi bi-person-plus me-2"></i>Kuzatish
                            </a>
                            <a href="#" class="btn btn-outline-success rounded-pill px-3">
                                <i class="bi bi-chat-dots"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mentor 4 - Lola Murodova -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400" data-aos-once="false">
                <div class="card bg-black text-white h-100 border-secondary overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                             class="card-img-top" alt="Lola Murodova" style="height: 280px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-primary rounded-pill px-3 py-2">
                                <i class="bi bi-patch-check-fill me-1"></i>Top mentor
                            </span>
                        <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <span class="fw-bold">4.99</span>
                                <span class="text-white-50">(203 ta baho)</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h4 class="card-title fw-bold mb-1">Lola Murodova</h4>
                                <p class="text-primary mb-0">Senior UX/UI Designer</p>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary border-secondary text-white-50 rounded-circle p-2" data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark bg-black border-secondary">
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-person-lines-fill me-2"></i>Profil</a></li>
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-chat-dots me-2"></i>Xabar yozish</a></li>
                                    <li><hr class="dropdown-divider border-secondary"></li>
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-book me-2"></i>Kurslari</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-primary bg-opacity-10 text-primary border border-primary rounded-pill px-3 py-2">Figma</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary border border-primary rounded-pill px-3 py-2">Adobe XD</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary border border-primary rounded-pill px-3 py-2">Sketch</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary border border-primary rounded-pill px-3 py-2">+3</span>
                        </div>

                        <p class="text-white-50 small mb-3">
                            <i class="bi bi-briefcase me-2"></i>6 yil tajriba · Ex-Yandex, Ex-Beeline
                        </p>

                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="d-flex align-items-center gap-1">
                                <i class="bi bi-people-fill text-info"></i>
                                <span class="small">1,120 o'quvchi</span>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <i class="bi bi-play-circle-fill text-success"></i>
                                <span class="small">4 kurs</span>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-primary flex-grow-1 rounded-pill">
                                <i class="bi bi-person-plus me-2"></i>Kuzatish
                            </a>
                            <a href="#" class="btn btn-outline-primary rounded-pill px-3">
                                <i class="bi bi-chat-dots"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mentor 5 - Dilnoza Azimova -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-once="false">
                <div class="card bg-black text-white h-100 border-secondary overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                             class="card-img-top" alt="Dilnoza Azimova" style="height: 280px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-warning rounded-pill px-3 py-2">
                                <i class="bi bi-patch-check-fill me-1"></i>Expert
                            </span>
                        <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <span class="fw-bold">4.95</span>
                                <span class="text-white-50">(134 ta baho)</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h4 class="card-title fw-bold mb-1">Dilnoza Azimova</h4>
                                <p class="text-warning mb-0">Data Scientist</p>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary border-secondary text-white-50 rounded-circle p-2" data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark bg-black border-secondary">
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-person-lines-fill me-2"></i>Profil</a></li>
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-chat-dots me-2"></i>Xabar yozish</a></li>
                                    <li><hr class="dropdown-divider border-secondary"></li>
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-book me-2"></i>Kurslari</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-warning bg-opacity-10 text-warning border border-warning rounded-pill px-3 py-2">Python</span>
                            <span class="badge bg-warning bg-opacity-10 text-warning border border-warning rounded-pill px-3 py-2">TensorFlow</span>
                            <span class="badge bg-warning bg-opacity-10 text-warning border border-warning rounded-pill px-3 py-2">Pandas</span>
                            <span class="badge bg-warning bg-opacity-10 text-warning border border-warning rounded-pill px-3 py-2">+2</span>
                        </div>

                        <p class="text-white-50 small mb-3">
                            <i class="bi bi-briefcase me-2"></i>5 yil tajriba · Ex-EPFL, Ex-IT Park
                        </p>

                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="d-flex align-items-center gap-1">
                                <i class="bi bi-people-fill text-info"></i>
                                <span class="small">670 o'quvchi</span>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <i class="bi bi-play-circle-fill text-success"></i>
                                <span class="small">3 kurs</span>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-warning flex-grow-1 rounded-pill text-dark fw-semibold">
                                <i class="bi bi-person-plus me-2"></i>Kuzatish
                            </a>
                            <a href="#" class="btn btn-outline-warning rounded-pill px-3">
                                <i class="bi bi-chat-dots"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mentor 6 - Bobur Hamidov -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200" data-aos-once="false">
                <div class="card bg-black text-white h-100 border-secondary overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                             class="card-img-top" alt="Bobur Hamidov" style="height: 280px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-success rounded-pill px-3 py-2">
                                <i class="bi bi-patch-check-fill me-1"></i>Senior
                            </span>
                        <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <span class="fw-bold">4.92</span>
                                <span class="text-white-50">(98 ta baho)</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h4 class="card-title fw-bold mb-1">Bobur Hamidov</h4>
                                <p class="text-success mb-0">Mobile Developer</p>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary border-secondary text-white-50 rounded-circle p-2" data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark bg-black border-secondary">
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-person-lines-fill me-2"></i>Profil</a></li>
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-chat-dots me-2"></i>Xabar yozish</a></li>
                                    <li><hr class="dropdown-divider border-secondary"></li>
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-book me-2"></i>Kurslari</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-success bg-opacity-10 text-success border border-success rounded-pill px-3 py-2">Flutter</span>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success rounded-pill px-3 py-2">React Native</span>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success rounded-pill px-3 py-2">Kotlin</span>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success rounded-pill px-3 py-2">+1</span>
                        </div>

                        <p class="text-white-50 small mb-3">
                            <i class="bi bi-briefcase me-2"></i>6 yil tajriba · Ex-Samsung, Ex-Epay
                        </p>

                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="d-flex align-items-center gap-1">
                                <i class="bi bi-people-fill text-info"></i>
                                <span class="small">750 o'quvchi</span>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <i class="bi bi-play-circle-fill text-success"></i>
                                <span class="small">3 kurs</span>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-success flex-grow-1 rounded-pill">
                                <i class="bi bi-person-plus me-2"></i>Kuzatish
                            </a>
                            <a href="#" class="btn btn-outline-success rounded-pill px-3">
                                <i class="bi bi-chat-dots"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mentor 7 - Rustam Normatov -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300" data-aos-once="false">
                <div class="card bg-black text-white h-100 border-secondary overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                             class="card-img-top" alt="Rustam Normatov" style="height: 280px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-danger rounded-pill px-3 py-2">
                                <i class="bi bi-patch-check-fill me-1"></i>Expert
                            </span>
                        <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <span class="fw-bold">4.93</span>
                                <span class="text-white-50">(112 ta baho)</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h4 class="card-title fw-bold mb-1">Rustam Normatov</h4>
                                <p class="text-danger mb-0">Security Expert</p>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary border-secondary text-white-50 rounded-circle p-2" data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark bg-black border-secondary">
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-person-lines-fill me-2"></i>Profil</a></li>
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-chat-dots me-2"></i>Xabar yozish</a></li>
                                    <li><hr class="dropdown-divider border-secondary"></li>
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-book me-2"></i>Kurslari</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger rounded-pill px-3 py-2">CEH</span>
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger rounded-pill px-3 py-2">CISSP</span>
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger rounded-pill px-3 py-2">Pen Testing</span>
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger rounded-pill px-3 py-2">+3</span>
                        </div>

                        <p class="text-white-50 small mb-3">
                            <i class="bi bi-briefcase me-2"></i>9 yil tajriba · Ex-Kaspersky, Ex-Huawei
                        </p>

                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="d-flex align-items-center gap-1">
                                <i class="bi bi-people-fill text-info"></i>
                                <span class="small">540 o'quvchi</span>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <i class="bi bi-play-circle-fill text-success"></i>
                                <span class="small">3 kurs</span>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-danger flex-grow-1 rounded-pill">
                                <i class="bi bi-person-plus me-2"></i>Kuzatish
                            </a>
                            <a href="#" class="btn btn-outline-danger rounded-pill px-3">
                                <i class="bi bi-chat-dots"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mentor 8 - Sherzod Karimov -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400" data-aos-once="false">
                <div class="card bg-black text-white h-100 border-secondary overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                             class="card-img-top" alt="Sherzod Karimov" style="height: 280px; object-fit: cover;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-secondary rounded-pill px-3 py-2">
                                <i class="bi bi-patch-check-fill me-1"></i>Senior
                            </span>
                        <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-star-fill text-warning"></i>
                                <span class="fw-bold">4.91</span>
                                <span class="text-white-50">(87 ta baho)</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div>
                                <h4 class="card-title fw-bold mb-1">Sherzod Karimov</h4>
                                <p class="text-secondary mb-0">DevOps Engineer</p>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary border-secondary text-white-50 rounded-circle p-2" data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark bg-black border-secondary">
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-person-lines-fill me-2"></i>Profil</a></li>
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-chat-dots me-2"></i>Xabar yozish</a></li>
                                    <li><hr class="dropdown-divider border-secondary"></li>
                                    <li><a class="dropdown-item text-white-50" href="#"><i class="bi bi-book me-2"></i>Kurslari</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2 mb-3">
                            <span class="badge bg-secondary bg-opacity-10 text-white border border-secondary rounded-pill px-3 py-2">Docker</span>
                            <span class="badge bg-secondary bg-opacity-10 text-white border border-secondary rounded-pill px-3 py-2">K8s</span>
                            <span class="badge bg-secondary bg-opacity-10 text-white border border-secondary rounded-pill px-3 py-2">AWS</span>
                            <span class="badge bg-secondary bg-opacity-10 text-white border border-secondary rounded-pill px-3 py-2">+3</span>
                        </div>

                        <p class="text-white-50 small mb-3">
                            <i class="bi bi-briefcase me-2"></i>6 yil tajriba · Ex-Google, Ex-DigitalOcean
                        </p>

                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="d-flex align-items-center gap-1">
                                <i class="bi bi-people-fill text-info"></i>
                                <span class="small">620 o'quvchi</span>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <i class="bi bi-play-circle-fill text-success"></i>
                                <span class="small">3 kurs</span>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-secondary flex-grow-1 rounded-pill">
                                <i class="bi bi-person-plus me-2"></i>Kuzatish
                            </a>
                            <a href="#" class="btn btn-outline-secondary rounded-pill px-3">
                                <i class="bi bi-chat-dots"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-5" data-aos="fade-up" data-aos-once="false">
            <nav aria-label="Mentorlar pagination">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <span class="page-link bg-black border-secondary text-white-50"><i class="bi bi-chevron-left"></i></span>
                    </li>
                    <li class="page-item active"><span class="page-link bg-primary border-primary text-white">1</span></li>
                    <li class="page-item"><a class="page-link bg-black border-secondary text-white-50" href="#">2</a></li>
                    <li class="page-item"><a class="page-link bg-black border-secondary text-white-50" href="#">3</a></li>
                    <li class="page-item"><a class="page-link bg-black border-secondary text-white-50" href="#">4</a></li>
                    <li class="page-item"><a class="page-link bg-black border-secondary text-white-50" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link bg-black border-secondary text-white-50" href="#"><i class="bi bi-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    </div>

    <!-- Mentor Benefits -->
    <div class="py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right" data-aos-once="false">
                    <h2 class="display-5 fw-bold mb-4">Nega aynan <span class="text-primary">bizning mentorlarimiz?</span></h2>
                    <div class="d-flex flex-column gap-4">
                        <div class="d-flex gap-3">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-3">
                                <i class="bi bi-briefcase-fill text-primary fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">5+ yillik tajriba</h5>
                                <p class="text-white-50">Har bir mentor kamida 5 yil real kompaniyalarda ishlagan</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <div class="bg-info bg-opacity-10 p-3 rounded-3">
                                <i class="bi bi-award-fill text-info fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Xalqaro sertifikatlar</h5>
                                <p class="text-white-50">AWS, Google, Meta kabi kompaniyalar sertifikatlariga ega</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <div class="bg-warning bg-opacity-10 p-3 rounded-3">
                                <i class="bi bi-people-fill text-warning fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold">Individual yondashuv</h5>
                                <p class="text-white-50">Har bir talabaga shaxsiy mentoring va qo'llab-quvvatlash</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-once="false">
                    <div class="bg-black p-5 rounded-4 border border-secondary">
                        <h3 class="fw-bold mb-4">Mentor bo'lishni xohlaysizmi?</h3>
                        <p class="text-white-50 mb-4">
                            O'z bilim va tajribangizni yoshlar bilan baham qiling.
                            Bizning jamoada mentor sifatida faoliyat yuriting.
                        </p>
                        <div class="d-flex gap-3 flex-wrap">
                            <button class="btn btn-primary rounded-pill px-4 py-2">
                                <i class="bi bi-send-plus me-2"></i>Ariza qoldirish
                            </button>
                            <button class="btn btn-outline-primary rounded-pill px-4 py-2">
                                Batafsil ma'lumot
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
