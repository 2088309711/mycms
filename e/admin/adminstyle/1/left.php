<?php
define('EmpireCMSAdmin', '1');
require("../../../class/connect.php");
require("../../../class/db_sql.php");
require("../../../class/functions.php");
$link = db_connect();
$empire = new mysqlquery();
$editor = 2;
//验证用户
$lur = is_login();
$logininid = $lur['userid'];
$loginin = $lur['username'];
$loginrnd = $lur['rnd'];
$loginlevel = $lur['groupid'];
$loginadminstyleid = $lur['adminstyleid'];
//ehash
$ecms_hashur = hReturnEcmsHashStrAll();
$r = ReturnLeftLevel($loginlevel);
$movecolor = " onMouseOver=\"this.style.backgroundColor='#EFEFEF'\" onMouseOut=\"this.style.backgroundColor='#FFFFFF'\"";
$gid = (int)$_GET['gid'];
//参数设置
$display = "";
if ($display == "") {
    $addimg = "images/noadd.gif";
} else {
    $addimg = "images/add.gif";
}
$ecms = RepPostVar(RepPathStr($_GET['ecms']));
$menus = ',system,classdata,template,usercp,tool,extend,other,fastmenu,';
$ecms = str_replace(',', '', $ecms);
if (!strstr($menus, ',' . $ecms . ',')) {
    exit();
}
$showmenu = 'menu/' . $ecms . '.php';
if ($ecms && strstr($menus, ',' . $ecms . ',') && file_exists($showmenu)) {
    @include($showmenu);
}
db_close();
$empire = null;
?>