<?php
if(!defined('InEmpireBak'))
{
	exit();
}

//Database
$phome_db_ver="5.0";
$phome_db_server="localhost";
$phome_db_port="";
$phome_db_username="haohai";
$phome_db_password="a147258369";
$phome_db_dbname="haohai_pts";
$baktbpre="";
$phome_db_char="";

//USER
$set_username="admin";
$set_password="e9bc0e13a8a16cbb07b175d92a113126";
$set_loginauth="xaphp";
$set_loginrnd="YFfd33mV2MrKwDenkecYWZETWgUwMV";
$set_outtime="60";
$set_loginkey="1";

//COOKIE
$phome_cookiedomain="";
$phome_cookiepath="/";
$phome_cookievarpre="ebak_";

//LANGUAGE
$langr=ReturnUseEbakLang();
$ebaklang=$langr['lang'];
$ebaklangchar=$langr['langchar'];

//BAK
$bakpath="bdata";
$bakzippath="zip";
$filechmod="1";
$phpsafemod="";
$php_outtime="1000";
$limittype="";
$canlistdb="";

//------------ SYSTEM ------------
HeaderIeChar();
?>