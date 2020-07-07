-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jun 2020 pada 09.01
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `antrian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(50) NOT NULL,
  `th_ajaran` varchar(50) NOT NULL,
  `nama` int(50) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `no_ortu` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `thn_ajaran`, `nama`, `nisn`, `asal`, `nama_ortu`, `no_ortu`, `alamat`, `keterangan`, `tujuan`, `alsan`) VALUES
(1, '2017/2018', 'Murdeny Wildanul H H', '9997583510	', 'Klaten Tengah, Klaten	Bandiyo Hartono',	'081393764391',	'Sendangan, Mojayan, Klaten Tengah, Klaten', 'Luar Kota Surabaya',	'Universitas Negri Surabaya',	'Pindah Tempat Tinggal'),
(48, '2018/2019',	'Bimantara Satria',	'123129412', 'Universitas Akakom',	'Sudibyo',	'085231215589',	'Pedan, Klaten',	'Luar Kota Surabaya',	'Universitas Brawijaya',	'Mumet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
