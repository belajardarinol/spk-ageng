<?php
//script untuk menampilkan menu
$menuguest=<<<MENUG
			<div class="navbar-inner">
				<ul class="nav">
					<li><a href="index.php">Home</a></li>
					
					<li><a href="profil.php">Masukan Pilihan</a></li>
					
					<li><a href="data_makanan.php">Data Makanan</a></li>
					<li><a href="data_hasil.php">Data Hasil Peringkat</a></li>
					<li><a href="admin/">Login</a></li>
					
					
				</ul>
			</div>
MENUG;
$menuuser = <<<MENUU
			
MENUU;
if(isset($_SESSION['iduser'])&&isset($_SESSION['nama'])){
	echo $menuuser;
} else {
	echo $menuguest;
}
?>