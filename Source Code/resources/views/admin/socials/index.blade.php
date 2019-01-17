@extends('adminlte::page')

@section('title', 'TEKMEDI | Mạng xã hội')

@section('content_header')
    <h1>Mạng xã hội</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body">
            {!! Form::open([
                    'url' => route('admin.socials'),
        			'method' => 'post',
                ])
            !!}
            {!! Form::myInput('text', 'facebook', 'Facebook', [], $vars->facebook) !!}
            {!! Form::myInput('text', 'twitter', 'Twitter', [], $vars->twitter) !!}
            {!! Form::myInput('text', 'linkedin', 'LinkedIn', [], $vars->linkedin) !!}
            {!! Form::myInput('text', 'skype', 'Skype', [], $vars->skype) !!}
            <button type="submit" class="btn btn-primary">Cập nhật</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop