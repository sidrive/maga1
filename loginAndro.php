<?php
include "koneksiAndro.php";  //memanggil fungsi koneksi di file db.php
 
//deklarasi
$email =$_POST['email'];
$password=$_POST['password'];
$passwordd = md5($password);
$response = array();
 
//perintah SQL untuk meampilkan data
$query = "SELECT * FROM user_suplier WHERE username ='$email' AND password='$password'";
$hasil = mysql_query($query);
 
//jika data nya ada atau lebih dari 0
if(mysql_num_rows($hasil)> 0){
    $response['result']= true ;
    $response['msg']="login berhasil";
    echo json_encode($response);
 
} else {  
 $response['result']= false ;
    $response['msg']="maaf,terjadi kesalahan";
    echo json_encode($response);
    echo $email, $password;
}
?>