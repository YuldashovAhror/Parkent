@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>О компании </h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Добавить</h5>
    </div>
    <div class="card-body">
        <form action="{{route('dashboard.about.update', $about->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="title_uz">Процентов строительства</label>
                    <input class="form-control" name="title_uz" id="title_uz" type="text" placeholder="..." required="" min="1" max="100" value="{{$about->title_uz}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="title_ru">День строительства</label>
                    <input class="form-control" name="title_ru" id="title_ru" type="text" placeholder="..." required="" value="{{$about->title_ru}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="title_en">Размер пдф</label>
                    <input class="form-control" name="title_en" id="title_en" type="text" step="any" placeholder="..." required="" value="{{$about->title_en}}">
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label for="discription_uz" class="form-label">Описание Uz</label>
                    <div class="form-group">
                        <textarea class="ckeditor form-control" name="discription_uz" required>{{$about->discription_uz}}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="discription_ru">Описание Ru</label>
                    <textarea class="ckeditor form-control" name="discription_ru" required>{{$about->discription_ru}}</textarea>
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="discription_en">Описание En</label>
                    <div class="input-group">
                        <textarea class="ckeditor form-control" name="discription_en" required>{{$about->discription_en}}</textarea>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
</div>
@endsection