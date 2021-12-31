
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
					$sql=mysql_query("select * from tb_xuanshangling where id=" . $id);
					$info = mysql_fetch_array($sql);
					?>
					<div><h2>人物信息</h2>
					<div>				
					<table width="950" border="1" cellspacing="0" cellpadding="0" align="center">
						<tr>
							<td width="120" height="90" rowspan="4">
							<img src="<?php echo $info[tupian]?>" border="0">;</td>
							<td width="86">人物名称：</td>
							<td width="81"><?php echo $info[mingcheng];?>;</td>
							<td width="87">添加时间：</td>
							<td width="117"><?php echo $info[addtime];?>;</td>
						</tr>
						<tr>
							<td>悬赏金额：</td>
							<td><?php echo $info[xuanshang]?>;</td>
							<td>身份：</td>
							<td><?php echo $info[shenfen]?>;</td>
						</tr>
						<tr>
							<td>称呼：</td>
							<td><?php echo $info[chenghu]?>;</td>
							<td>能力：</td>
							<td><?php echo $info[nengli]?>;</td>
						</tr>
						<tr>
							<td>登场时间：</td>
							<td><?php echo $info[dengchang]?>;</td>
							<td colspan="2">&nbsp;</td>
						</tr>
						<tr>
							<td height="131">人物简介：</td>
							<td colspan="4"><?php echo $info[jianjie]?></td>
						</tr>
					</table>
			</div>
			
			</div>
			<div class="foot">
				<?php include("bottom.php");?>
				</div>
				
			</div>
			
			<div class="clear"></div>
			