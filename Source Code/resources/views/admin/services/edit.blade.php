@extends('adminlte::page')

@section('title', 'TEKMEDI | Cập nhật dịch vụ')

@section('content_header')
    <h1>Cập nhật dịch vụ</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            {!! Form::model($item, [
                    'url' => route('admin.services.update', $item->id),
        			'method' => 'put',
                ])
            !!}
            @include('admin.services.form')
            <button type="submit" class="btn btn-primary">Cập nhật dịch vụ</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop