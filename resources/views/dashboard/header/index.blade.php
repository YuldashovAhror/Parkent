@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>Заголовок </h3>
</div>
<div class="card">
    <div class="card-header pb-0">
        <h5>Добавить</h5>
    </div>
    <div class="card-body">
        <form action="{{route('dashboard.header.update', $header->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('put') }}
            <div class="row g-4">
                <div class="col-md-12 mb-3">
                    <label class="form-label" for="pdf">Пдф</label>
                    <div class="input-group">
                        <input class="form-control" name="pdf" id="pdf" type="file" placeholder="..." aria-describedby="inputGroupPrepend2"  value="">
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <label class="form-label" for="percent">Процентов строительства</label>
                    <input class="form-control" name="percent" id="percent" type="number" placeholder="..." required="" min="1" max="100" value="{{$header->percent}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="build_day">День строительства</label>
                    <input class="form-control" name="build_day" id="build_day" type="text" placeholder="..." required="" value="{{$header->build_day}}">
                </div>
                <div class="col-md-4 mb-3">
                    <label class="form-label" for="pdf_size">Размер пдф</label>
                    <input class="form-control" name="pdf_size" id="pdf_size" type="number" step="any" placeholder="..." required="" value="{{$header->pdf_size}}">
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Сохранить</button>
        </form>
    </div>
</div>
@endsection