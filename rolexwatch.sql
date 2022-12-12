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

DROP TABLE IF EXISTS tbl_admin, tbl_brand, tbl_model, tbl_products, tbl_user, tbl_year, tbl_customer;

--
-- Table structure for table `products`
--

CREATE TABLE `tbl_products` (
  `prd_id` int(5) NOT NULL,
  `prd_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sold` int(10) NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img1` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `tbl_products` (`prd_id`, `prd_name`, `img`, `price`, `brand`, `model`, `sold`, `description`, `img1`, `img2`, `img3`, `year`) VALUES
(1, 'Jaeger-LeCoultre Reverso Classic Duoface Q3842520', 'Jaeger-LeCoultre.png', 50000, 'Jaeger LeCoultre', 'Jaeger-LeCoultre Reverso', 500000, 'Đồng hồ Jaeger-LeCoultre Reverso Classic Duoface Small Seconds 3842520 là mẫu đồng hồ đến từ thương hiệu Jaeger-LeCoultre, có kích cỡ mặt số 47 x 28.3mm dành cho các quý ông lịch lãm. Chiếc đồng hồ sử dụng bộ máy cơ học cót tay có xuất xứ Thụy Sĩ, đồng hồ có thể vận hành trong thời gian dài, có độ bền và giá trị sưu tầm cao. Chất liệu vỏ được chế tác từ Vàng khối, chất liệu quý sang trọng nhất trong giới đồng hồ. Đồng hồ vàng khối luôn là khao khát của người chơi đồng hồ. Đồng hồ được trang bị d', 'Jaeger-LeCoultre1.png', 'Jaeger-LeCoultre2.png', 'Jaeger-LeCoultre3.png', 2020),
(2, 'Đồng Hồ Cartier Santos De Cartier WH100651', 'Cartier.png', 80000, 'Cartier', 'Cartier Santos', 100000000, 'Kể từ lần đầu tiên được chế tác vào năm 1904, tính đến hiện tại, bộ sưu tập Cartier Santos đã đem về vô vàn tiếng vang lớn cho thương hiệu Cartier lẫn người sáng lập râ mẫu đồng hồ này. Phản ánh đúng triết lý không ngừng sáng tạo và thay đổi theo xu hướng thời đại, những model thuộc dòng Cartier Santos đã viết lên những trang sử oai hùng trong làng đồng hồ thế giới. Và không để quý khách hàng phải chờ đợi lâu, ngày hôm nay, Gia Bảo Luxury rất hân hạnh được giới thiệu chiếc Cartier Santos De Cart', 'Cartier1.png', 'Cartier2.png', 'Cartier3.png', 1904),
(3, 'Đồng hồ Patek Philippe Perpetual Calendar Chronograph 3970E', 'Patek-Philippe.png', 10000, 'Patek Philippe', 'Patek Philippe Perpetual Calendar Chronograph', 2000, 'Patek Philippe 3970 được sản xuất từ năm 1986 cho đến năm 2004, phiên bản 3970 là hậu bối của model 2499 và là tiền bối của model 5970. Phiên bản 3970 với nút bấm dạng tròn, dáng tai càng ôm vát. Toàn bộ lớp vỏ được đánh bóng rất tỉ mỉ. Patek Philippe đã thay thế máy Valjoux bằng một cỗ máy chất lượng hơn, được tuỳ biến (modified) cho bắt mắt hơn từ Base cỗ máy cơ bản là Lemania 2310 mang tên CH 27-70Q. Ngoài ra 2 chức năng mới được hiển thị trên mặt số 3970 đó là năm nhuận và kim 24 giờ.', 'Patek-Philippe1.png', 'Patek-Philippe2.png', 'Patek-Philippe.png3', 1986),
(4, 'Đồng Hồ Omega Speedmaster 310.20.42.50.01.001', 'Omega-Speedmaster.png', 30000, 'Nordgreen', 'Omega Speedmaster', 200000, 'Speedmaster là một trong những bộ sưu tập đồng hồ mang tính biểu tượng nhất của thương hiệu Omega đã chinh phục được trái tim của đông đảo người yêu đồng hồ trên toàn cầu. Ra mắt lần đầu vào năm 1969 với ý nghĩa nhân dịp kỷ niệm 50 năm tàu con thoi Apollo 11 bay lên Mặt Trăng, Omega Speedmaster Moonwatch Anniversary với số lượng giới hạn chỉ 6969 chiếc đã tạo nên một cơn sốt trong làng đồng hồ thế giới.', 'Omega-Speedmaster1.png', 'Omega-Speedmaster2.png', 'Omega-Speedmaster3.png', 1969),
(5, 'Đồng Hồ Rolex Datejust 36 126281RBR Mặt Số Vi Tính Chocolate', 'Datejust.png', 40000, 'Rolex', 'Rolex Datejust', 100000, 'Vào năm 2018, phiên bản đồng hồ Rolex Oyster Datejust 36 đã được cập nhật toàn bộ từ thiết kế cho đến bộ máy bên trong. Với việc giới thiệu tại Baselworld 2018, những chiếc Datejust 36 cho thấy sự chính xác tuyệt vời của mình khi có sai số hoạt động là -2/+2 giây/ngày. Thuộc dòng Rolex Oyster Datejust 36 mới nhất là phiên bản mang mã hiệu ref. 126281RBR đã có mặt tại Gia Bảo Luxury ngày hôm nay.', 'Datejust1.png', 'Datejust2.png', 'Datejust3.png', 2018),
(6, 'Đồng Hồ IWC Pilot’s Schaffhausen IW388102', 'IWC-Pilot.png', 60000, 'IWC Schaffhausen', 'IWC Pilot', 20000, 'Mới được giới thiệu tại sự kiện Watches and Wonders 2021, chiếc IWC Pilot’s Schaffhausen IW388102 đã tiếp nối thành công của bộ sưu tập đồng hồ phi công của IWC. Đây là một thiết kế theo đúng phong cách cơ bản, mạnh mẽ nhưng cũng rất tinh tế và đẹp mắt.', 'IWC-Pilot1.png', 'IWC-Pilot.2png', 'IWC-Pilot3.png', 2021),
(7, 'Đồng Hồ Rolex Submariner 126618LN Mặt Số Đen', 'Submariner.png', 43000, 'Rolex', 'Rolex Submariner', 500000, 'Bộ sưu tập Submariner vừa mới được Rolex cập nhật phiên bản 41mm, với rất nhiều cải tiến mới. Với đợt giới thiệu vào tháng 9/2020 vừa rồi, chúng ta có thêm tới 8 mẫu Submariner mới, trong đó có chiếc Rolex Submariner 126618LN-0002 Mặt Số Đen.\r\n\r\n', 'Submariner1.png', 'Submariner2.png', 'Submariner3.png', 2020),
(8, 'Đồng Hồ Audemars Piguet Royal Oak 15500ST.OO.1220ST.01', ' Audemars-Piguet.png', 56000, ' Audemars Piguet ', 'Audemars Piguet Royal Oak', 120000, 'Tại SIHH 2019, Audemars Piguet đã giới thiệu mẫu đồng hồ Royal Oak 41mm mang mã hiệu 15500ST.OO.1220ST.01. Nhìn qua vẻ bề ngoài thì có thể nói đây chính là phiên bản copy của mẫu Jumbo Extra Thin 39mm 15202ST.OO.1240ST.01 mà Gia Bảo Luxury đang sở hữu. Tuy nhiên thì mọi thứ không phải như vậy, 15500ST khác hơn rất nhiều.', ' Audemars-Piguet1.png', ' Audemars-Piguet2.png', ' Audemars-Piguet3.png', 2019),
(9, 'Đồng Hồ Zenith El Primero Chronomaster 03.2040.400/26.C496', 'Zenith.png', 6000, 'Zenith El Primero', 'Zenith El Primero Chronomaster', 45000, 'Thương hiệu Zenith vốn đã quá nổi tiếng, sở hữu nhiều thiết kế thành công. Trong đó, chúng ta không thể không kể đến dòng máy El Primero huyền thoại - dòng máy đã gây tiếng vang lớn khi được giới thiệu lần đầu vào năm 1969. Với chiếc El Primero Chronomaster 03.2040.400/26.C496, Zenith tiếp tục kéo dài thành công của bộ máy đó, sử dụng một thiết kế hiện đại và trẻ trung.', 'Zenith1.png', 'Zenith2.png', 'Zenith3.png', 1969),
(10, 'Đồng Hồ Breitling Navitimer 01 RB012012/BA49/743P', 'Breitling-Navitimer.png', 15000, 'Breitling ', 'Breitling Navitimer', 300000, 'Nhắc tới những chiếc đồng hồ dành cho phi công, người ta sẽ nhớ ngay đến cái tên Breitling, thương hiệu sản xuất đồng hồ chronograph cùng vòng tachymeter nổi tiếng trên thế giới. Thiết kế của nhà sản xuất Breitling không chỉ là công cụ hỗ trợ đắc lực cho những người phi công thường xuyên làm việc trên bầu trời, mà còn thể hiện một đẳng cấp riêng, xu hướng dẫn đầu dòng đồng hồ thể thao hiện đại. Có mặt tại Gia Bảo Luxury là một thiết kế nằm trong bộ sưu tập Navitimer biểu tượng của nhà sản xuất B', 'Breitling-Navitimer1.png', 'Breitling-Navitimer2.png', 'Breitling-Navitimer3.png', 1969),
(11, 'VACHERON CONSTANTIN 8006F/000G-B499 EGÉRIE MOON PHASE 37', 'varcheron-constantin.png', 70000, 'varcheron Constantin', 'Varcheron Constantin Egérie Moon', 5000, 'Lấy cảm hứng từ Haute Couture, chiếc đồng hồ Fine Watchmaking này lấp lánh với ánh sáng của 845 viên kim cương cắt tròn. Lịch tuần trăng được chiếu sáng một cách quý giá từ vị trí 1 đến 2 giờ, nơi hai mặt trăng xà cừ lần lượt xuất hiện sau những đám mây tinh thể sapphire. Bầu trời đầy sao gợi nhớ một cách tinh tế màu xanh nửa đêm của hai dây đeo có thể hoán đổi cho nhau – bằng sa tanh và da cá sấu – mỗi dây đều có khóa tiêu chuẩn nạm đá quý', 'varcheron-constantin1.png', 'varcheron-constantin2.png', 'varcheron-constantin3.png', 2021),
(12, 'Đồng Hồ Rolex Sky Dweller 326938 Mặt Số Đen', 'Sky-Dweller.png', 50000, 'Rolex', 'Rolex Sky Dweller', 30000, 'Nếu như để nói về tính ứng dụng cao và sự sáng tạo thông minh trong sản xuất đồng hồ, thì có lẽ không có thương hiệu nào vượt qua được Rolex. Rolex định hướng rất rõ cho con đường phát triển của mình, để ngày càng nâng cao chất lượng cho từng sản phẩm. Hôm nay, Gia Bảo Luxury xin được giới thiệu với quý khách hàng về một trong những thiết kế vô cùng thông minh và mới mẻ từ Rolex - Rolex Sky Dweller 326938.', 'Sky-Dweller1.png', 'Sky-Dweller2.png', 'Sky-Dweller3.png', 2022);
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `cus_name` varchar(255) NOT NULL,
  `cus_mail` varchar(255) NOT NULL,
  `cus_phone` varchar(30) NOT NULL,
  `cus_messages` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
