<?php
header("Content-Type:text/html; charset=utf-8");
include("../conn/conn.php");

$mingcheng=$_POST[mingcheng];
$nian=$_POST[nian];
$yue=$_POST[yue];
$ri=$_POST[ri];
$xuanshang=$_POST[xuanshang];
$typeid=$_POST[typeid];

$shenfen=$_POST[shenfen];
$nengli=$_POST[nengli];
$chenghu=$_POST[chenghu];
$dengchang=$_POST[dengchang];
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
if(trim($_FILES['upfile']['name']!=""))
 { 
  $uploadfile="admin/".$uploadfile;
}
else
 {
  $uploadfile="";
 }

$jianjie=$_POST[jianjie];
$addtime=$nian."-".$yue."-".$ri;
mysql_query("insert into tb_xuanshangling(mingcheng,jianjie,addtime,typeid,xuanshang,shenfen,nengli,chenghu,tupian,dengchang)values('$mingcheng','$jianjie','$addtime','$typeid','$xuanshang','$shenfen','$nengli','$chenghu','$uploadfile','$dengchang')",$conn);
echo "<script>alert('角色".$mingcheng."添加成功!');window.location.href='addjuese.php';</script>";
?>
