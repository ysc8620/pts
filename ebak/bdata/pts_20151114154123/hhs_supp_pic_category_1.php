<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_supp_pic_category`;");
E_C("CREATE TABLE `hhs_supp_pic_category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `suppliers_id` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=utf8 COMMENT='图片分类表'");
E_D("replace into `hhs_supp_pic_category` values('13','节日专享','5');");
E_D("replace into `hhs_supp_pic_category` values('14','我的图片','9');");
E_D("replace into `hhs_supp_pic_category` values('15','液肥','8');");
E_D("replace into `hhs_supp_pic_category` values('16','济农','17');");
E_D("replace into `hhs_supp_pic_category` values('17','珍佰粮','17');");
E_D("replace into `hhs_supp_pic_category` values('18','农药','18');");
E_D("replace into `hhs_supp_pic_category` values('19','肥料','18');");
E_D("replace into `hhs_supp_pic_category` values('20','汽车','22');");
E_D("replace into `hhs_supp_pic_category` values('21','农药','21');");
E_D("replace into `hhs_supp_pic_category` values('22','化肥','21');");
E_D("replace into `hhs_supp_pic_category` values('23','种子','21');");
E_D("replace into `hhs_supp_pic_category` values('24','地膜','21');");
E_D("replace into `hhs_supp_pic_category` values('25','形象','21');");
E_D("replace into `hhs_supp_pic_category` values('26','名车','22');");
E_D("replace into `hhs_supp_pic_category` values('27','形象','18');");
E_D("replace into `hhs_supp_pic_category` values('28','农药','33');");
E_D("replace into `hhs_supp_pic_category` values('29','肥料','33');");
E_D("replace into `hhs_supp_pic_category` values('30','农药','38');");
E_D("replace into `hhs_supp_pic_category` values('31','肥料','38');");
E_D("replace into `hhs_supp_pic_category` values('32','产品展示','43');");
E_D("replace into `hhs_supp_pic_category` values('33','123','39');");
E_D("replace into `hhs_supp_pic_category` values('34','456','39');");
E_D("replace into `hhs_supp_pic_category` values('35','1','48');");
E_D("replace into `hhs_supp_pic_category` values('36','2','48');");
E_D("replace into `hhs_supp_pic_category` values('37','集琦','63');");
E_D("replace into `hhs_supp_pic_category` values('38','泰生','63');");
E_D("replace into `hhs_supp_pic_category` values('39','我的图片','67');");
E_D("replace into `hhs_supp_pic_category` values('40','科霸复混肥料','76');");
E_D("replace into `hhs_supp_pic_category` values('41','科霸水溶肥肥料','76');");
E_D("replace into `hhs_supp_pic_category` values('60','除草剂','106');");
E_D("replace into `hhs_supp_pic_category` values('74','PE管材','311');");
E_D("replace into `hhs_supp_pic_category` values('45','天聚缘复混肥料','76');");
E_D("replace into `hhs_supp_pic_category` values('46','谷丰肥料图样','76');");
E_D("replace into `hhs_supp_pic_category` values('47','腐植酸功能性肥料','49');");
E_D("replace into `hhs_supp_pic_category` values('48','有机无机肥料','49');");
E_D("replace into `hhs_supp_pic_category` values('49','稳定性肥料','49');");
E_D("replace into `hhs_supp_pic_category` values('50','控失性肥料','49');");
E_D("replace into `hhs_supp_pic_category` values('51','水溶性肥料','49');");
E_D("replace into `hhs_supp_pic_category` values('52','特色掺混肥料','49');");
E_D("replace into `hhs_supp_pic_category` values('53','硫酸钾型肥料','49');");
E_D("replace into `hhs_supp_pic_category` values('54','肥料图样','49');");
E_D("replace into `hhs_supp_pic_category` values('61','花卉','111');");
E_D("replace into `hhs_supp_pic_category` values('62','果蔬','111');");
E_D("replace into `hhs_supp_pic_category` values('63','苗木','111');");
E_D("replace into `hhs_supp_pic_category` values('64','园区','111');");
E_D("replace into `hhs_supp_pic_category` values('65','谚妮无钢圈0甲醛聚拢健康文胸','159');");
E_D("replace into `hhs_supp_pic_category` values('66','传奇今生红樱桃健康唇膏','159');");
E_D("replace into `hhs_supp_pic_category` values('67','炕炕馍系列','238');");
E_D("replace into `hhs_supp_pic_category` values('68','葛根系列','238');");
E_D("replace into `hhs_supp_pic_category` values('69','鉁硒系列','238');");
E_D("replace into `hhs_supp_pic_category` values('70','豆腐乳系列','238');");
E_D("replace into `hhs_supp_pic_category` values('71','瀛湖鱼系列','238');");
E_D("replace into `hhs_supp_pic_category` values('72','豆腐干系列','238');");
E_D("replace into `hhs_supp_pic_category` values('73','枣子','210');");
E_D("replace into `hhs_supp_pic_category` values('75','兰芝','335');");
E_D("replace into `hhs_supp_pic_category` values('76','唱片','285');");
E_D("replace into `hhs_supp_pic_category` values('77','扫一扫','329');");
E_D("replace into `hhs_supp_pic_category` values('78','印刷品','166');");
E_D("replace into `hhs_supp_pic_category` values('79','土特产','400');");
E_D("replace into `hhs_supp_pic_category` values('80','香油','327');");
E_D("replace into `hhs_supp_pic_category` values('81','手工藤艺','327');");
E_D("replace into `hhs_supp_pic_category` values('82','河南牛肉','327');");
E_D("replace into `hhs_supp_pic_category` values('83','面粉','327');");
E_D("replace into `hhs_supp_pic_category` values('84','特色面点','327');");
E_D("replace into `hhs_supp_pic_category` values('85','冰糖','327');");
E_D("replace into `hhs_supp_pic_category` values('86','杂粮','327');");
E_D("replace into `hhs_supp_pic_category` values('87','豫东点心','327');");
E_D("replace into `hhs_supp_pic_category` values('88','纺织品','327');");
E_D("replace into `hhs_supp_pic_category` values('89','酒类','327');");
E_D("replace into `hhs_supp_pic_category` values('90','豫东槐山药','327');");
E_D("replace into `hhs_supp_pic_category` values('91','农药肥料','327');");
E_D("replace into `hhs_supp_pic_category` values('92','铁观音','428');");
E_D("replace into `hhs_supp_pic_category` values('93','我的图片','87');");
E_D("replace into `hhs_supp_pic_category` values('94','picture','87');");
E_D("replace into `hhs_supp_pic_category` values('95','fruits','87');");

require("../../inc/footer.php");
?>