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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dahsboard Admin</title>
    <link rel="stylesheet" type="text/css" href="css/beranda_admin.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
    <!-- Navbar Start -->
    <header>
        <a href="beranda_admin.php" class="logo"><img src="img/laundry-machine.png" alt="" style="width: 60px; padding-right: 3px;"><span>Ngumbah.in</span></a>

        <ul class="navbar">
            <li><a href="beranda_admin.php" class="active">Beranda</a></li>
            <li><a href="tabel_admin.php" >User</a></li>
             <li><a href="tabel_pelanggan.php">Pelanggan</a></li>
            <li><a href="tabel_pesanan.php">Pesanan</a></li>
            <li><a href="tabel_laporan.php">Laporan</a></li>
        </ul>

        <div class="main">
            <button type="button" class="user"><a style="color :black;" href="../logout.php" onclick="return confirm('Yakin Ingin Keluar?')">Keluar</a></button>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
     <!--  Navbar End -->

    <div class="text">
        <!-- <p >Input Pegawai</p> -->
    </div>

    <!-- Header Start -->
    <div  id="beranda" class="container-fluid px-0 px-md-5 mb-5" style="background-color: skyblue;">
        <div class="row align-items-center px-3 py-3">
            <div class="col-lg-6 col-md-6 col-sm-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-3 mt-lg-0">Selamat datang 
                    <?= $_SESSION['nama_pelanggan']?>
                di</h4>
                <h1 class="display-3 font-weight-bold text-white" >Website Jasa Laundry</h1>
                <h1 class="font-weight-bold text-white">Ngumbah.In</h1>
            </div>
            <div   class="col-md-6 col-lg-6 col-sm-6 text-center text-lg-right">
                <img class="" src="img/laundry-machine.png" alt="" style="width: 70%;">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Facilities Start -->
    <div class="container-fluid pt-5 ">
        <div class="container">
            <div class="text-center pb-2">
                <h1 class="mb-4">Melayani</h1>
            </div>
            <div class="row">
                <div  class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/washing-clothes.png" alt="" style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Cuci Basah</h4>
                    <h4>Rp 2.000/Kg</h4>
                </div>
                <div class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/laundry.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Cuci Kering</h4>
                    <h4>Rp 3.000/Kg </h4>
                </div>
                <div class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/laundry setrika.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Cuci Setrika</h4>
                    <h4>Rp 5.000/Kg </h4>
                </div>
                <div class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/iron.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Setrika</h4>
                    <h4>Rp 3.000/Kg </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/bed-sheets.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Bed Cover Besar</h4>
                    <h4>Rp 18.000/potong </h4>
                </div>
                <div class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div style="border-radius: 100%;">
                        <img class="" src="img/bed-sheets 2.png" style="width: 50%; padding: 20px;">
                    </div>
                    <h4>.</h4>
                    <h4>Bed Cover Kecil</h4>
                    <h4>Rp 15.000/potong </h4>
                </div>
        
                <div class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/laundry setrika.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Sprei</h4>
                    <h4>Rp 5.000/potong </h4>
                </div>
                <div class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/blanket.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Selimut</h4>
                    <h4>Rp 10.000/potong </h4>
                </div>
            </div>
            <div class="text-center">
                <h4>
                    .
                </h4>
                <h4>
                    Dan Lain-lain
                </h4>
            </div><br><br>
        </div>
        <div class="container">
            <div class="text-center pb-2">
                <h1 class="mb-4">Keunggulan</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 col-sm-6 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/shipment.png" alt="" style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Pick Up Delivery</h4>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/skin-care.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Higienis</h4>
                </div>
<!--                 <div class="col-md-6 col-lg-4 col-sm-6 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/iron.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Steam Iron</h4>
                </div> -->
<!--                 <div class="col-md-6 col-lg-4 col-sm-6 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/timer.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Express</h4>
                </div>  -->   
                <div class="col-md-6 col-lg-3 col-sm-6 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="img/best-price.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Harga Bersaing</h4>
                </div> 
                <div class="col-md-6 col-lg-3 col-sm-6 text-center team mb-5">
                    <div class="position-" style="border-radius: 100%;">
                        <img class="" src="img/guarantee.png" alt=""style="width: 50%;" >
                    </div>
                    <h4>.</h4>
                    <h4>Garansi 100%</h4>
                </div>       
                
            </div>
        </div>
    </div>

    <div id="tutorial" class="container-fluid mr-4 ml-4 center" style="text-align:center;">
            <div class="text-center pb-2">
                <h1 class="mb-4">Cara Pemesanan</h1>
            </div>
            <img src="img/cara.png" style="width: 80%; border-radius: 10px;">
        
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
                        <li><a href="tabel_laporan.php"><i class="fa-solid fa-caret-down"></i> Laporan</a></li>
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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>