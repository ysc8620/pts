<?php $_from = $this->_var['group_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'group');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['group']):
        $this->_foreach['name']['iteration']++;
?>
<div class="list">
    <img class="mf-image-preload" onclick="window.location='share.php?team_sign=<?php echo $this->_var['group']['team_sign']; ?>';" src="<?php echo $this->_var['group']['headimgurl']; ?>">
    <div class="message">
        <h6><?php echo $this->_var['group']['goods_name']; ?></h6>
        <div class="progress">
            <span class="schedule" style="width:<?php echo $this->_var['group']['progress']; ?>%"></span>
        </div>
        <div class="xin">
            <span class="name"><?php echo $this->_var['group']['user_name']; ?></span>
            <p class="already">
                已有<span><?php echo $this->_var['group']['teammen_num']; ?>/<?php echo $this->_var['group']['team_num']; ?></span>人加入
            </p>
        </div>
    </div><a href="javascript:void(0);" onclick="addToCart(<?php echo $this->_var['group']['extension_id']; ?>,0,0,5,<?php echo $this->_var['group']['team_sign']; ?>);" class="join">参团</a>
</div>
<?php endforeach; else: ?>
<div class="list">
	<div class="message">
        <h2 style="text-align:center;">您的附近没有任何团</h2>
        </div>
</div>
<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>