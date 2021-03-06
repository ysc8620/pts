<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_order_goods`;");
E_C("CREATE TABLE `hhs_order_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '1',
  `market_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `goods_attr` text NOT NULL,
  `send_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `is_real` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_gift` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_attr_id` varchar(255) NOT NULL DEFAULT '',
  `refund_reason` varchar(255) NOT NULL DEFAULT '',
  `refund_desc` text NOT NULL,
  `refund_pic1` varchar(255) NOT NULL DEFAULT '',
  `refund_pic2` varchar(255) NOT NULL DEFAULT '',
  `refund_pic3` varchar(255) NOT NULL DEFAULT '',
  `refund_add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `refund_confirm_time` int(10) unsigned NOT NULL DEFAULT '0',
  `refund_confirm_desc` text NOT NULL,
  `refund_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `commission` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`rec_id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=397 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_order_goods` values('91','81','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('90','80','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('89','79','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('88','78','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('87','77','37','板牙妹妹坚果零食炒货夏威夷果澳洲特产零食奶油味送开口器','HHS000002','0','1','48.00','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('86','76','37','板牙妹妹坚果零食炒货夏威夷果澳洲特产零食奶油味送开口器','HHS000002','0','1','48.00','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('85','75','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('31','19','24','P806','HHS000024','0','2','2400.00','1850.00','颜色:灰色 \n','2','1','','0','0','167','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('32','22','32','诺基亚N85','HHS000032','0','1','3612.00','3010.00','线控耳机','0','1','','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('33','23','30','移动20元充值卡','HHS000030','0','1','21.00','18.00','','0','0','virtual_card','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('34','23','9','诺基亚E66','HHS000009','11','1','2757.60','0.00','颜色:白色 \n','0','1','','0','0','227','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('35','24','32','诺基亚N85','HHS000032','0','1','3612.00','3000.00','线控耳机','0','1','','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('36','25','32','诺基亚N85','HHS000032','1','1','6612.00','3000.00','颜色:黑色[3000] \n','0','1','','0','0','163','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('37','26','32','诺基亚N85','HHS000032','1','1','6612.00','3000.00','颜色:黑色[3000] \n','0','1','','0','0','163','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('38','27','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','4','48.00','40.00','','0','1','','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('39','28','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','3','48.00','40.00','','0','1','','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('40','29','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','48.00','40.00','','0','1','','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('41','30','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','0.12','0.10','','0','1','','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('42','31','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','2','0.12','0.10','','0','1','','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('43','32','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','0.12','0.10','','0','1','','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('44','33','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','0.12','0.10','','0','1','','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('64','54','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('63','53','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('62','52','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('61','51','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('60','50','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('59','49','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('58','48','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('57','47','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('56','46','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('55','45','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('65','55','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('66','56','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('67','57','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('68','58','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('69','59','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('70','60','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('71','61','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('72','62','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('73','63','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','1.00','','0','1','','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('74','64','37','板牙妹妹坚果零食炒货夏威夷果澳洲特产零食奶油味送开口器','HHS000002','0','1','48.00','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('75','65','37','板牙妹妹坚果零食炒货夏威夷果澳洲特产零食奶油味送开口器','HHS000002','0','1','48.00','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('76','66','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('77','67','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('78','68','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('79','69','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('80','70','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('81','71','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('82','72','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('83','73','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('84','74','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('106','96','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('107','97','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('108','98','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('109','99','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('110','100','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('128','118','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('165','155','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('162','152','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('152','142','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('155','145','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('154','144','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('158','148','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('167','157','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('170','160','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('183','173','40','姐妹干果','HHS000040','0','1','17.88','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('184','174','37','板牙妹妹坚果零食炒货夏威夷果澳洲特产零食奶油味送开口器','HHS000002','0','1','48.00','0.10','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('185','175','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('186','176','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','1.20','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('214','204','41','果干','HHS000041','0','1','23.88','0.02','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('217','207','1','越南进口澳芒2个59元包邮  水果店每个至少40元','HHS000000','0','1','48.00','10.00','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('220','210','41','果干','HHS000041','0','1','23.88','0.02','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('226','216','48','test测试','HHS000048','0','1','12.00','10.00','','0','1','','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('279','269','48','test测试','HHS000048','0','1','12.00','10.00','','1','1','','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('281','271','48','test测试','HHS000048','0','1','12.00','10.00','','0','1','','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('364','354','46','鸭脖','HHS000046','0','1','0.12','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('358','348','48','test测试','HHS000048','0','1','12.00','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('375','365','46','【测试商品-网站演示专用】 猕猴桃','HHS000046','0','1','0.12','0.10','','0','1','','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('360','350','1','越南进口澳芒2个59元','HHS000000','0','1','24.00','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('361','351','57','猕猴桃干','HHS000057','0','1','0.00','8.00','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('362','352','54',' 泰国进口 小猴子 苏梅samui炭烤椰子片香酥椰子干40g','HHS000054','0','1','42.00','20.00','','1','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('363','353','54',' 泰国进口 小猴子 苏梅samui炭烤椰子片香酥椰子干40g','HHS000054','0','1','0.00','20.00','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('365','355','1','【测试商品-网站演示专用】越南进口澳芒2个59元','HHS000000','0','1','24.00','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('366','356','1','【测试商品-网站演示专用】越南进口澳芒2个59元','HHS000000','0','1','24.00','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('367','357','1','【测试商品-网站演示专用】越南进口澳芒2个59元','HHS000000','0','1','24.00','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('368','358','46','【测试商品-网站演示专用】 鸭脖','HHS000046','0','1','0.12','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('369','359','1','【测试商品-网站演示专用】越南进口澳芒2个59元','HHS000000','0','1','24.00','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('370','360','1','【测试商品-网站演示专用】越南进口澳芒2个59元','HHS000000','0','1','24.00','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('371','361','1','【测试商品-网站演示专用】越南进口澳芒2个59元','HHS000000','0','1','24.00','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('372','362','1','【测试商品-网站演示专用】越南进口澳芒2个59元','HHS000000','0','1','24.00','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('373','363','46','【测试商品-网站演示专用】 猕猴桃','HHS000046','0','1','0.12','0.10','','0','1','','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('374','364','46','【测试商品-网站演示专用】 猕猴桃','HHS000046','0','1','0.12','0.10','','0','1','','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('376','366','46','【测试商品-网站演示专用】 猕猴桃','HHS000046','0','1','0.12','9.90','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('377','367','46','【测试商品-网站演示专用】 猕猴桃','HHS000046','0','1','0.12','0.10','','0','1','','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('378','368','46','【测试商品-网站演示专用】 猕猴桃','HHS000046','0','1','0.12','9.90','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('379','369','37','【测试商品-网站演示专用】 芒果','HHS000002','0','1','48.00','19.90','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('380','370','37','【测试商品-网站演示专用】 芒果','HHS000002','0','1','48.00','19.90','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('381','371','46','【测试商品-网站演示专用】 猕猴桃','HHS000046','0','1','0.12','9.90','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('382','372','37','【测试商品-网站演示专用】 芒果','HHS000002','0','1','48.00','19.90','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('383','373','46','【测试商品-网站演示专用】 猕猴桃','HHS000046','0','1','0.12','9.90','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('384','374','46','【测试商品-网站演示专用】 猕猴桃','HHS000046','0','1','0.12','9.90','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('385','375','37','【测试商品-网站演示专用】 芒果','HHS000002','0','1','48.00','19.90','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('386','376','46','【测试商品-网站演示专用】 猕猴桃','HHS000046','0','1','0.12','9.90','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('387','377','46','【测试商品-网站演示专用】 猕猴桃','HHS000046','0','1','0.12','9.90','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('388','378','46','【测试商品-网站演示专用】 猕猴桃','HHS000046','0','1','0.12','9.90','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('389','379','46','【测试商品-网站演示专用】 猕猴桃','HHS000046','0','1','0.12','9.90','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('390','380','46','【测试商品-网站演示专用】 猕猴桃','HHS000046','0','1','0.12','9.90','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('391','381','37','【测试商品-网站演示专用】 芒果','HHS000002','0','1','48.00','19.90','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('392','382','41','【测试商品-网站演示专用】 果干','HHS000041','0','1','23.88','0.02','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('393','383','47','【测试商品-网站演示专用】姐妹果干组合套装','HHS000047','0','1','118.80','9.90','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('394','384','52','【测试商品-网站演示专用】商家商品11','HHS000052','0','1','0.00','0.01','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('395','385','60','【测试商品-网站演示专用】蜜桔','HHS000060','0','1','48.00','9.90','','0','1','team_goods','0','0','','','','','','','0','0','','0',NULL);");
E_D("replace into `hhs_order_goods` values('396','386','46','【测试商品-网站演示专用】 猕猴桃','HHS000046','0','1','0.12','0.10','','1','1','','0','0','','','','','','','0','0','','0',NULL);");

require("../../inc/footer.php");
?>