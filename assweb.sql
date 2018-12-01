-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 22, 2018 lúc 05:52 PM
-- Phiên bản máy phục vụ: 8.0.12
-- Phiên bản PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `assweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda'),
(2, 'admin2', 'c84258e9c39059a89ab77d846ddab909'),
(3, 'admin3', '32cacb2f994f6b42183a1300d9a3e8d6');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `content_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id_post` int(255) NOT NULL,
  `poster` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date_time` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  `decription` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `typepost` int(11) NOT NULL,
  `img_lnk` text CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `contentpost` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id_post`, `poster`, `date_time`, `title`, `decription`, `typepost`, `img_lnk`, `contentpost`, `status`) VALUES
(4, 'admin1', '2018-11-08 00:00:00', 'Vụt Mất - Wanbi Tuấn Anh', 'Mặc dù không theo trào lưu camera kép, nhưng camera trên các đời Google Pixel và Bphone 2, Bphone 3 vẫn có thể xoá phông và chụp ảnh đẹp. Vậy điểm mấu chốt của chụp ảnh xoá phông là yếu tố gì?', 2, 'b1.jpg', 'Năm 2018 đánh dấu sự bùng nổ của nhiều xu thế mới trong làng di động, mà nổi bật nhất là trào lưu màn hình tràn viền với cụm “tai thỏ” và camera kép. Trong đó, tính năng camera kép đã xuất hiện ngày một nhiều trên smartphone, đánh dấu bước ngoặt khi cho phép người dùng chụp ảnh xoá phông, zoom ảnh hiệu quả, đồng thời gia tăng đáng kể trải nghiệm sử dụng. Nó phổ biến tới mức nhiều người nghĩ rằng smartphone phải có tới 2 camera, hay thậm chí là 3 camera như dòng Huawei P20 Pro mới có thể chụp xoá phông. Tuy nhiên, Google đã chứng minh điều ngược lại với dòng sản phẩm Pixel, khi có thể xoá phông và chụp ảnh ấn tượng với chỉ một ống kính camera duy nhất. Vậy họ đã làm thế nào? \r\nTrí tuệ nhân tạo là “chìa khoá”\r\nTrước hết, chúng ta cần hiểu rằng xoá phông trên smartphone có cơ chế hoàn toàn khác so với máy ảnh. Cụ thể, thay vì có thể điều chỉnh tiêu cự của ống kính để cho ra bức ảnh xoá phông ưng ý, camera smartphone sẽ nhờ tới sự can thiệp của phần mềm và thuật toán để xác định được đâu là chủ thể, đâu là khung nền. Chính bởi vậy mà đa số smartphone chụp ảnh xoá phông hiện nay chủ yếu có trang bị camera kép với 2 tiêu cự ống kính khác nhau, cho phép nhận dạng và tách ảnh được nhanh và chính xác. Khả năng cho ra những bức ảnh xoá phông đẹp và ấn tượng mà không cần tới máy ảnh DSLR đã nhanh chóng thu hút người dùng, tạo ra trào lưu cho nhiều smartphone Android học theo. Tuy nhiên, Google đã mở ra một lối đi mới, đó là chỉ sử dụng một camera, nhưng vẫn có thể xoá phông và chụp ảnh hiệu quả. Chiến lược này được Google áp dụng trên cả 3 phiên bản của Google Pixel, bao gồm cả thế hệ Pixel 3 sắp được ra mắt vào 18/10 tới đây.Sở dĩ làm được điều này, Google đã nghiên cứu và phát triển một thuật toán AI mới, qua đó dạy cho máy ảnh nhận biết được đâu là chủ thể, đâu là phông nền. Bên cạnh đó, các dòng chip Snapdragon mới của Qualcomm như 636, 660,... cũng nâng cấp đáng kể khả năng chụp ảnh xoá phông trên smartphone 1 camera. Kết quả là ảnh chụp trên Google Pixel, Pixel 2 được đông đảo người dùng đón nhận và đánh giá cao. Tổ chức DxOMark thậm chí xếp hạng camera của Google Pixel 2 cao hơn iPhone X, và xấp xỉ với số điểm của Samsung Galaxy S9+. Trong đó, khả năng xoá phông của Pixel 2 được xếp vào hạng mục “Ấn tượng”. Cụ thể, thay vì có thể điều chỉnh tiêu cự của ống kính để cho ra bức ảnh xoá phông ưng ý, camera smartphone sẽ nhờ tới sự can thiệp của phần mềm và thuật toán để xác định được đâu là chủ thể, đâu là khung nền. Chính bởi vậy mà đa số smartphone chụp ảnh xoá phông hiện nay chủ yếu có trang bị camera kép với 2 tiêu cự ống kính khác nhau, cho phép nhận dạng và tách ảnh được nhanh và chính xác. Khả năng cho ra những bức ảnh xoá phông đẹp và ấn tượng mà không cần tới máy ảnh DSLR đã nhanh chóng thu hút người dùng, tạo ra trào lưu cho nhiều smartphone Android học theo. Tuy nhiên, Google đã mở ra một lối đi mới, đó là chỉ sử dụng một camera, nhưng vẫn có thể xoá phông và chụp ảnh hiệu quả. Chiến lược này được Google áp dụng trên cả 3 phiên bản của Google Pixel, bao gồm cả thế hệ Pixel 3 sắp được ra mắt vào 18/10 tới đây.Sở dĩ làm được điều này, Google đã nghiên cứu và phát triển một thuật toán AI mới, qua đó dạy cho máy ảnh nhận biết được đâu là chủ thể, đâu là phông nền. Bên cạnh đó, các dòng chip Snapdragon mới của Qualcomm như 636, 660,... cũng nâng cấp đáng kể khả năng chụp ảnh xoá phông trên smartphone 1 camera. Kết quả là ảnh chụp trên Google Pixel, Pixel 2 được đông đảo người dùng đón nhận và đánh giá cao. Tổ chức DxOMark thậm chí xếp hạng camera của Google Pixel 2 cao hơn iPhone X, và xấp xỉ với số điểm của Samsung Galaxy S9+. Trong đó, khả năng xoá phông của Pixel 2 được xếp vào hạng mục “Ấn tượng”. Cụ thể, thay vì có thể điều chỉnh tiêu cự của ống kính để cho ra bức ảnh xoá phông ưng ý, camera smartphone sẽ nhờ tới sự can thiệp của phần mềm và thuật toán để xác định được đâu là chủ thể, đâu là khung nền. Chính bởi vậy mà đa số smartphone chụp ảnh xoá phông hiện nay chủ yếu có trang bị camera kép với 2 tiêu cự ống kính khác nhau, cho phép nhận dạng và tách ảnh được nhanh và chính xác. Khả năng cho ra những bức ảnh xoá phông đẹp và ấn tượng mà không cần tới máy ảnh DSLR đã nhanh chóng thu hút người dùng, tạo ra trào lưu cho nhiều smartphone Android học theo. Tuy nhiên, Google đã mở ra một lối đi mới, đó là chỉ sử dụng một camera, nhưng vẫn có thể xoá phông và chụp ảnh hiệu quả. Chiến lược này được Google áp dụng trên cả 3 phiên bản của Google Pixel, bao gồm cả thế hệ Pixel 3 sắp được ra mắt vào 18/10 tới đây.Sở dĩ làm được điều này, Google đã nghiên cứu và phát triển một thuật toán AI mới, qua đó dạy cho máy ảnh nhận biết được đâu là chủ thể, đâu là phông nền. Bên cạnh đó, các dòng chip Snapdragon mới của Qualcomm như 636, 660,... cũng nâng cấp đáng kể khả năng chụp ảnh xoá phông trên smartphone 1 camera. Kết quả là ảnh chụp trên Google Pixel, Pixel 2 được đông đảo người dùng đón nhận và đánh giá cao. Tổ chức DxOMark thậm chí xếp hạng camera của Google Pixel 2 cao hơn iPhone X, và xấp xỉ với số điểm của Samsung Galaxy S9+. Trong đó, khả năng xoá phông của Pixel 2 được xếp vào hạng mục “Ấn tượng”.', 1),
(5, 'admin1', '2018-11-10 00:00:00', 'Meow meow', 'Meow meow', 1, 'b2.jpg', 'acsacsacsacsacsac', 1),
(6, 'admin1', '2018-11-23 00:00:00', 'ĐỒ NGON - HAZARD CLIQUE x G-FAMILY', '\r\nPhong tỏa tầng tầng lớp lớp ám kim sắc phù văn xiềng xích trong phòng cất giữ, từng kiện đồ cất giữ ngổn ngang lộn xộn tán loạn trên mặt đất, trên kệ.\r\n\r\nMặt đất chăn lông có hơn phân nửa là cháy đen lửa đốt qua dấu vết, còn lại bộ phận cũng đều là dính lấy màu xám trắng, không biết bị thứ gì nhiễm lên.\r\n\r\nTrong phòng ngoài phòng hoàn toàn yên tĩnh. Bên ngoài ven hồ nước dựng lấy lều nhỏ, mơ hồ có phòng giữ người nhàn nhạt tiếng hít thở, tựa hồ cũng ngủ thiếp đi.\r\n', 3, 'b3.jpg', 'yx3AtIyyv3c', 1),
(7, 'admin1', '2018-10-17 00:00:00', 'Người Khác - Phan Mạnh Quỳnh ft. Drum7', '\r\nPhong tỏa tầng tầng lớp lớp ám kim sắc phù văn xiềng xích trong phòng cất giữ, từng kiện đồ cất giữ ngổn ngang lộn xộn tán loạn trên mặt đất, trên kệ.\r\n\r\nMặt đất chăn lông có hơn phân nửa là cháy đen lửa đốt qua dấu vết, còn lại bộ phận cũng đều là dính lấy màu xám trắng, không biết bị thứ gì nhiễm lên.\r\n\r\nTrong phòng ngoài phòng hoàn toàn yên tĩnh. Bên ngoài ven hồ nước dựng lấy lều nhỏ, mơ hồ có phòng giữ người nhàn nhạt tiếng hít thở, tựa hồ cũng ngủ thiếp đi.\r\n', 4, 'b4.jpg', '\r\nPhong tỏa tầng tầng lớp lớp ám kim sắc phù văn xiềng xích trong phòng cất giữ, từng kiện đồ cất giữ ngổn ngang lộn xộn tán loạn trên mặt đất, trên kệ.\r\n\r\nMặt đất chăn lông có hơn phân nửa là cháy đen lửa đốt qua dấu vết, còn lại bộ phận cũng đều là dính lấy màu xám trắng, không biết bị thứ gì nhiễm lên.\r\n\r\nTrong phòng ngoài phòng hoàn toàn yên tĩnh. Bên ngoài ven hồ nước dựng lấy lều nhỏ, mơ hồ có phòng giữ người nhàn nhạt tiếng hít thở, tựa hồ cũng ngủ thiếp đi.\r\n', 1),
(8, 'admin1', '0000-00-00 00:00:00', 'Camila Cabello - Havana ( cover by J.Fla )', '', 2, '', 'i1R4R84-EPA', 0),
(9, 'admin1', '0000-00-00 00:00:00', 'Hình vui 7', '', 1, '', 'p7.jpg', 1),
(10, 'admin1', '0000-00-00 00:00:00', 'Hình vui 13', '', 1, '', 'p13.jpg', 0),
(11, 'admin1', '0000-00-00 00:00:00', 'Hot Girl bán bơ :))', '', 2, '', 'wulyPTZECuE', 1),
(12, 'admin1', '0000-00-00 00:00:00', 'Hot Girl nhảy như mơ :))', '', 2, '', '0D3nsCxMWKQ', 0),
(13, 'admin1', '0000-00-00 00:00:00', 'The Coffee House', '', 1, '', 'tch.jpg', 0),
(16, 'admin2', '0000-00-00 00:00:00', 'Park Hyo Shin - 눈의 꽃 (Snow Flower) [Han & Eng]', '', 2, '', '6dgDuXBOzV0', 0),
(17, '2', '2018-11-22 05:16:04', 'qừegfdhghmj', 'fghm,jkfngdn', 3, 'b4.jpg', '<div>sdvsdvbsfbsbsd</div>', 0),
(18, '2', '2018-11-22 05:36:28', 'acsacasc', 'âcscascacac', 2, 'b1.jpg', 'ávassávassávassávassávassávassávassávassávassávassávassávassávass', 0),
(19, '2', '2018-11-22 05:41:11', 'Game', 'Game', 3, 'Game', '<div><ol class=\"breadcrumb\" style=\"margin: 0px 0px 1rem; color: rgb(85, 85, 85); font-family: Roboto, sans-serif;\"><li class=\"breadcrumb-item\" style=\"padding-left: 0.5rem;\"><a href=\"http://localhost/page/game.php\">Game</a></li><li></li></ol></div>', 0),
(20, '2', '2018-11-22 05:41:42', 'XE', 'XE', 2, 'XE', '<div><h3 class=\"col-md-7 col-sm-6 col-6\" style=\"font-family: Roboto, sans-serif; color: rgb(85, 85, 85); width: 877.906px; flex-basis: 58.3333%; max-width: 58.3333%;\">XE</h3></div>', 0),
(21, '2', '2018-11-22 05:44:51', 'Create a Topic', 'Create a Topic', 3, 'Create a Topic', '<div><h2 style=\"font-family: Roboto, sans-serif; color: rgb(85, 85, 85); text-align: center;\">Create a Topic</h2></div>', 0),
(22, '2', '2018-11-22 05:45:06', 'Create a Topic', 'Create a Topic', 2, 'Create a Topic', '<div><h2 style=\"font-family: Roboto, sans-serif; color: rgb(85, 85, 85); text-align: center;\">Create a Topic</h2></div>', 0),
(23, '2', '2018-11-22 05:45:15', 'Create a Topic', 'Create a Topic', 1, 'Create a Topic', '<div><h2 style=\"font-family: Roboto, sans-serif; color: rgb(85, 85, 85); text-align: center;\">Create a Topic</h2></div>', 0),
(24, '2', '2018-11-22 05:45:25', 'Create a Topic', 'Create a Topic', 4, 'Create a Topic', '<div><h2 style=\"font-family: Roboto, sans-serif; color: rgb(85, 85, 85); text-align: center;\">Create a Topic</h2></div>', 0),
(28, 'Duc', '2018-11-22 05:54:54', 'morrowland Belgium 2018', 'morrowland Belgium 2018', 1, 'morrowland Belgium 2018', '<div><h1 class=\"title style-scope ytd-video-primary-info-renderer\" style=\"margin-bottom: 0px; border: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; max-height: 4.8rem; overflow: hidden; line-height: 2.4rem; font-family: Roboto, Arial, sans-serif; font-size: var(--ytd-video-primary-info-renderer-title-font-size, 1.8rem); transform: var(--ytd-video-primary-info-renderer-title-transform, none); text-shadow: var(--ytd-video-primary-info-renderer-title-text-shadow, none);\"><yt-formatted-string class=\"style-scope ytd-video-primary-info-renderer\" style=\"--yt-endpoint-color:hsl(206.1, 79.3%, 52.7%);\">morrowland Belgium 2018</yt-formatted-string></h1></div>', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `password`) VALUES
(2, 'Duc', 'user2@abc.com', '4297f44b13955235245b2497399d7a93'),
(3, 'user3', 'user3@haivl.com', '92877af70a45fd6a2ed7fe81e1236b78'),
(4, 'Đặng Thu Thảo', 'thuthao@haivl.com', 'e9d92c1d1896d6ae629f4f6d1545ffbe'),
(5, 'Dương Tú Anh', 'tuanh@haivl.com', 'b33789fa69c9594b091acb09b8cd5de5'),
(6, 'Nguyễn Thị Xuân Hương', 'xuanhuong@haivl.com', 'ff9bb42488827b1a2c235983d5e49349'),
(7, 'Nguyễn Thị Ánh Nhi', 'anhnhi@haivl.com', '0124af2e30c2273dcc27336c5411bd90'),
(8, 'Nguyễn Tấn Lộc', 'tanloc@haivl.com', 'eb5b4ac02b71859655e31afdf3dcb556');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
