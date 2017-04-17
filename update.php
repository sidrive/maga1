<?php
	include "koneksiAndro.php";
	
	$id 	= $_POST['id'];
	$id_po 	= $_POST['id_po'];
	$jumlah = $_POST['jumlah'];
	$total = $_POST['total'];
	
	class emp{}
	
	if (empty($id) || empty($jumlah)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Kolom isian tidak boleh kosong"; 
		die(json_encode($response));
	} else {
		$query = mysql_query("UPDATE detail_po SET jml_brg='$jumlah', total='$total' WHERE id='".$id."'");
		$sql1 = mysql_query("SELECT SUM(total) as total_harga FROM detail_po WHERE id_po='$id_po'");
		$row 	= mysql_fetch_array($sql1);
			$sub_total = $row['total_harga'];
			$sql2 = mysql_query("UPDATE po SET total = $sub_total WHERE id_po='$id_po'");
		
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