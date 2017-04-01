@extends('admin.layout.index')

@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i> 订单列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
        <div id="DataTables_Table_0_length" class="dataTables_length">
        <form action="/admin/goods/index" method="get">
            <label>显示 
            <select size="1" name="count" aria-controls="DataTables_Table_0">
            <option value="10">10</option>
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
                    <th class="sorting_asc" style="width: 26px;">id</th>
                    <th class="sorting" style="width: 97px;">用户名</th>
                    <th class="sorting" style="width: 160px;">订单号</th>
                    <th class="sorting" style="width: 197px;">备注</th>
                    <th class="sorting" style="width: 260px;">花语</th>
                    <th class="sorting" style="width: 157px;">送达时间</th>
                    <th class="sorting" style="width: 197px;">订购人</th>
                    <th class="sorting" style="width: 197px;">手机号</th>
                    <!-- <th class="sorting" style="width: 197px;">订购人</th>
                    <th class="sorting" style="width: 197px;">电话</th>
                    <th class="sorting" style="width: 197px;">下单时间</th> -->
                    <th class="sorting" style="width: 197px;">支付方式</th>
                    <!-- <th class="sorting" style="width: 197px;">价格区域</th>
                    <th class="sorting" style="width: 197px;">鲜花支数</th> -->
                    <!-- <th class="sorting" style="width: 197px;">推荐</th> -->
                    <!-- <th class="sorting" style="width: 197px;">颜色</th> -->
                    <th class="sorting" style="width: 50px;">操作</th>
                    
                </tr>
            </thead>
            
        <tbody role="alert" aria-live="polite" aria-relevant="all">
       	
       	<!-- 遍历 -->
       
        <tr class="odd">
        	
            <td class="  sorting_1">{{ $res[0]['id'] }}</td>
            <td class=" ">{{ $res[0]['uid'] }}</td>
            <td class=" ">{{ $res[0]['order_num'] }}</td>
            <td class=" ">{{ $res[0]['quest'] }}</td>
            <td class=" ">{{ $res[0]['words'] }}</td>
            <td class=" ">{{ $res[0]['send_time'] }}</td>
            <td class=" ">{{ $res[0]['realname'] }}</td>
            <td class=" ">{{ $res[0]['phone'] }}</td>
            <td class=" ">{{ $res[0]['pays'] }}</td>
            
          
            <!-- <td class=" "></td> -->
           
            <td class=" ">
				
				<a href="/admin/indent/index/{{ $arr['status'] }}" style="color:black;font-size:20px;margin-left:12px;" title="返回订单"><i class="icon-share-2"></i></a>
            </td>
         </tr>
        
       	
        </tbody>
        </table>
        <div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 57 entries</div>
        
        <div class="dataTables_paginate paging_full_numbers" id="page_page">
        	
        </div>
            
        
      	</div>
    </div>
</div>
@endsection