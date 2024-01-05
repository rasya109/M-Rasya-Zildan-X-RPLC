-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 05, 2024 at 12:46 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pjbl`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int NOT NULL,
  `definisi` text COLLATE utf8mb4_general_ci NOT NULL,
  `pengertian` text COLLATE utf8mb4_general_ci NOT NULL,
  `macam` text COLLATE utf8mb4_general_ci NOT NULL,
  `manfaat` text COLLATE utf8mb4_general_ci NOT NULL,
  `judul_pengertian` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `judul_macam` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `judul_manfaat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `definisi`, `pengertian`, `macam`, `manfaat`, `judul_pengertian`, `judul_macam`, `judul_manfaat`) VALUES
(1, 'Sopan santun merupakan peraturan atau kaidah\r\nhidup untuk tingkah laku manusia yang terjadi\r\nkarena hasil pergaulan sekelompok orang berisi\r\nperintah, larangan serta sanksi tertentu. Sopan\r\nsantun bersifat relatif yang artinya apa yang\r\ndianggap sebagai norma sopan santun akan\r\nberbeda-beda di banyak tempat, waktu dan\r\nlingkungan.', 'Sopan santun adalah istilah dari bahasa Jawa yang\r\ndiartikan sebagai sikap seseorang yang menjunjung\r\ntinggi nilai menghargai, menghormati, berakhlak\r\nmulia dan juga menghargai. Sopan santun bisa\r\ndianggap sebagai norma tidak tertulis yang\r\nmengatur bagaimana seharusnya seseorang\r\nbersikap atau berperilaku. Di dalam KBBI, sopan\r\nsantun diartikan sebagai sopan yakni hormat dengan\r\ntidak lazim tertib berdasarkan budi pekerti yang baik.', '1. Sopan santun ketika berbicara<br>\r\n\r\n2. Sopan santun ketika makan<br>\r\n\r\n3. Sopan santun saat bertamu<br>\r\n\r\n4. Sopan santun dalam berpakaian<br>\r\n\r\n5. Sopan santun saat bergaul', '1. Menciptakan kehidupan yang aman,<br>\r\ndamai serta tentram.<br>\r\n\r\n2. Memperkuat jalinan kerukunan yang<br>\r\ntelah dibentuk selama ini.<br>\r\n\r\n3. Memperkecil timbulnya konflik pada<br>\r\nlingkungan masyarakat.<br>\r\n\r\n4. Mempermudah pergaulan dalam<br>\r\nmasyarakat.<br>\r\n\r\n5. Memperkuat jalinan kerukunan yang\r\nsudah terbentuk selama ini dengan\r\nbertingkah laku sopan sehingga\r\nkerukunan bisa terjalin dengan erat.', 'Pengertian', 'Macam-Macam Sopan Santun', 'Manfaat Sopan Santun');

-- --------------------------------------------------------

--
-- Table structure for table `bersih`
--

CREATE TABLE `bersih` (
  `id` int NOT NULL,
  `definisi` text COLLATE utf8mb4_general_ci NOT NULL,
  `judul_pengertian` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pengertian` text COLLATE utf8mb4_general_ci NOT NULL,
  `judul_manfaat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `manfaat` text COLLATE utf8mb4_general_ci NOT NULL,
  `judul_macam` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `macam` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bersih`
--

INSERT INTO `bersih` (`id`, `definisi`, `judul_pengertian`, `pengertian`, `judul_manfaat`, `manfaat`, `judul_macam`, `macam`) VALUES
(1, 'Menjaga kebersihan adalah langkah-langkah\r\npreventif yang dapat mengurangi risiko penyakit,\r\ninfeksi, dan pencemaran lingkungan. Ini juga\r\nmembantu menciptakan lingkungan yang lebih\r\nnyaman, estetis, dan menyenangkan untuk ditinggali. Oleh karena itu, menjaga kebersihan\r\nadalah tanggung jawab bersama.', 'Pengertian', 'Menjaga kebersihan adalah praktek yang penting untuk memelihara kesehatan, kenyamanan, dan kualitas hidup yang baik. Ini melibatkan upaya untuk menjaga lingkungan, tubuh, dan area sekitar agar bebas dari kotoran atau penyakit.', 'Manfaat Menjaga Kebersihan', '1. Meminimalisir terjangkitnya penyakit<br>\r\n\r\n\r\n2. Menjaga kebugaran tubuh<br>\r\n\r\n\r\n3. Tempat tinggal menjadi lebih nyaman<br>\r\n\r\n\r\n4. Berpikir empati', 'Contoh Kegiatan Menjaga Kebersihan', 'Membuang sampah pada tempatnya: membuang sampah pada tempatnya adalah tindakan sederhana namun penting untuk menjaga kebersihan lingkungan umum.<br>\r\n\r\nPenghijauan: menjaga kebersihan dan keindahan taman dan ruang terbuka umum adalah upaya untuk menciptakan lingkungan yang lebih sehat dan nyaman bagi semua orang.<br>\r\n\r\nMencuci tangan: mencuci tangan dengan sabun dan air adalah salah satu cara paling efektif untuk mencegah penyebaran kuman dan penyakit. Ini sebaiknya dilakukan sebelum makan, setelah ke toilet, dan setelah kontak dengan benda-benda kotor.');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `komentar` text COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_like` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `komentar`, `jumlah_like`) VALUES
(31, 'admin', 'komentar muncul disini !', 12),
(33, 'Super admin', 'Rasyaaa !!!!', 1017),
(34, 'rasya', 'komentar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz`
--

CREATE TABLE `tbl_quiz` (
  `id` int NOT NULL,
  `soal` varchar(200) NOT NULL,
  `jawaban_a` varchar(200) NOT NULL,
  `jawaban_b` varchar(200) NOT NULL,
  `jawaban_c` varchar(200) NOT NULL,
  `jawaban_d` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_quiz`
--

INSERT INTO `tbl_quiz` (`id`, `soal`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`) VALUES
(1, 'Makan menggunakan tangan kanan saat makan merupakan', 'Sopan santun saat makan', 'Sopan santun saat bertamu', 'Sopan santun saat berbicara', 'Sopan santun dalam berpakaian');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `email`, `password`) VALUES
(19, 'zahwa', 'zahwa@gmail.com', '$2y$10$NcOVadoQsQtF9CNLvLmWVeyMGa7cJ/FUfVfyCDY50jhI7lyqYgbfK'),
(24, 'alfian', 'alfian@gmail.com', '$2y$10$4Ju80bKUUfEBAYrJpbwAAuNOjOcYLeOQ5tgCMA3u7ylNlRPD/d7ne'),
(27, 'giant', 'gian@gmail.com', '$2y$10$LhbLvNMjgiQcurNq4ZX7eODrpTUQUzOw0CeMyxwU0bEMIVdqDL6Aa'),
(29, 'purnama', 'rasyah@gmail.com', '$2y$10$L17tnCbF7rVQwZ8bwN9q8efFSxiAjPgjw7yqW/nG2HoUK4qVljlMO');

-- --------------------------------------------------------

--
-- Table structure for table `utama`
--

CREATE TABLE `utama` (
  `id` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utama`
--

INSERT INTO `utama` (`id`, `username`, `email`, `password`) VALUES
(1, 'Rasyaa', 'satriavega2004@gmail.com', 'rasya2008'),
(5, 'Admin', 'admin@gmail.com', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `zalim`
--

CREATE TABLE `zalim` (
  `id` int NOT NULL,
  `definisi` text COLLATE utf8mb4_general_ci NOT NULL,
  `judul_pengertian` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pengertian` text COLLATE utf8mb4_general_ci NOT NULL,
  `judul_manfaat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `manfaat` text COLLATE utf8mb4_general_ci NOT NULL,
  `judul_macam` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `macam` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zalim`
--

INSERT INTO `zalim` (`id`, `definisi`, `judul_pengertian`, `pengertian`, `judul_manfaat`, `manfaat`, `judul_macam`, `macam`) VALUES
(1, 'Dalam Islam, tindakan dzalim\r\ndianggap sebagai dosa besar, dan\r\nindividu yang terlibat dalam perilaku\r\ndzalim dapat dihukum oleh hukum\r\nagama. Ajaran Islam mendorong\r\numatnya untuk menjauhi perilaku\r\ndzalim dan berlaku adil dalam semua\r\naspek kehidupan mereka. Penting\r\nuntuk diingat bahwa konsep dzalim\r\njuga dapat berlaku dalam konteks\r\nbudaya dan hukum yang berbeda di\r\nberbagai negara dan masyarakat.', 'Pengertian', 'Perilaku dzalim adalah perilaku yang menunjukkan kezaliman\r\natau ketidakadilan terhadap individu atau kelompok lain.\r\nDalam konteks agama Islam, dzalim seringkali diartikan\r\nsebagai tindakan yang melanggar prinsip-prinsip keadilan\r\ndan kesetaraan yang diajarkan dalam ajaran Islam. Dalam\r\nAl-Quran, kata \"dzalim\" atau \"zalim\" digunakan untuk\r\nmenggambarkan tindakan-tindakan yang melanggar hak-\r\nhak individu, seperti penindasan, perlakuan tidak adil.', 'Cara menghindari perbuatan dzalim', '1. Berfakir dengan orang yang berfikiran<br> baik<br>\r\n\r\n2. Jaga komunikasi yang positif<br>\r\n\r\n3. Hormati hak asasi manusia<br>\r\n\r\n4. Berpikir empati<br>\r\n\r\n5. Kembangkan kesadaran diri', 'Contoh Perbuatan Dzalim', 'Penganiayaan Fisik: Melakukan kekerasan fisik terhadap seseorang, seperti pemukulan, penyiksaan, atau perlakuan kasar lainnya.<br>\r\n\r\nDiskriminasi Rasial: Memperlakukan seseorang atau kelompok berdasarkan ras, etnis, atau latar belakang mereka dengan tidak adil, seperti penolakan pekerjaan atau pelayanan karena ras tertentu.<br>\r\n\r\nPelanggaran Hak Asasi Manusia: Tindakan yang melanggar hak-hak asasi manusia, seperti penyiksaan, penghilangan paksa, atau penangkapan sewenang-wenang.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bersih`
--
ALTER TABLE `bersih`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quiz`
--
ALTER TABLE `tbl_quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utama`
--
ALTER TABLE `utama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zalim`
--
ALTER TABLE `zalim`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bersih`
--
ALTER TABLE `bersih`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_quiz`
--
ALTER TABLE `tbl_quiz`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `utama`
--
ALTER TABLE `utama`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `zalim`
--
ALTER TABLE `zalim`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
