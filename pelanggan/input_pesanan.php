<?php
session_start();

if (isset($_POST['pesan'])) {
    require_once '../koneksi.php';
    $id_boking = htmlspecialchars($_POST['id_boking']);
    $id_daftar = htmlspecialchars($_SESSION['id']);
    $jenis = 'Kiloan';
    $jasa = htmlspecialchars($_POST['jasa']);
    $status = 'Boking';
    $tgl = htmlspecialchars($_POST['tgl']);
    $sql = "INSERT INTO tb_boking (id_boking, id_daftar, jenis, jasa, tgl_pemesanan, status) VALUES ('$id_boking', '$id_daftar', '$jenis', '$jasa', '$tgl', '$status')";

    mysqli_query ($koneksi, $sql);


     echo "<script>window.location='tabel_boking.php';</script>";
}

?>