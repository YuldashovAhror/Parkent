@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Новости</h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Изменить</h5>
    </div>
    <img  src="{{$project->photo}}" alt="">
    <div class="card-body">
        <form action="{{route('dashboard.project.update', $project->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row g-4 mb-3">
                <div class="col-md-6">
                    <label class="form-label" for="photo">Фото</label>
                    <input class="form-control" name="photo" id="photo" type="file" min="2000" max="2099">
                </div>
                <div class="col-md-6 ">
                    <label class="form-label" for="svg">Фото svg</label>
                    <input class="form-control" name="svg" id="svg" type="file">
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
</div>
@endsection
