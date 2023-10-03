-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Apr 2023 pada 05.36
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `holy_youthday_register`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `kd_akun` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `role` varchar(30) DEFAULT 'Participant',
  `timestamp` timestamp NULL DEFAULT current_timestamp(),
  `picture` text DEFAULT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(20) DEFAULT NULL,
  `password_reset_key` varchar(255) DEFAULT NULL,
  `telp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`kd_akun`, `username`, `password`, `email`, `role`, `timestamp`, `picture`, `login_session_key`, `email_status`, `password_reset_key`, `telp`) VALUES
(1, 'sekret', '$2y$10$rTN740Xu7Tw6cD3fvrSXVemqGw.Eg2EBITYDFzQcfhXToT844x53O', 'skretariatyouthday@gmail.com', 'Sekret', '2020-01-08 08:49:46', NULL, NULL, NULL, NULL, '0'),
(2, 'raphael', '$2y$10$lUgR8vjvEADOHqMQW5Fl5.HwAZlCA4ZPGp3xBIQhNTRXb56W7s31K', 'rafaelnugraha@gmail.com', 'Administrator', '2020-01-08 08:51:04', NULL, NULL, NULL, NULL, '081234073307'),
(3, 'peserta', '$2y$10$qMr.UEL/q5.sfq775VKc/uL.QSMaOzyd1KDw4qOL5hSYhMyAVOwQa', 'peserta@youthday.holytrinitycarmel.com', 'Participant', '2020-01-08 08:53:33', NULL, NULL, NULL, NULL, '0'),
(4, 'jesicabengu', '$2y$10$6uS3oajoWMxFx0FBTzcjUeCMXt1TmR2Z6QyXnlSsQSKWNoPeN/ARa', 'jesicabengu@gmail.com', 'Participant', '2020-01-08 10:04:25', NULL, NULL, NULL, NULL, '082234823471'),
(5, 'YosephineLaura', '$2y$10$S2/sW4akO5SGQ0CrCjqagOaurxdqtK1rAXtpje0/d5OmxmHqT.udS', 'yosephinelaura.yl@gmail.com', 'Participant', '2020-01-08 10:05:32', NULL, NULL, NULL, NULL, '081255491113'),
(6, 'pichiepeach', '$2y$10$6or8KC90oi9BwcvrNzA96OGokUELyFt6AMUkzA65hoiewKwQo6.ve', 'clarissaumbas@gmail.com', 'Participant', '2020-01-08 10:55:36', NULL, NULL, NULL, NULL, '081225544221'),
(7, 'Sheiren Sengkey', '$2y$10$ZbDgB1S4PHn2orGteYS50eGjjMQtNtiv6f6VFeusqttgVMpPusnzO', 'sheirensengkey@gmail.com', 'Participant', '2020-01-08 13:12:15', NULL, NULL, NULL, NULL, '087841961687'),
(8, 'kania', '$2y$10$zgwp6rrGfXDdmBFvXtvBy.djrc2QBI8psSWLlBebS/clKd6cFv4PS', 'kania9449@gmail.com', 'Participant', '2020-01-09 01:33:34', NULL, NULL, NULL, NULL, '081331078887'),
(9, 'stefani depe', '$2y$10$N/wJMiPJhC2dB7VGUgvN4eo2WkZfrFDLrCeM6KsMI6UPhgYsseR92', 'stefanidepe212@gmail.com', 'Participant', '2020-01-09 01:59:26', NULL, NULL, NULL, NULL, '082257169737'),
(10, 'Fernando Harianto', '$2y$10$tKUSNRiOiM9eGzzOMD.7reeysZTrkcFc9Nx4anNjqOKfLHQRGLvYS', 'fernandotitiharianto@gmail.com', 'Participant', '2020-02-03 15:22:33', NULL, NULL, NULL, NULL, '082233380003'),
(11, 'Cecilia Faustin', '$2y$10$RPk.ym2iPhOvJLukchI3Cuo594W84toyOTvi8jcFk7ifRzZ0.sZOe', 'ceciliafs.alice@gmail.com', 'participant', '2020-02-04 08:38:45', 'participant', NULL, NULL, 'mnwiftoes1dj', '089639744647'),
(12, 'test 4', '$2y$10$9ItEnMjCAv.Xc2ecr17kxO4N0JnpJomWMvkp2CtJgmbtEUedNp3F6', 'root@hol.com', 'Participant', '2020-02-04 08:42:17', 'participant', NULL, NULL, '9dt8c4oe5ksp', '012301293012'),
(13, 'Hehehe/', '$2y$10$BLdHq4RrPFFft/dm7Ix5tud10g1UMRREnb2.nzzxjuaWSKfoUOq.m', 'natasya@gmail.comg', 'Participant', '2020-02-04 08:43:07', NULL, NULL, NULL, NULL, '081234632663uj'),
(14, 'stanley99', '$2y$10$H.o2iNUpp./27zoFVxW31uiNOo10seZgPKR6cbXcLVRuTac5AvDSu', 'noth', 'Participant', '2020-02-04 08:45:19', 'participant', NULL, NULL, NULL, '019321912390'),
(15, 'test', '$2y$10$Knddc0ux7yEo2rVU/rvqouDvwcubMggfsOC8C8rHHbuhjdZGLF4he', 'ada@a.com', 'Participant', '2020-02-04 09:01:56', NULL, NULL, NULL, NULL, '-------'),
(16, 'nyotogun08', '$2y$10$XwUJNn3EIWlMIt7v5TABDOQXyA2rG1SZyvQZT2Gw0LrEpVQRkl1wC', 'adis@agis.adi', 'Participant', '2020-02-04 09:37:42', NULL, NULL, NULL, NULL, '000000000000000000'),
(17, 'Dewiyemima', '$2y$10$n9imr7hCSW7Y1eWAGxi0q.y7VAyRsgFLS3cGzGNwxMAsYOorB4Nse', 'dewiyemima@gmail.com', 'Participant', '2020-02-04 11:47:16', NULL, NULL, NULL, NULL, '089658943307'),
(18, 'TEST 5', '$2y$10$3xsFGybRCgX2G2tM5vjBXejkI3LxuDWDaqcUDGL5zTqRe0jnWCO16', 'NOTTT', 'Participant', '2020-02-05 06:29:19', NULL, NULL, NULL, NULL, '091203120984'),
(19, 'sheirentest', '$2y$10$EZoNUXQpekWQmNGyQg7Nye9QYxxNQtfytxv0lC2aHv.Ldl8ZmzvwC', 'shesterandco@gmail.com', 'Participant', '2020-02-07 09:09:05', NULL, NULL, NULL, NULL, '087841961687'),
(20, 'karmelindo', '$2y$10$SioCL.K2UnvtjFcOlFMxHeEQisWRr8LP3noSuJm5WhEeYLCBe.8VG', 'karmelindo@gmail.com', 'Participant', '2020-02-11 04:53:31', NULL, NULL, NULL, NULL, '0341552810'),
(21, 'okelho', '$2y$10$qJc6FZhbJZW2qrutV9DmOOIIKeofXLG4btw0RVqrfYwzG7EENwOSu', 'oke@gmail.com', 'Administrator', '2020-02-11 04:54:27', NULL, NULL, NULL, NULL, '0341552810'),
(22, 'testes', '$2y$10$UJo7naMIrpnKTBG5FKM/aeSbbPpAS.aIc.ra1ZpwvluWFOtzGqiW.', 'test@gmail.com', 'Participant', '2020-02-11 14:35:45', NULL, NULL, NULL, NULL, '0341552810'),
(23, 'inspizo', '$2y$10$8DEMRPjgike5flojui.Sze.YoZvjekzcLB59H/qYVozPNaSahksmi', 'inspizo.id@gmail.com', 'Participant', '2023-04-03 03:28:14', NULL, NULL, NULL, NULL, '085155100100');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailbca`
--

CREATE TABLE `detailbca` (
  `id` int(11) NOT NULL DEFAULT 0,
  `tgl` varchar(10) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `mutasi` varchar(20) DEFAULT NULL,
  `mkode` varchar(10) DEFAULT NULL,
  `userbca` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detailbca`
--

INSERT INTO `detailbca` (`id`, `tgl`, `ket`, `mutasi`, `mkode`, `userbca`) VALUES
(9, '17/01', 'BIAYA ADM 0000', '5000.00', 'DB', 'raphaeln9220'),
(10, '30/01', 'TRSF E-BANKING CR 01/30 95031 KOPI BENGU JESICA JESICA FELICIA BEN 0000', '23000.00', 'CR', 'raphaeln9220'),
(11, '31/01', 'BUNGA 0000', '138.11', 'CR', 'raphaeln9220'),
(0, '17/01', 'BIAYA ADM 0000', '5000.00', 'DB', 'raphaeln9220'),
(0, '30/01', 'TRSF E-BANKING CR 01/30 95031 KOPI BENGU JESICA JESICA FELICIA BEN 0000', '23000.00', 'CR', 'raphaeln9220'),
(0, '31/01', 'BUNGA 0000', '138.11', 'CR', 'raphaeln9220');

-- --------------------------------------------------------

--
-- Struktur dari tabel `headerbca`
--

CREATE TABLE `headerbca` (
  `norek` varchar(15) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `tgl` varchar(50) DEFAULT NULL,
  `muang` varchar(5) DEFAULT NULL,
  `saldo` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `headerbca`
--

INSERT INTO `headerbca` (`norek`, `nama`, `tgl`, `muang`, `saldo`) VALUES
('4400103238', 'raphaeln9220', '2020/01/12-2020/02/11', 'IDR', '1,639,508.58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `kd_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `kuota_total` int(11) DEFAULT NULL,
  `kuota_terisi` int(11) DEFAULT NULL,
  `kuota_tersedia` int(11) DEFAULT NULL,
  `kd_akun` int(11) NOT NULL,
  `active` varchar(20) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`kd_kamar`, `nama_kamar`, `jenis_kelamin`, `kuota_total`, `kuota_terisi`, `kuota_tersedia`, `kd_akun`, `active`) VALUES
(1, 'Yerusalem 1', 'Male', 8, 0, 8, 2, 'active');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kd_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `kd_akun` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelompok`
--

CREATE TABLE `kelompok` (
  `kd_kelompok` int(11) NOT NULL,
  `nama_kelompok` varchar(255) DEFAULT NULL,
  `kuota_total` int(11) DEFAULT NULL,
  `kuota_terisi` int(11) DEFAULT NULL,
  `kuota_tersedia` int(11) DEFAULT NULL,
  `kd_akun` int(11) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id` int(11) NOT NULL,
  `userbca` varchar(15) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `jml1` int(11) DEFAULT 0,
  `jml2` int(11) DEFAULT 0,
  `pmutasi` int(11) DEFAULT 29,
  `email` varchar(25) DEFAULT NULL,
  `refresh` int(11) DEFAULT 60
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id`, `userbca`, `password`, `jml1`, `jml2`, `pmutasi`, `email`, `refresh`) VALUES
(1, 'raphaeln9220', '110187', 6, 6, 29, 'rafaelnugraha@gmail.com', 60);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_acara`
--

CREATE TABLE `paket_acara` (
  `kd_paket_acara` int(11) NOT NULL,
  `paket_acara` varchar(50) DEFAULT NULL,
  `kuota_paket_acara` int(11) DEFAULT NULL,
  `harga_paket_acara` int(11) DEFAULT 0,
  `deskripsi_paket_acara` text DEFAULT NULL,
  `tgl_mulai_daftar` date DEFAULT NULL,
  `tgl_selesai_daftar` date DEFAULT NULL,
  `tgl_mulai_acara` datetime DEFAULT NULL,
  `tgl_selesai_acara` datetime DEFAULT NULL,
  `kd_akun` int(11) NOT NULL,
  `status` varchar(20) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `paket_acara`
--

INSERT INTO `paket_acara` (`kd_paket_acara`, `paket_acara`, `kuota_paket_acara`, `harga_paket_acara`, `deskripsi_paket_acara`, `tgl_mulai_daftar`, `tgl_selesai_daftar`, `tgl_mulai_acara`, `tgl_selesai_acara`, `kd_akun`, `status`) VALUES
(1, 'KTM Youthday 2020', 0, 350000, NULL, '2020-02-10', '2020-05-31', '2020-08-20 16:00:00', '2020-08-23 12:00:00', 0, 'active'),
(2, 'KTM Youthday 2020', 0, 500000, NULL, '2020-06-01', '2024-08-08', '2020-08-20 16:00:00', '2020-08-23 12:00:00', 0, 'active');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `kd_peserta` int(11) NOT NULL,
  `paket_acara` varchar(50) DEFAULT NULL,
  `harga_paket_acara` int(11) DEFAULT 0,
  `kd_akun` int(11) DEFAULT NULL,
  `nama_akun` varchar(50) DEFAULT NULL,
  `kd_transaksi` int(11) DEFAULT NULL,
  `kode_booking` varchar(5) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `asal_sel_komunitas` varchar(50) DEFAULT NULL,
  `asal_kota_kab` varchar(50) DEFAULT NULL,
  `asal_negara` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `transport_pergi` varchar(100) DEFAULT NULL,
  `harga_transport_pergi` int(11) DEFAULT 0,
  `transport_pulang` varchar(100) DEFAULT NULL,
  `harga_transport_pulang` int(11) DEFAULT 0,
  `sub_total` int(11) DEFAULT 0,
  `konfirmasi_transfer` varchar(20) DEFAULT 'none',
  `verifikasi_lunas` varchar(20) DEFAULT 'none',
  `alergi_makanan` text DEFAULT NULL,
  `catatan` text DEFAULT NULL,
  `kehadiran` varchar(50) NOT NULL DEFAULT 'none',
  `timestamp` timestamp NULL DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT 'active',
  `kd_kamar` int(11) DEFAULT 0,
  `kd_kelompok` int(11) DEFAULT 0,
  `kd_kelas` int(11) DEFAULT 0,
  `nama_panggilan` varchar(20) DEFAULT NULL,
  `riwayat_kesehatan` text DEFAULT NULL,
  `transport_catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`kd_peserta`, `paket_acara`, `harga_paket_acara`, `kd_akun`, `nama_akun`, `kd_transaksi`, `kode_booking`, `nama_lengkap`, `email`, `telp`, `asal_sel_komunitas`, `asal_kota_kab`, `asal_negara`, `tgl_lahir`, `jenis_kelamin`, `transport_pergi`, `harga_transport_pergi`, `transport_pulang`, `harga_transport_pulang`, `sub_total`, `konfirmasi_transfer`, `verifikasi_lunas`, `alergi_makanan`, `catatan`, `kehadiran`, `timestamp`, `status`, `kd_kamar`, `kd_kelompok`, `kd_kelas`, `nama_panggilan`, `riwayat_kesehatan`, `transport_catatan`) VALUES
(20, 'KTM Youthday 2020', 350000, 3, 'peserta', 24, 'LHYM6', 'Raphael Nugraha Wijayadi', 'rafaelnugraha@gmail.com', '081234073307', 'Gabriel', 'Malang', 'Indonesia', '1995-06-21', 'Male', 'SUB', 60000, 'SUB', 90000, 500000, 'Confirmed', 'none', NULL, NULL, 'none', '2020-02-10 05:24:47', 'active', 0, 0, 0, 'Raphael', NULL, NULL),
(21, 'KTM Youthday 2020', 350000, 3, 'peserta', 25, 'DN5QY', 'sdaf', 'asdf@ggg.com', 'sdaf3dasfasd', 'Gabriel', 'Malang', 'Indonesia', '1995-06-21', 'Male', 'SUB', 90000, 'MLG', 60000, 500000, 'Confirmed', 'none', 'asdf', NULL, 'none', '2020-02-10 08:29:04', 'active', 0, 0, 0, 'dasf', 'asdf', 'sdaf'),
(22, 'KTM Youthday 2020', 0, 3, 'peserta', 28, 'KBV73', 'sdsdfasdf', 'elboonvictory@gmail.com', '0341552810', 'sdaf', 'Malang', 'Indonesia', '1995-06-22', 'Male', 'MLG', 0, 'MLG', 0, 0, 'Confirmed', 'none', NULL, NULL, 'none', '2020-02-11 02:26:19', 'active', 0, 0, 0, 'asdf', NULL, 'sdfa'),
(23, 'KTM Youthday 2020', 0, 3, 'peserta', 28, 'KBV73', 'sdsdfasdf', 'elboonvictory@gmail.com', '0341552810', 'sdaf', 'Malang', 'Indonesia', '1995-06-22', 'Male', 'MLG', 0, 'MLG', 0, 0, 'Confirmed', 'none', NULL, NULL, 'none', '2020-02-11 02:28:08', 'active', 0, 0, 0, 'asdf', NULL, 'sdfa'),
(24, 'KTM Youthday 2020', 350000, 3, 'peserta', 28, 'KBV73', 'sdsdfasdf', 'elboonvictory@gmail.com', '0341552810', 'sdaf', 'Malang', 'Indonesia', '1995-06-22', 'Male', 'MLG', 40000, 'MLG', 40000, 430000, 'Confirmed', 'none', NULL, NULL, 'none', '2020-02-11 02:28:57', 'active', 0, 0, 0, 'asdf', NULL, 'sdfa'),
(25, 'KTM Youthday 2020', 350000, 3, 'peserta', 28, 'KBV73', 'sdsdfasdfer', 'elboonvictory@gmail.com', '0341552810', 'sdafsdg', 'Malang', 'Indonesia', '1995-06-22', 'Male', 'MLG', 50000, 'MLG', 50000, 450000, 'Confirmed', 'none', NULL, NULL, 'none', '2020-02-11 02:29:35', 'active', 0, 0, 0, 'asdfdfsg', NULL, 'sdfa'),
(26, 'KTM Youthday 2020', 350000, 2, 'raphael', 29, 'JODSK', 'Raphael Nugraha Wijayadi', 'elboongracevictory@gmail.com', '081234073307', 'asdf', 'Malang', 'Indonesia', '1995-06-22', 'Male', 'SUB', 75000, 'SUB', 75000, 500000, 'Confirmed', 'none', NULL, NULL, 'none', '2020-02-11 09:39:20', 'active', 0, 0, 0, 'Raphael', NULL, NULL),
(27, 'KTM Youthday 2020', 350000, 2, 'raphael', 30, 'QY8IH', 'Raphael Nugraha Wijayadi', 'karmelindo.website@aaaa.com', '081234073307', 'asf', 'asgasd', 'Indonesia', '1995-06-22', 'Male', 'MLG', 60000, 'SUB', 90000, 500000, 'none', 'none', NULL, NULL, 'none', '2020-02-11 09:49:20', 'active', 0, 0, 0, 'Raphael', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmpdata`
--

CREATE TABLE `tmpdata` (
  `id` int(11) NOT NULL DEFAULT 0,
  `tgl` varchar(10) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `mutasi` varchar(20) DEFAULT NULL,
  `mkode` varchar(10) DEFAULT NULL,
  `userbca` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tmpdata`
--

INSERT INTO `tmpdata` (`id`, `tgl`, `ket`, `mutasi`, `mkode`, `userbca`) VALUES
(0, '17/01', 'BIAYA ADM 0000', '5000.00', 'DB', 'raphaeln9220'),
(0, '30/01', 'TRSF E-BANKING CR 01/30 95031 KOPI BENGU JESICA JESICA FELICIA BEN 0000', '23000.00', 'CR', 'raphaeln9220'),
(0, '31/01', 'BUNGA 0000', '138.11', 'CR', 'raphaeln9220');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_detailbca`
--

CREATE TABLE `tmp_detailbca` (
  `tgl` varchar(10) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `mutasi` varchar(20) DEFAULT NULL,
  `mkode` varchar(10) DEFAULT NULL,
  `userbca` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `kd_transaksi` int(11) NOT NULL,
  `kode_booking` varchar(5) DEFAULT NULL,
  `timestamp_dibuat` datetime DEFAULT NULL,
  `timestamp_diperbarui` timestamp NULL DEFAULT current_timestamp(),
  `kd_akun` int(11) DEFAULT NULL,
  `nama_akun` varchar(50) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT 0,
  `total_transfer` int(11) DEFAULT 0,
  `konfirmasi_transfer` varchar(20) DEFAULT 'none',
  `verfikasi_lunas` varchar(20) DEFAULT 'none',
  `konfirmasi_transfer_upload` text DEFAULT NULL,
  `konfirmasi_transfer_atas_nama` varchar(50) DEFAULT NULL,
  `konfirmasi_transfer_bank` varchar(20) DEFAULT NULL,
  `konfirmasi_transfer_catatan` text DEFAULT NULL,
  `konfirmasi_transfer_tanggal` date NOT NULL,
  `paket_acara` varchar(100) NOT NULL,
  `timestamp_expired` datetime NOT NULL,
  `status` varchar(50) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`kd_transaksi`, `kode_booking`, `timestamp_dibuat`, `timestamp_diperbarui`, `kd_akun`, `nama_akun`, `total_bayar`, `total_transfer`, `konfirmasi_transfer`, `verfikasi_lunas`, `konfirmasi_transfer_upload`, `konfirmasi_transfer_atas_nama`, `konfirmasi_transfer_bank`, `konfirmasi_transfer_catatan`, `konfirmasi_transfer_tanggal`, `paket_acara`, `timestamp_expired`, `status`) VALUES
(29, 'JODSK', '2020-02-11 11:36:33', '2020-02-11 10:36:33', 3, 'peserta', 500000, 500029, 'Confirmed', 'none', '', 'sdaf', 'fasd', 'daf', '2020-02-11', 'KTM Youthday 2020', '2020-02-12 23:36:33', 'active'),
(30, 'QY8IH', '2020-02-11 16:45:11', '2020-02-11 15:45:11', 2, 'raphael', 500000, 500030, 'none', 'none', NULL, NULL, NULL, NULL, '0000-00-00', 'KTM Youthday 2020', '2020-02-13 04:45:11', 'active'),
(31, 'EU1O2', '2023-03-18 04:23:23', '2023-03-18 03:23:23', 20, 'karmelindo', 0, 0, 'none', 'none', NULL, NULL, NULL, NULL, '0000-00-00', 'KTM Youthday 2020', '2023-03-19 16:23:23', 'active'),
(32, 'DQGE1', '2023-03-18 09:54:07', '2023-03-18 08:54:07', 20, 'karmelindo', 0, 0, 'none', 'none', NULL, NULL, NULL, NULL, '0000-00-00', 'KTM Youthday 2020', '2023-03-19 21:54:07', 'expired');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transport_pergi`
--

CREATE TABLE `transport_pergi` (
  `kd_transport_pergi` int(11) NOT NULL,
  `paket_acara` varchar(100) DEFAULT NULL,
  `nama_transport_pergi` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT 0,
  `nama_baru` varchar(50) DEFAULT NULL,
  `kd_akun` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active',
  `diskon_pp` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `transport_pergi`
--

INSERT INTO `transport_pergi` (`kd_transport_pergi`, `paket_acara`, `nama_transport_pergi`, `harga`, `nama_baru`, `kd_akun`, `status`, `diskon_pp`) VALUES
(1, 'KTM Youthday 2020', 'MLG', 60000, '', 0, '', 20000),
(2, 'KTM Youthday 2020', 'SUB', 90000, '', 0, '', 30000),
(4, 'KTM Youthday 2020', 'NO TRANSPORT', 0, '', 0, '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transport_pulang`
--

CREATE TABLE `transport_pulang` (
  `kd_transport_pulang` int(11) NOT NULL,
  `paket_acara` varchar(50) DEFAULT NULL,
  `nama_transport_pulang` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT 0,
  `nama_baru` varchar(50) DEFAULT NULL,
  `kd_akun` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `transport_pulang`
--

INSERT INTO `transport_pulang` (`kd_transport_pulang`, `paket_acara`, `nama_transport_pulang`, `harga`, `nama_baru`, `kd_akun`, `status`) VALUES
(1, 'KTM Youthday 2020', 'MLG', 60000, '', 0, ''),
(2, 'KTM Youthday 2020', 'SUB', 90000, '', 0, ''),
(3, 'KTM Youthday 2020', 'NO TRANSPORT', 0, '', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `verifikasi`
--

CREATE TABLE `verifikasi` (
  `kd_verifikasi` int(11) NOT NULL,
  `kd_transaksi` int(11) NOT NULL,
  `id_mutasi` int(11) NOT NULL,
  `tgl` varchar(10) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `mutasi` varchar(20) NOT NULL,
  `mkode` int(10) NOT NULL,
  `userbca` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `catatan` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`kd_akun`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`kd_kamar`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indeks untuk tabel `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`kd_kelompok`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paket_acara`
--
ALTER TABLE `paket_acara`
  ADD PRIMARY KEY (`kd_paket_acara`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`kd_peserta`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kd_transaksi`);

--
-- Indeks untuk tabel `transport_pergi`
--
ALTER TABLE `transport_pergi`
  ADD PRIMARY KEY (`kd_transport_pergi`);

--
-- Indeks untuk tabel `transport_pulang`
--
ALTER TABLE `transport_pulang`
  ADD PRIMARY KEY (`kd_transport_pulang`);

--
-- Indeks untuk tabel `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD PRIMARY KEY (`kd_verifikasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `kd_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `kd_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `kd_kelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `kd_kelompok` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `paket_acara`
--
ALTER TABLE `paket_acara`
  MODIFY `kd_paket_acara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `kd_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `kd_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `transport_pergi`
--
ALTER TABLE `transport_pergi`
  MODIFY `kd_transport_pergi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `transport_pulang`
--
ALTER TABLE `transport_pulang`
  MODIFY `kd_transport_pulang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `verifikasi`
--
ALTER TABLE `verifikasi`
  MODIFY `kd_verifikasi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
