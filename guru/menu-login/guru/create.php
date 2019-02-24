<?
header('Location: index.php'); 
?>
<?php
$username = $_POST['username'];
$password = base64_encode($_POST['password'];
$kode_guru = $_POST['kode_guru'];
$nip = $_POST['nip'];
$nama_guru = $_POST['nama_guru'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$tlp = $_POST['tlp'];

$gambar = $_FILES['gambar']['name'];
$mysqli->query("INSERT INTO guru(username,password,kode_guru,nip,nama_guru,jk,alamat,agama,tlp,gambar) VALUES('$username','$password','$kode_guru','$nip','$nama_guru','$jk','$alamat','$agama','$tlp','$gambar')");
move_uploaded_file($_FILES['gambar']['tmp_name'],'images/'.$gambar);
?>