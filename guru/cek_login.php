<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = base64_encode($_POST['password']);

// menyeleksi data guru dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from guru where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
          $row = mysqli_fetch_array($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	$_SESSION['id'] = $row['id_guru'];

	header("location:menu-login/guru/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>