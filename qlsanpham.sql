-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
<<<<<<< HEAD:qlsp.sql
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 04:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29
=======
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 04, 2020 lúc 06:29 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4
>>>>>>> 41913a87c29eb7f50679dc3f807aa730acd5404e:qlsanpham.sql

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `macthd` int(11) NOT NULL,
  `mahd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(50) NOT NULL,
  `dongia` int(11) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `dongia`, `hinh`, `loai`) VALUES
<<<<<<< HEAD:qlsp.sql
(1, 'Nokia 6.1 Plus', 4000, '1.jpg', 2);
=======
(1, 'SAMSUNG GALAXY S20+', 19999000, 'SSGALAXYS20+19TR.png', 3),
(2, 'SAMSUNG GALAXY FLOD', 50000000, 'SSGALAXYFOLD50TR.png', 3),
(3, 'SAMSUNG GALAXY  20 ULEA', 2000000, 'SSGALAXYS20ULREA20TR.png', 3),
(4, 'IPHONE  SE 256 GB', 17000000, 'IPHONESE256GB17TR.png', 1),
(5, 'IPHONE 11 PRO MAX 512 GB', 35000000, 'IPHONE11PROMAX512GB39TR.png', 1),
(6, 'OPPO A9 ', 6000000, 'OPPOA06TR.png', 5),
(7, 'OPPO FIND X2', 20000000, 'OPPOFINDX220TR.png', 5),
(8, 'VIVO S1 PRO', 5999000, 'VIVOS1PRO6TR.png', 4),
(9, 'VIVO V19', 9999000, 'VIVOV199TR.png', 4);
>>>>>>> 41913a87c29eb7f50679dc3f807aa730acd5404e:qlsanpham.sql

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(11) NOT NULL,
  `ngaylaphd` date NOT NULL,
  `makh` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `ngaylaphd`, `makh`, `tongtien`) VALUES
<<<<<<< HEAD:qlsp.sql
(1, '0000-00-00', 2, 20000);
=======
(1, '0000-00-00', 2, 20000),
(2, '2020-07-15', 4, 30000000),
(3, '2020-07-08', 1, 10000000),
(4, '2020-07-01', 2, 2000000),
(5, '2020-07-29', 4, 7999000);
>>>>>>> 41913a87c29eb7f50679dc3f807aa730acd5404e:qlsanpham.sql

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `hoten` varchar(50) NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `hoten`, `dienthoai`, `email`) VALUES


-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  `mota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `mota`) VALUES
<<<<<<< HEAD:qlsp.sql

=======
(1, 'Iphone', 'iphone giá rẻ'),
(2, 'Nokia', 'Điện Thoại Đẹp'),
(3, 'SAMSUNG', 'Điện Thoại Xinh'),
(4, 'VIVO', 'VIVO VIRA'),
(5, 'OPPO', 'Điện thoại siêu đẹp');
>>>>>>> 41913a87c29eb7f50679dc3f807aa730acd5404e:qlsanpham.sql

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD KEY `mahd` (`mahd`,`mahh`),
  ADD KEY `mahh` (`mahh`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`),
  ADD KEY `loai` (`loai`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `makh` (`makh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
<<<<<<< HEAD:qlsp.sql
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
>>>>>>> 41913a87c29eb7f50679dc3f807aa730acd5404e:qlsanpham.sql

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
<<<<<<< HEAD:qlsp.sql
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
=======
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
>>>>>>> 41913a87c29eb7f50679dc3f807aa730acd5404e:qlsanpham.sql

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`mahh`) REFERENCES `hanghoa` (`mahh`);

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`loai`) REFERENCES `loai` (`maloai`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
