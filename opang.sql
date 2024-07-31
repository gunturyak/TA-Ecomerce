-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 29 Jul 2024 pada 13.31
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `stok_produk` varchar(255) DEFAULT NULL,
  `harga_produk` varchar(255) DEFAULT NULL,
  `deskripsi_produk` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `varian_produk` enum('Original','Balado','Jagung Bakar') DEFAULT NULL,
  `foto_produk` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `stok_produk`, `harga_produk`, `deskripsi_produk`, `varian_produk`, `foto_produk`, `created_at`, `updated_at`) VALUES
(24, 'Opang', '12', '16000', 'Opak udang merupakan makanan yang berasal dari campuran ubi dan udang yang digiling dan di bumbui dengan bahan yang lain,dan memiliki beberapa keunggulan                                   Renyah dan Lezat: Proses pengolahan yang hati-hati memastikan setiap potongan opak memiliki tekstur yang renyah dan rasa udang yang gurih.\r\nBahan Alami: Dibuat dari udang segar dan ubi berkualitas tanpa tambahan pengawet dan pewarna buatan, menjadikannya pilihan camilan yang sehat dan aman.  Kaya Protein: Sumber protein yang baik dari udang, memberikan nilai gizi tambahan di setiap gigitannya. Praktis dan Higienis: Dikemas dalam bungkus yang praktis dan higienis, mudah dibawa ke mana saja dan dinikmati kapan saja. Harga Terjangkau: Dengan harga hanya Rp. 16.000 per bungkus, Opak Udang adalah pilihan camilan yang lezat dan ekonomis.', 'Original', NULL, '2024-07-04 08:33:30', '2024-07-29 01:48:22'),
(26, 'Opang', '100', '16000', 'Opak udang merupakan makanan yang berasal dari campuran ubi dan udang yang digiling dan di bumbui dengan bahan yang lain,dan memiliki beberapa keunggulan                                   Renyah dan Lezat: Proses pengolahan yang hati-hati memastikan setiap potongan opak memiliki tekstur yang renyah dan rasa udang yang gurih.\r\nBahan Alami: Dibuat dari udang segar dan ubi berkualitas tanpa tambahan pengawet dan pewarna buatan, menjadikannya pilihan camilan yang sehat dan aman.  Kaya Protein: Sumber protein yang baik dari udang, memberikan nilai gizi tambahan di setiap gigitannya. Praktis dan Higienis: Dikemas dalam bungkus yang praktis dan higienis, mudah dibawa ke mana saja dan dinikmati kapan saja. Harga Terjangkau: Dengan harga hanya Rp. 16.000 per bungkus, Opak Udang adalah pilihan camilan yang lezat dan ekonomis.', 'Balado', NULL, '2024-07-08 08:20:25', '2024-07-08 09:51:38'),
(27, 'Opang', '100', '16000', 'Opak udang merupakan makanan yang berasal dari campuran ubi dan udang yang digiling dan di bumbui dengan bahan yang lain,dan memiliki beberapa keunggulan                                   Renyah dan Lezat: Proses pengolahan yang hati-hati memastikan setiap potongan opak memiliki tekstur yang renyah dan rasa udang yang gurih.\r\nBahan Alami: Dibuat dari udang segar dan ubi berkualitas tanpa tambahan pengawet dan pewarna buatan, menjadikannya pilihan camilan yang sehat dan aman.  Kaya Protein: Sumber protein yang baik dari udang, memberikan nilai gizi tambahan di setiap gigitannya. Praktis dan Higienis: Dikemas dalam bungkus yang praktis dan higienis, mudah dibawa ke mana saja dan dinikmati kapan saja. Harga Terjangkau: Dengan harga hanya Rp. 16.000 per bungkus, Opak Udang adalah pilihan camilan yang lezat dan ekonomis.', 'Jagung Bakar', NULL, '2024-07-08 09:55:44', '2024-07-08 09:55:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_carousel`
--

CREATE TABLE `produk_carousel` (
  `id` bigint NOT NULL,
  `id_produk` int DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `produk_carousel`
--

INSERT INTO `produk_carousel` (`id`, `id_produk`, `gambar`, `created_at`, `updated_at`) VALUES
(25, 24, 'app/images/gambar/24-1721828887-xaKul.png', '2024-07-24 06:48:09', '2024-07-24 06:48:09'),
(26, 26, 'app/images/gambar/26-1721828901-wdp8D.png', '2024-07-24 06:48:21', '2024-07-24 06:48:21'),
(27, 27, 'app/images/gambar/27-1721828910-qtXF7.png', '2024-07-24 06:48:30', '2024-07-24 06:48:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `foto_profil` varchar(255) DEFAULT NULL,
  `role` enum('Admin','Pembeli') DEFAULT NULL,
  `no_hp` bigint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `username`, `password`, `foto_profil`, `role`, `no_hp`, `created_at`, `updated_at`) VALUES
(3, NULL, 'bayu@gmail.com', 'bayyz', '$2y$12$hkRl/VAGuXBU2tC0/xVsk./is.L4wgR0Dvyyjc57d62kXz3fu4hpy', NULL, 'Pembeli', NULL, '2024-07-22 04:15:54', '2024-07-22 11:20:37'),
(4, 'Guntur Pamungkas', 'guntur@gmail.com', 'guntur', '$2y$12$79nlg1UECCNx0v4Fqn/xdei7FdYOXLHbxWdEXOrslozrOj0Patmxm', NULL, 'Admin', NULL, '2024-07-22 04:27:08', '2024-07-22 11:27:23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk_carousel`
--
ALTER TABLE `produk_carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `produk_carousel`
--
ALTER TABLE `produk_carousel`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
