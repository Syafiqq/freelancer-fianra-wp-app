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
    <!-- tables -->
    <link rel="stylesheet" type="text/css" href="css/table-style.css"/>
    <link rel="stylesheet" type="text/css" href="css/basictable.css"/>
    <script type="text/javascript" src="js/jquery.basictable.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#table').basictable();

            $('#table-breakpoint').basictable({
                breakpoint: 768
            });

            $('#table-swap-axis').basictable({
                swapAxis: true
            });

            $('#table-force-off').basictable({
                forceResponsive: false
            });

            $('#table-no-resize').basictable({
                noResize: true
            });

            $('#table-two-axis').basictable();

            $('#table-max-height').basictable({
                tableWrapper: true
            });
        });
    </script>
    <!-- //tables -->
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
                    Kriteria
                </li>
            </ol>

            <?php
            mysql_connect("localhost", "root", "");
            mysql_select_db("guru_wp");
            $per_hal = 10;
            $jumlah_record = mysql_query("SELECT COUNT(*) from kriteria");
            $jum = mysql_result($jumlah_record, 0);
            $halaman = ceil($jum / $per_hal);
            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
            $start = ($page - 1) * $per_hal;
            ?>
            <div class="col-md-12">
                <table class="col-md-2">
                    <tr>
                        <td>Jumlah Record</td>
                        <td><?php echo $jum; ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah Halaman</td>
                        <td><?php echo $halaman; ?></td>
                    </tr>
                </table>
            </div>

            <div class="agile-grids">
                <!-- tables -->
                <div class="agile-tables">
                    <form action="edit_kriteria.php" method="post">
                        <div class="w3l-table-info">
                            <table id="table-max-height" class="max-height">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>C1</th>
                                    <th>C2</th>
                                    <th>C3</th>
                                    <th>C4</th>
                                    <th>C5</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                mysql_connect("localhost", "root", "");
                                mysql_select_db("guru_wp");
                                $nomor = 0;
                                $tampil = mysql_query("select * from kriteria limit $start, $per_hal");
                                while ($data = mysql_fetch_array($tampil))
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $nomor = $nomor + 1; ?></td>
                                        <td><?php echo $data['nik']; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td><?php echo $data['c1']; ?></td>
                                        <td><?php echo $data['c2']; ?></td>
                                        <td><?php echo $data['c3']; ?></td>
                                        <td><?php echo $data['c4']; ?></td>
                                        <td><?php echo $data['c5']; ?></td>
                                        <td><?php echo "<a href=edit_kriteria.php?nik=$data[nik]>Edit</a>" ?></td>
                                        <td><?php echo "<a href=delete_kriteria.php?nik=$data[nik]>Delete</a>" ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                            <ul class="pagination">
                                <?php
                                for ($x = 1; $x <= $halaman; $x++)
                                {
                                    ?>
                                    <li>
                                        <a href="?page=<?php echo $x ?>"><?php echo $x ?></a>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </form>
                    <!-- //tables -->
                </div>
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
                        <a href="hasil.php">
                            <i class="fa fa-table"></i>
                            <span>Hasil</span>
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
