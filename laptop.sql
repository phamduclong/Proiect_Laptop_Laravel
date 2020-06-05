-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 18, 2020 lúc 03:30 AM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laptop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `image_category` varchar(255) DEFAULT NULL,
  `publish` int(11) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `image_category`, `publish`, `ordering`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Macbook', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'HP', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Asus', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Dell', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Lenovo', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Acer', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'MSI\r\n', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `node` text DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `gender`, `email`, `address`, `phone`, `updated_at`, `node`, `created_at`) VALUES
(43, 'pham', 'long', 'nam', 'long@gmail.com', 'Ha Noi', '0333988888', '2020-02-16', NULL, '2020-02-16'),
(44, 'pham', 'long', 'nam', 'long@gmail.com', 'TP. HCM', '0333988888', '2020-02-16', NULL, '2020-02-16'),
(45, 'pham', 'long', 'nam', 'longducpham109@gmail.com', 'hà nội', '0333988888', '2020-02-18', NULL, '2020-02-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_11_112446_user', 2),
(5, '2019_12_11_115456_user', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `total`, `status`, `updated_at`, `created_at`) VALUES
(32, 43, '16,322,900.00', 'Completed', '2020-02-17 06:18:15', '2020-02-16 04:07:36'),
(33, 44, '37,389,000.00', 'Completed', '2020-02-17 06:18:33', '2020-02-16 04:09:35'),
(34, 45, '18,029,000.00', 'Completed', '2020-02-18 02:16:32', '2020-02-18 02:04:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` float DEFAULT NULL,
  `product_qty` int(11) DEFAULT NULL,
  `product_sale_price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_qty`, `product_sale_price`) VALUES
(2, 32, 6, 'Acer Swift 3 SF315 52 38YQ i3 8130U (NX.GZBSV.003)', 13490000, 1, 2000000),
(3, 33, 7, 'Asus VivoBook A412FA i3 8145U (EK661T)', 14900000, 1, 2000000),
(4, 33, 8, 'Asus VivoBook A412FA i3 8145U (EK342T)', 16000000, 1, 2300000),
(5, 34, 7, 'Asus VivoBook A412FA i3 8145U (EK661T)', 14900000, 1, 2000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', '$2y$10$zRXsUmeiBzBqQnM3O9s3EO8wdMfiXl3zd829klMZVguUkUwmewBxW', '2019-12-26 23:27:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title_p` varchar(255) DEFAULT NULL,
  `product_image_intro` varchar(255) DEFAULT NULL,
  `publish` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `sale_price` float DEFAULT NULL,
  `description` text DEFAULT NULL,
  `full_description` text DEFAULT NULL,
  `product_old` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `title_p`, `product_image_intro`, `publish`, `category_id`, `ordering`, `price`, `sale_price`, `description`, `full_description`, `product_old`, `created_at`, `updated_at`) VALUES
(1, 'Iphone 1', NULL, 1, 1, 1, 300000, 250000, NULL, NULL, 1, NULL, NULL),
(2, 'Iphone 2', NULL, 1, 2, 2, 2000000, 20000, NULL, NULL, 1, NULL, NULL),
(3, 'Iphone 3', NULL, 1, 1, 1, 300000, 250000, NULL, NULL, 1, NULL, NULL),
(4, 'Iphone 4', NULL, 1, 2, 2, 2000000, 20000, NULL, NULL, 1, NULL, NULL),
(5, 'Iphone 5', NULL, 1, 1, 3, 300000, 100000, NULL, NULL, 0, NULL, NULL),
(6, 'Iphone 6', NULL, 1, 2, 4, 300000, 20000, NULL, NULL, 1, NULL, NULL),
(7, 'Iphone 7', NULL, 1, 1, 3, 300000, 100000, NULL, NULL, 0, NULL, NULL),
(8, 'Iphone 8', NULL, 1, 2, 4, 300000, 20000, NULL, NULL, 1, NULL, NULL),
(9, 'Iphone 9', NULL, 1, 1, 5, 300000, 250000, NULL, NULL, 1, NULL, NULL),
(10, 'Iphone 10', NULL, 1, 1, 6, 2000000, 20000, NULL, NULL, 1, NULL, NULL),
(11, 'Iphone 11', NULL, 1, 1, 5, 300000, 250000, NULL, NULL, 1, NULL, NULL),
(12, 'Iphone 12', NULL, 1, 1, 6, 2000000, 20000, NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_image_intro` varchar(255) DEFAULT NULL,
  `publish` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `category_name` varchar(255) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `sale_price` float DEFAULT NULL,
  `description` text DEFAULT NULL,
  `full_description` text DEFAULT NULL,
  `product_old` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_image_intro`, `publish`, `category_id`, `category_name`, `ordering`, `price`, `sale_price`, `description`, `full_description`, `product_old`, `created_at`, `updated_at`) VALUES
(6, 'Acer Swift 3 SF315 52 38YQ i3 8130U (NX.GZBSV.003)', 'upload/products/10635acer-swift-sf315-52-38yq-i3-8130u-4gb-1tb-156f-win-600x600.jpg', 1, 9, 'Acer', 1, 13490000, 2000000, '1', '1', 1, '2019-12-26 23:46:14', '2019-12-26 23:46:14'),
(7, 'Asus VivoBook A412FA i3 8145U (EK661T)', 'upload/products/16112asus-vivobook-a412f-i3-8145u-4gb-32gb-512gb-win10-600x600.jpg', 1, 9, 'Asus', 1, 14900000, 2000000, '1', '1', 1, '2019-12-27 00:30:35', '2019-12-27 00:30:35'),
(8, 'Asus VivoBook A412FA i3 8145U (EK342T)', 'upload/products/42957asus-vivobook-s412f-i3-8145u-4gb-512gb-ek342t3-1-1-600x600.jpg', 1, 1, 'Asus', 1, 16000000, 2300000, '1', '1', 1, '2019-12-27 00:31:30', '2019-12-27 00:31:30'),
(9, 'Lenovo IdeaPad S145 15IKB i3 7020U (81VD0035VN)', 'upload/products/45490lenovo-ideapad-15ikb-i3-7020u-4gb-256gb-win10-81v-1-600x600.jpg', 1, 1, 'Lenovo', 1, 10290000, 930000, '1', '1', 1, '2020-01-07 20:03:45', '2020-01-07 20:03:45'),
(10, 'Asus VivoBook X509U i3 7020U (EJ063T)', 'upload/products/31967asus-a512fa-i5-8265u-8gb-1tb-win10-ej552t-16-1-600x600.jpg', 1, 1, 'Asus', 1, 14000000, 2000000, '1', '1', 1, '2020-01-07 20:04:37', '2020-01-07 20:04:37'),
(11, 'Asus VivoBook X409FA i3 8145U (EK306T)', 'upload/products/42178asus-vivobook-x409fa-i3-8145u-4gb-512gb-win10-ek3-600x600.jpg', 1, 9, 'Asus', 1, 12390000, 0, '1', '1', 1, '2020-01-07 20:06:45', '2020-01-07 20:06:45'),
(12, 'HP 348 G5 i3 7020U (7XJ62PA)', 'upload/products/14581hp-348-g5-i3-7020u-4gb-256gb-win10-7xj62pa-(3).jpg', 1, 1, 'HP', 1, 11690000, 1500000, '1', '1', 1, '2020-01-07 20:08:35', '2020-01-07 20:08:35'),
(13, 'Lenovo Ideapad S145 15IWL i3 8145U (81MV00SXVN)', 'upload/products/46142hp-pavilion-14-ce3027tu-i5-1035g1-8gb-16gb-256gb-1-600x600.jpg', 0, 9, 'Lenovo', 1, 1, 16900000, '2190000', 'diamond', 1, '2020-02-16 01:16:01', '2020-02-16 01:16:01'),
(16, 'Iphone 9', 'upload/products/26919HinhNen.jpg', 1, 7, 'Macbook', NULL, 500000, 400000, 'qqqqq', NULL, NULL, '2020-02-17 19:14:01', '2020-02-17 19:14:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review_product`
--

CREATE TABLE `review_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `like_product` int(11) DEFAULT NULL,
  `comment_product` text DEFAULT NULL,
  `accout` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `review_product`
--

INSERT INTO `review_product` (`id`, `product_id`, `like_product`, `comment_product`, `accout`, `avatar`, `facebook`, `created_at`, `updated_at`) VALUES
(28, 7, NULL, 'hay', 'Phạm Long', 'https://graph.facebook.com/v3.3/449356992621734/picture?type=normal', 'yes', '2020-02-17 06:35:14', '2020-02-17 06:35:14'),
(29, 7, NULL, 'được', 'Ẩn danh', 'upload/accout.jpg', 'no', '2020-02-17 06:36:42', '2020-02-17 06:36:42'),
(30, 7, NULL, 'đẹp', 'phamlong', 'upload/accout.jpg', 'no', '2020-02-17 06:39:54', '2020-02-17 06:39:54'),
(34, 6, NULL, 'được đó', 'Ẩn danh', 'upload/accout.jpg', 'no', '2020-02-17 11:44:02', '2020-02-17 11:44:02'),
(35, 7, NULL, 'sản phẩm rất tốt', 'Phạm Long', 'https://graph.facebook.com/v3.3/449356992621734/picture?type=normal', 'yes', '2020-02-17 19:02:47', '2020-02-17 19:02:47'),
(36, 10, NULL, 'được', 'Phạm Long', 'https://graph.facebook.com/v3.3/449356992621734/picture?type=normal', 'yes', '2020-02-17 19:10:01', '2020-02-17 19:10:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `type`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'phamlong', '111111', 'long@gmail.com', 'user', NULL, '2019-12-11 04:56:46', '2020-01-14 03:34:16'),
(2, 'long', '123456', 'long109@gmail.com', 'user', NULL, '2019-12-11 05:02:54', '2019-12-11 05:02:54'),
(3, 'hiepdo', '12345678', 'hiep@gmail.com', 'user', NULL, '2019-12-11 05:23:26', '2019-12-11 05:23:26'),
(4, 'admin', '1234567', 'admin@gmail.com', 'admin', NULL, NULL, NULL),
(5, 'phamduclong', '111111', 'long@gmail.com', 'user', NULL, '2020-01-14 02:22:41', '2020-01-14 03:34:16'),
(6, 'longdp', '111111', 'long@gmail.com', 'user', NULL, '2020-01-14 02:27:05', '2020-01-14 03:34:16'),
(7, 'pdlong', '555555', 'longducpham109@gmail.com', 'user', NULL, '2020-01-14 02:28:14', '2020-01-14 03:42:34'),
(8, 'dvhiep', '12345678', 'hiep@gmail.com', 'user', NULL, '2020-01-14 02:40:00', '2020-01-14 02:40:00'),
(9, 'longars', '222222', 'long109@gmail.com', 'user', NULL, '2020-01-14 03:42:02', '2020-01-14 03:42:02'),
(21, 'Phạm Long', NULL, 'longducpham109@gmail.com', 'user', 'https://graph.facebook.com/v3.3/449356992621734/picture?type=normal', '2020-01-14 06:38:08', '2020-01-14 06:38:08');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `review_product`
--
ALTER TABLE `review_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `review_product`
--
ALTER TABLE `review_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
