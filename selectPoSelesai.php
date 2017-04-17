<?php 
	include "koneksiAndro.php";
	
	$kode_sup 	= $_GET['id'];
	//$query = mysql_query("SELECT * FROM detail_po");
	
	$query = mysql_query("select * from detail_po where id_po = '$kode_sup'");
	
	$json = array();
	
	while($row = mysql_fetch_assoc($query)){
		$json[] = $row;
	}
	
	echo json_encode($json);
		
?>