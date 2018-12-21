<?php
include "../config/config.php";
include ROOT."/include/function.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");
$db= new Db();
$mod = Utils::getIndex("mod");
if ($mod== "login")
{
	$u = Utils::postIndex("username");
	$p = Utils::postIndex("password");
	$sql ="select username, name, email, phone from admin where username=:u and password= :p ";
	$arr = array(":u"=>$u, ":p"=>$p);
	$data = $db->exeQuery($sql, $arr);
	if ($db->getRowCount()>0)
	{
		$_SESSION["admin_login"] =1;
		$_SESSION["admin_data"] = $data[0];
	}
}
if ($mod== "logout")
{
		unset($_SESSION["admin_login"] );
		unset($_SESSION["admin_data"]);
}
if (!isset($_SESSION["admin_login"]))
{
	include "login.html";exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
<title>Simpla Admin</title>
		
		<!--                       CSS                       -->
	  
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="resources/css/reset.css" type="text/css" media="screen" />
	  
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="resources/css/style.css" type="text/css" media="screen" />
		
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="resources/css/invalid.css" type="text/css" media="screen" />	
		
		
		<script type="text/javascript" src="resources/scripts/jquery-1.3.2.min.js"></script>
		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="resources/scripts/simpla.jquery.configuration.js"></script>
		
		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="resources/scripts/facebox.js"></script>
		
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="resources/scripts/jquery.wysiwyg.js"></script>
		
		<!-- jQuery Datepicker Plugin -->
		<script type="text/javascript" src="resources/scripts/jquery.datePicker.js"></script>
		<script type="text/javascript" src="resources/scripts/jquery.date.js"></script>
		
		
	</head>
  
	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#"> Admin</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="resources/images/logo.png" alt="Simpla Admin logo" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Hello, <a href="#" title="Edit your profile">[<?php echo $_SESSION["admin_data"]["name"];?>]</a><br />
               
				<br />
				<a href="../" title="View the Site">View the Site</a> 
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					<a href="#" class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Dashboard
					</a>     
                    <ul>
                    	<li><a href="#">Đổi mật khẩu</a></li>
                        <li><a href="#">Đổi thông tin </a></li>
                        <li><a href="index.php?mod=logout" title="Sign Out">Thoát</a></li>
                        
                    </ul>  
				</li>
				
				<li> 
					<a href="#" class="nav-top-item current"> <!-- Add the class "current" to current menu item -->
					Quản lý
		      		</a>
					<ul><?php
							$g =Utils::getIndex("group", "banve");
							$classChiTietTuyen = $classTuyen = $classLichTrinh = $classTau = $classGa ="";
							if ($g=="tau") $classTau =" current";
							if ($g=="lichtrinh") $classLichTrinh =" current";
							if ($g=="ga") $classGa =" current";
							if ($g=="tuyen") $classTuyen = "current";
							if ($g=="chitiettuyen") $classChiTietTuyen = "current";
						?>
						<li><a class="<?php echo $classTau;?>" href="index.php?mod=banve&group=tau">Tàu</a></li>
						<li><a  class="<?php echo $classGa;?>"  href="index.php?mod=banve&group=ga">Ga</a></li> <!-- Add class "current" to sub menu items also -->
						<li><a  class="<?php echo $classLichTrinh;?>"  href="index.php?mod=banve&group=lichtrinh">Lịch Trình</a></li>
						<li><a  class="<?php echo $classTuyen;?>"  href="index.php?mod=banve&group=tuyen">Tuyến</a>
						</li>
						<li><a  class="<?php echo $classChiTietTuyen;?>"  href="index.php?mod=banve&group=chitiettuyen">Chi Tiết Tuyến</a>
						</li>
					</ul>
				</li>
				
		    
				
			</ul> <!-- End #main-nav -->
			
			
			
		</div></div> <!-- End #sidebar -->
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notifitauion if the user has disabled javascript -->
				<div class="notifitauion error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					Download From <a href="http://www.exet.tk">exet.tk</a></div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2>Welcome [admin]</h2>
		
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Content box</h3>
					
				
					
				  <div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
					
					<?php
					include "mod.php";
					?>
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
			
			
			
<div id="footer">
				<small> <!-- Remove this notice or replace it with whatever you want -->
						&#169; Copyright 2009 Your Company | Powered by <a href="http://themeforest.net/item/simpla-admin-flexible-user-friendly-admin-skin/46073">Simpla Admin</a> | <a href="#">Top</a>
				</small>
			</div><!-- End #footer -->
			
		</div> <!-- End #main-content -->
		
	</div></body>
  

<!-- Download From www.exet.tk-->
</html>
