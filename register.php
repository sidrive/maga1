<?php
include 'koneksiAndro.php';  //memanggil file db.php
 
//mengecek variabel
if(isset($_POST["email"]) && isset ($_POST["password"]))
 {
 $password = $_POST['password'];
 $email= $_POST['email'];
 $nama="ikun";
 $jabatan="it";
 
 //perintah SQL untuk memasukan data
 $query = "INSERT INTO user_suplier (username,password,nama,jabatan) VALUES ('$email','$password','$nama','$jabatan')";
 $hasil  = mysql_query($query);
 if($hasil)
  {
      $response["result"]= true ;
      $response["msg"]= "Register berhasil, silakan login";
      echo json_encode($response);
  }
 else {
     $response['result']= false ;
     $response['msg']="maaf,terjadi kesalahan";
     echo json_encode($response);
  }
}else{
    $response['result']= false ;
    $response['msg']="maaf, data salah";
    echo json_encode($response);
}
?>