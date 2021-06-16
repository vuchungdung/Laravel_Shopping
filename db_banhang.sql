-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 16, 2021 lúc 06:45 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parentId` int(11) NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `parentId`, `alias`, `created_at`, `updated_at`) VALUES
(71, 'Nội thất phòng tắm', 0, 'noi-that-phong-tam', '2021-05-08 10:23:48', '2021-05-08 10:25:18'),
(72, 'Nội thất phòng khách', 0, 'noi-that-phong-khach', '2021-05-08 10:23:56', '2021-05-08 10:23:56'),
(73, 'Nội thất phòng ăn', 0, 'noi-that-phong-an', '2021-05-08 10:24:02', '2021-05-08 10:24:02'),
(74, 'Nội thất phòng làm việc', 0, 'noi-that-phong-lam-viec', '2021-05-08 10:24:10', '2021-05-08 10:24:10'),
(75, 'Nội thất phòng ngủ', 0, 'noi-that-phong-ngu', '2021-05-08 10:24:17', '2021-05-08 10:24:17'),
(76, 'Nội thất phòng sách', 0, 'noi-that-phong-sach', '2021-05-08 10:24:26', '2021-05-08 10:24:26'),
(77, 'Không gian ngoài trời', 0, 'khong-gian-ngoai-troi', '2021-05-08 10:25:32', '2021-05-08 10:25:32'),
(78, 'Nội thất phòng cho trẻ', 0, 'noi-that-phong-cho-tre', '2021-05-08 10:26:42', '2021-05-08 10:26:42'),
(79, 'Gương', 71, 'guong', '2021-05-08 10:32:20', '2021-05-08 10:32:20'),
(80, 'Tủ phòng tắm', 71, 'tu-phong-tam', '2021-05-08 10:34:09', '2021-05-08 10:34:09'),
(81, 'Kệ phòng tắm', 71, 'ke-phong-tam', '2021-05-08 10:34:21', '2021-05-08 10:34:21'),
(82, 'Thảm phòng tắm', 71, 'tham-phong-tam', '2021-05-08 10:35:30', '2021-05-08 10:35:30'),
(83, 'Bàn Cafe', 72, 'ban-cafe', '2021-05-08 10:35:53', '2021-05-08 10:35:53'),
(84, 'Tủ kệ TV', 72, 'tu-ke-tv', '2021-05-08 10:36:08', '2021-05-08 10:36:08'),
(85, 'Ghế thư giãn', 72, 'ghe-thu-gian', '2021-05-08 10:36:20', '2021-05-08 10:36:20'),
(86, 'Sản phẩm gắn tường', 72, 'san-pham-gan-tuong', '2021-05-08 10:36:35', '2021-05-08 10:36:35'),
(87, 'Đèn sàn', 72, 'den-san', '2021-05-08 10:36:45', '2021-05-08 10:36:45'),
(88, 'Ghế đôn', 72, 'ghe-don', '2021-05-08 10:37:12', '2021-05-08 10:37:12'),
(89, 'Sản phẩm gắng tường', 72, 'san-pham-gang-tuong', '2021-05-08 10:37:32', '2021-05-08 10:37:32'),
(90, 'Ghế ăn', 73, 'ghe-an', '2021-05-08 10:37:57', '2021-05-08 10:37:57'),
(91, 'Bàn ăn', 73, 'ban-an', '2021-05-08 10:38:51', '2021-05-08 10:38:51'),
(92, 'Giá để bát đĩa', 73, 'gia-de-bat-dia', '2021-05-08 10:39:37', '2021-05-08 10:39:37'),
(93, 'Bàn bếp', 73, 'ban-bep', '2021-05-08 10:39:48', '2021-05-08 10:39:48'),
(94, 'Đồng hồ', 72, 'dong-ho', '2021-05-08 10:39:58', '2021-05-08 10:39:58'),
(95, 'Bàn làm việc', 74, 'ban-lam-viec', '2021-05-08 10:40:41', '2021-05-08 10:40:41'),
(96, 'Ghế làm việc', 74, 'ghe-lam-viec', '2021-05-08 10:40:50', '2021-05-08 10:40:50'),
(97, 'Đèn để bàn', 74, 'den-de-ban', '2021-05-08 10:40:58', '2021-05-08 10:40:58'),
(98, 'Gường ngủ', 75, 'guong-ngu', '2021-05-08 10:42:35', '2021-05-08 10:42:35'),
(99, 'Đèn ngủ', 75, 'den-ngu', '2021-05-08 10:42:40', '2021-05-08 10:42:40'),
(100, 'Rèm cửa sổ', 75, 'rem-cua-so', '2021-05-08 10:43:04', '2021-05-08 10:43:04'),
(101, 'Giá để sách', 76, 'gia-de-sach', '2021-05-08 10:53:38', '2021-05-08 10:53:38'),
(102, 'Ghế đọc sách', 76, 'ghe-doc-sach', '2021-05-08 10:53:48', '2021-05-08 10:53:48'),
(103, 'Đèn đọc sách', 76, 'den-doc-sach', '2021-05-08 10:53:58', '2021-05-08 10:53:58'),
(104, 'Bàn đọc', 76, 'ban-doc', '2021-05-08 10:54:07', '2021-05-08 10:54:07'),
(105, 'Bàn ăn ngoài trời', 77, 'ban-an-ngoai-troi', '2021-05-08 10:54:18', '2021-05-08 10:54:18'),
(106, 'Ô che ngoài trời', 77, 'o-che-ngoai-troi', '2021-05-08 10:54:29', '2021-05-08 10:54:29'),
(107, 'Giường ngủ', 78, 'giuong-ngu', '2021-05-08 10:54:39', '2021-05-08 10:54:39'),
(108, 'Bàn học', 78, 'ban-hoc', '2021-05-08 10:54:54', '2021-05-08 10:54:54'),
(109, 'Giá sách', 78, 'gia-sach', '2021-05-08 10:55:01', '2021-05-08 10:55:01'),
(110, 'Rèm cửa', 78, 'rem-cua', '2021-05-08 10:55:08', '2021-05-08 10:55:08'),
(111, 'Đồ trang trí', 0, 'do-trang-tri', '2021-05-08 10:55:14', '2021-05-08 10:55:14'),
(112, 'Đồ trang trí vải', 111, 'do-trang-tri-vai', '2021-05-08 10:55:26', '2021-05-08 10:56:05'),
(113, 'Đồ trang trí khác', 111, 'do-trang-tri-khac', '2021-05-08 10:55:42', '2021-05-08 10:55:42'),
(114, 'Đồ trang trí gỗ', 111, 'do-trang-tri-go', '2021-05-08 10:55:56', '2021-05-08 10:55:56'),
(115, 'Ghế Sofa', 72, 'ghe-sofa', '2021-05-08 10:58:25', '2021-05-08 10:58:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `created_at`, `updated_at`, `email`, `name`, `password`) VALUES
(1, '2021-05-29 09:16:20', '2021-05-29 09:16:20', 'khachhang2@gmail.com', 'Khách hàng 2', 'vuchungdung'),
(2, '2021-05-29 09:19:20', '2021-05-29 09:19:20', 'khachhang3@gmail.com', 'Khách hàng 3', 'vuchungdung'),
(3, '2021-05-29 09:53:07', '2021-05-29 09:53:07', 'khachhang1@gmail.com', 'Khách hàng 1', 'vuchungdung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(19, '2014_10_12_000000_create_users_table', 3),
(20, '2014_10_12_100000_create_password_resets_table', 3),
(21, '2019_08_19_000000_create_failed_jobs_table', 3),
(22, '2021_02_17_085044_create_products_table', 3),
(23, '2021_02_17_085216_create_categories_table', 3),
(24, '2021_02_17_151055_create_orders_table', 3),
(25, '2021_02_17_151431_create_order_details_table', 3),
(26, '2021_02_17_151610_create_customers_table', 3),
(27, '2021_02_17_151652_create_discounts_table', 3),
(28, '2021_02_17_152210_create_product_images_table', 3),
(29, '2021_02_17_152231_create_tags_table', 3),
(30, '2021_02_17_152253_create_product_tags_table', 3),
(31, '2021_02_17_152320_create_menus_table', 3),
(32, '2021_02_17_152354_create_siders_table', 3),
(33, '2021_02_17_152520_create_settings_table', 3),
(34, '2021_04_19_080918_create_product_colors_table', 3),
(35, '2021_04_19_081045_create_product_owners_table', 3),
(38, '2021_05_04_154844_add-field', 4),
(39, '2021_05_04_173724_create_product_in_colors_table', 5),
(40, '2021_05_04_174318_update-table-color', 6),
(41, '2021_05_04_175448_update-table-product', 7),
(42, '2021_05_05_012210_update-table-product-2', 8),
(43, '2021_05_05_023513_update-table-product-owner', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `payments` int(11) NOT NULL,
  `cusId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `name`, `email`, `phone`, `address`, `status`, `total`, `payments`, `cusId`) VALUES
(16, '2021-06-15 02:57:02', '2021-06-15 08:07:23', 'Khách hàng 3', 'vuchungdunghlym@gmail.com', '0913849547', 'Hà Nội', 0, 6700000, 0, 2),
(17, '2021-06-15 08:05:30', '2021-06-16 04:41:36', 'Khách hàng 1', 'vuchungdunghlym@gmail.com', '0913849547', 'Hà Nội', 4, 6700000, 0, 3),
(18, '2021-06-16 04:23:01', '2021-06-16 07:23:21', 'Khách hàng 1', 'khachhang1@gmail.com', '0913849547', 'Hà Nội', 1, 4740000, 0, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `created_at`, `updated_at`, `quantity`, `orderid`, `productid`) VALUES
(21, '2021-06-15 02:57:02', '2021-06-15 02:57:02', 2, 16, 34),
(22, '2021-06-15 02:57:02', '2021-06-15 02:57:02', 3, 16, 21),
(23, '2021-06-15 08:05:30', '2021-06-15 08:05:30', 2, 17, 33),
(24, '2021-06-15 08:05:30', '2021-06-15 08:05:30', 3, 17, 24),
(25, '2021-06-16 04:23:01', '2021-06-16 04:23:01', 2, 18, 20),
(26, '2021-06-16 04:23:01', '2021-06-16 04:23:01', 3, 18, 24),
(27, '2021-06-16 04:23:01', '2021-06-16 04:23:01', 2, 18, 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quatity` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `viewcount` int(11) NOT NULL,
  `homeflag` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `hotflag` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ownerId` int(11) NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `isdiscount` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `alias`, `price`, `quatity`, `categoryId`, `viewcount`, `homeflag`, `hotflag`, `created_at`, `updated_at`, `description`, `ownerId`, `images`, `content`, `discount`, `isdiscount`) VALUES
(19, 'Ghế Sofa da', 'ghe-sofa-da', 900000, 23, 73, 1, 'checked', '', '2021-05-08 12:03:13', '2021-05-08 12:03:13', 'Sản phẩm ghế Sofa', 2, '7200018-w63-82xh62-78.jpg', '<p>Sản phảm ghế đơn<br></p>', 600000, 'checked'),
(20, 'Ghế đơn', 'ghe-don', 120000, 30, 72, 1, 'checked', 'checked', '2021-05-10 00:42:15', '2021-05-18 18:36:02', 'Sản phảm ghế đơn', 3, '6000191_1.jpg', 'Sản phảm ghế đơn', 100000, 'checked'),
(21, 'Ghế Sofa dài', 'ghe-sofa-dai', 900000, 300, 72, 1, 'checked', 'checked', '2021-05-10 00:42:49', '2021-05-10 00:42:49', 'Ghế Sofa dài', 2, 'chester_sofa_baya_5298.jpg', '<p>Ghế Sofa dài<br></p>', 800000, 'checked'),
(22, 'Thùng đựng đồ', 'thung-dung-do', 900000, 23, 73, 1, 'checked', 'checked', '2021-05-10 00:43:28', '2021-05-16 23:15:44', 'Bộ bàn ăn', 2, 'april_storage_box_baya_7300169.jpg', '<p>Bộ bàn ăn<br></p>', 750000, 'checked'),
(23, 'Bàn làm việc', 'ban-lam-viec', 120000, 23, 73, 1, 'checked', 'checked', '2021-05-16 23:24:25', '2021-05-18 19:21:38', 'Sản phẩm bàn làm việc', 4, 'ban-laptop-figaro-1703-baya.vn.jpg', 'Sản phẩm bàn làm việc', NULL, 'checked'),
(24, 'KỆ SÁCH SUND', 'ke-sach-sund', 900000, 30, 72, 1, 'checked', 'checked', '2021-05-17 01:59:57', '2021-05-18 18:39:16', 'Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.', 2, 'joy_children_bookshelf_baya_2000421.jpg', 'Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.', 100000, 'checked'),
(25, 'Bàn làm việc mới', 'ban-lam-viec-moi', 900000, 10, 72, 1, 'checked', 'checked', '2021-05-18 18:40:52', '2021-05-18 19:29:05', 'Bàn làm việc mới', 3, '6000138.jpg', 'Bàn làm việc mới', 100000, 'checked'),
(26, 'Bàn làm việc mới1', 'ban-lam-viec-moi1', 100000, 10, 73, 1, 'checked', 'checked', '2021-05-18 18:42:18', '2021-05-18 18:42:18', 'Bàn làm việc mới1', 2, '6000201.jpg', '<p>Bàn làm việc mới<br></p>', 100000, 'checked'),
(27, 'Gối trang trái', 'goi-trang-trai', 900000, 30, 72, 1, 'checked', 'checked', '2021-05-18 19:23:21', '2021-06-16 07:52:35', 'Gối trang trái', 2, '30.jpg', 'Gối trang trái', 800000, 'checked'),
(28, 'Tranh treo tường', 'tranh-treo-tuong', 900000, 23, 73, 1, 'checked', 'checked', '2021-05-23 11:37:19', '2021-05-23 11:37:19', 'Tranh treo tường', 3, 'gallery_print_on_canvas_baya_2000332.jpg', '<p>Tranh treo tường<br></p>', 100000, 'checked'),
(29, 'Ghế trẻ em', 'ghe-tre-em', 120000, 30, 72, 1, 'checked', 'checked', '2021-05-23 11:38:22', '2021-05-23 11:38:22', 'Ghế trẻ em', 1, 'joy_children_chair_baya_2000418.jpg', '<p>Ghế trẻ em<br></p>', 100000, 'checked'),
(30, 'Bàn trẻ em', 'ban-tre-em', 180000, 30, 73, 1, 'checked', '', '2021-05-23 11:38:59', '2021-05-23 11:38:59', 'Bàn trẻ em', 2, 'joy_children_table_baya_2000417.jpg', '<p>Bàn trẻ em<br></p>', NULL, 'checked'),
(31, 'Tủ quần áo', 'tu-quan-ao', 1800000, 23, 72, 1, 'checked', 'checked', '2021-05-23 11:40:32', '2021-05-23 11:40:32', 'Tủ quần áo', 2, 'sund_bookcase_baya_2000444.jpg', '<p>Tủ quần áo<br></p>', 1500000, 'checked'),
(32, 'Giường harris', 'giuong-harris', 900000, 23, 73, 1, 'checked', '', '2021-05-23 11:43:31', '2021-05-23 11:43:31', 'Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.', 5, 'giuong-harris-1028485-1-baya.vn_2.jpg', '<p>Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.<br></p>', 100000, 'checked'),
(33, 'Giường Ali', 'giuong-ali', 2000000, 30, 72, 1, 'checked', 'checked', '2021-05-23 11:44:15', '2021-05-23 11:44:15', 'Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.', 6, 'giuong-ali-1000412-1-baya.vn.jpg', '<p>Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.<br></p>', 1800000, 'checked'),
(34, 'Giường Albany', 'giuong-albany', 2000000, 23, 72, 1, 'checked', '', '2021-05-23 11:45:02', '2021-05-23 11:45:02', 'Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.', 6, 'albany_bed_baya_5045.jpg', '<p>Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.<br></p>', 1800000, 'checked'),
(35, 'Ghế Sofa da', 'ghe-sofa-da', 2000000, 30, 74, 1, 'checked', 'checked', '2021-05-28 08:35:02', '2021-05-28 08:35:02', 'Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.', 3, 'BERNIE_Bed_with_drawers_Natural_Melamine_UMA_1053852_1053876_corner_1_.jpg', '<p>Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.</p>', 1800000, 'checked'),
(37, 'Ghế Sofa da', 'ghe-sofa-da', 200000, 23, 84, 1, 'checked', 'checked', '2021-05-28 08:36:28', '2021-05-28 08:36:28', 'Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.', 2, 'emma_bed_baya_5224_1_1.jpg', '<p>Được thiết kế theo phong cách châu Á đương đại, giường ngủ ALBANY góp phần làm hoàn hảo cho không gian phòng ngủ của bạn. Giường được làm từ gỗ sồi cao cấp, phủ lớp veneer màu nâu đậm sang trọng.<br></p>', 1800000, 'checked'),
(38, 'Ghế trang trí', 'ghe-trang-tri', 2000000, 300, 72, 1, 'checked', 'checked', '2021-06-16 08:05:37', '2021-06-16 08:05:37', 'Ghế trang trí', 3, '12.jpg', '<p>Ghế trang trí<br></p>', 1800000, 'checked');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_owners`
--

CREATE TABLE `product_owners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `owner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_owners`
--

INSERT INTO `product_owners` (`id`, `created_at`, `updated_at`, `owner_name`) VALUES
(1, '2021-05-04 03:48:06', '2021-05-11 03:48:06', 'Nội Thất Mộc Việt'),
(2, '2021-05-04 03:48:06', '2021-05-11 03:48:06', 'Nội Thất Minh Tiến'),
(3, '2021-05-04 03:48:06', '2021-05-11 03:48:06', 'Nội Thất Mộc Việt'),
(4, '2021-05-04 03:48:06', '2021-05-11 03:48:06', 'Nội Thất Đại Phát '),
(5, '2021-05-04 03:48:06', '2021-05-11 03:48:06', 'Nội Thất Cổ Điển'),
(6, '2021-05-04 03:48:06', '2021-05-11 03:48:06', 'Nhựa & Inox Qui Phúc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `siders`
--

CREATE TABLE `siders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `statisticals`
--

CREATE TABLE `statisticals` (
  `id` int(11) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `sales` varchar(200) NOT NULL,
  `profit` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `statisticals`
--

INSERT INTO `statisticals` (`id`, `order_date`, `sales`, `profit`, `quantity`, `total_order`) VALUES
(1, '2020-11-08', '20000000', '7000000', 90, 10),
(2, '2020-11-07', '68000000', '9000000', 60, 8),
(3, '2020-11-06', '30000000', '3000000', 45, 7),
(4, '2020-11-05', '45000000', '3800000', 30, 9),
(5, '2020-11-04', '30000000', '1500000', 15, 12),
(6, '2020-11-03', '8000000', '700000', 65, 30),
(7, '2020-11-02', '28000000', '23000000', 32, 20),
(8, '2020-11-01', '25000000', '20000000', 7, 6),
(9, '2020-10-31', '36000000', '28000000', 40, 15),
(10, '2020-10-30', '50000000', '13000000', 89, 19),
(11, '2020-10-29', '20000000', '15000000', 63, 11),
(12, '2020-10-28', '25000000', '16000000', 94, 14),
(13, '2020-10-27', '32000000', '17000000', 16, 10),
(14, '2020-10-26', '33000000', '19000000', 14, 5),
(15, '2020-10-25', '36000000', '18000000', 22, 12),
(16, '2020-10-24', '34000000', '20000000', 33, 20),
(17, '2020-10-23', '25000000', '16000000', 94, 14),
(18, '2020-10-22', '12000000', '7000000', 16, 10),
(19, '2020-10-21', '63000000', '19000000', 14, 5),
(20, '2020-10-20', '66000000', '18000000', 22, 12),
(21, '2020-10-19', '74000000', '20000000', 33, 20),
(22, '2020-10-18', '63000000', '19000000', 14, 5),
(23, '2020-10-17', '66000000', '18000000', 23, 12),
(24, '2020-10-16', '74000000', '20000000', 32, 20),
(25, '2020-10-15', '63000000', '19000000', 14, 5),
(26, '2020-10-14', '66000000', '18000000', 23, 12),
(27, '2020-10-13', '74000000', '20000000', 33, 20),
(28, '2020-10-12', '66000000', '18000000', 23, 12),
(29, '2020-10-11', '74000000', '20000000', 10, 20),
(30, '2020-10-10', '63000000', '19000000', 14, 5),
(31, '2020-10-09', '66000000', '18000000', 23, 12),
(32, '2020-10-08', '74000000', '20000000', 15, 20),
(33, '2020-10-07', '66000000', '18000000', 23, 12),
(34, '2020-10-06', '74000000', '20000000', 30, 22),
(35, '2020-10-05', '66000000', '18000000', 23, 12),
(36, '2020-10-04', '74000000', '20000000', 32, 20),
(37, '2020-10-03', '63000000', '19000000', 14, 5),
(38, '2020-10-02', '66000000', '18000000', 23, 12),
(39, '2020-10-01', '74000000', '20000000', 32, 20),
(40, '2020-09-30', '63000000', '19000000', 14, 5),
(41, '2020-09-29', '66000000', '18000000', 23, 12),
(42, '2020-09-28', '74000000', '20000000', 15, 20),
(43, '2020-09-27', '66000000', '18000000', 23, 12),
(44, '2020-09-26', '74000000', '20000000', 30, 22),
(45, '2020-09-25', '66000000', '18000000', 23, 12),
(46, '2020-09-24', '74000000', '20000000', 32, 20),
(47, '2020-09-23', '63000000', '19000000', 14, 5),
(48, '2020-09-22', '66000000', '18000000', 23, 12),
(49, '2020-09-21', '74000000', '20000000', 32, 20),
(50, '2020-09-20', '63000000', '19000000', 14, 5),
(51, '2020-09-19', '66000000', '18000000', 23, 12),
(52, '2020-09-18', '74000000', '20000000', 15, 20),
(53, '2020-09-17', '66000000', '18000000', 23, 12),
(54, '2020-09-16', '74000000', '20000000', 30, 22),
(55, '2020-09-15', '66000000', '18000000', 23, 12),
(56, '2020-09-14', '74000000', '20000000', 32, 20),
(57, '2020-09-13', '63000000', '19000000', 14, 5),
(58, '2020-09-12', '66000000', '18000000', 23, 12),
(59, '2020-09-11', '74000000', '20000000', 32, 20),
(60, '2020-09-10', '63000000', '19000000', 14, 5),
(61, '2020-09-09', '66000000', '18000000', 23, 12),
(62, '2020-09-08', '74000000', '20000000', 15, 20),
(63, '2020-09-07', '66000000', '18000000', 23, 12),
(64, '2020-09-06', '74000000', '20000000', 30, 22),
(65, '2020-09-05', '66000000', '18000000', 23, 12),
(66, '2020-09-04', '74000000', '20000000', 32, 20),
(67, '2020-09-03', '63000000', '19000000', 14, 5),
(68, '2020-09-02', '66000000', '18000000', 23, 12),
(69, '2020-09-01', '74000000', '20000000', 32, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vũ Chung Dũng', 'thoinhepan02@gmail.com', NULL, 'vuchungdung', NULL, '2021-05-16 17:31:10', '2021-05-03 17:31:16');

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
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
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
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_owners`
--
ALTER TABLE `product_owners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `siders`
--
ALTER TABLE `siders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `statisticals`
--
ALTER TABLE `statisticals`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product_owners`
--
ALTER TABLE `product_owners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `siders`
--
ALTER TABLE `siders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `statisticals`
--
ALTER TABLE `statisticals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
