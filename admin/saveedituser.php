<?php
	header("Content-Type:text/html; charset=utf-8");
  $name=$_POST[name];
  $pwd=$_POST[pwd];
  include("../conn/conn.php");
  mysql_query("update tb_admin set name='$name',pwd='$pwd' where id='".$_POST[id]."'",$conn);
  echo "<script>alert('用户修改成功!');history.back();</script>";
?>
