-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Nov 2023 pada 04.44
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_boking`
--

CREATE TABLE `tb_boking` (
  `id_boking` int(11) NOT NULL,
  `id_daftar` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `jasa` enum('Cuci Basah','Cuci Kering','Cuci Setrika','Setrika') NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Boking'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_boking`
--

INSERT INTO `tb_boking` (`id_boking`, `id_daftar`, `jenis`, `jasa`, `tgl_pemesanan`, `status`) VALUES
(50, 40, 'Kiloan', 'Cuci Setrika', '2023-11-14', 'Selesai'),
(52, 40, 'Kiloan', 'Setrika', '2023-11-14', 'Selesai'),
(53, 32, 'Kiloan', 'Cuci Setrika', '2023-11-14', 'Selesai'),
(54, 32, 'Kiloan', 'Cuci Kering', '2023-11-14', 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftar`
--

CREATE TABLE `tb_daftar` (
  `id_daftar` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password_pelanggan` varchar(100) NOT NULL,
  `kontak_pelanggan` varchar(15) NOT NULL,
  `alamat_pelanggan` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_daftar`
--

INSERT INTO `tb_daftar` (`id_daftar`, `nama_pelanggan`, `username`, `password_pelanggan`, `kontak_pelanggan`, `alamat_pelanggan`, `level`) VALUES
(32, 'Aldi Soraja', 'aldi', '123', '089346282819', 'Banyu Urip Wetan 4-A/12', 'pelanggan'),
(36, 'Febri', 'febri', '123', '086758485845', 'Kelurahan Pakal No.29', 'admin'),
(37, 'Alga Soraja', 'alga', '123', '082245489778', 'Jagir sidomukti 7 no 22', 'pegawai'),
(40, 'Nuke Ajeng Soraja', 'nuke', '123', '086758485845', 'Jagir sidomukti 1 no 11', 'pelanggan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_transaksi`
--

CREATE TABLE `tb_detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_boking` int(11) NOT NULL,
  `id_daftar` int(11) NOT NULL,
  `berat` varchar(100) NOT NULL,
  `biaya_ambil` varchar(100) NOT NULL,
  `biaya_antar` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `tgl_ambil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_detail_transaksi`
--

INSERT INTO `tb_detail_transaksi` (`id_detail_transaksi`, `id_boking`, `id_daftar`, `berat`, `biaya_ambil`, `biaya_antar`, `total`, `tgl_ambil`) VALUES
(2, 50, 40, '10', '3000', '3000', '56000', '2023-11-17'),
(3, 52, 40, '7', '0', '0', '21000', '2023-11-20'),
(6, 53, 32, '7', '0', '3000', '38000', '2023-11-19'),
(8, 54, 32, '12', '3000', '0', '39000', '2023-11-21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_boking`
--
ALTER TABLE `tb_boking`
  ADD PRIMARY KEY (`id_boking`),
  ADD KEY `id_daftar` (`id_daftar`);

--
-- Indeks untuk tabel `tb_daftar`
--
ALTER TABLE `tb_daftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indeks untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_boking`
--
ALTER TABLE `tb_boking`
  MODIFY `id_boking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `tb_daftar`
--
ALTER TABLE `tb_daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_boking`
--
ALTER TABLE `tb_boking`
  ADD CONSTRAINT `tb_boking_ibfk_1` FOREIGN KEY (`id_daftar`) REFERENCES `tb_daftar` (`id_daftar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
