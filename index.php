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



			<div class="col-sm-12">
				<div class="alert alert-info">
					<marquee>Selamat Datang di Aplikasi Sistem Pendukung Keputusan Pemilihan Makanan
					</marquee>
				</div>
				<div><span class="style7">
						<?php
						if (@$_SESSION['iduser'] == !'') {
						?>
							<img src="images/kacang.jpg" width="100%"><br>
							<hr>
						<?php
						} else {

							echo "<p> Sistem Pendukung Keputusan merupakan suatu sistem yang berbasis komputer yang membantu pengambilan keputusan dengan memanfaatkan data dan model-model untuk menyelesaikan masalah-masalah yang tidak terstruktur.
Selain itu  sistem pendukung keputusan merupakan suatu perlengkapan dari sesorang atau instansi dalam proses pengambilan keputusan. Dimana sistem ini tidak ditunjukan untuk mengganti pengambil keputusan dalam pembuatan keputusan.
Sistem pendukung keputusan menggabungkan kemampuan komputer dalam pelayanan interaktif dengan pengolahan atau pemanipulasi data yang memanfaatkan model atau aturan penyelesaian yang tidak terstruktur. Sistem pendukung keputusan mempunyai beberapa sumber intelektual dengan kemempuan dari komputer untuk memperbaiki kualitas keputusan .
</p> ";
						}

						?>
						<br>


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
		<!-- <h6>&copy 2018 All Right Reserved | Repost by <a href='https://kukode.in/' title='kukode.in' target='_blank'>kukode.in</a> -->
		</h6>
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