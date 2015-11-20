<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_bonus_type`;");
E_C("CREATE TABLE `hhs_bonus_type` (
  `type_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(60) NOT NULL DEFAULT '',
  `type_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `send_type` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `min_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `max_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `send_start_date` int(11) NOT NULL DEFAULT '0',
  `send_end_date` int(11) NOT NULL DEFAULT '0',
  `use_start_date` int(11) NOT NULL DEFAULT '0',
  `use_end_date` int(11) NOT NULL DEFAULT '0',
  `min_goods_amount` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `is_share` int(11) DEFAULT '0' COMMENT '是否是好友券',
  `number` int(11) DEFAULT '0' COMMENT '分享优惠券的数量',
  `suppliers_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_bonus_type` values('16','平台自发优惠券','20.00','2','20.00','0.00','1440921600','1443600000','1440921600','1443600000','20.00','0','0','0');");
E_D("replace into `hhs_bonus_type` values('12','爬爬垫团购测试','0.50','0','0.00','0.00','1438329600','1441008000','1438329600','1441008000','1.00','0','0','0');");
E_D("replace into `hhs_bonus_type` values('13','商户优惠券','10.00','1','0.00','0.00','1438675200','1441353600','1438675200','1441353600','0.00','1','5','463');");
E_D("replace into `hhs_bonus_type` values('14','8元','8.00','1','0.00','0.00','1440921600','1443600000','1440921600','1443600000','8.00','1','2','465');");
E_D("replace into `hhs_bonus_type` values('17','test','10.00','2','0.00','0.00','1440921600','1443600000','1440921600','1443600000','1032.00','1','10','465');");

require("../../inc/footer.php");
?>