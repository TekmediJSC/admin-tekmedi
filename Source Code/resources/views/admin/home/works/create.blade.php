@extends('adminlte::page')

@section('title', 'TEKMEDI')

@section('content_header')
    <h1>Thêm sản phẩm</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            {!! Form::open([
                    'url' => route('admin.home_works.store'),
                ])
            !!}
            @include('admin.home.works.form')
            <button type="submit" class="btn btn-primary">Thêm sản phẩm</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop