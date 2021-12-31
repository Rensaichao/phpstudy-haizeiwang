
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
			<div id="biaoti"><h2>强者世界</h2></div>
						<?php
						  include("conn/conn.php");
						  $pagesize = 2;
						  $sql = mysql_query("select * from tb_xuanshangling where typeid in('3','4','5')");
			    $total = mysql_num_rows($sql);
						  if(!$_GET[page]){
							$page = 1;
						  }else{
							$page = $_GET[page];
						  }
						  $sql1 = "select * from tb_xuanshangling where typeid in('3','4','5') order by addtime desc limit "
						  .(($page - 1)*$pagesize).",".$pagesize;
						  $rs = mysql_query($sql1);
						  $nur = ceil($total/$pagesize);
						  echo "<a href='showzhongli.php?page=1'>首页</a>";
						  if($page >= 2){
						?>
						<a href="showzhongli.php?page=<?php echo $page-1;?>">上一页</a>
						<?php
						  }
						  if($page < $nur){
						?>
						<a href="showzhongli.php?page=<?php echo $page+1;?>">下一页</a>
						<?php
						  }
						?>
						<a href="showzhongli.php?page=<?php echo $nur;?>">尾页</a>
						<?php
						  echo "<div>";
						  while($rst = mysql_fetch_row($rs)){
						?>
						<table>
						  <tr>
							<td colspan="7" width="557" background="images/line1.gif">&nbsp;</td>
						  </tr>
						  <tr>
							<td width="99" rowspan="5">
							  <img src="<?php echo $rst[4];?>" width="95" height="61" border="0" /></td>
							<td width="86" colspan="2">名  称：</td>
							<td colspan="3"><?php echo $rst[1];?></td>
						  </tr>
						  <tr>
							<td width="83" colspan="2">身份：</td>		
							<td colspan="2"><?php echo $rst[5];?></td>
						  </tr>	  
						  <tr >
							<td colspan="2">简  介：</td>
							<td colspan="3"><?php echo $rst[2];?></td>
						  </tr>	
						  <tr>
							<td colspan="3">添加时间：</td>
							<td  ><?php echo $rst[3];?></td>
							 </tr>
							 
							 <tr>
							<td width="60">悬赏：</td>	
							<td><?php echo $rst[8];?></td>	
									
							<td>称呼:<?php echo $rst[9];?></td>
						 </tr>
						  <tr>
							<td colspan="4">登场时间：</td>
							<td><?php echo $rst[10];?></td>		
							
						  </tr>		  
						</table>
						<?php
						  }
						?>
						<table width="557" border="0" cellspacing="0" cellpadding="0" >
						  <tr>
							<td colspan="7" width="557" background="images/line1.gif">&nbsp;</td>
						  </tr>		
						</table>
						<?php
						  echo "<a href='showzhongli.php?page=1'>首页</a>";
						  if($page >= 2){
						?>
						<a href="showzhongli.php?page=<?php echo $page-1;?>">上一页</a>
						<?php
						  }
						  if($page < $nur){
						?>
						<a href="showzhongli.php?page=<?php echo $page+1;?>">下一页</a>
						<?php
						  }	
						?>
						<a href="showzhongli.php?page=<?php echo $nur;?>">尾页</a>
			</div>
			
			
			</div>
			<div class="foot">
				<?php include("bottom.php");?>
				</div>
				
			</div>
			
			<div class="clear"></div>
			