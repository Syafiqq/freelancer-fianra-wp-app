<?php
mysql_connect("localhost", "root", "");
mysql_select_db("guru_wp");
$i = 1;
if (isset($_POST['submit']))
{

    $nama = $_POST['nama'];

    $query = mysql_query("INSERT INTO hasil(nama) 
	                       VALUES('$nama[$i]')");
    mysql_query($query);
    $i++;
}
?>
