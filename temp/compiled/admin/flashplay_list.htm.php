<?php echo $this->fetch('pageheader.htm'); ?>
<div class="tab-div">
  <!-- body -->
  <div class="tab-body">
  <div class="list-div list-div-ad" id="listDiv">
  <table cellspacing='1' cellpadding='3' id='list-table' width="70%">
    <tr>
      <th width="400px"><?php echo $this->_var['lang']['schp_imgsrc']; ?></th>
    <th><?php echo $this->_var['lang']['schp_imgurl']; ?></th>
      <th><?php echo $this->_var['lang']['schp_imgdesc']; ?></th>
      <th><?php echo $this->_var['lang']['schp_sort']; ?></th>
    <th width="70px"><?php echo $this->_var['lang']['handler']; ?></th>
    </tr>
    <?php $_from = $this->_var['playerdb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    <tr>
      <td><a href="<?php echo $this->_var['item']['src']; ?>" target="_blank"><img src="<?php echo $this->_var['item']['src']; ?>" width="300" height="60" /></a></td>
    <td align="left"><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank"><?php echo $this->_var['item']['url']; ?></a></td>
      <td align="left"><?php echo $this->_var['item']['text']; ?></td>
      <td align="left"><?php echo $this->_var['item']['sort']; ?></td>
    <td align="center">
        <a href="flashplay.php?act=edit&id=<?php echo $this->_var['key']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>"><img src="images/icon_edit.gif" width="16" height="16" border="0" /></a>
        <a href="flashplay.php?act=del&id=<?php echo $this->_var['key']; ?>" onclick="return check_del();" title="<?php echo $this->_var['lang']['trash_img']; ?>"><img src="images/icon_drop.gif" width="16" height="16" border="0" /></a>
      </td>
    </tr>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>
  <table cellspacing="0">
    <tr>
      <td>
        <input name="add" type="submit" id="btnSubmit" value="<?php echo $this->_var['action_link_special']['text']; ?>" onclick="location.href='<?php echo $this->_var['action_link_special']['href']; ?>';" class="button"/>
      </td>
    </tr>
  </table>
  </div>
  </div>

</div>
<script language="JavaScript">
<!--
onload = function()
{
    // 开始检查订单
    startCheckOrder();
}
function check_del()
{
  if (confirm('<?php echo $this->_var['lang']['trash_img_confirm']; ?>'))
  {
    return true;
  }
  else
  {
    return false;
  }
}
//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>