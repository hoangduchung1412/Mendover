-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 19, 2023 lúc 04:48 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php60_project_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`) VALUES
(1, 'Nhà Ở', 0),
(2, 'Căn Hộ', 0),
(3, 'Chung Cư', 0),
(4, 'Văn Phòng', 0),
(5, 'Nhà Ở Dự Án', 0),
(6, 'Loại Khác', 0),
(7, 'Mẫu Nhà Phố Đẹp', 1),
(8, 'Căn Hộ Pearl Plaza', 1),
(9, 'Khu Căn Hộ SSG Tower', 1),
(10, 'Times City Park Hill', 1),
(12, 'Căn hộ Pearl Plaza', 2),
(13, 'Khu Căn Hộ SSG Tower', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `address`, `phone`, `password`) VALUES
(4, 'Hoang Duc Hung', 'hdh@gmail.com', 'Ha Noi', '123', '202cb962ac59075b964b07152d234b70'),
(5, 'Nguyễn Văn A', 'nva@gmail.com', 'Hà Nội', '456', '202cb962ac59075b964b07152d234b70'),
(6, 'Hoang Duc Hung', 'nvb@gmail.com', 'Hà Nam', '0940858211', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `content` text NOT NULL,
  `hot` int(11) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `name`, `description`, `content`, `hot`, `photo`) VALUES
(1, 'Nội thất căn hộ với những màu sắc tương phản', '<p>Căn hộ chung cư n&agrave;y c&oacute; diện t&iacute;ch kh&aacute; nhỏ, n&ecirc;n c&aacute;c kiến tr&uacute;c sư đ&atilde; lựa chọn kết hợp m&agrave;u đen với m&agrave;u v&agrave;ng của gỗ để tạo n&ecirc;n một sự tương phản nổi bật l&agrave;m cho căn hộ ấn tượng cũng như ấm &aacute;p...</p>\r\n', '<p>Căn hộ chung cư n&agrave;y c&oacute; diện t&iacute;ch kh&aacute; nhỏ, n&ecirc;n c&aacute;c kiến tr&uacute;c sư đ&atilde; lựa chọn kết hợp m&agrave;u đen với m&agrave;u v&agrave;ng của gỗ để tạo n&ecirc;n một sự tương phản nổi bật l&agrave;m cho căn hộ ấn tượng cũng như ấm &aacute;p hơn.&nbsp;C&aacute;c kh&ocirc;ng gian trong nh&agrave; được bao tr&ugrave;m trong t&ocirc;ng m&agrave;u đen kết hợp với s&agrave;n gỗ vừa mang lại một n&eacute;t c&aacute; t&iacute;nh hiện đại cũng như kh&ocirc;ng k&eacute;m phần ấm &aacute;p cho căn hộ.</p>\r\n\r\n<p>Kh&ocirc;ng gian nh&agrave; bếp c&oacute; thiết kế h&igrave;nh chữ L gọn g&agrave;ng v&agrave; được đặt tại một g&oacute;c của ng&ocirc;i nh&agrave; để kh&ocirc;ng chiếm qu&aacute; nhiều diện t&iacute;ch.&nbsp;Kh&ocirc;ng gian ph&ograve;ng ngủ ấm c&uacute;ng được bao bọc bởi trần, s&agrave;n v&agrave; tường gỗ kết hợp với hệ thống &aacute;nh s&aacute;ng &acirc;m s&agrave;n mang lại một cảm gi&aacute;c thư gi&atilde;n tuyệt vời cho kh&ocirc;ng gian.</p>\r\n', 1, '1655520943_news1.webp'),
(2, 'Căn hộ chung cư đẹp với phong cách Scandinavian', '<p>Căn hộ chung cư đẹp n&agrave;y l&agrave; một kh&ocirc;ng gian sống sang trọng được thiết kế theo phong c&aacute;ch Scandinavian trang nh&atilde; với t&ocirc;ng m&agrave;u trắng s&aacute;ng chủ đạo bao tr&ugrave;m to&agrave;n bộ kh&ocirc;ng gian. Phong c&aacute;ch Scandinavian l&agrave; một phong c&aacute;ch rất phong ph&uacute;...</p>\r\n', '<p>Căn hộ chung cư đẹp n&agrave;y l&agrave; một kh&ocirc;ng gian sống sang trọng được thiết kế theo phong c&aacute;ch Scandinavian trang nh&atilde; với t&ocirc;ng m&agrave;u trắng s&aacute;ng chủ đạo bao tr&ugrave;m to&agrave;n bộ kh&ocirc;ng gian.</p>\r\n\r\n<p>Phong c&aacute;ch Scandinavian l&agrave; một phong c&aacute;ch rất phong ph&uacute; v&agrave; đa dạng, n&oacute; thể l&agrave; mang lại cho bạn một kh&ocirc;ng gian tươi s&aacute;ng hoặc dịu nhẹ, đơn giản hay chiết trung, hiện đại hoặc sang trọng, tự nhi&ecirc;n hay đầy m&agrave;u sắc v.v... t&ugrave;y v&agrave;o phong c&aacute;ch v&agrave; c&aacute; t&iacute;nh ri&ecirc;ng của mỗi người, thiết kế Scandinavian đều c&oacute; thể cho bạn một mẫu nh&agrave; ph&ugrave; hợp.</p>\r\n', 1, '1655521200_news2.webp'),
(3, 'Mê mẩn với căn hộ chung cư có thiết kế nội thất hoàn hảo', '<p>Căn hộ chung cư n&agrave;y l&agrave; một thiết kế đ&aacute;ng tham khảo bởi n&oacute; mang một vẻ đẹp tuyệt vời của phong c&aacute;ch hiện đại v&agrave; sự kết hợp ho&agrave;n hảo giữa c&aacute;c m&agrave;u sắc được lấy cảm hứng từ thi&ecirc;n nhi&ecirc;n tạo n&ecirc;n một kh&ocirc;ng...</p>\r\n', '<p>Căn hộ chung cư n&agrave;y l&agrave; một thiết kế đ&aacute;ng tham khảo bởi n&oacute; mang một vẻ đẹp tuyệt vời của&nbsp;phong c&aacute;ch hiện đại v&agrave; sự kết hợp ho&agrave;n hảo giữa c&aacute;c m&agrave;u sắc được lấy cảm hứng từ thi&ecirc;n nhi&ecirc;n tạo n&ecirc;n một kh&ocirc;ng gian sống ấm c&uacute;ng v&agrave; sang trọng.</p>\r\n\r\n<p>C&aacute;c t&ocirc;ng m&agrave;u v&agrave;ng của nội thất gỗ, m&agrave;u x&aacute;m v&agrave; trắng được sử dụng như những t&ocirc;ng m&agrave;u ch&iacute;nh của ng&ocirc;i nh&agrave;, tạo n&ecirc;n những điển nhấn nổi bật th&ocirc;ng qua sự tương phản giữa c&aacute;c m&agrave;u sắc.</p>\r\n\r\n<p>Một trong những khuyết điểm của căn hộ chung cư l&agrave; c&oacute; diện t&iacute;ch kh&aacute; khi&ecirc;m tốn n&ecirc;n giải ph&aacute;p kh&ocirc;ng gian mở cho c&aacute;c khu vực sinh hoạt chung như ph&ograve;ng kh&aacute;ch, ph&ograve;ng ăn v&agrave; nh&agrave; bếp l&agrave; lựa chọn h&agrave;ng đầu để c&oacute; được một kh&ocirc;ng gian rộng r&atilde;i.</p>\r\n', 1, '1655521313_news3.webp'),
(4, 'Mẫu căn hộ cao cấp với nội thất gỗ ấm cúng', '<p>Sang trọng, ấm c&uacute;ng v&agrave; tươi s&aacute;ng l&agrave; những cảm gi&aacute;c m&agrave; căn hộ cao cấp n&agrave;y mang lại với thiết kế nội thất hiện đại tinh tế. Một sự phối hợp ho&agrave;n hảo giữa c&aacute;c t&ocirc;ng m&agrave;u v&agrave;ng n&acirc;u của gỗ, trắng v&agrave; một v&agrave;i...</p>\r\n', '<p>Sang trọng, ấm c&uacute;ng v&agrave; tươi s&aacute;ng l&agrave; những cảm gi&aacute;c m&agrave; căn hộ cao cấp n&agrave;y mang lại với thiết kế nội thất hiện đại tinh tế. Một sự phối hợp ho&agrave;n hảo giữa c&aacute;c t&ocirc;ng m&agrave;u v&agrave;ng n&acirc;u của gỗ, trắng v&agrave; một v&agrave;i điểm nhấn m&agrave;u đen sẽ c&agrave;ng l&agrave;m căn hộ chung cư của bạn th&ecirc;m nổi bật v&agrave; ấn tượng.</p>\r\n\r\n<p>C&aacute;c t&ocirc;ng m&agrave;u trung t&iacute;nh mang lại cho kh&ocirc;ng gian sống một bầu kh&ocirc;ng kh&iacute; &ecirc;m dịu, nhẹ nh&agrave;ng v&agrave; thư gi&atilde;n. Ph&iacute;a sau bộ sofa h&igrave;nh chữ L m&agrave;u x&aacute;m tinh tế l&agrave; một h&agrave;ng c&acirc;y nhỏ tạo th&ecirc;m điểm nhấn m&agrave;u xanh cũng như cảm gi&aacute;c gần gũi với thi&ecirc;n nhi&ecirc;n cho kh&ocirc;ng gian.</p>\r\n\r\n<p>Kh&ocirc;ng gian ph&ograve;ng kh&aacute;ch c&ograve;n được kết hợp với nh&agrave; bếp v&agrave; ph&ograve;ng ăn tạo th&agrave;nh một khối kh&ocirc;ng gian mở rộng r&atilde;i, một thiết kế điển h&igrave;nh cho những căn hộ chung cư hiện đại.</p>\r\n', 1, '1655521359_news4.webp'),
(5, 'Thiết kế ấm cúng và sáng sủa cho nhà nhỏ đẹp 29m2', '<p>Xu hướng ph&aacute;t triển những ng&ocirc;i nh&agrave; nhỏ đẹp đang ng&agrave;y c&agrave;ng phổ biến bởi v&igrave; n&oacute; c&oacute; một mức gi&aacute; hợp l&yacute; với một diện t&iacute;ch ph&ugrave; hợp nhu cầu của thế hệ trẻ c&oacute; một cuộc sống năng động. Kh&ocirc;ng cần qu&aacute; nhiều...</p>\r\n', '<p>Xu hướng ph&aacute;t triển những ng&ocirc;i nh&agrave; nhỏ đẹp đang ng&agrave;y c&agrave;ng phổ biến bởi v&igrave; n&oacute; c&oacute; một mức gi&aacute; hợp l&yacute; với một diện t&iacute;ch ph&ugrave; hợp nhu cầu của thế hệ trẻ c&oacute; một cuộc sống năng động.</p>\r\n\r\n<p>Kh&ocirc;ng cần qu&aacute; nhiều diện t&iacute;ch hay nhiều ph&ograve;ng, chỉ cần một kh&ocirc;ng gian đủ cho 1 hay 2 người v&agrave; đầy đủ tiện nghi cũng như c&oacute; một thiết kế nội thất đẹp l&agrave; những g&igrave; thế hệ trẻ tương lai đang hướng đến. Ng&ocirc;i nh&agrave; nhỏ đẹp n&agrave;y chỉ c&oacute; diện t&iacute;ch 29m2 nhưng nhờ v&agrave;o sự ph&acirc;n bổ kh&ocirc;ng gian một c&aacute;ch khoa học v&agrave; hợp l&yacute; n&ecirc;n mỗi một cm trong nh&agrave; đều được sử dụng một c&aacute;ch hiệu quả mang lại một kh&ocirc;ng gian sống tiện nghi, rộng r&atilde;i v&agrave; ấm c&uacute;ng.</p>\r\n\r\n<p>Do c&oacute; diện t&iacute;ch nhỏ, n&ecirc;n mỗi một kh&ocirc;ng gian đều cần phải được t&iacute;nh to&aacute;n kỹ lưỡng để tạo n&ecirc;n một ng&ocirc;i nh&agrave; rộng r&atilde;i. C&aacute;c nh&agrave; thiết kế đ&atilde; kết hợp nh&agrave; bếp mở v&agrave; ph&ograve;ng ngủ th&agrave;nh một khối đa năng gọn g&agrave;ng với mặt ngo&agrave;i l&agrave; nh&agrave; bếp c&oacute; chiều d&agrave;i chung l&agrave; 2,71m v&agrave; chiều s&acirc;u l&agrave; 0,6m. C&ograve;n kh&ocirc;ng gian ph&ograve;ng ngủ c&oacute; chiều rộng l&agrave; 1,52m vừa cho một chiếc giường l&agrave;m nơi nghỉ ngơi gọn g&agrave;ng d&agrave;nh cho gia chủ.</p>\r\n\r\n<p>Kh&ocirc;ng gian ph&ograve;ng kh&aacute;ch được thiết kế gọn g&agrave;ng đơn giản với bộ ghế sofa g&oacute;c h&igrave;nh chữ L. Kế b&ecirc;n kệ tivi l&agrave; g&oacute;c b&agrave;n l&agrave;m việc hay b&agrave;n học bằng gỗ mộc mạc. To&agrave;n bộ ng&ocirc;i nh&agrave; được bao tr&ugrave;m bởi t&ocirc;ng m&agrave;u trung t&iacute;nh tạo n&ecirc;n một kh&ocirc;ng gian s&aacute;ng sủa v&agrave; l&agrave;m tăng cảm gi&aacute;c rộng r&atilde;i hơn cho ng&ocirc;i nh&agrave; nhỏ.</p>\r\n', 1, '1655521456_news5.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(1, 1, 24, 2, 4300000000),
(2, 1, 22, 1, 5000000000),
(3, 2, 23, 1, 4100000000),
(4, 3, 23, 2, 4100000000),
(5, 4, 24, 1, 4300000000),
(6, 6, 10, 1, 4300000000),
(7, 7, 24, 1, 4300000000),
(8, 8, 24, 1, 4300000000),
(9, 9, 24, 1, 4300000000),
(10, 9, 23, 2, 4100000000),
(11, 10, 24, 1, 4300000000),
(12, 10, 22, 1, 5000000000),
(13, 11, 23, 2, 4100000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `price` float NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `date`, `price`, `status`) VALUES
(1, 4, '2022-06-15', 13500000000, 1),
(2, 4, '2022-06-15', 4100000000, 1),
(3, 4, '2022-06-16', 8200000000, 1),
(4, 4, '2022-06-27', 4300000000, 1),
(6, 4, '2022-06-29', 4300000000, 1),
(7, 4, '2022-07-21', 4300000000, 1),
(8, 5, '2022-07-22', 4300000000, 1),
(9, 5, '2022-07-23', 12500000000, 1),
(10, 5, '2022-07-24', 9200000000, 1),
(11, 6, '2022-07-24', 8200000000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `content` text NOT NULL,
  `hot` int(11) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `discount` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `content`, `hot`, `photo`, `price`, `discount`, `category_id`) VALUES
(1, 'Căn hộ 2PN tại Pearl Plaza', '', '', 1, '1653986946_tg7.webp', 250000000, 0, 2),
(2, 'Căn hộ 3 PN tại Pearl Plaza', '', '', 1, '1653986934_tg6.webp', 3000000000, 6, 2),
(3, 'Bán căn hộ SSG Tower 3PN', '', '', 1, '1653986910_tg4.webp', 3300000000, 0, 2),
(4, 'Bán căn hộ SSG Tower 2PN', '', '', 1, '1653986874_tg3.webp', 3000000000, 0, 2),
(5, 'Nhà phố đẹp 3 tầng khắc phục nắng hướng Tây', '', '', 1, '1653986861_tg2.webp', 4100000000, 0, 1),
(6, 'Nhà đẹp 2 tầng với thiết kế gần gũi thiên nhiên', '', '', 1, '1653986843_tg1.webp', 5000000000, 2, 1),
(8, 'Căn hộ Pearl Plaza 3 phòng ngủ tầng 11', '', '', 1, '1654748410_prd1.webp', 250000000, 4, 2),
(9, 'Bán căn hộ 3PN tại Pearl Plaza ||', '', '', 1, '1654748418_prd2.webp', 3000000000, 6, 2),
(10, 'Căn hộ Times City Park Hill GVD', '', '', 1, '1654748425_prd3.webp', 4300000000, 0, 2),
(11, 'Bán căn hộ SSG Tower 3PN', '', '', 1, '1654748433_prd4.webp', 3300000000, 0, 2),
(12, 'Bán căn hộ Pent House tầng 18', '', '', 1, '1654748441_prd5.webp', 2200000000, 0, 2),
(13, 'Bán căn hộ Pent House tầng 10', '', '', 1, '1654748449_prd6.webp', 2200000000, 6, 2),
(14, 'Căn hộ Pent House tầng 16', '', '', 1, '1654763231_prd7.webp', 3200000000, 0, 2),
(15, 'Căn hộ 2PN tại Pearl Plaza', '', '', 1, '1654763265_prd8.webp', 250000000, 0, 2),
(16, 'Nhà phố đẹp 4 tầng hiện đại', '', '', 1, '1654763315_prd9.webp', 5000000000, 0, 1),
(17, 'Mẫu thiết kế nhà phố đẹp 2 tầng hiện đại', '', '', 1, '1654763459_prd10.webp', 500000000, 0, 1),
(18, 'Mẫu thiết kế nhà phố đẹp 2 tầng hiện đại đơn giản', '', '', 1, '1654763521_prd11.webp', 5100000000, 0, 1),
(19, 'Mẫu thiết kế nhà phố đẹp hiện đại 3 tầng', '', '', 1, '1654763579_prd12.webp', 5000000000, 10, 1),
(20, 'Nhà phố đẹp 4 tầng hiện đại tiện nghi', '', '', 1, '1654763671_prd13.webp', 7000000000, 20, 1),
(21, 'Mẫu nhà phố đẹp 5 tầng với tông màu đơn sắc', '', '', 1, '1654763719_prd14.webp', 2700000000, 7, 1),
(22, 'Nhà đẹp 2 tầng với thiết kế gần gũi thiên nhiên', '', '', 1, '1654763762_prd15.webp', 5000000000, 2, 1),
(23, 'Nhà phố đẹp 3 tầng khắc phục nắng hướng Tây', '', '', 1, '1654763809_prd16.webp', 4100000000, 0, 1),
(24, 'Bán căn hộ Times City Park Hill', '<p>B&aacute;n căn hộ Pearl Plaza - Pearl Plaza (t&ecirc;n cũ SSG TOWER) c&oacute; một lợi thế rất lớn do nằm ngay g&oacute;c ng&atilde; tư trục đường lớn ra v&agrave;o th&agrave;nh phố, g&oacute;c đường Điện Bi&ecirc;n Phủ v&agrave; đường D1, đ&acirc;y l&agrave; vị tr&iacute; thuận tiện dễ d&agrave;ng di chuyển qua c&aacute;c v&ugrave;ng kh&aacute;c bằng nhiều phương tiện kh&aacute;c nhau, taxi, xe bu&yacute;t, xe &ocirc;m cho đến t&agrave;u điện ngầm (tuyến Metro Bến Th&agrave;nh - Suối Ti&ecirc;n), sỡ hữu cơ sở hạ tầng về giao th&ocirc;ng v&agrave; tiện &iacute;ch thuộc diện bật nhất tại Quận B&igrave;nh Thạnh.&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</p>\r\n', '', 0, '1654763864_prd17.webp', 4300000000, 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Nguyễn Văn A', 'nva@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Nguyễn Văn B', 'nvb@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Nguyễn Văn C', 'nvc@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'Nguyễn Văn D', 'nvd@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'Nguyễn Văn E', 'nve@gmail.com', '202cb962ac59075b964b07152d234b70');

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
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
