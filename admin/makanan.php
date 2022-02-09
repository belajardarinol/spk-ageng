<?php
if ($_GET['act'] == "view") {
	echo "<a href='?menu=makanan' class='btn btn-info'>Input Data Makanan</a>";

	echo "<table class='table'>
<tr>
	<th>No.</th>
	<th>Jenis Makanan</th>
	<th>Natrium</th>
	<th>Lemak</th>
	<th>Protein</th>
	
	<th>Aksi</th>
</tr>";
	$q = mysql_query("select * from food order by id_makanan asc");
	while ($r = mysql_fetch_array($q)) {
		$no++;
		echo "<tr>
	<td>$no</td>
	<td>$r[name]</td>
	<td>$r[natrium]</td>
	<td>$r[lemak]</td>
	<td>$r[protein]</td>
	<td><a class='btn btn-small btn-warning' href='makanan.delete.php?inf=$r[id_makanan]' >Hapus</a></td>
</tr>";
	}
	echo "</table>";
} else {
?>
	<div id="wrap">
		<header>
			<div class="box">

				<header>
					<h5 align="center">Input Data Makanan</h5>
				</header>
				<div class="body">
					<form action="simpan_makanan.php" method="post" class="form-horizontal">


						<div class="form-group">
							<label class="control-label col-lg-4">Nama Jenis Makanan </label>
							<div class="col-lg-4">
								<input type="text" name="jenis" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Natrium </label>
							<div class="col-lg-4">
								<input type="text" name="natrium" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Lemak </label>
							<div class="col-lg-4">
								<input type="text" name="lemak" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Protein </label>
							<div class="col-lg-4">
								<input type="text" name="protein" autofocus required class="form-control" />
							</div>
						</div>
						<!-- <div class="form-group">
							<label class="control-label col-lg-4">Ukuran Layar </label>
							<div class="col-lg-4">
								<select name="ukuran" class="form-control">
									<option value="">Silahkan Dipilih...</option>
									<option value="14">14"</option>
									<option value="13">13"</option>
									<option value="10">10"</option>
									<option value="17">17"</option>
									<option value=">17">>17"</option>
								</select>
							</div>
						</div> -->
						<!-- <div class="form-group">
							<label class="control-label col-lg-4">Processor</label>
							<div class="col-lg-4">
								<select name="processor" class="form-control">
									<option value="">Silahkan Dipilih...</option>
									<option value="Intel Core i7">Intel Core i7</option>
									<option value="Intel Core i5">Intel Core i5</option>
									<option value="Intel Core i3">Intel Core i3</option>
									<option value="Core 2 Duo">Core 2 Duo</option>
									<option value="Pentium">Pentium</option>
								</select>
							</div>
						</div> -->
						<!-- <div class="form-group">
							<label class="control-label col-lg-4">Kapasitas Memori</label>
							<div class="col-lg-4">
								<select name="kapasitas" class="form-control">
									<option value="">Silahkan Dipilih...</option>
									<option value="8 GB">8 GB</option>
									<option value="4 GB">4 GB</option>
									<option value="3 GB">3 GB</option>
									<option value="2 GB">2 GB</option>
									<option value="1 GB">1 GB</option>
								</select>
							</div>
						</div> -->
						<!-- <div class="form-group">
							<label class="control-label col-lg-4">Jenis Memori</label>
							<div class="col-lg-4">
								<select name="memori" class="form-control">
									<option value="">Silahkan Dipilih...</option>
									<option value="DDR 3">DDR 3</option>
									<option value="DDR 2">DDR 2</option>
								</select>
							</div>
						</div> -->
						<!-- <div class="form-group">
							<label class="control-label col-lg-4">Kapasitas Hardisk</label>
							<div class="col-lg-4">
								<select name="hardisk" class="form-control">
									<option value="">Silahkan Dipilih...</option>
									<option value=">640 GB">>640 GB</option>
									<option value="640 GB">640 GB</option>
									<option value="500 GB">500 GB</option>
									<option value="320 GB">320 GB</option>
									<option value="250 GB">250 GB</option>
								</select>
							</div>
						</div> -->
						<!-- <div class="form-group">
							<label class="control-label col-lg-4">Kebutuhan</label>
							<div class="col-lg-4">
								<select name="kebutuhan" class="form-control">
									<option value="">Silahkan Dipilih...</option>
									<option value="Game">Game</option>
									<option value="Program">Program</option>
									<option value="Umum">Umum</option>
								</select>
							</div>
						</div> -->

						<div class="form-actions no-margin-bottom" style="text-align:left;">
							<input type="submit" value="Simpan" class="btn btn-primary" /> <a href="index.php" class="btn btn-warning">Back</a>
						</div>

					</form>
				</div>
			</div>
		<?php } ?>