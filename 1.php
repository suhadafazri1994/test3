<?php
header("Content-Type: application/json; charset=UTF-8");
$bidota=array();
$bidota['nama']='Fazri Suhada';
$bidota['age']=25;
$bidota['address']='Bukittinggi Sumatra Barat';
$bidota['hobbies']=array('Bersepeda','Catur','Membaca');
$bidota['is_married']=false;
$bidota['list_school'][]=array('name'=>'SDN 01 Jepitu','year_in'=>'2001','year_out'=>'2007','major'=>null);
$bidota['list_school'][]=array('name'=>'MTSN Kubang Putih','year_in'=>'2007','year_out'=>'2010','major'=>null);
$bidota['list_school'][]=array('name'=>'SMAN 1 Banuhampu','year_in'=>'2010','year_out'=>'2013','major'=>'RPL');
$bidota['list_school'][]=array('name'=>'Akademi Manajemen Informatika Solok','year_in'=>'2015','year_out'=>'2017','major'=>'Manajemen Informatika');
$bidota['interest_in_coding']=true;
function cetak_bio($bio){
  return json_encode($bio);
}
echo cetak_bio($bidota);
?>