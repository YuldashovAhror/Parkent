@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>О данных</h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Изменить</h5>
    </div>
    <img style="margin-left: 10rem; width: 300px; height: 300px;" src="{{$secondabout->photo}}" alt="">
    <div class="card-body">
        <form action="{{route('dashboard.secondabout.update', $secondabout->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row g-4 mb-3">
                <div class="col-md-6">
                    <label class="form-label" for="photo">Фото</label>
                    <input class="form-control" name="photo" id="photo" type="file" placeholder="..." value="">
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="size">Размер </label>
                    <input class="form-control" name="size" id="size" type="text" placeholder="..." required="" min="2000" max="2099" value="{{$secondabout->size}}">
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="text_uz">Название Uz</label>
                    <input class="form-control" name="text_uz" id="text_uz" type="text" placeholder="..." required="" min="2000" max="2099" value="{{$secondabout->text_uz}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="text_ru">Название Ru</label>
                    <input class="form-control" name="text_ru" id="text_ru" type="text" placeholder="..." required="" value="{{$secondabout->text_ru}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="text_en">Название En</label>
                    <div class="input-group">
                        <input class="form-control" name="text_en" id="text_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$secondabout->text_ru}}">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
</div>
@endsection
