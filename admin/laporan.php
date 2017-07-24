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
    <link href="css/style.css" type='text/css'/>
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
            <!--pilih bobot-->
            <div class="grid-form1">
                <div class="tab-content">
                    <div class="tab-pane active" id="horizontal-form">
                        <h3 align="center">Bobot yang di Pilih :</h3>


                        <h4 align="center">Bobot yang di Pilih :
                            <?php
                            if (isset($_POST['submit']))
                            {
                                $bobot_c1 = $_POST['bobot_c1'];
                                $bobot_c2 = $_POST['bobot_c2'];
                                $bobot_c3 = $_POST['bobot_c3'];
                                $bobot_c4 = $_POST['bobot_c4'];
                                $bobot_c5 = $_POST['bobot_c5'];

                                echo "C1 (<font color=blue>" . $bobot_c1 . "</font>) | C2 (<font color=blue>" . $bobot_c2
                                    . "</font>) | C3 (<font color=blue>" . $bobot_c3 . "</font>) | C4 (<font color=blue>"
                                    . $bobot_c4 . "</font>) | C5 (<font color=blue>" . $bobot_c5 . "</font>)";


                            } ?>
                        </h4>


                        <center>
                            <table border="1" width="50%">
                                <thead>
                                <tr>
                                    <th>C1</th>
                                    <th>C2</th>
                                    <th>C3</th>
                                    <th>C4</th>
                                    <th>C5</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                mysql_connect("localhost", "root", "");
                                mysql_select_db("guru_wp");

                                $tampil = mysql_query("select * from bobot");
                                while ($data = mysql_fetch_array($tampil))
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $data['c1']; ?></td>
                                        <td><?php echo $data['c2']; ?></td>
                                        <td><?php echo $data['c3']; ?></td>
                                        <td><?php echo $data['c4']; ?></td>
                                        <td><?php echo $data['c5']; ?></td>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </center>
                    </div>
                </div>

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"></li>
                </ol>

                <div class="tab-content">
                    <div class="tab-pane active" id="horizontal-form">
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
                                    $bobot_c1 = $_POST['bobot_c1'];
                                    $bobot_c2 = $_POST['bobot_c2'];
                                    $bobot_c3 = $_POST['bobot_c3'];
                                    $bobot_c4 = $_POST['bobot_c4'];
                                    $bobot_c5 = $_POST['bobot_c5'];
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
                </div>

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"></li>
                </ol>

                <div class="tab-content">
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
                                    mysql_connect("localhost", "root", "");
                                    mysql_select_db("guru_wp");
                                    $nomor = 0;
                                    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                                    $query = mysql_query("select * from kriteria");
                                    while ($data = mysql_fetch_array($query))
                                    {
                                        ?>
                                        <tr>
                                            <td><?php echo $nomor = $nomor + 1; ?></td>
                                            <td><?php echo $data['nik']; ?></td>
                                            <td><?php echo $data['nama']; ?></td>
                                            <td><?php echo round(pow($data['c1'], $c1), 3); ?></td>
                                            <td><?php echo round(pow($data['c2'], $c2), 3); ?></td>
                                            <td><?php echo round(pow($data['c3'], $c3), 3); ?></td>
                                            <td><?php echo round(pow($data['c4'], $c4), 3); ?></td>
                                            <td><?php echo round(pow($data['c5'], $c5), 3); ?></td>
                                            <td><?php echo round((pow($data['c1'], $c1) * pow($data['c2'], $c2) * pow($data['c3'], $c3)
                                                    * pow($data['c4'], $c4) * pow($data['c5'], $c5)), 2); ?></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"></li>
                </ol>

                <div class="tab-content">
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
                                $query = mysql_query("SELECT nik,nama, 
							  POWER(C1, $c1) AS C1,
							  POWER(C2, $c2) AS C2,
							  POWER(C3, $c3) AS C3,
							  POWER(C4, $c4) AS C4,
							  POWER(C5, $c5) AS C5,
							  (
							  POWER(C1, $c1) *
							  POWER(C2, $c2) *
							  POWER(C3, $c3) *
							  POWER(C4, $c4) *
							  POWER(C5, $c5)
							  ) AS TOTAL,
							  SUM(
							  POWER(C1, $c1) *
							  POWER(C2, $c2) *
							  POWER(C3, $c3) *
							  POWER(C4, $c4) *
							  POWER(C5, $c5)
							  ) AS GRANDTOTAL

							  FROM kriteria");
                                $q = mysql_fetch_array($query);
                                ?>
                                <?php
                                $nomor = 0;
                                $query = mysql_query("select * from kriteria");
                                while ($data = mysql_fetch_array($query))
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $nomor = $nomor + 1; ?></td>
                                        <td><?php echo $data['nik']; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td><?php echo round((pow($data['c1'], $c1) * pow($data['c2'], $c2) * pow($data['c3'], $c3)
                                                    * pow($data['c4'], $c4) * pow($data['c5'], $c5)) / $q['GRANDTOTAL'], 3); ?></td>
                                    </tr>
                                    <?php
                                } ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
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
