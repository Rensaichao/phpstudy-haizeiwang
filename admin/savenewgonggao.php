<?php
header("Content-Type:text/html; charset=utf-8");
 include("../conn/conn.php");
 $title=$_POST[title];
 $content=$_POST[content];
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
 
 $time=date("Y-m-j");
 mysql_query("insert into tb_zixun (title,content,time,tupian) values ('$title','$content','$time','$uploadfile')",$conn);
 echo "<script>alert('资讯添加成功!');history.back();</script>";
?>
