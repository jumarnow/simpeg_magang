-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2021 pada 06.36
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpeg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_03_155104_create_pegawais_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) UNSIGNED NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tmpt_lahir` varchar(200) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `nohp` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `agama_id` int(3) UNSIGNED NOT NULL,
  `negara_id` int(5) UNSIGNED NOT NULL,
  `gol_darah_id` int(5) UNSIGNED NOT NULL,
  `skeluarga_id` int(5) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama`, `tmpt_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `foto`, `nohp`, `created_at`, `updated_at`, `agama_id`, `negara_id`, `gol_darah_id`, `skeluarga_id`) VALUES
(1, '1235', 'ANDEZ MAULANA', 'SUKABUMI', '1989-11-20', 'L', 'Jl.raya bekasi Raya', NULL, '058989898000', '2018-08-10 13:44:57', '2020-12-08 17:14:52', 1, 1, 1, 1),
(2, '1236', 'WAHYU', 'JAKARTA', '1989-11-22', 'L', 'Jl. Raya Bekasi', '2.jpg', '08598989898', '2018-08-10 13:44:57', '2018-08-10 13:44:57', 1, 2, 3, 2),
(19, '11223322', 'Jumarnow', 'Demak', '1998-11-20', 'L', 'Wonosekar RT 02 RW 13 Karangawen Demak\"', '10_002.jpg', '085886876254', '2018-08-29 06:04:51', '2018-10-09 08:43:12', 1, 1, 1, 1),
(23, '3321067685657', 'Mukhamad Isfaudin', 'Demak', '1997-01-01', 'P', 'Jl Bogor', NULL, '087653564356', '2020-07-26 14:39:06', '2020-07-26 14:39:06', 1, 1, 1, 1),
(24, '655657', 'Umar', 'Demak', '1997-02-02', 'L', 'Jl Sukses Demak', 'tumblr_678ee0f8a0c3c63181c5fdb4fbf4b8cb_a9ea8004_1280.gif', '79873987389', '2020-12-08 17:15:51', '2020-12-08 17:15:51', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawais`
--

CREATE TABLE `pegawais` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id` int(4) NOT NULL,
  `tgl_pelatihan` date NOT NULL,
  `topik_pelatihan` varchar(100) NOT NULL,
  `pegawai_id` int(5) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelatihan`
--

INSERT INTO `pelatihan` (`id`, `tgl_pelatihan`, `topik_pelatihan`, `pegawai_id`) VALUES
(13, '2018-08-29', 'Laravel Dasar', 19),
(5, '2018-08-09', 'Mechine Learning', 1),
(6, '2018-08-09', 'Mechine Learning', 2),
(7, '2018-08-03', 'Learning', 2),
(8, '2018-08-16', 'Micro Controller', 1),
(14, '2018-08-30', 'Android Studio', 19),
(18, '2020-06-22', 'Upload ke Hosting', 19),
(19, '2020-12-09', 'Laravel', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(4) UNSIGNED NOT NULL,
  `pegawai_id` int(11) UNSIGNED NOT NULL,
  `t_pdk` varchar(20) NOT NULL,
  `d_pdk` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `pegawai_id`, `t_pdk`, `d_pdk`) VALUES
(1, 5, '2000 - 2009', 'SD Negeri 2 Palembang'),
(2, 1, '2006 - 2007', 'SMP Negeri 3 Palembang'),
(7, 1, '2003 - 2009', 'SD Negeri 2 Wonosekar 3'),
(6, 1, '2013 -2016', 'SMA FUTUHIYYAH MRANGGEN'),
(8, 19, '2003 - 2004', 'TK Sekar Jati Wonosekar'),
(9, 19, '2004 - 2010', 'SD Negeri Wonosekar 1'),
(10, 19, '2010 -2013', 'MTs. Al - Khoiriyyah Wonosekar'),
(11, 19, '2013 -2016', 'SMA Futuhiyyah Mranggen'),
(16, 2, '2019', 'SMP N Demak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int(4) NOT NULL,
  `pegawai_id` int(11) UNSIGNED NOT NULL,
  `nm_pekerjaan` varchar(50) NOT NULL,
  `d_pekerjaan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `pegawai_id`, `nm_pekerjaan`, `d_pekerjaan`) VALUES
(1, 1, 'Freelance Networking', 'Rancang bangun jaringan untuk warnet.'),
(2, 1, 'Freelance Web Programmer', 'Merancang Aplikasi Berbasis Web untuk keperluan TA/Skripsi mahasiswa'),
(8, 19, 'Freelance Design', 'Membuat Desain Kemasan Mom Made'),
(7, 1, 'Freelance Design', 'Membuat Logo Ambalan JEDE'),
(9, 19, 'Freelance Videography', 'Membuat Video Meeting Akutansi'),
(10, 2, 'Programmer', 'Programmer di SMP Futuhiyyah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agama`
--

CREATE TABLE `tbl_agama` (
  `id_agm` int(5) NOT NULL,
  `nmagama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_agama`
--

INSERT INTO `tbl_agama` (`id_agm`, `nmagama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(4, 'Khatolik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gol_darah`
--

CREATE TABLE `tbl_gol_darah` (
  `id_darah` int(5) NOT NULL,
  `nama_gol_darah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_gol_darah`
--

INSERT INTO `tbl_gol_darah` (`id_darah`, `nama_gol_darah`) VALUES
(1, 'AB'),
(2, 'B'),
(3, 'O');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_negara`
--

CREATE TABLE `tbl_negara` (
  `id_ngr` int(5) NOT NULL,
  `nm_negara` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_negara`
--

INSERT INTO `tbl_negara` (`id_ngr`, `nm_negara`) VALUES
(1, 'Indonesia'),
(2, 'China'),
(3, 'Amerika'),
(4, 'China');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_statusk`
--

CREATE TABLE `tbl_statusk` (
  `kdstatusk` int(5) NOT NULL,
  `nmstatusk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_statusk`
--

INSERT INTO `tbl_statusk` (`kdstatusk`, `nmstatusk`) VALUES
(1, 'Menikah'),
(2, 'Belum Menikah'),
(4, 'Cerai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jumarno', 'admin@gmail.com', '$2y$10$yPXOj6.gfinWTDME1Vqsgu4H5XfOnJc3N01r7udVN9AT390cNrh7W', 'I3C5mIwecZo2pmR4SqG5tgiGnDoP3gr73fFxvBgae5VFVvIk3YqXbqJmJcyU', '2019-01-02 03:19:57', '2019-01-02 03:19:57'),
(2, 'Setyo', 'Setyo@gmail.com', '$2y$10$DCY5CNcrMbxfaPlILbMaeeBH8l7JWZdWGsNh2Ada51OQirUPPO89i', '9RLlpTufAphDSIk7HD2igDcazhAhgaCDNqOmT8vQE0t98Kw0PEEX0q4OmqJw', '2019-01-02 03:50:56', '2019-01-02 03:50:56'),
(3, 'Jumarno', 'jumarno.mw1b@gmail.com', '$2y$10$42fBQKlWvqPgJPovLEigYuE6COydTnL5sDRzexrM2Cc8Kp5fv2yoO', 'yKSgUFClSho0ymzxEwfEtpN2IBuGH1axh9R5mJNZw2ZQD3bMVFud9Igxf36m', '2019-01-31 19:27:24', '2019-01-31 19:27:24'),
(4, 'admin', 'admin@admin.com', '$2y$10$oPjwm0SWv6EUKYidQ6uRquEG42Q7syAknfMLrZ1Z3y/VFJnj6b3za', 'YLm9oXt729phudYwluhse27nDrgbOvDrhIYGP0bIHKLGTlRIHOC7qwB73CYQ', '2021-01-31 02:31:26', '2021-01-31 02:31:26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_agama`
--
ALTER TABLE `tbl_agama`
  ADD PRIMARY KEY (`id_agm`);

--
-- Indeks untuk tabel `tbl_gol_darah`
--
ALTER TABLE `tbl_gol_darah`
  ADD PRIMARY KEY (`id_darah`);

--
-- Indeks untuk tabel `tbl_negara`
--
ALTER TABLE `tbl_negara`
  ADD PRIMARY KEY (`id_ngr`);

--
-- Indeks untuk tabel `tbl_statusk`
--
ALTER TABLE `tbl_statusk`
  ADD PRIMARY KEY (`kdstatusk`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_agama`
--
ALTER TABLE `tbl_agama`
  MODIFY `id_agm` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_gol_darah`
--
ALTER TABLE `tbl_gol_darah`
  MODIFY `id_darah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_negara`
--
ALTER TABLE `tbl_negara`
  MODIFY `id_ngr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_statusk`
--
ALTER TABLE `tbl_statusk`
  MODIFY `kdstatusk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
