<?php
include 'koneksiAndro.php';

if (isset($_POST["nama_brg"]) && isset($_POST["barcode"]) && isset($_POST["harga"]) && $_POST["foto"]) {
 
 $nama 		= $_POST["nama_brg"];
 $barcode 	= $_POST["barcode"];
 $harga 	= $_POST["harga"];
 $foto 		= $_POST["foto"];
 $kode_sup 	= $_POST["kode"];
 date_default_timezone_set("Asia/Jakarta");
 $id		= 'FPS'.date('dmy-hi').'-'.$kode_sup;
 $tanggal	= date('Y-m-d');

 $query = "INSERT INTO detail_penawaran (id_penawaran, nama_brg, barcode, foto) VALUES ('$id', '$nama', '$barcode', 'foto')";
 $eksekusi = mysql_query($query);
 
 $query1 = "INSERT INTO penawaran (id_penawaran, tgl_penawaran, kode_sup) VALUES ('$id', '$tanggal', '$kode')";
 $eksekusi1 = mysql_query($query1);

 if ($eksekusi) {
  
  $response['result'] = true;
  $response['pesan'] = "Data tersimpan";
  echo json_encode($response);
 } else {
  $response['result'] = false;
  $response['pesan'] = "Data gagal tersimpan";
  echo json_encode($response);
 }
 
} else {
 $response['result']= false ;
    $response['msg']="Ada kesalahan";
    echo json_encode($response);
}
?>