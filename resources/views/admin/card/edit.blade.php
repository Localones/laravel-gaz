@extends('layouts.admin_layout');


@section('title', 'Редактирование')

@section('admin-content')

    <div class="row">
        <div class="col-xl-9 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="border p-4 rounded">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0">Редактирование карточки</h5>
                        </div>
                        <hr>
                        <form action="{{route('card.update', ['card' => $card->id])}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">Название</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" id="inputEnterYourName" value="{{$card->title}}" placeholder="Название">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Куб-метр</label>
                                <div class="col-sm-9">
                                    <input type="text" name="cube" class="form-control" id="inputPhoneNo2" value="{{$card->cube}}" placeholder="Куб-метр">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Цена</label>
                                <div class="col-sm-9">
                                    <input type="number" name="price" class="form-control" id="inputEmailAddress2" value="{{$card->price}}" placeholder="Цена">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputChoosePassword2" class="col-sm-3 col-form-label">Емкость</label>
                                <div class="col-sm-9">
                                    <input type="text" name="capacity" class="form-control" id="inputChoosePassword2" value="{{$card->capacity}}" placeholder="Емкость">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Трк</label>
                                <div class="col-sm-9">
                                    <input type="text" name="trk" class="form-control" id="inputConfirmPassword2" value="{{$card->trk}}" placeholder="Трк">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Клапан</label>
                                <div class="col-sm-9">
                                    <input type="text" name="valve" class="form-control" id="inputConfirmPassword2" value="{{$card->valve}}" placeholder="Клапан">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputConfirmPassword2" class="col-sm-3 col-form-label">Система</label>
                                <div class="col-sm-9">
                                    <input type="text" name="system" class="form-control" id="inputConfirmPassword2" value="{{$card->system}}" placeholder="Система">
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary px-5">Изменить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
