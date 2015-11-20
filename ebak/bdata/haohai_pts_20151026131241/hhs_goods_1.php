<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_goods`;");
E_C("CREATE TABLE `hhs_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_sn` varchar(60) NOT NULL DEFAULT '',
  `goods_name` varchar(120) NOT NULL DEFAULT '',
  `goods_name_style` varchar(60) NOT NULL DEFAULT '+',
  `click_count` int(10) unsigned NOT NULL DEFAULT '0',
  `brand_id` smallint(5) unsigned NOT NULL DEFAULT '0',
  `provider_name` varchar(100) NOT NULL DEFAULT '',
  `goods_number` smallint(5) unsigned NOT NULL DEFAULT '0',
  `goods_weight` decimal(10,3) unsigned NOT NULL DEFAULT '0.000',
  `market_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `shop_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `promote_price` decimal(10,2) unsigned NOT NULL DEFAULT '0.00',
  `promote_start_date` int(11) unsigned NOT NULL DEFAULT '0',
  `promote_end_date` int(11) unsigned NOT NULL DEFAULT '0',
  `warn_number` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `goods_brief` varchar(255) NOT NULL DEFAULT '',
  `goods_desc` text NOT NULL,
  `goods_thumb` varchar(255) NOT NULL DEFAULT '',
  `goods_img` varchar(255) NOT NULL DEFAULT '',
  `original_img` varchar(255) NOT NULL DEFAULT '',
  `is_real` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `extension_code` varchar(30) NOT NULL DEFAULT '',
  `is_on_sale` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `is_alone_sale` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `is_shipping` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `integral` int(10) unsigned NOT NULL DEFAULT '0',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0',
  `sort_order` smallint(4) unsigned NOT NULL DEFAULT '100',
  `is_delete` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_best` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_new` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_hot` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_promote` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `bonus_type_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `share_bonus_type` int(11) DEFAULT '0' COMMENT '分享红包类型id',
  `last_update` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_type` smallint(5) unsigned NOT NULL DEFAULT '0',
  `seller_note` varchar(255) NOT NULL DEFAULT '',
  `give_integral` int(11) NOT NULL DEFAULT '-1',
  `rank_integral` int(11) NOT NULL DEFAULT '-1',
  `suppliers_id` int(5) unsigned DEFAULT '0',
  `is_check` tinyint(1) unsigned DEFAULT NULL,
  `team_num` int(11) NOT NULL DEFAULT '5' COMMENT '参团人数',
  `team_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '团购价',
  `little_img` varchar(100) DEFAULT NULL COMMENT '小图片',
  `sales_num` int(10) NOT NULL COMMENT '销量',
  `check_desc` varchar(255) DEFAULT NULL,
  `is_mall` tinyint(4) NOT NULL DEFAULT '0' COMMENT '微商城',
  `is_team` tinyint(4) DEFAULT '0' COMMENT '团购',
  `is_nearby` tinyint(4) NOT NULL DEFAULT '1' COMMENT '附近的团是否开启',
  `use_goods_sn` varchar(30) NOT NULL,
  PRIMARY KEY (`goods_id`),
  KEY `goods_sn` (`goods_sn`),
  KEY `cat_id` (`cat_id`),
  KEY `last_update` (`last_update`),
  KEY `brand_id` (`brand_id`),
  KEY `goods_weight` (`goods_weight`),
  KEY `promote_end_date` (`promote_end_date`),
  KEY `promote_start_date` (`promote_start_date`),
  KEY `goods_number` (`goods_number`),
  KEY `sort_order` (`sort_order`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_goods` values('1','1','HHS000000','【测试商品-网站演示专用】越南进口澳芒2个59元','+','625','0','','9998','0.110','24.00','20.00','0.00','0','0','1','','生态种植，天然品质，2个59元限时包邮，仅限江浙沪地区顾客购买','<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 很多朋友都已经抢先体验了3G网络的可视通话、高速上网等功能。LG KD876手机<span style=\"font-size:x-large;\"><span style=\"color:#FF0000;\"><strong>支持TD-SCDMA/GSM双模单待</strong></span></span>，便于测试初期GSM网络和TD网络之间的切换和共享。\r\n</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; LG KD876手机整体采用银色塑料材质，<strong><span style=\"font-size:x-large;\"><span style=\"color:#FF0000;\">特殊的旋转屏设计是本机的亮点</span></span></strong>，而机身背部的300万像素摄像头也是首发的六款TD-SCDMA手机中配置最高的。LG KD876手机屏幕下方设置有外键盘，该键盘由左/右软键、通话/挂机键、返回键、五维摇杆组成，摇杆灵敏度很高，定位准确。KD876的内键盘由标准12个电话键和三个功能键、一个内置摄像头组成。三个功能键分别为视频通话、MP3、和菜单键，所有按键的手感都比较一般，键程适中，当由于按键排列过于紧密，快速发短信时很容易误按，用户在使用时一定要多加注意。LG KD876手机机身周边的接口设计非常简洁，手机的厚度主要来自屏幕旋转轴的长度，如果舍弃旋屏设计的话，估计<span style=\"font-size:x-large;\"><strong><span style=\"color:#FF0000;\">厚度可以做到10mm以下</span></strong></span>。\r\n</p>','images/201508/thumb_img/1_thumb_G_1440964018312.jpg','images/201508/goods_img/1_G_1440964018153.jpg','images/201508/source_img/1_G_1440964018263.jpg','1','','1','1','0','0','1240902890','1','1','0','0','0','0','0','7','1441046267','0','','-1','-1','465','1','2','0.01','images/201507/1438293001097681166.jpg','0',NULL,'0','0','1','');");
E_D("replace into `hhs_goods` values('37','1','HHS000002','【测试商品-网站演示专用】 芒果','+','185','0','','100','0.110','48.00','40.00','0.00','0','0','1','','生态种植，天然品质，2个59元限时包邮，仅限江浙沪地区顾客购买','<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</p>\r\n<br />','images/201509/thumb_img/37_thumb_G_1442382478532.jpg','images/201509/goods_img/37_G_1442382478960.jpg','images/201509/source_img/37_G_1442382478110.jpg','1','','1','1','0','0','1436309913','100','0','0','0','0','0','0','0','1444941065','0','','-1','-1','0','1','3','19.90','images/201509/1442427153880707744.jpg','0',NULL,'0','0','1','');");
E_D("replace into `hhs_goods` values('39','1','HHS000038','【测试商品-网站演示专用】果干组合套餐','+','64','0','','10000','0.432','34.80','29.00','0.00','0','0','1','','','','images/201507/thumb_img/39_thumb_G_1437622981483.jpg','images/201507/goods_img/39_G_1437622981172.jpg','images/201507/source_img/39_G_1437622981495.jpg','1','','0','1','0','0','1437605265','100','1','0','0','0','0','0','0','1441046263','0','','-1','-1','463','1','3','0.01','images/201507/thumb_img/39_thumb_G_1437622981483.jpg','0',NULL,'0','0','1','');");
E_D("replace into `hhs_goods` values('40','1','HHS000040','【测试商品-网站演示专用】 姐妹干果','+','27','0','','10000','0.000','17.88','14.90','0.00','0','0','1','','','','images/201507/thumb_img/40_thumb_G_1437605459919.jpg','images/201507/goods_img/40_G_1437605459770.jpg','images/201507/source_img/40_G_1437605459746.jpg','1','','0','1','0','0','1437605459','100','1','0','0','0','0','0','0','1442427181','0','','-1','-1','0','1','3','0.01','images/201507/thumb_img/40_thumb_G_1437605459919.jpg','0',NULL,'0','0','1','');");
E_D("replace into `hhs_goods` values('41','1','HHS000041','【测试商品-网站演示专用】 果干','+','46','0','','10000','0.000','23.88','19.90','0.00','0','0','1','','','','images/201507/thumb_img/41_thumb_G_1437623246852.jpg','images/201507/goods_img/41_G_1437623246044.jpg','images/201507/source_img/41_G_1437623246050.jpg','1','','0','1','0','0','1437623246','2','0','0','0','0','0','0','0','1444448233','0','','-1','-1','463','1','1','0.02','images/201507/thumb_img/41_thumb_G_1437623246852.jpg','0',NULL,'0','0','1','');");
E_D("replace into `hhs_goods` values('42','1','HHS000042','【测试商品-网站演示专用】  泰迪零食','+','8','0','','10000','0.000','60.00','50.00','0.00','0','0','1','','','','images/201507/thumb_img/42_thumb_G_1437623748601.jpg','images/201507/goods_img/42_G_1437623748802.jpg','images/201507/source_img/42_G_1437623748722.jpg','1','','0','1','0','0','1437623748','100','1','0','0','0','0','0','0','1442427181','0','','-1','-1','0','1','5','0.05','images/201507/thumb_img/42_thumb_G_1437623748601.jpg','0',NULL,'0','0','1','');");
E_D("replace into `hhs_goods` values('43','1','HHS000043','【测试商品-网站演示专用】 十全十美顶顶顶顶','+','5','0','','10000','0.000','48.00','40.00','0.00','0','0','1','','','','images/201507/thumb_img/43_thumb_G_1437623807283.jpg','images/201507/goods_img/43_G_1437623807447.jpg','images/201507/source_img/43_G_1437623807669.jpg','1','','0','1','0','0','1437623807','100','1','0','0','0','0','0','0','1442427181','0','','-1','-1','0','1','5','0.04','images/201507/thumb_img/43_thumb_G_1437623807283.jpg','0',NULL,'0','0','1','');");
E_D("replace into `hhs_goods` values('44','1','HHS000044','北京果脯','+','4','0','','10000','0.000','105.60','88.00','0.00','0','0','1','','','','images/201507/thumb_img/44_thumb_G_1437623942733.jpg','images/201507/goods_img/44_G_1437623942354.jpg','images/201507/source_img/44_G_1437623942918.jpg','1','','1','1','0','0','1437623942','100','1','0','0','0','0','0','0','1438197683','0','','-1','-1','0','1','5','0.88','images/201507/thumb_img/44_thumb_G_1437623942733.jpg','0',NULL,'0','0','1','');");
E_D("replace into `hhs_goods` values('45','1','HHS000045','【测试商品-网站演示专用】 抹茶','+','24','0','','10000','0.000','144.00','120.00','0.00','0','0','1','','','','images/201507/thumb_img/45_thumb_G_1437624172207.jpg','images/201507/goods_img/45_G_1437624172301.jpg','images/201507/source_img/45_G_1437624172022.jpg','1','','1','1','0','0','1437624172','100','0','0','0','0','0','0','0','1442427189','0','','-1','-1','463','1','5','1.20','images/201507/thumb_img/45_thumb_G_1437624172207.jpg','0',NULL,'0','0','1','');");
E_D("replace into `hhs_goods` values('46','1','HHS000046','【测试商品-网站演示专用】 猕猴桃','+','245','0','','9995','0.000','0.12','0.10','0.00','0','0','1','','','','images/201509/thumb_img/46_thumb_G_1442426990716.jpg','images/201509/goods_img/46_G_1442426990238.jpg','images/201509/source_img/46_G_1442426990290.jpg','1','','1','1','0','0','1437624260','3','0','0','0','0','0','0','7','1442427251','0','','-1','-1','463','1','5','9.90','images/201509/1442427035043637714.jpg','0',NULL,'0','0','1','');");
E_D("replace into `hhs_goods` values('47','1','HHS000047','【测试商品-网站演示专用】姐妹果干组合套装','+','22','0','','10000','0.000','118.80','99.00','0.00','0','0','1','','','','images/201507/thumb_img/47_thumb_G_1437624459936.jpg','images/201507/goods_img/47_G_1437624459123.jpg','images/201507/source_img/47_G_1437624459347.jpg','1','','1','1','0','0','1437624459','100','0','0','0','0','0','0','0','1445549121','0','','-1','-1','463','2','5','9.90','images/201507/1438295817008213257.jpg','0','此商品不予在销售权利','0','0','1','');");
E_D("replace into `hhs_goods` values('48','1','HHS000048','test测试','+','86','0','','9998','0.000','12.00','10.00','0.00','0','0','1','','','','images/201507/thumb_img/48_thumb_G_1437678592935.jpg','images/201507/goods_img/48_G_1437678592438.jpg','images/201507/source_img/48_G_1437678592641.jpg','1','','1','1','0','0','1437678592','100','1','0','0','0','0','0','0','1438731613','0','','-1','-1','0','1','2','0.01','images/201507/1438298890381082650.jpg','0',NULL,'0','0','1','');");
E_D("replace into `hhs_goods` values('49','1','HHS000049','爬爬垫测试1','+','11','0','','10000','0.000','1.20','1.00','0.00','0','0','1','宝宝用','哆啦A梦','','images/201508/thumb_img/49_thumb_G_1438384161825.jpg','images/201508/goods_img/49_G_1438384161027.jpg','images/201508/source_img/49_G_1438384161739.jpg','1','','1','1','0','0','1438384161','100','1','0','0','0','0','0','0','1440963808','0','','-1','-1','0','1','2','0.80','','20',NULL,'0','0','1','');");
E_D("replace into `hhs_goods` values('50','45','HHS000050','aaaaa','+','0','0','','11','0.000','0.00','120.00','0.00','0','0','1','','aaa','dddddd<br />','business/uploads/87/20150804170610scjhykec.jpg','business/uploads/87/20150804170610scjhykec.jpg','business/uploads/87/20150804170610scjhykec.jpg','1','','0','1','0','0','0','100','1','0','0','0','0','0','0','1438679186','0','','-1','-1','87','1','3','15.00',NULL,'20',NULL,'0','0','1','');");
E_D("replace into `hhs_goods` values('52','45','HHS000052','【测试商品-网站演示专用】商家商品11','+','30','0','','28','0.000','0.00','0.02','0.00','0','0','1','','','大家快来买了<br />','business/uploads/463/20150805100647fxsaidgr.jpg','business/uploads/463/20150805100647fxsaidgr.jpg','business/uploads/463/20150805100647fxsaidgr.jpg','1','','1','1','0','0','0','100','0','0','0','0','0','0','0','1442427199','0','','-1','-1','463','1','5','0.01','business/uploads/463/20150805095320tgifyasc.jpg','100','aaa','0','0','1','');");
E_D("replace into `hhs_goods` values('51','45','HHS000051','测试11','+','0','0','','1000','0.000','0.00','100.00','0.00','0','0','1','','aaaa','ddddd','business/uploads/87/20150804164922vqwzipes.jpg','business/uploads/87/20150804164922vqwzipes.jpg','business/uploads/87/20150804164922vqwzipes.jpg','1','','0','1','0','0','0','100','1','0','0','0','0','0','0','1438679145','0','','-1','-1','87','1','5','10.00',NULL,'100',NULL,'0','0','1','');");
E_D("replace into `hhs_goods` values('53','45','kk2505','【测试商品-网站演示专用】 test','+','5','0','','10000','0.000','15.00','0.00','0.00','0','0','1','','','','images/201508/thumb_img/53_thumb_G_1439765282302.jpg','images/201508/goods_img/53_G_1439765282022.jpg','images/201508/source_img/53_G_1439765282812.gif','1','','1','1','0','0','1439765282','100','0','0','0','0','0','0','0','1445296442','0','','-1','-1','463','1','10','1.20','','0',NULL,'0','0','1','');");
E_D("replace into `hhs_goods` values('54','1','HHS000054','【测试商品-网站演示专用】 泰国进口  samui炭烤椰子片香酥椰子干40g','+','14','0','','10000','0.000','0.00','35.00','0.00','0','0','1','','','<img src=\"/business/uploads/465/image/20150831/20150831101229_58076.jpg\" alt=\"\" />','business/uploads/465/20150831101140zkldzryy.png','business/uploads/465/20150831101140zkldzryy.png','business/uploads/465/20150831101140zkldzryy.png','1','','1','1','0','0','0','100','1','0','0','0','0','0','0','1441046244','0','','-1','-1','465','1','2','20.00','business/uploads/465/20150831114615enyafrbd.png','20','','0','0','1','');");
E_D("replace into `hhs_goods` values('55','1','HHS000055','【测试商品-网站演示专用】猕猴桃','+','7','0','','10000','0.000','0.00','20.00','0.00','0','0','1','','','<img src=\"/business/includes/kindeditor/php/../../../uploads/465/image/20150831/20150831115449_54849.jpg\" alt=\"\" /><img src=\"/business/includes/kindeditor/php/../../../uploads/465/image/20150831/20150831115452_16736.jpg\" alt=\"\" />','business/uploads/463/20150916213943pqzhyvrq.jpg','business/uploads/463/20150916213943pqzhyvrq.jpg','business/uploads/463/20150916213943pqzhyvrq.jpg','1','','1','1','0','0','0','100','1','0','0','0','0','0','0','1442426853','0','','-1','-1','463','1','5','18.00','business/uploads/465/20150831115417epdloqab.png','80','','0','0','1','');");
E_D("replace into `hhs_goods` values('57','45','HHS000057','【测试商品-网站演示专用】猕猴桃干','+','6','0','','10000','0.000','12.00','10.00','0.00','0','0','1','','','','business/uploads/465/20150831153340lgaadwil.jpg','business/uploads/465/20150831153340lgaadwil.jpg','business/uploads/465/20150831153340lgaadwil.jpg','1','','1','1','0','0','0','100','1','0','0','0','0','0','0','1441046208','0','','-1','-1','465','1','5','8.00','business/uploads/465/20150831150023edkcquxs.png','60','','0','0','0','');");
E_D("replace into `hhs_goods` values('58','45','HHS000058','asdsadf','+','2','0','','10000','0.000','0.00','0.00','0.00','0','0','1','','','','images/201508/thumb_img/58_thumb_G_1440982125401.jpg','images/201508/goods_img/58_G_1440982125843.jpg','images/201508/source_img/58_G_1440982125071.jpg','1','','0','1','0','0','1440982125','100','1','0','0','0','0','0','0','1442371024','0','','-1','-1','0','1','5','10.00','','10',NULL,'0','0','0','');");
E_D("replace into `hhs_goods` values('60','1','HHS000060','【测试商品-网站演示专用】蜜桔','+','73','0','','100','0.110','48.00','40.00','0.00','0','0','1','','生态种植，天然品质，限时包邮','<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</p>\r\n<br />','images/201509/thumb_img/60_thumb_G_1442426599721.jpg','images/201509/goods_img/60_G_1442426433485.jpg','images/201509/source_img/60_G_1442426433536.jpg','1','','1','1','0','0','1442425783','100','0','0','0','0','0','0','0','1444941061','0','','-1','-1','0','1','5','9.90','images/201509/1442425897201031651.jpg','0',NULL,'0','0','1','');");
E_D("replace into `hhs_goods` values('59','0','HHS000059','1010','+','0','0','','200','0.000','0.00','30.00','0.00','0','0','1','','','','business/uploads/463/20150916213704fnwkznhj.jpg','business/uploads/463/20150916213704fnwkznhj.jpg','business/uploads/463/20150916213704fnwkznhj.jpg','1','','1','1','0','0','0','100','1','0','0','0','0','0','0','1442426853','0','','-1','-1','463','1','5','20.00','','0','','0','0','1','');");
E_D("replace into `hhs_goods` values('61','0','HHS000061','','+','3','0','','0','0.000','0.00','0.00','0.00','0','0','1','','','aaaaaaaaaa','','','','1','','1','1','0','0','0','100','0','0','0','0','0','0','0','1443429856','10','','-1','-1','463',NULL,'5','0.00','','0',NULL,'0','0','1','');");
E_D("replace into `hhs_goods` values('62','1','HHS000062','蒙自枇杷','+','7','0','','10000','0.000','0.00','127.00','0.00','0','0','1','','','','business/uploads/463/20151021232510bsgmutde.jpg','business/uploads/463/20151021232510bsgmutde.jpg','business/uploads/463/20151021232510bsgmutde.jpg','1','','1','1','0','0','0','100','0','0','0','0','0','0','0','1445488339','0','','-1','-1','463','1','3','89.00','business/uploads/463/20151021232522qusamrim.jpg','6202','','0','0','1','');");

require("../../inc/footer.php");
?>