<?php
header("Content-Type:text/html; charset=utf-8");
include("../conn/conn.php");
while(list($name,$value)=each($_POST)){
 	mysql_query("delete from tb_type where id='".$value."'",$conn);
 	mysql_query("delete from tb_xuanshangling where typeid='".$value."'",$conn);
}
header("location:showleibie.php");
?>
