<?php 

include '../koneksi.php';
session_start();

if(!isset($_SESSION['id'])) {
header("location: ../index.php");
echo "<script>alert('Hayo Login Duluuu!!!');</script>";
exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Pesanan</title>
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
    <p >Pesanan</p>
  </div>

<!--   Konten Start -->
<div class="container">
  <div class="card shadow-sm ">
       <div class="card-header">
          <!-- <p>Pemesanan</p> -->
          <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#tambah_pesanan"><i class="fa-solid fa-plus"></i>
               Tambah Pesanan
            </button>
        </div>

              <!-- Modal -->
      <div class="modal fade" id="tambah_pesanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header text-white bg-secondary">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                      <div class="modal-body ">
                        <form action="input_pesanan.php" method="POST">
                          <label for="jenis">Jenis Berat Pakaian</label>
                          <input type="text" name="jenis" class="form-control mb-3" value="Kiloan" disabled>

                          <label for="jasa">Jasa Laundry</label>
                          <select class="form-select mb-3" name="jasa">
                            <option selected>-- Silahkan Pilih Jasa Laundry --</option>
                            <option value="cuci basah">Cuci Basah</option>
                            <option value="cuci kering">Cuci Kering</option>
                            <option value="cuci setrika">Cuci Setrika</option>
                            <option value="setrika">Setrika</option>
                          </select>
                          <input type="hidden" name="tgl" value="<?= date('Y-m-d')?>">
                          <input class="form-control" type="hidden" name="kode_pemesanan">
                          <input class="form-control" type="hidden" name="status" id="" value="" >
    
                   
                      </div>
                      <div class="modal-footer">
                        <button type="submit" name="pesan" class="btn btn-success btn-sm"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                        </form>
                      </div>
            </div>
          </div>
      </div>
      <!-- Modal end -->

        <div class="card-body table-responsive">
          <table class="table table-bordered " >
            <thead >
              <tr>
                <th width="5">Kode Pesanan</th>
                <th width="15" id="myInput">Tanggal Pesanan</th>
                <th width="10">Status</th>
                <th width="30">Aksi</th>
              </tr>
            </thead>



            <tbody> 
              <?php 
              include '../koneksi.php';
              $sql_boking =mysqli_query($koneksi, "SELECT * FROM tb_boking WHERE id_daftar = '".$_SESSION['id']."' ") or die (mysqli_error($koneksi));
              if(mysqli_num_rows($sql_boking) > 0){
                while($data = mysqli_fetch_array($sql_boking)){ ?>
                <tr>
                  <td><?=$data['id_boking']?></td>
                  <!-- <td><?=$data['id_daftar']?></td> -->
                  <td><?php echo date("d-m-Y", strtotime($data['tgl_pemesanan'])) ?></td>
                   <td><?=$data['status']?></td>
                   <td>
                   <a href="hapus_boking.php?id=<?= $data['id_boking'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Hapus?')"><i class="fa-solid fa-trash"></i></a>
                  </td>
                </tr>
                   <?php
                  }
                 } 
               ?> 
                
            </tbody>
          </table>
          </div>

  </div>  
</div>
<!-- Konten End -->

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
    <script type="text/javascript">
      
    const input = document.getElementById('jenis');

    </script>
</body>
</html>

