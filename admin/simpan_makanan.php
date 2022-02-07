<?php
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

include("library/koneksi.php");
//  iko untuak tanggal lahir
if($_POST['harga']>=15000000){
$harga=1;
}else if($_POST['harga']>=8500000){
$harga=2;
}else if($_POST['harga']>=7000000){
$harga=3;
}else if($_POST['harga']>=5500000){
$harga=4;
}else if($_POST['harga']<5500000){
$harga=5;
}   

if($_POST['ukuran']== ">17"){
$ukuran=1;
}else if($_POST['ukuran']==17){
$ukuran=2;
}else if($_POST['ukuran']==10){
$ukuran=3;
}else if($_POST['ukuran']==13){
$ukuran=4;
}else if($_POST['ukuran']==14){
$ukuran=5;
}

if($_POST['processor']== "Pentium"){
$processor=1;
}else if($_POST['processor']=="Core 2 Duo"){
$processor=2;
}else if($_POST['processor']=="Intel Core i3"){
$processor=3;
}else if($_POST['processor']=="Intel Core i5"){
$processor=4;
}else if($_POST['processor']=="Intel Core i7"){
$processor=5;
}

if($_POST['kapasitas']== "1 GB"){
$kapasitas=1;
}else if($_POST['kapasitas']=="2 GB"){
$kapasitas=2;
}else if($_POST['kapasitas']=="3 GB"){
$kapasitas=3;
}else if($_POST['kapasitas']=="4 GB"){
$kapasitas=4;
}else if($_POST['kapasitas']=="8 GB"){
$kapasitas=5;
}

if($_POST['memori']== "DDR 3"){
$memori=5;
}else if($_POST['memori']=="DDR 2"){
$memori=3;
}

if($_POST['kebutuhan']== "Game"){
$kebutuhan=5;
}else if($_POST['kebutuhan']=="Program"){
$kebutuhan=4;
}else if($_POST['kebutuhan']=="Umum"){
$kebutuhan=3;
}

if($_POST['hardisk']== "250 GB"){
$hardisk=1;
}else if($_POST['hardisk']=="320 GB"){
$hardisk=2;
}else if($_POST['hardisk']=="500 GB"){
$hardisk=3;
}else if($_POST['hardisk']=="640 GB"){
$hardisk=4;
}else if($_POST['hardisk']> "640 GB"){
$hardisk=5;
}

// $query = mysql_query("insert into data_makanan values('0','$_POST[jenis]','$_POST[harga]','$_POST[ukuran]','$_POST[processor]','$_POST[kapasitas]','$_POST[memori]','$_POST[hardisk]','$_POST[kebutuhan]')");
$query = mysql_query("insert into food values('0','$_POST[jenis]','$_POST[natrium]','$_POST[lemak]','$_POST[protein]')");

$query1 = mysql_query("insert into proses_spk values('0','$_POST[jenis]','$_POST[natrium]','$_POST[lemak]','$_POST[protein]','0','0','0','0')");
  
if ($query) {

echo "Data berhasil disimpan";
echo '<META HTTP-EQUIV="Refresh" CONTENT="1; URL=media.php?menu=makanan&act=view">';

}else{ echo 'Data telah di entry sebelumnya';
}

?>