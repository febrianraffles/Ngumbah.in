<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive navbar using only html css</title>
	<link rel="stylesheet" type="text/css" href="navbar2.css">

	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">

</head>
<body>

	<header>
		<a href="#" class="logo"><i class="ri-home-heart-fill"></i><span>Logo</span></a>

		<ul class="navbar">
			<li><a href="#" class="active">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Contact</a></li>
		</ul>

		<div class="main">
			<a href="#" class="user"><i class="ri-user-fill"></i>Sign In</a>
			<a href="#">Register</a>
			<div class="bx bx-menu" id="menu-icon"></div>
		</div>
	</header>

	<!-- Tabel Start -->
<div class="container">
	<div class="card shadow-sm mt-10 ">
			 <div class="card-header ">
					   <p>Pegawai</p>

					   	<!-- Button trigger modal -->
					   	<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#aksi">
				  		Tambah
						</button>
			  </div>

			  	<!-- Modal -->
			<div class="modal fade" id="aksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header text-white bg-secondary">
				        <h5 class="modal-title" id="exampleModalLabel">Tambah Pegawai</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      				<div class="modal-body">
				      	<!-- <div class="form-group"> -->
							      		<form action="tambah_pegawai.php" method="POST">
									       <label>Nama</label>
									       <input type="text" name="nama_pegawai" class="form-control" required>
									       <label>Bagian</label>
									       <select class="form-select" name="bagian_pegawai" id="" required>
											    <option selected>Pilih...</option>
											<?php
					                          include 'koneksi.php';
					                          $query = mysqli_query($koneksi,"SELECT * FROM pemesanan") or die (mysqli_error($koneksi));
					                          while($data = mysqli_fetch_array($query)){
					                            echo "<option value=$data[id_status]> $data[status] </option>";
					                          }
					                        ?>
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


				<div class="card-body">
					<table class="table table-bordered " >
						<thead >
							<tr>
								<th width="5">No</th>
								<th width="80">Nama</th>
								<th width="80">Bagian</th>
								<th width="30">Aksi</th>
							</tr>
						</thead>

						<tbody>
							<?php 
							include 'koneksi.php';
							$no =1;
							$sql_pegawai =mysqli_query($koneksi, "SELECT * FROM tb_pegawai") or die (mysqli_error($koneksi));
							if(mysqli_num_rows($sql_pegawai) > 0){
								while($data = mysqli_fetch_array($sql_pegawai)){ ?>
									<tr>
									<td><?=$no++?></td>
									<td><?=$data['nama_pegawai']?></td>
									<td><?=$data['bagian_pegawai']?></td>
									<td> 
										<!-- Modal Button Ubah Start -->
										<a type="button" data-bs-target="#ubah<?=$data['id_pegawai'];?>" class="btn btn-warning btn-sm" data-bs-toggle="modal" >Ubah</a>										
										<!-- Modal Button Ubah End -->

										<a href="hapus_pegawai.php?id=<?= $data['id_pegawai'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Hapus?')">Hapus</a>	
									</td>
									</tr>
									<!-- Modal Edit Start -->
									  	<div class="modal fade" id="ubah<?=$data['id_pegawai'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										  <div class="modal-dialog">
										    <div class="modal-content">
										      <div class="modal-header text-white bg-secondary">
										        <h5 class="modal-title" id="exampleModalLabel">Ubah Pegawai</h5>
										        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										      </div>
										      			<div class="modal-body">
										      	<!-- <div class="form-group"> -->

													      		<form action="ubah_pegawai.php" method="POST">
													      			<input type="text" name="id_pegawai" value="<?= $data['id_pegawai']?>" >
															       <label>Nama</label>
															       <input type="text" name="nama_pegawai" value="<?= $data['nama_pegawai']?>" class="form-control">
															       <label>Bagian</label>
															       <select class="form-select" name="bagian_pegawai" id="">
																	    <option value="<?= $data['bagian_pegawai']?>"></option>
																	    <option value="1">Karyawan</option>
																	    <option value="2">Driver</option>
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

	<!--js link--->
	<script type="text/javascript" src="js/navbar2.js"></script>

</body>
</html>