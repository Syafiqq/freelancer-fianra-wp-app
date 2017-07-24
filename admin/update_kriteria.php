<?php
mysql_connect("localhost", "root", "");
mysql_select_db("guru_wp");

if (isset($_POST['submit']))
{
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $c1 = $_POST['c1'];
    $c2 = $_POST['c2'];
    $c3 = $_POST['c3'];
    $c4 = $_POST['c4'];
    $c5 = $_POST['c5'];
    $sql = "update kriteria set nama='$nama', c1='$c1', c2='$c2', c3='$c3', c4='$c4', c5='$c5' where nik='$nik'";
    $query = mysql_query($sql) or die(mysql_error());
    if ($query)
    {
        echo "<script>window.alert('Data Berhasil di Simpan');
                window.location=(href='kriteria.php')</script>";
    }
}
?>
