-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2024 lúc 09:58 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tiennvo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qq_authors`
--

CREATE TABLE `qq_authors` (
  `Id` int(10) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NameEncode` varchar(600) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qq_authors`
--

INSERT INTO `qq_authors` (`Id`, `Name`, `NameEncode`) VALUES
(1828, 'Fujiko F. Fujio', 'fujiko-f-fujio'),
(1830, 'Tiếnn Võ', 'tienn-vo'),
(1831, 'Võ Trần Tiến', 'vo-tran-tien'),
(1832, 'Unknown', 'unknown');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qq_chapter`
--

CREATE TABLE `qq_chapter` (
  `Id` int(10) NOT NULL,
  `Name` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `Title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Path` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Summary` char(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `DateUpload` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IdStory` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qq_chapter`
--

INSERT INTO `qq_chapter` (`Id`, `Name`, `Title`, `Path`, `Summary`, `DateUpload`, `IdStory`) VALUES
(124, 'Chương 1', '', 'upload/chap/manga/doraemon/1/2.jpg,upload/chap/manga/doraemon/1/3.jpg,upload/chap/manga/doraemon/1/4.jpg,upload/chap/manga/doraemon/1/5.jpg,upload/chap/manga/doraemon/1/6.jpg,upload/chap/manga/doraemon/1/7.jpg,upload/chap/manga/doraemon/1/8.jpg,upload/chap/manga/doraemon/1/9.jpg,upload/chap/manga/doraemon/1/10.jpg,upload/chap/manga/doraemon/1/11.jpg,upload/chap/manga/doraemon/1/12.jpg,upload/chap/manga/doraemon/1/13.jpg,upload/chap/manga/doraemon/1/14.jpg,upload/chap/manga/doraemon/1/15.jpg,upload/chap/manga/doraemon/1/16.jpg', '', '2024-11-10 01:39:41', 39),
(125, 'Chương 2', '', 'upload/chap/manga/doraemon/1/1.png,upload/chap/manga/doraemon/1/2.png,upload/chap/manga/doraemon/1/3.png,upload/chap/manga/doraemon/1/4.png,upload/chap/manga/doraemon/1/5.png,upload/chap/manga/doraemon/1/6.png,upload/chap/manga/doraemon/1/7.png,upload/chap/manga/doraemon/1/8.png,upload/chap/manga/doraemon/1/9.png,upload/chap/manga/doraemon/1/10.png,upload/chap/manga/doraemon/1/11.png,upload/chap/manga/doraemon/1/12.png,upload/chap/manga/doraemon/1/13.png,upload/chap/manga/doraemon/1/14.png', '', '2024-11-16 02:05:42', 39),
(126, 'Chương 3', '', 'upload/chap/manga/doraemon/3/8 (1).png,upload/chap/manga/doraemon/3/6 (1).png,upload/chap/manga/doraemon/3/4 (1).png,upload/chap/manga/doraemon/3/7 (1).png,upload/chap/manga/doraemon/3/5 (1).png,upload/chap/manga/doraemon/3/3 (1).png,upload/chap/manga/doraemon/3/2 (1).png,upload/chap/manga/doraemon/3/1 (1).png', '', '2024-11-16 02:09:57', 39),
(127, 'Chương 1', '', 'upload/chap/manga/onepice/1/1.jpg,upload/chap/manga/onepice/1/3.jpg,upload/chap/manga/onepice/1/4.jpg,upload/chap/manga/onepice/1/5.jpg,upload/chap/manga/onepice/1/6.jpg,upload/chap/manga/onepice/1/7.jpg,upload/chap/manga/onepice/1/8.jpg,upload/chap/manga/onepice/1/9.jpg,upload/chap/manga/onepice/1/10.jpg,upload/chap/manga/onepice/1/11.jpg,upload/chap/manga/onepice/1/12.jpg,upload/chap/manga/onepice/1/13.jpg,upload/chap/manga/onepice/1/14.jpg,upload/chap/manga/onepice/1/15.jpg,upload/chap/manga/onepice/1/16.jpg,upload/chap/manga/onepice/1/17.jpg,upload/chap/manga/onepice/1/18.jpg,upload/chap/manga/onepice/1/19.jpg,upload/chap/manga/onepice/1/20.jpg,upload/chap/manga/onepice/1/21.jpg,upload/chap/manga/onepice/1/22.jpg,upload/chap/manga/onepice/1/23.jpg,upload/chap/manga/onepice/1/24.jpg,upload/chap/manga/onepice/1/25.jpg,upload/chap/manga/onepice/1/26.jpg,upload/chap/manga/onepice/1/27.jpg,upload/chap/manga/onepice/1/28.jpg,upload/chap/manga/onepice/1/29.jpg,upload/chap/manga/onepice/1/30.jpg,upload/chap/manga/onepice/1/31.jpg,upload/chap/manga/onepice/1/32.jpg,upload/chap/manga/onepice/1/33.jpg,upload/chap/manga/onepice/1/34.jpg,upload/chap/manga/onepice/1/35.jpg,upload/chap/manga/onepice/1/36.jpg,upload/chap/manga/onepice/1/37.jpg,upload/chap/manga/onepice/1/38.jpg,upload/chap/manga/onepice/1/39.jpg,upload/chap/manga/onepice/1/40.jpg,upload/chap/manga/onepice/1/41.jpg,upload/chap/manga/onepice/1/42.jpg,upload/chap/manga/onepice/1/43.jpg,upload/chap/manga/onepice/1/44.jpg,upload/chap/manga/onepice/1/45.jpg,upload/chap/manga/onepice/1/46.jpg,upload/chap/manga/onepice/1/47.jpg,upload/chap/manga/onepice/1/48.jpg,upload/chap/manga/onepice/1/49.jpg,upload/chap/manga/onepice/1/50.jpg,upload/chap/manga/onepice/1/51.jpg', '', '2024-11-16 16:36:20', 40),
(128, 'Chương 1', '', 'upload/chap/manga/naruto/1/1.png', '', '2024-11-17 03:51:55', 41),
(129, 'Chương 1', '', 'upload/chap/manga/7-vien-ngoc-rong/1/1.png', '', '2024-11-17 03:01:27', 42),
(130, 'Chương 2', '', 'upload/chap/manga/7-vien-ngoc-rong/2/1.png', '', '2024-11-17 03:12:53', 42),
(131, 'Chương 3', 'Dragon', 'upload/chap/manga/7-vien-ngoc-rong/3/8 (1).png,upload/chap/manga/7-vien-ngoc-rong/3/7 (1).png,upload/chap/manga/7-vien-ngoc-rong/3/6 (1).png,upload/chap/manga/7-vien-ngoc-rong/3/4 (1).png,upload/chap/manga/7-vien-ngoc-rong/3/5 (1).png,upload/chap/manga/7-vien-ngoc-rong/3/2 (1).png,upload/chap/manga/7-vien-ngoc-rong/3/3 (1).png', '', '2024-11-17 03:42:10', 42),
(132, 'Chương 2', '', 'upload/chap/manga/naruto/2/1.png,upload/chap/manga/naruto/2/naruto.jpg', '', '2024-11-17 03:52:00', 41);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qq_feedback`
--

CREATE TABLE `qq_feedback` (
  `Id` int(10) NOT NULL,
  `IdStory` int(10) NOT NULL,
  `IdChap` int(10) NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL,
  `CheckFinish` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `DateInsert` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qq_feedback`
--

INSERT INTO `qq_feedback` (`Id`, `IdStory`, `IdChap`, `Content`, `CheckFinish`, `DateInsert`) VALUES
(16, 39, 1, 'Chọn loại lỗi', 'Chờ xử lý', '2024-11-14 14:54:23'),
(17, 39, 1, 'Hình Bị Hư', 'Chờ xử lý', '2024-11-14 14:54:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qq_find`
--

CREATE TABLE `qq_find` (
  `Id` int(1) NOT NULL,
  `NameEncode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Content_CEO` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qq_find`
--

INSERT INTO `qq_find` (`Id`, `NameEncode`, `Content_CEO`) VALUES
(1, 'tim-kiem-nang-cao', '<meta charset=\"utf-8\">\r\n    <title>Tìm kiếm nâng cao - TruyenQQ.Com</title>\r\n    <meta name=\"keywords\" content=\"\">\r\n    <meta name=\"description\" content=\"\">\r\n    <meta property=\"og:title\" content=\"Tìm kiếm nâng cao - TruyenQQ.Com\">\r\n    <meta property=\"og:description\" content=\"\">\r\n    <link href=\"http://truyenqq.net/tim-kiem-nang-cao.html\" rel=\"canonical\">\r\n    <meta property=\"og:site_name\" content=\"TruyenQQ.Net\">\r\n    <meta property=\"og:type\" content=\"article\">\r\n    <meta property=\"og:url\" content=\"http://truyenqq.net/tim-kiem-nang-cao.html\">\r\n    <meta property=\"fb:pages\" content=\"109139867535054\">    \r\n    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge, chrome=1\">  \r\n    <meta name=\"copyright\" content=\"Copyright © 2019 TruyenQQ.Net\">\r\n    <meta name=\"Author\" content=\"TruyenQQ.Com\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=6.0, user-scalable=yes\">');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qq_genres`
--

CREATE TABLE `qq_genres` (
  `Id` int(10) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NameEncode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Title` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Type` varchar(100) COLLATE utf8_unicode_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qq_genres`
--

INSERT INTO `qq_genres` (`Id`, `Name`, `NameEncode`, `Title`, `Type`) VALUES
(1, 'Action', 'action', 'Thể loại này thường có nội dung về đánh nhau, bạo lực, hỗn loạn, với diễn biến nhanh', ''),
(12, 'Drama', 'drama', 'Thể loại mang đến cho người xem những cảm xúc khác nhau: buồn bã, căng thẳng thậm chí là bi phẫn', ''),
(24, 'Magic', 'magic', 'Thể loại giả tưởng có tồn tại những sức mạnh siêu nhiên như thần chú, gây phép, vòng tròn ma thuật... ', ''),
(25, 'Manhua', 'manhua', 'Truyện tranh của Trung Quốc', ''),
(26, 'Manhwa', 'manhwa', 'Truyện tranh Hàn Quốc, đọc từ trái sang phải', ''),
(34, 'Romance', 'romance', 'Thường là những câu chuyện về tình yêu, tình cảm lãng mạn. Ớ đây chúng ta sẽ lấy ví dụ như tình yêu giữa một người con trai và con gái, bên cạnh đó đặc điểm thể loại này là kích thích trí tưởng tượng của bạn về tình yêu', ''),
(35, 'School Life', 'school-life', 'Trong thể loại này, ngữ cảnh diễn biến câu chuyện chủ yếu ở trường học', ''),
(54, 'Truyện Màu', 'truyen-mau', 'Tổng hợp truyện tranh màu, rõ, đẹp', ''),
(55, 'Tiên Hiệp', 'tien-hiep', '', ''),
(56, 'Kiếm Hiệp', 'kiem-hiep', '', ''),
(64, 'Lịch Sử', 'lich-su', '', ''),
(66, 'Trinh Thám', 'trinh-tham', '', ''),
(67, 'Thám Hiểm', 'tham-hiem', '', ''),
(78, 'Hài Hước', 'hai-huoc', '', ''),
(81, 'Truyện Teen', 'truyen-teen', '', ''),
(82, 'Phương Tây', 'phuong-tay', '', ''),
(85, 'Việt Nam', 'viet-nam', '', ''),
(87, 'Khác', 'khac', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qq_historys`
--

CREATE TABLE `qq_historys` (
  `Id` int(10) NOT NULL,
  `Email` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `Arr_IdStory` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qq_historys`
--

INSERT INTO `qq_historys` (`Id`, `Email`, `Arr_IdStory`) VALUES
(2, 'admin@gmail.com', '1,22,18,58,3,2,8,74,75,78,80,5,82,83,84,85,6,4,5041,9654,5632,5028,10,56,7,2150,176,476,475,474,482,481,477,483,484,14,15,11,16,12,21,20,32,9,23,34,31,29,35,42,44,45,46,47,48,49,50,55,59,64,65,91,103,104,107,111,110,190,132,207,254,517,226,564,149,1169,2290,2292,944,2293,2006,401,306,2091,565,495,301,1349,1999,13,19,17,24,27,30,36,26'),
(3, 'admin1@gmail.com', '1'),
(4, 'test3@gmail.com', '5028'),
(5, 'test11@gmail.com', '76,75'),
(6, 'testbl@gmail.com', '65,1635,2293.html,2006,2'),
(7, 'truyendark@gmail.com', '3,5'),
(8, 'truyenhh@gmail.com', '3,5'),
(9, 'admin2@gmail.com', '5'),
(10, 'amdin@gmail.com', '5'),
(11, 'admin3@gmail.com', '12,13,22'),
(12, 'letrang19207@gmail.com', '13'),
(13, 'vitcontho@gmail.com', '8,15'),
(14, 'admin5@gmail.com', '17,20,13'),
(15, 'nhinguyen2k89@gmail.com', '13'),
(16, 'admin7@gmail.com', '29'),
(17, 'admin8@gmail.com', '30,31,32'),
(18, 'pchi2009@gmail.com', '13'),
(19, 'duyenlun611pv@gmail.com', '13'),
(20, 'hantu0010@gmail.com', '13,33'),
(21, 'bibiteam@gmail.com', '26'),
(22, 'huanghui610@gmail.com', '24'),
(23, 'nguyentrihoa99', '37'),
(24, 'phongj88@gmail.com', '16,38,26,22'),
(25, 'ccoderr1@gmail.com', '15,38,12,39,40,41,42'),
(26, 'ccoderr2@gmail.com', '39,40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qq_likes`
--

CREATE TABLE `qq_likes` (
  `Id` int(10) NOT NULL,
  `Email` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `Arr_IdStory` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qq_likes`
--

INSERT INTO `qq_likes` (`Id`, `Email`, `Arr_IdStory`) VALUES
(2, 'admin@gmail.com', '1,7,2,11,2072,1831,2291,944,2293,2006,8,12,15,28'),
(3, 'testbl@gmail.com', '65,1169,1635,2'),
(4, 'truyenhh@gmail.com', '3'),
(5, 'truyendark@gmail.com', '5'),
(6, 'admin3@gmail.com', '12,36'),
(7, 'xuongtruyen.net@gmail.com', '17'),
(8, 'vitcontho@gmail.com', '15,8,34'),
(9, 'pchi2009@gmail.com', '13'),
(10, 'bibiteam@gmail.com', '26'),
(11, 'nguyentrihoa99', '37'),
(12, 'ccoderr1@gmail.com', '12,39,40'),
(13, 'ccoderr2@gmail.com', '39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qq_logo`
--

CREATE TABLE `qq_logo` (
  `Id` int(1) NOT NULL,
  `url_logo` text COLLATE utf8_unicode_ci NOT NULL,
  `url_logo_on` text COLLATE utf8_unicode_ci NOT NULL,
  `url_favicon` text COLLATE utf8_unicode_ci NOT NULL,
  `url_group` text COLLATE utf8_unicode_ci NOT NULL,
  `url_starts_icon` text COLLATE utf8_unicode_ci NOT NULL,
  `url_female_icon` text COLLATE utf8_unicode_ci NOT NULL,
  `url_male_icon` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qq_logo`
--

INSERT INTO `qq_logo` (`Id`, `url_logo`, `url_logo_on`, `url_favicon`, `url_group`, `url_starts_icon`, `url_female_icon`, `url_male_icon`) VALUES
(1, 'https://truyenhh.net/page/frontend/images/logo.png?1662610919906', 'https://truyenhh.net/page/frontend/images/logo-on.png', 'i', 'v', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qq_minchapter`
--

CREATE TABLE `qq_minchapter` (
  `Id` int(10) NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Type` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qq_minchapter`
--

INSERT INTO `qq_minchapter` (`Id`, `Name`, `Type`) VALUES
(1, '&gt; 0', 0),
(2, '&gt;= 50', 50),
(3, '&gt;= 100', 100),
(4, '&gt;= 200', 200),
(5, '&gt;= 300', 300),
(6, '&gt;= 400', 400),
(7, '&gt;= 500', 500);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qq_searchsort`
--

CREATE TABLE `qq_searchsort` (
  `Id` int(10) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qq_searchsort`
--

INSERT INTO `qq_searchsort` (`Id`, `Name`, `Type`) VALUES
(1, 'Ngày đăng giảm dần', 0),
(2, 'Ngày đăng tăng dần', 1),
(3, 'Ngày cập nhật giảm dần', 2),
(4, 'Ngày cập nhật tăng dần', 3),
(5, 'Lượt xem giảm dần', 4),
(6, 'Lượt xem tăng dần', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qq_slider`
--

CREATE TABLE `qq_slider` (
  `Id` int(10) NOT NULL,
  `IdStory` int(10) NOT NULL,
  `Path` text COLLATE utf8_unicode_ci NOT NULL,
  `hide_view` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qq_slider`
--

INSERT INTO `qq_slider` (`Id`, `IdStory`, `Path`, `hide_view`) VALUES
(1, 1, 'upload/slider/slider-889769805613d7df0e81db.jpg', 1),
(2, 2, 'upload/slider/slider-389726339613d7df9d16ce.jpg', 1),
(3, 3, 'upload/slider/slider-561177729613d7e03130db.jpg', 1),
(4, 4, 'upload/slider/slider-834813966613d7e13ee0c3.jpg', 1),
(5, 5, 'upload/slider/slider-1022014962613d7e1eab332.jpg', 1),
(6, 6, 'upload/slider/slider-666857411613d7e29dd931.jpg', 1),
(7, 7, 'upload/slider/slider-1803196069613d7e31ef36f.jpg', 1),
(8, 8, 'upload/slider/slider-52920972613d7e3bb2d46.jpg', 0),
(9, 9, 'upload/slider/slider-1626968192613d7e47ec5c4.jpg', 0),
(10, 10, 'upload/slider/slider-1869331431613d7ecc36b8e.jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qq_sort`
--

CREATE TABLE `qq_sort` (
  `Id` int(10) NOT NULL,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `NameFull` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `NameEncode` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Type` int(1) NOT NULL,
  `Content_SEO` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qq_sort`
--

INSERT INTO `qq_sort` (`Id`, `Name`, `NameFull`, `NameEncode`, `Type`, `Content_SEO`) VALUES
(4, 'Yêu Thích', 'Truyện Yêu Thích', 'truyen-yeu-thich', 0, '<meta charset=\"utf-8\">     <title>Truyện tranh được yêu thích nhất - TruyenQQ.Com</title>     <meta name=\"keywords\" content=\"Truyện tranh, manga, comic, manhua, manhwa được yêu thích nhất.\">     <meta name=\"description\" content=\"Truyện tranh được yêu thích nhất tại TruyenQQ.Net!\">     <meta property=\"og:title\" content=\"Truyện tranh được yêu thích nhất - TruyenQQ.Com\">     <meta property=\"og:description\" content=\"Truyện tranh được yêu thích nhất tại TruyenQQ.Net!\">     <meta property=\"og:site_name\" content=\"TruyenQQ.Net\">     <meta property=\"og:type\" content=\"article\">     <meta property=\"og:url\" content=\"http://truyenqq.net/truyen-yeu-thich.html\">     <meta property=\"fb:pages\" content=\"109139867535054\">        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge, chrome=1\">     <meta name=\"copyright\" content=\"Copyright © 2019 TruyenQQ.Net\">     <meta name=\"Author\" content=\"TruyenQQ.Com\">     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=6.0, user-scalable=yes\">'),
(5, 'Mới Cập Nhật', 'Truyện Mới Cập Nhật', 'truyen-moi-cap-nhat', 0, '<meta charset=\"utf-8\">     <title>Truyện mới cập nhật - TruyenQQ.Com</title>     <meta name=\"keywords\" content=\"Truyện tranh, manga, comic, manhua, manhwa mới cập nhật.\">     <meta name=\"description\" content=\"Truyện tranh mới được cập nhật tại TruyenQQ.Net!\">     <meta property=\"og:title\" content=\"Truyện mới cập nhật - TruyenQQ.Com\">     <meta property=\"og:description\" content=\"Truyện tranh mới được cập nhật tại TruyenQQ.Net!\">     <meta property=\"og:site_name\" content=\"TruyenQQ.Net\">     <meta property=\"og:type\" content=\"article\">     <meta property=\"og:url\" content=\"http://truyenqq.net/truyen-moi-cap-nhat.html\">     <meta property=\"fb:pages\" content=\"109139867535054\">         <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge, chrome=1\">     <meta name=\"copyright\" content=\"Copyright © 2019 TruyenQQ.Net\">     <meta name=\"Author\" content=\"TruyenQQ.Com\">     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=6.0, user-scalable=yes\">'),
(6, 'Truyện Mới', 'Truyện Mới', 'truyen-tranh-moi', 0, '<meta charset=\"utf-8\">     <title>Truyện Mới - TruyenQQ.Com</title>     <meta name=\"keywords\" content=\"Truyện tranh, manga, comic, manhua, manhwa mới nhất.\">     <meta name=\"description\" content=\"Truyện tranh mới nhất được cập nhật đầy đủ tại TruyenQQ.Net!\">     <meta property=\"og:title\" content=\"Truyện Mới - TruyenQQ.Com\">     <meta property=\"og:description\" content=\"Truyện tranh mới nhất được cập nhật đầy đủ tại TruyenQQ.Net!\">     <meta property=\"og:site_name\" content=\"TruyenQQ.Net\">     <meta property=\"og:type\" content=\"article\">     <meta property=\"og:url\" content=\"http://truyenqq.net/truyen-tranh-moi.html\">     <meta property=\"fb:pages\" content=\"109139867535054\">       <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge, chrome=1\">     <meta name=\"copyright\" content=\"Copyright © 2019 TruyenQQ.Net\">     <meta name=\"Author\" content=\"TruyenQQ.Com\">     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=6.0, user-scalable=yes\">'),
(7, 'Truyện Full', 'Truyện Full', 'truyen-hoan-thanh', 0, '<meta charset=\"utf-8\">     <title>Truyện Full - TruyenQQ.Com</title>     <meta name=\"keywords\" content=\"truyen tranh, manga\">     <meta name=\"description\" content=\"Danh sách truyện tranh Việt Nam, Trung Quốc, manga Nhật Bản\">     <meta property=\"og:title\" content=\"Truyện Full - TruyenQQ.Com\">     <meta property=\"og:description\" content=\"Danh sách truyện tranh Việt Nam, Trung Quốc, manga Nhật Bản\">     <meta property=\"og:site_name\" content=\"TruyenQQ.Net\">     <meta property=\"og:type\" content=\"article\">     <meta property=\"og:url\" content=\"http://truyenqq.net/truyen-hoan-thanh.html\">     <meta property=\"fb:pages\" content=\"109139867535054\">        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge, chrome=1\">     <meta name=\"copyright\" content=\"Copyright © 2019 TruyenQQ.Net\">     <meta name=\"Author\" content=\"TruyenQQ.Com\">     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=6.0, user-scalable=yes\">'),
(8, 'Truyện Tranh', 'Truyện Tranh', 'truyen-tranh-hay', 1, '<meta charset=\"utf-8\">     <title>Truyện Con Gái - TruyenQQ.Com</title>     <meta name=\"keywords\" content=\"truyen tranh, manga\">     <meta name=\"description\" content=\"Danh sách truyện tranh Việt Nam, Trung Quốc, manga Nhật Bản\">     <meta property=\"og:title\" content=\"Truyện Con Gái - TruyenQQ.Com\">     <meta property=\"og:description\" content=\"Danh sách truyện tranh Việt Nam, Trung Quốc, manga Nhật Bản\">     <meta property=\"og:site_name\" content=\"TruyenQQ.Net\">     <meta property=\"og:type\" content=\"article\">     <meta property=\"og:url\" content=\"http://truyenqq.net/truyen-con-gai.html\">     <meta property=\"fb:pages\" content=\"109139867535054\">         <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge, chrome=1\">     <meta name=\"copyright\" content=\"Copyright © 2019 TruyenQQ.Net\">     <meta name=\"Author\" content=\"TruyenQQ.Com\">     <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=6.0, user-scalable=yes\">');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qq_status`
--

CREATE TABLE `qq_status` (
  `Id` int(10) NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qq_status`
--

INSERT INTO `qq_status` (`Id`, `Name`, `Type`) VALUES
(1, 'Tất cả', 0),
(2, 'Đang tiến hành', 1),
(3, 'Hoàn thành', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qq_story`
--

CREATE TABLE `qq_story` (
  `Id` int(10) NOT NULL,
  `Name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `NameOther` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `story_Status` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `ImgAvatar` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Badge` char(10) COLLATE utf8_unicode_ci DEFAULT 'Hot',
  `Waning` char(10) COLLATE utf8_unicode_ci DEFAULT 'Thường',
  `Author` varchar(700) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Genre` varchar(700) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NameEncodeGenres` varchar(700) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Country` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateUpload` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NameUpdate_Chap` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DateUpdate_Chap` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Female` int(1) NOT NULL DEFAULT 0,
  `Male` int(1) NOT NULL DEFAULT 0,
  `Sum_Subscribe` int(10) NOT NULL DEFAULT 0,
  `Sum_Like` int(10) NOT NULL DEFAULT 0,
  `Sum_Views` int(10) NOT NULL DEFAULT 0,
  `hide_view` int(10) NOT NULL DEFAULT 0,
  `prioritized` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qq_story`
--

INSERT INTO `qq_story` (`Id`, `Name`, `NameOther`, `story_Status`, `Content`, `ImgAvatar`, `Badge`, `Waning`, `Author`, `Genre`, `NameEncodeGenres`, `Country`, `DateUpload`, `NameUpdate_Chap`, `DateUpdate_Chap`, `Female`, `Male`, `Sum_Subscribe`, `Sum_Like`, `Sum_Views`, `hide_view`, `prioritized`) VALUES
(39, 'Doraemon', 'Doremon', 'Đang tiến hành', 'Doremon chú mèo máy đến từ tương lai !!', 'upload/story/190x247/doraemon-710384572672b30a518b8d.jpg', 'Hot', 'Thường', 'Fujiko F. Fujio', 'Hài Hước', 'hai-huoc', '', '2024-11-06 04:02:33', 'Chương 3', '2024-11-16 02:09:57', 0, 0, 49, 2, 8, 0, 0),
(40, 'Onepice', 'Vua hải tặc', 'Đang tiến hành', 'Vua hải tặc', 'upload/story/190x247/onepice-837664075673865f0afa3d.jpg', 'Hot', 'Thường', 'Unknown', 'Thám Hiểm,Hài Hước,Action', 'tham-hiem,hai-huoc,action', 'Nhật Bản', '2024-11-16 04:26:57', 'Chương 1', '2024-11-16 16:36:20', 0, 0, 0, 1, 1, 0, 0),
(41, 'Naruto', 'Naruto shipudan', 'Đang tiến hành', 'Naruto shipudan', 'upload/story/190x247/naruto-4330047996738f5607c4b4.jpg', 'New', 'Thường', 'Unknown', 'Action,Magic', 'action,magic', NULL, '2024-11-17 02:40:19', 'Chương 2', '2024-11-17 03:50:30', 0, 0, 0, 0, 2, 0, 0),
(42, '7 viên ngọc rồng', 'Dragon Ball', 'Đang tiến hành', 'Songoku truy tìm 7 viên ngọc rồng', 'upload/story/190x247/7-vien-ngoc-rong-140868506673903d664a5c.jpg', 'Hot', 'Thường', 'Unknown', 'Action,Drama', 'action,drama', NULL, '2024-11-17 02:51:52', 'Chương 2', '2024-11-17 03:13:10', 0, 0, 0, 0, 3, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qq_users`
--

CREATE TABLE `qq_users` (
  `Id` int(10) NOT NULL,
  `Email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FirstName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Birthday` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gender` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Path` text COLLATE utf8_unicode_ci NOT NULL,
  `Level` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `qq_users`
--

INSERT INTO `qq_users` (`Id`, `Email`, `Password`, `LastName`, `FirstName`, `Birthday`, `Phone`, `Gender`, `Path`, `Level`) VALUES
(37, 'vitcontho@gmail.com', '2b91be1ba40e9db4e340ef6cc145ec67abda4a70', 'Vịt', 'Còn Thở', '2001-01-01', '0986782411', '0', 'upload/avatar/160x160/1724666962630f36b63178e.jpg', 3),
(40, 'hantu0010@gmail.com', '714b0df701ef2623b61fdb2e82516f7b19037cad', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 3),
(42, 'hayen1523@gmail.com', '4f297b3f8693625fc78e3385d03ae8eb16680dfd', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 0),
(43, 'admin3@gmail.com', '0db39be35cb71b80a4b784e75f48791c0ce2b627', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 3),
(47, 'truyenhh17@gmail.com', '3c8630271d9d1b4bd62fde6050094113cfbb7198', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 0),
(51, 'phamngocanh2205@gmai', 'f2490c0d141381d4a2cf178a8261fc9ca84067e7', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 0),
(56, 'banhtacoszon00@gmail', '84a882c843ded4ed9f5ec9081e2a8944ea71dca4', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 3),
(57, 'admin6@gmail.com', '84a882c843ded4ed9f5ec9081e2a8944ea71dca4', '', 'Team nhà Cá', '2022-09-02', '-2', '1', 'upload/avatar/160x160/781211486312174d6b31a.jpg', 3),
(62, 'nguyentrihoa102@gmai', '356a192b7913b04c54574d18c28d46e6395428ab', '', '', '', '', '1', 'upload/avatar/160x160/16979845766312966ebea97.jpg', 2),
(64, 'lengocanh12345@gmail', 'f2490c0d141381d4a2cf178a8261fc9ca84067e7', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 3),
(65, 'xuongtruyen.net@gmai', 'b4f30d56f33f5092e4c50883e50dfd7bbccd884a', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 3),
(66, 'admin5@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 3),
(67, 'admin7@gmail.com', '7b902e6ff1db9f560443f2048974fd7d386975b0', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 3),
(68, 'nhinguyen2k89@gmail.', 'e5aa427b2d78c1bb6c6c0801217a21c6e8af3d8c', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 0),
(69, 'admin8@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 3),
(70, 'nengoz195@gmail.com', 'f76d4dcb8256b00eeae3991f1ff67bc14d2cfe7d', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 0),
(71, 'uyybudytd@gmail.com', '94f8671cb2288123fbbe0bf5c633d0890bfc52f3', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 0),
(72, 'admin9@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 3),
(73, 'tuonglamtnt99@gmail.', '6e2d8ba0d8b28d40cf6aba5d97427975616ecc69', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 0),
(74, 'doanhcaca997@gmail.c', '9bfec6ebf5760a0f3743948abce7d0ca1173f5d7', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 0),
(75, 'admin10@gmail.com', 'ded25ffb73eca3cc3e4f17769c05e7b2e22530c7', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 3),
(78, 'bibiteam@gmail.com', 'ded25ffb73eca3cc3e4f17769c05e7b2e22530c7', 'Bibi', 'Team', '', '', '0', 'upload/avatar/160x160/57853116763306c18de366.jpg', 3),
(79, 'tradaomatong', '356a192b7913b04c54574d18c28d46e6395428ab', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 3),
(81, 'pchi2009@gmail.com', '7c72227ebd3f95c6d2bf01fcff5d6deba402f3b2', 'Copemetruyentranh:3', '', '2004-07-11', '', '0', 'upload/avatar/160x160/14711547356319c3b2e5ff0.jpg', 0),
(82, 'duyenlun611pv@gmail.', '20fe079d29111ca51a2eb6022b06f645e38ae4bb', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 0),
(83, 'huanghui610@gmail.co', '1ccc12d75940f75e016217640b4789dc162afc0c', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 0),
(84, 'nguyentrihoa99', '356a192b7913b04c54574d18c28d46e6395428ab', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 3),
(93, 'phongj88@gmail.com', '762731545341d3cec584e2bc5b13b943401d6957', 'vo', 'tienn', '2004-02-01', '0344916255', '1', 'upload/avatar/160x160/86902901966f91b9cd324a.jpg', 3),
(94, 'ccoderr1@gmail.com', '762731545341d3cec584e2bc5b13b943401d6957', 'tien', 'vo', '2004-01-02', '012391911', '0', 'upload/avatar/160x160/1557261352672822d4eff53.jpg', 3),
(95, 'ccoderr2@gmail.com', '667a904ffb35a4e1f59b834c387626d73883cc55', NULL, NULL, NULL, NULL, '1', 'upload/avatar/160x160/noavatar.png', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `qq_authors`
--
ALTER TABLE `qq_authors`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `qq_chapter`
--
ALTER TABLE `qq_chapter`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdStory` (`IdStory`);

--
-- Chỉ mục cho bảng `qq_feedback`
--
ALTER TABLE `qq_feedback`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `qq_find`
--
ALTER TABLE `qq_find`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `qq_genres`
--
ALTER TABLE `qq_genres`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `qq_historys`
--
ALTER TABLE `qq_historys`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `qq_likes`
--
ALTER TABLE `qq_likes`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `qq_logo`
--
ALTER TABLE `qq_logo`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `qq_minchapter`
--
ALTER TABLE `qq_minchapter`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `qq_searchsort`
--
ALTER TABLE `qq_searchsort`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `qq_slider`
--
ALTER TABLE `qq_slider`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `qq_sort`
--
ALTER TABLE `qq_sort`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `qq_status`
--
ALTER TABLE `qq_status`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `qq_story`
--
ALTER TABLE `qq_story`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `qq_users`
--
ALTER TABLE `qq_users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `qq_authors`
--
ALTER TABLE `qq_authors`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1833;

--
-- AUTO_INCREMENT cho bảng `qq_chapter`
--
ALTER TABLE `qq_chapter`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT cho bảng `qq_feedback`
--
ALTER TABLE `qq_feedback`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `qq_find`
--
ALTER TABLE `qq_find`
  MODIFY `Id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `qq_genres`
--
ALTER TABLE `qq_genres`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT cho bảng `qq_historys`
--
ALTER TABLE `qq_historys`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `qq_likes`
--
ALTER TABLE `qq_likes`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `qq_logo`
--
ALTER TABLE `qq_logo`
  MODIFY `Id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `qq_minchapter`
--
ALTER TABLE `qq_minchapter`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `qq_story`
--
ALTER TABLE `qq_story`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `qq_users`
--
ALTER TABLE `qq_users`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
