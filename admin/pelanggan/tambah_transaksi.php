<?php
session_start();

if (isset($_POST['transaksi'])) {
    require_once '../../koneksi.php';
    echo "<br>";
    var_dump($_POST);
    $id_boking = htmlspecialchars($_POST['id_boking']);
    $tgl_antar= htmlspecialchars($_POST['tgl_antar']);
    $jenis = htmlspecialchars($_POST['jenis']);
    $jasa = htmlspecialchars($_POST['jasa']);
    $berat = htmlspecialchars($_POST['berat']);
    $biaya_ambil = htmlspecialchars($_POST['biaya_ambil']);
    $biaya_antar = htmlspecialchars($_POST['biaya_antar']);
    $total = htmlspecialchars($_POST['total']);
    $sql = "INSERT INTO tb_detail_pesanan (id_boking, tgl_antar, jenis, jasa, berat, biaya_ambil, biaya_antar, bayar) VALUES ('$id_boking', '$tgl_antar', '$jenis', '$jasa', '$berat', '$biaya_ambil', '$biaya_antar', '$total')";

    mysqli_query ($koneksi, $sql);


     echo "<script>window.location='../tabel_transaksi.php';</script>";
}

?>