<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="haohaios v1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商家管理平台</title>
<link href="templates/css/layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/haohaios.js"></script>
<script type="text/javascript" src="../js/user.js"></script>
<script type="text/javascript" src="../js/region.js"></script>
<script type="text/javascript" src="../js/utils.js"></script>

<script type="text/javascript" src="templates/js/main.js"></script>
<script type="text/javascript" src="templates/js/supp.js"></script>
<script type="text/javascript" src="../<?php echo $this->_var['admin_path']; ?>/js/listtable.js"></script>
<script language="javascript" type="text/javascript" src="../js/DatePicker/WdatePicker.js"></script>
<script>
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";

	
</script>
</head>
<body >

  <?php echo $this->fetch('library/lift_menu.lbi'); ?>
  <?php if ($this->_var['action'] == 'commission_desc'): ?>
  <div class="main" id="main">
		<div class="maintop">
			<img src="templates/images/title_goods.png" /><span>订单管理</span>
		</div>
        <div class="maincon">
			<div class="contitlelist">
            	<span>佣金说明</span>
            </div>
		  <div class="conbox">
<table cellspacing="0" cellpadding="0" class="listtable">
    <tr>
      <th class="left">编号</th>
      <th class="left">分类</th>
      <th class="left">佣金</th>
    </tr>
    <?php $_from = $this->_var['category_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');$this->_foreach['id'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['id']['total'] > 0):
    foreach ($_from AS $this->_var['item']):
        $this->_foreach['id']['iteration']++;
?>
    <tr>
      <td><?php echo $this->_foreach['id']['iteration']; ?></td>
      <td><span><?php echo $this->_var['item']['cat_name']; ?></span></td>
      <td><span><?php echo $this->_var['item']['commission']; ?>%</span></td>
    </tr>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>
        </div>
       </div>
        </div>
  <?php endif; ?>
    <?php if ($this->_var['action'] == 'delivery'): ?>  
     <script>
 function change_order_card(id)
 {
	var result=Ajax.call('suppliers.php?act=change_order_card', 'id=' + id, null, 'POST', 'JSON',false);
 	if(result.error==0)
	{
		alert('系统超时');	
		return false;
	}
	if(result.error ==1)
	{
		document.getElementById('over_msg').innerHTML = '已提货';
	}
	else
	{
		alert('系统错误');
	}
 }
function order_code_check()
 {
	 var order_code = document.getElementById('order_code').value;
	 var order_sn = document.getElementById('order_sn').value;
	 if(order_sn =='')
	 {
		alert('请输入订单号');
		return false; 
	 }
	 if(order_code=='')
	 {
		alet('请输入验证码');
		return false; 
	 }
	var result=Ajax.call('suppliers.php?act=order_code_check_act', 'order_code=' + order_code+'&order_sn='+order_sn, null, 'POST', 'JSON',false);
	if(result.error ==0)
	{
		alert('提货单还未指派或信息输入有误!');
	}
	else
	{
		document.getElementById('show_order_code_html').innerHTML = result.content;
		
	}
 }
function check_delivery_person()
{
	if(document.theForm.delivery_person.value=='')
	{
		alert('请输入提货人姓名');	
		return false;
	}
		return true;	
}
 </script>
	 
           <div class="main" id="main">
		<div class="maintop">
			<img src="templates/images/title_article.png" /><span>订单管理</span>
		</div>
		<div class="maincon">
    	<div class="contitleedit"><span>顾客提货</span></div>
			<div class="conbox" >
				<table cellspacing="0" cellpadding="0" class="edittable">
					<tr>
                           <td class="right">订单号：</td>
						<td><input type="text" id="order_sn" value="" class="input" size="35"></td>
					</tr>

					
                    
                    <tr>
                    						<td class="right">请输入用户提货码：</td>
						<td><input type="text" id="order_code" value="" class="input" size="35"></td>

</tr>
                       
					<tr>
						<td class="right"></td>
						<td><input type="button" onclick="order_code_check();" value="验  证" class="btn"></td>
					</tr>
                    
				</table>
			</div>
            <div class="conbox" id="show_order_code_html">
            
            </div>
    </div>
    </div>
    <?php endif; ?>
  <?php if ($this->_var['action'] == 'order_code_list'): ?>
  <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title_goods.png" /><span>订单管理</span>

		</div>

        <div class="maincon">

			<div class="contitlelist">

            	<span>本地消费列表</span>

            </div>

		  <div class="conbox">

  

<table cellspacing="0" cellpadding="0" class="listtable">

    <tr>

      <th class="left"> 编号</th>

      <th class="left">用户名</th>

      <th class="left">验证码</th>

      <th class="left">购买时间</th>

      <th class="left">消费金额</th>

      <th class="left">消费状态</th>

      <th class="left">订单号</th>

      <th class="left">手机号</th>

      <th class="left">操作</th>

    </tr>

    <?php $_from = $this->_var['card_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'card');if (count($_from)):
    foreach ($_from AS $this->_var['card']):
?>

    <?php if ($this->_var['card']['password']): ?>

    <tr>

      <td><?php echo $this->_var['card']['id']; ?></td>

      <td><span><?php echo $this->_var['card']['user_name']; ?></span></td>

      <td><span>xxxx</span></td>

      <td ><span><?php echo $this->_var['card']['add_date']; ?></span></td>

      <td ><?php echo $this->_var['card']['goods_amount']; ?></td>

      <td ><?php if ($this->_var['card']['is_sale']): ?>已消费<?php else: ?>未消费<?php endif; ?></td>


      <td><?php echo $this->_var['card']['order_sn']; ?></td>

      <td> <?php echo $this->_var['card']['phone']; ?></td>

      <td >

        <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['card']['id']; ?>, '您确定要删除此记录么？', 'remove')" title="删除">删除</a>

      </td>

    </tr>

    <?php endif; ?>

    <?php endforeach; else: ?>

    <tr><td class="no-records" colspan="8">没有记录</td></tr>

    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>

  </table>

            </div>

       </div>

        </div>

  <?php endif; ?>

   <?php if ($this->_var['action'] == 'delivery_info'): ?>
     <div class="main" id="main">
		<div class="maintop">
			<img src="templates/images/title_goods.png" /><span>订单管理</span>
		</div>
        <div class="maincon">
			<div class="contitlelist">
            	<span>提货详情</span>
            </div>
		  <div class="conbox">
            <form action="suppliers.php" method="post" name="theForm" >
            <table width="100%" cellpadding="3" cellspacing="1">

  <tr>

    <th colspan="4">订单信息</th>

  </tr>

  <tr>

    <td><div align="right"><strong><?php echo $this->_var['lang']['delivery_sn_number']; ?></strong></div></td>

    <td><?php echo $this->_var['delivery_order']['delivery_sn']; ?></td>

    <td><div align="right"><strong><?php echo $this->_var['lang']['label_shipping_time']; ?></strong></div></td>

    <td><?php echo $this->_var['delivery_order']['formated_update_time']; ?></td>

  </tr>

  <tr>

    <td width="18%" height="25"><div align="right"><strong><?php echo $this->_var['lang']['label_order_sn']; ?></strong></div></td>

   <td width="34%" height="25"><?php echo $this->_var['delivery_order']['order_sn']; ?><?php if ($this->_var['delivery_order']['extension_code'] == "group_buy"): ?><a href="group_buy.php?act=edit&id=<?php echo $this->_var['delivery_order']['extension_id']; ?>"><?php echo $this->_var['lang']['group_buy']; ?></a><?php elseif ($this->_var['delivery_order']['extension_code'] == "exchange_goods"): ?><a href="exchange_goods.php?act=edit&id=<?php echo $this->_var['delivery_order']['extension_id']; ?>"><?php echo $this->_var['lang']['exchange_goods']; ?></a><?php endif; ?>

    <td height="25"><div align="right"><strong><?php echo $this->_var['lang']['label_order_time']; ?></strong></div></td>

    <td height="25"><?php echo $this->_var['delivery_order']['formated_add_time']; ?></td>

  </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_shipping']; ?></strong></div></td>
    <td><?php if ($this->_var['exist_real_goods']): ?><?php if ($this->_var['delivery_order']['shipping_id'] > 0): ?><?php echo $this->_var['delivery_order']['shipping_name']; ?><?php else: ?><?php endif; ?> <?php if ($this->_var['delivery_order']['insure_fee'] > 0): ?>（<?php echo $this->_var['lang']['label_insure_fee']; ?><?php echo $this->_var['delivery_order']['formated_insure_fee']; ?>）<?php endif; ?><?php endif; ?></td>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_shipping_fee']; ?></strong></div></td>
    <td><?php echo $this->_var['delivery_order']['shipping_fee']; ?></td>
  </tr>
  <tr>
    <td height="25"><div align="right"><strong><?php echo $this->_var['lang']['label_user_name']; ?></strong></div></td>

    <td height="25"><?php echo empty($this->_var['delivery_order']['user_name']) ? $this->_var['lang']['anonymous'] : $this->_var['delivery_order']['user_name']; ?></td>

    <td height="25"><div align="right"><strong>提货人：</strong></div></td>

    <td height="25"><?php if ($this->_var['delivery_order']['status'] != 1): ?><input name="delivery_person" type="text" value="<?php echo $this->_var['delivery_order']['delivery_person']; ?>" <?php if ($this->_var['delivery_order']['status'] == 0): ?> readonly="readonly" <?php endif; ?>><?php else: ?><?php echo $this->_var['delivery_order']['delivery_person']; ?><?php endif; ?></td>

  </tr></table><br />
  <hr style="border-style:dashed;"/><br />
  <table width="100%" cellpadding="3" cellspacing="1">
  <tr>

    <th height="25" colspan="4"><?php echo $this->_var['lang']['consignee_info']; ?></th>

    </tr>

  <tr>

    <td height="25"><div align="right"><strong><?php echo $this->_var['lang']['label_consignee']; ?></strong></div></td>

    <td height="25"><?php echo htmlspecialchars($this->_var['delivery_order']['consignee']); ?></td>

    <td height="25"><div align="right"><strong><?php echo $this->_var['lang']['label_email']; ?></strong></div></td>

    <td height="25"><?php echo $this->_var['delivery_order']['email']; ?></td>

  </tr>

  <tr>

    <td height="25"><div align="right"><strong><?php echo $this->_var['lang']['label_address']; ?></strong></div></td>

    <td height="25">[<?php echo $this->_var['delivery_order']['region']; ?>] <?php echo htmlspecialchars($this->_var['delivery_order']['address']); ?></td>

    <td height="25"><div align="right"><strong><?php echo $this->_var['lang']['label_zipcode']; ?></strong></div></td>

    <td height="25"><?php echo htmlspecialchars($this->_var['delivery_order']['zipcode']); ?></td>

  </tr>
  <tr>
    <td height="25"><div align="right"><strong><?php echo $this->_var['lang']['label_tel']; ?></strong></div></td>

    <td height="25"><?php echo $this->_var['delivery_order']['tel']; ?></td>

    <td height="25"><div align="right"><strong><?php echo $this->_var['lang']['label_mobile']; ?></strong></div></td>

    <td height="25"><?php echo htmlspecialchars($this->_var['delivery_order']['mobile']); ?></td>

  </tr>

</table>
<br />
  <hr style="border-style:dashed;"/><br />
<table width="100%" cellpadding="3" cellspacing="1">
  <tr>
    <th colspan="4">商家信息</th>
  </tr>
  <tr>
    <td><div align="right"><strong>商家名称：</strong></div></td>
    <td><?php echo $this->_var['suppliers_info']['suppliers_name']; ?></td>
    <td><div align="right"><strong>商家地址：</strong></div></td>
    <td>[<?php echo $this->_var['suppliers_info']['region']; ?>]<?php echo $this->_var['suppliers_info']['address']; ?></td>
  </tr>
  <tr>
    <td width="18%" height="25"><div align="right"><strong>联系方式：</strong></div></td>
   <td width="34%" height="25"><?php echo $this->_var['suppliers_info']['phone']; ?></td>
    <td height="25"><div align="right"><strong></strong></div></td>
    <td height="25"></td>
  </tr>
  </table>
  <br />
  <hr style="border-style:dashed;"/><br />


 <table width="100%" cellpadding="3" cellspacing="1" >

  <tr>

    <th colspan="7" scope="col"><?php echo $this->_var['lang']['goods_info']; ?></th>

    </tr>

  <tr>

    <td align="center"><strong><?php echo $this->_var['lang']['goods_name_brand']; ?></strong></td>

    <td align="center" ><strong><?php echo $this->_var['lang']['goods_sn']; ?></strong></td>

    <td align="center" ><strong><?php echo $this->_var['lang']['product_sn']; ?></strong></td>

    <td align="center" ><strong><?php echo $this->_var['lang']['goods_attr']; ?></strong></td>

    <td align="center" ><strong><?php echo $this->_var['lang']['label_send_number']; ?></strong></td>
 	<td align="center" ><strong>单价</strong></td>
    <td align="center" ><strong>小计</strong></td>
  </tr>

  <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>

  <tr>

    <td align="center">

    <a href="/goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><?php echo $this->_var['goods']['goods_name']; ?> <?php if ($this->_var['goods']['brand_name']): ?>[ <?php echo $this->_var['goods']['brand_name']; ?> ]<?php endif; ?>
    </td>
    <td align="center"><?php echo $this->_var['goods']['goods_sn']; ?></td>
    <td align="center"><?php echo $this->_var['goods']['product_sn']; ?></td>
    <td align="center"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></td>
    <td align="center"><?php echo $this->_var['goods']['send_number']; ?></td>
 	<td align="center"><?php echo $this->_var['goods']['goods_price']; ?></td>
    <td align="right"><?php echo $this->_var['goods']['goods_amount']; ?></td>
  </tr>

  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	<tr>
		<td colspan="5"> </td>
		<td align="right" colspan="2">商品总金额：<?php echo $this->_var['total_goods_amount']; ?></td>
	</tr>
</table>
<?php if ($_SESSION['role_id'] == ''): ?>
<table cellpadding="3" cellspacing="1">



  <?php if ($this->_var['delivery_order']['status'] != 1): ?>

  <tr>

    <td><div align="right"><strong><?php echo $this->_var['lang']['label_action_note']; ?></strong></div></td>

  <td colspan="5"><textarea name="action_note" cols="80" rows="3"></textarea></td>

  </tr>

  <tr>

    <td><div align="right"><strong><?php echo $this->_var['lang']['label_operable_act']; ?></strong></div></td>

    <td  align="left"><?php if ($this->_var['delivery_order']['status'] == 2): ?><input name="delivery_confirmed" type="submit" value="确认提货" class="button"/>&nbsp;&nbsp;<?php else: ?>已提货<?php endif; ?>
    <td align="left"><input onclick="de_print();" name="delivery_print" type="button" value="打印" class="button"/>

        <input name="order_id" type="hidden" value="<?php echo $this->_var['delivery_order']['order_id']; ?>">

        <input name="delivery_id" type="hidden" value="<?php echo $this->_var['delivery_order']['delivery_id']; ?>">

        <input name="act" type="hidden" value="<?php echo $this->_var['action_act']; ?>">

    </td>

  </tr>

  <?php endif; ?>



  

</table>
<?php endif; ?>

         </form>

       

            </div>

       </div>

        </div>

   <?php endif; ?>

    <?php if ($this->_var['action'] == 'delivery_list'): ?>

       <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title_goods.png" /><span>订单管理</span>

		</div>

        <div class="maincon">

			<div class="contitlelist">

            	<span>提货列表</span>

                 <div class="searchdiv">

        <form action="suppliers.php"  name="searchForm">

 <input name="order_sn"  placeholder='订单号' value="<?php echo $this->_var['filter']['order_sn']; ?>" type="text" id="order_sn" size="15">

    <input name="consignee" placeholder='<?php echo htmlspecialchars($this->_var['lang']['consignee']); ?>' value="<?php echo $this->_var['filter']['consignee']; ?>" type="text" id="consignee" size="15">

  
    <select name="status" id="status">
      <option value="-1" selected="selected">提货状态</option>
      <?php echo $this->html_options(array('options'=>$this->_var['lang']['delivery_status'],'selected'=>$this->_var['filter']['status'])); ?>
    </select>
    <?php if (0): ?>
    <select name="delivery_pic" id="delivery_pic">
      <option value="-1" selected="selected">提货单上传</option>
      <option value="1">是</option>
     <option value="0">否</option>
    </select>
    
    <?php if ($_SESSION['role_id'] != ''): ?>
    <?php else: ?> 
     <select name="supp_account_id" id="supp_account_id">
      <option value="-1" selected="selected">分店</option>
 <?php $_from = $this->_var['supp_account_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'supp_account');if (count($_from)):
    foreach ($_from AS $this->_var['supp_account']):
?>
		<option value="<?php echo $this->_var['supp_account']['account_id']; ?>" <?php if ($this->_var['supp_account']['account_id'] == $this->_var['filter']['supp_account_id']): ?> selected='selected'<?php endif; ?>><?php echo $this->_var['supp_account']['name']; ?></option>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </select>
   <?php endif; ?>
<?php endif; ?>
    <input name="act" type="hidden" value="delivery_list" />

    <input type="submit" value="查询" class="btn" />

  </form>
      </div>
      <div class="titleright">
<a href="javascript:void(0);" id="delivery_download">导出</a>
<a href="javascript:void(0);" id="delivery_print" target="_blank">打印</a>
</div>
<script >
var str;
var order_sn=document.forms['searchForm'].order_sn.value;
var consignee=document.forms['searchForm'].consignee.value;
var status=document.forms['searchForm'].status.value;
str="order_sn="+order_sn+"&consignee="+consignee+"&status="+status;
/*
<?php if ($_SESSION['role_id'] == ''): ?>
var supp_account_id=document.forms['searchForm'].supp_account_id.value;
str+="&supp_account_id="+supp_account_id;
<?php endif; ?>*/

document.getElementById('delivery_download').href="suppliers.php?act=delivery_download&"+str;
document.getElementById('delivery_print').href="suppliers.php?act=delivery_print&"+str;

</script>
            </div>
			<div class="conbox">
				<table cellspacing="0" cellpadding="0" class="listtable">

					<tr>
					  <th>分店</th>
					  <th><?php echo $this->_var['lang']['order_sn']; ?></th>
					  <th>提货人</th>

					  <th><?php echo $this->_var['lang']['label_add_time']; ?></th>

					  <th class="left"><?php echo $this->_var['lang']['consignee']; ?></th>

					  <th class="left">提货时间</th>

					  <th class="left">提货状态</th>

                      <th class="left">操作</th>

					</tr>

                     <?php $_from = $this->_var['delivery_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('dkey', 'delivery');if (count($_from)):
    foreach ($_from AS $this->_var['dkey'] => $this->_var['delivery']):
?>

                <tr>
                  <td class="middle"><?php if ($this->_var['delivery']['supp_account_name']): ?><?php echo $this->_var['delivery']['supp_account_name']; ?><?php else: ?>未指派<?php endif; ?></td>

                  <td class="middle"><?php echo $this->_var['delivery']['order_sn']; ?></td>
                  <td class="middle"><?php echo $this->_var['delivery']['delivery_person']; ?></td>

                  <td  class="middle"><?php echo $this->_var['delivery']['add_time']; ?></td>

                  <td><a href="mailto:<?php echo $this->_var['delivery']['email']; ?>"> <?php echo htmlspecialchars($this->_var['delivery']['consignee']); ?></a></td>

                  <td><?php echo $this->_var['delivery']['update_time']; ?></td>

                  <td><?php echo $this->_var['delivery']['status_name']; ?></td>

                  <td>
                   <a href="suppliers.php?act=delivery_info&delivery_id=<?php echo $this->_var['delivery']['delivery_id']; ?>">详情</a>
                 
                 
                 <?php if ($this->_var['delivery']['status'] == 0 && 0): ?>
                 <?php if ($this->_var['delivery']['delivery_pic']): ?>
                 <a href="<?php echo $this->_var['delivery']['delivery_pic']; ?>" target="_blank">提货单</a>
                 <?php else: ?>
                 <span id="delivery_pic_<?php echo $this->_var['delivery']['delivery_id']; ?>">
                  <a href="javascript:;" onclick="winopen('suppliers.php?act=delivery_upload&delivery_id=<?php echo $this->_var['delivery']['delivery_id']; ?>','600','500');" >上传提货单</a>
				</span>
                <?php endif; ?>
                <?php endif; ?>

<!--                   <a onclick="{if(confirm('<?php echo $this->_var['lang']['confirm_delete']; ?>')){return true;}return false;}" href="delivery_info.php?act=operate&remove_invoice=1&delivery_id=<?php echo $this->_var['delivery']['delivery_id']; ?>"><?php echo $this->_var['lang']['remove']; ?></a>

-->                  </td>

                </tr>

  				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</table>
			</div>
			     <?php echo $this->fetch('library/pages.lbi'); ?>
		</div>

        </div>
        
    <?php endif; ?>

    <?php if ($this->_var['action'] == 'my_order'): ?>

      <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title_article.png" /><span>结算管理</span>

		</div>

		<div class="maincon">

    	<div class="contitlelist">        

        <span>订单结算</span>

         <div class="searchdiv">

             <form method="post" name="account_form" action="suppliers.php">

              <div>结算状态：</div>
              <select id="settlement_status" name="settlement_status">
              <option value="">请选择</option>
              <?php echo $this->html_options(array('options'=>$this->_var['lang']['account_settlement_status'],'selected'=>$this->_var['filter']['settlement_status'])); ?>

              </select>
			 <div>结算单号：</div>
              <input type="text"  value="<?php echo $this->_var['filter']['order_sn']; ?>" class="input" name="order_sn">
              <div>结算起止时间：</div>
             <input class="Wdate" value="<?php echo $this->_var['filter']['start_time']; ?>" type="text" name="start_time" readonly="readonly" onfocus="WdatePicker({dateFmt:'yyyy-M-d HH:mm'})"/>     
      <input class="Wdate" type="text" value="<?php echo $this->_var['filter']['end_time']; ?>" name="end_time" readonly="readonly" onfocus="WdatePicker({dateFmt:'yyyy-M-d HH:mm'})"/>              
              <input type="hidden" name="act"  value="my_order" />
              <input type="submit" class="btn" name="" value="搜索">
              </form>
        </div>
		<div class="titleright">
		<a href="javascript:void(0);" id="account_download">导出</a>
		<a href="javascript:void(0);" id="account_print" target="_blank">打印</a>
		</div>
<script>
var settlement_status=document.forms['account_form'].settlement_status.value;
var order_sn=document.forms['account_form'].order_sn.value;
var start_time=document.forms['account_form'].start_time.value;
var end_time=document.forms['account_form'].end_time.value;

var str="settlement_status="+settlement_status+"&order_sn="+order_sn+"&start_time="+start_time+"&end_time="+end_time;
document.getElementById('account_download').href="suppliers.php?act=account_download&"+str;
document.getElementById('account_print').href="suppliers.php?act=account_print&"+str;

</script>
        </div>

		<div class="conbox" >
    	<form id="form_data" action="suppliers.php" method="post" name="myform">
    	 <table class="listtable"  width="100%" border="0" cellpadding="5" cellspacing="1">
        <tr>
        <!-- 
        <th >
        <input type="checkbox" name="checkbox" onclick='listTable.selectAll(this, "id")' /></th>
 -->
          <th align="center" bgcolor="#FFFFFF">结算单号</th>
          <!-- <th align="center" bgcolor="#FFFFFF">结算起止时间</th> --> 		
          <th align="center" bgcolor="#FFFFFF">结算总额</th>
 		  <th align="center" bgcolor="#FFFFFF">结算时间</th>
           <th align="center" bgcolor="#FFFFFF">状态</th>
			<th align="center" bgcolor="#FFFFFF">操作</th>
        </tr>

        <?php if ($this->_var['account_list']): ?>

        <?php $_from = $this->_var['account_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>

        <tr>
<!-- 
         <td class="checkbox"><input type="checkbox"  name="id[]" id="id" value="<?php echo $this->_var['item']['id']; ?>" /></td>
 -->
          <td align="center" bgcolor="#FFFFFF"><a href="suppliers.php?act=account_detail&suppliers_accounts_id=<?php echo $this->_var['item']['id']; ?>"><?php echo $this->_var['item']['settlement_sn']; ?></a></td>
          <!-- <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item']['start_time']; ?><br /><?php echo $this->_var['item']['end_time']; ?></td>
           -->
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item']['settlement_amount']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item']['add_time']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['account_settlement_status'][$this->_var['item']['settlement_status']]; ?></td>

           <td align="center" bgcolor="#FFFFFF"><a href="suppliers.php?act=account_detail&suppliers_accounts_id=<?php echo $this->_var['item']['id']; ?>">明细</a></td>

        </tr>

        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

       

        <?php else: ?>

        <tr>

          <td colspan="5" bgcolor="#FFFFFF">暂无可结算订单</td>

        </tr>

        <?php endif; ?>

      </table>

       
</form>
<?php if (1): ?>
      <div class="blank"></div>
      <?php echo $this->fetch('library/pages.lbi'); ?>
      </div>
<?php endif; ?>
         </div>

     </div>

       <?php endif; ?>

<?php if ($this->_var['action'] == 'account_detail'): ?>

      <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title_article.png" /><span>结算管理</span>

		</div>

		<div class="maincon">

    	<div class="contitlelist">        
        <span>订单结算明细</span> 
        <div class="titleright">
<a href="suppliers.php?act=account_detail_download&suppliers_accounts_id=<?php echo $this->_var['suppliers_accounts_id']; ?>">导出</a>
<a target="_blank" href="suppliers.php?act=account_detail_print&suppliers_accounts_id=<?php echo $this->_var['suppliers_accounts_id']; ?>">打印</a>
</div>   
         
        </div>

		<div class="conbox" >

    	<form id="form_data" action="suppliers.php" method="post" name="myform">

    	 <table class="listtable"  width="100%" border="0" cellpadding="5" cellspacing="1">

        <tr>

        <th align="center" bgcolor="#FFFFFF">序号</th>
          <th align="center" bgcolor="#FFFFFF">订单号</th>
          <th align="center" bgcolor="#FFFFFF">商品名称</th>
           <th align="center" bgcolor="#FFFFFF">订单时间</th>
           <th align="center" bgcolor="#FFFFFF">商品数量</th>		
          <th align="center" bgcolor="#FFFFFF">订单金额</th>
          <th align="center" bgcolor="#FFFFFF">佣金</th>
          <th align="center" bgcolor="#FFFFFF">结算金额</th>		
        </tr>
        <?php if ($this->_var['account_detail']): ?>

        <?php $_from = $this->_var['account_detail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');$this->_foreach['name'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['name']['total'] > 0):
    foreach ($_from AS $this->_var['item']):
        $this->_foreach['name']['iteration']++;
?>
        <tr> 
         <td align="center" bgcolor="#FFFFFF"><?php echo $this->_foreach['name']['iteration']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><a href="suppliers.php?act=order_info&order_id=<?php echo $this->_var['item']['order_id']; ?>" title="查看详情"><?php echo $this->_var['item']['order_sn']; ?></a></td>
          
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item']['goods_name']; ?></td>
          
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item']['order_time']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item']['total_goods_num']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item']['amount']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item']['commission']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item']['money']; ?></td>

        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<tr>
		 <td colspan="4" ></td> 
          <td align="center" >合计</td> 
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['total_amount']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['total_commission']; ?></td>
          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['total_money']; ?></td>   
        </tr>
		<tr>
		  <td colspan="4" >备注：
		    <textarea name="accounts_desc" id="accounts_desc" cols="40" rows="3"><?php echo $this->_var['accounts_desc']; ?></textarea></td>
		  <td align="center" >&nbsp;</td>
		  <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
		  <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
		  <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
		  </tr>
        <tr>
		  <td colspan="4" align="left"> 
		  <!--<input type="text" style="width:350px;" id="remark" placeholder="如有问题，请在这里提交" >
		  <input type="button" name="" value="提交" onclick="account_detail_sub()">-->

         
         <table border="0">
         <tr>
         <?php if ($this->_var['settlement_status'] == 1 || $this->_var['settlement_status'] == 10): ?>
         <td>
         <input name="check" onclick="if (confirm('确定此操作')) account_confirm('<?php echo $this->_var['suppliers_accounts_id']; ?>','account_confirm')" type="button" class="button"  value="审核">
		</td>
        <td>
         <input name="check" onclick="if (confirm('确定此操作')) account_confirm('<?php echo $this->_var['suppliers_accounts_id']; ?>','account_cancel')" type="button" class="button"  value="有疑问">
		 </td>
		  <?php elseif ($this->_var['settlement_status'] == 2 || $this->_var['settlement_status'] == 3 || $this->_var['settlement_status'] == 5): ?>
		   <td ><?php echo $this->_var['lang']['account_settlement_status'][$this->_var['settlement_status']]; ?></td>
		   <?php elseif ($this->_var['settlement_status'] == 4): ?>
		   <td>
		   <input name="check" onclick="if (confirm('确定此操作')) account_confirm('<?php echo $this->_var['suppliers_accounts_id']; ?>','check_accountok')" type="button" class="button"  value="确认账户信息">
		   &nbsp;&nbsp;&nbsp;&nbsp;
			商家开户行：<?php echo $this->_var['supp_row']['bank_name']; ?> &nbsp;&nbsp;
			户名：<?php echo $this->_var['supp_row']['bank_p_name']; ?> &nbsp;&nbsp;
			账号：<?php echo $this->_var['supp_row']['bank_account']; ?> &nbsp;&nbsp;
          </td>
          <?php elseif ($this->_var['settlement_status'] == 6): ?>
          <td><input name="check" onclick="if (confirm('确定已收款了?')) account_confirm('<?php echo $this->_var['suppliers_accounts_id']; ?>','account_receive')" type="button" class="button"  value="确定已收款">
          </td>
          <?php endif; ?>
          </tr>
          </table> 
		  </td> 
		  <td colspan="3" align="left" bgcolor="#FFFFFF"></td>
		 </tr>
		 <tr>
<td  colspan="9" align="center">
<table border="0" width="100%">
<tr>
	<th>身份：</th>
	<th>操作时间</th>
	<th>结算单状态</th>
	<th>备注</th>
</tr>
<?php $_from = $this->_var['action_list2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
<tr>
	<td><div align="center"><?php echo $this->_var['item']['action_user']; ?></div></td>
	<td><div align="center"><?php echo $this->_var['item']['action_time']; ?></div></td>
	<td><div align="center"><?php echo $this->_var['item']['status_name']; ?></div></td>
	<td><div align="center"><?php echo $this->_var['item']['action_note']; ?></div></td>
	
</tr>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>
		  </td>		 
		 </tr>
        <?php else: ?>

        <tr>

          <td colspan="7" bgcolor="#FFFFFF">无可结算订单</td>

        </tr>

        <?php endif; ?>

      </table>
</form>
      <div class="blank"></div>
      </div>
         </div>
     </div>
       <?php endif; ?>






   <?php if ($this->_var['action'] == 'accounts_apply'): ?>

   <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title_article.png" /><span>结算管理</span>

		</div>

		<div class="maincon">

    	<div class="contitleedit"><span>账单结算</span></div>

			<div class="conbox" >

            <form name="formEdit" action="suppliers.php"  enctype="multipart/form-data" method="post" onSubmit="return userEdit()">

      <table width="100%" border="0" cellpadding="5" class="edittable" cellspacing="1">

                <tr>

                  <td width="28%" align="right" bgcolor="#FFFFFF">提现总额： </td>

                  <td width="72%" align="left" bgcolor="#FFFFFF"><span style="color:#FF0000; font-weight:bold;"><?php echo $this->_var['price_total']; ?>-<?php echo $this->_var['account_total']; ?>=￥<?php echo $this->_var['account_total']; ?></span>

                  <input name="account" type="hidden" value="<?php echo $this->_var['account_total']; ?>" />

                  </td>

                </tr>

                <tr>

                  <td align="right" bgcolor="#FFFFFF">开户行：</td>

                  <td align="left" bgcolor="#FFFFFF"><?php echo $this->_var['supp_config']['bank_name']; ?><input name="bank_name" type="hidden" value="<?php echo $this->_var['supp_config']['bank_name']; ?>" /></td>

                </tr>

                <tr>

                  <td align="right" bgcolor="#FFFFFF">开户行姓名：</td>

                  <td align="left" bgcolor="#FFFFFF"><?php echo $this->_var['supp_config']['bank_p_name']; ?><input name="bank_p_name" type="hidden" value="<?php echo $this->_var['supp_config']['bank_p_name']; ?>" /></td>

                </tr>

                <tr>

                  <td align="right" bgcolor="#FFFFFF">开户行账号：</td>

                  <td align="left" bgcolor="#FFFFFF"><?php echo $this->_var['supp_config']['bank_account']; ?><input name="bank_account" type="hidden" value="<?php echo $this->_var['supp_config']['bank_account']; ?>" /></td>

                </tr>

                <tr>

                  <td align="right" bgcolor="#FFFFFF">备注：</td>

                  <td align="left" bgcolor="#FFFFFF"><textarea name="apply_desc" id="apply_desc" cols="45" rows="2"></textarea></td>

                </tr>

                <tr>

                  <td align="right" bgcolor="#FFFFFF">提现密码：</td>

                  <td align="left" bgcolor="#FFFFFF"><input type="password"name="bank_password" class="input" id="bank_password" /></td>

                </tr>

                <tr>

                	<td>&nbsp;</td>

                  <td bgcolor="#FFFFFF">

     				<input name="idx" type="hidden" value="<?php echo $this->_var['idx']; ?>" />

                  <input name="act" type="hidden" value="accounts_apply_act" />

                    <input name="submit" type="submit" value="提交申请" class="btn" style="border:none;" />

                  </td>

                </tr>

       </table>

    </form>

           </div>

         </div>

     </div>

   <?php endif; ?>

 <?php if ($this->_var['action'] == 'accounts_apply_list'): ?>

      <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title_article.png" /><span>结算管理</span>

		</div>

		<div class="maincon">

  

        

        	<div class="contitlelist">

				<span>结算申请</span>

                

            

			</div>

        

        

			<div class="conbox" >

            

            

             <table class="listtable" width="100%" border="0" cellpadding="5" cellspacing="1">

        <tr>

          <th align="center" bgcolor="#FFFFFF">提现金额</th>

           <th align="center" bgcolor="#FFFFFF">提现时间</th>

          <th align="center" bgcolor="#FFFFFF">备注</th>

         <th align="center" bgcolor="#FFFFFF">状态</th>

         <th align="center" bgcolor="#FFFFFF">操作</th>

          

        </tr>

        <?php if ($this->_var['accounts_apply_list']): ?>

        <?php $_from = $this->_var['accounts_apply_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>

        <tr>

          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item']['account']; ?></td>

          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item']['add_time']; ?></td>

          <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['item']['apply_desc']; ?></td>

          <td align="center" bgcolor="#FFFFFF"><?php if ($this->_var['item']['apply_status'] == 0): ?>未结算<?php else: ?>已结算<?php endif; ?></td>

          <td align="center" bgcolor="#FFFFFF"><?php if ($this->_var['item']['apply_status'] == 0): ?><a href="?act=accounts_apply_del&id=<?php echo $this->_var['item']['id']; ?>" 

onclick="return confirm('确定要此操作吗');">取消申请</a><?php else: ?>已完成<?php endif; ?></td>

       </tr>

        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

       

        <?php else: ?>

        <tr>

          <td colspan="5" bgcolor="#FFFFFF">暂无申请</td>

        </tr>

        <?php endif; ?>

      </table>

      <div class="blank"></div>

            

            </div>

                  <?php echo $this->fetch('library/pages.lbi'); ?>



         </div>

       </div>

 

 

 <?php endif; ?>

<?php if ($this->_var['action'] == 'order_code_check'): ?>

 <script type="text/javascript" src="/js/transport.js"></script>

 <script type="text/javascript">

 function change_order_card(id)

 {

	var result=Ajax.call('suppliers.php?act=change_order_card', 'id=' + id, null, 'POST', 'JSON',false);

 	if(result.error==0)

	{

		alert('系统超时');	

		return false;

	}

	if(result.error ==1)

	{

		document.getElementById('over_msg').innerHTML = '已消费';

	}

	else

	{

		alert('系统错误');

	}

 }

 function order_code_check()

 {

	 var order_code = document.getElementById('order_code').value;

	 if(order_code=='')

	 {

		alet('请输入验证码');

		return false; 

	 }

	var result=Ajax.call('suppliers.php?act=order_code_check_act', 'order_code=' + order_code, null, 'POST', 'JSON',false);

 	if(result.error ==0)

	{

		alert('验证码不正确，或无订单信息');

	}

	else

	{

		document.getElementById('show_order_code_html').innerHTML = result.content;

		

	}

 }

 </script>

     <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title_article.png" /><span>交易管理</span>

		</div>

		<div class="maincon">

    	<div class="contitleedit"><span>提货码验证</span></div>

			<div class="conbox" >

				<table cellspacing="0" cellpadding="0" class="edittable">

					<tr>

						<td class="right">请输入用户提货码：</td>

						<td><input type="text" id="order_code" value="" class="input" size="35"></td>

					</tr>

					<tr>

						<td class="right"></td>

						<td><input type="button" onclick="order_code_check();" value="验  证" class="btn"></td>

					</tr>

                    

				</table>

			</div>

            <div class="conbox" id="show_order_code_html">

            

            </div>

    </div>

    </div>

    

    <?php endif; ?>

    

    <?php if ($this->_var['action'] == 'goods_order' || $this->_var['action'] == 'goods_order2'): ?>

      <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title_pics.png" /><span>订单管理</span>

		</div>

		<div class="maincon">
			<div class="conbox" style="position:relative;">
			<div class="contitlelist">

				<span>订单列表</span>
                <div class="searchdiv">
						<form id="" name="form_order" method="get" action="suppliers.php">
				<div>订单状态：</div>
				<select name="composite_status" id="composite_status">

                <option value="-1">请选择</option>
            
                  <?php echo $this->html_options(array('options'=>$this->_var['status_list'],'selected'=>$this->_var['filter']['composite_status'])); ?>
            
                </select>
<div>订单状态：</div>
<input type="text" value="<?php echo $this->_var['filter']['order_sn']; ?>" placeholder='订单号' class="input" name="order_sn">

<div>起止时间：</div>
<input class="Wdate" value="<?php echo $this->_var['filter']['start_date']; ?>" type="text" onfocus="WdatePicker({dateFmt:'yyyy-M-d HH:mm'})" readonly="readonly" name="start_time">
<div>~</div>
<input class="Wdate" value="<?php echo $this->_var['filter']['end_date']; ?>" type="text" onfocus="WdatePicker({dateFmt:'yyyy-M-d HH:mm'})" readonly="readonly" name="end_time">          


                                <input name="act" type="hidden" value="<?php echo $this->_var['action']; ?>" />

                                <input type="submit" class="btn" name="" value="搜索">

                            </form>

                        </div>
			</div>

<form id="form_data" action="suppliers.php" method="post" name="myform">
    <div class="bnts">
     <input name="act" type="hidden" value="order_operation" />
     <input type="submit" value="打印" name="order_print">

     <input type="button" onclick="order_d();" value="导出" name="order_download">
 </div>
 <script>
var order_sn=document.forms['form_order'].order_sn.value;
var composite_status=document.forms['form_order'].composite_status.value;
var start_time=document.forms['form_order'].start_time.value;
var end_time=document.forms['form_order'].end_time.value;

var str="order_sn="+order_sn+"&composite_status="+composite_status+"&start_time="+start_time+"&end_time="+end_time+"&action=<?php echo $this->_var['action']; ?>";

function order_d(){	
	
	window.location="suppliers.php?act=order_download2&"+str;
}
</script>
				<table cellspacing="0" cellpadding="0" class="listtable">

					<tr>
					<th class="center"><input type="checkbox" name="checkbox" onclick='listTable.selectAll(this, "order_id")' /> </th>
					  <th class="center">订单号</th>					 
					  <th class="center">下单时间</th>
					  <th class="center">收货人</th>
					  <th class="center">商品数量</th>
                      <th class="center">总金额</th>
                      <th class="center">应付金额</th>
                      <th class="center">订单状态</th>

                      <th>操作列</th>

					</tr>

                      <?php $_from = $this->_var['order_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'order_list');if (count($_from)):
    foreach ($_from AS $this->_var['order_list']):
?>

					<tr>
						<td align="center"><input type="checkbox"  name="order_id[]" id="order_id" value="<?php echo $this->_var['order_list']['order_sn']; ?>" style="height:36px;line-height:36px;" /> </td>
					  <td align="center"><a href="?act=order_info&order_id=<?php echo $this->_var['order_list']['order_id']; ?>"><?php echo $this->_var['order_list']['order_sn']; ?></a></td>

                      <td align="center"><?php echo $this->_var['order_list']['buyer']; ?><br /><?php echo $this->_var['order_list']['short_order_time']; ?></td>

                      <td align="center"><?php echo $this->_var['order_list']['consignee']; ?>[TEL:<?php if ($this->_var['order_list']['mobile']): ?><?php echo $this->_var['order_list']['mobile']; ?><?php else: ?><?php echo $this->_var['order_list']['tel']; ?><?php endif; ?>]<br /><?php echo $this->_var['order_list']['address']; ?></td>
					  <td align="center"><?php echo $this->_var['order_list']['goods_num']; ?></td>
                      <td align="center"><?php echo $this->_var['order_list']['total_fee']; ?></td>

                      <td align="center"><?php echo $this->_var['order_list']['total_fee']; ?></td>

					  <td align="center"><?php echo $this->_var['lang']['os'][$this->_var['order_list']['order_status']]; ?>,<?php echo $this->_var['lang']['ps'][$this->_var['order_list']['pay_status']]; ?>,<?php echo $this->_var['lang']['ss'][$this->_var['order_list']['shipping_status']]; ?></td>

					  <td align="center">

                       <a href="?act=order_info&order_id=<?php echo $this->_var['order_list']['order_id']; ?>">查看</a> 

                       <!--

                       <a href="?act=supp_account_delete&id=<?php echo $this->_var['account']['account_id']; ?>" onclick="return confirm('确定要此操作吗');">删除-->


                       

                        </td>

					</tr>

					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>
            </form>    

			</div>
     <?php echo $this->fetch('library/pages.lbi'); ?>
		</div>
</div>

      <?php endif; ?> 
      

      <?php if ($this->_var['action'] == 'order_info'): ?>

      

      <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title_pics.png" /><span>订单管理</span>

		</div>

		<div class="maincon">

			<div class="contitlelist">


				<span>订单详情</span>

                <div class="titleright">

					<a href="suppliers.php?act=goods_order

">订单列表</a>

				</div>

				

			</div>

			<div class="conbox">

				<form action="suppliers.php?act=operate" method="post" name="theForm">

<div class="list-div" style="margin-bottom: 5px">

<table width="100%" cellpadding="3" cellspacing="1">

  <tr>

    <th colspan="4"><?php echo $this->_var['lang']['base_info']; ?></th>

  </tr>

  <tr>

    <td width="18%"><div align="right"><strong><?php echo $this->_var['lang']['label_order_sn']; ?></strong></div></td>

    <td width="34%"><?php echo $this->_var['order']['order_sn']; ?><?php if ($this->_var['order']['extension_code'] == "group_buy"): ?><a href="group_buy.php?act=edit&id=<?php echo $this->_var['order']['extension_id']; ?>"><?php echo $this->_var['lang']['group_buy']; ?></a><?php elseif ($this->_var['order']['extension_code'] == "exchange_goods"): ?><a href="exchange_goods.php?act=edit&id=<?php echo $this->_var['order']['extension_id']; ?>"><?php echo $this->_var['lang']['exchange_goods']; ?></a><?php endif; ?></td>

    <td width="15%"><div align="right"><strong><?php echo $this->_var['lang']['label_order_status']; ?></strong></div></td>

    <td><?php echo $this->_var['order']['status']; ?></td>

  </tr>

  <tr>

    <td><div align="right"><strong><?php echo $this->_var['lang']['label_user_name']; ?></strong></div></td>

    <td><?php echo empty($this->_var['order']['user_name']) ? $this->_var['lang']['anonymous'] : $this->_var['order']['user_name']; ?></td>

    <td><div align="right"><strong><?php echo $this->_var['lang']['label_order_time']; ?></strong></div></td>

    <td><?php echo $this->_var['order']['formated_add_time']; ?></td>

  </tr>
 <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_shipping']; ?></strong></div></td>

    <td><?php if ($this->_var['exist_real_goods']): ?><?php if ($this->_var['order']['shipping_id'] > 0): ?><?php echo $this->_var['order']['shipping_name']; ?><?php else: ?><?php endif; ?> <?php if ($this->_var['order']['insure_fee'] > 0): ?>（<?php echo $this->_var['lang']['label_insure_fee']; ?><?php echo $this->_var['order']['formated_insure_fee']; ?>）<?php endif; ?><?php endif; ?></td>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_shipping_time']; ?></strong></div></td>
    <td><?php echo $this->_var['order']['shipping_time']; ?></td>
  </tr>
  <tr>

    <td><div align="right"><strong><?php echo $this->_var['lang']['label_payment']; ?></strong></div></td>

    <td><?php if ($this->_var['order']['pay_id'] > 0): ?><?php echo $this->_var['order']['pay_name']; ?><?php else: ?><?php echo $this->_var['lang']['require_field']; ?><?php endif; ?>

    </td>

    <td><div align="right"><strong><?php echo $this->_var['lang']['label_pay_time']; ?></strong></div></td>

    <td><?php echo $this->_var['order']['pay_time']; ?></td>

  </tr>
  
  
  <?php if (0): ?>
  <tr>
    
    <th colspan="4"><?php echo $this->_var['lang']['other_info']; ?></th>
    
  </tr>

  <tr>

    <td><div align="right"><strong><?php echo $this->_var['lang']['label_inv_type']; ?></strong></div></td>

    <td><?php echo $this->_var['order']['inv_type']; ?></td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

  </tr>

  <tr>

    <td><div align="right"><strong><?php echo $this->_var['lang']['label_inv_payee']; ?></strong></div></td>

    <td><?php echo $this->_var['order']['inv_payee']; ?></td>

    <td><div align="right"><strong><?php echo $this->_var['lang']['label_inv_content']; ?></strong></div></td>

    <td><?php echo $this->_var['order']['inv_content']; ?></td>

  </tr>

  <tr>

    <td><div align="right"><strong><?php echo $this->_var['lang']['label_postscript']; ?></strong></div></td>

    <td colspan="3"><?php echo $this->_var['order']['postscript']; ?></td>

  </tr>
<?php endif; ?>
  

  

  <tr>

    <th colspan="4"><?php echo $this->_var['lang']['consignee_info']; ?></th>

    </tr>

  <tr>

    <td><div align="right"><strong><?php echo $this->_var['lang']['label_consignee']; ?></strong></div></td>

    <td><?php echo htmlspecialchars($this->_var['order']['consignee']); ?></td>

    <td><div align="right"><strong><?php echo $this->_var['lang']['label_email']; ?></strong></div></td>

    <td><?php echo $this->_var['order']['email']; ?></td>

  </tr>

  <tr>

    <td><div align="right"><strong><?php echo $this->_var['lang']['label_address']; ?></strong></div></td>

    <td>[<?php echo $this->_var['order']['region']; ?>] <?php echo htmlspecialchars($this->_var['order']['address']); ?></td>

    <td><div align="right"><strong><?php echo $this->_var['lang']['label_zipcode']; ?></strong></div></td>

    <td><?php echo htmlspecialchars($this->_var['order']['zipcode']); ?></td>

  </tr>

  <tr>

    <td><div align="right"><strong><?php echo $this->_var['lang']['label_tel']; ?></strong></div></td>

    <td><?php echo $this->_var['order']['tel']; ?></td>

    <td><div align="right"><strong><?php echo $this->_var['lang']['label_mobile']; ?></strong></div></td>

    <td><?php echo htmlspecialchars($this->_var['order']['mobile']); ?></td>

  </tr>

</table>

</div>





<div class="list-div" style="margin-bottom: 5px">

<table width="100%" cellpadding="3" cellspacing="1">

  <tr>

    <th colspan="8" scope="col"><?php echo $this->_var['lang']['goods_info']; ?></th>

    </tr>

  <tr>

    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['goods_name_brand']; ?></strong></div></td>

    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['goods_sn']; ?></strong></div></td>

    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['product_sn']; ?></strong></div></td>

    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['goods_price']; ?></strong></div></td>

    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['goods_number']; ?></strong></div></td>

    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['goods_attr']; ?></strong></div></td>

    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['storage']; ?></strong></div></td>

    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['subtotal']; ?></strong></div></td>

  </tr>

  <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>

  <tr>

    <td align="center">

    <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>

    <a href="./../goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><?php echo $this->_var['goods']['goods_name']; ?> <?php if ($this->_var['goods']['brand_name']): ?>[ <?php echo $this->_var['goods']['brand_name']; ?> ]<?php endif; ?>

    <?php if ($this->_var['goods']['is_gift']): ?><?php if ($this->_var['goods']['goods_price'] > 0): ?><?php echo $this->_var['lang']['remark_favourable']; ?><?php else: ?><?php echo $this->_var['lang']['remark_gift']; ?><?php endif; ?><?php endif; ?>

    <?php if ($this->_var['goods']['parent_id'] > 0): ?><?php echo $this->_var['lang']['remark_fittings']; ?><?php endif; ?></a>

    <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?>

    <a href="javascript:void(0)" onclick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;"><?php echo $this->_var['lang']['remark_package']; ?></span></a>

    <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none">

        <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?>

          <a href="./../goods.php?id=<?php echo $this->_var['package_goods_list']['goods_id']; ?>" target="_blank"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />

        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

    </div>

    <?php endif; ?>

    </td>

    <td align="center"><?php echo $this->_var['goods']['goods_sn']; ?></td>

    <td align="center"><?php echo $this->_var['goods']['product_sn']; ?></td>

    <td align="center"><?php echo $this->_var['goods']['formated_goods_price']; ?></td>

    <td align="center"><?php echo $this->_var['goods']['goods_number']; ?>
</td>

    <td align="center"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></td>

    <td align="center"><?php echo $this->_var['goods']['storage']; ?></td>

    <td align="center"><?php echo $this->_var['goods']['formated_subtotal']; ?></td>

  </tr>

  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

  <tr>

    <td></td>

    <td>&nbsp;</td>

    <td>&nbsp;</td>

    <td><?php if ($this->_var['order']['total_weight']): ?><div align="right"><strong><?php echo $this->_var['lang']['label_total_weight']; ?>

    </strong></div><?php endif; ?></td>

    <td><?php if ($this->_var['order']['total_weight']): ?><div align="right"><?php echo $this->_var['order']['total_weight']; ?>

    </div><?php endif; ?></td>

    <td>&nbsp;</td>

    <td><strong><?php echo $this->_var['lang']['label_total']; ?></strong></td>

    <td><?php echo $this->_var['order']['formated_goods_amount']; ?></td>

  </tr>

</table>

</div>



<div class="list-div" style="margin-bottom: 5px">

<table width="100%" cellpadding="3" cellspacing="1">

  <tr>

    <th><?php echo $this->_var['lang']['fee_info']; ?></th>

  </tr>

  <tr>

    <td><div align="right"><?php echo $this->_var['lang']['label_goods_amount']; ?><strong><?php echo $this->_var['order']['formated_goods_amount']; ?></strong>



      + <?php echo $this->_var['lang']['label_shipping_fee']; ?><strong><?php echo $this->_var['order']['formated_shipping_fee']; ?></strong>

   

</div></td>

  <tr>

    <td><div align="right"> = <?php echo $this->_var['lang']['label_order_amount']; ?><strong><?php echo $this->_var['order']['formated_total_fee']; ?></strong></div></td>

  </tr>

</table>
</div>
<div class="list-div" style="margin-bottom: 5px">
<table cellpadding="3" cellspacing="1">
  <tr>
    <th colspan="6"><?php echo $this->_var['lang']['action_info']; ?></th>
  </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_action_note']; ?></strong></div></td>
  <td colspan="5"><textarea name="action_note" cols="80" rows="3"></textarea></td>
    </tr>
  <tr>
    <td><div align="right"></div>
      <div align="right"><strong><?php echo $this->_var['lang']['label_operable_act']; ?></strong> </div></td>
    <td colspan="5">
    <?php if ($this->_var['operable_list']['confirm']): ?>
      等待平台确认
      
        <?php endif; ?> <?php if ($this->_var['operable_list']['pay']): ?>
       等待付款
        <?php endif; ?> 
    <?php if ($this->_var['operable_list']['split']): ?>
        <input name="ship" type="submit" value="<?php echo $this->_var['lang']['op_split']; ?>" class="button" />
        <?php endif; ?> <!--<?php if ($this->_var['operable_list']['unship']): ?>
        <input name="unship" type="submit" value="<?php echo $this->_var['lang']['op_unship']; ?>" class="button" />
        <?php endif; ?> --><?php if ($this->_var['operable_list']['receive']): ?>
        <input name="receive" type="submit" value="<?php echo $this->_var['lang']['op_receive']; ?>" class="button" />
        <?php endif; ?> 
         <?php if ($this->_var['operable_list']['return']): ?>
        <input name="return" type="submit" value="<?php echo $this->_var['lang']['op_return']; ?>" class="button" />
        <?php endif; ?> <?php if ($this->_var['operable_list']['to_delivery']): ?>
        <input name="to_delivery" type="submit" value="<?php echo $this->_var['lang']['op_to_delivery']; ?>" class="button"/>
        <input name="order_sn" type="hidden" value="<?php echo $this->_var['order']['order_sn']; ?>" />
        <?php endif; ?> 
        <input name="order_id" type="hidden" value="<?php echo $_REQUEST['order_id']; ?>"></td>
    </tr>
  <tr>
    <th><?php echo $this->_var['lang']['action_user']; ?></th>
    <th><?php echo $this->_var['lang']['action_time']; ?></th>
    <th><?php echo $this->_var['lang']['order_status']; ?></th>
    <th><?php echo $this->_var['lang']['pay_status']; ?></th>
    <th><?php echo $this->_var['lang']['shipping_status']; ?></th>
    <th><?php echo $this->_var['lang']['action_note']; ?></th>
  </tr>
  <?php $_from = $this->_var['opt_action_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'action_0_97432000_1446604859');if (count($_from)):
    foreach ($_from AS $this->_var['action_0_97432000_1446604859']):
?>
  <tr>
    <td><div align="center"><?php echo $this->_var['action_0_97432000_1446604859']['action_user']; ?></div></td>
    <td><div align="center"><?php echo $this->_var['action_0_97432000_1446604859']['action_time']; ?></div></td>
    <td><div align="center"><?php echo $this->_var['action_0_97432000_1446604859']['order_status']; ?></div></td>
    <td><div align="center"><?php echo $this->_var['action_0_97432000_1446604859']['pay_status']; ?></div></td>
    <td><div align="center"><?php echo $this->_var['action_0_97432000_1446604859']['shipping_status']; ?></div></td>
    <td><?php echo nl2br($this->_var['action_0_97432000_1446604859']['action_note']); ?></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>
</div>






</form>

                

			</div>

		</div>

</div>

      <?php endif; ?> 

      

      

    

    

    <?php if ($this->_var['action'] == 'user_message'): ?>

      <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title_article.png" /><span>用户评论管理</span>

		</div>

		<div class="maincon">

			

			<div class="contitlelist">

            <span>用户评论</span>

            </div>

			<div class="conbox">

				<table cellspacing="0" cellpadding="0" class="listtable">

					<tr>

                      <th class="center">用户名称</th>

                      <th class="center">类型</th>

					  <th class="center">评论对象</th>

					  <th class="center">IP地址</th>

                      <th class="center">评论时间</th>

                      <th class="center">状态</th>

                      <th>操作</th>

					</tr>

                

                <?php $_from = $this->_var['comment_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'comment');if (count($_from)):
    foreach ($_from AS $this->_var['comment']):
?>

			<tr>

   

    <td class="center"><?php if ($this->_var['comment']['user_name']): ?><?php echo $this->_var['comment']['user_name']; ?><?php else: ?><?php echo $this->_var['lang']['anonymous']; ?><?php endif; ?></td>

    <td class="center"><?php if ($this->_var['comment']['comment_type'] == 1): ?>文章<?php else: ?>商品<?php endif; ?></td>

    <td class="center"><a href="./../<?php if ($this->_var['comment']['comment_type'] == '0'): ?>goods<?php else: ?>article<?php endif; ?>.php?id=<?php echo $this->_var['comment']['id_value']; ?>" target="_blank"><?php echo $this->_var['comment']['title']; ?></td>

    <td class="center"><?php echo $this->_var['comment']['ip_address']; ?></td>

    <td align="center"><?php echo $this->_var['comment']['add_time']; ?></td>

    <td align="center"><?php if ($this->_var['comment']['status'] == 0): ?>隐藏<?php else: ?>显示<?php endif; ?></td>

   

    <td align="center">

      <a href="?act=reply&amp;id=<?php echo $this->_var['comment']['comment_id']; ?>">查看详情</a> |

      <a href="?act=delete_comment&id=<?php echo $this->_var['comment']['comment_id']; ?>" onclick="return confirm('确定要此操作吗');">删除</a>

    </td>

  </tr>

    <?php endforeach; else: ?>

    <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>

    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>

    

				</table>

                

			</div>

		</div>

        </div>

      <?php endif; ?> 

      

    <?php if ($this->_var['action'] == 'reply'): ?>  

     <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title_article.png" /><span>用户评论管理</span>

		</div>

		<div class="maincon">
				<div class="contitleedit"><span>用户评论详情</span></div>
			<div class="conbox">
            <form action="suppliers.php" enctype="multipart/form-data" method="post" name="myform">
           <table cellspacing="0" cellpadding="0" class="edittable">
<tr>

      <td>

      <a href="mailto:<?php echo $this->_var['msg']['email']; ?>">

      <b><?php if ($this->_var['msg']['user_name']): ?><?php echo $this->_var['msg']['user_name']; ?><?php else: ?>匿名用户<?php endif; ?></b></a>&nbsp;于

      &nbsp;<?php echo $this->_var['msg']['add_time']; ?>&nbsp;于&nbsp;<b><?php echo $this->_var['id_value']; ?></b>&nbsp;发表评论

    </td>

    </tr>

    <tr>

      <td><hr color="#dadada" size="1"></td>

    </tr>

    <tr>

      <td>

        <div style="overflow:hidden; word-break:break-all;"><?php echo $this->_var['msg']['content']; ?></div>

        <div align="right"><b><?php echo $this->_var['lang']['comment_rank']; ?>:</b> <?php echo $this->_var['msg']['comment_rank']; ?>&nbsp;&nbsp;<b>IP地址</b>:<?php echo $this->_var['msg']['ip_address']; ?></div>

      </td>

    </tr>
    <tr>
      <td align="center">
        <?php if ($this->_var['msg']['status'] == "0"): ?>

        <input type="button" onclick="location.href='?act=update_comment_status&check=allow&id=<?php echo $this->_var['msg']['comment_id']; ?>'" class="btn" value="允许显示" />
        <?php else: ?>
        <input type="button" onclick="location.href='?act=update_comment_status&check=forbid&id=<?php echo $this->_var['msg']['comment_id']; ?>'" class="btn" value="禁止显示"  />

        <?php endif; ?>

    </td>
    </tr>
                    </table>
                    </form>

<?php if ($this->_var['reply_info']['content']): ?>


<div class="maincon">
				<div class="contitleedit"><span>回复</span></div>
			<div class="conbox"> 
      <table cellspacing="0" cellpadding="0" class="edittable">
    <tr>
      <td>
      操作人员&nbsp;<a href="mailto:<?php echo $this->_var['msg']['email']; ?>"><b><?php echo $this->_var['reply_info']['user_name']; ?></b></a>&nbsp;于
      &nbsp;<?php echo $this->_var['reply_info']['add_time']; ?>&nbsp;回复
    </td>
    </tr>
    <tr>
      <td><hr color="#dadada" size="1"></td>
    </tr>
    <tr>
      <td>

        <div style="overflow:hidden; word-break:break-all;"><?php echo $this->_var['reply_info']['content']; ?></div>

        <div align="right"><b>IP地址</b>: <?php echo $this->_var['reply_info']['ip_address']; ?></div>

      </td>

    </tr>

  </table>

</div>

<?php endif; ?>        

           







<script language="javascript">

	function comment_validate()

	{

		var frm              = document.forms['comment_Form'];

	  	var content     = frm.elements['content'].value;

	  	if(content == 0){

			alert('回复的评论内容不能为空!');

			return false;	

		}

	}

</script>



<form method="post" action="suppliers.php?act=action" name="comment_Form" onsubmit="return comment_validate()">
  <table cellspacing="0" cellpadding="0" class="edittable">
  <tr><th colspan="2" align="left">
  <strong>回复评论</strong>
  </th></tr>
  <tr>

    <td>用户名:</td>
    <td><input name="user_name" type="text" value="商家" class="input"  /></td>
  </tr>

  <tr>
    <td>回复内容:</td>
    <td><textarea name="content" cols="50" rows="4" wrap="VIRTUAL"><?php echo $this->_var['reply_info']['content']; ?></textarea></td>
  </tr>
  <?php if ($this->_var['reply_info']['content']): ?>
  <tr>
    <td>&nbsp;</td>
    <td>提示: 此条评论已有回复, 如果继续回复将更新原来回复的内容!</td>
  </tr>
  <?php endif; ?>
 <tr>

    <td>&nbsp;</td>

    <td>

      <input name="submit" type="submit" value="确定" class="btn">
      <input type="hidden" name="comment_id" value="<?php echo $this->_var['msg']['comment_id']; ?>">

      <input type="hidden" name="comment_type" value="<?php echo $this->_var['msg']['comment_type']; ?>">

      <input type="hidden" name="id_value" value="<?php echo $this->_var['msg']['id_value']; ?>">

    </td>

  </tr>

</table>

</form>





















           

           

           

           

           

           

           

           

           

           

           

           

           

           

            </div>

  </div>

  </div> 
    <?php endif; ?> 
      <?php if ($this->_var['action'] == 'goods_category'): ?>
      <div class="main" id="main">
		<div class="maintop">
			<img src="templates/images/title_article.png" /><span>商品分类管理</span>
		</div>
		<div class="maincon">
			<div class="contitlelist">
            <span>分类管理</span>
            <div class="titleright"><a href="?act=add_cate">添加分类</a></div>
            </div>
			<div class="conbox">
				<table cellspacing="0" cellpadding="0" class="listtable" id="list-table">
					<tr>
					  <th class="center">分类名称</th>
					  <th class="center">是否显示</th>
					  <th class="center">排序</th>
					  <th>操作列</th>
					</tr>
                      <?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
					<tr align="center" class="<?php echo $this->_var['cat']['level']; ?>" id="<?php echo $this->_var['cat']['level']; ?>_<?php echo $this->_var['cat']['cat_id']; ?>"<?php if ($this->_var['cat']['level'] > 0): ?> style="display:none;"<?php endif; ?>>
					  <td align="center" class="first-cell" >
      <?php if ($this->_var['cat']['is_leaf'] != 1): ?>
      <img src="templates/images/menu_plus.gif" id="icon_<?php echo $this->_var['cat']['level']; ?>_<?php echo $this->_var['cat']['cat_id']; ?>" width="9" height="9" border="0" style="margin-left:<?php echo $this->_var['cat']['level']; ?>em" onclick="rowClicked(this)" />
      <?php else: ?>
      <img src="templates/images/menu_arrow.gif" width="9" height="9" border="0" style="margin-left:<?php echo $this->_var['cat']['level']; ?>em" />
      <?php endif; ?>
      <span><a href="goods.php?act=list&cat_id=<?php echo $this->_var['cat']['cat_id']; ?>"><?php echo $this->_var['cat']['cat_name']; ?></a></span>
    <?php if ($this->_var['cat']['cat_image']): ?>
      <img src="<?php echo $this->_var['cat']['cat_image']; ?>" border="0" style="vertical-align:middle;" width="60px" height="21px">
    <?php endif; ?>
    </td>
					  <td align="center"><?php if ($this->_var['cat']['is_show'] == 1): ?>显示<?php else: ?>不显示<?php endif; ?></td>
					  <td align="center"><?php echo $this->_var['cat']['sort_order']; ?></td>
					  <td align="center">
                       <a href="?act=edit_cate&cat_id=<?php echo $this->_var['cat']['cat_id']; ?>">编辑</a> |
                       <a href="?act=delete_cate&cat_id=<?php echo $this->_var['cat']['cat_id']; ?>" onclick="return confirm('确定要此操作吗');">删除</a>
                        </td>
					</tr>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</table>
			</div>
		</div>
        </div>
<script>
var imgPlus = new Image();
imgPlus.src = "templates/images/menu_plus.gif";

/*
 *
 * 折叠分类列表
 */
function rowClicked(obj)
{
  // 当前图像
  img = obj;
  // 取得上二级tr>td>img对象
  obj = obj.parentNode.parentNode;
  // 整个分类列表表格
  var tbl = document.getElementById("list-table");
  // 当前分类级别
  var lvl = parseInt(obj.className);
  // 是否找到元素
  var fnd = false;
  var sub_display = img.src.indexOf('menu_minus.gif') > 0 ? 'none' : (Browser.isIE) ? 'block' : 'table-row' ;
  // 遍历所有的分类
  for (i = 0; i < tbl.rows.length; i++)
  {
      var row = tbl.rows[i];
      if (row == obj)
      {
          // 找到当前行
          fnd = true;
          //document.getElementById('result').innerHTML += 'Find row at ' + i +"<br/>";
      }
      else
      {
          if (fnd == true)
          {
              var cur = parseInt(row.className);
              var icon = 'icon_' + row.id;
              if (cur > lvl)
              {
                  row.style.display = sub_display;
                  if (sub_display != 'none')
                  {
                      var iconimg = document.getElementById(icon);
                      iconimg.src = iconimg.src.replace('plus.gif', 'minus.gif');
                  }
              }
              else
              {
                  fnd = false;
                  break;
              }
          }
      }
  }

  for (i = 0; i < obj.cells[0].childNodes.length; i++)
  {
      var imgObj = obj.cells[0].childNodes[i];
      if (imgObj.tagName == "IMG" && imgObj.src != 'templates/images/menu_arrow.gif')
      {
          imgObj.src = (imgObj.src == imgPlus.src) ? 'templates/images/menu_minus.gif' : imgPlus.src;
      }
  }
}
        </script>
      <?php endif; ?> 

      <?php if ($this->_var['action'] == 'brand'): ?>
      <div class="main" id="main">
		<div class="maintop">
			<img src="templates/images/title_article.png" /><span>商品品牌管理</span>
		</div>
		<div class="maincon">
			<div class="contitlelist">
            <span>品牌管理</span>
            <div class="titleright"><a href="?act=add_brand">添加品牌</a></div>
            </div>
			<div class="conbox">
				<table cellspacing="0" cellpadding="0" class="listtable">
					<tr>
					  <th class="center">品牌名称</th>
					  <th class="center">是否显示</th>
					  <th class="center">排序</th>
					  <th>操作列</th>
					</tr>
                      <?php $_from = $this->_var['supp_brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
					<tr>
					  <td align="center"><?php echo $this->_var['brand']['brand_name']; ?></td>
					  <td align="center"><?php if ($this->_var['brand']['is_show'] == 1): ?>显示<?php else: ?>不显示<?php endif; ?></td>
					  <td align="center"><?php echo $this->_var['brand']['sort_order']; ?></td>
					  <td align="center">
                       <a href="?act=edit_brand&brand_id=<?php echo $this->_var['brand']['brand_id']; ?>">编辑</a> |
                       <a href="?act=delete_brand&brand_id=<?php echo $this->_var['brand']['brand_id']; ?>" onclick="return confirm('确定要此操作吗');">删除</a>
                        </td>
					</tr>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</table>
			</div>
		</div>
        </div>
      <?php endif; ?> 

      <?php if ($this->_var['action'] == 'edit_brand' || $this->_var['action'] == 'add_brand'): ?>
     <div class="main" id="main">
		<div class="maintop">
			<img src="templates/images/title_article.png" /><span>商品品牌管理</span>
		</div>
		<div class="maincon">
        		<?php if ($this->_var['action'] == 'edit_rand'): ?>
				<div class="contitlelist"><span>编辑品牌</span></div>
                <?php else: ?>
                <div class="contitlelist"><span>添加品牌</span></div>
                <?php endif; ?>
			<div class="conbox">
            <form action="suppliers.php" enctype="multipart/form-data" method="post" name="myform">
           <table cellspacing="0" cellpadding="0" class="edittable">
					<tr>
						<td class="right">品牌名称：</td>
						<td> <input type="text" name="brand_name" value="<?php echo $this->_var['brand_info']['brand_name']; ?>" class="input" size="35" /></td>
					</tr>
                    <tr>
						<td class="right">是否显示：</td>
						<td>
                        <?php if ($this->_var['brand_info']['is_show'] == 1): ?>
     是 <input type='radio'  name="is_show"  value="1" checked="checked">
      否 <input type='radio' name="is_show" value="0">
                        <?php else: ?>
        是 <input type='radio' name="is_show" value="1" >
       否 <input  type='radio' name="is_show" value="0" checked="checked">                 
                        <?php endif; ?>
                        </td>
					</tr>
                    <tr>
                    <td class="right">品牌LOGO：</td>
                    <td><input type="file" name="brand_logo" id="logo" size="45">&nbsp;&nbsp;建议260*100像素
                    <?php if ($this->_var['brand_info']['brand_logo']): ?><a href="/data/brandlogo/<?php echo $this->_var['brand_info']['brand_logo']; ?>">查看</a><?php endif; ?>
                    </td>
                   </tr>
                     <tr>
						<td class="right">排序：</td>
						<td>
                        <input type="text" name="sort_order" value="<?php echo $this->_var['brand_info']['sort_order']; ?>"class="input" size="35"  />
                        </td>
					</tr>
                    <tr>
						<td class="right">&nbsp;</td>
						<td>
                        <input type="hidden" name="suppliers_id" value="<?php echo $this->_var['suppliers_id']; ?>">
                        <input type="hidden" name="brand_id" value="<?php echo $this->_var['brand_info']['brand_id']; ?>">
                        <input type="hidden" name="act"  value="<?php echo $this->_var['status']; ?>">
                        <input type="submit" value="确 认" class="btn" name="subsupp"></td>
					</tr>
                    </table>
                    </form>
             </div>
  </div>
  </div>         
      <?php endif; ?> 

<?php if ($this->_var['action'] == 'edit_cate' || $this->_var['action'] == 'add_cate'): ?>
     <div class="main" id="main">
		<div class="maintop">
			<img src="templates/images/title_article.png" /><span>商品分类管理</span>
		</div>
		<div class="maincon">
        		<?php if ($this->_var['action'] == 'edit_cate'): ?>
				<div class="contitlelist"><span>编辑分类</span></div>
                <?php else: ?>
                <div class="contitlelist"><span>添加分类</span></div>
                <?php endif; ?>
			<div class="conbox">
            <form action="suppliers.php" enctype="multipart/form-data" method="post" name="myform">
           <table cellspacing="0" cellpadding="0" class="edittable">
					<tr>
						<td class="right">分类名称：</td>
						<td> <input type="text" name="cat_name" value="<?php echo $this->_var['cat_info']['cat_name']; ?>" class="input" size="35" /></td>
					</tr>
                    
                    <tr>
						<td class="right">上级分类：</td>
					 
                        
                        <td>
                        <select name="parent_id">
            				<option value="0">请选择...</option>
            				<?php echo $this->_var['cat_list']; ?>
            			</select>
                        </td>
                        
					</tr>
                    
                    <tr>
						<td class="right">是否显示：</td>
						<td>
                        <?php if ($this->_var['cat_info']['is_show'] == 1): ?>
     是 <input type='radio'  name="is_show"  value="1" checked="checked">
      否 <input type='radio' name="is_show" value="0">
                        <?php else: ?>
        是 <input type='radio' name="is_show" value="1" >
       否 <input  type='radio' name="is_show" value="0" checked="checked">                 
                        <?php endif; ?>
                        </td>
					</tr>
                     <tr>
						<td class="right">排序：</td>
						<td>
                        <input type="text" name="sort_order" value="<?php echo $this->_var['cat_info']['sort_order']; ?>"class="input" size="35"  />
                        </td>
					</tr>
                    <tr>
						<td class="right">&nbsp;</td>
						<td>
                        <input type="hidden" name="suppliers_id" value="<?php echo $this->_var['suppliers_id']; ?>">
                        <input type="hidden" name="cat_id" value="<?php echo $this->_var['cat_info']['cat_id']; ?>">
                        <input type="hidden" name="act"  value="<?php echo $this->_var['status']; ?>">
                        <input type="submit" value="确 认" class="btn" name="subsupp"></td>
					</tr>
                    </table>
                    </form>
             </div>
  </div>
  </div>         
      <?php endif; ?> 

    <?php if ($this->_var['action'] == 'shipping_config'): ?>

        <script language="javascript">

		function s_type(type)

		{

			if(type==2)

			{

				document.getElementById('shipping_fee').style.display = '';	

			}

			else

			{

				document.getElementById('shipping_fee').style.display = 'none';	

			}

		}

		function res()

		{

			if(document.myform.shipping_type.value =='')

			{

				alert('请选择');	

				return false;

			}

			else

			{

				if(document.myform.shipping_type.value ==2)

				{

					if(document.myform.shipping_fee.value=='')	

					{

						alert('请输入运费');	

						return false;

					}

				}

			}

			return true;

		}

    </script>



    <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title_article.png" /><span>系统设置</span>

		</div>

		<div class="maincon">

			

			<div class="contitleedit">

            <span>运费设置</span>

            </div>

			<div class="conbox">

           <form action="suppliers.php" method="post" name="myform" onsubmit="return res();">

				

               <table width="100%" border="0" cellpadding="5" class="edittable" cellspacing="1">

                <tr>

                  <td  align="right" bgcolor="#FFFFFF">运费类别： </td>

                  <td  align="left" bgcolor="#FFFFFF">

                <select name="shipping_type" id="shipping_type" onchange="s_type(this.value)">

                	<option value="">请选择</option>

                    <option value="1" <?php if ($this->_var['supp_row']['shipping_type'] == 1): ?> selected="selected"<?php endif; ?>>按商品计算</option>

                    <option value="2" <?php if ($this->_var['supp_row']['shipping_type'] == 2): ?> selected="selected"<?php endif; ?>>按店铺计算</option>

                </select>

           

                  </td>

                </tr>

                

                 <tr id="shipping_fee"  <?php if ($this->_var['supp_row']['shipping_type'] == 1): ?>style="display:none;"<?php endif; ?>>

                  <td align="right" bgcolor="#FFFFFF">运费：</td>

                  <td align="left" bgcolor="#FFFFFF"><input type="text" name="shipping_fee" class="input" value="<?php echo $this->_var['supp_row']['shipping_fee']; ?>" />

                </td>

                </tr>

                

                

              <tr>

                  <td width="28%" align="right" bgcolor="#FFFFFF">&nbsp;</td>

                  <td width="72%" align="left" bgcolor="#FFFFFF">

                  按商品计算：根据购买订单商品重量进行继续运费<br>

					按店铺计算：只要购买该店铺商品只收取固定运费                  

                  </td>

                </tr>

                <tr>

                	<td>&nbsp;</td>

                  <td bgcolor="#FFFFFF">

     

                  <input name="act" type="hidden" value="shipping_config_act" />

                    <input name="submit" type="submit" value="提交" class="btn" style="border:none;" />

                  </td>

                </tr>

       </table> 

                

                </form>

            </div>

		</div>

        </div>

    <?php endif; ?>

    

    <?php if ($this->_var['action'] == 'bank_config'): ?>
    <script>
		function bank_config()
		{
			var bank_name = document.myform.bank_name.value;
			var bank_p_name = document.myform.bank_p_name.value;	
			var bank_account = document.myform.bank_account.value;
			//var bank_password = document.myform.bank_password.value;	
			if(bank_name=='')
			{
				alert('开户行名称不能为空');
				return false;	
			}
			if(bank_p_name=='')
			{
				alert('开户行姓名不能为空');
				return false;	
			}
			if(bank_account=='')
			{
				alert('银行账号不能为空');	
				return false;
			}
//			if(bank_password=='')
//			{
//				alert('提现密码不能为空');	
//				return false;
//			}
			
			if(bank_name.length>50)
			{
				alert('开户行名称不大于50个汉字');
				return false;
			}
			if(bank_p_name.length>30)
			{
				alert('开户行姓名不大于10个汉字或字母');
				return false;
			}
			var reg = /^[\d|\-|\s]+$/;
			if (!reg.test(bank_account)||bank_account.length>20)
			{
				alert('账号格式不正确');
				return false;
			}

//			if (!reg.test(bank_password)||bank_password.length!=6)
//			{
//				alert('提现密码格式不正确');
//				return false;
//			}
			
			return true;
			
		}
	
	</script>

      <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title_article.png" /><span>结算管理</span>

		</div>

		<div class="maincon">

			

			<div class="contitleedit">

            <span>账号设置</span>

            </div>

			<div class="conbox" style="font-size:16px;">

           <form action="suppliers.php" name="myform" method="post" onsubmit="return bank_config();">

				
						

               <table width="100%" border="0" cellpadding="5" class="edittable" cellspacing="1">

				<div style="font-size:16px; text-align:center; color:#f60; padding-top:20px;">注意事项：开户行设置只能提交一次，提交后不可再编辑，请您确认好账户信息，如您的账户需要发生变更时，请于平台联系。</div>	
				
                 
                
                <tr>

                  <td width="28%" align="right" bgcolor="#FFFFFF">开户行名称： </td>

                  <td width="72%" align="left" bgcolor="#FFFFFF">
				
               <?php if ($this->_var['supp_row']['bank_name']): ?>
               	<?php echo $this->_var['supp_row']['bank_name']; ?>
               <?php else: ?>
               
               	 <input name="bank_name"  id='bank_name' type="text" class="input" value="<?php echo $this->_var['supp_row']['bank_name']; ?>" />可以输入50个汉字字符
               <?php endif; ?>
                 

                  </td>

                </tr>

                <tr>

                  <td align="right" bgcolor="#FFFFFF">开户行姓名：</td>

                  <td align="left" bgcolor="#FFFFFF">
                  
                  <?php if ($this->_var['supp_row']['bank_name']): ?>
                  	<?php echo $this->_var['supp_row']['bank_p_name']; ?>
                  <?php else: ?>
                  	<input type="text" name="bank_p_name" id='bank_p_name' class="input" value="<?php echo $this->_var['supp_row']['bank_p_name']; ?>" />
可以输入个10汉字或字母
                  <?php endif; ?>
                  
                </td>

                </tr>

                <tr>

                  <td align="right" bgcolor="#FFFFFF">开户行账号：</td>

                  <td align="left" bgcolor="#FFFFFF">
                  <?php if ($this->_var['supp_row']['bank_name']): ?>
                  <?php echo $this->_var['supp_row']['bank_account']; ?>
                  <?php else: ?>
                  <input type="text" name="bank_account" id='bank_account' class="input"  value="<?php echo $this->_var['supp_row']['bank_account']; ?>" />
                  可以输入20个数字
                  <?php endif; ?>
                  
                  
                  </td>

                </tr>
                <?php if ($this->_var['supp_row']['bank_name']): ?>
                <?php else: ?>
                <tr>

                	<td>&nbsp;</td>
				
                  <td bgcolor="#FFFFFF">
                  <input name="act" type="hidden" value="update_shipping_type" />
                    <input name="submit" type="submit" value="提交" class="btn" style="border:none;" />
                  </td>
				
                </tr>
                <?php endif; ?>

       </table> 

                

                </form>

            </div>

		</div>

        </div>

      <?php endif; ?> 
    
    <?php if ($this->_var['action'] == 'supp_account'): ?>
      <div class="main" id="main">
		<div class="maintop">
			<img src="templates/images/title_article.png" /><span>子账号管理</span>
		</div>
		<div class="maincon">
			<div class="contitlelist">
            <span>子账号列表</span>
            <div class="titleright"><a href="?act=add_supp_account">新建账号</a></div>
            </div>
			<div class="conbox">

				<table cellspacing="0" cellpadding="0" class="listtable">

					<tr>

					  <th class="center">账号名</th>
					  <th class="center">类别</th>

					  <th class="center">名称</th>

					  <th class="center">状态</th>

                      <th>操作列</th>

					</tr>

                      <?php $_from = $this->_var['account_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'account');if (count($_from)):
    foreach ($_from AS $this->_var['account']):
?>

					<tr>

					  <td align="center"><?php echo $this->_var['account']['account_name']; ?></td>
					  <td align="center"><?php if ($this->_var['account']['account_type'] == 0): ?>子账号<?php else: ?>分店<?php endif; ?></td>

                      <td align="center"><?php echo $this->_var['account']['name']; ?></td>

                      <td align="center"><?php if ($this->_var['account']['is_check'] == 1): ?>可用<?php else: ?>不可用<?php endif; ?></td>

					  <td align="center">

                       <a href="?act=edit_account&id=<?php echo $this->_var['account']['account_id']; ?>">编辑</a> |

                       <a href="?act=supp_account_delete&id=<?php echo $this->_var['account']['account_id']; ?>" onclick="return confirm('确定要此操作吗');">删除</a> | <a href="?act=allot&id=<?php echo $this->_var['account']['account_id']; ?>">权限</a>

                        </td>

					</tr>

					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

				</table>

 			</div>

		</div>

        </div>

      <?php endif; ?> 
<?php if ($this->_var['action'] == 'allot'): ?>
     <div class="main" id="main">
		<div class="maintop">
			<img src="templates/images/title_article.png" /><span>子账号管理</span>
		</div>
		<div class="maincon">
				<div class="contitlelist"><span>权限分配</span><div class="titleright"><a href="?act=supp_account_list">返回列表</a></div></div>
			<div class="conbox">
            <form action="suppliers.php" enctype="multipart/form-data" method="post" name="myform">
           <table cellspacing="0" cellpadding="0" class="edittable">
             <?php $_from = $this->_var['role_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
					<tr>
						<td class="right"><?php echo $this->_var['item']['action_name']; ?>：</td>
						<td> 
                       <?php $_from = $this->_var['item']['action_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'it');if (count($_from)):
    foreach ($_from AS $this->_var['it']):
?> 
                        <input name="role_action[]" type="checkbox" <?php if ($this->_var['it']['checked'] == 1): ?> checked="checked"<?php endif; ?> value="<?php echo $this->_var['it']['action']; ?>" />&nbsp;&nbsp;<?php echo $this->_var['it']['action_name']; ?>&nbsp;&nbsp;
                       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
                        </td>

                  </tr>
             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <tr>
						<td class="right">&nbsp;</td>
						<td>
                        <input type="hidden" name="suppliers_id" value="<?php echo $this->_var['suppliers_id']; ?>">

                        <input type="hidden" name="account_id" value="<?php echo $this->_var['account_info']['account_id']; ?>">

                        <input type="hidden" name="act"  value="allot_act">

                		<input type="submit" value="<?php if ($this->_var['action'] == 'edit_supp_account'): ?>修 改 <?php else: ?>添 加<?php endif; ?>" class="btn" name="subsupp">
                        </td>
					</tr>
                    </table>

                   

                    </form>
             </div>

  </div>

  </div>         



<?php endif; ?>
    <?php if ($this->_var['action'] == 'edit_supp_account' || $this->_var['action'] == 'add_supp_account'): ?>
     <div class="main" id="main">
		<div class="maintop">
			<img src="templates/images/title_article.png" /><span>子账号管理</span>
		</div>
		<div class="maincon">
        		<?php if ($this->_var['action'] == 'edit_supp_account'): ?>
				<div class="contitlelist"><span>编辑子账号</span><div class="titleright"><a href="?act=supp_account_list">返回列表</a></div></div>
                <?php else: ?>
                <div class="contitlelist"><span>添加子账号</span><div class="titleright"><a href="?act=supp_account_list">返回列表</a></div></div>
                <?php endif; ?>
			<div class="conbox">
            <form action="suppliers.php" enctype="multipart/form-data" method="post" name="myform">
           <table cellspacing="0" cellpadding="0" class="edittable">
					<tr>
						<td class="right">账号名：</td>
						<td> 
                        <?php if ($this->_var['action'] == 'edit_supp_account'): ?>
                        <?php echo $this->_var['account_info']['account_name']; ?>
                        <?php else: ?>
                        <input type="text" name="account_name" value="<?php echo $this->_var['account_info']['account_name']; ?>" class="input" size="35" /></td>
						<?php endif; ?>
                    	</tr>
                    <tr>
						<td class="right">名称：</td>
						<td> <input type="text" name="name" value="<?php echo $this->_var['account_info']['name']; ?>" class="input" size="35" /></td>
					</tr>
                    <tr>
						<td class="right">类别：</td>
						<td>
     分店 <input type='radio'  name="account_type"  value="1"  <?php if ($this->_var['account_info']['account_type'] == 1): ?> checked="checked"<?php endif; ?>>
      子账号 <input type='radio' name="account_type" value="0" <?php if ($this->_var['account_info']['account_type'] == 0 || $this->_var['account_info']['account_type'] == ''): ?> checked="checked"<?php endif; ?>>

                        </td> 
					</tr>
                     <tr>
						<td class="right">分店地址：</td>
						<td> <input type="text" name="address" value="<?php echo $this->_var['account_info']['address']; ?>" class="input" size="35" />
                        
                        如果类别选择分店后请填写地址,方便给用户发提货短信
                        </td>
					</tr>
                    
                     <tr>
						<td class="right">手机号码：</td>
						<td> <input type="text" name="phone" value="<?php echo $this->_var['account_info']['phone']; ?>" class="input" size="35" />
                        如果类别选择分店后请填写手机号码,方便用户联系
                        </td>
					</tr>
                    
                    
                    <tr>
						<td class="right">状态：</td>
						<td>
                        <?php if ($this->_var['account_info']['is_check'] == 1): ?>
     是 <input type='radio'  name="is_check"  value="1" checked="checked">
      否 <input type='radio' name="is_check" value="0">
                        <?php else: ?>
        是 <input type='radio' name="is_check" value="1" >

       否 <input  type='radio' name="is_check" value="0" checked="checked">                 

                        <?php endif; ?>

                        </td>

					</tr>
                     <tr>

						<td class="right">密码：</td>

						<td>

                        <input type="password" name="account_password" value="" class="input" size="35"  />
                      </td>

					</tr>

                      <tr>

						<td class="right">确认密码：</td>

						<td>

                        <input type="password" name="account_password_crm" value=""class="input" size="35"  />

                        

                        </td>

					</tr>
                    <tr>
						<td class="right">&nbsp;</td>
						<td>
                        <input type="hidden" name="suppliers_id" value="<?php echo $this->_var['suppliers_id']; ?>">

                        <input type="hidden" name="account_id" value="<?php echo $this->_var['account_info']['account_id']; ?>">

                        <input type="hidden" name="act"  value="<?php echo $this->_var['status']; ?>">

                		<input type="submit" value="<?php if ($this->_var['action'] == 'edit_supp_account'): ?>修 改 <?php else: ?>添 加<?php endif; ?>" class="btn" name="subsupp">
                        </td>

					</tr>

                    </table>

                   

                    </form>
             </div>

  </div>

  </div>         

      <?php endif; ?> 

    <?php if ($this->_var['action'] == 'pic_category_add' || $this->_var['action'] == 'pic_category_edit'): ?>

     <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title_pics.png" /><span>图片管理</span>

		</div>

      <div class="maincon">

			<div class="contitleedit"><span><?php if ($this->_var['action'] == 'pic_category_add'): ?>分类添加<?php else: ?>分类编辑<?php endif; ?></span></div>
			<div class="conbox"> 

     

     <form action="suppliers.php" method="post" name="myform" onsubmit="return checkpic_category();">

	<table cellspacing="0" cellpadding="0" class="edittable">

      <tr>

        <td align="right">分类名称：</td>

        <td><input name="cat_name" type="text" class="input" value="<?php echo $this->_var['rows']['cat_name']; ?>" size="40"  />*</td>

      </tr>

     <tr>

    <td align="right">&nbsp;</td>

	<input name="act" type="hidden" value="<?php echo $this->_var['form_act']; ?>" />

	<input name="id" type="hidden" value="<?php echo $this->_var['rows']['id']; ?>" />

    <td><input type="submit" name="Submit" value="提 交"  class="btn"/></td>

  </tr>

</table>



	</form>

     </div>

     </div>

     </div>

    <?php endif; ?>

      <?php if ($this->_var['action'] == 'pic_category'): ?>

      

      <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title_pics.png" /><span>图片管理</span>

		</div>

		<div class="maincon">

			<div class="contitlelist">

				<span>图片分类</span>

				<div class="titleright">

					<a href="?act=pic_category_add">新增分类</a>

					<a href="?act=pic_list">返回我的图片</a>

				</div>

			</div>

			<div class="conbox">

				<table cellspacing="0" cellpadding="0" class="listtable">

      <tr>

        <th class="left">名称</td>

        <th class="right">操作</td>

      </tr>

      <?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>

      <tr>

        <td><?php echo $this->_var['item']['cat_name']; ?></td>

        <td class="right"><a href="suppliers.php?act=pic_category_delete&id=<?php echo $this->_var['item']['id']; ?>" onclick="if (!confirm('确定删除吗')) return false;">删除</a>&nbsp;&nbsp;<a href="suppliers.php?act=pic_category_edit&id=<?php echo $this->_var['item']['id']; ?>">编辑</a></td>

      </tr>

      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

    </table>

                

			</div>

		</div>

</div>

      <?php endif; ?> 

      <?php if ($this->_var['action'] == 'edit_pic'): ?>

            <link href="themes/xaphp2013/style/uploadify.css" rel="stylesheet" type="text/css" />

          <?php echo $this->smarty_insert_scripts(array('files'=>'jquery_common.min.js,jquery.uploadify.min.js')); ?>

      <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title_pics.png" /><span>图片管理</span>

		</div>

      <div class="maincon">

			<div class="contitleedit">

				<span>图片更换</span>

				<div class="titleright">

					<a href="?act=pic_list">返回我的图片</a>

				</div>

			</div>

			<div class="conbox"> 

     

    <form action="suppliers.php"  enctype="multipart/form-data"  method="post" name="myform" onsubmit="return checkpic_info();">

	<table cellspacing="0" cellpadding="0" class="edittable">

      <tr>

        <td align="right">选择分类：</td>

        <td><select id="cat_id" name="cat_id">

        <option value="">请选择</option>

             <?php $_from = $this->_var['cat_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>

        	<option value="<?php echo $this->_var['item']['id']; ?>" <?php if ($this->_var['item']['id'] == $this->_var['rows']['cat_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_var['item']['cat_name']; ?></option>

            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        </select>

        *</td>

      </tr>

      <tr>

      	<td align="right">图片：</td>

        <td>

        <img src="<?php echo $this->_var['rows']['pic']; ?>" width="200" height="200">

        <input name="pic" type="file" />

		</td>

     </tr>

     <tr>

		<td align="right">&nbsp;</td>

		<input name="act" type="hidden" value="<?php echo $this->_var['form_act']; ?>" />

		<input name="id" type="hidden" value="<?php echo $this->_var['rows']['id']; ?>" />

		<td><input type="submit" name="Submit" value="提 交" class="btn"/></td>

	 </tr>

	</table>

	</form>

     </div>

     </div>

     </div>

    <script>

	function checkpic_info()

	{

		if($("#cat_id").attr("value") =='')

		{

			alert('请选择分类');

			return false;	

		}

	

		return true;

		

	}

	

</script>



      

      <?php endif; ?>

<?php if ($this->_var['action'] == 'pic_add'): ?>
<link href="templates/css/uploadify.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery_common.min.js"></script>
<script type="text/javascript" src="templates/js/supp.js"></script>
<script type="text/javascript" src="templates/js/jquery.uploadify.min.js"></script>          
      <div class="main" id="main">
		<div class="maintop">
			<img src="templates/images/title_pics.png" /><span>图片管理</span>
		</div>
      <div class="maincon">
			<div class="contitleedit">
				<span>图片添加</span>
				<div class="titleright">
					<a href="?act=pic_list">返回我的图片</a>
				</div>
			</div>
			<div class="conbox"> 
    <form action="suppliers.php" method="post" name="myform" onsubmit="return checkpic_info();">

	<table cellspacing="0" cellpadding="0" class="edittable">

      <tr>

        <td align="right">选择分类：</td>

        <td><select id="cat_id" name="cat_id" class="input">

        <option value="">请选择</option>

             <?php $_from = $this->_var['cat_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>

        	<option value="<?php echo $this->_var['item']['id']; ?>"><?php echo $this->_var['item']['cat_name']; ?></option>

            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        </select>

        *</td>

      </tr>

      <tr>

      	<td align="right">图片：</td>

        <td><input id="file_upload" name="file_upload" type="file" multiple="true">&nbsp;&nbsp;大小建议600像素*600像素  

           	<div>

				<ul id="url" class="picupload">

                </ul>

            </div>

		</td>

     </tr>

     <tr>

		<td align="right">&nbsp;</td>

		<input name="act" type="hidden" value="<?php echo $this->_var['form_act']; ?>" />

		<input name="id" type="hidden" value="<?php echo $this->_var['rows']['id']; ?>" />

		<td><input type="submit" name="Submit" value="提 交" class="btn"/></td>

	 </tr>

	</table>

	</form>

     </div>

     </div>

     </div>

    <script type="text/javascript" language="javascript">
	function checkpic_info()
	{
		if($("#cat_id").attr("value") =='')
		{
			alert('请选择分类');
			return false;	
		}
		if($("input[name='pics[]']").val()=='')
		{
			alert('请选择上传图片');
			return false;	
		}
		return true;
	}
	$(function() {
			$('#file_upload').uploadify({
				//校验数据
				'formData'     	: {
					'timestamp' : '<?php echo $this->_var['timestamp']; ?>',
					'jsessionid' : '<?php echo $this->_var['suppliers_id']; ?>',
					'token'     : '<?php echo $this->_var['unique_salt']; ?>'//声明令牌
				},
				'swf'         	: 'templates/uploadify.swf',			//指定上传控件的主体文件，默认‘uploader.swf’
				'uploader'    	: 'uploadify.php',			//指定服务器端上传处理文件，默认‘upload.php’
				'auto'        	: true,					//手动上传
				'buttonImage' 	: 'templates/images/uploadify-browse.png',	//浏览按钮背景图片
				//'cancelImg'     : '/<?php echo $this->_var['temp_dir']; ?>images/cancel.png',
				'multi'       	: true,					//单文件上传
				'removeCompleted' : true,//是否消失进度
				'fileTypeExts'	: '*.gif; *.jpg; *.png; *.flv',	//允许上传的文件后缀
				'fileSizeLimit'	: '300MB',					//上传文件的大小限制，单位为B, KB, MB, 或 GB
				'successTimeout': 30,						//成功等待时间
				'onUploadSuccess' : function(file, data, response) {//每成功完成一次文件上传时触发一次
				  $('#url').append("<li id=pic_"+file.id+" ><input type=checkbox name=pics[] id='"+file.id+"'  checked value="+data+" class='checkinput'><img src="+data+"><span>名称：</span><input type='text' name='pic_name[]' class='textinput'><a href='javascript:;'  onclick=del_img('"+data+"','"+file.id+"')  >删除</a></li>");

		        },

		        'onUploadError'   : function(file, data, response) {//当上传返回错误时触发

		            $('#url').append("<li>"+data+"</li>");

		        }

			});

		});

		

	function del_img(data,id)

	{

		getStatusUrl = 'suppliers.php?act=delete_pic&pic='+data+'&id='+id;

		$.ajax(

		{

			  url: getStatusUrl,

			  dataType: 'json',

			  global: false,

			  success: function(data)

			  {

				 $("#pic_"+id).hide();

				 $("#"+id+"").attr("checked",false);

				//document.getElementById("pic_"+id).style.display = "none";

			  },

			  error: function(XMLHttpRequest,textStatus, errorThrown){

							//alert(XMLHttpRequest.responsetext);

							//alert(textStatus);

							//alert(errorThrown);

			  }

		});		

	}


	

		

		</script>  

      <?php endif; ?>

      

        <?php if ($this->_var['action'] == 'pic_list'): ?>
    <script>
		function search_pic(value)
		{
			window.location.href="suppliers.php?act=pic_list&cat_id="+value;
		}
	</script>
        <LINK href="templates/css/jquery.lightbox-0.5.css" type=text/css rel=stylesheet>

     <script type="text/javascript" src="templates/js/jquery_common.min.js"></script>

      <script type="text/javascript" src="templates/js/jquery.lightbox-0.5.min.js"></script>

      <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title_pics.png" /><span>图片管理</span>

		</div>

		<div class="maincon">

			<div class="contitlelist">

				<span>我的图片</span>

				<div class="searchdiv">

					<form id="" name="" method="get" action="suppliers.php">

						<div>分类：</div>

						<select id="cat_id" name="cat_id"  onchange="search_pic(this.value);">

        <option value="">请选择</option>
		<?php $_from = $this->_var['cat_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>

        	<option value="<?php echo $this->_var['item']['id']; ?>"><?php echo $this->_var['item']['cat_name']; ?></option>

            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </select>

						<div id="show_cat_list_2"></div>

						<div id="show_cat_list_3"></div>

						<input type="text" value="" placeholder='名称关键字' class="input" name="keywords">

						<input name="act" type="hidden" value="pic_list" />

						<input type="submit" class="btn" name="" value="搜索">

					</form>

				</div>

				<div class="titleright">

					<a href="?act=pic_add">图片添加</a>

					<a href="?act=pic_category">图片分类</a>

				</div>

			</div>

			<div class="conbox">

				<ul class="picbox"  id="photo">

					<?php echo $this->fetch('library/pic_list.lbi'); ?>

               	</ul> 

			</div>

            <div id="pages">

			<?php echo $this->fetch('library/pages.lbi'); ?>

            </div>

		</div>



	</div>

 <script language="JavaScript" >

 function drop_delete_pic(id)
 {

		getStatusUrl = 'suppliers.php?act=drop_delete_pic&id='+id;

		$.ajax(

		{

			  url: getStatusUrl,

			  dataType: 'json',

			  global: false,

			  success: function(data)

			  {

				 document.getElementById('photo').innerHTML =data.pic_list;

				 document.getElementById('pages').innerHTML =data.pages;

			  },

			  error: function(XMLHttpRequest,textStatus, errorThrown){

			  }

		});		

 }

(function($){

	$(function()

	{

		$('#photo a.photo').lightBox({fixedNavigation:true});

	});

})(jQuery);

</script>

		<?php endif; ?>

        

        <?php if ($this->_var['action'] == 'article_edit'): ?>

         <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title.png" /><span><?php echo $this->_var['info']['suppliers_name']; ?></span>

		</div>

      <div class="maincon">
			<div class="contitleedit"><span>文章编辑</span></div>
			<div class="conbox"> 
     <form action="suppliers.php" method="post" name="myform" onsubmit="return checkarticle();">
		<table cellspacing="0" cellpadding="0" class="edittable">
  <tr>
    <td align="right">文章标题：</td>
    <td><input name="title" type="text" value="<?php echo $this->_var['rows']['title']; ?>" size="40"  />*</td>
  </tr>
    <tr>
    <td align="right">分类选择：</td>

    <td> <select name="cat_id" id="cat_id" >
	<option value="0">请选择</option>
   <?php echo $this->_var['goods_cat_list']; ?>
</select>
		  </td>
  </tr>
  <tr>
    <td align="right">作者：</td>
    <td><input name="author" type="text"  value="<?php echo $this->_var['rows']['author']; ?>"/></td>
  </tr>
  <tr>
    <td align="right">内容：</td>
    <td><?php echo $this->_var['FCKeditor']; ?></td>
  </tr>
  <tr>
    <td align="right">&nbsp;</td>

	<input name="act" type="hidden" value="article_update" />

	<input name="article_id" type="hidden" value="<?php echo $this->_var['rows']['article_id']; ?>" />

    <td><input type="submit" name="Submit" value="修改"  class="btn"/></td>

  </tr>

</table>



	</form>

     </div>

     </div>

     </div>

     <?php endif; ?>

        

        

     <?php if ($this->_var['action'] == 'article_add'): ?>

         <script type="text/javascript" src="/js/transport.js"></script>

      <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title.png" /><span><?php echo $this->_var['info']['suppliers_name']; ?></span>

		</div>

      <div class="maincon">

			<div class="contitleedit"><span>文章发布</span></div>

			<div class="conbox"> 
     <form action="suppliers.php"  class="edittable"  method="post" name="myform" onsubmit="return checkarticle();">

		<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right">文章标题：</td>
    <td><input name="title" type="text" size="40"class="input"  />*</td>
  </tr>
    <tr>
    <td align="right">分类选择：</td>
    <td> <select name="cat_id" id="cat_id" >
	<option value="0">请选择</option>
 <?php echo $this->_var['goods_cat_list']; ?>
</select>
			</td>
  </tr>
  <tr>
    <td align="right">作者：</td>
    <td><input name="author" type="text"   class="input"   value="<?php echo $this->_var['username']; ?>"/></td>

  </tr>

  <tr>

    <td align="right">内容：</td>

    <td><?php echo $this->_var['FCKeditor']; ?></td>

  </tr>

  <tr>

    <td align="right">&nbsp;</td>

	<input name="act" type="hidden" value="article_insert" />

    <td><input type="submit" name="Submit" value="提交"  class="btn"/></td>

  </tr>

</table>


</form>

     </div>

     </div>

     </div>

     <?php endif; ?>

      <?php if ($this->_var['action'] == 'article_list'): ?>

       <script type="text/javascript" src="/js/transport.js"></script>

       <div class="main" id="main">
		<div class="maintop">
			<img src="templates/images/title.png" /><span><?php echo $this->_var['info']['suppliers_name']; ?></span>
		</div>
     	<div class="maincon">
			<div class="contitlelist">
				<span>技术文章</span>
   <div class="titleright"><a href="?act=article_add">添加文章</a></div>
				<div class="searchdiv">

					<form id="form1" name="form1" method="get" action="user.php" style="float:left; font-size:13px; line-height:48px">

						<div>分类：</div>

						<select name="cat_id" id="cat_id" >
							<option value="0">请选择</option>
                           <?php echo $this->_var['cat_list']; ?>
						</select>
						<input type="text" value="" class="input" name="keywords">
						<input name="act" type="hidden" value="article_list" />
						<input type="submit" class="btn" name="Submit2" value="搜索">
					</form>
				</div>
			</div>

			<div class="conbox">

      

    <table cellspacing="0" cellpadding="0" class="listtable">

      <tr>

        <th class="left">标题</td>

        <th class="left">作者</td>

        <th class="left">更新时间</td>

        <th class="right">操作</td>

      </tr>

      <?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>

      <tr>

        <td><?php if ($this->_var['item']['is_open']): ?><a href="article.php?id=<?php echo $this->_var['item']['article_id']; ?>" target="_blank" class="f6"><?php echo $this->_var['item']['title']; ?></a><?php else: ?><?php echo $this->_var['item']['title']; ?>[未审核]<?php endif; ?></td>

        <td><?php echo $this->_var['item']['author']; ?></td>

        <td><?php echo $this->_var['item']['add_time']; ?></td>

        <td class="right"><!--<a href="suppliers.php?act=article_delete&id=<?php echo $this->_var['item']['article_id']; ?>" onclick="if (!confirm('确定删除吗')) return false;">删除</a>-->&nbsp;&nbsp;<a href="suppliers.php?act=article_edit&id=<?php echo $this->_var['item']['article_id']; ?>">编辑</a></td>

      </tr>

      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

    </table>

      </div>

      </div>

      </div>

      <?php endif; ?>

    

   <?php if ($this->_var['action'] == 'edit_password'): ?>

    <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title.png" /><span><?php echo $this->_var['info']['suppliers_name']; ?></span>

		</div>

		<div class="maincon">

				<div class="contitleedit"><span>修改密码</span></div>

			<div class="conbox">

            <form name="formPassword" action="suppliers.php" method="post" onSubmit="return editPassword()" >

     <table width="100%" border="0" cellpadding="5" class="edittable" cellspacing="1">

        <tr>

          <td  align="right" bgcolor="#FFFFFF">旧密码：</td>

          <td align="left" bgcolor="#FFFFFF"><input name="old_password" type="password" size="25"  class="input" /></td>

        </tr>

        <tr>

          <td align="right" bgcolor="#FFFFFF">新密码：</td>

          <td align="left" bgcolor="#FFFFFF"><input name="new_password" type="password" size="25"  class="input"/></td>

        </tr>


        <tr>

          <td  align="right" bgcolor="#FFFFFF">新密码确认：</td>

          <td align="left" bgcolor="#FFFFFF"><input name="comfirm_password" type="password" size="25" class="input" /></td>

        </tr>

        <tr>

        	<td>&nbsp;</td>

          <td bgcolor="#FFFFFF"><input name="act" type="hidden" value="act_edit_password" />

            <input name="submit" type="submit" class="btn" style="border:none;" value="确认修改" />

          </td>

        </tr>

      </table>

    </form>

			</div>

		</div>

</div>

   

   <?php endif; ?>

	<?php if ($this->_var['action'] == 'default'): ?>
	 <div class="main" id="main">
		<div class="maintop">
			<img src="templates/images/title.png" /><span><?php echo $this->_var['info']['suppliers_name']; ?></span>
		</div>
		<div class="maincon">
			<div class="contitle">
				<img src="templates/images/ico01.png" /><span>统计信息</span>
			</div>
			<div class="condiv">
            <?php if ($_SESSION['role_id'] == ''): ?>
				<a href="suppliers.php?act=my_goods">
					<span>本店商品数量&nbsp;&nbsp;<b><?php echo $this->_var['goodsnum']; ?></b></span>
					<img src="templates/images/ico12.png"/>
				</a>
				<a href="suppliers.php?act=my_goods">
					<span>停售商品数量&nbsp;&nbsp;<b><?php echo $this->_var['nogoodsnum']; ?></b></span>
					<img src="templates/images/ico12.png"/>
				</a>
				<?php if (0): ?>
				<a href="suppliers.php?act=article_list">
					<span>技术文章数量&nbsp;&nbsp;<b><?php echo $this->_var['articlenum']; ?></b></span>
					<img src="templates/images/ico12.png"/>
				</a>
				<?php endif; ?>
                <?php endif; ?> 
				<a href="suppliers.php?act=delivery_list">
					<span>待发货订单数量&nbsp;&nbsp;<b><?php echo $this->_var['delivery_count']; ?></b></span>
					<img src="templates/images/ico12.png"/>
				</a>
                 <?php if ($_SESSION['role_id'] == ''): ?>
               <a href="suppliers.php?act=my_order&settlement_status=3">
					<span>已完成结算订单&nbsp;&nbsp;<b><?php echo $this->_var['receive_count']; ?></b></span>
					<img src="templates/images/ico12.png"/>
				</a>
				<a href="suppliers.php?act=my_order&settlement_status=1">
					<span>待商家审核结算&nbsp;&nbsp;<b><?php echo $this->_var['unpay_count']; ?></b></span>
					<img src="templates/images/ico12.png"/>
				</a>
    <?php endif; ?>
<!--
                <a href="suppliers.php?act=order_code_list">

					<span>待验证订单&nbsp;&nbsp;<b><?php echo $this->_var['tuan_buy_count']; ?></b></span>

					<img src="templates/images/ico12.png"/>

				</a>-->

				

			</div>

			

		</div>

	</div>

	<?php endif; ?>
	<?php if ($this->_var['action'] == 'add_goods' || $this->_var['action'] == 'edit_goods'): ?>
    <script type="text/javascript" src="../js/goods_cat_region.js"></script>
    <!--<script type="text/javascript" src="templates/js/jquery_common.min.js"></script>-->
    <script>
    	goods_cat_region.isAdmin = true;
		function checkgoodsinfo()

		{
			
			
			var goods_desc = document.getElementById('desc_num').value;
			var is_promote = document.myform.is_promote.checked;
			var promote_price = document.myform.promote_price.value;
			var goods_number  = document.myform.goods_number.value;
			var goods_img_url  = document.getElementById('goods_img_url').value;
			
			
		  var msg = '';
			 
			 
		  if(document.myform.goods_name.value=='')
		  {
			msg += '请输入商品名称。\n';
		  }
		  
		  
		  
		  if(document.myform.shop_price.value =='')
		  {
			msg += '请输入商品价格。\n';
		  }
		  
		  else if(document.myform.shop_price.value < 0.01)
		  {
			msg += '商品价格不能小于0.01。\n';
		  }
		  
		  
		  
			if(is_promote == true)
			{
				if(promote_price <= 0)
				{
					msg += '商品促销价格不能为零。\n';
				}
			}
			
			
			if(goods_number =='' || goods_number <= 0)
			{
				msg += '请输入商品库存。\n';
			}
			
			
			
			if(goods_img_url.length < 40)
			{
		
				msg += '请上传一张图片。\n';
			}
			
			
			
			if(goods_desc < 5)
			{
				msg += '请输入详细描述最少不得少于5个字。\n';
			}
			
			
			if (msg.length > 0)
			{
			   alert(msg);
			   return false;
			}
			else
			{
			   return true;
			}
			
			
		}

    </script>
 	<div class="main" id="main">
		<div class="maintop">
			<img src="templates/images/title_addgoods.png" /><span>商品管理</span>
		</div>
		<div class="maincon" style="color:#000;">
			<div class="contitleedit"><span><?php if ($this->_var['action'] == 'add_goods'): ?>新增信息<?php else: ?>编辑信息<?php endif; ?></span></div>
            <ul class="listtab">
				<li id='nav1'class="act" class="act"><a href="javascript:;" onclick="show_html(1,3);">详细描述</a></li>
				<li id='nav2'><a href="javascript:;" onclick="show_html(2,3);">商品相册</a></li>				
                <li id='nav3'><a href="javascript:;" onclick="show_html(3,3);">商品属性</a></li>
			</ul>
      		<form action="suppliers.php" enctype="multipart/form-data" method="post" name="myform" onsubmit="return checkgoodsinfo();">
		    <div class="conbox" style="display:block;" id="show_html1">
				<table cellspacing="0" cellpadding="0" class="edittable">
					<tr>
						<td class="right" width="100">商品名称：</td>
						<td><input type="text" value="<?php echo $this->_var['goods']['goods_name']; ?>" name="goods_name" class="input" size="35"><font style="color:#F00">*</font></td>
					</tr>
					<?php if (0): ?>
                    <tr>
                    	<td class="right">显示站点：</td>
                        <td>
                        全选:
                        <input type="checkbox" name="checkbox" value="checkbox"  onclick='listTable.selectAll(this, "site_id")' />
                        <br />
                        
                        	<?php if ($this->_var['action'] == 'add_goods'): ?>
                           <?php $_from = $this->_var['site_lists']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                           <input name="site_id[]"  type="checkbox" value="<?php echo $this->_var['item']['id']; ?>" id='site_id'>&nbsp;&nbsp;<?php echo $this->_var['item']['name']; ?>
                           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            <?php else: ?>
                            <?php echo $this->_var['site_html']; ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                    
                   
                     <tr>
                     <td class="right">厂家：</td>
                        <td>
                          <select name="companys_id">
            				<option value="0">请选择...</option>
            			  <?php $_from = $this->_var['supp_companys_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'companys');if (count($_from)):
    foreach ($_from AS $this->_var['companys']):
?>	
                            <option value="<?php echo $this->_var['companys']['companys_id']; ?>" <?php if ($this->_var['goods']['companys_id'] == $this->_var['companys']['companys_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_var['companys']['companys_name']; ?></option>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            			</select>
                        </td>
                    
                     </tr>
                      <?php endif; ?>
                     
        	<?php if (0): ?> 
        <?php if ($this->_var['goods']['cat_name']): ?>
        <tr>
        	<td class="right">当前商品分类为：</td>
            <td><?php echo $this->_var['goods']['cat_name']; ?></td>
        </tr>
        <?php endif; ?>          
                     
                     
                     <tr>
                     
                     <td class="right">商品分类：</td>      
    <td>
    
    				 
    	<div style="float:left;width:150px;margin-right:40px;"> 
    	<div style="float:left;">
        
        <input type='text' style="width:150px;"  onKeyUp="search_cat(this.value,'cat_one')" placeholder="输入名称">
        </div> 
        
        <div style="float:left;">
        <select name="cat_one" id="cat_one" onchange="goods_cat_region.changed(this, 1, 'cat_two')" size="10" style="width:172px;height:150px;" placeholder="输入名称" >
          <!--<option value="-1">请选择...</option>-->
          <?php $_from = $this->_var['cat_one']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'c_one');if (count($_from)):
    foreach ($_from AS $this->_var['c_one']):
?>
          <option value="<?php echo $this->_var['c_one']['cat_id']; ?>" <?php if ($this->_var['c_one']['cat_id'] == $this->_var['each_cat'] [ 1 ]): ?>selected='selected'<?php endif; ?>><?php echo htmlspecialchars($this->_var['c_one']['cat_name']); ?></option>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </select>
        </div>     
        </div>
		
        <div id='cat2' style="float:left;width:150px;margin-right:40px;<?php if ($this->_var['cat_two']): ?><?php else: ?>display:none;<?php endif; ?>"> 
    	<div style="float:left;">
        <input type='text' style="width:150px;"  onKeyUp="search_cat(this.value,'cat_two')" placeholder="输入名称" >
        </div>
        <div style="float:left;">
        <select name="cat_two" id="cat_two" onchange="goods_cat_region.changed(this, 2, 'cat_three')" size="10" style="width:172px;height:150px;">
        <option value=''>请选择...</option>  
        <?php $_from = $this->_var['cat_two']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
        <option value="<?php echo $this->_var['item']['cat_id']; ?>" <?php if ($this->_var['item']['cat_id'] == $this->_var['each_cat'] [ 2 ]): ?>selected='selected'<?php endif; ?>><?php echo htmlspecialchars($this->_var['item']['cat_name']); ?></option>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </select>
        </div>
        
        </div>
        
	    <div id='cat3'  style="float:left;width:150px;margin-right:40px;<?php if ($this->_var['cat_three']): ?><?php else: ?>display:none;<?php endif; ?>">
    	<div style="float:left;">
        <input type='text' style="width:150px;"  onKeyUp="search_cat(this.value,'cat_three')" placeholder="输入名称" >
        </div>
        <div style="float:left;">
        <select name="cat_three" id="cat_three" onchange="goods_cat_region.changed(this, 3, 'cat_four')" size="10" style="width:172px;height:150px;">
          <option value=''>请选择...</option>
          <?php $_from = $this->_var['cat_three']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
        <option value="<?php echo $this->_var['item']['cat_id']; ?>" <?php if ($this->_var['item']['cat_id'] == $this->_var['each_cat'] [ 3 ]): ?>selected='selected'<?php endif; ?>><?php echo htmlspecialchars($this->_var['item']['cat_name']); ?></option>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </select>
        </div>        
        </div>
        
        
        <div id='cat4' style="float:left;width:150px;margin-right:40px;<?php if ($this->_var['cat_four']): ?><?php else: ?>display:none;<?php endif; ?>">
    	<div style="float:left;">
        <input type='text' style="width:150px;"  onKeyUp="search_cat(this.value,'cat_four')" placeholder="输入名称">
        </div>
        <div style="float:left;">
        <select name="cat_four" id="cat_four" size="10" style="width:172px;height:150px;">
          <option value=''>请选择...</option>
          <?php $_from = $this->_var['cat_four']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>  
        <option value="<?php echo $this->_var['item']['cat_id']; ?>" <?php if ($this->_var['item']['cat_id'] == $this->_var['each_cat'] [ 4 ]): ?>selected='selected'<?php endif; ?>><?php echo htmlspecialchars($this->_var['item']['cat_name']); ?></option>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </select>
        </div>
        </div>
        
        
    </td>
  </tr> <?php endif; ?>
                     
                      <tr>
						<td class="right">商品分类：</td>
						<td>
                        <select name="cat_id">
            				<option value="0">请选择...</option>
            				<?php echo $this->_var['cat_list']; ?>
            			</select>
                        </td>
					</tr>
                     <?php if (0): ?>
                  <tr>
                    <td class="right">加入推荐：</td>
                    <td><input type="checkbox" name="is_season" value="1" <?php if ($this->_var['goods']['is_season']): ?>checked="checked"<?php endif; ?> />当季商品</td>
                  </tr>
                     <tr>
						<td class="right">商品品牌：</td>
						<td>
                        <select name="brand_id">
            				<option value="0">请选择...</option>
            			  <?php $_from = $this->_var['supp_brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>	
                            <option value="<?php echo $this->_var['brand']['brand_id']; ?>" <?php if ($this->_var['goods']['brand_id'] == $this->_var['brand']['brand_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_var['brand']['brand_name']; ?></option>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            			</select>
                        </td>
					</tr>
                    <tr>
						<td class="right">我的分类：</td>
						<td>
                        <select name="my_cat_id" >
            				<option value="0" >请选择...</option>
            				
                            <?php $_from = $this->_var['cate_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'c_list');if (count($_from)):
    foreach ($_from AS $this->_var['c_list']):
?>
                            <option value="<?php echo $this->_var['c_list']['cat_id']; ?>" <?php if ($this->_var['goods']['my_cat_id'] == $this->_var['c_list']['cat_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['c_list']['cat_name']; ?></option>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        
            			</select>
                        </td>
					</tr>
					<?php endif; ?>
                    <tr>
						<td class="right">商品价格：</td>
						<td><input type="text" value="<?php echo $this->_var['goods']['shop_price']; ?>" name="shop_price" class="input" size="35"><font style="color:#F00">*</font>
                        </td>
					</tr>
 					<?php if (0): ?>
                    <tr>
						<td class="right">
                        <input name="is_promote"  id="is_promote"type="checkbox" value="1"  <?php if ($this->_var['goods']['is_promote']): ?>checked="checked"<?php endif; ?> />促销价：</td>
						<td><input type="text" value="<?php echo $this->_var['goods']['promote_price']; ?>"  id="promote_price" name="promote_price" class="input" size="35">
                        </td>
					</tr>
                    
                    <tr>
						<td class="right">
                        促销日期：
                        </td>
                        <td>
                    <input class="Wdate"  id="promote_start_date" name="promote_start_date" type="text" value='<?php echo $this->_var['goods']['promote_start_date']; ?>' readonly="readonly" onfocus="WdatePicker({dateFmt:'yyyy-M-d HH:mm:ss',minDate:'%y-%M-%d HH:mm:ss'})"/> - <input class="Wdate" id="promote_end_date" name="promote_end_date" type="text" value='<?php echo $this->_var['goods']['promote_end_date']; ?>' readonly="readonly" onfocus="WdatePicker({dateFmt:'yyyy-M-d HH:mm:ss',minDate:'%y-%M-%d HH:mm:ss'})"/>
                      </td>
					</tr>
                    
                     <tr>
                     <td class="right">是否限购：</td>
                        <td>
                        	<?php if ($this->_var['goods']['promote_buy_num'] == 1): ?>
                            	<input type='radio' name='promote_buy_num' value='0' />不限购
                          		&nbsp;
                          		<input type='radio' name='promote_buy_num' value='1'  checked="checked"/>限购
                            <?php else: ?>
                            	<input type='radio' name='promote_buy_num' value='0' checked="checked"/>不限购
                          		&nbsp;
                          		<input type='radio' name='promote_buy_num' value='1' />限购
                               
                            <?php endif; ?>
                           商品限购数量:<input type='text' name='xiangou_num' value='<?php echo $this->_var['goods']['xiangou_num']; ?>'  size="5" /> 
                           商品限购次数:<input type='text' name='buy_number' value='<?php echo $this->_var['goods']['buy_number']; ?>'  size="5" /> 
                          
                        </td>
                    
                     </tr>
                     <?php endif; ?>
                      <tr>
						<td class="right">商品规格：</td>
						<td><input type="text" value="<?php echo $this->_var['goods']['guige']; ?>" name="guige" class="input" size="35">
                        </td>
					</tr>
                    <tr>
						<td class="right">商品库存：</td>
						<td><input type="text" value="<?php echo $this->_var['goods']['goods_number']; ?>" name="goods_number" class="input" size="35"><font style="color:#F00">*</font>
                        </td>
					</tr>
					<tr>
			            <td class="right">参团人数：</td>
			            <td><input type="text" name="team_num" value="<?php if ($this->_var['form_act'] == 'insert_goods'): ?>5<?php else: ?><?php echo $this->_var['goods']['team_num']; ?><?php endif; ?>" size="20" />
			             <font style="color:#F00">*</font></td>
			          </tr>
			          <tr>
			            <td class="right">团购价格：</td>
			            <td><input type="text" name="team_price" value="<?php echo $this->_var['goods']['team_price']; ?>" size="20" />
			            <font style="color:#F00">*</font></td>
			          </tr>
			          <tr>
			            <td class="right">团购销量：</td>
			            <td><input type="text" name="sales_num" value="<?php echo $this->_var['goods']['sales_num']; ?>" size="20" /></td>
			          </tr>

					
					<?php if (0): ?>
                     <tr>
						<td class="right">商品重量：</td>
						<td><input type="text" value="<?php echo $this->_var['goods']['goods_weight']; ?>" name="goods_weight" class="input" size="35">kg
                        </td>
					</tr>
                     <tr>
						<td class="right">是否免费配送：</td>
						<td>
                        <input type="checkbox" name="is_shipping" value="1" <?php if ($this->_var['goods']['is_shipping']): ?>checked="checked"<?php endif; ?> />
                        打勾表示此商品不会产生运费花销，否则按照正常运费计算。
                        </td>
					</tr> 
                     <tr>
						<td class="right">是否是套餐：</td>
						<td>
                        <input type="checkbox" name="is_package" value="1" <?php if ($this->_var['goods']['is_package']): ?>checked="checked"<?php endif; ?> />
                        打勾表示此商品是多个商品打包成套餐销售。
                        </td>
					</tr> 
                    <tr>
						<td class="right">商品单位：</td>
						<td><input type="text" value="<?php echo $this->_var['goods']['unit']; ?>" name="unit" class="input" size="2">
                        </td>
					</tr>
					 
                         <tr>
						<td class="right">产品授权书：</td>
						<td>
                        <input name="goods_authorization" type="file" />
                         <?php if ($this->_var['goods']['goods_authorization']): ?>
                <a href="/<?php echo $this->_var['goods']['goods_authorization']; ?>" target="_blank"><img src="templates/images/yes.gif" border="0" /></a>
              <?php else: ?>
                <img src="templates/images/no.gif" />
              <?php endif; ?>&nbsp;&nbsp;大小建议800KB以下  
                        </td>
					</tr>
					 <?php endif; ?>
                  <!--  <tr>
                      <td class="right">到店消费：</td>
                      <td><input type="checkbox" name="is_consumption" id="is_consumption" <?php if ($this->_var['goods']['is_consumption']): ?> checked="checked"<?php endif; ?>  value="1"/></td>
                    </tr>-->
               <tr>
                  <td class="right">商品图片：</td>
                  <td>
                <input type="text" size="40" id="goods_img_url" value="<?php echo $this->_var['goods']['goods_img']; ?>" style="color:#aaa;"  name="goods_img_url"/>
               <a href="javascript:;" onclick="winopen('suppliers.php?act=get_pic&img_id=goods_img_url','600','500');" class="bnt">选择图片</a>
              <?php if ($this->_var['goods']['goods_img']): ?>
                <a href="/<?php echo $this->_var['goods']['goods_img']; ?>" target="_blank"><img src="templates/images/yes.gif" border="0" /></a>
              <?php else: ?>
                <img src="templates/images/no.gif" />
              <?php endif; ?> &nbsp;&nbsp;大小建议600像素*600像素   
                </td>
              </tr>
              
              <tr>
                  <td class="right">商品小图：</td>
                  <td>
                <input type="text" size="40" id="little_img" value="<?php echo $this->_var['goods']['little_img']; ?>" style="color:#aaa;"  name="little_img"/>
               <a href="javascript:;" onclick="winopen('suppliers.php?act=get_pic&img_id=little_img','600','500');" class="bnt">选择图片</a>
              <?php if ($this->_var['goods']['little_img']): ?>
                <a href="/<?php echo $this->_var['goods']['little_img']; ?>" target="_blank"><img src="templates/images/yes.gif" border="0" /></a>
              <?php else: ?>
                <img src="templates/images/no.gif" />
              <?php endif; ?> &nbsp;&nbsp;大小建议600像素*600像素   
                </td>
              </tr>
              <?php if (0): ?>
              <tr>
            <td class="right">推荐描述：</td>
            <td><textarea name="goods_brief" cols="40" rows="3"><?php echo htmlspecialchars($this->_var['goods']['goods_brief']); ?></textarea></td>
          </tr>
              <tr>
            <td class="right">关键字：</td>
            <td><textarea name="keywords" cols="40" rows="3"><?php echo htmlspecialchars($this->_var['goods']['keywords']); ?></textarea></td>
          </tr>
          <?php endif; ?>
          <input type="hidden" id='desc_num' value='0' />
          
               <tr>
                  <td class="right">详细描述：</td>
                  <td>
              <?php echo $this->_var['FCKeditor']; ?>
              </td>
              </tr>
               <?php if (0): ?>
               <tr>
                  <td class="right">厂家展示：</td>
                  <td>
              <?php echo $this->_var['factory_desc']; ?>&nbsp;&nbsp;如果选择了厂家，可为空
              </td>
              </tr>
               <?php endif; ?>
                    </table>
			</div>
           <div id="show_html2" class="conbox" style="display:none;">
          		<div style="padding:12px 25px">
                 
                <table width="90%"  align="center" class="edittable">
                 <tr>
                     <td>
                     <?php echo $this->_var['img']['img_id']; ?>
              <?php $_from = $this->_var['img_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'img');if (count($_from)):
    foreach ($_from AS $this->_var['img']):
?>
             <div id="gallery_<?php echo $this->_var['img']['img_id']; ?>" style="float:left; text-align:center; border: 1px solid #DADADA; margin: 4px; padding:2px;">
             <a href="javascript:;" onclick="remove_img('<?php echo $this->_var['img']['img_id']; ?>')">[-]</a><br />
             <a href="suppliers.php?act=show_image&img_url=<?php echo $this->_var['img']['img_url']; ?>" target="_blank">
                <img src="<?php if ($this->_var['img']['thumb_url']): ?>../<?php echo $this->_var['img']['thumb_url']; ?><?php else: ?><?php echo $this->_var['img']['img_url']; ?><?php endif; ?>" border="0" width="200" height="200" />
                </a><br />
              </div>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </td>
             </tr>
            </table>
               		<a href="javascript:;" onclick="winopen('suppliers.php?act=get_photo','600','500');" class="bnt">选择图片</a>
				</div>
         </div>
        <div class="conbox" style="display:none;" id="show_html3">
		<div style="padding:12px 25px">
                 
        <table width="100%" align="center" class="edittable">
          <tr>
              <td  width="100">商品类型</td>
              <td align="left">
                <select name="goods_type" onchange="getAttrList(<?php if ($this->_var['goods']['goods_id']): ?><?php echo $this->_var['goods']['goods_id']; ?><?php else: ?>0<?php endif; ?>)">
                  <option value="0">请选择商品类型</option>
                  <?php echo $this->_var['goods_type_list']; ?>
                </select>
              </td>
          </tr>
          <tr>
            <td id="tbody-goodsAttr" colspan="2" style="padding:0"><?php echo $this->_var['goods_attr_html']; ?></td>
          </tr>

        </table>
		  </div>
			</div>
            <table class="edittable">
				 <tr>
						<td class="right">&nbsp;</td>
						<td>
                        <input name="goods_id" type="hidden" value="<?php echo $this->_var['goods']['goods_id']; ?>" />

                        <input name="act" type="hidden" value="<?php echo $this->_var['form_act']; ?>" />

                        <input type="submit" value="保 存" class="btn"></td>
					</tr>
            </table>
          </form>
			<script type="text/javascript" language="javascript"> 

  function getAttrList(goodsId)
  {
      var selGoodsType = document.forms['myform'].elements['goods_type'];
      if (selGoodsType != undefined)
      {
          var goodsType = selGoodsType.options[selGoodsType.selectedIndex].value;
		  Ajax.call('suppliers.php?act=get_attr', 'goods_id=' + goodsId + "&goods_type=" + goodsType, setAttrList, "GET", "JSON");
      }
  }
  function setAttrList(result, text_result)
  {
    document.getElementById('tbody-goodsAttr').innerHTML = result.content;
  }
		function hideimg(imgId,imgurl)
		 { 

			   var imgid=document.getElementById(imgId);

			  imgid.style.display='none';

			  var imgurl=document.getElementById(imgurl);

			  imgurl.value="";

		}

       function remove_img(id)
	  {
		getStatusUrl = 'suppliers.php?act=del_image&id='+id;
		//getStatusUrl = 'suppliers.php?act=delete_pic&pic='+data+'&id='+id;
		$.ajax(
		{
			  url: getStatusUrl,
			  dataType: 'json',
			  global: false,
			  success: function(data)
			  {
				 $("#gallery_"+id).hide();
				 $("#"+id+"").attr("checked",false);

				//document.getElementById("pic_"+id).style.display = "none";

			  },
			  error: function(XMLHttpRequest,textStatus, errorThrown){

							//alert(XMLHttpRequest.responsetext);

							//alert(textStatus);

							//alert(errorThrown);
			  }

		});	

	 }

			 </script>

            

            <!-- <div id="show_html3" style="width:1000px; height:400px; border:1px solid #000; margin-top:10px;display:none;margin-left:40px;">

         <form action="" method="post"> &nbsp;&nbsp; &nbsp;&nbsp;

          文章标题： &nbsp;&nbsp;<input type="text" name="title">&nbsp;&nbsp;

          <input type="submit" name="subcheck" value="搜素">

          

          <ul style="margin-left:170px;">

          <li style="list-style:none; float:left; padding-right:270px;">可选文章</li>

           <li style="list-style:none; float:left; padding-right:270px;">操作</li>

            <li style="list-style:none; float:left;">跟该商品关联的文章</li>

          </ul>

            </div>-->

		</div>

</div>


    <?php endif; ?>
   <?php if ($this->_var['action'] == 'goods_import'): ?>
      <script>
		function search_companys(value)
		{
			window.location.href="suppliers.php?act=goods_import&companys_id="+value;
		}
	</script>

 <div class="main" id="main">
		<div class="maintop">
			<img src="templates/images/title_goods.png" /><span>商品管理</span>
		</div><div class="maincon">
			<div class="contitlelist">
            	<span>商品导入</span>
                 <div class="searchdiv">
             <form method="post" action="suppliers.php">
              <div>厂家：</div>
                 <select id="companys_id" name="companys_id" onchange="search_companys(this.value);">
                	<option value="">请选择</option>
                     <?php $_from = $this->_var['company_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'company');if (count($_from)):
    foreach ($_from AS $this->_var['company']):
?> 
                    <option value="<?php echo $this->_var['company']['companys_id']; ?>" <?php if ($this->_var['companys_id'] == $this->_var['company']['companys_id']): ?> selected="selected"<?php endif; ?> ><?php echo $this->_var['company']['companys_name']; ?></option>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </select>
                <input type="hidden" name="act"  value="goods_import" />
            </form>
                        </div>
            </div>

            
  <form method="post" action="suppliers.php">
			<div class="conbox">
				<table cellspacing="0" cellpadding="0" class="listtable">
					<tr>
					  <th><input type="checkbox" name="checkbox" value="checkbox"  onclick='listTable.selectAll(this, "goods_id")' /></th>
					  <th class="left">商品名称</th>
					<!--  <th>操作列</th>-->
					</tr>
                    <?php if ($this->_var['sql_list']): ?>
                      <?php $_from = $this->_var['sql_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
					<tr>
					  <td class="checkbox"><input type="checkbox" name="goods_id[]" id="goods_id" value="<?php echo $this->_var['goods']['goods_id']; ?>" /></td>
				
					  <td><?php echo $this->_var['goods']['goods_name']; ?></td>
					
				
					<!--  <td class="middle">
                     
                    <a href="?act=goods_import_show&goods_id=<?php echo $this->_var['goods']['goods_id']; ?>">详情</a> </td>-->
					</tr>

					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    <?php else: ?>
                    暂未找到商品
                    <?php endif; ?>

				</table>
                <input name="act" type="hidden" value="goods_import_act" />
				 <input type="submit" class="button" name="" value="导入">	
			</div>
           
            </form>

			     <?php echo $this->fetch('library/pages.lbi'); ?>

		</div>

        </div>

    <?php endif; ?>

    <?php if ($this->_var['action'] == 'my_goods'): ?>
    <script>
/**
 * 切换状态
 */
listTable.supp_toggle = function(obj, act, id)
{
  var val = (obj.src.match(/yes.gif/i)) ? 0 : 1;
  var res = Ajax.call(this.url, "act="+act+"&val=" + val + "&id=" +id, null, "POST", "JSON", false);
  if (res.message)
  {
    alert(res.message);
  }

  if (res.error == 0)
  {
	if(res.content ==2)
	{
		obj.src='themes/haohaios/images/no.gif';
	}
	else
	{
		
    	obj.src = (res.content > 0) ? '../<?php echo $this->_var['admin_path']; ?>/images/yes.gif' : '../<?php echo $this->_var['admin_path']; ?>/images/no.gif';
	}
  }
}
	</script>
 <div class="main" id="main">
		<div class="maintop">
			<img src="templates/images/title_goods.png" /><span>商品管理</span>
		</div><div class="maincon">
			<div class="contitlelist">
            	<span>我的商品</span>
                 <div class="searchdiv">
             <form method="post" action="suppliers.php">
              <div>状态：</div>
                 <select id="goods_status" name="goods_status">
                	<option value="">请选择</option>
                    <option value="0" <?php if ($this->_var['goods_status'] == '0'): ?> selected="selected"<?php endif; ?>>已下架</option>
                    <option value="1" <?php if ($this->_var['goods_status'] == '1'): ?> selected="selected"<?php endif; ?>>已上架</option>
                </select>
                <?php if (0): ?>
                <div>促销：</div>
                 <select id="is_promote" name="is_promote">
                	<option value="">请选择</option>
                    <option value="1" <?php if ($this->_var['is_promote'] == '1'): ?> selected="selected"<?php endif; ?>>是</option>
                    <option value="0" <?php if ($this->_var['is_promote'] == '0'): ?> selected="selected"<?php endif; ?>>否</option>
                </select>
                <div>当季：</div>
                 <select id="is_season" name="is_season">
                	<option value="">请选择</option>
                    <option value="1" <?php if ($this->_var['is_season'] == '1'): ?> selected="selected"<?php endif; ?>>是</option>
                    <option value="0" <?php if ($this->_var['is_season'] == '0'): ?> selected="selected"<?php endif; ?>>否</option>
                </select>
                <?php endif; ?>
                 <div>审核：</div>
                 <select id="is_check" name="is_check">
                	<option value="">请选择</option>
                    <option value="0" <?php if ($this->_var['is_check'] == '0'): ?> selected="selected"<?php endif; ?>>审核中</option>
                    <option value="1" <?php if ($this->_var['is_check'] == '1'): ?> selected="selected"<?php endif; ?>>已审核</option>
                    <option value="2" <?php if ($this->_var['is_check'] == '2'): ?> selected="selected"<?php endif; ?>>未审核</option>
                </select>
                <?php if (0): ?>
    			 <div>推荐：</div>
                 <select id="is_supp_top" name="is_supp_top">
                	<option value="">请选择</option>
                    <option value="1" <?php if ($this->_var['is_supp_top'] == '1'): ?> selected="selected"<?php endif; ?>>是</option>
                    <option value="0" <?php if ($this->_var['is_supp_top'] == '0'): ?> selected="selected"<?php endif; ?>>否</option>
                </select>                
                <?php endif; ?>
                <input type="text"   value="" class="input" name="keywords">
                <input type="hidden" name="act"  value="my_goods" />
                <input type="submit" class="btn" name="" value="搜索">
            </form>
                        </div>
            </div>

            

			<div class="conbox">
<form method="post" action="">
				<table cellspacing="0" cellpadding="0" class="listtable">

					<tr>

					  <th><input onclick="listTable.selectAll(this, 'checkbox');" type="checkbox" name="checkbox" value="checkbox" /></th>

					  <th>货号</th>

					  <th class="left">商品名称</th>

					  <th class="left">商品价格</th>
 
					  <th class="left">团购价格</th>
                      
                      <th class="left">团购人数</th>

					  <th class="right">审核状态</th>

                      <th class="right">上架</th>
					  <th>操作列</th>
					</tr>
                      <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
					<tr>
					  <td class="checkbox"><input type="checkbox" name="checkbox[]" value="<?php echo $this->_var['goods']['goods_id']; ?>" /></td>
					  <td class="middle"><?php echo $this->_var['goods']['goods_sn']; ?></td>
					  <td><?php if ($this->_var['goods']['is_on_sale'] == 1): ?><a href="/goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" class="link" target="_blank" title='<?php echo $this->_var['goods']['goods_name']; ?>'><?php echo sub_str($this->_var['goods']['goods_name'],30); ?></a><?php else: ?><?php echo sub_str($this->_var['goods']['goods_name'],30); ?><?php endif; ?><?php if ($this->_var['goods']['gmt_end_time']): ?><font color="#FF0000">[促销]</font><?php endif; ?></td>
					  <td><?php echo $this->_var['goods']['shop_price']; ?></td>
					  <td>
                      <!-- 
                     <img src="../<?php echo $this->_var['admin_path']; ?>/images/<?php if ($this->_var['goods']['is_season']): ?>yes<?php else: ?>no<?php endif; ?>.gif" onclick="listTable.supp_toggle(this, 'is_season', <?php echo $this->_var['goods']['goods_id']; ?>)" /> 
                       -->
                      <?php echo $this->_var['goods']['team_price']; ?></td>
                      
                       <td> <?php echo $this->_var['goods']['team_num']; ?></td>
                       <!-- 
                       <img src="../<?php echo $this->_var['admin_path']; ?>/images/<?php if ($this->_var['goods']['is_supp_top']): ?>yes<?php else: ?>no<?php endif; ?>.gif" onclick="listTable.supp_toggle(this, 'is_supp_top', <?php echo $this->_var['goods']['goods_id']; ?>)" />
                        -->
					  <td class="right"> 
                      
                       <?php if ($this->_var['goods']['is_check'] == '0'): ?>审核中...<?php elseif ($this->_var['goods']['is_check'] == 1): ?>已审核<?php else: ?><span style="color:#F00;">未通过</span><?php endif; ?>
                      <?php if ($this->_var['goods']['is_check'] == 2 && $this->_var['goods']['check_desc'] != ''): ?><span style="color:#F00;">[<?php echo $this->_var['goods']['check_desc']; ?>]</span><?php endif; ?>
                      
                      
                      
                      </td>
                      <td class="right">
                      <?php if ($this->_var['goods']['is_check'] == 1): ?><a href='?act=goods_on_sale&goods_id=<?php echo $this->_var['goods']['goods_id']; ?>&id=<?php echo $this->_var['goods']['is_on_sale']; ?>' onclick="return confirm('确定要继续此操作吗？')"><?php if ($this->_var['goods']['is_on_sale'] == 0): ?>上架<?php else: ?>取消上架<?php endif; ?></a><?php else: ?>    <?php if ($this->_var['goods']['is_on_sale'] == 0): ?>未上架<?php else: ?>已上架<?php endif; ?>  <?php endif; ?>
                       </td>
					  <td class="middle">
                       <a href="?act=edit_goods&goods_id=<?php echo $this->_var['goods']['goods_id']; ?>">编辑</a>| <a href="?act=delete_goods&goods_id=<?php echo $this->_var['goods']['goods_id']; ?>" onclick="return confirm('确定要此操作吗');">回收站</a>
                      
                       </td>
					</tr>

					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

				</table>
<input name="act" type="hidden" value="my_goods_batch" />
<input name="page" type="hidden" value="<?php echo $this->_var['pager']['page']; ?>" />

<table border="0">
	<tr>
	<td>
		<input class="button" type="submit" value="批量删除"  name="remove">
	</td>
	<td>
		<input class="button" type="submit" value="批量上架"  name="up_sale">
	</td>
	<td>
		<input class="button" type="submit" value="批量下架"  name="down_sale">
	</td>
	</tr>
</table>
</form> 
			</div>

			     <?php echo $this->fetch('library/pages.lbi'); ?>

		</div>

        </div>

    <?php endif; ?>

    
    
    
    
    
        <?php if ($this->_var['action'] == 'goods_trash'): ?>
    
 <div class="main" id="main">
		<div class="maintop">
			<img src="templates/images/title_goods.png" /><span>商品管理</span>
		</div><div class="maincon">
			<div class="contitlelist">
            	<span>商品回收站</span>
                
            </div>

            

			<div class="conbox">

				<table cellspacing="0" cellpadding="0" class="listtable">

					<tr>

					

					  <th>货号</th>

					  <th class="left">商品名称</th>

					  <th class="left">商品价格</th>

					
					  <th>操作列</th>
					</tr>
                      <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
					<tr>
					  <td class="middle"><?php echo $this->_var['goods']['goods_sn']; ?></td>
                      <td><?php echo $this->_var['goods']['goods_name']; ?></td>
					  <td><?php echo $this->_var['goods']['shop_price']; ?></td>
                     
              
					  <td class="middle">
                      <!--<a href="/goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>">预览</a>
                      | -->
                       <a href="?act=restore_goods&goods_id=<?php echo $this->_var['goods']['goods_id']; ?>" onclick="return confirm('确定要还原次商品吗');">还原</a>|
                      <a href="?act=drop_goods&goods_id=<?php echo $this->_var['goods']['goods_id']; ?>" onclick="return confirm('确定要把该商品删除吗');">删除</a>  
					</tr>

					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

				</table>

			</div>

			     <?php echo $this->fetch('library/pages.lbi'); ?>

		</div>

        </div>

    <?php endif; ?>
    
    

<?php if ($this->_var['action'] == 'supp_info'): ?>

    <script type="text/javascript" src="/js/transport.js"></script>

    <script>

	region.isAdmin = true;
	</script>

  <div class="main" id="main">

		<div class="maintop">

			<img src="templates/images/title_article.png" /><span>店铺资料</span>

		</div>
		<div class="maincon">
				<div class="contitleedit"><span>资料更新</span></div>
			<div class="conbox">
            <form action="suppliers.php" enctype="multipart/form-data" method="post" name="myform">
           <table cellspacing="0" cellpadding="0" class="edittable">
					<tr>
						<td class="right">商家名称：</td>
						<td><?php if ($this->_var['supp_list']['is_check'] == 1): ?> <?php echo $this->_var['supp_list']['suppliers_name']; ?> <?php else: ?>
                           <input name="suppliers_name" type="text" size="40" id="suppliers_name"  class="input" value="<?php echo $this->_var['supp_list']['suppliers_name']; ?>" />
                           <?php endif; ?>
                        
                        </td>
					</tr>
                        <tr>
                  <td  align="right">店铺logo：</td>
                  <td>
                  <input name="supp_logo" type="file"  size="40" />
                  &nbsp;&nbsp;大小建议158像素*86像素&nbsp;&nbsp;   <?php if ($this->_var['supp_list']['supp_logo']): ?><a  href="./../<?php echo $this->_var['supp_list']['supp_logo']; ?>" target="_blank">查看</a><?php endif; ?>
                  </td>
                </tr>
                   <?php if (0): ?> 
                 <tr>
						<td class="right">二级域名：</td>
						<td>
            <input name="url_name" type="text" size="10" id="url_name"  class="input" value="<?php echo $this->_var['supp_list']['url_name']; ?>" />.900nong.com
                       注：必须是3-10位字母组合而成                        </td>
					</tr>
                    
                    
               

          <tr>
           	<td width="30%" align="right">店铺形象照片：</td>
            <td>
      <input name="supp_banner" type="file"  size="40" />&nbsp;&nbsp;大小建议1200像素*200像素&nbsp;&nbsp;

                  <?php if ($this->_var['supp_list']['supp_banner']): ?><a  href="./../<?php echo $this->_var['supp_list']['supp_banner']; ?>" target="_blank">查看</a><?php endif; ?>
            </td>
          </tr>
          <?php if ($this->_var['supp_type'] != 'user'): ?>
          <tr>
          <td  align="right">店长姓名：</td>
          <td>
          <input name="real_name" type="text" size="40" id="real_name"  class="input" value="<?php echo $this->_var['supp_list']['real_name']; ?>" />
          </td>
        </tr>  
          <tr>
          <td  align="right">店长手机号码：</td>
          <td>
          <input name="shopowner_phone" type="text" size="40" id="shopowner_phone"  class="input" value="<?php echo $this->_var['supp_list']['shopowner_phone']; ?>" />
          </td>
        </tr>  
        
        
                     <tr>
						<td class="right">区域选择：</td>
                        <td>
                         <select name="province_id" id="selProvinces" onchange="region.changed(this, 2, 'selCities')">
           <option value=''>请选择</option>
             <?php $_from = $this->_var['provinces']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'region');if (count($_from)):
    foreach ($_from AS $this->_var['region']):
?>
               <option value="<?php echo $this->_var['region']['region_id']; ?>" <?php if ($this->_var['region']['region_id'] == $this->_var['supp_list']['province_id']): ?> selected="selected"<?php endif; ?>> <?php echo $this->_var['region']['region_name']; ?></option>
             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
         </select>

		  <select name="city_id" id="selCities"  onchange="region.changed(this, 3, 'selDistricts')">

          <option value=''>请选择</option>

            <?php $_from = $this->_var['cities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'region');if (count($_from)):
    foreach ($_from AS $this->_var['region']):
?>

              <option value="<?php echo $this->_var['region']['region_id']; ?>" <?php if ($this->_var['region']['region_id'] == $this->_var['supp_list']['city_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_var['region']['region_name']; ?></option>

            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        </select>
         <select name="district_id" id="selDistricts">

				<option value="0">请选择</option>

				<?php $_from = $this->_var['district_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>

				<option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['district']['region_id'] == $this->_var['supp_list']['district_id']): ?>selected="selected"<?php endif; ?>  ><?php echo $this->_var['district']['region_name']; ?></option>

				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

		</select>                
                        </td>
					</tr>
                    <?php endif; ?>
                   <tr>
                   <?php endif; ?>
          <td width="30%" align="right">详细地址：</td>
          <td>
          <input name="address" type="text" size="40" id="address"  class="input"  value="<?php echo $this->_var['supp_list']['address']; ?>"/>
          </td>

        </tr>
         <tr>

          <td width="30%" align="right">邮箱：</td>

          <td>

          <input name="email" type="text" size="40" id="email" class="input"  value="<?php echo $this->_var['supp_list']['email']; ?>" />

          </td>

        </tr>
        <?php if (0): ?>
        <tr>
          <td width="30%" align="right">备用邮箱：</td>
          <td>
          <input name="email1" type="text" size="40" id="email1" class="input"  value="<?php echo $this->_var['supp_list']['email1']; ?>" />
          </td>
        </tr>
        <?php endif; ?>
        
        <tr>
          <td width="30%" align="right">手机号码：</td>
          <td>
          <input name="phone" type="text" size="40" id="phone" class="input"  value="<?php echo $this->_var['supp_list']['phone']; ?>" />
          </td>
        </tr>
        
        <?php if (0): ?>
         <tr>
          <td width="30%" align="right">备用手机号码：</td>
          <td>
          <input name="phone1" type="text" size="40" id="phone1"   class="input"  value="<?php echo $this->_var['supp_list']['phone1']; ?>"  />
            <span id="phone_notice" style="color:#FF0000"> *</span>
          </td>
        </tr>

           <tr>

          <td align="right">客服QQ：</td>

          <td>

          <input name="qq" type="text"  size="40" class="input"  value="<?php echo $this->_var['supp_list']['qq']; ?>" />

            <span style="color:#FF0000" id="password_notice"> *</span>

          </td>

        </tr>
           <tr>
             <td align="right">地图坐标：</td>
             <td><input type="text" name="map_info"  class="input"   id="map_info" value="<?php echo $this->_var['supp_list']['map_info']; ?>" /> <a href="http://api.map.soso.com/doc/tooles/picker.html" target="_blank">地图坐标拾取</a></td>
           </tr>

     	 <?php if ($this->_var['supp_type'] == 'user'): ?>
         
         	
            <tr>
          <td align="right">身份证正反复印件：</td>
          <td>
          <?php if ($this->_var['supp_list']['is_check'] != 1): ?>
            <input name="business_license" id="business_license" type="file" >
          <?php endif; ?>
          <?php if ($this->_var['supp_list']['business_license']): ?>
          <a href="/<?php echo $this->_var['supp_list']['business_license']; ?>"><img src="/<?php echo $this->_var['supp_list']['business_license']; ?>" width="50" height="50"></a>
          <?php endif; ?>
          </td>
        </tr>
        
        
         <tr>
          <td align="right">本人手持身份证：</td>
          <td>
          <?php if ($this->_var['supp_list']['is_check'] != 1): ?>
            <input name="business_scope" id="business_scope" type="file" >
          <?php endif; ?>
          <?php if ($this->_var['supp_list']['business_scope']): ?>
          <a href="/<?php echo $this->_var['supp_list']['business_scope']; ?>"><img src="/<?php echo $this->_var['supp_list']['business_scope']; ?>" width="50" height="50"></a>
          <?php endif; ?>
          </td>
        </tr>
        
        
         <?php else: ?>
         
         <tr>
          <td align="right">企业营业执照：</td>
          <td>
          <?php if ($this->_var['supp_list']['is_check'] != 1): ?>
            <input name="business_license" id="business_license" type="file" >
          <?php endif; ?>
          <?php if ($this->_var['supp_list']['business_license']): ?>
          <a href="/<?php echo $this->_var['supp_list']['business_license']; ?>"><img src="/<?php echo $this->_var['supp_list']['business_license']; ?>" width="50" height="50"></a>
          <?php endif; ?>
          </td>
        </tr>
        
        
         <tr>
          <td align="right">组织机构代码证：</td>
          <td>
          <?php if ($this->_var['supp_list']['is_check'] != 1): ?>
            <input name="business_scope" id="business_scope" type="file" >
          <?php endif; ?>
          <?php if ($this->_var['supp_list']['business_scope']): ?>
          <a href="/<?php echo $this->_var['supp_list']['business_scope']; ?>"><img src="/<?php echo $this->_var['supp_list']['business_scope']; ?>" width="50" height="50"></a>
          <?php endif; ?>
          </td>
        </tr>
        
         <tr>
          <td align="right">企业法人身份证：</td>
          <td>
          <?php if ($this->_var['supp_list']['is_check'] != 1): ?>
            <input name="cards" id="cards" type="file" >
          <?php endif; ?>
          <?php if ($this->_var['supp_list']['cards']): ?>
          <a href="/<?php echo $this->_var['supp_list']['cards']; ?>"><img src="/<?php echo $this->_var['supp_list']['cards']; ?>" width="50" height="50"></a>
          <?php endif; ?>
          </td>
        </tr>
        
         <tr>
          <td align="right">税务登记证：</td>
          <td>
          <?php if ($this->_var['supp_list']['is_check'] != 1): ?>
            <input name="certificate" id="certificate" type="file" >
          <?php endif; ?>
          <?php if ($this->_var['supp_list']['certificate']): ?>
          <a href="/<?php echo $this->_var['supp_list']['certificate']; ?>"><img src="/<?php echo $this->_var['supp_list']['certificate']; ?>" width="50" height="50"></a>
          <?php endif; ?>
          </td>
        </tr>
        <?php endif; ?>
        <?php endif; ?>
            <tr>
          <td align="right">商家描述：</td>
          <td>
        <?php echo $this->_var['FCKeditor']; ?>
          </td>
        </tr>
        
        
                     <tr>

						<td class="right">&nbsp;</td>

						<td>

                        <input type="hidden" name="suppliers_id" value="<?php echo $this->_var['supp_list']['suppliers_id']; ?>">

                        <input name="act" type="hidden" value="supp_update">

                        <input type="submit" value="保 存" class="btn" name="subsupp"></td>

					</tr>

                    </table>

                   

                    </form>

              

            

 

             </div>

  </div>

  </div>         

  <?php endif; ?>


    

    

<script>

function get_cat_list(id,type)

{

  Ajax.call('user.php', 'act=get_cat_list&id=' + id+'&type='+type, get_cat_listResponse, 'GET', 'JSON');

}

function get_cat_listResponse(result)

{



	if(document.getElementById('show_cat_list_'+result.type))

	{

		document.getElementById('show_cat_list_'+result.type).innerHTML = result.html;

		//alert(result.html);

	}

}







 /**

   * 鏂板?涓€涓??鏍

   */

  function addSpec(obj)

  {

      var src   = obj.parentNode.parentNode;

      var idx   = rowindex(src);

      var tbl   = document.getElementById('attrTable');

      var row   = tbl.insertRow(idx + 1);

      var cell1 = row.insertCell(-1);

      var cell2 = row.insertCell(-1);

      var regx  = /<a([^>]+)<\/a>/i;



      cell1.className = 'label';

      cell1.innerHTML = src.childNodes[0].innerHTML.replace(/(.*)(addSpec)(.*)(\[)(\+)/i, "$1removeSpec$3$4-");

      cell2.innerHTML = src.childNodes[1].innerHTML.replace(/readOnly([^\s|>]*)/i, '');

  }



  /**

   * 鍒犻櫎瑙勬牸鍊

   */

  function removeSpec(obj)

  {

      var row = rowindex(obj.parentNode.parentNode);

      var tbl = document.getElementById('attrTable');



      tbl.deleteRow(row);

  }

  

  

function checkpic_category()

{

	if(document.myform.cat_name.value=='')

	{

		alert('请输入分类名称');

		return false;

	}

	return true;

}



function editPassword()

{

  var frm              = document.forms['formPassword'];

  var old_password     = frm.elements['old_password'].value;

  var new_password     = frm.elements['new_password'].value;

  var confirm_password = frm.elements['comfirm_password'].value;



  var msg = '';

  var reg = null;



  if (old_password.length == 0)

  {

    msg +=  '旧密码不能为空\n';

  }



  if (new_password.length == 0)

  {

    msg +=  '新密码不能为空\n';

  }



  if (confirm_password.length == 0)

  {

    msg += '确认密码不能为空\n';

  }



  if (new_password.length > 0 && confirm_password.length > 0)

  {

    if (new_password != confirm_password)

    {

      msg +=   '新密码俩次输入不一致\n';

    }

  }
  if (msg.length > 0)
  {
    alert(msg);
    return false;

  }
  else
  {
    return true;
  }
}	
function checkarticle()
{
	if(document.myform.title.value=='')
	{
		alert('请输入标题');
		return false;
	}
	if(document.myform.cat_id.value=='')
	{
		alert('请选择分类');
		return false;
	}
	return true;
}





	

/**

 * 添加图片

**/

  function addImg(obj)

  {

	 

	  var src  = obj.parentNode.parentNode; 

	 

	  var idx  = rowindex(src);

      var tbl  = document.getElementById('gallery-table');

      var row  = tbl.insertRow(idx + 1);

	

      //var cell = row.insertCell(-1);

      row.innerHTML = src.innerHTML.replace(/(.*)(addImg)(.*)(\[)(\+)/i, "$1removeImg$3$4-");

	  

    

  }

  

  

  function removeImg(obj)

  {

      var row = rowindex(obj.parentNode.parentNode);

      var tbl = document.getElementById('gallery-table');

      tbl.deleteRow(row);

  }





  /**

   * 删除已上传图片

   */

  function dropImg(imgId)

  {

    Ajax.call('suppliers.php?act=drop_image', "img_id="+imgId, dropImgResponse, "GET", "JSON");

  }



  function dropImgResponse(result)

  {

      if (result.error == 0)

      {

          document.getElementById('gallery_' + result.content).style.display = 'none';

      }

  }
//提货单打印
  function de_print()
  {
	  window.open("suppliers.php?act=delivery_info_print&delivery_id=<?php echo $this->_var['delivery_order']['delivery_id']; ?>");
  }
 //切换
  function toggle(obj, act, id)
  {
    var val = (obj.innerHTML.match(/是/i)) ? 0 : 1;
 
    var res = Ajax.call(this.url, "act="+act+"&val=" + val + "&id=" +id, null, "POST", "JSON", false);

    if (res.message)
    {
      alert(res.message);
    }
    if (res.error == 0)
    {
      obj.innerHTML = (res.content > 0) ? '是' : '否';
    }
  }

  function account_detail_sub(){
		var remark=document.getElementById('remark').value;		
		if(remark==''){
			alert('请填写内容');
			return false;
		}
		$.ajax({
			  type:"post",//请求类型
			  url:"suppliers.php",//服务器页面地址
			  data:"remark="+remark+"&act=account_detail_form&id=<?php echo $this->_var['suppliers_accounts_id']; ?>",//参数(可有可无)
			  dataType:"json",//服务器返回结果类型(可有可无)
			  error:function(data){//错误处理函数(可有可无)
			     alert("ajax出错啦");
			  },
			  success:function(data){
				  alert(data.content);			    
			  }
			});
		return false;				
 }
 function account_confirm(id,type)
 {
	 var remark=document.getElementById('accounts_desc').value;		
		$.ajax({
			  type:"post",//请求类型
			  url:"suppliers.php",//服务器页面地址
			  data:"remark="+remark+"&act="+type+"&id="+id,//参数(可有可无)
			  dataType:"json",//服务器返回结果类型(可有可无)
			  error:function(data){//错误处理函数(可有可无)
			     alert("ajax出错啦");
			  },
			  success:function(data){
				  alert('操作成功');
				 window.location.href='suppliers.php?act=account_detail&suppliers_accounts_id='+id;
				 //account_detail&suppliers_accounts_id=46 my_order
			  }
			});
		return false;				
 }
 
</script>

</body>

</html>