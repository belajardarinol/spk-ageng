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


						<p> DATA HASIL PEMILIHAN MAKANAN</p>
						<?php

						include("./admin/library/koneksi.php");
						?>
						<table class="table table-striped table-bordered table-hover" border=1 cellspacing=0 cellpadding=5 align="center" width="50%">
							<thead>
								<tr>
									<!-- <th>No</th> -->
									<th>Jenis Makanan</th>
									<th>NCF</th>
									<th>NSF</th>
									<th>NT</th>
									<th>Peringkat</th>
								</tr>
							</thead>
							<tbody>


								<?php
								$queryutama3 = mysql_query("SELECT  *  FROM  hasil order by nt desc");
								
								while ($data3 = mysql_fetch_array($queryutama3)) {

									$kar = mysql_fetch_array(mysql_query("select * from food where id_makanan='$data3[idproses]'"));
								?>
								<?php if(isset($_POST) == true){
									// var_dump($_POST);die;
									if($data3[idproses] == $_POST[m1] or $data3[idproses] == $_POST[m2] or $data3[idproses] == $_POST[m3]){
										$no1 = 1;
										?>
										<tr>
										<!-- <td><?php echo $no1;  ?></td> -->
										<td><?php echo $kar['name'];  ?></td>
										<td><?php echo number_format($data3['ncf'], 2); ?></td>
										<td><?php echo number_format($data3['nsf'], 2); ?></td>
										<td><?php echo number_format($data3['nt'], 2); ?></td>
										<td align=center><?php echo $no1; $no1++; ?><td align=center>
											<!-- <a href="admin/media.php?menu=hasilakhir&act=lihat&id=<?php echo "$data3[id_makanan]"; ?>" class="btn btn-info">Lihat</a> -->
										</td></td>
										</tr>	
										<?php 
										
									}
									?>
									

									<?php }
									
								}
									?>
									
							</tbody>
						</table> <br>


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