<div class="panel panel-default">
	<div class="panel-heading">
		Data Prediksi Produksi
	</div>
	<div style="padding:5px;">
		<p><b>Menghitung Nilai Produksi (Z) :</b></p>
		<?php
		if ($_GET[act] == "lihat") {
			$queryutama = mysql_query("SELECT  *  FROM  produksi");
			$no = 1;
			while ($data = mysql_fetch_array($queryutama)) {
				$sedikit = (2497271 - $data['persediaan']) / (2497271 - 462184);
				$banyak = ($data['persediaan'] - 462184) / (2497271 - 462184);
				$sedikit = (2497271 - $data['persediaan']) / (2497271 - 462184);
				$banyak = ($data['persediaan'] - 462184) / (2497271 - 462184);

				/*
		// variabel kamar sedikit
		  if($data['persediaan']<=2){
		  $sedikit = 1;		  
		  }elseif(2 <= $data['persediaan'] AND $data['persediaan'] <= 4){
		  $sedikit = (4 - $data['persediaan']) / (4-2);
		  }elseif($data['persediaan'] >= 4){
		  $sedikit = 0;
		  }
		  // variabel kamar banyak
		  if($data['persediaan']<=3){
		  $banyak = 0;		  
		  }elseif(3 <= $data['persediaan'] AND $data['persediaan'] <= 5){
		  $banyak = ($data['persediaan'] - 3) / (5-3);
		  }elseif($data['persediaan'] > 5){
		  $banyak = 1;
		  }
		  
	*/

				$tidak_lengkap = (3629430 - $data['permintaan']) / (3629430 - 1247590);
				$sangat_lengkap = ($data['permintaan'] - 1247590) / (3629430 - 1247590);
				/*
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
		  if($data['permintaan'] <= 6){
		  $sangat_lengkap = 0;		  
		  }elseif(6 < $data['permintaan'] AND $data['permintaan'] <= 8){
		  $sangat_lengkap = ($data['permintaan'] - 6) / (8-6);
		  }elseif($data['permintaan'] > 8){
		  $sangat_lengkap = 1;
		  }
		  */

				$vkamar = MAX($sedikit, $banyak);
				$vproduksi = MAX($tidak_lengkap, $lengkap, $sangat_lengkap);
				$vharga = MAX($murah, $sedang, $mahal);
				$hasil = number_format($vkamar + $vproduksi + $vharga, 2);
				if ($vkamar == $banyak) {
					$hasil_kamar = "Banyak";
				} else {
					$hasil_kamar = "Sedikit";
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
				if ($vharga == $murah) {
					$hasil_harga = "Murah";
				} else  if ($vharga == $sedang) {
					$hasil_harga = "Sedang";
				}
				if ($vharga == $mahal) {
					$hasil_harga = "Mahal";
				}

				// Rule-Rule

				/*
				(182.4-z) / (182.4-152.4) = 0,555 z1 = 165.75
				
				(182.4-z) / (182.4-152.4) = 0,555
				
				$kur=(182.4-152.4)*0,555 = 16.65
				
				$z1=182.4-$kur
				*/
				$a1 = number_format(MIN($sedikit, $tidak_lengkap), 3);
				//$a1=0.555;
				$kur = (3598618 - 1760145) * $a1;
				$z1 = 3598618 - $kur;

				$a2 = number_format(MIN($sedikit, $sangat_lengkap), 3);
				//$a2=0.180;
				$kur2 = (3598618 - 1760145) * $a2;
				$z2 = 1760145 + $kur2;

				$a3 = number_format(MIN($banyak, $tidak_lengkap), 3);
				//$a3=0.444;
				$kur3 = (3598618 - 1760145) * $a3;
				$z3 = 3598618 - $kur3;

				$a4 = number_format(MIN($banyak, $sangat_lengkap), 3);
				//$a4=0.180;
				$kur4 = (3598618 - 1760145) * $a4;
				$z4 = 1760145 + $kur4;

				$zhasil = ($a1 * $z1 + $a2 * $z2 + $a3 * $z3 + $a4 * $z4) / ($a1 + $a2 + $a3 + $a4);
				$suma = $a1 * $z1 + $a2 * $z2 + $a3 * $z3 + $a4 * $z4;
				$sumz = $a1 + $a2 + $a3 + $a4;
				if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Turun") {
					//$a1= MIN($sedikit,$tidak_lengkap);

					$hasil_rating = "Berkurang";
				} else if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Naik") {

					$hasil_rating = "Bertambah";
				} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Turun") {

					$hasil_rating = "Berkurang";
				} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Naik") {
					$hasil_rating = "Bertambah";
				} else {
					$hasil_rating = "-";
				}
				/**
			IF ($hasil_kamar =="Sedikit" and $hasil_produksi =="Tidak Lengkap" and $hasil_harga =="Murah") { $hasil_rating="Rendah"; }
			Else IF ($hasil_kamar =="Sedikit" and $hasil_produksi =="Tidak Lengkap" and $hasil_harga =="Sedang") { $hasil_rating="Rendah"; }
			Else IF ($hasil_kamar =="Sedikit" and $hasil_produksi =="Tidak Lengkap" and $hasil_harga =="Mahal") { $hasil_rating="Rendah"; }
			
			Else IF ($hasil_kamar =="Sedikit" and $hasil_produksi =="Lengkap" and $hasil_harga =="Murah") { $hasil_rating="Rendah"; }
			Else IF ($hasil_kamar =="Sedikit" and $hasil_produksi =="Lengkap" and $hasil_harga =="Sedang") { $hasil_rating="Tinggi"; }
			Else IF ($hasil_kamar =="Sedikit" and $hasil_produksi =="Lengkap" and $hasil_harga =="Mahal") { $hasil_rating="Tinggi"; }
			
			Else IF ($hasil_kamar =="Sedikit" and $hasil_produksi =="Sangat Lengkap" and $hasil_harga =="Murah") { $hasil_rating="Rendah"; }
			Else IF ($hasil_kamar =="Sedikit" and $hasil_produksi =="Sangat Lengkap" and $hasil_harga =="Sedang") { $hasil_rating="Tinggi"; }
			Else IF ($hasil_kamar =="Sedikit" and $hasil_produksi =="Sangat Lengkap" and $hasil_harga =="Mahal") { $hasil_rating="Tinggi"; }
			
			Else IF ($hasil_kamar =="Banyak" and $hasil_produksi =="Tidak Lengkap" and $hasil_harga =="Murah") { $hasil_rating="Rendah"; }
			Else IF ($hasil_kamar =="Banyak" and $hasil_produksi =="Tidak Lengkap" and $hasil_harga =="Sedang") { $hasil_rating="Rendah"; }
			Else IF ($hasil_kamar =="Banyak" and $hasil_produksi =="Tidak Lengkap" and $hasil_harga =="Mahal") { $hasil_rating="Rendah"; }
			
			Else IF ($hasil_kamar =="Banyak" and $hasil_produksi =="Lengkap" and $hasil_harga =="Murah") { $hasil_rating="Rendah"; }
			Else IF ($hasil_kamar =="Banyak" and $hasil_produksi =="Lengkap" and $hasil_harga =="Sedang") { $hasil_rating="Tinggi"; }
			Else IF ($hasil_kamar =="Banyak" and $hasil_produksi =="Lengkap" and $hasil_harga =="Mahal") { $hasil_rating="Tinggi"; }
			
			Else IF ($hasil_kamar =="Banyak" and $hasil_produksi =="Sangat Lengkap" and $hasil_harga =="Murah") { $hasil_rating="Rendah"; }
			Else IF ($hasil_kamar =="Banyak" and $hasil_produksi =="Sangat Lengkap" and $hasil_harga =="Sedang") { $hasil_rating="Tinggi"; }
			Else IF ($hasil_kamar =="Banyak" and $hasil_produksi =="Sangat Lengkap" and $hasil_harga =="Mahal") { $hasil_rating="Tinggi"; }
			Else{$hasil_rating="-";}
				 **/
				$nmbulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

				/*	$a1= number_format(MIN($sedikit,$tidak_lengkap),3);
				//$a1=0.555;
				$kur=(3598618-1760145)*$a1;
				$z1=3598618-$kur;
				
				$kur=(3598618-1760145)*$a1;
				$z1=3598618-((3598618-1760145)*$a1);
				
				$a2= number_format(MIN($sedikit,$sangat_lengkap),3);
				//$a2=0.180;
				$kur2=(3598618-1760145)*$a2;
				$z2=1760145+$kur2;
				
				$a3= number_format(MIN($banyak,$tidak_lengkap),3);
				//$a3=0.444;
				$kur3=(3598618-1760145)*$a3;
				$z3=3598618-$kur3;
				
				$a4= number_format(MIN($banyak,$sangat_lengkap),3);
				//$a4=0.180;
				$kur4=(3598618-1760145)*$a4;
				$z4=1760145+$kur4;
			
				$zhasil=($a1*$z1+$a2*$z2+$a3*$z3+$a4*$z4)/($a1+$a2+$a3+$a4);
		*/
				//Z= (αpred1* z1+αpred2* z2+αpred3* z3+αpred4* z4 )/(αpred1+ αpred2+αpred3+αpred4)
				if ($_GET[bln] == $data[bulan]) {
		?>
					<p><b>Bulan : <?php echo $nmbulan[$data[bulan]];  ?></b></p>

					<p>µSEDIKIT [<?php echo $data['persediaan']; ?>] = <?php echo "(2497271-$data[persediaan])/(2497271-462184)"; ?> = <?php echo number_format($sedikit, 3); ?></p>
					<p>µBanyak [<?php echo $data['persediaan']; ?>] = <?php echo "($data[persediaan]-462184)/(2497271-462184)"; ?> = <?php echo number_format($banyak, 3); ?></p>
					<p>MAX(µSEDIKIT,µBanyak)[<?php echo $data['persediaan']; ?>] = <?php echo number_format($vkamar, 3);  ?></p>

					<br />
					<p>µTurun [<?php echo $data['permintaan']; ?>] = <?php echo "(3629430-$data[permintaan])/ (3629430-1247590)"; ?> = <?php echo number_format($tidak_lengkap, 3); ?></p>
					<p>µNaik [<?php echo $data['permintaan']; ?>] = <?php echo "($data[permintaan]-1247590)/ (3629430-1247590)"; ?> = <?php echo number_format($sangat_lengkap, 3); ?></p>
					<p>MAX(µTurun Naik,µBanyak)[<?php echo $data['permintaan']; ?>] = <?php echo number_format($vproduksi, 3);  ?></p>

					<br />
					<p>α-predikat1 = MIN(<?php echo number_format($sedikit, 4);
											echo ",";
											echo number_format($tidak_lengkap, 4);
											echo ") = $a1";  ?></p>
					<p>z1 = <?php echo "3598618-((3598618-1760145)*$a1) =  $z1"; ?></p>

					<p>α-predikat2 = MIN(<?php echo number_format($sedikit, 4);
											echo ",";
											echo number_format($sangat_lengkap, 4);
											echo ") = $a2";  ?></p>
					<p>z2 = <?php echo "1760145-((3598618-1760145)*$a2) =  $z2"; ?></p>

					<p>α-predikat3 = MIN(<?php echo number_format($banyak, 4);
											echo ",";
											echo number_format($tidak_lengkap, 4);
											echo ") = $a3";  ?></p>
					<p>z3 = <?php echo "3598618-((3598618-1760145)*$a3) =  $z3"; ?></p>

					<p>α-predikat4 = MIN(<?php echo number_format($banyak, 4);
											echo ",";
											echo number_format($sangat_lengkap, 4);
											echo ") = $a4";  ?></p>
					<p>z4 = <?php echo "1760145-((3598618-1760145)*$a4) =  $z4"; ?></p>

					<p>Z = <?php echo "($a1*$z1+$a2*$z2+$a3*$z3+$a4*$z4)/($a1+$a2+$a3+$a4) = "; ?><?php echo number_format($zhasil, 3); ?></p>



			<?php
				}

				$no++;
			}
		} else {
			?>
	</div>
	<div style="margin:5px;">
		<a href='cetak.php' target="_blank" class="btn btn-info">Cetak</a>
	</div>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th rowspan="2">No</th>
				<th rowspan="2">Bulan</th>
				<th colspan="3">Variable Persediaan</th>
				<th colspan="3">Variable Permintaan</th>
				<th rowspan="2">Nilai Produksi(z)</th>
				<th rowspan="2">Produksi</th>
				<th rowspan="2">Detail Proses</th>
			</tr>
			<tr>

				<th>Persediaan</th>
				<th>μ Sedikit</th>
				<th>μ Banyak</th>
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
				$sedikit = (2497271 - $data['persediaan']) / (2497271 - 462184);
				$banyak = ($data['persediaan'] - 462184) / (2497271 - 462184);

				/*
		// variabel kamar sedikit
		  if($data['persediaan']<=2){
		  $sedikit = 1;		  
		  }elseif(2 <= $data['persediaan'] AND $data['persediaan'] <= 4){
		  $sedikit = (4 - $data['persediaan']) / (4-2);
		  }elseif($data['persediaan'] >= 4){
		  $sedikit = 0;
		  }
		  // variabel kamar banyak
		  if($data['persediaan']<=3){
		  $banyak = 0;		  
		  }elseif(3 <= $data['persediaan'] AND $data['persediaan'] <= 5){
		  $banyak = ($data['persediaan'] - 3) / (5-3);
		  }elseif($data['persediaan'] > 5){
		  $banyak = 1;
		  }
		  
	*/

				$tidak_lengkap = (3629430 - $data['permintaan']) / (3629430 - 1247590);
				$sangat_lengkap = ($data['permintaan'] - 1247590) / (3629430 - 1247590);
				/*
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
		  if($data['permintaan'] <= 6){
		  $sangat_lengkap = 0;		  
		  }elseif(6 < $data['permintaan'] AND $data['permintaan'] <= 8){
		  $sangat_lengkap = ($data['permintaan'] - 6) / (8-6);
		  }elseif($data['permintaan'] > 8){
		  $sangat_lengkap = 1;
		  }
		  */

				$vkamar = MAX($sedikit, $banyak);
				$vproduksi = MAX($tidak_lengkap, $lengkap, $sangat_lengkap);
				$vharga = MAX($murah, $sedang, $mahal);
				$hasil = number_format($vkamar + $vproduksi + $vharga, 2);
				if ($vkamar == $banyak) {
					$hasil_kamar = "Banyak";
				} else {
					$hasil_kamar = "Sedikit";
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
				if ($vharga == $murah) {
					$hasil_harga = "Murah";
				} else  if ($vharga == $sedang) {
					$hasil_harga = "Sedang";
				}
				if ($vharga == $mahal) {
					$hasil_harga = "Mahal";
				}

				// Rule-Rule

				/*
				(182.4-z) / (182.4-152.4) = 0,555 z1 = 165.75
				
				(182.4-z) / (182.4-152.4) = 0,555
				
				$kur=(182.4-152.4)*0,555 = 16.65
				
				$z1=182.4-$kur
				*/
				$a1 = number_format(MIN($sedikit, $tidak_lengkap), 3);
				//$a1=0.555;
				$kur = (3598618 - 1760145) * $a1;
				$z1 = 3598618 - $kur;

				$a2 = number_format(MIN($sedikit, $sangat_lengkap), 3);
				//$a2=0.180;
				$kur2 = (3598618 - 1760145) * $a2;
				$z2 = 1760145 + $kur2;

				$a3 = number_format(MIN($banyak, $tidak_lengkap), 3);
				//$a3=0.444;
				$kur3 = (3598618 - 1760145) * $a3;
				$z3 = 3598618 - $kur3;

				$a4 = number_format(MIN($banyak, $sangat_lengkap), 3);
				//$a4=0.180;
				$kur4 = (3598618 - 1760145) * $a4;
				$z4 = 1760145 + $kur4;

				$zhasil = ($a1 * $z1 + $a2 * $z2 + $a3 * $z3 + $a4 * $z4) / ($a1 + $a2 + $a3 + $a4);
				$suma = $a1 * $z1 + $a2 * $z2 + $a3 * $z3 + $a4 * $z4;
				$sumz = $a1 + $a2 + $a3 + $a4;
				if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Turun") {
					//$a1= MIN($sedikit,$tidak_lengkap);

					$hasil_rating = "Berkurang";
				} else if ($hasil_kamar == "Sedikit" and $hasil_produksi == "Naik") {

					$hasil_rating = "Bertambah";
				} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Turun") {

					$hasil_rating = "Berkurang";
				} else if ($hasil_kamar == "Banyak" and $hasil_produksi == "Naik") {
					$hasil_rating = "Bertambah";
				} else {
					$hasil_rating = "-";
				}
				/**
			IF ($hasil_kamar =="Sedikit" and $hasil_produksi =="Tidak Lengkap" and $hasil_harga =="Murah") { $hasil_rating="Rendah"; }
			Else IF ($hasil_kamar =="Sedikit" and $hasil_produksi =="Tidak Lengkap" and $hasil_harga =="Sedang") { $hasil_rating="Rendah"; }
			Else IF ($hasil_kamar =="Sedikit" and $hasil_produksi =="Tidak Lengkap" and $hasil_harga =="Mahal") { $hasil_rating="Rendah"; }
			
			Else IF ($hasil_kamar =="Sedikit" and $hasil_produksi =="Lengkap" and $hasil_harga =="Murah") { $hasil_rating="Rendah"; }
			Else IF ($hasil_kamar =="Sedikit" and $hasil_produksi =="Lengkap" and $hasil_harga =="Sedang") { $hasil_rating="Tinggi"; }
			Else IF ($hasil_kamar =="Sedikit" and $hasil_produksi =="Lengkap" and $hasil_harga =="Mahal") { $hasil_rating="Tinggi"; }
			
			Else IF ($hasil_kamar =="Sedikit" and $hasil_produksi =="Sangat Lengkap" and $hasil_harga =="Murah") { $hasil_rating="Rendah"; }
			Else IF ($hasil_kamar =="Sedikit" and $hasil_produksi =="Sangat Lengkap" and $hasil_harga =="Sedang") { $hasil_rating="Tinggi"; }
			Else IF ($hasil_kamar =="Sedikit" and $hasil_produksi =="Sangat Lengkap" and $hasil_harga =="Mahal") { $hasil_rating="Tinggi"; }
			
			Else IF ($hasil_kamar =="Banyak" and $hasil_produksi =="Tidak Lengkap" and $hasil_harga =="Murah") { $hasil_rating="Rendah"; }
			Else IF ($hasil_kamar =="Banyak" and $hasil_produksi =="Tidak Lengkap" and $hasil_harga =="Sedang") { $hasil_rating="Rendah"; }
			Else IF ($hasil_kamar =="Banyak" and $hasil_produksi =="Tidak Lengkap" and $hasil_harga =="Mahal") { $hasil_rating="Rendah"; }
			
			Else IF ($hasil_kamar =="Banyak" and $hasil_produksi =="Lengkap" and $hasil_harga =="Murah") { $hasil_rating="Rendah"; }
			Else IF ($hasil_kamar =="Banyak" and $hasil_produksi =="Lengkap" and $hasil_harga =="Sedang") { $hasil_rating="Tinggi"; }
			Else IF ($hasil_kamar =="Banyak" and $hasil_produksi =="Lengkap" and $hasil_harga =="Mahal") { $hasil_rating="Tinggi"; }
			
			Else IF ($hasil_kamar =="Banyak" and $hasil_produksi =="Sangat Lengkap" and $hasil_harga =="Murah") { $hasil_rating="Rendah"; }
			Else IF ($hasil_kamar =="Banyak" and $hasil_produksi =="Sangat Lengkap" and $hasil_harga =="Sedang") { $hasil_rating="Tinggi"; }
			Else IF ($hasil_kamar =="Banyak" and $hasil_produksi =="Sangat Lengkap" and $hasil_harga =="Mahal") { $hasil_rating="Tinggi"; }
			Else{$hasil_rating="-";}
				 **/
				$nmbulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

			?>
				<tr>
					<td><?php echo $no;  ?></td>
					<td><?php echo $nmbulan[$data[bulan]];  ?></td>
					<td><?php echo $data['persediaan']; ?></td>
					<td><?php echo number_format($sedikit, 3); ?></td>
					<td><?php echo number_format($banyak, 3); ?></td>
					<td><?php echo $data['permintaan'];  ?></td>
					<td><?php echo number_format($tidak_lengkap, 3); ?></td>
					<td><?php echo number_format($sangat_lengkap, 3); ?></td>
					<td><?php echo number_format($zhasil, 3); ?></td>
					<td><?php echo "$hasil_rating"; ?></td>
					<td align=center><a href="index.php?menu=prediksi&act=lihat&bln=<?php echo "$data[bulan]"; ?>" class="btn btn-info">Lihat</a></td>



			<?php
				$no++;
			}
		}
			?>
				</tr>
		</tbody>
	</table>
</div>
</div>
</div>