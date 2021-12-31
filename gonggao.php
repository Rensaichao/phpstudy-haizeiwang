
	<meta charset="UTF-8">
    
	<link href="css/style.css" rel="stylesheet" />
       	<link href="css/style1.css" rel="stylesheet" />
     	<link href="css/loading.css" rel="stylesheet" />


<style>
	li{ margin:0px; padding:0px;}
</style>


	<div class="con">
		<div class="head">
			<div class="logo">
				<h1>海贼王</h1>
			</div>
			<div style="width:145px; float:left;">
				<marquee direction="left" scrollamount="1">致  敬 ！ 海贼王  致  敬 ！ 海贼王 致  敬 ！ 海贼王</marquee>
			</div>
			<div id="top3" align="right">
			   <form action="serchjuese.php" method="post" name="form">
			  <input name="name" type="text" id="textfield" size="20" />
			  <input name="jdcz" type="hidden" id="hiddenField" value="jdcz" />
			 
			    <input name="submit" type="submit" id="button" value="搜索" />
			</form>
			  </div>
			<div style="clear:both;"></div>
			<div class="nav">
	  			<ul>
	  				<li><a href="index.php">首页</a></li>
	  				<li><a href="showqiangnenglizhe.php">强者世界</a></li>
	  			    <li><a href="showzhongli.php">中立方</a></li>
	  				<li onmouseover="javascript:document.getElementById('list3').style.display='block'" onmouseout="javascript:document.getElementById('list3').style.display='none'">
	  					<a href="member.php">人物介绍</a>
	  			 	</li>
	  				<li><a href="picture.php">图片欣赏</a></li>
	  			    <li><a href="fruit.php">恶魔果实</a></li>
	  			    <li><a href="news.php">资讯</a></li>
					<li><a href="showfenlei.php">角色分类</a></li>
	  				<li><a href="author.php">作者</a></li>
					
	  			</ul>
       
    		</div>
    		<div class="clear"></div>
  		</div>
 		<div class="clear"></div>
  		<div class="lunbo"><a href="#"><img src="images/2.png"  width="1024"/></a></div>
  		<div class="clear"></div>
  		<div class="main">
			<?php
			$id=$_GET[id];
			include("conn/conn.php");
			$sql=mysql_query("select * from tb_zixun where id=".$id);
			$info=mysql_fetch_array($sql);
			?>
			<div align="center"><h3>资讯主题：<?php echo $info[title];?></h3> </div>
			<div>
			<img src="<?php echo $info[tupian];?>" width="300" height="90" border="0">	
			</div>
			<div><p><?php echo $info[content];?></p><br />
			
			发布时间：<font size="+1" color="#FF0000"><?php echo $info[time];?></font>
			</div>
							
			
			</div>
			<div class="foot">
				<?php include("bottom.php");?>
				</div>
				
			</div>
			
			<div class="clear"></div>
			