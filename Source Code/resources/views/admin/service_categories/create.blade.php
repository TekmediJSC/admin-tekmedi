@extends('adminlte::page')

@section('title', 'TEKMEDI | Thêm danh mục dịch vụ')

@section('content_header')
    <h1>Thêm danh mục dịch vụ</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            {!! Form::open([
                    'url' => route('admin.service_categories.store'),
                ])
            !!}
            @include('admin.service_categories.form')
            <button type="submit" class="btn btn-primary">Thêm danh mục dịch vụ</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop