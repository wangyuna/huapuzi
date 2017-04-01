@extends("admin.layout.index")
@section("content")
<div class="mws-panel grid_8">
        <div class="mws-panel-header">
             <span>添加类别</span>
        </div>
        <div class="mws-panel-body no-padding">
             
             <form action="/admin/lun/update" method="post" enctype="multipart/form-data" class="mws-form">
                  {{csrf_field()}}
                  <input type="hidden" name="id" value="{{$vo['id']}}">
                  
                  <div class="mws-form-inline">
                       <div class="mws-form-row">
                            <label class="mws-form-label">推荐鲜花主题</label>
                            <div class="mws-form-item">
                                 <input type="text" name="name" class="small" value="{{$vo['name']}}">
                            </div>
                  </div>
                  <div class="mws-form-row">
                       <label class="mws-form-label">轮播图片</label>
                       <img src="{{$vo['img']}}" alt="" width="70px">
                       <div class="mws-form-item">
                            <div style="position: relative;" class="small">
                              <input type="file" name="pic">
                            </div>
                            <label style="display:block" generated="true" class="error" for="picture"></label>
                        </div>
                    </div>  
                  <div class="mws-button-row">
                       <input type="submit" class="btn btn-danger" value="修改">
                       <input type="reset" class="btn " value="重置">
                  </div>
             </form>
        </div>         
    </div>
@endsection
