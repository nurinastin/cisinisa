-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2020 pada 01.12
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinisa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(5) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`, `stok`, `gambar`) VALUES
('SA001', 'Traktor', 100000, 5, 'Traktor.jpg'),
('SA002', 'Penggiling Padi', 100000, 5, 'penggilingpadi.jpg'),
('SA003', 'Penggembur Tanah', 100000, 5, 'penggemburtanah.jpg'),
('SA004', 'Penyedot Air', 50000, 5, 'penyedotair.jpg'),
('SA005', 'Penyemprot Hama', 25000, 5, 'penyemprot.jpg'),
('SA006', 'Cangkul', 25000, 10, 'category4.png'),
('SA007', 'semprot', 10000, 2, 'sawah.jpg'),
('SA09', 'BHDH', 20000, 20, 'penggilingpadi.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyuluhan`
--

CREATE TABLE `penyuluhan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_instansi` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal_input` date NOT NULL,
  `tanggal_output` date NOT NULL,
  `materi` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyuluhan`
--

INSERT INTO `penyuluhan` (`id`, `nama`, `nama_instansi`, `status`, `tanggal_input`, `tanggal_output`, `materi`) VALUES
(23, 'cenora', 'kelompok 7', 'sudah dikonfirmasi', '2020-06-06', '2020-07-10', 'mencegah banjir'),
(27, 'tcfcg', 'nkj', 'sudah dikonfirmasi', '2020-06-07', '2020-06-28', 'bhvtc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa`
--

CREATE TABLE `sewa` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telepon` varchar(14) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `id_barang` varchar(5) NOT NULL,
  `tanggal_sewa` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `jumlah_hari` int(11) NOT NULL,
  `harga_sewa` int(11) NOT NULL,
  `asal` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sewa`
--

INSERT INTO `sewa` (`nik`, `nama`, `no_telepon`, `nama_barang`, `id_barang`, `tanggal_sewa`, `tanggal_kembali`, `jumlah_hari`, `harga_sewa`, `asal`, `alamat`) VALUES
('093487389457', 'Willy Arief Pratama', '082141862950', 'Traktor', 'SA001', '2020-01-28', '0000-00-00', 2, 200000, 'Surabaya', 'Sedati'),
('123435', 'riya', '0987643', 'Penyedot Air', 'SA004', '2020-06-10', '0000-00-00', 9, 450000, 'bondowoso', 'bondowoso'),
('44100', 'Putri Budiasih', '085330184600', 'Penggembur Tanah', 'SA003', '2020-01-27', '2020-01-30', 3, 300000, 'Surabaya', 'Sidoarjo, Indonesia'),
('sadgjahsd', 'Nurin Astin Valida', '099649203745', 'Traktor', 'SA001', '2020-01-27', '0000-00-00', 3, 300000, 'Jember', 'baratan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ts_grup`
--

CREATE TABLE `ts_grup` (
  `id_grup` int(11) NOT NULL,
  `grup` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ts_grup`
--

INSERT INTO `ts_grup` (`id_grup`, `grup`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL,
  `grup` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nik`, `nama`, `alamat`, `username`, `password`, `level`, `grup`) VALUES
(1, '12345678910', 'nurin', 'Jember', 'nurin', 'nurin123', 'admin', 1),
(2, '112233445566', 'puput', 'Probolinggo', 'puput', 'puput123', 'user', 2),
(4, '234567891112', 'kanisa', 'JEMBER', 'kanisa', 'kanisa123', 'user', 2),
(5, '123456789088', 'abdul', 'jember ', 'abdul', 'abdul123', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `penyuluhan`
--
ALTER TABLE `penyuluhan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `ts_grup`
--
ALTER TABLE `ts_grup`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `penyuluhan`
--
ALTER TABLE `penyuluhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `ts_grup`
--
ALTER TABLE `ts_grup`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
