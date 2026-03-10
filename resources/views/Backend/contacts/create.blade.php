@extends('layouts.app')

@section('title', 'contacts create')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h3>Aloqa ma'lumotlarini yaratish</h3>
                <div class="text-success">Diqqat! ( <b class="text-danger">*</b> ) orqali ko'rsatilgan maydonlarni kiritish majburiy</div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <form action="{{ route('admin.contacts.store') }}" method="post">
                        @csrf
                        @method('POST')
                    <h6 class="mb-4">Asosiy ma'lumotlar</h6>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Yashash manzili <b class="text-danger">*</b></label>
                        <input type="text" name="path" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Telefon raqami 1 <b class="text-danger">*</b></label>
                        <input type="text" name="phone1" class="form-control" id="exampleInputText">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Telefon raqami 2</label>
                        <input type="text" name="phone2" class="form-control" id="exampleInputText">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Telefon raqami 3</label>
                        <input type="text" name="phone3" class="form-control" id="exampleInputText">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Horizontal Form</h6>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email 1</label>
                        <div class="col-sm-10">
                            <input type="email" name="email1" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email 3</label>
                        <div class="col-sm-10">
                            <input type="email" name="email2" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email 3</label>
                        <div class="col-sm-10">
                            <input type="email" name="email3" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Telegram<b class="text-danger">*</b></label>
                        <div class="col-sm-10">
                            <input type="text" name="telegram" class="form-control" id="exampleInputText">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Instagram<b class="text-danger">*</b></label>
                        <div class="col-sm-10">
                            <input type="text" name="instagram" class="form-control" id="exampleInputText">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Facebook<b class="text-danger">*</b></label>
                        <div class="col-sm-10">
                            <input type="text" name="facebook" class="form-control" id="exampleInputText">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success"><i class="bi bi-floppy me-2"></i>Saqlash</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
