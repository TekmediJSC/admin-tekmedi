@extends('adminlte::page')

@section('title', 'TEKMEDI | Home | Slide')

@section('content_header')
    <h1>Slide</h1>
@stop

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <a href="{{ route('admin.home_slides.create')  }}" class="btn btn-success">Thêm mới</a>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th>Tiêu đề</th>
                    <th>Mô tả</th>
                    <th>Hình ảnh</th>
                    <th>Hành động</th>
                </tr>
                @foreach($slides as $slide)
                    <tr>
                        <td>{{ $slide->title }}</td>
                        <td>{{ $slide->description }}</td>
                        <td>
                            <img src="{{ \App\Helpers\Url::LFMUrl($slide->image) }}" style="max-height: 64px">
                        </td>
                        <td width="150px">
                            <a href="{{ route('admin.home_slides.edit', $slide->id) }}" class="btn btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                            {!! Form::open([
                                'class'=>'delete',
                                'url'  => route('admin.home_slides.destroy', $slide->id),
                                'method' => 'DELETE',
                                'style' => 'display: inline'
                                ])
                            !!}
                            <button class="btn btn-danger" title="Xóa">
                                <i class="fa fa-trash"></i>
                            </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@stop