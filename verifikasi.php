<?php
	include "koneksiAndro.php";
	
	$id 	= $_POST['id_po'];
	$total 	= $_POST['total'];
		
	class emp{}
	
	if (empty($id)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Kolom isian tidak boleh kosong"; 
		die(json_encode($response));
	} else {
		
			$sql2 = mysql_query("UPDATE po SET status_maga = 'N', status_suplier = 'Y' WHERE id_po='$id_po'");
		
		if ($query) {
			$response = new emp();
			$response->success = 1;
			$response->message = "Data berhasil di update";
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error update Data";
			die(json_encode($response)); 
		}	
	}
?>