<html>
<head>
<title>SPK Pemilihan Guru Berprestasi</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="SPK Pemilihan Guru Berprestasi" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->
				<div class="header-main">
					<div class="logo-w3-agile">
								<h1><a href="index.php">Dashboard</a></h1>
							</div>
						<div class="profile_details w3l">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/in4.jpg" alt=""> </span> 
												<div class="user-name">
													<p></p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="http://localhost/spkwp/"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>edit Guru</li>
            </ol>
<!---->
<?php
mysql_connect("localhost","root","");
mysql_select_db("guru_wp");

$nik=mysql_real_escape_string($_GET['nik']);
$det=mysql_query("select * from guru where nik='$nik'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
		$nik   = stripslashes($d["nik"]);
		$nama = stripslashes($d["nama"]);
		$jk  = $d["jk"];
		$alamat  = $d["alamat"];
	}
?>	
  <div class="grid-form1">
  	    <div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
				<form action="update_guru.php" method="post" class="form-horizontal">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Nik</label>
							<div class="col-sm-8">
								<input type="text" name="nik" class="form-control1" id="focusedinput" value="<?php echo $nik; ?>" required="">
							</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Nama Guru</label>
							<div class="col-sm-8">
								<input type="text" name="nama" class="form-control1" id="focusedinput" value="<?php echo $nama; ?>" required="">
							</div>
					</div>
					<div class="form-group">
						<label for="checkbox" class="col-sm-2 control-label">Jenis Kelamin</label>
							<div class="col-sm-8">
								<div class="checkbox-inline"><label><input type="checkbox" name="jk" value="Laki-Laki" <?php if ($jk=="Laki-Laki"): ?> checked="" <?php endif ?> "">Laki-Laki</label></div>
								<div class="checkbox-inline"><label><input type="checkbox" name="jk" value="Perempuan" <?php if ($jk=="Perempuan"): ?> checked="" <?php endif ?> "">Perempuan</label></div>
							</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
							<div class="col-sm-8">
								<textarea name="alamat" id="alamat" class="form-control"><?php echo $alamat ?></textarea>
							</div>
					</div>
					<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button name="submit" type="submit" class="btn btn-primary">Submit</button>
						<button name="reset" type="reset" class="btn btn-default">Reset</button>
					</div>
					</div>
				</form>
			</div>
		</div>
    </form>
  </div>
</div>

<!--//grid-->

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2017 | SPK Pemilihan Guru Berprestasi | Design by  <a href="" target="_blank">Me</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>									
										<li id="menu-academico" ><a href="input_guru.php"><i class="fa fa-envelope nav_icon"></i><span>Input Guru</span><div class="clearfix"></div></a></li>
										<li><a href="guru.php"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Lihat Guru</span><div class="clearfix"></div></a></li>
										<li id="menu-academico" ><a href="input_kriteria.php"><i class="fa fa-bar-chart"></i><span>Input Nilai Kriteria</span><div class="clearfix"></div></a></li>
										<li id="menu-academico" ><a href="kriteria.php"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i><span>Kriteria</span><div class="clearfix"></div></a></li>  
										<li><a href="tabels.html"><i class="fa fa-table"></i>  <span>Hasil</span><div class="clearfix"></div></a></li>
									</ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>