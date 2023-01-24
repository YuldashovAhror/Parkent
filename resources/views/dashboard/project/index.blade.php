@extends('layouts.dashboard.main')
@section('styles')
    <style>
        .map {
            height: 1050px;
            position: relative;
            overflow: hidden;
        }

        .map img {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 3;
            width: 100%;
            height: auto;
            -webkit-transition: .3s all;
            transition: .3s all;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .map svg {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 3;
            width: 100%;
            height: auto;
            -webkit-transition: .3s all;
            transition: .3s all;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .map svg path {
            opacity: 0.5;
            fill: blue;
            cursor: pointer;
            transition: 0.3s;
        }

        .map path:hover {
            opacity: 0.8;
            transition: 0.3s;
        }

        .map path[checked=checked] {
            opacity: 0.8;
            transition: 0.3s;
            fill: red;
        }

        .map polygon {
            opacity: 0.5;
            fill: white;
            cursor: pointer;
            transition: 0.3s;
        }

        .map polygon:hover {
            opacity: 0.8;
            transition: 0.3s;
        }

        .map polygon[checked=checked] {
            opacity: 0.8;
            transition: 0.3s;
            fill: red;
        }

        .map img {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            z-index: 2;
            width: 100%;
            height: auto;
        }

        .map input[type=radio] {
            visibility: visible;
        }

        [data-selected=true] {
            fill: red;
        }

        [data-selected=false] {
            fill: olive;
            opacity: .5;
        }
    </style>
@endsection
@section('content')
    <div class="col-sm-6" style="padding-top: 2rem; padding-bottom: 1.5rem">
        <h3>События и семинары</h3>
    </div>
    <div class="map">
        <img src="{{ $project->photo }}" alt="building">
        <svg viewBox="{{ $project->svgs->first()->viewBox }}" xmlns="http://www.w3.org/2000/svg"
            style="height: 724.69px; width: 1603px">
            @foreach ($project->svgs as $p)
                <a href="{{ $p->id }}">
                    <path d="{{ $p->coordinates }}" checked="false" class="main_svg_{{ $p->id }}"
                        onclick="ali({{ $p->id }})" id="{{ $p->id }}" />
                </a>
            @endforeach
        </svg>


        {{-- <svg width="1920" height="1171" viewBox="{{ $project->svgs[0]['viewBox'] }}" fill="none"
            xmlns="http://www.w3.org/2000/svg"
            style="position: absolute; z-index: 2; left: 0; top: 0; width: 100%; height: 100%;">
            @foreach ($project->svgs as $svg)
                    <path data-number="1" d="{{ $svg['svg'] }}" fill="#167667" fill-opacity="0.6" />
            @endforeach
        </svg> --}}
    </div>
@endsection
@section('scripts')
    {{-- @foreach ($projects[0]->svgs as $p)
        <script>
            var colors = "0f0 0ff f60 f0f 00f f00".split(' '), i = 0;
            jQuery(function ali_{{$p->id}}($) {
                $('path').click(function () {
                    this.style.fill = "#" + colors[i++ % colors.length];
                });
            });
        </script>
    @endforeach
    <script>
        function ali(id) {
            jQuery("path.main_svg").attr('checked', false);
            jQuery("polygon.main_svg").attr('checked', false);
            $('input[name=svg_id][checked=checked]').attr('checked', false);
            jQuery("#svg_" + id).attr('checked', true);
            $('input[name=svg_id][value=' + id + ']').attr('checked', 'checked');
        }
    </script> --}}
@endsection
