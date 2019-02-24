<?php 
include 'koneksi.php';
  $gambar   = $_FILES['gambar']['name'];
  $username = $_POST['username'];
  $password = base64_encode($_POST['password']);
  $kode_guru = $_POST['kode_guru'];
  $nip = $_POST['nip'];
  $nama_guru = $_POST['nama_guru'];
  $jk = $_POST['jk'];
  $alamat = $_POST['alamat'];
  $agama = $_POST['agama'];
  $tlp = $_POST['tlp'];
  $id = $_POST['idguru'];


  if(empty($gambar)){
 $q = "UPDATE guru SET username='".$username."', password='".$password."', kode_guru='".$kode_guru."', nip='".$nip."', nama_guru='".$nama_guru."', jk='".$jk."', agama='".$agama."', alamat='".$alamat."', tlp='".$tlp."' WHERE id_guru = '".$id."'";

  }else{

    $q = "UPDATE guru SET username='".$username."', password='".$password."', kode_guru='".$kode_guru."', nip='".$nip."', nama_guru='".$nama_guru."', jk='".$jk."', agama='".$agama."', alamat='".$alamat."', tlp='".$tlp."', gambar='".$gambar."' WHERE id_guru = '".$id."'";
    
        $hapus= mysqli_query($koneksi,"select * from guru where id_guru='".$id."'");
        // menghapus gambar yang lama
        $nama_gambar=mysqli_fetch_array($hapus);
        // nama field gambar
        $lokasi=$nama_gambar['gambar'];
        // alamat tempat foto
        $hapus_gambar="images/$lokasi";
        move_uploaded_file($_FILES['gambar']['tmp_name'],'images/'.$gambar);
  }


  mysqli_query($koneksi, $q);
  echo "<script type=text/javascript> alert('Berhasil Diubah'); window.location.href='index.php'; </script>";
 
?>