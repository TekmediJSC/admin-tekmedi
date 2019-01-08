@extends('adminlte::page')

@section('title', 'TEKMEDI | Thêm dịch vụ')

@section('content_header')
    <h1>Thêm dịch vụ</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            {!! Form::open([
                    'url' => route('admin.services.store'),
                ])
            !!}
            @include('admin.services.form')
            <button type="submit" class="btn btn-primary">Thêm dịch vụ</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop