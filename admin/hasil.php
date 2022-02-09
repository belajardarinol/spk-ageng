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

                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <!-- <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th> -->
                    </tr>
                </thead>
                <?php
                /*
			 ?>
			 <tbody>
    
    
  <?php

  $queryutama = mysql_query("SELECT  *  FROM  karyawan order by idkaryawan"); 
    $no = 1;
    while ($data = mysql_fetch_array($queryutama)) {
									
?>
           <tr>
           <td><?php echo $no;  ?></td> 
           <td><?php echo $data[nama];  ?></td>
           <td><?php echo $data['k1']; ?></td>
           <td><?php echo $data['k2']; ?></td>
           <td><?php echo $data['k3']; ?></td>
           <td><?php echo $data['k4']; ?></td>
           <td><?php echo $data['k5']; ?></td>
           <td><?php echo $data['k6']; ?></td>
		   <td></td>
		   <td></td>
          
<?php 
$no++;	
}  
?>
</tr></tbody>
            <?php
            */
                $p1 = 3;
                $p2 = 3;
                $p3 = 1;
                // $p4 = 3;
                // $p5 = 3;
                // $p6 = 3;
                // $p7 = 3;
                /*
			?>
									<thead>
                                        <tr>
                                            <th colspan=2>Angka Profile Matching</th>
                                            <th><?php echo"$p1"; ?></th>
                                            <th><?php echo"$p2"; ?></th>
                                            <th><?php echo"$p3"; ?></th>
                                            <th><?php echo"$p4"; ?></th>
                                            <th><?php echo"$p5"; ?></th>
                                            <th><?php echo"$p6"; ?></th>
                                            
                                        </tr>
                                    </thead>
									<?php 
									*/
                ?>

                <?php

                $queryutama2 = mysql_query("SELECT  *  FROM  proses_spk order by id_makanan");
                // $queryutama2 = mysql_query("SELECT  *  FROM  food order by id_makanan");
                $no2 = 1;
                while ($data2 = mysql_fetch_array($queryutama2)) {
                    $kur1 = $data2[natrium] - $p1;
                    $kur2 = $data2[lemak] - $p2;
                    $kur3 = $data2[protein] - $p3;
                    // $kur4 = $data2[k4] - $p4;
                    // $kur5 = $data2[k5] - $p5;
                    // $kur6 = $data2[k6] - $p6;
                    // $kur7 = $data2[k7] - $p7;
                    $plus = 0;
                    $min = 0;
                    //$juml=$kur1+$kur2+$kur3+$kur4+$kur5+$kur6;

                    if ($kur1 >= "0") {
                        $plus = $plus + $kur1;
                    } else {
                        $min = $min + $kur1;
                    }
                    if ($kur2 >= "0") {
                        $plus = $plus + $kur2;
                    } else {
                        $min = $min + $kur2;
                    }
                    if ($kur3 >= "0") {
                        $plus = $plus + $kur3;
                    } else {
                        $min = $min + $kur3;
                    }
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
                    /*
?>

           <tr>
           <td><?php echo $no2;  ?></td> 
           <td><?php echo $data2[nama];  ?></td>
           <td><?php echo"$kur1"; ?></td>
           <td><?php echo"$kur2"; ?></td>
           <td><?php echo"$kur3"; ?></td>
           <td><?php echo"$kur4"; ?></td>
           <td><?php echo"$kur5"; ?></td>
           <td><?php echo"$kur6"; ?></td>
		   
<?php
*/
                    $no2++;
                }
                ?>


                <tbody>
                    <?php

                    $queryutama3 = mysql_query("SELECT  *  FROM  proses_spk order by id_makanan asc");
                    // $queryutama3 = mysql_query("SELECT  *  FROM  food order by id_makanan asc");
                    $no3 = 1;
                    while ($data3 = mysql_fetch_array($queryutama3)) {
                        // $kur1 = $data3[k1] - $p1;
                        // $kur2 = $data3[k2] - $p2;
                        // $kur3 = $data3[k3] - $p3;
                        $kur1 = $data3[natrium] - $p1;
                        $kur2 = $data3[lemak] - $p2;
                        $kur3 = $data3[protein] - $p3;
                        // $kur4 = $data3[k4] - $p4;
                        // $kur5 = $data3[k5] - $p5;
                        // $kur6 = $data3[k6] - $p6;

                        // $kur7 = $data3[k7] - $p7;

                        if ($kur1 == "0") {
                            $b1 = 5;
                        } elseif ($kur1 == "1") {
                            $b1 = 4.5;
                        } elseif ($kur1 == "-1") {
                            $b1 = 4;
                        } elseif ($kur1 == "2") {
                            $b1 = 3.5;
                        } elseif ($kur1 == "-2") {
                            $b1 = 3;
                        } elseif ($kur1 == "3") {
                            $b1 = 2.5;
                        } elseif ($kur1 == "-3") {
                            $b1 = 2;
                        } elseif ($kur1 == "4") {
                            $b1 = 1.5;
                        } elseif ($kur1 == "-4") {
                            $b1 = 1;
                        }

                        if ($kur2 == "0") {
                            $b2 = 5;
                        } elseif ($kur2 == "1") {
                            $b2 = 4.5;
                        } elseif ($kur2 == "-1") {
                            $b2 = 4;
                        } elseif ($kur2 == "2") {
                            $b2 = 3.5;
                        } elseif ($kur2 == "-2") {
                            $b2 = 3;
                        } elseif ($kur2 == "3") {
                            $b2 = 2.5;
                        } elseif ($kur2 == "-3") {
                            $b2 = 2;
                        } elseif ($kur2 == "4") {
                            $b2 = 1.5;
                        } elseif ($kur2 == "-4") {
                            $b2 = 1;
                        }

                        if ($kur3 == "0") {
                            $b3 = 5;
                        } elseif ($kur3 == "1") {
                            $b3 = 4.5;
                        } elseif ($kur3 == "-1") {
                            $b3 = 4;
                        } elseif ($kur3 == "2") {
                            $b3 = 3.5;
                        } elseif ($kur3 == "-2") {
                            $b3 = 3;
                        } elseif ($kur3 == "3") {
                            $b3 = 2.5;
                        } elseif ($kur3 == "-3") {
                            $b3 = 2;
                        } elseif ($kur3 == "4") {
                            $b3 = 1.5;
                        } elseif ($kur3 == "-4") {
                            $b3 = 1;
                        }

                        // if ($kur4 == "0") {
                        //     $b4 = 5;
                        // } elseif ($kur4 == "1") {
                        //     $b4 = 4.5;
                        // } elseif ($kur4 == "-1") {
                        //     $b4 = 4;
                        // } elseif ($kur4 == "2") {
                        //     $b4 = 3.5;
                        // } elseif ($kur4 == "-2") {
                        //     $b4 = 3;
                        // } elseif ($kur4 == "3") {
                        //     $b4 = 2.5;
                        // } elseif ($kur4 == "-3") {
                        //     $b4 = 2;
                        // } elseif ($kur4 == "4") {
                        //     $b4 = 1.5;
                        // } elseif ($kur4 == "-4") {
                        //     $b4 = 1;
                        // }

                        // if ($kur5 == "0") {
                        //     $b5 = 5;
                        // } elseif ($kur5 == "1") {
                        //     $b5 = 4.5;
                        // } elseif ($kur5 == "-1") {
                        //     $b5 = 4;
                        // } elseif ($kur5 == "2") {
                        //     $b5 = 3.5;
                        // } elseif ($kur5 == "-2") {
                        //     $b5 = 3;
                        // } elseif ($kur5 == "3") {
                        //     $b5 = 2.5;
                        // } elseif ($kur5 == "-3") {
                        //     $b5 = 2;
                        // } elseif ($kur5 == "4") {
                        //     $b5 = 1.5;
                        // } elseif ($kur5 == "-4") {
                        //     $b5 = 1;
                        // }

                        // if ($kur6 == "0") {
                        //     $b6 = 5;
                        // } elseif ($kur6 == "1") {
                        //     $b6 = 4.5;
                        // } elseif ($kur6 == "-1") {
                        //     $b6 = 4;
                        // } elseif ($kur6 == "2") {
                        //     $b6 = 3.5;
                        // } elseif ($kur6 == "-2") {
                        //     $b6 = 3;
                        // } elseif ($kur6 == "3") {
                        //     $b6 = 2.5;
                        // } elseif ($kur6 == "-3") {
                        //     $b6 = 2;
                        // } elseif ($kur6 == "4") {
                        //     $b6 = 1.5;
                        // } elseif ($kur6 == "-4") {
                        //     $b6 = 1;
                        // }


                        // if ($kur7 == "0") {
                        //     $b7 = 5;
                        // } elseif ($kur7 == "1") {
                        //     $b7 = 4.5;
                        // } elseif ($kur7 == "-1") {
                        //     $b7 = 4;
                        // } elseif ($kur7 == "2") {
                        //     $b7 = 3.5;
                        // } elseif ($kur7 == "-2") {
                        //     $b7 = 3;
                        // } elseif ($kur7 == "3") {
                        //     $b7 = 2.5;
                        // } elseif ($kur7 == "-3") {
                        //     $b7 = 2;
                        // } elseif ($kur7 == "4") {
                        //     $b7 = 1.5;
                        // } elseif ($kur7 == "-4") {
                        //     $b7 = 1;
                        // }

                        // $cf = ($b1 + $b3 + $b5) / 7;
                        // $sf = ($b2 + $b4 + $b6 + $b7) / 7;
                        $cf = ($b1 + $b2) / 3;
                        $sf = $b3 / 3;
                        // var_dump($cf);
                        // var_dump($sf);

                    ?>

                        <tr>
                            <td><?php echo $no3;  ?></td>
                            <td><?php echo $data3[name];  ?></td>
                            <td><?php echo "$b1"; ?></td>
                            <td><?php echo "$b2"; ?></td>
                            <td><?php echo "$b3"; ?></td>
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