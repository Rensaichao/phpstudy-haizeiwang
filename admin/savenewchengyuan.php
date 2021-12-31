<?php
header("Content-Type:text/html; charset=utf-8");
 include("../conn/conn.php");
 $mingcheng=$_POST[mingcheng];
 $jianjie=$_POST[jianjie];
 $upfile=$_POST[upfile];
  
 function getname($exname){
   $dir = "upimages/";
   $i=1;
   if(!is_dir($dir)){
      mkdir($dir,0777);
   }
   
   while(true){
       if(!is_file($dir.$i.".".$exname)){
	       $name=$i.".".$exname;
	       break;
	   }
	   $i++;
	 }

   return $dir.$name;
}

$exname=strtolower(substr($_FILES['upfile']['name'],(strrpos($_FILES['upfile']['name'],'.')+1)));
$uploadfile = getname($exname);

move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile);
 mysql_query("insert into tb_chengyuan (mingcheng,jianjie,tupian) values ('$mingcheng','$jianjie','$uploadfile')",$conn);
 echo "<script>alert('成员添加成功!');history.back();</script>";
?>
