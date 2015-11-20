<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_goods_category`;");
E_C("CREATE TABLE `hhs_goods_category` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(90) NOT NULL DEFAULT '',
  `suppliers_id` smallint(5) NOT NULL,
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `cat_desc` varchar(255) NOT NULL DEFAULT '',
  `parent_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sort_order` tinyint(1) unsigned NOT NULL DEFAULT '50',
  `template_file` varchar(50) NOT NULL DEFAULT '',
  `measure_unit` varchar(15) NOT NULL DEFAULT '',
  `show_in_nav` tinyint(1) NOT NULL DEFAULT '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `grade` tinyint(4) NOT NULL DEFAULT '0',
  `filter_attr` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=267 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_goods_category` values('1','化肥','5','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('2','肥料','6','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('3','种子','6','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('4','农药','6','','','0','3','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('13','A分类','13','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('6','种植果蔬','9','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('7','养殖水产','9','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('8','副食特产','9','','','0','3','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('9','园林园艺','9','','','0','4','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('10','农资供应','9','','','0','5','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('11','农机供应','9','','','0','6','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('12','液肥','8','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('14','B分类','13','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('15','肥料','17','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('16','农产品','17','','','0','0','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('17','肥料','18','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('18','农药','18','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('19','种子','18','','','0','3','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('20','地膜','18','','','0','4','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('21','汽车','22','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('22','农药','21','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('23','种子','21','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('24','地膜','21','','','0','3','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('25','肥料','21','','','0','4','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('26','化肥','21','','','0','5','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('27','杀螨剂','15','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('28','A分类','29','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('29','A分类','29','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('30','肥料','33','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('31','农药','33','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('32','地膜','33','','','0','3','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('33','A分类','35','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('34','杀菌剂','36','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('35','杀虫剂','36','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('36','1111','9','','','0','0','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('37','农药','38','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('38','化肥','38','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('39','农药','39','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('40','化肥','39','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('41','农药','42','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('42','化肥','42','','','0','3','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('47','农药','43','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('45','地膜','42','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('48','化肥','43','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('49','地膜','43','','','0','3','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('50','杀菌剂','44','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('51','肥料','48','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('52','腐植酸功能性肥料','49','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('53','水溶性肥料','49','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('54','有机-无机肥料','49','','','0','3','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('55','稳定性肥料','49','','','0','4','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('56','缓控释肥料','49','','','0','5','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('57','硫酸钾型肥料','49','','','0','6','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('58','特色掺混肥料','49','','','0','7','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('59','测试1','46','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('60','测试2','46','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('61','肥料','51','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('62','农药','51','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('63','肥料','31','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('64','杀虫剂','57','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('65','肥料','57','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('66','肥料','60','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('67','种子','60','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('68','杀鼠剂','61','','','0','5','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('69','除草剂','61','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('99','植物生长调节剂','63','','','0','6','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('94','杀螨剂','63','','','0','3','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('96','除草剂','63','','','0','4','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('93','杀菌剂','63','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('98','助剂','63','','','0','5','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('91','赠品','63','','','0','9','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('78','10','69','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('79','11','69','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('80','13','69','','','0','3','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('81','哈感觉','74','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('82','fdak','74','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('83','复古风','74','','','0','3','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('84','饭店和根本 ','74','','','0','5','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('85','屌丝歌神','74','','','0','4','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('86','规范更别说','74','','','0','6','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('87','对方更符合','74','','','0','7','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('88','阿甘哈哈','74','','','0','8','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('89','方式','74','','','0','9','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('92','杀虫剂','63','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('100','肥料','63','','','0','7','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('102','套餐','63','','','0','8','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('103','腐植酸功能性肥料','78','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('104','水溶性肥料','78','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('105','缓控释肥料','78','','','0','3','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('106','有机无机肥料','78','','','0','4','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('107','稳定性肥料','78','','','0','5','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('108','控失性肥料','78','','','0','6','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('109','硫酸钾型肥料','78','','','0','7','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('110','特色掺混肥料','78','','','0','8','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('111','除草剂','106','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('112','肥料','114','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('113','农药','118','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('114','杀虫剂','118','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('115','杀菌剂','118','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('116','叶面肥','118','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('117','杀螨剂','118','','','0','0','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('118','除草剂','118','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('119','调节剂','118','','','0','0','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('120','肥料','118','','','0','0','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('121','种子','118','','','0','0','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('122','水溶肥','118','','','0','0','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('123','花卉','111','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('124','精美影集','138','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('127','创意摆台','138','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('128','精美小挂件','138','','','0','3','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('129','果蔬','111','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('130','苗木','111','','','0','3','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('131','手工DIY','138','','','0','4','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('133','水溶肥','63','','','0','10','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('136','杀虫剂','143','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('137','杀菌剂','143','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('138','杀螨剂','143','','','0','3','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('139','除草剂','143','','','0','4','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('140','植物生长调节剂','143','','','0','5','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('141','肥料','143','','','0','6','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('142','大肥','143','','','0','8','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('143','营养剂','63','','','0','11','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('144','叶面肥','143','','','0','9','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('145','米面粮油','150','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('146','特产干货','150','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('147','生鲜水果','150','','','0','3','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('148','进口美食','150','','','0','4','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('149','除草剂','155','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('150','叶面肥','155','','','0','4','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('151','杀虫剂','155','','','0','1','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('155','双肩背包','153','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('154','腰包','153','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('156','斜挎包','153','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('157','折叠包','153','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('158','肥料','158','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('159','苹果','63','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('160','机箱','160','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('162','五谷杂粮','150','','','0','4','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('163','肥料','156','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('164','玩具','156','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('165','成品燕','161','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('166','毛燕','161','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('167','燕条','161','','','0','3','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('168','单方精油','163','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('169','复方精油','163','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('170','膨化食品','192','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('171','多肉拼盘','162','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('172','当季新品','162','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('173','办公用品','211','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('175','白酒','225','','','0','0','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('176','葛根系列','238','','','0','1','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('177','炕炕馍系列','238','','','0','2','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('178','豆腐乳系列','238','','','0','3','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('179','瀛湖小鱼系列','238','','','0','4','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('180','鉁硒雪魔芋系列','238','','','0','5','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('181','苦荞茶系列','238','','','0','6','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('182','岚宫系列','238','','','0','0','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('183','蜂蜜系列','238','','','0','7','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('184','1','87','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('185','牛油果舒润系列','191','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('186','莹润净白系列','191','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('187','夏季新款上衣','259','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('188','新款连衣裙','259','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('189','半身裙','259','','','0','3','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('190','化工类','333','','','0','1','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('191','高丽雅娜系列','208','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('192','蝉真系列','208','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('193','爱格优品系列','208','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('194','其他系列','208','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('195','法国妙巴黎系列','208','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('196','pe原料聚乙烯塑料颗粒','311','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('197','PE管材','311','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('198','1','172','','','0','0','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('199','化工类','332','','','0','1','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('200','红薯系列','148','','','0','0','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('203','除草剂','176','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('202','核桃系列','148','','','0','0','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('206','麦卢卡蜂蜜','360','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('205','杀菌剂','176','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('207','花蜜','360','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('208','水果蜜','360','','','0','3','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('209','其他蜂产品','360','','','0','4','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('210','农药','366','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('211','营养液','139','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('212','12','87','','','184','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('213','1','11','','','0','1','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('214','11','11','','','213','0','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('215','天使之魅','388','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('216','黛莱美','388','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('217','黑曜石','338','','','0','0','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('218','餐巾纸','217','','','0','0','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('219','土特产','400','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('220','祁东干货','404','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('224','唇膏/唇彩','407','','','223','21','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('222','护肤','407','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('223','彩妆','407','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('225','祁东干货','406','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('226','个户化妆','408','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('227','护肤品','408','','','226','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('228','彩妆','408','','','226','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('229','唇彩/唇膏','408','','','228','21','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('230','农副产品','301','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('231','水果/蔬菜','301','','','230','11','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('232','仪器仪表','395','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('234','铁观音','428','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('235','湿巾','217','','','0','2','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('239','农药杀菌剂','327','','','0','2','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('258','杂粮','327','','','0','7','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('238','腐殖酸肥料','327','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('240','大肥','327','','','0','3','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('245','含腐殖酸水溶肥','327','','','238','2','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('242','粮油食品','327','','','0','5','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('243','日用百货','327','','','0','6','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('246','含腐殖酸液肥','327','','','238','1','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('247','农药','327','','','239','1','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('248','杀虫剂','327','','','239','2','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('249','杀菌剂','327','','','239','3','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('250','植物调节剂','327','','','239','4','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('251','尿素','327','','','240','1','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('254','复混肥','327','','','240','2','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('253','有机肥','327','','','240','3','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('255','有机无机复混肥','327','','','240','4','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('256','磷酸二铵','327','','','240','5','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('257','食用油','327','','','242','1','','','0','','0','0','0');");
E_D("replace into `hhs_goods_category` values('259','糖类','327','','','0','8','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('260','手工艺品','327','','','0','10','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('261','面粉','327','','','0','11','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('262','新西兰代购','427','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('263','德国代购','427','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('264','精品女装','427','','','0','0','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('265','含腐植酸水溶肥料','121','','','0','1','','','0','','1','0','0');");
E_D("replace into `hhs_goods_category` values('266','大量元素水溶肥料','121','','','0','2','','','0','','1','0','0');");

require("../../inc/footer.php");
?>