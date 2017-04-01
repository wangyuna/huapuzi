@extends('admin.layout.index')

@section('content')
	<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span><i class="icon-table"></i>分类列表</span>
        </div>
        <div class="mws-panel-body no-padding">
            <table class="mws-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>分类名称</th>
                        <th>父级ID</th>
                        <th>分类路径</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                	@foreach($data as $k=>$v)
                    <tr>
                        <td>{{ $v['id'] }}</td>
                        <td>{{ $v['name'] }}</td>
                        <td>{{ $v['pid'] }}</td>
                        <td>{{ $v['path'] }}</td>
                        <td style="text-align:center">
                        	<a href="/admin/cate/delete/{{$v['id']}}" style="color:blace;font-size:20px;margin-left:15px;"	title="删除"><i class="icon-trash"></i></a>
                        	<a href="/admin/cate/edit/{{$v['id']}}" style="color:blace;font-size:20px;margin-left:15px;"	title="修改"><i class="icon-pencil"></i></a>
                        	<a href="/admin/cate/add/{{$v['id']}}" style="color:blace;font-size:20px;margin-left:15px;"	title="添加"><i class="icon-plus"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection