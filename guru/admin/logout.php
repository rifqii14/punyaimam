<?php 
// mengaktifkan session admin dah masuk ini
session_start();

// menghapus semua session
session_destroy();

header("location:../index.php?pesan=logout");
?>