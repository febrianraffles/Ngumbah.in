<?php 
include 'koneksi.php';

	$nilai = $_GET["sensor"];
	mysqli_query($koneksi, "UPDATE sensor SET nilai_sensor ='$nilai'");

 ?>