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
                    Hasil
                </li>
            </ol>

            <textarea id="printing-css" style="display:none;">.no-print{display:none}</textarea>
            <iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
            <script type="text/javascript">
                //<![CDATA[
                function printDiv(elementId)
                {
                    var a = document.getElementById('printing-css').value;
                    var b = document.getElementById(elementId).innerHTML;
                    window.frames["print_frame"].document.title = document.title;
                    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
                    window.frames["print_frame"].window.focus();
                    window.frames["print_frame"].window.print();
                }

                //]]>
            </script>

            <!--pilih bobot-->
            <div class="grid-form1">
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
                                mysql_connect("localhost", "root", "");
                                mysql_select_db("guru_wp");

                                $bobot = mysql_query("select * from bobot") or die(mysql_error());
                                while ($d = mysql_fetch_array($bobot))
                                {
                                    $w1 = $d["c1"];
                                    $w2 = $d["c2"];
                                    $w3 = $d["c3"];
                                    $w4 = $d["c4"];
                                    $w5 = $d["c5"];
                                }
                                ?>
                                <?php
                                $bobot_c1 = $w1;
                                $bobot_c2 = $w2;
                                $bobot_c3 = $w3;
                                $bobot_c4 = $w4;
                                $bobot_c5 = $w5;

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

                                ?>
                                </thead>
                            </table>
                            <h3 align="center">Perhitungan Vektor</h3>
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
                                $vektor = mysql_query("select * from kriteria");
                                while ($data = mysql_fetch_array($vektor))
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
                            <h3 align="center">Perangkingan</h3>
                            <table id="myTable" border="1" width="80%" align="center">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nik</th>
                                    <th width="40%">Nama</th>
                                    <th>Presentase</th>
                                </tr>
                                </thead>
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
                                    echo "<tr>";
                                    echo "<td>" . $nomor = $nomor + 1 . "</td>";
                                    $nik = $data['nik'];
                                    echo "<td name='nik'>" . $nik . "</td>";
                                    $nama = $data['nama'];
                                    echo "<td name='nama'>" . $nama . "</td>";
                                    $hasil = round((pow($data['c1'], $c1) * pow($data['c2'], $c2) * pow($data['c3'], $c3) * pow($data['c4'], $c4) * pow($data['c5'], $c5)) / $q['GRANDTOTAL'], 3);
                                    echo "<td name='hasil'>" . $hasil . "</td>";

                                }
                                ?>
                            </table>
                            <li class="breadcrumb-item"></li>
                            <div align="center" class="form-group">
                                <button id="submit" name="submit" type="submit" class="btn btn-primary">Cetak</button>
                            </div>
                        </form>
                        <script>
                            //gets table
                            var oTable = document.getElementById('myTable');

                            //gets rows of table
                            var rowLength = oTable.rows.length;

                            //loops through rows    
                            for (i = 0; i < rowLength; i++)
                            {

                                //gets cells of current row  
                                var oCells = oTable.rows.item(i).cells;

                                //gets amount of cells of current row
                                var cellLength = oCells.length;

                                //loops through each cell in current row
                                for (var j = 0; j < cellLength; j++)
                                {

                                    // get your cell info here

                                    var cellVal = oCells.item(j).innerHTML;
                                    //alert(cellVal);
                                }
                            }

                        </script>
                        <?php
                        if (isset($_POST['submit']))
                        {
                            $nik = $_POST['nik'];
                            $nama = $_POST['nama'];
                            $presentase = $_POST['presentase'];

                            $sql = "INSERT INTO alternatif (nik, nama, presentase) values
						('$nik','$nama','$presentase')";
                            $query = mysql_query($sql) or die(mysql_error());
                            if ($query)
                            {
                                echo "<script>window.alert('Data Berhasil di Simpan');
								window.location=(href='hasil.php')</script>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <textarea id="printing-css" style="display:none;">html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}body{font:normal normal .8125em/1.4 Arial,Sans-Serif;background-color:white;color:#333}strong,b{font-weight:bold}cite,em,i{font-style:italic}a{text-decoration:none}a:hover{text-decoration:underline}a img{border:none}abbr,acronym{border-bottom:1px dotted;cursor:help}sup,sub{vertical-align:baseline;position:relative;top:-.4em;font-size:86%}sub{top:.4em}small{font-size:86%}kbd{font-size:80%;border:1px solid #999;padding:2px 5px;border-bottom-width:2px;border-radius:3px}mark{background-color:#ffce00;color:black}p,blockquote,pre,table,figure,hr,form,ol,ul,dl{margin:1.5em 0}hr{height:1px;border:none;background-color:#666}h1,h2,h3,h4,h5,h6{font-weight:bold;line-height:normal;margin:1.5em 0 0}h1{font-size:200%}h2{font-size:180%}h3{font-size:160%}h4{font-size:140%}h5{font-size:120%}h6{font-size:100%}ol,ul,dl{margin-left:3em}ol{list-style:decimal outside}ul{list-style:disc outside}li{margin:.5em 0}dt{font-weight:bold}dd{margin:0 0 .5em 2em}input,button,select,textarea{font:inherit;font-size:100%;line-height:normal;vertical-align:baseline}textarea{display:block;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}pre,code{font-family:"Courier New",Courier,Monospace;color:inherit}pre{white-space:pre;word-wrap:normal;overflow:auto}blockquote{margin-left:2em;margin-right:2em;border-left:4px solid #ccc;padding-left:1em;font-style:italic}table[border="1"] th,table[border="1"] td,table[border="1"] caption{border:1px solid;padding:.5em 1em;text-align:left;vertical-align:top}th{font-weight:bold}table[border="1"] caption{border:none;font-style:italic}.no-print{display:none}</textarea>
            <iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>

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
