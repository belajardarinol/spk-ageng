<?php
	include("library/koneksi.php");

	$inf	= $_GET['inf'];
	$sql	= mysql_query("delete from data_makanan where id_makanan='$inf'");
	
	echo "<script language=javascript>
			window.alert('Hapus Berhasil');
			window.location='media.php?menu=makanan&act=view';
			</script>";
?>