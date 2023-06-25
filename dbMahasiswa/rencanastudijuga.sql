-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 09:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rencanastudijuga`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen_pa`
--

CREATE TABLE `dosen_pa` (
  `Kode_PA` varchar(10) NOT NULL,
  `Nama_PA` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen_pa`
--

INSERT INTO `dosen_pa` (`Kode_PA`, `Nama_PA`) VALUES
('121BR', 'Budi Rahmadya'),
('122DY', 'Dodon Yendri'),
('123456', 'Pak Rahmadi'),
('123AB', 'Amadiketoe'),
('221DW', 'Dwi Welly Sukma Nirad'),
('224RA', 'Ricky Akbar'),
('3456B', 'Ratna Aisuwarya, M.Eng');

-- --------------------------------------------------------

--
-- Table structure for table `dosen_pengampu`
--

CREATE TABLE `dosen_pengampu` (
  `NIP_Dosen` char(30) NOT NULL,
  `Nama_Dosen` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen_pengampu`
--

INSERT INTO `dosen_pengampu` (`NIP_Dosen`, `Nama_Dosen`) VALUES
('1211', 'Jefril'),
('195709071992031001', 'Werman Kasoep'),
('196106031989011001', 'Alimin Mahyudin'),
('197112221999031001', 'Harmadi'),
('197303301999031008', 'Admi Nazra'),
('197407182005012002', 'Monika Rianti'),
('197510292003122002', 'Ratna Aiswarya'),
('197804142002122003', 'Tati Erlina'),
('198201182008121002', 'Husni Kamil'),
('198307272008121003', 'Hasdi Putra'),
('198410062012121001', 'Ricky Akbar'),
('198904152019031009', 'Jefril Ramadhoni'),
('199104172022031007', 'Febby  Apri Wenando'),
('199108122019032018', 'Dwi Welly Sukma Nirad'),
('199111192018032001', 'Nefy Puteri Novani'),
('199308152022032017', 'Rahmatika Pratama '),
('199402062022031004', 'Rifqi Suwandi'),
('199404292022032014', 'Rizka Hadelina'),
('199506232022031014', 'Arrya Anandika'),
('982641074021', 'amadiketoe aja');

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `NIM` char(10) NOT NULL,
  `Kode_MK` varchar(20) NOT NULL,
  `Kode_PA` varchar(10) NOT NULL,
  `NIP_Dosen` char(30) NOT NULL,
  `Kode_Prodi` int(5) NOT NULL,
  `Sem_TA` varchar(15) NOT NULL,
  `IP_SemLa` varchar(5) NOT NULL,
  `Max_SKS` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`NIM`, `Kode_MK`, `Kode_PA`, `NIP_Dosen`, `Kode_Prodi`, `Sem_TA`, `IP_SemLa`, `Max_SKS`) VALUES
('2111511008', 'CCE61127', '121BR', '195709071992031001', 1151, '4/22-23', '3.80', 24),
('2111511008', 'CCE61127', '121BR', '199506232022031014', 1151, '4/22-23', '3.80', 24),
('2111511008', 'CCE62110', '121BR', '197804142002122003', 1151, '4/22-23', '3.80', 24),
('2111511008', 'CCE62110', '121BR', '199111192018032001', 1151, '4/22-23', '3.80', 24),
('2111511008', 'CCE62117', '121BR', '199402062022031004', 1151, '4/22-23', '3.80', 24),
('2111511008', 'CCE62117', '121BR', '199506232022031014', 1151, '4/22-23', '3.80', 24),
('2111511008', 'CCE62119', '121BR', '197510292003122002', 1151, '4/22-23', '3.80', 24),
('2111511008', 'CCE62119', '121BR', '197804142002122003', 1151, '4/22-23', '3.80', 24),
('2111511026', 'CCE62101', '122DY', '196106031989011001', 1151, '3/21-22', '3.85', 24),
('2111511026', 'CCE62101', '122DY', '197112221999031001', 1151, '3/21-22', '3.85', 24),
('2111511026', 'CCE62102', '122DY', '195709071992031001', 1151, '3/21-22', '3.85', 24),
('2111511026', 'CCE62102', '122DY', '197407182005012002', 1151, '3/21-22', '3.85', 24),
('2111511026', 'CCE62103', '122DY', '195709071992031001', 1151, '3/21-22', '3.85', 24),
('2111511026', 'CCE62103', '122DY', '197303301999031008', 1151, '3/21-22', '3.85', 24),
('2111521004', 'JSI61145', '221DW', '198410062012121001', 1152, '4/22-23', '3.56', 24),
('2111521004', 'JSI61145', '221DW', '198904152019031009', 1152, '4/22-23', '3.56', 24),
('2111521004', 'JSI62121', '221DW', '198410062012121001', 1152, '4/22-23', '3.56', 24),
('2111521004', 'JSI62121', '221DW', '199308152022032017', 1152, '4/22-23', '3.56', 24),
('2111521004', 'JSI62122', '221DW', '199104172022031007', 1152, '4/22-23', '3.56', 24),
('2111521004', 'JSI62122', '221DW', '199108122019032018', 1152, '4/22-23', '3.56', 24),
('2111532015', 'JTI62121', '224RA', '198904152019031009', 1153, '1/20-21', '2,97', 21),
('2111532015', 'JTI62123', '224RA', '198307272008121003', 1153, '1/20-21', '2,97', 21),
('2111532015', 'JTI62125', '224RA', '198201182008121002', 1153, '1/20-21', '2,97', 21);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` char(10) NOT NULL,
  `Nama` varchar(25) DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Jenis_Kelamin` char(1) DEFAULT NULL,
  `Alamat` varchar(50) DEFAULT NULL,
  `No_Telp` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `Nama`, `Tanggal_Lahir`, `Jenis_Kelamin`, `Alamat`, `No_Telp`) VALUES
('2111511008', 'Pera Yani', '2003-12-01', 'P', 'Cupak Tangah', '085278115133'),
('2111511026', 'Ananda Vianny Haliza', '2003-08-04', 'P', 'Limau Manis', '085162844803'),
('2111512016', 'Ikhwanul Hakim', '2003-07-07', 'L', 'Lubuk Begalung', '082901820183'),
('2111512026', 'Teguh Alam Nasrah', '2003-08-05', 'L', 'Pauh', '082901820183'),
('2111513018', 'Jevon Al Salgus', '2003-08-08', 'L', 'A Yani', '085278115133'),
('2111521004', 'Luthfia Aulia', '2002-05-25', 'P', 'Irigasi', '082385986761'),
('2111532015', 'Fayza Zeevania', '2002-11-07', 'P', 'Lapai', '082288908437');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `Kode_MK` varchar(20) NOT NULL,
  `Nama_MK` varchar(25) DEFAULT NULL,
  `SKS` int(1) DEFAULT NULL,
  `Jadwal` varchar(25) DEFAULT NULL,
  `Ruangan` varchar(5) DEFAULT NULL,
  `Kelas` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`Kode_MK`, `Nama_MK`, `SKS`, `Jadwal`, `Ruangan`, `Kelas`) VALUES
('123', 'filsafat ruang', 3, 'rabu/12.00-15.00', 'H 2.3', 'B'),
('5719272', 'Ortodok', 2, 'rabu/12.00-15.00', 'H 2.3', 'A'),
('CCE61127', 'Pengalaman Pengguna', 2, 'Rabu/07.30 - 09.20', 'H 2.7', 'B'),
('CCE62101', 'Fisika 1', 2, 'Kamis/11.10 - 12.50', 'H 2.3', 'B'),
('CCE62102', 'Aljabar Linear', 4, 'Senin/09.20 - 11.00', 'H 2.8', 'B'),
('CCE62103', 'Matematika 1', 3, 'Senin/13.30 - 15.10', 'H 2.3', 'B'),
('CCE62110', 'Organisasi dan Arsitektur', 3, 'Selasa/07.30 - 10.10', 'H 2.3', 'B'),
('CCE62117', 'Keamanan Informasi 1', 2, 'Jum\'at/13.30 - 15.10', 'H 2.3', 'B'),
('CCE62119', 'Perancangan Sistem Digita', 2, 'Selasa/13.30 - 15.10', 'H 2.7', 'B'),
('JSI61145', 'Enterprise Resource Plann', 4, 'Kamis/07.30 - 10.10', 'H 2.5', 'B'),
('JSI62121', 'Analisis dan Visualisasi ', 2, 'Selasa/11.10 - 12.50', 'H 2.4', 'B'),
('JSI62122', 'Data Mining', 3, 'Rabu/07.30 - 10.10', 'H 2.6', 'B'),
('JTI62121', 'Pemrograman Dasar', 2, 'Kamis/09.20 - 11.10', 'H 2.7', 'B'),
('JTI62123', 'Keamanan Informasi', 2, 'Selasa/07.30 - 09.20', 'H 2.5', 'B'),
('JTI62125', 'Pemograman Web', 3, 'Senin/07.30 - 10.10', 'H 2.6', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `Kode_Prodi` int(5) NOT NULL,
  `Nama_Prodi` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`Kode_Prodi`, `Nama_Prodi`) VALUES
(1151, 'Teknik Komputer'),
(1152, 'Sistem Informasi'),
(1153, 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'wow', '$2y$10$TuG89FDnbAAkREBq7KWtGeuan6McUI.jglE683VuUGm/u.BAzQGrO'),
(4, 'admin', '$2y$10$L/J9STC2fQMtQKbnQxZAz.TUs7FUrmdCC2SBCcUrdC76bOo1gIClm'),
(5, 'root', '$2y$10$sEVeRWcJG/lyB3uWrNoo5O7whs1PlP/dBNS5hs8nm.pnDH9PjHLt2'),
(6, 'nanda', '$2y$10$6O.fyij4R26x23cKR9rzVuu0HjrUfUBvrS17Gc04izigE7naoEnf6'),
(7, 'amadiketoe', '$2y$10$nl08e0P.x.9tHpZVATjOUOU78.FDxjM7i.0gTLi3lnSFvfn3JSRUC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen_pa`
--
ALTER TABLE `dosen_pa`
  ADD PRIMARY KEY (`Kode_PA`);

--
-- Indexes for table `dosen_pengampu`
--
ALTER TABLE `dosen_pengampu`
  ADD PRIMARY KEY (`NIP_Dosen`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`NIM`,`Kode_MK`,`Kode_PA`,`NIP_Dosen`,`Kode_Prodi`,`Sem_TA`),
  ADD KEY `Kode_MK` (`Kode_MK`),
  ADD KEY `Kode_PA` (`Kode_PA`),
  ADD KEY `NIP_Dosen` (`NIP_Dosen`),
  ADD KEY `Kode_Prodi` (`Kode_Prodi`),
  ADD KEY `NIM` (`NIM`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`Kode_MK`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`Kode_Prodi`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `krs`
--
ALTER TABLE `krs`
  ADD CONSTRAINT `krs_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`),
  ADD CONSTRAINT `krs_ibfk_2` FOREIGN KEY (`Kode_MK`) REFERENCES `matakuliah` (`Kode_MK`),
  ADD CONSTRAINT `krs_ibfk_3` FOREIGN KEY (`Kode_PA`) REFERENCES `dosen_pa` (`Kode_PA`),
  ADD CONSTRAINT `krs_ibfk_4` FOREIGN KEY (`NIP_Dosen`) REFERENCES `dosen_pengampu` (`NIP_Dosen`),
  ADD CONSTRAINT `krs_ibfk_5` FOREIGN KEY (`Kode_Prodi`) REFERENCES `prodi` (`Kode_Prodi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
