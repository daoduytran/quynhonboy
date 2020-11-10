-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2019 at 11:38 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `daoduytran`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY  (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL auto_increment,
  `fullname` varchar(11) NOT NULL,
  `createdate` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `tinhtrang` tinyint(2) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `fullname`, `createdate`, `tinhtrang`) VALUES
(1, '0', '2017-04-29 06:49:42', 0),
(2, '0', '2017-04-29 06:51:15', 0),
(3, '0', '2017-04-29 06:53:53', 0),
(4, 'Hiáº¿u', '2017-04-29 06:54:34', 0),
(6, 'Hiáº¿u', '2017-05-01 20:58:25', 0),
(7, 'Hiáº¿u', '2017-05-02 00:16:28', 0),
(8, 'Hiáº¿u', '2017-05-02 00:17:28', 0),
(9, 'Hiáº¿u', '2017-05-02 01:15:23', 0),
(10, 'admin', '2017-05-02 01:42:20', 0),
(11, 'admin', '2017-05-02 01:45:21', 0),
(12, 'admin', '2017-05-04 04:20:16', 0),
(13, 'admin', '2017-05-04 16:53:38', 0),
(14, 'ha@gmail.co', '2017-05-06 04:32:04', 0),
(15, 'admin', '2017-05-06 04:44:28', 0),
(16, 'ha@gmail.co', '2017-05-06 04:49:02', 0),
(17, 'admin', '2017-05-06 04:55:56', 0),
(18, 'ha@gmail.co', '2017-05-06 04:56:35', 2),
(19, 'admin', '2017-05-24 20:18:44', 2),
(20, 'phong@mail.', '2019-05-04 04:11:43', 0),
(21, 'admin', '2019-05-04 04:29:15', 0),
(22, 'tran@gmail.', '2019-05-04 04:30:44', 2),
(23, 'tran@gmail.', '2019-05-04 03:04:57', 0),
(24, 'tran@gmail.', '2019-05-04 03:09:21', 0),
(25, 'tran@gmail.', '2019-05-04 13:51:56', 0),
(26, 'tran@gmail.', '2019-05-04 22:45:19', 0),
(27, 'conga@gmail', '2019-05-04 22:47:20', 0),
(28, 'admin', '2019-05-04 23:19:53', 0),
(29, 'mng@iuh.edu', '2019-05-04 23:21:09', 2),
(30, 'mng@iuh.edu', '2019-11-09 10:36:39', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart_detail`
--

CREATE TABLE `cart_detail` (
  `id` int(11) NOT NULL auto_increment,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL default '1',
  `id_khachhang` int(11) NOT NULL,
  `tenkhachhang` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `diachinhan` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `cart_detail`
--

INSERT INTO `cart_detail` (`id`, `cart_id`, `product_id`, `id_khachhang`, `tenkhachhang`, `email`, `dienthoai`, `diachinhan`, `quantity`, `price`) VALUES
(1, 1, 1, 1, 'vu', 'huynhthanhvu99@gmail.com', 988888888, '162/14 Lê Đức Thọ, P14, Q.Gò Vấp, TP.HCM', 10, '800000'),
(2, 2, 2, 2, 'tran', 'daoduytran2020@gmail.com', 988888888, '346 Nguyễn Thái Sơn, P4, Q.Gò Vấp, TP.HCM', 10, '999999'),
(3, 2, 3, 3, 'admin', 'abc@gmail.com', 12498523, '123/4/8 Nguyễn Xí, P22, Q.Bình Thạnh, TP.HCM', 1, '2900000'),
(4, 3, 4, 4, 'Đào Duy Trân1', 'daoduytran2020@gmail.com', 988888888, '346 Nguyễn Thái Sơn, P4, Q.Gò Vấp, TP.HCM', 1, '1690000'),
(5, 4, 5, 5, 'Đào Duy Trân2', 'daoduytran2020@gmail.com', 988888888, '346 Nguyễn Thái Sơn, P4, Q.Gò Vấp, TP.HCM', 5, '1890000'),
(32, 23, 8, 0, '', '', 0, '', 5, '1.5e+007'),
(33, 24, 1, 0, '', '', 0, '', 1, '1e+006'),
(34, 25, 6, 0, '', '', 0, '', 2, '800000'),
(35, 25, 16, 0, '', '', 0, '', 1, '4e+006'),
(36, 25, 29, 0, '', '', 0, '', 2, '270000'),
(37, 25, 15, 0, '', '', 0, '', 1, '4e+006'),
(38, 26, 5, 0, '', '', 0, '', 2, '2.4e+006'),
(39, 26, 16, 0, '', '', 0, '', 1, '4e+006'),
(40, 27, 27, 0, '', '', 0, '', 2, '99000'),
(41, 28, 10, 0, '', '', 0, '', 1, '2.499e+006'),
(42, 29, 10, 0, '', '', 0, '', 3, '2.499e+006'),
(43, 30, 10, 0, '', '', 0, '', 3, '2.499e+006');

-- --------------------------------------------------------

--
-- Table structure for table `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `id` int(11) NOT NULL auto_increment,
  `idsanpham` int(11) NOT NULL,
  `chitietsp` longtext,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`id`, `idsanpham`, `chitietsp`) VALUES
(1, 1, 'Qúa là vip luôn !! trời ơi'),
(2, 2, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(3, 3, 'Thông số \nTrọng lượng \r\n900 g\r\nXuất xứ \r\nCampuchia\r\n				\r\n				'),
(4, 4, 'Thông số kỹ thuật\r\n* Thiết bị sử dụng: \r\n* Điện thoại di động\r\n* Chức năng: \r\n* Em chân		'),
(5, 5, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(6, 6, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(7, 6, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(8, 8, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(9, 9, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(10, 10, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(11, 11, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(12, 12, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(13, 13, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(14, 14, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(15, 15, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(16, 16, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(17, 17, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(18, 18, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(19, 19, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(20, 20, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(21, 21, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(22, 22, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(23, 23, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(24, 24, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(25, 25, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(26, 26, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(27, 27, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(28, 28, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(29, 29, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(30, 30, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(31, 31, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(32, 32, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(33, 33, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(34, 34, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(35, 35, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(36, 36, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				'),
(37, 37, 'Thông số \nTrọng lượng \r\n1000 g\r\nXuất xứ \r\nCampuchia\r\n				');

-- --------------------------------------------------------

--
-- Table structure for table `dangky`
--

CREATE TABLE `dangky` (
  `id_khachhang` int(11) NOT NULL auto_increment,
  `tenkhachhang` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `diachinhan` varchar(200) NOT NULL,
  PRIMARY KEY  (`id_khachhang`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `dangky`
--

INSERT INTO `dangky` (`id_khachhang`, `tenkhachhang`, `email`, `matkhau`, `dienthoai`, `diachinhan`) VALUES
(1, 'vu', 'huynhthanhvu99@gmail.com', '123456', 988888888, '162/14 Lê Đức Thọ, P14, Q.Gò Vấp, TP.HCM'),
(2, 'tran', 'daoduytran2020@gmail.com', '123456', 988888888, '346 Nguyễn Thái Sơn, P4, Q.Gò Vấp, TP.HCM'),
(3, 'admin', 'abc@gmail.com', '123456', 12498523, '123/4/8 Nguyễn Xí, P22, Q.Bình Thạnh, TP.HCM'),
(4, 'Đào Duy Trân1', 'daoduytran2020@gmail.com', '123456', 988888888, '346 Nguyễn Thái Sơn, P4, Q.Gò Vấp, TP.HCM'),
(5, 'Đào Duy Trân2', 'daoduytran2020@gmail.com', '123456', 988888888, '346 Nguyễn Thái Sơn, P4, Q.Gò Vấp, TP.HCM'),
(6, 'Đào Duy Trân3', 'daoduytran2020@gmail.com', '123456', 988888888, '346 Nguyễn Thái Sơn, P4, Q.Gò Vấp, TP.HCM'),
(7, 'Đào Duy Trân4', 'daoduytran2020@gmail.com', '123456', 988888888, '346 Nguyễn Thái Sơn, P4, Q.Gò Vấp, TP.HCM'),
(8, 'Đào Duy Trân5', 'daoduytran2020@gmail.com', '123456', 988888888, '346 Nguyễn Thái Sơn, P4, Q.Gò Vấp, TP.HCM'),
(9, 'Đào Duy Trân6', 'daoduytran2020@gmail.com', '123456', 988888888, '346 Nguyễn Thái Sơn, P4, Q.Gò Vấp, TP.HCM'),
(10, 'Đào Duy Trân1', 'daoduytran2020@gmail.com', '123456', 988888888, '346 Nguyễn Thái Sơn, P4, Q.Gò Vấp, TP.HCM'),
(11, 'Đào Duy Trân2', 'daoduytran2020@gmail.com', '123456', 988888888, '346 Nguyễn Thái Sơn, P4, Q.Gò Vấp, TP.HCM'),
(12, 'Đào Duy Trân3', 'daoduytran2020@gmail.com', '123456', 988888888, '346 Nguyễn Thái Sơn, P4, Q.Gò Vấp, TP.HCM'),
(13, 'Đào Duy Trân4', 'daoduytran2020@gmail.com', '123456', 988888888, '346 Nguyễn Thái Sơn, P4, Q.Gò Vấp, TP.HCM'),
(14, 'Đào Duy Trân5', 'daoduytran2020@gmail.com', '123456', 988888888, '346 Nguyễn Thái Sơn, P4, Q.Gò Vấp, TP.HCM'),
(15, 'Đào Duy Trân6', 'daoduytran2020@gmail.com', '123456', 988888888, '346 Nguyễn Thái Sơn, P4, Q.Gò Vấp, TP.HCM'),
(16, 'Đào Duy Trân', 'daoduytran2020@gmail.com', 'doimatkhau', 988888888, '346 Nguy?n Thái S?n, P4, Q.Gò V?p, TP.HCM'),
(17, 'Huỳnh Thanh Vũ1', 'huynhthanhvu99@gmail.com', '123456', 18006371, '162/14 Lê Đức Thọ, P14, Q.Gò Vấp, TP.HCM'),
(18, 'Huỳnh Thanh Vũ2', 'huynhthanhvu99@gmail.com', '123456', 18006371, '162/14 Lê Đức Thọ, P14, Q.Gò Vấp, TP.HCM'),
(19, 'Huỳnh Thanh Vũ3', 'huynhthanhvu99@gmail.com', '123456', 18006371, '162/14 Lê Đức Thọ, P14, Q.Gò Vấp, TP.HCM'),
(20, 'Huỳnh Thanh Vũ4', 'huynhthanhvu99@gmail.com', '123456', 18006371, '162/14 Lê Đức Thọ, P14, Q.Gò Vấp, TP.HCM'),
(21, 'Huỳnh Thanh Vũ1', 'huynhthanhvu99@gmail.com', '123456', 18006371, '162/14 Lê Đức Thọ, P14, Q.Gò Vấp, TP.HCM'),
(22, 'Huỳnh Thanh Vũ2', 'huynhthanhvu99@gmail.com', '123456', 18006371, '162/14 Lê Đức Thọ, P14, Q.Gò Vấp, TP.HCM'),
(23, 'Huỳnh Thanh Vũ3', 'huynhthanhvu99@gmail.com', '123456', 18006371, '162/14 Lê Đức Thọ, P14, Q.Gò Vấp, TP.HCM'),
(24, 'Huỳnh Thanh Vũ4', 'huynhthanhvu99@gmail.com', '123456', 18006371, '162/14 Lê Đức Thọ, P14, Q.Gò Vấp, TP.HCM'),
(25, 'Huỳnh Thanh Vũ', 'huynhthanhvu99@gmail.com', 'doimatkhau', 18006371, '162/14 Lê Đức Thọ, P14, Q.Gò Vấp, TP.HCM'),
(26, 'admin', 'abc@gmail.com', 'doimatkhau', 123456789, '123/4/8 Nguyễn Xí, P22, Q.Bình Thạnh, TP.HCM');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL auto_increment,
  `id_sp` int(11) NOT NULL,
  `hinhanhsp` varchar(255) NOT NULL,
  PRIMARY KEY  (`id_gallery`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `id_sp`, `hinhanhsp`) VALUES
(1, 1, 'giay-nike-air-jordan-1456733574-1-4029993-1508031088.jpg'),
(2, 1, 'yeezy_350_v2_supreme_chat.jpg'),
(3, 1, 'Untitled-1-Recovered-Recovered_1.png'),
(4, 1, 'HHII2O5.jpg'),
(5, 2, 'giay-tang-chieu-cao-da-bo-cao-cap-tc02-1500957318_avar-1.jpg'),
(6, 2, 'giay-tay-nam-buoc-day-cao-cap-gnta6033-d-e1464169577952.jpg'),
(7, 2, 'giay-dr-martens-nam-co-thap-1461-made-in-thailand-5-6668.jpg'),
(8, 2, 'giay-da-cao-co-cong-so-buoc-day-gb004-0.jpg'),
(9, 3, 'Giay-Balenciaga-Tripple-S-2.jpg'),
(10, 3, 'giay-balenciaga-triples-giong-son-tung1.jpg'),
(11, 3, 'giay-balenciaga-triple-s-cao-cap-1513325760-1-4563259-1513325760.jpg'),
(12, 3, 'b387d0017755616e9b8b1bc39df8b6a6.jpg'),
(13, 3, '1810_636652616708083445_HasThumb.jpg'),
(14, 4, '1756c3f7941401d.jpg'),
(15, 4, 'air-force-one-superfakesize-36-43si-chon-size-380ksi-nguyen-ri-340k-lay-10.jpg'),
(16, 4, 'b09c8096dd8c233067b47f1c4f000af9.jpg'),
(17, 4, 'big-3-.jpg'),
(18, 4, 'BONA-Yeni-En-Pop-ler-Stil-Erkekler-ko-u-ayakkab-lar-A-k-Y-r-y.jpg'),
(19, 5, '71kYYu4lngL._SX480_.jpg'),
(20, 5, '71tgAFRhziL._UY395_.jpg'),
(21, 5, '2016-orijinal-converse-chuck-taylor-ayakkab.jpg'),
(22, 5, '236259_100_ss_01.jpg'),
(23, 1, 'nike-air-max-270-trang-xanh-nam-nu.jpg'),
(24, 1, 'giay-nike-air-max-97-ultra-17.jpg'),
(25, 6, '1252b9a0-9b80-11e7-8cbc-dd5ebe1cac4d.jpg'),
(26, 6, '13e6677c1eb06acc74c0827d5e195389.jpg'),
(27, 6, '0636464452039587691.jpg'),
(28, 6, 'uniqlo_3_grande.jpg'),
(29, 6, 'tatquanda1.jpg'),
(30, 7, 'NK476_avatar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hieusp`
--

CREATE TABLE `hieusp` (
  `idhieusp` int(11) NOT NULL auto_increment,
  `tenhieusp` varchar(255) NOT NULL,
  `tinhtrang` varchar(100) NOT NULL,
  PRIMARY KEY  (`idhieusp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hieusp`
--

INSERT INTO `hieusp` (`idhieusp`, `tenhieusp`, `tinhtrang`) VALUES
(1, 'Giày', '1'),
(2, 'Vớ', '1'),
(3, 'Nón', '1');

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE `loaisp` (
  `idloaisp` int(11) NOT NULL auto_increment,
  `tenloaisp` varchar(255) NOT NULL,
  `tinhtrang` varchar(100) NOT NULL,
  PRIMARY KEY  (`idloaisp`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`idloaisp`, `tenloaisp`, `tinhtrang`) VALUES
(1, 'Giày Tây', '1'),
(2, 'Giày Converse', '1'),
(3, 'Giày Nike', '1'),
(4, 'Giày Balenciaga', '1'),
(5, 'Giày Adidas', '1'),
(6, 'Giày Puma', '1'),
(7, 'Giày Gucci', '1'),
(8, 'Vớ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `idsanpham` int(11) NOT NULL auto_increment,
  `tensp` varchar(255) NOT NULL,
  `masp` varchar(255) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `giadexuat` float NOT NULL,
  `giagiam` float NOT NULL,
  `soluong` int(11) NOT NULL,
  `loaisp` int(11) NOT NULL,
  `nhasx` int(11) NOT NULL,
  `tinhtrang` varchar(100) NOT NULL,
  `noidung` longtext NOT NULL,
  PRIMARY KEY  (`idsanpham`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idsanpham`, `tensp`, `masp`, `hinhanh`, `giadexuat`, `giagiam`, `soluong`, `loaisp`, `nhasx`, `tinhtrang`, `noidung`) VALUES
(1, 'Adidas Yezzy 300', 'A1', 'yeezy-boost-350-v2-white-cback-red-cp9654-1-1300x1300.jpg', 1e+006, 999999, 10, 5, 3, '1', '<p>Adidas HOT 2019</p>'),
(2, 'Adidas Geteleman Trip', 'A2', 'b09c8096dd8c233067b47f1c4f000af9.jpg', 3.2e+006, 2.9e+006, 1, 5, 3, '1', '<p>Adidas HOT 2019</p>'),
(3, 'Adidas Ultra Boots 2.0', 'A3', 'giay_adidas_nmd_mau_do_man_002.jpg', 1.8e+006, 1.69e+006, 1, 5, 1, '1', '<p>Adidas HOT 2019</p>'),
(4, 'Dr.Merten 7', 'Dr1', 'giay-dr-martens-nam-co-thap-1461-made-in-thailand-0-1024x684.jpg', 2.3e+006, 1.89e+006, 5, 1, 4, '1', '<p>Back to Summer Shop</p>'),
(5, 'Dr.Merten 100', 'Dr2', 'large_327118_5c1c6f5b4ebc1.jpg', 2.4e+006, 1.6e+006, 6, 1, 3, '1', '<p>Back to Summer Shop</p>'),
(6, 'Giày Công Sở', 'Dr3', '1761845_L.jpg', 800000, 600000, 4, 1, 1, '1', '<p>Back to Summer Shop</p>'),
(7, 'Dr.Merten Up', 'Dr4', 'di-giay-dr-martens-nen-phoi-do-nhu-the-nao-la-tot-nhat-1-1732.jpg', 900000, 490000, 4, 1, 1, '1', '<p>Back to Summer Shop</p>'),
(8, 'Balenciaga TripleS', 'B1', 'giay-balenciaga-triple-s-cao-cap-1513325760-1-4563259-1513325760.jpg', 1.5e+007, 9.6e+006, 4, 4, 1, '1', '<p>Balenciaga REPLICA</p>'),
(9, 'Balenciaga TripleSS', 'B2', 'giay-balenciaga-triples-giong-son-tung1.jpg', 1.1e+007, 9.999e+006, 3, 4, 4, '1', '<p>Balenciaga REPLICA</p>'),
(10, 'Balenciaga TripleA', 'B3', '1810_636652616708083445_HasThumb.jpg', 2.499e+006, 2e+006, 6, 4, 1, '1', '<p>Balenciaga REPLICA</p>'),
(11, 'Balenciaga OneS', 'B4', 'giay-giay-balenciaga-speed-sneakers-1494857624-1-2472347-1494857624.jpg', 849000, 699000, 2, 4, 4, '1', '<p>Balenciaga REPLICA</p>'),
(12, 'Balenciaga TripleX', 'B5', 'giay-sneaker-balenciaga-super-fake-and-sieu-cap-1513812496-1-4768417-1516175137.jpg', 779000, 699000, 2, 4, 8, '1', '<p>Balenciaga REPLICA</p>'),
(13, 'Nike Air Max 1 OG Red', 'N1', 'giay-nike-air-max-97-ultra-17.jpg', 890000, 800000, 10, 3, 4, '1', '<p>Back to Summer Shop Nike</p>'),
(14, 'Nike Black C1', 'N2', 'nike-giay-the-thao-nam-908991-015-wmns-air-max-advantage-xam-1516705214-73243033-1cc2b050d656c813863', 779000, 699000, 2, 3, 7, '1', '<p>Back to Summer Shop</p>'),
(15, 'Nike Specical 69', 'N3', 'top-10-shop-giay-nike-chinh-hang-tai-tphcm-696x558.jpg', 4e+006, 3e+006, 6, 3, 1, '1', '<p>Back to Summer Shop</p>'),
(16, 'Nike Ngoc Yen 79', 'N4', 'air-force-one-superfakesize-36-43si-chon-size-380ksi-nguyen-ri-340k-lay-10.jpg', 4e+006, 3e+006, 6, 3, 1, '1', '<p>Back to Summer Shop</p>'),
(17, 'Nike Orange 2.0', 'N6', 'Giay-The-Thao-Nike-Gia-Re-02.jpg', 600000, 490000, 6, 3, 1, '1', '<p>Back to Summer Shop</p>'),
(18, 'Nike White OFF 6.0', 'N6', 'hang-chinh-hang-nike-epic-react-flyknit-wolf-grey-2018.jpg', 1.59e+007, 1.49e+007, 0, 3, 5, '1', '<p>Back to Summer Shop</p>'),
(19, 'Air Jordan 1 Retro High OG “Rookie Of The Year"', 'N7', 'giÃ y-nike-airmax-270-full-trang-5.jpg', 1.99e+007, 1.89e+007, 3, 3, 8, '1', '<p>Back to Summer Shop</p>'),
(20, 'Nike Khá Bảnh', 'N8', 'Giay-Nike-Air-More-Uptempp-Supreme-Red-1.jpg', 1.59e+007, 8.9e+006, 3, 3, 8, '1', '<p>Back to Summer Shop</p>'),
(21, 'Converse Happy Womenday2', 'C1', 'converse-chuck-taylor-all-star-mara-hoffman-radial-high-copy1.jpg', 1.79e+006, 1.49e+006, 2, 2, 7, '1', '<p>Back to Summer Shop</p>'),
(22, 'Converse Universary 100 YEAR', 'C2', 'converse-full-glitter-champagne.jpg', 1.89e+006, 1.49e+006, 2, 2, 7, '1', '<p>Back to Summer Shop</p>'),
(23, 'Converse Specical', 'C3', 'Nhá»¯ng-lÃ­-do-â€œgiÃ y-converseâ€-luÃ´n-lÃ -má»™t-lá»±a-chá»n-cá»‘-Ä‘á»‹nh-cho-nhá»¯ng-cÃ´-nÃ ng-', 2.15e+006, 1.49e+006, 2, 2, 9, '1', '<p>Back to Summer Shop</p>'),
(24, 'Converse Cổ Cao – Trắng', 'C4', '236259_100_ss_01.jpg', 1.99e+006, 1.8009e+006, 3, 2, 9, '1', '<p>Back to Summer Shop</p>'),
(25, 'Vớ xinh sociu', 'V1', '0636464452039587691.jpg', 120000, 90000, 3, 8, 10, '1', '<p>Xinh Unisexp</p>'),
(26, 'Vớ OFF-WHITE', 'V2', '13e6677c1eb06acc74c0827d5e195389.jpg', 1.99e+006, 99000, 0, 8, 1, '1', '<p>Xinh Unisexp</p>'),
(27, 'Vớ trái tim', 'V3', '1252b9a0-9b80-11e7-8cbc-dd5ebe1cac4d.jpg', 99000, 49000, 1, 8, 1, '1', '<p>Xinh Unisexp</p>'),
(28, 'Vớ uniqlo', 'V4', 'uniqlo_3_grande.jpg', 120000, 99000, 6, 8, 8, '1', '<p>Xinh Unisexp</p>'),
(29, 'Vớ da dài', 'V5', 'tatquanda1.jpg', 270000, 220000, 6, 8, 1, '1', '<p>Xinh Unisexp</p>'),
(30, 'Nón kết', 'M1', 'NK476_avatar.jpg', 300000, 199000, 10, 8, 14, '1', '<p>Xinh Unisexp</p>'),
(31, 'Nón Dex', 'M2', 'non-dex.jpg', 300000, 199000, 10, 8, 14, '1', '<p>Xinh Unisexp</p>'),
(32, 'Puma Nicolas IV', 'P1', 'puma1.jpg', 1.8e+006, 1.5e+006, 2, 6, 7, '1', '<p>Back to Summer Shop</p>'),
(33, 'Puma Puma Boom', 'P1', 'puma2.jpg', 890000, 600000, 2, 6, 7, '1', '<p>Back to Summer Shop</p>'),
(34, 'X-Puma', 'P3', 'puma3.jpg', 1.2e+007, 9e+006, 2, 6, 7, '1', '<p>Back to Summer Shop</p>'),
(35, 'Gucci Hansome', 'G1', 'gucci1.jpg', 9.99e+006, 8.9e+006, 2, 7, 7, '1', '<p>Back to Summer Shop</p>'),
(36, 'Gucci Fantasy', 'G1', 'gucci2.jpg', 600000, 490000, 2, 7, 7, '1', '<p>Deal Sập Sàn, Đón Hè Về</p>'),
(37, 'Gucci Dermacia', 'G3', 'gucci3.jpg', 3.49e+006, 2.9e+006, 2, 7, 7, '1', '<p>Deal Sập Sàn, Đón Hè Về</p>'),
(38, 'Adidas Valentino', 'A4', '2014679superstar_02aceacf94d143eaaa154681053644fd.jpg', 5.6e+006, 5.5e+006, 2, 5, 1, '1', 'Adidas Valentino là sản phẩm kết thành tự tình yêu của cặp đôi'),
(39, 'Adidas Custom', 'A4', 'yeezy_350_v2_supreme_chat.jpg', 5.6e+006, 5.5e+006, 2, 5, 1, '1', 'Adidas Valentino là sản phẩm kết thành tự tình yêu của cặp đôi'),
(40, 'Dr.7', 'Dr.5', '1054761_dr-martens-721.jpg', 800000, 790000, 10, 1, 1, '1', 'Mẫu Dr tăng chiều cao và vẻ lịch lãm'),
(41, 'Dr.9', 'Dr.6', 'fc76284bb241bf457d0cc329e3076e5e-475x606.jpg', 900000, 0, 7, 1, 1, '1', 'Mẫu Dr tăng chiều cao và vẻ lịch lãm'),
(42, 'Dr.988', 'Dr.7', 'giay-tang-chieu-cao-da-bo-cao-cap-tc02-1500957318_avar-1.jpg', 600000, 590000, 6, 1, 1, '1', 'Giày công sở cho lứa tuổi 30+'),
(43, 'Balenciaga TripleX', 'B3', 'giay-sneaker-balenciaga-super-fake-and-sieu-cap-1513812496-1-4768417-1516175137.jpg', 9e+006, 8.9e+006, 10, 4, 1, '1', 'Vẻ Streetstyle dành cho giới trẻ '),
(44, 'Balenciaga OneS', 'B6', 'giay-giay-balenciaga-speed-sneakers-1494857624-1-2472347-1494857624.jpg', 9e+006, 0, 3, 4, 1, '1', 'Vẻ Streetstyle dành cho giới trẻ '),
(45, 'Balenciaga TripleSS', 'B7', 'giay-balenciaga-triples-giong-son-tung1.jpg', 1.1e+007, 0, 20, 4, 1, '1', 'Balenciaga TripleSS quá tuyệt cho cặp đôi'),
(46, 'Converse Cổ Cao – Trắng', 'C1', '236259_100_ss_01.jpg', 1.9e+006, 0, 20, 2, 1, '1', 'Converse thời trang là đẳng cấp'),
(47, 'Converse Chuck-Taylor II', 'C3', '2018-converse-chuck-tay-lor-all-star-designer.jpg', 600000, 0, 50, 2, 1, '1', 'Converse thời trang là đẳng cấp'),
(48, 'Converse Universary 100 YEAR', 'C4', 'converse-chuck-taylor-all-star-mara-hoffman-radial-high-copy1.jpg', 2e+006, 0, 4, 2, 1, '1', 'Converse Universary 100 YEAR là sự kết tình từ tinh hoa lễ hội '),
(49, 'Converse Happy Womenday2', 'C5', 'converse-full-glitter-champagne.jpg', 4e+006, 3.5e+006, 30, 2, 1, '1', 'Converse Universary 100 YEAR'),
(50, 'Converse Specical', 'C6', 'img01.jpg', 900000, 890000, 10, 2, 1, '1', 'Converse Happy Womenday2'),
(51, 'Converse Cổ Cao – Trắng', 'C7', '2016-orijinal-converse-chuck-taylor-ayakkab.jpg', 1.5e+006, 1.498e+006, 3, 2, 1, '1', 'Converse Cổ Cao – Trắng'),
(52, 'Balenciaga TripleX', 'B9', 'yp2prsje0ax9is1niryw.png', 790000, 0, 3, 4, 1, '1', 'Balenciaga TripleX'),
(53, 'X-Puma', 'X1', 'puma3.jpg', 1.2e+007, 0, 30, 6, 1, '1', 'X-Puma'),
(54, 'Puma Puma Boom', 'P2', 'puma2.jpg', 890000, 0, 20, 6, 1, '1', 'Puma Puma Boom'),
(55, 'Gucci Fantasy', 'G1', 'gucci2.jpg', 5e+006, 4.9e+006, 20, 7, 1, '1', 'Gucci Fantasy'),
(56, 'Gucci Hansome', 'G3', 'gucci1.jpg', 9.98e+006, 0, 5, 7, 1, '1', 'Gucci Hansome'),
(57, 'Gucci Dermacia', 'G1', 'gucci3.jpg', 5.6e+006, 0, 20, 7, 1, '1', 'Gucci Dermacia'),
(58, 'Vớ Unilo', 'V3', 'uniqlo_3_grande.jpg', 40000, 0, 1000, 8, 2, '1', 'Vớ style'),
(59, 'Nón kết', 'N3', 'NK476_avatar.jpg', 300000, 280000, 300, 8, 3, '1', 'Nón cho giới StyleSc'),
(60, 'Nón Dex', 'N1', 'non-dex.jpg', 600000, 480000, 50, 8, 3, '1', 'Nón tai bèo cho bánh bèo');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `idtintuc` int(11) NOT NULL auto_increment,
  `tentintuc` tinytext NOT NULL,
  `matin` varchar(100) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `noidung` longtext NOT NULL,
  `tinhtrang` varchar(100) NOT NULL,
  `ngaydang` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`idtintuc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`idtintuc`, `tentintuc`, `matin`, `hinhanh`, `noidung`, `tinhtrang`, `ngaydang`) VALUES
(1, 'Giày Converse là thương hiệu giày có bề dày truyền thống', 'T1', 'converse-one-star-ox-_ash-greywhite-158368c-2-os.jpg', 'Converse là hãng sản xuất giày thể thao đã có lịch sử rất lâu đời và cũng rất phổ biến bởi phong cách thể thao đường phố. Dần dần nó trở thành một biểu tượng thời trang của thế hệ trẻ.', '1', '2019-05-04 04:30:03'),
(2, '6 Nhận biết giày Adidas chính hãng cực kì hữu ích', 'T2', 'igbmn1528712945.jpg', '1. Đế giày, 2. Phần gót giày, 3. Đường chỉ khâu, 5. Bao bì sản phẩm?, 6. Xem trực tuyến trên website sneaker', '1', '2019-05-04 04:39:18'),
(3, 'Bạn nên biết trước khi mua giày Dr Martens', 'T3', 'vi-sao-nen-mua-giay-boot-dr-martens-nam-co-thap-2.jpg', 'Ban can lam quen voi doi giay.', '1', '2019-05-04 04:42:26'),
(7, 'Hướng dẫn tìm hiểu chủ đề An ninh mạng', 'T7', '21077241_721793448020443_925256259235649397_n.jpg', 'Alo Alo', '1', '2019-05-04 04:42:26');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc2`
--

CREATE TABLE `tintuc2` (
  `idtintuc` int(11) NOT NULL auto_increment,
  `tentintuc` tinytext NOT NULL,
  `matin` varchar(100) NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `noidung` longtext NOT NULL,
  `tinhtrang` varchar(100) NOT NULL,
  PRIMARY KEY  (`idtintuc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tintuc2`
--

INSERT INTO `tintuc2` (`idtintuc`, `tentintuc`, `matin`, `hinhanh`, `noidung`, `tinhtrang`) VALUES
(1, 'HÆ°á»›ng dáº«n tÃ¬m hiá»ƒu chá»§ Ä‘á» An ninh máº¡ng', 'h11', 'p1_1.PNG', 'NgÃ y 9/4, HÄND HÃ  Ná»™i khÃ³a XV sáº½ tá»• chá»©c há»p báº¥t thÆ°á»ng (ká»³ há»p thá»© 8) Ä‘á»ƒ xem xÃ©t cÃ¡c tá» trÃ¬nh, dá»± tháº£o Nghá»‹ quyáº¿t chuyÃªn Ä‘á», trong Ä‘Ã³ cÃ³ viá»‡c phÃª duyá»‡t chá»§ trÆ°Æ¡ng Ä‘áº§u tÆ° má»™t sá»‘ dá»± Ã¡n thuá»™c Káº¿ hoáº¡ch Ä‘áº§u tÆ° cÃ´ng trung háº¡n 5 nÄƒm 2016-2020 cá»§a thÃ nh phá»‘.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(10) unsigned NOT NULL auto_increment,
  `user_login` varchar(60) NOT NULL,
  `user_pass` varchar(64) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_registered` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `user_status` int(11) NOT NULL,
  `user_name` varchar(100) default NULL,
  `user_address` varchar(250) NOT NULL,
  `user_dienthoai` int(11) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `user_login`, `user_pass`, `user_email`, `user_registered`, `user_status`, `user_name`, `user_address`, `user_dienthoai`) VALUES
(1, 'a@gmail.com', '202cb962ac59075b964b07152d234b70', 'a@gmai.com', '2019-05-01 18:37:50', 0, 'hmt', '123 Nguyen Du Quan 1', 12345678),
(4, 'admin', '202cb962ac59075b964b07152d234b70', 'admin@mail.com', '2019-05-02 03:32:21', 1, 'admin', 'Phu Nhuan', 123456),
(6, 'tran@gmail.com', '202cb962ac59075b964b07152d234b70', 'tran@gmail.com', '2019-05-04 04:22:37', 0, 'tran', '346 Nguyễn Thái Sơn', 968731442),
(7, 'conga@gmail.com', '202cb962ac59075b964b07152d234b70', 'conga@gmail.com', '2019-05-04 03:09:04', 2, 'conga', '123 nguyễn thái sơn, phường 4, quận gò vấp, tp.hcm', 123),
(8, 'mng@iuh.edu.vn', '202cb962ac59075b964b07152d234b70', 'mng@iuh.edu.vn', '2019-05-04 23:10:41', 0, 'mã nguồn mở', '12 nguyễn văn bảo, phường 4, quận gò vấp, thành phố hồ chí minh', 2147483647);
