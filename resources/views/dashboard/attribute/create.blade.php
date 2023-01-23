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
        <form action="{{route('dashboard.attribute.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="name_uz">Название Uz</label>
                    <input class="form-control" name="name_uz" id="name_uz" type="text" placeholder="..." required="" value="">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="name_ru">Название Ru</label>
                    <input class="form-control" name="name_ru" id="name_ru" type="text" placeholder="..." required="" value="">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="name_en">Название En</label>
                    <div class="input-group">
                        <input class="form-control" name="name_en" id="name_en" type="text" placeholder="..." aria-describedby="inputGroupPrepend2" required="" value="">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
</div>
@endsection
