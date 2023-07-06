-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2022 lúc 12:01 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mangashop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` int(10) NOT NULL,
  `name_category` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'Doraemon - Chú mèo máy đến từ tương lai'),
(2, 'Thám tử lừng danh Conan'),
(3, 'One Piece - Đảo hải tặc'),
(4, 'Shin - Cậu bé bút chì');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `comment` varchar(2000) COLLATE utf8_vietnamese_ci NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `id_user`, `id_product`, `comment`, `time`) VALUES
(10, 21, 5, 'Truyện hay quá các bạn nên đọc nhé!!!!!!!!!!!!!!!!!!!', '2022-10-09'),
(11, 27, 15, 'TRuyện hay quá', '2022-10-09'),
(14, 21, 11, 'truyện hay', '2022-10-09'),
(15, 21, 7, 'ok', '2022-10-09'),
(16, 21, 6, '', '2022-10-09'),
(17, 21, 6, 'hay quas', '2022-10-09'),
(21, 21, 4, '', '2022-10-10'),
(22, 21, 5, 'truyện hay quá', '2022-10-09'),
(23, 1, 5, '', '2022-10-13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `name_news` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `time` date NOT NULL,
  `content_news` varchar(3000) COLLATE utf8_vietnamese_ci NOT NULL,
  `view` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id_news`, `name_news`, `image`, `time`, `content_news`, `view`) VALUES
(1, 'NGOẠI TRUYỆN CONAN: HỌC VIỆN CẢNH SÁT SẼ QUAY TRỞ LẠI KỂ VỀ HIROMITSU MOROFUSHI!', 'news1.jpg', '2022-10-12', 'Vừa qua, Twitter chính thức cho bộ anime truyền hình Meitantei Conan Keisatsu Gakkou Hen Wild Police Story (Ngoại truyện Thám Tử Lừng Danh Conan: Học Viện Cảnh Sát) đã xác nhận sẽ quay trở lại với arc ', 281),
(2, 'TÁC GIẢ YUIJI ANIYA RA MẮT BỘ TRUYỆN MỚI! - CHUYỂN SINH THÀNH NỮ ĐỂ YÊU ANH!?', 'news2.jpg', '2022-10-12', 'Cách đây không lâu, trong số tháng 11 của tạp chí Be Love do nhà xuất bản Kodansha phát hành đã xác nhận Yuiji Aniya sẽ cho ra mắt bộ manga mới có tên Tensei Yūsha wa Joshikōsei!? ~Maō no Dekiai ni Komattemasu~ (The Reincarnated Hero is a High School Girl?! ~Hassled by the Dark Lord\'s Suffocating Love~) và sẽ được xuất bản trong số tiếp theo vào ngày 1 tháng 11.Nhà xuất bản Digital Manga trước đây đã phát hành một bộ truyện khác của Yuiji Aniya là Men of Tattoo vào năm 2011 và A Convenient Man vào năm 2013.\r\n', 106),
(3, 'SASAKI TO MIYANO CÔNG BỐ THỜI GIAN CHÍNH THỨC RA MẮT BẢN ĐIỆN ẢNH!', 'news3.jpg', '2022-10-12', 'Vừa qua, nhà xuất bản Kadokawa đã công bố teaser trailer mới cho bộ anime điện ảnh Sasaki to Miyano: Sotsugyo-hen (Graduation Chapter) được dựa trên nguyên tác Sasaki to Miyano của tác giả Shou Harusono. Video cũng đã xác nhận thời gian khởi chiếu chính thức tại Nhật Bản. Dàn diễn viên tham gia vào dự án bao gồm:Yusuke Shirai vào vai Shumei SasakiSōma Saitō vào vai Yoshikazu MiyanoYoshitsugu Matsuoka vào vai Taiga HiranoYūki Ono vào vai Jiro OgasawaraYūma Uchida vào vai Masato HanzawaRyohei Arai vào vai Tasuku KuresawaMitsuhiro Ichiki vào vai Gonzaburo TashiroNobunaga Shimazaki vào vai Akira KagiuraBộ phim sẽ được khởi chiếu bên cạnh bộ anime ngắn được dựa trên manga spinoff Hirano to Kagiura của Harusono. Dàn nhân lực tham gia vào dự án bao gồm:Đạo diễn: Shinji IshihiraStudio: DEENTrợ lý đạo diễn: Takahiro UenoKịch bản: Yoshiko NakamuraThiết kế nhân vật: Maki FujiiSáng tác nhạc: Kana Shibue', 203),
(4, 'HÉ LỘ TEASER CHO ANIME FUMETSU NO ANATA E SEASON 2', 'news4.jpg', '2022-10-12', 'Trang web chính thức cho anime Fumetsu no Anata e (To Your Eternity), chuyển thể từ manga của Yoshitoki Oima đã đăng tải teaser video mới cho mùa thứ hai của loạt phim. Bài hát \"Pink Blood\" của Hikaru Utada sẽ một lần nữa trở thành bài hát chủ đề cho bộ phim.\r\nCậu bé đang sống một mình trong ngôi làng ma này, khi mà người lớn đã ra đi để tìm lấy thiên đường trong biển tuyết trắng xóa. Tuy nhiên, nỗ lực của họ đã công cốc và bây giờ cậu bé đã ra đi trong tình trạng tuyệt vọng. Nó lấy hình dạng của cậu bé và bắt đầu một cuộc hành trình không hồi kết, để lấy được những kinh nghiệm, khám phá những nơi mới và gặp gỡ những người mới.\r\n\r\nSau khi chết nhiều lần, cậu được tìm thấy ở đầm lầy bởi March, một cô bé nhỏ với mong ước trở thành một người mẹ tốt, nhưng không may thay cô lại được chọn là vật hiến tế cho một con gấu tâm linh điên loạn. Cô bé đặt tên cậu là \"Fushi\" và làm bạn với cậu, dạy cậu cách ăn và bớt hoang dại hơn.\r\n\r\nOima ra mắt manga vào tháng 11 năm 2016 trên tạp chí Weekly Shonen. Phần đầu tiên của manga kết thúc vào tháng 12 năm 2019, và phần thứ hai ra mắt vào tháng 1 năm 2020. Bộ truyện đã giành được giải thưởng Manga Shonen hay nhất tại lễ trao giải Kodansha Manga thường niên lần thứ 43 vào tháng 5 năm 2019. ', 205),
(5, 'LIVE-ACTION MIMI O SUMASEBA TÁI HIỆN CẢNH QUAY TRONG BỘ PHIM GỐC CỦA STUDIO GHIBLI\r\n', 'news9.jpg', '2022-10-12', 'Trang web chính thức cho dự án live-action điện ảnh Mimi o Sumaseba (Whisper of the Heart), dựa trên manga cùng tên của tác giả Aoi Hiiragi đã tiếp tục đăng tải một video mới. Đoạn video cho thấy một số phân đoạn của Shizuku, Seiji với các bạn cùng lớp ở trường cấp hai.\r\nNana Seino sẽ vào vai Shizuku Tsukishima, trong khi Tori Matsuzaka (Samurai Sentai Shinkenger) vào vai Seiji Amasawa. Runa Yasuhara và Tsubasa Nakagawa lần lượt đóng vai Shizuku và Seiji khi họ còn học cấp hai.\r\nYuki Yamada đóng vai Tatsuya Sugimura, bạn thời thơ ấu của Shizuku và là thành viên đội bóng chày, người đã phải lòng Shizuku. Rio Uchida vào vai Yuko Harada, bạn thân nhất của Shizuku, người có tình cảm với Sugimura hồi cấp hai. Towa Araki và Sara Sumitomo đóng vai Sugimura và Yuuko khi họ còn học cấp hai.\r\nYuichiro Hirakawa sẽ đạo diễn bộ phim, Sony Pictures Entertainment và Shochiku sẽ phân phối. Anne Watanabe sẽ trình diễn bản cover bài hát dân gian nổi tiếng \"Tsubasa o Kudasai\" của Michio Yamagami.\r\n', 200),
(6, 'HOSHIKUZU TELEPATH - CÂU CHUYỆN VỀ CÔ BÉ SỢ GIAO TIẾP\r\n', 'news5.jpg', '2022-10-12', 'Tài khoản Twitter chính thức cho tạp chí Manga Time Kirara của Houbunsha đã thông báo rằng manga Hoshikuzu Telepath (Stardust Telepath) của Rasuko Okuma sẽ được chuyển thể thành anime.Câu chuyện kể về một cô gái nhút nhát tên là Umika, cô gặp trở ngại trong việc giao tiếp với người khác. Một ngày nọ, một học sinh chuyển trường tên là Yu xuất hiện. Hóa ra, cô ấy là một người ngoài hành tinh, người có thể đọc được cảm xúc của người khác bằng cách chạm vào trán của họ.Bộ truyện tranh 4 bảng được ra mắt trên Manga Time Kirara vào tháng 5 năm 2019. Houbunsha đã xuất bản vol.2 của manga vào tháng 9 năm 2021, vol.3 sẽ được xuất bản vào ngày 27 tháng 10.', 203),
(7, 'CHAINSAW MAN ĐOẠT GIẢI HARVEY CHO MANGA HAY NHẤT HAI NĂM LIÊN TIẾP!\r\n\r\n', 'news6.jpg', '2022-10-12', 'Giải thưởng Harvey, nơi tôn vinh các tác phẩm xuất sắc nhất trong giới truyện tranh và nghệ thuật tuần tự đã trao giải cho bộ manga Chainsaw Man (Thợ Săn Quỷ) của tác giả Tatsuki Fujimoto với hạng mục bộ manga hay nhất. Năm nay, Thợ Săn Quỷ đã phải cạnh tranh giải thưởng cùng với Blood on the Tracks của Shūzō Oshimi, Blue Lock của Muneyuki Kaneshiro, Cat + Gamer của Wataru Nadatani, Red Flowers của Yoshiharu Tsuge và SPY x FAMILY của Tatsuya Endou. Đây cũng là năm thứ hai liên tiếp SPY x Family nằm trong hạng mục đề cử.Bộ manga cũng đã được xác nhận sẽ chuyển thể thành anime truyền hình và bắt đầu được lên sóng từ ngày 12 tháng 10 sắp tới.', 301),
(8, 'SEIJA MUSO - TÌM ĐƯỜNG ĐẾN THẾ GIỚI KHÁC\r\n', 'news7.jpg', '2022-10-12', 'Bộ manga Seija Muso (The Great Cleric) của Hiiro Akikaze và light novel Seija Muso: Salaryman, Isekai de Ikiru Tame ni Ayumu Michi (The Great Cleric ~The Path a Salaryman Must Walk to Survive in a Fantasy World~) của Broccoli Lion sẽ được chuyển thể thành anime.Bộ manga dựa trên bộ light novel ăn khách Seija Muso, kể về một người làm công ăn lương bình thường đã đánh lừa được cái chết và giờ phải tìm đường đến một thế giới khác - với tư cách là một người chữa bệnh vĩ đại.\r\n\r\n', 101);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oders`
--

CREATE TABLE `oders` (
  `id_oder` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total` float NOT NULL,
  `quantity_count` int(10) NOT NULL,
  `note` text COLLATE utf8_vietnamese_ci NOT NULL,
  `status` int(10) NOT NULL,
  `address` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `phone` int(12) NOT NULL,
  `cart_date` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `oders`
--

INSERT INTO `oders` (`id_oder`, `id_user`, `total`, `quantity_count`, `note`, `status`, `address`, `email`, `phone`, `cart_date`) VALUES
(13, 1, 40000, 2, '', 1, 'Da Nang', 'ntstruongson2k3@gmail.com', 123456789, '2022-10-13 14:22:42'),
(14, 1, 873000, 40, '', 1, 'Da Nang', 'ntstruongson2k3@gmail.com', 123456789, '2022-10-13 16:13:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oders_detail`
--

CREATE TABLE `oders_detail` (
  `id_oder_detail` int(11) NOT NULL,
  `id_oder` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `oders_detail`
--

INSERT INTO `oders_detail` (`id_oder_detail`, `id_oder`, `id_product`, `quantity`, `price`) VALUES
(9, 13, 12, 1, 20000),
(10, 13, 11, 1, 20000),
(11, 14, 11, 3, 20000),
(12, 14, 12, 14, 20000),
(13, 14, 4, 1, 30000),
(14, 14, 17, 1, 23000),
(15, 14, 6, 1, 20000),
(16, 14, 22, 7, 23000),
(17, 14, 24, 13, 23000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `category` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `content` varchar(2000) COLLATE utf8_vietnamese_ci NOT NULL,
  `day` date NOT NULL,
  `click` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `sale` int(10) NOT NULL,
  `author` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `category`, `quantity`, `content`, `day`, `click`, `price`, `sale`, `author`) VALUES
(4, 'Truyện tranh Doraemon truyện ngắn - Lẻ tập 01', 'doraemontap1.jpg', 1, 100, 'Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.', '2022-09-01', 47, 30000, 0, 'Fujiko F. Fujio'),
(5, 'Truyện tranh Doraemon truyện ngắn - Lẻ tập 02', 'doraemontap2.jpg', 1, 100, 'Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.', '2022-09-02', 16, 20000, 0, 'Fujiko F. Fujio'),
(6, 'Truyện tranh Doraemon truyện ngắn - Lẻ tập 03', 'doraemontap3.jpg', 1, 100, 'Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.', '2022-09-02', 10, 20000, 0, 'Fujiko F. Fujio'),
(7, 'Truyện tranh Doraemon truyện ngắn - Lẻ tập 04', 'doraemontap4.jpg', 1, 100, 'Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.', '2022-09-02', 9, 20000, 0, 'Fujiko F. Fujio'),
(8, 'Truyện tranh Doraemon truyện ngắn - Lẻ tập 11', 'doraemontap11.jpg', 1, 100, 'Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.', '2022-09-02', 2, 20000, 0, 'Fujiko F. Fujio'),
(9, 'Thám tử lừng danh Conan - Tập 01', 'conantap1.jpg', 2, 100, 'Dù cơ thể có bị teo nhỏ nhưng tớ không chịu thua nhưng gã to con đâu! Tuy đã bị gã đàn ông đeo mặt nạ cảnh báo, nhưng tớ vẫn quyết đuổi đến tận cùng và đang lâm nguy!! Nhờ cái đầu mà tớ đã tìm được cách trốn thoát và vạch rõ chân tướng chúng. Tôi là EDOGAWA CONAN - Thám tử nhí lừng danh!!', '2022-09-13', 2, 20000, 0, 'Gosho Aoyama'),
(10, 'Thám tử lừng danh Conan - Tập 02', 'conantap2.jpg', 2, 100, 'Dù cơ thể có bị teo nhỏ nhưng tớ không chịu thua nhưng gã to con đâu! Tuy đã bị gã đàn ông đeo mặt nạ cảnh báo, nhưng tớ vẫn quyết đuổi đến tận cùng và đang lâm nguy!! Nhờ cái đầu mà tớ đã tìm được cách trốn thoát và vạch rõ chân tướng chúng. Tôi là EDOGAWA CONAN - Thám tử nhí lừng danh!!', '2022-09-13', 41, 20000, 0, 'Gosho Aoyama'),
(11, 'Thám tử lừng danh Conan - Tập 03', 'conantap3.jpg', 2, 100, 'Dù cơ thể có bị teo nhỏ nhưng tớ không chịu thua nhưng gã to con đâu! Tuy đã bị gã đàn ông đeo mặt nạ cảnh báo, nhưng tớ vẫn quyết đuổi đến tận cùng và đang lâm nguy!! Nhờ cái đầu mà tớ đã tìm được cách trốn thoát và vạch rõ chân tướng chúng. Tôi là EDOGAWA CONAN - Thám tử nhí lừng danh!!', '2022-09-13', 31, 20000, 0, 'Gosho Aoyama'),
(12, 'Thám tử lừng danh Conan - Tập 04', 'conantap4.jpg', 2, 100, 'Dù cơ thể có bị teo nhỏ nhưng tớ không chịu thua nhưng gã to con đâu! Tuy đã bị gã đàn ông đeo mặt nạ cảnh báo, nhưng tớ vẫn quyết đuổi đến tận cùng và đang lâm nguy!! Nhờ cái đầu mà tớ đã tìm được cách trốn thoát và vạch rõ chân tướng chúng. Tôi là EDOGAWA CONAN - Thám tử nhí lừng danh!!', '2022-09-13', 5, 20000, 0, 'Gosho Aoyama'),
(13, 'Thám tử lừng danh Conan - Tập 06', 'conantap6.jpg', 2, 100, 'Dù cơ thể có bị teo nhỏ nhưng tớ không chịu thua nhưng gã to con đâu! Tuy đã bị gã đàn ông đeo mặt nạ cảnh báo, nhưng tớ vẫn quyết đuổi đến tận cùng và đang lâm nguy!! Nhờ cái đầu mà tớ đã tìm được cách trốn thoát và vạch rõ chân tướng chúng. Tôi là EDOGAWA CONAN - Thám tử nhí lừng danh!!', '2022-09-13', 1, 20000, 0, 'Gosho Aoyama'),
(15, 'Truyện Tranh Shin – Cậu bé bút chì – Chap 01', 'shintap1.jpg', 4, 100, 'Truyện tranh Shin cậu bé bút chì là truyện tranh của tác giả Usui Yoshito là câu chuyện của cậu bé năm tuổi Shinosuke trong một gia đình trung lưu Nhật Bản thông thường. Gia đình gồm có ba, mẹ, Shin, em gái và một chú chó. Cách vẽ và kể câu chuyện của Shin – Cậu bé bút chì vừa gần gũi, vui vẻ lại mang lại cách nhìn con trẻ vô cùng độc đáo.', '2022-10-10', 16, 30000, 0, 'Usui Yoshito '),
(16, 'Truyện tranh Doraemon truyện ngắn - Lẻ tập 07', 'doraemontap7.jpg', 1, 100, 'Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.', '2022-10-11', 12, 23000, 0, 'Fujiko F. Fujio'),
(17, 'Truyện tranh Doraemon truyện ngắn - Lẻ tập 08', 'doraemontap8.jpg', 1, 100, 'Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.', '2022-10-11', 11, 23000, 0, 'Fujiko F. Fujio'),
(18, 'Truyện tranh Doraemon truyện ngắn - Lẻ tập 14', 'doraemontap14.jpg', 1, 100, 'Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.', '2022-10-11', 10, 23000, 0, 'Fujiko F. Fujio'),
(19, 'Truyện tranh Doraemon truyện ngắn - Lẻ tập 23', 'doraemontap23.jpg', 1, 100, 'Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.', '2022-10-11', 10, 23000, 0, 'Fujiko F. Fujio'),
(20, 'Truyện tranh Doraemon truyện ngắn - Lẻ tập 32', 'doraemontap32.jpg', 1, 100, 'Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.', '2022-10-11', 10, 23000, 0, 'Fujiko F. Fujio'),
(21, 'Truyện tranh Doraemon truyện ngắn - Lẻ tập 20', 'doraemontap20.jpg', 1, 100, 'Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.', '2022-10-11', 10, 23000, 0, 'Fujiko F. Fujio'),
(22, 'Truyện tranh Doraemon truyện ngắn - Lẻ tập 13', 'doraemontap13.jpg', 1, 100, 'Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.', '2022-10-11', 11, 23000, 0, 'Fujiko F. Fujio'),
(23, 'Truyện tranh Doraemon truyện ngắn - Lẻ tập 18', 'doraemontap18.jpg', 1, 100, 'Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.', '2022-10-11', 10, 23000, 0, 'Fujiko F. Fujio'),
(24, 'Truyện tranh Doraemon truyện ngắn - Lẻ tập 15', 'doraemontap15.jpg', 1, 100, 'Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.', '2022-10-11', 10, 23000, 0, 'Fujiko F. Fujio'),
(25, 'Truyện tranh Doraemon truyện ngắn - Lẻ tập 10', 'doraemontap10.jpg', 1, 100, 'Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.', '2022-10-11', 10, 23000, 0, 'Fujiko F. Fujio'),
(26, 'Truyện tranh Doraemon truyện ngắn - Lẻ tập 25', 'doraemontap25.jpg', 1, 100, 'Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.', '2022-10-11', 10, 23000, 0, 'Fujiko F. Fujio'),
(27, 'Truyện tranh Doraemon truyện ngắn - Lẻ tập 45', 'doraemontap45.jpg', 1, 100, 'Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.', '2022-10-11', 10, 23000, 0, 'Fujiko F. Fujio'),
(28, 'Truyện tranh Doraemon truyện ngắn - Lẻ tập 39', 'doraemontap39.jpg', 1, 100, 'Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.', '2022-10-11', 10, 23000, 0, 'Fujiko F. Fujio'),
(29, 'Truyện tranh Doraemon truyện ngắn - Lẻ tập 33', 'doraemontap33.jpg', 1, 100, 'Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.', '2022-10-11', 10, 23000, 0, 'Fujiko F. Fujio'),
(30, 'Truyện tranh Doraemon truyện ngắn - Lẻ tập 34', 'doraemontap34.jpg', 1, 100, 'Doraemon (Đôrêmon) là một chú mèo máy được Sewashi (Nôbitô), cháu ba đời của Nobita gửi về quá khứ cho ông mình để giúp đỡ Nobita tiến bộ, tức là cũng sẽ cải thiện hoàn cảnh của con cháu Nobita sau này. Còn ở hiện tại, Nobita là một cậu bé luôn thất bại ở trường học, và sau đó là thất bại trong công việc, đẩy gia đình và con cháu sau này vào cảnh nợ nần.', '2022-10-11', 10, 23000, 0, 'Fujiko F. Fujio');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `statistical`
--

CREATE TABLE `statistical` (
  `id` int(11) NOT NULL,
  `date` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `oders` int(11) NOT NULL,
  `sales` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `statistical`
--

INSERT INTO `statistical` (`id`, `date`, `oders`, `sales`, `quantity`) VALUES
(1, '2022-10-01', 50, 5000000, 120),
(2, '2022-10-02', 60, 7000000, 200),
(3, '2022-10-03', 30, 1200000, 70),
(4, '2022-10-04', 80, 2200000, 130),
(5, '2022-10-05', 1000, 8000000, 2000),
(6, '2022-10-06', 20, 98000, 30),
(7, '2022-10-07', 700, 6700000, 1300),
(8, '2022-10-08', 10, 400000, 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name_user` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `phone` int(12) NOT NULL,
  `status` int(1) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name_user`, `username`, `password`, `image`, `address`, `email`, `phone`, `status`, `role`) VALUES
(1, 'Nguyễn Trường Sơn', 'son', '981', 'user1.png', 'Da Nang', 'ntstruongson2k3@gmail.com', 123456789, 1, 1),
(21, 'Nguyen Truong Son', 'admin', '123', 'close_icon.png', 'Cầu Tam Kỳ', 'sonntpd05961@fpt.edu.vn', 328846202, 1, 0),
(27, 'Quách Văn Dương', 'abc', '123', 'img-email.png', 'Phú Ninh', 'ntstruongson@fpt.edu.vn', 328846202, 1, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PK_CM_US` (`id_user`),
  ADD KEY `PK_CM_PR` (`id_product`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Chỉ mục cho bảng `oders`
--
ALTER TABLE `oders`
  ADD PRIMARY KEY (`id_oder`),
  ADD KEY `PK_OD_US` (`id_user`);

--
-- Chỉ mục cho bảng `oders_detail`
--
ALTER TABLE `oders_detail`
  ADD PRIMARY KEY (`id_oder_detail`),
  ADD KEY `PK_ODD_OD` (`id_oder`),
  ADD KEY `PK_ODD_PR` (`id_product`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PK_PR_CTGR` (`category`);

--
-- Chỉ mục cho bảng `statistical`
--
ALTER TABLE `statistical`
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
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `oders`
--
ALTER TABLE `oders`
  MODIFY `id_oder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `oders_detail`
--
ALTER TABLE `oders_detail`
  MODIFY `id_oder_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `statistical`
--
ALTER TABLE `statistical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `PK_CM_PR` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `PK_CM_US` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `oders_detail`
--
ALTER TABLE `oders_detail`
  ADD CONSTRAINT `PK_ODD_OD` FOREIGN KEY (`id_oder`) REFERENCES `oders` (`id_oder`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `PK_ODD_PR` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `PK_PR_CTGR` FOREIGN KEY (`category`) REFERENCES `category` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
