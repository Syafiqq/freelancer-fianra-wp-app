<!DOCTYPE HTML>
<html>
<head>
    <title>SPK Pemilihan Guru Berprestasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="SPK Pemilihan Guru Berprestasi"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar()
        {
            window.scrollTo(0, 1);
        } </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="css/morris.css" type="text/css"/>
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- //jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css'/>
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
                    <h1>
                        <a href="index.php">Dashboard</a>
                    </h1>
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
                                <li>
                                    <a href="http://localhost/spkwp/">
                                        <i class="fa fa-sign-out"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="clearfix"></div>
            </div>
            <!--heder end here-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Home</a>
                    <i class="fa fa-angle-right"></i>
                    Bobot
                </li>
            </ol>
            <!--pilih bobot-->
            <div class="grid-form1">
                <div class="tab-content">
                    <div class="tab-pane active" id="horizontal-form">
                        <h3 align="center">Pilih Bobot</h3>
                        <div>
                            <h5>* Bobot 1 = Sangat Rendah</h5>
                            <h5>* Bobot 2 = Rendah</h5>
                            <h5>* Bobot 3 = Cukup</h5>
                            <h5>* Bobot 4 = Tinggi</h5>
                            <h5>* Bobot 5 = Sangat Tinggi</h5>
                        </div>
                        <form action="bobot.php" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">C1. Absensi</label>
                                <div class="col-sm-8">
                                    <select name="bobot_c1" class="form-control">
                                        <option value="1">Bobot 1</option>
                                        <option value="2">Bobot 2</option>
                                        <option value="3">Bobot 3</option>
                                        <option value="4">Bobot 4</option>
                                        <option value="5">Bobot 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">C2. Atitut</label>
                                <div class="col-sm-8">
                                    <select name="bobot_c2" class="form-control">
                                        <option value="1">Bobot 1</option>
                                        <option value="2">Bobot 2</option>
                                        <option value="3">Bobot 3</option>
                                        <option value="4">Bobot 4</option>
                                        <option value="5">Bobot 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">C3. Loyaritas</label>
                                <div class="col-sm-8">
                                    <select name="bobot_c3" class="form-control">
                                        <option value="1">Bobot 1</option>
                                        <option value="2">Bobot 2</option>
                                        <option value="3">Bobot 3</option>
                                        <option value="4">Bobot 4</option>
                                        <option value="5">Bobot 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">C4. Disiplin</label>
                                <div class="col-sm-8">
                                    <select name="bobot_c4" class="form-control">
                                        <option value="1">Bobot 1</option>
                                        <option value="2">Bobot 2</option>
                                        <option value="3">Bobot 3</option>
                                        <option value="4">Bobot 4</option>
                                        <option value="5">Bobot 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">C5. Skill</label>
                                <div class="col-sm-8">
                                    <select name="bobot_c5" class="form-control">
                                        <option value="1">Bobot 1</option>
                                        <option value="2">Bobot 2</option>
                                        <option value="3">Bobot 3</option>
                                        <option value="4">Bobot 4</option>
                                        <option value="5">Bobot 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                                    <button name="reset" type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"></li>
                </ol>

                <div class="tab-content" id="print-area-2" class="print-area">
                    <div class="tab-pane active" id="horizontal-form">

                        <h4 align="center">
                            <?php
                            if (isset($_POST['submit']))
                            {

                                $bobot_c1 = $_POST['bobot_c1'];
                                $bobot_c2 = $_POST['bobot_c2'];
                                $bobot_c3 = $_POST['bobot_c3'];
                                $bobot_c4 = $_POST['bobot_c4'];
                                $bobot_c5 = $_POST['bobot_c5'];
                                echo "<h4 align='center'>Bobot yang di Pilih :
							C1 (<font color=blue>" . $bobot_c1 . "</font>) | C2 (<font color=blue>" . $bobot_c2
                                    . "</font>) | C3 (<font color=blue>" . $bobot_c3 . "</font>) | C4 (<font color=blue>"
                                    . $bobot_c4 . "</font>) | C5 (<font color=blue>" . $bobot_c5 . "</font>)</h4>";

                                mysql_connect("localhost", "root", "");
                                mysql_select_db("guru_wp");
                                mysql_query("delete from bobot");

                                $sql = "INSERT INTO bobot (c1, c2, c3, c4, c5) values ('$bobot_c1','$bobot_c2','$bobot_c3','$bobot_c4','$bobot_c5')";
                                $query = mysql_query($sql) or die(mysql_error());

                            } ?>
                        </h4>
                    </div>
                    <!--end pilih bobot-->
                </div>
                <!--//grid-->

                <!-- script-for sticky-nav -->
                <script>
                    $(document).ready(function () {
                        var navoffeset = $(".header-main").offset().top;
                        $(window).scroll(function () {
                            var scrollpos = $(window).scrollTop();
                            if (scrollpos >= navoffeset)
                            {
                                $(".header-main").addClass("fixed");
                            } else
                            {
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
                    <p>© 2017 | SPK Pemilihan Guru Berprestasi | Design by
                        <a href="" target="_blank">Me</a>
                    </p>
                </div>
                <!--COPY rights end here-->
            </div>
        </div>
        <!--//content-inner-->
        <!--/sidebar-menu-->
        <div class="sidebar-menu">
            <header class="logo1">
                <a href="#" class="sidebar-icon">
                    <span class="fa fa-bars"></span>
                </a>
            </header>
            <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
            <div class="menu">
                <ul id="menu">
                    <li>
                        <a href="index.php">
                            <i class="fa fa-tachometer"></i>
                            <span>Dashboard</span>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li id="menu-academico">
                        <a href="input_guru.php">
                            <i class="fa fa-envelope nav_icon"></i>
                            <span>Input Guru</span>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="guru.php">
                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                            <span>Lihat Guru</span>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li id="menu-academico">
                        <a href="input_kriteria.php">
                            <i class="fa fa-bar-chart"></i>
                            <span>Input Nilai Kriteria</span>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li id="menu-academico">
                        <a href="kriteria.php">
                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                            <span>Kriteria</span>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="bobot.php">
                            <i class="fa fa-tachometer"></i>
                            <span>Bobot</span>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="hasil.php">
                            <i class="fa fa-table"></i>
                            <span>Hasil</span>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    <li>
                        <a href="print.php">
                            <i class="fa fa-print"></i>
                            <span>Laporan</span>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <script>
        var toggle = true;

        $(".sidebar-icon").click(function () {
            if (toggle)
            {
                $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                $("#menu span").css({"position": "absolute"});
            }
            else
            {
                $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                setTimeout(function () {
                    $("#menu span").css({"position": "relative"});
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
