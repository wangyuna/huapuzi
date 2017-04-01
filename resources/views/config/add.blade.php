@extends("admin.layout.index")
@section("css")
<style>
     .mws-form-row img{
          width:220px;
          height:64px;
     }
</style>
@endsection
@section("content")
<div class="mws-panel grid_8">
     <div class="mws-panel-header">
          <span>添加类别</span>
     </div>
     <div class="mws-panel-body no-padding">

          <form action="/admin/config/insert" method="post" enctype="multipart/form-data" class="mws-form">
               {{csrf_field()}}
               
               <div class="mws-form-inline">
                    <div class="mws-form-row">
                         <label class="mws-form-label">网站标题</label>
                         <div class="mws-form-item">
                              <input type="text" name="webname" class="small" value="{{$vo['webname']}}">
                         </div>
               </div>
               <div class="mws-form-inline">
                    <div class="mws-form-row">
                         <label class="mws-form-label">网站版权</label>
                         <div class="mws-form-item">
                              <input type="text" name="copy" class="small" value="{{$vo['copy']}}">
                         </div>
               </div>
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                         <label class="mws-form-label">网站关键字</label>
                         <div class="mws-form-item">
                              <input type="text" name="keywords" class="small" value="{{$vo['keywords']}}">
                         </div>
               </div>
               <div class="mws-form-row">
                    <label class="mws-form-label">网站logo</label>
                    <img src="/uploads/{{$vo['logo']}}" alt="">
                    <div class="mws-form-item">
                         <div style="position: relative;" class="small">
                           <input type="file" name="pic">
                         </div>
                         <label style="display:block" generated="true" class="error" for="picture"></label>
                     </div>
                 </div>
     			<div class="mws-form-row">
     				<label class="mws-form-label">网站维护</label>
     				<div class="mws-form-item">
     					<select class="small" name="status">
                                   <option value="0" @if($vo['status']==0)selected @endif>开启</option>
     						<option value="1" @if($vo['status']==1)selected @endif>关闭</option>
     					</select>
     				</div>
     			</div>   
               <div class="mws-button-row">
                    <input type="submit" class="btn btn-danger" value="添加">
                    <input type="reset" class="btn " value="重置">
               </div>
          </form>
     </div>         
 </div>
@endsection
