@extends('layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="height: 500px; background-image: url('/storage/{{ $page->image }}'); background-size: cover; background-position: center center">

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <h1>{{ $page->title }}</h1>
            <div class="col-md-12">
                {!! $page->body !!}
            </div>
        </div>
    </div>

@endsection