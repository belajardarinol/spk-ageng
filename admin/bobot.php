<div class="panel panel-default">
    <div class="panel-heading">
        Data Pemilihan Makanan
    </div>

    <div class="panel-body">
        <div class="table-responsive">
            <div>
                <p><b>Tabel GAP & Bobot Penilaian Makanan :</b></p>

            </div>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Jenis Makanan</th>
                        <th colspan="7">Hasil Bobot Nilai Makanan</th>
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
                // $p1=5;
                // $p2=5;
                // $p3=3;
                // $p4=3;
                // $p5=3;
                // $p6=3;
                // $p7=3;
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
                <tbody>
                    <?php

                    $queryutama2 = mysql_query("SELECT  *  FROM  food order by id_makanan asc");
                    // $queryutama2 = mysql_query("SELECT  *  FROM  food order by id_makanan asc"); 
                    $no2 = 1;
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
                        // $kur1 = $data2[natrium] - $p1;
                        // $kur2 = $data2[lemak] - $p2;
                        // $kur3 = $data2[protein] - $p3;
                        // $kur4=$data2[k4]-$p4;
                        // $kur5=$data2[k5]-$p5;
                        // $kur6=$data2[k6]-$p6;
                        // $kur7=$data2[k7]-$p6;
                        // $plus = 0;
                        // $min = 0;
                        //$juml=$kur1+$kur2+$kur3+$kur4+$kur5+$kur6;

                        // if($kur1>="0"){$plus=$plus+$kur1;}else{$min=$min+$kur1;}
                        // if($kur2>="0"){$plus=$plus+$kur2;}else{$min=$min+$kur2;}
                        // if($kur3>="0"){$plus=$plus+$kur3;}else{$min=$min+$kur3;}
                        // if($kur4>="0"){$plus=$plus+$kur4;}else{$min=$min+$kur4;}
                        // if($kur5>="0"){$plus=$plus+$kur5;}else{$min=$min+$kur5;}
                        // if($kur6>="0"){$plus=$plus+$kur6;}else{$min=$min+$kur6;}
                        // if($kur7>="0"){$plus=$plus+$kur7;}else{$min=$min+$kur7;}									
                    ?>

                        <tr>
                            <td><?php echo $no2;  ?></td>
                            <td><?php echo $data2[name];  ?></td>
                            <td><?php echo $natrium; ?></td>
                            <td><?php echo $lemak; ?></td>
                            <td><?php echo $protein; ?></td>
                            <!-- <td><?php //echo"$kur4"; 
                                        ?></td>
           <td><?php //echo"$kur5"; 
                ?></td>
           <td><?php //echo"$kur6"; 
                ?></td>
		   <td><?php //echo"$kur7"; 
                ?></td> -->

                        <?php
                        $no2++;
                    }
                        ?>
                        </tr>
                </tbody>
                <!-- <thead>
                    <tr>
                        <th colspan=9>
                            <center>Keterangan Bobot Nilai</center>
                        </th>
                <tbody> -->
                    <?php

                    // $queryutama3 = mysql_query("SELECT  *  FROM  proses_spk order by id_makanan asc");
                    // $no3 = 1;
                    // while ($data3 = mysql_fetch_array($queryutama3)) {
                    //     $kur1 = $data3[natrium] - $p1;
                    //     $kur2 = $data3[lemak] - $p2;
                    //     $kur3 = $data3[protein] - $p3;
                        // $kur4=$data3[k4]-$p4;
                        // $kur5=$data3[k5]-$p5;
                        // $kur6=$data3[k6]-$p6;
                        // $kur7=$data3[k7]-$p7;

                        // if ($kur1 == "0") {
                        //     $b1 = 5;
                        // } elseif ($kur1 == "1") {
                        //     $b1 = 4.5;
                        // } elseif ($kur1 == "-1") {
                        //     $b1 = 4;
                        // } elseif ($kur1 == "2") {
                        //     $b1 = 3.5;
                        // } elseif ($kur1 == "-2") {
                        //     $b1 = 3;
                        // } elseif ($kur1 == "3") {
                        //     $b1 = 2.5;
                        // } elseif ($kur1 == "-3") {
                        //     $b1 = 2;
                        // } elseif ($kur1 == "4") {
                        //     $b1 = 1.5;
                        // } elseif ($kur1 == "-4") {
                        //     $b1 = 1;
                        // }

                        // if ($kur2 == "0") {
                        //     $b2 = 5;
                        // } elseif ($kur2 == "1") {
                        //     $b2 = 4.5;
                        // } elseif ($kur2 == "-1") {
                        //     $b2 = 4;
                        // } elseif ($kur2 == "2") {
                        //     $b2 = 3.5;
                        // } elseif ($kur2 == "-2") {
                        //     $b2 = 3;
                        // } elseif ($kur2 == "3") {
                        //     $b2 = 2.5;
                        // } elseif ($kur2 == "-3") {
                        //     $b2 = 2;
                        // } elseif ($kur2 == "4") {
                        //     $b2 = 1.5;
                        // } elseif ($kur2 == "-4") {
                        //     $b2 = 1;
                        // }

                        // if ($kur3 == "0") {
                        //     $b3 = 5;
                        // } elseif ($kur3 == "1") {
                        //     $b3 = 4.5;
                        // } elseif ($kur3 == "-1") {
                        //     $b3 = 4;
                        // } elseif ($kur3 == "2") {
                        //     $b3 = 3.5;
                        // } elseif ($kur3 == "-2") {
                        //     $b3 = 3;
                        // } elseif ($kur3 == "3") {
                        //     $b3 = 2.5;
                        // } elseif ($kur3 == "-3") {
                        //     $b3 = 2;
                        // } elseif ($kur3 == "4") {
                        //     $b3 = 1.5;
                        // } elseif ($kur3 == "-4") {
                        //     $b3 = 1;
                        // }

                        // if($kur4=="0"){$b4=5;}elseif($kur4=="1"){$b4=4.5;}elseif($kur4=="-1"){$b4=4;}elseif($kur4=="2"){$b4=3.5;}elseif($kur4=="-2"){$b4=3;}elseif($kur4=="3"){$b4=2.5;}elseif($kur4=="-3"){$b4=2;}elseif($kur4=="4"){$b4=1.5;}elseif($kur4=="-4"){$b4=1;}

                        // if($kur5=="0"){$b5=5;}elseif($kur5=="1"){$b5=4.5;}elseif($kur5=="-1"){$b5=4;}elseif($kur5=="2"){$b5=3.5;}elseif($kur5=="-2"){$b5=3;}elseif($kur5=="3"){$b5=2.5;}elseif($kur5=="-3"){$b5=2;}elseif($kur5=="4"){$b5=1.5;}elseif($kur5=="-4"){$b5=1;}

                        // if($kur6=="0"){$b6=5;}elseif($kur6=="1"){$b6=4.5;}elseif($kur6=="-1"){$b6=4;}elseif($kur6=="2"){$b6=3.5;}elseif($kur6=="-2"){$b6=3;}elseif($kur6=="3"){$b6=2.5;}elseif($kur6=="-3"){$b6=2;}elseif($kur6=="4"){$b6=1.5;}elseif($kur6=="-4"){$b6=1;}

                        // if($kur7=="0"){$b7=5;}elseif($kur7=="1"){$b7=4.5;}elseif($kur7=="-1"){$b7=4;}elseif($kur7=="2"){$b7=3.5;}elseif($kur7=="-2"){$b7=3;}elseif($kur7=="3"){$b7=2.5;}elseif($kur7=="-3"){$b7=2;}elseif($kur7=="4"){$b7=1.5;}elseif($kur7=="-4"){$b7=1;}

                    ?>

                        <!-- <tr>
                            <td><?php echo $no3;  ?></td>
                            <td><?php echo $data3[name];  ?></td>
                            <td><?php echo "$b1"; ?></td>
                            <td><?php echo "$b2"; ?></td>
                            <td><?php echo "$b3"; ?></td> -->
                            <!-- <td><?php //echo"$b4"; 
                                        ?></td>
           <td><?php //echo"$b5"; 
                ?></td>
           <td><?php //echo"$b6"; 
                ?></td>
		    <td><?php //echo"$b7"; 
                ?></td> -->

                        <?php
                        $no3++;
                    // }
                        ?>
                        </tr>
                </tbody>
                </tr>
                </thead>


            </table>
            <br>
            <a href="media.php?menu=hasil" class="btn btn-warning">NEXT</a>
        </div>
    </div>
</div>