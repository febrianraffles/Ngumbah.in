<?php 
include '../koneksi.php';

 mysqli_query($koneksi, "DELETE FROM tb_boking WHERE id_boking = '$_GET[id]'");
 echo "<script>window.location='tabel_boking.php';</script>";
	
 ?>