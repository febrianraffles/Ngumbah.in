<?php
session_start();

if (isset($_POST['transaksi'])) {
    require_once '../koneksi.php';
    $id_detail_transaksi = htmlspecialchars($_POST['']);
    $id_boking = htmlspecialchars($_POST['id_boking']);
    $id_daftar = htmlspecialchars($_POST['id_daftar']);
    $berat = htmlspecialchars($_POST['berat']);
    $biaya_ambil = htmlspecialchars($_POST['biaya_ambil']);
    $biaya_antar = htmlspecialchars($_POST['biaya_antar']);
    $total = htmlspecialchars($_POST['total']);
    $tgl_ambil = htmlspecialchars($_POST['tgl_ambil']);
    $sql = "INSERT INTO tb_detail_transaksi (id_boking, id_daftar, berat, biaya_ambil, biaya_antar, total, tgl_ambil) VALUES ('$id_boking', '$id_daftar', '$berat', '$biaya_ambil', '$biaya_antar', '$total', '$tgl_ambil')";
    mysqli_query ($koneksi, $sql);
    echo "<script>alert('Berhasil, Pesanan Berhasil Ditambakan');</script>";
    echo "<script>window.location='../pegawai/tabel_transaksi.php';</script>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Transaksi</title>
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
		<a href="beranda_pegawai.php" class="logo"><img src="img/laundry-machine.png" alt="" style="width: 60px; padding-right: 3px;"><span>Ngumbah.in</span></a>

		<ul class="navbar">
			<li><a href="beranda_pegawai.php" class="active">Beranda</a></li>
            <li><a href="tabel_pesanan.php">Pesanan</a></li>
            <li><a href="tabel_transaksi.php">Transaksi</a></li>>
		</ul>

		<div class="main">
            <button type="button" class="user"><a style="color :black;" href="../logout.php" onclick="return confirm('Yakin Ingin Keluar?')">Keluar</a></button>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
	</header>
	 <!--  Navbar End -->

	<div class="text">
		<p >Transaksi</p>
	</div>
<!-- Container Utama Start -->
<div class="container">
				<!-- Input Data Strat -->
					<div class="card shadow-sm col-6 offset-3">
						<div class="card-header bg-light">
							<p style="font-weight: bold;">Transaksi</p>
						</div>
							<div class="card-body table-responsive ">
								<div class="row g-3">
									  <div class="col">
										<form action="" method="GET">	
									  	<label for="" class="form-label">Kode Pesanan</label>
									    <input type="search" class="form-control" name="cari" placeholder="Masukkan Kode Pesanan" aria-label="First name" value="<?php if(isset($_GET['cari'])) { echo $_GET['cari'];}?>">
									  </div>
									  <!-- <div class="col">
									  	<label for="" class="form-label">Tanggal Ambil</label>
									    <input type="date" value="<?= date('Y-m-d')?>" name="tgl_ambil" class="form-control">
									  </div> -->
								</div>
									  <div class="mt-3">
									  	<button type="submit" class="btn btn-warning btn-sm"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
									  	<button type="submit" class="btn btn-danger btn-sm"><i class="fa-regular fa-trash-can"></i> Clear</button>
										</form>	
									  </div>
							</div>
					</div>				
					<!-- Input Data End -->
		
					<!-- Detail Pesanan Strat -->
					<div class="card shadow-sm" style="margin-top: -90px;">
						 <div class="card-header ">
							<p style="font-weight: bold;">Detail Transaksi</p>
						  </div>

							<div class="card-body table-responsive" >
								<form action="" method="POST">
									<table class="table table-bordered " >
										<thead >
											<tr>
												<th>Tanggal Selesai</th>
												<th>Jenis</th>
												<th>jasa</th>
												<th>Berat</th>
												<th>Biaya Ambil</th>
												<th>Biaya Antar</th>
												<th>Total</th>
											</tr>
										</thead>

										<tbody>
											<?php 
											include '../koneksi.php';

											//$query = mysqli_query($koneksi, "SELECT * FROM tb_boking" );

											if (isset($_GET['cari'])){
												$query = mysqli_query($koneksi, "SELECT * FROM tb_boking WHERE id_boking LIKE '%". $_GET['cari']. "%'" );
											} 
											if (isset($query)){
												while ($dt = mysqli_fetch_assoc($query)) { 


												?>

												<input type="hidden" name="id_detail_transaksi">
												<input name="id_boking" type="hidden" value="<?=$dt['id_boking'];?>">
												<input name="id_daftar" type="hidden" value="<?=$dt['id_daftar'];?>">
												<td>
													<input type="date" name="tgl_ambil" value="<?= date('Y-m-d')?>">
												</td>
												<td ><?=$dt['jenis']?></td>
												<input type="hidden" name="jenis" value="<?=$dt['jenis']?>">
												<td id="jasa" ><?=$dt['jasa']?></td> 
												<input type="hidden" name="jasa" value="<?=$dt['jasa']?>">
												<div>
												<td>
													<div class="input-group">
														<input id="ceksensor" type="number" class="form-control" name="berat" value=""  onchange="hitung()" required>
														<span class="input-group-text" id="basic-addon1">KG</span>
													</div>
												</td>
												<td><div class="input-group">
													 <span class="input-group-text" id="basic-addon1">Rp.</span>
													 <input type="number" class="form-control" id="ambil" name="biaya_ambil" value="" onchange="hitung()" required>
													</div>
												</td>
												<td><div class="input-group">
													 <span class="input-group-text" id="basic-addon1">Rp.</span>
													 <input type="number" class="form-control" id="antar" name="biaya_antar" value=""  onchange="hitung()" required>
													</div>
												</td>
												<td >
													<div class="input-group">
													 <span class="input-group-text" id="basic-addon1">Rp.</span>
													 <input type="number" class="form-control" id="total" name="total" value=""  required readonly>
													</div>
												</td>

											
											<!--  <input type="submit" value="total"> -->
											</tr>
											
											<?php
												} 
											}

											 ?>
										</tbody>
									</table>
											<div class="modal-footer">      
												<button type="submit" name="transaksi" class="btn btn-success btn-sm"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
											</div>
								</form>
								</div>
							
						  	</div>	
					</div>
					<script type="text/javascript">
						
						function hitung(){
							berat = document.getElementById("ceksensor").value
							ambil = document.getElementById("ambil").value
							antar = document.getElementById("antar").value
							jasa = document.getElementById("jasa").innerHTML
							list_harga = [2000, 3000, 5000, 3000];
							if (jasa == "Cuci Basah"){
								harga = list_harga[0]
							} else if (jasa == "Cuci Kering"){
								harga = list_harga[1]
							} else if (jasa == "Cuci Setrika"){
								harga	= list_harga[2]
							} else if (jasa == "Setrika"){
								harga	= list_harga[3]
							}

							total = berat * harga + Number(ambil) + Number(antar)
							document.getElementById("total").value = total
						}

					</script>

		<!-- Detail Pesanan End -->
		


		<!-- Detail Transaksi Strat -->
			<div class="card shadow-sm" style="margin-top: -90px;">
				 <div class="card-header ">
					<p style="font-weight: bold;">Riwayat Transaksi</p>

				  </div>

					<div class="card-body table-responsive">
						
							<table class="table table-bordered " >
								<thead >
									<tr>
										<th width="">No</th>
										<th width="">Kode Pesanan</th>
										<th width="">Tanggal Selesai</th>
										<th width="">Jenis</th>
										<th width="">Jasa</th>
										<th width="">Berat</th>
										<th width="">Biaya Ambil</th>
										<th width="">Biaya Antar</th>
										<th width="">Total</th>
										<th>Aksi</th>
										
									</tr>
								</thead>

								<tbody>
									<?php 
									include '../koneksi.php';
									$no =1;
									$sql_pesan =mysqli_query($koneksi, "SELECT * FROM tb_detail_transaksi INNER JOIN tb_boking ON tb_detail_transaksi.id_boking = tb_boking.id_boking 
									ORDER BY tgl_ambil DESC") or die (mysqli_error($koneksi));
									if(mysqli_num_rows($sql_pesan) > 0){
									while($data = mysqli_fetch_array($sql_pesan)){ ?>
									<tr>
										<td><?=$no++?></td>
										<td><?=$data['id_boking']?></td>
										<td><?php echo date("d-m-Y", strtotime($data['tgl_ambil']))?></td>
										<td><?=$data['jenis']?></td>
										<td><?=$data['jasa']?></td>
										<td><?=$data['berat']?></td>
										<td><?=$data['biaya_ambil']?></td>
										<td><?=$data['biaya_antar']?></td>
										<td><?=$data['total']?></td>
										<td>
											<a href="hapus_transaksi.php?id=<?= $data['id_detail_transaksi'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Hapus?')"><i class="fa-solid fa-trash"></i></a>
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
				<div class="col" style="text-align: center;">
					<h4>Tentang Kami</h4>
					<ul>
						<a href=""><i class="fa-solid fa-location-dot"></i></a>
						<span>Alamat</span>
						<p>Dusun Pecarikan RT. 02/ RW. 03 Desa Jetis, Kec Jetis, Kab Mojokerto, Jawa timur</p>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.4737589977117!2d112.46858911596416!3d-7.412701360435955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780f46eb2aa5c5%3A0x2698afa9310a50da!2sRahayu%20Laundry!5e0!3m2!1sid!2sid!4v1670348790208!5m2!1sid!2sid" width="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</ul>
					
				</div>

				<div class="col" style="text-align: center;">
					<h4>Link</h4>
					<ul>
						 <li><a href="beranda_admin.php"><i class="fa-solid fa-caret-down"></i> Beranda</a></li>
                        <li><a href="tabel_pesanan.php"><i class="fa-solid fa-caret-down"></i> Pesanan</a></li>
                        <li><a href="tabel_transaksi.php"><i class="fa-solid fa-caret-down"></i> Transaksi</a></li>
					</ul>
					
				</div>

				<div class="col" style="text-align: center;">
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
    <script type="text/javascript" src="js/navbar2.js"></script>

</body>
</html>