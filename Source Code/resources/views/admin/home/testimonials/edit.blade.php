@extends('adminlte::page')

@section('title', 'TEKMEDI | Home | Cập nhật trích dẫn')

@section('content_header')
    <h1>Cập nhật trích dẫn</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            {!! Form::model($item, [
                    'url' => route('admin.home_testimonials.update', $item->id),
        			'method' => 'put',
                ])
            !!}
            @include('admin.home.testimonials.form')
            <button type="submit" class="btn btn-primary">Cập nhật trích dẫn</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop