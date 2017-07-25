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
                    Laporan
                </li>
            </ol>

            <!--pilih bobot-->
            <div class="grid-form1">
                <div class="tab-content">
                    <div class="tab-pane active" id="horizontal-form">
                        <form method="post" class="form-horizontal">
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Waktu Perhitungan</label>
                                <div class="col-sm-8">
                                    <select name="result" class="form-control">
                                        <?php
                                        mysql_connect("localhost", "root", "");
                                        mysql_select_db("guru_wp");
                                        $nomor = 0;
                                        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                                        $query = mysql_query("SELECT id, timestamp FROM result");
                                        while ($data = mysql_fetch_array($query))
                                        {
                                            echo "<option value=\"{$data['id']}\">{$data['timestamp']}</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    <?php
                                    if (isset($_POST['submit']))
                                    {
                                        if (isset($_POST['result']))
                                        {
                                            mysql_connect("localhost", "root", "");
                                            mysql_select_db("guru_wp");
                                            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                                            $query = mysql_query("SELECT id FROM result WHERE id={$_POST['result']}");
                                            if (!empty(mysql_fetch_array($query)))
                                            {
                                                echo '<button type="button" id="print_result" class="btn btn-primary">Cetak</button>';
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            if (isset($_POST['submit']))
            {
                if (isset($_POST['result']))
                {
                    mysql_connect("localhost", "root", "");
                    mysql_select_db("guru_wp");
                    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                    $query = mysql_query("SELECT id FROM result WHERE id={$_POST['result']}");
                    if (!empty(mysql_fetch_array($query)))
                    {

                        ?>
                        <div class="grid-form1" id="print-container">
                            <div class="tab-content" id="print-area-2" class="print-area">
                                <div class="tab-pane active" id="horizontal-form">

                                    <h4 align="center">Bobot yang di Pilih :
                                        <?php
                                        mysql_connect("localhost", "root", "");
                                        mysql_select_db("guru_wp");
                                        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                                        $query = mysql_query("SELECT `id`, `timestamp`, `cr1`, `cr2`, `cr3`, `cr4`, `cr5`, `cc1`, `cc2`, `cc3`, `cc4`, `cc5` FROM result WHERE id={$_POST['result']}");
                                        $result = mysql_fetch_assoc($query);
                                        if (isset($result))
                                        {
                                            $bobot_c1 = $result['cr1'];
                                            $bobot_c2 = $result['cr2'];
                                            $bobot_c3 = $result['cr3'];
                                            $bobot_c4 = $result['cr4'];
                                            $bobot_c5 = $result['cr5'];

                                            echo "C1 (<font color=blue>" . $bobot_c1 . "</font>) | C2 (<font color=blue>" . $bobot_c2
                                                . "</font>) | C3 (<font color=blue>" . $bobot_c3 . "</font>) | C4 (<font color=blue>"
                                                . $bobot_c4 . "</font>) | C5 (<font color=blue>" . $bobot_c5 . "</font>)";
                                        } ?>
                                    </h4>

                                    <h3 align="center">Perbaikan Bobot</h3>
                                    <form action="hasil.php" method="post" class="form-horizontal">
                                        <table align="center" border="1" width="80%">
                                            <thead>
                                            <tr>
                                                <th>W1</th>
                                                <th>W2</th>
                                                <th>W3</th>
                                                <th>W4</th>
                                                <th>W5</th>
                                            </tr>
                                            <?php

                                            if (isset($_POST['submit']))
                                            {
                                                $bobot_c1 = $result['cc1'];
                                                $bobot_c2 = $result['cc2'];
                                                $bobot_c3 = $result['cc3'];
                                                $bobot_c4 = $result['cc4'];
                                                $bobot_c5 = $result['cc5'];

                                                echo "<tr>";
                                                echo "<td>" . round($bobot_c1 / ($bobot_c1 + $bobot_c2 + $bobot_c3 + $bobot_c4 + $bobot_c5), 2) . "</td>";
                                                echo "<td>" . round($bobot_c2 / ($bobot_c1 + $bobot_c2 + $bobot_c3 + $bobot_c4 + $bobot_c5), 2) . "</td>";
                                                echo "<td>" . round($bobot_c3 / ($bobot_c1 + $bobot_c2 + $bobot_c3 + $bobot_c4 + $bobot_c5), 2) . "</td>";
                                                echo "<td>" . round($bobot_c4 / ($bobot_c1 + $bobot_c2 + $bobot_c3 + $bobot_c4 + $bobot_c5), 2) . "</td>";
                                                echo "<td>" . round($bobot_c5 / ($bobot_c1 + $bobot_c2 + $bobot_c3 + $bobot_c4 + $bobot_c5), 2) . "</td>";

                                                $c1 = round($bobot_c1 / ($bobot_c1 + $bobot_c2 + $bobot_c3 + $bobot_c4 + $bobot_c5), 2);
                                                $c2 = round($bobot_c2 / ($bobot_c1 + $bobot_c2 + $bobot_c3 + $bobot_c4 + $bobot_c5), 2);
                                                $c3 = round($bobot_c3 / ($bobot_c1 + $bobot_c2 + $bobot_c3 + $bobot_c4 + $bobot_c5), 2);
                                                $c4 = round($bobot_c4 / ($bobot_c1 + $bobot_c2 + $bobot_c3 + $bobot_c4 + $bobot_c5), 2);
                                                $c5 = round($bobot_c5 / ($bobot_c1 + $bobot_c2 + $bobot_c3 + $bobot_c4 + $bobot_c5), 2);
                                            }
                                            ?>
                                            </thead>
                                        </table>
                                </div>
                                </form>


                                <div class="tab-pane active" id="horizontal-form">
                                    <h3 align="center">Perhitungan Vektor</h3>

                                    <form action="hasil.php" method="post" class="form-horizontal">
                                        <div class="w3l-table-info">
                                            <table align="center" border="1" width="80%">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nik</th>
                                                    <th>Nama</th>
                                                    <th>C1.</th>
                                                    <th>C2.</th>
                                                    <th>C3.</th>
                                                    <th>C4.</th>
                                                    <th>C5.</th>
                                                    <th>Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $result = array();
                                                mysql_connect("localhost", "root", "");
                                                mysql_select_db("guru_wp");
                                                error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                                                $query = mysql_query("SELECT `result_kriteria`.`result`, `result_kriteria`.`nik`, `guru`.`nama`, `result_kriteria`.`c1`, `result_kriteria`.`c2`, `result_kriteria`.`c3`, `result_kriteria`.`c4`, `result_kriteria`.`c5`, `result_kriteria`.`res`, `result_kriteria`.`rnk` FROM `result_kriteria` LEFT OUTER JOIN `guru` ON `result_kriteria`.`nik` = `guru`.`nik` WHERE `result_kriteria`.`result`={$_POST['result']} ORDER BY `guru`.`nik` ASC");
                                                while ($data = mysql_fetch_assoc($query))
                                                {
                                                    $result[".{$data['nik']}"] = $data;
                                                }
                                                $nomor = 0;
                                                foreach ($result as $data)
                                                {
                                                    ++$nomor
                                                    ?>
                                                    <tr>
                                                        <td><?php echo($nomor) ?></td>
                                                        <td><?php echo $data['nik']; ?></td>
                                                        <td><?php echo $data['nama']; ?></td>
                                                        <td><?php echo round($data['c1'], 3); ?></td>
                                                        <td><?php echo round($data['c2'], 3); ?></td>
                                                        <td><?php echo round($data['c3'], 3); ?></td>
                                                        <td><?php echo round($data['c4'], 3); ?></td>
                                                        <td><?php echo round($data['c5'], 3); ?></td>
                                                        <td><?php echo round($data['res'], 2); ?></td>
                                                    </tr>
                                                <?php }
                                                $nomor = 0;
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>


                                <div class="tab-pane active" id="horizontal-form">
                                    <h3 align="center">Perangkingan</h3>
                                    <form action="hasil.php" method="post" class="form-horizontal">
                                        <table border="1" width="80%" align="center">
                                            <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nik</th>
                                                <th width="40%">Nama</th>
                                                <th>Presentase</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $nomor = 0;

                                            usort($result, function ($c1, $c2) {
                                                if ($c1['rnk'] == $c2['rnk'])
                                                {
                                                    return 0;
                                                }

                                                return ($c1['rnk'] < $c2['rnk']) ? 1 : -1;
                                            });


                                            $nomor = 0;
                                            foreach ($result as $k => $v)
                                            {
                                                ++$nomor;
                                                ?>
                                                <tr>
                                                    <td><?php echo $nomor ?></td>
                                                    <td><?php echo $v['nik'] ?></td>
                                                    <td><?php echo $v['nama']; ?></td>
                                                    <td><?php echo round($v['rnk'], 3); ?></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                }
            }
            ?>

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
        <div class="inner-block" style="margin-top: 20px">

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
<script src="js/jQuery.print.min.js"></script>
<!-- /Bootstrap Core JavaScript -->
<script>
    $(document).on('click', 'button#print_result', function (event) {
        $("div#print-container").print({
            globalStyles: true,
            mediaPrint: false,
            stylesheet: null,
            noPrintSelector: ".no-print",
            iframe: true,
            append: null,
            prepend: null,
            manuallyCopyFormValues: true,
            deferred: $.Deferred(),
            timeout: 750,
            title: null,
            doctype: '<!doctype html>'
        });
    });

</script>
</body>
</html>
