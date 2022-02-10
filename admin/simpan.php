<?php
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include("library/koneksi.php");
$nat = $_POST['nm'];
$le = $_POST['jrsn'];
$pr = $_POST['jml'];
$nim = $_POST['nim'];
$name = $_POST['pendapatan'];
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
var_dump($natrium);
var_dump($lemak);
var_dump($protein);
// die;
$natrium = $natrium - 3;
$lemak = $lemak - 3;
$protein = $protein - 1;

var_dump($natrium);
var_dump($lemak);
var_dump($protein);
// die;
echo 111;


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
var_dump($natrium);
var_dump($lemak);
var_dump($protein);
// die;
echo 77777;
//  iko untuak tanggal lahir
// var_dump($_POST);die;
$query1 = mysql_query("insert into proses_spk values('0','$nim','$name','$natrium','$lemak','$protein')");
// $w = "insert into proses_spk values('0','$nim','$natrium','$lemak','$protein','0','0','0','0')";
// var_dump($w);
// die;
// $query = mysql_query($query1) or die(mysql_error());
if ($query1) {

    // echo "Data Berhasil Diproses";
    // echo '<META HTTP-EQUIV="Refresh" CONTENT="1; URL=media.php?menu=gap">';

}
