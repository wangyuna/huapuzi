@extends('admin.layout.index')


@section('content')
	<div class="grid_8">
                    <div class="mws-panel">
                        <div class="mws-panel-header">
                            <span>分类添加</span>
                        </div>
                        <div class="mws-panel-body no-padding">
                            <form class="mws-form" action="/admin/cate/insert" method="post">
                            	{{ csrf_field() }}
                                <div class="mws-form-inline">
                                    <div class="mws-form-row">
                                        <label class="mws-form-label">分类名称</label>
                                        <div class="mws-form-item">
                                            <input type="text" name="name" value="" style="width:400px">
                                        </div>
                                    </div>
                                    <div class="mws-form-row">
                                        <label class="mws-form-label">所属分类</label>
                                        <div class="mws-form-item">
                                            <select name="pid" style="width:400px">
                                                <option value="0">--请选择--</option>
                                                @foreach($data as $k=>$v)
                                                <option value="{{$v['id']}}" @if($id == $v['id']) selected @endif >{{$v['name']}}</option>
                                            	@endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mws-button-row">
                                    <input value="添加" class="btn btn-danger" type="submit">
                                    <input value="重置" class="btn " type="reset">
                                </div>
                            </form>
                        </div>
                    </div>
                   
                </div>             

@endsection