<?php
	include "koneksiAndro.php";
	
	$nama 	= $_POST['nama'];
	$jumlah = $_POST['jumlah'];
	
	class emp{}
	
	if (empty($nama) || empty($jumlah)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Kolom isian tidak boleh kosong"; 
		die(json_encode($response));
	} else {
		$query = mysql_query("INSERT INTO biodata (id,nama,alamat) VALUES(0,'".$nama."','".$alamat."')");
		
		if ($query) {
			$response = new emp();
			$response->success = 1;
			$response->message = "Data berhasil di simpan";
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error simpan Data";
			die(json_encode($response)); 
		}	
	}
?>