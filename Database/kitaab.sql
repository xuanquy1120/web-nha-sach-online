-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 21, 2021 lúc 07:40 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `kitaab`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `addproducts`
--

CREATE TABLE `addproducts` (
  `id` int(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `author` varchar(250) NOT NULL,
  `category` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `sprice` varchar(250) NOT NULL,
  `dprice` varchar(250) NOT NULL,
  `prices` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `addproducts`
--

INSERT INTO `addproducts` (`id`, `title`, `author`, `category`, `description`, `image`, `sprice`, `dprice`, `prices`) VALUES
(34, '12 years a slave', 'Nguyen van A', 'Kinh dị', '<p>mi&ecirc;u tả&nbsp;12 years a slave</p>\r\n', '12 years a slave.jpg', '10000', '5000', '15000'),
(36, 'crimson', 'Nguyen Van C', 'Tưởng tượng', '<p>mi&ecirc;u tả&nbsp;crimson</p>\r\n', 'crimson.jpg', '80000', '10000', '90000'),
(38, 'harrypotter', 'Nguyen Van E', 'Tưởng tượng', '<p>mi&ecirc;u tả</p>\r\n', 'harrypotter.png', '200000', '100000', '300000'),
(39, 'harrypotter', 'Nguyen Van E', 'Tưởng tượng', '<p>mi&ecirc;u tả&nbsp;harrypotter</p>\r\n', 'harrypotter.jpg', '250000', '50000', '300000'),
(40, 'queenofair', 'Nguyen Van F', 'Kinh dị', '<p>mi&ecirc;u tả&nbsp;queenofair</p>\r\n', 'queenofair.jpg', '50000', '10000', '60000'),
(41, 'thewitch', 'nguyen Van M', 'Kinh dị', '<p>mi&ecirc;u tả&nbsp;thewitch</p>\r\n', 'thewitch.jpg', '90000', '10000', '100000'),
(42, 'class12 flemingo', 'Nguyen Van N', 'Truyện tranh', '<p>Mi&ecirc;u Tả&nbsp;class12 flemingo</p>\r\n', 'class12 flemingo.jpg', '65000', '5000', '70000'),
(43, 'hacked', 'Nguyen Van O', 'Truyện tranh', '<p>mi&ecirc;u tả</p>\r\n', 'hacked.jpg', '95000', '15000', '110000'),
(44, 'revolution2020', 'Nguyen Van Q', 'Truyện tranh', '<p>Mi&ecirc;u tả&nbsp;revolution2020</p>\r\n', 'revolution2020.jpg', '50000', '20000', '70000'),
(45, 'shadow of the past', 'Nguyen Van W', 'Truyện tranh', '<p>mi&ecirc;u tả&nbsp;shadow of the past</p>\r\n', 'shadow of the past.jpg', '150000', '50000', '200000'),
(46, 'cat book', 'Nguyen Van R', 'Trẻ em', '<p>mi&ecirc;u tả&nbsp;cat book</p>\r\n', 'cat book.jpg', '200000', '45000', '245000'),
(47, 'gre book', 'Nguyen Van T', 'Giáo dục', '<p>mi&ecirc;u tả&nbsp;gre book</p>\r\n', 'gre book.jpg', '50000', '45000', '95000'),
(48, 'ieltsbooks', 'Nguyen Van Y', 'Giáo dục', '<p>Mi&ecirc;u tả&nbsp;ieltsbooks</p>\r\n', 'ieltsbooks.jpg', '450000', '50000', '500000'),
(49, 'rs agarwal book', 'Nguyen Van U', 'Giáo dục', '<p>mi&ecirc;u tả&nbsp;rs agarwal book</p>\r\n', 'rs agarwal book.jpg', '55000', '45000', '100000'),
(50, 'the-power-of-your-subconscious-mind-original', 'Nguyen Van I', 'Giáo dục', '<p>mi&ecirc;u tả&nbsp;the-power-of-your-subconscious-mind-original-</p>\r\n', 'the-power-of-your-subconscious-mind-original-imafwwgwebjdvgjh.jpeg', '45000', '45000', '90000'),
(51, 'Dế mèn phiêu lưu ký', 'Tân Dân', 'Trẻ em', '<p>Mi&ecirc;u tả&nbsp;D&ecirc;́ mèn phi&ecirc;u lưu ký</p>\r\n', 'de_men_phieu_luu_ky.jpg', '80000', '20000', '100000'),
(52, 'Thánh gióng', 'An Thiên', 'Trẻ em', '<p>Mi&ecirc;u tả thánh gióng</p>\r\n', 'bai-van-phan-tich-nhan-vat-thanh-giong-trong-truyen-thuyet-thanh-giong-hay-nhat-471938.jpg', '25000', '25000', '50000'),
(53, 'Sự tích bánh trưng bánh dày', 'Chưng bính truyện', 'Trẻ em', '<p>Mi&ecirc;u tả&nbsp;Sự tích bánh trưng bánh dày</p>\r\n', 'su_tich_banh_chung_banh_day_bia_0.jpg', '40000', '20000', '60000'),
(54, 'Lý luận và phê bình văn học', 'Nguyen Van O', 'Sách văn học', '<p>mi&ecirc;u tả&nbsp;Lý lu&acirc;̣n và ph&ecirc; bình văn học</p>\r\n', 'images.jpg', '45000', '5000', '50000'),
(55, 'Lê Tử Thành lãnh mạng về NT và VH', 'Lê Tử Thành', 'Sách văn học', '<p>mi&ecirc;u tả&nbsp;L&ecirc; Tử Thành lãnh mạng v&ecirc;̀ NT và VH</p>\r\n', 'img851_7.jpg', '300000', '50000', '350000'),
(56, 'you are my reason to smile', 'Nguyen Van P', 'Sách văn học', '<p>Mi&ecirc;u tả&nbsp;you are my reason to smile</p>\r\n', 'you are my reason to smile.jpg', '120000', '10000', '130000'),
(57, 'you only live once', 'Nguyen Van S', 'Sách văn học', '<p>mi&ecirc;u tả&nbsp;you only live once</p>\r\n', 'you are the best wife.jpg', '90000', '15000', '105000'),
(58, 'Cái cặp', 'Nhà sản xuất', 'Đồ dùng', '<p>Mi&ecirc;u tả&nbsp;Cái cặp</p>\r\n', 'van-mau-lop-4-hay-ta-lai-chiec-cap-sach-cua-em-4.jpg', '150000', '50000', '200000'),
(62, 'Bút bi', 'Thăng Long', 'Đồ dùng', '<p>Mi&ecirc;u tả bút bi</p>\r\n', 'gioi-thieu-ve-chiec-but-bi.png', '5000', '1000', '6000'),
(63, 'Vở ô ly', 'Hồng Hà', 'Đồ dùng', '<p>Mi&ecirc;u tả</p>\r\n', '7152-1.jpg', '5000', '2000', '7000'),
(64, 'Thước kẻ', 'Thăng long', 'Đồ dùng', '<p>mi&ecirc;̉u tả thước kẻ</p>\r\n', 'vector-single-sketch-ruler-260nw-439548721.jpg', '6000', '1000', '7000'),
(65, 'thegirlintheroom102', 'Nguyên Văn C', 'Tưởng tượng', '<p>mi&ecirc;u tả thegirlintheroom102</p>\r\n', 'thegirlintheroom102.png', '5000', '1000', '6000'),
(66, 'asylum', 'Nguyen Van C', 'Kinh dị', '<p>Mi&ecirc;u tả&nbsp;asylum</p>\r\n', 'asylum.png', '50000', '10000', '60000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`) VALUES
(1, 'xuanquy1120@gmail.com', '123456', 'xuanquy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(250) NOT NULL,
  `image` varchar(300) NOT NULL,
  `title` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `image`, `title`, `price`, `number`) VALUES
(41, '../admin/pimages/thewitch.jpg', 'thewitch', '90000', 1),
(43, '../admin/pimages/hacked.jpg', 'hacked', '95000', 1),
(47, '../admin/pimages/gre book.jpg', 'gre book', '50000', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `signup`
--

CREATE TABLE `signup` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmp` varchar(250) NOT NULL,
  `contact` int(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(200) NOT NULL,
  `address` varchar(250) NOT NULL,
  `pincode` int(7) NOT NULL,
  `profile` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `confirmp`, `contact`, `dob`, `gender`, `address`, `pincode`, `profile`) VALUES
(57, 'Nguyễn Xuân Quý', 'xuanquy1120@gmail.com', '123456', '123456', 349593356, '2000-01-01', 'Nam', 'Thanh Hóa, Việt Nam', 10000, 'anh-dai-dien.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `addproducts`
--
ALTER TABLE `addproducts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `addproducts`
--
ALTER TABLE `addproducts`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
