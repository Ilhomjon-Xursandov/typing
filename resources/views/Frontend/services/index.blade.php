@extends('layouts.app')

@section('title', 'service create')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                @if($services->isEmpty())
                    <div class="d-flex flex-column align-items-center justify-content-center py-5">

                        <h5 class="text-light mb-4">
                            Hozircha hech qanday servis yo‘q
                        </h5>

                        <a href="{{ route('service.create') }}"
                           class="btn btn-primary btn-lg px-4">
                            <i class="bi bi-plus-circle me-2"></i>
                            Yangi servis qo'shish
                        </a>
                    </div>
                @else
                    <h6 class="mb-4">Responsive Table</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Sarlavha</th>
                                <th scope="col">Narxi</th>
                                <th scope="col">Holati</th>
                                <th scope="col">Qachondan boshlandi?</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $service)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>
                                        {{ $service->title }}
                                        <sup>
                                            <a href="{{ route('service.show', $service) }}"> <i class="bi bi-eye" style="color: green"></i></a>
                                        </sup>
                                    </td>
                                    <td>{{ $service->price }}</td>
                                    <td>
                                        @if($service->is_active)
                                            <p class="text-success">Faol</p>
                                        @else
                                            <p class="text-danger">Faol emas</p>
                                        @endif
                                    </td>
                                    <td>{{ $service->created_at }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
