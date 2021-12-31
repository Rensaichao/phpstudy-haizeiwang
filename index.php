
	<meta charset="UTF-8">
    
	<link href="css/style.css" rel="stylesheet" />
       	<link href="css/style1.css" rel="stylesheet" />
     	<link href="css/loading.css" rel="stylesheet" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/Ukenn2112/UkennWeb@3.0/index/web.js"></script>


<style>
	li{ margin:0px; padding:0px;}
	
	.main {
	  display: grid;
	  grid-gap: 5px;

	  padding: 5px;
	}
	
	.main > div {
	  background-color: rgba(255, 255, 255, 0.8);
	  text-align: center;
	  padding: 100px 0;
	  font-size: 20px;
	
	}
	
	.zixun {
	  grid-column-start: 1;
	  
	  grid-column-end: 1;
	}
	
	

	.zuopin_list {
	  grid-column-start: 1;
	  
	  grid-column-end: 1;
	}
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
    	
  		</div>
 
  		<div class="lunbo"><a href="#"><img src="images/2.png"  width="1024"/></a></div>
  		<div class="clear"></div>
  		<div class="main">
    		<h2>海贼王</h2>
    		<p>《ONE PIECE》（海贼王、航海王）动画，在《周刊少年Jump》1997年34号开始连载，于1999年10月20日在日本富士电视台开始播放，至今仍在播放中。中国搜狐视频网站拥有该片中国大陆地区独家版权，每周日10:00更新一集（中午12:00更新字幕），截止至2015年5月，点阅率已超过50亿次。截止至2013年11月，发行量在全世界突破3.45亿册，是全世界发行量最高的日本漫画。漫画单行本的翻译版本在日本以外有30个以上的国家和地区出版发行。相关商品在2012年度的市场规模约达1000亿日元。2012年在第41回日本漫画家协会上获得大赏。2015年6月15日，《ONE PIECE》以日本本土累计发行了3亿2086万6000本，被吉尼斯世界纪录官方认证为“世界上发行量最高的单一作者创作的系列漫画”。</p>
			<h2>海贼王资讯</h2>
			
			
		<div class="zixun" align="left">
			<?php
				include("conn/conn.php");
					$rs = mysql_query("select * from tb_zixun order by time desc limit 0,6");
					$total = mysql_num_rows($rs);
					if($total == 0){
						echo "<div align = 'center'>暂无资讯！</div>";
					}else{
						while($rst = mysql_fetch_row($rs)){ 
						
							
			?>
					<div id="xwen"><img src="images/circle.jpg" width="10" height="10">
						<a href="gonggao.php?id=<?php echo $rst[0];?>">
							<?php
							echo substr( $rst[1], 0, 40 );
							if ( strlen( $rst[1] ) > 40 ) {
								echo "...";
							}
							?>
						</a>
						</div>
						<?php
						}
						}
						?>
				<a href="news.php"><font size="5">=======================更多===================</font></a>	
		</div>


		<div class="main1">
		<div class="zuopin_list">
			<h2>强者世界</h2>
			<ul>
				<?php 	include("conn/conn.php");
								 $sql=mysql_query("select * from tb_xuanshangling where typeid='1' order by addtime desc limit 0,1");
										$info=mysql_fetch_array($sql);
								  ?>
				<li><a href="lookinfo.php?id=<?php echo $info[id];?>">
				<?php
					if(trim($info[tupian]=="")){
						echo "暂无图片";
					}else{
				?>
				<img src="<?php echo $info[tupian];?>" />
				<?php
					}
				?>
				
				</a>
				<figcaption>
				名 称：<?php echo $info[mingcheng];?>
				</figcaption>
			  <p>能力：<?php echo $info[nengli];?></p>
				</li>
				<?php
					$sql=mysql_query("select * from tb_xuanshangling where typeid='1' order by addtime desc limit 1,1");
					$info=mysql_fetch_array($sql);
				?>
				
				<li>	<figcaption>
								名 称：<?php echo $info[mingcheng];?>
								</figcaption>
				<p>能力：<?php echo $info[nengli];?></p></li>
				<li>
				<a href="lookinfo.php?id=<?php echo $info[id];?>">
				<?php
					if(trim($info[tupian]=="")){
						echo "暂无图片";
					}else{
				?>
					<img src="<?php echo $info[tupian];?>" >
				<?php
					}
				?>
				</a>
			
				</li>
		<?php
			$sql=mysql_query("select * from tb_xuanshangling where typeid='2' order by addtime desc limit 0,1");
			$info=mysql_fetch_array($sql);
		?>
			<li><figcaption>
							名 称：<?php echo $info[mingcheng];?>
							</figcaption>
			<p>能力：<?php echo $info[nengli];?></p></li>
				
			
				<li>
			
					<img src="images/09.jpg" >
			
				</li>
			
			
				<li>
			
					
				
				</li>
			<li><img src="images/20.jpg"/></li>
			<li></li>
				<li><a href="lookinfo.php?id=<?php echo $info[id];?>"><?php
					if(trim($info[tupian]=="")){
						echo "暂无图片";
					}else{
				?>
					<img src="<?php echo $info[tupian];?>" >
				<?php
					}
				?></a></li>
				
				
				<li></li>
			
			</ul>
			<div class="clear">
			<a href="showqiangnenglizhe.php"><font size="5">=======================更多===================</font></a>	
			</div>

			
		</div>
	
		<div class="hezhao_list">
			<h2>中立者</h2>
				<ul>
					<?php
						$sql=mysql_query("select * from tb_xuanshangling where typeid='3'  limit 0,1");
						$info=mysql_fetch_array($sql);
					?>
				    <li><a href="lookinfo.php?id=<?php echo $info[id];?>"><?php
				if(trim($info[tupian]=="")){
					echo "暂无图片";
				}else{
			?>
				<img src="<?php echo $info[tupian];?>" width="120" height="90" border="0">
			<?php
				}
			?></a><p><?php echo $info[jianjie];?></p></li>
			
			<?php
				$sql=mysql_query("select * from tb_xuanshangling where typeid='4'  limit 0,1");
				$info=mysql_fetch_array($sql);
			?>
				    <li><a href="lookinfo.php?id=<?php echo $info[id];?>"><?php
				if(trim($info[tupian]=="")){
					echo "暂无图片";
				}else{
			?>
				<img src="<?php echo $info[tupian];?>" width="120" height="90" border="0">
			<?php
				}
			?></a><p><?php echo $info[jianjie];?></p></li>
				<?php
					$sql=mysql_query("select * from tb_xuanshangling where typeid='4'  limit 1,1");
					$info=mysql_fetch_array($sql);
				?>
				    <li><a href="lookinfo.php?id=<?php echo $info[id];?>"><?php
				if(trim($info[tupian]=="")){
					echo "暂无图片";
				}else{
			?>
				<img src="<?php echo $info[tupian];?>" width="120" height="90" border="0">
			<?php
				}
			?></a><p><?php echo $info[jianjie];?></p></li>
				</ul>
				<div class="clear">
				<a href="showzhongli.php"><font size="5">=======================更多===================</font></a>	
				</div>
				<div class="clear">
						
				</div>
		</div>	

  		<div class="foot">
    	<?php include("bottom.php");?>
  		</div>
		
  	</div>



