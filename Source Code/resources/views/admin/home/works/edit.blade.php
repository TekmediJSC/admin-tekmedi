@extends('adminlte::page')

@section('title', 'TEKMEDI | Home | Cập nhật sản phẩm')

@section('content_header')
    <h1>Cập nhật sản phẩm</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            {!! Form::model($item, [
                    'url' => route('admin.home_works.update', $item->id),
        			'method' => 'put',
                ])
            !!}
            @include('admin.home.works.form')
            <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop