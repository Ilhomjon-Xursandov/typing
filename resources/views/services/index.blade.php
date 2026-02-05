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
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Country</th>
                                <th scope="col">ZIP</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>John</td>
                                <td>Doe</td>
                                <td>jhon@email.com</td>
                                <td>USA</td>
                                <td>123</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>mark@email.com</td>
                                <td>UK</td>
                                <td>456</td>
                                <td>Member</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>jacob@email.com</td>
                                <td>AU</td>
                                <td>789</td>
                                <td>Member</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
