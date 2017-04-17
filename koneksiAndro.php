<?php

$server ="localhost"; // server nya
 
$username   = "root";  //username nya
 
$password   ="";  //password nya
 
 
$database   ="maga";   //nama database
 
mysql_connect($server, $username, $password) or die("Koneksi tidak ada");    //untuk koneksi nya
 
mysql_select_db($database) or die("Database tidak ditemukan");  //memilih database
?>