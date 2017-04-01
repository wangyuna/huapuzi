@extends('home.layout.index_type')

@section('sort')
@foreach($sort as $k => $v)
<li><a href="/home/sort?id={{ $v['id'] }}">{{ $v['stitle'] }}</a></li>
@endforeach
@endsection

@section('pricerea')
@foreach($pricerea as $k => $v)
<li><a href="/home/pricerea?id={{ $v['id'] }}">{{ $v['ptitle'] }}</a></li>
@endforeach
@endsection

@section('num')
@foreach($num as $k => $v)
<li><a href="/home/num?id={{ $v['id'] }}">{{ $v['ntitle'] }}</a></li>
@endforeach
@endsection

@section('sid')
@foreach(App\Http\Controllers\home\HomeController::sid() as $k => $v)
<div class="side-item">
    <div class="img-box">
        <a href="/home/shop/{{ $v['id'] }}" target="_blank"><img src="{{ trim($v['pic1'],'.') }}" width="180" height="196" alt="一往情深"></a>
    </div>
    <div class="info-cont">
        <div class="title">
            <a href="/home/shop/{{ $v['id'] }}" class="product-title">
                {{ $v['title'] }}
            </a>
        </div>
        <div class="price">
            <span class="price-sign">¥</span>
            <span class="price-num">{{ $v['price2'] }}</span>
        </div>
    </div>
</div>
<!-- @break; -->
@endforeach
@endsection
@section('content1')
@foreach($data as $k => $v)
<div class="grid-item">
    <div class="grid-panel">
        <div class="img-box">
            <a href="/home/shop/{{ $v['id'] }}" target="_blank"><img width="220" height="240" src="{{ trim($v['pic1'],'.') }}" alt="爱的小确幸"></a>
        </div>
        <div class="info-cont">
            <div class="price">
                <span class="price-sign">¥</span>
                <span class="price-num">{{ $v['price2'] }}</span>
            </div>
            <div class="title">
                <a href="/home/shop/{{ $v['id'] }}" target="_blank">
                    <span class="product-title">{{ $v['title'] }}</span>
                    <span class="feature">新品特价</span>
                </a>
            </div>
            <div class="operate">
                <a href="javascript:void(0)" info="guanzhu" pid="{{$v['id']}}" id="test"><span class="ico ico-heart-d"></span>关注</a>
                    <a href="/home/doshop?gid={{ $v['id'] }}" target="_blank" class="add-cart" style="margin-left:-5px;"><span class="ico ico-cart-d"></span>加入购物车</a>
            </div>
        </div>
    </div>
</div>
@endforeach
<script type="text/javascript" src="/d/js/libs/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    $('a[info="guanzhu"]').click(function(){
        // alert('aaa');
        var id = $(this).attr('pid');
        $.ajax({
            url:'/home/collect/insert',
            type:'get',
            data:{'pid':id},
            success:function(mes){
                // console.log(mes);
                alert(mes);
            }
        });
        return false;
    });
</script>

@endsection