-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 23, 2024 lúc 07:51 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhatlaudata`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahoadon` int(225) NOT NULL,
  `quantity` int(225) NOT NULL,
  `total` varchar(225) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahoadon`, `quantity`, `total`, `date`, `time`) VALUES
(3, 2, '598.000', '2023-05-21', '22:54:00'),
(4, 7, '658.000', '2023-05-22', '14:19:00'),
(5, 8, '2,392.000', '2024-02-20', '08:54:00'),
(6, 8, '2,392.000', '2024-02-20', '00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `sex` varchar(25) NOT NULL,
  `birthday` date DEFAULT NULL,
  `sdt` int(225) NOT NULL,
  `quequan` varchar(225) NOT NULL,
  `chucvu` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `username`, `sex`, `birthday`, `sdt`, `quequan`, `chucvu`, `password`) VALUES
(1, 'DaoVanCong', 'Nam', '2001-12-10', 353754411, 'Phú Thọ', 'Nhân Viên', '2001'),
(2, 'VuThiThanhThao', 'Nữ', '2003-09-07', 989421130, 'Hải Dương', 'Nhân Viên', '2003'),
(4, 'NguyenVanDuong', 'Nam', '2002-01-12', 124658659, 'Vĩnh Phúc', 'Nhân Viên', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder_product`
--

CREATE TABLE `oder_product` (
  `id` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `phone` int(11) NOT NULL,
  `diachi` varchar(225) NOT NULL,
  `total` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `oder_product`
--

INSERT INTO `oder_product` (`id`, `name`, `phone`, `diachi`, `total`, `date`, `time`) VALUES
(1, 'DaoCong', 353754411, 'hanoi', '994.000', '2023-05-20', '24:59:59'),
(2, 'ThanhThao', 375019969, 'hanoi', '311.000', '2023-05-21', '20:55:00'),
(5, 'ThinhVu', 123456789, 'ha', '1,021.000', '2023-05-14', '20:41:00'),
(6, 'CongVien', 1234546788, 'BacGiang', '918.000', '2023-05-21', '20:43:00'),
(8, 'DaoDung', 1023456799, 'PhuTho', '770.000', '2023-05-21', '20:47:00'),
(9, 'Đào Văn Công', 353754411, 'Phú Thọ', '957.000', '2023-05-21', '22:40:00'),
(13, 'Fanta Cam', 1234, 'hanoi', '598.000', '2023-05-21', '22:54:00'),
(14, 'vien', 2147483647, 'h', '658.000', '2023-05-22', '14:19:00'),
(15, 'fgadsf', 6435345, '5fsafsaf', '2,392.000', '2024-02-20', '08:54:00'),
(16, 'sfasf', 2312312, 'fsasfsaf', '2,392.000', '2024-02-20', '00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(225) NOT NULL,
  `image` char(50) NOT NULL,
  `product_gr` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `price` int(225) NOT NULL,
  `discount` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `image`, `product_gr`, `name`, `price`, `discount`) VALUES
(1, 'lauhaisan.jpg', 'Lẩu', 'Lẩu Hải Sản', 299, '0%'),
(2, 'laurieucua.webp', 'Lẩu', 'Lâu Rưu Cua', 199, '0%'),
(3, 'lauduoibo.jpg', 'Lẩu', 'Lẩu Đuôi Bò', 399, '0%'),
(4, 'laude.jpg', 'Lẩu', 'Lẩu Dê', 299, '0%'),
(5, 'laugalae.jpg', 'Lẩu', 'Lẩu Gà Lá É', 299, '0%'),
(6, 'laubonhunggiam.jpg', 'Lẩu', 'Lẩu Bò Nhúng Giấm', 299, '0%'),
(7, 'sajagnbbq.jpg', 'Nướng', 'Combo BBQ', 499, '0%'),
(8, 'coca.jpg', 'Đồ Uống', 'Coca Cola', 12, '0%'),
(9, 'fantacam.jpg', 'Đồ Uống', 'Fanta Cam', 12, '0%');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahoadon`),
  ADD KEY `oder_detail_ibfk_2` (`quantity`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oder_product`
--
ALTER TABLE `oder_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahoadon` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `oder_product`
--
ALTER TABLE `oder_product`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
