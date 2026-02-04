@extends('layouts.app')


@section('title', 'Client create')
@section('content')
<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Mijozlar ro'yxati</h6>
            <a href="{{route('client.create')}}" class="btn btn-success"><i class="bi bi-plus-lg"></i> Qo'shish</a>
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
                    <th scope="col">O'chirish</th>

                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->created_at }}</td>
                        <td>{{ $client->name }}
                            <sup>
                                <a href="{{ route('client.show', $client) }}"> <i class="bi bi-eye" style="color: green"></i></a>
                                <a href="{{route('client.edit', $client)}}"><i class="bi bi-pencil-square" style="color: yellow"></i></a>
                            </sup>
                        </td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->email }}</td>
                        <td>
                            <form action="{{ route('client.destroy', $client) }}" method="POST"
                                  onsubmit="return confirm('Rostdan ham {{ $client->name }} mijozini o‘chirmoqchimisiz?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm m-2">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
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
