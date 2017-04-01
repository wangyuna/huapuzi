@extends('admin.layout.index')

@section('css')
	<link rel="stylesheet" href="/d/css/page_page.css">
@endsection
@section('content')
	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span><i class="icon-table"></i> 用户列表</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                        <div id="DataTables_Table_0_length" class="dataTables_length">
	                        <form action="/admin/user/index1" method="get">
	                        <label>显示 
	                        <select size="1" name="count" aria-controls="DataTables_Table_0">
	                        <option value="10" @if(!empty($request['count']) && $request['count']== 10) selected @endif>10</option>
	                        <option value="25" @if(!empty($request['count']) && $request['count']== 25) selected @endif>25</option>
	                        <option value="50" @if(!empty($request['count']) && $request['count']== 50) selected @endif>50</option>
	                        <option value="100" @if(!empty($request['count']) && $request['count']== 100) selected @endif>100</option>
	                        </select> 
                        	行
                        </label>
                        </div>
                        <div class="dataTables_filter" id="DataTables_Table_0_filter">
                        	<label>关键字: <input aria-controls="DataTables_Table_0" value="{{$request['search'] or ''}}" name
                        	="search" type="text"></label>
                        	<input type="submit"  value="搜索">
                        </div>
                        </form>
                        <table class="mws-datatable mws-table dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                            <thead>
                                <tr role="row">
	                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 56px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">id</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 212px;" aria-label="Browser: activate to sort column ascending">用户名</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 212px;" aria-label="Browser: activate to sort column ascending">邮箱</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 76px;" aria-label="Browser: activate to sort column ascending">状态</th>
                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 60px;" aria-label="Browser: activate to sort column ascending">积分</th>
	                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 40px;" aria-label="Browser: activate to sort column ascending">权限</th>
	                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 55px;" aria-label="CSS grade: activate to sort column ascending">操作</th>
                                </tr>
                            </thead>
                            
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                       	
                       	<!-- 遍历 -->
                       	@foreach($data as $k=>$v)
                        <tr class="odd">
                            <td class="  sorting_1">{{  $v['id']  }}</td>
                            <td class=" ">{{  $v['username']  }}</td>
                            <td class=" ">{{  $v['email']  }}</td>
                            <td class=" ">@if($v['status'] == 0)未激活@else已激活@endif</td>
                            <td class=" ">{{  $v['score']  }}</td>
                            <td class=" ">@if($v['quanx'] == 0)开启@else禁用@endif</td>
                            
                            <td class=" ">
								<a href="/admin/user/hdelete/{{$v['id']}}" style="color:black;font-size:20px;margin-left:12px;" title="删除"><i class="icon-trash"></i></a>
								<a href="/admin/user/hedit/{{$v['id']}}" style="color:black;font-size:20px;margin-left:12px;" title="修改"><i class="icon-wrench"></i></a>
                            </td>
                         </tr>
                         @endforeach
                        </tbody>
                        </table>
                        <div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 57 entries</div>
                        
                        <div class="dataTables_paginate paging_full_numbers" id="page_page">
                        	{!! $data-> appends($request)->render() !!}
                        </div>
                       
                        
                      	</div>
                        
                </div>
@endsection