-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2017 at 01:06 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vmr`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `about_name` varchar(100) DEFAULT NULL,
  `about_images` varchar(100) DEFAULT NULL,
  `about_desc` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about_name`, `about_images`, `about_desc`) VALUES
(4, 'Add Some Short Description', 'special-img.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquet, lectus facilisis consectetur suscipit, quam felis iaculis nisl, tincidunt scelerisque ante ipsum vitae nibh. Praesent justo sem, posuere et lorem in, euismod semper purus. Nulla id leo eu ante accumsan aliquam.');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` int(11) NOT NULL,
  `artikel_name` varchar(100) DEFAULT NULL,
  `artikel_images` text,
  `artikel_desc` text,
  `artikel_date` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`artikel_id`, `artikel_name`, `artikel_images`, `artikel_desc`, `artikel_date`, `user_id`) VALUES
(1, 'ssssssssssssssss', 'IMG-20170726-WA0013.jpg', '<p>wwwwwwwwwww</p>\r\n', '2017-11-19 11:29:20', NULL),
(2, 'Teknik Pemasangan Noken as Satria FU IN-IN', 'info-img3.jpg', '<p open=\"\" style=\"box-sizing: border-box; margin: 0px 0px 20px; color: rgb(85, 85, 85); font-family: \" text-align:=\"\">Pemasangan Noken as satria FU in In : cara : Pastikan posisi piston berada pas di TMA , Posisikan Noken As standar IN seperti biasa yang mana garis noken sejajar head dan nose atau puncak noken menghadap karburator,Copot Noken as EX dan ganti dengan IN yang baru ( seterusnya Noken IN yang terpasang di EX akan disebut IN2 ), Pasang IN2 di Ex , jika sudah terpasang keduanya kencangkan rantai teming atau bisa ditekan dengan tangan ,Perhatikan sekali lagi top piston di TMA biasanya jika rantai teming ditegangkan posisi noken as juga ikut mundur, perhatikan sekali lagi IN apakah posisi garis nokennya sudah sejajar Head dan nose atau puncak noken menghadap karburator disaat rantai teming dalam keadaan kencang. cek IN2, hitung dari panah petunjuk nomor 3 pada IN ke panah nomor 3 pada IN2 ( ex ) sebanyak 19 mata rantai. dan dari petunjuk no 3 pada IN sampai ke petunjuk no 1 pada IN2 sebanyak 17,5 mata rantai. Ukur celah klep minimal IN : 0.10 mm dan EX 0.15 mm dengan menggunakan fuller. Cek kembali mesin sebelum dihidupkan, dengan memutar mesin satu putaran penuh,pastikan tidak ada area yang menyangkut atau mentok di bagian tertentu. Finish dan selamat mencoba.</p>\r\n\r\n<h4 color:=\"\" font-size:=\"\" font-weight:=\"\" line-height:=\"\" margin-bottom:=\"\" margin-top:=\"\" open=\"\" style=\"box-sizing: border-box; font-family: \"><i style=\"box-sizing: border-box;\">Powered by :</i>&nbsp;VMR-Mekanik Berdasi</h4>\r\n', '2017-11-19 11:29:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_name` varchar(100) DEFAULT NULL,
  `blog_images` text,
  `blog_desc` text,
  `blog_date` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_name`, `blog_images`, `blog_desc`, `blog_date`, `user_id`) VALUES
(1, 'aaaaaaaaaaaaaaaaaaaaaaaa', '757294_0f7cab4b-5c1b-42bb-9fce-64cc67b300d1.jpg', 'sssssssssssssssssssssssssssss', '2017-11-08 07:22:39', NULL),
(2, 'ssssssssssssssss', '4465367486insave12749868_525843680930953_601052091_n_scaled.jpg', 'ssssssssssssssssssssssssssss', '2017-11-08 07:23:24', NULL),
(3, 'Kontes model di Yogyakarta', '3115203518GFS_STEVI_TOP.jpg', 'Kontes model ini di selanggarakan oleh manusia script Kontes model ini di selanggarakan oleh manusia script Kontes model ini di selanggarakan oleh manusia script Kontes model ini di selanggarakan oleh manusia script Kontes model ini di selanggarakan oleh manusia script Kontes model ini di selanggarakan oleh manusia script Kontes model ini di selanggarakan oleh manusia script Kontes model ini di selanggarakan oleh manusia scriptKontes model ini di selanggarakan oleh manusia script Kontes model ini di selanggarakan oleh manusia script Kontes model ini di selanggarakan oleh manusia script Kontes model ini di selanggarakan oleh manusia script Kontes model ini di selanggarakan oleh manusia script Kontes model ini di selanggarakan oleh manusia script Kontes model ini di selanggarakan oleh manusia script Kontes model ini di selanggarakan oleh manusia script Kontes model ini di selanggarakan oleh manusia script Kontes model ini di selanggarakan oleh manusia script Kontes model ini di selanggarakan oleh manusia script Kontes model ini di selanggarakan oleh manusia script ', '2017-11-09 06:00:43', NULL),
(4, 'sssssss', NULL, NULL, '2017-11-18 19:00:15', NULL),
(5, 'aaaaaaaaa', NULL, NULL, '2017-11-18 19:01:15', NULL),
(6, 'dddddddddddddddd', NULL, NULL, '2017-11-18 19:13:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) UNSIGNED NOT NULL,
  `cart_session` varchar(32) DEFAULT NULL,
  `cart_date` date DEFAULT NULL,
  `cart_qty` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(250) DEFAULT NULL,
  `category_status` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_status`) VALUES
(23, 'Food', 'Y'),
(25, 'Beverages', 'Y'),
(30, 'alcoholic beverages', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(100) DEFAULT NULL,
  `contact_desc` varchar(255) DEFAULT NULL,
  `contact_create_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_desc`, `contact_create_date`) VALUES
(3, 'Email', 'willman533@gmail.com', '0000-00-00 00:00:00'),
(7, 'Phone', '(+62)8222-673-0903', '2017-11-09 08:07:29'),
(8, 'Alamat', ' Jl.Pleret km 2 potorono, Bantul, YK', '2017-11-09 08:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `download_id` int(11) NOT NULL,
  `download_code` varchar(255) DEFAULT NULL,
  `download_judul` varchar(255) DEFAULT NULL,
  `download_file` varchar(200) DEFAULT NULL,
  `download_link` varchar(255) DEFAULT NULL,
  `download_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`download_id`, `download_code`, `download_judul`, `download_file`, `download_link`, `download_date`) VALUES
(9, '123', 'ssssssssssssss', '466180911120170719_161031.jpg', 'ssssssssssssssss', '2017-11-22 22:57:02'),
(10, '123', 'sssss', NULL, 'ssssssssssssss', '2017-11-25 22:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_name` varchar(100) DEFAULT NULL,
  `inbox_email` varchar(100) DEFAULT NULL,
  `inbox_subject` varchar(100) DEFAULT NULL,
  `inbox_message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`inbox_id`, `inbox_name`, `inbox_email`, `inbox_subject`, `inbox_message`) VALUES
(2, 'Nurul widiyastuti', 'nuyul@yahoo.com', 'tanya_mbak', 'ini gimana kok errror');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_orders` int(5) NOT NULL,
  `nama_petugas` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_order` datetime NOT NULL,
  `jam_order` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_orders`, `nama_petugas`, `tgl_order`, `jam_order`) VALUES
(520, 'admin', '2017-11-01 07:24:11', '00:24:11'),
(521, 'admin', '2017-11-03 21:37:04', '15:37:04');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id_orders` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`id_orders`, `product_id`, `jumlah`) VALUES
(520, 34, 1),
(521, 36, 1),
(521, 37, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders_temp`
--

CREATE TABLE `orders_temp` (
  `id_orders_temp` int(5) NOT NULL,
  `product_id` int(11) NOT NULL,
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `jumlah` int(5) NOT NULL,
  `tgl_order_temp` date NOT NULL,
  `jam_order_temp` time NOT NULL,
  `stok_temp` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_pelanggan`
--

CREATE TABLE `order_pelanggan` (
  `order_id` int(11) NOT NULL,
  `order_name` varchar(100) DEFAULT NULL,
  `order_email` varchar(100) DEFAULT NULL,
  `order_bbm` varchar(100) DEFAULT NULL,
  `order_wa` varchar(100) DEFAULT NULL,
  `order_alamat` varchar(100) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_pelanggan`
--

INSERT INTO `order_pelanggan` (`order_id`, `order_name`, `order_email`, `order_bbm`, `order_wa`, `order_alamat`, `order_date`, `product_id`) VALUES
(33, 'ddddddddd', 'dddddddddddddddddddd', 'dddddddddddddddddddd', 'dddddddddddddd', 'ddddddddddddd', NULL, 48),
(34, '2222222222222', '22222222222222', '2222222', '2222222222222222222', '222222222', NULL, 51),
(35, '2222222222222222222', '22222222222222222222', '222222', '2222222222222', '22222222222222222222', NULL, 50),
(36, '', '', '', '', '', NULL, 47);

-- --------------------------------------------------------

--
-- Table structure for table `paket_kursus`
--

CREATE TABLE `paket_kursus` (
  `paket_kursus_id` int(11) NOT NULL,
  `paket_kursus_name` varchar(100) DEFAULT NULL,
  `paket_kursus_images` text,
  `paket_kursus_price` int(11) DEFAULT NULL,
  `paket_kursus_desc` text,
  `paket_kursus_date` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_kursus`
--

INSERT INTO `paket_kursus` (`paket_kursus_id`, `paket_kursus_name`, `paket_kursus_images`, `paket_kursus_price`, `paket_kursus_desc`, `paket_kursus_date`, `user_id`) VALUES
(3, 'Paket Racing Performance', 'vmrmekanikberdasi-biaya-4358725541info-img3.jpg', 2000000, '<p>Disediakan Mess Gratis Bagi Yang Datang Dari Luar Kota<br />\r\nMengenal Teknik Dasar Modifikasi Mesin Balap<br />\r\nModul Modifikasi 4 Stroke dan 2 Stroke<br />\r\nSetting CDI dan ECU<br />\r\nMengenal Teknik Dasar Injeksi Racing<br />\r\nSetting Sesuai Sircuit<br />\r\nPengenalan Alat-Alat Modifikasi<br />\r\nPraktek Porting Polish, Memapas Noken as, Menggunakan Dial Indicator, Busur Derjad, Mengukur Kompresi<br />\r\nDiajarkan Langsung Oleh Mekanik Yang Berpengalaman<br />\r\nDisediakan Alat-Alat Praktek<br />\r\nDiberikan Data dan Spesifikasi Mesin Balap<br />\r\nWaktu 1 - 1.5 Bulan</p>\r\n', '2017-11-18 19:14:20', NULL),
(4, 'test', 'vmrmekanikberdasi-biaya-2758226174info-img3.jpg', 2147483647, '<p>2222222222222222</p>\r\n', '2017-11-20 22:19:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `portfolio_id` int(11) NOT NULL,
  `portfolio_name` varchar(100) DEFAULT NULL,
  `portfolio_images` text,
  `portfolio_desc` text,
  `portfolio_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`portfolio_id`, `portfolio_name`, `portfolio_images`, `portfolio_desc`, `portfolio_date`) VALUES
(10, 'eeeeeeeeee', 'GFS_STEVI_TOP.jpg', 'eeeeeeeeeeeeeeeeeeee', '2017-11-08 07:07:49'),
(11, 'xsxxxxx', '16901822970_d0611665-28f5-4255-abb6-5c0a6e801c5c_717_905.jpg', 'xxxxxxxxxxxxxxxxxxxxx', '2017-11-18 11:41:02');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_desc` text,
  `product_images` text,
  `product_stock` int(11) DEFAULT NULL,
  `product_date` datetime DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_desc`, `product_images`, `product_stock`, `product_date`, `category_id`) VALUES
(47, 'ssssssssssss', 2147483647, '22222222222', 'vmrmekanikberdasi-product-1857581866_452459_1422616630.jpg', 2147483647, '2017-11-26 11:48:38', 30),
(48, '222222222222', 2147483647, '22222222222', 'vmrmekanikberdasi-product-2565116806IMG-20150211-00169.jpg', 2147483647, '2017-11-26 11:48:50', 25),
(49, 'dddddddddddddddd', 0, 'ddddddddddddddd', 'vmrmekanikberdasi-product-3830364856Daftar-Harga-Karburator-Yamaha-RX-King-Orisinil-Terbaru-2017.jpg', 0, '2017-11-26 14:26:51', 30),
(50, 'sssssssssssssss', 0, 'ssssssssssss', 'vmrmekanikberdasi-product-4045648979HARLEY-DAVIDSONSPORTSTER883XL883C.jpg', 0, '2017-11-26 14:32:12', 25),
(51, 'ddddddddd', 0, 'dddddddddddddddd', 'vmrmekanikberdasi-product-4703293650IMG-20150211-00169.jpg', 0, '2017-11-26 14:33:03', 25),
(52, 'dddddddddddddddddddddddddddddddddd', 0, 'sssssssssssssssssss', 'vmrmekanikberdasi-product-1668754465mesinfu.jpg', 0, '2017-11-26 14:34:27', 30);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(100) DEFAULT NULL,
  `service_images` varchar(100) DEFAULT NULL,
  `service_desc` text,
  `service_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `service_images`, `service_desc`, `service_date`) VALUES
(2, 'berhubungan dengan modifikas', 'vmrmekanikberdasi-servicer-1230478524info-img3-3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porta sed tortor vel mattis.', '2017-11-19 17:31:07'),
(3, 'Waktu Belajar Fleksibel', 'vmrmekanikberdasi-servicer-1458358518info-img3-3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porta sed tortor vel mattis.', '2017-11-19 19:49:21'),
(4, 'Materi Mudah di Pahami', 'vmrmekanikberdasi-servicer-9139107386info-img3-3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porta sed tortor vel mattis.', '2017-11-19 19:49:58'),
(5, 'Instruktur Berpengalaman', 'vmrmekanikberdasi-servicer-8725505918ambar-black-600x600.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porta sed tortor vel mattis.', '2017-11-19 19:50:16');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `siswa_id` int(11) NOT NULL,
  `siswa_code` varchar(100) DEFAULT NULL,
  `siswa_images` text,
  `siswa_name` varchar(100) DEFAULT NULL,
  `siswa_address` varchar(100) DEFAULT NULL,
  `siswa_city` varchar(100) DEFAULT NULL,
  `siswa_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`siswa_id`, `siswa_code`, `siswa_images`, `siswa_name`, `siswa_address`, `siswa_city`, `siswa_status`) VALUES
(5, '1344', 'vmrmekanikberdasi-siswa-2029022568foto.jpg', 'Dina Putri Utami', 'Bantul City', 'Yogyakarta', 'lulus'),
(6, '2323', 'vmrmekanikberdasi-siswa-1534504715v.jpg', 'Arum Kartika Devi', 'Sleman', 'Sleman', 'lulus'),
(7, '123', 'vmrmekanikberdasi-siswa-1481520501Screenshot_1.jpg', 'Puji Waloyo', 'Jln Tamrin Raya jakarta Selatan', 'Jakarta', 'belum_lulus');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `slide_id` int(11) NOT NULL,
  `slide_name` varchar(100) DEFAULT NULL,
  `slide_images` varchar(100) DEFAULT NULL,
  `slide_desc` text,
  `slide_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`slide_id`, `slide_name`, `slide_images`, `slide_desc`, `slide_date`) VALUES
(1, 'nama slider', 'vmrmekanikberdasi-slider-2173238217mesinfu.jpg', 'deskrkipsi slider', '2017-11-08 07:13:55'),
(2, 'Slider Name', 'vmrmekanikberdasi-slider-4185697284mesinfu.jpg', 'deskripsion slider name', '2017-11-08 07:14:04'),
(9, 'Jasa Pembuatan Head racing', 'vmrmekanikberdasi-slider-2468807835IMG-20170726-WA0013.jpg', 'Jasa Pembuatan Head racing terbaik se INDONESIA', '2017-11-19 15:41:48'),
(10, 'Jasa Pembuatan Head racing', 'vmrmekanikberdasi-slider-1331013932special-img.jpg', 'Jasa Pembuatan Head racing Se Jogja', '2017-11-19 15:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `sptools`
--

CREATE TABLE `sptools` (
  `sptools_id` int(11) NOT NULL,
  `sptools_name` varchar(100) DEFAULT NULL,
  `sptools_images` text,
  `sptools_desc` text,
  `sptools_date` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sptools`
--

INSERT INTO `sptools` (`sptools_id`, `sptools_name`, `sptools_images`, `sptools_desc`, `sptools_date`, `user_id`) VALUES
(1, 'wwwwwwwwwwwwwww', '3834783426mesin fu.jpg', 'wwwwwwwwwwwwwwwww', '2017-11-18 19:01:52', NULL),
(2, 'aaaaaaaaaaaa', '4164485290baground.png', 'aaaaaaaaaaaaaaa', '2017-11-18 19:03:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `support_id` int(11) NOT NULL,
  `support_images` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`support_id`, `support_images`) VALUES
(3, 'vmrmekanikberdasi-supportr-3425888869vmv.png'),
(4, 'vmrmekanikberdasi-supportr-1614947452sks.png'),
(5, 'vmrmekanikberdasi-supportr-4722395811IMG-20170730-WA0006.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `testimoni_id` int(11) NOT NULL,
  `testimoni_name` varchar(200) DEFAULT NULL,
  `testimoni_desc` varchar(200) DEFAULT NULL,
  `testimoni_images` varchar(200) DEFAULT NULL,
  `testimoni_city` varchar(100) DEFAULT NULL,
  `testimoni_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`testimoni_id`, `testimoni_name`, `testimoni_desc`, `testimoni_images`, `testimoni_city`, `testimoni_date`) VALUES
(5, 'Subali', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum lacus mi. Quisque iaculis consectetur ex at rutrum. Donec nisl libero, porta euismod tempus eu, dapibus iaculis est.\r\n', '3005400470test-img3.jpg', 'Yogyakarta', '2017-11-25 15:18:09'),
(6, 'James Bon', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum lacus mi. Quisque iaculis consectetur ex at rutrum. Donec nisl libero, porta euismod tempus eu, dapibus iaculis est.\r\n', 'vmrmekanikberdasi-testimoni-3726442562test-img3.jpg', 'Bali', '2017-11-25 21:05:58'),
(7, 'Jennifer Lopez', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum lacus mi. Quisque iaculis consectetur ex at rutrum. Donec nisl libero, porta euismod tempus eu, dapibus iaculis est.\r\n', 'vmrmekanikberdasi-testimoni-3427897891test-img3.jpg', 'Surabaya', '2017-11-25 21:06:13'),
(8, ' Bike Racer', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum lacus mi. Quisque iaculis consectetur ex at rutrum. Donec nisl libero, porta euismod tempus eu, dapibus iaculis est.\r\n', 'vmrmekanikberdasi-testimoni-2807378624test-img3.jpg', 'Jakarta', '2017-11-25 21:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_foto` text,
  `user_name` varchar(255) DEFAULT NULL,
  `user_username` varchar(40) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_level` varchar(200) NOT NULL,
  `user_create_date` datetime DEFAULT NULL,
  `user_status` enum('N','Y') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_foto`, `user_name`, `user_username`, `user_password`, `user_level`, `user_create_date`, `user_status`) VALUES
(43, '3748739283757294_0f7cab4b-5c1b-42bb-9fce-64cc67b300d1.jpg', 'Nisa Istifadah', 'admin', '$2y$10$DlmbzphG8R0/jKJS5mzS5e.NvitZtMRnaDeCcVHN8q1NbyN3m3V/C', 'super admin', '2017-09-19 07:35:34', 'Y'),
(44, '1219964561insave12749868_525843680930953_601052091_n_scaled.jpg', 'Aliqa  Aâ€™yunina', 'aliqa', '$2y$10$Gukorg8JuLhU6HFt.t40lecEDiz19rqWUe2EDcHd6Vn1xETb5Eqdu', 'admin', '2017-09-19 07:43:31', 'Y'),
(46, '16238493060_d0611665-28f5-4255-abb6-5c0a6e801c5c_717_905.jpg', 'Rosita Hima', 'rosita', '$2y$10$4QVVpa0wi1aPvFLt6uSgwefkn3wfQUp4JQPWv9p.o88RNmRWg4fjW', 'kasir', '2017-10-11 10:29:12', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`download_id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`);

--
-- Indexes for table `orders_temp`
--
ALTER TABLE `orders_temp`
  ADD PRIMARY KEY (`id_orders_temp`);

--
-- Indexes for table `order_pelanggan`
--
ALTER TABLE `order_pelanggan`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `paket_kursus`
--
ALTER TABLE `paket_kursus`
  ADD PRIMARY KEY (`paket_kursus_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`portfolio_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `sptools`
--
ALTER TABLE `sptools`
  ADD PRIMARY KEY (`sptools_id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`support_id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`testimoni_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `artikel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `download_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=522;
--
-- AUTO_INCREMENT for table `orders_temp`
--
ALTER TABLE `orders_temp`
  MODIFY `id_orders_temp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2357;
--
-- AUTO_INCREMENT for table `order_pelanggan`
--
ALTER TABLE `order_pelanggan`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `paket_kursus`
--
ALTER TABLE `paket_kursus`
  MODIFY `paket_kursus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `portfolio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sptools`
--
ALTER TABLE `sptools`
  MODIFY `sptools_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `support_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `testimoni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
