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

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.js,haohaios.js,user.js')); ?>
</head>
<body>
<div class="container">
<?php if ($this->_var['action'] == 'default'): ?>
    <section class="main-view">
        <div class="my">
            <div class="my_head">
                <div class="my_head_pic">
                    <img class="my_head_img" width="130" height="130" src="<?php echo $this->_var['info']['headimgurl']; ?>">
                </div>
                <div class="my_head_info">
                    <h4 class="my_head_name "><?php echo $this->_var['info']['uname']; ?></h4>
                </div>
            </div>
        </div>
        <div>
            <div class="nav">
                <ul class="nav_list">
                    <li class="nav_item nav_order">
                        <a href="user.php?act=order_list">
                            <div class="nav_item_hd">我的订单</div>
                        </a>
                        <div class="nav_item_bd">
                            <a href="user.php?act=order_list"><span class="nav_item_txt">全部</span></a>
                            <a href="user.php?act=order_list&composite_status=100">
                                <span class="nav_item_txt">待付款<i class="nav_item_num" id="need_pay_count"  style="display:none">0</i></span>
                            </a>
                            <a href="user.php?act=order_list&composite_status=120">
                                <span class="nav_item_txt">待收货<i class="nav_item_num" id="need_recv_count" style="display:none">0</i></span>
                            </a>
                        </div>
                    </li>
                    <li class="nav_item nav_cheap">
                        <div class="nav_item_hd"><a href="user.php?act=team_list"> 我的拼团 </a></div>
                    </li>
                    <li class="nav_item nav_cart">
                        <div class="nav_item_hd"><a href="user.php?act=address_list">我的地址 </a></div>
                    </li>
                    <li class="nav_item nav_cart">
                        <div class="nav_item_hd_coupons"><a class="coupons_a" href="user.php?act=bonus">我的优惠券 </a></div>
                    </li>
                    <li class="nav_item nav_cart">
                        <div class="nav_item_hd_coupons_sale"><a class="coupons_a" href="article.php?id=38">售后服务 </a></div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <footer class="footer">
        <ul>
            <li><a href="index.php" class="nav-controller"><i class="fa fa-home"></i>首页</a></li>
            <li><a href="user.php?act=team_list" class="nav-controller"><i class="fa fa-group"></i>我的团</a></li>
            <li><a href="user.php?act=order_list" class="nav-controller"><i class="fa fa-list"></i>我的订单</a></li>
            <li><a href="user.php" class="nav-controller active"><i class="fa fa-user"></i>个人中心</a></li>
        </ul>
    </footer>
<?php endif; ?>
</div>

</body>
</html>
