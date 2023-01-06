-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2023 lúc 04:08 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlynhahang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id_admin`, `username`, `password`, `status`) VALUES
(1, 'admin123', 'vinhkhang123', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_MonAn` int(11) NOT NULL,
  `MaMonAn` int(11) NOT NULL,
  `HinhAnh` varchar(100) NOT NULL,
  `TenMon` varchar(100) NOT NULL,
  `Gia` varchar(100) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `MoTa` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_MonAn`, `MaMonAn`, `HinhAnh`, `TenMon`, `Gia`, `SoLuong`, `MoTa`) VALUES
(2, 2, '318628085_528475359335016_1634033552254704276_n.png', 'Mochi Kem Matcha	', '19000', 19000, 'Bao bọc bởi lớp vỏ Mochi dẻo thơm, bên trong là lớp kem lạnh cùng nhân trà xanh đậm vị.	'),
(3, 3, 'Kem-Nho-Đen-1.png', 'Mochi Kem Nho Đen', '40000', 40000, 'Bao bọc bởi lớp vỏ Mochi dẻo thơm, bên trong là lớp kem lạnh cùng nhân nho đen đậm vị.	'),
(4, 4, '318539350_837820834117667_629745953405559182_n.png', 'Mochi Kem Việt Quất	', '19000', 19000, 'Bao bọc bởi lớp vỏ Mochi dẻo thơm, bên trong là lớp kem lạnh cùng nhân việt quất đậm vị.	'),
(5, 5, '319830574_1520926621752836_7334504784043150820_n.png', 'Mochi Kem Dừa Dứa	', '19000', 19000, 'Bao bọc bởi lớp vỏ Mochi dẻo thơm, bên trong là lớp kem lạnh cùng nhân dừa dứa thơm lừng lạ miệng.	'),
(6, 6, '317906540_738384480952619_7447709559567355331_n.png', 'Mochi Kem Phúc Bồn Tử	', '19000', 19000, 'Bao bọc bởi lớp vỏ Mochi dẻo thơm, bên trong là lớp kem lạnh cùng nhân phúc bồn tử ngọt ngào.'),
(7, 7, '1672382718_Kem-Kiwi-1-1024x577.png', 'Mochi Kem Kiwi', '40000', 40000, 'Bao bọc bởi lớp vỏ Mochi dẻo thơm, bên trong là lớp kem lạnh cùng nhân kiwi thơm lừng lạ miệng.	'),
(8, 8, '1655348107_mochi-choco_695c36c13b7f4de3bda537b7db417a91.webp', 'Mochi Kem Chocolate', '19000', 19000, 'Bao bọc bởi lớp vỏ Mochi dẻo thơm, bên trong là lớp kem lạnh cùng nhân chocolate độc đáo.	'),
(9, 9, '1643101968_mochi-xoai_aa74086b8e8a4f0ba803bfde709547fd.webp', 'Mochi Kem Xoài', '19000', 19000, 'Bao bọc bởi lớp vỏ Mochi dẻo thơm, bên trong là lớp kem lạnh cùng nhân xoài độc đáo.	'),
(10, 10, '1672304885_Kem-Dưa-Lưới-1024x577.png', 'Mochi Kem Dưa Lưới', '40000', 0, 'Bao bọc bởi lớp vỏ Mochi dẻo thơm, bên trong là lớp kem lạnh cùng nhân dưa lưới hà độc đáo.'),
(11, 11, '1672304771_Kem-Cognac-Socola-800x450.png', 'Kem Cognac Socola', '40000', 0, 'Bao bọc bởi lớp vỏ Mochi dẻo thơm, bên trong là lớp kem lạnh cùng nhân cognac chocolate độc đáo.	'),
(12, 12, '1672382446_Kem-Táo-Bạc-Hà-1-1024x577.png', 'Mochi Kem Táo Bạc Hà', '40000', 40000, 'Bao bọc bởi lớp vỏ Mochi dẻo thơm, bên trong là lớp kem lạnh cùng nhân táo kèm với bạc hà độc đáo.	'),
(13, 13, '1672382483_durian_mousse.png', 'Mochi Kem Sầu Riêng ', '40000', 40000, 'Bao bọc bởi lớp vỏ Mochi dẻo thơm, bên trong là lớp kem lạnh cùng nhân sầu riêng độc đáo đang được mọi người ưa chuộng.	'),
(14, 14, '1672382674_manga_cheese_mousse.png', 'Mochi Kem Phô Mai Xoài', '40000', 40000, 'Bao bọc bởi lớp vỏ Mochi dẻo thơm, bên trong là lớp kem lạnh cùng nhân xoài cùng với phô mai độc đáo đang được mọi người ưa chuộn.'),
(74, 14, '1672645229_Kem-Cappuccino-1024x577.png', 'Mochi Kem Cappuccino', '40000', 9, 'mochi vị cappiccino độc đáo .');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `tenbaiviet` varchar(100) NOT NULL,
  `HinhAnh` varchar(100) NOT NULL,
  `tomtat` varchar(200) NOT NULL,
  `noidung` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `tenbaiviet`, `HinhAnh`, `tomtat`, `noidung`) VALUES
(8, 'ăn dưa', '1672647908_5a0fcfb5a2bda438e45e8f5b50abf357.jpg', 'nhoàm', 'Mochi là một loại bánh truyền thống của Nhật Bản với lớp vỏ bằng bột gạo dẻo thuần khiết làm từ gạo Mochi. Từ ngàn xưa Mochi đã là món bánh của sự gắn kết gia đình và bè bạn. Ngày nay, mỗi chiếc bánh tượng trưng cho lời cầu chúc may mắn, thịnh vượng và hơn tất cả, là sự sum vầy - Mochi mang đến sự gắn bó và chia sẻ niềm vui.\r\n\r\nSự tuyệt hảo của Mochi có thể cảm nhận ngay ở miếng đầu tiên. Nhưng bạn khó có thể biết những bí quyết riêng ẩn trong hương vị ngọt ngào quyến rũ ấy. Điều khiến Mochi thơm ngon đặc biệt chính là ở sự khéo léo và chỉnh chu đến từng chi tiết trong quá trình tạo ra chiếc bánh. Chúng tôi tin làm bánh Mochi là một môn nghệ thuật - bắt đầu bằng những nguyên liệu cao cấp.'),
(9, 'ăn mochi', '1672648635_e9546e1e2210cb11176b841f99f3aeea.jpg', 'nhoom', 'nhoom nhoom nhoom.'),
(10, 'best seller', '1672650780_durian_mousse.png', 'giới thiệu', 'mochi kem sầu riêng là món ăn nổi bật đang được khách hàng ưa thích'),
(11, 'bán chạy', '1672650822_manga_cheese_mousse.png', 'giới thiệu', 'bán chạy lớm'),
(12, 'kem táo', '1672650871_Kem-Táo-Bạc-Hà-1-1024x577.png', 'giới thiệu kem táo', 'ngon lém '),
(13, 'giới thiệu', '1672651069_Kem-Dưa-Lưới-1024x577.png', 'giới thiệu món ngon', 'kem dưa lưới');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_MonAn`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_MonAn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
