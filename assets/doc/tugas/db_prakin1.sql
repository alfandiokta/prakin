-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2022 pada 07.18
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
-- Database: `db_prakin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_absensi`
--

CREATE TABLE `tbl_absensi` (
  `id` int(11) NOT NULL,
  `nimnis` varchar(20) CHARACTER SET latin1 NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(25) CHARACTER SET latin1 NOT NULL,
  `aktivitas` varchar(30) CHARACTER SET latin1 NOT NULL,
  `uraian_aktivitas` varchar(256) CHARACTER SET latin1 NOT NULL,
  `foto_aktivitas` varchar(256) CHARACTER SET latin1 NOT NULL,
  `foto_ttd` varchar(256) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_absensi`
--

INSERT INTO `tbl_absensi` (`id`, `nimnis`, `tanggal`, `jam`, `aktivitas`, `uraian_aktivitas`, `foto_aktivitas`, `foto_ttd`) VALUES
(1, '12345678', '2021-12-01', '', 'Shooting Prosedur', 'melakuakan ', '', ''),
(2, '12345678', '2021-11-30', '', 'Belajar tutorial', 'grrr', '', ''),
(3, '12345678', '2021-12-01', '', 'makan', 'makana nasi', '', ''),
(4, '12345678', '0000-00-00', '', '', 'makan mie', '', ''),
(5, '12345678', '0000-00-00', '', '', 'mimik susus', '', ''),
(6, '12345678', '0000-00-00', '', '', 'mimik ssu ', '', ''),
(7, '12345678', '0000-00-00', '', '', 'makann susus', '', ''),
(8, 'A24', '0000-00-00', '', 'makann sapi', 'makan sapi', '', ''),
(9, '24', '0000-00-00', '', 'belajarr makan', 'makan bersamaa', '', ''),
(10, '12345678', '0000-00-00', '10:40 WIB', 'makan duren', 'makan duren dikebon', '', ''),
(11, '12345678', '0000-00-00', '12:58 WIB', 'Minumm air', 'Minum air putih', '', ''),
(12, '12345678', '0000-00-00', '12:58 WIB', 'makan ayam', 'makan ayam goreng', '', ''),
(13, '12345678', '0000-00-00', '13:06 WIB', 'makan kerupuk', 'makankerupuk putih', '', ''),
(14, '12345678', '0000-00-00', '13:41 WIB', 'fffww', 'fss', '(Peserta)_VirtualBackground_Di', '(Dekanat)_VirtualBackground_Di'),
(15, 'A24', '0000-00-00', '13:50 WIB', 'wfe', 'ewfw', 'IMG_20210919_092322.jpg', 'IMG_20210919_092827.jpg'),
(16, '12345678', '0000-00-00', '13:55 WIB', 'minum airr', 'airrr putih', '(Peserta)_VirtualBackground_Di', 'WhatsApp Image 2021-08-31 at 1'),
(17, '12345678', '0000-00-00', '13:56 WIB', 'cobaa 1', 'cobaa', 'IMG_20210919_092356.jpg', ''),
(18, '12345678', '0000-00-00', '13:57 WIB', 'cobaa 2', 'coba 22', 'WhatsApp_Image_2021-08-31_at_1', ''),
(19, 'A24', '0000-00-00', '14:15 WIB', 'ikann', 'makann ikan', '(Peserta)_VirtualBackground_Di', ''),
(20, '12345678', '0000-00-00', '13:16 WIB', 'Makann kacang', 'makan kacangg merah', '02.png', '_2caqzqUu1TkshLelXbmS9ICmfXqUj'),
(21, 'A24', '0000-00-00', '13:34 WIB', 'sdsdsfefe', 'fwdwd', '70f27e15f568d99829829b109c8e0c', '101.png'),
(22, 'A24', '0000-00-00', '13:35 WIB', 'Foto Makan', 'makann manakanan', 'donasi.png', 'algeometi-pake-kaki.jpg'),
(23, '12345678', '0000-00-00', '11:43 WIB', 'Makan', 'Makann SApii', 'abstract-circular-bokeh-backgr', 'ttd_arjun.jpg'),
(24, '12345678', '0000-00-00', '11:46 WIB', 'Makan', 'Makan NAsi', 'IMG_20180325_143531.jpg', 'ttd_me.png'),
(25, '12345678', '0000-00-00', '13:37 WIB', 'Makan', 'Makan nasi sayur asem sama gereh dan juga minum air putih di', 'bokeh_background_by_maisykuv-d4m8wd21.png', 'ttd_arjun1.jpg'),
(26, '12345678', '0000-00-00', '13:41 WIB', 'Makan', 'Makan nasi sayur asem sama gereh dan juga minum air putih di kantin BPMPK ditemani dengan gerimis yang ada', 'abstract-circular-bokeh-background-of-christmaslight-nattapon-wongwean1.jpg', 'ttd_arjun2.jpg'),
(27, 'D23', '0000-00-00', '09:33 WIB', 'Produksi Video Testimoni', 'Membuat video testimoni dari pengguna Edustore yang akan digunakan untuk konten pada Youtube Official BPMPK', 'IMG20211029143118.jpg', 'ttd_arjun3.jpg'),
(28, 'D23', '0000-00-00', '09:37 WIB', 'Penyuluhan Recording Audio', 'Penyuluhan mengenai bagaimana recording yang baik dan benar dan juga melakukan editing audio via aplikasi adobe audition', 'IMG_20211006_102740.jpg', 'ttd_arjun4.jpg'),
(29, '12345678', '0000-00-00', '19:56 WIB', 'Membuat Database', 'DAtabase Prakin', '2019_c.jpg', 'ttd_arjun.jpg'),
(30, '12345678', '0000-00-00', '10:59 WIB', 'Makan Nasi Jumatan', 'Makan Nasi Jumatan di Kantin', '', ''),
(31, '12345678', '0000-00-00', '11:04 WIB', 'Makan', 'Makan Nasi Jumatan Di Kantin', '', ''),
(32, '12345678', '0000-00-00', '11:11 WIB', 'Makan', 'Makan NAsi', '', ''),
(33, '12345678', '2022-01-14', '11:12 WIB', 'Makan', 'Makan makan', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dokumen`
--

CREATE TABLE `tbl_dokumen` (
  `id` int(11) NOT NULL,
  `nimnis_doc` varchar(128) CHARACTER SET latin1 NOT NULL,
  `surat` varchar(128) CHARACTER SET latin1 NOT NULL,
  `fotodiri` varchar(128) CHARACTER SET latin1 NOT NULL,
  `portofolio` varchar(128) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_dokumen`
--

INSERT INTO `tbl_dokumen` (`id`, `nimnis_doc`, `surat`, `fotodiri`, `portofolio`) VALUES
(15, '12345678', 'Projek_UAS_Keamanan_Sistem_Industri.pdf', '_DSC1838.jpg', '23431ab5b080572d62eb6d1304cd50b5.PDF'),
(19, 'a44', 'bokeh_background_by_maisykuv-d4m8wd2.png', '', ''),
(20, 'D23', 'Projek_UAS_Keamanan_Sistem_Industri1.pdf', 'default.jpg', ''),
(21, 'A22.2019.02733', '', 'default.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_role`
--

CREATE TABLE `tbl_role` (
  `role` int(10) NOT NULL,
  `ket` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_role`
--

INSERT INTO `tbl_role` (`role`, `ket`) VALUES
(1, 'Administrator'),
(2, 'User'),
(3, 'Pendaftar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_testimoni`
--

CREATE TABLE `tbl_testimoni` (
  `id` int(11) NOT NULL,
  `nimnis_testi` varchar(30) CHARACTER SET latin1 NOT NULL,
  `tanggal` varchar(30) CHARACTER SET latin1 NOT NULL,
  `testimoni` varchar(256) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_testimoni`
--

INSERT INTO `tbl_testimoni` (`id`, `nimnis_testi`, `tanggal`, `testimoni`) VALUES
(2, 'A24.78', '07 January 2022 ', 'Magang di bpmpk memberikan pengalaman yang menakjubkan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tugas`
--

CREATE TABLE `tbl_tugas` (
  `id` int(11) NOT NULL,
  `nimnis_tgs` varchar(128) CHARACTER SET latin1 NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(256) CHARACTER SET latin1 NOT NULL,
  `file_tgs` varchar(256) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tugas`
--

INSERT INTO `tbl_tugas` (`id`, `nimnis_tgs`, `tanggal`, `deskripsi`, `file_tgs`) VALUES
(1, '12345678', '0000-00-00', 'Menggambar Sapi', 'SR_KKI__A22_2019_02790_0014.png'),
(2, '12345678', '0000-00-00', 'cobaa', 'WhatsApp Audio 2021-12-07 at 22_56_35.mpeg'),
(3, 'A24', '0000-00-00', '', 'LPJ_HMDTI3.pdf'),
(4, 'A24', '0000-00-00', '', 'ME18LOMP20.zip'),
(5, 'A24', '0000-00-00', 'coba file zip', 'ramadan-iftar-background_jpg.zip'),
(6, 'A24', '0000-00-00', '', 'siselo_(1).rar'),
(7, 'A24', '0000-00-00', '', 'Proposal_LMS_.docx'),
(8, 'A24', '0000-00-00', '', 'Daftar_Prsh_Kerjasama_KKI.xlsx'),
(9, '12345678', '0000-00-00', 'Logo', 'Lambang_NK.psd'),
(10, 'A24.78', '0000-00-00', 'Membuat cover book dari aplikasi prakin', 'background_prakin.ai'),
(11, '12345678', '0000-00-00', 'Database Prakin', 'db_prakin.sql'),
(12, '12345678', '2022-01-14', '', 'lms_siselo.sql');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(25) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nimnis` varchar(25) CHARACTER SET latin1 NOT NULL,
  `email` varchar(35) CHARACTER SET latin1 NOT NULL,
  `password` varchar(256) CHARACTER SET latin1 NOT NULL,
  `instansi` varchar(128) CHARACTER SET latin1 NOT NULL,
  `alamat_in` varchar(128) CHARACTER SET latin1 NOT NULL,
  `alamat_mg` varchar(128) CHARACTER SET latin1 NOT NULL,
  `wa` varchar(15) CHARACTER SET latin1 NOT NULL,
  `keahlian` varchar(50) CHARACTER SET latin1 NOT NULL,
  `role_id` int(25) NOT NULL,
  `is_active` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `nimnis`, `email`, `password`, `instansi`, `alamat_in`, `alamat_mg`, `wa`, `keahlian`, `role_id`, `is_active`) VALUES
(3, 'Alfandi Okta Dwiputra', '12345678', 'fandi@mail.com', '$2y$10$XhbtOfZjFk09WbaAFUcxleH5Z5HokMMEZCqKqFjtCIvNrlCR4s4o2', 'UDINUS', 'Jl.Imam Bonjol', 'Semarang', '6285800481838', 'Desain', 2, 1),
(4, 'Tama', '2313', 'tama@mail.com', '$2y$10$Ba77K1BE1dQOANL.BV.ZdOVZ7VSya26c72Ax6Bqbnje3./Mmv3/gW', 'Udinus ', '', '', '', '', 1, 1),
(5, 'budi', '090', 'budi@mail.com', '$2y$10$28YmAroJdr0jbUwbhz5h3egymim6QqtykBdPfTP2I6WhGnyvJbCdi', 'SMKN2', '', '', '088', '', 5, 1),
(7, 'Yusup', 'A11.2211', 'yusup@mail.com', '$2y$10$1z4wrMIdh1hSRlVOUiweeOUmQr8xRe8/h4xdFwrhNmCHzzwIt8zPa', 'UDN', '', '', '6287825814146', '', 6, 1),
(9, 'Riski', 'A24.78', 'riski@mail.com', '$2y$10$X2zLIbZFAQoEhp6isaOBJ..5FmoxHRxT5TDggx9ZrHeD7idv3S0EO', 'UDN', 'Semarang', 'Semarang', '021', '', 4, 1),
(12, 'bagus', 'aa333', 'bagus@mail.com', '$2y$10$11zxz67LnvFbY7QAN7iBMOjCwyVacSzM67q3rPcvO04ATI7oVh33C', 'UDNN', '', '', '', '', 6, 1),
(13, 'chalil', 'a44', 'chalil@mail.com', '$2y$10$rp2vywTRb2huh.R52b3KIeJPwYCBPuglBJERRDzHTDSze7v/maCQa', 'udnn', '', 'Semarang', '085888', '', 6, 1),
(14, 'Didan', 'D23', 'didan@mail.com', '$2y$10$NEkan4Ag5f5xHTVSUqFHyeIZ83H10WmUcAipNGT6W8EWZBXQr5z5.', 'UDN', '', '', '', '', 3, 1),
(17, 'andi', '', 'andi@mail.com', '$2y$10$AouPQjZLxnZwp0n3DV7AA.9xEfbPmmjCcF/8CqCPBTwc.c7UYu0Zm', '', '', '', '', '', 5, 0),
(18, 'Muhammad Bagus Chalil Akbar', 'A22.2019.02733', 'muhammadbagus@gmail.com', '$2y$10$6SjZJQZuXyPumTAmBZStoua9RxosROLnpEBmpRNvFHTfKTEbqrsNG', 'Universitas Dian Nuswanto', '', '', '', '', 4, 1),
(20, 'Faisal', 'a24.2020', 'faisal@mail.com', '$2y$10$o7E1xPtqLvYQfJAESjafzO5Fd8JwGrX7jN9rXEg/0QMkAVVYHs9Vm', 'UDN', '', '', '', '', 5, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 2, 3),
(4, 3, 2),
(6, 4, 2),
(7, 4, 4),
(8, 1, 5),
(9, 5, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Dokumentasi'),
(5, 'Kelola');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) CHARACTER SET latin1 NOT NULL,
  `url` varchar(128) CHARACTER SET latin1 NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'bi bi-grid-fill', 1),
(2, 1, 'Pendaftar', 'pendaftar', 'bi-person-plus-fill', 1),
(3, 1, 'Peserta Magang', 'magang', 'bi bi-person-badge', 1),
(4, 1, 'Catatan Aktivitas', 'absen_admin', 'bi bi-calendar-check-fill', 1),
(5, 1, 'Tugas', 'tugas_admin', 'bi-bar-chart-fill', 1),
(6, 2, 'Dashboard', 'user', 'bi bi-grid-fill', 1),
(7, 2, 'Profil', 'profil', 'bi-person-badge-fill', 1),
(8, 3, 'Catatan Aktivitas', 'absensi', 'bi-file-earmark-medical-fill', 1),
(9, 3, 'Tugas', 'tugas', 'bi-pen-fill', 1),
(10, 3, 'Riwayat', 'riwayat', 'bi-bar-chart-fill', 1),
(13, 1, 'Magang Selesai', 'magang_selesai', 'bi-person-check-fill', 1),
(14, 4, 'Testimoni', 'user/testimoni', 'bi bi-chat-left-text-fill', 1),
(15, 4, 'Tugas', 'tugas/selesai', 'bi-pen-fill', 1),
(16, 4, 'Riwayat', 'riwayat', 'bi-bar-chart-fill', 1),
(17, 5, 'Pengguna', 'kelola_pengguna', 'bi bi-gear-fill', 1),
(18, 5, 'Testimoni', 'admin/testimoni', 'bi bi-chat-left-text-fill', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_tugas`
--
ALTER TABLE `tbl_tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nimnis` (`nimnis`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tbl_dokumen`
--
ALTER TABLE `tbl_dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_tugas`
--
ALTER TABLE `tbl_tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
