<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_supp_account`;");
E_C("CREATE TABLE `hhs_supp_account` (
  `account_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `suppliers_id` int(10) NOT NULL COMMENT '所创建的经销商ID',
  `sort_order` int(10) NOT NULL DEFAULT '50' COMMENT '排序',
  `is_check` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `account_password` varchar(100) NOT NULL,
  `account_type` int(10) NOT NULL DEFAULT '0',
  `address` varchar(288) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `sort` int(11) DEFAULT '1' COMMENT '排序',
  PRIMARY KEY (`account_id`)
) ENGINE=MyISAM AUTO_INCREMENT=76 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_supp_account` values('1','test123','aaa123','aaa123','82','0','1','','0','','','1');");
E_D("replace into `hhs_supp_account` values('2','gaga_123','aaa','aaa','82','0','0','','0','','','1');");
E_D("replace into `hhs_supp_account` values('4','qiyongdong','齐永东','goods_manage||order_manage','82','0','1','e10adc3949ba59abbe56e057f20f883e','0','','','1');");
E_D("replace into `hhs_supp_account` values('5','zbl','zbl','order_list,delivery,delivery_list','9','0','1','e10adc3949ba59abbe56e057f20f883e','0','罗湖一路','13891864749','1');");
E_D("replace into `hhs_supp_account` values('6','smart 1','smart 1号店','goods_manage||order_manage','8','0','1','e10adc3949ba59abbe56e057f20f883e','0','','','1');");
E_D("replace into `hhs_supp_account` values('7','smart2','smart 2号店','goods_manage||order_manage','8','0','1','d41d8cd98f00b204e9800998ecf8427e','0','','','1');");
E_D("replace into `hhs_supp_account` values('8','smart3','smart 3号店','goods_manage||order_manage','8','0','1','e10adc3949ba59abbe56e057f20f883e','0','','','1');");
E_D("replace into `hhs_supp_account` values('9','smart 4','smart 4号店','','8','0','1','e10adc3949ba59abbe56e057f20f883e','1','','','1');");
E_D("replace into `hhs_supp_account` values('11','haohai1','昊海1号店','delivery,delivery_list','17','0','1','e10adc3949ba59abbe56e057f20f883e','1','','','1');");
E_D("replace into `hhs_supp_account` values('14','fdsf','fsdf','','22','0','0','bda9542cad64d3935c457bece507fbae','0','','','1');");
E_D("replace into `hhs_supp_account` values('13','财务','财物','goods_list,goods_add,category,pic_list,order_list,delivery,delivery_list,bank_config,my_order,accounts_apply_list,ad,supp_info,article_list,add_supp_account','18','0','1','e10adc3949ba59abbe56e057f20f883e','0','','','1');");
E_D("replace into `hhs_supp_account` values('15','小站','小站','goods_list,goods_add,category,pic_list,brand,order_list,delivery,delivery_list,shipping_config','21','0','1','e10adc3949ba59abbe56e057f20f883e','0','','','1');");
E_D("replace into `hhs_supp_account` values('16','11团分站','11团分站','','15','0','1','202cb962ac59075b964b07152d234b70','1','','','1');");
E_D("replace into `hhs_supp_account` values('17','6团分站','6团分站','','15','0','1','202cb962ac59075b964b07152d234b70','1','','','1');");
E_D("replace into `hhs_supp_account` values('18','咋啦','好看','order_list,delivery','19','0','1','e10adc3949ba59abbe56e057f20f883e','0','','','1');");
E_D("replace into `hhs_supp_account` values('19','11团','11团','','29','0','1','202cb962ac59075b964b07152d234b70','1','','','1');");
E_D("replace into `hhs_supp_account` values('20','012','admin','','32','0','1','e10adc3949ba59abbe56e057f20f883e','0','','','1');");
E_D("replace into `hhs_supp_account` values('21','该发生感染','广告的价格','goods_list,goods_add,category,pic_list,brand,order_list,delivery,delivery_list,bank_config,my_order,accounts_apply_list,ad,supp_info,article_list,supp_account_list,add_supp_account,shipping_config','20','0','1','e10adc3949ba59abbe56e057f20f883e','0','','','1');");
E_D("replace into `hhs_supp_account` values('22','小默','默默','goods_list,goods_add,category,pic_list,brand,order_list,delivery,delivery_list,my_order,accounts_apply_list,ad,supp_info,article_list','33','0','1','e10adc3949ba59abbe56e057f20f883e','0','','','1');");
E_D("replace into `hhs_supp_account` values('23','小白','小白','goods_list,category,order_list,ad,supp_info,article_list','35','0','1','e10adc3949ba59abbe56e057f20f883e','1','','','1');");
E_D("replace into `hhs_supp_account` values('24','小胡','admin','goods_list,goods_add,category,order_list,delivery,delivery_list,my_order,accounts_apply_list','36','0','1','e10adc3949ba59abbe56e057f20f883e','1','','','1');");
E_D("replace into `hhs_supp_account` values('25','行者','孙行者','goods_list,delivery,bank_config,my_order','37','0','1','e10adc3949ba59abbe56e057f20f883e','0','','','1');");
E_D("replace into `hhs_supp_account` values('26','小马','信得过第四店','order_list,delivery,delivery_list','38','0','1','827ccb0eea8a706c4c34a16891f84e7b','0','','','1');");
E_D("replace into `hhs_supp_account` values('27','销售','terry','goods_list,goods_add,category,pic_list,brand,order_list,delivery,delivery_list,bank_config,my_order,accounts_apply_list','18','0','1','e10adc3949ba59abbe56e057f20f883e','1','','','1');");
E_D("replace into `hhs_supp_account` values('28','李四','vip456','order_list,delivery,delivery_list','39','0','1','bda9542cad64d3935c457bece507fbae','0','','','1');");
E_D("replace into `hhs_supp_account` values('29','11团虎骨','11团','','44','0','1','d41d8cd98f00b204e9800998ecf8427e','1','','','1');");
E_D("replace into `hhs_supp_account` values('30','老舅 不会','u哭就u','','44','0','1','4297f44b13955235245b2497399d7a93','0','','','1');");
E_D("replace into `hhs_supp_account` values('31','','','','44','0','1','d41d8cd98f00b204e9800998ecf8427e','1','','','1');");
E_D("replace into `hhs_supp_account` values('32','ajdadj','ajdadj','','18','0','1','bda9542cad64d3935c457bece507fbae','0','','','1');");
E_D("replace into `hhs_supp_account` values('33','jiesuan1','结算1','delivery_list','46','0','1','e10adc3949ba59abbe56e057f20f883e','1','','','1');");
E_D("replace into `hhs_supp_account` values('34','jiesuan2','结算2','delivery,delivery_list','46','0','1','e10adc3949ba59abbe56e057f20f883e','1','','','1');");
E_D("replace into `hhs_supp_account` values('35','财务1','财务1','','18','0','1','e10adc3949ba59abbe56e057f20f883e','1','','','1');");
E_D("replace into `hhs_supp_account` values('36','fsdf','fsd','','16','0','1','bda9542cad64d3935c457bece507fbae','0','','','1');");
E_D("replace into `hhs_supp_account` values('37','信得过一店','信得过一店','goods_list','51','0','1','ff76a532220e7ff80b41a4fa3f61aebe','0','','','1');");
E_D("replace into `hhs_supp_account` values('38','信得过二店','信得过二店','goods_list,goods_add','51','0','1','107515edc4cf25b0c676af53715af02a','1','','','1');");
E_D("replace into `hhs_supp_account` values('39','信得过子账号1','信得过子账号1','bank_config','51','0','1','4bd1077d83a58ff9f5608cd181e96088','0','','','1');");
E_D("replace into `hhs_supp_account` values('40','信得过子账号2','信得过子账号2','goods_list,order_list','51','0','1','2c4b543ec694a38cc2b82336bcfce7ef','0','','','1');");
E_D("replace into `hhs_supp_account` values('41','信得过一店1','信得过一店1','','57','0','1','c3f6d996d19b23c764909388662c5fa5','1','农哈哈','15569040808','1');");
E_D("replace into `hhs_supp_account` values('42','xaphp','一分店','','60','0','1','e10adc3949ba59abbe56e057f20f883e','1','西安市北大街10号','13565141211','1');");
E_D("replace into `hhs_supp_account` values('43','孙思雨','6团分站','goods_list,order_list,delivery,delivery_list,article_list,order_stats,sale_list,sale_order','61','0','1','6c44e5cd17f0019c64b042e4a745412a','1','六团团部','14799777190','1');");
E_D("replace into `hhs_supp_account` values('59','二团直营店','二团直营店','delivery,delivery_list,edit_password,order_stats,sale_list,sale_order','63','0','1','c9fdaf78c8ed06c92b9fc4151d40e1a5','1','新疆阿克苏地区二团','18196880626','1');");
E_D("replace into `hhs_supp_account` values('62','1234','管理员1','goods_list,goods_add,category,pic_list,brand,goods_import,goods_trash','158','0','1','827ccb0eea8a706c4c34a16891f84e7b','0','','15200000000','1');");
E_D("replace into `hhs_supp_account` values('48','1','1','','76','0','1','c4ca4238a0b923820dcc509a6f75849b','0','1','18010099630','1');");
E_D("replace into `hhs_supp_account` values('49','zhangsan','张三的店铺','order_list,delivery,delivery_list','77','0','1','01d7f40760960e7bd9443513f22ab9af','1','固安县中心大街','18010099630','1');");
E_D("replace into `hhs_supp_account` values('58','阿瓦提直营店','阿瓦提直营店','delivery,delivery_list','63','0','1','e10adc3949ba59abbe56e057f20f883e','1','新疆阿克苏地区阿瓦提县','14799777190','1');");
E_D("replace into `hhs_supp_account` values('56','fendian','分店','delivery,delivery_list,edit_password','85','0','1','e10adc3949ba59abbe56e057f20f883e','1','常山路长林北口158号','18392859521','1');");
E_D("replace into `hhs_supp_account` values('55','yihaodian',' 测试一号店','order_list,delivery,delivery_list,my_order','85','0','1','e10adc3949ba59abbe56e057f20f883e','0','','','1');");
E_D("replace into `hhs_supp_account` values('61','test001','test001','edit_password','85','0','1','811584043b844704c9bb9a6e99dd05d3','0','','','1');");
E_D("replace into `hhs_supp_account` values('60','十一团直营店','十一团直营店','delivery,delivery_list','63','0','1','b86cb95cd7e768c5b0114378a1ded63a','1','新疆阿克苏地区十一团','18139100880','1');");
E_D("replace into `hhs_supp_account` values('63','123','1','','158','0','1','202cb962ac59075b964b07152d234b70','1','西安市雁塔区','15200000000','1');");
E_D("replace into `hhs_supp_account` values('64','123456','123456','goods_list,goods_add,category,pic_list,brand,goods_import,goods_trash','11','0','1','e10adc3949ba59abbe56e057f20f883e','0','','1520000000','1');");
E_D("replace into `hhs_supp_account` values('65','111','分店1','goods_list,goods_add,category,pic_list,brand,goods_import,goods_trash','87','0','1','4297f44b13955235245b2497399d7a93','1','','','1');");
E_D("replace into `hhs_supp_account` values('66','分店2','112','goods_list,order_list,ad,trademark','87','0','1','96e79218965eb72c92a549dd5a330112','1','123','','1');");
E_D("replace into `hhs_supp_account` values('67','美工','123','','87','0','0','202cb962ac59075b964b07152d234b70','0','123','123','1');");
E_D("replace into `hhs_supp_account` values('68','hebo1','hebo:01','goods_list,goods_add,order_list,delivery,delivery_list,edit_password,shipping_config,order_stats,sale_list,sale_order','280','0','1','dc483e80a7a0bd9ef71d8cf973673924','0','','1880099661','1');");
E_D("replace into `hhs_supp_account` values('71','wanwan','婉','ad,supp_info,article_list,bunus','285','0','1','2259ad85cd4fb94c5b5ff3e07fbd4569','0','陕西咸阳秦都区北上召','wanwan0526','1');");
E_D("replace into `hhs_supp_account` values('70','阿瓦提分公司','阿瓦提分公司','delivery,delivery_list,edit_password,order_stats,sale_list,sale_order','143','0','1','1333abbbe14dd730711f2e3943813898','1','阿瓦提县','18139100770','1');");
E_D("replace into `hhs_supp_account` values('72','test','测试分店','','87','0','1','25d55ad283aa400af464c76d713c07ad','1','文艺北路金色城市','13227730370','1');");
E_D("replace into `hhs_supp_account` values('74','aaa','aaa','','87','0','1','4297f44b13955235245b2497399d7a93','0','asasad','15529650175','1');");
E_D("replace into `hhs_supp_account` values('75','12345678','12345678','','87','0','0','e10adc3949ba59abbe56e057f20f883e','0','112','15529650175','1');");

require("../../inc/footer.php");
?>