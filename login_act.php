<?php 
session_start();
mysql_connect("localhost","root","");
mysql_select_db("guru_wp");
$name=$_POST['name'];
$password=$_POST['password'];
$pas=md5($password);
$query=mysql_query("select * from admin where name='$name' and password='$password'")or die(mysql_error());
if(mysql_num_rows($query)==1)
{
$_SESSION['name']=$name;
header("location:admin/index.php");
}
else
{
header("location:index.php?pesan=gagal")or die(mysql_error());
}
?>