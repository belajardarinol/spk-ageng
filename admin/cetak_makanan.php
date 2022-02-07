<body onLoad="print()">
	<h2 align="center">
		Laporan Data Makanan</h2>
<?php

include("library/koneksi.php");
echo"<table class='table' width=70% align=center border=1>
<tr>
	<th>No.</th>
	<th>Jenis Makanan</th>
	<th>Harga</th>
	<th>Ukuran Layar</th>
	<th>Processor</th>
	<th>Kapasitas Memori</th>
	<th>Jenis Memori</th>
	<th>Hardisk</th>
	<th>Kebutuhan</th>
</tr>";
$q=mysql_query("select * from data_makanan order by id_makanan asc");
$no=0;
while($r=mysql_fetch_array($q)){
$no++;
echo"<tr>
	<td>$no</td>
	<td>$r[jenis_makanan]</td>
	<td>$r[harga]</td>
	<td>$r[ukuran]</td>
	<td>$r[processor]</td>
	<td>$r[kapasitas]</td>
	<td>$r[memori]</td>
	<td>$r[hardisk]</td>
	<td>$r[kebutuhan]</td>
	
</tr>";
}
echo"</table>";

?>
	