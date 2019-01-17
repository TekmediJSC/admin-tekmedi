@extends('adminlte::page')

@section('title', 'TEKMEDI | Thêm danh mục tin tức')

@section('content_header')
    <h1>Thêm danh mục tin tức</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            {!! Form::open([
                    'url' => route('admin.news_categories.store'),
                ])
            !!}
            @include('admin.news_categories.form')
            <button type="submit" class="btn btn-primary">Thêm danh mục tin tức</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop