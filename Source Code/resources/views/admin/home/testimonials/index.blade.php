@extends('adminlte::page')

@section('title', 'TEKMEDI | Home | Trích dẫn')

@section('content_header')
    <h1>Trích dẫn</h1>
@stop

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <a href="{{ route('admin.home_testimonials.create')  }}" class="btn btn-success">Thêm mới</a>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th>Tên</th>
                    <th>Đánh giá</th>
                    <th>Hình ảnh</th>
                    <th>Hành động</th>
                </tr>
                @foreach($testimonials as $testimonial)
                    <tr>
                        <td>{{ $testimonial->title }}</td>
                        <td>{{ $testimonial->description }}</td>
                        <td>
                            <img src="{{ \App\Helpers\Url::LFMUrl($testimonial->image) }}" style="max-height: 64px">
                        </td>
                        <td width="150px">
                            <a href="{{ route('admin.home_testimonials.edit', $testimonial->id) }}" class="btn btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                            {!! Form::open([
                                'class'=>'delete',
                                'url'  => route('admin.home_testimonials.destroy', $testimonial->id),
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