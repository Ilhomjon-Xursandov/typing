@extends('layouts.app')


@section('title', 'Client create')
@section('content')
<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Mijozlar ro'yxati</h6>
            <a href="">Barchasini ko'rish</a>
        </div>
        <div class="table-responsive">
            @if($clients->count() > 0)
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                <tr class="text-white">
                    <th scope="col">Date</th>
                    <th scope="col">Ismi</th>
                    <th scope="col">Mobil</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ko'rish</th>
                    <th scope="col">Taxrirlash</th>
                    <th scope="col">O'shirish</th>

                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->created_at }}</td>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->email }}</td>
                        <td><a class="btn btn-outline-success m-2" href="{{ route('client.show', $client) }}">Ko'rish</a></td>
                        <td><a class="btn btn-outline-warning m-2" href="{{ route('client.edit') }}">Taxrirlash</a></td>
                        <td>
                            <form>
                                <button type="submit" class="btn btn-online-danger m-2">O'chirish</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @else
                <tr>
                    <td colspan="7">
                        <div class="d-flex flex-column align-items-center justify-content-center py-5">

                            <h5 class="text-light mb-4">
                                Hozircha hech qanday mijoz yo‘q
                            </h5>

                            <a href="{{ route('client.create') }}"
                               class="btn btn-primary btn-lg px-4">
                                <i class="bi bi-plus-circle me-2"></i>
                                Yangi mijoz qo‘shish
                            </a>

                        </div>
                    </td>
                </tr>
            @endif
        </div>
    </div>
</div>
<!-- Recent Sales End -->
@endsection
