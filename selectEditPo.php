<?php 
	include "koneksiAndro.php";
	
	$idpo 	= $_GET['id'];
	
	$query = mysql_query("select id_po, kode_sup, total from po where id_po='$idpo'");
	
	$json = array();
	
	while($row = mysql_fetch_assoc($query)){
		$json[] = $row;
	}
	
	echo json_encode($json);
		
?>