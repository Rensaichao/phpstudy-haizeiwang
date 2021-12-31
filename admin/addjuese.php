
  

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
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	        <link rel="stylesheet" type="text/css" href="css/font.css">
	        <style type="text/css">
	        <!--
	        .style1 {color: #FFFFFF}
	        -->
	        </style>
	        <?php include("../conn/conn.php");?>
	<table width="548" border="0" align="center" cellpadding="0" cellspacing="0">
	          <tr>
	            <td width="548" height="20" bgcolor="royalblue"><div align="center" class="style1">添加角色</div></td>
	          </tr>
	          <tr>
	            <td height="253" bgcolor="#666666"><table width="552" border="0" cellpadding="0" cellspacing="1">
	            <script language="javascript">
	            function chkinput(form)
	            {
	              if(form.mingcheng.value=="")
	               {
	                 alert("请输入角色名称!");
	                 form.mingcheng.select();
	                 return(false);
	               }
	              
	              if(form.shichangjia.value=="")
	               {
	                 alert("请输入角色市场价!");
	                 form.shichangjia.select();
	                 return(false);
	               }
	              if(form.dengji.value=="")
	               {
	                 alert("请输入车型等级!");
	                 form.dengji.select();
	                 return(false);
	               }
	           
	               if(form.pinpai.value=="")
	               {
	                 alert("请输入角色!");
	                 form.pinpai.select();
	                 return(false);
	               }
	               
	               if(form.xinghao.value=="")
	               {
	                 alert("请输入角色!");
	                 form.xinghao.select();
	                 return(false);
	               }
	               if(form.shuliang.value=="")
	               {
	                 alert("请输入角色!");
	                 form.shuliang.select();
	                 return(false);
	               }
	               if(form.jianjie.value=="")
	               {
	                 alert("请输入角色简介!");
	                 form.jianjie.select();
	                 return(false);
	               }
	            
	               return(true);
	            }
	            </script>
	             <form name="form1" enctype="multipart/form-data" method="post" action="savenewjuese.php" onSubmit="return chkinput(this)">
	              <tr>
	                <td width="62" height="25" bgcolor="#FFFFFF"><div align="center">角色名称：</div></td>
	                <td width="476" bgcolor="#FFFFFF"><div align="left">
	                  <input type="text" name="mingcheng" size="25" class="inputcss" />
	                </div></td>
	              </tr>
	              <tr>
	                <td width="62" height="25" bgcolor="#FFFFFF"><div align="center">添加时间：</div></td>
	                <td width="476" height="25" bgcolor="#FFFFFF"><div align="left">
	        <select name="nian" class="inputcss">
	         <?php 
	          for($i=1995;$i<=2050;$i++)
	          {
	         ?>
	          <option><?php echo $i;?></option>
	          <?php 
	          }
	         ?>
	        </select>          
	        年
	                  <select name="yue" class="inputcss">
	                    <?php 
	                    for($i=1;$i<=12;$i++)
	                     {
	                    ?>
	                   <option><?php echo $i;?></option>
	                    <?php 
	                     }
	                     ?>
	                  </select>
	                  月
	                  <select name="ri" class="inputcss">
	                  <?php 
	                    for($i=1;$i<=31;$i++)
	                     {
	                    ?>
	                  
	                    <option><?php echo $i;?></option>
	                 <?php 
	                     }
	                     ?>
	                  </select>
	                  日</div></td>
	              </tr>
	              <tr>
	                <td width="62" height="62" bgcolor="#FFFFFF"><div align="center">悬赏：</div></td>
	                <td width="476" height="25" bgcolor="#FFFFFF"><div align="left">悬赏金额：<input type="text" name="xuanshang" size="10" class="inputcss" >
	                  贝里&nbsp;</div></td>
	              </tr>
	              <tr>
	                <td width="62" height="25" bgcolor="#FFFFFF"><div align="center">角色类型：</div></td>
	               <td width="476" height="25" bgcolor="#FFFFFF"><div align="left">
	                   <?php
	                    $sql=mysql_query("select * from tb_type order by id desc",$conn);
	                    $info=mysql_fetch_array($sql);
	                    if($info==false)
	                    {
	                      echo "请先添加角色类型!";
	                    }
	                    else
	                    {
	                    ?>
	                    <select name="typeid" class="inputcss">
	                    <?php
	                    do
	                    {
	                    ?>
	                      <option value=<?php echo $info[id];?>><?php echo $info[typename];?></option>
	                    <?php
	                    }
	                    while($info=mysql_fetch_array($sql));
	                    ?>  
	                    </select>
	                    <?php
	                     }
	                    ?>
	                </div></td>
	              </tr>
	           
	              <tr>
	                <td width="62" height="22" bgcolor="#FFFFFF"><div align="center">角色身份：</div></td>
	                <td width="476" height="22" bgcolor="#FFFFFF"><div align="left"><input type="text" name="shenfen" class="inputcss" size="20"></div></td>
	              </tr>
	              <tr>
	                <td width="62" height="25" bgcolor="#FFFFFF"><div align="center">角色能力：</div></td>
	                <td width="476" height="25" bgcolor="#FFFFFF"><div align="left"><input type="text" name="nengli" class="inputcss" size="20"></div></td>
	              </tr>
	              <tr>
	                <td width="62" height="25" bgcolor="#FFFFFF"><div align="center">角色称呼：</div></td>
	          <td width="476" height="25" bgcolor="#FFFFFF"><div align="left"><input type="text" name="chenghu" class="inputcss" size="20"></div></td>
	             </div>
	              </td>
	              </tr>
	            <tr>
	                  <td width="62" height="25" bgcolor="#FFFFFF"><div align="center">登场时间：</div></td>
	            <td width="476" height="25" bgcolor="#FFFFFF"><div align="left"><input type="text" name="dengchang" class="inputcss" size="20"></div></td>
	               </div>
	                </td>
	                </tr>
	              <tr>
	                <td width="62" height="25" bgcolor="#FFFFFF"><div align="center">角色图片：</div></td>
	                <td width="476" height="25" bgcolor="#FFFFFF"><div align="left">
	                <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
	                <input type="file" name="upfile" class="inputcss" size="30"></div></td>
	              </tr>
	              <tr>
	                <td width="62" height="80" bgcolor="#FFFFFF"><div align="center">角色简介：</div></td>
	                <td width="476" height="25" bgcolor="#FFFFFF"><div align="left"><textarea name="jianjie" cols="74" rows="8" class="inputcss"></textarea>
	                </div></td>
	              </tr>
	              <tr>
	                <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center"><input name="submit" type="submit" class="buttoncss" id="submit" value="添加">
	                &nbsp;&nbsp;<input type="reset" value="重写" class="buttoncss"></div></td>
	              </tr>
	              </form>
	            </table></td>
	          </tr>
	        </table>   
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
