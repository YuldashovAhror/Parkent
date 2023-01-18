@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Баннеры</h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Изменить</h5>
    </div>
    <img style="margin-left: 10rem; width: 300px; height: 300px;" src="{{$banner->photo_day}}" alt="">
    <div class="card-body">
        <form action="{{route('dashboard.banner.update', $banner->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row g-4 mb-3">
                <div class="col-md-12">
                    <label class="form-label" for="photo_day">Фото День</label>
                    <input class="form-control" name="photo_day" id="photo_day" type="file" placeholder="..." value="">
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="title_uz">Название Uz</label>
                    <input class="form-control" name="title_uz" id="title_uz" type="text" placeholder="..." required="" value="{{$banner->title_uz}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="title_ru">Название Ru</label>
                    <input class="form-control" name="title_ru" id="title_ru" type="text" placeholder="..." required="" value="{{$banner->title_ru}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="title_en">Название En</label>
                    <div class="input-group">
                        <input class="form-control" name="title_en" id="title_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$banner->title_en}}">
                    </div>
                </div>
            </div> 
            <div class="row g-4">
                <div class="col-md-4">
                    <label for="discription_uz" class="form-label">Описание Uz</label>
                    <div class="form-group">
                        <textarea class="ckeditor form-control" name="discription_uz" required>{{$banner->discription_uz}}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="discription_ru">Описание Ru</label>
                    <textarea class="ckeditor form-control" name="discription_ru" required>{{$banner->discription_ru}}</textarea>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="discription_en">Описание En</label>
                    <div class="input-group">
                        <textarea class="ckeditor form-control" name="discription_en" required>{{$banner->discription_en}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="title2_uz">Название Uz</label>
                    <input class="form-control" name="title2_uz" id="title2_uz" type="text" placeholder="..." required="" min="2000" max="2099" value="{{$banner->title2_uz}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="title2_ru">Название Ru</label>
                    <input class="form-control" name="title2_ru" id="title2_ru" type="text" placeholder="..." required="" value="{{$banner->title2_ru}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="title2_en">Название En</label>
                    <div class="input-group">
                        <input class="form-control" name="title2_en" id="title2_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$banner->title2_en}}">
                    </div>
                </div>
            </div>
            <img style="margin-left: 10rem; width: 300px; height: 300px;" src="{{$banner->photo_night}}" alt="">
            <div class="row g-4 mb-3">
                <div class="col-md-12">
                    <label class="form-label" for="photo_night">Фото Ночь</label>
                    <input class="form-control" name="photo_night" id="photo_night" type="file" placeholder="..." value="">
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
</div>
@endsection