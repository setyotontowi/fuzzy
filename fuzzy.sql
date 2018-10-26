-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 05:21 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuzzy`
--

-- --------------------------------------------------------

--
-- Table structure for table `keanggotaan`
--

CREATE TABLE `keanggotaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `luas_kecil` float NOT NULL,
  `luas_sedang` float NOT NULL,
  `luas_besar` float NOT NULL,
  `jarak_dekat` float NOT NULL,
  `jarak_sedang` float NOT NULL,
  `jarak_jauh` float NOT NULL,
  `harga_murah` float NOT NULL,
  `harga_sedang` float NOT NULL,
  `harga_mahal` float NOT NULL,
  `cicilan_sedikit` float NOT NULL,
  `cicilan_sedang` float NOT NULL,
  `cicilan_banyak` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keanggotaan`
--

INSERT INTO `keanggotaan` (`id`, `nama`, `luas_kecil`, `luas_sedang`, `luas_besar`, `jarak_dekat`, `jarak_sedang`, `jarak_jauh`, `harga_murah`, `harga_sedang`, `harga_mahal`, `cicilan_sedikit`, `cicilan_sedang`, `cicilan_banyak`) VALUES
(1, 'Bougenville', 0.28125, 0.71875, 0, 0.966667, 0.0333333, 0, 0.619333, 0.380667, 0, 0.131667, 0.868333, 0),
(2, 'Green Land Permata', 0.4375, 0.5625, 0, 0.916667, 0.0833333, 0, 0.761, 0.239, 0, 0.304333, 0.695667, 0),
(3, 'Cipta Griya Bersinar', 0.125, 0.875, 0, 0.953333, 0.0466667, 0, 0.536, 0.464, 0, 0.0306667, 0.969333, 0),
(4, 'Banteng Townhouse', 0, 0.972222, 0.0277778, 0.333333, 0.666667, 0, 0.341667, 0.658333, 0, 0, 0.916667, 0.0833333),
(5, 'Kuantan Townhouse', 0, 0.833333, 0.166667, 0.533333, 0.466667, 0, 0.308333, 0.691667, 0, 0, 0.880333, 0.119667),
(6, 'Paltrow City Bellini', 0, 0.694444, 0.305556, 0.8, 0.2, 0, 0.275, 0.725, 0, 0, 0.999333, 0.000666667),
(7, 'Green Indah Beji', 0.4375, 0.5625, 0, 0.2, 0.8, 0, 1, 0, 0, 0.0306667, 0.969333, 0),
(8, 'Permata Buana', 0, 0.444444, 0.555556, 0, 0.6, 0.4, 0, 0, 1, 0, 0, 1),
(9, 'Beruang Mas Residence', 0.0625, 0.9375, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1),
(10, 'Dehanggo Mansion', 0, 0.472222, 0.527778, 0.733333, 0.266667, 0, 0, 0, 1, 0, 0, 1),
(11, 'Ritzgreen Maguwo Residence', 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1),
(12, 'Ringin Asri 2', 0.40625, 0.59375, 0, 0, 0, 1, 0.55, 0.45, 0, 0.0561113, 0.943889, 0),
(13, 'Kampoeng Elang', 0.34375, 0.65625, 0, 0, 0, 1, 0, 0.6, 0, 0, 0.430778, 0.569222),
(14, 'Griya Kencana', 0.40625, 0.59375, 0, 0.2, 0.8, 0, 0, 0.375, 0.125, 0, 0.364, 0.636),
(15, 'Bumi Progo Sejahtera', 0.4375, 0.5625, 0, 0.8, 0.2, 0, 0.683333, 0.316667, 0, 0.25, 0.75, 0),
(16, 'Nava Residence', 0, 0.972222, 0.0277778, 0, 0, 1, 0, 0, 1, 0, 0, 1),
(17, 'Calista Indah Residence', 0.109375, 0.890625, 0, 0.666667, 0.333333, 0, 0, 0.55, 0, 0, 0.666, 0.334),
(18, 'Central Park Solo Baru', 0, 0.888889, 0.111111, 0.866667, 0.133333, 0, 0, 0, 1, 0, 0, 1),
(19, 'Casa Royal Baturraden', 0.0625, 0.9375, 0, 0.966667, 0.0333333, 0, 0, 0.24, 0.26, 0, 0.389445, 0.610555),
(20, 'Brentwood Residence', 0, 0, 1, 0.866667, 0.133333, 0, 0, 0, 1, 0, 0, 1),
(21, 'Pesona Ello Residence', 0.296875, 0.703125, 0, 0, 0, 1, 0.0333333, 0.966667, 0, 0, 0.805445, 0.194555),
(22, 'Griya Wijaya Kusuma', 0.5, 0.5, 0, 0, 0.2, 0.8, 0.883333, 0.116667, 0, 0.25, 0.75, 0),
(25, 'Taman Siswa Indah', 0, 0.555556, 0.444444, 0.4, 0.6, 0, 0, 0, 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `s_b` float NOT NULL,
  `e_b` float NOT NULL,
  `s_sb` float NOT NULL,
  `e_sb` float NOT NULL,
  `s_sa` float NOT NULL,
  `e_sa` float NOT NULL,
  `s_a` float NOT NULL,
  `e_a` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama`, `s_b`, `e_b`, `s_sb`, `e_sb`, `s_sa`, `e_sa`, `s_a`, `e_a`) VALUES
(1, 'harga', 100000000, 400000000, 100000000, 400000000, 400000000, 600000000, 500000000, 700000000),
(2, 'luas', 0, 64, 0, 64, 64, 100, 64, 100),
(3, 'jarak', 0, 15, 0, 15, 15, 30, 15, 30),
(4, 'cicilan', 0, 3000000, 0, 3000000, 3000000, 6000000, 3000000, 6000000);

-- --------------------------------------------------------

--
-- Table structure for table `rumah`
--

CREATE TABLE `rumah` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `luas` int(11) NOT NULL,
  `jarak` double NOT NULL,
  `harga` double NOT NULL,
  `cicilan` double NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rumah`
--

INSERT INTO `rumah` (`id`, `nama`, `luas`, `jarak`, `harga`, `cicilan`, `alamat`, `telepon`) VALUES
(1, 'Bougenville', 46, 0.5, 214200000, 2605000, 'Jl. Purwomartani, Sleman, Jogjakarta', '(0271) 734179'),
(2, 'Green Land Permata', 36, 1.25, 171700000, 2087000, 'Jl. Wates Km. 6, Ambarketawang, Gamping, Sleman, Jogjakarta', '(024) 76745577'),
(3, 'Cipta Griya Bersinar', 56, 0.7, 239200000, 2908000, 'Jl. Kalikotes, Klaten, Jawa Tengah', '(0275) 323482'),
(4, 'Banteng Townhouse', 65, 10, 297500000, 3250000, 'Sendangadi, Mlati, Sleman, Jogjakarta', '(0271) 622441'),
(5, 'Kuantan Townhouse', 70, 7, 307500000, 3359000, 'Utara Terminal Giwangan, Jogjakarta', '0856 4722 4970'),
(6, 'Paltrow City Bellini', 75, 3, 317500000, 3002000, 'Tajem (Depan Kampus UNRIYO), Sleman Jogjakarta', '(0274) 555222'),
(7, 'Green Indah Beji', 36, 12, 100000000, 2908000, 'Jl. Pahlawan, Sucen, Bayan, Purworejo, Jawa Tengah', '0896 5874 1333'),
(8, 'Permata Buana', 84, 21, 911000000, 8250000, 'Jl. Adi Sumarmo, Blulukan, Colomadu, Karanganyar, Jawa Tengah', '(0271) 727546'),
(9, 'Beruang Mas Residence', 60, 15, 915000000, 8359000, 'Jl. Beruang Raya, Semarang, Jawa Tengah', '(024) 6713567'),
(10, 'Dehanggo Mansion', 83, 4, 1070000000, 9002000, 'Jl. Kabupaten Trihanggo (Ringroad Barat), Gamping, Sleman, Jogjakarta', '(0274) 589853'),
(11, 'Ritzgreen Maguwo Residence', 130, 30, 1420000000, 14955666, 'Jl. Raya Pasar Stan Maguwoharjo, Depok, Sleman, Jogjakarta', '0818 2627 12'),
(12, 'Ringin Asri 2', 38, 33, 235000000, 2831666, 'Bejen, Karanganyar, Jawa Tengah', '(0271) 710331'),
(13, 'Kampoeng Elang', 42, 45, 480000000, 4707666, 'Jl. Elang Raya, Tembalang, Semarang, Jawa Tengah', '(024) 76745577'),
(14, 'Griya Kencana', 38, 12, 525000000, 4908000, 'Blulukan, Colomadu, Karanganyar, Jawa Tengah', '(0271) 734179'),
(15, 'Bumi Progo Sejahtera', 36, 3, 195000000, 2250000, 'Margosari, Pengasih, Kulon Progo, Jogjakarta', '(0275) 323482'),
(16, 'Nava Residence', 65, 65, 775000000, 6359000, 'Jl. Raya Baki, Solo Baru, Sukoharjo, Jawa Tengah', '(0271) 622441'),
(17, 'Calista Indah Residence', 57, 5, 490000000, 4002000, 'Singopuran, Kartasura, Sukoharjo, Jawa Tengah', '0856 4722 4970'),
(18, 'Central Park Solo Baru', 68, 2, 939000000, 8955666, 'Jl. Raya Gedangan Baki - Solo, Solo Baru, Sukoharjo, Jawa Tengah\r\n', '(0271) 6727895'),
(19, 'Casa Royal Baturraden', 60, 0.5, 552000000, 4831666, 'Jl. Baturaden Barat, Prompong, Kutasari, Purwokerto Utara, Jawa Tengah', '(0281) 6571999'),
(20, 'Brentwood Residence', 130, 2, 1510000000, 13707666, 'Jl. Grogol Indah Raya, Telukan, Grogol, Sukoharjo, Jawa Tengah', '(0271) 622441'),
(21, 'Pesona Ello Residence', 45, 34, 390000000, 3583666, 'Jl. Soekarno - Hatta, Drojogan, Bumirejo, Mungkid, Magelang, Jawa Tengah', '(0293) 3301081'),
(22, 'Griya Wijaya Kusuma', 32, 27, 135000000, 2250000, 'Pangenrejo, Purworejo, Jawa Tengah', '0813 2870 2163'),
(25, 'Taman Siswa Indah', 80, 9, 1080000000, 9359000, 'Jl. Manukberi, Taman Siswa, Jogjakarta', '(0274) 555222');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `luas` float NOT NULL,
  `jarak` float NOT NULL,
  `harga` float NOT NULL,
  `cicilan` float NOT NULL,
  `nr` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`id`, `nama`, `luas`, `jarak`, `harga`, `cicilan`, `nr`) VALUES
(1, 'Bougenville', 0, 0, 0, 0, 0),
(2, 'Green Land Permata', 0, 0, 0, 0, 0),
(3, 'Cipta Griya Bersinar', 0, 0, 0, 0, 0),
(4, 'Banteng Townhouse', 0.0277778, 0, 0, 0.0833333, 0.0277778),
(5, 'Kuantan Townhouse', 0.166667, 0, 0, 0.119667, 0.0715835),
(6, 'Paltrow City Bellini', 0.305556, 0, 0, 0.000666667, 0.0765557),
(7, 'Green Indah Beji', 0, 0, 0, 0, 0),
(8, 'Permata Buana', 0.555556, 0.4, 1, 1, 0.738889),
(9, 'Beruang Mas Residence', 0, 0, 1, 1, 0.5),
(10, 'Dehanggo Mansion', 0.527778, 0, 1, 1, 0.631944),
(11, 'Ritzgreen Maguwo Residence', 1, 1, 1, 1, 1),
(12, 'Ringin Asri 2', 0, 1, 0, 0, 0.25),
(13, 'Kampoeng Elang', 0, 1, 0, 0.569222, 0.392305),
(14, 'Griya Kencana', 0, 0, 0.125, 0.636, 0.19025),
(15, 'Bumi Progo Sejahtera', 0, 0, 0, 0, 0),
(16, 'Nava Residence', 0.0277778, 1, 1, 1, 0.756944),
(17, 'Calista Indah Residence', 0, 0, 0, 0.334, 0.0835),
(18, 'Central Park Solo Baru', 0.111111, 0, 1, 1, 0.527778),
(19, 'Casa Royal Baturraden', 0, 0, 0.26, 0.610555, 0.217639),
(20, 'Brentwood Residence', 1, 0, 1, 1, 0.75),
(21, 'Pesona Ello Residence', 0, 1, 0, 0.194555, 0.298639),
(22, 'Griya Wijaya Kusuma', 0, 0.8, 0, 0, 0.2),
(25, 'Taman Siswa Indah', 0.444444, 0, 1, 1, 0.611111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rumah`
--
ALTER TABLE `rumah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rumah`
--
ALTER TABLE `rumah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
