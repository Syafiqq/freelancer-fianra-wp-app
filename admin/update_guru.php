<?php
mysql_connect("localhost", "root", "");
mysql_select_db("guru_wp");

if (isset($_POST['submit']))
{
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $sql = "update guru set nama='$nama', jk='$jk', alamat='$alamat' where nik='$nik'";
    $query = mysql_query($sql) or die(mysql_error());
    if ($query)
    {
        echo "<script>window.alert('Data Berhasil di Simpan');
                window.location=(href='guru.php')</script>";
    }
}
?>
