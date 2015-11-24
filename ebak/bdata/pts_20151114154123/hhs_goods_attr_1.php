<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_goods_attr`;");
E_C("CREATE TABLE `hhs_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `attr_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `attr_value` text NOT NULL,
  `attr_price` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=261 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_goods_attr` values('254','61','211','aadsd','0');");
E_D("replace into `hhs_goods_attr` values('255','60','212','规格1','');");
E_D("replace into `hhs_goods_attr` values('256','60','212','规格2','');");
E_D("replace into `hhs_goods_attr` values('257','60','212','规格3','');");
E_D("replace into `hhs_goods_attr` values('258','46','212','规格1','');");
E_D("replace into `hhs_goods_attr` values('259','46','212','规格2','');");
E_D("replace into `hhs_goods_attr` values('260','46','212','规格3','');");

require("../../inc/footer.php");
?>