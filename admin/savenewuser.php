<?php
header("Content-Type:text/html; charset=utf-8");
 include("../conn/conn.php");
 $name=$_POST[name];
 $pwd=$_POST[pwd];

 mysql_query("insert into tb_admin (name,pwd) values ('$name','$pwd')",$conn);
 echo "<script>alert('用户添加成功!');history.back();</script>";
?>
