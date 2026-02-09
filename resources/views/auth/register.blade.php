@extends('layouts.auth')

@section('title', 'signup')

@section('content')
    <!-- Sign Up Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="index.html" class="">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                        </a>
                        <h3>Ro'yxatdan o'tish</h3>
                    </div>
                    <form action="{{ route('register.store') }}" method="post">
                        @csrf

                        <div class="form-floating mb-3">
                            <input required type="text" name="name" class="form-control" id="floatingText" placeholder="jhondoe">
                            <label for="floatingText">Username</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input required type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Elektron pochta</label>
                        </div>

                        <div class="form-floating mb-4">
                            <input required minlength="6" type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Parol</label>
                        </div>

                        <div class="form-floating mb-4">
                            <input required minlength="6" type="password" name="password_confirmation" class="form-control" id="floatingPassword2" placeholder="Password">
                            <label for="floatingPassword2">Parolni qayta kiriting</label>
                        </div>

                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Ro'yxatdan o'tish</button>
                    </form>

                    <p class="text-center mb-0">Akountingiz bormi? <a href="{{ route('login') }}">Kirish</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up End -->
@endsection
