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
        <form action="{{route('dashboard.project.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- <div class="row g-4 mb-3">
                <div class="col-md-12">
                    <label class="form-label" for="photo">Фото</label>
                    <input class="form-control" name="photo" id="photo" type="file" placeholder="..." required="" value="">
                </div>
            </div> --}}
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="photo">Фото</label>
                    <input class="form-control" name="photo" id="photo" type="file" placeholder="..." required="" min="2000" max="2099" value="">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="svg">Фото svg</label>
                    <input class="form-control" name="svg" id="svg" type="file" placeholder="..." required="" value="">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="name">Название</label>
                    <div class="input-group">
                        <input class="form-control" name="name" id="name" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
</div>
@endsection