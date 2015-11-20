<?php exit;?>a:3:{s:8:"template";a:2:{i:0;s:60:"/phpstudy/www/pts.hostadmin.com.cn/themes/haohaios/goods.dwt";i:1;s:69:"/phpstudy/www/pts.hostadmin.com.cn/themes/haohaios/library/footer.lbi";}s:7:"expires";i:1447296822;s:8:"maketime";i:1447293222;}<!doctype html>
<html lang="zh-CN">
<head>
<meta name="Generator" content="haohaios v1.0" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="Keywords" content="" />
<meta name="Description" content="生态种植，天然品质，2个59元限时包邮，仅限江浙沪地区顾客购买" />
<title>昊海软件 【测试-网站演示专用】</title>
<link rel="shortcut icon" href="favicon.ico" />
<link href="themes/haohaios/css/haohaios.css" rel="stylesheet" />
<link href="themes/haohaios/css/font-awesome.min.css" rel="stylesheet" />
<link href="themes/haohaios/css/flexslider.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.js"></script><script type="text/javascript" src="js/haohaios.js"></script><script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<style>
.back-index a {
	display: block;
	border: none;
	background: #8acf1c;
	width: 100%;
	height: 45px;
	line-height: 45px;
	text-align: center;
	color: white;
	font-size: 20px;	
	border-radius: 2px;
}
</style>
</head>
<body>
<div class="container">
    <section class="main-view">
        <div class="flexslider" style="margin-bottom:10px;">
            <ul class="slides">
                                <li><img src="images/201509/goods_img/37_P_1442427153527.jpg"/></li>
                                <li><img src="images/201509/goods_img/37_P_1442427154869.jpg"/></li>
                                <li><img src="images/201509/goods_img/37_P_1442427154838.jpg"/></li>
                            </ul>
        </div>
        <script type="text/javascript">
            $(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    slideDirection: "horizontal"
                });
            });
        </script> 
        <div class="tm">
            <form action="javascript:addToCart(37)" method="post" name="HHS_FORMBUY" id="HHS_FORMBUY" >
            <div class="td2">
                <div class="td2_name">【测试商品-网站演示专用】 芒果</div>
                <div class="td2_cx">生态种植，天然品质，2个59元限时包邮，仅限江浙沪地区顾客购买</div>
                <div class="td2_info">
                    <div class="td2_price">市场价：¥<b>48.00</b> <span>已售：0件</span></div>
                    <div class="td2_num">支付开团并邀请<span>2</span>人参团，人数不足自动退款，详见下方拼团玩法</div>
                </div>
            </div>
            
            
            <div class="spec">
      <ul>
      </ul>
            </div>
         
                    <div class="buynum">
             <label>数量：</label>
                <a href="javascript:void(0);" onclick="goods_cut();changePrice()"><i class="fa fa-minus"></i></a>
                <input name="number" type="text" id="number" class="text" value="1" size="4" onblur="changePrice();"/>
                <a href="javascript:void(0);"  onclick="goods_add();changePrice()"><i class="fa fa-plus"></i></a>
                <span>限购2件</span>   
                  </div>          
                      
         
            <div class="kt">
                <a class="kt_item" style="margin-right:2%" href="javascript:addToCart(37,0,0,5)">
                    <div class="kt_price">¥<b id="tuan_more_price">19.90</b><i> / </i>件</div>
                    <div class="kt_btn"><b id="tuan_more_number">3人团</b></div>
                </a>
                <a class="kt_item kt_item_buy" href="javascript:addToCart(37);">
                    <div class="kt_price">¥<b>40.00</b><i> / </i>件</div>
                    <div class="kt_btn">单独购买</div>
                </a>
            </div>
                        <div class="back-index" ms-if="isShow_btn">
                <a href="GroupPurchase.php?goods_id=37">附近的团  <i class="fa fa-map-marker"></i></a>
            </div> 
                        </form>
        </div>
        <div class="pro-detial">
            <ul class="pro_tab">
                <li class="hover"><div>图文详情</div></li>
            </ul>
            <div class="pro_con">
                <div id="con_one_1"><p>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</p>
<br /></div>
            </div>
        </div>
        <div class="step">
            <div class="step_hd">
                拼团玩法<a class="step_more" href="tuan_rule.php">查看详情</a>
            </div>
            <div id="footItem" class="step_list">
                <div class="step_item step_item_on">
                    <div class="step_num">1</div>
                    <div class="step_detail">
                        <p class="step_tit">选择
                            <br>心仪商品</p>
                    </div>
                </div>
                <div class="step_item ">
                    <div class="step_num">2</div>
                    <div class="step_detail">
                        <p class="step_tit">支付开团
                            <br>或参团</p>
                    </div>
                </div>
                <div class="step_item ">
                    <div class="step_num">3</div>
                    <div class="step_detail">
                        <p class="step_tit">等待好友
                            <br>参团支付</p>
                    </div>
                </div>
                <div class="step_item">
                    <div class="step_num">4</div>
                    <div class="step_detail">
                        <p class="step_tit">达到人数
                            <br>团购成功</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<footer class="footer">
    <ul>
        <li><a href="index.php" class="nav-controller active"><i class="fa fa-home"></i>首页</a></li>
        <li><a href="user.php?act=team_list" class="nav-controller"><i class="fa fa-group"></i>我的团</a></li>
        <li><a href="user.php?act=order_list" class="nav-controller"><i class="fa fa-list"></i>我的订单</a></li>
        <li><a href="user.php" class="nav-controller"><i class="fa fa-user"></i>个人中心</a></li>
    </ul>
</footer></body>
<script type="text/javascript">
var goods_id = 37;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 37;
var now_time = 1447264430;
function goods_cut(){
	var num_val=document.getElementById('number');
	var new_num=num_val.value;
	 if(isNaN(new_num)){alert('请输入数字');return false}
	var Num = parseInt(new_num);
	if(Num>1)Num=Num-1;
	num_val.value=Num;
}
function goods_add(){
	var num_val=document.getElementById('number');
	var new_num=num_val.value;
	 if(isNaN(new_num)){alert('请输入数字');return false}
	var Num = parseInt(new_num);
	Num=Num+1;
	num_val.value=Num;
}
function changeAtt(t) {
t.lastChild.checked='checked';
for (var i = 0; i<t.parentNode.childNodes.length;i++) {
        if (t.parentNode.childNodes[i].className == 'cattsel') {
            t.parentNode.childNodes[i].className = '';
        }
    }
t.className = "cattsel";
changePrice();
}
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['HHS_FORMBUY']);
  var qty = document.forms['HHS_FORMBUY'].elements['number'].value;
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
	document.forms['HHS_FORMBUY'].elements['number'].value = res.number;
  }
  else
  {
    document.forms['HHS_FORMBUY'].elements['number'].value = res.qty;
    if (document.getElementById('HHS_GOODS_AMOUNT'))
      document.getElementById('HHS_GOODS_AMOUNT').innerHTML = res.result;
  }
}
</script>
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script language="javascript" type="text/javascript">
	wx.config({
	    debug: false,//这里是开启测试，如果设置为true，则打开每个步骤，都会有提示，是否成功或者失败
	    appId: 'wxef82bacb237dd19c',
	    timestamp: '1447293230',//这个一定要与上面的php代码里的一样。
	    nonceStr: '1447293230',//这个一定要与上面的php代码里的一样。
	    signature: '9a66ae795d93d502aa6307e477fae664d7a49963',
	    jsApiList: [
	      // 所有要调用的 API 都要加到这个列表中
	        'onMenuShareTimeline',
	        'onMenuShareAppMessage',
	        'onMenuShareQQ',
	        'onMenuShareWeibo',
	        'checkJsApi',
	        'openLocation',
	        'getLocation'
	    ]
	});
	
	var title="【测试商品-网站演示专用】 芒果";
	var link= "http://pts.hostadmin.com.cn/goods.php?id=37";
	var imgUrl="http://pts.hostadmin.com.cn/images/201509/thumb_img/37_thumb_G_1442382478532.jpg";
	var desc= "品质不错，大家来尝试一下吧";
	wx.ready(function () {
	    wx.onMenuShareTimeline({//朋友圈
	        title: title, // 分享标题
	        link: link, // 分享链接
	        imgUrl: imgUrl, // 分享图标
	        success: function () { 
	            // 用户确认分享后执行的回调函数
	        	statis(2,1);
	        },
	        cancel: function () { 
	            // 用户取消分享后执行的回调函数
	        	statis(2,2);
	        }
	    });
	    wx.onMenuShareAppMessage({//好友
	        title: title, // 分享标题
	        desc: desc, // 
	        link: link, // 分享链接
	        imgUrl: imgUrl, // 分享图标
	        type: '', // 分享类型,music、video或link，不填默认为link
	        dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
	        success: function () { 
	        	// 用户确认分享后执行的回调函数
	            statis(1,1);    
	        },
	        cancel: function () { 
	            // 用户取消分享后执行的回调函数
	        	statis(1,2);
	        }
	    });
	  
	    wx.onMenuShareQQ({
	        title: title, // 分享标题
	        desc: desc, // 分享描述
	        link: link, // 分享链接
	        imgUrl: imgUrl, // 分享图标
	        success: function () { 
	           // 用户确认分享后执行的回调函数
	        	statis(4,1);
	        },
	        cancel: function () { 
	           // 用户取消分享后执行的回调函数
	        	statis(4,2);
	        }
	    });
	    wx.onMenuShareWeibo({
	        title: title, // 分享标题
	        desc: desc, // 分享描述
	        link: link, // 分享链接
	        imgUrl: imgUrl, // 分享图标
	        success: function () { 
	           // 用户确认分享后执行的回调函数
	        	statis(3,1);
	        },
	        cancel: function () { 
	            // 用户取消分享后执行的回调函数
	        	statis(3,2);
	        }
	    });
	    	    wx.checkJsApi({
	    	
	        jsApiList: [
	            'getLocation'
	        ],
	        success: function (res) {
	             //alert(JSON.stringify(res));
	            // alert(JSON.stringify(res.checkResult.getLocation));
	            if (res.checkResult.getLocation == false) {
	                alert('你的微信版本太低，不支持微信JS接口，请升级到最新的微信版本！');
	                return;
	            }
	        }
	    });
	    wx.getLocation({
	        success: function (res) {
	            var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
	            var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
	            var speed = res.speed; // 速度，以米/每秒计
	            var accuracy = res.accuracy; // 位置精度
	            $.ajax({
	                type:"post",//请求类型
	                url:"goods.php",//服务器页面地址
	                data:"act=save_location&lat="+latitude+"&lng="+longitude,
	                dataType:"json",//服务器返回结果类型(可有可无)
	                error:function(){//错误处理函数(可有可无)
	                    //alert("ajax出错啦");
	                },
	                success:function(data){
	                    if(data.error==1){
	                        //alert('错误'+data.message);
	                    }else{
	                    	//document.getElementById('loading').style.display='none';
	                		
	                    }
	                }
	            });
	        },
	        cancel: function (res) {
	            alert('用户拒绝授权获取地理位置');
	        }
	    });
	    	
	    
	});
	
	function statis(share_type,share_status){
		$.ajax({
            type:"post",//请求类型
            url:"share.php",//服务器页面地址
            data:"act=link&share_status="+share_status+"&share_type="+share_type+"&link_url=http%3A%2F%2Fpts.hostadmin.com.cn%2Fgoods.php%3Fid%3D37",
            dataType:"json",//服务器返回结果类型(可有可无)
            error:function(){//错误处理函数(可有可无)
                //alert("ajax出错啦");
            },
            success:function(data){
                
            }
        });
	}
</script>
</html>
