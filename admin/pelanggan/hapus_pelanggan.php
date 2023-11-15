<?php 
include '../../koneksi.php';

 mysqli_query($koneksi, "DELETE FROM tb_daftar WHERE id_daftar = '$_GET[id]'");
 echo "<script>window.location='../tabel_pelanggan.php';</script>";
	
 ?>