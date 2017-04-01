@extends('admin.layout.index')

@section('content')
<!-- 显示验证错误 -->
@if (count($errors) > 0)
    <div class="mws-form-message error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<script type="text/javascript" charset="utf-8" src="/e/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/e/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/e/lang/zh-cn/zh-cn.js"></script>
    <div class="grid_8">
        <div class="mws-panel">
            <div class="mws-panel-header">
                <span>商品添加</span>
            </div>
            <div class="mws-panel-body no-padding">
                <form class="mws-form" action="/admin/goods/insert" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label class="mws-form-label">商品名称</label>
                            <div class="mws-form-item">
                                <input type="text" name="title" value="" style="width:400px"><span></span>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">所属分类</label>
                            <div class="mws-form-item">
                                <select name="pid" style="width:400px">
                                    <option value="0">--请选择--</option>
                                    @foreach($data as $k=>$v)
                                    <option value="{{$v['id']}}">{{$v['name']}}</option>
                                    @endforeach
                                </select><span></span>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">材　　料</label>
                            <div class="mws-form-item">
                                <input type="text" name="material" value="" style="width:400px">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">商品原价</label>
                            <div class="mws-form-item">
                                <input type="text" name="price1" value="" style="width:400px">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">商品现价</label>
                            <div class="mws-form-item">
                                <input type="text" name="price2" value="" style="width:400px">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">价格区域</label>
                            <div class="mws-form-item" name="prid">
                                <select name="prid" style="width:400px">
                                    <option value="0">--请选择--</option>
                                    
                                    <option value="1">特价鲜花</option>
                                    <option value="2">150元以下</option>
                                    <option value="3">150-250元</option>
                                    <option value="4">250-350元</option>
                                    <option value="5">350-550元</option>
                                    <option value="6">550-800元</option>
                                    <option value="7">800元以上</option> 
                                </select>
                            </div>          
                
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">商品数量</label>
                            <div class="mws-form-item">
                                <input type="text" name="num" value="" style="width:400px">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">鲜花枝数</label>
                            <div name="number" class="mws-form-item">
                                <select name="number" style="width:400px">
                                    <option value="0">--请选择--</option>
                                    
                                    <option value="1">9枝</option>
                                    <option value="2">10枝</option>
                                    <option value="3">11枝</option>
                                    <option value="4">12枝</option>
                                    <option value="5">16枝</option>
                                    <option value="6">18枝</option>
                                    <option value="7">19枝</option>
                                    <option value="8">20枝</option>
                                    <option value="9">22枝</option>
                                    <option value="10">29枝</option>
                                    <option value="11">33枝</option>
                                    <option value="12">36枝</option>
                                    <option value="13">50枝</option>
                                    <option value="14">66枝</option>
                                    <option value="15">99枝以上</option> 
                                </select>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">推荐商品</label>
                            <div class="mws-form-item">
                                <select name="sid" style="width:400px">
                                    
                                    
                                    <option value="1">不推荐</option>
                                    <option value="2">推荐</option>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">颜　　色</label>
                            <div class="mws-form-item clearfix">
                                <ul class="mws-form-list inline" name="color">
                                    <li><input type="radio" name="color" value="1"> <label>红色</label></li>
                                    <li><input type="radio" name="color" value="2"> <label>粉色</label></li>
                                    <li><input type="radio" name="color" value="3"> <label>香槟</label></li>
                                    <li><input type="radio" name="color" value="4"> <label>黄色</label></li>
                                    <li><input type="radio" name="color" value="5"> <label>白色</label></li>
                                    <li><input type="radio" name="color" value="6"> <label>紫色</label></li>
                                    <li><input type="radio" name="color" value="7"> <label>蓝色</label></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mws-form-row">
                           <label class="mws-form-label">图1</label>
                           <div class="mws-form-item">
                                <div style="position: relative;" class="small">
                                  <input type="file" name="pic1">
                                </div>
                                <label style="display:block" generated="true" class="error" for="picture"></label>
                            </div>
                        </div>
                        <div class="mws-form-row">
                           <label class="mws-form-label">图2</label>
                           <div class="mws-form-item">
                                <div style="position: relative;" class="small">
                                  <input type="file" name="pic2">
                                </div>
                                <label style="display:block" generated="true" class="error" for="picture"></label>
                            </div>
                        </div>
                        <div class="mws-form-row">
                           <label class="mws-form-label">图3</label>
                           <div class="mws-form-item">
                                <div style="position: relative;" class="small">
                                  <input type="file" name="pic3">
                                </div>
                                <label style="display:block" generated="true" class="error" for="picture"></label>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">内容</label>
                            <div class="mws-form-item">
                                <script id="editor" name="content" type="text/plain" style="width:500px;height:300px;"></script>
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

        
        // var form = document.forms[0];
        // form.input[name='title'].onfocus.css('background','red');
        $("input[name='title']").focus(function ()
        {
            // $(this).val('<font style="font-size:12px;color:#666;">请入用户名</(font>');
            $(this).next().text('请输入商品名称').attr({'style':'font-size:12px;color:green;'});
        })

        $("input[name='title']").blur(function ()
        {
            // $(this).val('<font style="font-size:12px;color:#666;">请入用户名</(font>');
            // $(this).next().text('请入用户名').attr({'style':'font-size:12px;color:red;'});
            // $title = $(this).val();
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });
            if($(this).val() == ''){
                $("input[name='title']").next().text('请输入商品名称').attr({'style':'font-size:12px;color:red;'});
            }else{
            $.get('/admin/goods/ajax', 'title='+$("input[name='title']").val(), function(str){
                if(str == 1){
                $("input[name='title']").next().text('商品名称可用').attr({'style':'font-size:12px;color:green;'});
                }else if(str == 2){
                    $("input[name='title']").next().text('商品名称已存在').attr({'style':'font-size:12px;color:red;'});
                }
            })
            }

        })

        $("select[name='pid']").change(function(){
            // alert($(this).find("option:selected").text());
            $.get('/admin/goods/ajax1', 'pid='+$("select[name='pid']").find("option:selected").text(), function(str){
                if(str == 1){
                $("select[name='pid']").next().text('此分类下、不允许添加商品、请选择子类').attr({'style':'font-size:12px;color:red;'});
                }else if(str == 2){
                    $("select[name='pid']").next().text('').attr({'style':''});
                }
            })
        });
            
        // var checkText=$("#select_id").find("option:selected").text();
        // {
            // alert(1);
            // $(this).val('<font style="font-size:12px;color:#666;">请入用户名</(font>');
            // $(this).next().text('请输入商品名称').attr({'style':'font-size:12px;color:green;'});
        // })  
        
        /*$('#username').focus(function ()//得到教室时触发的时间 
        { 
        $('#username').val(''); 
        }) */

        // form.title.onfocus = function(){
        //     alert(1);
        // }

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