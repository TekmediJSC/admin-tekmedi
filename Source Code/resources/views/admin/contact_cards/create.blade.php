@extends('adminlte::page')

@section('title', 'TEKMEDI | Thêm liên hệ')

@section('content_header')
    <h1>Thêm liên hệ</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            {!! Form::open([
                    'url' => route('admin.contact_cards.store'),
                ])
            !!}
            @include('admin.contact_cards.form')
            <button type="submit" class="btn btn-primary">Thêm liên hệ</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop