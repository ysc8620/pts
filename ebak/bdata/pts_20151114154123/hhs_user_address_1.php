<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_user_address`;");
E_C("CREATE TABLE `hhs_user_address` (
  `address_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `address_name` varchar(50) NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `consignee` varchar(60) NOT NULL DEFAULT '',
  `email` varchar(60) NOT NULL DEFAULT '',
  `country` smallint(5) NOT NULL DEFAULT '0',
  `province` smallint(5) NOT NULL DEFAULT '0',
  `city` smallint(5) NOT NULL DEFAULT '0',
  `district` smallint(5) NOT NULL DEFAULT '0',
  `address` varchar(120) NOT NULL DEFAULT '',
  `zipcode` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(60) NOT NULL DEFAULT '',
  `mobile` varchar(60) NOT NULL DEFAULT '',
  `sign_building` varchar(120) NOT NULL DEFAULT '',
  `best_time` varchar(120) NOT NULL DEFAULT '',
  `address_type` int(11) NOT NULL DEFAULT '0' COMMENT '1 家庭 2公司',
  PRIMARY KEY (`address_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=133 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_user_address` values('2','','3','叶先生','text@HHShop.com','1','2','52','510','通州区旗舰凯旋小区','','13588104710','','','','0');");
E_D("replace into `hhs_user_address` values('3','','6','张三','362585493@qq.com','1','2','52','500','区政府','','029-86272469','','','','0');");
E_D("replace into `hhs_user_address` values('21','','0','aaa','','1','2','52','500','aaa','','','15088888888','','','0');");
E_D("replace into `hhs_user_address` values('91','','176','庞斌','','1','24','311','2598','文艺路金色城市','','','18291829249','','','2');");
E_D("replace into `hhs_user_address` values('105','','285','哈哈哈','','1','19','263','2202','，ho h mo mr','','','138464646648','','','1');");
E_D("replace into `hhs_user_address` values('93','','181','123','','1','24','311','2598','文艺路','','','17700000000','','','2');");
E_D("replace into `hhs_user_address` values('94','','208','叶凯','','1','2','52','502','海淀区农大南路88号','','','15600604663','','','2');");
E_D("replace into `hhs_user_address` values('95','','207','孙先生','','1','31','392','3317','东港昌正名都南区','','','13567677155','','','1');");
E_D("replace into `hhs_user_address` values('96','','206','孙先生','','1','31','392','3317','昌正','','','13567677155','','','1');");
E_D("replace into `hhs_user_address` values('97','','225','果冻','','1','26','322','2723','华润路一号附一号','','','13882277510','','','2');");
E_D("replace into `hhs_user_address` values('98','','225','果冻','','1','26','322','2723','华润路一号附一号','','','13882277510','','','2');");
E_D("replace into `hhs_user_address` values('99','','232','小小妮','','1','6','76','695','黄边北路云山诗意棋乐居2栋1601','','','13560303250','','','0');");
E_D("replace into `hhs_user_address` values('100','','233','小林','','1','6','76','695','黄边北路云山诗意棋乐居2栋1601','','','13560303250','','','0');");
E_D("replace into `hhs_user_address` values('101','','236','帅哥','','1','6','79','718','MP5盛况空前可口可乐了','','','13800138000','','','2');");
E_D("replace into `hhs_user_address` values('102','','245','机会','','1','26','322','2722','一环路北2段','','','13688379663','','','1');");
E_D("replace into `hhs_user_address` values('103','','262','李三','','1','24','311','2597','西安新城区向荣巷小区','','','15802911869','','','1');");
E_D("replace into `hhs_user_address` values('104','','276','周其江','','1','16','221','1852','元和国际服装城b区14/145','','','15051788820','','','0');");
E_D("replace into `hhs_user_address` values('106','','235','陈钦城','','1','6','77','708','盛世花园','','','13725566772','','','2');");
E_D("replace into `hhs_user_address` values('107','','316','胃饿饿饿饿','','1','16','230','1943','哈哈嘎嘎嘎嘎','','','13390685998','','','1');");
E_D("replace into `hhs_user_address` values('108','','307','王煜川','','1','31','383','3229','天堂软件园微纳科技有限公司','','','13738139702','','','2');");
E_D("replace into `hhs_user_address` values('109','','325','测试','','1','6','76','693','测试地址','','','13712345612','','','1');");
E_D("replace into `hhs_user_address` values('110','','352','飞','','1','24','311','2596','程璐','','','13609164455','','','1');");
E_D("replace into `hhs_user_address` values('111','','356','张扬','','1','3','37','410','一直想','','','124646677865','','','2');");
E_D("replace into `hhs_user_address` values('112','','361','123336','','1','29','351','3004','你好','','','18935790123','','','1');");
E_D("replace into `hhs_user_address` values('113','','373','张燕华','','1','31','388','3280','万特商务中心1708','','','18058588169','','','2');");
E_D("replace into `hhs_user_address` values('114','','373','张燕华','','1','31','388','3280','万特商务中心1708','','','18058588169','','','2');");
E_D("replace into `hhs_user_address` values('115','','373','张燕华','','1','31','388','3280','万特商务中心1708','','','18058588169','','','2');");
E_D("replace into `hhs_user_address` values('116','','403','杨幂','','1','14','197','1647','川沙发垫上课','','','15856325698','','','1');");
E_D("replace into `hhs_user_address` values('117','','403','杨幂','','1','14','197','1647','川沙发垫上课','','','15856325698','','','1');");
E_D("replace into `hhs_user_address` values('118','','310','柳小勇','','1','31','388','3284','南部商务区侨商大厦1905','','','13957427176','','','0');");
E_D("replace into `hhs_user_address` values('119','','425','ke柯明国','','1','4','60','587','R','','','18030131118','','','1');");
E_D("replace into `hhs_user_address` values('120','','434','ff','','1','2','52','501','丰富','','','13620111173','','','1');");
E_D("replace into `hhs_user_address` values('121','','465','齐永东','','1','2','52','500','哈哈活该','','','13891864749','','','1');");
E_D("replace into `hhs_user_address` values('122','','472','测试','','1','10','138','1078','嗯嗯嗯','','','13186785996','','','1');");
E_D("replace into `hhs_user_address` values('123','','496','测试','','1','2','52','500','111111','','','13888888888','','','1');");
E_D("replace into `hhs_user_address` values('124','','506','王苏蕴','','1','6','77','707','1085','','','15818547788','','','1');");
E_D("replace into `hhs_user_address` values('125','','420','测试','','1','26','322','2722','西大街32号','','','13955566213','','','1');");
E_D("replace into `hhs_user_address` values('126','','321','测试','','1','2','52','501','测试','','','18081062857','','','1');");
E_D("replace into `hhs_user_address` values('127','','321','测试','','1','4','54','532','测试','','','13854785417','','','1');");
E_D("replace into `hhs_user_address` values('128','','513','啦啦啦','','1','2','52','503','本地饿觉得回去季景饿很多话说','','','12345678908','','','1');");
E_D("replace into `hhs_user_address` values('129','','519','1','','1','2','52','503','58889','','','13990021362','','','1');");
E_D("replace into `hhs_user_address` values('130','','521','床','','1','6','76','695','是的','','','18819884881','','','1');");
E_D("replace into `hhs_user_address` values('131','','402','谢先生','','1','2','52','500','哈哈','','','18682888888','','','1');");
E_D("replace into `hhs_user_address` values('132','','281','庞斌','','1','24','311','2598','文艺北路','','','18092837512','','','2');");

require("../../inc/footer.php");
?>