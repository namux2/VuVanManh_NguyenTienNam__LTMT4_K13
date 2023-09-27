-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 27, 2023 lúc 11:33 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `weboto`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `ID` int(11) NOT NULL,
  `HangXe` varchar(255) DEFAULT NULL,
  `TenXe` varchar(255) DEFAULT NULL,
  `NamSanXuat` int(11) DEFAULT NULL,
  `HopSo` varchar(50) DEFAULT NULL,
  `SoKmDaChay` varchar(225) DEFAULT NULL,
  `Gia` varchar(225) DEFAULT NULL,
  `NoiBan` varchar(255) DEFAULT NULL,
  `NgayBan` date DEFAULT NULL,
  `Anh` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ID`, `HangXe`, `TenXe`, `NamSanXuat`, `HopSo`, `SoKmDaChay`, `Gia`, `NoiBan`, `NgayBan`, `Anh`) VALUES
(9, 'Toyota', 'Toyota Wigo 1.2G 4X2 AT 2018', 2012, 'Tự Động', '40.000km', '1 tỷ 200 triệu', 'Hà Nội', '2023-09-24', '13.jpg'),
(10, ' Mercedes-Benz ', 'Mercedes-Benz GLC 200 2022', 2012, 'Tự Động', '40.000km', '1 tỷ 700 triệu', 'Hà Nội', '2023-09-10', '63e753e9df7a8.jpg'),
(11, 'BMW 3 Series 320I', 'BMW 3 Series 320I', 2016, 'Bán Tự Động', '70.000km', '2 tỷ 400 triệu', 'Thái Bình', '2023-09-02', 'MiUlHLsvwLJyXIeMpxPoxJh12B6DgVrGtnW1GdVv.jpg'),
(12, 'Hyundai Sonata 2016', 'Hyundai Sonata 2016', 2018, 'Tự Động', '200.000km', '500 triệu', 'Phú Thọ', '2023-09-10', 'ZXjusycdAXcfeYZNM1koeUyrMdQM0Cwh9ld7DwEV.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`) VALUES
(31, 'Vu Van Manh', 'vaba5021@gmail.com', 'vaba5021@gmail.com', 'admin'),
(33, 'NGUYEN TIEN NAM', 'namnr@gmail.com', 'namnr@gmail.com', 'admin'),
(34, 'NGUYEN TIEN NAM', 'nambrt0@gmail.com', 'nambrt0@gmail.com', 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
