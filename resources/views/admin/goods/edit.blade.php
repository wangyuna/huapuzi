@extends('admin.layout.index')

@section('content')
<script type="text/javascript" charset="utf-8" src="/e/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/e/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/e/lang/zh-cn/zh-cn.js"></script>
    <div class="grid_8">
        <div class="mws-panel">
            <div class="mws-panel-header">
                <span>商品修改</span>
            </div>
            <div class="mws-panel-body no-padding">
                <form class="mws-form" action="/admin/goods/update" method="post" enctype="multipart/form-data">
                    
                    <input type="hidden" name="id" value="{{ $res['id'] }}">
                    {{ csrf_field() }}
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label class="mws-form-label">商品名称</label>
                            <div class="mws-form-item">
                                <input type="text" name="title" value="{{ $res['title'] }}" style="width:400px">
                            </div>
                        </div>
                        
                        <div class="mws-form-row">
                            <label class="mws-form-label">所属分类</label>
                            <div class="mws-form-item">
                                <select name="pid" style="width:400px">
                                    <option value="0">--请选择--</option>
                                    @foreach($data as $k=>$v)
                                    <option value="{{$v['id']}}" @if($res['pid'] == $v['id']) selected @endif >{{$v['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">材　　质</label>
                            <div class="mws-form-item">
                                <input type="text" name="material" value="{{ $res['material'] }}" style="width:400px">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">商品原价</label>
                            <div class="mws-form-item">
                                <input type="text" name="price1" value="{{ $res['price1'] }}" style="width:400px">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">商品现价</label>
                            <div class="mws-form-item">
                                <input type="text" name="price2" value="{{ $res['price2'] }}" style="width:400px">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">价格区域</label>
                            <div class="mws-form-item" name="prid">
                                <select name="prid" style="width:400px">
                                    
                                    
                                    <option value="1" @if(isset($res['prid']) && $res['prid']==1) selected @endif>特价鲜花</option>
                                    <option value="2" @if(isset($res['prid']) && $res['prid']==2) selected @endif>150元以下</option>
                                    <option value="3" @if(isset($res['prid']) && $res['prid']==3) selected @endif>150-250元</option>
                                    <option value="4" @if(isset($res['prid']) && $res['prid']==4) selected @endif>250-350元</option>
                                    <option value="5" @if(isset($res['prid']) && $res['prid']==5) selected @endif>350-550元</option>
                                    <option value="6" @if(isset($res['prid']) && $res['prid']==6) selected @endif>550-800元</option>
                                    <option value="7" @if(isset($res['prid']) && $res['prid']==7) selected @endif>800元以上</option> 
                                </select>
                            </div>          
                
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">商品数量</label>
                            <div class="mws-form-item">
                                <input type="text" name="num" value="{{ $res['num'] }}" style="width:400px">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">鲜花枝数</label>
                            <div name="number" class="mws-form-item">
                                <select name="number" style="width:400px">
                                    <option value="1" @if(isset($res['number']) && $res['number']==1) selected @endif>9枝</option>
                                    <option value="2" @if(isset($res['number']) && $res['number']==2) selected @endif>10枝</option>
                                    <option value="3" @if(isset($res['number']) && $res['number']==3) selected @endif>11枝</option>
                                    <option value="4" @if(isset($res['number']) && $res['number']==4) selected @endif>12枝</option>
                                    <option value="5" @if(isset($res['number']) && $res['number']==5) selected @endif>16枝</option>
                                    <option value="6" @if(isset($res['number']) && $res['number']==6) selected @endif>18枝</option>
                                    <option value="7" @if(isset($res['number']) && $res['number']==7) selected @endif>19枝</option>
                                    <option value="8" @if(isset($res['number']) && $res['number']==8) selected @endif>20枝</option>
                                    <option value="9" @if(isset($res['number']) && $res['number']==9) selected @endif>22枝</option>
                                    <option value="10" @if(isset($res['number']) && $res['number']==10) selected @endif>29枝</option>
                                    <option value="11" @if(isset($res['number']) && $res['number']==11) selected @endif>33枝</option>
                                    <option value="12" @if(isset($res['number']) && $res['number']==12) selected @endif>36枝</option>
                                    <option value="13" @if(isset($res['number']) && $res['number']==13) selected @endif>50枝</option>
                                    <option value="14" @if(isset($res['number']) && $res['number']==14) selected @endif>66枝</option>
                                    <option value="15" @if(isset($res['number']) && $res['number']==15) selected @endif>99枝以上</option> 
                                </select>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">商品推荐</label>
                            <div class="mws-form-item">
                                <select name="sid" style="width:400px">
                                    <option value="1">不推荐</option>
                                    <option value="2" @if(isset($res['sid']) && $res['sid']==2) selected @endif>推荐</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">颜　　色</label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline" name="color">
                                    <li><input type="radio" name="color" value="1" @if(isset($res['color']) && $res['color']==1) checked @endif> <label>红色</label></li>
                                    <li><input type="radio" name="color" value="2" @if(isset($res['color']) && $res['color']==2) checked @endif> <label>粉色</label></li>
                                    <li><input type="radio" name="color" value="3" @if(isset($res['color']) && $res['color']==3) checked @endif> <label>香槟</label></li>
                                    <li><input type="radio" name="color" value="4" @if(isset($res['color']) && $res['color']==4) checked @endif> <label>黄色</label></li>
                                    <li><input type="radio" name="color" value="5" @if(isset($res['color']) && $res['color']==5) checked @endif> <label>白色</label></li>
                                    <li><input type="radio" name="color" value="6" @if(isset($res['color']) && $res['color']==6) checked @endif> <label>紫色</label></li>
                                    <li><input type="radio" name="color" value="7" @if(isset($res['color']) && $res['color']==7) checked @endif> <label>蓝色</label></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mws-form-row">
                           <label class="mws-form-label">图1</label>
                           <div class="mws-form-item">
                                <div style="position: relative;" class="small">
                                  <input type="file" name="pic1">
                                  <img src="{{ trim($res1[0]['pic1'],'.') }}" alt="" width="50" height="50">
                                </div>
                                <label style="display:block" generated="true" class="error" for="picture"></label>
                            </div>
                        </div>
                        <div class="mws-form-row">
                           <label class="mws-form-label">图2</label>
                           <div class="mws-form-item">
                                <div style="position: relative;" class="small">
                                  <input type="file" name="pic2">
                                  <img src="{{ trim($res1[0]['pic2'],'.') }}" alt="" width="50" height="50">
                                </div>
                                <label style="display:block" generated="true" class="error" for="picture"></label>
                            </div>
                        </div>
                        <div class="mws-form-row">
                           <label class="mws-form-label">图3</label>
                           <div class="mws-form-item">
                                <div style="position: relative;" class="small">
                                  <input type="file" name="pic3">
                                  <img src="{{ trim($res1[0]['pic3'],'.') }}" alt="" width="50" height="50">
                                </div>
                                <label style="display:block" generated="true" class="error" for="picture"></label>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">内容</label>
                            <div class="mws-form-item">
                                <script id="editor" name="content" type="text/plain" style="width:500px;height:300px;">{!! $res['content'] !!}</script>
                            </div>
                        </div>
                    </div>
                    <div class="mws-button-row">
                        <input value="添加" class="btn btn-danger" type="submit">
                        <input value="重置" class="btn " type="reset">
                    </div>
                </form>
            </div>
        </div>
       
    </div>             
    <script type="text/javascript" src="/h/js/jquery-1.8.3.js"></script>
    <script type="text/javascript">
          //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
            var ue = UE.getEditor('editor');


            function isFocus(e){
                alert(UE.getEditor('editor').isFocus());
                UE.dom.domUtils.preventDefault(e)
            }
            function setblur(e){
                UE.getEditor('editor').blur();
                UE.dom.domUtils.preventDefault(e)
            }
            function insertHtml() {
                var value = prompt('插入html代码', '');
                UE.getEditor('editor').execCommand('insertHtml', value)
            }
            function createEditor() {
                enableBtn();
                UE.getEditor('editor');
            }
            function getAllHtml() {
                alert(UE.getEditor('editor').getAllHtml())
            }
            function getContent() {
                var arr = [];
                arr.push("使用editor.getContent()方法可以获得编辑器的内容");
                arr.push("内容为：");
                arr.push(UE.getEditor('editor').getContent());
                alert(arr.join("\n"));
            }
            function getPlainTxt() {
                var arr = [];
                arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
                arr.push("内容为：");
                arr.push(UE.getEditor('editor').getPlainTxt());
                alert(arr.join('\n'))
            }
            function setContent(isAppendTo) {
                var arr = [];
                arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
                UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
                alert(arr.join("\n"));
            }
            function setDisabled() {
                UE.getEditor('editor').setDisabled('fullscreen');
                disableBtn("enable");
            }

            function setEnabled() {
                UE.getEditor('editor').setEnabled();
                enableBtn();
            }

            function getText() {
                //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
                var range = UE.getEditor('editor').selection.getRange();
                range.select();
                var txt = UE.getEditor('editor').selection.getText();
                alert(txt)
            }

            function getContentTxt() {
                var arr = [];
                arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
                arr.push("编辑器的纯文本内容为：");
                arr.push(UE.getEditor('editor').getContentTxt());
                alert(arr.join("\n"));
            }
            function hasContent() {
                var arr = [];
                arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
                arr.push("判断结果为：");
                arr.push(UE.getEditor('editor').hasContents());
                alert(arr.join("\n"));
            }
            function setFocus() {
                UE.getEditor('editor').focus();
            }
            function deleteEditor() {
                disableBtn();
                UE.getEditor('editor').destroy();
            }
            function disableBtn(str) {
                var div = document.getElementById('btns');
                var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
                for (var i = 0, btn; btn = btns[i++];) {
                    if (btn.id == str) {
                        UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
                    } else {
                        btn.setAttribute("disabled", "true");
                    }
                }
            }
            function enableBtn() {
                var div = document.getElementById('btns');
                var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
                for (var i = 0, btn; btn = btns[i++];) {
                    UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
                }
            }

            function getLocalData () {
                alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
            }

            function clearLocalData () {
                UE.getEditor('editor').execCommand( "clearlocaldata" );
                alert("已清空草稿箱")
            }
    </script>
@endsection