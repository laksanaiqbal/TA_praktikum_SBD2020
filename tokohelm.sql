-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2020 pada 17.15
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokohelm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nama_admin`, `username`, `password`) VALUES
('danang', 'danangachmad', '3485669936f0978fa215beb74472c9c0'),
('laksana', 'laksanaiqbal', '528eafd791bb9e9b51dcdeeea7cb0db3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang`
--

CREATE TABLE `gudang` (
  `id_produk` varchar(20) NOT NULL,
  `id_gudang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gudang`
--

INSERT INTO `gudang` (`id_produk`, `id_gudang`) VALUES
('11', '2'),
('22', '3'),
('33', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` varchar(50) NOT NULL,
  `nomor_hp` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nomor_hp`, `alamat`) VALUES
('hengky', '085', 'wonogiri'),
('irfan', '084', 'wonogiri'),
('julham', '081', 'pekalongan'),
('nopal', '082', 'bontang'),
('syafiq', '085', 'semarang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `merk` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `id_produk` varchar(50) NOT NULL,
  `id_pembeli` varchar(50) NOT NULL,
  `nama_admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`merk`, `size`, `id_produk`, `id_pembeli`, `nama_admin`) VALUES
('KYT NF-R', 'L', '11', 'julham', 'danang'),
('Zeus Z811', 'L', '22', 'nopal', 'laksana'),
('KYT NX-RACE', 'L', '33', 'syafiq', 'danang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rincian`
--

CREATE TABLE `rincian` (
  `id_produk` varchar(20) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_pembeli` varchar(20) NOT NULL,
  `id_rincian` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rincian`
--

INSERT INTO `rincian` (`id_produk`, `nama_admin`, `alamat`, `id_pembeli`, `id_rincian`) VALUES
('11', 'laksana', 'wonogiri', 'julham', '1'),
('22', 'laksana', 'wonogiri', 'hengky', '2'),
('33', 'danang', 'pekalongan', 'julham', '3'),
('22', 'danang', 'pekalongan', 'julham', '4'),
('22', 'laksana', 'wonogiri', 'irfan', '5');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nama_admin`);

--
-- Indeks untuk tabel `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id_gudang`),
  ADD KEY `fk_gudang` (`id_produk`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `fk_admin` (`nama_admin`);

--
-- Indeks untuk tabel `rincian`
--
ALTER TABLE `rincian`
  ADD PRIMARY KEY (`id_rincian`),
  ADD KEY `fk_brg` (`id_produk`),
  ADD KEY `fk_namaadmin` (`nama_admin`),
  ADD KEY `FK_pembeli` (`id_pembeli`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gudang`
--
ALTER TABLE `gudang`
  ADD CONSTRAINT `fk_gudang` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_admin` FOREIGN KEY (`nama_admin`) REFERENCES `admin` (`nama_admin`);

--
-- Ketidakleluasaan untuk tabel `rincian`
--
ALTER TABLE `rincian`
  ADD CONSTRAINT `FK_pembeli` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
