<?php if ($this->_var['total']['real_goods_count'] != 0): ?>
<script>
  region.isAdmin = false;
  <?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
<?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee_0_88687600_1447249844');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee_0_88687600_1447249844']):
?>
            <a class="send_address" href="flow.php?step=address_list">
                <div id="sendTo">
                    <div class="address address_defalut" ms-visible="mobile != ''&&!isLouShare">
                    <h3><b class="send_margin">送至</b><br></h3>
<input name="address_id"  type="hidden"  value="<?php echo $this->_var['consignee_0_88687600_1447249844']['address_id']; ?>" />
                        <ul id="editAddBtn">
                            <li><?php echo $this->_var['consignee_0_88687600_1447249844']['address']; ?></li>
                            <li><strong><?php echo $this->_var['consignee_0_88687600_1447249844']['consignee']; ?></strong><?php echo $this->_var['consignee_0_88687600_1447249844']['mobile']; ?></li>
                        </ul>
                    </div>
                </div>
            </a>
            
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
            
<!--div id="show_address_list" class="address_list"> 
    <?php $_from = $this->_var['consignee_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('sn', 'consignee_0_88705700_1447249844');if (count($_from)):
    foreach ($_from AS $this->_var['sn'] => $this->_var['consignee_0_88705700_1447249844']):
?>
    <div class="address" onclick="window.location='user.php?act=address_list';">
        <input name="address_id" onclick="show_address1(<?php echo $this->_var['consignee_0_88705700_1447249844']['address_id']; ?>)" type="radio" id="address_id_<?php echo $this->_var['consignee_0_88705700_1447249844']['address_id']; ?>" value="<?php echo $this->_var['consignee_0_88705700_1447249844']['address_id']; ?>" <?php if ($this->_var['s_address_id'] == $this->_var['consignee_0_88705700_1447249844']['address_id']): ?>checked="checked"<?php endif; ?>/>
                        
                        
        <p><?php echo $this->_var['consignee_0_88705700_1447249844']['consignee']; ?>&nbsp;&nbsp;<?php echo $this->_var['consignee_0_88705700_1447249844']['mobile']; ?><br/>
            <?php echo $this->_var['consignee_0_88705700_1447249844']['province_name']; ?><?php echo $this->_var['consignee_0_88705700_1447249844']['city_name']; ?><?php echo $this->_var['consignee_0_88705700_1447249844']['district_name']; ?><?php echo $this->_var['consignee_0_88705700_1447249844']['address']; ?>&nbsp;&nbsp;

            <a href="javascript:;" onclick="show_address(<?php echo $this->_var['consignee_0_88705700_1447249844']['address_id']; ?>)">修改</a>&nbsp; 
            <a href="javascript:;" onclick="drop_consignee(<?php echo $this->_var['consignee_0_88705700_1447249844']['address_id']; ?>)" >删除 </a>
            
            <a href="user.php?act=edit_consignee&address_id=<?php echo $this->_var['consignee_0_88705700_1447249844']['address_id']; ?>&back_url=<?php echo $this->_var['forward']; ?>" >修改</a>&nbsp; 

            </p>
    </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
</div-->
<?php if (0): ?>
<div class="address">
    <input name="address_id" <?php if ($this->_var['address_num'] == '0'): ?> checked="checked"<?php endif; ?> type="radio" id="address_id_0" onclick="show_address(0)" value="0"  />
    &nbsp;&nbsp;添加新地址
    <div id="show_address" > <?php if ($this->_var['address_num'] == '0'): ?>
        <table class="ordertable" cellspacing="0" cellpadding="0" style="display:block" id="show_table_address">
            <tr>
                <td width="100" align="right">收货人：</td>
                <td><input type="text" id="consignee" value="<?php echo htmlspecialchars($this->_var['address_row']['consignee']); ?>"  name="consignee" class="input"></td>
            </tr>
            <tr>
                <td align="right">手机：</td>
                <td><input type="text" name="mobile" id="mobile" value="<?php echo htmlspecialchars($this->_var['address_row']['mobile']); ?>" class="input"></td>
            </tr>
            <tr>
                <td align="right">省市区：</td>
                <td><select name="province" id="selProvinces" class="select" onchange="region.changed(this, 2, 'selCities')">
                        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
                        <?php $_from = $this->_var['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
                        <option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['address_row']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </select>
                    <select name="city" id="selCities" class="select" onchange="region.changed(this, 3, 'selDistricts')">
                        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
                        <?php $_from = $this->_var['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city');if (count($_from)):
    foreach ($_from AS $this->_var['city']):
?>
                        <option value="<?php echo $this->_var['city']['region_id']; ?>" <?php if ($this->_var['address_row']['city'] == $this->_var['city']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city']['region_name']; ?></option>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </select>
                    <select name="district" id="selDistricts" class="select" onchange="region.changed(this, 4, 'selarea')" <?php if (! $this->_var['district_list']): ?>style="display:none"<?php endif; ?> style="border:1px solid #ccc;">
                        <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
                        <?php $_from = $this->_var['district_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
                        <option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['address_row']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </select></td>
            </tr>
            <tr>
                <td align="right">街道地址：</td>
                <td><input type="text" id="address"  class="input long" name="address" value="<?php echo htmlspecialchars($this->_var['address_row']['address']); ?>"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="button" value="确定"  onclick="save_address()" class="btn"/>
                    <input type="hidden" name="step" value="consignee" />
                    <input type="hidden" name="act" value="checkout" />
                    <input name="address_id" id="hidden_address_id" type="hidden" value="<?php echo $this->_var['address_row']['address_id']; ?>" /></td>
            </tr>
        </table>
        <?php endif; ?> </div>
</div>
<?php endif; ?>

<?php else: ?>
<input  type="radio"  style="display:none;"  checked name="address_id" value="-1">
<?php endif; ?>