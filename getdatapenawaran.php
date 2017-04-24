<?php  
 include 'koneksiAndro.php'; 
 $hasil         = mysql_query("SELECT * FROM detail_penawaran") or die(mysql_error());
 $json_response = array();
 
if(mysql_num_rows($hasil)> 0){
 while ($row = mysql_fetch_array($hasil)) {
     $json_response[] = $row;
 }
 echo json_encode(array('penawaran' => $json_response));
} 
?>