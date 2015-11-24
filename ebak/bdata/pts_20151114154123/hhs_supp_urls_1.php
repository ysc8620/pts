<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_supp_urls`;");
E_C("CREATE TABLE `hhs_supp_urls` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_supp_urls` values('1',NULL);");
E_D("replace into `hhs_supp_urls` values('2',NULL);");
E_D("replace into `hhs_supp_urls` values('3',NULL);");
E_D("replace into `hhs_supp_urls` values('4',NULL);");
E_D("replace into `hhs_supp_urls` values('5',NULL);");
E_D("replace into `hhs_supp_urls` values('6',NULL);");
E_D("replace into `hhs_supp_urls` values('7',NULL);");

require("../../inc/footer.php");
?>