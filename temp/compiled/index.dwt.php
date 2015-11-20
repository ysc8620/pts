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
<link href="<?php echo $this->_var['hhs_css_path']; ?>/swiper.min.css" rel="stylesheet" />
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.js,haohaios.js,index.js,swiper.min.js')); ?>

</head>
<body >
<div class="container">
	<section class="main-view">
<div class="swiper-container">
	<div class="swiper-wrapper">
	    <?php $_from = $this->_var['playerdb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');$this->_foreach['fnum'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fnum']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
        $this->_foreach['fnum']['iteration']++;
?>
		<div class="swiper-slide">
			<a href="<?php echo $this->_var['item']['url']; ?>"><img src="<?php echo $this->_var['item']['src']; ?>" width="100%"></a>
		</div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
	<div class="swiper-pagination"></div>
</div>
<script type="text/javascript">
	$(function() {
		var swiper = new Swiper('.swiper-container', {
	        pagination: '.swiper-pagination',
	        paginationClickable: true,
	        spaceBetween: 30,
	        centeredSlides: true,
	        autoplay: 2500,
	        autoplayDisableOnInteraction: false
	    });
	});
</script>
    </section> 
    <section class="main-view">
        <div id="tuan" class="tuan" style="padding-top: 10px; display: block;">
            <div ms-repeat-item="goods_list">
                <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods_list']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods_list']['iteration']++;
?>
                <div class="tuan_g">
                    <a href="<?php echo $this->_var['goods']['url']; ?>">
                        <div class="tuan_g_img">
                            <img src="<?php echo $this->_var['goods']['little_img']; ?>">
                            <span class="tuan_mark tuan_mark2">
                            <b><?php echo $this->_var['goods']['team_discount']; ?>折</b>
                            <span><?php echo $this->_var['goods']['team_num']; ?>人团</span>
                            </span>
                        </div>
                        <div class="tuan_g_info">
                            <p class="tuan_g_name"><?php echo $this->_var['goods']['goods_name']; ?>(<?php if ($this->_var['goods']['suppliers_name']): ?>由“<?php echo $this->_var['goods']['suppliers_name']; ?>”提供<?php else: ?>由平台提供<?php endif; ?>)</p>
                            <p class="tuan_g_cx"><?php echo $this->_var['goods']['goods_brief']; ?></p>
                        </div>
                        <div class="tuan_g_core">
                            <div class="tuan_g_price">
                                <span><?php echo $this->_var['goods']['team_num']; ?>人团</span>
                                <b>¥<?php echo $this->_var['goods']['team_price']; ?></b>
                            </div>
                            <div class="tuan_g_btn">去开团</div>
                        </div>
                        <div class="tuan_g_mprice">市场价：
                            <del>¥<?php echo $this->_var['goods']['market_price']; ?></del>
                        </div>
                    </a>
                </div>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
        </div>
    </section>
 
</div>

<?php echo $this->fetch('library/footer.lbi'); ?>
<script>
	window.onload=function(){
		document.getElementById('loading').style.display='none';
		document.getElementById('container').style.display='';
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
	        'onMenuShareWeibo'
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
</body>
</html>
