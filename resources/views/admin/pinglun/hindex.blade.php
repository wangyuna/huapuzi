@extends('admin.layout.index')
@section('css')
<style>
    .con img{
        height:50px;
    }
</style>
@endsection
@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-table"></i> 评论列表</span>
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
                    <th class="sorting_asc" style="width: 1px;">id</th>
                    <!-- <th class="sorting_asc" style="width: 197px;">商品图片</th> -->
                    <th class="sorting" style="width: 97px;">用户名</th>
                    <th class="sorting" style="width: 93px;">商品名称</th>
                    <th class="sorting" style="width: 100px;">评论内容</th>
                    <th class="sorting" style="width: 53px;">评论时间</th>
                    <th class="sorting" style="width: 60px;">评分</th>
                    <th class="sorting" style="width: 50px;">是否匿名</th>
                    <th class="sorting" style="width: 25px;">状态</th>
                    
                    
                    <th class="sorting" style="width: 54px;">操作</th>
                    
                </tr>
            </thead>
            
        <tbody role="alert" aria-live="polite" aria-relevant="all">
        
        <!-- 遍历 -->
        @foreach($arr as $v)
        <tr class="odd">
            
            <td class="  sorting_1">{{ $v['id'] }}</td>
            <td class=" ">{{ $v['username'] }}</td>
            <td class=" ">{{ $v['title'] }}</td>
            <td class="con">{!! $v['con'] !!}</td>
            <td class=" ">{{ date('Y-m-d H:i:s',$v['time']) }}</td>
            <td class=" ">@for($i=1; $i <= $v['grade']; $i++) <img src="/h/images/review_star_fen.gif" align="absmiddle">@endfor</td>
            <td class=" ">@if($v['status'] == 1) 匿名 @else 实名 @endif</td>
            <td class=" ">隐藏</td>
            
            
          
            <!-- <td class=" "></td> -->
           
            <td class=" ">
                <a href="/admin/pinglun/hindex" style="color:black;font-size:20px;margin-left:12px;" title="返回订单"><i class="icon-share-2"></i></a>      
            </td>
         </tr>
         @endforeach
        
        </tbody>
        </table>
        <div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 57 entries</div>
        
        <div class="dataTables_paginate paging_full_numbers" id="page_page">
            
        </div>
            
        
        </div>
    </div>
</div>
@endsection