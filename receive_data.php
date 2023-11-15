<?php
// Menerima data POST dari ESP32
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["weight"])) {
    // Mengambil data berat dari POST
    $weight = $_POST["weight"];

    // Menyimpan data ke dalam file atau database, atau melakukan tindakan lain sesuai kebutuhan
    // Contoh: Menyimpan data ke dalam file CSV
    $file = fopen("weight_data.csv", "a");
    fputcsv($file, array(date("Y-m-d H:i:s"), $weight));
    fclose($file);

    // Menampilkan pesan berhasil ke ESP32
    echo "Data received successfully.";
} else {
    // Menampilkan pesan jika data tidak diterima dengan benar
    echo "Invalid request.";
}
?>
