@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Новости</h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Изменить</h5>
    </div>
    <img style="margin-left: 10rem; width: 300px; height: 300px;" src="{{$secondbanner->photo}}" alt="">
    <div class="card-body">
        <form action="{{route('dashboard.secondbanner.update', $secondbanner->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row g-4 mb-3">
                <div class="col-md-12">
                    <label class="form-label" for="photo">Фото</label>
                    <input class="form-control" name="photo" id="photo" type="file" placeholder="..." value="">
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="title_uz">Название Uz</label>
                    <input class="form-control" name="title_uz" id="title_uz" type="text" placeholder="..." required="" min="2000" max="2099" value="{{$secondbanner->title_uz}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="title_ru">Название Ru</label>
                    <input class="form-control" name="title_ru" id="title_ru" type="text" placeholder="..." required="" value="{{$secondbanner->title_ru}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="title_en">Название En</label>
                    <div class="input-group">
                        <input class="form-control" name="title_en" id="title_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="{{$secondbanner->title_ru}}">
                    </div>
                </div>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <label for="discription_uz" class="form-label">Описание Uz</label>
                    <div class="form-group">
                        <textarea class="ckeditor form-control" name="discription_uz" required>{{$secondbanner->discription_uz}}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="discription_ru">Описание Ru</label>
                    <textarea class="ckeditor form-control" name="discription_ru" required>{{$secondbanner->discription_ru}}</textarea>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="discription_en">Описание En</label>
                    <div class="input-group">
                        <textarea class="ckeditor form-control" name="discription_en" required>{{$secondbanner->discription_en}}</textarea>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
</div>
@endsection