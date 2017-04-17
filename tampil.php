<?php 
	include "koneksiAndro.php";
	
	$idpo 	= $_GET['id'];
	//$query = mysql_query("SELECT * FROM detail_po");
	
	$query = mysql_query("select * from user_suplier where username = '$idpo'");
	
	$json = array();
	
	while($row = mysql_fetch_assoc($query)){
		$json[] = $row;
	}
	
	echo json_encode(array('data' =>$json));
		
?>