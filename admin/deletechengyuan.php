<?php
	header("Content-Type:text/html; charset=utf-8");
 include("../conn/conn.php");
  while(list($name,$value)=each($_POST))
  {
    mysql_query("delete from tb_chengyuan where id='".$value."'",$conn);
  
  }
 header("location:glnews.php");  
?>
