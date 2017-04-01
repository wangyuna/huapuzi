@extends('admin.layout.index')

@section('css')
    <link rel="stylesheet" href="/d/css/page_page.css">
@endsection

@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i> 商品列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
        <div id="DataTables_Table_0_length" class="dataTables_length">
        <form action="/admin/goods/index" method="get">
            <label>显示 
            <select size="1" name="count" aria-controls="DataTables_Table_0">
            <option value="5">5</option>
            <option value="10" selected>10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
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
                    <th class="sorting_asc" style="width: 156px;">id</th>
                    <th class="sorting" style="width: 212px;">名称</th>
                    <th class="sorting" style="width: 197px;">分类</th>
                    <th class="sorting" style="width: 197px;">原价</th>
                    <th class="sorting" style="width: 197px;">现价</th>
                    <th class="sorting" style="width: 197px;">库存</th>
                    <!-- <th class="sorting" style="width: 197px;">价格区域</th>
                    <th class="sorting" style="width: 197px;">鲜花支数</th> -->
                    <th class="sorting" style="width: 197px;">推荐</th>
                    <!-- <th class="sorting" style="width: 197px;">颜色</th> -->
                    <th class="sorting" style="width: 155px;">操作</th>
                    
                </tr>
            </thead>
            
        <tbody role="alert" aria-live="polite" aria-relevant="all">
       	
       	<!-- 遍历 -->
       	@foreach($data as $k=>$v)
        <tr class="odd">
        	
            <td class="  sorting_1">{{  $v['id']  }}</td>
            <td class=" ">{{  $v['title']  }}</td>
            <td class=" ">{{  $v['name']  }}</td>
            <td class=" ">{{  $v['price1']  }}</td>
            <td class=" ">{{  $v['price2']  }}</td>
            <td class=" ">{{  $v['num']  }}</td>
            <!-- <td class=" ">{{  $v['ptitle']  }}</td> -->
            <!-- <td class=" ">{{  $v['number']  }}枝</td> -->
            <td class=" ">@if( $v['sid'] == 2) 推荐@else 不推荐@endif</td>
            <!-- <td class=" ">{{  $v['cr']  }}</td> -->
            <td class=" ">
				<a href="/admin/goods/delete/{{$v['id']}}" style="color:black;font-size:20px;margin-left:20px;" title="删除"><i class="icon-trash"></i></a>
				<a href="/admin/goods/edit/{{$v['id']}}" style="color:black;font-size:20px;margin-left:28px;" title="修改"><i class="icon-wrench"></i></a>
            </td>
         </tr>
         @endforeach
       	
        </tbody>
        </table>
        <div class="dataTables_info" id="DataTables_Table_0_info">第{{ $page }}页 {{ $start }}到{{ $end }} 共{{ $sum }}条</div>
        
        <div class="dataTables_paginate paging_full_numbers" id="page_page">
        	{!! $data-> appends($request)->render() !!}
        </div>
            
        
      	</div>
    </div>
</div>
@endsection