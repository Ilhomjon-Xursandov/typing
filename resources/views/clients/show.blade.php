@extends('layouts.app')

@section('title', 'mijoz')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Mijozlar ro'yxati</h6>
                <a href="">Barchasini ko'rish</a>
            </div>
            <h2>Foydalanuvchi haqida ma'lumot</h2>
            Ismi: {{ $client->name }}<br>
            Telefon raqami: {{ $client->phone }}<br>
            Email: {{ $client->email }}<br>
            Ma'lumot: {{ $client->notes }}<br>
            Yaratilgan vaqti: {{ $client->created_at }}<br>
        </div>
    </div>

@endsection
