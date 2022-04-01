@extends('layouts.admin_layout');


@section('title', 'Карточки')

@section('admin-content')

    @if(session()->has('success'))
        <div class="lobibox-notify-wrapper top right">
            <div class="lobibox-notify lobibox-notify-success animated-fast fadeInDown" style="width: 400px;">
                <div class="lobibox-notify-icon-wrapper">
                    <div class="lobibox-notify-icon">
                        <div>
                            <div class="icon-el"><i class="bx bx-check-circle"></i></div>
                        </div>
                    </div>
                </div>
                <div class="lobibox-notify-body">
                    <div class="lobibox-notify-title">Успешно
                        <div></div>
                    </div>
                    <div class="lobibox-notify-msg" style="max-height: 60px;">
                        {{session('success')}}
                    </div>
                </div>
                <span class="lobibox-close">×</span>
                <div class="lobibox-delay-indicator">
                    <div style="width: 98.6667%;"></div>
                </div>
            </div>
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

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap5">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-striped table-bordered dataTable" role="grid"
                                   aria-describedby="example2_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-label="Name: activate to sort column descending"
                                        style="width: 260.578px;" aria-sort="ascending">Title
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending"
                                        style="width: 416.656px;">Cube
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending"
                                        style="width: 191.656px;">Price
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Age: activate to sort column ascending" style="width: 96.3594px;">
                                        Capacity
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Start date: activate to sort column ascending"
                                        style="width: 180.25px;">Trk
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Salary: activate to sort column ascending" style="width: 148.5px;">
                                        Valve
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        aria-label="Salary: activate to sort column ascending" style="width: 148.5px;">
                                        System
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                        style="width: 148.5px;">
                                        Data
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($cards as $card)
                                    <tr role="row" class="odd">
                                        <td>{{$card->title}}</td>
                                        <td>{{$card->cube}}</td>
                                        <td>{{$card->price}}</td>
                                        <td>{{$card->capacity}}</td>
                                        <td>{{$card->trk}}</td>
                                        <td>{{$card->valve}}</td>
                                        <td>{{$card->system}}</td>
                                        <td>{{\Carbon\Carbon::now()}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        {{$cards->links('vendor.pagination.bootstrap-4')}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0">Customer Details</h5>
                <form class="ms-auto position-relative">
                    <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                            class="bi bi-search"></i></div>
                    <input class="form-control ps-5" type="text" placeholder="search">
                </form>
            </div>
            <div class="table-responsive mt-3">
                <table class="table align-middle">
                    <thead class="table-secondary">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Cube</th>
                        <th>Price</th>
                        <th>Capacity</th>
                        <th>Trk</th>
                        <th>Valve</th>
                        <th>System</th>
                        <th>Data</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @php($i = 0)
                        @foreach($cards as $card)
                            <td>
                                {{$i++}}
                            </td>
                            <td>{{$card->title}}</td>
                            <td>{{$card->cube}}</td>
                            <td>{{$card->price}}</td>
                            <td>{{$card->capacity}}</td>
                            <td>{{$card->trk}}</td>
                            <td>{{$card->valve}}</td>
                            <td>{{$card->system}}</td>
                            <td>{{\Carbon\Carbon::now()}}</td>
                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">

                                    <span>
                                        <a href="{{route('card.edit', ['card' => $card->id])}}" class="text-warning">
                                            <i class="bi bi-pencil-fill"></i>
                                        </a>
                                    </span>

                                    <form action="{{route('card.destroy', ['card' => $card->id])}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-danger"
                                                style="background: none; border: none;margin-top: 15px">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>
                        @endforeach

                    </tr>
                    </tbody>
                </table>
                <div class="row">
                    {{$cards->links('vendor.pagination.bootstrap-4')}}
                </div>
            </div>
        </div>
    </div>


@endsection
