@extends('adminlte::page')

@section('title', 'TEKMEDI | Home | Thêm số liệu')

@section('content_header')
    <h1>Thêm số liệu</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            {!! Form::open([
                    'url' => route('admin.home_whychoose.store'),
                ])
            !!}
            @include('admin.home.whychoose.form')
            <button type="submit" class="btn btn-primary">Thêm số liệu</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop