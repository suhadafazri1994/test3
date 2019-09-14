<?php
function cek_username($nama){
   return preg_match('/^[a-z]{5,9}$/', $nama)?'true':'false';
  
}
echo cek_username('fazri');
echo cek_username('suhada');
echo cek_username('fari94');
?>