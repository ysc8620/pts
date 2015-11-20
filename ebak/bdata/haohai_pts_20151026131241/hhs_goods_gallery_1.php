<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_goods_gallery`;");
E_C("CREATE TABLE `hhs_goods_gallery` (
  `img_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `img_url` varchar(255) NOT NULL DEFAULT '',
  `img_desc` varchar(255) NOT NULL DEFAULT '',
  `thumb_url` varchar(255) NOT NULL DEFAULT '',
  `img_original` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`img_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_goods_gallery` values('46','1','images/201507/goods_img/1_P_1436320263055.jpg','','images/201507/thumb_img/1_thumb_P_1436320263096.jpg','images/201507/source_img/1_P_1436320263792.jpg');");
E_D("replace into `hhs_goods_gallery` values('48','39','images/201507/goods_img/39_P_1437605266200.jpg','','images/201507/thumb_img/39_thumb_P_1437605266386.jpg','images/201507/source_img/39_P_1437605266432.jpg');");
E_D("replace into `hhs_goods_gallery` values('60','1','images/201507/goods_img/1_P_1438049105695.jpg','','images/201507/thumb_img/1_thumb_P_1438049105764.jpg','images/201507/source_img/1_P_1438049105088.jpg');");
E_D("replace into `hhs_goods_gallery` values('52','40','images/201507/goods_img/40_P_1437605529286.jpg','','images/201507/thumb_img/40_thumb_P_1437605529877.jpg','images/201507/source_img/40_P_1437605529050.jpg');");
E_D("replace into `hhs_goods_gallery` values('53','41','images/201507/goods_img/41_P_1437623437345.jpg','','images/201507/thumb_img/41_thumb_P_1437623437025.jpg','images/201507/source_img/41_P_1437623437180.jpg');");
E_D("replace into `hhs_goods_gallery` values('54','42','images/201507/goods_img/42_P_1437623748747.jpg','','images/201507/thumb_img/42_thumb_P_1437623748674.jpg','images/201507/source_img/42_P_1437623748611.jpg');");
E_D("replace into `hhs_goods_gallery` values('55','43','images/201507/goods_img/43_P_1437623807747.jpg','','images/201507/thumb_img/43_thumb_P_1437623807178.jpg','images/201507/source_img/43_P_1437623807544.jpg');");
E_D("replace into `hhs_goods_gallery` values('56','44','images/201507/goods_img/44_P_1437623942737.jpg','','images/201507/thumb_img/44_thumb_P_1437623942727.jpg','images/201507/source_img/44_P_1437623942379.jpg');");
E_D("replace into `hhs_goods_gallery` values('57','45','images/201507/goods_img/45_P_1437624172368.jpg','','images/201507/thumb_img/45_thumb_P_1437624172288.jpg','images/201507/source_img/45_P_1437624172271.jpg');");
E_D("replace into `hhs_goods_gallery` values('67','46','images/201509/goods_img/46_P_1442426990795.png','','images/201509/thumb_img/46_thumb_P_1442426990059.jpg','images/201509/source_img/46_P_1442426990127.png');");
E_D("replace into `hhs_goods_gallery` values('59','47','images/201507/goods_img/47_P_1437624459580.jpg','','images/201507/thumb_img/47_thumb_P_1437624459538.jpg','images/201507/source_img/47_P_1437624459361.jpg');");
E_D("replace into `hhs_goods_gallery` values('61','55','/business/uploads/465/20150831120548qobofknk.png','','/business/uploads/465/20150831120548qobofknk.png','/business/uploads/465/20150831120548qobofknk.png');");
E_D("replace into `hhs_goods_gallery` values('62','55','/business/uploads/465/20150831120606cumfsqfi.png','','/business/uploads/465/20150831120606cumfsqfi.png','/business/uploads/465/20150831120606cumfsqfi.png');");
E_D("replace into `hhs_goods_gallery` values('63','57','/business/uploads/465/20150831145404wpcvqnxn.png','','/business/uploads/465/20150831145404wpcvqnxn.png','/business/uploads/465/20150831145404wpcvqnxn.png');");
E_D("replace into `hhs_goods_gallery` values('64','57','/business/uploads/465/20150831145432liszsudw.png','','/business/uploads/465/20150831145432liszsudw.png','/business/uploads/465/20150831145432liszsudw.png');");
E_D("replace into `hhs_goods_gallery` values('65','57','/business/uploads/465/20150831145458xndfzejz.png','','/business/uploads/465/20150831145458xndfzejz.png','/business/uploads/465/20150831145458xndfzejz.png');");
E_D("replace into `hhs_goods_gallery` values('66','58','images/201509/goods_img/58_P_1441906633344.jpg','','images/201509/thumb_img/58_thumb_P_1441906633191.jpg','images/201509/source_img/58_P_1441906633968.jpg');");
E_D("replace into `hhs_goods_gallery` values('68','46','images/201509/goods_img/46_P_1442426990105.jpg','','images/201509/thumb_img/46_thumb_P_1442426990680.jpg','images/201509/source_img/46_P_1442426990262.jpg');");
E_D("replace into `hhs_goods_gallery` values('69','37','images/201509/goods_img/37_P_1442427153527.jpg','','images/201509/thumb_img/37_thumb_P_1442427153683.jpg','images/201509/source_img/37_P_1442427153312.jpg');");
E_D("replace into `hhs_goods_gallery` values('70','37','images/201509/goods_img/37_P_1442427154869.jpg','','images/201509/thumb_img/37_thumb_P_1442427154080.jpg','images/201509/source_img/37_P_1442427154994.jpg');");
E_D("replace into `hhs_goods_gallery` values('71','37','images/201509/goods_img/37_P_1442427154838.jpg','','images/201509/thumb_img/37_thumb_P_1442427154215.jpg','images/201509/source_img/37_P_1442427154733.jpg');");
E_D("replace into `hhs_goods_gallery` values('72','61','/business/uploads/463/20150928164324sdtojyok.png','','/business/uploads/463/20150928164324sdtojyok.png','/business/uploads/463/20150928164324sdtojyok.png');");
E_D("replace into `hhs_goods_gallery` values('73','61','/business/uploads/463/20150928164324dkqfntkt.png','','/business/uploads/463/20150928164324dkqfntkt.png','/business/uploads/463/20150928164324dkqfntkt.png');");
E_D("replace into `hhs_goods_gallery` values('74','61','/business/uploads/463/20150928164324ycdmxcbi.png','','/business/uploads/463/20150928164324ycdmxcbi.png','/business/uploads/463/20150928164324ycdmxcbi.png');");
E_D("replace into `hhs_goods_gallery` values('75','61','/business/uploads/463/20150928164325afuixcfb.png','','/business/uploads/463/20150928164325afuixcfb.png','/business/uploads/463/20150928164325afuixcfb.png');");
E_D("replace into `hhs_goods_gallery` values('76','61','/business/uploads/463/20150928164325pkgyrtkw.png','','/business/uploads/463/20150928164325pkgyrtkw.png','/business/uploads/463/20150928164325pkgyrtkw.png');");
E_D("replace into `hhs_goods_gallery` values('77','61','/business/uploads/463/20150928164325ayhgmuwo.png','','/business/uploads/463/20150928164325ayhgmuwo.png','/business/uploads/463/20150928164325ayhgmuwo.png');");

require("../../inc/footer.php");
?>