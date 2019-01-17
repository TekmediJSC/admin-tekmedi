@extends('adminlte::page')

@section('title', 'TEKMEDI | Danh sách liên hệ')

@section('content_header')
    <h1>Danh sách liên hệ</h1>
@stop

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <a href="{{ route('admin.contact_cards.create')  }}" class="btn btn-success">Thêm mới</a>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th>Tên</th>
                    <th>Chức danh</th>
                    <th>Email</th>
                    <th>SĐT</th>
                    <th>Hành động</th>
                </tr>
                @foreach($cards as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->position }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td width="150px">
                            <a href="{{ route('admin.contact_cards.edit', $item->id) }}" class="btn btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                            {!! Form::open([
                                'class'=>'delete',
                                'url'  => route('admin.contact_cards.destroy', $item->id),
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