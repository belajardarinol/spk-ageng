<?php

include("library/koneksi.php");
if($_GET["menu"]){
	include_once($_GET["menu"].".php");
}
?>