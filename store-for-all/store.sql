-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2023 at 09:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `details`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Laptop', 'asus,dell,hp,lenovo', 'howard-bouchevereau-RSCirJ70NDM-unsplash (1).jpg', '2023-03-23 11:50:00', '2023-03-23 11:50:00'),
(5, 'clothes', 'for men', 'clothes.jpg', '2023-03-23 11:50:33', '2023-03-23 11:50:33'),
(6, 'Shoes', 'For Men', 'shoes.jpg', '2023-03-23 11:52:23', '2023-03-23 11:52:23'),
(7, 'Mobiles', 'All Type', 'jonas-lee-o6elTKWZ5bI-unsplash (1).jpg', '2023-03-23 11:53:07', '2023-03-23 11:53:07'),
(8, 'Headphones', 'All Type', 'jason-leung-xR4JHzr69Og-unsplash.jpg', '2023-03-23 11:55:18', '2023-03-23 11:55:18'),
(9, 'Keyboards-Mouse', 'All Type', '1738-03.jpg', '2023-03-28 10:24:11', '2023-03-23 11:58:15');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `details` text NOT NULL,
  `vendor-phone` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `views` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `details`, `vendor-phone`, `user_id`, `image`, `views`, `category_name`, `created_at`, `updated_at`) VALUES
(14, 'lenovo ideapad', 1800000, 'core-i5 g8 ram 8gb hard 1T', '0988788776', 4, 'dlzxu6rO.jpg', 14, 'Laptop', '2023-03-28 19:54:49', '2023-03-24 21:11:15'),
(15, 'samsung A04s', 1500000, 'ram 6  memory 128gb ', '098878665', 4, 'a04s.jpg', 14, 'Mobiles', '2023-03-28 19:54:49', '2023-03-24 21:12:52'),
(16, 'oppo smart', 2800000, 'ram 4/memoy 64gb', '099877886', 4, 'oppo.png', 14, 'Mobiles', '2023-03-28 19:54:49', '2023-03-24 21:14:34'),
(17, 'samsung A31', 19500000, 'ram 6  memory 128gb', '0987987987', 4, 'A32.jpg', 14, 'Mobiles', '2023-03-28 19:54:49', '2023-03-24 21:15:20'),
(18, 'Huawie Mate x3', 1450000, 'ram 6/ memory 128gb/black', '0989879879', 4, 'Huawei_MateX3_1.png', 14, 'Mobiles', '2023-03-28 19:54:49', '2023-03-24 21:18:03'),
(19, 'Asus TUF', 4500000, 'i5-10g/ram8/hard ssd 512/light keyboard', '099878999', 4, 'tuf.webp', 14, 'Laptop', '2023-03-28 19:54:49', '2023-03-24 21:20:39'),
(20, 'Dell XPS-5', 5600000, 'i5-8g/ram12/hard ssd256/light keyboard', '099879878', 4, 'Dell-XPS-5.jpg', 14, 'Laptop', '2023-03-28 19:54:49', '2023-03-24 21:21:52'),
(21, 'Asus ROG', 6500000, 'i5-10g/ram8/hard ssd 512/light keyboard', '098897897', 4, 'rog.jpg', 14, 'Laptop', '2023-03-28 19:54:49', '2023-03-24 21:22:33'),
(22, 'جاكيت كتان شتوي ', 50000, 'm-l-xl اللون رمادي\\مقاسات', '0654654564', 5, 'IMG-20230109-WA0010.jpg', 14, 'clothes', '2023-03-28 19:54:49', '2023-03-24 21:25:23'),
(23, 'بجامة براشوت', 80000, ' L-XL XXL اللون أسود\\مقاسات ', '0956456465', 5, 'IMG-20230225-WA0013.jpg', 14, 'clothes', '2023-03-28 19:54:49', '2023-03-24 21:27:26'),
(24, 'كنزة رجالي ', 35000, 'الوان:ابيض-اسود خمري \\كافة المقاسات ', '094564654', 5, 'IMG-20230226-WA0031.jpg', 14, 'clothes', '2023-03-28 19:54:49', '2023-03-24 21:28:29'),
(25, 'بجامة صيفي adidas', 60000, 'size:l-xl-xxl', '095646545', 5, 'IMG-20230305-WA0021.jpg', 14, 'clothes', '2023-03-28 19:54:49', '2023-03-24 21:33:19'),
(26, 'الكسندر سبور شيك رجالي', 400000, 'مقاسات 40-45\\اسود +ابيض', '09564564', 5, 'IMG-20230209-WA0002.jpg', 14, 'Shoes', '2023-03-28 19:54:49', '2023-03-24 21:35:36'),
(27, 'رجالي جلد KNACK', 55000, 'اسود \\مقاسات 42-44', '0954564564', 5, 'IMG-20230216-WA0003.jpg', 14, 'Shoes', '2023-03-28 19:54:49', '2023-03-24 21:37:12'),
(28, 'بوط رياضي ', 50000, 'نعل بروتان طري\\مقاسات 40-45', '0954654564', 5, 'IMG-20230226-WA0003.jpg', 14, 'Shoes', '2023-03-28 19:54:49', '2023-03-24 21:38:00'),
(44, 'MX Mechanical Mini', 20000, 'Create on a compact keyboard with precise low-profile switches.', '0966645645', 3, 'mx-mechanical-mini-product-thumbnail-sept.webp', 14, 'Keyboards-Mouse', '2023-03-28 19:54:49', '2023-03-28 11:27:10'),
(46, 'JBL Tune 510BT', 80000, 'Wireless On-Ear Headphones with Purebass Sound - Blue', '099666545', 3, '61yjoRgptdL.jpg', 14, 'Headphones', '2023-03-28 19:54:49', '2023-03-28 11:35:35'),
(51, 'SONY WI sp510', 60000, 'bluetooth headphone', '0978979878', 3, 'sony-bluetooth-headphone-wi-sp510.png', 14, 'Headphones', '2023-03-28 19:54:49', '2023-03-28 19:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_up` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `role`, `created_at`, `updated_up`) VALUES
(1, 'ibrahim', 'ibr@gmail.com', '601f1889667efaebb33b8c12572835da3f027f78', '098876541', 1, '2023-03-21 16:38:15', '2023-03-20 17:11:16'),
(2, 'mohammad', 'momo@gmail.com', 'ccbe91b1f19bd31a1365363870c0eec2296a61c1', '098765432', 0, '2023-03-20 17:20:34', '2023-03-20 17:13:00'),
(3, 'moulham', 'moulham@gmail.com', '1a2bf0adea0f4b41ed9f7a02d31fa535d5743f3e', '0987786645', 0, '2023-03-20 17:20:34', '2023-03-20 17:13:00'),
(4, 'ahmad', 'ahmad@gmail.com', 'e19bd79719867b53e825fa04bea4cbfe27a5a7e3', '0649897897', 0, '2023-03-21 16:42:09', '2023-03-21 16:42:09'),
(5, 'hasan', 'hasan@gmail.com', '21a0922288836d7feecd333583be87118e9867d1', '09778469654', 0, '2023-03-22 09:17:25', '2023-03-22 09:17:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
