<?php
/**
 * 通用通知接口demo
 * ====================================================
 * 支付完成后，微信会把相关支付和用户信息发送到商户设定的通知URL，
 * 商户接收回调信息后，根据需要设定相应的处理流程。
 * 
 * 这里举例使用log文件形式记录回调信息。
*/
	define('IN_HHS', true);	
require('../../includes/init2.php');
require('../../includes/lib_payment.php');
require('../../includes/modules/payment/wxpay.php');	
    //使用通用通知接口
	$notify = new Notify_pub();
	//var_dump($notify);
	//存储微信的回调
	$xml = $GLOBALS['HTTP_RAW_POST_DATA'];	
	$notify->saveData($xml);/*	if(is_array($xml)){	    $str=serialize($xml);	}else{	    $str=$xml;	}	$fp=fopen("ab.txt","w");	fputs($fp, $str);	fclose($fp);*/
	//验证签名，并回应微信。
	//对后台通知交互时，如果微信收到商户的应答不是成功或超时，微信认为通知失败，
	//微信会通过一定的策略（如30分钟共8次）定期重新发起通知，
	//尽可能提高通知的成功率，但微信不保证通知最终能成功。
	if($notify->checkSign() == FALSE){
		$notify->setReturnParameter("return_code","FAIL");//返回状态码
		$notify->setReturnParameter("return_msg","签名失败");//返回信息
	}else{
		$notify->setReturnParameter("return_code","SUCCESS");//设置返回码				$notify->setReturnParameter("return_msg","OK");
	}	
	$returnXml = $notify->returnXml();
	echo $returnXml;
	//==商户根据实际情况设置相应的处理流程，此处仅作举例=======
	
	//以log文件形式记录回调信息
	$log_ = new Log_();
	
	$log_name="./notify_url.log";//log文件路径
	$log_->log_result($log_name,"【接收到的notify通知】:\n".$xml."\n");

	if($notify->checkSign() == TRUE)
	{	    
		if ($notify->data["return_code"] == "FAIL") {
			//此处应该更新一下订单状态，商户自行增删操作
			$log_->log_result($log_name,"【通信出错】:\n".$xml."\n");
		}
		elseif($notify->data["result_code"] == "FAIL"){
			//此处应该更新一下订单状态，商户自行增删操作
			$log_->log_result($log_name,"【业务出错】:\n".$xml."\n");
		}
		else{
			$order = $notify->getData();						$transaction_id = $order["transaction_id"];//微信订单号			$orsn = $order["out_trade_no"];			
			$odid=get_order_id_by_sn($orsn); 
			order_paid($odid);						$sql="update ".$GLOBALS['hhs']->table('order_info')." set transaction_id='$transaction_id' where order_sn='$orsn' ";			$GLOBALS['db']->query($sql);			/*是团购改变订单*/			$sql="select * from ".$hhs->table('order_info')."  where order_sn='".$orsn."'";			$order_info=$db->getRow($sql);			if(!empty($order_info)&&$order_info['extension_code']=='team_goods'){			    $team_sign=$order_info['team_sign'];			    $sql="select team_num from ".$hhs->table('goods')." where goods_id=".$order_info['extension_id'];			    $team_num=$db->getOne($sql);			                    if($order_info['team_first']==1){                	//若是团长记录下团的人数                    $sql = "UPDATE ". $hhs->table('order_info') ." SET team_num='$team_num' WHERE order_id=".$order_info['order_id'];                    $db->query($sql);                }                $sql="select team_num from ".$hhs->table('order_info') ." where order_id=".$order_info['team_sign'];                $team_num=$db->getOne($sql);                //团共需人数和状态                $sql = "UPDATE ". $hhs->table('order_info') ." SET team_status=1,team_num='$team_num' WHERE order_id=".$order_info['order_id'];                $db->query($sql);                //实际人数                $sql="select count(*) from ".$hhs->table('order_info')." where team_sign=".$team_sign." and team_status>0 ";                $rel_num=$db->getOne($sql);                //存储实际人数                $sql="update ".$hhs->table('order_info')." set teammen_num='$rel_num' where team_sign=".$team_sign;                $db->query($sql);                                if($team_num<=$rel_num){                    $sql = "UPDATE ". $hhs->table('order_info') ." SET team_status=2 WHERE team_status=1 and team_sign=".$team_sign;                    $db->query($sql);                    //取消未参团订单                    $sql = "UPDATE ". $hhs->table('order_info') ." SET order_status=2 WHERE team_status=0 and team_sign=".$team_sign;                    $db->query($sql);                }                if($order_info['team_first']==1){                    $user_id=$order_info['user_id'];                    $team_sign=$order_info['team_sign'];                    $wxch_order_name='pay';                    include_once(ROOT_PATH . 'wxch_order.php');                }			}			//代付			if($order_info['share_pay_type']>0){			    $sql="update ". $hhs->table('share_pay_info') ." set is_paid=1 where   order_id=".$order_info['order_id'];			    			    $db->query($sql);			    			}			
			//此处应该更新一下订单状态，商户自行增删操作
			$log_->log_result($log_name,"【支付成功】:\n".$order["out_trade_no"]."\n");
		}
		
		//商户自行增加处理流程,
		//例如：更新订单状态
		//例如：数据库操作
		//例如：推送支付完成信息
	}
?>