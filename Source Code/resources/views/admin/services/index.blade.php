@extends('adminlte::page')

@section('title', 'TEKMEDI | Dịch vụ')

@section('content_header')
    <h1>Dịch vụ</h1>
@stop

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <a href="{{ route('admin.services.create')  }}" class="btn btn-success">Thêm mới</a>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th>Tên</th>
                    <th>Danh mục</th>
                    <th>Giới thiệu ngắn</th>
                    <th>Hành động</th>
                </tr>
                @foreach($services as $item)
                    <tr>
                        <td>{{ $item->name  }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ $item->short_description  }}</td>
                        <td width="150px">
                            <a href="{{ route('admin.services.edit', $item->id) }}" class="btn btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                            {!! Form::open([
                                'class'=>'delete',
                                'url'  => route('admin.services.destroy', $item->id),
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