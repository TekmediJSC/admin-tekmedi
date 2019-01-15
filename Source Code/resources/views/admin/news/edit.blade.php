@extends('adminlte::page')

@section('title', 'TEKMEDI')

@section('content_header')
    <h1>Cập nhật dịch vụ</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            {!! Form::model($item, [
                    'url' => route('admin.news.update', $item->id),
        			'method' => 'put',
                ])
            !!}
            @include('admin.news.form')
            <button type="submit" class="btn btn-primary">Cập nhật tin tức</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop