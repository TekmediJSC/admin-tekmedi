@extends('adminlte::page')

@section('title', 'TEKMEDI | Thêm tin tức')

@section('content_header')
    <h1>Thêm tin tức</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            {!! Form::open([
                    'url' => route('admin.news.store'),
                ])
            !!}
            @include('admin.news.form')
            <button type="submit" class="btn btn-primary">Thêm tin tức</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop