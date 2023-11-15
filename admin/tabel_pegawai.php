<?php 
include_once ('../koneksi.php');
session_start();

if (isset($_POST['simpan'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $username = htmlspecialchars($_POST['username']);
    $pass = htmlspecialchars($_POST['pass']);
    $kontak = htmlspecialchars($_POST['kontak']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $level = htmlspecialchars($_POST['level']);
    $sql = "INSERT INTO tb_daftar (nama_pelanggan, username, password_pelanggan, kontak_pelanggan, alamat_pelanggan, level) VALUES ('$nama', '$username', '$pass', '$kontak', '$alamat', '$level');";
    mysqli_query($koneksi, $sql);

     echo "<script>window.location='tabel_pegawai.php';</script>";
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabel_Pegawai</title>
	<link rel="stylesheet" type="text/css" href="css/tabel_pegawai.css">
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

</head>
<body>
	<!-- Navbar Start -->
	<header>
		<a href="tabel_pegawai.php" class="logo"><img src="img/laundry-machine.png" alt="" style="width: 60px; padding-right: 3px;"><span>Ngumbah.in</span></a>

		<ul class="navbar">
			 <li><a href="beranda_admin.php" class="active">Beranda</a></li>
			 <li><a href="tabel_admin.php" >Admin</a></li>
            <li><a href="tabel_pegawai.php">Pegawai</a></li>
             <li><a href="tabel_pelanggan.php">Pelanggan</a></li>
            <li><a href="tabel_pesanan.php">Pesanan</a></li>
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
		<p >Input Pegawai</p>
	</div>


	<!-- Navbar Start -->
	  <!--   <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 40px;">
                <img src="img/laundry-machine.png" alt="" style="width: 20%;">
                <span class="text-primary">Ngumbah.In</span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="beranda_pegawai.php" class="nav-item nav-link">Beranda</a>
                    <a href="tabel_pegawai.php" class="nav-item nav-link active">Status Karyawan</a>
                    <a href="visitor.html" class="nav-item nav-link">Data Pengunjung</a>
                    <a href="laundries.html" class="nav-item nav-link">Data Laundry</a>
                    <a href="tabel_pesanan.php" class="nav-item nav-link">Input Pesanan</a>
                    <a href="tabel_transaksi.php" class="nav-item nav-link">Data Pesanan</a>
                    <a href="gallery.html" class="nav-item nav-link">Laporan</a>
                    <a href="contact.html" class="nav-item nav-link">Riwayat Pemesanan</a>
                </div>
                <div class="w3-container">
                    <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary px-4" style="width: 100px;">Logout</button>
                        <div id="id01" class="w3-modal">
                            <div class="w3-modal-content">
                            <div class="w3-container text-center">
                                <span style="size: 10px; color: white; background-color: brown;" onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                <h3 style="margin: 10px;">Anda yakin ingin Logout?</h3>
                                <button style="width: 100px; margin: 10px;" class="btn btn-primary py-2 px-4 text-center" type="submit" id="sendMessageButton">Yakin</button>
                            </div>
                            </div>
                        </div>
                </div>
            </div>
        </nav>
    </div> -->
   <!--  Navbar End -->

<!-- Header Start -->
    <!-- <div class="container-fluid bg-primary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 250px">
            <h3 class="display-3 font-weight-bold text-white">Status Karyawan</h3>
        </div>
    </div> -->
<!-- Header End -->

<!-- Tabel Start -->
<div class="container">
	<div class="card shadow-sm mt-10 ">
			 <div class="card-header ">
					   <!-- <p>Pegawai</p> -->

					   	<!-- Button trigger modal -->
					   	<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#aksi">
				  		Tambah
						</button>
			  </div>

			  	<!-- Modal Start-->
			<div class="modal fade" id="aksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content">
				      <div class="modal-header text-white bg-secondary">
				        <h5 class="modal-title" id="exampleModalLabel">Tambah Pegawai</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      				<div class="modal-body ">
							      		<form action="" method="POST">
									       <input type="text" placeholder="Masukkan Nama" name="nama" class="form-control mb-3" required>
									       <input type="text" placeholder="Masukkan Username" name="username" class="form-control mb-3" required>
									       <input type="password" placeholder="Masukkan Password" name="pass" class="form-control mb-3" required>
									       <input type="text" placeholder="Masukkan Kontak/ No.HP" name="kontak" class="form-control mb-3" required>
									       <input type="text" placeholder="Masukkan Alamat" name="alamat" class="form-control mb-3" required>
									       <select name="level" class="form-select" aria-label="Default select example">
									       	<option value="pegawai">Pegawai</option>
									       	<option value="admin" disabled >Admin</option>
									       	<option value="pelanggan" disabled>Pelanggan</option>
									       	</select>
							      <!--  </div> -->
							      	</div>
							     	 <div class="modal-footer">
							       
								        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
								        </form>
				      				</div>
				    </div>
				  </div>
			</div>
<!-- Modal Start-->
<div class="card-body table-responsive">
					<table class="table table-bordered table-responsive" >
						<thead >
							<tr>
								<th width="5">No</th>
								<th width="15" id="myInput">Nama</th>
								<th width="15" id="myInput">Username</th>
							<!-- 	<button onclick="myFunction()">Copy text</button> -->
								<th width="10">Password</th>
								<th width="15">Kontak</th>
								<th width="30">Alamat</th>
								<th width="30">Job</th>
								<th width="30">Aksi</th>
							</tr>
						</thead>

						<tbody>
							<?php 
							include '../koneksi.php';
							$no =1;
							$sql_daftar =mysqli_query($koneksi, "SELECT * FROM tb_daftar WHERE level ='pegawai'") or die (mysqli_error($koneksi));
							if(mysqli_num_rows($sql_daftar) > 0){
								while($data = mysqli_fetch_array($sql_daftar)){ ?>
									<tr>
									<td><?=$no++?></td>
									<td><?=$data['nama_pelanggan']?></td>
									<td><?=$data['username']?></td>
									<td><?=$data['password_pelanggan']?></td>
									<td><?=$data['kontak_pelanggan']?></td>
									<td><?=$data['alamat_pelanggan']?></td>
									<td><?=$data['level']?></td>
									<td> 
									<!-- Modal Button Ubah Start -->
										<a type="button" data-bs-target="#ubah<?=$data['id_daftar'];?>" class="btn btn-warning btn-sm" data-bs-toggle="modal" >Ubah</a>										
										<!-- Modal Button Ubah End -->

										<a href="pelanggan/hapus_pegawai.php?id=<?= $data['id_daftar'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Hapus?')">Hapus</a>	
									</td>
									</tr>
									<!-- Modal Edit Start -->
									  	<div class="modal fade" id="ubah<?=$data['id_daftar'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										  <div class="modal-dialog">
										    <div class="modal-content">
										      <div class="modal-header text-white bg-secondary">
										        <h5 class="modal-title" id="exampleModalLabel">Ubah Pegawai</h5>
										        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										      </div>
										      			<div class="modal-body">
										      	<!-- <div class="form-group"> -->

													      <form action="pelanggan/ubah_pegawai.php" method="POST">
													      	<input type="hidden" name="id_daftar" value="<?= $data['id_daftar']; ?>">
													       <input type="text" placeholder="Masukkan Nama" name="nama" value="<?=$data['nama_pelanggan'];?>" class="form-control mb-3" required>
													       <input type="text" placeholder="Masukkan Username" name="username" value="<?=$data['username'];?>" class="form-control mb-3" required>
													       <input type="password" placeholder="Masukkan Password" name="pass" value="<?=$data['password_pelanggan'];?>" class="form-control mb-3" required>
													       <input type="text" placeholder="Masukkan Kontak/ No.HP" name="kontak" value="<?=$data['kontak_pelanggan'];?>" class="form-control mb-3" required>
													       <input type="text" placeholder="Masukkan Alamat" name="alamat" value="<?=$data['alamat_pelanggan'];?>" class="form-control mb-3" required>
													       <select name="level" value="<?=$data['level'];?>" class="form-select" aria-label="Default select example">													       	
													       	<option value="pegawai">Pegawai</option>
													       	<option value="admin" disabled>Admin</option>      	
													       	<option value="pelanggan"disabled>Pelanggan</option>

													       	</select>
													       	
													      <!--  </div> -->
													      </div>
													      <div class="modal-footer">
													       
													        <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
													        </form>
													      
										      			</div>
										    </div>
										  </div>
										</div>

									<!-- Modal Edit End -->
								<?php
								}
							}else {
								echo "<tr><td colspan =\"4\" align=\"center\">Data tidak ditemukan</td></tr>";
							}

							 ?>
				
							
						</tbody>
					</table>
			  	</div>
			  	
	</div>	
</div>
<!-- Tabel End -->

    <!-- Footer Start -->
   <!--  <div class="container-fluid bg-secondary text-white">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-6 mb-5">
                <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0" style="font-size: 40px; line-height: 40px;">
                    <img src="img/laundry-machine.png" alt="" style="width: 25%;">
                    <span class="text-white">Ngumbah.In</span>
                </a>
                <p></p>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Get In Touch</h3>
                <div class="d-flex">
                    <h4 class="fa fa-map-marker-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Alamat</h5>
                        <p>Dusun Pecarikan RT. 02/ RW. 03 Desa Jetis, Kec Jetis, Kab Mojokerto, Jawa timur</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-phone-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Telepon</h5>
                        <p>085230880201</p>
                    </div>
                </div>
            </div> 
            <div style="width: 33%;">
                <h3 class="text-primary mb-4">Quick Links</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Beranda</a>
                    <a class="text-white mb-2" href="karyawan.html"><i class="fa fa-angle-right mr-2"></i>Status Karyawan</a>
                    <a class="text-white mb-2" href="visitor.html"><i class="fa fa-angle-right mr-2"></i>Data Pengunjung</a>
                    <a class="text-white mb-2" href="laundries.html"><i class="fa fa-angle-right mr-2"></i>Data Laundry</a>
                    <a class="text-white mb-2" href="class.html"><i class="fa fa-angle-right mr-2"></i>Input Pesanan</a>
                    <a class="text-white mb-2" href="team.html"><i class="fa fa-angle-right mr-2"></i>Data Pesanan</a>
                    <a class="text-white mb-2" href="gallery.html"><i class="fa fa-angle-right mr-2"></i>Laporan</a>
                    <a class="text-white mb-2" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Riwayat Pemesanan</a>
                </div>
            </div>        
        </div>
        <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, .2);;">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-primary font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed
                by
                <a class="text-primary font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
        
    </div> -->
    <!-- Footer End -->
<!--     <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a> -->
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
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.4737589977117!2d112.46858911596416!3d-7.412701360435961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780f46eb2aa5c5%3A0x2698afa9310a50da!2sRahayu%20Laundry!5e0!3m2!1sid!2sid!4v1670329302213!5m2!1sid!2sid" width="300"style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</ul>
					
				</div>

				<div class="col" style="text-align: center;">
					<h4>Link</h4>
					<ul>
						 <li><a href="beranda_admin.php"><i class="fa-solid fa-caret-down"></i> Beranda</a></li>
						<li><a href="tabel_admin.php"><i class="fa-solid fa-caret-down"></i> Admin</a></li>
                        <li><a href="tabel_pegawai.php"><i class="fa-solid fa-caret-down"></i> Pegawai</a></li>
                        <li><a href="tabel_pelanggan.php"><i class="fa-solid fa-caret-down"></i> Pelanggan</a></li>
                        <li><a href="tabel_pesanan.php"><i class="fa-solid fa-caret-down"></i> Pesanan</a></li>
                        <li><a href="tabel_transaksi.php"><i class="fa-solid fa-caret-down"></i> Transaksi</a></li>
                        <li><a href="tabel_laporan.php"><i class="fa-solid fa-caret-down"></i> Laporan</a></li>
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
