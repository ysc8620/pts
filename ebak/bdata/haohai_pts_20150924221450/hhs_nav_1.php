<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_nav`;");
E_C("CREATE TABLE `hhs_nav` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `ctype` varchar(10) DEFAULT NULL,
  `cid` smallint(5) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `item_icon` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_nav` values('2',NULL,NULL,'选购中心','1','2','0','pick_out.php','top',NULL);");
E_D("replace into `hhs_nav` values('3','','0','查看购物车','1','0','0','flow.php','top',NULL);");
E_D("replace into `hhs_nav` values('4','','0','团购商品','1','20','0','group_buy.php','middle',NULL);");
E_D("replace into `hhs_nav` values('6',NULL,NULL,'标签云','1','5','6','tag_cloud.php','top',NULL);");
E_D("replace into `hhs_nav` values('7',NULL,NULL,'免责条款','1','1','0','article.php?id=1','bottom',NULL);");
E_D("replace into `hhs_nav` values('8',NULL,NULL,'隐私保护','1','2','0','article.php?id=2','bottom',NULL);");
E_D("replace into `hhs_nav` values('9',NULL,NULL,'咨询热点','1','3','0','article.php?id=3','bottom',NULL);");
E_D("replace into `hhs_nav` values('10',NULL,NULL,'联系我们','1','4','0','article.php?id=4','bottom',NULL);");
E_D("replace into `hhs_nav` values('11',NULL,NULL,'公司简介','1','5','0','article.php?id=5','bottom',NULL);");
E_D("replace into `hhs_nav` values('12',NULL,NULL,'批发方案','1','6','0','wholesale.php','bottom',NULL);");
E_D("replace into `hhs_nav` values('14',NULL,NULL,'配送方式','1','7','0','myship.php','bottom',NULL);");
E_D("replace into `hhs_nav` values('15',NULL,NULL,'留言板','1','99','0','message.php','middle',NULL);");
E_D("replace into `hhs_nav` values('18','c','4','手机通讯','0','14','0','category.php?id=5','middle',NULL);");
E_D("replace into `hhs_nav` values('21',NULL,NULL,'优惠活动','1','21','0','activity.php','middle',NULL);");
E_D("replace into `hhs_nav` values('23',NULL,NULL,'报价单','1','6','0','quotation.php','top',NULL);");
E_D("replace into `hhs_nav` values('25',NULL,NULL,'积分商城','1','24','0','exchange.php','middle',NULL);");
E_D("replace into `hhs_nav` values('26','c','3','数码配件','0','13','0','category.php?id=3','middle',NULL);");
E_D("replace into `hhs_nav` values('28','a','3','资讯中心','0','102','0','article_cat.php?id=3','middle',NULL);");

require("../../inc/footer.php");
?>