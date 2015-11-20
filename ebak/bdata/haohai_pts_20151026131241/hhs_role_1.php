<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_role`;");
E_C("CREATE TABLE `hhs_role` (
  `role_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(60) NOT NULL DEFAULT '',
  `action_list` text NOT NULL,
  `role_describe` text,
  PRIMARY KEY (`role_id`),
  KEY `user_name` (`role_name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_role` values('1','cdy','goods_manage,remove_back,cat_manage,cat_drop,attr_manage,goods_type,picture_batch,article_cat,article_manage,shopinfo_manage,shophelp_manage,article_auto,users_manage,users_drop,surplus_manage,account_manage,admin_manage,admin_drop,allot_priv,logs_manage,logs_drop,role_manage,order_os_edit,order_ps_edit,order_ss_edit,order_view,order_view_finished,repay_manage,sale_order_stats,delivery_view,back_view,bonus_manage,db_backup,db_renew','');");

require("../../inc/footer.php");
?>