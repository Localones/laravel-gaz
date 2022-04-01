@extends('layouts.admin_layout');


@section('title', 'Добавление карточки')

@section('admin-content')

    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
    @elseif(session()->has('info'))
        <div class="alert alert-primary" role="alert">
            {{session('info')}}
        </div>
    @elseif(session()->has('warning'))
        <div class="alert alert-warning" role="alert">
            {{session('warning')}}
        </div>
    @endif

    <div class="row">
        <div class="col-xl-9 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0">Добавление карточки</h5>
                        </div>
                        <hr>
                        <form action="{{route('card.store')}}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Название</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" id="inputEnterYourName" placeholder="Название">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Куб-метр</label>
                                <div class="col-sm-9">
                                    <input type="text" name="cube" class="form-control" id="inputPhoneNo2" placeholder="Куб-метр">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Цена</label>
                                <div class="col-sm-9">
                                    <input type="number" name="price" class="form-control" id="inputEmailAddress2" placeholder="Цена">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputChoosePassword2" class="col-sm-3 col-form-label">Емкость</label>
                                <div class="col-sm-9">
                                    <input type="text" name="capacity" class="form-control" id="inputChoosePassword2" placeholder="Емкость">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Трк</label>
                                <div class="col-sm-9">
                                    <input type="text" name="trk" class="form-control" id="inputConfirmPassword2" placeholder="Трк">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Клапан</label>
                                <div class="col-sm-9">
                                    <input type="text" name="valve" class="form-control" id="inputConfirmPassword2" placeholder="Клапан">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Система</label>
                                <div class="col-sm-9">
                                    <input type="text" name="system" class="form-control" id="inputConfirmPassword2" placeholder="Система">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary px-5">Добавить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
