<?php
	include "koneksiAndro.php";
	
	$id 	= $_POST['id'];
	
	class emp{}
	
	if (empty($id)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Error hapus Data"; 
		die(json_encode($response));
	} else {
		
		$query1 = mysql_query("SELECT id_po FROM detail_po WHERE id ='".$id."'");
		$row1 = mysql_fetch_array($query1);
		$id_po = $row1['id_po'];
			if(empty($id_po)==0){
			$query = mysql_query("DELETE FROM detail_po WHERE id='".$id."'");
			} else {echo "Gagal"; };
		
		$sql1 = mysql_query("SELECT SUM(total) as total_harga FROM detail_po WHERE id_po='$id_po'");
		$row 	= mysql_fetch_array($sql1);
		
		if(empty($row['total_harga'])==1){
			$query2 = mysql_query("DELETE FROM po WHERE id_po='$id_po'");
		} else {
			$sub_total = $row['total_harga'];
			$sql2 = mysql_query("UPDATE po SET total = $sub_total WHERE id_po='$id_po'");
		}
		
		
		if ($query) {
			$response = new emp();
			$response->success = 1;
			$response->message = "Data berhasil di hapus";
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error hapus Data";
			die(json_encode($response)); 
		}	
	}
?>