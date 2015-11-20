<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_settlement_action`;");
E_C("CREATE TABLE `hhs_settlement_action` (
  `action_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `settlement_id` int(10) unsigned NOT NULL DEFAULT '0',
  `action_user` varchar(30) NOT NULL DEFAULT '',
  `status` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `action_note` text NOT NULL,
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  `settlement_sn` varchar(30) DEFAULT NULL COMMENT '结算编号',
  PRIMARY KEY (`action_id`),
  KEY `settlement_id` (`settlement_id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_settlement_action` values('5','46','平台','3','dddd','1434193275','2015061367501');");
E_D("replace into `hhs_settlement_action` values('4','46','珍佰农自营店','2','bbbb','1434186533','2015061367501');");
E_D("replace into `hhs_settlement_action` values('6','46','平台','3','aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa','1434193356','2015061367501');");
E_D("replace into `hhs_settlement_action` values('7','46','平台','3','awwwwwwwwwwwwwwwwwwwww','1434193400','2015061367501');");
E_D("replace into `hhs_settlement_action` values('8','46','平台','3','啊啊啊啊啊啊','1434195419','2015061367501');");
E_D("replace into `hhs_settlement_action` values('9','46','平台','4','啊啊啊啊','1434195437','2015061367501');");
E_D("replace into `hhs_settlement_action` values('10','46','珍佰农自营店','5','aaaaaaaaaaaaaaaaaaaa','1434256873','2015061367501');");
E_D("replace into `hhs_settlement_action` values('11','46','珍佰农自营店','5','bbbbbbbbbb','1434257348','2015061367501');");
E_D("replace into `hhs_settlement_action` values('12','46','平台','6','付款付款付款付款付款','1434257417','2015061367501');");
E_D("replace into `hhs_settlement_action` values('13','46','珍佰农自营店','7','wwwwwww','1434257487','2015061367501');");
E_D("replace into `hhs_settlement_action` values('14','47','珍佰农自营店','2','bbbb','1434269459','2015061468289');");
E_D("replace into `hhs_settlement_action` values('15','47','平台','3','bbbbaaa','1434269473','2015061468289');");
E_D("replace into `hhs_settlement_action` values('16','47','平台','4','aaaa','1434269479','2015061468289');");
E_D("replace into `hhs_settlement_action` values('17','47','珍佰农自营店','5','bbbbwww','1434269499','2015061468289');");
E_D("replace into `hhs_settlement_action` values('18','47','平台','6','wwwqqqq','1434269508','2015061468289');");
E_D("replace into `hhs_settlement_action` values('19','47','珍佰农自营店','7','aaaqqqq','1434269532','2015061468289');");
E_D("replace into `hhs_settlement_action` values('20','48','珍佰农自营店','2','','1434336360','2015061565666');");
E_D("replace into `hhs_settlement_action` values('21','48','平台','3','','1434336419','2015061565666');");
E_D("replace into `hhs_settlement_action` values('22','48','平台','4','','1434336629','2015061565666');");
E_D("replace into `hhs_settlement_action` values('23','48','珍佰农自营店','5','','1434336679','2015061565666');");
E_D("replace into `hhs_settlement_action` values('24','48','平台','6','','1434336697','2015061565666');");
E_D("replace into `hhs_settlement_action` values('25','50','珍佰农自营店','2','','1434357222','2015061529266');");
E_D("replace into `hhs_settlement_action` values('26','50','平台','11','','1434357238','2015061529266');");
E_D("replace into `hhs_settlement_action` values('27','50','平台','11','2015061572921没有不符合结算日期','1434357282','2015061529266');");
E_D("replace into `hhs_settlement_action` values('28','50','平台','11','ppppppppppppppppppppp','1434358297','2015061529266');");
E_D("replace into `hhs_settlement_action` values('29','37','平台','3','','1434424370','2015052783525');");
E_D("replace into `hhs_settlement_action` values('30','116','珍佰农自营店','2','','1436250732','2015070792317');");
E_D("replace into `hhs_settlement_action` values('31','116','平台','11','','1436251103','2015070792317');");
E_D("replace into `hhs_settlement_action` values('32','117','珍佰农自营店','2','','1436251269','2015070745634');");
E_D("replace into `hhs_settlement_action` values('33','117','平台','3','','1436251289','2015070745634');");
E_D("replace into `hhs_settlement_action` values('34','118','珍佰农自营店','2','','1436251417','2015070703052');");
E_D("replace into `hhs_settlement_action` values('35','118','平台','3','','1436251713','2015070703052');");
E_D("replace into `hhs_settlement_action` values('36','118','平台','4','','1436251795','2015070703052');");
E_D("replace into `hhs_settlement_action` values('37','118','珍佰农自营店','5','','1436252122','2015070703052');");
E_D("replace into `hhs_settlement_action` values('38','118','平台','6','','1436252606','2015070703052');");
E_D("replace into `hhs_settlement_action` values('39','118','珍佰农自营店','7','','1436252889','2015070703052');");
E_D("replace into `hhs_settlement_action` values('40','124','平台','3','aaaa','1438715772','2015080596057');");
E_D("replace into `hhs_settlement_action` values('41','124','lijunfeng','5','aaaa','1438715979','2015080596057');");
E_D("replace into `hhs_settlement_action` values('42','124','平台','6','aaaa','1438716005','2015080596057');");
E_D("replace into `hhs_settlement_action` values('43','124','lijunfeng','7','ddd','1438724749','2015080596057');");
E_D("replace into `hhs_settlement_action` values('44','123','lijunfeng  【测试-网站演示专用】','2','','1442376994','2015080586105');");
E_D("replace into `hhs_settlement_action` values('45','123','平台','3','','1442377128','2015080586105');");
E_D("replace into `hhs_settlement_action` values('46','123','lijunfeng  【测试-网站演示专用】','5','','1442377311','2015080586105');");
E_D("replace into `hhs_settlement_action` values('47','123','平台','6','','1442377472','2015080586105');");
E_D("replace into `hhs_settlement_action` values('48','123','lijunfeng  【测试-网站演示专用】','7','','1442377606','2015080586105');");

require("../../inc/footer.php");
?>