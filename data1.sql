-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Mar 2024 pada 15.43
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data1`
--

CREATE TABLE `data1` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `whatsapp` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data1`
--

INSERT INTO `data1` (`id`, `nama`, `email`, `whatsapp`, `alamat`) VALUES
(1, 'aku', 'admin@admin.com', '087673573543', 'askot'),
(2, 'akuisisisi', 'jajdsh@jahda.co.id', '0987663422', 'alkamp'),
(3, 'kriteria mesin', 'admin@example.com', '087673573543', 'asas'),
(4, 'Konsumsi BBM', 'azmiriyadinofficial@gmail.com', '0987663422', 'asasas'),
(5, 'Konsumsi BBM', 'azmiriyadinofficial@gmail.com', '0987663422', 'asasas'),
(6, 'jagung', 'bakar@gmail.com', '081727363743', 'jagung'),
(7, 'jagung', 'bakar@gmail.com', '081727363743', 'jagung'),
(8, 'jagung', 'bakar@gmail.com', '081727363743', 'jagung'),
(9, 'azmiiii', 'azmiii@gmail.com', '09937283246374', 'jmbg'),
(10, 'rizka aniati ditaleni', 'ditaleni@gmail.com', '08876438643', 'jmbg'),
(11, 'fitrah', 'fitrah@gmail.com', '0875746543', 'ya mana sayatau'),
(12, 'mas fitrah', 'masmassuhu@gmail.com', '08776544333', 'aku ga kepo orangnya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data1`
--
ALTER TABLE `data1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data1`
--
ALTER TABLE `data1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
