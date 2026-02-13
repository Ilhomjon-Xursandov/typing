@extends('layouts.app')

@section('title', 'orders')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12 text-start">
            <div class="bg-secondary rounded h-100 p-4">
                <Ul class="list-unstyled">
                    <li>Mijoz: {{ $order->client->name }}</li>
                    <li>Servis: {{ $order->service->title }}</li>
                    <li>Status: {{ $order->status }}</li>
                    <li>Comment: {{ $order->comment }}</li>
                </Ul>
            </div>
        </div>
    </div>
@endsection
