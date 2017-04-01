@extends("admin.layout.index")
@section("content")
<div class="mws-panel grid_8">
        <div class="mws-panel-header">
             <span>添加类别</span>
        </div>
        <div class="mws-panel-body no-padding">
             
             <form action="/admin/lun/insert" method="post" enctype="multipart/form-data" class="mws-form">
                  {{csrf_field()}}
                  
                 
                  <div class="mws-form-inline">
                       <div class="mws-form-row">
                            <label class="mws-form-label">推荐花类主题</label>
                            <div class="mws-form-item">
                                 <input type="text" name="name" class="small">
                            </div>
                  </div>
                  <div class="mws-form-row">
                       <label class="mws-form-label">图片</label>
                       <div class="mws-form-item">
                            <div style="position: relative;" class="small">
                              <input type="file" name="pic">
                            </div>
                            <label style="display:block" generated="true" class="error" for="picture"></label>
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