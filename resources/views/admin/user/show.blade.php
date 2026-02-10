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
                <li>Ismi: {{ $client->name }}</li>
                <li>Telefon raqami: {{ $client->phone }}</li>
                <li>Email: {{ $client->email }}</li>
                <li>Ma'lumot: {{ $client->notes }}</li>
                <li>Yaratilgan vaqti: {{ $client->created_at }}</li>
            </ul>

        </div>
    </div>
@endsection
