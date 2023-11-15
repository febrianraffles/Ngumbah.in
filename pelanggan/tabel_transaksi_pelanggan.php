<?php 
    include_once ('../koneksi.php');
    session_start ();
    if(!isset($_SESSION['id'])) {
    header("location: index.php");
    echo "<script>alert('Silahkan Login Terlebih Dahulu!!!');</script>";
    exit;
  }
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>History Transaksi Pelanggan</title>
  <link rel="stylesheet" type="text/css" href="css/tabel_pelanggan.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

  <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body>

  <!-- Navbar Start -->
        <header>
          <a href="tabel_boking.php" class="logo"><img src="img/laundry-machine.png" alt=""><span>Ngumbah.in</span></a>

          <ul class="navbar">
            <li><a href="beranda_pelanggan.php" >Beranda</a></li>
            <li><a href="beranda_pelanggan.php">Tutorial</a></li>
            <li><a href="tabel_boking.php">Pesanan</a></li>
            <li><a href="tabel_transaksi_pelanggan.php">Transaksi</a></li>
          </ul>

          <div class="main">
            <button type="button" class="user"><a style="color :black;" href="../logout.php" onclick="return confirm('Yakin Ingin Keluar?')">Keluar</a></button>
            <div class="bx bx-menu" id="menu-icon"></div>
          </div>
        </header>
   <!--  Navbar End -->

  <div class="text">
    <p >Riwayat Transaksi</p>
  </div>

<div class="container">
  <div class="card shadow-sm ">
       <div class="card-header">

        <div class="card-body table-responsive" >
          <table class="table table-bordered " >
            <thead >
              <tr>
                <th>No</th>
                <th>Kode Pesanan</th>
                <th>Tgl Selesai</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis</th>
                <th>Jasa</th>
                <th>Berat</th>
                <th>Biaya Ambil</th>
                <th>Biaya Antar</th>
                <th>Total</th>
               
              </tr>
            </thead>
              <?php 
              include '../koneksi.php';
              $no =1;
              $sql_daftar =mysqli_query($koneksi, "SELECT tb_detail_transaksi.*, tb_daftar.nama_pelanggan, 
              tb_daftar.alamat_pelanggan, tb_boking.jenis, tb_boking.jasa FROM tb_detail_transaksi INNER JOIN tb_daftar 
              ON tb_detail_transaksi.id_daftar = tb_daftar.id_daftar INNER JOIN tb_boking ON tb_detail_transaksi.id_boking 
              = tb_boking.id_boking where nama_pelanggan = '".$_SESSION['nama_pelanggan']."' ") or die (mysqli_error($koneksi));
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
                  <?php 
              } 
                }
               ?>
            <tbody> 
            </tbody>
          </table>
          </div>

  </div>  
</div>
<!-- <div style="text-align:  center; margin-bottom: 50px;">
 <p>~~Untuk melakukan konfirmasi penerimaan pesanan dapat dilakukan melalui whatsapp
    <a href="https://api.whatsapp.com/send?phone=6283119534645">
      <br>
      <button type="button" class="btn btn-primary btn-sm">Konfirmasi</button>
      <img src="img/wa.png" alt="Pengertian HTML" style="width:20px">
    </a>
</div > -->

<!--   Footer Start -->
<div class="footer">
            <div class="content">
              <div class="isi">

                <div class="col" style="text-align: center;">
                  <h4>Tentang Kami</h4>
                  <ul>
                    <a href=""><i class="fa-solid fa-location-dot"></i></a>
                    <span>Alamat</span>
                    <p>Dusun Pecarikan RT. 02/ RW. 03 Desa Jetis, Kec Jetis, Kab Mojokerto, Jawa timur</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.4737589977117!2d112.46858911596416!3d-7.412701360435961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780f46eb2aa5c5%3A0x2698afa9310a50da!2sRahayu%20Laundry!5e0!3m2!1sid!2sid!4v1670329302213!5m2!1sid!2sid" width="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </ul>
                  
                </div>

                <div class="col" style="text-align: center;">
                  <h4>Link</h4>
                  <ul>
                    <li><a href="beranda_pelanggan.php"><i class="fa-solid fa-caret-down"></i>Beranda</a></li>
                    <li><a href="beranda_pelanggan.php"><i class="fa-solid fa-caret-down"></i>Tutorial</a></li>
                    <li><a href="tabel_boking.php"><i class="fa-solid fa-caret-down"></i>Pesanan</a></li>
                    <li><a href="tabel_transaksi_pelanggan.php"><i class="fa-solid fa-caret-down"></i> Transaksi</a></li>
                  </ul>
                  
                </div>

                <div class="col" style="text-align: center;">
                  <h4>Ikuti Kami</h4>
                  <div class="laundry">
                    <a href="" style="font-size: 40px; line-height: 40px;">
                              <img src="img/laundry.in.png" alt="" >
                            </a>
                  </div>
                  <div class="social">
                    <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </div>

                </div>

                
              </div>
              
            </div>
            
          </div>

        <div class="copyright" style="border-top: 1px solid rgba(23, 162, 184, .2); background: #222327;" >
            <p class="m-0 text-center text-white">
                &copy; <a class="text-primary font-weight-bold" href="#">Ngumbah.in</a>. All Rights Reserved. Designed
                by
                <a class="text-primary font-weight-bold" href="https://www.its.ac.id/teo/id/beranda/">DTEO ITS</a>
            </p>
        </div>

<!--   Footer End -->
    <script type="text/javascript" src="js/navbar2.js"></script>
</body>
</html>
