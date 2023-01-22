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
                            <th scope="col">Фото</th>
                            <th scope="col">SVG</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php
                    $num = 1;
                    ?>
                    <tbody>
                        {{-- @dd($projects) --}}
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $num++ }}</th>
                                <td>
                                    @if (isset($project))
                                        <img src="{{ $project->photo }}" alt="" style="width: 100px; height: 100px;">
                                        <svg width="100px" height="100px" viewBox="{{$project->svgs[0]['viewBox']}}"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            @foreach ($project->svgs as $svg)
                                                <path data-number="1" d="{{ $svg['svg'] }}" fill="#167667" fill-opacity="0.6" />
                                            @endforeach
                                        </svg>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('dashboard.project.edit', $project->id) }}" method="GET"
                                        style="display: inline;">
                                        <button class="btn btn-xs btn-primary" type="submit"><i
                                                class="bx bx-edit-alt"></i></button>
                                    </form>
                                    <div>
                                        <button class="btn btn-xs btn-danger mt-1" data-bs-toggle="modal" style="cursor: pointer;"
                                            data-bs-target="#exampleModalCenter{{ $project->id }}">
                                            <i class="uil-trash"></i>
                                            </button>
                                    </div>
                                </td>
                                <div class="modal fade" id="exampleModalCenter{{ $project->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalCenter" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Rostan ham o'chirmoqchimisiz</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close" data-bs-original-title="" title=""></button>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal"
                                                    data-bs-original-title="" title="">Закрывать</button>
                                                <form action="{{ route('dashboard.project.destroy', $project->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger" type="submit" data-bs-original-title=""
                                                        title="">Удалить</button>
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
