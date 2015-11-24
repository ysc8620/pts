<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_suppliers_accounts_log`;");
E_C("CREATE TABLE `hhs_suppliers_accounts_log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `add_time` int(11) NOT NULL,
  `admin_id` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_suppliers_accounts_log` values('1','1442183753','1');");
E_D("replace into `hhs_suppliers_accounts_log` values('2','1443389952','1');");
E_D("replace into `hhs_suppliers_accounts_log` values('3','1446059897','1');");
E_D("replace into `hhs_suppliers_accounts_log` values('4','1446419175','1');");
E_D("replace into `hhs_suppliers_accounts_log` values('5','1447117438','1');");

require("../../inc/footer.php");
?>