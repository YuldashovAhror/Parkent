@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Новости</h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Добавить</h5>
    </div>
    <div class="card-body">
        <form action="{{route('dashboard.attributeplan.store')}}" method="POST">
            @csrf
            <div class="row g-4 mb-3">
                <div class="col-md-4 mb-3">
                    <label class="form-label" >Квартира статуса</label>
                    <select name="plan_id" class="form-control"  required="">
                        @foreach (App\Models\Plan::all() as $status)
                            <option value="{{ $status->id }}">{{ $status->room}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" >Квартира статуса</label>
                    <select name="atribute_id" class="form-control"  required="">
                        @foreach (App\Models\Attribute::all() as $status)
                            <option value="{{ $status->id }}">{{ $status->name_ru}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="size">Комната</label>
                    <input class="form-control" name="size" id="size" type="text" placeholder="..." required="" value="">
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
</div>
@endsection
