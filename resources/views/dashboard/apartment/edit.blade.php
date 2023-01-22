@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Квартира</h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Изменить</h5>
    </div>
    <div class="card-body">
        <form action="{{route('dashboard.apartment.update', $apartment->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row g-4">
                <div class="col-md-6 mb-3">
                    <label class="form-label" >Квартира статуса</label>
                    <select name="building" class="form-control"  required="">
                        @foreach (App\Models\Building::all() as $status)
                            <option value="{{ $status->id }}">{{ $status->name_ru}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="room_number">Номер комнаты</label>
                    <input class="form-control" name="room_number" id="room_number" type="number" required="" value="{{$apartment->room_number}}">
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
</div>
@endsection
