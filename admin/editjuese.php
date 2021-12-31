
  

<meta charset="utf-8">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/admin.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="default.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">海贼王</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar" align="center">
      <h1>海贼王网站后台管理</h1>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
   
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>角色管理</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
    <li>
      <a href="addjuese.php" class="active">
        <i class="bi bi-circle"></i><span>添加角色</span>
      </a>
    </li>
          <li>
            <a href="editjuese.php" class="active">
              <i class="bi bi-circle"></i><span>修改角色</span>
            </a>
          </li>
		  <li>
		    <a href="showleibie.php" class="active">
		      <i class="bi bi-circle"></i><span>类别管理</span>
		    </a>
		  </li>
		  <li>
		    <a href="addleibie.php" class="active">
		      <i class="bi bi-circle"></i><span>添加类别</span>
		    </a>
		  </li>
        </ul>
      <!-- End Tables Nav -->
   <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>资讯管理</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
    <li>
      <a href="glnews.php" class="active">
        <i class="bi bi-circle"></i><span>管理资讯</span>
      </a>
    </li>
          <li>
            <a href="addnews.php" class="active">
              <i class="bi bi-circle"></i><span>发布资讯</span>
            </a>
          </li>
        </ul>
     
	 
	 <ul class="sidebar-nav" id="sidebar-nav">
	    <li class="nav-item">
	      <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
	        <i class="bi bi-layout-text-window-reverse"></i><span>用户管理</span><i class="bi bi-chevron-down ms-auto"></i>
	      </a>
	      <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
	  <li>
	    <a href="gluser.php" class="active">
	      <i class="bi bi-circle"></i><span>管理用户</span>
	    </a>
	  </li>
	        <li>
	          <a href="adduser.php" class="active">
	            <i class="bi bi-circle"></i><span>添加用户</span>
	          </a>
	        </li>
	      </ul>

	 <ul class="sidebar-nav" id="sidebar-nav">
	    <li class="nav-item">
	      <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
	        <i class="bi bi-layout-text-window-reverse"></i><span>草帽团成员管理</span><i class="bi bi-chevron-down ms-auto"></i>
	      </a>
	      <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
	  <li>
	    <a href="glchengyuan.php" class="active">
	      <i class="bi bi-circle"></i><span>管理成员</span>
	    </a>
	  </li>
	        <li>
	          <a href="addchengyuan.php" class="active">
	            <i class="bi bi-circle"></i><span>添加成员</span>
	          </a>
	        </li>
	      </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">
	<style type="text/css">
	        <!--
	        .style1 {color: #FFFFFF}
	        -->
	        </style>
	        <?php
	          include("../conn/conn.php");
	        ?>
	        
	        <?php
	               $sql=mysql_query("select count(*) as total from tb_xuanshangling ",$conn);
	               $info=mysql_fetch_array($sql);
	               $total=$info[total];
	               if($total==0){
	                 echo "本站暂无商品!";
	               }
	               else
	                {
	        ?>
	      <form name="form1" method="post" action="deletejuese.php">
	        <table width="565" border="0" align="center" cellpadding="0" cellspacing="0">
	          <tr>
	            <td height="75" bgcolor="#666666"><table width="585" height="86" border="0" cellpadding="0" cellspacing="1">
	              
	              <tr bgcolor="royalblue">
	                <td height="20" colspan="10"><div align="center" class="style1">修改角色信息</div></td>
	              </tr>
	              <tr>
	                <td width="39" height="28" bgcolor="#FFFFFF"><div align="center">复选</div></td>
	                <td width="72" bgcolor="#FFFFFF"><div align="center">名称</div></td>
	                <td width="66" bgcolor="#FFFFFF"><div align="center">悬赏</div></td>
	
	                <td width="40" bgcolor="#FFFFFF"><div align="center">角色身份</div></td>
	                <td width="60" bgcolor="#FFFFFF"><div align="center">角色能力</div></td>
	                <td width="60" bgcolor="#FFFFFF"><div align="center">角色称呼</div></td>
	                <td width="92" bgcolor="#FFFFFF"><div align="center">登场时间</div></td>
	                <td width="68" bgcolor="#FFFFFF"><div align="center">操作</div></td>
	              </tr>
	              <?php
	              
	                   $pagesize=20;
	                   if ($total<=$pagesize){
	                      $pagecount=1;
	                    } 
	                    if(($total%$pagesize)!=0){
	                       $pagecount=intval($total/$pagesize)+1;
	                    
	                    }else{
	                       $pagecount=$total/$pagesize;
	                    
	                    }
	                    if(($_GET[page])==""){
	                        $page=1;
	                    
	                    }else{
	                        $page=intval($_GET[page]);
	                    
	                    }
	                     
	                   $sql1=mysql_query("select * from tb_xuanshangling order by addtime desc limit ".($page-1)*$pagesize.",$pagesize",$conn);
	                   while($info1=mysql_fetch_array($sql1))
	                    {
	              ?>
	              <tr>
	                <td height="25" bgcolor="#FFFFFF"><div align="center">
	                  <input type="checkbox" name="<?php echo $info1[id];?>" value=<?php echo $info1[id];?>>
	                </div></td>
	                <td height="25" bgcolor="#FFFFFF">
	                  
	                  <div align="center"><?php echo $info1[mingcheng];?></div></td>
	                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[xuanshang];?></div></td>
	                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[shenfen];?></div></td>
	
	                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[nengli];?></div></td>
	                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[chenghu];?></div></td>
	                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[dengchang];?></div></td>
	                <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="xgjuese.php?id=<?php echo $info1[id];?>"><img src="images/circle.jpg"></a></div></td>
	              </tr>
	             <?php
	                }
	                
	              ?>
	             
	            </table></td>
	          </tr>
	        </table>
	        <table width="565" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
	          <tr>
	            <td width="155">
	              <div align="left"><input name="submit" type="submit" class="buttoncss" id="submit" value="删除选择">
	              &nbsp;<input type="reset" value="重新选择" class="buttoncss"></div></td>
	            <td width="410" align="left"><div align="right">本站共有角色
	                <?php
	                   echo $total;
	                  ?>
	                个每页显示;<?php echo $pagesize;?>个第<?php echo $page;?>页/共<?php echo $pagecount; ?>页
	<?php
	               echo "<a href='editjuese.php?page=1'><font face='webdings'>9</font></a>";
		if($page >= 2){
	?>
			<a href="editjuese.php?page=<?php echo $page-1;?>"><font face="webdings">7</font></a>
	<?php
		}
		if($page < $pagecount){
	?>
			<a href="editjuese.php?page=<?php echo $page+1;?>"><font face="webdings">8</font></a>
	<?php
		}
	?>
			<a href="editjuese.php?page=<?php echo $pagecount;?>"><font face="webdings">:</font></a>
	
	            </div></td>
	          </tr>
	        </table>
	      </form>
	          <?php
	            }
	          ?>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      2019742012 任赛超
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
     
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
