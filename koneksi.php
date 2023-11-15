<?php /*	
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
*/
$dbhost = "localhost";
$dbname = "db_laundry";
$dbuser = "root";
$dbpassword = "";

$koneksi = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if (!$koneksi){
    die("Koneksi ke database error");
}
