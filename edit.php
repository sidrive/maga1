<?php
	include "koneksiAndro.php";
	
	$id 	= $_POST['id'];
	
	class emp{}
	
	if (empty($id)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Error Mengambil Data"; 
		die(json_encode($response));
	} else {
		$query 	= mysql_query("SELECT * FROM detail_po WHERE id='".$id."'");
		$row 	= mysql_fetch_array($query);
		
		if (!empty($row)) {
			$response = new emp();
			$response->success = 1;
			$response->id = $row["id"];
			$response->id_po = $row["id_po"];
			$response->nama_brg = $row["nama_brg"];
			$response->hrg_sup = $row["hrg_sup"];
			$response->jml_brg = $row["jml_brg"];
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error Mengambil Data";
			die(json_encode($response)); 
		}	
	}
?>