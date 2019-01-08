@extends('adminlte::page')

@section('title', 'TEKMEDI | Home | Cập nhật dịch vụ')

@section('content_header')
    <h1>Cập nhật dịch vụ</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            {!! Form::model($item, [
                    'url' => route('admin.home_services.update', $item->id),
        			'method' => 'put',
                ])
            !!}
            @include('admin.home.services.form')
            <button type="submit" class="btn btn-primary">Cập nhật dịch vụ</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop