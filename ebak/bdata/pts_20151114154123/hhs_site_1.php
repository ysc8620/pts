<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_site`;");
E_C("CREATE TABLE `hhs_site` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `province_id` varchar(10) NOT NULL,
  `city_id` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `close` int(10) NOT NULL DEFAULT '0',
  `keywords` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `site_logo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_site` values('1','','311','西安','1','西安','','');");
E_D("replace into `hhs_site` values('2','','52','北京','1','','','');");
E_D("replace into `hhs_site` values('3','','321','上海','1','','','');");
E_D("replace into `hhs_site` values('4','','343','天津','1','','','');");

require("../../inc/footer.php");
?>