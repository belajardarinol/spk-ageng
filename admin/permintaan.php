<div class="panel panel-default">
	<div class="panel-heading">
		Data Permintaan
	</div>

	<div class="panel-body">
		<div class="table-responsive">

			<p><b>Tahap Fuzifikasi :</b></p>
			<?php

			$queryutama = mysql_query("SELECT  *  FROM  produksi");
			$no = 1;
			while ($data = mysql_fetch_array($queryutama)) {
				// variabel kamar sedikit

				/*
			µTURUN[20] 	= (13,909-13,249)/ (13,909-13,104)
				= 0,819
			µNAIK[20]	= (13,249-13,104)/ (13,909-13,104)
				= 0,180
				
				µTURUN[1.500.000] 	= (max permintaan-permintaan) / (max permintaan - min permintaan) 
			= (3.629.430-1.500.000) / (3.629.430-1.247.590)
								= 0,894
			µNAIK[1.500.000]		= (permintaan- min permintaan) / (max permintaan -min permintaan)
			= (1.500.000-1.247.590) / (3.629.430-1.247.590)
								= 0,105

		  */
				$tidak_lengkap = (3629430 - $data['permintaan']) / (3629430 - 1247590);
				$sangat_lengkap = ($data['permintaan'] - 1247590) / (3629430 - 1247590);

				/**
		  // variabel produksi tidak lengkap
		  if($data['permintaan'] <= 4){
		  $tidak_lengkap = 1;		  
		  }elseif(4 < $data['permintaan'] AND $data['permintaan'] <= 6){
		  $tidak_lengkap = (6 - $data['permintaan']) / (6-4);
		  }elseif($data['permintaan'] > 6){
		  $tidak_lengkap = 0;
		  }
		  
		   // variabel produksi lengkap
		  if($data['permintaan'] < 4){
		  $lengkap = 0;		  
		  }elseif(4 < $data['permintaan'] AND $data['permintaan'] <= 6){
		  $lengkap = ($data['permintaan'] - 4) / (6-4);
		  }elseif(6 <= $data['permintaan'] AND $data['permintaan'] <= 8){
		  $lengkap = (8 - $data['permintaan']) / (8-6);
		  }elseif($data['permintaan'] == 6){
		  $lengkap = 1;
		  }
		  
		  // variabel produksi sangat_lengkap
		  if($data['permintaan'] < 6){
		  $sangat_lengkap = 0;		  
		  }elseif(6 < $data['permintaan'] AND $data['permintaan'] <= 8){
		  $sangat_lengkap = ($data['permintaan'] - 6) / (8-6);
		  }elseif($data['permintaan'] > 8){
		  $sangat_lengkap = 1;
		  }
				 **/
				// variabel harga murah
				if ($data['vharga'] <= 200000) {
					$murah = 1;
				} elseif (200000 <= $data['vharga'] and $data['vharga'] <= 600000) {
					$murah = (600000 - $data['vharga']) / (600000 - 200000);
				} elseif ($data['vharga'] >= 600000) {
					$murah = 0;
				}

				// variabel harga sedang
				if ($data['vharga'] <= 200000) {
					$sedang = 0;
				} elseif (200000 <= $data['vharga'] and $data['vharga'] <= 600000) {
					$sedang = ($data['vharga'] - 200000) / (600000 - 200000);
				} elseif (600000 <= $data['vharga'] and $data['vharga'] <= 1000000) {
					$sedang = (1000000 - $data['vharga']) / (1000000 - 600000);
				} elseif ($data['vharga'] >= 600000) {
					$sedang = 1;
				}
				// variabel harga mahal
				if ($data['vharga'] <= 600000) {
					$mahal = 0;
				} elseif (600000 <= $data['vharga'] and $data['vharga'] <= 1000000) {
					$mahal = ($data['vharga'] - 600000) / (1000000 - 600000);
				} elseif ($data['vharga'] >= 1000000) {
					$mahal = 1;
				}

				$vkamar = MAX($sedikit, $banyak);
				$vproduksi = MAX($tidak_lengkap, $lengkap, $sangat_lengkap);
				$vharga = MAX($murah, $sedang, $mahal);
				$hasil = number_format($vkamar + $vproduksi + $vharga, 2);
				if ($vkamar >= 1 and $vkamar <= 4) {
					$hasil_kamar = "Sedikit";
				} else {
					$hasil_kamar = "Banyak";
				}
				//===================
				if ($vproduksi == $tidak_lengkap) {
					$hasil_produksi = "Turun";
				} else  if ($vproduksi == $lengkap) {
					$hasil_produksi = "Lengkap";
				}
				if ($vproduksi == $sangat_lengkap) {
					$hasil_produksi = "Naik";
				}
				//===================

				if ($data['vharga'] >= 150000 and $data['vharga'] <= 600000) {
					$hasil_harga = "Murah";
				} else if ($data['vharga'] >= 200000 and $data['vharga'] <= 900000) {
					$hasil_harga = "Sedang";
				} else if ($data['vharga'] >= 600000 and $data['vharga'] <= 1000000) {
					$hasil_harga = "Mahal";
				}

				// Rule-Rule
				if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Tidak Lengkap" and $hasil_harga == "Murah") {
					$hasil_rating = "Rendah";
				} else if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Tidak Lengkap" and $hasil_harga == "Sedang") {
					$hasil_rating = "Rendah";
				} else if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Tidak Lengkap" and $hasil_harga == "Mahal") {
					$hasil_rating = "Rendah";
				} else if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Lengkap" and $hasil_harga == "Murah") {
					$hasil_rating = "Rendah";
				} else if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Lengkap" and $hasil_harga == "Sedang") {
					$hasil_rating = "Tinggi";
				} else if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Lengkap" and $hasil_harga == "Mahal") {
					$hasil_rating = "Tinggi";
				} else if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Sangat Lengkap" and $hasil_harga == "Murah") {
					$hasil_rating = "Rendah";
				} else if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Sangat Lengkap" and $hasil_harga == "Sedang") {
					$hasil_rating = "Tinggi";
				} else if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Sangat Lengkap" and $hasil_harga == "Mahal") {
					$hasil_rating = "Tinggi";
				} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Tidak Lengkap" and $hasil_harga == "Murah") {
					$hasil_rating = "Rendah";
				} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Tidak Lengkap" and $hasil_harga == "Sedang") {
					$hasil_rating = "Rendah";
				} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Tidak Lengkap" and $hasil_harga == "Mahal") {
					$hasil_rating = "Rendah";
				} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Lengkap" and $hasil_harga == "Murah") {
					$hasil_rating = "Rendah";
				} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Lengkap" and $hasil_harga == "Sedang") {
					$hasil_rating = "Tinggi";
				} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Lengkap" and $hasil_harga == "Mahal") {
					$hasil_rating = "Tinggi";
				} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Sangat Lengkap" and $hasil_harga == "Murah") {
					$hasil_rating = "Rendah";
				} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Sangat Lengkap" and $hasil_harga == "Sedang") {
					$hasil_rating = "Tinggi";
				} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Sangat Lengkap" and $hasil_harga == "Mahal") {
					$hasil_rating = "Tinggi";
				} else {
					$hasil_rating = "-";
				}


				$nmbulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
				//$tidak_lengkap=(3629430-$data['permintaan'])/ (3629430-1247590);
				//$sangat_lengkap=($data['permintaan']-1247590)/ (3629430-1247590);
				/*					
?>
			<p><b>Bulan : <?php echo $nmbulan[$data[bulan]];  ?></b></p>
           <p>µTurun [<?php echo $data['permintaan']; ?>] = <?php echo"(3629430-$data[permintaan])/ (3629430-1247590)"; ?> = <?php echo number_format($tidak_lengkap,3); ?></p>
           <p>µNaik [<?php echo $data['permintaan']; ?>] = <?php echo"($data[permintaan]-1247590)/ (3629430-1247590)"; ?> = <?php echo number_format($sangat_lengkap,3); ?></p>            
          	<p>MAX(µTurun Naik,µBanyak)[<?php echo $data['permintaan']; ?>] = <?php echo number_format($vproduksi,3);  ?></p>
          
<?php
*/

				$no++;
			}
			?>
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th rowspan="2">No</th>
						<th rowspan="2">Bulan</th>
						<th colspan="3">Variabel Permintaan</th>
						<th rowspan="2">Nilai Permintaan</th>
					</tr>
					<tr>

						<th>Permintaan</th>
						<th>μ Turun</th>
						<th>μ Naik</th>

					</tr>
				</thead>
				<tbody>


					<?php

					$queryutama = mysql_query("SELECT  *  FROM  produksi order by bulan");
					$no = 1;
					while ($data = mysql_fetch_array($queryutama)) {
						// variabel kamar sedikit

						/*
			µTURUN[20] 	= (13,909-13,249)/ (13,909-13,104)
				= 0,819
			µNAIK[20]	= (13,249-13,104)/ (13,909-13,104)
				= 0,180
				
				µTURUN[1.500.000] 	= (max permintaan-permintaan) / (max permintaan - min permintaan) 
= (3.629.430-1.500.000) / (3.629.430-1.247.590)
					= 0,894
µNAIK[1.500.000]		= (permintaan- min permintaan) / (max permintaan -min permintaan)
= (1.500.000-1.247.590) / (3.629.430-1.247.590)
					= 0,105

		  */
						$tidak_lengkap = (3629430 - $data['permintaan']) / (3629430 - 1247590);
						$sangat_lengkap = ($data['permintaan'] - 1247590) / (3629430 - 1247590);

						/**
		  // variabel produksi tidak lengkap
		  if($data['permintaan'] <= 4){
		  $tidak_lengkap = 1;		  
		  }elseif(4 < $data['permintaan'] AND $data['permintaan'] <= 6){
		  $tidak_lengkap = (6 - $data['permintaan']) / (6-4);
		  }elseif($data['permintaan'] > 6){
		  $tidak_lengkap = 0;
		  }
		  
		   // variabel produksi lengkap
		  if($data['permintaan'] < 4){
		  $lengkap = 0;		  
		  }elseif(4 < $data['permintaan'] AND $data['permintaan'] <= 6){
		  $lengkap = ($data['permintaan'] - 4) / (6-4);
		  }elseif(6 <= $data['permintaan'] AND $data['permintaan'] <= 8){
		  $lengkap = (8 - $data['permintaan']) / (8-6);
		  }elseif($data['permintaan'] == 6){
		  $lengkap = 1;
		  }
		  
		  // variabel produksi sangat_lengkap
		  if($data['permintaan'] < 6){
		  $sangat_lengkap = 0;		  
		  }elseif(6 < $data['permintaan'] AND $data['permintaan'] <= 8){
		  $sangat_lengkap = ($data['permintaan'] - 6) / (8-6);
		  }elseif($data['permintaan'] > 8){
		  $sangat_lengkap = 1;
		  }
						 **/
						// variabel harga murah
						if ($data['vharga'] <= 200000) {
							$murah = 1;
						} elseif (200000 <= $data['vharga'] and $data['vharga'] <= 600000) {
							$murah = (600000 - $data['vharga']) / (600000 - 200000);
						} elseif ($data['vharga'] >= 600000) {
							$murah = 0;
						}

						// variabel harga sedang
						if ($data['vharga'] <= 200000) {
							$sedang = 0;
						} elseif (200000 <= $data['vharga'] and $data['vharga'] <= 600000) {
							$sedang = ($data['vharga'] - 200000) / (600000 - 200000);
						} elseif (600000 <= $data['vharga'] and $data['vharga'] <= 1000000) {
							$sedang = (1000000 - $data['vharga']) / (1000000 - 600000);
						} elseif ($data['vharga'] >= 600000) {
							$sedang = 1;
						}
						// variabel harga mahal
						if ($data['vharga'] <= 600000) {
							$mahal = 0;
						} elseif (600000 <= $data['vharga'] and $data['vharga'] <= 1000000) {
							$mahal = ($data['vharga'] - 600000) / (1000000 - 600000);
						} elseif ($data['vharga'] >= 1000000) {
							$mahal = 1;
						}

						$vkamar = MAX($sedikit, $banyak);
						$vproduksi = MAX($tidak_lengkap, $lengkap, $sangat_lengkap);
						$vharga = MAX($murah, $sedang, $mahal);
						$hasil = number_format($vkamar + $vproduksi + $vharga, 2);
						if ($vkamar >= 1 and $vkamar <= 4) {
							$hasil_kamar = "Sedikit";
						} else {
							$hasil_kamar = "Banyak";
						}
						//===================
						if ($vproduksi == $tidak_lengkap) {
							$hasil_produksi = "Turun";
						} else  if ($vproduksi == $lengkap) {
							$hasil_produksi = "Lengkap";
						}
						if ($vproduksi == $sangat_lengkap) {
							$hasil_produksi = "Naik";
						}
						//===================

						if ($data['vharga'] >= 150000 and $data['vharga'] <= 600000) {
							$hasil_harga = "Murah";
						} else if ($data['vharga'] >= 200000 and $data['vharga'] <= 900000) {
							$hasil_harga = "Sedang";
						} else if ($data['vharga'] >= 600000 and $data['vharga'] <= 1000000) {
							$hasil_harga = "Mahal";
						}

						// Rule-Rule
						if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Tidak Lengkap" and $hasil_harga == "Murah") {
							$hasil_rating = "Rendah";
						} else if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Tidak Lengkap" and $hasil_harga == "Sedang") {
							$hasil_rating = "Rendah";
						} else if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Tidak Lengkap" and $hasil_harga == "Mahal") {
							$hasil_rating = "Rendah";
						} else if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Lengkap" and $hasil_harga == "Murah") {
							$hasil_rating = "Rendah";
						} else if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Lengkap" and $hasil_harga == "Sedang") {
							$hasil_rating = "Tinggi";
						} else if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Lengkap" and $hasil_harga == "Mahal") {
							$hasil_rating = "Tinggi";
						} else if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Sangat Lengkap" and $hasil_harga == "Murah") {
							$hasil_rating = "Rendah";
						} else if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Sangat Lengkap" and $hasil_harga == "Sedang") {
							$hasil_rating = "Tinggi";
						} else if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Sangat Lengkap" and $hasil_harga == "Mahal") {
							$hasil_rating = "Tinggi";
						} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Tidak Lengkap" and $hasil_harga == "Murah") {
							$hasil_rating = "Rendah";
						} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Tidak Lengkap" and $hasil_harga == "Sedang") {
							$hasil_rating = "Rendah";
						} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Tidak Lengkap" and $hasil_harga == "Mahal") {
							$hasil_rating = "Rendah";
						} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Lengkap" and $hasil_harga == "Murah") {
							$hasil_rating = "Rendah";
						} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Lengkap" and $hasil_harga == "Sedang") {
							$hasil_rating = "Tinggi";
						} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Lengkap" and $hasil_harga == "Mahal") {
							$hasil_rating = "Tinggi";
						} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Sangat Lengkap" and $hasil_harga == "Murah") {
							$hasil_rating = "Rendah";
						} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Sangat Lengkap" and $hasil_harga == "Sedang") {
							$hasil_rating = "Tinggi";
						} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Sangat Lengkap" and $hasil_harga == "Mahal") {
							$hasil_rating = "Tinggi";
						} else {
							$hasil_rating = "-";
						}


						$nmbulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

					?>
						<tr>
							<td><?php echo $no;  ?></td>
							<td><?php echo $nmbulan[$data[bulan]];  ?></td>
							<td><?php echo $data['permintaan'];  ?></td>
							<td><?php echo number_format($tidak_lengkap, 3); ?></td>
							<td><?php echo number_format($sangat_lengkap, 3); ?></td>
							<td><?php echo $hasil_produksi; ?></td>
							<td><?php echo number_format($vproduksi, 3); ?></td>




						<?php
						$no++;
					}
						?>
						</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>