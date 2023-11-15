<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>footer</title>
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
<footer>
	<div class="footer">
		<div class="content">
			<div class="main">
				<div class="col">
					<h4>Link</h4>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Home</a></li>
						<li><a href="#">Home</a></li>
						<li><a href="#">Home</a></li>
					</ul>
					
				</div>


				<div class="col">
					<h4>Our Services</h4>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Home</a></li>
						<li><a href="#">Home</a></li>
						<li><a href="#">Home</a></li>
					</ul>
					
				</div>

				<div class="col">
					<h4>Shop</h4>
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Home</a></li>
						<li><a href="#">Home</a></li>
						<li><a href="#">Home</a></li>
					</ul>
					
				</div>

				<div class="col">
					<h4>Follow Us</h4>
					<div class="social">
						<a href="#"><i class="fa-brands fa-facebook"></i></a>
						<a href="#"><i class="fa-brands fa-instagram"></i></a>
					</div>
				</div>

				
			</div>
			
		</div>
		
	</div>
</footer>


<?php
					                          include 'koneksi.php';
					                          $query = mysqli_query($koneksi,"SELECT * FROM pemesanan") or die (mysqli_error($koneksi));
					                          while($data = mysqli_fetch_array($query)){
					                            echo "<option value=$data[id_status]> $data[status] </option>";
					                          }
					                        ?>

					                        <!-- <?php 	
												$basah= 2000;
												$berat =$_POST['berat'];
												$ambil =$_POST['biaya_ambil'];
												$antar =$_POST['biaya_antar'];
												$total =$berat +$ambil+$antar;
												// $biaya =$berat * $basah;
												// $total =$biaya+$ambil+$antar	;
												echo "$total";

											 ?> -->
</body>
</html>