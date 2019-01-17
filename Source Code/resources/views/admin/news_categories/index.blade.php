@extends('adminlte::page')

@section('title', 'TEKMEDI | Danh mục tin tức')

@section('content_header')
    <h1>Danh mục tin tức</h1>
@stop

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <a href="{{ route('admin.news_categories.create')  }}" class="btn btn-success">Thêm mới</a>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th>Tên</th>
                    <th>Hành động</th>
                </tr>
                @foreach($categories as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td width="150px">
                            <a href="{{ route('admin.news_categories.edit', $item->id) }}" class="btn btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                            {!! Form::open([
                                'class'=>'delete',
                                'url'  => route('admin.news_categories.destroy', $item->id),
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