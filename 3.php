<?php
$teks = " banananana";

$filter = array(".na"); 
$teks_clean = str_replace($filter, "na", $teks); 

$kata   = explode("na", $teks_clean);
$hasil  = count($kata);
$data   = array_count_values($kata);

echo "Jumlah Kata: $hasil buah kata";


foreach($data as $x => $x_value) {
}
?>