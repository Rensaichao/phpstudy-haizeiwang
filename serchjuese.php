
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
			include("conn/conn.php");
			$jdcz=$_POST[jdcz];
			$name=$_POST[name];
			echo "<div><h2>搜索结果：</h2></div>";
			if($jdcz="jdcz"){
					 $sql=mysql_query("select * from tb_xuanshangling where mingcheng like '%" . $name. "%'");
					 $total=mysql_num_rows($sql);
					 if($total>0){
						 while($rst=mysql_fetch_row($sql)){
							 echo "<div><img src='images/circle.jpg' width='10' height='10'>";
							 echo "<a href='lookinfo.php?id=".$rst[0]."'>".$rst[1]."</a></div>";
						 }
					 }else{
						 echo "<div>本站暂无类似角色!</div>";
					 }
			}
			?> 
			
			</div>
			<div class="foot">
				<?php include("bottom.php");?>
				</div>
				
			</div>
			
			<div class="clear"></div>
			