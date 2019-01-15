@extends('adminlte::page')

@section('title', 'TEKMEDI')

@section('content_header')
    <h1>Tin tức</h1>
@stop

@section('content')
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <a href="{{ route('admin.news.create')  }}" class="btn btn-success">Thêm mới</a>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th>Hình ảnh</th>
                    <th>Tiêu đề</th>
                    <th>Danh mục</th>
                    <th>Mô tả ngắn</th>
                    <th>Hành động</th>
                </tr>
                @foreach($news as $item)
                    <tr>
                        <td>
                            <img src="{{App\Helpers\Url::LFMUrl($item->image)}}" style="height: 96px"/></td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->category->name}}</td>
                        <td>{{$item->short_description}}</td>
                        <td width="150px">
                            <a href="{{ route('admin.news.edit', $item->id) }}" class="btn btn-warning">
                                <i class="fa fa-edit"></i>
                            </a>
                            {!! Form::open([
                                'class'=>'delete',
                                'url'  => route('admin.news.destroy', $item->id),
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
        {!! $news->links('admin.partials.pagination') !!}
    </div>
    <!-- /.box -->
@stop