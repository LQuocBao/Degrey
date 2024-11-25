-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2024 at 02:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `degrey_asm`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(3) NOT NULL,
  `type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `type`) VALUES
(1, 'Áo Thun'),
(2, 'Balo'),
(3, 'Túi'),
(4, 'Bóp Viết'),
(5, 'Body Mist'),
(6, 'Giày'),
(7, 'Nước Hoa'),
(8, 'Dép'),
(9, 'Áo Khoác'),
(10, 'Hoodie'),
(11, 'Quần'),
(12, 'Tag1'),
(18, 'aaa12');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(3) NOT NULL,
  `name_product` varchar(256) NOT NULL,
  `price_product` int(15) NOT NULL DEFAULT 0,
  `price_sale` int(15) NOT NULL DEFAULT 0,
  `image` varchar(256) NOT NULL,
  `id_category` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `price_product`, `price_sale`, `image`, `id_category`) VALUES
(2, 'Degrey Army Backpack - DAB', 430000, 0, 'Degrey-army-backpack-DAB.jpg', 2),
(3, 'Body mist Nam Nữ Unisex Degrey Black Miack Blue Money - MONE', 250000, 195000, 'Body-mist-Nam-Nu-Unisex-Degrey-Black-Miack-Blue-Money-MONE.jpg', 5),
(4, 'Bóp Viết Hộp Bút Đựng Viết Mini Nam Nữ Túi Thời Trang Unisex chất liệu SIMILI CAO CẤP Siêu Bền Đẹp local brand Degrey - BOP', 220000, 120000, 'Bop-Viet-Hop-But-Dung-Viet-Mini-Nam-Nu-Tui-Thoi-Trang-Unisex-chat-lieu-SIMILI-CAO-CAP-Sieu-Ben-Dep-local-brand-Degrey-BOP.jpg', 4),
(5, 'Degrey Túi Tote Simili màu đen New Logo thời trang nam nữ - TONE', 420000, 290000, 'Degrey-Tui-Tote-Simili-mau-den-New-Logo-thoi-trang-nam-nu-TONE.jpg', 3),
(6, 'Balo Degrey Simili màu đen New Logo thời trang nam nữ - BDNE', 480000, 430000, 'Balo-Degrey-Simili-mau-den-New-Logo-thoi-trang-nam-nu-BDNE.jpg', 2),
(7, 'Giày sandal da Degrey đế cao su thời trang unisex - GIAY', 1000000, 690000, 'Giay-sandal-da-Degrey-de-cao-su-thoi-trang-unisex-GIAY.jpg', 6),
(8, 'Túi da Degrey du lịch medium size travel simili bag - TVBM', 500000, 430000, 'Tui-da-Degrey-du-lich-medium-size-travel-simili-bag-TVBM.jpg', 3),
(9, 'Áo thun Degrey thiết kế 2 lớp Signature Degrey double tee - SIG', 400000, 0, 'ao-thun-Degrey-thiet-ke-2-lop-Signature-Degrey-double-tee-SIG.jpg', 1),
(10, 'Nước hoa Degrey Black Miack No1. forhim - HIM', 199000, 168000, 'Nuoc-hoa-Degrey-Black-Miack-No1.forhim-HIM.jpg', 7),
(11, 'Nước hoa Degrey Black Miack No2. forher - HER\r\n', 199000, 168000, 'Nuoc-hoa-Degrey-Black-Miack-No2.forher-HER.jpg', 7),
(12, 'Nước hoa Degrey Black Miack No3. valentine - MALE', 199000, 168000, 'Nuoc-hoa-Degrey-Black-Miack-No3.-valentine-MALE.jpg', 7),
(13, 'Nước hoa Degrey Black Miack No4. memorie - MEM', 199000, 168000, 'Nuoc-hoa-Degrey-Black-Miack-No4-memorie-MEM.jpg', 7),
(14, 'Nước hoa Degrey Black Miack No5. darkblue - DARK', 199000, 168000, 'Nuoc-hoa-Degrey-Black-Miack-No5-darkblue-DARK.jpg', 7),
(15, 'Nước hoa Degrey Black Miack No6. thomwithme - THOM', 199000, 168000, 'Nuoc-hoa-Degrey-Black-Miack-No6-thomwithme-THOM.jpg', 7),
(16, 'Nước hoa Degrey Black Miack No7. moonlight - MOON', 199000, 168000, 'Nuoc-hoa-Degrey-Black-Miack-No7-moonlight-MOON.jpg', 7),
(17, 'Nước hoa Degrey Black Miack No8. sunset - SUN\r\n', 199000, 168000, 'Nuoc-hoa-Degrey-Black-Miack-No8-sunset-SUN.jpg', 7),
(18, 'Nước hoa Degrey Black Miack No9. very good girl - VERY', 199000, 168000, 'Nuoc-hoa-Degrey-Black-Miack-No9-very-good-girl-VERY.jpg', 7),
(19, 'Nước hoa Degrey Black Miack No10 - SAU', 199000, 98000, 'Nuoc-hoa-Degrey-Black-Miack-No10-SAU.jpg', 7),
(20, 'Túi tote da Degrey đeo chéo màu đen - TOTD', 490000, 340000, 'Tui-tote-da-Degrey-deo-cheo-mau-den-TOTD.jpg', 3),
(21, 'Túi Tote da Degrey simili đeo chéo in lửa trắng - TOTT\n', 500000, 400000, 'Tui-Tote-da-Degrey-simili-deo-cheo-in-lua-trang-TOTT.jpg', 3),
(24, 'Túi Tote da Degrey simili đeo chéo in lửa đỏ - TOTL', 500000, 400000, 'Tui-Tote-da-Degrey-simili-deo-cheo-in-lua-do-TOTL.jpg', 3),
(25, 'Túi tote mini Degrey simili đen thời trang nam nữ - TOMI', 380000, 280000, 'Tui-tote-mini-Degrey-simili-den-thoi-trang-nam-nu-TOMI.jpg', 3),
(26, 'Dép da Degrey quai ngang đế cao su thời trang unisex - DEP', 700000, 550000, 'Dep-da-Degrey-quai-ngang-de-cao-su-thoi-trang-unisex-DEP.jpg', 8),
(27, 'Áo Thun thời trang Degrey Big Logo Is Us - DGUS', 350000, 310000, 'Ao-Thun-thoi-trang-Degrey-Big-Logo-Is-Us-DGUS.jpg', 1),
(28, 'Áo thun Tee shirt Degrey Bat Man - BAT', 350000, 310000, 'ao-thun-Tee-shirt-Degrey-Bat-Man-BAT.jpg', 1),
(29, 'Áo thun Tee shirt Degrey in hình bé Xoài - XOAI', 350000, 310000, 'ao-thun-Tee-shirt-Degrey-in-hinh-be-Xoai-XOAI.jpg', 1),
(30, 'Áo Khoác Degrey Cardigan màu kem nâu - CAR', 480000, 390000, 'ao-Khoac-Degrey-Cardigan-mau-kem-nau-CAR.jpg', 9),
(31, 'Hoodie Degrey Is Us - HDIS', 480000, 390000, 'Hoodie-Degrey-Is-Us-HDIS.jpg', 10),
(34, 'Hoodie Degrey Is Us Kem - HDISK', 480000, 390000, 'Hoodie-Degrey-Is-Us-Kem-HDISK.jpg', 10),
(35, '(White Moment) Balo Da Degrey 2 Ngăn Big Logo - BWM', 500000, 490000, '(White-Moment)-Balo-Da-Degrey-2-Ngan-Big-Logo-BWM.jpg', 2),
(36, 'Balo Degrey simili hoạ tiết độc đáo thời trang nam nữ - RUA', 700000, 550000, 'Balo-Degrey-simili-hoa-tiet-doc-dao-thoi-trang-nam-nu-RUA.jpg', 2),
(37, 'Body mist Nam Nữ Unisex Degrey Black Miack Why Noize - NOIZE\r\n', 258000, 139000, 'Body-mist-Nam-Nu-Unisex-Degrey-Black-Miack-Why-Noize-NOIZE.jpg', 5),
(38, 'Body mist Nam Nữ Unisex Degrey Black Miack Bad Guy - BGUY', 258000, 139000, 'Body-mist-Nam-Nu-Unisex-Degrey-Black-Miack-Bad-Guy-BGUY.jpg', 5),
(39, 'Body mist Nam Nữ Unisex Degrey Black Miack Sweet Girl - SWEET', 258000, 139000, 'Body-mist-Nam-Nu-Unisex-Degrey-Black-Miack-Sweet-Girl-SWEET.jpg', 5),
(40, 'Body mist Nam Nữ Unisex Degrey Chai 105ml (Phiên bản thử nghiệm) - MIST', 250000, 150000, 'Body-mist-Nam-Nu-Unisex-Degrey-Chai-105ml-(Phien-ban-thu-nghiem)-MIST.jpg', 5),
(41, 'Degrey.Madmonks Tee Vietnam 84 Đỏ - DV84 Đỏ', 440000, 290000, 'Degrey-Madmonks-Tee-Vietnam-84-Do-DV84-Do.jpg', 1),
(42, 'Degrey.madmonks short Pant xám rêu - DMQR', 380000, 190000, 'Degrey-madmonks-short-Pant-xam-reu-DMQR.jpg', 11),
(43, 'Degrey Leather Tag - TAG', 55000, 0, 'Degrey-Leather-Tag-TAG.jpg', 12),
(46, 'Degrey Mini Backpack Drawstring Silver - MBPS', 350000, 300000, 'Degrey-Mini-Backpack-Drawstring-Silver-MBPS.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `username` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `role` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 1),
(10, 'chiminh', 'chiminh@gmail.com', '123123', 0),
(11, 'quocbao2', 'quocbao@gmail.com', '123123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `pro_cate` (`id_category`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `pro_cate` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
