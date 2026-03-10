@extends('layouts.app')

@section('title', 'contacts')

@section('content')
    @if(empty($contact))
        <div class="container-fluid pt-4 px-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h1>Hechqanday aloqa ma'lumotlari topilmadi</h1>
                    <div class="text-center">
                        <a href="{{ route('admin.contacts.create') }}" class="btn btn-success">Ma'lumotlarni yaratish<i class="bi bi-plus ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container-fluid pt-4 px-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h1>
                        Aloqa ma'lumotlarini sozlash
                        <a href="{{ route('admin.contacts.edit', $contact) }}" class="link-success link-offset-2
                link-underline-opacity-25 link-underline-opacity-100-hover"><i class="bi bi-pencil-square ms-5"></i></a>
                    </h1>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-4 px-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                <div class="card-header"><i class="bi bi-geo-alt me-1"></i>Manzil</div>
                                <div class="card-body">
                                    <h5 class="card-title">Bizning manzilimiz</h5>
                                    <p class="card-text">{{ $contact->path }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                <div class="card-header"><i class="bi bi-phone me-1"></i>Telefon</div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li>Tel: {{ $contact->phone1 }}</li>
                                        <li>Tel: {{ $contact->phone2 }}</li>
                                        <li>Tel: {{ $contact->phone3 }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                                <div class="card-header"><i class="bi bi-envelope-at me-1"></i>Email</div>
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li>Email: {{ $contact->email1 }}</li>
                                        <li>Email: {{ $contact->email2 }}</li>
                                        <li>Email: {{ $contact->email3 }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-4 px-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <div class="row text-center">
                        <!-- Instagram -->
                        <div class="col-md-4">
                            <div class="card border-0 bg-transparent">
                                <div class="card-body">
                                    <i class="bi bi-instagram fs-1 mb-3"></i>
                                    <p>
                                        <a href="https://instagram.com/yourpage" target="_blank">
                                            {{ $contact->instagram }}
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Telegram -->
                        <div class="col-md-4">
                            <div class="card border-0 bg-transparent">
                                <div class="card-body">
                                    <i class="bi bi-telegram fs-1 mb-3"></i>
                                    <p>
                                        <a href="https://t.me/yourchannel" target="_blank">
                                            {{$contact->telegram}}
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Facebook -->
                        <div class="col-md-4">
                            <div class="card border-0 bg-transparent">
                                <div class="card-body">
                                    <i class="bi bi-facebook fs-1 mb-3"></i>
                                    <p>
                                        <a href="https://facebook.com/yourpage" target="_blank">
                                            {{$contact->facebook}}
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-4 px-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    Aloqa ma'lumotlarini yangilash uchun bosing: <a href="#" class="link-success link-offset-2
                link-underline-opacity-25 link-underline-opacity-100-hover"><i class="bi bi-pencil-square me-1"></i>Yangilash</a>
                </div>
            </div>
        </div>
    @endif
@endsection
