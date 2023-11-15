<?php
session_start();

if (isset($_POST['transaksi'])) {
    require_once '../koneksi.php';
    $id_detail_transaksi = htmlspecialchars($_POST['']);
    $id_boking = htmlspecialchars($_POST['id_boking']);
    $berat = htmlspecialchars($_POST['berat']);
    $biaya_ambil = htmlspecialchars($_POST['biaya_ambil']);
    $biaya_antar = htmlspecialchars($_POST['biaya_antar']);
    $total = htmlspecialchars($_POST['total']);
    $tgl_ambil = htmlspecialchars($_POST['tgl_ambil']);
    $sql = "INSERT INTO tb_detail_transaksi (id_boking, berat, biaya_ambil, biaya_antar, total, tgl_ambil) VALUES ('$id_boking', '$berat', '$biaya_ambil', '$biaya_antar', '$total', '$tgl_ambil')";
    mysqli_query ($koneksi, $sql);
    echo "<script>alert('Berhasil, Pesanan Berhasil Ditambakan');</script>";
    echo "<script>window.location='../tabel_transaksi.php';</script>";
}

?>