@extends('adminlte::page')

@section('title', 'TEKMEDI | Home | Thêm slide')

@section('content_header')
    <h1>Thêm slide</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            {!! Form::open([
                    'url' => route('admin.home_slides.store'),
                ])
            !!}
            @include('admin.home.slides.form')
            <button type="submit" class="btn btn-primary">Thêm slide</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop