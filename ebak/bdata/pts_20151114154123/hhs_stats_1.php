<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_stats`;");
E_C("CREATE TABLE `hhs_stats` (
  `access_time` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `visit_times` smallint(5) unsigned NOT NULL DEFAULT '1',
  `browser` varchar(60) NOT NULL DEFAULT '',
  `system` varchar(20) NOT NULL DEFAULT '',
  `language` varchar(20) NOT NULL DEFAULT '',
  `area` varchar(30) NOT NULL DEFAULT '',
  `referer_domain` varchar(100) NOT NULL DEFAULT '',
  `referer_path` varchar(200) NOT NULL DEFAULT '',
  `access_url` varchar(255) NOT NULL DEFAULT '',
  KEY `access_time` (`access_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `hhs_stats` values('1417478060','222.90.94.176','1','Internet Explorer 8.0','Windows XP','zh-cn','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1417478588','101.226.65.107','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://www.wendangxiazai.com','/b-b1c923110b4e767f5acfce8e-6.html','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1417478816','180.153.214.152','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/hhshop/search.php');");
E_D("replace into `hhs_stats` values('1417478954','222.90.94.176','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1417546228','219.144.242.191','1','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1417549979','219.144.242.191','2','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1417566048','219.144.242.191','3','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1417632242','113.132.25.111','2','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1417641050','113.132.25.111','4','Safari 537.36','Windows XP','zh-CN,zh','IANA','','','/woquman/index.php');");
E_D("replace into `hhs_stats` values('1417642637','113.132.25.111','1','Safari 537.36','Windows XP','zh-CN,zh','IANA','','','/woquman/index.php');");
E_D("replace into `hhs_stats` values('1417643915','112.64.235.252','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/woquman/index.php');");
E_D("replace into `hhs_stats` values('1417644237','113.132.25.111','3','Safari 537.36','Windows NT','zh-CN,zh','IANA','http://test.xakc.net','/hhshop/sysadm/topic.php?act=list','/hhshop/topic.php');");
E_D("replace into `hhs_stats` values('1417645146','113.132.25.111','1','FireFox 33.0','Windows XP','zh-cn,zh','IANA','','','/woquman/index.php');");
E_D("replace into `hhs_stats` values('1417645296','180.153.201.64','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/sysadm/goods.php?act=list&extension_code=virtual_card','/woquman/goods.php');");
E_D("replace into `hhs_stats` values('1417645632','180.153.206.19','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/index.php','/woquman/goods.php');");
E_D("replace into `hhs_stats` values('1417645705','112.64.235.86','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.xakc.net','/woquman/flow.php?step=login','/woquman/flow.php');");
E_D("replace into `hhs_stats` values('1417645751','180.153.206.33','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/goods.php?id=30','/woquman/goods.php');");
E_D("replace into `hhs_stats` values('1417645845','101.226.51.229','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.xakc.net','/woquman/flow.php?step=cart','/woquman/index.php');");
E_D("replace into `hhs_stats` values('1417645857','101.226.89.116','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.xakc.net','/woquman/goods.php?id=30','/woquman/flow.php');");
E_D("replace into `hhs_stats` values('1417645913','180.153.214.189','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/user.php?act=register','/woquman/user.php');");
E_D("replace into `hhs_stats` values('1417645922','101.226.51.229','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.xakc.net','/woquman/user.php?act=register','/woquman/user.php');");
E_D("replace into `hhs_stats` values('1417645925','180.153.201.64','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/sysadm/goods.php?act=list&extension_code=virtual_card','/woquman/goods.php');");
E_D("replace into `hhs_stats` values('1417645958','112.65.193.15','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.xakc.net','/woquman/user.php','/woquman/user.php');");
E_D("replace into `hhs_stats` values('1417646021','222.73.77.55','1','Unknow browser','Unknown','zh-cn, zh','','http://test.xakc.net','/woquman/goods.php?id=9','/woquman/captcha.php');");
E_D("replace into `hhs_stats` values('1417646198','101.226.66.174','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.xakc.net','/woquman/user.php?act=order_list','/woquman/user.php');");
E_D("replace into `hhs_stats` values('1417646372','180.153.206.31','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/user.php?act=address_list','/woquman/user.php');");
E_D("replace into `hhs_stats` values('1417646550','180.153.163.208','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/user.php','/woquman/user.php');");
E_D("replace into `hhs_stats` values('1417646888','101.226.66.179','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.xakc.net','/woquman/goods.php?id=9','/woquman/goods.php');");
E_D("replace into `hhs_stats` values('1417646911','180.153.214.199','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/goods.php?id=9','/woquman/captcha.php');");
E_D("replace into `hhs_stats` values('1417647071','180.153.163.209','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/goods.php?id=9','/woquman/goods.php');");
E_D("replace into `hhs_stats` values('1417647173','180.153.206.17','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/index.php','/woquman/user.php');");
E_D("replace into `hhs_stats` values('1417649071','113.132.25.111','2','Safari 537.36','Windows XP','zh-CN,zh','IANA','','','/woquman/index.php');");
E_D("replace into `hhs_stats` values('1417650124','113.132.25.111','1','FireFox 33.0','Windows XP','zh-cn,zh','IANA','','','/woquman/index.php');");
E_D("replace into `hhs_stats` values('1417650233','180.153.201.66','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/goods.php?id=30','/woquman/goods.php');");
E_D("replace into `hhs_stats` values('1417650581','112.64.235.90','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.xakc.net','/woquman/user.php?act=order_list','/woquman/user.php');");
E_D("replace into `hhs_stats` values('1417650659','101.226.66.173','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.xakc.net','/woquman/flow.php?step=checkout','/woquman/flow.php');");
E_D("replace into `hhs_stats` values('1417650665','101.226.65.106','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.xakc.net','/woquman/flow.php?step=checkout','/woquman/flow.php');");
E_D("replace into `hhs_stats` values('1417650775','112.64.235.250','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.xakc.net','/woquman/goods.php?id=30','/woquman/captcha.php');");
E_D("replace into `hhs_stats` values('1417650816','180.153.214.192','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/flow.php?step=checkout','/woquman/flow.php');");
E_D("replace into `hhs_stats` values('1417650820','112.65.193.13','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.xakc.net','/woquman/flow.php?step=cart','/woquman/flow.php');");
E_D("replace into `hhs_stats` values('1417650834','180.153.163.186','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/goods.php?id=9','/woquman/goods.php');");
E_D("replace into `hhs_stats` values('1417650961','180.153.201.66','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/user.php','/woquman/user.php');");
E_D("replace into `hhs_stats` values('1417651438','180.153.201.215','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/','/woquman/message.php');");
E_D("replace into `hhs_stats` values('1417651449','101.226.66.180','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.xakc.net','/woquman/message.php','/woquman/captcha.php');");
E_D("replace into `hhs_stats` values('1417651585','180.153.163.208','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/','/woquman/category.php');");
E_D("replace into `hhs_stats` values('1417651631','112.65.193.13','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.xakc.net','/woquman/flow.php?step=cart','/woquman/flow.php');");
E_D("replace into `hhs_stats` values('1417651939','180.153.214.152','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/index.php','/woquman/article.php');");
E_D("replace into `hhs_stats` values('1417651967','112.64.235.248','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.xakc.net','/woquman/index.php','/woquman/activity.php');");
E_D("replace into `hhs_stats` values('1417655014','180.153.206.19','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/goods.php?id=30','/woquman/captcha.php');");
E_D("replace into `hhs_stats` values('1417655199','180.153.211.190','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/goods.php?id=30','/woquman/goods.php');");
E_D("replace into `hhs_stats` values('1417655299','112.64.235.248','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.xakc.net','/woquman/message.php','/woquman/captcha.php');");
E_D("replace into `hhs_stats` values('1417655316','101.226.33.202','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.xakc.net','/woquman/index.php','/woquman/group_buy.php');");
E_D("replace into `hhs_stats` values('1417655640','112.64.235.246','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.xakc.net','/woquman/goods.php?id=30','/woquman/captcha.php');");
E_D("replace into `hhs_stats` values('1417655864','180.153.212.13','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/index.php','/woquman/article.php');");
E_D("replace into `hhs_stats` values('1417656271','180.153.163.187','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/article.php?id=1','/woquman/article.php');");
E_D("replace into `hhs_stats` values('1417720503','61.185.206.21','1','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1417728489','61.185.206.21','2','FireFox 33.0','Windows XP','zh-cn,zh','','','','/woquman/index.php');");
E_D("replace into `hhs_stats` values('1417728520','61.185.206.21','5','Safari 537.36','Windows XP','zh-CN,zh','','','','/woquman/index.php');");
E_D("replace into `hhs_stats` values('1417736378','61.185.206.21','3','FireFox 33.0','Windows XP','zh-cn,zh','','','','/woquman/index.php');");
E_D("replace into `hhs_stats` values('1417740332','61.185.206.21','4','FireFox 33.0','Windows XP','zh-cn,zh','','http://test.xakc.net','/woquman/sysadm/captcha_manage.php?act=main','/woquman/captcha.php');");
E_D("replace into `hhs_stats` values('1417848580','222.41.112.171','1','FireFox 33.0','Windows XP','zh-cn,zh','','','','/woquman/index.php');");
E_D("replace into `hhs_stats` values('1417848603','101.226.33.223','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/woquman/index.php');");
E_D("replace into `hhs_stats` values('1417896309','222.41.112.171','1','FireFox 33.0','Windows XP','zh-cn,zh','','','','/woquman/index.php');");
E_D("replace into `hhs_stats` values('1417930468','222.41.112.171','1','Safari 537.36','Windows XP','zh-CN,zh','','','','/woquman/index.php');");
E_D("replace into `hhs_stats` values('1417930489','222.41.112.171','1','FireFox 33.0','Windows XP','zh-cn,zh','','','','/woquman/index.php');");
E_D("replace into `hhs_stats` values('1417972522','219.144.227.87','5','FireFox 33.0','Windows XP','zh-cn,zh','','','','/woquman/index.php');");
E_D("replace into `hhs_stats` values('1417972973','112.65.193.13','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.xakc.net','/woquman/goods.php?id=30','/woquman/captcha.php');");
E_D("replace into `hhs_stats` values('1417973077','180.153.214.188','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/goods.php?id=30','/woquman/goods.php');");
E_D("replace into `hhs_stats` values('1417973083','180.153.201.217','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/woquman/sysadm/virtual_goods.php?act=list','/woquman/goods.php');");
E_D("replace into `hhs_stats` values('1417975548','219.144.227.87','6','FireFox 33.0','Windows XP','zh-cn,zh','','','','/woquman/index.php');");
E_D("replace into `hhs_stats` values('1417998905','112.254.33.121','1','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1418153832','222.90.20.141','7','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1418759868','222.90.94.16','37','Safari 537.36','Windows XP','zh-CN,zh','','','','/jiuzhuang/index.php');");
E_D("replace into `hhs_stats` values('1418943721','219.144.242.148','49','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1419011573','117.35.161.45','54','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1419738197','111.155.114.162','1','Safari 537.36','Windows XP','zh-CN,zh','IANA','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1420478510','117.36.69.116','31','Safari 537.36','Windows NT','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1420485145','117.36.69.116','32','Safari 537.36','Windows NT','zh-CN,zh','','http://test.xakc.net','/hhshop/','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1420495683','117.36.69.116','33','Safari 537.36','Windows NT','zh-CN,zh','','http://test.xakc.net','/hhshop/index.php','/hhshop/goods.php');");
E_D("replace into `hhs_stats` values('1420564848','222.90.21.18','99','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1420565088','222.90.21.18','100','Safari 537.36','Windows XP','zh-CN,zh','','','','/taisheng/index.php');");
E_D("replace into `hhs_stats` values('1420567873','222.90.21.18','101','Safari 537.36','Windows XP','zh-CN,zh','','','','/taisheng/index.php');");
E_D("replace into `hhs_stats` values('1420571954','222.90.21.18','103','Safari 537.36','Windows XP','zh-CN,zh','','','','/taisheng/index.php');");
E_D("replace into `hhs_stats` values('1420583777','222.90.21.18','106','Safari 537.36','Windows XP','zh-CN,zh','','','','/taisheng/index.php');");
E_D("replace into `hhs_stats` values('1420586459','222.90.21.18','108','Safari 537.36','Windows XP','zh-CN,zh','','','','/taisheng/index.php');");
E_D("replace into `hhs_stats` values('1420605935','222.90.8.141','113','Safari 537.36','Windows XP','zh-CN,zh','','','','/taisheng/index.php');");
E_D("replace into `hhs_stats` values('1420606967','222.90.8.141','2','Safari 537.36','Windows XP','zh-CN,zh','','','','/taisheng/index.php');");
E_D("replace into `hhs_stats` values('1420650861','222.90.8.141','3','Safari 537.36','Windows XP','zh-CN,zh','','','','/taisheng/index.php');");
E_D("replace into `hhs_stats` values('1420653520','222.90.8.141','5','Safari 537.36','Windows XP','zh-CN,zh','','','','/taisheng/index.php');");
E_D("replace into `hhs_stats` values('1420665756','222.90.8.141','6','Safari 537.36','Windows XP','zh-CN,zh','','','','/taisheng/index.php');");
E_D("replace into `hhs_stats` values('1420671855','222.90.8.141','8','Safari 537.36','Windows XP','zh-CN,zh','','','','/taisheng/index.php');");
E_D("replace into `hhs_stats` values('1420673520','222.90.8.141','10','Safari 537.36','Windows XP','zh-CN,zh','','','','/taisheng/index.php');");
E_D("replace into `hhs_stats` values('1420678979','222.90.8.141','12','Safari 537.36','Windows XP','zh-CN,zh','','','','/taisheng/index.php');");
E_D("replace into `hhs_stats` values('1420680768','222.90.8.141','15','Safari 537.36','Windows XP','zh-CN,zh','','','','/taisheng/index.php');");
E_D("replace into `hhs_stats` values('1420681823','222.90.8.141','17','Safari 537.36','Windows XP','zh-CN,zh','','','','/taisheng/index.php');");
E_D("replace into `hhs_stats` values('1420682516','222.90.8.141','18','Safari 537.36','Windows XP','zh-CN,zh','','','','/taisheng/index.php');");
E_D("replace into `hhs_stats` values('1420683257','222.90.8.141','20','Safari 537.36','Windows XP','zh-CN,zh','','','','/taisheng/index.php');");
E_D("replace into `hhs_stats` values('1420683258','222.90.8.141','20','Safari 537.36','Windows XP','zh-CN,zh','','','','/taisheng/index.php');");
E_D("replace into `hhs_stats` values('1420737444','61.185.206.110','22','Safari 537.36','Windows XP','zh-CN,zh','','','','/taisheng/index.php');");
E_D("replace into `hhs_stats` values('1420746487','61.185.206.110','26','Safari 537.36','Windows XP','zh-CN,zh','','','','/taisheng/index.php');");
E_D("replace into `hhs_stats` values('1420750337','61.185.206.110','27','Safari 537.36','Windows XP','zh-CN,zh','','http://test.xakc.net','/taisheng/','/taisheng/user.php');");
E_D("replace into `hhs_stats` values('1421377207','117.36.44.37','115','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1422558726','219.144.249.37','230','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1424040463','219.144.142.82','386','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1424908041','222.90.165.225','398','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1424910331','117.22.179.138','19','FireFox 34.0','Windows XP','zh-cn,zh','','','','/hhshop/mobile/index.php');");
E_D("replace into `hhs_stats` values('1424910343','117.22.179.138','1','Safari 533.1','Linux','zh-CN','','','','/hhshop/mobile/index.php');");
E_D("replace into `hhs_stats` values('1424910366','117.22.179.138','1','Safari 537.36','Linux','zh-CN','','','','/hhshop/mobile/index.php');");
E_D("replace into `hhs_stats` values('1424910395','117.22.179.138','2','Safari 537.36','Linux','zh-CN','','http://test.xakc.net','/hhshop/mobile/index.php','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1424910396','117.22.179.138','3','Safari 537.36','Linux','zh-CN','','http://test.xakc.net','/hhshop/mobile/index.php','/hhshop/mobile/index.php');");
E_D("replace into `hhs_stats` values('1424910399','117.22.179.138','4','Safari 537.36','Linux','zh-CN','','http://test.xakc.net','/hhshop/mobile/','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1424910399','117.22.179.138','5','Safari 537.36','Linux','zh-CN','','http://test.xakc.net','/hhshop/mobile/','/hhshop/mobile/index.php');");
E_D("replace into `hhs_stats` values('1424910466','112.65.193.16','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/hhshop/mobile/index.php');");
E_D("replace into `hhs_stats` values('1424910689','117.22.179.138','6','Safari 537.36','Linux','zh-CN','','http://test.xakc.net','/hhshop/mobile/index.php','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1424910689','117.22.179.138','7','Safari 537.36','Linux','zh-CN','','http://test.xakc.net','/hhshop/mobile/index.php','/hhshop/mobile/index.php');");
E_D("replace into `hhs_stats` values('1424910899','117.22.179.138','401','Safari 537.36','Windows XP','zh-CN,zh','','http://test.xakc.net','/hhshop/mobile/exchange.php?act=buy','/hhshop/mobile/exchange.php');");
E_D("replace into `hhs_stats` values('1424911140','180.153.163.205','1','Safari 534.30','Linux','en,*','[δ֪IP0801]','','','/hhshop/mobile/index.php');");
E_D("replace into `hhs_stats` values('1424911248','117.22.179.138','4','FireFox 35.0','Windows XP','zh-cn,zh','','','','/hhshop/mobile/exchange.php');");
E_D("replace into `hhs_stats` values('1424911266','117.22.179.138','1','Safari 533.1','Linux','zh-CN','','','','/hhshop/mobile/exchange.php');");
E_D("replace into `hhs_stats` values('1424911581','117.22.179.138','1','FireFox 35.0','Windows XP','zh-cn,zh','','','','/hhshop/mobile/exchange.php');");
E_D("replace into `hhs_stats` values('1424911927','112.64.235.247','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/hhshop/mobile/exchange.php');");
E_D("replace into `hhs_stats` values('1424912076','180.153.163.205','1','Safari 534.30','Linux','en,*','[δ֪IP0801]','','','/hhshop/mobile/exchange.php');");
E_D("replace into `hhs_stats` values('1424912203','117.22.179.138','402','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1424971669','117.22.179.138','1','FireFox 35.0','Windows XP','zh-cn,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1424977907','117.22.179.214','414','Safari 537.36','Windows XP','zh-CN,zh','','','','/nba/index.php');");
E_D("replace into `hhs_stats` values('1425078661','117.22.188.137','433','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1425158011','222.90.94.8','436','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1425178864','222.90.94.8','114','FireFox 35.0','Windows NT','zh-cn,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1426113209','124.114.220.187','463','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1426114611','101.226.103.69','1','Unknow browser','Unknown','','IANA','','','/hhshop/wechat/weixin.php');");
E_D("replace into `hhs_stats` values('1426114614','101.226.103.69','1','Unknow browser','Unknown','','IANA','','','/hhshop/wechat/weixin.php');");
E_D("replace into `hhs_stats` values('1426206989','117.22.178.202','466','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1426460152','222.90.18.212','468','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1426531881','117.35.160.227','472','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1427052422','219.145.42.92','476','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1427053548','123.198.203.231','1','Unknow browser','Windows NT','ja-JP','APNIC','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1427053811','219.145.42.92','477','Safari 537.36','Windows XP','zh-CN,zh','','','','/ahy/index.php');");
E_D("replace into `hhs_stats` values('1427131639','219.145.42.92','479','Safari 537.36','Windows XP','zh-CN,zh','','','','/nfgc/index.php');");
E_D("replace into `hhs_stats` values('1427390783','222.90.165.103','485','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1427497735','117.35.160.19','487','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1428344205','222.90.232.203','1','Safari 537.36','Windows NT','zh-CN,zh','','http://www.900nz.com','/sysadm/friend_link.php?act=list','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1428964687','183.167.162.173','4','Safari 537.36','Windows XP','zh-CN,zh','[δ֪IP0801]','http://test.xakc.net','/ahy/index.php','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1430176751','117.22.189.5','544','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1430763301','117.22.245.36','1','FireFox 37.0','Windows NT','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1430765814','117.22.245.36','2','FireFox 37.0','Windows NT','zh-CN,zh','','http://test.xakc.net','/hhshop/category.php?id=1','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1430766820','222.90.232.203','1','Safari 537.36','Windows NT','zh-CN,zh','','http://cga.xakc.net','/sysadm/friend_link.php?act=list','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1430776188','222.90.232.203','1','FireFox 37.0','Windows NT','zh-CN,zh','','http://www.900nong.com','/sysadm/friend_link.php?act=list','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1430783486','61.185.200.122','1','FireFox 37.0','Windows NT','zh-CN,zh','','http://test.xakc.net','/hhshop/sysadm/goods_booking.php?act=list_all','/hhshop/goods.php');");
E_D("replace into `hhs_stats` values('1430791759','61.185.200.122','553','Safari 537.36','Windows XP','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1431992065','117.35.161.28','3','FireFox 37.0','Windows NT','zh-CN,zh','','','','/hhshop/index.php');");
E_D("replace into `hhs_stats` values('1431992076','112.64.235.90','1','Safari 537.36','Linux','zh-cn, zh','IANA','http://test.xakc.net','/hhshop/article.php?id=1','/hhshop/article.php');");
E_D("replace into `hhs_stats` values('1431992090','180.153.201.214','1','Safari 537.36','Linux','zh-cn, zh','[δ֪IP0801]','http://test.xakc.net','/hhshop/article.php?id=5','/hhshop/wholesale.php');");
E_D("replace into `hhs_stats` values('1431992884','101.226.33.205','1','Safari 537.36','Linux','zh-cn, zh','IANA','http://test.xakc.net','/hhshop/','/hhshop/article.php');");
E_D("replace into `hhs_stats` values('1431992892','101.226.51.228','1','Safari 537.36','Linux','zh-cn, zh','IANA','http://test.xakc.net','/hhshop/article.php?id=2','/hhshop/article.php');");
E_D("replace into `hhs_stats` values('1432496922','117.36.68.13','1','Safari 537.36','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `hhs_stats` values('1432506628','117.22.188.31','2','Safari 537.36','Windows XP','zh-CN,zh','','','','/index.php');");
E_D("replace into `hhs_stats` values('1432510174','127.0.0.1','27','Safari 537.36','Windows XP','zh-CN,zh','LAN','','','/haohaios/index.php');");
E_D("replace into `hhs_stats` values('1432512588','127.0.0.1','28','Safari 537.36','Windows XP','zh-CN,zh','LAN','','','/haohaios/index.php');");
E_D("replace into `hhs_stats` values('1432660035','127.0.0.1','29','Safari 537.36','Windows XP','zh-CN,zh','LAN','','','/haohaios/index.php');");
E_D("replace into `hhs_stats` values('1432835713','127.0.0.1','30','Safari 537.36','Windows XP','zh-CN,zh','LAN','','','/haohaios/index.php');");
E_D("replace into `hhs_stats` values('1432862426','127.0.0.1','31','Safari 537.36','Windows XP','zh-CN,zh','LAN','','','/haohaios/index.php');");
E_D("replace into `hhs_stats` values('1433101393','127.0.0.1','32','Safari 537.36','Windows XP','zh-CN,zh','LAN','','','/haohaios/index.php');");
E_D("replace into `hhs_stats` values('1433110539','127.0.0.1','33','Safari 537.36','Windows XP','zh-CN,zh','LAN','','','/haohaios/mobile/index.php');");
E_D("replace into `hhs_stats` values('1433111277','127.0.0.1','34','Safari 537.36','Windows XP','zh-CN,zh','LAN','http://localhost','/haohaios/mobile/user.php?act=logout','/haohaios/mobile/index.php');");
E_D("replace into `hhs_stats` values('1433299970','127.0.0.1','35','Safari 537.36','Windows XP','zh-CN,zh','LAN','','','/haohaios/mobile/index.php');");
E_D("replace into `hhs_stats` values('1433869665','127.0.0.1','36','Safari 537.36','Windows XP','zh-CN,zh','LAN','http://localhost','/','/haohaios/index.php');");
E_D("replace into `hhs_stats` values('1433874359','127.0.0.1','37','Safari 537.36','Windows XP','zh-CN,zh','LAN','http://localhost','/','/haohaios/index.php');");

require("../../inc/footer.php");
?>