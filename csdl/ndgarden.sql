-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 03:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ndgarden`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_nguoidung` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `image_cm` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaybl` datetime NOT NULL DEFAULT current_timestamp(),
  `sao` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `id_nguoidung`, `id_product`, `image_cm`, `ngaybl`, `sao`) VALUES
(65, 'Xương rồng rất đẹp, cho shop 5 sao', 15, 35, '', '2021-12-28 21:08:52', 5),
(67, 'Cây rất đẹp, sẽ ủng hộ shop lâu dài', 15, 43, 'images/4e723dbe48.png', '2021-12-30 00:48:29', 4),
(70, 'Cây khỏe đẹp', 15, 49, '', '2021-12-30 18:29:16', 5),
(71, 'đwfd', 15, 45, 'images/9e74d276e4.png', '2021-12-30 18:29:53', 4),
(72, 'Cây khỏe đẹp', 15, 45, '', '2021-12-30 18:30:13', 4),
(73, 'quá đẹp', 15, 45, '', '2021-12-30 18:31:00', 3),
(74, 'Cây khỏe đẹp', 15, 35, '', '2021-12-30 18:38:01', 4),
(75, 'Cây như hình', 15, 35, 'images/faf0b0b1f8.png', '2021-12-30 19:21:00', 3),
(77, 'Cây khỏe đẹp', 15, 41, 'images/a692899447.png', '2021-12-30 19:32:38', 4),
(78, 'Sen đá rất đẹp, cho shop 5 sao', 15, 41, '', '2021-12-30 19:32:57', 5),
(79, 'Cây khỏe đẹp', 15, 50, '', '2021-12-30 23:00:57', 5),
(80, 'Cây khỏe đẹp', 15, 50, '', '2021-12-30 23:03:20', 5),
(81, 'Cây khỏe đẹp', 15, 50, '', '2021-12-30 23:04:15', 5),
(82, 'Cây khỏe đẹp', 15, 50, '', '2021-12-30 23:04:36', 5),
(83, 'Cây khỏe đẹp', 15, 50, '', '2021-12-30 23:06:26', 5),
(84, 'Cây khỏe đẹp', 15, 50, '', '2021-12-30 23:06:48', 5),
(85, 'Cây khỏe đẹp', 15, 50, '', '2021-12-30 23:07:17', 5),
(86, 'Cây khỏe đẹp', 15, 50, '', '2021-12-30 23:08:08', 5),
(87, 'Cây khỏe đẹp', 15, 50, '', '2021-12-30 23:08:24', 5),
(88, 'Cây khỏe đẹp', 15, 34, '', '2021-12-30 23:16:13', 5),
(89, 'Cây rất đep', 15, 53, '', '2021-12-31 01:45:35', 5),
(90, 'Cây khỏe đẹp', 16, 53, 'images/744705a9a4.png', '2021-12-31 09:05:38', 4),
(91, 'Cây khỏe đẹp', 16, 50, 'images/519ce02653.png', '2021-12-31 09:06:59', 4),
(92, 'Cây khỏe đẹp', 20, 43, 'images/8949bb0ee2.png', '2021-12-31 09:32:25', 5);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `email`) VALUES
(98, 'hoangdanh54317@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `huydon`
--

CREATE TABLE `huydon` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `sId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminEmail` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `adminUser` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminPass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(30) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminEmail`, `adminUser`, `adminPass`, `level`, `status`) VALUES
(39, 'Đặng Thị Thanh Ngân', 'dttngan_19th1@student.agu.edu.vn', 'ngan', '202cb962ac59075b964b07152d234b70', 1, 0),
(40, 'Đặng Hữu Nghĩa', 'dhnghia_19th@student.agu.edu.vn', 'gom', '202cb962ac59075b964b07152d234b70', 0, 1),
(41, 'Nguyễn Hoàng Danh', 'hoangdanh54317@gmail.com', 'danh', '202cb962ac59075b964b07152d234b70', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandId`, `brandName`) VALUES
(16, 'Xương rồng'),
(17, 'Sen đá'),
(18, 'Hoa lan'),
(19, 'Bon sai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `sId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartId`, `productId`, `sId`, `productName`, `price`, `quantity`, `image`) VALUES
(26, 43, 'npnsa3n3l4c7sjnamn4q7grbvo', 'Sen đá phật bà', '30000', 1, 'ef3a3c3f7f.png'),
(27, 41, 'npnsa3n3l4c7sjnamn4q7grbvo', 'Sen đá kim cương', '120000', 2, '8cbb920630.png'),
(28, 38, 'npnsa3n3l4c7sjnamn4q7grbvo', 'Xương rồng trạng nguyên', '100000', 1, '6ce64e6adb.png'),
(29, 43, 'npnsa3n3l4c7sjnamn4q7grbvo', 'Sen đá phật bà', '30000', 1, 'ef3a3c3f7f.png'),
(30, 41, 'npnsa3n3l4c7sjnamn4q7grbvo', 'Sen đá kim cương', '120000', 1, '8cbb920630.png'),
(31, 38, 'oocit16t1k5v3ni2mp0bssj2j2', 'Xương rồng trạng nguyên', '100000', 1, '6ce64e6adb.png'),
(38, 45, '3b3kji6cpv1kjv4vrpvhc1f7h4', 'Đai châu thái', '250000', 1, '1aebd3f925.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(20, 'Cây trồng trong nhà'),
(23, 'Cây bụi, thân bụi'),
(26, 'Cây mọng nước và xương rồng'),
(27, 'Cây ưa trồng trong vườn'),
(28, 'Cây cảnh trồng trong ban công và đất cao');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_compare`
--

CREATE TABLE `tbl_compare` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `address`, `city`, `country`, `zipcode`, `phone`, `email`, `password`, `image`, `level`) VALUES
(16, 'Đặng Thị Thanh Ngân', 'Vĩnh Khánh - Thoại Sơn ', 'Long Xuyên', 'Việt Nam', '88000', '0385238595', 'dttngan_19th1@student.agu.edu.vn', '202cb962ac59075b964b07152d234b70', '2b2798c27b.png', 0),
(19, 'thanhngan', 'Phú Thuận, Thoại Sơn, An Giang', 'Long Xuyên', 'Việt Nam', '123', '0385930622', 'thanh.pdt3724@gmail.com', '202cb962ac59075b964b07152d234b70', 'd5c9e02e8b.png', 0),
(20, 'danh nguyen', 'Phú Thuận, Thoại Sơn, An Giang', 'Long Xuyên', 'Việt Nam', '88000', '0385930622', 'hoangdanh54317@gmail.com', '202cb962ac59075b964b07152d234b70', '75d345b3f1.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date_order` datetime NOT NULL DEFAULT current_timestamp(),
  `sId` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `productId`, `productName`, `customer_id`, `quantity`, `price`, `image`, `status`, `date_order`, `sId`) VALUES
(135, 35, 'Xương rồng bánh sinh nhật', 15, 2, '80000', '0c44c0949d.png', 2, '2021-12-28 21:01:23', 'npnsa3n3l4c7sjnamn4q7grbvo'),
(136, 34, 'Xương rồng Gymno', 15, 2, '70000', '663d533bc9.png', 2, '2021-12-28 21:01:23', 'npnsa3n3l4c7sjnamn4q7grbvo'),
(138, 43, 'Sen đá phật bà', 15, 1, '30000', 'ef3a3c3f7f.png', 2, '2021-12-30 00:06:20', '5ddv2csdt64jgr3ipjs3p397os'),
(139, 41, 'Sen đá kim cương', 15, 3, '360000', '8cbb920630.png', 2, '2021-12-30 00:21:40', '5ddv2csdt64jgr3ipjs3p397os'),
(141, 34, 'Xương rồng Gymno', 0, 1, '35000', '663d533bc9.png', 0, '2021-12-30 21:59:51', '3b3kji6cpv1kjv4vrpvhc1f7h4'),
(142, 35, 'Xương rồng bánh sinh nhật', 0, 5, '200000', '0c44c0949d.png', 0, '2021-12-30 21:59:51', '3b3kji6cpv1kjv4vrpvhc1f7h4'),
(143, 50, 'Tiểu hồ điệp', 0, 1, '90000', '3ddbe1ba7f.png', 0, '2021-12-30 21:59:51', '3b3kji6cpv1kjv4vrpvhc1f7h4'),
(144, 34, 'Xương rồng Gymno', 15, 1, '35000', '663d533bc9.png', 2, '2021-12-30 22:45:46', 'b4529obh551shdtlkn94jm8c2o'),
(145, 45, 'Đai châu thái', 15, 2, '500000', '1aebd3f925.png', 3, '2021-12-30 22:46:02', 'b4529obh551shdtlkn94jm8c2o'),
(151, 43, 'Sen đá phật bà', 15, 2, '60000', 'ef3a3c3f7f.png', 1, '2021-12-31 00:41:27', 'b4529obh551shdtlkn94jm8c2o'),
(152, 39, 'Xương rồng tai thỏ', 15, 3, '90000', '2068502a48.png', 2, '2021-12-31 01:16:02', 'b4529obh551shdtlkn94jm8c2o'),
(153, 50, 'Tiểu hồ điệp', 20, 1, '90000', '3ddbe1ba7f.png', 2, '2021-12-31 09:29:12', 'b4529obh551shdtlkn94jm8c2o'),
(154, 50, 'Tiểu hồ điệp', 20, 1, '90000', '3ddbe1ba7f.png', 2, '2021-12-31 09:29:12', 'b4529obh551shdtlkn94jm8c2o'),
(155, 43, 'Sen đá phật bà', 20, 1, '30000', 'ef3a3c3f7f.png', 2, '2021-12-31 09:29:12', 'b4529obh551shdtlkn94jm8c2o'),
(156, 41, 'Sen đá kim cương', 20, 1, '120000', '8cbb920630.png', 3, '2021-12-31 09:31:01', 'b4529obh551shdtlkn94jm8c2o'),
(157, 50, 'Tiểu hồ điệp', 20, 1, '90000', '3ddbe1ba7f.png', 0, '2022-01-02 19:20:39', '1ilih0vvq2qeplp7o0odue4io2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `product_code` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `productQuantity` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_soldout` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `product_remain` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `catId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `product_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `product_code`, `productQuantity`, `product_soldout`, `product_remain`, `catId`, `brandId`, `product_desc`, `type`, `price`, `image`) VALUES
(34, 'Xương rồng Gymno', 'XR1', '200', '10', '190', 26, 16, '<p><span><span>Xương rồng Gymno</span>&nbsp;chủ yếu được ph&acirc;n bố ở Argentina, một phần ở Uruguay, Paraguay, nam Bolivia v&agrave; một phần Brazil.</span></p>\r\n<p><span>Lo&agrave;i xương rồng đặc biệt n&agrave;y được nh&acirc;n giống v&agrave; mang về Việt Nam v&agrave;o năm 1980 tại Nha Trang, từ một nh&agrave; khoa học người Brazil. Xương rồng c&oacute; nguồi gốc từ Brazil l&agrave; lo&agrave;i c&acirc;y dễ chăm s&oacute;c, kh&ocirc;ng cần tưới nhiều, nhanh ra hoa v&agrave; ph&aacute;t triển khỏe mạnh</span></p>\r\n<h2><span><span>Đặc điểm của xương rồng Gymno</span></span></h2>\r\n<ul>\r\n<li><span>Về k&iacute;ch thước, c&aacute;c loại&nbsp;<span>xương rồng Gymno&nbsp;</span>c&oacute; h&igrave;nh d&aacute;ng khi&ecirc;m tốn chỉ từ 4 -15 cm. Lo&agrave;i lớn nhất của chi xương rồng n&agrave;y đạt đường k&iacute;nh khoảng 16 cm v&agrave; cao 12 cm. Với k&iacute;ch thước nhỏ, y&ecirc;u cầu chăm s&oacute;c tương đối dễ d&agrave;ng n&ecirc;n xương rồng kh&aacute; bổ biến trong nu&ocirc;i trồng, đặc biệt l&agrave; trồng tiểu cảnh.</span></li>\r\n<li>\r\n<ul>\r\n<li><span>Về đặc điểm đặc trưng, c&acirc;y&nbsp;<span>xương rồng Gymno&nbsp;</span>c&oacute; h&igrave;nh cầu nhỏ, dọc th&acirc;n c&acirc;y c&oacute; c&aacute;c đốm nhỏ, tại c&aacute;c đốm n&agrave;y sẽ xuất hiện c&aacute;c gai với k&iacute;ch thước tương ứng vừa với lỗ gai đ&oacute;. Khi trưởng th&agrave;nh, c&acirc;y sẽ đẻ nhiều nh&aacute;nh tạo th&agrave;nh bụi, đ&ocirc;i khi tr&ugrave;m k&iacute;n cả c&acirc;y mẹ.</span></li>\r\n<li><span>Về lo&agrave;i, chi Gymno n&agrave;y c&oacute; đến khoảng 50 lo&agrave;i nhỏ hơn như&nbsp;Gymnocalycium alboareolatum, Gymnocalycium amerhauseri, Gymnocalycium andreae, ymnocalycium anisitsi, Gymnocalycium baldianum,&hellip;.</span></li>\r\n<li><span>Về hoa, hầu như loại xương rồng n&agrave;o cũng đều ra hoa v&agrave; Gymno cũng kh&ocirc;ng ngoại lệ. Hoa của xương rồng Gymno c&oacute; đặc điểm l&agrave; kh&ocirc;ng c&oacute; bất kỳ l&ocirc;ng hay gai n&agrave;o phủ l&ecirc;n m&agrave; ch&uacute;ng đều mịn m&agrave;ng, căng mọng. Gần như c&aacute;c lo&agrave;i xương rồng Gymno thường c&oacute; hoa m&agrave;u trắng, m&agrave;u kem hoặc m&agrave;u hồng nhạt, số &iacute;t c&oacute; m&agrave;u đen đậm hoặc m&agrave;u v&agrave;ng.</span>\r\n<ul>\r\n<li><span>V&igrave; k&iacute;ch thước c&acirc;y kh&ocirc;ng to lớn n&ecirc;n hoa của Gymno cũng nhỏ b&eacute; khoảng 2 &ndash; 3cm. Trong giai đoạn nở hoa v&agrave; giai đoạn đầu mới mọc c&acirc;y con, ch&uacute;ng thường được nu&ocirc;i trồng trong lồng k&iacute;nh để đảm bảo nhiệt độ ph&ugrave; hợp cho sự ph&aacute;t triển tốt nhất của ch&uacute;ng.Đặc điểm của xương rồng Gymno &iacute;t gai, nhanh ra hoa, dễ chăm s&oacute;c</span></li>\r\n</ul>\r\n</li>\r\n</ul>\r\n</li>\r\n</ul>', 1, '35000', '663d533bc9.png'),
(35, 'Xương rồng bánh sinh nhật', 'XR1', '200', '2', '198', 26, 16, '<p><span>Nghe c&aacute;i t&ecirc;n xương rồng b&aacute;nh sinh nhật c&oacute; lẽ mọi người sẽ h&igrave;nh dung n&oacute; giống một chiếc b&aacute;nh sinh nhật. C&oacute; thể l&agrave; h&igrave;nh tr&ograve;n, h&igrave;nh vu&ocirc;ng, h&igrave;nh chữ nhật&hellip;V&acirc;ng, đ&uacute;ng l&agrave; c&aacute;i t&ecirc;n cũng n&oacute;i l&ecirc;n tất cả, loại&nbsp;</span><a href=\"https://sendalongphung.com/cac-loai-xuong-rong-canh-nho-xinh-ma-ban-nhat-dinh-phai-so-huu/\" rel=\"noopener noreferrer\" target=\"_blank\"><span>xương rồng mini</span></a><span>&nbsp;n&agrave;y c&oacute; dạng khối h&igrave;nh tr&ograve;n nhỏ xinh tựa như một chiếc b&aacute;nh kem, được bao quanh bởi một lớp gai kh&aacute; d&agrave;y v&agrave; c&acirc;y c&ograve;n c&oacute; khả năng ra hoa nhiều. Hoa xương rồng b&aacute;nh sinh nhật c&oacute; thể đua sắc tỏa hương khoảng từ 4 đến 7 ng&agrave;y. Khi ra hoa nếu để trong m&ocirc;i trường lạnh hoa sẽ bền v&agrave; l&acirc;u t&agrave;n hơn.</span></p>', 1, '40000', '0c44c0949d.png'),
(38, 'Xương rồng trạng nguyên', 'XR1', '200', '0', '30', 26, 16, '<p><span>Giới thiệu c&acirc;y Xương rồng Trạng Nguy&ecirc;n</span></p>\r\n<ul>\r\n<li>Họ: Notocactus</li>\r\n</ul>\r\n<p><span>Đặc điểm</span></p>\r\n<ul>\r\n<li>Xương Rồng Trạng Nguy&ecirc;n th&acirc;n h&igrave;nh tr&ograve;n như quả b&oacute;ng, nhưng dẹt một ch&uacute;t theo chiều ngang, tr&ocirc;ng giống như chiếc b&aacute;nh bao.</li>\r\n<li>Th&acirc;n m&agrave;u xanh, bao quanh bởi c&aacute;c gai m&agrave;u v&agrave;ng đồng, nhỏ nhưng cứng</li>\r\n<li>Tr&ecirc;n ch&oacute;p c&oacute; nhiều gai tập trung, mật độ cao hơn nhưng nơi kh&aacute;c, h&igrave;nh th&ugrave; như một vị trạng nguy&ecirc;n đang đội mũ quan.</li>\r\n<li>C&acirc;y ra hoa màu vàng</li>\r\n</ul>\r\n<p><span>&Yacute; nghĩa phong thủy</span></p>\r\n<ul>\r\n<li>Biểu trưng cho t&iacute;nh c&aacute;ch đơn giản, thẳng thắn của người trồng.</li>\r\n</ul>\r\n<p><span>C&ocirc;ng dụng</span></p>\r\n<ul>\r\n<li>H&igrave;nh th&ugrave; đơn giản, c&acirc;y ph&ugrave; hợp cho những bạn c&oacute; sở th&iacute;ch kh&ocirc;ng qu&aacute; cầu k&igrave;, chuộng sự đơn giản v&agrave; y&ecirc;u mến những h&igrave;nh d&aacute;ng bo tr&ograve;n thay v&igrave; kh&iacute;a cạnh hay sự đẹp mắt</li>\r\n<li>D&ugrave;ng trong trang tr&iacute;: nội thất, ngoại thất, s&acirc;n vườn, văn ph&ograve;ng, tr&ecirc;n b&agrave;n, ban c&ocirc;ng,...</li>\r\n</ul>\r\n<p><span>C&aacute;ch trồng</span></p>\r\n<ul>\r\n<li>Ưa &aacute;nh s&aacute;ng, nắng, kh&ocirc;ng ưa ẩm</li>\r\n<li>Nước: tầm 1, 2 tuần h&atilde;y tưới 1 lần, tưới vừa phải quanh đất, tr&aacute;nh tưới thường xuy&ecirc;n, dễ g&acirc;y &uacute;ng.</li>\r\n<li>Đất: ch&uacute; &yacute; d&ugrave;ng đất dễ r&aacute;o nước, nếu thấy đất qu&aacute; ẩm v&igrave; dư nước th&igrave; thay đất mới chứ kh&ocirc;ng để l&acirc;u nguy hiểm cho c&acirc;y.</li>\r\n</ul>', 1, '100000', '6ce64e6adb.png'),
(39, 'Xương rồng tai thỏ', 'XR1', '200', '3', '207', 26, 16, '<p>DFGNBFD</p>', 0, '30000', '2068502a48.png'),
(41, 'Sen đá kim cương', 'SE1', '20', '3', '67', 26, 17, '<h2 id=\"h-c-i-m-c-y-sen-kim-c-ng\">Đặc điểm c&acirc;y sen đ&aacute; kim cương</h2>\r\n<p><span>Sen đ&aacute; kim cương</span>&nbsp;c&oacute; vẻ ngo&agrave;i rất đặc sắc, kh&ocirc;ng kh&oacute; để nhận ra. Dưới đ&acirc;y l&agrave; v&agrave;i th&ocirc;ng tin ch&iacute;nh bạn n&ecirc;n nắm r&otilde;.</p>\r\n<ul>\r\n<li><span>T&ecirc;n:</span>&nbsp;Sen đ&aacute; kim cương</li>\r\n<li><span>T&ecirc;n gọi kh&aacute;c:</span>&nbsp;Sen đ&aacute; dạ quang, sen ngọc</li>\r\n<li><span>Họ:</span>&nbsp;Măng t&acirc;y (Asparagaceae)</li>\r\n<li><span>T&ecirc;n khoa học:</span>&nbsp;Haworthia cooperi var\r\n<p>Sen đ&aacute; kim cương c&oacute; nguồn gốc bắt nguồn từ c&aacute;c nước ch&acirc;u Mỹ, nhờ vẻ đẹp nổi bật m&agrave; được ưa chuộng rồi lan ra nhiều nước.</p>\r\n<p>L&agrave; c&acirc;y rễ ch&ugrave;m, lo&agrave;i&nbsp;<a href=\"https://lamvuon.net/cay-sen-da/\">sen đ&aacute;</a>&nbsp;n&agrave;y gần như chỉ c&oacute; l&aacute;, kh&ocirc;ng c&oacute; th&acirc;n, k&iacute;ch thước kh&aacute; nhỏ, đường k&iacute;nh chỉ từ 7 &ndash; 15cm.</p>\r\n<p>C&aacute;c l&aacute; của sen đ&aacute; kim cương căng mọng, tạo th&agrave;nh h&igrave;nh bầu dục với đầu hơi tr&ograve;n, xếp chồng l&ecirc;n nhau, long lanh. Dọc l&aacute; c&ograve;n c&oacute; c&aacute;c đường g&acirc;n tạo nến g&atilde;y như vết cắt kim cương, tạo n&ecirc;n một vẻ đẹp long lanh như pha l&ecirc;.</p>\r\n<p>Khi tiếp x&uacute;c với &aacute;nh nắng, những chiếc l&aacute; &aacute;nh l&ecirc;n sự phản chiếu như những vi&ecirc;n kim cương qu&yacute; hiếm. L&aacute; c&acirc;y c&oacute; khả năng tạo chồi, n&ecirc;n khi rụng sẽ h&igrave;nh th&agrave;nh c&acirc;y mới, tất nhi&ecirc;n l&agrave; trong điều kiện th&iacute;ch hợp.</p>\r\n<p>M&agrave;u sắc của sen đ&aacute; kim cương cũng v&ocirc; c&ugrave;ng đa dạng, hiện nay ở Việt Nam phổ biến cũng đ&atilde; c&oacute; tới 7 loại m&agrave;u kh&aacute;c nhau như xanh l&aacute;, xanh dương, xanh ngọc, v&agrave;ng, trắng, n&acirc;u, đỏ hồng.</p>\r\n</li>\r\n<li>\r\n<p>Về đặc t&iacute;nh sống, sen đ&aacute; kim cương c&oacute; tốc độ sinh trưởng trung b&igrave;nh, sống tốt trong nhiều điều kiện thời tiết, chịu hạn tốt nhưng kh&ocirc;ng chịu được ngập &uacute;ng. Nh&igrave;n chung th&igrave; kh&aacute; dễ chăm s&oacute;c.</p>\r\n<h2 id=\"h-c-ng-d-ng-c-a-sen-kim-c-ng\">C&ocirc;ng dụng của sen đ&aacute; kim cương</h2>\r\n<p>Mang trong m&igrave;nh vẻ đẹp long lanh, sang trọng,&nbsp;<span>sen đ&aacute; kim cương</span>&nbsp;l&agrave; lựa chọn tuyệt vời nếu bạn đang t&igrave;m một c&acirc;y cảnh nhỏ gọn để trang tr&iacute;.</p>\r\n<p>Kết gợp với những chậy c&acirc;y nhỏ xinh, th&ecirc;m &iacute;t sỏi nhiều m&agrave;u sắc, bạn c&oacute; thể đặt sen đ&aacute; ở cửa sổ, b&agrave;n học, b&agrave;n l&agrave;m việc, b&agrave;n tiếp kh&aacute;ch&hellip;</p>\r\n<p>C&aacute;c qu&aacute;n c&agrave; ph&ecirc;, nh&agrave; h&agrave;ng, kh&aacute;ch sạn cũng c&oacute; thể trưng b&agrave;y c&aacute;c chậu sen đ&aacute; để t&ocirc; điểm kh&ocirc;ng gian cho kh&aacute;ch.</p>\r\n</li>\r\n</ul>', 1, '120000', '8cbb920630.png'),
(42, 'Sen đá viền đỏ', '', '20', '0', '20', 26, 17, '<h2><span id=\"Dac_diem_cua_cay\"><span>Đặc điểm của c&acirc;y</span></span></h2>\r\n<p><span>Sen Đ&aacute; Viền Đỏ (t&ecirc;n khoa học:&nbsp;</span><span><em>Echeveria Pulidonis</em>) l&agrave; một loại c&acirc;y mọng nước ph&aacute;t triển chậm thuộc họ Crassulaceae với những chiếc l&aacute; thu&ocirc;n d&agrave;i m&agrave;u xanh nhạt c&oacute; viền m&agrave;u đỏ hồng.</span></p>\r\n<p><span>C&acirc;y mọc th&agrave;nh đ&agrave;i lớn, c&aacute;c l&aacute; xếp s&aacute;t nhau xoay đều quanh trục tạo th&agrave;nh h&igrave;nh b&ocirc;ng hoa sen đẹp mắt. Khi c&acirc;y trưởng th&agrave;nh sẽ nở hoa m&agrave;u v&agrave;ng. Những b&ocirc;ng hoa nhỏ xinh tạo điểm nhấn cho c&acirc;y khi được trồng chung với c&aacute;c loại sen đ&aacute; kh&aacute;c.</span></p>\r\n<p><span>C&acirc;y thường được d&ugrave;ng l&agrave;m c&acirc;y trang tr&iacute; trong văn ph&ograve;ng, b&agrave;n l&agrave;m việc, đặt gần kệ cửa sổ, l&agrave;m tiểu cảnh s&acirc;n vườn. B&ecirc;n cạnh đ&oacute;, với m&agrave;u sắc thu h&uacute;t &aacute;nh nh&igrave;n, Sen Đ&aacute; Viền Đỏ c&ograve;n được d&ugrave;ng để l&agrave;m qu&agrave; tặng bạn b&egrave;, người th&acirc;n với những &yacute; nghĩa đặc biệt.</span></p>\r\n<h2><span id=\"Y_nghia_cua_cay\"><span>&Yacute; nghĩa của c&acirc;y</span></span></h2>\r\n<p><span>Sen Đ&aacute; Viền Đỏ mang &yacute; nghĩa như một loại hoa về t&igrave;nh y&ecirc;u bền vững, l&acirc;u d&agrave;i, một t&igrave;nh y&ecirc;u vĩnh cửu, kh&ocirc;ng đổi thay theo thời gian. Giống như sức sống m&atilde;nh liệt của c&acirc;y, loại c&acirc;y n&agrave;y kh&ocirc;ng đ&ograve;i hỏi phải chăm s&oacute;c nhiều m&agrave; vẫn lu&ocirc;n sống khỏe mạnh v&agrave; lớn dần l&ecirc;n.</span></p>\r\n<p><span>Ngo&agrave;i ra, c&acirc;y c&ograve;n mang &yacute; nghĩa phong thủy, gi&uacute;p mang t&agrave;i lộc, may mắn tới cho những ai đang trồng v&agrave; chăm s&oacute;c. Những chiếc l&aacute; mọng nước đại diện cho sự căn tr&agrave;n sức sống, mang lại nguồn sinh kh&iacute; tốt cho gia chủ sở hữu.</span></p>', 0, '35000', '6b063e57a6.png'),
(43, 'Sen đá phật bà', '', '20', '5', '15', 26, 17, '<p dir=\"ltr\"><span>Sen đ&aacute; phật b&agrave; l&agrave; c&acirc;y mọng nước, c&oacute; t&ecirc;n khoa học l&agrave; Sempervivum tectorum, thuộc họ Crassulaceae (họ Thuốc bỏng). C&acirc;y sen đ&aacute; phật b&agrave; c&oacute; nguồn gốc tự nhi&ecirc;n ở ph&iacute;a Nam d&atilde;y n&uacute;i Alps thuộc Ch&acirc;u &Acirc;u. Trong tiếng Anh, sen đ&aacute; phật b&agrave; được gọi l&agrave; common houseleek hoặc houseleek.</span></p>\r\n<p dir=\"ltr\">Sen đ&aacute; phật b&agrave; c&oacute; nhiều l&aacute; mọc xoay tr&ograve;n đều quanh trục th&acirc;n tr&ocirc;ng rất đẹp v&agrave; nh&igrave;n như một đ&oacute;a hoa sen. Sen đ&aacute; phật b&agrave; gợi đến h&igrave;nh ảnh của Đức Phật Quan &Acirc;m ngh&igrave;n mắt ngh&igrave;n tay. C&oacute; lẽ v&igrave; vậy m&agrave; người ta gọi loại&nbsp;<a title=\"C&acirc;y hoa sen đ&aacute; l&agrave; g&igrave;, c&oacute; t&aacute;c dụng , &yacute; nghĩa g&igrave;, hợp tuổi n&agrave;o, mệnh n&agrave;o?\" href=\"https://meta.vn/hotro/sen-da-8663\">sen đ&aacute;</a>&nbsp;n&agrave;y l&agrave; sen đ&aacute; phật b&agrave;.</p>\r\n<p dir=\"ltr\"><span>L&aacute; sen phật b&agrave; c&oacute; h&igrave;nh d&aacute;ng thu&ocirc;n nhọn đầu, phần đỉnh đầu l&aacute; thường c&oacute; m&agrave;u đỏ t&iacute;a hoặc m&agrave;u hồng v&agrave; m&eacute;p l&aacute; c&oacute; nhiều l&ocirc;ng tơ hơi cứng. T&ugrave;y thuộc v&agrave;o điều kiện sống, sen đ&aacute; phật b&agrave; c&oacute; k&iacute;ch thước rất phong ph&uacute; v&agrave; ph&ugrave; hợp trang tr&iacute; nhiều kh&ocirc;ng gian kh&aacute;c nhau.</span></p>\r\n<p dir=\"ltr\"><span>Sen đ&aacute; phật b&agrave; sở hữu vẻ ngo&agrave;i đẹp mắt với m&agrave;u sắc tươi s&aacute;ng n&ecirc;n rất ph&ugrave; hợp để trang tr&iacute; b&agrave;n l&agrave;m việc, b&agrave;n học, kh&ocirc;ng gian sống, nh&agrave; ở, qu&aacute;n c&agrave; ph&ecirc;, kh&aacute;ch sạn&hellip; B&ecirc;n cạnh đ&oacute;, sen đ&aacute; phật b&agrave; c&ograve;n c&oacute; khả năng thanh lọc kh&ocirc;ng kh&iacute; rất tốt, gi&uacute;p mang lại bầu kh&ocirc;ng kh&iacute; dễ chịu, thoải m&aacute;i v&agrave; gần gũi với tự nhi&ecirc;n cho kh&ocirc;ng gian của bạn.</span></p>', 1, '30000', 'ef3a3c3f7f.png'),
(44, 'Sen đá hoa hồng', 'SE1', '20', '0', '30', 26, 17, '<p><span>?☘?Sen đ&aacute; hoa hồng xanh: t&ecirc;n khoa học l&agrave; Greenovia?☘? </span></p>\r\n<p><span>?C&acirc;y thường ph&aacute;t triển v&agrave;o m&ugrave;a thu đến m&ugrave;a xu&acirc;n v&agrave; m&ugrave;a h&egrave; th&igrave; ngừng hoạt động, c&aacute;c c&aacute;nh hoa sẽ kh&eacute;p lại v&agrave; c&acirc;y rơi v&agrave;o trạng th&aacute;i \"ngủ\". Đ&acirc;y l&agrave; thời điểm th&iacute;ch hợp nhất để thay đất v&agrave; chăm b&oacute;n để c&acirc;y c&oacute; thể thức giấc v&agrave;o m&ugrave;a thu.</span></p>\r\n<p><span> ?M&ugrave;a h&egrave; ở miền Bắc tầm khoảng th&aacute;ng 5 khi nhiệt độ l&ecirc;n qu&aacute; 28 độ Greenovia sẽ ngủ h&egrave;. L&uacute;c n&agrave;y c&aacute;c l&aacute; sẽ kh&eacute;p chặt v&agrave;o nhau l&aacute; b&ecirc;n ngo&agrave;i kh&ocirc; đi che phủ cho lớp l&aacute; b&ecirc;n trong. Th&acirc;n c&acirc;y cũng kh&ocirc; lại. Ta sẽ tưởng c&acirc;y chết nhưng kh&ocirc;ng phải vậy. L&uacute;c n&agrave;y chỉ tưới một th&aacute;ng một lần, tưới &iacute;t nước xung quanh chậu. </span></p>\r\n<p><span>?Sen đ&aacute; hoa hồng ưa s&aacute;ng v&agrave; tho&aacute;ng gi&oacute;. Nếu ta trồng nơi đủ nắng tho&aacute;ng gi&oacute; c&acirc;y sẽ đẹp tuyệt vời như một b&oacute; hoa hồng xanh. </span></p>\r\n<p><span>?Sen đ&aacute; Greenovia l&agrave; d&ograve;ng nhập khẩu H&agrave;n Quốc n&ecirc;n khả năng chống chịu cực tốt, c&oacute; thể vận chuyển đi xa m&agrave; kh&ocirc;ng sợ c&acirc;y chết. </span></p>\r\n<p><span>?Chỉ 50k bạn sẽ c&oacute; ngay một b&ocirc;ng hoa xanh đường k&iacute;nh c&acirc;y khoảng 1cm. Thật tuyệt vời ?Chỉ 80k bạn sẽ c&oacute; 1 c&acirc;y sen đ&aacute; hoa hồng xanh đường k&iacute;nh khoảng 2cm. ??? Với sức sống m&atilde;nh liệt v&agrave; vẻ đẹp tuyệt vời th&igrave; đ&acirc;y l&agrave; một trong những m&oacute;n qu&agrave; tặng m&agrave; bao nhi&ecirc;u c&ocirc; g&aacute;i y&ecirc;u sen đ&aacute; đều ao ước c&oacute; được. ???? C&aacute;ch chăm s&oacute;c c&acirc;y. Sau khi mua c&acirc;y về, trồng v&agrave;o chậu c&oacute; chứa đất, trồng xong để kh&ocirc; 2-3 ng&agrave;y c&oacute; thể tưới 1 ch&uacute;t nước chống kh&ocirc; đất. 1-2 tuần tưới 1 lần. C&acirc;y kh&ocirc;ng ưa nước, nhiều nước c&acirc;y dễ bị &uacute;ng. Kh&ocirc;ng để nước tr&agrave;n v&agrave;o c&aacute;nh hoa (l&aacute;). Đất kh&ocirc; kh&ocirc; sẽ tốt. Kh&ocirc;ng n&ecirc;n nhổ c&acirc;y khi# đ&atilde; trồng v&agrave;o đất để kiểm tra rễ.</span></p>', 1, '50000', '4eaf06efd7.png'),
(45, 'Đai châu thái', 'L1', '200', '1', '199', 27, 18, '<p><span>Hoa lan ngọc điểm đai tr&acirc;u * Đặc điểm ph&acirc;n loại h&agrave;ng </span></p>\r\n<p><span>? Xuất xứ: Th&aacute;i Lan - đ&atilde; trồng thuần ở Việt Nam ? Đặc điểm nhận dang: Hoa lan ngọc điểm đai tr&acirc;u l&aacute; m&iacute;t h&agrave;ng xếp bản l&aacute; khoảng 3-4 ng&oacute;n tay t&ugrave;y v&agrave;o vị tr&iacute; của l&aacute; ? Độ tuổi: H&agrave;ng nu&ocirc;i c&acirc;y m&ocirc; đ&atilde; được trồng 2,5- 3 năm tuổi mỗi cấy c&oacute; từ 4-6 cặp l&aacute; xanh mỡ m&agrave;ng ? Thời gian ra hoa: Khoảng th&aacute;ng 12 - 15/1 &acirc;m lịch năm sau (hoa nở v&agrave;o dịp gi&aacute;p tết nguy&ecirc;n đ&aacute;n cổ truyển của d&acirc;n tộc hay đầu m&ugrave;a xu&acirc;n. n&ecirc;n ngo&agrave;i gọi l&agrave; Hoa lan Ngọc điểm, đai tr&acirc;u người ta c&ograve;n gọi l&agrave; nghinh xu&acirc;n) ?: Độ d&agrave;i của hoa 15-25cm mỗi c&acirc;y thường c&oacute; trung b&igrave;nh 2-3 ngồng hoa tr&ecirc;n một c&acirc;y với hương thơm quyến rũ như mật ngọt tự nhi&ecirc;n v&agrave; m&agrave;u sắc đa dạng n&ecirc;n lan đai tr&acirc;u rất được nhiều người y&ecirc;u hoa si&ecirc;u tầm ?: M&agrave;u sắc: l&agrave; giống nu&ocirc;i cấy m&ocirc; n&ecirc;n lan đai tr&acirc;u hay ngọc điểm rất đa dạng về m&agrave;u sắc với 10 m&agrave;u nhưng cơ bản th&igrave; c&oacute;: Trắng, Đỏ, Hồng c&aacute;nh sen, đỏ đốm, b&ograve; sữa, cam, x&aacute;c ph&aacute;o... ?: G&oacute;i h&agrave;ng gồm c&oacute; 1 c&acirc;y Hoa lan ngọc điểm đai tr&acirc;u như h&igrave;nh ảnh shop gửi qu&yacute; kh&aacute;c v&agrave; m&ocirc; tả * Kỹ thuật trồng chăm s&oacute;c Hoa lan ngọc điểm đai tr&acirc;u tại nh&agrave; cực đơn giản ai cũng c&oacute; thể l&agrave;m được ? Thiết kế khu vực trồng: về cơ bản Hoa lan ngọc điểm, đai tr&acirc;u, nghinh xu&acirc;n ... l&agrave; loại c&acirc;y rất ưa ẩm nhưng phải tho&aacute;ng nhiệt độ phải m&aacute;t (20-25 *C) đ&acirc;y l&agrave; khoảng nhiệt độ l&yacute; tưởng cho c&acirc;y lan sinh trưởng ph&aacute;t triển tốt nhất ? Gi&aacute; thể trồng: c&oacute; thể để nguy&ecirc;n dạng chậu như ch&uacute;ng t&ocirc;i cung cấp l&uacute;c đầu để trồng hoặc t&ugrave;y v&agrave;o sở th&iacute;ch nhu cầu t&agrave;i ch&iacute;nh m&agrave; lựa c&aacute;c vật thể chậu, lũa, gốc c&acirc;y (nh&atilde;n, hồng xi&ecirc;m, v&uacute; sữa....) kh&ocirc;ng d&ugrave;ng c&acirc;y c&oacute; tinh dầu v&agrave; rễ mục ? Quy tr&igrave;nh chắc s&oacute;c - Ph&acirc;n b&oacute;n: + NPK đầu tr&acirc;u ở 3 thời kỳ: nảy trồi ra l&aacute; 501 (30-15-10), k&iacute;ch th&iacute;c ra hoa 701 (10-30-20) + B1 dạng chuy&ecirc;n dụng cho c&acirc;y hoa cảnh (Thường xuy&ecirc;n d&ugrave;ng định kỳ để tăng cường chất dinh dưỡng cho c&acirc;y - nhất l&agrave; thời gian sau hoa v&agrave; mới ươm gh&eacute;p) tuần c&oacute; thể tưới 1-2 lần hoặc nhiều hơn t&ugrave;y v&agrave;o giai đoạn + Ph&acirc;n vi sinh v&agrave; tiện d&ugrave;ng:tr&ugrave;n quế t&uacute;i lưới, dung dịch tr&ugrave;n quế, ph&acirc;n chậm tan... để l&agrave;m thức ăn v&agrave; cung cấp dinh dưỡng dẫn tốt cho hoa lan (những loại n&ecirc;n d&ugrave;ng) - Nấm bệnh: t&ugrave;y v&agrave;o m&ocirc;i trường nu&ocirc;i dưỡng, v&agrave; thời tiết n&ecirc;n d&ugrave;ng c&aacute;c thuốc nấm sinh học, v&agrave; thuốc hoa học ridominl gold để khử nấm m&ocirc;i trường, c&aacute;c bảng tấm d&iacute;nh m&agrave;u v&agrave;ng... v&agrave; một số thuốc ph&ograve;ng trừ c&aacute;c bệnh kh&aacute;c th&ocirc;i th&acirc;n, nấm... - Nước tưới: V&igrave; l&agrave; c&acirc;y ưa ẩm n&ecirc;n ch&uacute;ng phải lu&ocirc;n giữ ẩm cho vườn trồng nếu kh&ocirc;ng c&oacute; điều kiện thiết kế như ti&ecirc;u chuẩn th&igrave; phải thường xuy&ecirc;n tưới nước cho lan ng&agrave;y 2-3 lần để đảm bảo độ ẩm. kh&ocirc;ng sử d&ugrave;ng nước bẩn nước c&oacute; ph&egrave;n... Về chuy&ecirc;n s&acirc;u kỹ thuật h&atilde;y li&ecirc;n hệ trực tiếp với Shop qua 0916392866 hoặc ibox tshop sẽ tư vấn v&agrave; gửi t&agrave;i liệu cụ thể cho qu&yacute; kh&aacute;ch. #ngọcđiểm #ngọcđiểmgiống #ngọcđiểmrừng #ngọcđiểmth&aacute;i #ngọcđiểmlai #ngọcđiểml&aacute;m&iacute;t #ngọcđiểmtrắng #ngọcđiểmchaim&ocirc; #đaitr&acirc;ugiống #đaitr&acirc;urừng #đaitr&acirc;ungọcđiểm #đaitr&acirc;urừngl&aacute;m&iacute;t #đaitr&acirc;urừngđẹp #đaitr&acirc;uth&aacute;i #đaitr&acirc;ul&aacute;m&iacute;t #đaitr&acirc;urừngl&agrave;o #landaitrau #lanngocdiem </span></p>', 1, '250000', '1aebd3f925.png'),
(46, 'Bà liễu xưa', 'L1', '200', '0', '250', 27, 18, '<p>Giống lan dendro nắng b&agrave; liễu l&agrave; giống c&acirc;y ưa &aacute;nh s&aacute;ng, c&oacute; thể trồng c&acirc;y dưới anh nắng trực tiếp,&nbsp;<a title=\"c&acirc;y ph&aacute;t\" href=\"https://muabancaytrong.com/cham-soc-cay-canh/cay-phat-tai/\">c&acirc;y ph&aacute;t</a>&nbsp;triển khỏe mạnh, ở nơi đ&acirc;u c&agrave;ng nhiều nắng th&igrave; c&acirc;y c&agrave;ng ph&aacute;t triển mạnh.</p>\r\n<p>Khi&nbsp;<a title=\"trồng hoa lan\" href=\"https://muabancaytrong.com/hoa-lan/trong-hoa-lan-ho-diep-bang-gi-5-loai-gia-the-trong-lan-ho-diep/\">trồng hoa lan</a>&nbsp;dendro b&agrave; liễu th&igrave; kh&aacute; đa dạng về c&aacute;c loại gi&aacute; thể khi trồng, c&oacute; thể trồng tr&ecirc;n vỏ th&ocirc;ng, r&ecirc;u, than củi, xơ dừa v&agrave; c&aacute;c loại gi&aacute; thể kh&aacute;c ph&ugrave; hợp trong qu&aacute; tr&igrave;nh c&acirc;y ph&aacute;t triển. Tất cả c&aacute;c loại gi&aacute; thể kể tr&ecirc;n đều phải được xử l&yacute; triệt để trước khi trồng v&agrave; chăm s&oacute;c c&acirc;y hoa lan.</p>\r\n<p>Chậu trồng&nbsp;<span>hoa lan dendro nắng b&agrave; liễu</span>&nbsp;c&oacute; thể lựa chọn chậu nhựa hoặc chậu đất, như em thường sử dụng l&agrave; chậu nhựa v&igrave; chậu nhựa l&agrave;m giảm sức nặng v&agrave; kh&aacute; bền bỉ theo thời gian. Độ phẩm ph&ugrave; hợp cho c&acirc;y&nbsp; ph&aacute;t triển từ 50-80%.</p>\r\n<p>C&acirc;y&nbsp;<span>hoa lan dendro nắng b&agrave; liễu</span>&nbsp;c&oacute; chiều cao từ 1m đến 1,5m kh chăm s&oacute;c, l&aacute; c&acirc;y sếp đều 2 b&ecirc;n rất đẹp, c&acirc;y ph&aacute;t triển chồi hoa khi ngay chưa thắt ngọn, đ&acirc;y cũng l&agrave; điểm nhấn ấn tượng của d&ograve;ng lan n&agrave;y cho thấy được vẻ đẹp của những c&acirc;y hoa lan dendro nắng xưa</p>\r\n<p>C&acirc;y v&agrave;o thời kỳ sinh trưởng cần b&oacute;n th&ecirc;m c&aacute;c loại ph&acirc;n tan chậm cũng như ph&acirc;n NPK để cho c&acirc;y sinh trưởng ph&aacute;t triển, c&aacute;c loại ph&acirc;n b&oacute;n ph&ugrave; hợp cho qu&aacute; tr&igrave;nh c&acirc;y ph&aacute;t triển chủ yếu l&agrave; NPK 6-30-30, NPK 20-20-20 v&agrave;&nbsp;<a title=\"c&aacute;c loại ph&acirc;n hữu cơ\" href=\"https://muabancaytrong.com/phan-bon/phan-huu-co/\">c&aacute;c loại ph&acirc;n hữu cơ</a>&nbsp;như ph&acirc;n tr&ugrave;n quế cho c&acirc;y sinh trưởng khỏe mạnh tạo n&ecirc;n điểm nhấn cho khu vườn, tạo n&ecirc;n vẻ đẹp ấn tượng của b&ocirc;ng hoa lan dendro</p>\r\n<p>C&acirc;y ph&aacute;t triển mạnh khi trồng nơi c&oacute; nhiều &aacute;nh nắng, trong qu&aacute; tr&igrave;nh c&acirc;y ph&aacute;t triển cần tập trung đầy đủ c&aacute;c chất dinh dưỡng gi&uacute;p c&acirc;y sinh trưởng tốt hơn, với bộ rễ khỏe mạnh, c&acirc;y c&oacute; lực ph&aacute;t triển kh&aacute; tuy&ecirc;t vời, cần chăm s&oacute;c cho c&acirc;y ph&aacute;t triển trong giai đoạn c&acirc;y cần nhiều c&aacute;c chất dinh dưỡng hơn.</p>\r\n<p>C&acirc;y đủ nắng, đủ gi&oacute; c&acirc;y sẽ sớm ra nhiều hoa, v&igrave; vậy trong qu&aacute; tr&igrave;nh lựa chọn vị tr&iacute; trồng c&acirc;y cần lựa chọn vị tr&iacute; ph&ugrave; hợp nhất</p>', 0, '90000', '811b47a36d.png'),
(47, 'Denro nắng', 'L1', '200', '0', '200', 27, 18, '<p>Lo&agrave;i lan Dendro Nắng c&oacute; t&ecirc;n tiếng anh l&agrave; Dendrebium, thuộc họ Orchidaceae v&agrave;&nbsp;<strong>được t&igrave;m thấy ở khu vực Đ&ocirc;ng Nam &Aacute; v&agrave; ch&acirc;u &Uacute;c</strong>. Lo&agrave;i c&acirc;y n&agrave;y thường ph&acirc;n bố chủ yếu ở những v&ugrave;ng c&oacute; kh&iacute; hậu nhiệt đới.</p>\r\n<p>V&agrave; lan Dendro Nắng được ph&acirc;n loại theo những d&ograve;ng như sau:</p>\r\n<p><strong>C&acirc;y Dendro King Hổ</strong>&nbsp;l&agrave; lo&agrave;i c&acirc;y c&oacute; gi&aacute; trị kinh tế cao với chiều cao khoảng 1m, hoa to v&agrave; phần đ&agrave;i trước mổ ra ph&iacute;a trước rất giống con rắn hổ mang.</p>\r\n<p><strong>C&acirc;y dendro trắng Bao Thanh Thi&ecirc;n</strong>&nbsp;cũng l&agrave; lo&agrave;i hoa được nhiều người săn đ&oacute;n với k&iacute;ch thước thước hoa to với m&agrave;u trắng tinh kh&ocirc;i c&ugrave;ng lưỡi hoa lớn, nhọn đầy ấn tượng. Đ&acirc;y cũng l&agrave; lo&agrave;i hoa c&oacute; gi&aacute; trị kinh tế cao.</p>\r\n<p><strong>King mỏ k&eacute;t</strong>&nbsp;được biết l&agrave; lo&agrave;i hoa hiếm với đầu lưỡi hoa cong xuống giống mỏ con k&eacute;t. C&acirc;y cao lớn, sinh trưởng v&agrave; ph&aacute;t triển rất tốt.</p>\r\n<p><strong>King Mười B&iacute;ch</strong>&nbsp;l&agrave; lo&agrave;i hoa c&oacute; sọc đầy độc đ&aacute;o với sắc đỏ rực, th&acirc;n v&agrave;ng &oacute;ng v&agrave; c&oacute; gi&aacute; trị kinh tế rất cao.</p>\r\n<p><strong>C&acirc;y m&agrave;u t&iacute;m đẹp Pompadour v&agrave; Madame Pompadour</strong>: Nổi bật vớii m&agrave;u t&iacute;m c&ugrave;ng lưỡi hoa với 2 m&aacute; kh&iacute;t lại, c&oacute; viền trắng đ&agrave;i hoa.</p>\r\n<p><strong>C&acirc;y Nioka, Hawaii Gem</strong>&nbsp;l&agrave; d&ograve;ng c&acirc;y kh&aacute; xưa, hoa c&oacute; cấu tr&uacute;c m&agrave;u n&acirc;u s&aacute;ng sang trọng với 3 m&agrave;u n&acirc;u, v&agrave;ng, t&iacute;m rất thơm.</p>\r\n<p>Ngo&agrave;i ra, lan Dendro Nắng c&ograve;n được ph&acirc;n loại theo những d&ograve;ng như: Nắng xưa, nắng thơm, b&agrave; liễu, pensoda...</p>', 0, '50000', '300ae8aa00.png'),
(48, 'Hồ điệp', 'L1', '150', '0', '200', 27, 18, '<div class=\"article-text\">\r\n<p><span>Lan Hồ Điệp</span>&nbsp;d&ugrave; kh&ocirc;ng qu&aacute; rực rỡ như hoa hồng, tỏa s&aacute;ng như hoa hướng dương m&agrave; Lan Hồ Điệp mang một vẻ đẹp qu&yacute; ph&aacute;i sang trọng, khiến cho bất cứ ai đi ngang qua đều phải ngắm nh&igrave;n bởi sự thu h&uacute;t m&agrave; hoa mang lại.</p>\r\n</div>\r\n<div class=\"article-text\">\r\n<p>Theo phong thủy phương Đ&ocirc;ng, Lan Hồ Điệp c&oacute; &yacute; nghĩa đại diện cho sự may mắn, t&agrave;i lộc, sang trọng v&agrave; sung t&uacute;c. C&ograve;n đối với c&aacute;c nước Ch&acirc;u &Acirc;u, Lan Hồ Điệp được xem l&agrave; biểu tượng của t&igrave;nh y&ecirc;u m&atilde;nh liệt. Ngo&agrave;i ra, Lan Hồ Điệp c&ograve;n đại diện cho sắc đẹp của người phụ nữ, hướng đến sự ho&agrave;n hảo v&agrave; quyến rũ.&nbsp;</p>\r\n</div>\r\n<div class=\"article-text\">\r\n<p>Kh&ocirc;ng những thế, h&atilde;y để một chậu Lan Hồ Điệp trong nh&agrave; v&igrave; lo&agrave;i hoa n&agrave;y c&ograve;n tượng trưng cho sự sinh sản. Ch&iacute;nh v&igrave; thế m&agrave; hoa Lan Hồ Điệp lu&ocirc;n được lựa chọn để l&agrave;m&nbsp;<a href=\"https://www.cleanipedia.com/vn/su-ben-vung/tet-nen-chung-hoa-gi-de-ruoc-tai-loc-vao-nha.html\">hoa chưng Tết</a>&nbsp;mỗi khi Xu&acirc;n về. Từng lo&agrave;i hoa Lan Hồ Điệp c&oacute; m&agrave;u sắc kh&aacute;c nhau đều mang đến những &yacute; nghĩa kh&aacute;c nhau. H&atilde;y c&ugrave;ng nhau t&igrave;m hiểu nh&eacute;:</p>\r\n</div>\r\n<div class=\"article-text\">\r\n<h3>&Yacute; nghĩa Lan Hồ Điệp trắng</h3>\r\n</div>\r\n<div class=\"article-text\">\r\n<p>M&agrave;u trắng tinh khiết cũng đ&atilde; n&oacute;i l&ecirc;n phần n&agrave;o về &yacute; nghĩa của Lan Hồ Điệp trắng. C&oacute; thể n&oacute;i, Lan Hồ Điệp trắng ch&iacute;nh l&agrave; biểu tượng cho sự xinh đẹp, trang trọng nhưng cũng mang đến sự gi&agrave;u sang, ph&uacute; qu&yacute; cho gia đ&igrave;nh.&nbsp;</p>\r\n</div>\r\n<div class=\"article-text\">\r\n<p>Hoa Lan Hồ Điệp trắng c&ograve;n đại diện cho một sự khởi đầu mới đầy su&ocirc;n sẻ v&agrave; l&agrave; m&oacute;n qu&agrave; tuyệt vời để thể hiện sự ch&acirc;n th&agrave;nh v&agrave; tr&agrave;n đầy t&igrave;nh y&ecirc;u thương đến với người th&acirc;n y&ecirc;u c&ugrave;ng nhau tiến về ph&iacute;a tương lai.</p>\r\n</div>', 0, '120000', '5b08a41c2a.png'),
(49, 'Lan mini yaya', 'L1', '150', '0', '160', 27, 18, '<p><br /><span> &nbsp; &nbsp;&nbsp;Mini Yaya&nbsp;thuộc d&ograve;ng lan&nbsp;dendro nắng. M&agrave;u hoa&nbsp;Mini Yaya&nbsp;rất đa dạng. Tuy nhi&ecirc;n, chỉ c&oacute; d&ograve;ng Yaya c&oacute; mặt hoa như h&igrave;nh l&agrave; dễ trồng, c&acirc;y ph&aacute;t triển mạnh &amp; si&ecirc;ng hoa nhất. C&acirc;y&nbsp;Mini Yaya&nbsp;trưởng th&agrave;nh c&oacute; v&ograve;i hoa rất d&agrave;i, d&aacute;ng c&acirc;y cũng rất khỏe &amp; si&ecirc;ng nhảy con.&nbsp; Thiết kế kh&ocirc;ng gian trồng hoa lan dendro + Hướng gi&agrave;n lan : vấn đề n&agrave;y rất quan trọng bởi l&agrave;m sao để vườn lu&ocirc;n lu&ocirc;n c&oacute; đủ &aacute;nh s&aacute;ng v&agrave; b&oacute;ng r&acirc;m. Ng&agrave;y nay, c&oacute; lưới nilon m&agrave;u đen c&oacute; t&aacute;c dụng tản nhiệt v&agrave; hạn chế &aacute;nh s&aacute;ng mặt trời được b&aacute;n rộng r&atilde;i tr&ecirc;n thị trường n&ecirc;n rất thuận tiện. + Khung sườn gi&agrave;n&nbsp;hoa lan&nbsp;: cần phải l&agrave;m cho thật chắc chắn. + Trụ đứng : phải được dựng bằng sắt hoặc b&ecirc; t&ocirc;ng để bảo đảm thời gian d&agrave;i, c&oacute; thể chằng ngang dọc để vững hơn. Trụ phải cao khoảng 3-3.5m. + Gi&agrave;n che nắng: sử dụng để che &aacute;nh s&aacute;ng mặt trời trực tiếp. Th&ocirc;ng thường l&agrave;m bằng lưới nilon, c&aacute;i n&agrave;y rất dễ sử dụng. + Gi&agrave;n treo lan: để treo phong lan, tốt nhất l&agrave;m bằng th&eacute;p kh&ocirc;ng rỉ hoặc g&aacute;c bằng c&acirc;y tầm v&ocirc;ng, c&acirc;y tre hay ống nước tr&ograve;n để m&oacute;c chậu lan v&agrave;o. Gi&agrave;n treo l&agrave;m cao khoảng 1,8m để đi v&agrave;o chăm s&oacute;c kh&ocirc;ng bị đụng đầu. Khi treo gi&ograve; lan phải treo chậu c&ugrave;ng chiều d&agrave;i, c&aacute;i m&oacute;c treo lan cũng phải c&oacute; độ d&agrave;i bằng nhau v&agrave; trồng c&ugrave;ng độ tuổi, c&ugrave;ng lo&agrave;i phong lan để dễ chăm s&oacute;c. Treo lan phải ngay h&agrave;ng thẳng lối th&igrave; tr&ocirc;ng mới đẹp. -- ĐỊA CHỈ MUA H&Agrave;NG: 33 đường số 1, phường Hiệp B&igrave;nh Phước, Thủ Đức, TP.HCM Hotline/Zalo: 0916000486 Shop c&oacute; hỗ trợ vận chuyển đến c&aacute;c ch&agrave;nh xe CH&Uacute;C QU&Yacute; KH&Aacute;CH C&Oacute; MỘT VƯỜN RAU SẠCH, AN TO&Agrave;N + Kệ để lan: cao cỡ 0,8 m c&oacute; lỗ vừa bằng chậu, kh&ocirc;ng tốn m&oacute;c treo v&agrave; tầm v&ocirc;ng giữa gi&agrave;n; c&ograve;n để được nhiều chậu. C&acirc;y giống dendrobium mới mua về phải đặt ở vị tr&iacute; th&oacute;ang m&aacute;t, v&agrave; tiến h&agrave;nh ph&ograve;ng trừ nấm bệnh cho c&acirc;y trước khi trồng. Gi&aacute; thể&nbsp;trồng l&agrave;n dendro&nbsp;th&ocirc;ng thường trồng bằng than gỗ, vỏ th&ocirc;ng, dớn, xơ dừa, gạch&hellip; Nhưng phải s&aacute;t tr&ugrave;ng trước khi trồng. Chậu thường d&ugrave;ng l&agrave; chậu nhựa hoặc chấu đất C&aacute;ch trồng: C&aacute;ch trồng Dendrobium phổ biến nhất hiện nay l&agrave; trồng trong chậu. Trồng c&acirc;y s&aacute;t m&eacute;p chậu v&agrave; hướng chồi ph&aacute;t triển nằm ph&iacute;a trong. Trồng chặt v&agrave; kh&ocirc;ng bị lung lay.&nbsp; Trồng tr&ecirc;n th&acirc;n c&acirc;y: c&oacute; thể trồng tr&ecirc;n th&acirc;n c&acirc;y sống hoặc th&acirc;n c&acirc;y đ&atilde; chết. Đối với c&acirc;y sống trong qu&aacute; tr&igrave;nh trồng phải ch&uacute; &yacute; t&aacute;n c&acirc;y sao cho &aacute;nh s&aacute;ng ph&ugrave; hợp với l&ograve;ai lan được trồng. Đối với c&acirc;y chết chọn c&aacute;c c&acirc;y gỗ rồi cưa th&agrave;nh kh&uacute;c sau đ&oacute; b&oacute; c&aacute;c đơn vị lan v&agrave;o th&acirc;n gỗ v&agrave; chăm s&oacute;c.</span></p>', 1, '50000', '9dcacdd232.png'),
(50, 'Tiểu hồ điệp', 'L1', '150', '4', '166', 27, 18, '<p><span>Tiểu Hồ Điệp -Hồ Điệp Rừng (Doritis pulcherima Lindl.) - Tiểu Hồ Điệp rất b&eacute; bỏng như t&ecirc;n gọi của n&oacute;: Mỗi hoa chỉ khoảng 1cm. Lo&agrave;i n&agrave;y rất phổ biến ở Việt Nam. Phương ph&aacute;p trồng v&agrave; chăm s&oacute;c: - Trồng nơi c&oacute; &aacute;nh nắng s&aacute;ng hoặc chiều. Nhiệt độ 10-30C (c&oacute; thể chịu được nhiệt độ cao hơn). Độ ẩm: 50-70%. - Khi mới nhổ ở rừng về c&acirc;y kh&aacute; yếu, sau khi xử l&yacute; v&agrave; trồng xong n&ecirc;n để c&acirc;y nơi tho&aacute;ng m&aacute;t phun dung dịch B1 k&iacute;ch rễ. Khi c&acirc;y ra rễ khỏe mạnh để nơi c&oacute; &aacute;nh nắng (60-70%) c&oacute; thể b&oacute;n ph&acirc;n b&ograve; kh&ocirc; hoặc ph&acirc;n hữu cơ kết hợp với b&oacute;n ph&acirc;n NPK theo gia đoạn v&agrave; lứa tuổi của c&acirc;y. - Hoa c&oacute; nhiều m&agrave;u: Trắng v&agrave;ng, phớt t&iacute;m, t&iacute;m nhung, hồng... Tiểu Hồ điệp l&agrave; loại lan tương đối dễ trồng, Gi&aacute; thể tốt nhất n&ecirc;n trồng than to ở dưới, lớp tr&ecirc;n than nhỏ hoặc dớn vụn.</span></p>', 1, '90000', '3ddbe1ba7f.png'),
(52, 'Bon sai tiểu cảnh', 'BS1', '20', '0', '20', 23, 19, '<p>Bon sai th&acirc;n g&ocirc;̃</p>', 1, '300000', '9924b94161.png'),
(53, 'Bon sai mini', 'BS1', '150', '0', '150', 23, 19, '<p>Bon sai mini</p>', 1, '90000', '61d64785e1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `sliderId` int(11) NOT NULL,
  `sliderName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slider_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`sliderId`, `sliderName`, `slider_image`, `type`) VALUES
(12, '1', '26d8d90c10.png', 1),
(13, '2', '9eb4dbd679.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_warehouse`
--

CREATE TABLE `tbl_warehouse` (
  `id_warehouse` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `sl_nhap` varchar(50) NOT NULL,
  `sl_ngaynhap` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_warehouse`
--

INSERT INTO `tbl_warehouse` (`id_warehouse`, `id_sanpham`, `sl_nhap`, `sl_ngaynhap`) VALUES
(5, 23, '50', '2021-12-01 17:00:00'),
(11, 24, '5', '2021-12-12 05:46:20'),
(12, 23, '5', '2021-12-12 06:51:18'),
(13, 23, '2', '2021-12-20 06:42:12'),
(14, 26, '2', '2021-12-25 13:09:47'),
(15, 37, '1', '2021-12-27 18:24:21'),
(16, 36, '1', '2021-12-27 18:25:49'),
(17, 38, '10', '2021-12-28 14:04:09'),
(18, 39, '10', '2021-12-28 14:05:05'),
(19, 41, '50', '2021-12-30 02:52:58'),
(20, 50, '10', '2021-12-30 18:19:31'),
(21, 49, '10', '2021-12-30 18:19:39'),
(22, 48, '50', '2021-12-30 18:19:48'),
(23, 46, '50', '2021-12-30 18:20:34'),
(25, 44, '10', '2021-12-30 18:22:54'),
(26, 50, '10', '2021-12-31 02:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `huydon`
--
ALTER TABLE `huydon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `tbl_compare`
--
ALTER TABLE `tbl_compare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`sliderId`);

--
-- Indexes for table `tbl_warehouse`
--
ALTER TABLE `tbl_warehouse`
  ADD PRIMARY KEY (`id_warehouse`);

--
-- Indexes for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `huydon`
--
ALTER TABLE `huydon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_compare`
--
ALTER TABLE `tbl_compare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `sliderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_warehouse`
--
ALTER TABLE `tbl_warehouse`
  MODIFY `id_warehouse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
