<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>SPK Ageng</title>
</head>

<body>
	<div class="content">
		<div class='workplace'>
			<div class='row-fluid'>
				<div class='span12'>
					<!--<div class='head clearfix'>
                        <div class='isw-grid'></div>
                        <h1>Data Bank</h1>                               
                    </div>-->
					<div class='block-fluid table-sorting clearfix' style="padding:10px;">

						<?php

						if ($_GET["menu"]) {
							include_once("load.php");
						} else {
							echo "<div class='col-lg-12'>
										<div class='panel panel-default'>
											<div class='panel-heading'>
												
											</div>
											<div class='panel-body'>
												<ul class='nav nav-tabs'>
													<li class='active'><a href='#home' data-toggle='tab'>Home</a>
													</li>
													
												</ul>

												<div class='tab-content'>
													<div class='tab-pane fade in active' id='home'>
													<h4>Selamat Datang di Aplikasi Sistem Pendukung Keputusan Pemilihan Makanan Menggunakan Metode Profile Matching </h4>
													<p> Sistem Pendukung Keputusan merupakan suatu sistem yang berbasis komputer yang membantu pengambilan keputusan dengan memanfaatkan data dan model-model untuk menyelesaikan masalah-masalah yang tidak terstruktur.
													Selain itu  sistem pendukung keputusan merupakan suatu perlengkapan dari sesorang atau instansi dalam proses pengambilan keputusan. Dimana sistem ini tidak ditunjukan untuk mengganti pengambil keputusan dalam pembuatan keputusan.
													Sistem pendukung keputusan menggabungkan kemampuan komputer dalam pelayanan interaktif dengan pengolahan atau pemanipulasi data yang memanfaatkan model atau aturan penyelesaian yang tidak terstruktur. Sistem pendukung keputusan mempunyai beberapa sumber intelektual dengan kemempuan dari komputer untuk memperbaiki kualitas keputusan .
													</p>
													</div>
													
												</div>
											</div>
										</div>
									</div>";
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>