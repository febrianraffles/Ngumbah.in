<?php 
    include_once ('../koneksi.php');
    session_start();

    if (!isset($_SESSION['level']) && $_SESSION['level'] == "admin") {
        header("location: login.php");
        exit;
    }
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Transaksi</title>
    <style type="text/css">
        @media print{
            @page {size: A4}
        }
        body{
            font-family: Arial;
            color: black;
        }
        img {
            margin-bottom: 70px;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            margin: 0 auto;
        }
        th, td {
            width: auto;
            text-align: left;
            padding: 10px 10px;
            border: 1px solid #000000;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .signature_wrapper{
            text-align: right;
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="row">
        <div style="display: flex; align-items: center; justify-content: center">
            <img src="img/laundry-machine.png" alt="" width="130px" height="150px">
            <div style="text-align: center; margin-right: 100px; margin-left: 30px; margin-top: -80px;">
                <h2>NGUMBAH.IN</h2>
                <h8>Dusun Pecarikan RT. 02/ RW. 03 Desa Jetis,</h8>
                <div><h8>Kec Jetis, Kab Mojokerto, Jawa timur</h8></div>
                <h8>No Telp (085)156117454</h8>
            </div>
        </div>
    <p style="margin-top: -60px;">
    __________________________________________________________________________________________________________</p>
    </div>
    <?php function tgl_indo($tanggal){
      $bulan = array (
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
      );
      $pecahkan = explode('-', $tanggal);
      
      // variabel pecahkan 0 = tanggal
      // variabel pecahkan 1 = bulan
      // variabel pecahkan 2 = tahun
    
      return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    } ?>
    <br>
    <br>
    <h2 style="text-align: center">Laporan Transaksi</h2>
    <table border="1">
        <tr>
            <th style="text-align: center">No</th>
            <th style="text-align: center">Kode Pemesanan</th>
            <th style="text-align: center">Tgl Selesai</th>
            <th style="text-align: center">Nama</th>
            <th style="text-align: center">Alamat</th>
            <th style="text-align: center">Jenis</th>
            <th style="text-align: center">Jasa</th>
            <th style="text-align: center">Berat</th>
            <th style="text-align: center">Biaya Ambil</th>
            <th style="text-align: center">Biaya Antar</th>
            <th style="text-align: center">Total</th>
        </tr>
        <?php 
            include '../koneksi.php';
            $no =1;
            $sql_daftar =mysqli_query($koneksi, "SELECT tb_detail_transaksi.*, tb_daftar.nama_pelanggan, 
            tb_daftar.alamat_pelanggan, tb_boking.jenis, tb_boking.jasa FROM tb_detail_transaksi INNER JOIN tb_daftar 
            ON tb_detail_transaksi.id_daftar = tb_daftar.id_daftar INNER JOIN tb_boking ON tb_detail_transaksi.id_boking 
            = tb_boking.id_boking") or die (mysqli_error($koneksi));
            if(mysqli_num_rows($sql_daftar) > 0){
            while($data = mysqli_fetch_array($sql_daftar)){ ?>
                <tr>
                <td><?=$no++?></td>
                <td><?=$data['id_boking']?></td>
                <td><?php echo date("d-m-Y", strtotime($data['tgl_ambil'])) ?></td></td>
                <td><?=$data['nama_pelanggan']?></td>
                <td><?=$data['alamat_pelanggan']?></td>
                <td><?=$data['jenis']?></td>
                <td><?=$data['jasa']?></td>
                <td><?=$data['berat']?></td>
                <td><?=$data['biaya_ambil']?></td>
                <td><?=$data['biaya_antar']?></td>
                <td><?=$data['total']?></td>
                </tr> 

                <?php 
                }
                }
        ?>
    </table>
    <div class="signature_wrapper">
        <p>Surabaya, <?php echo tgl_indo(date("Y-m-d")); ?></p>
        <br>
        <br>
        <p class="font-weight-bold"><br>_______________________<br></p>
    </div>
    
    <script type="text/javascript">
        window.print();
    </script>

</body>
</html>