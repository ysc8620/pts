<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
<div id="HHS_ORDERTOTAL" class="total">快递：¥<?php echo $this->_var['total']['shipping_fee_formated']; ?> 总价：<span id="totalPrice" class="total_price"><?php echo $this->_var['total']['amount_formated']; ?></span></div>
