<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_share_info`;");
E_C("CREATE TABLE `hhs_share_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL COMMENT '用户id',
  `link_url` varchar(200) DEFAULT NULL COMMENT '链接字符串',
  `share_type` tinyint(4) DEFAULT '1' COMMENT '1 给好友 2 朋友圈 3 微博 4 qq',
  `share_status` tinyint(4) DEFAULT '1' COMMENT '1 成功 2 取消分享',
  `add_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_share_info` values('2','17','http://vshop.xakc.net/share.php?team_sign=236','1','1','1437782364');");
E_D("replace into `hhs_share_info` values('3','17','http://vshop.xakc.net/share.php?team_sign=237','1','1','1437782606');");
E_D("replace into `hhs_share_info` values('4','17','http://vshop.xakc.net/share.php?team_sign=237','1','2','1437782717');");
E_D("replace into `hhs_share_info` values('5','17','http://vshop.xakc.net/share.php?team_sign=238','1','1','1437782841');");
E_D("replace into `hhs_share_info` values('6','20','http://vshop.xakc.net/share.php?team_sign=242','1','1','1437784966');");
E_D("replace into `hhs_share_info` values('7','98','http://vshop.xakc.net/share.php?team_sign=243','1','1','1437935962');");
E_D("replace into `hhs_share_info` values('8','17','http://vshop.xakc.net/share.php?team_sign=151','1','2','1437963489');");
E_D("replace into `hhs_share_info` values('9','17','http://vshop.xakc.net/share.php?team_sign=247','1','1','1437963954');");
E_D("replace into `hhs_share_info` values('10','17','http://vshop.xakc.net/share.php?team_sign=247','1','1','1437964336');");
E_D("replace into `hhs_share_info` values('11','17','http://vshop.xakc.net/share.php?team_sign=252','1','1','1438009592');");
E_D("replace into `hhs_share_info` values('12','17','http://vshop.xakc.net/share.php?team_sign=252','1','2','1438010153');");
E_D("replace into `hhs_share_info` values('13','17','http://vshop.xakc.net/share.php?team_sign=252','1','2','1438010160');");
E_D("replace into `hhs_share_info` values('14','111','http://vshop.xakc.net/share.php?team_sign=254','1','1','1438043056');");
E_D("replace into `hhs_share_info` values('15','24','http://vshop.xakc.net/share.php?team_sign=255','1','1','1438050988');");
E_D("replace into `hhs_share_info` values('16','17','http://vshop.xakc.net/share.php?team_sign=252','1','1','1438055585');");
E_D("replace into `hhs_share_info` values('17','17','http://vshop.xakc.net/share.php?team_sign=255','1','2','1438056236');");
E_D("replace into `hhs_share_info` values('18','17','http://vshop.xakc.net/share.php?team_sign=255','1','2','1438056417');");
E_D("replace into `hhs_share_info` values('19','17','http://vshop.xakc.net/share.php?team_sign=255','1','2','1438104016');");
E_D("replace into `hhs_share_info` values('20','17','http://vshop.xakc.net/share.php?team_sign=255','1','2','1438106716');");
E_D("replace into `hhs_share_info` values('21','20','http://vshop.xakc.net/share.php?team_sign=259','1','1','1438108653');");
E_D("replace into `hhs_share_info` values('22','19','http://vshop.xakc.net/index.php','1','2','1438109364');");
E_D("replace into `hhs_share_info` values('23','20','http://vshop.xakc.net/share.php?team_sign=261','1','1','1438111540');");
E_D("replace into `hhs_share_info` values('24','20','http://vshop.xakc.net/share.php?team_sign=261','1','1','1438111656');");
E_D("replace into `hhs_share_info` values('25','120','http://vshop.xakc.net/index.php','1','1','1438119455');");
E_D("replace into `hhs_share_info` values('26','17','http://vshop.xakc.net/index.php','1','2','1438121608');");
E_D("replace into `hhs_share_info` values('27','19','http://vshop.xakc.net/index.php','1','1','1438127219');");
E_D("replace into `hhs_share_info` values('28','19','http://vshop.xakc.net/index.php','1','1','1438148009');");
E_D("replace into `hhs_share_info` values('29','19','http://vshop.xakc.net/index.php','1','1','1438286065');");
E_D("replace into `hhs_share_info` values('30','22','http://vshop.xakc.net/share.php?team_sign=286','1','1','1438307547');");
E_D("replace into `hhs_share_info` values('31','19','http://vshop.xakc.net/index.php','1','1','1438364139');");
E_D("replace into `hhs_share_info` values('32','137','http://vshop.xakc.net/share.php?team_sign=290','1','1','1438364293');");
E_D("replace into `hhs_share_info` values('33','137','http://vshop.xakc.net/share.php?team_sign=290','1','1','1438364300');");
E_D("replace into `hhs_share_info` values('34','137','http://vshop.xakc.net/index.php','1','1','1438366079');");
E_D("replace into `hhs_share_info` values('35','111','http://vshop.xakc.net/share.php?team_sign=306','1','1','1438389015');");
E_D("replace into `hhs_share_info` values('36','144','http://vshop.xakc.net/share.php?team_sign=305','1','1','1438390514');");
E_D("replace into `hhs_share_info` values('37','144','http://vshop.xakc.net/share.php?team_sign=311','1','1','1438392109');");
E_D("replace into `hhs_share_info` values('38','149','http://vshop.xakc.net/share.php?team_sign=315','2','2','1438464785');");
E_D("replace into `hhs_share_info` values('39','149','http://vshop.xakc.net/share.php?team_sign=315','1','2','1438464794');");
E_D("replace into `hhs_share_info` values('40','154','http://vshop.xakc.net/share.php?team_sign=320','2','1','1438471528');");
E_D("replace into `hhs_share_info` values('41','154','http://vshop.xakc.net/share.php?team_sign=320','2','1','1438471552');");
E_D("replace into `hhs_share_info` values('42','154','http://vshop.xakc.net/share.php?team_sign=320','1','1','1438471613');");
E_D("replace into `hhs_share_info` values('43','154','http://vshop.xakc.net/share.php?team_sign=320','1','1','1438471620');");
E_D("replace into `hhs_share_info` values('44','154','http://vshop.xakc.net/share.php?team_sign=320','1','1','1438471628');");
E_D("replace into `hhs_share_info` values('45','154','http://vshop.xakc.net/share.php?team_sign=320','1','1','1438471634');");
E_D("replace into `hhs_share_info` values('46','154','http://vshop.xakc.net/share.php?team_sign=320','1','1','1438471646');");
E_D("replace into `hhs_share_info` values('47','154','http://vshop.xakc.net/share.php?team_sign=320','1','1','1438471654');");
E_D("replace into `hhs_share_info` values('48','157','http://vshop.xakc.net/share.php?team_sign=320','1','1','1438472088');");
E_D("replace into `hhs_share_info` values('49','157','http://vshop.xakc.net/share.php?team_sign=320','1','1','1438472106');");
E_D("replace into `hhs_share_info` values('50','157','http://vshop.xakc.net/share.php?team_sign=320','1','1','1438472164');");
E_D("replace into `hhs_share_info` values('51','157','http://vshop.xakc.net/share.php?team_sign=326','1','1','1438473094');");
E_D("replace into `hhs_share_info` values('52','157','http://vshop.xakc.net/share.php?team_sign=326','1','1','1438473106');");
E_D("replace into `hhs_share_info` values('53','157','http://vshop.xakc.net/share.php?team_sign=326','1','1','1438473121');");
E_D("replace into `hhs_share_info` values('54','157','http://vshop.xakc.net/share.php?team_sign=327','1','1','1438473206');");
E_D("replace into `hhs_share_info` values('55','157','http://vshop.xakc.net/share.php?team_sign=326','1','1','1438473283');");
E_D("replace into `hhs_share_info` values('56','157','http://vshop.xakc.net/share.php?team_sign=326','1','1','1438473295');");
E_D("replace into `hhs_share_info` values('57','181','http://pintuans.xakc.net/share_pay.php?showwxpaytitle=1&id=354','1','2','1440983969');");
E_D("replace into `hhs_share_info` values('58','208','http://pts.hostadmin.com.cn/goods.php?id=1','1','2','1441662214');");
E_D("replace into `hhs_share_info` values('59','212','http://pts.hostadmin.com.cn/index.php','1','1','1441670246');");
E_D("replace into `hhs_share_info` values('60','207','http://pts.hostadmin.com.cn/share.php?team_sign=356','2','1','1441760670');");
E_D("replace into `hhs_share_info` values('61','232','http://pts.hostadmin.com.cn/share.php?team_sign=359','1','1','1442005447');");
E_D("replace into `hhs_share_info` values('62','236','http://pts.hostadmin.com.cn/share.php?team_sign=361','4','1','1442079261');");
E_D("replace into `hhs_share_info` values('63','285','http://pts.hostadmin.com.cn/share_pay.php?showwxpaytitle=1&id=367','1','1','1442870082');");
E_D("replace into `hhs_share_info` values('64','302','http://pts.hostadmin.com.cn/goods.php?id=46','1','2','1443343878');");
E_D("replace into `hhs_share_info` values('65','343','http://pts.hostadmin.com.cn/goods.php?id=37','1','1','1444417612');");
E_D("replace into `hhs_share_info` values('66','354','http://pts.hostadmin.com.cn/goods.php?id=46','1','1','1444460125');");
E_D("replace into `hhs_share_info` values('67','403','http://pts.hostadmin.com.cn/share.php?team_sign=384','2','2','1445368697');");

require("../../inc/footer.php");
?>