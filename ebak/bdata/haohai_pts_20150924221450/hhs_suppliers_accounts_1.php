<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_suppliers_accounts`;");
E_C("CREATE TABLE `hhs_suppliers_accounts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `suppliers_id` int(10) NOT NULL,
  `settlement_amount` decimal(10,2) NOT NULL COMMENT '结算总额',
  `settlement_status` int(10) NOT NULL DEFAULT '0' COMMENT '结算状态 1待审核 2已审核  3已付款待确认  4已完成',
  `start_time` varchar(30) NOT NULL,
  `end_time` varchar(30) NOT NULL,
  `add_time` varchar(30) NOT NULL COMMENT '结算时间',
  `commission` decimal(10,2) NOT NULL COMMENT '结算佣金',
  `add_month` varchar(30) NOT NULL,
  `settlement_sn` varchar(30) NOT NULL COMMENT '结算单号',
  `remark` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=125 DEFAULT CHARSET=utf8 COMMENT='商家结算'");
E_D("replace into `hhs_suppliers_accounts` values('1','9','1200.00','3','1422691200','1425110399','1425604078','0.00','201502','2015030651002',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('2','9','2560.20','2','1422691200','1425110399','1425669495','0.00','201502','2015030797311',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('3','9','2560.20','3','1422691200','1425110399','1425669671','0.00','201502','2015030741307',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('4','9','2560.45','1','1422691200','1425110399','1425670006','0.00','201502','2015030777822',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('5','9','2560.45','1','1422691200','1425110399','1425670440','0.00','201502','2015030780621',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('6','9','2560.45','1','1422691200','1425110399','1425671395','0.00','201502','2015030743965',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('7','9','2560.45','3','1422691200','1425110399','1425675907','0.00','201502','2015030767967',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('8','9','2560.45','2','1422691200','1425110399','1425677363','0.00','201502','2015030743606',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('9','9','2560.45','2','1422691200','1425110399','1425677384','0.00','201502','2015030735703',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('10','9','2623.15','1','1422691200','1425110399','1425684825','0.00','201502','2015030722371',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('11','46','570.00','3','1422691200','1425110399','1425686146','0.00','201502','2015030746745',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('12','46','2612.50','2','1422691200','1425110399','1425687038','0.00','201502','2015030729515',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('13','46','5779.35','1','1422691200','1425110399','1425687967','0.00','201502','2015030732912',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('14','46','9590.27','1','1422691200','1425110399','1425689895','0.00','201502','2015030730362',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('15','46','9590.27','3','1422691200','1425110399','1425841495','0.00','201502','2015030997450',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('16','9','0.00','1','1422691200','1425110399','1425856523','0.00','201502','2015030980193',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('17','9','0.00','1','1422691200','1425110399','1425864756','0.00','201502','2015030925534',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('18','9','99.00','2','1422691200','1425110399','1425865686','0.00','201502','2015030941739','撒打发斯蒂芬');");
E_D("replace into `hhs_suppliers_accounts` values('19','50','0.00','2','1422691200','1425110399','1425921570','0.00','201502','2015031055358',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('20','47','0.00','1','1422691200','1425110399','1426007307','0.00','201502','2015031145088',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('21','9','890.00','3','1422691200','1425110399','1426114147','0.00','201502','2015031288982',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('22','60','0.01','4','1422691200','1425110399','1426187953','0.00','201502','2015031306796','');");
E_D("replace into `hhs_suppliers_accounts` values('23','9','890.00','3','1422691200','1425110399','1426208327','0.00','201502','2015031364041',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('24','175','0.00','1','1425139200','1427817599','1429511850','0.00','201503','2015042084839',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('25','175','4520.00','1','1425139200','1427817599','1429512658','0.00','201503','2015042062881',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('26','87','9.90','3','1425139200','1427817599','1429512809','0.00','201503','2015042062709','');");
E_D("replace into `hhs_suppliers_accounts` values('27','175','4520.00','2','1425139200','1427817599','1429513136','0.00','201503','2015042012723','');");
E_D("replace into `hhs_suppliers_accounts` values('29','63','8020.00','2','1427817600','1430409599','1430720555','0.00','201504','2015050496662','');");
E_D("replace into `hhs_suppliers_accounts` values('30','143','204230.00','2','1427817600','1430409599','1430720766','0.00','201504','2015050401322','');");
E_D("replace into `hhs_suppliers_accounts` values('31','161','81.00','2','1427817600','1430409599','1430895721','0.00','201504','2015050658746','');");
E_D("replace into `hhs_suppliers_accounts` values('32','208','138.00','2','1427817600','1430409599','1430899580','0.00','201504','2015050641265','');");
E_D("replace into `hhs_suppliers_accounts` values('33','352','0.00','1','1427817600','1430409599','1431051673','0.00','201504','2015050873903',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('34','87','20.00','4','1427817600','1430409599','1431051780','0.00','201504','2015050804286','tghbgn');");
E_D("replace into `hhs_suppliers_accounts` values('35','161','81.00','3','1427817600','1430409599','1431399506','0.00','201504','2015051236633','');");
E_D("replace into `hhs_suppliers_accounts` values('36','161','81.00','3','1427817600','1430409599','1431399512','0.00','201504','2015051240316','');");
E_D("replace into `hhs_suppliers_accounts` values('37','63','73299.00','3','','','1432704953','0.00','','2015052783525','');");
E_D("replace into `hhs_suppliers_accounts` values('38','143','408905.00','6','','','1432705184','0.00','','2015052718945','');");
E_D("replace into `hhs_suppliers_accounts` values('39','378','34225.00','1','','','1432776508','0.00','','2015052862136',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('40','378','34225.00','1','','','1432776521','0.00','','2015052802288',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('41','378','34225.00','1','','','1432776575','0.00','','2015052805855',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('118','87','390.00','7','','','1436251394','0.00','','2015070703052','');");
E_D("replace into `hhs_suppliers_accounts` values('117','87','0.00','3','','','1436251243','0.00','','2015070745634','');");
E_D("replace into `hhs_suppliers_accounts` values('116','87','225.00','11','','','1436248112','0.00','','2015070792317','');");
E_D("replace into `hhs_suppliers_accounts` values('115','378','34225.00','1','','','1435041285','0.00','','2015062378972',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('114','362','7200.00','1','','','1435041285','0.00','','2015062310934',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('113','208','308.00','1','','','1435041284','0.00','','2015062363840',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('112','175','4520.00','1','','','1435041284','0.00','','2015062300392',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('111','172','334.00','1','','','1435041284','0.00','','2015062382612',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('110','161','81.00','1','','','1435041284','0.00','','2015062343089',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('109','143','1105870.00','1','','','1435041283','0.00','','2015062319672',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('108','156','85.00','1','','','1435041283','0.00','','2015062334689',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('107','152','1075.00','1','','','1435041283','0.00','','2015062319073',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('106','160','13730.00','1','','','1435041283','0.00','','2015062349130',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('105','63','429162.00','1','','','1435041283','0.00','','2015062309226',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('104','87','165.00','1','','','1435041283','0.00','','2015062363596',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('103','75','7966.00','1','','','1435041283','0.00','','2015062316517',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('102','49','80.50','1','','','1435041283','0.00','','2015062353294',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('119','463','0.00','0','','','1438714344','0.00','','2015080545816',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('120','463','0.00','0','','','1438714672','0.00','','2015080566596',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('121','463','0.00','0','','','1438714729','0.00','','2015080595498',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('122','463','0.02','1','','','1438714875','0.00','','2015080520482',NULL);");
E_D("replace into `hhs_suppliers_accounts` values('123','463','0.02','7','','','1438714941','0.00','','2015080586105','');");
E_D("replace into `hhs_suppliers_accounts` values('124','463','0.02','7','','','1438714962','0.00','','2015080596057','ddd');");

require("../../inc/footer.php");
?>