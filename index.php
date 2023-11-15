 <?php
session_start();


if (isset($_POST['daftar'])) {
    require_once 'koneksi.php';
    $id_daftar = htmlspecialchars($_POST['']);
    $nama = htmlspecialchars($_POST['nama']);
    $username = htmlspecialchars($_POST['username']);
    $pass = htmlspecialchars($_POST['pass']);
    $kontak = htmlspecialchars($_POST['kontak']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $level = 'pelanggan';
    $sql = "INSERT INTO tb_daftar (nama_pelanggan, username, password_pelanggan, kontak_pelanggan, alamat_pelanggan, level) VALUES ('$nama', '$username', '$pass', '$kontak', '$alamat', '$level');";
    mysqli_query($koneksi, $sql);
    echo "<script>alert('Daftar Sukses, Silahkan Masuk!!!');</script>";
    echo "<script>window.location='index.php';</script>";
}
// var_dump($_SESSION['id'])
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Utama</title>
    <link rel="stylesheet" type="text/css" href="umum/css/umum.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">

</head>
<body>
<!-- Navbar Start -->
    <header>
        <a href="index.php" class="logo"> <img src="admin/img/laundry-machine.png" alt=""><span>Ngumbah.in</span></a>

        <ul class="navbar">
            <li><a href="#beranda" class="active">Beranda</a></li>
            <li><a href="#tutorial">Tutorial</a></li>
        </ul>

        <div class="main">
            <button type="button" data-bs-toggle="modal" data-bs-target="#masuk" class="user">Masuk</button>
            <button type="button" data-bs-toggle="modal" data-bs-target="#daftar">Daftar</button>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
     <!--  Navbar End -->

<!-- Modal Start Daftar -->
    <div class="modal fade" id="daftar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header text-white bg-secondary">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-users-gear"></i> Daftar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                                    <div class="modal-body mb-2">
                        <!-- <div class="form-group"> -->
                                        <form action="" method="POST">
                                            <input type="hidden" name="id_daftar">
                                            <div class="row">
                                                <div class="col-md-3 mb-4">
                                                    <label for="name">Nama Lengkap :</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="nama" id="name" placeholder="Cth: Febrian Rafles Aditama" required="required" data-validation-required-message="Mohon Diisi Nama Lengkap Anda" >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 mb-4">
                                                    <label for="name">Username :</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="username" id="username" placeholder="Cth: febry" required="required" data-validation-required-message="Mohon Isi username" >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 mb-4">
                                                    <label for="name">Password :</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="pass" id="password" placeholder="Cth: *****" required="required" data-validation-required-message="Mohon Isi Password" >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 mb-4">
                                                    <label for="name">No Telp :</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="kontak" id="hp" placeholder="Cth: 085678485823" required="required" data-validation-required-message="Mohon Isi No.Handphone" >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3 mb-4">
                                                    <label for="name">Alamat :</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="alamat" id="alamat" placeholder="Cth: Jl. Kelurahan Pakal Np.24" required="required" data-validation-required-message="Mohon Isi Alamat" >
                                                </div>
                                            </div>
                                            <input type="hidden" name="level">
                                           
                                  <!--  </div> -->
                                    </div>
                                     <div class="modal-footer">
                                   
                                        <button type="submit" name="daftar" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Daftar</button>
                                        </form>
                                    </div>
                    </div>
                  </div>
            </div>
     <!-- Modal End Daftar -->
<!-- Modal Start Login -->
<div class="modal fade" id="masuk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header text-white bg-secondary">
                        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-users"></i> Masuk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                                    <div class="modal-body mb-2">
                        <!-- <div class="form-group"> -->
                                        <form action="login.php" method="POST">
                                            <div class="row">
                                                <div class="col-2">
                                                    <label for="">Username :</label>
                                                </div>
                                                <div class="col-10">
                                                    <input class="form-control" type="text" name="username" id="username" placeholder="Cth: aldi" required="required" data-validation-required-message="Mohon Isi username" >
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-2">
                                                    <label for="">Password :</label>
                                                </div>
                                                <div class="col-10">
                                                    <input class="form-control" type="password" name="pass" id="password" placeholder="Cth: *****" required="required" data-validation-required-message="Mohon Isi Password" >
                                                </div>
                                            </div>
                                          
                                  <!--  </div> -->
                                    </div>
                                     <div class="modal-footer">
                                   
                                        <button type="submit" name="login" class="btn btn-success"><i class="fa-solid fa-right-to-bracket"></i> Masuk</button>
                                        </form>
                                    </div>
                    </div>
                  </div>
            </div>
<!-- Modal End Login-->

    <!-- Header Start -->
    <div id="beranda" class="container-fluid px-0 px-md-5" style="background-color: skyblue;">
        <div class="row align-items-center px-3 py-3">
            <div data-aos="fade-up" data-aos-duration="3000" class="col-lg-6 col-md-6 col-sm-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-3 mt-lg-0">Selamat datang di</h4>
                <h1 class="display-3 font-weight-bold text-white">Website Jasa Laundry</h1>
                <h1 class="font-weight-bold text-white">Ngumbah.In</h1>
            </div>
            <div data-aos="fade-left" data-aos-duration="3000" class="col-md-6 col-lg-6 col-sm-6 text-center text-lg-right">
                <img class="" src="admin/img/laundry.png" alt="" style="width: 70%;">
            </div>
        </div>
    </div>
    <!-- Header End -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="skyblue" fill-opacity="1" d="M0,160L9.6,149.3C19.2,139,38,117,58,112C76.8,107,96,117,115,112C134.4,107,154,85,173,101.3C192,117,211,171,230,170.7C249.6,171,269,117,288,101.3C307.2,85,326,107,346,117.3C364.8,128,384,128,403,149.3C422.4,171,442,213,461,208C480,203,499,149,518,106.7C537.6,64,557,32,576,37.3C595.2,43,614,85,634,128C652.8,171,672,213,691,202.7C710.4,192,730,128,749,101.3C768,75,787,85,806,96C825.6,107,845,117,864,122.7C883.2,128,902,128,922,128C940.8,128,960,128,979,117.3C998.4,107,1018,85,1037,90.7C1056,96,1075,128,1094,149.3C1113.6,171,1133,181,1152,170.7C1171.2,160,1190,128,1210,138.7C1228.8,149,1248,203,1267,197.3C1286.4,192,1306,128,1325,90.7C1344,53,1363,43,1382,69.3C1401.6,96,1421,160,1430,192L1440,224L1440,0L1430.4,0C1420.8,0,1402,0,1382,0C1363.2,0,1344,0,1325,0C1305.6,0,1286,0,1267,0C1248,0,1229,0,1210,0C1190.4,0,1171,0,1152,0C1132.8,0,1114,0,1094,0C1075.2,0,1056,0,1037,0C1017.6,0,998,0,979,0C960,0,941,0,922,0C902.4,0,883,0,864,0C844.8,0,826,0,806,0C787.2,0,768,0,749,0C729.6,0,710,0,691,0C672,0,653,0,634,0C614.4,0,595,0,576,0C556.8,0,538,0,518,0C499.2,0,480,0,461,0C441.6,0,422,0,403,0C384,0,365,0,346,0C326.4,0,307,0,288,0C268.8,0,250,0,230,0C211.2,0,192,0,173,0C153.6,0,134,0,115,0C96,0,77,0,58,0C38.4,0,19,0,10,0L0,0Z"></path></svg>

    <!-- Facilities Start -->
    <div class="container-fluid pt-5 ">
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="1000" class="text-center pb-2">
                <h1 class="mb-4" style="font-family: 'Homemade Apple', cursive; font-weight:bold;">Melayani</h1>
            </div>
            <div class="row">
                <div data-aos="zoom-in-up" class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="admin/img/washing-clothes.png" alt="" style="width: 50%;" >
                    </div>
                    
                    <h4>Cuci Basah</h4>
                    <h4>Rp 2.000/Kg</h4>
                </div>
                <div data-aos="zoom-in-up" class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="admin/img/laundry.png" alt=""style="width: 50%;" >
                    </div>
                    
                    <h4>Cuci Kering</h4>
                    <h4>Rp 3.000/Kg </h4>
                </div>
                <div data-aos="zoom-in-up" class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="admin/img/laundry setrika.png" alt=""style="width: 50%;" >
                    </div>
                    
                    <h4>Cuci Setrika</h4>
                    <h4>Rp 5.000/Kg </h4>
                </div>
                <div data-aos="zoom-in-up" class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="admin/img/iron.png" alt=""style="width: 50%;" >
                    </div>
                    
                    <h4>Setrika</h4>
                    <h4>Rp 3.000/Kg </h4>
                </div>
            <!-- </div>
            <div class="row"> -->
                <div data-aos="zoom-in-up" class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="admin/img/bed-sheets.png" alt=""style="width: 50%;" >
                    </div>
                    
                    <h4>Bed Cover Besar</h4>
                    <h4>Rp 18.000/potong </h4>
                </div>
                <div data-aos="zoom-in-up" class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div style="border-radius: 100%;">
                        <img class="" src="admin/img/bed-sheets 2.png" style="width: 50%; padding: 20px;">
                    </div>
                    
                    <h4>Bed Cover Kecil</h4>
                    <h4>Rp 15.000/potong </h4>
                </div>
        
                <div data-aos="zoom-in-up" class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="admin/img/laundry setrika.png" alt=""style="width: 50%;" >
                    </div>
                    
                    <h4>Sprei</h4>
                    <h4>Rp 5.000/potong </h4>
                </div>
                <div data-aos="zoom-in-up" class="col-md-4 col-lg-3 col-sm-4 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="admin/img/blanket.png" alt=""style="width: 50%;" >
                    </div>
                    
                    <h4>Selimut</h4>
                    <h4>Rp 10.000/potong </h4>
                </div>
            </div>
            <div class="text-center">

                <h4>
                    Dan Lain-lain
                </h4>
            </div><br><br><br><br><br><br><br>
        </div>
        <div class="container">
            <div data-aos="fade-up" data-aos-duration="1000" class="text-center pb-2">
                <h1 class="mb-4" style="font-family: 'Homemade Apple', cursive; font-weight:bold;">Keunggulan</h1>
            </div>
            <div class="row">
                <div data-aos="zoom-in-up" class="col-md-6 col-lg-3 col-sm-6 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="admin/img/shipment.png" alt="" style="width: 50%;" >
                    </div>
                    
                    <h4>Pick Up Delivery</h4>
                </div>
                <div data-aos="zoom-in-up" class="col-md-6 col-lg-3 col-sm-6 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="admin/img/skin-care.png" alt=""style="width: 50%;" >
                    </div>
                  
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
                <div data-aos="zoom-in-up" class="col-md-6 col-lg-3 col-sm-6 text-center team mb-5">
                    <div class="position-relative" style="border-radius: 100%;">
                        <img class="" src="admin/img/best-price.png" alt=""style="width: 50%;" >
                    </div>
                    
                    <h4>Harga Bersaing</h4>
                </div> 
                <div data-aos="zoom-in-up" class="col-md-6 col-lg-3 col-sm-6 text-center team mb-5">
                    <div class="position-" style="border-radius: 100%;">
                        <img class="" src="admin/img/guarantee.png" alt=""style="width: 50%;" >
                    </div>
                   
                    <h4>Garansi 100%</h4>
                </div>       
                
            </div>
        </div>
    </div><br><br><br>

    <div data-aos="zoom-in-up" id="tutorial" class="container-fluid mr-4 ml-4 center" style="text-align:center;">
            <div class="text-center pb-2">
                <h1 class="mb-4" style="font-family: 'Homemade Apple', cursive; font-weight:bold;">Cara Pemesanan</h1>
            </div>
            <img src="admin/img/cara.png" style="width: 80%; border-radius: 10px;">
        
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.4737589977117!2d112.46858911596416!3d-7.412701360435961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780f46eb2aa5c5%3A0x2698afa9310a50da!2sRahayu%20Laundry!5e0!3m2!1sid!2sid!4v1670329302213!5m2!1sid!2sid" width="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </ul>
                    
                </div>

                <div class="col" style="text-align: center;">
                    <h4>Link</h4>
                    <ul>
                        <li><a href="#beranda"><i class="fa-solid fa-caret-down"></i> Beranda</a></li>
                        <li><a href="#tutorial"><i class="fa-solid fa-caret-down"></i> Tutorial</a></li>
                    </ul>
                    
                </div>

                <div class="col" style="text-align: center;">
                    <h4>Ikuti Kami</h4>
                    <div >
                        
                        <a href="" style="font-size: 40px; line-height: 40px;">
                        <img src="admin/img/laundry.in.png" alt="" >
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

    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a> -->


    <!-- JavaScript Libraries -->
<!--     <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script> -->

    <!-- Contact Javascript File -->
<!--     <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script> -->

    <!-- Template Javascript -->
<!--     <script src="js/main.js"></script> -->
    <script type="text/javascript" src="admin/js/navbar2.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
  </script>
</body>
</html>