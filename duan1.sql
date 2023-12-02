-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2023 lúc 01:02 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `img`) VALUES
(1, 'banner1.jpg'),
(2, 'banner2.jpg'),
(5, 'banner3.png'),
(6, 'banner4.png'),
(7, 'banner5.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(1, 'tt', 3, 2, '2023-11-24'),
(106, '', 3, 3, '2023-11-22'),
(107, 'lol', 3, 1, '2023-11-22'),
(130, '', 3, 3, '2023-11-22'),
(131, '', 3, 3, '2023-11-22'),
(132, '', 3, 1, '2023-11-22'),
(133, '', 3, 1, '2023-11-22'),
(134, '', 3, 1, '2023-11-22'),
(135, '', 3, 3, '2023-11-22'),
(136, '', 3, 1, '2023-11-22'),
(137, '', 3, 3, '2023-11-22'),
(138, '', 3, 1, '2023-11-22'),
(139, '', 3, 3, '2023-11-22'),
(140, 'hay', 3, 1, '2023-11-23'),
(141, '1', 3, 1, '2023-11-23'),
(142, '1', 3, 3, '2023-11-23'),
(143, '1', 3, 1, '2023-11-23'),
(144, '1', 3, 1, '2023-11-23'),
(145, '1', 3, 1, '2023-11-23'),
(146, '1', 3, 1, '2023-11-23'),
(147, '1', 3, 1, '2023-11-23'),
(148, '1', 3, 1, '2023-11-23'),
(149, '123', 3, 1, '2023-11-23'),
(150, '123', 3, 1, '2023-11-23'),
(151, '123', 3, 1, '2023-11-23'),
(152, '123', 3, 9, '2023-11-23'),
(153, '123', 3, 9, '2023-11-23'),
(154, 'hay', 3, 10, '2023-11-27'),
(155, 'alo', 9, 10, '2023-11-28'),
(156, 'hay', 9, 9, '2023-11-28'),
(157, 'hay', 9, 10, '2023-11-28'),
(158, 'hay', 9, 10, '2023-11-28'),
(159, 'hay', 9, 10, '2023-11-28'),
(160, 'hay', 9, 10, '2023-11-28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(1, 'Đội tuyển quốc gia'),
(2, 'Các câu lạc bộ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idhoadon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idhoadon`) VALUES
(1, 9, 5, 'upload/bvb.png', 'Áo đấu câu lạc bộ BVB', 200, 1, 200, 4),
(2, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 4),
(3, 9, 9, 'upload/intermilan.png', 'Áo quần thi đấu của CLB Inter Milan mùa 2023-2024', 280, 1, 280, 4),
(4, 9, 5, 'upload/bvb.png', 'Áo đấu câu lạc bộ BVB', 200, 1, 200, 5),
(5, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 5),
(6, 9, 9, 'upload/intermilan.png', 'Áo quần thi đấu của CLB Inter Milan mùa 2023-2024', 280, 1, 280, 5),
(7, 9, 5, 'upload/bvb.png', 'Áo đấu câu lạc bộ BVB', 200, 1, 200, 6),
(8, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 6),
(9, 9, 9, 'upload/intermilan.png', 'Áo quần thi đấu của CLB Inter Milan mùa 2023-2024', 280, 1, 280, 6),
(10, 9, 5, 'upload/bvb.png', 'Áo đấu câu lạc bộ BVB', 200, 1, 200, 7),
(11, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 7),
(12, 9, 9, 'upload/intermilan.png', 'Áo quần thi đấu của CLB Inter Milan mùa 2023-2024', 280, 1, 280, 7),
(13, 9, 5, 'upload/bvb.png', 'Áo đấu câu lạc bộ BVB', 200, 1, 200, 8),
(14, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 8),
(15, 9, 9, 'upload/intermilan.png', 'Áo quần thi đấu của CLB Inter Milan mùa 2023-2024', 280, 1, 280, 8),
(16, 9, 5, 'upload/bvb.png', 'Áo đấu câu lạc bộ BVB', 200, 1, 200, 9),
(17, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 9),
(18, 9, 9, 'upload/intermilan.png', 'Áo quần thi đấu của CLB Inter Milan mùa 2023-2024', 280, 1, 280, 9),
(19, 9, 5, 'upload/bvb.png', 'Áo đấu câu lạc bộ BVB', 200, 1, 200, 10),
(20, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 10),
(21, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 11),
(22, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 11),
(23, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 12),
(24, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 12),
(25, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 13),
(26, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 13),
(27, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 14),
(28, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 14),
(29, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 15),
(30, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 15),
(31, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 16),
(32, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 16),
(33, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 17),
(34, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 17),
(35, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 18),
(36, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 18),
(37, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 19),
(38, 9, 8, 'upload/roma.png', 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 220, 1, 220, 19),
(39, 3, 9, 'upload/intermilan.png', 'Áo quần thi đấu của CLB Inter Milan mùa 2023-2024', 280, 1, 280, 20),
(40, 3, 9, 'upload/intermilan.png', 'Áo quần thi đấu của CLB Inter Milan mùa 2023-2024', 280, 1, 280, 21),
(41, 3, 5, 'upload/bvb.png', 'Áo đấu câu lạc bộ BVB', 200, 1, 200, 21);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL DEFAULT 0,
  `hd_name` varchar(255) NOT NULL,
  `hd_email` varchar(255) NOT NULL,
  `hd_address` varchar(255) NOT NULL,
  `hd_tel` int(11) NOT NULL,
  `hd_pttt` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1.Trả khi nhận hàng\r\n2.Thanh toán qua ngân hàng\r\n3.Thanh toán online',
  `ngaydathang` varchar(50) NOT NULL,
  `tong` int(11) NOT NULL,
  `trangthai` varchar(255) NOT NULL DEFAULT '0' COMMENT '1.Chờ xác nhận\r\n2.Đang xử lý\r\n3.Đang giao'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id`, `iduser`, `hd_name`, `hd_email`, `hd_address`, `hd_tel`, `hd_pttt`, `ngaydathang`, `tong`, `trangthai`) VALUES
(1, 0, 'thuan676', 'thuan0104@gmaiil.com', '4564646454', 0, 0, '05:58:17am 28/11/2023', 700, '0'),
(2, 0, 'thuan676', 'thuan0104@gmaiil.com', '4564646454', 0, 0, '05:59:54am 28/11/2023', 700, '0'),
(3, 0, 'thuan676', 'thuan0104@gmaiil.com', '4564646454', 0, 0, '05:59:57am 28/11/2023', 700, '0'),
(4, 0, 'thuan676', 'thuan0104@gmaiil.com', '4564646454', 0, 0, '06:00:15am 28/11/2023', 700, '0'),
(5, 0, 'thuan676', 'thuan0104@gmaiil.com', '4564646454', 0, 0, '06:02:18am 28/11/2023', 700, '0'),
(6, 0, 'thuan676', 'thuan0104@gmaiil.com', '4564646454', 0, 0, '06:10:34am 28/11/2023', 700, '0'),
(7, 0, 'thuan676', 'thuan0104@gmaiil.com', '4564646454', 0, 0, '06:12:35am 28/11/2023', 700, '0'),
(8, 0, 'thuan676', 'thuan0104@gmaiil.com', '4564646454', 0, 0, '06:12:57am 28/11/2023', 700, '0'),
(9, 0, 'thuan676', 'thuan0104@gmaiil.com', '4564646454', 0, 0, '06:13:17am 28/11/2023', 700, '0'),
(10, 9, 'thuan676', 'thuan0104@gmaiil.com', '4564646454', 0, 0, '07:12:31am 28/11/2023', 420, '0'),
(11, 9, 'thuan676', 'thuan0104@gmaiil.com', '4564646454', 0, 0, '08:51:03am 28/11/2023', 440, '0'),
(12, 9, 'thuan676', 'thuan0104@gmaiil.com', '4564646454', 0, 0, '08:51:52am 28/11/2023', 440, '0'),
(13, 9, 'thuan676', 'thuan0104@gmaiil.com', '4564646454', 0, 0, '08:53:10am 28/11/2023', 440, '0'),
(14, 9, 'thuan676', 'thuan0104@gmaiil.com', '4564646454', 0, 0, '08:53:37am 28/11/2023', 440, '0'),
(15, 9, 'thuan676', 'thuan0104@gmaiil.com', '4564646454', 0, 0, '08:54:58am 28/11/2023', 440, '0'),
(16, 9, 'thuan676', 'thuan0104@gmaiil.com', '4564646454', 0, 0, '08:55:20am 28/11/2023', 440, '0'),
(17, 9, 'thuan676', 'thuan0104@gmaiil.com', '4564646454', 0, 0, '08:55:29am 28/11/2023', 440, '0'),
(18, 9, 'thuan676', 'thuan0104@gmaiil.com', '4564646454', 0, 0, '08:59:49am 28/11/2023', 440, '0'),
(19, 9, 'thuan676', 'thuan0104@gmaiil.com', '4564646454', 0, 0, '09:00:05am 28/11/2023', 440, '0'),
(20, 3, 'thuan', 'thuan@gmail.com', '646363', 0, 0, '09:29:34am 28/11/2023', 280, '0'),
(21, 3, 'thuan', 'thuan@gmail.com', 'Hà Nội', 646363, 0, '09:33:32am 28/11/2023', 480, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `img`, `price`, `mota`, `luotxem`, `iddm`) VALUES
(1, 'Áo đấu manchester united mùa 2023-2024', 'manunited.png', 250, 'Áo đấu câu lạc bộ manchester united mùa 2023-2024', 20, 2),
(2, 'Áo Đội tuyển anh ', 'tuyenanh.jpg', 250, 'Áo thi đấu của tuyển anh mùa giải 2023-2024', 15, 1),
(3, 'Áo câu lạc bộ chelsea mùa 2023-2024', 'chelsea.png', 250, 'Áo đấu câu lạc bộ chelsea mùa giải 2013-2024', 10, 2),
(4, 'Bộ trang phục thi đấu đội tuyển Italya ', 'italya.jfif', 250, 'Áo quần thi đấu của đội tuyển Ý', 15, 1),
(5, 'Áo đấu câu lạc bộ BVB', 'bvb.png', 200, 'Áo quần thi đấu sân nhà của câu lạc bộ BVB mùa giải 2023-2024', 30, 2),
(6, 'Trang phục thi đấu của đội tuyển Pháp năm 2023', 'tuyenphap.jpg', 230, 'Áo quần thi đấu của đội tuyển Pháp mùa giải 2023-2024', 24, 1),
(7, 'Trang phục thi đấu của đội tuyển Đức năm 2023', 'tuyenduc.jpg', 280, 'Trang phục thi đấu của đội tuyển Đức năm 2023-2024', 18, 1),
(8, 'Áo quần thi đấu của CLB ROMA mùa 2023-2024', 'roma.png', 220, 'Trang phục thi đấu của CLB ROMA mùa giải 2023-2024', 28, 2),
(9, 'Áo quần thi đấu của CLB Inter Milan mùa 2023-2024', 'intermilan.png', 280, 'Trang phục thi đấu sân nhà của CLB Inter Milan mùa giải 2023-2024', 33, 2),
(10, 'Áo quần thi đấu của CLB Inter Miami mùa giải 2022-2023', 'intermiami.png', 250, 'Trang phục thi đấu của CLB Inter Miami tại giải đấu MLS mùa giải 2022-2023', 19, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'Admin', '12345', 'admin@gmail.com', 'Thái Bình', '12910291', 1),
(2, 'thuan2004', '123456', 'thuannnph38641@fpt.edu.vn', 'Thai Binh', '39492094', 2),
(3, 'thuan', '123', 'thuan@gmail.com', 'Hà Nội', '646363', 2),
(6, 'thuan2352', '123', 'thuan010444@gmaiil.com', 'Thái Bình', '62768236', 2),
(9, 'thuan676', '12399', 'thuan0104@gmaiil.com', 'Thôn An Lạc', '4564646454', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsp` (`idpro`),
  ADD KEY `idtk` (`iduser`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanpham_giohang` (`idpro`),
  ADD KEY `taikhoan_giohang` (`iduser`),
  ADD KEY `hoadon_giohang` (`idhoadon`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `idpro` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `iduser` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `hoadon_giohang` FOREIGN KEY (`idhoadon`) REFERENCES `hoadon` (`id`),
  ADD CONSTRAINT `sanpham_giohang` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `taikhoan_giohang` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
