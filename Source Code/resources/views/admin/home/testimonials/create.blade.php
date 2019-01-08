@extends('adminlte::page')

@section('title', 'TEKMEDI | Home | Thêm trích dẫn')

@section('content_header')
    <h1>Thêm trích dẫn</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            {!! Form::open([
                    'url' => route('admin.home_testimonials.store'),
                ])
            !!}
            @include('admin.home.testimonials.form')
            <button type="submit" class="btn btn-primary">Thêm trích dẫn</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop