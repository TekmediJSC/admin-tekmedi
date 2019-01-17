@extends('adminlte::page')

@section('title', 'TEKMEDI | Liên hệ từ khách hàng')

@section('content_header')
    <h1>Liên hệ từ khách hàng</h1>
@stop

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-body">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>SĐT</th>
                    <th>Nguồn</th>
                    <th>Lời nhắn</th>
                    <th>Hành động</th>
                </tr>
                @foreach($contacts as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="mailto:{{ $item->email }}">{{ $item->email }}</a>
                        </td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->foundName() }}</td>
                        <td>{{ $item->message }}</td>
                        <td width="150px">
                            {!! Form::open([
                                'class'=>'delete',
                                'url'  => route('admin.contacts.destroy', $item->id),
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
        {!! $contacts->links('admin.partials.pagination') !!}

    </div>
    <!-- /.box -->
@stop