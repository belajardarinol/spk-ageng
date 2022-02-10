<div class="panel panel-default">
    <div class="panel-heading">
        Data Pemilihan Makanan
    </div>

    <div class="panel-body">
        <div class="table-responsive">
            <div>
                <p><b>Perhitungan GAP & Perhitungan Kumulatif :</b></p>

            </div>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Jenis Makanan</th>
                        <th colspan="3">Penilaian Kriteria Makanan</th>
                        <th colspan="2">GAP</th>
                    </tr>
                    <tr>

                        <th>K1</th>
                        <th>K2</th>
                        <th>K3</th>
                        <!-- <th>K4</th>
                            <th>K5</th>
                            <th>K6</th>
                            <th>K7</th> -->
                        <th>+</th>
                        <th>-</th>
                    </tr>
                </thead>
                <tbody>


                    <?php

                    $queryutama = mysql_query("SELECT  *  FROM  food order by id_makanan asc");
                    // $queryutama = mysql_query("SELECT  *  FROM  food order by id_makanan asc");
                    $no = 1;
                    while ($data = mysql_fetch_array($queryutama)) {
                        $nat = $data['natrium'];
                        $le = $data['lemak'];
                        $pr = $data['protein'];
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
                        // var_dump($data);die;
                    ?>
                        <tr>
                            <td><?php echo $no;  ?></td>
                            <!-- <td><?php //echo $data[id_makanan];  
                                        ?></td> -->
                            <td><?php echo $data['name'];  ?></td>
                            <td><?php echo $natrium ?></td>
                            <td><?php echo $lemak ?></td>
                            <td><?php echo $protein ?></td>
                            <!-- <td><?php // echo $data['k1']; 
                                        ?></td>
                            <td><?php // echo $data['k2']; 
                                ?></td>
                            <td><?php //echo $data['k3']; 
                                ?></td>
                            <td><?php //echo $data['k4']; 
                                ?></td>
                            <td><?php //echo $data['k5']; 
                                ?></td>
                            <td><?php //echo $data['k6']; 
                                ?></td>
                            <td><?php //echo $data['k7']; 
                                ?></td> -->
                            <td></td>
                            <td></td>

                        <?php
                        $no++;
                    }
                        ?>
                        </tr>
                </tbody>
                <?php

                $p1 = 3;
                $p2 = 3;
                $p3 = 1;
                // $p4 = 3;
                // $p5 = 3;
                // $p6 = 3;
                // $p7 = 3;
                ?>
                <thead>
                    <tr>
                        <th colspan=2>Angka Profile Makanan</th>
                        <th><?php echo 3; ?></th>
                        <th><?php echo 3; ?></th>
                        <th><?php echo 1; ?></th>
                        <!-- <th><?php // echo "$p4"; 
                                    ?></th>
                        <th><?php // echo "$p5"; 
                            ?></th>
                        <th><?php // echo "$p6"; 
                            ?></th>
                        <th><?php // echo "$p7"; 
                            ?></th> -->

                    </tr>
                </thead>
                <tbody>
                    <?php

                    // $queryutama2 = mysql_query("SELECT  *  FROM  food order by id_makanan asc");
                    // $queryutama = mysql_query("SELECT  *  FROM  proses_spk order by id_makanan asc");
                    // $no2 = 1;
                    // while ($data2 = mysql_fetch_array($queryutama2)) {
                    //     $kur1 = $data2[natrium] - $p1;
                    //     $kur2 = $data2[lemak] - $p2;
                    //     $kur3 = $data2[protein] - $p3;
                        // $kur4 = $data2[k4] - $p4;
                        // $kur5 = $data2[k5] - $p5;
                        // $kur6 = $data2[k6] - $p6;
                        // $kur7 = $data2[k7] - $p7;
                        // $plus = 0;
                        // $min = 0;
                        //$juml=$kur1+$kur2+$kur3+$kur4+$kur5+$kur6;

                        // if ($kur1 >= "0") {
                        //     $plus = $plus + $kur1;
                        // } else {
                        //     $min = $min + $kur1;
                        // }
                        // if ($kur2 >= "0") {
                        //     $plus = $plus + $kur2;
                        // } else {
                        //     $min = $min + $kur2;
                        // }
                        // if ($kur3 >= "0") {
                        //     $plus = $plus + $kur3;
                        // } else {
                        //     $min = $min + $kur3;
                        // }
                        // if ($kur4 >= "0") {
                        //     $plus = $plus + $kur4;
                        // } else {
                        //     $min = $min + $kur4;
                        // }
                        // if ($kur5 >= "0") {
                        //     $plus = $plus + $kur5;
                        // } else {
                        //     $min = $min + $kur5;
                        // }
                        // if ($kur6 >= "0") {
                        //     $plus = $plus + $kur6;
                        // } else {
                        //     $min = $min + $kur6;
                        // }
                        // if ($kur7 >= "0") {
                        //     $plus = $plus + $kur7;
                        // } else {
                        //     $min = $min + $kur7;
                        // }
                    ?>

                        <tr>
                            <!-- <td><?php echo $no2;  ?></td>
                            <td><?php echo $data2[name];  ?></td>
                            <td><?php echo "$kur1"; ?></td>
                            <td><?php echo "$kur2"; ?></td>
                            <td><?php echo "$kur3"; ?></td> -->
                            <!-- <td><?php //echo "$kur4"; 
                                        ?></td>
                            <td><?php //echo "$kur5"; 
                                ?></td>
                            <td><?php //echo "$kur6"; 
                                ?></td>
                            <td><?php //echo "$kur7"; 
                                ?></td> -->
                            <!-- <td><?php echo "$plus"; ?></td>
                            <td><?php echo "$min"; ?></td> -->

                        <?php
                        // $no2++;
                    // }
                        ?>
                        </tr>
                </tbody>
            </table><br>
            <a href="media.php?menu=bobot" class="btn btn-warning">NEXT</a>
        </div>
    </div>
</div>