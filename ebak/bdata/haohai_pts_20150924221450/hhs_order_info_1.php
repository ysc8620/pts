<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_order_info`;");
E_C("CREATE TABLE `hhs_order_info` (
  `order_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_sn` varchar(20) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `order_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `shipping_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pay_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) unsigned NOT NULL DEFAULT '0',
  `province` smallint(5) unsigned NOT NULL DEFAULT '0',
  `city` smallint(5) unsigned NOT NULL DEFAULT '0',
  `district` smallint(5) unsigned NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `postscript` varchar(255) NOT NULL DEFAULT '',
  `shipping_id` tinyint(3) NOT NULL DEFAULT '0',
  `shipping_name` varchar(120) NOT NULL DEFAULT '',
  `pay_id` tinyint(3) NOT NULL DEFAULT '0',
  `pay_name` varchar(120) NOT NULL DEFAULT '',
  `how_oos` varchar(120) NOT NULL DEFAULT '',
  `how_surplus` varchar(120) NOT NULL DEFAULT '',
  `pack_name` varchar(120) NOT NULL DEFAULT '',
  `card_name` varchar(120) NOT NULL DEFAULT '',
  `card_message` varchar(255) NOT NULL DEFAULT '',
  `inv_payee` varchar(120) NOT NULL DEFAULT '',
  `inv_content` varchar(120) NOT NULL DEFAULT '',
  `goods_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `shipping_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `insure_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pack_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `card_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `money_paid` decimal(10,2) NOT NULL DEFAULT '0.00',
  `surplus` decimal(10,2) NOT NULL DEFAULT '0.00',
  `integral` int(10) unsigned NOT NULL DEFAULT '0',
  `integral_money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `bonus` decimal(10,2) NOT NULL DEFAULT '0.00',
  `order_amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `from_ad` smallint(5) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `confirm_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pay_time` int(10) unsigned NOT NULL DEFAULT '0',
  `shipping_time` int(10) unsigned NOT NULL DEFAULT '0',
  `pack_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `card_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `bonus_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `invoice_no` varchar(255) NOT NULL DEFAULT '',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `extension_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `to_buyer` varchar(255) NOT NULL DEFAULT '',
  `pay_note` varchar(255) NOT NULL DEFAULT '',
  `agency_id` smallint(5) unsigned NOT NULL,
  `inv_type` varchar(60) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `is_separate` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `discount` decimal(10,2) NOT NULL,
  `mobile_pay` int(1) unsigned NOT NULL DEFAULT '0',
  `mobile_order` int(1) unsigned NOT NULL DEFAULT '0',
  `team_status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 初始状态 1 正在进行 2 成功 3 失败待退款 4 已退款',
  `team_first` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1 团长 2 团员',
  `team_sign` int(11) DEFAULT NULL COMMENT '一个团拥有相同的值',
  `team_num` int(11) DEFAULT NULL COMMENT '团共需人数',
  `teammen_num` int(11) DEFAULT NULL COMMENT '团现有人数',
  `transaction_id` varchar(50) DEFAULT NULL COMMENT '微信支付订单号',
  `suppliers_id` int(11) NOT NULL DEFAULT '0',
  `msg_code` varchar(20) DEFAULT NULL,
  `settlement_status` tinyint(4) NOT NULL DEFAULT '0',
  `commission` decimal(10,2) DEFAULT '0.00',
  `suppliers_accounts_id` int(11) DEFAULT NULL,
  `wxdesc` varchar(1000) DEFAULT NULL,
  `share_pay_type` tinyint(3) DEFAULT '0',
  `lat` decimal(10,5) DEFAULT NULL,
  `lng` decimal(10,5) DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_sn` (`order_sn`),
  KEY `user_id` (`user_id`),
  KEY `order_status` (`order_status`),
  KEY `shipping_status` (`shipping_status`),
  KEY `pay_status` (`pay_status`),
  KEY `shipping_id` (`shipping_id`),
  KEY `pay_id` (`pay_id`),
  KEY `extension_code` (`extension_code`,`extension_id`),
  KEY `agency_id` (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=376 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_order_info` values('348','2015083054496','176','4','0','3','庞斌','1','24','311','2598','文艺路金色城市','','','18291829249','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','0.01','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','0.01','0','本站','1440911358','1440911367','1440911367','0','0','0','0','','team_goods','48','','','2','','0.00','0','0','0.00','0','0','3','1','348','2','1','1007020128201508300749258162','0',NULL,'0','0.00',NULL,NULL,'0',NULL,NULL);");
E_D("replace into `hhs_order_info` values('365','2015092288821','285','2','0','0','哈哈哈','1','19','263','2202','，ho h mo mr','','','138464646648','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','0.10','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','0.10','0','本站','1442869985','0','0','0','0','0','0','','','46','','','0','','0.00','0','0','0.00','0','0','0','0','0',NULL,NULL,NULL,'0',NULL,'0','0.00',NULL,NULL,'0','34.43789','108.75640');");
E_D("replace into `hhs_order_info` values('366','2015092276702','285','2','0','0','哈哈哈','1','19','263','2202','，ho h mo mr','','','138464646648','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','9.90','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','9.90','0','本站','1442870013','0','0','0','0','0','0','','team_goods','46','','','0','','0.00','0','0','0.00','0','0','0','1','366',NULL,NULL,NULL,'0',NULL,'0','0.00',NULL,NULL,'0','34.43782','108.75630');");
E_D("replace into `hhs_order_info` values('350','2015083171122','181','2','0','0','123','1','24','311','2598','文艺路','','','17700000000','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','0.01','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','0.01','0','本站','1440971307','0','0','0','0','0','0','','team_goods','1','','','2','','0.00','0','0','0.00','0','0','0','1','350',NULL,NULL,NULL,'465',NULL,'0','0.00',NULL,NULL,'0','0.00000','0.00000');");
E_D("replace into `hhs_order_info` values('351','2015083187192','181','0','0','0','123','1','24','311','2598','文艺路','','','17700000000','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','8.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','8.00','0','本站','1440977980','0','0','0','0','0','0','','team_goods','57','','','2','','0.00','0','0','0.00','0','0','0','1','351',NULL,NULL,NULL,'465',NULL,'0','0.00',NULL,NULL,'0','0.00000','0.00000');");
E_D("replace into `hhs_order_info` values('352','2015083130560','181','2','1','2','123','1','24','311','2598','文艺路','','','17700000000','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','20.00','0.00','0.00','0.00','0.00','0.00','20.00','0.00','0','0.00','0.00','0.00','0','本站','1440979072','1440979139','1440979139','1440979505','0','0','0','','team_goods','54','','','2','','0.00','0','0','0.00','0','0','3','1','352','5','1',NULL,'465',NULL,'0','0.00',NULL,NULL,'0','0.00000','0.00000');");
E_D("replace into `hhs_order_info` values('353','2015083161449','181','0','0','0','123','1','24','311','2598','文艺路','','','17700000000','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','20.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','1.00','19.00','0','本站','1440979753','0','0','0','0','0','170','','team_goods','54','','','2','','0.00','0','0','0.00','0','0','0','1','353',NULL,NULL,NULL,'465',NULL,'0','0.00',NULL,NULL,'0','34.24596','108.94910');");
E_D("replace into `hhs_order_info` values('354','2015083106720','181','0','0','0','123','1','24','311','2598','文艺路','','','17700000000','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','0.01','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','0.01','0','本站','1440983917','0','0','0','0','0','0','','team_goods','46','','','2','','0.00','0','0','0.00','0','0','0','1','354',NULL,NULL,NULL,'0',NULL,'0','0.00',NULL,'想尝一口被包养的滋味','1','34.24598','108.94910');");
E_D("replace into `hhs_order_info` values('355','2015090711028','208','0','0','0','叶凯','1','2','52','502','海淀区农大南路88号','','','15600604663','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','0.01','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','0.01','0','本站','1441591015','0','0','0','0','0','0','','team_goods','1','','','0','','0.00','0','0','0.00','0','0','0','1','355',NULL,NULL,NULL,'0',NULL,'0','0.00',NULL,'想尝一口被包养的滋味','1','40.02299','116.29500');");
E_D("replace into `hhs_order_info` values('356','2015090963907','207','1','0','2','孙先生','1','31','392','3317','东港昌正名都南区','','','13567677155','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','0.01','0.00','0.00','0.00','0.00','0.00','0.01','0.00','0','0.00','0.00','0.00','0','本站','1441760617','1441760634','1441760634','0','0','0','0','','team_goods','1','','','0','','0.00','0','0','0.00','0','0','2','1','356','2','2','1000560128201509090829522221','465',NULL,'0','0.00',NULL,NULL,'0','29.94667','122.27950');");
E_D("replace into `hhs_order_info` values('357','2015090936672','206','1','0','2','孙先生','1','31','392','3317','昌正','','','13567677155','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','0.01','0.00','0.00','0.00','0.00','0.00','0.01','0.00','0','0.00','0.00','0.00','0','timeline','1441760803','1441760813','1441760813','0','0','0','0','','team_goods','1','','','0','','0.00','0','0','0.00','0','0','2','2','356','2','2','1006640128201509090829531712','465',NULL,'0','0.00',NULL,NULL,'0','0.00000','0.00000');");
E_D("replace into `hhs_order_info` values('358','2015091084517','225','2','0','2','果冻','1','26','322','2723','华润路一号附一号','','','13882277510','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','0.01','0.00','0.00','0.00','0.00','0.00','0.01','0.00','0','0.00','0.00','0.00','0','本站','1441859112','1441859118','1441859118','0','0','0','0','','team_goods','46','','','0','','0.00','0','0','0.00','0','0','3','1','358','5','1','1001550128201509100840754539','463',NULL,'0','0.00',NULL,NULL,'0','30.62401','104.08720');");
E_D("replace into `hhs_order_info` values('359','2015091202932','232','1','0','2','小小妮','1','6','76','695','黄边北路云山诗意棋乐居2栋1601','','','13560303250','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','0.01','0.00','0.00','0.00','0.00','0.00','0.01','0.00','0','0.00','0.00','0.00','0','本站','1442005391','1442005400','1442005400','0','0','0','0','','team_goods','1','','','0','','0.00','0','0','0.00','0','0','2','1','359','2','2','1005210128201509120856382552','465',NULL,'0','0.00',NULL,NULL,'0','0.00000','0.00000');");
E_D("replace into `hhs_order_info` values('360','2015091289654','233','1','0','2','小林','1','6','76','695','黄边北路云山诗意棋乐居2栋1601','','','13560303250','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','0.01','0.00','0.00','0.00','0.00','0.00','0.01','0.00','0','0.00','0.00','0.00','0','singlemessage','1442005630','1442005635','1442005635','0','0','0','0','','team_goods','1','','','0','','0.00','0','0','0.00','0','0','2','2','359','2','2','1007940128201509120856439095','465',NULL,'0','0.00',NULL,NULL,'0','0.00000','0.00000');");
E_D("replace into `hhs_order_info` values('361','2015091339513','236','4','0','3','帅哥','1','6','79','718','MP5盛况空前可口可乐了','','','13800138000','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','0.01','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','0.01','0','本站','1442079234','1442079240','1442079240','0','0','0','0','','team_goods','1','','','0','','0.00','0','0','0.00','0','0','3','1','361','2','1','1003240128201509130864641860','465',NULL,'0','0.00',NULL,NULL,'0','36.66160','117.07925');");
E_D("replace into `hhs_order_info` values('362','2015091420519','181','2','0','3','123','1','24','311','2598','文艺路','','','17700000000','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','0.01','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','0.01','0','本站','1442190493','1442190508','1442190508','0','0','0','0','','team_goods','1','','','2','','0.00','0','0','0.00','0','0','3','1','362','2','1','1000290128201509140878232817','465',NULL,'0','0.00',NULL,NULL,'0','34.24527','108.94923');");
E_D("replace into `hhs_order_info` values('363','2015091736437','262','2','0','0','李三','1','24','311','2597','西安新城区向荣巷小区','','','15802911869','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','0.10','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','0.10','0','本站','1442471643','0','0','0','0','0','0','','','46','','','2','','0.00','0','0','0.00','0','0','0','0','0',NULL,NULL,NULL,'463',NULL,'0','0.00',NULL,NULL,'0','0.00000','0.00000');");
E_D("replace into `hhs_order_info` values('364','2015092075334','276','0','0','0','周其江','1','16','221','1852','元和国际服装城b区14/145','','','15051788820','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','0.10','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','0.10','0','本站','1442671944','0','0','0','0','0','0','','','46','','','0','','0.00','0','0','0.00','0','0','0','0','0',NULL,NULL,NULL,'0',NULL,'0','0.00',NULL,NULL,'0','31.40288','120.62927');");
E_D("replace into `hhs_order_info` values('367','2015092241500','285','2','0','0','哈哈哈','1','19','263','2202','，ho h mo mr','','','138464646648','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','0.10','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','0.10','0','本站','1442870049','0','0','0','0','0','0','','','46','','','0','','0.00','0','0','0.00','0','0','0','0','0',NULL,NULL,NULL,'0',NULL,'0','0.00',NULL,'想尝一口被包养的滋味','1','34.43760','108.75630');");
E_D("replace into `hhs_order_info` values('368','2015092242215','285','2','0','0','哈哈哈','1','19','263','2202','，ho h mo mr','','','138464646648','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','9.90','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','9.90','0','本站','1442870104','0','0','0','0','0','0','','team_goods','46','','','0','','0.00','0','0','0.00','0','0','0','1','368',NULL,NULL,NULL,'463',NULL,'0','0.00',NULL,NULL,'0','34.43761','108.75630');");
E_D("replace into `hhs_order_info` values('369','2015092271409','285','2','0','0','哈哈哈','1','19','263','2202','，ho h mo mr','','','138464646648','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','19.90','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','19.90','0','本站','1442870690','0','0','0','0','0','0','','team_goods','37','','','0','','0.00','0','0','0.00','0','0','0','1','369',NULL,NULL,NULL,'0',NULL,'0','0.00',NULL,NULL,'0','34.43784','108.75680');");
E_D("replace into `hhs_order_info` values('370','2015092211437','285','2','0','0','哈哈哈','1','19','263','2202','，ho h mo mr','','','138464646648','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','19.90','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','19.90','0','本站','1442870701','0','0','0','0','0','0','','team_goods','37','','','0','','0.00','0','0','0.00','0','0','0','1','370',NULL,NULL,NULL,'0',NULL,'0','0.00',NULL,NULL,'0','34.43750','108.75730');");
E_D("replace into `hhs_order_info` values('371','2015092243892','285','2','0','0','哈哈哈','1','19','263','2202','，ho h mo mr','','','138464646648','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','9.90','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','9.90','0','本站','1442870973','0','0','0','0','0','0','','team_goods','46','','','0','','0.00','0','0','0.00','0','0','0','1','371',NULL,NULL,NULL,'463',NULL,'0','0.00',NULL,NULL,'0','34.44898','108.78940');");
E_D("replace into `hhs_order_info` values('372','2015092286415','285','2','0','0','哈哈哈','1','19','263','2202','，ho h mo mr','','','138464646648','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','19.90','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','19.90','0','本站','1442872510','0','0','0','0','0','0','','team_goods','37','','','0','','0.00','0','0','0.00','0','0','0','1','372',NULL,NULL,NULL,'0',NULL,'0','0.00',NULL,NULL,'0','34.44559','108.81780');");
E_D("replace into `hhs_order_info` values('373','2015092264142','285','2','0','0','哈哈哈','1','19','263','2202','，ho h mo mr','','','138464646648','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','9.90','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','9.90','0','本站','1442872827','0','0','0','0','0','0','','team_goods','46','','','0','','0.00','0','0','0.00','0','0','0','1','373',NULL,NULL,NULL,'463',NULL,'0','0.00',NULL,NULL,'0','34.28881','108.91770');");
E_D("replace into `hhs_order_info` values('374','2015092204639','285','2','0','0','哈哈哈','1','19','263','2202','，ho h mo mr','','','138464646648','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','9.90','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','9.90','0','本站','1442872849','0','0','0','0','0','0','','team_goods','46','','','0','','0.00','0','0','0.00','0','0','0','1','374',NULL,NULL,NULL,'463',NULL,'0','0.00',NULL,NULL,'0','34.28785','108.91750');");
E_D("replace into `hhs_order_info` values('375','2015092261573','235','0','0','0','陈钦城','1','6','77','708','盛世花园','','','13725566772','','','','','5','申通快递','4','微信支付','等待所有商品备齐后再发','','','','','','','19.90','0.00','0.00','0.00','0.00','0.00','0.00','0.00','0','0.00','0.00','19.90','0','本站','1442879565','0','0','0','0','0','0','','team_goods','37','','','0','','0.00','0','0','0.00','0','0','0','1','375',NULL,NULL,NULL,'0',NULL,'0','0.00',NULL,NULL,'0','22.66400','114.03530');");

require("../../inc/footer.php");
?>