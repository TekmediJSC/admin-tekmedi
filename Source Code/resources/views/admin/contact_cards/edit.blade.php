@extends('adminlte::page')

@section('title', 'TEKMEDI | Cập nhật liên hệ')

@section('content_header')
    <h1>Cập nhật liên hệ</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            {!! Form::model($item, [
                    'url' => route('admin.contact_cards.update', $item->id),
        			'method' => 'put',
                ])
            !!}
            @include('admin.contact_cards.form')
            <button type="submit" class="btn btn-primary">Cập nhật liên hệ</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop