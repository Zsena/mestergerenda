@extends('layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="height: 500px; background-image: url('/storage/{{ $page->image }}'); position: relative; background-size: cover; background-position: center center">
                <h1 style="color: white; font-size: 48px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)">
                    {{ $page->title }}
                </h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                {!! $page->body !!}
            </div>
        </div>
    </div>

@endsection

@section('css')
    <style>
        .nav item .nav-link {
            color: #fff !important;
        }
    </style>
@endsection