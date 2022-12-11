-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 07:30 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rolexwatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `tbl_products` (
  `prd_id` int(5) NOT NULL,
  `prd_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img1` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `tbl_products` (`prd_id`, `prd_name`, `img`, `price`, `quantity`, `description`, `img1`, `img2`, `img3`, `year`) VALUES
(1, 'Đồng Hồ Rolex Sky Dweller 326238 Mặt Số Đen', 'm326238-0009.webp', 980070000, 5, 'Trong năm 2020, Rolex đã làm mới bộ sưu tập Sky-Dweller của mình với việc sử dụng dây Oysterflex thay cho dây da hay dây kim loại. Mẫu đồng hồ Rolex Sky Dweller 326238-0009 Mặt Số Đen là một trong những thiết kế như vậy, với mặt số màu đen trên nền vàng vàng.', 'sky-dweller1.png', 'sky-dweller2.png', 'sky-dweller3.png', 2020),
(2, 'Đồng Hồ Rolex Day-Date 40 228348RBR Mặt Số Vàng Champagne Nạm Kim Cương\r\n', 'Day-Date.png', 950060000, 4, 'Dòng đồng hồ Day-Date của Rolex có thể được coi là biểu tượng của sự thành công, sự giàu có. Trong đó, thiết kế nổi bật nhất chính là những phiên bản vàng vàng nguyên khối, với mặt số Champagne giống như chiếc Rolex Day-Date 40 228348RBR-0002. Nếu bạn để ý, Sơn Tùng MTP cũng đã đeo thiết kế như vậy trong MV \"Chúng ta của hiện tại\".', 'Day-Date1.png', 'Day-Date2.png', 'Day-Date3.png', 2015),
(3, 'Đồng Hồ Rolex Yacht Master 268621 Mặt Số Chocolate', 'Yatch-Master.png', 725406500, 6, 'Đối với mỗi thương hiệu đồng hồ Thụy Sĩ, định hướng phong cách cho những bộ sưu tập của mình là một trong những nét đặc trưng không thể thiếu, giúp các nghệ nhân chế tác đồng hồ dễ dàng tạo ra tuyệt phẩm riêng tùy theo dòng sản phẩm. Đặc biệt, trong số đó, dòng sản phẩm đồng hồ lấy cảm hứng từ biển cả luôn là một trong những chủ đề được các nhà sản xuất hàng đầu khai thác với minh chứng tiêu biểu là Seamaster (nhà Omega), Nautilus (Nhà Patek Philippe). Và khi nói đến Rolex, chúng ta cũng không t',  'Yatch-Master2.png', 'Yatch-Master3.png', 'Yatch-Master4.png', 1992),
(4, 'Đồng Hồ Rolex Deepsea 116660 Mặt Số Xanh D-Blue', 'Sea-Dweller.png', 339000000, 2, 'Nằm trong bộ sưu tập thợ lặn chuyên nghiệm Sea-Dweller được ra mắt vào năm 1967 khi mà bấy giờ những chiếc Submariner không đủ đáp ứng được những chuyến lặn sâu trong đoàn thám hiểm chuyên nghiệp. Những chiếc Sea-Dweller hiện nay dễ phân biệt được với Submariner nhờ bộ vỏ dày có kích thước lớn hơn cùng với van xả khí heli bên cạnh sườn.',  'Sea-Dweller1.png', 'Sea-Dweller2.png', 'Sea-Dweller3.png', 1967);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminid` int(11) NOT NULL,
  `adminname` varchar(255) NOT NULL,
  `adminmail` varchar(255) NOT NULL,
  `adminuser` varchar(255) NOT NULL,
  `adminpass` varchar(255) NOT NULL,
  `adminlevel` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminid`, `adminname`, `adminmail`, `adminuser`, `adminpass`, `adminlevel`) VALUES
(1, 'doan', 'doan.nguyenincognito@hcmut.edu.vn', 'doanadmin', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`id`, `name`) VALUES
(1, 'Rolex'),
(2, 'Patek Philippe'),
(3, 'Audemars Piguet'),
(4, 'A.Lange & Söhne'),
(5, 'Omega'),
(6, 'Jaeger-LeCoultre'),
(7, 'IWC Schaffhausen'),
(8, 'Cartier'),
(9, 'Nordgreen'),
(10, 'Vacheron Constantin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_model`
--

CREATE TABLE `tbl_model` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_model`
--

INSERT INTO `tbl_model` (`id`, `name`) VALUES
(1, 'Cartier Santos'),
(2, 'Jaeger-LeCoultre Reverso'),
(3, "IWC Pilot's Watch"),
(4, 'Patek Philippe Perpetual Calendar Chronograph'),
(5, 'Rolex Datejust'),
(6, 'Breitling Navitimer'),
(7, 'Rolex Submariner'),
(8, 'Omega Speedmaster'),
(9, 'Zenith El Primero'),
(10, 'Audemars Piguet Royal Oak');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `address`, `phone`, `email`, `username`, `password`, `date_create`) VALUES
(5, 'Doan3', 'Tra Vinh1', '03531402471', 'ncongdoan24@hcmut.edu.vn', 'congdoan123', 'e10adc3949ba59abbe56e057f20f883e', '2022-11-19 05:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_year`
--

CREATE TABLE `tbl_year` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_year`
--

INSERT INTO `tbl_year` (`id`, `year`) VALUES
(1, 2022),
(2, 2021),
(3, 2022),
(4, 2019),
(5, 2018),
(6, 2017),
(7, 2016),
(8, 2015),
(9, 2014),
(10, 2013);

--
-- Indexes for dumped tables
--




--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
