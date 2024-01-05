-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2023 lúc 04:18 AM
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
-- Cơ sở dữ liệu: `cakephp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `idCM` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `idKH` int(11) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`idCM`, `idSP`, `idKH`, `ngaybl`, `noidung`) VALUES
(1, 27, 3, '2023-10-23', 'đẹp quá ta\r\n'),
(2, 27, 3, '2023-10-23', 'game hay quá ta'),
(3, 30, 3, '2023-10-23', 'Game này chưa hay lắm'),
(4, 29, 3, '2023-10-23', 'Game này hay, đánh vui'),
(5, 29, 3, '2023-10-23', 'Hi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_hoadon`
--

CREATE TABLE `ct_hoadon` (
  `idHD` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `soLuongMua` int(11) NOT NULL,
  `tenTT` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `thanhTien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_hoadon`
--

INSERT INTO `ct_hoadon` (`idHD`, `idSP`, `soLuongMua`, `tenTT`, `thanhTien`) VALUES
(60, 29, 1, 'new seal', 790000),
(60, 30, 1, 'no box', 700000),
(61, 30, 1, 'no box', 700000),
(62, 29, 1, 'new seal', 790000),
(62, 30, 1, 'no box', 700000),
(63, 29, 1, 'new seal', 790000),
(63, 30, 1, 'no box', 700000),
(64, 29, 1, 'new seal', 790000),
(65, 29, 1, 'new seal', 790000),
(66, 30, 1, 'no box', 700000),
(67, 30, 1, 'no box', 700000),
(67, 0, 1, '', 0),
(67, 29, 1, 'new seal', 790000),
(67, 29, 1, 'new seal', 790000),
(68, 29, 1, 'new seal', 790000),
(69, 27, 1, 'new seal', 990000),
(70, 27, 1, 'new seal', 990000),
(71, 5, 2, 'new seal', 1500000),
(72, 29, 16, 'new seal', 12640000),
(73, 30, 1, 'no box', 700000),
(74, 30, 1, 'no box', 700000),
(75, 30, 1, 'no box', 700000),
(76, 30, 1, 'no box', 700000),
(77, 13, 1, 'new seal', 1500000),
(78, 7, 3, 'new seal', 4500000),
(79, 35, 1, 'old 99%', 0),
(79, 37, 1, 'size M', 50000),
(79, 37, 1, 'size M', 50000),
(79, 44, 1, 'size M', 80000),
(80, 45, 1, 'size S', 80000),
(81, 44, 1, 'size M', 80000),
(84, 44, 1, 'size M', 80000),
(84, 44, 1, 'size M', 80000),
(84, 44, 1, 'size M', 80000),
(84, 44, 1, 'size M', 80000),
(84, 44, 1, 'size M', 80000),
(85, 45, 1, 'size S', 80000),
(86, 42, 1, 'size M', 80000),
(86, 44, 3, 'size M', 240000),
(87, 45, 1, 'size S', 80000),
(88, 45, 1, 'size S', 80000),
(89, 45, 1, 'size S', 80000),
(90, 45, 1, 'size S', 80000),
(91, 45, 1, 'size S', 80000),
(91, 37, 1, 'size M', 50000),
(92, 45, 1, 'size S', 80000),
(92, 37, 1, 'size M', 50000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_sanpham`
--

CREATE TABLE `ct_sanpham` (
  `idSP` int(11) NOT NULL,
  `idTT` int(11) NOT NULL,
  `idLoai` int(11) NOT NULL,
  `soLuongTon` int(11) NOT NULL,
  `gia` float NOT NULL,
  `giaSale` float DEFAULT NULL,
  `ngayLap` date DEFAULT NULL,
  `moTa` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_sanpham`
--

INSERT INTO `ct_sanpham` (`idSP`, `idTT`, `idLoai`, `soLuongTon`, `gia`, `giaSale`, `ngayLap`, `moTa`) VALUES
(1, 1, 1, 10, 1500000, 980000, '2022-05-15', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 1'),
(1, 3, 7, 15, 780000, 650000, '2022-05-20', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 31'),
(2, 2, 2, 15, 950000, NULL, '2021-08-20', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 2'),
(2, 4, 8, 18, 900000, NULL, '2021-08-24', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 32'),
(3, 1, 9, 12, 990000, 850000, '2016-09-12', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 33'),
(3, 1, 9, 12, 990000, 850000, '2016-09-12', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 33'),
(4, 2, 10, 7, 850000, NULL, '2022-04-17', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 34'),
(4, 4, 4, 12, 900000, NULL, '2019-10-08', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 4'),
(5, 1, 5, 6, 950000, 890000, '2018-12-05', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 5'),
(5, 1, 5, 6, 950000, 890000, '2018-12-05', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 5'),
(6, 2, 6, 25, 790000, NULL, '2017-09-15', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 6'),
(6, 4, 12, 24, 950000, NULL, '2019-11-15', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 36'),
(7, 1, 1, 16, 1500000, 980000, '2016-06-14', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 37'),
(7, 3, 7, 16, 700000, 590000, '2020-06-22', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 7'),
(8, 2, 2, 22, 850000, NULL, '2018-10-09', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 38'),
(8, 4, 8, 3, 780000, NULL, '2018-04-30', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 8'),
(9, 1, 9, 9, 850000, 790000, '2016-08-10', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 9'),
(9, 3, 3, 18, 990000, 570000, '2022-04-22', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 39'),
(10, 2, 10, 5, 900000, NULL, '2022-02-18', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 10'),
(10, 4, 4, 11, 780000, NULL, '2021-12-27', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 40'),
(11, 1, 5, 25, 790000, 670000, '2019-07-25', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 41'),
(11, 3, 11, 7, 950000, 700000, '2017-05-29', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 11'),
(12, 2, 6, 3, 700000, NULL, '2018-02-08', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 42'),
(12, 4, 12, 11, 950000, NULL, '2019-12-03', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 12'),
(13, 1, 1, 19, 1500000, 980000, '2016-07-14', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 13'),
(13, 3, 7, 19, 900000, 850000, '2020-11-01', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 43'),
(14, 2, 2, 22, 850000, NULL, '2018-09-07', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 14'),
(14, 4, 8, 8, 780000, NULL, '2018-03-15', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 44'),
(15, 1, 9, 14, 990000, 850000, '2016-05-29', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 45'),
(15, 3, 3, 14, 990000, 570000, '2022-03-12', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 15'),
(16, 2, 10, 13, 950000, NULL, '2018-12-10', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 46'),
(16, 4, 4, 13, 780000, NULL, '2021-11-17', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 16'),
(17, 1, 5, 28, 790000, 670000, '2019-06-25', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 17'),
(17, 3, 11, 5, 950000, 700000, '2017-09-21', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 47'),
(18, 2, 6, 4, 700000, NULL, '2017-12-08', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 18'),
(18, 4, 12, 19, 900000, NULL, '2019-06-03', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 48'),
(19, 1, 1, 9, 850000, 570000, '2016-11-11', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 49'),
(19, 3, 7, 6, 900000, 850000, '2020-10-21', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 19'),
(20, 2, 2, 21, 950000, NULL, '2018-01-29', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 50'),
(20, 4, 8, 8, 780000, NULL, '2018-01-05', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 20'),
(21, 1, 9, 15, 990000, 850000, '2016-04-29', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 21'),
(21, 3, 3, 12, 950000, 700000, '2020-09-10', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 51'),
(22, 2, 10, 10, 950000, 0, '2021-04-14', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 22'),
(22, 2, 10, 10, 950000, 0, '2021-04-14', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 22'),
(23, 1, 5, 30, 790000, 670000, '2019-05-21', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 53'),
(23, 3, 11, 9, 850000, 780000, '2017-08-06', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 23'),
(24, 2, 6, 9, 700000, NULL, '2017-12-02', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 54'),
(24, 4, 12, 13, 900000, NULL, '2019-05-18', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 24'),
(25, 1, 1, 17, 850000, 570000, '2016-10-29', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 25'),
(25, 3, 7, 6, 900000, 850000, '2020-10-31', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 55'),
(26, 2, 2, 21, 950000, NULL, '2018-12-24', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 26'),
(26, 4, 8, 10, 780000, NULL, '2018-01-16', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 56'),
(27, 1, 9, 15, 990000, 850000, '2016-04-20', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 57'),
(27, 3, 3, 8, 950000, 700000, '2020-08-10', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 27'),
(28, 2, 10, 8, 950000, NULL, '2021-04-10', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 58'),
(28, 4, 4, 8, 780000, NULL, '2021-02-02', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 28'),
(29, 1, 5, 14, 790000, 670000, '2019-04-11', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 29'),
(29, 3, 11, 14, 850000, 780000, '2017-08-22', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 59'),
(30, 2, 6, 6, 700000, NULL, '2017-11-19', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 30'),
(30, 4, 12, 6, 900000, NULL, '2019-05-29', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 60'),
(32, 1, 7, 20, 1235000, 960000, '2023-11-15', 'Không chỉ dựa vào phần nội dung gốc vốn đã tuyệt hay, game còn mở rộng, bổ sung thêm nhiều tính năng mới đáng giá, đem lại cho các fan một chuyến phiêu lưu chất lượng. 29'),
(33, 1, 1, 9, 50000, 0, '2023-11-17', 'bánh sinh nhật'),
(34, 3, 1, 10, 50000, 0, '2023-11-17', 'bánh sinh nhật'),
(35, 2, 2, 6, 50000, 0, '2023-11-17', 'bánh sinh nhật'),
(36, 1, 1, 10, 50000, 0, '2023-11-17', 'bánh sinh nhật'),
(37, 2, 3, 6, 50000, 0, '2023-11-17', 'bánh sinh nhật'),
(38, 3, 1, 10, 80000, 0, '2023-11-17', 'bánh sinh nhật'),
(39, 3, 1, 10, 80000, 0, '2023-11-17', 'bánh sinh nhật'),
(40, 1, 3, 10, 60000, 5000, '2023-11-10', 'bánh sinh nhật'),
(41, 1, 3, 10, 45000, 0, '2023-11-18', 'bánh sinh nhật'),
(42, 2, 1, 9, 80000, 0, '2023-11-17', 'bánh sinh nhật'),
(43, 2, 2, 10, 80000, 0, '2023-11-17', 'bánh cướii'),
(44, 2, 1, 0, 80000, 0, '2023-11-17', 'bánh sinh nhật'),
(45, 1, 3, 7, 80000, 0, '2023-11-17', 'bánh sinh nhật'),
(46, 2, 1, 10, 60000, 0, '2023-11-17', 'bánh sinh nhật'),
(47, 2, 2, 10, 50000, 5000, '2023-11-22', 'bánh cướii'),
(48, 2, 2, 10, 50000, 5000, '2023-11-22', 'bánh cướii');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangsx`
--

CREATE TABLE `hangsx` (
  `idHangSX` int(11) NOT NULL,
  `tenHangSX` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hangsx`
--

INSERT INTO `hangsx` (`idHangSX`, `tenHangSX`) VALUES
(1, 'Basic'),
(2, 'Phụ Kiện Trang Trí'),
(3, 'Bánh Hoa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `idHD` int(11) NOT NULL,
  `idKH` int(11) NOT NULL,
  `ngayHD` date NOT NULL,
  `tongTien` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`idHD`, `idKH`, `ngayHD`, `tongTien`) VALUES
(80, 5, '2023-11-17', 80000),
(81, 5, '2023-11-17', 80000),
(82, 5, '2023-11-17', 0),
(83, 5, '2023-11-17', 0),
(84, 5, '2023-11-19', 400000),
(85, 5, '2023-11-19', 80000),
(86, 5, '2023-11-19', 320000),
(87, 5, '2023-11-19', 80000),
(88, 5, '2023-11-19', 80000),
(89, 5, '2023-11-19', 80000),
(90, 5, '2023-11-19', 80000),
(91, 5, '2023-11-19', 130000),
(92, 5, '2023-11-20', 130000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `idKH` int(11) NOT NULL,
  `tenKH` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pass` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `diaChi` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `soDT` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`idKH`, `tenKH`, `username`, `pass`, `email`, `diaChi`, `soDT`) VALUES
(5, 'khanh', 'khanh', '8f8e2909a8f683c31159ee51d593a642', 'tranngockhanh9799@gmail.com', '21', '84826526');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `idLoai` int(11) NOT NULL,
  `tenLoai` varchar(60) NOT NULL,
  `idMenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`idLoai`, `tenLoai`, `idMenu`) VALUES
(1, 'BIRTHDAY', 0),
(2, 'WEDDING', 0),
(3, 'CUSTOM', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idSP` int(11) NOT NULL,
  `tenSP` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `idHangSX` int(11) NOT NULL,
  `hinh` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `tenSP`, `idHangSX`, `hinh`) VALUES
(31, 'Just Dance 22', 7, 'justdance22.jpg'),
(37, 'birthday fruit', 2, 'single_food_2.jpg'),
(38, 'birthday spider', 2, 'single_food_3.jpg'),
(40, 'birthday flower', 1, 'single_food_4.jpg'),
(41, 'cake basis', 1, 'single_food_5.jpg'),
(42, 'cake sun', 2, 'single_food_6.jpg'),
(43, 'cake baby', 2, 'single_food_7.jpg'),
(44, 'birthday cake year', 2, 'single_food_8.jpg'),
(45, 'cake year number', 3, 'single_food_9.jpg'),
(46, 'cake custom singer', 1, 'single_food_10.jpg'),
(47, 'birthday cake', 3, 'single_food_3.jpg'),
(48, 'birthday cake', 3, 'single_food_3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `idTT` int(11) NOT NULL,
  `tenTT` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhtrang`
--

INSERT INTO `tinhtrang` (`idTT`, `tenTT`) VALUES
(1, 'size S'),
(2, 'size M'),
(3, 'size L');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`idCM`);

--
-- Chỉ mục cho bảng `hangsx`
--
ALTER TABLE `hangsx`
  ADD PRIMARY KEY (`idHangSX`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idHD`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idKH`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`idLoai`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSP`);

--
-- Chỉ mục cho bảng `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`idTT`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `idCM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `hangsx`
--
ALTER TABLE `hangsx`
  MODIFY `idHangSX` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `idLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `tinhtrang`
--
ALTER TABLE `tinhtrang`
  MODIFY `idTT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
