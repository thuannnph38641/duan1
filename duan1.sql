-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2023 lúc 01:13 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

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
(7, 'banner5.jpg'),
(12, 'Rectangle 1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `idbl` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `idtk` int(10) NOT NULL,
  `idsp` int(10) NOT NULL,
  `ngaybinhluan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`idbl`, `noidung`, `idtk`, `idsp`, `ngaybinhluan`) VALUES
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
(153, '123', 3, 9, '2023-11-23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendm`) VALUES
(1, 'Đội tuyển quốc gia'),
(2, 'Các câu lạc bộ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `idtk` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idhoadon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `pttt` varchar(255) NOT NULL COMMENT '1.Trả khi nhận hàng\r\n2.Thanh toán qua ngân hàng\r\n3.Thanh toán online',
  `ngaydathang` date NOT NULL,
  `tong` int(11) NOT NULL,
  `trangthai` varchar(255) NOT NULL DEFAULT '0' COMMENT '1.Chờ xác nhận\r\n2.Đang xử lý\r\n3.Đang giao'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tenloai` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `gia` int(11) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tenloai`, `img`, `gia`, `mota`, `luotxem`, `iddm`) VALUES
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
  `diachi` varchar(255) NOT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `diachi`, `tel`, `role`) VALUES
(1, 'Admin', '12345', 'admin@gmail.com', 'Thái Bình', '12910291', 1),
(2, 'thuan2004', '123456', 'thuannnph38641@fpt.edu.vn', 'Thai Binh', '39492094', 2),
(3, 'thuan', '123', 'thuan@gmail.com', 'Hà Nội', '646363', 2),
(6, 'thuan2352', '123', 'thuan010444@gmaiil.com', 'Thái Bình', '62768236', 2);

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
  ADD PRIMARY KEY (`idbl`),
  ADD KEY `idsp` (`idsp`),
  ADD KEY `idtk` (`idtk`);

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
  ADD KEY `sanpham_giohang` (`idsp`),
  ADD KEY `taikhoan_giohang` (`idtk`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `idbl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `idsp` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `idtk` FOREIGN KEY (`idtk`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `hoadon_giohang` FOREIGN KEY (`idhoadon`) REFERENCES `hoadon` (`id`),
  ADD CONSTRAINT `sanpham_giohang` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `taikhoan_giohang` FOREIGN KEY (`idtk`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
