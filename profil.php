<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<title>Sistem Pendukung Keputusan Pemilihan Makanan</title>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/style.css" />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript">
		$("#modal-login").modal("show");
	</script>
	<style type="text/css">
		
		.style2 {
			font-family: "Times New Roman", Times, serif;
			font-size: 16px;
		}

		.style7 {
			font-size: 16px;
			font-family: "Trebuchet MS";
		}
		
	</style>
</head>

<body>



	<p text-align="center">
		<!-- <img src="img/head.jpg" alt="" width="90%"> -->
	</p>

	<div class="navbar" id="menu">
		<?php include_once("menu.php"); ?>
	</div>
	<div class="page">
		<br>
		<div class="row">



			<div class="col-sm-8">
				<div class="alert alert-info">
					<marquee>Selamat Datang di Aplikasi Sistem Pendukung Keputusan Pemilihan Makanan
					</marquee>
				</div>
				<div><span class="style7">


						<p> Input Pilihan</p>
						Makanan is power to good health
						<br>

						<form action="data_hasil.php" method="post" class="form-horizontal">
		<table>
			<tr>
				<td>
					Jenis Makanan 1</td>
				<td>
				<?php

// $result = mysql_query("SELECT * FROM proses_spk ");
include("./admin/library/koneksi.php");
// $result = mysql_query("SELECT * FROM admin ");
// $row = mysql_fetch_array($result);
// var_dump($row);  ?>
					<select name="m1" id="m1" onChange="changeValue(this.value)" class="form-control">
						<option value=0>-Pilih-</option>
						<?php

						// $result = mysql_query("SELECT * FROM proses_spk ");
						$result = mysql_query("SELECT * FROM food ");
						var_dump($result);
						$jsArray = "var dtMhs = new Array();\n";
						while ($row = mysql_fetch_array($result)) {
							echo '<option value="' . $row['id_makanan'] . '">' . $row['name'] . '</option>';
							// $jsArray .= "dtMhs['" . $row['id_makanan'] . "'] = {nama:'" . addslashes($row['natrium']) . "',jrsn:'" . addslashes($row['lemak']) . "',jml:'" . addslashes($row['protein']) . "'};\n";
							// $jsArray .= "dtMhs['" . $row['id_makanan'] . "'] = {nama:'" . addslashes($row['k1']) . "',jrsn:'" . addslashes($row['k2']) . "',jml:'" . addslashes($row['k3']) . "',pendapatan:'" . addslashes($row['k4']) . "',status:'" . addslashes($row['k5']) . "',hardisk:'" . addslashes($row['k6']) . "'};\n";
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Jenis Makanan 2</td>
				<td>

					<select name="m2" id="nim" onChange="changeValue(this.value)" class="form-control">
						<option value=0>-Pilih-</option>
						<?php

						// $result = mysql_query("SELECT * FROM proses_spk ");
						$result = mysql_query("SELECT * FROM food ");
						var_dump($result);
						$jsArray = "var dtMhs = new Array();\n";
						while ($row = mysql_fetch_array($result)) {
							echo '<option value="' . $row['id_makanan'] . '">' . $row['name'] . '</option>';
							// $jsArray .= "dtMhs['" . $row['id_makanan'] . "'] = {nama:'" . addslashes($row['natrium']) . "',jrsn:'" . addslashes($row['lemak']) . "',jml:'" . addslashes($row['protein']) . "'};\n";
							// $jsArray .= "dtMhs['" . $row['id_makanan'] . "'] = {nama:'" . addslashes($row['k1']) . "',jrsn:'" . addslashes($row['k2']) . "',jml:'" . addslashes($row['k3']) . "',pendapatan:'" . addslashes($row['k4']) . "',status:'" . addslashes($row['k5']) . "',hardisk:'" . addslashes($row['k6']) . "'};\n";
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Jenis Makanan 3</td>
				<td>
					<select name="m3" id="nim" onChange="changeValue(this.value)" class="form-control">
						<option value=0>-Pilih-</option>
						<?php

						// $result = mysql_query("SELECT * FROM proses_spk ");
						$result = mysql_query("SELECT * FROM food ");
						var_dump($result);
						$jsArray = "var dtMhs = new Array();\n";
						while ($row = mysql_fetch_array($result)) {
							echo '<option value="' . $row['id_makanan'] . '">' . $row['name'] . '</option>';
							// $jsArray .= "dtMhs['" . $row['id_makanan'] . "'] = {nama:'" . addslashes($row['natrium']) . "',jrsn:'" . addslashes($row['lemak']) . "',jml:'" . addslashes($row['protein']) . "'};\n";
							// $jsArray .= "dtMhs['" . $row['id_makanan'] . "'] = {nama:'" . addslashes($row['k1']) . "',jrsn:'" . addslashes($row['k2']) . "',jml:'" . addslashes($row['k3']) . "',pendapatan:'" . addslashes($row['k4']) . "',status:'" . addslashes($row['k5']) . "',hardisk:'" . addslashes($row['k6']) . "'};\n";
						}
						?>
					</select>
				</td>
			</tr>
			<tr>	
			<td>
					<input type="submit" value="PROSES" class="btn btn-primary" />
				</td>
			</tr>
		</table>
	</form>

						<br>
					</span> </div>
			</div>
			<div class="col-sm-3 col-sm-offset-1 blog-sidebar">

				<div class="sidebar-module">
					<?php

					include "sidebar.php";
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-footer">
		<!-- <h6>&copy 2018 All Right Reserved | Repost by <a href='https://kukode.in/' title='kukode.in' target='_blank'>kukode.in</a></h6> -->
	</div>

</body>

</html>
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
		$('.flexslider').flexslider({
			animation: "slide",
			controlNav: "thumbnails"
		});
	});
</script>