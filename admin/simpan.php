<?php
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include("library/koneksi.php");
$nat = $_POST['nm'];
$le = $_POST['jrsn'];
$pr = $_POST['jml'];
$nim = $_POST['nim'];
$name = $_POST['pendapatan'];
if($nat >= 851){
    $natrium = 1;
}elseif($nat >= 501){
    $natrium = 2;
}elseif($nat >= 351){
    $natrium = 3;
}elseif($nat >= 151){
    $natrium = 4;
}else{
    $natrium = 5;
}

if($le >= 36){
    $lemak = 5;
}elseif($le >= 26){
    $lemak = 4;
}elseif($le >= 16){
    $lemak = 3;
}elseif($le >= 6){
    $lemak = 2;
}else{
    $lemak = 1;
}

if($pr >= 96){
    $protein = 5;
}elseif($pr >= 73){
    $protein = 4;
}elseif($pr >= 49){
    $protein = 3;
}elseif($pr >= 25){
    $protein = 2;
}else{
    $protein = 1;
}
//  iko untuak tanggal lahir
// var_dump($_POST);die;
$query1 = mysql_query("insert into proses_spk values('0','$nim','$name','$natrium','$lemak','$protein','0','0','0','0','0','0','0')");
// $w = "insert into proses_spk values('0','$nim','$natrium','$lemak','$protein','0','0','0','0')";
// var_dump($w);
// die;
// $query = mysql_query($query1) or die(mysql_error());
if ($query1) {

echo "Data Berhasil Diproses";
echo '<META HTTP-EQUIV="Refresh" CONTENT="1; URL=media.php?menu=gap">';

}

?>