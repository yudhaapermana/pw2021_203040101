-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Apr 2021 pada 02.44
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040101`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sepatu`
--

CREATE TABLE `sepatu` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sepatu`
--

INSERT INTO `sepatu` (`id`, `gambar`, `nama`, `jenis`, `brand`, `harga`) VALUES
(1, 'sepatu1.png', 'PREDATOR 20.3', 'Indoor', 'Adidas', 'Rp.900.000'),
(2, 'sepatu2.png', 'GOLETTO VII', 'Indoor', 'Adidas', 'Rp.600.000'),
(3, 'sepatu3.png', 'GOLETTO VII', 'Outdoor', 'Adidas', 'Rp.500.000'),
(4, 'sepatu4.png', 'COPA 20.3', 'Outdoor', 'Adidas', 'Rp.400.000'),
(5, 'sepatu5.png', 'NIKE PHANTOM GT CLUB IC', 'Indoor', 'Nke', 'Rp.799.000'),
(6, 'sepatu6.png', 'NIKE PHANTOM SCORPION ACADEMY IC', 'Indoor', 'Nike', 'Rp.1.379.000'),
(7, 'sepatu7.png', 'NIKE MERCURIAL DREAM SPEED SUPERFLY 8 ACADEMY MG', 'Outdoor', 'Nike', 'Rp.1.429.000'),
(8, 'sepatu8.png', 'CATALYST QUIVER FG', 'Outdoor', 'Ortuseight', 'Rp.499.000'),
(9, 'sepatu9.png', 'SWERVO HYDRA ELITE IN-MIDNIGHT', 'Indoor', 'Specs', 'Rp.749.800'),
(10, 'sepatu10.png', 'ACCELERATOR SATU ELITE IN-BLACK/SILVER', 'Indoor', 'Specs', 'Rp.799.800');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sepatu`
--
ALTER TABLE `sepatu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sepatu`
--
ALTER TABLE `sepatu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
