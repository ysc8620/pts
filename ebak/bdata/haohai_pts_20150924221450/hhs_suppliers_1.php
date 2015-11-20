<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_suppliers`;");
E_C("CREATE TABLE `hhs_suppliers` (
  `suppliers_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `suppliers_name` varchar(255) DEFAULT NULL,
  `suppliers_desc` mediumtext,
  `is_check` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `qq` varchar(30) NOT NULL,
  `city_id` varchar(10) NOT NULL,
  `province_id` varchar(10) NOT NULL,
  `supp_logo` varchar(100) NOT NULL,
  `supp_banner` varchar(100) NOT NULL,
  `district_id` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `announcement` varchar(255) NOT NULL,
  `rank_id` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `business_license` varchar(100) NOT NULL,
  `cards` varchar(100) NOT NULL,
  `show_type` int(10) NOT NULL,
  `business_scope` varchar(100) NOT NULL COMMENT '组织机构代码证',
  `map_info` varchar(30) NOT NULL,
  `real_name` varchar(30) NOT NULL,
  `identification_card` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `business_license_number` varchar(100) NOT NULL,
  `certificate` varchar(100) NOT NULL COMMENT '税务登记证',
  `check_desc` varchar(255) NOT NULL,
  `phone1` varchar(30) NOT NULL,
  `email1` varchar(30) NOT NULL,
  `is_top` int(10) NOT NULL DEFAULT '0',
  `sort_order` int(10) NOT NULL DEFAULT '0',
  `is_delete` int(10) NOT NULL DEFAULT '0',
  `is_oneshow` int(10) NOT NULL DEFAULT '0',
  `is_twoshow` int(10) NOT NULL DEFAULT '0',
  `comprehensive_score` int(10) NOT NULL DEFAULT '0' COMMENT '综合',
  `description_score` int(10) NOT NULL DEFAULT '0' COMMENT '描述',
  `service_score` int(10) NOT NULL DEFAULT '0' COMMENT '服务',
  `delivery_score` int(10) NOT NULL DEFAULT '0' COMMENT '发货',
  `factory_authorized` text NOT NULL,
  `url_name` varchar(100) NOT NULL COMMENT '二级域名',
  `supp_type` tinyint(1) NOT NULL COMMENT '商家类型(0默认商家/1个人商家/2厂家商家)',
  `supp_type_id` int(10) NOT NULL COMMENT '个人ID或厂家ID',
  `recommend_person` varchar(25) NOT NULL COMMENT '推荐人',
  `recommend_supp` varchar(25) NOT NULL COMMENT '推荐商家',
  `add_time` varchar(15) NOT NULL COMMENT '添加时间',
  `shopowner_phone` varchar(15) DEFAULT NULL COMMENT '店长手机',
  PRIMARY KEY (`suppliers_id`)
) ENGINE=MyISAM AUTO_INCREMENT=468 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_suppliers` values('463','lijunfeng  【测试-网站演示专用】','aaaaaa','1','','','','','','','金色城市','15023652145','2514@aa.com','','','e10adc3949ba59abbe56e057f20f883e','lijunfeng','','','0','','','','','','','','dddddd','','','0','0','0','0','0','0','0','0','0','','','0','0','','','','');");
E_D("replace into `hhs_suppliers` values('466','糊涂      【测试-网站演示专用】','','0','','','','','','','陕西西安 文艺北路','13474534517','2032046343@qq.com','','','899186f7879ef9f1cf011b415f548c03','angle','','','0','','','','','','','','','','','0','0','0','0','0','0','0','0','0','','','0','0','','','',NULL);");
E_D("replace into `hhs_suppliers` values('467','天天水果超市','','1','','','','','','','','','','','','4297f44b13955235245b2497399d7a93','123123','','','0','','','','','','','','','','','0','0','0','0','0','0','0','0','0','','','0','0','','','',NULL);");

require("../../inc/footer.php");
?>