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
                        <span>添加链接</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form" action="/admin/friShip/insert" method="post">
                        {{ csrf_field() }}
                            <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <label class="mws-form-label">链接名</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="linkname">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">链接地址</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="medium" name="url" value="{{ old('password') }}">
                                    </div>
                                </div>
                                
                               <div class="mws-form-row">
                                    <label class="mws-form-label">链接描述</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="large" name="content">
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
