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

//$upfile=$_POST[upfile];
if($upfile!="")
{
$sql=mysql_query("select * from tb_xuanshangling where id=".$_GET[id]."",$conn);
$info=mysql_fetch_array($sql);
@unlink(substr($info[tupian],6,(strlen($info[tupian])-6)));
}

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

$uploadfile="admin/".$uploadfile;

$jianjie=$_POST[jianjie];
$addtime=$nian."-".$yue."-".$ri;

mysql_query("update tb_xuanshangling set mingcheng='$mingcheng',jianjie='$jianjie',addtime='$addtime',xuanshang='$xuanshang',tupian='$uploadfile',typeid='$typeid',shenfen='$shenfen',nengli='$nengli',chenghu='$chenghu',dengchang='$dengchang' where id=".$_GET[id]."",$conn);
echo "<script>alert('角色".$mingcheng."修改成功!');history.back();;</script>";
?>
