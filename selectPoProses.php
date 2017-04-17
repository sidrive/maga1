<?php 
	include "koneksiAndro.php";
	
	$kode_sup 	= $_GET['id'];
	
	
	$query = mysql_query("select * from po where kode_sup = '$kode_sup' and (status_suplier = 'N' or status_maga = 'N')");
	
	$json = array();
	
	while($row = mysql_fetch_assoc($query)){
		$json[] = $row;
	}
	
	echo json_encode($json);
		
?>