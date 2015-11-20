<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_account_log`;");
E_C("CREATE TABLE `hhs_account_log` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `user_money` decimal(10,2) NOT NULL,
  `frozen_money` decimal(10,2) NOT NULL,
  `rank_points` mediumint(9) NOT NULL,
  `pay_points` mediumint(9) NOT NULL,
  `change_time` int(10) unsigned NOT NULL,
  `change_desc` varchar(255) NOT NULL,
  `change_type` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_account_log` values('1','5','1100000.00','0.00','0','0','1242140736','11','2');");
E_D("replace into `hhs_account_log` values('2','3','400000.00','0.00','0','0','1242140752','21312','2');");
E_D("replace into `hhs_account_log` values('3','2','300000.00','0.00','0','0','1242140775','300000','2');");
E_D("replace into `hhs_account_log` values('5','5','0.00','10000.00','0','0','1242140853','32','2');");
E_D("replace into `hhs_account_log` values('22','3','-1000.00','0.00','0','0','1242973612','追加使用余额支付订单：2009051227085','99');");
E_D("replace into `hhs_account_log` values('36','6','5000.00','0.00','0','0','1420482199','充值','0');");
E_D("replace into `hhs_account_log` values('37','5','-1000.00','0.00','0','0','1420482237','提现','1');");
E_D("replace into `hhs_account_log` values('106','181','0.00','0.00','20','20','1440979505','订单 2015083130560 赠送的积分','99');");

require("../../inc/footer.php");
?>