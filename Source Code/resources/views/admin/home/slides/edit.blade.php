@extends('adminlte::page')

@section('title', 'TEKMEDI | Home | Cập nhật slide')

@section('content_header')
    <h1>Cập nhật slide</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            {!! Form::model($item, [
                    'url' => route('admin.home_slides.update', $item->id),
        			'method' => 'put',
                ])
            !!}
            @include('admin.home.slides.form')
            <button type="submit" class="btn btn-primary">Cập nhật slide</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop