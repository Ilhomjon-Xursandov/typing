@extends('layouts.app')

@section('title', 'Orders edit')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <form action="{{ route('order.update', $order) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <select name="client_id" class="form-select">
                            @foreach($clients as $client)
                                <option value="{{ $client->id }}"
                                    @selected(old('client_id', $order->client_id) == $client->id)>
                                    {{ $client->name }}
                                </option>
                            @endforeach
                        </select>
                        <label for="floatingInput">Mijoz</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="service_id" class="form-select">
                            @foreach($services as $service)
                                <option value="{{ $service->id }}" @selected(old('service_id', $order->servie_id) == $service->id)>
                                    {{ $service->title }}
                                </option>
                            @endforeach
                        </select>
                        <label for="floatingInput">Servis</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="status" class="form-select">
                            @foreach($statuses as $status)
                                <option value="{{ $status }}" @selected(old('$status', $order->status) === $status)>
                                    {{ $status }}
                                </option>
                            @endforeach
                        </select>
                        <label for="floatingInput">Status</label>
                    </div>
                    <div class="form-floating mt-3">
                        <textarea id="floatingInput" name="comment" class="form-control">{{ $order->comment }}</textarea>
                        <label for="floatingInput">Comment</label>
                    </div>
                    <button type="submit" class="btn btn-outline-success mt-3">Saqlash</button>
                </form>
            </div>
        </div>
    </div>
@endsection
