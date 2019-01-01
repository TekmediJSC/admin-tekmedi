@extends('adminlte::page')

@section('title', 'TEKMEDI')

@section('content_header')
    <h1>Sản phẩm</h1>
@stop

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <a href="{{ route('admin.home_works.create')  }}" class="btn btn-success">Thêm mới</a>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th>Tên</th>
                    <th>Đường dẫn</th>
                    <th>Hình ảnh</th>
                    <th>Hành động</th>
                </tr>
                @foreach($works as $work)
                    <tr>
                        <td>{{ $work->title }}</td>
                        <td>
                            <a href="{{ $work->link }}">{{ $work->link }}</a>
                        </td>
                        <td>
                            <img src="{{ \App\Helpers\Url::LFMUrl($work->image) }}" style="max-height: 64px">
                        </td>
                        <td width="150px">
                            <a href="{{ route('admin.home_works.edit', $work->id) }}" class="btn btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                            {!! Form::open([
                                'class'=>'delete',
                                'url'  => route('admin.home_works.destroy', $work->id),
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