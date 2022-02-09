<body onLoad="print()">
	<h2 align="center">
		Data Hasil Pemilihan Makanan Terbaik
  
	<table class="table table-striped table-bordered table-hover" border=1 cellspacing=0 cellpadding=5 align="center" width="50%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Jenis Makanan</th>
                                            <th>NCF</th>
                                            <th>NSF</th>
                                            <th>NT</th>
                                            <th>Peringkat</th>
                                   </tr>
                                    </thead>
                                       <tbody>
    
    
  <?php
include("library/koneksi.php");
			 $queryutama3 = mysql_query("SELECT  *  FROM  hasil order by nt desc"); 
    $no3 = 1;
    while ($data3 = mysql_fetch_array($queryutama3)) {
	
	$kar=mysql_fetch_array(mysql_query("select * from food where id_makanan='$data3[idproses]'"));
?>

           <tr>
           <td><?php echo $no3;  ?></td> 
           <td><?php echo $kar['name'];  ?></td>
           <td><?php echo number_format($data3['ncf'],2); ?></td>
           <td><?php echo number_format($data3['nsf'],2); ?></td>
           <td><?php echo number_format($data3['nt'],2); ?></td>
			<td align=center><?php echo $no3;  ?></td>
			
		   
<?php 
$no3++;	
}  
?>
</tr></tbody></table>
</body>