-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2021 lúc 08:23 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `websitemvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
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
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminid`, `adminname`, `adminmail`, `adminuser`, `adminpass`, `adminlevel`) VALUES
(1, 'doan', 'doan.nguyenincognito@hcmut.edu.vn', 'doanadmin', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

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
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_user` (`id`, `name`, `address`, `phone`, `email`,`username`, `password`, `date_create`) VALUES
(5, 'Doan3', 'Tra Vinh1', '03531402471', 'ncongdoan24@hcmut.edu.vn','congdoan123', 'e10adc3949ba59abbe56e057f20f883e', '2022-11-19 05:09:11');

-- --------------------------------------------------------

CREATE TABLE `tbl_brand` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`id`, `name`) VALUES
(1, 'Rolex');

-- --------------------------------------------------------

CREATE TABLE `tbl_year` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_year`
--

INSERT INTO `tbl_year` (`id`, `year`) VALUES
(1, '2022'),
(2, '2021'),
(3, '2022'),
(4, '2019'),
(5, '2018'),
(6, '2017'),
(7, '2016'),
(8, '2015'),
(9, '2014'),
(10, '2013');

-- --------------------------------------------------------

CREATE TABLE `tbl_model` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_model`
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
