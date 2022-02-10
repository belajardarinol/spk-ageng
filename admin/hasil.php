<div class="panel panel-default">
    <div class="panel-heading">
        Data Pemilihan Makanan
    </div>

    <div class="panel-body">
        <div class="table-responsive">
            <div>
                <p><b>Hasil Nilai CF & SF :</b></p>

            </div>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Jenis Makanan</th>

                        <th colspan="3">Hasil Bobot Nilai Makanan</th>
                        <th rowspan="2">NCF</th>
                        <th rowspan="2">NSF</th>
                    </tr>
                    <tr>

                    <th>Natrium</th>
                        <th>Lemak</th>
                        <th>Protein</th>
                        <!-- <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th> -->
                    </tr>
                </thead>
                <?php

                $queryutama2 = mysql_query("SELECT  *  FROM  food order by id_makanan");
                // $queryutama2 = mysql_query("SELECT  *  FROM  food order by id_makanan");
                $no3 = 1;
                while ($data2 = mysql_fetch_array($queryutama2)) {
                    $nat = $data2['natrium'];
                    $le = $data2['lemak'];
                    $pr = $data2['protein'];
                    // $nim = $_POST['nim'];
                    // $name = $_POST['pendapatan'];
                    if ($nat >= 851) {
                        $natrium = 1;
                    } elseif ($nat >= 501) {
                        $natrium = 2;
                    } elseif ($nat >= 351) {
                        $natrium = 3;
                    } elseif ($nat >= 151) {
                        $natrium = 4;
                    } else {
                        $natrium = 5;
                    }

                    if ($le >= 36) {
                        $lemak = 5;
                    } elseif ($le >= 26) {
                        $lemak = 4;
                    } elseif ($le >= 16) {
                        $lemak = 3;
                    } elseif ($le >= 6) {
                        $lemak = 2;
                    } else {
                        $lemak = 1;
                    }

                    if ($pr >= 96) {
                        $protein = 5;
                    } elseif ($pr >= 73) {
                        $protein = 4;
                    } elseif ($pr >= 49) {
                        $protein = 3;
                    } elseif ($pr >= 25) {
                        $protein = 2;
                    } else {
                        $protein = 1;
                    }
                    // var_dump($natrium);
                    // var_dump($lemak);
                    // var_dump($protein);
                    // die;
                    $natrium = $natrium - 3;
                    $lemak = $lemak - 3;
                    $protein = $protein - 1;

                    if ($natrium == 0) {
                        $natrium = 5;
                    } elseif ($natrium == 1) {
                        $natrium = 4.5;
                    } elseif ($natrium == -1) {
                        $natrium = 4;
                    } elseif ($natrium == 2) {
                        $natrium = 3.5;
                    } elseif ($natrium == -2) {
                        $natrium = 3;
                    } elseif ($natrium == 3) {
                        $natrium = 2.5;
                    } elseif ($natrium == -3) {
                        $natrium = 2;
                    } elseif ($natrium == 4) {
                        $natrium = 1.5;
                    } elseif ($natrium == -4) {
                        $natrium = 1;
                    } else {
                        $natrium = 0;
                    }

                    if ($lemak == 0) {
                        $lemak = 5;
                    } elseif ($lemak == 1) {
                        $lemak = 4.5;
                    } elseif ($lemak == -1) {
                        $lemak = 4;
                    } elseif ($lemak == 2) {
                        $lemak = 3.5;
                    } elseif ($lemak == -2) {
                        $lemak = 3;
                    } elseif ($lemak == 3) {
                        $lemak = 2.5;
                    } elseif ($lemak == -3) {
                        $lemak = 2;
                    } elseif ($lemak == 4) {
                        $lemak = 1.5;
                    } elseif ($lemak == -4) {
                        $lemak = 1;
                    } else {
                        $lemak = 0;
                    }

                    if ($protein == 0) {
                        $protein = 5;
                    } elseif ($protein == 1) {
                        $protein = 4.5;
                    } elseif ($protein == -1) {
                        $protein = 4;
                    } elseif ($protein == 2) {
                        $protein = 3.5;
                    } elseif ($protein == -2) {
                        $protein = 3;
                    } elseif ($protein == 3) {
                        $protein = 2.5;
                    } elseif ($protein == -3) {
                        $protein = 2;
                    } elseif ($protein == 4) {
                        $protein = 1.5;
                    } elseif ($protein == -4) {
                        $protein = 1;
                    } else {
                        $protein = 0;
                    }
                    
                ?>


                <tbody>
                    <?php

                        $cf = ($natrium + $lemak) / 2;
                        $sf = $protein;
                        // var_dump($cf);
                        // var_dump($sf);

                    ?>

                        <tr>
                            <td><?php echo $no3;  ?></td>
                            <td><?php echo $data2['name'];  ?></td>
                            <td><?php echo $natrium; ?></td>
                            <td><?php echo $lemak; ?></td>
                            <td><?php echo $protein; ?></td>
                            <!-- <td><?php //echo "$b4"; 
                                        ?></td>
                            <td><?php //echo "$b5"; 
                                ?></td>
                            <td><?php //echo "$b6"; 
                                ?></td>
                            <td><?php //echo "$b7"; 
                                ?></td> -->
                            <td><?php echo number_format($cf, 2); ?></td>
                            <td><?php echo number_format($sf, 2); ?></td>

                        <?php
                        $no3++;
                    }
                        ?>
                        </tr>
                </tbody>
                </tr>
                </thead>


            </table>
            <br>
            <a href="media.php?menu=hasilakhir" class="btn btn-warning">NEXT</a>
        </div>
    </div>
</div>