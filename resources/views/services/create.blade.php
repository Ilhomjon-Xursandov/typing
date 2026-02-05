@extends('layouts.app')

@section('title', 'create service')

@section('content')
    <div class="col-sm-12 col-xl-12 pt-4 px-4">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Floating Label</h6>
            <form action="{{ route('service.store') }}" method="post">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" name="title" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Title</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;"></textarea>
                    <label for="floatingTextarea">Descriopton</label>
                </div>
                <div class="form-floating mt-3">
                    <input type="number" name="price" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Price</label>
                </div>
                <button type="submit" class="btn btn-outline-success mt-3">Saqlash</button>

            </form>
        </div>
    </div>
@endsection
