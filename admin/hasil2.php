<div class="panel panel-default">
    <div class="panel-heading">
        Data Pemilihan Makanan
    </div>

    <div class="panel-body">
        <div class="table-responsive">
            <div>
                <p><b>Peringkat :</b></p>
            </div>
            <div style="margin:5px;">
                <a href="cetak.php" target="_blank" class="btn btn-info">Cetak</a>
            </div>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Makanan</th>
                        <th>NCF</th>
                        <th>NSF</th>
                        <th>NT</th>
                        <th>Peringkat</th>
                    </tr>
                </thead>
                <?php
                $queryutama3 = mysql_query("SELECT  *  FROM  hasil order by nt desc");
                $no3 = 1;
                while ($data3 = mysql_fetch_array($queryutama3)) {

                    $kar = mysql_fetch_array(mysql_query("select * from food where id_makanan='$data3[idproses]'"));

                ?>

                    <tr>
                        <td><?php echo $no3;  ?></td>
                        <td><?php echo $kar[name];  ?></td>
                        <td><?php echo number_format($data3[ncf], 2); ?></td>
                        <td><?php echo number_format($data3[nsf], 2); ?></td>
                        <td><?php echo number_format($data3[nt], 2); ?></td>
                        <td align=center><?php echo $no3;  ?></td>

                    <?php
                    $no3++;
                }
                    ?>
                    </tr>
                    </tbody>
                    </tr>
                    </thead>


            </table>