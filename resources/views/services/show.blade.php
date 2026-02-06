@extends('layouts.app')

@section('title', 'servis')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-left rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Mijozlar ro'yxati</h6>
            </div>
            <ul>
                <li>Title: {{ $service->title }}</li>
                <li>Description: {{ $service->description }}</li>
                <li>Price: {{ $service->price }} so'm</li>
                <li>Active: {{$service->is_Active?'Faol emas':'Faol'}}</li>
            </ul>
        </div>
    </div>
@endsection
