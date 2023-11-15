<?php
include_once ('../koneksi.php');
 session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hostory Transaksi</title>
	<link rel="stylesheet" type="text/css" href="css/tabel_transaksi.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	
	<!-- Template Start -->
 	<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">


	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

	<link rel="stylesheet"
  	href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  	<link rel="preconnect" href="https://fonts.googleapis.com">
  	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  	<script type="text/javascript" src="js/jquery.min.js"></script>
  	<script type="text/javascript" src="../jquery/jquery.min.js"></script>
  	<script type="text/javascript">
  		$(document).ready(function() {
  			setInterval(function(){
  				$("#ceksensor").load('../ceksensor.php');
  			}, 1000);
  		});

  	</script>

</head>
<body>
		<!-- Navbar Start -->
	<header>
		<a href="tabel_pegawai.php" class="logo"><img src="img/laundry-machine.png" alt="" style="width: 60px; padding-right: 3px;"><span>Ngumbah.in</span></a>

		<ul class="navbar">
			<li><a href="beranda_admin.php" class="active">Beranda</a></li>
			<li><a href="tabel_admin.php" >User</a></li>
            <li><a href="tabel_pelanggan.php">Pelanggan</a></li>
            <li><a href="tabel_pesanan.php">Pemesanan</a></li>
            <li><a href="tabel_transaksi.php">Transaksi</a></li>
            <li><a href="tabel_laporan.php">Laporan</a></li>
		</ul>

		<div class="main">
            <button type="button" class="user"><a style="color :black;" href="../logout.php" onclick="return confirm('Yakin Ingin Keluar?')">Keluar</a></button>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
	</header>
	 <!--  Navbar End -->

	<div class="text">
		<p>Riwayat Transaksi</p>
	</div>

<!-- Container Utama Start -->

<div class="container">

		<!-- Detail Transaksi Strat -->
			<div class="card shadow-sm mt-4 ">
				 <div class="card-header ">
					<p style="font-weight: bold;">Detail Transaksi</p>

				  </div>

					<div class="card-body table-responsive">
						
							<table class="table table-bordered " >
								<thead >
									<tr>
										<th width="">No</th>
										<th width="">Kode Pemesanan</th>
										<th width="">Tanggal Ambil</th>
										<th width="">Action</th>
										
									</tr>
								</thead>

								<tbody>
									<?php 
									include '../koneksi.php';
									$no =1;
									$sql_pesan =mysqli_query($koneksi, "SELECT * FROM tb_detail_pesanan INNER JOIN tb_boking ON tb_detail_pesanan.id_boking = tb_boking.id_boking ") or die (mysqli_error($koneksi));
									if(mysqli_num_rows($sql_pesan) > 0){
									while($data = mysqli_fetch_array($sql_pesan)){ ?>
									<tr>
									<td><?=$no++?></td>
									<td><?=$data['kode_pemesanan']?></td>
									<td><?=$data['tgl_antar']?></td>
									<td>
											<a type="button"  class="btn btn-primary btn-sm" data-bs-toggle="modal" >Aksi</a>	
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
		<!-- Detail Transaksi End -->
</div>

		<!--   Footer Start -->
	<div class="footer">
		<div class="content">
			<div class="isi">
				<div class="colom" style="text-align: center;">
					<h4>Tentang Kami</h4>
					<ul>
						<a href=""><i class="fa-solid fa-location-dot"></i></a>
						<span>Alamat</span>
						<p>Dusun Pecarikan RT. 02/ RW. 03 Desa Jetis, Kec Jetis, Kab Mojokerto, Jawa timur</p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.4737589977117!2d112.46858911596416!3d-7.412701360435961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780f46eb2aa5c5%3A0x2698afa9310a50da!2sRahayu%20Laundry!5e0!3m2!1sid!2sid!4v1670329302213!5m2!1sid!2sid" width="300"style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</ul>
					
				</div>

				<div class="colom" style="text-align: center;">
					<h4>Link</h4>
					<ul>
						<li><a href="beranda_admin.php"><i class="fa-solid fa-caret-down"></i> Beranda</a></li>
						 <li><a href="tabel_admin.php"><i class="fa-solid fa-caret-down"></i> Admin</a></li>
                        <li><a href="tabel_pegawai.php"><i class="fa-solid fa-caret-down"></i> Pegawai</a></li>
                        <li><a href="tabel_pelanggan.php"><i class="fa-solid fa-caret-down"></i> Pelanggan</a></li>
                        <li><a href="tabel_pesanan.php"><i class="fa-solid fa-caret-down"></i> Pemesanan</a></li>
                        <li><a href="tabel_transaksi.php"><i class="fa-solid fa-caret-down"></i> Transaksi</a></li>
                        <li><a href="tabel_laporan.php"><i class="fa-solid fa-caret-down"></i> Laporan</a></li>
					</ul>
					
				</div>

				<div class="colom" style="text-align: center;">
					<h4>Ikuti Kami</h4>
					<div >
						
						<a href="" style="font-size: 40px; line-height: 40px;">
	                    <img src="img/laundry.in.png" alt="" >
	                    <!-- <span class="text-white">Ngumbah.In</span> -->
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

<script type="text/javascript">
 $("#subtotal").keyup(function(){   
   var a = parseFloat($("#ambil").val());
   var b = parseFloat($("#antar").val());
   var c = a+b;
   $("#total").val(c);
 });
 
 $("#ppn").keyup(function(){
   var a = parseFloat($("#ambil").val());
   var b = parseFloat($("#antar").val());
   var c = a+b;
   $("#total").val(c);
 });

</script>
    <script type="text/javascript" src="js/navbar2.js"></script>

</body>
</html>