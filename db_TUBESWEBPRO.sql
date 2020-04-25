-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2020 at 02:38 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_TUBESWEBPRO`
--

-- --------------------------------------------------------

--
-- Table structure for table `Artikel`
--

CREATE TABLE `Artikel` (
  `id` int(11) NOT NULL,
  `Judul` varchar(256) NOT NULL,
  `Isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `Gambar` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Artikel`
--

INSERT INTO `Artikel` (`id`, `Judul`, `Isi`, `tanggal`, `Gambar`) VALUES
(1, 'Penyakit Anemia', '<strong>Pengertian Anemia</strong><br />\r\n<br />\r\nPenyakit anemia merupakan kondisi ketika jumlah sel darah merah lebih rendah dari jumlah normal. Selain itu, anemia terjadi ketika hemoglobin di dalam sel-sel darah merah tidak cukup, seperti protein kaya zat besi yang memberikan warna merah darah. Protein ini membantu sel-sel darah merah membawa oksigen dari paru-paru ke seluruh tubuh.<br />\r\n<br />\r\nOleh karena itu, tubuh yang tidak mendapatkan cukup darah yang kaya oksigen akan mengalami anemia. Akibatnya, seseorang mungkin akan merasa lelah atau lemah. Selain itu, gejala lain mungkin muncul adalah sesak napas, pusing, atau sakit kepala.<br />\r\n<br />\r\nBerikut adalah beberapa jenis anemia yang dapat terjadi:<br />\r\n-Anemia defisiensi B12.<br />\r\n-Anemia defisiensi folat.<br />\r\n-Anemia defisiensi besi.<br />\r\n-Anemia karena penyakit kronis.<br />\r\n-Anemia hemolitik.<br />\r\n-Anemia aplastik.<br />\r\n-Anemia megaloblastik.<br />\r\n-Anemia pernisiosa.<br />\r\n-Anemia sel sabit.<br />\r\n-Talasemia.<br />\r\n<br />\r\n<strong>Penyebab Anemia</strong><br />\r\nSumsum tulang adalah jaringan lunak di tengah tulang yang membantu membentuk semua sel darah. Sel-sel darah merah yang sehat akan bertahan antara 90 hingga 120 hari. Setelah itu, sel-sel darah tua dalam tubuh akan diganti dengan yang baru. Proses ini berlangsung secara terus-menerus. Di dalam tubuh terdapat hormon yang disebut erythropoietin (EPO) yang dibuat di ginjal. Tugasnya adalah untuk memberikan sinyal kepada sumsum tulang untuk “menciptakan” lebih banyak sel darah merah bagi tubuh.<br />\r\n<br />\r\nHemoglobin adalah protein pembawa oksigen dalam sel darah merah dan protein inilah yang memberikan warna merah pada sel darah merah. Bagi pengidap anemia, mereka tidak memiliki cukup hemoglobin.', '2020-04-25', 'Anemia2.jpg'),
(2, 'Coronavirus-19', '<strong> Pengertian Coronavirus </strong>\r\n\r\nCoronavirus atau virus corona merupakan keluarga besar virus yang menyebabkan infeksi saluran pernapasan atas ringan hingga sedang, seperti penyakit flu. Banyak orang terinfeksi virus ini, setidaknya satu kali dalam hidupnya.\r\n\r\nNamun, beberapa jenis virus corona juga bisa menimbulkan penyakit yang lebih serius, seperti:\r\n-Middle East Respiratory Syndrome (MERS-CoV).\r\n-Severe Acute Respiratory Syndrome (SARS-CoV).\r\n-Pneumonia.\r\n\r\nSARS yang muncul pada November 2002 di Tiongkok, menyebar ke beberapa negara lain. Mulai dari Hongkong, Vietnam, Singapura, Indonesia, Malaysia, Inggris, Italia, Swedia, Swiss, Rusia, hingga Amerika Serikat. Epidemi SARS yang berakhir hingga pertengahan 2003 itu menjangkiti 8.098 orang di berbagai negara. Setidaknya 774 orang mesti kehilangan nyawa akibat penyakit infeksi saluran pernapasan berat tersebut. <br />\r\nSampai saat ini terdapat tujuh coronavirus (HCoVs) yang telah diidentifikasi, yaitu:<br />\r\n-HCoV-229E.\r\n-HCoV-OC43.\r\n-HCoV-NL63.\r\n-HCoV-HKU1.\r\n-SARS-COV (yang menyebabkan sindrom pernapasan akut).\r\n-MERS-COV (sindrom pernapasan Timur Tengah).\r\n-COVID-19 atau dikenal juga dengan Novel Coronavirus (menyebabkan wabah pneumonia di kota Wuhan, Tiongkok pada Desember 2019, dan menyebar ke negara lainnya mulai Januari 2020. Indonesia sendiri mengumumkan adanya kasus covid 19 dari Maret 2020', '2020-04-25', 'Corona2.jpg'),
(4, 'Selamat Datang', 'Selamat Datang di Website kami silahkan Membaca Artikel Yang tersedia di sebelah kanan anda', '2020-04-25', 'logooo_(1).png');

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `Obatid` int(11) NOT NULL,
  `Nama_Obat` varchar(255) NOT NULL,
  `Harga` float DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Pict` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`Obatid`, `Nama_Obat`, `Harga`, `Description`, `Pict`) VALUES
(4, 'Obat', 77, '\\', 'WhatsApp_Image_2020-04-22_at_18_16_133.jpeg'),
(5, 'Product 2', 2, 'Product 2', 'NewGraph.png'),
(13, 'a', 123, 'aasdadadas\r\nasdasdasd', 'Screen_Shot_2020-04-20_at_21_59_17.png'),
(15, 'asdasd', 1, 'asasasasdasd', 'Screen_Shot_2020-04-20_at_22_48_102.png'),
(17, 'asda', 0, 'a', 'WhatsApp_Image_2020-04-22_at_18_16_13.jpeg'),
(18, '1', 1, 'Coba EDIT', 'WhatsApp_Image_2020-04-22_at_18_16_131.jpeg'),
(19, '7', 7, '7', '3.png'),
(20, '.', 23, '3', 'DAA.png'),
(21, '8', 8, '8', 'WhatsApp_Image_2020-04-22_at_18_24_11.jpeg'),
(22, '123', 123, '123231231<br />\r\n312', '4r1.jpg'),
(24, 'zcx', 32132, 'zx21czx321', 'EPRT1.png'),
(25, 'coba', 22, 'Lorem Ipsum is simply ', 'EPRT2.png'),
(26, ' industry.', 5, 'Lorem Ipsum is simply dummy', '4r2.jpg'),
(27, 'qweqwe', 555, 'asdasd', 'EPRT3.png'),
(28, 'lorem', 7, 'aaa', '4r3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Profile`
--

CREATE TABLE `Profile` (
  `Personid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `TTL` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Profile`
--

INSERT INTO `Profile` (`Personid`, `email`, `username`, `password`, `TTL`, `alamat`, `gender`, `status`) VALUES
(1, 'rivannurihsan@gmail.com', 'rivannurihsan', '123asd', '2020-04-04', 'Subang', 'Pria', 0),
(3, 'nurihsan_rivan@yahoo.com', 'rivan', 'rivan', '2000-09-11', 'a', 'Pria', 1),
(16, 'asdasd', 'aaa', 'aaa', '2020-04-02', 'a', 'Wanita', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Artikel`
--
ALTER TABLE `Artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`Obatid`);

--
-- Indexes for table `Profile`
--
ALTER TABLE `Profile`
  ADD PRIMARY KEY (`Personid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Artikel`
--
ALTER TABLE `Artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `Obatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `Profile`
--
ALTER TABLE `Profile`
  MODIFY `Personid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
