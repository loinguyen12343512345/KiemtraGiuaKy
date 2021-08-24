-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 24, 2021 lúc 03:09 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `kiemtra`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'Nguyễn Văn Lợi', 'nvloi', 'nvloi1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `canbo`
--

CREATE TABLE `canbo` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chucvu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `id_phongkhoa` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `canbo`
--

INSERT INTO `canbo` (`id`, `ten`, `image`, `chucvu`, `email`, `sdt`, `id_phongkhoa`) VALUES
(1, 'Nguyễn Thanh Tùng', 'http://cse.tlu.edu.vn/Portals/0/Images/2016/Tung%20VIASM.jpg', 'Trưởng Ban', 'NTT@gmail.com', 123456789, 1),
(2, 'Kiều Tuấn Dũng', 'https://scontent-hkt1-1.xx.fbcdn.net/v/t1.6435-9/160993506_4078189542201347_3162915002800444006_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=vZxx47ThK4UAX-P8cyL&_nc_ht=scontent-hkt1-1.xx&oh=517af9ec817ef8386c8d72cad96e020b&oe=6147D852', 'Trưởng BM', 'kituzu@e.tlu.edu.vn', 123456789, 24),
(3, 'Nguyễn Khánh Linh', 'http://sie.tlu.edu.vn/Portals/0/Nguyen%20Khanh%20Linh.jpg', 'Phó Ban', 'NTTH@gmail.com', 123456789, 1),
(4, 'Trần Thị Ngân (TS.)', 'http://cse.tlu.edu.vn/Portals/0/anh-ngan.JPG', 'Giảng Viên', 'ngantt@tlu.edu.vn', 19001008, 2),
(5, 'Nguyễn Hữu Thọ', 'http://cse.tlu.edu.vn/Portals/0/Users/nguyenhuutho.jpg', 'Trưởng Khoa', 'NTH@gmail.com', 123456789, 20),
(6, 'Lê Nguyễn Tuấn Thành (TS.)', 'http://cse.tlu.edu.vn/Portals/0/Images/Thanh.png', 'Giảng viên', 'thanhlnt@tlu.edu.vn', 1236547856, 14),
(7, 'Nguyễn Đức Hậu', 'http://cse.tlu.edu.vn/Portals/0/Users/Nguyen%20duc%20hau.jpg', 'Trưởng VPĐ', 'NDH@gmail.com', 369852654, 3),
(8, 'Phạm Xuân Cường', 'http://cse.tlu.edu.vn/Portals/0/Users/cuongpx.jpg', 'Phó Phòng', 'PXC@gmail.com', 753412344, 4),
(9, 'Phan Thị Thanh Huyền', 'http://cse.tlu.edu.vn/Portals/0/2016/phan%20thanh%20huyen.jpg', 'Giảng Viên', 'PTTH@e.tlu.edu.vn', 369854123, 6),
(10, 'NGuyễn Văn Đắc', 'http://cse.tlu.edu.vn/Portals/0/Users/dac.jpg', 'Trợ Lý Công Đoàn', 'NVD@e.tlu.edu.vn', 536987125, 4),
(11, 'Nguyễn THị Vân', 'http://cse.tlu.edu.vn/Portals/0/2016/nguyen%20thi%20van.jpg', 'Giảng Viên ', 'NTV@e.tlu.edu.vn', 312954865, 7),
(12, 'Đặng Thị Thu Hiền', 'http://cse.tlu.edu.vn/Portals/0/Users/DangThuHien.jpg', 'P.Trưởng Trạm', 'DTTH@e.tlu.edu.vn', 123456789, 19),
(23, 'Nguyễn Quỳnh Diệp', 'http://cse.tlu.edu.vn/Portals/0/Users/%e1%ba%a3nh%20th%e1%ba%bb.png', 'Trưởng Khoa', 'diepnq@tlu.edu.vn', 123654125, 8),
(24, '	Nguyễn Ngọc Doanh ', 'http://cse.tlu.edu.vn/Portals/0/Nguyen%20Ngoc%20Doanh.jpg', 'Giảng viên', 'doanhnn@tlu.edu.vn', 641564916, 9),
(25, '	Phạm Thanh Bình', 'http://cse.tlu.edu.vn/Portals/0/Images/2016/A%20Binh.jpg', 'Trưởng Văn Phòng Đoàn', 'binhpt@tlu.edu.vn', 315192969, 5),
(26, '	Lý Anh Tuấn', 'http://cse.tlu.edu.vn/Portals/0/Users/Ly_Anh_Tuan.jpg', 'Trưởng Phòng Khảo Thí', 'tuanla@tlu.edu.vn', 123654125, 10),
(27, '	Nguyễn Thị Phương Thảo', 'http://cse.tlu.edu.vn/Portals/0/Users/thao.jpg', 'Trưởng Phòng Tài Chính', 'thaont@tlu.edu.vn', 365266967, 11),
(30, '	Vũ Mạnh Tới', 'http://cse.tlu.edu.vn/Portals/0/Users/Vu_Manh_Toi.jpg', 'Trưởng Phòng KHCN', 'toivm@tlu.edu.vn', 966452145, 14),
(31, '	Nguyễn Hằng Phương', 'http://cse.tlu.edu.vn/Portals/0/Users/HPhuong.jpg', 'Thư Kí Thư Viện', 'phuongnh@tlu.edu.vn', 641564916, 15),
(32, '	Nguyễn Mạnh Hiển', 'http://cse.tlu.edu.vn/Portals/0/Users/nguyen%20manh%20hien%201.jpg', 'Trưởng BM', 'hiennm@tlu.edu.vn', 353037823, 22),
(33, '	Đỗ Văn Hải', 'http://cse.tlu.edu.vn/Portals/0/2016/Do%20Van%20Hai.jpg', 'Giảng viên', 'dvh@e.tlu.edu.vn', 123654125, 23),
(35, '	Lưu Đức Trung', 'http://cse.tlu.edu.vn/Portals/0/Users/TrungLD.png', 'Trưởng BM', 'luuductrung@tlu.edu.vn', 321758521, 23),
(36, '	Đỗ Oanh Cường', 'http://cse.tlu.edu.vn/Portals/0/2016/Do%20Oanh%20Cuong%202.jpg', 'Giảng Viên', 'cuongdo@tlu.edu.vn', 315192969, 22),
(38, '	Nguyễn Ngọc Quỳnh Châu ', 'http://cse.tlu.edu.vn/Portals/0/Users/chau.jpg', 'Giảng viên', 'nnqc@e.tlu.edu.vn', 369852147, 24),
(39, 'Trần Mạnh Tuấn', 'http://cse.tlu.edu.vn/Portals/0/Users/author%20photo%20Tuan.jpg', 'Phó trưởng bộ môn', '\r\n\r\ntuan_tm@tlu.edu.vn', 12546525, 24),
(41, 'Phạm Chí Công', 'http://cse.tlu.edu.vn/Portals/0/Users/phtcong.jpg', 'Giảng viên', 'congacc@tlu.edu.vn', 54662, 24);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongkhoa`
--

CREATE TABLE `phongkhoa` (
  `id` int(10) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sophong` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_parent` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phongkhoa`
--

INSERT INTO `phongkhoa` (`id`, `ten`, `sophong`, `diachi`, `email`, `id_parent`) VALUES
(1, 'Ban Giám Hiệu', 'P202', 'Tầng2  toà A1', 'vpkdhtl@e.tlu.edu.vn', 1),
(2, 'Hội Đồng Trường', 'P102', 'Tầng 1 nhà B2', 'vpkdhtl@e.tlu.edu.vn', 2),
(3, 'Văn Phòng Đảng Uỷ', 'P407', 'tầng 4 nhà  A2', 'vpkdhtl@e.tlu.edu.vn', 3),
(4, 'Văn Phòng Công Đoàn', 'P453', 'tầng 4 nhà  A2', 'vpkdhtl@e.tlu.edu.vn', 3),
(5, 'Văn Phòng Đoàn Thanh Niên', 'P410', 'tầng 4 nhà  A2', 'vpkdhtl@e.tlu.edu.vn', 3),
(6, 'Phòng Hành Chính Tổng Hợp', 'P114', 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 6),
(7, 'Phòng Quản Trị', 'P136', 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 6),
(8, 'Phòng Tổ Chức Cán Bộ', 'P101', 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 6),
(9, 'Phòng Đào Tạo', 'P102', 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 6),
(10, 'Phòng Khảo Thí Và Đảm Bảo Chất Lượng', 'P105', 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 6),
(11, 'Phòng Tài Chinh-Kế Toán', 'P113', 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 6),
(13, 'Phòng Chính Trị & Công Tác Sinh Viên', 'P131', 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 6),
(14, 'Phòng Khoa Học Công Nghệ', 'P145', 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 6),
(15, 'Thư Viện', 'P159', 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 6),
(19, 'Trạm y tế', 'P164', 'tầng 1 nhà A4', 'vpkdhtl@e.tlu.edu.vn', 6),
(20, 'Khoa Công Nghệ Thông Tin', 'P230', 'Tầng 2 Toà C5 ', 'CNTTtlu@e.tlu.edu.vn', 20),
(22, 'BM Toán Học', 'p201', NULL, NULL, 20),
(23, 'BM Kỹ thuật MT & Mạng', 'P207', NULL, NULL, 20),
(24, 'BM Hệ Thống Thông Tin', 'P223', NULL, NULL, 20),
(31, 'sửa', 'phòng', 'add', 'mail', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `canbo`
--
ALTER TABLE `canbo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Fk_phongkhoa` (`id_phongkhoa`);

--
-- Chỉ mục cho bảng `phongkhoa`
--
ALTER TABLE `phongkhoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_child` (`id_parent`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `canbo`
--
ALTER TABLE `canbo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `phongkhoa`
--
ALTER TABLE `phongkhoa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `canbo`
--
ALTER TABLE `canbo`
  ADD CONSTRAINT `Fk_phongkhoa` FOREIGN KEY (`id_phongkhoa`) REFERENCES `phongkhoa` (`id`);

--
-- Các ràng buộc cho bảng `phongkhoa`
--
ALTER TABLE `phongkhoa`
  ADD CONSTRAINT `FK_child` FOREIGN KEY (`id_parent`) REFERENCES `phongkhoa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
