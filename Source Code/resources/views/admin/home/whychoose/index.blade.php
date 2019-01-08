@extends('adminlte::page')

@section('title', 'TEKMEDI | Home | Số liệu')

@section('content_header')
    <h1>Số liệu</h1>
@stop

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <a href="{{ route('admin.home_whychoose.create')  }}" class="btn btn-success">Thêm mới</a>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th>Tiêu đề</th>
                    <th>Giá trị</th>
                    <th>Đơn vị</th>
                    <th>Hình ảnh</th>
                    <th>Hành động</th>
                </tr>
                @foreach($chooses as $choose)
                    <tr>
                        <td>{{ $choose->title }}</td>
                        <td>{{ $choose->description }}</td>
                        <td>{{ $choose->extra }}</td>
                        <td>
                            <img src="{{ \App\Helpers\Url::LFMUrl($choose->image) }}" style="max-height: 64px">
                        </td>
                        <td width="150px">
                            <a href="{{ route('admin.home_whychoose.edit', $choose->id) }}" class="btn btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                            {!! Form::open([
                                'class'=>'delete',
                                'url'  => route('admin.home_whychoose.destroy', $choose->id),
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