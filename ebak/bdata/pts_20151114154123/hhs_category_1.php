<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_category`;");
E_C("CREATE TABLE `hhs_category` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `template_file` varchar(50) NOT NULL DEFAULT '',
  `measure_unit` varchar(15) NOT NULL DEFAULT '',
  `show_in_nav` tinyint(1) NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `grade` tinyint(4) NOT NULL DEFAULT '0',
  `filter_attr` varchar(255) NOT NULL DEFAULT '0',
  `cat_img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_category` values('1','水果','','','0','1','','','0','','1','0','0','images/201511/1447443179544287450.jpg');");
E_D("replace into `hhs_category` values('45','干果','','','0','2','','','0','','1','0','0','images/201511/1447443210512633781.jpg');");
E_D("replace into `hhs_category` values('47','rrr','','','45','0','','','0','','0','0','0',NULL);");
E_D("replace into `hhs_category` values('48','好果','','','0','3','','','0','','1','0','0','images/201511/1447443226863184410.jpg');");
E_D("replace into `hhs_category` values('49','水果1','','','1','50','','','0','','1','0','0',NULL);");
E_D("replace into `hhs_category` values('50','水果2','','','1','50','','','0','','1','0','0',NULL);");
E_D("replace into `hhs_category` values('51','水果3','','','1','50','','','0','','1','0','0',NULL);");
E_D("replace into `hhs_category` values('52','水果4','','','1','50','','','0','','1','0','0',NULL);");

require("../../inc/footer.php");
?>