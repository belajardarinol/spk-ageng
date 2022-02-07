<?php
	$server = mysql_connect("localhost","root","root");
	$db = mysql_select_db("db_ageng");
	
	if(!$server){
		echo "Maaf, Gagal tersambung dengan server !";
	}
	if(!$db){
		echo "Maaf, Gagal tersambung dengan database !";
	}
?>