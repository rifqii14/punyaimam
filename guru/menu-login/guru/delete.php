<?php
   $hapus=$mysqli->query("select*from guru where id_guru='$_GET[id_guru]'");
    // memilih gambar untuk dihapus
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_gambar['gambar'];
    // alamat tempat gambar
    $hapus_gambar="images/$lokasi";
    // script delete gambar dari folder
    $mysqli->query("DELETE FROM guru WHERE id_guru='$_GET[id_guru]'");
?>
<?
header('Location: index.php'); 
?>