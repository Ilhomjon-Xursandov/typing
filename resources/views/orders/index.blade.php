@extends('layouts.app')

@section('title', 'orders')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                @if($orders->isEmpty())
                    <div class="d-flex flex-column align-items-center justify-content-center py-5">

                        <h5 class="text-light mb-4">
                            Hozircha hech qanday servis yo‘q
                        </h5>

                        <a href="{{ route('order.create') }}"
                           class="btn btn-primary btn-lg px-4">
                            <i class="bi bi-plus-circle me-2"></i>
                            Yangi servis qo'shish
                        </a>
                    </div>
                @else
                    <h6 class="mb-4">Buyurtmalar yo'yxati <a href="{{ route('order.create') }}" class=""><i class="bi bi-bag-plus text-success"></i></a></h6>
                    <div class="row g-3">
                        @foreach($orders as $order)
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="card h-100">
                                    <img src="{{ asset('img/service.png') }}" class="card-img-top" alt="service">
                                    <div class="card-body">
                                        <h5 class="card-title text-black-50"><a href="{{ route('service.show', $order->service) }}">{{ $order->service->title }}</a></h5>
                                        <p class="card-text">{{ $order->service->description }}. Kurs narxi: {{ $order->service->price }}</p>
                                        <p>Buyurtmachi: <a href="{{ route('client.show', $order->client) }}">{{ $order->client->name }}</a></p>
                                        <div class="d-flex gap-2">
                                            <a href="{{ route('order.edit', $order) }}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                                            <form action="{{ route('order.destroy', $order) }}" method="post" class="m-0">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- shu col ni ko‘paytirasan -->
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
