 <?php
 include_once ('../koneksi.php');

if (isset($_POST['login'])) {
    $user = htmlspecialchars($_POST['username']);
    $pass = htmlspecialchars($_POST['pass']);
    $sql = mysqli_query($koneksi, "SELECT * FROM tb_daftar WHERE username = '$user' AND password_pelanggan ='$pass'");
    $r = mysqli_fetch_array($sql);
    $cek = mysqli_num_rows($sql);

    if($cek > 0){
    //$data = mysqli_fetch_assoc($sql);
    session_start();

    // cek jika user login sebagai admin
    if($r['level']=="admin"){
                // buat session login dan username
        $_SESSION['id'] = $r['id_daftar'];
        $_SESSION['nama_pelanggan']=$r['nama_pelanggan'];
        $_SESSION['level'] = "admin";
        // alihkan ke halaman dashboard admin
        echo "<script>alert('Login Sukses, Selamat Datang Admin!!!');</script>";
       echo "<script>window.location='admin/beranda_admin.php';</script>";
 
    // cek jika user login sebagai pegawai
    }else if($r['level']=="pegawai"){
        // buat session login dan username
        $_SESSION['id'] = $r['id_daftar'];
         $_SESSION['nama_pelanggan']=$r['nama_pelanggan'];
        $_SESSION['level'] = "pegawai";
        // alihkan ke halaman dashboard pegawai
        echo "<script>alert('Login Sukses, Selamat Datang Pegawai!!!');</script>";
        echo "<script>window.location='pegawai/beranda_pegawai.php';</script>";

    // cek jika user login sebagai pengurus
    }else if($r['level']=="pelanggan"){
        // buat session login dan username
        $_SESSION['id'] = $r['id_daftar'];
         $_SESSION['nama_pelanggan']=$r['nama_pelanggan'];
        $_SESSION['level'] = "pelanggan";
        // alihkan ke halaman dashboard pengurus
        echo "<script>alert('Login Sukses, Selamat Datang Pelanggan!!!');</script>";
        //echo "<script>alert('".var_dump($data)."');</script>";
        echo "<script>window.location='pelanggan/beranda_pelanggan.php';</script>";

 
    }else{
 
         echo "<script>alert('Username atau Password Salah!!!');</script>";
        header("location:index.php?pesan=gagal");
    }   
}else{
    echo "<script>alert('Username atau Password Salah!!!');</script>";
    header("location:index.php?pesan=gagal");
}
}
 
?>



