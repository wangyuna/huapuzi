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
                        <form class="mws-form" action="/admin/friShip/update" method="post">
                        {{ csrf_field() }}
                            
                                    
                                    
                                        <input type="hidden" name="id" value="{{ $data['id']}}">
                                    
                                
                                 <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <label class="mws-form-label">连接名</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="linkname" value="{{ $data['linkname']}}">
                                    </div>
                                </div>
                               <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <label class="mws-form-label">链接地址</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="url" value="{{ $data['url']}}">
                                    </div>
                                </div>
                                 
                                 <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <label class="mws-form-label">链接描述</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="content" value="{{ $data['content']}}">
                                    </div>
                                </div>
                           
                            <div class="mws-button-row">
                                <input type="submit" value="修改" class="btn btn-danger">
                             
                            </div>
                        </form>
                    </div>      
                </div>
	
@endsection
