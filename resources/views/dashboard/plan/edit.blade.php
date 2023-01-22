@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Новости</h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Изменить</h5>
    </div>
    <img style="margin-left: 10rem; width: 300px; height: 300px;" src="{{$plan->photo}}" alt="">
    <div class="card-body">
        <form action="{{route('dashboard.plan.update', $plan->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row g-4 mb-3">
                <div class="col-md-12">
                    <label class="form-label" for="photo">Фото</label>
                    <input class="form-control" name="photo" id="photo" type="file" placeholder="...">
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4 mb-3">
                    <label class="form-label" >Квартира статуса</label>
                    <select name="apartment" class="form-control"  required="">
                        @foreach (App\Models\Apartment::all() as $status)
                            <option value="{{ $status->id }}">{{ $status->room_number}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="area">Площадь:</label>
                    <input class="form-control" name="area" id="area" type="text" placeholder="..." required="" value="{{$plan->area}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="price">Цена:</label>
                    <div class="input-group">
                        <input class="form-control" name="price" id="price" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$plan->price}}">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
</div>
@endsection
