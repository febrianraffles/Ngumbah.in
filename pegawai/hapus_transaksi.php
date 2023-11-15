<?php 
include '../koneksi.php';

 mysqli_query($koneksi, "DELETE FROM tb_detail_transaksi WHERE id_detail_transaksi = '$_GET[id]'");
 echo "<script>window.location='tabel_transaksi.php';</script>";
	
 ?>