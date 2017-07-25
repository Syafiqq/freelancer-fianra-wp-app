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
                        <h3 align="center">Pilih Bobot</h3>
                        <div>
                            <h5>* Bobot 1 = Sangat Rendah</h5>
                            <h5>* Bobot 2 = Rendah</h5>
                            <h5>* Bobot 3 = Cukup</h5>
                            <h5>* Bobot 4 = Tinggi</h5>
                            <h5>* Bobot 5 = Sangat Tinggi</h5>
                        </div>
                        <form action="hasil.php" method="post" class="form-horizontal">
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
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
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
                                $result = array();

                                if (isset($_POST['submit']))
                                {
                                    $bobot_c1 = $_POST['bobot_c1'];
                                    $bobot_c2 = $_POST['bobot_c2'];
                                    $bobot_c3 = $_POST['bobot_c3'];
                                    $bobot_c4 = $_POST['bobot_c4'];
                                    $bobot_c5 = $_POST['bobot_c5'];

                                    $result['bobot']['raw'] = array(
                                        'c1' => $bobot_c1,
                                        'c2' => $bobot_c2,
                                        'c3' => $bobot_c3,
                                        'c4' => $bobot_c4,
                                        'c5' => $bobot_c5,
                                    );

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

                                    $result['bobot']['computed'] = array(
                                        'c1' => $c1,
                                        'c2' => $c2,
                                        'c3' => $c3,
                                        'c4' => $c4,
                                        'c5' => $c5,
                                    );
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
                                    mysql_connect("localhost", "root", "");
                                    mysql_select_db("guru_wp");
                                    $nomor = 0;
                                    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                                    $query = mysql_query("SELECT * FROM kriteria");
                                    while ($data = mysql_fetch_array($query))
                                    {
                                        $_r = array();
                                        $_r['nik'] = $data['nik'];
                                        $_r['c1'] = pow($data['c1'], $c1);
                                        $_r['c2'] = pow($data['c2'], $c2);
                                        $_r['c3'] = pow($data['c3'], $c3);
                                        $_r['c4'] = pow($data['c4'], $c4);
                                        $_r['c5'] = pow($data['c5'], $c5);
                                        $_r['res'] = pow($data['c1'], $c1) * pow($data['c2'], $c2) * pow($data['c3'], $c3) * pow($data['c4'], $c4) * pow($data['c5'], $c5);
                                        $result['res'][".{$_r['nik']}"] = $_r;
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
                                    <?php }
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
                                $query = mysql_query("SELECT * FROM kriteria");
                                $res_dis = array();
                                while ($data = mysql_fetch_array($query))
                                {
                                    $_rd = array();
                                    $_rd['nik'] = $data['nik'];
                                    $_rd['nama'] = $data['nama'];
                                    $_rd['rnk'] = (pow($data['c1'], $c1) * pow($data['c2'], $c2) * pow($data['c3'], $c3) * pow($data['c4'], $c4) * pow($data['c5'], $c5)) / $q['GRANDTOTAL'];
                                    $res_dis[".{$data['nik']}"] = $_rd;


                                    $result['res'][".{$data['nik']}"]['rnk'] = (pow($data['c1'], $c1) * pow($data['c2'], $c2) * pow($data['c3'], $c3) * pow($data['c4'], $c4) * pow($data['c5'], $c5)) / $q['GRANDTOTAL'];
                                    ?>
                                    <?php
                                }

                                if (isset($_POST['submit']))
                                {
                                    usort($res_dis, function ($c1, $c2) {
                                        if ($c1['rnk'] == $c2['rnk'])
                                        {
                                            return 0;
                                        }

                                        return ($c1['rnk'] < $c2['rnk']) ? 1 : -1;
                                    });


                                    //var_dump($result);
                                }
                                else
                                {
                                    usort($res_dis, function ($c1, $c2) {
                                        if ($c1['nik'] == $c2['nik'])
                                        {
                                            return 0;
                                        }

                                        return ($c1['nik'] < $c2['nik']) ? -1 : 1;
                                    });
                                }

                                foreach ($res_dis as $k => $v)
                                {
                                    ?>
                                    <tr>
                                        <td><?php echo $k ?></td>
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
                <div>
                    <a class="btn btn-primary" href="javascript:printDiv('print-area-2');">Print</a>
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
