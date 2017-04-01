@extends("admin.layout.index")
@section("content")
<div class="mws-panel grid_8">
     <div class="mws-panel-header">
          <span>发送信息</span>
     </div>
     <div class="mws-panel-body no-padding">

          <form action="/admin/information/insert" method="post" class="mws-form">
               {{csrf_field()}}
               
               <div class="mws-form-inline">
                    <div class="mws-form-row">
                         <label class="mws-form-label">主题</label>
                         <div class="mws-form-item">
                              <input type="text" name="title" class="small" value="">
                         </div>
               </div>
               <div class="mws-form-inline">
                    <div class="mws-form-row">
                         <label class="mws-form-label">来自</label>
                         <div class="mws-form-item">
                              <input type="text" name="from" class="small" value="">
                         </div>
               </div>
                <div class="mws-form-inline">
                    <div class="mws-form-row">
                         <label class="mws-form-label">内容</label>
                         <div class="mws-form-item">
                              <input type="text" name="content" class="small" value="">
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
