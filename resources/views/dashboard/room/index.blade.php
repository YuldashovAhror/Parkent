@extends('layouts.dashboard.main')
@section('content')
<div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
    <h3>События и семинары</h3>
</div>
    <div class="row">
        <div class="col-sm-12">

            <div class="card-header">
                <h5>Список</h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>

                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Строить планы</th>
                            <th scope="col">Площадь комнаты</th>
                            <th scope="col">Название Uz</th>
                            <th scope="col">Название Ru</th>
                            <th scope="col">Название En</th>

                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
                    $num = 1;
                    ?>
                    <tbody>
                        @foreach ($rooms as $room)
                            <tr>
                                <th scope="row">{{$num++}}</th>
                                <td >{{$room->plans->area}}</td>
                                <td >{{$room->room_area}}</td>
                                <td >{{$room->name_uz}}</td>
                                <td >{{$room->name_ru}}</td>
                                <td >{{$room->name_en}}</td>
                                <td>
                                    <form action="{{route('dashboard.room.edit', $room->id)}}" method="GET" style="display: inline;">
                                        <button class="btn btn-xs btn-primary" type="submit"><i class="bx bx-edit-alt"></i></button>
                                    </form>
                                    <div>
                                        <button class="btn btn-xs btn-danger mt-1" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalCenter{{$room->id}}" data-bs-original-title="" title=""><i class="uil-trash"></i></button>
                                    </div>
                                </td>
                                <div class="modal fade" id="exampleModalCenter{{$room->id}}" tabindex="-1" aria-labelledby="exampleModalCenter" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Rostan ham o'chirmoqchimisiz</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title=""></button>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Закрывать</button>
                                            <form action="{{route('dashboard.room.destroy', $room->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger" type="submit"  data-bs-original-title="" title="">Удалить</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
