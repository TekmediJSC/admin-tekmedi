@extends('adminlte::page')

@section('title', 'TEKMEDI | Cập nhật danh mục dịch vụ')

@section('content_header')
    <h1>Cập nhật danh mục dịch vụ</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            {!! Form::model($item, [
                    'url' => route('admin.service_categories.update', $item->id),
        			'method' => 'put',
                ])
            !!}
            @include('admin.service_categories.form')
            <button type="submit" class="btn btn-primary">Cập nhật danh mục dịch vụ</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop