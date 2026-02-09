@extends('layouts.app')

@section('title', 'orders')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <form action="{{ route('order.store') }}" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <select name="client_id" class="form-control">
                            @foreach($clients as $client)
                                <option value="{{ $client->id }}">
                                    {{ $client->name }}
                                </option>
                            @endforeach
                        </select>
                        <label for="floatingInput">Mijoz</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="service_id" class="form-control">
                            @foreach($services as $service)
                                <option value="{{ $service->id }}">
                                    {{ $service->title }}
                                </option>
                            @endforeach
                        </select>
                        <label for="floatingInput">Servis</label>
                    </div>
                    <div class="form-floating mt-3">
                        <textarea id="floatingInput" name="" class="form-control"></textarea>
                        <label for="floatingInput">Comment</label>
                    </div>
                    <button type="submit" class="btn btn-outline-success mt-3">Saqlash</button>
                </form>
            </div>
        </div>
    </div>
@endsection
