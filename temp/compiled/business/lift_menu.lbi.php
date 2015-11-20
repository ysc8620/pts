<div class="headcon">

		<h1 title="商家管理平台">商家管理平台</h1>

		<div class="headright">

			<div class="welcome"></div>

			<div class="operate"><a href="?act=logout">退出登录</a>
            <?php if ($_SESSION['role_id'] == ''): ?>
            <a href="suppliers.php?act=edit_password">修改密码</a>
            <?php endif; ?>
            <!-- 
            <a href="/store.php?id=<?php echo $this->_var['suppliers_id']; ?>" target="_blank">我的店铺</a>
             -->
            </div>

		</div>

	</div>

<div class="leftcon" >

		<ul class="menu">

			<li <?php if ($this->_var['action'] == 'default'): ?> class="choise"<?php endif; ?>>

				<a href="suppliers.php?act=default">欢迎页</a>

			</li>
            <?php if ($this->_var['suppliers_array']['is_check'] == 1): ?>
             <?php $_from = $this->_var['action_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
             
			<?php if ($this->_var['item']['action_lists']): ?>
			<li >
				<a href="javascript:;" class="article"><?php echo $this->_var['item']['action_name']; ?></a>

                <div class="second_menu" <?php if ($this->_var['action'] != ''): ?><?php else: ?> style="display:none;"<?php endif; ?>>

                <?php $_from = $this->_var['item']['action_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['value']):
?>

                   <a href="?act=<?php echo $this->_var['value']['action_link']; ?>" class="goods <?php if ($this->_var['action'] == $this->_var['value']['action_link']): ?>choise<?php endif; ?>"><?php echo $this->_var['value']['action_name']; ?></a>

                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                </div>

            </li>
            <?php endif; ?>

	 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
     		<?php else: ?>
            	<li >
				<a href="javascript:;" class="goods">店铺管理</a>

                <div class="second_menu" <?php if ($this->_var['action'] != ''): ?><?php else: ?> style="display:none;"<?php endif; ?>>
                   <a href="?act=supp_info" class="goods choise">账号设置</a>
                </div>
            </li>
            <?php endif; ?>

		</ul>

	</div>

    

<script>

$(document).ready(function(){

  $(".menu li").click(function(){

  		if($(this).find(".second_menu").css("display")=='none')

		{

			$(this).find(".second_menu").slideDown("slow");

		}

		else{

			$(this).find(".second_menu").slideUp("slow");

		}

	});

});	







</script>