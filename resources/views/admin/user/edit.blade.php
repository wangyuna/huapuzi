@extends('admin.layout.index')

@section('content')
	

	<!-- 显示验证错误 -->
	@if (count($errors) > 0)
	    <div class="mws-form-message error">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
	 <div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span>用户修改</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form" action="/admin/user/update" method="post">
                        {{ csrf_field() }}
                            <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <label class="mws-form-label">用户名</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="username" value="{{ $data['username']}}">

                                    </div>
                                </div>
                              
                                <div class="mws-form-row">
                                    <label class="mws-form-label">状态</label>
                                    <div class="mws-form-item">
                                        <select class="large" name="status">
                                            <option value="0" @if($data['status'] == 0) selected @endif>超级管理员</option>
                                            <option value="1" @if($data['status'] == 1) selected @endif>普通管理员</option>
                                            <input type="hidden" name="id" value="{{$data['id']}}">
                                        </select>


                                    </div>
                                </div>
                            <div class="mws-button-row">
                                <input type="submit" value="修改" class="btn btn-danger">
                             
                            </div>
                        </form>
                    </div>      
                </div>
	
@endsection
