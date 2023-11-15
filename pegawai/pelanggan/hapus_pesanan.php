<?php 
include '../../koneksi.php';

 mysqli_query($koneksi, "DELETE FROM tb_booking WHERE id_booking = '$_GET[id]'");
 echo "<script>window.location='../tabel_pesanan.php';</script>";
	
 ?>