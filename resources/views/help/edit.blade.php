@extends("admin.layout.index")
@section("content")
<div class="mws-panel grid_8">
        <div class="mws-panel-header">
             <span>更改类别</span>
        </div>
        <div class="mws-panel-body no-padding">
             
             <form action="/admin/help/update" method="post" class="mws-form">
                  {{csrf_field()}}
                  
                 <input type="hidden" name="id" value="{{$vo['id']}}">
                  <div class="mws-form-inline">
                       <div class="mws-form-row">
                            <label class="mws-form-label">父类类名</label>
                            <div class="mws-form-item">
                                @if($vo['pid']==0)
                                 <input type="text" value="顶级类" readonly class="small">
                                @else
                                 <input type="text" value="{{App\Http\Controllers\admin\HelpController::dealName($vo['pid'])}}" readonly class="small">
                                @endif
                            </div>
                  </div>
                  <div class="mws-form-inline">
                       <div class="mws-form-row">
                            <label class="mws-form-label">子类名称</label>
                            <div class="mws-form-item">
                                 <input type="text" name="name" class="small" value="{{$vo['name']}}">
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
