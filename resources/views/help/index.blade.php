@extends('admin.layout.index')
@section("content")
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span><i class="icon-table"></i> 品牌列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">
        	<div id="DataTables_Table_1_length" class="dataTables_length">
            <form action="/admin/type/pindex" method="get">
        	<label>展示
        		<select name="num" size="1" aria-controls="DataTables_Table_1">
        			<option value="5" @if(isset($request['num']) && $request['num']==5) selected @endif)>5</option>
        			<option value="10" @if(isset($request['num']) && $request['num']==10) selected @endif>10</option>
        			<option value="15" @if(isset($request['num']) && $request['num']==15) selected @endif>15</option>
        			<option value="20" @if(isset($request['num']) && $request['num']==20) selected @endif>20</option></select> 条</label></div>
        	<div class="dataTables_filter" id="DataTables_Table_1_filter">
        	<label>Search: <input type="text" name="keywords" value='@if(isset($request["keywords"])){{$request["keywords"]}}@endif' aria-controls="DataTables_Table_1"></label>
                <input type="submit" class="btn btn-paimary" value="查询">

            </div>
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
            </form>
            <thead>
                <tr role="row">
                	<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 141px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">分类树</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 193px;" aria-label="Browser: activate to sort column ascending">ID</th>
                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 193px;" aria-label="Browser: activate to sort column ascending">栏目名</th>
                	<th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 86px;" aria-label="CSS grade: activate to sort column ascending">操作</th></tr>
            </thead>
            
        <tbody role="alert" aria-live="polite" aria-relevant="all">
        		@foreach($list as $k=>$v)
        		@if($k%2==0)
        		<tr class="odd">
        		@else
        		<tr class="even">
        		@endif
                @if($v['pid']==0)
                    <td class="  sorting_1" style="width:15%"><img src="/h/images/dirfirst.gif" alt=""></td>
                @else    
                    <td class="  sorting_1" style="width:15%"><img src="/h/images/dirsecond.gif" alt=""></td>
                @endif    
                    <td style="width:10%" class=" ">{{$v['id']}}</td>
                    <td class=" ">{{$v['name']}}</td>
                    <td id='a' class=" ">
                   
                    @if(App\Http\Controllers\admin\HelpController::dealCou($v['id'],"help")==0)
                        <a id="z" href="/admin/help/del/{{$v['id']}}" class="icon-trash" style="font-size:20px;color:black;margin-left: 42px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    @endif
                    
                    @if($v['pid'] == 0)
                        <a id="z" href="/admin/help/cadd/{{$v['id']}}" class="icon-plus" style="font-size:20px;color:black;margin-left: 42px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    @elseif(App\Http\Controllers\admin\HelpController::dealCou($v['id'],"content")==0)
                        <a id="z" href="/admin/help/sadd/{{$v['id']}}" class="icon-phone" style="font-size:20px;color:black;margin-left: 42px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    @else
                        <a id="z" href="/admin/help/sedit/{{$v['id']}}" class="icon-upload" style="font-size:20px;color:black;margin-left: 42px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    @endif	
                        <a id="z" href="/admin/help/edit/{{$v['id']}}" class="icon-tools" style="font-size:20px;color:black;margin-left: 42px;"></a>
                    	
                    </td>
                </tr>
                @endforeach
                </tr></tbody></table>          
    </div>
</div>
@endsection