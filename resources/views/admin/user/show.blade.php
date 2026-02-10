@extends('layouts.app')

@section('title', 'mijoz')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-start rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Mijozlar ro'yxati</h6>
                <a href="">Barchasini ko'rish</a>
            </div>
            <h2>Foydalanuvchi haqida ma'lumot</h2>
            <ul class="list-unstyled">
                <li>Name: {{ $user->name }}</li>
                <li>Email: {{ $user->email }}</li>
                <li>Role: {{ $user->role }}</li>
                <li>Yaratilgan vaqti: {{ $user->created_at }}</li>
            </ul>

        </div>
    </div>
@endsection
