<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `hhs_email_sendlist`;");
E_C("CREATE TABLE `hhs_email_sendlist` (
  `id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `template_id` mediumint(8) NOT NULL,
  `email_content` text NOT NULL,
  `error` tinyint(1) NOT NULL DEFAULT '0',
  `pri` tinyint(10) NOT NULL,
  `last_send` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8");
E_D("replace into `hhs_email_sendlist` values('12','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437548996');");
E_D("replace into `hhs_email_sendlist` values('13','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437564299');");
E_D("replace into `hhs_email_sendlist` values('14','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437611528');");
E_D("replace into `hhs_email_sendlist` values('15','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437623505');");
E_D("replace into `hhs_email_sendlist` values('16','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437623739');");
E_D("replace into `hhs_email_sendlist` values('17','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437623756');");
E_D("replace into `hhs_email_sendlist` values('18','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437624079');");
E_D("replace into `hhs_email_sendlist` values('19','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437624241');");
E_D("replace into `hhs_email_sendlist` values('20','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437624302');");
E_D("replace into `hhs_email_sendlist` values('21','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437624599');");
E_D("replace into `hhs_email_sendlist` values('22','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437624663');");
E_D("replace into `hhs_email_sendlist` values('23','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437624890');");
E_D("replace into `hhs_email_sendlist` values('24','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437624905');");
E_D("replace into `hhs_email_sendlist` values('25','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437636130');");
E_D("replace into `hhs_email_sendlist` values('26','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437637233');");
E_D("replace into `hhs_email_sendlist` values('27','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437637244');");
E_D("replace into `hhs_email_sendlist` values('28','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437637256');");
E_D("replace into `hhs_email_sendlist` values('29','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437637270');");
E_D("replace into `hhs_email_sendlist` values('30','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437651910');");
E_D("replace into `hhs_email_sendlist` values('31','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437651921');");
E_D("replace into `hhs_email_sendlist` values('32','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437651929');");
E_D("replace into `hhs_email_sendlist` values('33','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437706143');");
E_D("replace into `hhs_email_sendlist` values('34','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437706177');");
E_D("replace into `hhs_email_sendlist` values('35','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437706197');");
E_D("replace into `hhs_email_sendlist` values('36','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437706210');");
E_D("replace into `hhs_email_sendlist` values('37','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437706303');");
E_D("replace into `hhs_email_sendlist` values('38','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437706842');");
E_D("replace into `hhs_email_sendlist` values('39','','6','<br />\n<b>Parse error</b>:  syntax error, unexpected ''>'' in <b>/www/phpnow/wwwroot/test.xakc.net/vshop/includes/cls_template.php(1165) : eval()''d code</b> on line <b>1</b><br />\n','0','1','1437720306');");
E_D("replace into `hhs_email_sendlist` values('40','','6','','0','1','1438235070');");
E_D("replace into `hhs_email_sendlist` values('41','','6','','0','1','1438327593');");
E_D("replace into `hhs_email_sendlist` values('42','','6','','0','1','1438329228');");
E_D("replace into `hhs_email_sendlist` values('43','','6','','0','1','1438329274');");
E_D("replace into `hhs_email_sendlist` values('44','','6','','0','1','1438331334');");
E_D("replace into `hhs_email_sendlist` values('45','','6','','0','1','1438331344');");
E_D("replace into `hhs_email_sendlist` values('46','','6','','0','1','1438331392');");
E_D("replace into `hhs_email_sendlist` values('47','','6','','0','1','1438331420');");
E_D("replace into `hhs_email_sendlist` values('48','','6','','0','1','1438332096');");
E_D("replace into `hhs_email_sendlist` values('49','','6','','0','1','1438332848');");
E_D("replace into `hhs_email_sendlist` values('50','','6','','0','1','1438336310');");
E_D("replace into `hhs_email_sendlist` values('51','','6','','0','1','1438337325');");
E_D("replace into `hhs_email_sendlist` values('52','','6','','0','1','1438337396');");
E_D("replace into `hhs_email_sendlist` values('53','','6','','0','1','1438406896');");
E_D("replace into `hhs_email_sendlist` values('54','','6','','0','1','1438406906');");
E_D("replace into `hhs_email_sendlist` values('55','','6','','0','1','1438406990');");
E_D("replace into `hhs_email_sendlist` values('56','','6','','0','1','1438410031');");
E_D("replace into `hhs_email_sendlist` values('57','','6','','0','1','1438411190');");
E_D("replace into `hhs_email_sendlist` values('58','','6','','0','1','1438411205');");
E_D("replace into `hhs_email_sendlist` values('59','','6','','0','1','1438411866');");
E_D("replace into `hhs_email_sendlist` values('60','','6','','0','1','1438411875');");
E_D("replace into `hhs_email_sendlist` values('61','','6','','0','1','1438412720');");
E_D("replace into `hhs_email_sendlist` values('62','','6','','0','1','1438412729');");
E_D("replace into `hhs_email_sendlist` values('63','','6','','0','1','1438413035');");
E_D("replace into `hhs_email_sendlist` values('64','','6','','0','1','1438420455');");
E_D("replace into `hhs_email_sendlist` values('65','','6','','0','1','1438420465');");
E_D("replace into `hhs_email_sendlist` values('66','','6','','0','1','1438574369');");
E_D("replace into `hhs_email_sendlist` values('67','','6','','0','1','1438582816');");
E_D("replace into `hhs_email_sendlist` values('68','','6','','0','1','1438738494');");
E_D("replace into `hhs_email_sendlist` values('69','','6','','0','1','1438738584');");
E_D("replace into `hhs_email_sendlist` values('70','','6','','0','1','1438739889');");
E_D("replace into `hhs_email_sendlist` values('71','','6','','0','1','1438740065');");
E_D("replace into `hhs_email_sendlist` values('72','','6','','0','1','1438740172');");
E_D("replace into `hhs_email_sendlist` values('73','','6','','0','1','1438740362');");
E_D("replace into `hhs_email_sendlist` values('74','','6','','0','1','1438760391');");

require("../../inc/footer.php");
?>