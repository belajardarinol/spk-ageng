<header>
	<h5 align="center">Proses SPK Profile Matching</h5>
</header>
<div class="body">
	<form action="simpan.php" method="post" class="form-horizontal">
		<table>
			<tr>
				<td>
					Jenis Makanan</td>
				<td>
					<select name="nim" id="nim" onChange="changeValue(this.value)" class="form-control">
						<option value=0>-Pilih-</option>
						<?php

						// $result = mysql_query("SELECT * FROM proses_spk ");
						$result = mysql_query("SELECT * FROM food ");
						$jsArray = "var dtMhs = new Array();\n";
						while ($row = mysql_fetch_array($result)) {
							echo '<option value="' . $row['id_makanan'] . '">' . $row['name'] . '</option>';
							$jsArray .= "dtMhs['" . $row['id_makanan'] . "'] = {nama:'" . addslashes($row['natrium']) . "',jrsn:'" . addslashes($row['lemak']) . "',jml:'" . addslashes($row['protein']) . "'};\n";
							// $jsArray .= "dtMhs['" . $row['id_makanan'] . "'] = {nama:'" . addslashes($row['k1']) . "',jrsn:'" . addslashes($row['k2']) . "',jml:'" . addslashes($row['k3']) . "',pendapatan:'" . addslashes($row['k4']) . "',status:'" . addslashes($row['k5']) . "',hardisk:'" . addslashes($row['k6']) . "'};\n";
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Natrium </td>
				<td>
					<input type="text" data-field="x_username" id="nm" name='nm' class="form-control" readonly />
				</td>
			</tr>
			<tr>
				<td>
					Lemak </td>
				<td>
					<input type="text" data-field="x_username" id="jrsn" name='jrsn' class="form-control" readonly />
				</td>
			</tr>
			<tr>
				<td>

					Protein </td>
				<td>

					<input type="text" data-field="x_username" id="jml" name='jml' class="form-control" readonly />
				</td>
			<!-- </tr>
			<tr>
				<td>
					Kriteria Kapasitas Memori </td>
				<td>
					<input type="text" data-field="x_username" id="pendapatan" name='pendapatan' class="form-control" readonly />
				</td>
			</tr>
			<tr>
				<td>Kriteria Tipe Memori </td>
				<td>

					<input type="text" data-field="x_username" id="status" name='status' class="form-control" readonly />
				</td>
			</tr>
			<tr>
				<td>Kriteria Kapasitas Hardisk </td>
				<td>

					<input type="text" data-field="x_username" id="hardisk" name='hardisk' class="form-control" readonly />
				</td>
			</tr>
			<tr> -->
				<td>
					<input type="submit" value="PROSES" class="btn btn-primary" />
				</td>
			</tr>

	</form>

	<script type="text/javascript">
		<?php echo $jsArray; ?>

		function changeValue(id_makanan) {
			document.getElementById('nm').value = dtMhs[id_makanan].nama;
			document.getElementById('jrsn').value = dtMhs[id_makanan].jrsn;
			document.getElementById('jml').value = dtMhs[id_makanan].jml;
			// document.getElementById('pendapatan').value = dtMhs[id_makanan].pendapatan;
			// document.getElementById('status').value = dtMhs[id_makanan].status;
			// document.getElementById('hardisk').value = dtMhs[id_makanan].hardisk;
		};
	</script>