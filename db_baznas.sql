-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 31 Agu 2024 pada 16.50
-- Versi server: 10.4.34-MariaDB-log
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_baznas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `nama_album` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `album`
--

INSERT INTO `album` (`id`, `nama_album`) VALUES
(3, 'Album tiga'),
(10, 'Bayar Zakat Bupati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `image` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `title`, `body`, `image`, `author`, `created_at`, `updated_at`) VALUES
(5, 'BAZNAS Purwakarta menghadiri Peringatan HUT WKF', 'Alhamdulillah, Badan Amil Zakat Nasional (BAZNAS) Kabupaten Purwakarta dapat menghadiri Acara Peringatan Hari jadi Wanayasa Kuliner Fair (WKF) yang ke-2 di alun-alun Wanayasa pada hari minggu (28/07). Pada kegiatan ini hadir juga Pj. Bupati Purwakarta Bapak Benni Irwan dan Wakil Ketua III BAZNAS Provinsi Jawa Barat Bapak Ahmad Ridwan. Pada kesempatan ini juga BAZNAS Purwakarta memberikan santunan kepada anak-anak yatim. WKF ini adalah para pelaku UMKM mitra binaan BAZNAS Purwakarta yang tergabung dalam komunitas pedagang WKF. Kami haturkan terimakasih kepada para Muzakki yang telah menitipkan Zakat dan sedekahnya melalui BAZNAS Purwakarta sehingga dapat memberdayakan umat. Semoga Allah SWT membalasnya dengan pahala kebaikan yang berlipat ganda. Aamiin yaa Robbal\'alamin.', '2.jpg', '', '2024-08-27', '2024-08-27'),
(6, 'BAZNAS Purwakarta menandatangani Mou dengan UIN KHAS Jember untuk pelaksanaan PPG', 'Alhamdulillah, Badan Amil Zakat (BAZNAS) Kabupaten Purwakarta menjadi salah satu pengisi acara pada Kegiatan MPLS yang dilaksanakan oleh SMAN 1 Purwakarta pada hari selasa (16/07/2024). Kegiatan MPLS ini merupakan kegiatan yang dilaksanakan dalam rangka mengenalkan lingkungan sekolah kepada para siswa dan siswi Baru. Dengan tema mencetak generasi emas yang tangguh, mandiri dan berbudi pekerti melalui Zakat dan Sedekah. Kegiatan ini dihadiri oleh ketua BAZNAS Kabupaten Purwakarta beserta Wakil Ketua III BAZNAS Purwakarta yang bertempat di Aula SMAN 1 Purwakarta. semoga dengan adanya kegiatan ini dapat menjadikan motivasi kepada para adik-adik siswa SMAN 1 Purwakarta untuk menjadi pribadi yang suka bersedekah dan saling tolong menolong dalam kebaikan', '4.jpg', '', '2024-08-27', '2024-08-27'),
(7, 'Saful di Sunat Lagi di Baznas', 'isi beritajnjncknjx cnx djkkncnsd', '21.jpg', '', '2024-08-28', '2024-08-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_album` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `id_album`) VALUES
(14, 'photo-1628563694622-5a76957fd09c.jpeg', 3),
(15, 'logo-subang.png', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `slide-show`
--

CREATE TABLE `slide-show` (
  `id` varchar(50) NOT NULL,
  `nama_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `slide-show`
--

INSERT INTO `slide-show` (`id`, `nama_file`) VALUES
('1725114552', 'slide1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$gZbJz404IbYU8d2RGo/mo.Y4UXmu4HUUbVnjxGzFzDbOq1DADe1tO', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slide-show`
--
ALTER TABLE `slide-show`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
