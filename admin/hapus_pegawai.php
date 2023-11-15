<?php 
include 'koneksi.php';

 mysqli_query($koneksi, "DELETE FROM tb_pegawai WHERE id_pegawai = '$_GET[id]'");
 echo "<script>window.location='tabel_pegawai.php';</script>";
	
 ?>