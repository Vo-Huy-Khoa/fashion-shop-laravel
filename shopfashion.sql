-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th1 26, 2022 lúc 03:07 PM
-- Phiên bản máy phục vụ: 5.7.33
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopfashion`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'size', 'S', NULL, NULL),
(2, 'size', 'M', NULL, NULL),
(3, 'size', 'L', NULL, NULL),
(4, 'size', 'XL', NULL, NULL),
(5, 'color', '#000000', NULL, NULL),
(6, 'color', '#FFFFFF', NULL, NULL),
(7, 'color', '#FF0000', NULL, NULL),
(8, 'color', '#FFFF00', NULL, NULL),
(9, 'color', '#0000FF', NULL, NULL),
(10, 'color', '#008000', NULL, NULL),
(11, 'color', '#808080', NULL, NULL),
(12, 'color', '#FF00FF', NULL, NULL),
(13, 'color', '#000080', NULL, NULL),
(14, 'color', '#800080', NULL, NULL),
(15, 'size', '28', NULL, NULL),
(16, 'size', '30', NULL, NULL),
(17, 'size', '31', NULL, NULL),
(18, 'size', '32', NULL, NULL),
(19, 'size', '29', NULL, NULL),
(20, 'color', '#00FF00', '2021-11-14 19:31:54', '2021-11-14 19:31:54'),
(21, 'color', '#00FFFF', '2021-11-14 19:33:24', '2021-11-14 19:33:24'),
(23, 'color', '#C0C0C0', '2021-11-14 19:34:37', '2021-11-14 19:34:37'),
(24, 'color', '#800000', '2021-11-14 19:34:47', '2021-11-14 19:34:47'),
(25, 'size', 'Free', '2021-11-14 19:49:02', '2021-11-14 19:49:02'),
(26, 'size', '30', '2021-11-14 19:49:17', '2021-11-14 19:49:17'),
(27, 'size', '31', '2021-11-14 19:49:21', '2021-11-14 19:49:21'),
(28, 'size', '32', '2021-11-14 19:49:24', '2021-11-14 19:49:24'),
(29, 'size', '33', '2021-11-14 19:49:27', '2021-11-14 19:49:27'),
(30, 'color', '#f0bf56', '2021-11-14 19:55:14', '2021-11-14 19:55:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `categories_id` int(10) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci,
  `brief` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `categories_id`, `title`, `brief`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 9, 'Top 10 shop bán áo len nữ đẹp nhất Đà Nẵng', 'Thời trang là một phần không thể thiếu đối với cuộc sống của mỗi người, đặc biệt là đối với các bạn nữ. Phái đẹp của chúng ta bao giờ cũng muốn ăn mặc thật đẹp dù ở bất kì nơi đâu, bất kì thời điểm nào. Mùa hè thì bạn cần những chiếc váy đầm thật xinh để diện xuống phố, mùa đông thì cần những trang phục vừa giữ ấm vừa thời trang. Trong các loại đồ thu đông thì áo len luôn được nhiều chị em yêu thích bởi bên cạnh khả năng giữ ấm thì item này có chất vải mềm mịn, dễ chịu, dễ dàng kết hợp với những loại trang phục thu đông khác để tạo nên set đồ hợp thời trang và trendy. Trong bài viết ngày hôm nay, hãy cùng mình tìm hiểu những shop bán áo len nữ đẹp và chất nhất Đà Nẵng bạn nhé.', '<p><strong>1.FM Style</strong> l&agrave; shop chuy&ecirc;n kinh doanh thời trang d&agrave;nh cho giới trẻ v&agrave; l&agrave; một trong những thương hiệu thời trang lớn nhất v&agrave; được y&ecirc;u th&iacute;ch nhất tại Đ&agrave; Nẵng. Nhưng l&yacute; do tại sao FM Style lại được sự ủng hộ nhiệt t&igrave;nh đến như vậy? Đ&oacute; l&agrave; v&igrave; sản phẩm của shop lu&ocirc;n đ&aacute;p ứng được thị hiếu của kh&aacute;ch h&agrave;ng v&agrave; gi&aacute; th&agrave;nh v&ocirc; c&ugrave;ng phải chăng. FM Style ch&uacute; trọng về thời trang theo xu hướng, theo m&ugrave;a,... V&agrave; dĩ nhi&ecirc;n, thời trang thu đ&ocirc;ng th&igrave; tại FM Style kh&ocirc;ng thể n&agrave;o thiếu những mẫu &aacute;o len xinh xắn v&agrave; ấm &aacute;p. FM Style l&agrave; sự lựa chọn đầu ti&ecirc;n cho c&aacute;c bạn nữ ở Đ&agrave; Nẵng khi chọn mua &aacute;o len. Mặt h&agrave;ng &aacute;o len ở FM Style c&oacute; rất nhiều mẫu m&atilde; đẹp nhưng gi&aacute; th&agrave;nh lại rất tốt. Bạn cũng c&oacute; thể t&igrave;m được những chiếc &aacute;o kho&aacute;c len cực k&igrave; dễ thương cho m&igrave;nh tại FM Style. Một chiếc &aacute;o len ở đ&acirc;y c&oacute; gi&aacute; chỉ từ 200.000 đồng cho c&aacute;c bạn nữ ch&uacute;ng ta tha hồ lựa m&agrave;u, lựa kiểu.</p>\r\n\r\n<p><strong>2.Her Shop</strong> Địa chỉ b&aacute;n &aacute;o len nữ đẹp nhất tại Đ&agrave; Nẵng tiếp theo m&agrave; Sakura Fashion muốn giới thiệu cho c&aacute;c bạn nữ đ&oacute; l&agrave; Her Shop. Chắc hẳn c&aacute;c bạn nữ ở Đ&agrave; Nẵng phần lớn đều biết đ&acirc;y l&agrave; cửa h&agrave;ng quần &aacute;o v&agrave; phụ kiện đẹp nhất nh&igrave;. &Aacute;o len l&agrave; thời trang kh&ocirc;ng thể thiếu đối với một cửa h&agrave;ng thời trang lớn như Her Shop. Tuy nhi&ecirc;n, mẫu m&atilde; ở đ&acirc;y kh&ocirc;ng qu&aacute; nhiều mặc d&ugrave; rất đẹp v&agrave; rất được ưa chuộng.</p>\r\n\r\n<p><strong>3.Mee House </strong>Toạ lạc tr&ecirc;n con đường L&ecirc; Duẩn sầm uất, d&agrave;y đặc những cửa h&agrave;ng thời trang nhưng Mee House vẫn lu&ocirc;n toả s&aacute;ng, nhất l&agrave; v&agrave;o m&ugrave;a đ&ocirc;ng. Mee House c&oacute; sẵn cả một album về &aacute;o len cho c&aacute;c bạn nữ tha hồ lựa chọn. Bạn sẽ kh&oacute; c&oacute; thể đi đ&acirc;u m&agrave; kiếm được một shop thời trang &aacute;o len đẹp - độc - chất ở Đ&agrave; Nẵng như Mee House.</p>\r\n\r\n<p><strong>4.LeRit Store</strong> Th&ecirc;m một cửa h&agrave;ng thời trang &aacute;o len hot hit tại Đ&agrave; Nẵng cho c&aacute;c bạn nữ xinh đẹp bỏ t&uacute;i nữa đ&oacute; l&agrave; LeRit Store. Đ&acirc;y l&agrave; shop thời trang ch&uacute; trọng xu hướng v&agrave; thị hiếu của kh&aacute;ch h&agrave;ng, m&agrave; &aacute;o len đang dần trở th&agrave;nh style của c&aacute;c bạn nữ hiện đại n&ecirc;n l&uacute;c n&agrave;o LeRit Store cũng c&oacute; hẳn một album thời trang &aacute;o len cho c&aacute;c bạn lựa chọn.</p>\r\n\r\n<p><strong>5.B&uacute;n Store</strong> B&uacute;n Store l&agrave; cửa h&agrave;ng thời trang &aacute;o len cuối c&ugrave;ng trong b&agrave;i viết n&agrave;y m&agrave; Sakura Fashion muốn giới thiệu đến c&aacute;c bạn. C&oacute; lẽ c&aacute;c bạn nữ ở Đ&agrave; Nẵng kh&ocirc;ng c&ograve;n xa lạ g&igrave; với shop thời trang B&uacute;n Store nữa phải kh&ocirc;ng nhỉ? Bạn sẽ dễ d&agrave;ng t&igrave;m được cho m&igrave;nh một chiếc &aacute;o len ưng &yacute; tại B&uacute;n Store mặc d&ugrave; &aacute;o len l&agrave; thời trang rất kh&oacute; chọn lựa. C&aacute;c mẫu &aacute;o len tại shop được ch&uacute; trọng về mẫu m&atilde; v&agrave; chất lượng nhưng gi&aacute; cả lại phải chăng. &Aacute;o len c&aacute; t&iacute;nh, &aacute;o len b&aacute;nh b&egrave;o,... đều được t&igrave;m thấy ở B&uacute;n Store.</p>', 'lS3o_1235-fm-style-1437.jpg', '2021-11-06 09:18:35', '2021-11-06 09:18:35'),
(2, 11, 'Top 14 shop bán quần jean nữ đẹp nhất TPHCM', 'Con gái luôn luôn có một câu than phiền đó là \"hôm nay chẳng có gì mặc cả\" trong khi tủ đồ của mình thì đã sắp tràn cả ra sàn nhà. Cũng phải thôi, vì con gái lúc nào cũng cần phải chỉnh chu, xinh đẹp thì mới có thể tự tin mà bước chân xuống phố. Chính vì thế mà thời trang nữ rất đa dạng phong phú về mẫu mã từ áo khoác, áo thun, áo sơ mi đến quần jean, quần tây, các loại váy đầm... Và quần jean (hay còn gọi là quần bò ở miền Bắc) là một trong những trang phục không thể thiếu trong tủ đồ của mỗi bạn nữ, đây là trang phục được đánh giá là dễ phối, dễ mặc và không bao giờ lo lỗi mốt.', '<p><strong>1.ToTo Shop</strong></p>\r\n\r\n<p>Đ&acirc;y l&agrave; một chuỗi cửa h&agrave;ng thời trang chuy&ecirc;n về trang phục d&agrave;nh cho giới trẻ. Do đ&oacute; đ&acirc;y l&agrave; địa chỉ kh&ocirc;ng thể bỏ qua cho c&aacute;c t&iacute;n đồ thời trang. C&aacute;c mặt h&agrave;ng của shop v&ocirc; c&ugrave;ng đa dạng từ gi&agrave;y nam cho đến gi&agrave;y nữa, từ trang phục nam cho đến trang phục nữ v&agrave; c&ograve;n c&oacute; cả c&aacute;c phụ kiện vừa đẹp vừa chất cho c&aacute;c bạn tha hồ lựa chọn. V&igrave; thế n&ecirc;n kh&ocirc;ng kh&oacute; để c&aacute;c bạn nữ c&oacute; thể lựa chọn cho m&igrave;nh một style quần jean y&ecirc;u th&iacute;ch ở đ&acirc;y. V&igrave; xu hướng shop hướng đến l&agrave; trẻ trung v&agrave; năng động do đ&oacute; rất ph&ugrave; hợp cho những bạn nữ y&ecirc;u th&iacute;ch phong c&aacute;ch c&aacute; t&iacute;nh v&agrave; th&iacute;ch l&agrave;m mới m&igrave;nh. Những c&aacute;c bạn nữ ưa chuộng c&aacute;c mẫu quần cổ điển cũng đừng lo nh&eacute;, mẫu m&atilde; ở shop rất đa dạng do đ&oacute; bạn cũng c&oacute; thể thoải m&aacute;i lựa chọn những mẫu quần ph&ugrave; hợp với m&igrave;nh. Gi&aacute; cả ở đ&acirc;y cũng kh&ocirc;ng qu&aacute; khắt khe, mỗi chiếc quần jean c&oacute; gi&aacute; ch&ecirc;nh lệch từ 250k cho đến 350k, tương đối ph&ugrave; hợp so với gi&aacute; cả tr&ecirc;n thị trường. Vậy n&ecirc;n nhớ gh&eacute; thăm Toto Shop bạn nh&eacute;.</p>\r\n\r\n<p><strong>2.&Aacute;o kho&aacute;c củ cải</strong></p>\r\n\r\n<p>T&ecirc;n gọi l&agrave; shop &Aacute;o kho&aacute;c củ cải thế nhưng khi đến với shop n&agrave;y, bạn sẽ phải ngạc nhi&ecirc;n trước những mẫu quần jean nữ si&ecirc;u chất, si&ecirc;u c&aacute; t&iacute;nh. Shop chuy&ecirc;n b&aacute;n c&aacute;c mẫu quần &aacute;o c&aacute; t&iacute;nh d&agrave;nh cho nữ v&agrave; c&ograve;n c&oacute; cả những set đầm, v&aacute;y đầy nữ t&iacute;nh d&agrave;nh cho những c&ocirc; n&agrave;ng dịu d&agrave;ng. Đặc biệt những mẫu quần jean tại đ&acirc;y lu&ocirc;n được cập nhật theo xu thế của giới trẻ, c&aacute;c mặt h&agrave;ng th&igrave; rất đa dạng từ quần jean d&agrave;i, short cho đến v&aacute;y jean. Tất cả đều l&agrave; những mẫu quần đậm phong c&aacute;ch H&agrave;n Quốc m&agrave; c&aacute;c t&iacute;n đồ thời trang nữ kh&ocirc;ng thể bỏ qua để l&agrave;m mới cho tủ đồ của m&igrave;nh. Một tin vui nữa l&agrave; gi&aacute; quần jean ở đ&acirc;y cũng cực k&igrave; mềm nh&eacute;, chỉ cần bỏ ra chưa tới 300k bạn đ&atilde; c&oacute; thể ẵm trọn cho m&igrave;nh một style quần jean m&agrave; m&igrave;nh y&ecirc;u th&iacute;ch rồi đấy. Nhanh ch&acirc;n gh&eacute; qua shop lựa nha!</p>\r\n\r\n<p><strong>3.LEN</strong></p>\r\n\r\n<p>Đ&acirc;y cũng l&agrave; một Shop tại Hồ Ch&iacute; Minh kh&ocirc;ng thể bỏ qua nếu bạn đang hoang mang kh&ocirc;ng biết n&ecirc;n chọn mua quần jean ở đ&acirc;u. Xu hướng thời trang lu&ocirc;n thay đổi qua từng ng&agrave;y v&agrave; bạn kh&ocirc;ng biết m&igrave;nh n&ecirc;n mặc g&igrave; để ph&ugrave; hợp với mốt ng&agrave;y h&ocirc;m nay. Đừng lo, h&atilde;y dừng ch&acirc;n b&ecirc;n LEN, chắc chắn bạn sẽ lựa chọn được cho m&igrave;nh set đồ vừa ưng &yacute; vừa hợp thời trang. Tại đ&acirc;y shop chuy&ecirc;n b&aacute;n những mẫu trang phục d&agrave;nh cho giới trẻ như đầm, v&aacute;y, &aacute;o thun, &aacute;o sơ mi, quần jean, quần legging. C&aacute;c mẫu trang phục của shop được phối sẵn , do đ&oacute; nếu bạn n&agrave;o cảm thấy kh&oacute; khăn trong việc chọn phối đồ c&oacute; thể thẳng tay chọn ngay cho m&igrave;nh một set đồ c&oacute; sẵn tại shop. Những mẫu quần jean của shop lu&ocirc;n l&agrave; những mẫu mới nhất, đi theo xu hướng thời trang từng ng&agrave;y của giới trẻ,c&oacute; cả quần jean baggy, quần jean &ocirc;m hay cả quần jean short. C&aacute;c mẫu quần jean của LEN c&oacute; gi&aacute; từ 250k đến 350k n&ecirc;n n&agrave;ng c&oacute; thể thoải m&aacute;i lựa chọn m&agrave; kh&ocirc;ng lo sợ bị sock gi&aacute; nh&eacute;.</p>\r\n\r\n<p><strong>4.Nh&agrave; kho Liti</strong></p>\r\n\r\n<p>Nh&agrave; kho Liti l&agrave; một trong những shop được c&aacute;c bạn trẻ đ&aacute;nh gi&aacute; l&agrave; gi&aacute; vừa rẻ m&agrave; đồ lại si&ecirc;u chất. C&aacute;c mặt h&agrave;ng tại shop v&ocirc; c&ugrave;ng đa dạng từ những mẫu trang phục dịu d&agrave;ng cho đến những mẫu trang phục c&aacute; t&iacute;nh hay thanh lịch. Ngo&agrave;i ra shop c&ograve;n phối sẵn c&aacute;c mẫu quần &aacute;o c&ugrave;ng với phụ kiện để bạn c&oacute; thể dễ d&agrave;ng lựa chọn cho m&igrave;nh set đồ ưng &yacute;. D&ugrave; shop n&agrave;y nằm khuất sau một con hẻm nhỏ ở quận 1 v&agrave; c&oacute; thể kh&oacute; khăn cho những bạn muốn t&igrave;m đến shop. Thế nhưng sẽ kh&ocirc;ng bỏ c&ocirc;ng v&ocirc; &iacute;ch khi bạn t&igrave;m đến đ&acirc;y v&igrave; bạn sẽ bị cho&aacute;ng ngợp bởi thế giới đầy m&agrave;u sắc của Nh&agrave; kho Liti. Gi&aacute; cho mỗi chiếc quần jean ở đ&acirc;y khoảng từ 300-400k nhưng bạn chắc chắn sẽ h&agrave;i l&ograve;ng về chất lượng tại đ&acirc;y v&igrave; đa phần những mẫu trang phục đều l&agrave; h&agrave;ng nhập khẩu v&agrave; được chọn lọc kĩ lưỡng trước khi b&agrave;y b&aacute;n. Do đ&oacute; chất lượng lu&ocirc;n l&agrave; ti&ecirc;u ch&iacute; m&agrave; shop đặt l&ecirc;n h&agrave;ng đầu.</p>\r\n\r\n<p><strong>5.Bloomode</strong></p>\r\n\r\n<p>Bạn nữ n&agrave;o th&iacute;ch phong c&aacute;ch bụi v&agrave; chất th&igrave; kh&ocirc;ng thể bỏ qua địa chỉ n&agrave;y. Bloomode lu&ocirc;n theo kịp xu hướng thời trang của giới trẻ trong c&aacute;ch mix trang phục kh&ocirc;ng thể n&agrave;o chất hơn. C&aacute;c d&ograve;ng thời trang của shop đa phần mang phong c&aacute;ch trẻ trung, năng động v&agrave; c&aacute; t&iacute;nh. Do đ&oacute; c&aacute;c mặt h&agrave;ng chủ y&ecirc;u của Bloomode l&agrave; &aacute;o thun, &aacute;o kho&aacute;c thể thao v&agrave; quần jean. Những phong c&aacute;ch quần jean mới, đậm chất H&agrave;n Quốc được shop mix c&ugrave;ng với những chiếc &aacute;o thun,&nbsp;<a href=\"http://sakurafashion.vn/top-shop-ban-ao-so-mi-nu-dep-uy-tin-nhat-tphcm-3668.html\" target=\"_blank\">&aacute;o sơ mi</a>&nbsp;c&aacute; t&iacute;nh th&ecirc;m v&agrave;o đ&oacute; l&agrave; &aacute;o kho&aacute;c v&agrave; c&aacute;c phụ kiện đi k&egrave;m. Chắc chắn &nbsp;sẽ l&agrave; một gợi &yacute; cho bạn n&agrave;o chưa định h&igrave;nh được phong c&aacute;ch thời trang của m&igrave;nh. Ch&iacute;nh v&igrave; những ưu điểm đ&oacute; n&ecirc;n kh&ocirc;ng phải kh&oacute; hiểu về việc Bloomode lu&ocirc;n được c&aacute;c bạn nữ săn đ&oacute;n</p>', '8cMX_JEAN_NU_066001_(thun_nu_k4_(2)).jpg', '2021-11-06 09:27:41', '2021-11-06 09:27:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `class_id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(3, 2, 'Quần Dài', NULL, 'ynyF_quan-tay-xanh-den.jpg', '2021-11-02 06:04:17', '2021-11-02 10:01:28'),
(4, 5, 'Giày thể thao', NULL, 'DjPe_ce2813c4dc10e4ebc18c8ea312580d1d.jpg', '2021-11-02 06:04:40', '2021-11-02 19:27:56'),
(5, 6, 'Mũ không quai', NULL, 'N6QE_5d4d2ac310532-051.jpg', '2021-11-02 06:06:25', '2021-11-02 06:06:25'),
(6, 6, 'mũ có quai', NULL, '6H6m_2fccabd60be27000fd61b7cdfdb6ef25.jpg', '2021-11-02 06:06:41', '2021-11-02 06:06:41'),
(7, 1, 'Áo thun', NULL, 'UJbi_5c64475c9c4ab9a4a344a4d5876e12ed.jpg', '2021-11-02 06:07:21', '2021-11-02 06:07:21'),
(8, 1, 'Áo sơ mi', NULL, 'zrdT_be9cb90dcda22afc73b3.jpg', '2021-11-02 06:08:20', '2021-11-02 06:08:20'),
(9, 1, 'Áo Khoác', NULL, 'N5rN_3193b029538604a0e2bb66449043467c.jpg', '2021-11-02 09:50:25', '2021-11-02 09:50:25'),
(10, 2, 'Quần Short', NULL, 'CEMV_6caed43e738c9772417565f09f36d055.jpg', '2021-11-02 13:49:33', '2021-11-02 13:49:33'),
(11, 2, 'Quần Jeans', NULL, 'tqGa_216202141650_IMG_1712.jpg', '2021-11-02 13:54:56', '2021-11-02 13:54:56'),
(12, 7, 'Đồ ngủ', NULL, 'FkMR_875f0ea0d982fb23cca97dadf436ec30.jpg', '2021-11-02 14:08:05', '2021-11-02 14:08:05'),
(13, 1, 'Áo Hoodie', NULL, 'MF8W_Ao-khoac-hoodie-flexbile-toi-gian-mau-xanh-duong.jpg', '2021-11-02 18:49:35', '2021-11-02 18:49:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `classifies`
--

CREATE TABLE `classifies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `classifies`
--

INSERT INTO `classifies` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Áo', NULL, '', '2021-10-31 18:02:57', '2021-10-31 18:02:57'),
(2, 'Quần', NULL, '', '2021-10-31 18:03:05', '2021-10-31 18:03:05'),
(3, 'Thắt lưng', NULL, '', '2021-10-31 18:03:25', '2021-10-31 18:03:25'),
(4, 'Váy', NULL, '', '2021-10-31 18:03:32', '2021-10-31 18:03:32'),
(5, 'Giày', NULL, '', '2021-10-31 18:03:38', '2021-10-31 18:03:38'),
(6, 'Mũ', NULL, '', '2021-11-02 06:05:55', '2021-11-02 06:05:55'),
(7, 'Đồ bộ', NULL, '', '2021-11-02 14:07:49', '2021-11-02 14:07:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 2, 16, 'Nón này đẹp quá!', '2021-11-11 18:41:03', '2021-11-11 18:41:03'),
(2, 2, 22, 'Áo này đẹp!', '2021-11-11 18:41:45', '2021-11-11 18:41:45'),
(3, 6, 16, 'đẹp', '2022-01-08 08:55:21', '2022-01-08 08:55:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_13_134036_create_classifies_table', 1),
(6, '2021_10_13_134056_create_categories_table', 1),
(7, '2021_10_18_090809_create_shippings_table', 1),
(8, '2021_10_20_021711_create_blogs_table', 1),
(9, '2021_10_27_140836_create_brands_table', 1),
(10, '2021_10_30_083812_create_messages_table', 1),
(11, '2021_10_31_092104_create_attributes_table', 1),
(12, '2021_10_31_095245_create_products_table', 1),
(13, '2021_10_31_095426_create_product_attributes_table', 1),
(14, '2021_10_31_095558_create_oders_table', 1),
(15, '2021_10_31_095608_create_oder_details_table', 1),
(16, '2021_10_31_095618_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oders`
--

CREATE TABLE `oders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `size` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total` bigint(15) UNSIGNED ZEROFILL DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `oders`
--

INSERT INTO `oders` (`id`, `user_id`, `product_id`, `size`, `color`, `quantity`, `total`, `status`, `created_at`, `updated_at`) VALUES
(13, 1, 16, NULL, NULL, 3, 000000000750000, 0, '2021-11-05 18:57:27', '2022-01-07 12:33:50'),
(14, 1, 17, NULL, NULL, 3, 000000000750000, 0, '2021-11-05 18:57:38', '2022-01-07 12:33:50'),
(15, 1, 16, NULL, NULL, 3, 000000000750000, 0, '2021-11-05 19:41:15', '2022-01-07 12:33:50'),
(16, 1, 16, NULL, NULL, 3, 000000000750000, 0, '2021-11-08 14:48:31', '2022-01-07 12:33:50'),
(26, 1, 16, NULL, NULL, 1, 000000000250000, 0, '2021-12-21 14:17:51', '2022-01-07 12:33:50'),
(32, 2, 17, NULL, '12', 1, 000000000250000, 0, '2022-01-07 19:35:20', '2022-01-07 19:45:19'),
(33, 2, 25, '1', '5', 1, 000000000258000, 0, '2022-01-07 19:37:20', '2022-01-07 19:45:19'),
(34, 6, 19, '2', '5', 3, 000000000750000, 0, '2022-01-08 08:46:28', '2022-01-08 08:48:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder_details`
--

CREATE TABLE `oder_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED DEFAULT NULL,
  `shipping_id` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `oder_details`
--

INSERT INTO `oder_details` (`id`, `users_id`, `shipping_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 17, 0, '2022-01-08 08:47:32', '2022-01-08 08:48:00');

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
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `unit_price` decimal(8,2) DEFAULT NULL,
  `sale_price` decimal(8,2) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` int(10) UNSIGNED DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `unit_price`, `sale_price`, `image`, `brand`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(16, 6, 'Nón kết Mũ lưỡi trai NY đen logo đen thêu tinh tế Free size', '<p><strong>Giới thiệu N&oacute;n kết Mũ lưỡi trai NY đen logo đen th&ecirc;u tinh tế Free size</strong><br />\r\n<strong>N&oacute;n lưỡi trai NY đen logo đen cao cấp, N&oacute;n lưỡi trai xuất khẩu cực &ocirc;m đầu c&aacute; t&iacute;nh</strong>.<br />\r\n&bull;Kiểu d&aacute;ng độc đ&aacute;o: N&oacute;n lưỡi trai NY đen logo đen cao cấp, &ocirc;m đầu, vải d&agrave;y dặn kh&ocirc;ng ố v&agrave;ng chỉ th&ecirc;u tinh tế cho bạn tự tin sử dụng<br />\r\n&bull;Kiểu d&aacute;ng độc đ&aacute;o: N&oacute;n lưỡi trai NY đen logo đen cao cấp n&agrave;y l&agrave; d&agrave;nh cho bạn. Với kiểu d&aacute;ng độc đ&aacute;o, N&oacute;n lưỡi trai NY đen logo đen cao cấp như một người bạn th&acirc;n, l&agrave;m bạn giải tỏa c&aacute;c &aacute;p lực trong cuộc sống khi sử dụng che nắng che mưa<br />\r\n&bull;N&oacute;n lưỡi trai NY đen logo đen cao cấp ph&ugrave; hợp cho c&aacute;c hoạt động thể thao, thời trang, du lịch, c&oacute; thể đội đi bất cứ đ&acirc;u, dễ phối đồ, l&agrave; phụ kiện thời trang kh&ocirc;ng thể thiếu.<br />\r\n&bull;Lưỡi trai NY đen logo đen cao cấp hợp cả nam ; nữ: hợp với mọi lứa tuổi từ 12-60 tuổi</p>', '250000.00', '169000.00', 'ojrr_4eb7e55a28d18765314b4b532bf5ed22.jpg', NULL, NULL, 0, '2021-11-02 06:15:30', '2022-01-07 12:33:56'),
(17, 6, 'Nón kết Mũ lưỡi trai NY hồng logo trắng thêu tinh tế Free size', '<p><strong>Giới thiệu N&oacute;n kết Mũ lưỡi trai NY hồng logo trắng th&ecirc;u tinh tế Free size<br />\r\nN&oacute;n lưỡi trai N.Y , N&oacute;n lưỡi trai xuất khẩu cực &ocirc;m đầu c&aacute; t&iacute;nh.</strong><br />\r\n&bull;Kiểu d&aacute;ng độc đ&aacute;o: N&oacute;n lưỡi trai N.Y , &ocirc;m đầu, vải d&agrave;y dặn kh&ocirc;ng ố v&agrave;ng chỉ th&ecirc;u tinh tế cho bạn tự tin sử dụng<br />\r\n&bull;Kiểu d&aacute;ng độc đ&aacute;o: N&oacute;n lưỡi trai N.Y n&agrave;y l&agrave; d&agrave;nh cho bạn. Với kiểu d&aacute;ng độc đ&aacute;o, N&oacute;n lưỡi trai N.Y cao cấp như một người bạn th&acirc;n, l&agrave;m bạn giải tỏa c&aacute;c &aacute;p lực trong cuộc sống khi sử dụng che nắng che mưa<br />\r\n&bull;N&oacute;n lưỡi trai N.Y cao cấp ph&ugrave; hợp cho c&aacute;c hoạt động thể thao, thời trang, du lịch, c&oacute; thể đội đi bất cứ đ&acirc;u, dễ phối đồ, l&agrave; phụ kiện thời trang kh&ocirc;ng thể thiếu.<br />\r\n&bull;N&oacute;n lưỡi trai NY cao cấp ph&ugrave; hợp cả nam v&agrave; nữ: Ph&ugrave; hợp với mọi lứa tuổi từ 12-60 tuổi</p>', '250000.00', '169000.00', 'Yja8_6ef6c1a63db61448686ab370365c05cd.jpg', NULL, NULL, 0, '2021-11-02 09:35:31', '2022-01-07 12:33:56'),
(18, 6, 'Nón kết Mũ lưỡi trai NY trắng logo thêu đen dành cho nam nữ Free size - Full hộp', '<p><strong>Giới thiệu Nón k&ecirc;́t Mũ lưỡi trai NY trắng logo th&ecirc;u đen dành cho nam nữ Free size - Full h&ocirc;̣p<br />\r\nNón k&ecirc;́t - Mũ lưỡi trai NY</strong><br />\r\n️ 100% Ảnh sản phẩm thật<br />\r\n️ HO&Agrave;N TIỀN 100% nếu kh&aacute;ch nhận h&agrave;ng kh&ocirc;ng h&agrave;i l&ograve;ng về chất lượng, h&agrave;ng shop b&aacute;n đảm bảo tương đương<br />\r\n️ ĐỔI TRẢ H&Agrave;NG trong 7 ng&agrave;y với sản phẩm chưa sử dụng. Đối với sản phẩm shop gửi bị lỗi hoặc nhầm size, ch&uacute;ng tớ free ship đổi trả lu&ocirc;n<br />\r\n️ Bao gi&aacute; to&agrave;n s&agrave;n nếu h&agrave;ng chuẩn c&ugrave;ng chất lượng</p>\r\n\r\n<p><strong>TH&Ocirc;NG TIN SẢN PHẨM</strong><br />\r\nNón k&ecirc;́t - Mũ lưỡi trai NY<br />\r\nChất liệu: Vải kaki / ch&iacute;nh h&atilde;ng d&agrave;y dặn, l&ecirc;n from chuẩn đẹp vừa đầu.<br />\r\nLogo th&ecirc;u sắc n&eacute;t, chuẩn k&iacute;ch thước<br />\r\nForm mũ cứng c&aacute;p &ocirc;m đầu, m&ecirc;̀m mại<br />\r\nK&iacute;ch thước: Freesize, nam nữ đều đội đc, c&oacute; thể điều chỉnh size mũ<br />\r\nCam kết to&agrave;n bộ 100% ảnh thật v&agrave; feedback thật của kh&aacute;ch h&agrave;ng!</p>', '200000.00', '169000.00', 'q2fD_66c97b1b01d75511e63f5ce124da7377.jpg', NULL, NULL, 1, '2021-11-02 09:41:43', '2021-11-12 18:39:43'),
(19, 7, 'Áo thun UNDER Hà Nội 36 Phố Phường - UTS002', '<p><strong>Giới thiệu &Aacute;o thun UNDER H&agrave; Nội 36 Phố Phường - UTS002<br />\r\n&Aacute;o Thun UNDER H&agrave; Nội 36 Phố Phường - UTS002<br />\r\nUNDER STREETWEAR - Local Brand Vietnam.</strong><br />\r\nHiện c&oacute; rất nhiều SHOP sử dụng 100% ảnh của UNDER để b&aacute;n h&agrave;ng với chất lượng kh&ocirc;ng giống ảnh. UNDER cũng CAM KẾT 100% Sản phẩm chuẩn với H&igrave;nh ảnh v&agrave; 100% H&igrave;nh ảnh/Video được Quay/dựng bởi UNDER.<br />\r\nMong qu&yacute; kh&aacute;ch h&agrave;ng c&acirc;n nhắc khi lựa chọn - Tư vấn &amp; CSKH: Li&ecirc;n hệ qua Shopee<br />\r\n<strong>TH&Ocirc;NG TIN SẢN PHẨM:</strong><br />\r\n- H&agrave;ng chuẩn thương hiệu UNDER sản xuất, c&oacute; tem m&aacute;c ch&iacute;nh h&atilde;ng.<br />\r\n- Chất liệu: thun cotton 100%, co gi&atilde;n 2 chiều giữ form, vải mềm, vải mịn, tho&aacute;ng m&aacute;t, kh&ocirc;ng x&ugrave; l&ocirc;ng.<br />\r\n- Đường may chuẩn chỉnh, tỉ mỉ, chắc chắn.<br />\r\n- Mặc ở nh&agrave;, mặc đi chơi hoặc khi vận động thể thao. Ph&ugrave; hợp khi mix đồ với nhiều loại.<br />\r\n- Thiết kế hiện đại, trẻ trung, năng động. Dễ phối đồ.<br />\r\n<strong>TH&Ocirc;NG SỐ CHỌN SIZE:</strong><br />\r\n- Size M: 1m50-1m65 (50-60kg)<br />\r\n- Size L: 1m65-1m72 (55-65kg)<br />\r\n- Size XL: 1m72- 1m85 (60-75kg)<br />\r\n(Bảng tr&ecirc;n chỉ mang t&iacute;nh chất tham khảo, chọn mặc fom vừa vặn thoải m&aacute;i, l&ecirc;n xuống size tuỳ theo sở th&iacute;ch ăn mặc của bạn)</p>', '250000.00', '179000.00', '7Lza_5c64475c9c4ab9a4a344a4d5876e12ed.jpg', NULL, NULL, 0, '2021-11-02 09:45:40', '2022-01-08 08:48:05'),
(20, 7, 'Áo thun UNDER Essentials Tee - UTS003', '<p><strong>Giới thiệu &Aacute;o thun UNDER Essentials Tee - UTS003<br />\r\n&Aacute;o Thun Tay Lỡ UNDER Essentials H&igrave;nh In &Aacute;o Ph&ocirc;ng Cotton Nam Nữ Unisex - Local Brand Streetwear Oversize Form Rộng</strong><br />\r\nUNDER STREETWEAR - Local Brand Vietnam.<br />\r\nHiện c&oacute; rất nhiều SHOP sử dụng 100% ảnh của UNDER để b&aacute;n h&agrave;ng với chất lượng kh&ocirc;ng giống ảnh. UNDER cũng CAM KẾT 100% Sản phẩm chuẩn với H&igrave;nh ảnh v&agrave; 100% H&igrave;nh ảnh/Video được Quay/dựng bởi UNDER.<br />\r\nMong qu&yacute; kh&aacute;ch h&agrave;ng c&acirc;n nhắc khi lựa chọn - Tư vấn &amp; CSKH: Li&ecirc;n hệ qua Shopee<br />\r\n<strong>TH&Ocirc;NG TIN SẢN PHẨM:</strong><br />\r\n- H&agrave;ng chuẩn thương hiệu UNDER sản xuất, c&oacute; tem m&aacute;c ch&iacute;nh h&atilde;ng.<br />\r\n- Chất liệu: thun cotton 100%, co gi&atilde;n 2 chiều giữ form, vải mềm, vải mịn, tho&aacute;ng m&aacute;t, kh&ocirc;ng x&ugrave; l&ocirc;ng.<br />\r\n- Đường may chuẩn chỉnh, tỉ mỉ, chắc chắn.<br />\r\n- Mặc ở nh&agrave;, mặc đi chơi hoặc khi vận động thể thao. Ph&ugrave; hợp khi mix đồ với nhiều loại.<br />\r\n- Thiết kế hiện đại, trẻ trung, năng động. Dễ phối đồ.<br />\r\n<strong>TH&Ocirc;NG SỐ CHỌN SIZE:</strong><br />\r\n- Size M: 1m50-1m65 (50-60kg)<br />\r\n- Size L: 1m65 - 1m72 (55-65kg)<br />\r\n- Size XL: 1m72 - 1m85 (60-75kg)<br />\r\n(Bảng tr&ecirc;n chỉ mang t&iacute;nh chất tham khảo, chọn mặc fom vừa vặn thoải m&aacute;i, l&ecirc;n xuống size tuỳ theo sở th&iacute;ch ăn mặc của bạn)</p>', '250000.00', '139000.00', 'uVUu_78bedf0d462c6b31dccc811042ba9b3d.jpg', NULL, NULL, 1, '2021-11-02 09:48:40', '2021-11-12 18:42:37'),
(21, 9, 'Áo khoác,áo bomber thân sọc trắng form rộng unisex nam nữ mặc đều đẹp', '<p><strong>Giới thiệu &Aacute;o kho&aacute;c,&aacute;o bomber th&acirc;n sọc trắng form rộng unisex nam nữ mặc đều đẹp<br />\r\nT&ecirc;n sản phẩm: &Aacute;o kho&aacute;c,&aacute;o bomber th&acirc;n sọc trắng form rộng unisex nam nữ mặc đều đẹp</strong><br />\r\n-SHOP-UNISEX chuy&ecirc;n sỉ lẻ c&aacute;c mặc h&agrave;ng của shop l&agrave; những mẫu c&aacute;c bạn trẻ ưa chuộng ,c&aacute;c mẫu tự thiết kế l&ecirc;n form mẫu n&ecirc;n kh&ocirc;ng lo cạnh tranh về gi&aacute; v&agrave; mẫu m&atilde;<br />\r\nQuy tr&igrave;nh lấy sỉ v&agrave; c&aacute;ch thức t&iacute;nh sỉ :<br />\r\n- Lần đầu lấy h&agrave;ng đủ 10 sản phẩm ( lẫn lộn ) được t&iacute;nh sỉ, sau lấy D&Ugrave; CHỈ 1 SẢN PHẨM cũng được t&iacute;nh gi&aacute; sỉ<br />\r\n- C&aacute;c mức sỉ thay đổi theo số lượng : 10, 30, 50, 100, 200, 500 sản phẩm<br />\r\nZalo sỉ 0904875260(Mai Thi&ecirc;n Duy)<br />\r\n<strong>&gt;&gt; Size &aacute;o 3 size:</strong><br />\r\nM (40kg-55kg)<br />\r\nL (56kg-65kg)<br />\r\nXL(66kg-75kg)</p>', '67000.00', '50000.00', 'BpTR_88bf6004fb63a3a7b71a6031970dc615.jpg', NULL, NULL, 1, '2021-11-02 09:52:23', '2021-11-12 18:43:29'),
(22, 9, 'Áo hoodie nỉ bông siêu dày in hình họa tiết DANICA 2 màu đen trắng nam nữ mặc đều đẹp', '<p><strong>Giới thiệu &Aacute;o hoodie nỉ b&ocirc;ng si&ecirc;u d&agrave;y in h&igrave;nh họa tiết DANICA 2 m&agrave;u đen trắng nam nữ mặc đều đẹp</strong><br />\r\nT&ecirc;n sản phẩm: &Aacute;o hoodie nỉ b&ocirc;ng si&ecirc;u d&agrave;y in h&igrave;nh họa tiết DANICA 2 m&agrave;u đen trắng nam nữ mặc đều đẹp<br />\r\n-SHOP-UNISEX chuy&ecirc;n sỉ lẻ c&aacute;c mặc h&agrave;ng của shop l&agrave; những mẫu c&aacute;c bạn trẻ ưa chuộng ,c&aacute;c mẫu tự thiết kế l&ecirc;n form mẫu n&ecirc;n kh&ocirc;ng lo cạnh tranh về gi&aacute; v&agrave; mẫu m&atilde;<br />\r\nQuy tr&igrave;nh lấy sỉ v&agrave; c&aacute;ch thức t&iacute;nh sỉ :<br />\r\n- Lần đầu lấy h&agrave;ng đủ 10 sản phẩm ( lẫn lộn ) được t&iacute;nh sỉ, sau lấy D&Ugrave; CHỈ 1 SẢN PHẨM cũng được t&iacute;nh gi&aacute; sỉ<br />\r\n- C&aacute;c mức sỉ thay đổi theo số lượng : 10, 30, 50, 100, 200, 500 sản phẩm<br />\r\nZalo sỉ 0904875260(Mai Thi&ecirc;n Duy)<br />\r\n<strong>&gt;&gt; Size &aacute;o 3 size:</strong><br />\r\nM(40kg-55kg)<br />\r\nL(56kg-65kg)<br />\r\nXL(66kg-75kg)<br />\r\n-sản su&aacute;t tại việt nam kh&ocirc;ng qua trung gian.</p>', '70000.00', '65000.00', 'onFG_d00731201b6c5a7cd7ad4aca1725b1e3.jpg', NULL, NULL, 1, '2021-11-02 09:55:02', '2021-11-12 18:44:32'),
(23, 9, 'Áo hoodie nỉ bông siêu dày họa tiết form rộng unisex in hình phi hành gia 2 màu nam nữ mặc đều đẹp', '<p><strong>Giới thiệu &Aacute;o hoodie nỉ b&ocirc;ng si&ecirc;u d&agrave;y họa tiết form rộng unisex in h&igrave;nh phi h&agrave;nh gia 2 m&agrave;u nam nữ mặc đều đẹp</strong><br />\r\nT&ecirc;n sản phẩm: &Aacute;o hoodie nỉ b&ocirc;ng si&ecirc;u d&agrave;y họa tiết form rộng unisex in h&igrave;nh phi h&agrave;nh gia 2 m&agrave;u nam nữ mặc đều đẹp<br />\r\n-SHOP-UNISEX chuy&ecirc;n sỉ lẻ c&aacute;c mặc h&agrave;ng của shop l&agrave; những mẫu c&aacute;c bạn trẻ ưa chuộng ,c&aacute;c mẫu tự thiết kế l&ecirc;n form mẫu n&ecirc;n kh&ocirc;ng lo cạnh tranh về gi&aacute; v&agrave; mẫu m&atilde;<br />\r\nQuy tr&igrave;nh lấy sỉ v&agrave; c&aacute;ch thức t&iacute;nh sỉ :<br />\r\n- Lần đầu lấy h&agrave;ng đủ 10 sản phẩm ( lẫn lộn ) được t&iacute;nh sỉ, sau lấy D&Ugrave; CHỈ 1 SẢN PHẨM cũng được t&iacute;nh gi&aacute; sỉ<br />\r\n- C&aacute;c mức sỉ thay đổi theo số lượng : 10, 30, 50, 100, 200, 500 sản phẩm<br />\r\nZalo sỉ 0904875260(Mai Thi&ecirc;n Duy)<br />\r\n<strong>&gt;&gt; Size &aacute;o 3 size:&nbsp;</strong><br />\r\nM (40kg-55kg)<br />\r\nL (56kg-65kg)<br />\r\nXL(66kg-75kg)<br />\r\n-sản su&aacute;t tại việt nam kh&ocirc;ng qua trung gian.<br />\r\n&nbsp;</p>', '75000.00', '60000.00', 'lbwI_fa0314ec4be3bf53fe7daf3636450311.jpg', NULL, NULL, 1, '2021-11-02 09:57:21', '2021-11-12 18:46:40'),
(24, 3, 'Quần Thể Thao Nỉ 3 Sọc Cho Cả Nam và Nữ QT22(40-82kg) Form Chuẩn, Chất Dày Đẹp', '<p><strong>Giới thiệu Quần Thể Thao Nỉ 3 Sọc Cho Cả Nam v&agrave; Nữ QT22(40-82kg) Form Chuẩn, Chất D&agrave;y Đẹp</strong><br />\r\n<strong>M&Ocirc; TẢ SẢN PHẨM</strong><br />\r\nChất vải: vải poly 2 da co gi&atilde;n 4 chiều, bề mặt mịn m&agrave;ng, kh&ocirc;ng g&acirc;y cảm gi&aacute;c kh&oacute; chịu, mặc thấm h&uacute;t mồ h&ocirc;i, kh&ocirc;ng nhăn, kh&ocirc;ng bai nh&atilde;o.<br />\r\nQuần d&agrave;i 3 sọc ống su&ocirc;ng, ống bo c&oacute; thể n&oacute;i đ&oacute; l&agrave; chiếc quần &rdquo;truyền thống&rdquo; d&agrave;nh cho cả nam v&agrave; nữ, phong c&aacute;ch trẻ trung, năng động cho người mặc.<br />\r\nForm quần chuẩn size, ống rộng vừa, mặc l&ecirc;n t&ocirc;n d&aacute;ng cực kỳ. Bởi vậy chiếc quần rất dễ phối đồ với c&aacute;c loại &aacute;o thời trang: &aacute;o thun, &aacute;o ba lỗ, &aacute;o tập gym,...<br />\r\nQuần d&agrave;i 3 sọc ống su&ocirc;ng, ống bo c&oacute; 2 t&uacute;i kh&oacute;a b&ecirc;n h&ocirc;ng, gi&uacute;p bạn đựng đồ c&aacute; nh&acirc;n: v&iacute;, điện thoại.<br />\r\nSử dụng đi học, đi l&agrave;m, đi chơi, tập thể thao, tập gym..<br />\r\nBẢNG K&Iacute;CH CỠ CHI TIẾT<br />\r\nSize | C&acirc;n nặng | Chiều cao | D&agrave;i Quần |<br />\r\n--------------------------------------------------------<br />\r\nS | &lt;45 kg | &lt;1m60 | 89 |<br />\r\nM | 45 - 50 kg | &lt;1m64 | 91 |<br />\r\nL | 51 - 58 kg | &lt;1m68 | 93 |<br />\r\nXL | 59 - 66 kg | &lt;1m72 | 95 |<br />\r\n*Anh chị nhắn tin cho shop để được nh&acirc;n vi&ecirc;n tư vấn ch&iacute;nh x&aacute;c.</p>', '119000.00', '89000.00', 'r7TV_3ba824ff58a473fdf10abff053eeaa7d.jpg', NULL, NULL, 1, '2021-11-02 10:00:44', '2021-11-12 19:09:24'),
(25, 3, 'Quần Kaki Nam Nữ Ống Suông Basic Unisex - Kiểu quần baggy nam ống rộng màu đen và be Leevin Store', '<p><strong>Giới thiệu Quần Kaki Nam Nữ Ống Su&ocirc;ng Basic Unisex - Kiểu quần baggy nam ống rộng m&agrave;u đen v&agrave; be Leevin Store</strong><br />\r\nQuần Kaki Nam Nữ Ống Su&ocirc;ng Basic Unisex - Kiểu quần baggy kaki nam ống rộng su&ocirc;ng, quần kaki m&agrave;u đen v&agrave; be Leevin Store<br />\r\n- QUẦN KAKI C&Oacute; D&Acirc;Y R&Uacute;T B&Ecirc;N TRONG N&Ecirc;N THOẢI M&Aacute;I VẬN ĐỘNG.<br />\r\n- Form quần su&ocirc;ng baggy Unisex n&ecirc;n mặc tho&aacute;ng m&aacute;t, cả nam v&agrave; nữ đều mặc được ạ<br />\r\n- Chất vải: Vải quần kaki d&agrave;y dặn, kh&ocirc;ng x&ugrave; l&ocirc;ng<br />\r\n- Mặt vải mềm v&agrave; co d&atilde;n nhẹ n&ecirc;n thoải m&aacute;i vận động, thấm h&uacute;t mồ h&ocirc;i<br />\r\n- Mặt vải kaki lỳ kh&ocirc;ng bị b&oacute;ng v&agrave; cứng như một số loại kaki d&ugrave;ng vải gi&aacute; th&agrave;nh rẻ.<br />\r\n- Đường kim mũi chỉ cẩn thận, chắc chắn<br />\r\n- Sản phẩm cắt chỉ rất tỉ mỉ, gần như kh&ocirc;ng c&oacute; chỉ thừa<br />\r\nShop lu&ocirc;n bỏ sản phẩm ra kiểm tra lại trước khi đ&oacute;ng g&oacute;i (gần như rất rất &iacute;t shop b&aacute;n h&agrave;ng kiểm tra lại sản phẩm). N&ecirc;n sản phẩm bạn nhận được gần như kh&ocirc;ng c&oacute; lỗi<br />\r\n- H&igrave;nh chi tiết sản phẩm Shop tự chụp.<br />\r\n- Sản phẩm Shop Sản Xuất n&ecirc;n quản l&yacute; được chất lượng sản phẩm tốt nhất, k&egrave;m theo c&oacute; gi&aacute; ưu đ&atilde;i nhất d&agrave;nh cho c&aacute;c bạn ạ<br />\r\nHướng dẫn chọn size - Quần kaki nam nữ baggy ống su&ocirc;ng rộng<br />\r\nSize S: từ 45 - 54kg, Cao 1m55 - 1m65<br />\r\nSize M: từ 55 - 60kg, Cao 1m65 - 1m70<br />\r\nSize L: từ 61 - 67kg , Cao 1m69 - 1m75<br />\r\nSize XL: từ 68 - 78kg, Cao 1m72 &ndash; 1m80<br />\r\nNgo&agrave;i c&acirc;n nặng v&agrave; chiều cao, Bạn tham khảo th&ecirc;m c&aacute;c số đo quần trong phần h&igrave;nh ảnh để lựa size chuẩn nhất ạ.</p>', '258000.00', '129000.00', 'qQrC_d84352d21a5c34515fde18c6fe565910.jpg', NULL, NULL, 0, '2021-11-02 10:05:02', '2022-01-07 19:45:25'),
(26, 3, 'Quần Baggy Nam Nữ Kẻ Caro PLAID Ống Suông Unisex - Kiểu quần ống rộng suông vải Plaid kẻ caro Leevin Store', '<p><strong>Giới thiệu Quần Baggy Nam Nữ Kẻ Caro PLAID Ống Su&ocirc;ng Unisex - Kiểu quần ống rộng su&ocirc;ng vải Plaid kẻ caro Leevin Store</strong><br />\r\nQuần Baggy Nam Nữ Kẻ Caro PLAID Ống Su&ocirc;ng Unisex - Kiểu quần ống rộng su&ocirc;ng vải Plaid kẻ caro Leevin Store<br />\r\nChất liệu: Vải caro Plaid, co d&atilde;n nhẹ, d&agrave;y dặn<br />\r\n- Đường kim mũi chỉ cẩn thận, chắc chắn<br />\r\n- Sản phẩm cắt chỉ rất tỉ mỉ, gần như kh&ocirc;ng c&oacute; chỉ thừa<br />\r\nShop lu&ocirc;n bỏ sản phẩm ra kiểm tra lại trước khi đ&oacute;ng g&oacute;i (gần như rất rất &iacute;t đơn vị kh&aacute;c l&agrave;m c&ocirc;ng đoạn n&agrave;y)<br />\r\nN&ecirc;n sản phẩm bạn nhận được gần như kh&ocirc;ng c&oacute; lỗi<br />\r\nH&igrave;nh chi tiết sản phẩm Shop tự chụp.<br />\r\nShop đặt SX v&agrave; b&aacute;n tại KHO n&ecirc;n c&oacute; gi&aacute; cả tốt nhất v&agrave; ưu đ&atilde;i nhất ạ<br />\r\n<strong>BẢNG SIZE</strong><br />\r\nSize S: từ 40 - 49kg, Cao 1m50 - 1m64<br />\r\nSize M: từ 50 - 57kg, Cao 1m62 - 1m68<br />\r\nSize L: từ 58 - 63kg , Cao 1m68 - 1m72<br />\r\nSize XL: từ 64 - 70kg, Cao 1m70 &ndash; 1m78<br />\r\nNgo&agrave;i c&acirc;n nặng v&agrave; chiều cao, Bạn tham khảo th&ecirc;m c&aacute;c số đo quần trong phần h&igrave;nh ảnh để lựa size chuẩn nhất ạ.</p>', '189000.00', '108000.00', 'UNTZ_7330cf76d6ff0c4f5241d1512c468fe3.jpg', NULL, NULL, 1, '2021-11-02 13:45:45', '2021-11-12 18:48:17'),
(27, 10, 'Quần Short Nam Kaki Mềm Mịn VICERO 6 Màu Trẻ Trung Phong Cách Hàn Quốc', '<p><strong>Giới thiệu Quần Short Nam Kaki Mềm Mịn VICERO 6 M&agrave;u Trẻ Trung Phong C&aacute;ch H&agrave;n Quốc</strong><br />\r\nQuần Đ&ugrave;i Nam Chất Kaki Mềm Mịn VICERO<br />\r\nCH&Iacute;NH S&Aacute;CH<br />\r\nL&agrave; kh&aacute;ch h&agrave;ng của SHOP, bạn sẽ được:<br />\r\nCam kết chất lượng v&agrave; mẫu m&atilde; sản phẩm giống với h&igrave;nh ảnh.<br />\r\nHo&agrave;n tiền nếu sản phẩm kh&ocirc;ng giống với m&ocirc; tả.<br />\r\nCam kết được đổi trả h&agrave;ng trong v&ograve;ng 2 ng&agrave;y.<br />\r\n------------------------------------<br />\r\n<strong>HƯỚNG DẪN C&Aacute;CH ĐẶT H&Agrave;NG</strong><br />\r\n⏩ C&aacute;ch chọn size: Shop c&oacute; bảng size mẫu. Bạn N&Ecirc;N INBOX, cung cấp chiều cao, c&acirc;n nặng để SHOP TƯ VẤN SIZE<br />\r\n⏩ M&atilde; sản phẩm đ&atilde; c&oacute; trong ảnh<br />\r\n⏩ C&aacute;ch đặt h&agrave;ng: Nếu bạn muốn mua 2 sản phẩm kh&aacute;c nhau hoặc 2 size kh&aacute;c nhau, để được freeship<br />\r\n- Bạn chọn từng sản phẩm rồi th&ecirc;m v&agrave;o giỏ h&agrave;ng<br />\r\n- Khi giỏ h&agrave;ng đ&atilde; c&oacute; đầy đủ c&aacute;c sản phẩm cần mua, bạn mới tiến h&agrave;nh ấn n&uacute;t &ldquo; Thanh to&aacute;n&rdquo;<br />\r\n⏩ Shop lu&ocirc;n sẵn s&agrave;ng trả lời inbox để tư vấn</p>', '198000.00', '129000.00', 'AZM1_8a609ba33299bda7141c50ffe8806ebb.jpg', NULL, NULL, 1, '2021-11-02 13:50:52', '2021-11-12 18:51:55'),
(28, 10, '[Mã FASHIONHABS2 giảm 15% đơn 1tr] Quần Short Nam Kaki Mềm Mịn VICERO Năng Động Trẻ Trung', '<p><strong>Giới thiệu [M&atilde; FASHIONHABS2 giảm 15% đơn 1tr] Quần Short Nam Kaki Mềm Mịn VICERO Năng Động Trẻ Trung</strong><br />\r\nQuần Short Nam Kaki VICERO 5 M&agrave;u Trẻ Trung Phong C&aacute;ch H&agrave;n Quốc<br />\r\nCH&Iacute;NH S&Aacute;CH<br />\r\nL&agrave; kh&aacute;ch h&agrave;ng của VICERO, bạn sẽ được:<br />\r\nFREESHIP cho tất cả c&aacute;c đơn h&agrave;ng từ 150K<br />\r\nCam kết chất lượng v&agrave; mẫu m&atilde; sản phẩm giống với h&igrave;nh ảnh.<br />\r\nHo&agrave;n tiền nếu sản phẩm kh&ocirc;ng giống với m&ocirc; tả.<br />\r\nCam kết được đổi trả h&agrave;ng trong v&ograve;ng 2 ng&agrave;y.<br />\r\n------------------------------------<br />\r\nHƯỚNG DẪN C&Aacute;CH ĐẶT H&Agrave;NG<br />\r\n⏩ C&aacute;ch chọn size: Shop c&oacute; bảng size mẫu. Bạn N&Ecirc;N INBOX, cung cấp chiều cao, c&acirc;n nặng để SHOP TƯ VẤN SIZE<br />\r\n⏩ M&atilde; sản phẩm đ&atilde; c&oacute; trong ảnh<br />\r\n⏩ C&aacute;ch đặt h&agrave;ng: Nếu bạn muốn mua 2 sản phẩm kh&aacute;c nhau hoặc 2 size kh&aacute;c nhau, để được freeship<br />\r\n- Bạn chọn từng sản phẩm rồi th&ecirc;m v&agrave;o giỏ h&agrave;ng<br />\r\n- Khi giỏ h&agrave;ng đ&atilde; c&oacute; đầy đủ c&aacute;c sản phẩm cần mua, bạn mới tiến h&agrave;nh ấn n&uacute;t &ldquo; Thanh to&aacute;n&rdquo;<br />\r\n⏩ Shop lu&ocirc;n sẵn s&agrave;ng trả lời inbox để tư vấn</p>', '218000.00', '109000.00', '9yVG_8d29f3850d1dc20b57196645bc932a6c.jpg', NULL, NULL, 1, '2021-11-02 13:53:39', '2021-11-12 18:52:39'),
(29, 11, 'Quần jean Baggy ống suông, rộng nam, nữ TR01 hottrend hàn quốc 2021', '<p><strong>&nbsp;QUẦN JEANS BAGGY D&Aacute;NG ỐNG SU&Ocirc;NG NAM CAO CẤP</strong><br />\r\n- C&oacute; phải bạn đang muốn t&igrave;m cho m&igrave;nh một chiếc quần jean baggy cao cấp mang style h&agrave;n quốc?<br />\r\nMay mắn l&agrave; bạn đ&atilde; t&igrave;m thấy ch&uacute;ng t&ocirc;i.<br />\r\n- Chiếc quần jean baggy d&agrave;nh cho nam n&agrave;y cửa h&agrave;ng ch&uacute;ng t&ocirc;i b&aacute;n khoảng 600 chiếc mỗi th&aacute;ng.<br />\r\nĐ&atilde; b&aacute;n hơn 6.000 chiếc chỉ t&iacute;nh ri&ecirc;ng tr&ecirc;n hệ thống của Shopee Việt Nam, chưa kể đến những k&ecirc;nh b&aacute;n kh&aacute;c!<br />\r\n- Bạn cũng sẽ l&agrave; một trong số những người sẽ sở hữu chiếc quần jean baggy mang phong c&aacute;ch h&agrave;n quốc n&agrave;y.<br />\r\nBởi v&igrave; đ&acirc;y l&agrave; một chiếc quần jean m&agrave; cực kỳ dễ phối đồ từ &aacute;o thun, hoodie, &aacute;o kho&aacute;c..cho đến c&aacute;c loại sneakers, boots..<br />\r\n️ TẠI SAO N&Ecirc;N CHỌN MUA QUẦN JEANS BAGGY NAM, TẠI 20WE?<br />\r\n- CHẤT LƯỢNG: Chất vải jean CH&Iacute;NH PHẨM gồm 95% cotton ( thấm h&uacute;t, vải mềm) v&agrave; 5% spandex ( độ co d&atilde;n).<br />\r\n- GI&Aacute; CẢ : Ch&uacute;ng t&ocirc;i trực tiếp sản xuất với số lượng lớn. N&ecirc;n so với c&aacute;c quần c&ugrave;ng chất lượng gi&aacute; cả của chiếc quần jean baggy th&igrave; gi&aacute; tốt nhất cho bạn hiện tại.<br />\r\n<strong>️ Th&ocirc;ng Tin Sản Phẩm:</strong><br />\r\n- Kiểu D&aacute;ng: quần jean baggy d&agrave;nh cho nam<br />\r\n- Mầu Sắc: Xanh Sky.<br />\r\n- Chất liệu: jean cao cấp, ko phai mầu<br />\r\n- Số lượng : h&agrave;ng đủ size , xuất khẩu<br />\r\n- gồm c&oacute; đủ size: từ size 27 ( 42kg) -&gt; size 36 (100kg).</p>', '189000.00', '152000.00', 'DvmT_3cc2f4edb8684905f367f0574c85fda9.jpg', NULL, NULL, 1, '2021-11-02 13:58:26', '2021-11-12 18:57:15'),
(30, 11, 'Quần Jeans, baggy jean đen nam ống suông, rộng, hottrend 2021', '<p><strong>QUẦN JEAN NAM, JEANS BAGGY ĐEN, D&Aacute;NG ỐNG SU&Ocirc;NG, RỘNG NAM CAO CẤP</strong><br />\r\n- C&oacute; phải bạn đang muốn t&igrave;m cho m&igrave;nh một chiếc quần jean baggy ĐEN cao cấp mang style h&agrave;n quốc?<br />\r\nMay mắn l&agrave; bạn đ&atilde; t&igrave;m thấy ch&uacute;ng t&ocirc;i.<br />\r\n- Chiếc quần jean baggy ĐEN d&agrave;nh cho nam n&agrave;y tại cửa h&agrave;ng ch&uacute;ng t&ocirc;i b&aacute;n khoảng 600 chiếc mỗi th&aacute;ng.<br />\r\nĐ&atilde; b&aacute;n hơn 6.000 chiếc chỉ t&iacute;nh ri&ecirc;ng tr&ecirc;n hệ thống của Shopee Việt Nam, chưa kể đến những k&ecirc;nh b&aacute;n kh&aacute;c!<br />\r\n- Bạn cũng sẽ l&agrave; một trong số những người sẽ sở hữu chiếc quần jean baggy đen mang phong c&aacute;ch h&agrave;n quốc n&agrave;y.<br />\r\nBởi v&igrave; đ&acirc;y l&agrave; một chiếc quần jean m&agrave; cực kỳ dễ phối đồ từ &aacute;o thun, hoodie, &aacute;o kho&aacute;c..cho đến c&aacute;c loại sneakers, boots..<br />\r\n️ TẠI SAO N&Ecirc;N CHỌN MUA QUẦN JEAN NAM, JEANS BAGGY ĐEN NAM, TẠI 20WE?<br />\r\n- CHẤT LƯỢNG: Chất vải jean CH&Iacute;NH PHẨM gồm 95% cotton ( thấm h&uacute;t, vải mềm) v&agrave; 5% spandex ( độ co d&atilde;n).</p>', '201000.00', '149000.00', 'pDfb_0b5591a88d977f8b394761d5fd368ec5.jpg', NULL, NULL, 1, '2021-11-02 14:01:12', '2021-11-12 18:57:51'),
(31, 11, 'Quần jean, jeans,quần bò đen, baggy, nam,nữ, rách Gấu + Rách gối RĐ-01 hottren 2021', '<p><strong>Giới thiệu Quan jean, jeans,quần b&ograve; đen, baggy, nam,nữ, r&aacute;ch Gấu + R&aacute;ch gối RĐ-01 hottren 2021</strong><br />\r\n⭐⭐⭐ CAM KẾT H&Agrave;NG NHƯ H&Igrave;NH CHỤP - HO&Agrave;N TIỀN NẾU THẤY KH&Ocirc;NG H&Agrave;I L&Ograve;NG.<br />\r\n⭐⭐⭐ H&Atilde;Y INBOX CHO SHOP KHI SẢN C&Oacute; VẤN ĐỀ ( ĐỔI SIZE, SP LỖI...) ĐỂ HỖ TRỢ TRƯỚC KHI Đ&Aacute;NH GI&Aacute;.<br />\r\nQuần jean baggy R&Aacute;CH GẤU + R&aacute;ch Gối m&atilde; RĐ-01 ống su&ocirc;ng rộng cho nam<br />\r\nQuần Jean baggy thời trang chất liệu cao cấp, bền bỉ, đường may sắc n&eacute;t chắc chắn, tạo cảm gi&aacute;c thoải m&aacute;i nhất khi mặc. Quần sẽ đem đến cho bạn sự h&agrave;i l&ograve;ng nhất.<br />\r\ngồm c&oacute; đủ size từ sz 27 (40kg)- sz 36(95kg) thamh khảo bảng sz h&igrave;nh ảnh tr&ecirc;n<br />\r\nQuần jean nam với thiết kế mới thời trang hơn, mang lại sự tự tin tối đa cho người mặc trước những người xung quanh.<br />\r\nQuần may bằng vải denim n&ecirc;n rất mềm, đảm bảo thoải m&aacute;i ngay cả khi di chuyển nhiều.<br />\r\nD&aacute;ng quần jean trẻ trung tạo n&ecirc;n form cực chuẩn cho người mặc<br />\r\n4 t&uacute;i quần lớn rất thuận tiện cho việc đựng smart phone hoặc v&iacute;, 1 t&uacute;i nhỏ<br />\r\nM&agrave;u sắc chuẩn được nhuộm kỹ gi&uacute;p hạn chế tối đa việc phai m&agrave;u khi sử dụng.<br />\r\n<strong>Chất liệu:</strong> vải jean</p>', '201000.00', '165000.00', 'qUyw_3396e12d0c979df0ca74a874da7e2888.jpg', NULL, NULL, 1, '2021-11-02 14:05:39', '2021-11-12 19:11:28'),
(32, 12, 'Bộ ngủ pijama tay ngắn mẫu mới nhất', '<p><strong>Giới thiệu Bộ ngủ pijama tay ngắn mẫu mới nhất</strong><br />\r\nHuhu đồ ngủ pijama si&ecirc;u hot đ&atilde; về đầy kho ạ Gi&aacute; hạ nhiệt si&ecirc;u rẻ, bao chất, bao gi&aacute; to&agrave;n thị trường nh&eacute; kh&aacute;ch y&ecirc;u. N&oacute;i về bộ ngủ pijama th&igrave; shop lu&ocirc;n tự tin dẫn đầu thị trường về mẫu m&atilde;, gi&aacute; cả cũng như chất lượng lu&ocirc;n ạ️<br />\r\nXƯỞNG SỈ ĐỒ BỘ TẬN GỐC KH&Ocirc;NG QUA TRUNG GIAN<br />\r\nShop cam kết lu&ocirc;n ạ ^^<br />\r\nChất 100% Cotton si&ecirc;u m&aacute;t, si&ecirc;u mềm mịn,kh&ocirc;ng nhăn, kh&ocirc;ng bai x&ugrave;<br />\r\nForm si&ecirc;u rộng dưới 65kg nam, nữ, bầu b&igrave; bon chen thoải m&aacute;i<br />\r\nẢnh chụp thật 100% kh&ocirc;ng chỉnh sửa<br />\r\nBAO ĐỔI TRẢ NẾU H&Agrave;NG LỖI - CHẤT VẢI XẤU<br />\r\nKh&aacute;ch sỉ ib shop để được gi&aacute; y&ecirc;u thương ^^<br />\r\nChiều d&agrave;i &aacute;o :60 cm<br />\r\nChiều d&agrave;i quần 45cm<br />\r\nKH&Aacute;CH CHỌN H&Agrave;NG XEM ẢNH ĐẶT THEO SỐ TR&Ecirc;N ẢNH</p>', '99000.00', '68000.00', 'xVQj_4e15df646b7144d171fbc186699ba26e.jpg', NULL, NULL, 1, '2021-11-02 14:09:44', '2021-11-12 19:10:49'),
(33, 4, 'Giày JORDAN PANDA Giày Thể Thao Jordan cao cổ Đen Trắng Full Box', '<p><strong>Giới thiệu Gi&agrave;y JORDAN PANDA Gi&agrave;y Thể Thao Jordan cao cổ Đen Trắng Full Box</strong><br />\r\n NHẬN H&Agrave;NG ĐƯỢC KIỂM TRA H&Agrave;NG THOẢI M&Aacute;I TRƯỚC KHI THANH TO&Aacute;N, NHỚ BẢO SHIPER L&Agrave; SHOP CHO XEM H&Agrave;NG V&Igrave; QUY ĐỊNH CỦA SHOPEE L&Agrave; KH&Ocirc;NG ĐƯỢC XEM H&Agrave;NG<br />\r\nKiểu d&aacute;ng &ocirc;m ch&acirc;n, thon gọn, thoải m&aacute;i di chuyển kh&ocirc;ng lo đau ch&acirc;n<br />\r\nC&oacute; hộp đựng ( Do trong qu&aacute; tr&igrave;nh vận chuyển kh&ocirc;ng thể tr&aacute;nh khỏi hộp bị m&oacute;p m&eacute;o nhưng hộp kh&ocirc;ng quan trọng, chủ yếu chất lượng sản phẩm kh&aacute;ch nh&eacute;️<br />\r\nTư vấn nhiệt t&igrave;nh, am hiểu về thời trang gi&uacute;p bạn lựa chọn những đ&ocirc;i giầy ph&ugrave; hợp nhất với phong c&aacute;ch của bạn</p>', '400000.00', '299000.00', 'DQ4K_b414406c7a5c41321b70b92d6e48583a.jpg', NULL, NULL, 1, '2021-11-02 14:13:33', '2021-11-12 19:10:13'),
(34, 4, 'Giày Jordan Paris JD1 Cổ Thấp Gót Xanh, Giày Jodan Low Thấp Cổ Nam Nữ Full Box. Giày Thể Thao Sneaker Bản Mới', '<p><strong>Giới thiệu Gi&agrave;y Jordan Paris JD1 Cổ Thấp G&oacute;t Xanh, Gi&agrave;y Jodan Low Thấp Cổ Nam Nữ Full Box. Gi&agrave;y Thể Thao Sneaker Bản Mớ</strong>i<br />\r\nXIN K&Iacute;NH CH&Agrave;O ANH CHỊ<br />\r\n- SHOP CAM KẾT B&Aacute;N SẢN PHẨM CHẤT LƯỢNG, GI&Aacute; CẢ RẺ NHẤT THỊ TRƯỜNG<br />\r\n- TẤT CẢ GI&Agrave;Y ĐỀU ĐI K&Egrave;M HỘP V&Agrave; BILL ĐẦY ĐỦ, NHƯNG TRONG QU&Aacute; TR&Igrave;NH VẬN CHUYỂN RẤT C&Oacute; THỂ HỘP SẼ BỊ M&Oacute;P M&Eacute;O, ĐIỀU N&Agrave;Y SHOP KH&Ocirc;NG HỀ MONG MUỐN V&Agrave; CŨNG KH&Ocirc;NG THỂ CAN THIỆP ĐƯỢC V&Agrave;O C&Ocirc;NG VIỆC VẬN CHUYỂN CỦA B&Ecirc;N SHOPEE, N&Ecirc;N MONG ANH/CHỊ TH&Ocirc;NG CẢM.<br />\r\n- TẤT CẢ GIẦY SHOP B&Aacute;N XUẤT TRỰC TIẾP TỪ KHO N&Ecirc;N KH&Ocirc;NG CHĂM CH&Uacute;T ĐƯỢC CẨN THẬN. CŨNG HY HỮU C&Oacute; THỂ XẢY RA KHI GI&Agrave;Y BỊ M&Eacute;O FORM, NHƯNG KHI NHẬN GIẦY ANH/CHỊ ĐI L&Ecirc;N CH&Acirc;N 5&#39; L&Agrave; GIẦY V&Agrave;O LẠI FORM Ạ.<br />\r\n-TẤT CẢ SẢN PHẨM M&Igrave;NH ĐỀU HỖ TRỢ CHO KH&Aacute;CH XEM H&Agrave;NG, QU&Yacute; KH&Aacute;CH CỨ BẢO L&Agrave; SHOP CHO KIỂM TRA H&Agrave;NG RỒI SHIPER SẼ GỌI CHO SHOP. NHƯNG NHIỀU SHIPER KH&Oacute; T&Iacute;NH HỌ THEO Đ&Uacute;NG QUY ĐỊNH CỦA SHOPEE L&Agrave; KH&Ocirc;NG ĐƯỢC ĐỒNG KIỂM. N&Ecirc;N QU&Yacute; KH&Aacute;CH TH&Ocirc;NG CẢM<br />\r\n- NẾN ANH/CHỊ NHẬN ĐƯỢC SẢN PHẨM LỖI HOẶC DO NHẦM LẪN. MONG C&Aacute;C BẠN NHẮN TIN CHO SHOP KHẮC PHỤC TRƯỚC KHI Đ&Aacute;NH GI&Aacute; SẢN PHẨM Ạ SHOP CAM KẾT SẼ LU&Ocirc;N C&Oacute; TR&Aacute;CH NHIỆM VỚI SẢN PHẨM Đ&Atilde; B&Aacute;N<br />\r\nQUY ĐỊNH ĐỔI TRẢ H&Agrave;NG: QU&Yacute; KH&Aacute;CH C&Oacute; QUYỀN ĐỔI TRẢ H&Agrave;NG TRONG V&Ograve;NG 07 NG&Agrave;Y KỂ TỪ NG&Agrave;Y NHẬN H&Agrave;NG (VỚI ĐIỀU KIỆN GI&Agrave;Y C&Ograve;N MỚI NGUY&Ecirc;N-CHƯA QUA SỬ DỤNG) CHO NHỮNG TRƯỜNG HỢP SAU:<br />\r\n️H&Agrave;NG LỖI NGHI&Ecirc;M TRỌNG DO SẢN XUẤT; H&Agrave;NG GIAO SAI MẪU, NHẦM SIZE. ANH/CHỊ VUI L&Ograve;NG INBOX LẠI SHOP ĐỂ ĐƯỢC HƯỚNG DẪN TRẢ H&Agrave;NG/HO&Agrave;N TIỀN V&Agrave; SHOPEE SẼ HỖ TRỢ 100% PH&Iacute; SHIP.<br />\r\n️TRƯỜNG HỢP ANH/CHỊ ĐỔI GI&Agrave;Y DO MUỐN ĐỔI SIZE, ĐỔI MẪU KH&Aacute;C TH&Igrave; CŨNG XIN INBOX LẠI SHOP ĐỂ ĐƯỢC HƯỚNG DẪN. NẾU ANH/CHỊ KH&Ocirc;NG ĐẾN ĐỔI TRỰC TIẾP ĐƯỢC TH&Igrave; CHI PH&Iacute; SHIP 2 CHIỀU SẼ CHỊU 100% ĐỂ THU&Ecirc; B&Ecirc;N VẬN CHUYỂN, BƯU ĐIỆN ĐI ĐỔI HỘ.</p>', '500000.00', '265000.00', 'jomB_3e381f0b8e05a900cbab2cd2242dcafd.jpg', NULL, NULL, 1, '2021-11-02 18:32:24', '2021-11-12 19:12:07'),
(35, 4, 'Giày JD Xám Cổ Thấp , Dành Thể Thao Nam Nữ Full Box Bill', '<p><strong>Giới thiệu Gi&agrave;y JD X&aacute;m Cổ Thấp , D&agrave;nh Thể Thao Nam Nữ Full Box Bill<br />\r\nTH&Ocirc;NG TIN SẢN PHẨM</strong><br />\r\n- Sản phẩm: Gi&agrave;y jordan cổ thấp<br />\r\n- Chất liệu th&acirc;n thiện với m&ocirc;i trường v&agrave; người d&ugrave;ng<br />\r\n- Chất da đẹp, form gi&agrave;y chắc chắn, kh&ocirc;ng m&oacute;p m&eacute;o<br />\r\n- Gi&agrave;y chuẩn như ảnh, fullbox, giấy g&oacute;i, bill<br />\r\n<strong>QUY ĐỊNH ĐỔI TRẢ H&Agrave;NG</strong><br />\r\n1. Điều kiện &aacute;p dụng (trong v&ograve;ng 07 ng&agrave;y kể từ khi nhận sản phẩm)<br />\r\n- H&agrave;ng ho&aacute; vẫn c&ograve;n mới, chưa qua sử dụng<br />\r\n- H&agrave;ng ho&aacute; bị lỗi hoặc hư hỏng do vận chuyển hoặc do nh&agrave; sản xuất<br />\r\n2. Trường hợp được chấp nhận:<br />\r\n- H&agrave;ng kh&ocirc;ng đ&uacute;ng size, kiểu d&aacute;ng như qu&yacute; kh&aacute;ch đặt h&agrave;ng<br />\r\n- Kh&ocirc;ng đủ số lượng, kh&ocirc;ng đủ bộ như trong đơn h&agrave;ng<br />\r\n3. Trường hợp kh&ocirc;ng đủ điều kiện &aacute;p dụng ch&iacute;nh s&aacute;ch:<br />\r\n- Qu&aacute; 07 ng&agrave;y kể từ khi Qu&yacute; kh&aacute;ch nhận h&agrave;ng<br />\r\n- Gửi lại h&agrave;ng kh&ocirc;ng đ&uacute;ng mẫu m&atilde;, kh&ocirc;ng phải sản phẩm của SHOP<br />\r\n- Kh&ocirc;ng th&iacute;ch, kh&ocirc;ng hợp, đặt nhầm m&atilde;, nhầm m&agrave;u,...<br />\r\nDo m&agrave;n h&igrave;nh v&agrave; điều kiện &aacute;nh s&aacute;ng kh&aacute;c nhau, m&agrave;u sắc thực tế của sản phẩm c&oacute; thể ch&ecirc;nh lệch khoảng 3-5%<br />\r\nCảm ƯN Q&iacute;u Kh&aacute;ch Ung Hộ Sopppp</p>', '480000.00', '289000.00', '3BYg_172e2e6c056584cb19a24fe1891fe4cc.jpg', NULL, NULL, 1, '2021-11-02 18:35:00', '2021-11-12 18:55:09'),
(36, 12, '[Bộ Ngủ Lụa Dài Tay]-Pijama Chữ Ký Hot Trend , Hàng May Kỹ Có Túi Quần.', '<p><strong>Giới thiệu [Bộ Ngủ Lụa D&agrave;i Tay]-Pijama Chữ K&yacute; Hot Trend , H&agrave;ng May Kỹ C&oacute; T&uacute;i Quần.</strong><br />\r\n️Bộ ngủ lụa chữ k&yacute; tay d&agrave;i quần d&agrave;i, lụa phối chữ h&agrave;ng rẻ bao chất vải đẹp.<br />\r\n<strong>Chất vải: </strong>Phi lụa loại 1 may kỹ, h&agrave;ng c&oacute; t&uacute;i quần.<br />\r\nVải mềm mịn, sờ m&aacute;t may dịu nhẹ với l&agrave;n da phụ nữ.<br />\r\nKh&ocirc;ng nhăn, x&ugrave;, lem vải khi giặt.<br />\r\n<strong>Họa ti&ecirc;t</strong>: Lụa phối chữ ở &aacute;o, quần v&agrave; t&uacute;i &aacute;o.<br />\r\n<strong>M&agrave;u sắc:</strong> Hồng phấn, đen, xanh r&ecirc;u(xanh cổ vịt), xanh ngọc, đổ đ&ocirc;....<br />\r\nSize M,L:<br />\r\nSize M(42kg- dưới 53kg) (V1: 94cm/ D&agrave;i &aacute;o: 58cm- Quần V3: 100cm/ D&agrave;i quần: 90cm).<br />\r\nSize L(54kg tới dưới 59, 60kg). (V1: 99-100cm/ D&agrave;i &aacute;o: 58- Quần V3: 106cm/ D&agrave;i quần: 90cm)<br />\r\n<strong>Kiểu D&aacute;ng:&nbsp;&nbsp;</strong>Form chuẩn ph&ugrave; hợp với v&oacute;c d&aacute;ng phụ nữ Việt Nam .<br />\r\n&bull;Sản xuất trực tiếp tại xưởng may Việt Nam<br />\r\n&bull; Chất lượng sản phẩm được chọn lọc kỹ, sử dụng chất liệu cao cấp, mềm mịn tạo cảm gi&aacute;c thoải m&aacute;i nhất khi hoạt động<br />\r\n&bull; Đường may cẩn thận, tỉ mỉ, chắc chắn</p>', '170000.00', '92000.00', 'BXXr_c0e96110f0ac2ce983a82a02dde9fb8f.jpg', NULL, NULL, 1, '2021-11-02 18:45:15', '2021-11-12 18:59:03'),
(37, 13, 'Áo nỉ LEVENTS Floral 0.5 Sweater/ Grey', '<p><strong>Giới thiệu &Aacute;o nỉ LEVENTS Floral 0.5 Sweater/ Grey</strong><br />\r\nCOLOR: GREY<br />\r\nMATERIAL: COTTON<br />\r\nSản Phẩm chia l&agrave;m 3 &nbsp;size ch&iacute;nh :<br />\r\nSize 1 : Chiều Cao Từ 1m55 , C&acirc;n Nặng 55 kg<br />\r\nSize 2 : Chiều Cao từ 1m60 - &nbsp;1 m 70, C&acirc;n Nặng Dưới 70 kg<br />\r\nSize 3 : Chiều Cao từ 1m65- &nbsp;1m75 , C&acirc;ng Nặng Dưới 90 kg</p>', '490000.00', '441000.00', 'brwg_9b5747a56d17b5dae20b28fe70f184a3.jpg', NULL, NULL, 1, '2021-11-02 18:53:07', '2021-11-12 18:55:48'),
(38, 9, 'Áo khoác LEVENTS Emgo Varsity / Blue', '<p><strong>Giới thiệu &Aacute;o kho&aacute;c LEVENTS Emgo Varsity / Blue</strong><br />\r\n&Aacute;o kho&aacute;c LEVENTS Emgo Varsity / Blue<br />\r\nCOLOR : BLUE<br />\r\nMATERIAL: CORDUROY (COTTON + POLY)<br />\r\nSIZE: 1/2/3<br />\r\n_____________________</p>\r\n\r\n<p>Form &aacute;o được Fit size theo form v&agrave; ti&ecirc;u chuẩn tương đối của người Việt Nam, nếu bạn đang c&acirc;n nhắc giữa hai size, n&ecirc;n chọn size lớn hơn.<br />\r\nSize 1 : Chiều Cao Từ 1m65 , C&acirc;n Nặng tr&ecirc;n 55 kg<br />\r\nSize 2 : Chiều Cao từ 1m65- &nbsp;1 m 72, C&acirc;n Nặng Dưới 65 kg<br />\r\nSize 3 : Chiều Cao từ 1m70- &nbsp;1m77 , C&acirc;ng Nặng Dưới 80 kg</p>', '850000.00', '765000.00', 'jtBK_e994d599e6fc7f773d02048330d1c148.jpg', NULL, NULL, 1, '2021-11-02 18:55:53', '2021-11-12 19:00:09'),
(39, 5, 'Mũ bucket trơn ️ Nón tai bèo vành tròn trơn chất nhung tăm cao cấp form unisex nam nữ N14', '<p><strong>Giới thiệu Mũ bucket trơn ️ N&oacute;n tai b&egrave;o v&agrave;nh tr&ograve;n trơn chất nhung tăm cao cấp form unisex nam nữ N14</strong><br />\r\nMũ bucket trơn ️ N&oacute;n tai b&egrave;o v&agrave;nh tr&ograve;n trơn chất nhung tăm cao cấp<br />\r\n️ <strong>Ch&iacute;nh s&aacute;ch CAM KẾT từ HP Fashion:</strong><br />\r\n1. H&agrave;ng ch&iacute;nh h&atilde;ng HP - Bảo h&agrave;nh 3 năm tất cả sản phẩm, lỗi 1 đổi 1 theo ch&iacute;nh s&aacute;ch HP Fashion.<br />\r\n2. Trợ gi&aacute; ph&iacute; vận chuyển to&agrave;n quốc, nhận h&agrave;ng thanh to&aacute;n<br />\r\n3. H&agrave;ng lu&ocirc;n c&oacute; sẵn, đ&oacute;ng g&oacute;i cẩn thận trước khi giao đi<br />\r\n4. Hỗ trợ đổi h&agrave;ng khi kh&ocirc;ng vừa Size<br />\r\n5. Hỗ trợ 24/24, tư vấn nhiệt t&igrave;nh trước v&agrave; sau khi b&aacute;n h&agrave;ng...^^...<br />\r\nĐừng ngại, h&atilde;y Click li&ecirc;n hệ Inbox để HP hỗ trợ tốt nhất cho bạn nh&eacute;...^^...<br />\r\n️ TH&Ocirc;NG TIN SẢN PHẨM : N&oacute;n bucket v&agrave;nh tr&ograve;n<br />\r\n- M&Agrave;U SẮC: NHIỀU M&Agrave;U<br />\r\n- Chu vi n&oacute;n: 56-58cm<br />\r\n- Chất liệu: vải nhung tăm cao cấp, d&agrave;y mịn, tho&aacute;ng m&aacute;t<br />\r\n- Phương ph&aacute;p dệt: dệt trơn, c&oacute; th&ecirc;u chữ v&agrave; hoa văn<br />\r\n- Sản xuất: Xưởng SX v&agrave; Gia C&ocirc;ng N&oacute;n Mũ Theo Y&ecirc;u Cầu<br />\r\n<strong>️ M&Ocirc; TẢ SẢN PHẨM</strong>: N&oacute;n bucket v&agrave;nh tr&ograve;n<br />\r\n- Form d&aacute;ng chuẩn, chắc chắn<br />\r\n- Thiết kế may th&ecirc;u tinh tế, sắc sảo v&agrave; thời trang<br />\r\n- Kiểu d&aacute;ng: ph&ugrave; hợp cả nam v&agrave; nữ. Đa phong c&aacute;ch, gọn nhẹ, năng động<br />\r\n- M&ugrave;a sử dụng: xu&acirc;n, hạ, thu, đ&ocirc;ng<br />\r\n- Đối tượng sử dụng: người lớn v&agrave; trẻ em (cả nam v&agrave; nữ)</p>', '58000.00', '45000.00', 'JBy8_d30124c485047bae633f49a02e92d76e.jpg', NULL, NULL, 1, '2021-11-02 18:59:06', '2021-11-12 19:01:18'),
(40, 5, 'Mũ Len Trơn Hàn Quốc Nhiều Màu BEANIE Thời Trang đẹp , Nón Len Unisex Nam Nữ Ngắn Giá Rẻ Hot Trend 2021 Màu Đen, Be B002', '<p><strong>Giới thiệu Mũ Len Trơn H&agrave;n Quốc Nhiều M&agrave;u BEANIE Thời Trang đẹp , N&oacute;n Len Unisex Nam Nữ Ngắn Gi&aacute; Rẻ Hot Trend 2021 M&agrave;u Đen, Be B002</strong><br />\r\nMũ Len Trơn H&agrave;n Quốc Nhiều M&agrave;u BEANIE Thời Trang đẹp , N&oacute;n Len Unisex Nam Nữ Ngắn Gi&aacute; Rẻ Hot Trend 2021 M&agrave;u Đen, Be B002<br />\r\nCh&agrave;o mừng bạn đến với cửa h&agrave;ng của Beanie Official Store</p>\r\n\r\n<p>Đ&atilde; từ l&acirc;u mũ len gắn liền v&agrave; kh&ocirc;ng thể thiếu trong thời trang m&ugrave;a đ&ocirc;ng. Được biến tấu với nhiều kiểu d&aacute;ng đa dạng như mũ len beanie, mũ len quả chu&ocirc;ng, mũ len dưa hấu,... Nhưng d&ugrave; l&agrave; kiểu d&aacute;ng n&agrave;o th&igrave; mũ len vẫn lu&ocirc;n ho&agrave;n th&agrave;nh xuất sắc nhiệm vụ của m&igrave;nh đ&oacute; l&agrave; giữ ấm v&agrave; ho&agrave;n thiện phong c&aacute;ch cho người mặc. Bạn c&oacute; thể dễ d&agrave;ng chọn được một chiếc mũ len cho m&igrave;nh ở shop thời trang v&agrave; phụ kiện hoặc bạn cũng c&oacute; thể tự đan hoặc m&oacute;c cho m&igrave;nh một chiếc mũ len bạn nh&eacute;.</p>\r\n\r\n<p>1. Th&ocirc;ng tin sản phẩm</p>\r\n\r\n<p>- T&ecirc;n sản phẩm: Mũ Len Trơn BEANIE Dệt Kim Cao Cấp B002</p>\r\n\r\n<p>- Kiểu d&aacute;ng: Trơn</p>\r\n\r\n<p>- Phong c&aacute;ch: Unisex nam nữ</p>\r\n\r\n<p>- Trọng lượng: 70gram</p>\r\n\r\n<p>- Chất liệu: Vải acrylic</p>\r\n\r\n<p>- M&agrave;u sắc: Đen, be, v&agrave;ng, trắng</p>', '24000.00', NULL, 'UUOB_c618576cc4da95dc12c7ae7ea22507a2.jpg', NULL, NULL, 1, '2021-11-02 19:01:23', '2021-11-02 19:01:23'),
(41, 5, 'Nón Vành Nhỏ Phong Cách Hàn Quốc Dành Cho Nữ', '<p><strong>Giới thiệu N&oacute;n V&agrave;nh Nhỏ Phong C&aacute;ch H&agrave;n Quốc D&agrave;nh Cho Nữ</strong><br />\r\nThời gian giao h&agrave;ng dự kiến cho sản phẩm n&agrave;y l&agrave; từ 7-9 ng&agrave;y<br />\r\nDanh mục sản phẩm: mũ v&agrave;nh tr&ograve;n<br />\r\nM&agrave;u sắc: caramel, be, xanh lam-đen, hồng<br />\r\nPhong c&aacute;ch mũ: Ch&oacute;p mũ phẳng<br />\r\nK&iacute;ch thước: M (56-58cm)<br />\r\nChất liệu: len / nỉ<br />\r\nKiểu mũ: v&agrave;nh rộng<br />\r\nM&ugrave;a th&iacute;ch hợp: xu&acirc;n, hạ, thu, đ&ocirc;ng<br />\r\nPhong c&aacute;ch: đơn giản<br />\r\nKiểu d&aacute;ng v&agrave;nh: v&agrave;nh phẳng</p>', '107000.00', '59000.00', 'dcld_2d1323c5c5c4cd35fc9502c13af597a6.jpg', NULL, NULL, 1, '2021-11-02 19:05:08', '2021-11-12 18:56:32'),
(42, 5, 'Mũ bucket trơn vành nón tai bèo tròn thời trang phong cách unisex nam nữ AH1533', '<p><strong>Giới thiệu Mũ bucket trơn v&agrave;nh n&oacute;n tai b&egrave;o tr&ograve;n thời trang phong c&aacute;ch unisex nam nữ AH1533</strong><br />\r\nMũ bucket trơn v&agrave;nh n&oacute;n tai b&egrave;o tr&ograve;n thời trang phong c&aacute;ch unisex nam nữ AH1533<br />\r\nKh&ocirc;ng chỉ để che nắng, mũ bucket c&ograve;n l&agrave; d&ograve;ng phụ kiện thời trang kh&ocirc;ng thể thiếu đối với bất kỳ ai.<br />\r\nĐi ra ngo&agrave;i, c&oacute; c&aacute;i mũ tai b&egrave;o bảo vệ m&aacute;i t&oacute;c kh&ocirc;ng sơ rối, tr&aacute;nh cảm nắng<br />\r\nĐội c&aacute;i mũ bucket, k&eacute;o cụp cụp xuống chụp tấm h&igrave;nh th&igrave; bao ngầu l&ograve;i<br />\r\nKết hợp th&ecirc;m cặp k&iacute;nh thời thượng th&igrave; ... khỏi ch&ecirc; v&agrave;o đ&acirc;u nữa rồi<br />\r\n️ THIẾT KẾ MŨ THỜI TRANG + CHẤT LIỆU D&Agrave;Y DẶN CAO CẤP<br />\r\nChất liệu: Cotton d&agrave;y mịn, tho&aacute;ng m&aacute;t<br />\r\nChu vi n&oacute;n: 56-58cm, đội thoải m&aacute;i, dễ chịu<br />\r\nKiểu d&aacute;ng: Ph&ugrave; hợp cả nam v&agrave; nữ. Đa phong c&aacute;ch, gọn nhẹ, năng động<br />\r\nM&agrave;u sắc: Trắng, đen, kem, hồng, v&agrave;ng<br />\r\nĐối tượng sử dụng: người lớn v&agrave; trẻ em (cả nam v&agrave; nữ)<br />\r\nM&ugrave;a sử dụng: xu&acirc;n, hạ, thu, đ&ocirc;ng<br />\r\nXuất xứ: Việt Nam</p>', '50000.00', '29000.00', 'q3Wy_1b865b79f051ff41f0a7602564e55da9.jpg', NULL, NULL, 1, '2021-11-02 19:07:49', '2021-11-12 19:02:22'),
(43, 8, 'Áo sơ mi nam nữ dài tay giấu khuy unisex form rộng hàn quốc cao cấp AS02', '<p><strong>Giới thiệu &Aacute;o sơ mi nam nữ d&agrave;i tay giấu khuy unisex form rộng h&agrave;n quốc cao cấp AS02</strong><br />\r\nH&agrave;ng Fullbox cực sang chảnh (Xem video chi tiết tr&ecirc;n sản phẩm)<br />\r\nChất liệu: Vải lụa th&aacute;i cao cấp, vải d&agrave;y, vải mềm mịn thấm h&uacute;t mồ h&ocirc;i tốt, kh&ocirc;ng phai m&agrave;u,kh&ocirc;ng nhăn.<br />\r\nĐường may tinh tế, tỉ mỉ<br />\r\nThiết kế hiện đại, trẻ trung dễ kết hợp c&aacute;c trang phục kh&aacute;c nhau: quần jean, quần &acirc;u, gi&agrave;y t&acirc;y, g&igrave;&agrave;y thể thao. D&ugrave; l&agrave; đi l&agrave;m đi chơi hay đi dự tiệc đều đẹp v&agrave; sang trọng<br />\r\nMẫu sơ mi họa tiết kẻ ở cổ v&agrave; tay &aacute;o tạo điểm nhấn cho người mặc lịch l&atilde;m v&agrave; sang trọng.<br />\r\n<strong>HƯỚNG DẪN CHỌN SIZE &Aacute;O SƠ MI NAM</strong><br />\r\nSize M từ 48-55kg, dưới 1m65<br />\r\nSize L từ 55- 65kg, từ 1m65 - 1m72<br />\r\nSize XL từ 65-72kg, từ 1m72 - 1m78<br />\r\nBụng to th&igrave; tăng th&ecirc;m 1 size nh&eacute;<br />\r\nLưu &yacute;: th&ocirc;ng số c&aacute;c số đo c&oacute; thể bị ch&ecirc;nh lệch 1-2cm</p>', '229000.00', '155000.00', 'XTg1_c6bc73f3668c4c9421478feab46fb8c2.jpg', NULL, NULL, 1, '2021-11-02 19:10:56', '2021-11-12 19:03:25'),
(44, 8, 'ÁO SƠ MI NAM DÀI TAY FORM RỘNG UNISEX PHỐI CỔ KHOEN PHONG CÁCH HÀN QUỐC SIÊU ĐẸP CT03', '<p><strong>Giới thiệu &Aacute;O SƠ MI NAM D&Agrave;I TAY FORM RỘNG UNISEX PHỐI CỔ KHOEN PHONG C&Aacute;CH H&Agrave;N QUỐC SI&Ecirc;U ĐẸP CT03</strong><br />\r\nCH&Agrave;O MỪNG QU&Yacute; KH&Aacute;CH ĐẾN VỚI UNICI SHOP<br />\r\n&Aacute;o sơ mi nam form rộng phối khoen cổ tay d&agrave;i<br />\r\nTay tay d&agrave;i, cổ bẻ, form rộng<br />\r\nM&agrave;u sắc : Đen/Trắng<br />\r\n+Size M : Dưới 1m64, Dưới 54kg<br />\r\n+Size L : Cao 1m65 &ndash; 1m72, 55kg-63kg<br />\r\n+Size XL : Cao 1m73-1m80, 64kg-75kg<br />\r\nHướng dẫn ĐẶT H&Agrave;NG được FREESHIP<br />\r\nNếu c&aacute;c bạn mua 1 sản phẩm, vui l&ograve;ng ấn mua ngay<br />\r\nNếu c&aacute;c bạn mua từ 2 sản phẩm trở l&ecirc;n, vui l&ograve;ng ấn th&ecirc;m v&agrave;o giỏ h&agrave;ng, v&agrave; lần lượt th&ecirc;m c&aacute;c sản phẩm bạn muốn mua v&agrave;o giỏ trước khi đặt h&agrave;ng v&agrave; thanh to&aacute;n. C&aacute;c bạn n&ecirc;n tận dụng m&atilde; giảm gi&aacute; vận chuyển của shopee bằng c&aacute;ch đặt đơn h&agrave;ng tr&ecirc;n 150k nếu bạn ở H&agrave; Nội, tr&ecirc;n 250k ở c&aacute;c tỉnh th&agrave;nh c&ograve;n lại nh&eacute;, điều n&agrave;y sẽ gi&uacute;p m&igrave;nh tiết kiệm được kha kh&aacute; tiền đ&oacute; ạ.<br />\r\nShop CAM KẾT<br />\r\n+) Về sản phẩm: shop cam kết cả về chất liệu v&agrave; h&igrave;nh d&aacute;ng giống ảnh<br />\r\n+) Về gi&aacute; cả: Shop sản xuất với số lượng nhiều v&agrave; trực tiếp kh&ocirc;ng qua trung gian n&ecirc;n sẽ rẻ nhất<br />\r\n+)Về dịch vụ: tư vấn nhiệt t&igrave;nh, chu đ&aacute;o, lu&ocirc;n lắng nghe kh&aacute;ch h&agrave;ng để phục vụ tốt<br />\r\n+) Về thời gian chuẩn bị h&agrave;ng: nhanh, đ&uacute;ng tiến độ, kh&ocirc;ng để qu&yacute; kh&aacute;ch chờ đợi l</p>', '230000.00', '169000.00', 'RPHw_ce7605c277e248232cfb770783281d58.jpg', NULL, NULL, 1, '2021-11-02 19:13:28', '2021-11-12 18:53:36'),
(45, 8, 'Áo sơ mi trắng nữ cổ sen ren bèo - Áo sơ mi nữ mặc đi học, đi làm', '<p><strong>Giới thiệu &Aacute;o sơ mi trắng nữ cổ sen ren b&egrave;o - &Aacute;o sơ mi nữ mặc đi học, đi l&agrave;m</strong><br />\r\n&Aacute;o sơ mi trắng nữ cổ sen ren b&egrave;o - &Aacute;o sơ mi nữ mặc đi học, đi l&agrave;m<br />\r\nMẫu &aacute;o sơ mi đi học nữ m&agrave;u trắng được Shop tự thiết kế v&agrave; may đường chỉ chắc chắn theo kiểu d&aacute;ng trẻ trung, năng động cho c&aacute;c bạn học sinh cấp 3, 2, sinh vi&ecirc;n mặc đi học, l&agrave;m thực tập, mặc thoải vận động kh&ocirc;ng lo bục chỉ, một điểm ho&agrave;n to&agrave;n kh&ocirc;ng giống ngo&agrave;i thị trường.</p>\r\n\r\n<p>- &Aacute;o sơ mi trắng nữ đi học form vừa, tay d&agrave;i. Loại vải kh&ocirc;ng qu&aacute; d&agrave;y, kh&ocirc;ng qu&aacute; mỏng, mặc m&aacute;t tho&aacute;ng kh&iacute; khi đạp xe đi học, tập thể dục ngo&agrave;i s&acirc;n trường, ngồi học trong lớp, c&aacute;c bạn nữ y&ecirc;n t&acirc;m l&agrave; kh&ocirc;ng lộ &aacute;o trong.</p>\r\n\r\n<p>∆ BẢNG SIZE SƠ MI ĐI HỌC NỮ</p>\r\n\r\n<p>∆ CHI TIẾT SẢN PHẨM</p>\r\n\r\n<p>+ M&atilde;, T&ecirc;n: &Aacute;o sơ mi đi học nữ</p>\r\n\r\n<p>+ M&agrave;u sắc: Sơ mi TRẮNG</p>\r\n\r\n<p>+ &Aacute;o d&agrave;i tay</p>\r\n\r\n<p>+ Dịp: &Aacute;o trắng sơ mi đi học cho học sinh cấp 2,3, sinh vi&ecirc;n, đi l&agrave;m</p>\r\n\r\n<p>+ Chiều d&agrave;i: Sơ mi tay d&agrave;i</p>\r\n\r\n<p>+ Chất liệu: &Aacute;o sơ mi vải mềm mịn tho&aacute;ng m&aacute;t, thấm h&uacute;t mồ h&ocirc;i</p>', '150000.00', '79000.00', 'w5Q4_1f6414c73f890947c9d115b96b6d71c3.jpg', NULL, NULL, 1, '2021-11-02 19:15:24', '2021-11-02 19:15:24'),
(46, 8, 'Áo sơ mi trắng đi học đi làm nữ tay dài dáng rộng cổ bẻ basic - Sơ mi đi học sinh nữ trắng tay dài_A002', '<p><strong>Giới thiệu &Aacute;o sơ mi trắng đi học đi l&agrave;m nữ tay d&agrave;i d&aacute;ng rộng cổ bẻ basic - Sơ mi đi học sinh nữ trắng tay d&agrave;i_A002</strong><br />\r\n&Aacute;O SƠ MI TRẮNG ĐI HỌC ĐI L&Agrave;M NỮ TAY D&Agrave;I CỔ BẺ FOROM RỘNG VỪA - SƠ MI ĐI HỌC SINH NỮ TRẮNG D&Agrave;I TAY VẢI MỊN M&Aacute;T<br />\r\n&Aacute;o sơ mi trắng đi học đi l&agrave;m nữ tay d&agrave;i d&aacute;ng rộng cổ bẻ basic - Sơ mi đi học sinh nữ trắng tay d&agrave;i</p>\r\n\r\n<p>Mẫu &aacute;o sơ mi đi học nữ m&agrave;u trắng được Shop tự thiết kế v&agrave; may đường chỉ chắc chắn theo kiểu d&aacute;ng trẻ trung, năng động cho c&aacute;c bạn học sinh cấp 3, 2, sinh vi&ecirc;n mặc đi học, l&agrave;m thực tập, mặc thoải vận động kh&ocirc;ng lo bục chỉ, một điểm ho&agrave;n to&agrave;n kh&ocirc;ng giống ngo&agrave;i thị trường.</p>\r\n\r\n<p>- &Aacute;o sơ mi trắng nữ đi học form rộng vừa, tay d&agrave;i, phần tay nh&uacute;m c&aacute;ch điệu. Loại vải kh&ocirc;ng qu&aacute; d&agrave;y, kh&ocirc;ng qu&aacute; mỏng, mặc m&aacute;t tho&aacute;ng kh&iacute; khi đạp xe đi học, tập thể dục ngo&agrave;i s&acirc;n trường, ngồi học trong lớp, c&aacute;c bạn nữ y&ecirc;n t&acirc;m l&agrave; kh&ocirc;ng lộ &aacute;o trong.</p>\r\n\r\n<p>∆ BẢNG SIZE SƠ MI ĐI HỌC NỮ</p>\r\n\r\n<p>∆ CHI TIẾT SẢN PHẨM</p>\r\n\r\n<p>+ M&atilde;, T&ecirc;n: &Aacute;o sơ mi đi học nữ</p>\r\n\r\n<p>+ M&agrave;u sắc: Sơ mi TRẮNG</p>\r\n\r\n<p>+ &Aacute;o d&agrave;i tay CỔ BẺ</p>\r\n\r\n<p>+ Dịp: &Aacute;o trắng sơ mi đi học cho học sinh cấp 2,3, sinh vi&ecirc;n, đi l&agrave;m</p>\r\n\r\n<p>+ Chiều d&agrave;i: Sơ mi tay d&agrave;i</p>\r\n\r\n<p>+ Chất liệu: &Aacute;o sơ mi vải mềm mịn tho&aacute;ng m&aacute;t, thấm h&uacute;t mồ h&ocirc;i</p>', '100000.00', '69000.00', '1HZ0_2ca8daa615db5a3503dbff0416ef06a5.jpg', NULL, NULL, 1, '2021-11-02 19:17:30', '2021-11-02 19:17:30');
INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `unit_price`, `sale_price`, `image`, `brand`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(47, 4, 'Giày Thể Thao Nhiều Màu Cổ Cao, Thấp Rẻ Nhất Thị Trường', '<p><strong>Giới thiệu Gi&agrave;y Thể Thao Nhiều M&agrave;u Cổ Cao, Thấp Rẻ Nhất Thị Trường</strong><br />\r\nVới thiết kế vải cavans rất &ocirc;m ch&acirc;n v&agrave; phần đế boost mềm mại<br />\r\nPh&ugrave; hợp cho đi học, tập gym, đi chơi,.v. v. V.<br />\r\nc&aacute;c bạn bấm mua ngay để xem c&oacute; size của m&igrave;nh kh&ocirc;ng nh&aacute;<br />\r\nngo&agrave;i ra bạn c&oacute; thể ib shop để shop tư vấn để tr&aacute;nh đổi trả<br />\r\nnhớ nhận gi&agrave;y th&igrave; đ&aacute;nh gi&aacute; k&egrave;m h&igrave;nh ảnh lần say mua sẽ c&oacute; nhiều nhiều ưu đ&atilde;i nha<br />\r\nLH : 0977425396<br />\r\nDưới đ&acirc;y l&agrave; c&aacute;c bảo quản v&agrave; vệ sinh gi&agrave;y đ&uacute;ng c&aacute;ch<br />\r\nMẹo bảo quản<br />\r\nKhi gi&agrave;y bị ẩm, th&igrave; trước khi đi ngủ bạn c&oacute; thể bỏ v&agrave;o một t&iacute; bột v&ocirc;i, s&aacute;ng ra, khi tỉnh dậy, bạn sẽ thấy gi&agrave;y kh&ocirc; r&aacute;o, di sẽ dễ chịu hơn v&agrave; tr&aacute;nh được b&ecirc;nh thấp khớp<br />\r\nBạn l&ecirc;n d&ugrave;ng m&aacute;y sấy để sấy thay v&igrave; phơi nắng nh&eacute;<br />\r\nTr&aacute;nh m&ugrave;i h&ocirc;i bạn bỏ ch&uacute;t phấn r&ocirc;m của trẻ em sẽ hết m&ugrave;i ngay<br />\r\nVới gi&agrave;y c&oacute; d&acirc;y m&agrave;u trắng nguy&ecirc;n nh&acirc;n ch&iacute;nh l&agrave; do lỗ xỏ d&acirc;y bạn d&ugrave;ng sơn m&oacute;ng tay kh&ocirc;ng m&agrave;u sơn l&ecirc;n th&igrave; sẽ đỡ bẩn hơn nh&eacute;<br />\r\nThường xuy&ecirc;n giặt tất v&agrave; gi&agrave;y l&oacute;t gi&agrave;y để tr&aacute;nh mồ h&ocirc;i ch&acirc;n đọng lại qu&aacute; l&acirc;u v&agrave; g&acirc;y m&ugrave;i kh&oacute; chịu.<br />\r\nKh&ocirc;ng cho gi&agrave;y v&agrave;o t&uacute;i nilon/ hộp gi&agrave;y cất giữ ngay sau khi vừa đi về, n&ecirc;n để gi&agrave;y ra chỗ th&ocirc;ng th&aacute;o để bay bớt m&ugrave;i mồ h&ocirc;i. Cho l&oacute;t ra khỏi gi&agrave;y hoặc cho l&oacute;t ra phơi nắng nếu được.<br />\r\nKhi mua d&eacute;p xốp, t&ocirc;ng về bạn n&ecirc;n ng&acirc;m v&agrave;o trong nước muối nửa ng&agrave;y rồi mới đi. Điều n&agrave;y sẽ gi&uacute;p cho d&eacute;p kh&ocirc;ng bị nứt v&agrave; bền hơn.<br />\r\nCh&uacute;c c&aacute;c bạn lu&ocirc;n giữ cho gi&agrave;y đẹp nhất.</p>', '500000.00', '280000.00', 'TRrm_48a2273362b284d509bbbd502b8e0688.jpg', NULL, NULL, 1, '2021-11-02 19:20:45', '2021-11-12 18:51:07'),
(48, 6, 'Mũ Lưỡi Trai Thêu Chữ M Phong Cách Hàn Quốc Trẻ Trung Cho Nữ', '<p><strong>Giới thiệu Mũ Lưỡi Trai Th&ecirc;u Chữ M Phong C&aacute;ch H&agrave;n Quốc Trẻ Trung Cho Nữ</strong><br />\r\nThời gian giao h&agrave;ng dự kiến cho sản phẩm n&agrave;y l&agrave; từ 7-9 ng&agrave;y<br />\r\nG&oacute;i h&agrave;ng bao gồm: 1 mũ<br />\r\nM&agrave;u sắc: v&agrave;ng, xanh dương, đen, trắng, be<br />\r\nD&agrave;nh cho: Nữ<br />\r\nChu vi mũ: 54-58 cm<br />\r\nChất liệu: Cotton</p>', '55000.00', '28000.00', 'MZZk_bb2036ac7215f39dd411390f17641da3.jpg', NULL, NULL, 1, '2021-11-02 19:35:38', '2021-11-12 18:49:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `product_id`, `attribute_id`, `created_at`, `updated_at`) VALUES
(216, 40, 5, '2021-11-02 19:01:23', '2021-11-02 19:01:23'),
(217, 40, 7, '2021-11-02 19:01:23', '2021-11-02 19:01:23'),
(218, 40, 11, '2021-11-02 19:01:23', '2021-11-02 19:01:23'),
(234, 45, 2, '2021-11-02 19:15:24', '2021-11-02 19:15:24'),
(235, 45, 3, '2021-11-02 19:15:24', '2021-11-02 19:15:24'),
(236, 45, 4, '2021-11-02 19:15:24', '2021-11-02 19:15:24'),
(237, 45, 6, '2021-11-02 19:15:24', '2021-11-02 19:15:24'),
(238, 46, 2, '2021-11-02 19:17:30', '2021-11-02 19:17:30'),
(239, 46, 3, '2021-11-02 19:17:30', '2021-11-02 19:17:30'),
(240, 46, 4, '2021-11-02 19:17:30', '2021-11-02 19:17:30'),
(241, 46, 6, '2021-11-02 19:17:30', '2021-11-02 19:17:30'),
(257, 17, 12, '2021-11-12 18:36:50', '2021-11-12 18:36:50'),
(258, 16, 5, '2021-11-12 18:37:23', '2021-11-12 18:37:23'),
(260, 18, 6, '2021-11-12 18:39:43', '2021-11-12 18:39:43'),
(261, 19, 2, '2021-11-12 18:41:28', '2021-11-12 18:41:28'),
(262, 19, 3, '2021-11-12 18:41:28', '2021-11-12 18:41:28'),
(263, 19, 4, '2021-11-12 18:41:28', '2021-11-12 18:41:28'),
(264, 19, 5, '2021-11-12 18:41:28', '2021-11-12 18:41:28'),
(265, 19, 6, '2021-11-12 18:41:28', '2021-11-12 18:41:28'),
(266, 20, 2, '2021-11-12 18:42:37', '2021-11-12 18:42:37'),
(267, 20, 3, '2021-11-12 18:42:37', '2021-11-12 18:42:37'),
(268, 20, 4, '2021-11-12 18:42:37', '2021-11-12 18:42:37'),
(269, 20, 5, '2021-11-12 18:42:37', '2021-11-12 18:42:37'),
(270, 20, 6, '2021-11-12 18:42:37', '2021-11-12 18:42:37'),
(271, 21, 3, '2021-11-12 18:43:29', '2021-11-12 18:43:29'),
(272, 21, 4, '2021-11-12 18:43:29', '2021-11-12 18:43:29'),
(273, 22, 2, '2021-11-12 18:44:32', '2021-11-12 18:44:32'),
(274, 22, 3, '2021-11-12 18:44:32', '2021-11-12 18:44:32'),
(275, 22, 4, '2021-11-12 18:44:32', '2021-11-12 18:44:32'),
(276, 23, 2, '2021-11-12 18:46:40', '2021-11-12 18:46:40'),
(277, 23, 3, '2021-11-12 18:46:40', '2021-11-12 18:46:40'),
(278, 23, 4, '2021-11-12 18:46:40', '2021-11-12 18:46:40'),
(279, 23, 6, '2021-11-12 18:46:40', '2021-11-12 18:46:40'),
(280, 23, 11, '2021-11-12 18:46:40', '2021-11-12 18:46:40'),
(281, 25, 1, '2021-11-12 18:47:39', '2021-11-12 18:47:39'),
(282, 25, 2, '2021-11-12 18:47:39', '2021-11-12 18:47:39'),
(283, 25, 3, '2021-11-12 18:47:39', '2021-11-12 18:47:39'),
(284, 25, 4, '2021-11-12 18:47:39', '2021-11-12 18:47:39'),
(285, 25, 5, '2021-11-12 18:47:40', '2021-11-12 18:47:40'),
(286, 25, 6, '2021-11-12 18:47:40', '2021-11-12 18:47:40'),
(287, 26, 1, '2021-11-12 18:48:17', '2021-11-12 18:48:17'),
(288, 26, 2, '2021-11-12 18:48:17', '2021-11-12 18:48:17'),
(289, 26, 3, '2021-11-12 18:48:17', '2021-11-12 18:48:17'),
(290, 26, 4, '2021-11-12 18:48:17', '2021-11-12 18:48:17'),
(291, 26, 5, '2021-11-12 18:48:17', '2021-11-12 18:48:17'),
(296, 48, 5, '2021-11-12 18:49:52', '2021-11-12 18:49:52'),
(297, 48, 6, '2021-11-12 18:49:52', '2021-11-12 18:49:52'),
(298, 48, 8, '2021-11-12 18:49:52', '2021-11-12 18:49:52'),
(299, 48, 9, '2021-11-12 18:49:52', '2021-11-12 18:49:52'),
(300, 47, 5, '2021-11-12 18:51:07', '2021-11-12 18:51:07'),
(301, 47, 6, '2021-11-12 18:51:07', '2021-11-12 18:51:07'),
(302, 47, 7, '2021-11-12 18:51:07', '2021-11-12 18:51:07'),
(303, 47, 8, '2021-11-12 18:51:07', '2021-11-12 18:51:07'),
(304, 27, 1, '2021-11-12 18:51:55', '2021-11-12 18:51:55'),
(305, 27, 2, '2021-11-12 18:51:55', '2021-11-12 18:51:55'),
(306, 27, 3, '2021-11-12 18:51:55', '2021-11-12 18:51:55'),
(307, 27, 4, '2021-11-12 18:51:55', '2021-11-12 18:51:55'),
(308, 27, 5, '2021-11-12 18:51:55', '2021-11-12 18:51:55'),
(309, 27, 6, '2021-11-12 18:51:55', '2021-11-12 18:51:55'),
(310, 27, 9, '2021-11-12 18:51:55', '2021-11-12 18:51:55'),
(311, 27, 11, '2021-11-12 18:51:55', '2021-11-12 18:51:55'),
(312, 28, 1, '2021-11-12 18:52:39', '2021-11-12 18:52:39'),
(313, 28, 2, '2021-11-12 18:52:39', '2021-11-12 18:52:39'),
(314, 28, 3, '2021-11-12 18:52:39', '2021-11-12 18:52:39'),
(315, 28, 4, '2021-11-12 18:52:39', '2021-11-12 18:52:39'),
(316, 28, 5, '2021-11-12 18:52:39', '2021-11-12 18:52:39'),
(317, 28, 6, '2021-11-12 18:52:39', '2021-11-12 18:52:39'),
(318, 28, 9, '2021-11-12 18:52:39', '2021-11-12 18:52:39'),
(319, 28, 11, '2021-11-12 18:52:39', '2021-11-12 18:52:39'),
(320, 44, 2, '2021-11-12 18:53:36', '2021-11-12 18:53:36'),
(321, 44, 3, '2021-11-12 18:53:36', '2021-11-12 18:53:36'),
(322, 44, 4, '2021-11-12 18:53:36', '2021-11-12 18:53:36'),
(323, 44, 5, '2021-11-12 18:53:36', '2021-11-12 18:53:36'),
(324, 44, 6, '2021-11-12 18:53:36', '2021-11-12 18:53:36'),
(325, 35, 15, '2021-11-12 18:55:09', '2021-11-12 18:55:09'),
(326, 35, 16, '2021-11-12 18:55:09', '2021-11-12 18:55:09'),
(327, 35, 17, '2021-11-12 18:55:09', '2021-11-12 18:55:09'),
(328, 35, 18, '2021-11-12 18:55:09', '2021-11-12 18:55:09'),
(329, 35, 19, '2021-11-12 18:55:09', '2021-11-12 18:55:09'),
(330, 35, 6, '2021-11-12 18:55:09', '2021-11-12 18:55:09'),
(331, 37, 1, '2021-11-12 18:55:48', '2021-11-12 18:55:48'),
(332, 37, 2, '2021-11-12 18:55:49', '2021-11-12 18:55:49'),
(333, 37, 3, '2021-11-12 18:55:49', '2021-11-12 18:55:49'),
(334, 37, 4, '2021-11-12 18:55:49', '2021-11-12 18:55:49'),
(335, 37, 11, '2021-11-12 18:55:49', '2021-11-12 18:55:49'),
(336, 41, 5, '2021-11-12 18:56:32', '2021-11-12 18:56:32'),
(337, 41, 9, '2021-11-12 18:56:32', '2021-11-12 18:56:32'),
(338, 41, 12, '2021-11-12 18:56:32', '2021-11-12 18:56:32'),
(339, 29, 1, '2021-11-12 18:57:15', '2021-11-12 18:57:15'),
(340, 29, 2, '2021-11-12 18:57:15', '2021-11-12 18:57:15'),
(341, 29, 3, '2021-11-12 18:57:15', '2021-11-12 18:57:15'),
(342, 29, 4, '2021-11-12 18:57:15', '2021-11-12 18:57:15'),
(343, 30, 1, '2021-11-12 18:57:51', '2021-11-12 18:57:51'),
(344, 30, 2, '2021-11-12 18:57:51', '2021-11-12 18:57:51'),
(345, 30, 3, '2021-11-12 18:57:51', '2021-11-12 18:57:51'),
(346, 30, 4, '2021-11-12 18:57:51', '2021-11-12 18:57:51'),
(347, 30, 5, '2021-11-12 18:57:51', '2021-11-12 18:57:51'),
(348, 30, 11, '2021-11-12 18:57:51', '2021-11-12 18:57:51'),
(358, 36, 1, '2021-11-12 18:59:04', '2021-11-12 18:59:04'),
(359, 36, 2, '2021-11-12 18:59:04', '2021-11-12 18:59:04'),
(360, 36, 3, '2021-11-12 18:59:04', '2021-11-12 18:59:04'),
(361, 36, 4, '2021-11-12 18:59:04', '2021-11-12 18:59:04'),
(362, 36, 7, '2021-11-12 18:59:04', '2021-11-12 18:59:04'),
(363, 36, 8, '2021-11-12 18:59:04', '2021-11-12 18:59:04'),
(364, 36, 9, '2021-11-12 18:59:04', '2021-11-12 18:59:04'),
(365, 36, 10, '2021-11-12 18:59:04', '2021-11-12 18:59:04'),
(366, 36, 12, '2021-11-12 18:59:04', '2021-11-12 18:59:04'),
(367, 38, 2, '2021-11-12 19:00:09', '2021-11-12 19:00:09'),
(368, 38, 3, '2021-11-12 19:00:09', '2021-11-12 19:00:09'),
(369, 38, 4, '2021-11-12 19:00:09', '2021-11-12 19:00:09'),
(370, 38, 9, '2021-11-12 19:00:09', '2021-11-12 19:00:09'),
(371, 39, 5, '2021-11-12 19:01:18', '2021-11-12 19:01:18'),
(372, 39, 6, '2021-11-12 19:01:18', '2021-11-12 19:01:18'),
(373, 39, 12, '2021-11-12 19:01:18', '2021-11-12 19:01:18'),
(374, 39, 13, '2021-11-12 19:01:18', '2021-11-12 19:01:18'),
(378, 43, 2, '2021-11-12 19:03:25', '2021-11-12 19:03:25'),
(379, 43, 3, '2021-11-12 19:03:25', '2021-11-12 19:03:25'),
(380, 43, 4, '2021-11-12 19:03:25', '2021-11-12 19:03:25'),
(381, 43, 6, '2021-11-12 19:03:25', '2021-11-12 19:03:25'),
(390, 24, 1, '2021-11-12 19:09:24', '2021-11-12 19:09:24'),
(391, 24, 2, '2021-11-12 19:09:24', '2021-11-12 19:09:24'),
(392, 24, 3, '2021-11-12 19:09:24', '2021-11-12 19:09:24'),
(393, 24, 4, '2021-11-12 19:09:24', '2021-11-12 19:09:24'),
(394, 33, 5, '2021-11-12 19:10:13', '2021-11-12 19:10:13'),
(395, 33, 6, '2021-11-12 19:10:13', '2021-11-12 19:10:13'),
(396, 33, 7, '2021-11-12 19:10:13', '2021-11-12 19:10:13'),
(397, 33, 9, '2021-11-12 19:10:13', '2021-11-12 19:10:13'),
(398, 33, 11, '2021-11-12 19:10:13', '2021-11-12 19:10:13'),
(399, 32, 8, '2021-11-12 19:10:49', '2021-11-12 19:10:49'),
(400, 32, 11, '2021-11-12 19:10:49', '2021-11-12 19:10:49'),
(401, 32, 12, '2021-11-12 19:10:49', '2021-11-12 19:10:49'),
(402, 31, 1, '2021-11-12 19:11:28', '2021-11-12 19:11:28'),
(403, 31, 2, '2021-11-12 19:11:28', '2021-11-12 19:11:28'),
(404, 31, 3, '2021-11-12 19:11:28', '2021-11-12 19:11:28'),
(405, 31, 4, '2021-11-12 19:11:28', '2021-11-12 19:11:28'),
(406, 31, 5, '2021-11-12 19:11:28', '2021-11-12 19:11:28'),
(407, 34, 15, '2021-11-12 19:12:07', '2021-11-12 19:12:07'),
(408, 34, 16, '2021-11-12 19:12:07', '2021-11-12 19:12:07'),
(409, 34, 17, '2021-11-12 19:12:07', '2021-11-12 19:12:07'),
(410, 34, 18, '2021-11-12 19:12:07', '2021-11-12 19:12:07'),
(411, 34, 19, '2021-11-12 19:12:07', '2021-11-12 19:12:07'),
(412, 34, 6, '2021-11-12 19:12:07', '2021-11-12 19:12:07'),
(417, 42, 25, '2021-11-14 19:56:50', '2021-11-14 19:56:50'),
(418, 42, 5, '2021-11-14 19:56:50', '2021-11-14 19:56:50'),
(419, 42, 8, '2021-11-14 19:56:50', '2021-11-14 19:56:50'),
(420, 42, 12, '2021-11-14 19:56:50', '2021-11-14 19:56:50'),
(421, 42, 30, '2021-11-14 19:56:50', '2021-11-14 19:56:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(37, 16, 'Tv6w_052ed6e0a56c6b3e733f4010115d08e7.jpg', '2021-11-02 06:15:30', '2021-11-02 06:15:30'),
(38, 16, 'MDhz_67f85267f447ee8e06ac427b3ef9b204.jpg', '2021-11-02 06:15:30', '2021-11-02 06:15:30'),
(39, 16, 'ZlRo_84ea7c588202700981746d30cc821833.jpg', '2021-11-02 06:15:30', '2021-11-02 06:15:30'),
(40, 16, 'dHCF_c9d4870df6dd0571e1ccab25cda7c12d.jpg', '2021-11-02 06:15:30', '2021-11-02 06:15:30'),
(41, 16, 'N8Tp_d27e6b2285e079e33c686aa6fa15f8da.jpg', '2021-11-02 06:15:30', '2021-11-02 06:15:30'),
(42, 17, 'EhG4_67f85267f447ee8e06ac427b3ef9b204.jpg', '2021-11-02 09:35:31', '2021-11-02 09:35:31'),
(43, 17, 'FIRh_80a22fe199631213bc6c413878f904e9.jpg', '2021-11-02 09:35:31', '2021-11-02 09:35:31'),
(44, 17, 'PI16_45815c28a729ad8a9e677e6aba26f8ef.jpg', '2021-11-02 09:35:32', '2021-11-02 09:35:32'),
(45, 17, 'uitU_821536b1f7739d7fecc2df813173379d.jpg', '2021-11-02 09:35:32', '2021-11-02 09:35:32'),
(46, 17, 'DE56_b1e88a18e00a3011d5bb23a550f686c8.jpg', '2021-11-02 09:35:32', '2021-11-02 09:35:32'),
(47, 17, '6NpX_e62344db8cd36294cfa2e02b169e6f10.jpg', '2021-11-02 09:35:32', '2021-11-02 09:35:32'),
(48, 18, 'uinz_5dd232142bef920e6e473009fa7df779.jpg', '2021-11-02 09:41:43', '2021-11-02 09:41:43'),
(49, 18, '5eB0_6c9bfcfafde689290610c694c684e6d1.jpg', '2021-11-02 09:41:43', '2021-11-02 09:41:43'),
(50, 18, 'j5DJ_9ceef70eead9bde7d1d2a8f1227f1f7e.jpg', '2021-11-02 09:41:43', '2021-11-02 09:41:43'),
(51, 18, 'uVdv_583c495347901a3195b6f49ee14e31fc.jpg', '2021-11-02 09:41:43', '2021-11-02 09:41:43'),
(52, 18, 'cqwt_bfc91522f62f8a9de0d01997a890badb.jpg', '2021-11-02 09:41:43', '2021-11-02 09:41:43'),
(53, 18, 'Sw8s_ee84015ba60a4b7c1d45291e876ba7af.jpg', '2021-11-02 09:41:43', '2021-11-02 09:41:43'),
(54, 19, 'Nxux_1dae362efac83687aea399e0d74bebf5.jpg', '2021-11-02 09:45:41', '2021-11-02 09:45:41'),
(55, 19, 'tntG_048cf3b62cc1a2894b8c437b739d7c10.jpg', '2021-11-02 09:45:41', '2021-11-02 09:45:41'),
(56, 19, 'uhLY_62d5a2472454dcb03832d00bf066c7a3.jpg', '2021-11-02 09:45:41', '2021-11-02 09:45:41'),
(57, 19, 'AvNs_964f7b8db40ab3633df4444c056c7f8e.jpg', '2021-11-02 09:45:41', '2021-11-02 09:45:41'),
(58, 19, 'hs8R_59271982d8d669854d3a5d6205d9ca6c.jpg', '2021-11-02 09:45:41', '2021-11-02 09:45:41'),
(59, 19, 'ptKp_a0a372f5e5b7b06fef85963481c8469c.jpg', '2021-11-02 09:45:41', '2021-11-02 09:45:41'),
(60, 19, 'xHRM_ba705e2edcfd1e561484cba911199ad7.jpg', '2021-11-02 09:45:41', '2021-11-02 09:45:41'),
(61, 19, '2vPx_ce8345473819e217ff8ff1bb7cb9e608.jpg', '2021-11-02 09:45:41', '2021-11-02 09:45:41'),
(62, 20, 'iPDL_0c0887e899ce119c808a6c87dea0a73b.jpg', '2021-11-02 09:48:40', '2021-11-02 09:48:40'),
(63, 20, 'CtFe_2d32aba96be6801165bf6b383313a82c.jpg', '2021-11-02 09:48:40', '2021-11-02 09:48:40'),
(64, 20, 'dnPY_9ce729f4425f7760adaa9eb3de62095c.jpg', '2021-11-02 09:48:40', '2021-11-02 09:48:40'),
(65, 20, '4x7K_93fb57c1500fddf7eca1d4f2aee6eae1.jpg', '2021-11-02 09:48:40', '2021-11-02 09:48:40'),
(66, 20, 'hH95_78530e0ba0bcaf204b0527af3d9ca404.jpg', '2021-11-02 09:48:40', '2021-11-02 09:48:40'),
(67, 20, 'wtlI_b463c9197ad4341e0213f0be5e2a9f4d.jpg', '2021-11-02 09:48:41', '2021-11-02 09:48:41'),
(68, 20, 'sfH7_b01629a2067304e3cc7c70844ed9c61f.jpg', '2021-11-02 09:48:41', '2021-11-02 09:48:41'),
(69, 20, 'Seb4_f6bd533cc215e2fea9e62f9c6fe8a6f1.jpg', '2021-11-02 09:48:41', '2021-11-02 09:48:41'),
(70, 21, 'ee9o_23ba72443649206a2aa2568b826357b7.jpg', '2021-11-02 09:52:23', '2021-11-02 09:52:23'),
(71, 21, 'SaXU_87a2ef7ecac258bd86eeffe4e21cafb8.jpg', '2021-11-02 09:52:23', '2021-11-02 09:52:23'),
(72, 21, 'MPbq_718aa59c4a34aa23b1ffb8b0b41207b3.jpg', '2021-11-02 09:52:23', '2021-11-02 09:52:23'),
(73, 21, 'kGup_fcd98c1e18d86981a349a9324da710f2.jpg', '2021-11-02 09:52:23', '2021-11-02 09:52:23'),
(74, 21, 'wjST_fe3144feca5805ef108bcc10cc71f7fa.jpg', '2021-11-02 09:52:23', '2021-11-02 09:52:23'),
(75, 22, 'VKej_15be24b3216f6541c016f3ffbec75f9c.jpg', '2021-11-02 09:55:02', '2021-11-02 09:55:02'),
(76, 22, 'h8l6_58c1de72af10486887d56b477b29afc1.jpg', '2021-11-02 09:55:02', '2021-11-02 09:55:02'),
(77, 22, 'CsIC_1685e7d049b007aa4ab8f58368b84510.jpg', '2021-11-02 09:55:02', '2021-11-02 09:55:02'),
(78, 22, 'hMxh_a9e88f335eba29793e96ce49b7955df2.jpg', '2021-11-02 09:55:02', '2021-11-02 09:55:02'),
(79, 22, 't802_c6a82a56225b8fb7779c28a4b18a16d5.jpg', '2021-11-02 09:55:02', '2021-11-02 09:55:02'),
(80, 23, 'Ztpi_8d5ffaf512d5f585ec4e50256a49c002.jpg', '2021-11-02 09:57:21', '2021-11-02 09:57:21'),
(81, 23, '6WWj_86b47eef412297deffece92b4ab2c751.jpg', '2021-11-02 09:57:21', '2021-11-02 09:57:21'),
(82, 23, 'HOMQ_2384c96cd82617568ad20308e944257c.jpg', '2021-11-02 09:57:21', '2021-11-02 09:57:21'),
(83, 23, 'MEsJ_c8865f90074bb7e99db129a3f0ee9178.jpg', '2021-11-02 09:57:21', '2021-11-02 09:57:21'),
(84, 25, 'Ab9b_7a251cf7b9181583d0cbd3a6366373cc.jpg', '2021-11-02 10:05:02', '2021-11-02 10:05:02'),
(85, 25, 'Eeay_077b4f12cd804b2d491422438f8b5f2e.jpg', '2021-11-02 10:05:02', '2021-11-02 10:05:02'),
(86, 25, 'pNE5_bc801238ab8d31468ec4befed55eec75.jpg', '2021-11-02 10:05:02', '2021-11-02 10:05:02'),
(87, 25, 'dRJC_bf8a4daf5759396e2023dba57940f8e5.jpg', '2021-11-02 10:05:02', '2021-11-02 10:05:02'),
(88, 25, 'ab4V_c739ba7112ac88a064153b3005da8dae.jpg', '2021-11-02 10:05:02', '2021-11-02 10:05:02'),
(89, 25, 'HAfG_d4302c3da02b04041cac7172afa12a8f.jpg', '2021-11-02 10:05:02', '2021-11-02 10:05:02'),
(90, 25, 'Bdxt_de3a819ff87314a70750310d38c1dd70.jpg', '2021-11-02 10:05:02', '2021-11-02 10:05:02'),
(91, 25, 'l2cq_f540099042fc3582a4d2bb6bb3d8f6b3.jpg', '2021-11-02 10:05:02', '2021-11-02 10:05:02'),
(92, 26, '1HFx_5b4847c75fff873f14650a4cbdf4e49c.jpg', '2021-11-02 13:45:45', '2021-11-02 13:45:45'),
(93, 26, 'xlYP_6bfd3b0a568d679428f6e077a59125b4.jpg', '2021-11-02 13:45:45', '2021-11-02 13:45:45'),
(94, 26, 'ZWMe_499aa71b34c55cd9dcd26d567cb3bb2a.jpg', '2021-11-02 13:45:45', '2021-11-02 13:45:45'),
(95, 26, '8TPM_3885825db6595b9eca7a9ee5c3281d48.jpg', '2021-11-02 13:45:45', '2021-11-02 13:45:45'),
(96, 26, 'LUvk_aa897fa725c04bbba0e997b7b69aa11e.jpg', '2021-11-02 13:45:45', '2021-11-02 13:45:45'),
(97, 26, 'nO51_bab1ea3a7b3b8cb4f39f8cf4a6e14dcb.jpg', '2021-11-02 13:45:45', '2021-11-02 13:45:45'),
(98, 26, 'fMxt_c6f758255e1e636eb43eeff63ebde797.jpg', '2021-11-02 13:45:45', '2021-11-02 13:45:45'),
(99, 26, 'FfVa_c833ba3e90a7d41d0bf28252e2e63e2b.jpg', '2021-11-02 13:45:45', '2021-11-02 13:45:45'),
(100, 27, 'pbrs_02bea6828c8247a3b82ceb1a9f18f49c.jpg', '2021-11-02 13:50:53', '2021-11-02 13:50:53'),
(101, 27, 'wgzZ_4a5027164a9f225c9ee61d9c9264c234.jpg', '2021-11-02 13:50:53', '2021-11-02 13:50:53'),
(102, 27, 'rzzP_4fec8c0665fbafccacfbc283dc2b64dd.jpg', '2021-11-02 13:50:53', '2021-11-02 13:50:53'),
(103, 27, 'DwTc_6caed43e738c9772417565f09f36d055.jpg', '2021-11-02 13:50:53', '2021-11-02 13:50:53'),
(104, 27, 'S1OE_75c8b45390955315eb8ffa8d58a3542c.jpg', '2021-11-02 13:50:53', '2021-11-02 13:50:53'),
(105, 27, 'TSv2_736853cba44dc7d26afd0e46078b9451.jpg', '2021-11-02 13:50:53', '2021-11-02 13:50:53'),
(106, 27, 'wAYi_6837568dd29bf3c89753196798294399.jpg', '2021-11-02 13:50:53', '2021-11-02 13:50:53'),
(107, 27, '6Kes_8217840b65b84dc3b305b258811a2e85.jpg', '2021-11-02 13:50:53', '2021-11-02 13:50:53'),
(108, 28, 'sbZ8_3cc82a60a2dd694ac51fb4dce7aa5dcc.jpg', '2021-11-02 13:53:40', '2021-11-02 13:53:40'),
(109, 28, 'EbSC_5b06b8eb60dcdd76865c572e773cfed5.jpg', '2021-11-02 13:53:40', '2021-11-02 13:53:40'),
(110, 28, 'PgoH_5bc71f06258bdef7ad41f94375147a6c.jpg', '2021-11-02 13:53:40', '2021-11-02 13:53:40'),
(111, 28, '234D_8ba8690186d01cabb80601e8d5aeaacd.jpg', '2021-11-02 13:53:40', '2021-11-02 13:53:40'),
(112, 28, 'cKZV_9180a3909c9abe3a90286b624a30de5b.jpg', '2021-11-02 13:53:40', '2021-11-02 13:53:40'),
(113, 28, 'bBTH_36022d4391c57aeffeffcc2441f4008c.jpg', '2021-11-02 13:53:40', '2021-11-02 13:53:40'),
(114, 28, '7Zle_ad08e1c8d40a844291546b179c4d6d00.jpg', '2021-11-02 13:53:40', '2021-11-02 13:53:40'),
(115, 28, 'Gk5H_b8007f2c8e87ee0a839e625f120eef57.jpg', '2021-11-02 13:53:40', '2021-11-02 13:53:40'),
(116, 29, 'zkQB_8ef0f8781e0015c18f39f5272615b031.jpg', '2021-11-02 13:58:26', '2021-11-02 13:58:26'),
(117, 29, '2Og6_268bcfea670e25926c422c98e512b489.jpg', '2021-11-02 13:58:26', '2021-11-02 13:58:26'),
(118, 29, 'epv4_345cb34997215ec079405d4f336d8f33.jpg', '2021-11-02 13:58:26', '2021-11-02 13:58:26'),
(119, 29, 'bWQM_904909fef9072d49c34af05482b7a411.jpg', '2021-11-02 13:58:26', '2021-11-02 13:58:26'),
(120, 29, 'F1Vf_02623845e723f1ebc308233eef86fc98.jpg', '2021-11-02 13:58:26', '2021-11-02 13:58:26'),
(121, 29, 'd1Cm_5304369e8d025ea867d59436ec9aff25.jpg', '2021-11-02 13:58:26', '2021-11-02 13:58:26'),
(122, 29, 'tZbK_c1f968a4fa9531bfc964e4861cca14f7.jpg', '2021-11-02 13:58:26', '2021-11-02 13:58:26'),
(123, 29, 'Y0EV_ee55da7a8162b1bec3ed9d9ff4e4a98a.jpg', '2021-11-02 13:58:26', '2021-11-02 13:58:26'),
(124, 30, 'EcxB_7d2c752e62dafd517608d96593327e3d.jpg', '2021-11-02 14:01:12', '2021-11-02 14:01:12'),
(125, 30, 'nw0M_8ea747ca26ba9ab86886cccdaf301a65.jpg', '2021-11-02 14:01:12', '2021-11-02 14:01:12'),
(126, 30, '6g0m_38ac27bb748487cc005d80b20fbb027d.jpg', '2021-11-02 14:01:12', '2021-11-02 14:01:12'),
(127, 30, 'ireD_268bcfea670e25926c422c98e512b489.jpg', '2021-11-02 14:01:12', '2021-11-02 14:01:12'),
(128, 30, '5O77_826cf7429b80ef8bdbdb72fb759cacfb.jpg', '2021-11-02 14:01:12', '2021-11-02 14:01:12'),
(129, 30, 'Bqcq_c4cd130b63765d7ceb2dbc582d373ffa.jpg', '2021-11-02 14:01:12', '2021-11-02 14:01:12'),
(130, 30, 's9Ms_f70c2cd4fbd0fbf34c44e21640eac1d4.jpg', '2021-11-02 14:01:12', '2021-11-02 14:01:12'),
(131, 30, 'x1P4_f439080c9b60b104e59b5f108cc56e84.jpg', '2021-11-02 14:01:12', '2021-11-02 14:01:12'),
(132, 31, 'eWRm_15932c45c18bf80a7e92f2633bec5c19.jpg', '2021-11-02 14:05:40', '2021-11-02 14:05:40'),
(133, 31, 'mT2r_bbb80822bc5480a3b2ab46109cb16711.jpg', '2021-11-02 14:05:40', '2021-11-02 14:05:40'),
(134, 31, 'lilP_c2eea48c01bd0d909302837c3ec031eb.jpg', '2021-11-02 14:05:40', '2021-11-02 14:05:40'),
(135, 31, 'E1fn_fee45bde877939827c71e95eafb9619d.jpg', '2021-11-02 14:05:40', '2021-11-02 14:05:40'),
(136, 32, 'R0A5_05b9a7089151cb14e067808d956ad97d.jpg', '2021-11-02 14:09:45', '2021-11-02 14:09:45'),
(137, 32, 'cPJF_5f8d7bb6687989ed8354f47d7b6584b6.jpg', '2021-11-02 14:09:45', '2021-11-02 14:09:45'),
(138, 32, '4vmq_7cdcab006ca0e9bdf5bf42e64cd10a98.jpg', '2021-11-02 14:09:45', '2021-11-02 14:09:45'),
(139, 32, '5aHd_35cae62de68b3346a1062a7192ba57ea.jpg', '2021-11-02 14:09:45', '2021-11-02 14:09:45'),
(140, 32, 'ndSb_47f6f40ec726292932d050bcb03375a2.jpg', '2021-11-02 14:09:45', '2021-11-02 14:09:45'),
(141, 32, 'NKB9_55a1eaecb1bd74b861077922bce7dd68.jpg', '2021-11-02 14:09:45', '2021-11-02 14:09:45'),
(142, 32, 'Z1Nx_875f0ea0d982fb23cca97dadf436ec30.jpg', '2021-11-02 14:09:45', '2021-11-02 14:09:45'),
(143, 32, '512R_318455d8408138b8667ef4c611d81503.jpg', '2021-11-02 14:09:45', '2021-11-02 14:09:45'),
(144, 33, 'z0HL_1b8f3852415ddb8e486d9a0a2f5ef60d.jpg', '2021-11-02 14:13:34', '2021-11-02 14:13:34'),
(145, 33, 'LoAt_18b926ca1220763d7ad8815b91d24ad6.jpg', '2021-11-02 14:13:34', '2021-11-02 14:13:34'),
(146, 33, 'he2H_54dae80dd35ebf89da10917e9d377244.jpg', '2021-11-02 14:13:34', '2021-11-02 14:13:34'),
(147, 33, 'veDI_415329f3a4a0ba206f834856ac357521.jpg', '2021-11-02 14:13:34', '2021-11-02 14:13:34'),
(148, 33, 'bDkw_b41758246a70d1d17009a421d28a18c0.jpg', '2021-11-02 14:13:34', '2021-11-02 14:13:34'),
(149, 33, 'Kjaz_bcae274ed9b99d9b967c3623a3cf26e2.jpg', '2021-11-02 14:13:34', '2021-11-02 14:13:34'),
(150, 33, 'gVXv_c8884e21f4b2982aba1bd64586bfd961.jpg', '2021-11-02 14:13:34', '2021-11-02 14:13:34'),
(151, 33, 'S0Kc_ef69438ad14208254b361dc313744177.jpg', '2021-11-02 14:13:34', '2021-11-02 14:13:34'),
(152, 34, 'GhXr_dd046b51ec9af985c56fd2e513a0d489.jpg', '2021-11-02 18:32:25', '2021-11-02 18:32:25'),
(153, 34, 'T3sX_7b5d39bfa175051cf6db628570004d51.jpg', '2021-11-02 18:32:25', '2021-11-02 18:32:25'),
(154, 34, 'RTCy_10fc6e58af47af79345282b96d0c7a0f.jpg', '2021-11-02 18:32:25', '2021-11-02 18:32:25'),
(155, 34, 'xlmg_0346f07572bb4dc583686f87fca695a7.jpg', '2021-11-02 18:32:25', '2021-11-02 18:32:25'),
(156, 35, 'wPV5_0aeae1f8a9f9217dad1123de96a24423.jpg', '2021-11-02 18:35:01', '2021-11-02 18:35:01'),
(157, 35, '0dGm_3c34d41d279fb03e4bf0f05939f182ac.jpg', '2021-11-02 18:35:01', '2021-11-02 18:35:01'),
(158, 35, 'pTqo_9c085214c2c0a6fe5cb07fbfccf16b38.jpg', '2021-11-02 18:35:01', '2021-11-02 18:35:01'),
(159, 35, 'adup_44fe647f24138fda857a341e57d4b97a.jpg', '2021-11-02 18:35:01', '2021-11-02 18:35:01'),
(160, 35, 'MJwk_c85a29bc93daa85f9ce323efb6e863e4.jpg', '2021-11-02 18:35:01', '2021-11-02 18:35:01'),
(161, 36, '6W60_02b1ac08a4b53b7699af7b1a83d9d591.jpg', '2021-11-02 18:45:16', '2021-11-02 18:45:16'),
(162, 36, '9e4e_3b78fbd21a34cb91f9a47eaf67115366.jpg', '2021-11-02 18:45:16', '2021-11-02 18:45:16'),
(163, 36, 'MFM6_5d7d5153b02ae15af6016d7e29b9e43c.jpg', '2021-11-02 18:45:16', '2021-11-02 18:45:16'),
(164, 36, 'DO2N_8fa506edbca1c51e9af892a6c6a66168.jpg', '2021-11-02 18:45:16', '2021-11-02 18:45:16'),
(165, 36, 'cLBY_65f46f615a22e13d4d6f5a061e1bec4b.jpg', '2021-11-02 18:45:16', '2021-11-02 18:45:16'),
(166, 36, 'v0th_e206d1e450c5893ef5d207f530d111aa.jpg', '2021-11-02 18:45:16', '2021-11-02 18:45:16'),
(167, 36, 'lmPh_ef1bbfbcc32dffd6561e17b91532a878.jpg', '2021-11-02 18:45:16', '2021-11-02 18:45:16'),
(168, 36, 'cDtq_f8aad1d1f07aef011c74e9a8df34247c.jpg', '2021-11-02 18:45:16', '2021-11-02 18:45:16'),
(169, 38, 'SLxx_3cc39892eda08b0988b9b652789fbb57.jpg', '2021-11-02 18:55:53', '2021-11-02 18:55:53'),
(170, 38, 'JhPV_4bf349df14964c0607ba6e5a5efadd5a.jpg', '2021-11-02 18:55:53', '2021-11-02 18:55:53'),
(171, 38, 'OzCr_6be9be4400c6b255e128b5eaf9d152ec.jpg', '2021-11-02 18:55:53', '2021-11-02 18:55:53'),
(172, 38, 'WuNw_93c547efc823f76d34df4781e9a81314.jpg', '2021-11-02 18:55:53', '2021-11-02 18:55:53'),
(173, 38, 'ITTw_146b44a423badb672799b1636dde098d.jpg', '2021-11-02 18:55:53', '2021-11-02 18:55:53'),
(174, 38, 'd0Ug_c27e556b0280bb155699c8b3a9403cb0.jpg', '2021-11-02 18:55:53', '2021-11-02 18:55:53'),
(175, 38, '0tit_d9511ab14caa4caa659bf6342878f401.jpg', '2021-11-02 18:55:53', '2021-11-02 18:55:53'),
(176, 38, 'Z4EL_df6c67dc8e89ac0efef9a71c8f0fe302.jpg', '2021-11-02 18:55:53', '2021-11-02 18:55:53'),
(177, 39, 'XDoe_96e20b866b604ed5fd5e88391a3c45b1.jpg', '2021-11-02 18:59:06', '2021-11-02 18:59:06'),
(178, 39, 'BHhp_97199ae201fe2d42749e72aa6067ef50.jpg', '2021-11-02 18:59:06', '2021-11-02 18:59:06'),
(179, 39, 'kt5N_b415e9484c768a65ec6378fb285d7514.jpg', '2021-11-02 18:59:06', '2021-11-02 18:59:06'),
(180, 39, 'ZL5n_c98454379e2803d1e193920a9e753fad.jpg', '2021-11-02 18:59:06', '2021-11-02 18:59:06'),
(181, 39, 'xyqb_cc8710cd304a4e82c67d346a24a7ca5e.jpg', '2021-11-02 18:59:06', '2021-11-02 18:59:06'),
(182, 39, 'aLLo_e5841ac6d2c107511af3d15bb9b72831.jpg', '2021-11-02 18:59:06', '2021-11-02 18:59:06'),
(183, 39, 'Of2H_ebf5182813c844d24f92b34bfadf5059.jpg', '2021-11-02 18:59:06', '2021-11-02 18:59:06'),
(184, 39, 'sjPo_eea2c15225640d9c0bfe00fcd220f8e6.jpg', '2021-11-02 18:59:06', '2021-11-02 18:59:06'),
(185, 40, 'uj4Y_04d7be88f8dfe2f43f499f36af03ec7a.jpg', '2021-11-02 19:01:23', '2021-11-02 19:01:23'),
(186, 40, 'zuQM_48bf070dfc58a0bb642914f6cccc75b3.jpg', '2021-11-02 19:01:23', '2021-11-02 19:01:23'),
(187, 40, '1ych_83def7a296e0b5f359317a366b92f3d1.jpg', '2021-11-02 19:01:24', '2021-11-02 19:01:24'),
(188, 40, 'uAPc_806235c95727267c32f75c78e34cf947.jpg', '2021-11-02 19:01:24', '2021-11-02 19:01:24'),
(189, 41, '3Y5n_0e418e269b592e1f72e07ee47c16f176.jpg', '2021-11-02 19:05:08', '2021-11-02 19:05:08'),
(190, 41, 'Xren_3cd36fc1af0c151acbd63c12eb3f4636.jpg', '2021-11-02 19:05:08', '2021-11-02 19:05:08'),
(191, 41, 'aJnj_9b2e2e8bf4eb17cfd82df8c0acc2f91f.jpg', '2021-11-02 19:05:08', '2021-11-02 19:05:08'),
(192, 41, 'iTrp_89c061813fd3dc369141b7b542a582d3.jpg', '2021-11-02 19:05:08', '2021-11-02 19:05:08'),
(193, 41, 'xHyO_7943d56b0aedb1dd7f222ddabb3829bb.jpg', '2021-11-02 19:05:08', '2021-11-02 19:05:08'),
(194, 41, 'o9B9_1011622af95c45d0a55f0bd2e4d4399b.jpg', '2021-11-02 19:05:08', '2021-11-02 19:05:08'),
(195, 41, 'Y4Vp_a8cfee21cd398becbbec39a79307b774.jpg', '2021-11-02 19:05:08', '2021-11-02 19:05:08'),
(196, 41, '88hk_c056784507ca7f6e5fb3193f61c5f0fe.jpg', '2021-11-02 19:05:08', '2021-11-02 19:05:08'),
(197, 42, 'kFFg_6b843ec928f6b3e6a0524e4bc9b8da9d.jpg', '2021-11-02 19:07:50', '2021-11-02 19:07:50'),
(198, 42, 'YOWE_67d70d867594808430d6219f53041329.jpg', '2021-11-02 19:07:50', '2021-11-02 19:07:50'),
(199, 42, 'dqZM_587c5d8f1b5f8f5873b116df2ab1fad9.jpg', '2021-11-02 19:07:50', '2021-11-02 19:07:50'),
(200, 42, 'ZcWs_6023f28af7dd53bb6ec89934fa94e6e3.jpg', '2021-11-02 19:07:50', '2021-11-02 19:07:50'),
(201, 42, 'ViHE_b760e6eeb98e8c51cf51ba48ead3b116.jpg', '2021-11-02 19:07:50', '2021-11-02 19:07:50'),
(202, 42, 'egWl_e3d72203e2b2091315b612a8b6bfb6a4.jpg', '2021-11-02 19:07:50', '2021-11-02 19:07:50'),
(203, 42, 'NIGN_e31726a3baf427d7735991e8ad38fe7e.jpg', '2021-11-02 19:07:50', '2021-11-02 19:07:50'),
(204, 42, 'PJYX_f84f74f78ab59128cd93512531069657.jpg', '2021-11-02 19:07:50', '2021-11-02 19:07:50'),
(205, 43, 'vLj8_0e5a71c68b9f806e00b93922b8c11ea9.jpg', '2021-11-02 19:10:56', '2021-11-02 19:10:56'),
(206, 43, 'QvfP_1eadede725474b9fbab98183564a0459.jpg', '2021-11-02 19:10:56', '2021-11-02 19:10:56'),
(207, 43, 'vZ2l_288d619136f2bf2dce5766cadcd13e34.jpg', '2021-11-02 19:10:56', '2021-11-02 19:10:56'),
(208, 43, 'yMBb_429ff916569f1d0fea6829ca45373852.jpg', '2021-11-02 19:10:56', '2021-11-02 19:10:56'),
(209, 43, 'juiz_890db05d1b8e3b7c92b4816e8d997412.jpg', '2021-11-02 19:10:56', '2021-11-02 19:10:56'),
(210, 43, 'hc8f_a9675ada53cf4cbc8e8f007a8b9ba14a.jpg', '2021-11-02 19:10:56', '2021-11-02 19:10:56'),
(211, 43, 'SShE_b2463fbdf97367e5022d7837393edc1f.jpg', '2021-11-02 19:10:56', '2021-11-02 19:10:56'),
(212, 43, 'i4oJ_ea6aa4a6108de4a44610c96882612655.jpg', '2021-11-02 19:10:56', '2021-11-02 19:10:56'),
(213, 44, 'OUv0_4f448456c78d901acd17e679f2136f8e.jpg', '2021-11-02 19:13:28', '2021-11-02 19:13:28'),
(214, 44, '4j8Z_31dfd76bbe684bd2c760721f60a3e037.jpg', '2021-11-02 19:13:28', '2021-11-02 19:13:28'),
(215, 44, 'IyvE_a43078f2bc4e974dbdfd9b7718b7a714.jpg', '2021-11-02 19:13:28', '2021-11-02 19:13:28'),
(216, 45, 'tVkp_0cb17a1c3d3ce8b5aaf2a7a583164f33.jpg', '2021-11-02 19:15:24', '2021-11-02 19:15:24'),
(217, 45, 'ozVT_74890b10b8b10ee9f8a7c15e97e7f45f.jpg', '2021-11-02 19:15:25', '2021-11-02 19:15:25'),
(218, 45, 'fZ9b_18159219bb633f3f3a75f224e879a566.jpg', '2021-11-02 19:15:25', '2021-11-02 19:15:25'),
(219, 45, 'rYlW_f1094be4bbd2d43818eb5d5328b62578.jpg', '2021-11-02 19:15:25', '2021-11-02 19:15:25'),
(220, 46, '4ZUL_8eed5cd2d6dbb69dce509bd011001957.jpg', '2021-11-02 19:17:30', '2021-11-02 19:17:30'),
(221, 46, 'Vo9N_80d5802c336971c942bfe25ffa30a49e.jpg', '2021-11-02 19:17:30', '2021-11-02 19:17:30'),
(222, 46, 'wMWE_140746fddd1d6ad8e459a44b25baef1b.jpg', '2021-11-02 19:17:30', '2021-11-02 19:17:30'),
(223, 46, 'Tzv7_c927c54165f9f37389d085635a585088.jpg', '2021-11-02 19:17:30', '2021-11-02 19:17:30'),
(224, 46, 'j1El_d8ca585f7301b5b08822490a014fd6ff.jpg', '2021-11-02 19:17:30', '2021-11-02 19:17:30'),
(225, 46, 'PrKa_f53ebbf4b420143ef539773c2d55d1c4.jpg', '2021-11-02 19:17:30', '2021-11-02 19:17:30'),
(226, 47, '6g13_1156f65c6ee5e1af85de142541c7e501.jpg', '2021-11-02 19:20:45', '2021-11-02 19:20:45'),
(227, 47, 'LIDu_52063fae5a9359119ac44c12207c8e2e.jpg', '2021-11-02 19:20:45', '2021-11-02 19:20:45'),
(228, 47, 'vlXu_d17447032c416fd1cf347382e587d813.jpg', '2021-11-02 19:20:45', '2021-11-02 19:20:45'),
(229, 47, 'R06l_f59ba2b5b3dd28b1a395da411f3cf9f5.jpg', '2021-11-02 19:20:46', '2021-11-02 19:20:46'),
(230, 47, 'e3lp_fd919aca7b68bd3c174911e73bde15ad.jpg', '2021-11-02 19:20:46', '2021-11-02 19:20:46'),
(231, 48, 'reIK_0b64abfba2ffcaa49b80085ce3cc0487.jpg', '2021-11-02 19:35:38', '2021-11-02 19:35:38'),
(232, 48, 'RqYA_2d931e61ec61c44ca4bcae272f2124ed.jpg', '2021-11-02 19:35:38', '2021-11-02 19:35:38'),
(233, 48, 'eR42_7d36a6dc4db42d0af0802bab6b804118.jpg', '2021-11-02 19:35:38', '2021-11-02 19:35:38'),
(234, 48, 'bFK5_39f90c7b7932b8efc95a09b5715ebf9e.jpg', '2021-11-02 19:35:38', '2021-11-02 19:35:38'),
(235, 48, 'jlTQ_852f531e0c0092ef672d2130621e7830.jpg', '2021-11-02 19:35:38', '2021-11-02 19:35:38'),
(236, 48, '5onT_1989f711fff17a8e639a69675456b232.jpg', '2021-11-02 19:35:38', '2021-11-02 19:35:38'),
(237, 48, 'jWHi_92534668fd0deb0e3f40288985acdfe9.jpg', '2021-11-02 19:35:38', '2021-11-02 19:35:38'),
(238, 48, 'aepQ_ffe1e839f89bdf9f99dac4522b5c762e.jpg', '2021-11-02 19:35:39', '2021-11-02 19:35:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shippings`
--

CREATE TABLE `shippings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `shippings`
--

INSERT INTO `shippings` (`id`, `user_id`, `first_name`, `last_name`, `email`, `phone`, `city`, `address`, `notes`, `created_at`, `updated_at`) VALUES
(9, 1, 'Võ', 'Khoa', 'huykhoa670@gmail.com', '0977425396', 'Quảng Nam', 'Bình Chánh, Thăng bình', NULL, '2021-11-05 18:57:55', '2021-11-05 18:57:55'),
(11, 2, 'Võ Đoàn', 'Khuê', 'ngockhue@gmail.com', '0977425396', 'Quảng Nam', 'Bình Chánh, Thăng bình', NULL, '2021-11-16 19:54:41', '2021-11-16 19:54:41'),
(12, 2, 'Võ', 'Khoa', 'huykhoa670@gmail.com', '0977425396', 'Quảng Nam', 'Bình Chánh, Thăng bình', NULL, '2022-01-07 19:44:59', '2022-01-07 19:44:59'),
(13, 2, 'Võ', 'Khoa', 'huykhoa670@gmail.com', '0977425396', 'Quảng Nam', 'Bình Chánh, Thăng bình', NULL, '2022-01-07 20:49:18', '2022-01-07 20:49:18'),
(14, 2, 'Võ', 'Khoa', 'huykhoa630@gmail.com', '0977425396', 'Quảng Nam', 'Bình Chánh, Thăng bình', NULL, '2022-01-08 06:13:17', '2022-01-08 06:13:17'),
(15, 6, 'Võ', 'Khoa', 'huykhoa630@gmail.com', '0977425396', 'Quảng Nam', 'Bình Chánh, Thăng bình', NULL, '2022-01-08 06:59:52', '2022-01-08 06:59:52'),
(16, 6, 'Võ', 'Khoa', 'huykhoa630@gmail.com', '0977425396', 'Quảng Nam', 'Bình Chánh, Thăng bình', NULL, '2022-01-08 07:05:03', '2022-01-08 07:05:03'),
(17, 6, 'Võ', 'Khoa', 'huykhoa670@gmail.com', '0977425396', 'Quảng Nam', 'Bình Chánh, Thăng bình', NULL, '2022-01-08 08:47:32', '2022-01-08 08:47:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `socials`
--

CREATE TABLE `socials` (
  `user` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `provider_user_id` varchar(225) DEFAULT NULL,
  `provider` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `re_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `re_password`, `phone`, `city`, `address`, `image`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vohuykhoa', 'Võ', 'Huy Khoa', 'huykhoa630@gmail.com', NULL, '$2y$10$x6WVccOFGO5fnFtbLJhbnedHd3x6nBUo1shGsM6IY.VfMuj8YUGNq', NULL, '0977425396', 'Quảng Nam', 'Bình Chánh, Thăng bình', 'HuVF_183164676_3000315916963583_8880267438138502213_n.jpg', 1, NULL, '2021-10-31 17:51:44', '2021-11-04 17:26:58'),
(2, NULL, 'Võ Đoàn', 'Ngọc Khuê', 'ngockhue@gmail.com', NULL, '$2y$10$.71P0sbux4kGxl8XI6M1heE5Wm9WSUWpIREyl5R.isyJ1B/F1y3HK', NULL, '0977425396', 'Quảng Nam', 'Bình Chánh, Thăng bình', 'EvKW_ao-hoodie-la-ao-gi-tim-hieu-ao-hoodie.png', 2, NULL, '2021-11-04 17:05:05', '2021-11-17 18:00:00'),
(3, 'vohuykhoa', 'Võ', 'Khoa', 'huykhoa@gmail.com', NULL, '$2y$10$o..q1wzIG0DCgjDK7/cWWe3vy1OBAn3OeBxLqVXzq0OoSxSGNnmfi', NULL, NULL, NULL, NULL, NULL, 2, NULL, '2022-01-08 06:14:17', '2022-01-08 06:14:17'),
(6, 'vohuykhoa', 'Võ', 'Khoa', 'vohuykhoa@gmail.com', NULL, '$2y$10$PWHWKnP9iiPsDJE8Rm8YGOre6V8.DbR6BsFWmCeKSFwmIDlmQ6UKG', NULL, NULL, NULL, NULL, NULL, 2, NULL, '2022-01-08 06:16:06', '2022-01-08 06:16:06');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_categories_id_foreign` (`categories_id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_class_id_foreign` (`class_id`);

--
-- Chỉ mục cho bảng `classifies`
--
ALTER TABLE `classifies`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_users_id_foreign` (`users_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oders`
--
ALTER TABLE `oders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oders_user_id_foreign` (`user_id`),
  ADD KEY `oders_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `oder_details`
--
ALTER TABLE `oder_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oder_details_users_id_foreign` (`users_id`),
  ADD KEY `oder_details_shipping_id_foreign` (`shipping_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_foreign` (`brand`);

--
-- Chỉ mục cho bảng `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_attributes_product_id_foreign` (`product_id`),
  ADD KEY `product_attributes_attribute_id_foreign` (`attribute_id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shippings_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`user`),
  ADD KEY `user_id` (`user_id`);

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
-- AUTO_INCREMENT cho bảng `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `classifies`
--
ALTER TABLE `classifies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `oders`
--
ALTER TABLE `oders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `oder_details`
--
ALTER TABLE `oder_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=422;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT cho bảng `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `socials`
--
ALTER TABLE `socials`
  MODIFY `user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classifies` (`id`);

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `oders`
--
ALTER TABLE `oders`
  ADD CONSTRAINT `oders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `oders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `oder_details`
--
ALTER TABLE `oder_details`
  ADD CONSTRAINT `oder_details_shipping_id_foreign` FOREIGN KEY (`shipping_id`) REFERENCES `shippings` (`id`),
  ADD CONSTRAINT `oder_details_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `oders` (`user_id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_foreign` FOREIGN KEY (`brand`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD CONSTRAINT `product_attributes_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`),
  ADD CONSTRAINT `product_attributes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `shippings`
--
ALTER TABLE `shippings`
  ADD CONSTRAINT `shippings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `socials`
--
ALTER TABLE `socials`
  ADD CONSTRAINT `socials_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
