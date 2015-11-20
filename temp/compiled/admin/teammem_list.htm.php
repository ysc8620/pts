<?php if ($this->_var['full_page']): ?>
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<!-- 订单搜索 
<div class="form-div">
  <form action="javascript:searchOrder()" name="searchForm">
    <img src="images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
    <?php echo $this->_var['lang']['order_sn']; ?><input name="order_sn" type="text" id="order_sn" size="15">
    <?php echo htmlspecialchars($this->_var['lang']['consignee']); ?><input name="consignee" type="text" id="consignee" size="15">
    <?php echo $this->_var['lang']['all_status']; ?>
    <select name="status" id="status">
      <option value="-1"><?php echo $this->_var['lang']['select_please']; ?></option>
      <?php echo $this->html_options(array('options'=>$this->_var['status_list'])); ?>
    </select>
    <input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button" />
  </form>
</div>-->

<!-- 订单列表 -->
<form method="post" action="order.php?act=operate" name="listForm" onsubmit="return check()">
  <div class="list-div" id="listDiv">
<?php endif; ?>
 
<table cellpadding="3" cellspacing="1" >
<tbody>
  <tr>
  	<td  width="150px">团购编号：</td>
  	<td  width="320px"><?php echo $this->_var['team_info']['team_sign']; ?></td>
  </tr>
  <tr>
  	<td>二维码：</td>
  	<td ><div id="code"><img src="http://qr.liantu.com/api.php?text=<?php echo $this->_var['share_url']; ?>&w=200&m=10"  ></div></td>
  </tr>
  <tr>
  	<td>开团数量：</td>
  	<td><?php echo $this->_var['team_info']['team_num']; ?></td>
  </tr>
  <tr>
  	<td>团购开始时间：</td>
  	<td><?php echo $this->_var['team_info']['team_start_date']; ?></td>
  </tr>
  <tr>
  	<td>团购到期时间：</td>
  	<td><?php echo $this->_var['team_info']['team_end_date']; ?></td>
  </tr>
  <tr>
  	<td >团购状态：</td>
  	<td><?php echo $this->_var['lang']['team_status'][$this->_var['team_info']['team_status']]; ?></td>
  </tr>
  <tr>
  	<td colspan="2" ><b>参团信息</b></td>
  </tr>
  <tr > 
  <td colspan="2">
  
  <table cellpadding="3" cellspacing="1" width="95%">
  <thead>
  <tr>
    <th>用户头像</th>	
    <th>标签</th>
    <th>用户昵称</th>
    <th><?php echo $this->_var['lang']['consignee']; ?></th>
    <th>入团时间</th>
    <th>团购状态</th>
    <th>订单号</th>
    <th>微信单号</th>
    <th><?php echo $this->_var['lang']['all_status']; ?></th>
    <th><?php echo $this->_var['lang']['order_time']; ?></th>
    <th>商品编号</th>	
    <th><?php echo $this->_var['lang']['total_fee']; ?></th>
    <th><?php echo $this->_var['lang']['handler']; ?></th>
  <tr>
  </thead>
  <tbody>
  <?php $_from = $this->_var['order_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('okey', 'order');if (count($_from)):
    foreach ($_from AS $this->_var['okey'] => $this->_var['order']):
?>
  <tr>
    <td valign="top" nowrap="nowrap"><img src="<?php echo $this->_var['order']['headimgurl']; ?>" width="50"></td>
    <td valign="top" nowrap="nowrap"><?php if ($this->_var['order']['team_first'] == 1): ?>团长<?php else: ?>团员<?php endif; ?></td>
    <td align="center" valign="top"><?php echo $this->_var['order']['uname']; ?></td>
    <td align="center" valign="top"><a href="mailto:<?php echo $this->_var['order']['email']; ?>"> <?php echo htmlspecialchars($this->_var['order']['consignee']); ?></a><?php if ($this->_var['order']['mobile']): ?> [TEL: <?php echo htmlspecialchars($this->_var['order']['mobile']); ?>]<?php endif; ?> <br /><?php echo htmlspecialchars($this->_var['order']['address']); ?></td>
    <td align="center" valign="top"><?php echo $this->_var['order']['formated_pay_date']; ?></td>
    <td align="center" valign="top"><?php echo $this->_var['lang']['team_status'][$this->_var['order']['team_status']]; ?></td>
    <td align="center" valign="top"><?php echo $this->_var['order']['order_sn']; ?></td>
     <td align="center" valign="top"><?php echo $this->_var['order']['transaction_id']; ?></td>
    <td align="center" valign="top"><?php echo $this->_var['lang']['os'][$this->_var['order']['order_status']]; ?>,<?php echo $this->_var['lang']['ps'][$this->_var['order']['pay_status']]; ?>,<?php echo $this->_var['lang']['ss'][$this->_var['order']['shipping_status']]; ?></td>
    <td align="center" valign="top"><?php echo $this->_var['order']['short_order_time']; ?></td>
    <td align="center" valign="top"><?php echo $this->_var['order']['goods_id']; ?></td>
    <td align="center" valign="top"><?php echo $this->_var['order']['formated_total_fee']; ?></td>
    <td align="center" valign="top"  nowrap="nowrap">
     <a href="order.php?act=info&order_id=<?php echo $this->_var['order']['order_id']; ?>">查看订单</a>
     <!-- 
     <?php if ($this->_var['order']['can_remove']): ?>
     <br /><a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['order']['order_id']; ?>, remove_confirm, 'remove_order')"><?php echo $this->_var['lang']['remove']; ?></a>
     <?php endif; ?> -->
    </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </tbody>
  </table>
	</td>
  </tr>
  <tr>
       <td colspan="2"><b>商品信息</b></td>
  </tr>
   <tr>
       <td>商品名称：</td>
       <td><?php echo $this->_var['team_info']['goods_name']; ?></td>
   </tr>
   <tr>
       <td>团购价格：</td>
       <td><?php echo $this->_var['team_info']['goods_price']; ?></td>
   </tr>
   <tr>
       <td>商品价格：</td>
       <td><?php echo $this->_var['team_info']['shop_price']; ?></td>
   </tr>
   <tr>
       <td>团购人数：</td>
       <td><?php echo $this->_var['team_info']['team_num']; ?></td>
   </tr>
   <tr>
       <td colspan="2"><button onclick="if(confirm('已经退款的用户重复提交无效，确定整团退款吗 ?')){window.location.href = 'order.php?act=team_refund&team_sign=<?php echo $this->_var['team_info']['team_sign']; ?>';}" type="button">整团退款</button></td>
   </tr>
</table> 

<?php if (0): ?>
<!-- 分页 -->
<table id="page-table" cellspacing="0">
  <tr>
    <td align="right" nowrap="true">
    <?php echo $this->fetch('page.htm'); ?>
    </td>
  </tr>
</table>
<?php endif; ?>
<?php if ($this->_var['full_page']): ?>
  </div>
  <!-- 
  <div>
    <input name="confirm" type="submit" id="btnSubmit" value="<?php echo $this->_var['lang']['op_confirm']; ?>" class="button" disabled="true" onclick="this.form.target = '_self'" />
    <input name="invalid" type="submit" id="btnSubmit1" value="<?php echo $this->_var['lang']['op_invalid']; ?>" class="button" disabled="true" onclick="this.form.target = '_self'" />
    <input name="cancel" type="submit" id="btnSubmit2" value="<?php echo $this->_var['lang']['op_cancel']; ?>" class="button" disabled="true" onclick="this.form.target = '_self'" />
    <input name="remove" type="submit" id="btnSubmit3" value="<?php echo $this->_var['lang']['remove']; ?>" class="button" disabled="true" onclick="this.form.target = '_self'" />
    <input name="print" type="submit" id="btnSubmit4" value="<?php echo $this->_var['lang']['print_order']; ?>" class="button" disabled="true" onclick="this.form.target = '_blank'" />
    <input name="batch" type="hidden" value="1" />
    <input name="order_id" type="hidden" value="" />
  </div> -->
</form>
<script language="JavaScript">
//listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
//listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

listTable.query = 'teammem_query';
    onload = function()
    {
        // 开始检查订单
        startCheckOrder();
    }

    /**
     * 搜索订单
     */
    function searchOrder()
    {
        listTable.filter['order_sn'] = Utils.trim(document.forms['searchForm'].elements['order_sn'].value);
        listTable.filter['consignee'] = Utils.trim(document.forms['searchForm'].elements['consignee'].value);
        listTable.filter['composite_status'] = document.forms['searchForm'].elements['status'].value;
        listTable.filter['page'] = 1;
        listTable.loadList();
    }

    function check()
    {
      var snArray = new Array();
      var eles = document.forms['listForm'].elements;
      for (var i=0; i<eles.length; i++)
      {
        if (eles[i].tagName == 'INPUT' && eles[i].type == 'checkbox' && eles[i].checked && eles[i].value != 'on')
        {
          snArray.push(eles[i].value);
        }
      }
      if (snArray.length == 0)
      {
        return false;
      }
      else
      {
        eles['order_id'].value = snArray.toString();
        return true;
      }
    }
    /**
     * 显示订单商品及缩图
     */
    var show_goods_layer = 'order_goods_layer';
    var goods_hash_table = new Object;
    var timer = new Object;

    /**
     * 绑定订单号事件
     *
     * @return void
     */
    function bind_order_event()
    {
        var order_seq = 0;
        while(true)
        {
            var order_sn = Utils.$('order_'+order_seq);
            if (order_sn)
            {
                order_sn.onmouseover = function(e)
                {
                    try
                    {
                        window.clearTimeout(timer);
                    }
                    catch(e)
                    {
                    }
                    var order_id = Utils.request(this.href, 'order_id');
                    show_order_goods(e, order_id, show_goods_layer);
                }
                order_sn.onmouseout = function(e)
                {
                    hide_order_goods(show_goods_layer)
                }
                order_seq++;
            }
            else
            {
                break;
            }
        }
    }
    listTable.listCallback = function(result, txt) 
    {
        if (result.error > 0) 
        {
            alert(result.message);
        }
        else 
        {
            try 
            {
                document.getElementById('listDiv').innerHTML = result.content;
                bind_order_event();
                if (typeof result.filter == "object") 
                {
                    listTable.filter = result.filter;
                }
                listTable.pageCount = result.page_count;
            }
            catch(e)
            {
                alert(e.message);
            }
        }
    }
    /**
     * 浏览器兼容式绑定Onload事件
     *
     */
    if (Browser.isIE)
    {
        window.attachEvent("onload", bind_order_event);
    }
    else
    {
        window.addEventListener("load", bind_order_event, false);
    }

    /**
     * 建立订单商品显示层
     *
     * @return void
     */
    function create_goods_layer(id)
    {
        if (!Utils.$(id))
        {
            var n_div = document.createElement('DIV');
            n_div.id = id;
            n_div.className = 'order-goods';
            document.body.appendChild(n_div);
            Utils.$(id).onmouseover = function()
            {
                window.clearTimeout(window.timer);
            }
            Utils.$(id).onmouseout = function()
            {
                hide_order_goods(id);
            }
        }
        else
        {
            Utils.$(id).style.display = '';
        }
    }

    /**
     * 显示订单商品数据
     *
     * @return void
     */
    function show_order_goods(e, order_id, layer_id)
    {
        create_goods_layer(layer_id);
        $layer_id = Utils.$(layer_id);
        $layer_id.style.top = (Utils.y(e) + 12) + 'px';
        $layer_id.style.left = (Utils.x(e) + 12) + 'px';
        if (typeof(goods_hash_table[order_id]) == 'object')
        {
            response_goods_info(goods_hash_table[order_id]);
        }
        else
        {
            $layer_id.innerHTML = loading;
            Ajax.call('order.php?is_ajax=1&act=get_goods_info&order_id='+order_id, '', response_goods_info , 'POST', 'JSON');
        }
    }

    /**
     * 隐藏订单商品
     *
     * @return void
     */
    function hide_order_goods(layer_id)
    {
        $layer_id = Utils.$(layer_id);
        window.timer = window.setTimeout('$layer_id.style.display = "none"', 500);
    }

    /**
     * 处理订单商品的Callback
     *
     * @return void
     */
    function response_goods_info(result)
    {
        if (result.error > 0)
        {
            alert(result.message);
            hide_order_goods(show_goods_layer);
            return;
        }
        if (typeof(goods_hash_table[result.content[0].order_id]) == 'undefined')
        {
            goods_hash_table[result.content[0].order_id] = result;
        }
        Utils.$(show_goods_layer).innerHTML = result.content[0].str;
    }
</script>


<?php echo $this->fetch('pagefooter.htm'); ?>
<?php endif; ?>