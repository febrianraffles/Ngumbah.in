

<?php 
include '../../koneksi.php';


    if (isset($_POST['ubah'])) {
        // $id_pegawai = htmlspecialchars($_POST['id_pegawai']);
        // $nama = htmlspecialchars($_POST['nama_pegawai']);
        // $bagian = htmlspecialchars($_POST['bagian_pegawai']);
        $level = htmlspecialchars($_POST['level']);
        $id_boking = htmlspecialchars ($_POST['id_boking']);
        $sql = "UPDATE tb_boking SET status = '$level' WHERE id_boking = '$id_boking'";
        $result =mysqli_query($koneksi, $sql);// die (mysqli_error($koneksi);
        //echo "<br>";var_dump($sql);
        echo "<script>window.location='../tabel_pesanan.php';</script>";
    }
   

 ?>