<?php
	header("Content-Type:text/html; charset=utf-8");
  $mingcheng=$_POST[mingcheng];
  $jianjie=$_POST[jianjie];
  include("../conn/conn.php");
  mysql_query("update tb_chengyuan set mingcheng='$mingcheng',jianjie='$jianjie' where id='".$_POST[id]."'",$conn);
  echo "<script>alert('角色修改成功!');history.back();</script>";
?>
