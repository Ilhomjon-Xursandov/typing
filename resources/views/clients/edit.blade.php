@extends('layouts.app')

@section('title', 'Mijoz yaratish')

@section('content')
    <div class="container-fluid pt-2 px-2">
        <div class="row g-2">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Floating Label</h6>
                    <form action="{{ route('client.update', $client)}} " method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-floating mb-3">
                            <input type="text" name="name" value="{{$client->name}}" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">To'liq ismingiz</label>
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-light">Telefon raqami</label>
                            <div class="input-group">
                                <span class="input-group-text">+998</span>
                                <input type="text"
                                       name="phone"
                                       value="{{ old('phone', substr($client->phone, -9)) }}"
                                       class="form-control"
                                       maxlength="9"
                                       pattern="[0-9]{9}"
                                       inputmode="numeric"
                                       placeholder="901234567"
                                       required>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" value="{{ $client->email }}" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Eelektron pochta</label>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control" name="notes" placeholder="Leave a comment here" id="floatingTextarea" style="height: 150px;">{{ $client->notes }}</textarea>
                            <label for="floatingTextarea">Notes</label>
                        </div>
                        <button type="submit" class="btn btn-outline-success m-2">Taxrirlash</button>
                        Saqlashdan oldin iltimos ma'lumotaringiz to'g'ri ekanligini tekshiring
                    </form>
                </div>
            </div>

            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">File Input</h6>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control bg-dark" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input class="form-control bg-dark" type="file" id="formFileMultiple" multiple="">
                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Small file input example</label>
                        <input class="form-control form-control-sm bg-dark" id="formFileSm" type="file">
                    </div>
                    <div>
                        <label for="formFileLg" class="form-label">Large file input example</label>
                        <input class="form-control form-control-lg bg-dark" id="formFileLg" type="file">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
