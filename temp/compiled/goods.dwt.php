<!doctype html>
<html lang="zh-CN">
<head>
<meta name="Generator" content="haohaios v1.0" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<title><?php echo $this->_var['page_title']; ?></title>
<link rel="shortcut icon" href="favicon.ico" />
<link href="<?php echo $this->_var['hhs_css_path']; ?>/haohaios.css" rel="stylesheet" />
<link href="<?php echo $this->_var['hhs_css_path']; ?>/font-awesome.min.css" rel="stylesheet" />
<link href="<?php echo $this->_var['hhs_css_path']; ?>/flexslider.css" rel="stylesheet" />

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.js,haohaios.js,jquery.flexslider-min.js')); ?>

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
                <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['ptab'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ptab']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['ptab']['iteration']++;
?>
                <li><img src="<?php echo $this->_var['picture']['img_url']; ?>"/></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
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
            <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="HHS_FORMBUY" id="HHS_FORMBUY" >
            <div class="td2">
                <div class="td2_name"><?php echo $this->_var['goods']['goods_style_name']; ?></div>
                <div class="td2_cx"><?php echo $this->_var['goods']['goods_brief']; ?></div>
                <div class="td2_info">
                    <div class="td2_price">市场价：¥<b><?php echo $this->_var['goods']['market_price']; ?></b> <span>已售：<?php echo $this->_var['buy_num']; ?>件</span></div>
                    <div class="td2_num">支付开团并邀请<span><?php echo $this->_var['d_team_num']; ?></span>人参团，人数不足自动退款，详见下方拼团玩法</div>
                </div>
            </div>
            
            
            <div class="spec">
      <ul>
<?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
      <li>
      <label><?php echo $this->_var['spec']['name']; ?>：</label>

				  
<?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>

<a <?php if ($this->_var['key'] == 0): ?>class="cattsel"<?php endif; ?> onclick="changeAtt(this)" href="javascript:;" name="<?php echo $this->_var['value']['id']; ?>" title="[<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>]"><?php echo $this->_var['value']['label']; ?><input style="display:none" id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> /></a>

<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                        <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />


      </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
            </div>
         
   <?php if ($this->_var['goods']['limit_buy_bumber'] == 1): ?>
            
            <input name="number"  type="hidden" id="number" class="text" value="1"/>
            <?php elseif ($this->_var['goods']['limit_buy_bumber'] == 0): ?>
             <div class="buynum">
             <label>数量：</label>
                <a href="javascript:void(0);" onclick="goods_cut();changePrice()"><i class="fa fa-minus"></i></a>
                <input name="number" type="text" id="number" class="text" value="1" size="4" onblur="changePrice();"/>
                <a href="javascript:void(0);"  onclick="goods_add();changePrice()"><i class="fa fa-plus"></i></a>
                </div>
                <?php else: ?>
                 <div class="buynum">
             <label>数量：</label>
                <a href="javascript:void(0);" onclick="goods_cut();changePrice()"><i class="fa fa-minus"></i></a>
                <input name="number" type="text" id="number" class="text" value="1" size="4" onblur="changePrice();"/>
                <a href="javascript:void(0);"  onclick="goods_add();changePrice()"><i class="fa fa-plus"></i></a>
                <span>限购<?php echo $this->_var['goods']['limit_buy_bumber']; ?>件</span>   
                  </div>          
 <?php endif; ?>                     
         
            <div class="kt">
                <a class="kt_item" style="margin-right:2%" href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>,0,0,5)">
                    <div class="kt_price">¥<b id="tuan_more_price"><?php echo $this->_var['goods']['team_price']; ?></b><i> / </i>件</div>
                    <div class="kt_btn"><b id="tuan_more_number"><?php echo $this->_var['goods']['team_num']; ?>人团</b></div>
                </a>
                <a class="kt_item kt_item_buy" href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);">
                    <div class="kt_price">¥<b><?php echo $this->_var['goods']['shop_price']; ?></b><i> / </i>件</div>
                    <div class="kt_btn">单独购买</div>
                </a>
            </div>
            <?php if ($this->_var['goods']['is_nearby']): ?>
            <div class="back-index" ms-if="isShow_btn">
                <a href="GroupPurchase.php?goods_id=<?php echo $this->_var['goods']['goods_id']; ?>">附近的团  <i class="fa fa-map-marker"></i></a>
            </div> 
            <?php endif; ?>
            </form>
        </div>
        <div class="pro-detial">
            <ul class="pro_tab">
                <li class="hover"><div>图文详情</div></li>
            </ul>
            <div class="pro_con">
                <div id="con_one_1"><?php echo $this->_var['goods']['goods_desc']; ?></div>
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

<?php echo $this->fetch('library/footer.lbi'); ?>
</body>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;
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
	    appId: '<?php echo $this->_var['appid']; ?>',
	    timestamp: '<?php echo $this->_var['timestamp']; ?>',//这个一定要与上面的php代码里的一样。
	    nonceStr: '<?php echo $this->_var['timestamp']; ?>',//这个一定要与上面的php代码里的一样。
	    signature: '<?php echo $this->_var['signature']; ?>',
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
	
	var title="<?php echo $this->_var['title']; ?>";
	var link= "<?php echo $this->_var['link']; ?>";
	var imgUrl="<?php echo $this->_var['imgUrl']; ?>";
	var desc= "<?php echo $this->_var['desc']; ?>";
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
	    <?php if ($this->_var['goods']['is_nearby']): ?>
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
	    <?php endif; ?>	
	    
	});
	
	function statis(share_type,share_status){
		$.ajax({
            type:"post",//请求类型
            url:"share.php",//服务器页面地址
            data:"act=link&share_status="+share_status+"&share_type="+share_type+"&link_url=<?php echo $this->_var['link2']; ?>",
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
