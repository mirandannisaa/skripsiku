-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Mei 2019 pada 14.03
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olahraga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`) VALUES
(1, 'Kantin / Warung'),
(2, 'Kamar Mandi / Kamar Ganti'),
(4, 'Tempat Parkir Sepeda Motor'),
(5, 'Tempat Parkir Mobil'),
(6, 'Toilet'),
(7, 'Air Hangat'),
(8, 'Shower'),
(9, 'Gazebo / Tempat Duduk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fototempat`
--

CREATE TABLE IF NOT EXISTS `fototempat` (
  `id_foto` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_tempat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fototempat`
--

INSERT INTO `fototempat` (`id_foto`, `foto`, `id_tempat`) VALUES
(1, '1_AC2.jpg', 1),
(2, 'sertifikat.jpeg', 17),
(3, '1_AD1.jpg', 17),
(4, 'B83HT.jpg', 18),
(5, 'da0da07840efea2c60e02bebb98eb873_8Triangles.jpg', 18),
(7, 'pantai-teluk-asmoro-680x382.jpg', 19),
(8, 'Misteri-Sejarah-Wisata-Pantai-Bajul-Mati-Malang.jpg', 19),
(9, 'jm8WoC.jpg', 19),
(10, 'resep-kue-kastengel-aebfe5.jpg', 20),
(11, 'beras.png', 21),
(12, 'tepung.png', 21),
(13, 'gula.png', 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `file_name`, `created`, `modified`) VALUES
(0, '1_AC.jpg', '2019-04-05 05:32:58', '2019-04-05 05:32:58'),
(0, '1_AD.jpg', '2019-04-05 05:33:36', '2019-04-05 05:33:36'),
(0, '1_AC1.jpg', '2019-04-05 05:33:36', '2019-04-05 05:33:36'),
(0, '1_AA.jpg', '2019-04-05 05:33:36', '2019-04-05 05:33:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_olahraga`
--

CREATE TABLE IF NOT EXISTS `jenis_olahraga` (
  `id_jenis` int(11) NOT NULL,
  `nama_olahraga` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_olahraga`
--

INSERT INTO `jenis_olahraga` (`id_jenis`, `nama_olahraga`) VALUES
(2, 'Futsal'),
(3, 'Bulutangkis'),
(4, 'Renang'),
(5, 'Gym'),
(6, 'Jogging');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keterangan`
--

CREATE TABLE IF NOT EXISTS `keterangan` (
  `id_keterangan` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `id_jenis` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keterangan`
--

INSERT INTO `keterangan` (`id_keterangan`, `keterangan`, `id_jenis`) VALUES
(1, 'Lapangan Besar Vynil', 2),
(2, 'Lapangan Kecil Vynil', 2),
(3, 'Lapangan Besar Rumput', 2),
(4, 'Lapangan Kecil Rumput', 2),
(5, 'Lapangan Kecil', 3),
(6, 'Lapangan Besar', 3),
(7, 'Kolam Renang Dewasa', 4),
(8, 'Kolam Renang Anak', 4),
(9, 'Dumbbel', 5),
(10, 'Barbel', 5),
(11, 'Weight Plates', 5),
(12, 'Kettlebells', 5),
(13, 'Medicine Ball', 5),
(14, 'Weighted Bars', 5),
(15, 'Curl Bar', 5),
(16, 'Tricep Bar', 5),
(17, 'Pull Up Bar', 5),
(18, 'Fitnes Bench', 5),
(19, 'Hyper Extension Bench', 5),
(20, 'Sit Up Bench', 5),
(21, 'Swiss Ball', 5),
(22, 'Push Up Grip', 5),
(23, 'Matras', 5),
(24, 'Dip Bar', 5),
(25, 'Abs Crunch Machine', 5),
(26, 'Static Bycycle', 5),
(27, 'Leg Press Machine', 5),
(28, 'Treadmill', 5),
(29, 'Chest Press Machine', 5),
(30, 'Squat Hack Machine', 5),
(31, 'Barbel Machine', 5),
(32, 'Eliptical Machine', 5),
(33, 'Shoulder Press Machine', 5),
(34, 'Bicep Curl Machine', 5),
(35, 'Tricep Machiine', 5),
(36, 'Lapangan Besar', 6),
(37, 'Lapangan Kecil', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempat`
--

CREATE TABLE IF NOT EXISTS `tempat` (
  `id_tempat` int(11) NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `harga` int(20) NOT NULL,
  `hari_buka` varchar(255) NOT NULL,
  `jam_buka` varchar(255) NOT NULL,
  `jam_tutup` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tempat`
--

INSERT INTO `tempat` (`id_tempat`, `nama_tempat`, `alamat`, `kecamatan`, `no_telp`, `harga`, `hari_buka`, `jam_buka`, `jam_tutup`, `latitude`, `longitude`) VALUES
(17, 'Kolam Renang Stadion Gajayana', 'Jl. Tangkuban Perahu, Kauman, Klojen, Kota Malang, Jawa Timur 65119', 'Klojen', '082132349996', 10000, 'Sabtu - Kamis', '06.30', '15.00', '-7.976665', '112.624305'),
(18, 'Zona SM Futsal', 'Jalan Sudimoro Utara, Mojolangu, Lowokwaru, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142', 'Lowokwaru', '0817-534-573', 150000, 'Senin-Minggu', '00.00', '23.59', '-7.932292', '112.62987'),
(19, 'Lapangan Rampal', 'Jl. Lapangan Rampal, Kesatrian, Blimbing, Kota Malang, Jawa Timur 65126', 'Blimbing', '0341999010', 0, 'Senin - Minggu', '00.00', '23.59', '-7.973783', '112.640353'),
(20, 'Kolam Renang Lantamal Malang', 'Kasin, Klojen, Kota Malang, Jawa Timur, 65117', 'Klojen', '', 0, 'Sabtu - Kamis', '08.00', '16.00', '-7.990234', '112.625629'),
(21, 'Araya Family Club House Swimming Pool', 'Jalan Raya Golf Utama No.1, Boro Teronggo, Kota Araya, Pakis, Malang, Jawa Timur 65154', 'Blimbing', '0341414333', 35000, 'Setiap Hari', '05.00', '20.00', '-7.93966', '112.66654');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempatfasilitas`
--

CREATE TABLE IF NOT EXISTS `tempatfasilitas` (
  `id_tempatfasilitas` int(11) NOT NULL,
  `id_fasilitas` int(11) NOT NULL,
  `id_tempat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tempatfasilitas`
--

INSERT INTO `tempatfasilitas` (`id_tempatfasilitas`, `id_fasilitas`, `id_tempat`) VALUES
(2, 6, 12),
(3, 7, 12),
(4, 8, 12),
(5, 1, 13),
(6, 2, 13),
(8, 2, 14),
(9, 6, 14),
(10, 7, 14),
(11, 8, 14),
(12, 4, 14),
(13, 5, 14),
(14, 6, 14),
(15, 2, 15),
(16, 6, 15),
(17, 7, 15),
(18, 2, 16),
(19, 2, 17),
(20, 2, 18),
(21, 6, 18),
(22, 8, 18),
(23, 4, 18),
(24, 5, 18),
(25, 1, 18),
(26, 9, 18),
(27, 6, 19),
(28, 4, 19),
(29, 5, 19),
(30, 9, 19),
(31, 2, 20),
(32, 6, 20),
(33, 4, 20),
(34, 9, 20),
(35, 2, 21),
(36, 6, 21),
(37, 7, 21),
(38, 8, 21),
(39, 4, 21),
(40, 5, 21),
(41, 1, 21),
(42, 9, 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempatketerangan`
--

CREATE TABLE IF NOT EXISTS `tempatketerangan` (
  `id_tempatjenis` int(11) NOT NULL,
  `id_tempat` int(11) NOT NULL,
  `id_keterangan` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tempatketerangan`
--

INSERT INTO `tempatketerangan` (`id_tempatjenis`, `id_tempat`, `id_keterangan`) VALUES
(1, 15, 5),
(2, 15, 6),
(3, 16, 5),
(4, 17, 1),
(5, 18, 7),
(6, 18, 8),
(7, 19, 36),
(8, 19, 37),
(9, 20, 7),
(10, 20, 8),
(11, 21, 7),
(12, 21, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan`
--

CREATE TABLE IF NOT EXISTS `ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_tempat` int(11) NOT NULL,
  `ulasan` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `id_user`, `id_tempat`, `ulasan`) VALUES
(1, 1, 18, 'Bagus Tempatnya sip'),
(2, 1, 18, 'Satisfyyy<3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin@miranda.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `fototempat`
--
ALTER TABLE `fototempat`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id_tempat` (`id_tempat`);

--
-- Indexes for table `jenis_olahraga`
--
ALTER TABLE `jenis_olahraga`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `keterangan`
--
ALTER TABLE `keterangan`
  ADD PRIMARY KEY (`id_keterangan`),
  ADD KEY `id_keterangan` (`id_keterangan`),
  ADD KEY `id_olahraga` (`id_jenis`);

--
-- Indexes for table `tempat`
--
ALTER TABLE `tempat`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indexes for table `tempatfasilitas`
--
ALTER TABLE `tempatfasilitas`
  ADD PRIMARY KEY (`id_tempatfasilitas`),
  ADD KEY `id_fasilitas` (`id_fasilitas`),
  ADD KEY `id_tempat` (`id_tempat`);

--
-- Indexes for table `tempatketerangan`
--
ALTER TABLE `tempatketerangan`
  ADD PRIMARY KEY (`id_tempatjenis`),
  ADD KEY `id_tempat` (`id_tempat`),
  ADD KEY `id_keterangan` (`id_keterangan`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_tempat` (`id_tempat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `fototempat`
--
ALTER TABLE `fototempat`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `jenis_olahraga`
--
ALTER TABLE `jenis_olahraga`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `keterangan`
--
ALTER TABLE `keterangan`
  MODIFY `id_keterangan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tempat`
--
ALTER TABLE `tempat`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tempatfasilitas`
--
ALTER TABLE `tempatfasilitas`
  MODIFY `id_tempatfasilitas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `tempatketerangan`
--
ALTER TABLE `tempatketerangan`
  MODIFY `id_tempatjenis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `fototempat`
--
ALTER TABLE `fototempat`
  ADD CONSTRAINT `fototempat_ibfk_1` FOREIGN KEY (`id_tempat`) REFERENCES `tempat` (`id_tempat`);

--
-- Ketidakleluasaan untuk tabel `keterangan`
--
ALTER TABLE `keterangan`
  ADD CONSTRAINT `keterangan_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_olahraga` (`id_jenis`);

--
-- Ketidakleluasaan untuk tabel `tempatfasilitas`
--
ALTER TABLE `tempatfasilitas`
  ADD CONSTRAINT `tempatfasilitas_ibfk_1` FOREIGN KEY (`id_tempat`) REFERENCES `tempat` (`id_tempat`),
  ADD CONSTRAINT `tempatfasilitas_ibfk_2` FOREIGN KEY (`id_fasilitas`) REFERENCES `fasilitas` (`id_fasilitas`);

--
-- Ketidakleluasaan untuk tabel `tempatketerangan`
--
ALTER TABLE `tempatketerangan`
  ADD CONSTRAINT `tempatketerangan_ibfk_1` FOREIGN KEY (`id_tempat`) REFERENCES `tempat` (`id_tempat`),
  ADD CONSTRAINT `tempatketerangan_ibfk_2` FOREIGN KEY (`id_keterangan`) REFERENCES `keterangan` (`id_keterangan`);

--
-- Ketidakleluasaan untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `ulasan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `ulasan_ibfk_2` FOREIGN KEY (`id_tempat`) REFERENCES `tempat` (`id_tempat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
