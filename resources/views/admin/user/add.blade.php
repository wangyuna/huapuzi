@extends('admin.layout.index')

@section('content')
	{{  session('error')  }}

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
                        <span>添加用户</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form" action="/admin/user/insert" method="post">
                        {{ csrf_field() }}
                            <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <label class="mws-form-label">用户名</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="username">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">密码</label>
                                    <div class="mws-form-item">
                                        <input type="password" class="medium" name="password" value="{{ old('password') }}">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">密码确认</label>
                                    <div class="mws-form-item">
                                        <input type="password" class="large" name="repassword">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">状态</label>
                                    <div class="mws-form-item">
                                        <select class="large" name="status">
                                            <option value="0">超级管理员</option>
                                            <option value="1">普通管理员</option>
                                        </select>
                                    </div>
                                </div>
                            <div class="mws-button-row">
                                <input type="submit" value="提交" class="btn btn-danger">
                                <input type="reset" value="重置" class="btn ">
                            </div>
                        </form>
                    </div>      
                </div>
	
@endsection
