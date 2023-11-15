<?php 
include 'koneksi.php';

if (isset($_POST['simpan'])) {
 	$nama = htmlspecialchars($_POST['nama_pegawai']);
    $bagian = htmlspecialchars($_POST['bagian_pegawai']);
    $sql = "INSERT INTO tb_pegawai (nama_pegawai, bagian_pegawai) VALUES ('$nama', '$bagian');";
    $result =mysqli_query($koneksi, $sql);
    echo "<script>window.location='tabel_pegawai.php';</script>";
    
}else if(isset($_POST['ubah'])){
}
 ?>
