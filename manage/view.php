<?php
ob_start();
session_start();
if($_SESSION['quanxian']=="yes")
{
}
else
{
	header("location:index.php");
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" >
<title>菜脑壳无线点餐后台管理系统</title>
</head>
<frameset rows="70,*" cols="*" framespacing="0" frameborder="no" border="0">
<frame src="left.html" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" />
<frame src="center.html" name="mainFrame" id="mainFrame"/>
<!--<frame src="down.html" name="bottomFrame" scrolling="No" noresize="noresize" id="bottomFrame" />-->
</frameset>
<noframes><body>你的浏览器不支持frameset,请换成高版本的浏览器！！！！
</body>
</noframes></html>