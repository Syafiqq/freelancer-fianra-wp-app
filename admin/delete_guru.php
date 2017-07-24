<?php 
mysql_connect("localhost","root","");
mysql_select_db("guru_wp");
$nik = $_GET['nik'];
$query = mysql_query("DELETE FROM guru WHERE nik='$nik'") or die(mysql_error());
if ($query) {
	?>
	<script language="JavaScript">
	alert('Data Karyawan Berhasil dihapus');
	document.location = 'guru.php';
	</script>
	<?php
}
?>