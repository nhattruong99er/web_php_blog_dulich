-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 22, 2022 lúc 05:16 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Cơ sở dữ liệu: `travel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `ADDRESS` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `PHONENUMBER` varchar(15) COLLATE utf8_vietnamese_ci NOT NULL,
  `BIRTHDAY` date NOT NULL,
  `EMAIL` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `NUMBERCHILDREN` int(11) NOT NULL,
  `NUMBERADULTS` int(11) NOT NULL,
  `CMND` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`ID`, `NAME`, `ADDRESS`, `PHONENUMBER`, `BIRTHDAY`, `EMAIL`, `NUMBERCHILDREN`, `NUMBERADULTS`, `CMND`) VALUES
(1000000004, 'Trường', 'Bình Định', '0123456789', '1999-01-01', 'truong@gmail.com', 0, 0, 123456789);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `ADDRESS` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `PHONENUMBER` varchar(15) COLLATE utf8_vietnamese_ci NOT NULL,
  `POSITION` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `BIRTHDAY` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`ID`, `NAME`, `ADDRESS`, `PHONENUMBER`, `POSITION`, `BIRTHDAY`) VALUES
(10101001, 'Trần văn A', 'Bình Định', '1111122222', 'employee', '2000-12-16'),
(10101002, 'Trần văn B', 'Quảng Ngãi', '111113333333', 'employee', '2000-12-17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `ID` int(10) NOT NULL,
  `USERNAME` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `PASSWORD` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `POSITION` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`ID`, `USERNAME`, `PASSWORD`, `POSITION`) VALUES
(10101001, 'admin', '123456789', 'ADMIN');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `start_day`
--

CREATE TABLE `start_day` (
  `ID` varchar(15) COLLATE utf8_vietnamese_ci NOT NULL,
  `Date` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `start_day`
--

INSERT INTO `start_day` (`ID`, `Date`) VALUES
('2000000009', '21/12/2021'),
('2000000009', '21/12/2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tours`
--

CREATE TABLE `tours` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `KIND_TOUR` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `MAX_PEOPLE` tinyint(4) NOT NULL,
  `IMAGE` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tours`
--

INSERT INTO `tours` (`ID`, `NAME`, `KIND_TOUR`, `MAX_PEOPLE`, `IMAGE`) VALUES
(2000000009, 'Du lịch Sapa', 'Miền Bắc', 20, 'sapa.jpg'),
(2000000010, 'Du Lịch Hà Giang - Đồng Văn - Lũng Cú - Bản Giốc - Ba Bể - Du Thuyền Sông Nho Quế', 'Miền Bắc', 10, 'lungcu.jpg'),
(2000000017, 'Du Lịch Hạ Long', 'Miền Bắc', 20, 'halong.jpg'),
(2000000020, 'Du Lịch Nha Trang', 'Miền Trung', 20, 'Desert.jpg'),
(2000000023, 'Du Lịch Đà Nẵng - Sơn Trà - Hội An - Bà Nà - Huế', 'Miền Trung', 20, 'danang.jpg'),
(2000000026, 'Du Lịch Phú Quốc', 'Miền Nam', 20, '	\r\nphuquoc.jpg'),
(2000000029, 'Du Lịch Vũng Tàu', 'Miền Nam', 20, '\r\nvungtau.jpg'),
(2000000032, 'Du Lịch Bến Tre - KDL Cồn Chim - Trà Vinh', 'Miền Nam', 20, '\r\nmientay.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_details`
--

CREATE TABLE `tour_details` (
  `ID` int(10) NOT NULL,
  `STARTING_PLACE` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `ADULT_PRICE` float NOT NULL,
  `CHILD_PRICE` float NOT NULL,
  `NGAY` date NOT NULL,
  `END` date NOT NULL,
  `HOTEL_NAME` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `VEHICLE` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `DAY_ONE` text COLLATE utf8_vietnamese_ci NOT NULL,
  `DAY_TWO` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tour_details`
--

INSERT INTO `tour_details` (`ID`, `STARTING_PLACE`, `ADULT_PRICE`, `CHILD_PRICE`, `NGAY`, `END`, `HOTEL_NAME`, `VEHICLE`, `DAY_ONE`, `DAY_TWO`) VALUES
(2000000009, 'Bình Định', 2000000, 1000000, '2022-01-19', '2022-01-21', '', 'máy bay', 'Sáng: Quý khách có mặt tại sân bay Tân Sơn Nhất và làm thủ tục khởi hành đi Hà Nội. (chuyến bay cất cánh từ sau 05h25 sáng).\r\n\r\nĐến sân bay Nội Bài, Quý khách làm thủ tục và nhận hành lý, sau đó đón chuyến xe giường nằm đi Lào Cai – Sapa, mất khoảng 06 giờ 30 phút di chuyển (các chuyến xe sau 10h30 sáng).\r\nXe trả khách tại trung tâm thị trấn Sapa. \r\nQuý khách làm thủ tục nhận phòng (CMND và báo tên, thời gian lưu trú để được nhận phòng)\r\nQuý khách dùng bữa tối tại nhà hàng địa phương.\r\nTối: Quý khách đi dạo chơi thị trấn Sapa về đêm, tự do thưởng thức: Thắng Cố, cơm lam, lợn cắp nách, khoai nướng, bắp nướng (chi phí tự túc)… \r\n\r\nQuý khách nghỉ đêm tại thị trấn Sapa.', 'Sáng: Quý khách dùng bữa sáng sau đó xe đưa quý khách đi tham quan Bản Cát Cát -  địa bàn cư trú của người H\'Mông, được mệnh danh là ngôi làng cổ đẹp nhất Tây Bắc. \r\n\r\nQuý khách có thể thuê xe máy để đi lại, thường có thông tin tại khách sạn. Quý khách nên hỏi về việc giao xe tận khách sạn, làm hợp đồng và kiểm tra xe máy trước khi nhận, thanh toán/ đặt cọc.\r\nQuý khách có thể thuê trang phục chụp ảnh ở Bản Cát Cát để lưu lại những khoảnh khắc đáng nhớ, những bức ảnh mang dáng dấp truyền thống Tây Bắc.\r\nQuý khách dùng bữa trưa tại nhà hàng địa phương hoặc Quý khách có thể dùng bữa trưa buffet ở nhà hàng trên khu vực dưới đỉnh Fansipan.\r\nChiều: Quý khách đi tham quan:\r\n\r\nQuý khách Chinh phục đỉnh Fansipan bằng hệ thống cáp treo lớn và hiện đại nhất Thế Giới hiện này (1 cabin có thể ngồi từ 34-35 người). Tới đỉnh Fansipan quý khách thưởng thức cảm giác đứng trên mây, ngắm nhìn thị trấn Sapa, sau đó tiếp tục leo 639 bậc để tận mắt thấy cột mốc Fansipan độ cao 3.143m nơi được coi là “nóc nhà Đông Dương”. \r\nQuý khách có thể tham quan khu du lịch Hàm Rồng.\r\nQuý khách tự do tham quan, thưởng thức không khí mát mẻ và trong lành của Sapa về đêm với những hàng quà lưu niệm sặc sỡ nhiều màu sắc của người dân tộc H’Mông, Dao, Mường… và tìm kiếm cho bạn bè, người thân những món quà ý nghĩa tại Sapa.\r\nQuý khách nghỉ đêm tại thị trấn Sapa.'),
(2000000010, 'Bình Định', 0, 0, '0000-00-00', '0000-00-00', '', 'máy bay', 'Sáng: Tại sân bay Nội Bài, xe và HDV sẽ đưa Quý khách khởi hành đi Hà Giang - vùng đất có chè san, rượu mật ong và thắng cố, xứ sở của đào phai, hoa lê, truyền thống và náo nhiệt trong buổi chợ phiên… Trên đường, Quý khách có thể tranh thủ ngắm cảnh rừng núi Đông Bắc vô cùng hùng vĩ và hoang sơ; checkin Cột Mốc Số 0 Hà Giang.\r\n\r\nTrưa: Quý khách đến Bắc Quang – Hà Giang ăn trưa tại nhà hàng\r\n\r\nChiều: Đoàn tới Quản Bạ, Quý khách chiêm ngưỡng:\r\n\r\nNúi Đôi Cô Tiên Quản Bạ - “tác phẩm nghệ thuật” của tạo hoá ban tặng cho vùng đất này và nghe kể về truyền thuyết của ngọn núi vô cùng hấp dẫn và thú vị\r\n\r\nĐến Yên Minh -  nơi có rừng thông đại ngàn – được mệnh danh là rừng thông đẹp nhất Việt Nam - trải dài trên các sườn núi. Sau đó, Quý khách đến khách sạn nhận phòng nghỉ ngơi ở Yên Minh.\r\n\r\nTối: Dũng bữa tối tại nhà hàng\r\n\r\nNghỉ đêm tại Yên Minh', 'Sáng: Quý khách dùng bữa sáng, làm thủ tục trả phòng. Khởi hành trên con đường hạnh phúc đến với Thị Trấn Đồng Văn\r\n\r\nQuý khách dừng chân thăm quan ở Phố Cáo, Sủng Là, vào làng văn hóa Lũng Cẩm nơi lấy bối cảnh những thước phim nổi tiếng “Chuyện của Pao”.\r\n\r\nCột cờ Lũng Cú – Cực Bắc - Nơi địa đầu Tổ Quốc, hay còn được miêu tả là: “Nơi cúi mặt sát đất, ngẩng mặt đụng trời”. Từ cột cờ Lũng Cú, quý khách có thể ngắm phong cảnh ruộng bậc thang đẹp mắt xen kẽ những nhà trình tường của dân tộc Lô Lô trong bản Séo Lủng bên dưới.\r\n\r\nTrên đường tới Lũng Cú (ở Lũng Táo), quý khách sẽ được thả mình vào một rừng hoa Tam Giác Mạch với màu sắc đầy quyến rũ - một loài hoa rất đẹp, màu hoa phớt hồng li ti, cánh chụm lại thành hình chóp nón, có ba mặt tam giác, giữ ở giữa một hạt mạch quý.\r\n\r\nTrưa: Dùng bữa trưa tại nhà hàng\r\n\r\nChiều: Quý khách thăm quan :\r\n\r\nDinh thự vua Mèo Vương Chí Sình - với nhiều kiến trúc độc đáo và những câu chuyện đặc sắc.\r\n\r\nThăm quan khu phố cổ TT. Đồng Văn\r\n\r\nSau đó, đoàn tiếp tục hành trình về Mèo Vạc, trên đường đi checkin Đèo Mã Pì Lèng - Nơi được mệnh danh là đệ nhất hùng quan của Việt Nam, hay con đường Hạnh Phúc.  Quý khách có thể dừng chân nghỉ ngơi, chụp ảnh, nơi bị chia cắt về địa hình sâu nhất của Việt Nam.\r\n\r\nTối: Sau khi ăn tối tại nhà hàng địa phương, đoàn di chuyển về khách sạn nhân phòng và tự do khám phá thị trấn Mèo Vạc về đêm.(hoặc Đồng Văn)'),
(2000000017, 'Bình Định', 0, 0, '0000-00-00', '0000-00-00', '', 'máy bay', 'Sáng: Quý khách làm thủ tục tại sân bay Tân Sơn Nhất khởi hành đi đến sân bay Vân Đồn/ Hải Phòng/ Hà Nội. Quý khách tự túc di chuyển đến Hạ Long.\r\nQuý khách đến Hạ Long nhận phòng khách sạn Hạ Long Plaza 4*. Quý khách được tặng 1 bữa ăn trưa hoặc 1 bữa ăn tối miễn phí.\r\nNghỉ đêm tại khách sạn  Hạ Long Plaza 4*.', 'Sáng: Quý khách dùng bữa sáng tại khách sạn, nghỉ ngơi và làm thủ tục trả phòng. Quý khách tự túc di chuyển đến  Cảng tàu Quốc tế Tuần Châu.\r\n12:30  Tập trung tại Trung tâm Du thuyền Bhaya tại Cảng tàu Quốc tế Tuần Châu.\r\n12:45  Nhận phòng trên Du thuyền Bhaya Classic và tập trung tại nhà hàng để gặp gỡ Quản lý tàu và lắng nghe các hướng dẫn về an toàn trong hành trình.\r\n13:00  Thưởng thức bữa trưa tự chọn (buffet) trong khi du thuyền di chuyển về hướng Đông Nam của Vịnh Hạ Long, qua các địa danh Hòn Trống Mái, Hòn Ngón Tay, Hòn Con Cóc và Làng chài Cửa Vạn.\r\n15:00  Ghé thăm Bãi biển Trinh Nữ - điểm đến dành riêng cho du khách của Du thuyền Bhaya. Tự do lựa chọn bơi lội, tắm nắng, trò chơi trên bãi biển hoặc chèo thuyền kayak khám phá hòn đảo xinh đẹp.\r\n16:30  Di chuyển về du thuyền để nghỉ ngơi và chuẩn bị tham gia các hoạt động buổi tối.\r\n17:00  Thưởng thức những món đồ uống mát lạnh trong chương trình “Giờ Vui Vẻ” (mua 1 tặng 1) tại quầy bar và ngắm nhìn hoàng hôn buông xuống trên Vịnh Hạ Long.\r\n19:00  Thưởng thức bữa tối với thực đơn cố định (set-menu) trong nhà hàng.\r\n21:00  Thời gian hoạt động tự do: Hành khách có thể lựa chọn nghỉ ngơi trong phòng, câu mực tại khu vực lễ tân hoặc nhâm nhi đồ uống và ngắm cảnh trên boong thượng.'),
(2000000020, 'Bình Định', 0, 1, '0000-00-00', '0000-00-00', '', 'máy bay', 'Quý khách lên tàu với sự chào đón của giám đốc trải nghiệm và đội ngũ nhân viên cùng với một ly cocktail tuyệt ngon và mát lạnh. Sau đó giám đốc trài nghiệm sẽ giới thiệu về Vịnh Nha Trang, về hành trình, về văn hóa, ẩm thực, về những chỉ dẫn an toàn, và về tàu hoàng đế. Tàu bắt đầu di chuyển và quý khách sẽ được ngắm phong cảnh tuyệt vời của Vịnh Nha Trang vào lúc mặt trời lặn', 'Khám phá vịnh Nha Trang vào ban đêm với cocktails và các loại rượu ngon, các loại đồ uống không hạn chế và và nghệ sỹ ghi ta và violon chơi những bản nhạc du dương trong một khung cảnh lãng mạn dưới trời sao, ánh trăng và ánh đèn rực rỡ của thành phố.  Trải nghiệm cảm giác dễ chịu khi thưởng thức bữa tối thịnh soạn với âm nhạc và sự phục vụ ân cần của đội ngũ nhân viên Emperor Cruises.'),
(2000000023, 'Bình Định', 0, 0, '0000-00-00', '0000-00-00', '', 'máy bay', 'Qúy khách tập làm thủ tục đáp chuyến bay đi Đà Nẵng. Đến Đà Nẵng HDV đón quý khách thời gian từ 07h00 đến 13h00 (Sau thời gian này, quý khách tự túc nhập đoàn). Xe đưa đi ăn trưa đặc sản nổi tiếng Đà Nẵng “Bánh tráng thịt heo 2 đầu da & Mỳ Quảng”. Nhận phòng khách sạn 3* nghỉ ngơi.\r\nLên Bán Đảo Sơn Trà mục kích phố biển Đà Nẵng trên cao, viếng Linh Ứng Tự - nơi có tượng Phật Bà 67m cao nhất Việt Nam và ngắm biển Mỹ Khê Đà Nẵng.\r\nĂn tối nhà hàng. Trãi nghiệm cảm giác với Vòng quay Mặt trời SUN WHEEL – Top 10 vòng quay cao nhất Thế Giới, chiêm ngưởng vẻ đẹp Đà Thành về đêm rực rỡ ánh đèn. (Vé Sun Wheel tự túc)', 'Đoàn dùng bữa sáng, sau đó khởi hành tham quan: \r\nVòng qua Cầu Rồng lưu lại dấu ấn trên Cầu Tình Yêu, tản bộ thưởng thức không khí trong lành bên bờ Hàn Giang với tượng Cá Chép Hóa Long - Biểu tượng mong muốn vươn lên của người Đà Nẵng.\r\nChùa Quan Thế Âm\r\nBảo Tàng Phật Học \r\nLàng Nghề Điêu Khắc Đá.\r\nMua sắm đặc sản Qùa Miền Trung\r\n Ăn trưa nhà hàng tại địa phương\r\nSau bữa trưa đoàn tiếp tục hành trình:\r\nHội An bách bộ tham quan và mua sắm Phố Cổ với: Chùa Cầu Nhật Bản, Nhà Cổ hàng trăm năm tuổi, Hội Quán Phước Kiến & Xưởng thủ công mỹ nghệ. Khởi hành về lại Đà Nẵng\r\nĂn tối nhà hàng địa phương. Sau đó quý khách tự do thưởng ngoạn du thuyền trên sông Hàn ngắm cảnh Đà Thành về đêm, chụp ảnh Cầu Quay Sông Hàn, cầu Rồng phun lửa và nước vào cuối tuần.'),
(2000000026, 'Bình Định', 0, 0, '0000-00-00', '0000-00-00', '', 'máy bay', 'Qúy khách tập làm thủ tục đáp chuyến bay đi Đà Nẵng. Đến Đà Nẵng HDV đón quý khách thời gian từ 07h00 đến 13h00 (Sau thời gian này, quý khách tự túc nhập đoàn). Xe đưa đi ăn trưa đặc sản nổi tiếng Đà Nẵng “Bánh tráng thịt heo 2 đầu da & Mỳ Quảng”. Nhận phòng khách sạn 3* nghỉ ngơi.\r\nLên Bán Đảo Sơn Trà mục kích phố biển Đà Nẵng trên cao, viếng Linh Ứng Tự - nơi có tượng Phật Bà 67m cao nhất Việt Nam và ngắm biển Mỹ Khê Đà Nẵng.\r\nĂn tối nhà hàng. Trãi nghiệm cảm giác với Vòng quay Mặt trời SUN WHEEL – Top 10 vòng quay cao nhất Thế Giới, chiêm ngưởng vẻ đẹp Đà Thành về đêm rực rỡ ánh đèn. (Vé Sun Wheel tự túc)', 'Đoàn dùng bữa sáng, sau đó khởi hành tham quan: \r\nVòng qua Cầu Rồng lưu lại dấu ấn trên Cầu Tình Yêu, tản bộ thưởng thức không khí trong lành bên bờ Hàn Giang với tượng Cá Chép Hóa Long - Biểu tượng mong muốn vươn lên của người Đà Nẵng.\r\nChùa Quan Thế Âm\r\nBảo Tàng Phật Học \r\nLàng Nghề Điêu Khắc Đá.\r\nMua sắm đặc sản Qùa Miền Trung\r\n Ăn trưa nhà hàng tại địa phương\r\nSau bữa trưa đoàn tiếp tục hành trình:\r\nHội An bách bộ tham quan và mua sắm Phố Cổ với: Chùa Cầu Nhật Bản, Nhà Cổ hàng trăm năm tuổi, Hội Quán Phước Kiến & Xưởng thủ công mỹ nghệ. Khởi hành về lại Đà Nẵng\r\nĂn tối nhà hàng địa phương. Sau đó quý khách tự do thưởng ngoạn du thuyền trên sông Hàn ngắm cảnh Đà Thành về đêm, chụp ảnh Cầu Quay Sông Hàn, cầu Rồng phun lửa và nước vào cuối tuần.'),
(2000000029, 'Bình Định', 0, 0, '0000-00-00', '0000-00-00', '', 'máy bay', 'Qúy khách tập làm thủ tục đáp chuyến bay đi Đà Nẵng. Đến Đà Nẵng HDV đón quý khách thời gian từ 07h00 đến 13h00 (Sau thời gian này, quý khách tự túc nhập đoàn). Xe đưa đi ăn trưa đặc sản nổi tiếng Đà Nẵng “Bánh tráng thịt heo 2 đầu da & Mỳ Quảng”. Nhận phòng khách sạn 3* nghỉ ngơi.\r\nLên Bán Đảo Sơn Trà mục kích phố biển Đà Nẵng trên cao, viếng Linh Ứng Tự - nơi có tượng Phật Bà 67m cao nhất Việt Nam và ngắm biển Mỹ Khê Đà Nẵng.\r\nĂn tối nhà hàng. Trãi nghiệm cảm giác với Vòng quay Mặt trời SUN WHEEL – Top 10 vòng quay cao nhất Thế Giới, chiêm ngưởng vẻ đẹp Đà Thành về đêm rực rỡ ánh đèn. (Vé Sun Wheel tự túc)', 'Đoàn dùng bữa sáng, sau đó khởi hành tham quan: \r\nVòng qua Cầu Rồng lưu lại dấu ấn trên Cầu Tình Yêu, tản bộ thưởng thức không khí trong lành bên bờ Hàn Giang với tượng Cá Chép Hóa Long - Biểu tượng mong muốn vươn lên của người Đà Nẵng.\r\nChùa Quan Thế Âm\r\nBảo Tàng Phật Học \r\nLàng Nghề Điêu Khắc Đá.\r\nMua sắm đặc sản Qùa Miền Trung\r\n Ăn trưa nhà hàng tại địa phương\r\nSau bữa trưa đoàn tiếp tục hành trình:\r\nHội An bách bộ tham quan và mua sắm Phố Cổ với: Chùa Cầu Nhật Bản, Nhà Cổ hàng trăm năm tuổi, Hội Quán Phước Kiến & Xưởng thủ công mỹ nghệ. Khởi hành về lại Đà Nẵng\r\nĂn tối nhà hàng địa phương. Sau đó quý khách tự do thưởng ngoạn du thuyền trên sông Hàn ngắm cảnh Đà Thành về đêm, chụp ảnh Cầu Quay Sông Hàn, cầu Rồng phun lửa và nước vào cuối tuần.'),
(2000000032, 'Bình Định', 0, 0, '0000-00-00', '0000-00-00', '', 'máy bay', '05:30 sáng, Quý khách tập trung tại BenThanh Tourist 82 – 84 Calmette, phường Nguyễn Thái Bình, Quận 1. Khởi hành đi theo đường cao tốc Sài Gòn – Trung Lương. \r\n07:00 Quý khách thưởng thức đặc sản hủ tíu Mỹ Tho tại Mekong Rest Stop.\r\nTiếp tục hành trình đến Bến Tre. Quý khách thưởng ngoạn Cầu Rạch Miễu là nơi nối liền giữa Tiền Giang - Bến Tre, được xây dựng hoàn toàn bởi đội ngũ kỹ sư, nhân công người Việt và ngắm nhìn dòng sông Tiền rộng lớn.\r\nĐoàn đến bến tàu TP. Bến Tre. Tàu  đưa đoàn lướt nhịp nhàng trên sông tham quan: \r\nLò kẹo dừa sản xuất đặc sản Bến Tre, thưởng thức kẹo dừa còn nóng tại lò và trái cây theo mùa\r\nĐoàn tiếp tục đi thuyền rẽ vào “Làng nhỏ bên sông” tham quan : \r\nĐình Làng Phước Thạnh, tìm hiểu về lịch sử hình thành vùng đất này và ý nghĩa của những ngôi đình làng mang đậm dấu ấn văn hóa dân gian miền Tây Nam Bộ.\r\nĐi “xe lôi” phương tiện di chuyển đặc trưng khơi gợi về một thời ký ức tuổi thơ qua những con đường làng uốn lượn dưới hàng cây rợp bóng mát. \r\n12:00 Quý khách dùng bữa trưa thưởng thức các món ăn đặc sản địa phương “thắm đượm tình quê”: cơm trái dừa,  tôm rim nước dừa,  gỏi củ hủ dừa, chuối đập ăn kèm nước cốt dừa ... \r\nTiếp tục về Trà Vinh tham quan phong cảnh thiên nhiên và tìm hiểu về văn hóa Khmer đặc sắc: \r\nAo Bà Om (Ao Vuông) buộc chỉ tay, một nghi thức theo người dân địa phương là mang lại sức khỏe, may mắn và bình an.\r\nViếng chùa Âng (Angkorajaporey) ngôi chùa lâu đời nhất trong hệ thống chùa Khmer, Bảo tàng Văn hóa Khmer, hiện đang lưu giữ, trưng bày hơn 800 hiện vật, tài liệu phản ánh đời sống văn hóa vật chất và tinh thần của cộng đồng dân tộc Khmer \r\n18:00 Quý khách dùng bữa tối tại nhà hàng địa phương. Nhận phòng khách sạn nghỉ ngơi.\r\nQuý khách khám phá nội đô TP. Trà Vinh (chi phí tự túc): Chợ đêm, Quán café 1985 - thiết kế theo phong cách cổ điển, đặc biệt có giao lưu âm nhạc acoustic vào các buổi tối 3, 5, 7 và chủ nhật; Café Xưa - nơi trưng bày rất nhiều đồ cổ. Nghỉ đêm tại Trà Vinh.', '07:00 Quý khách dùng bữa sáng tại khách sạn và làm thủ tục trả phòng. Đoàn đến huyện Châu Thành (Trà Vinh). Đoàn tản bộ dưới đường quê khoảng 300 – 400 mét, tiếp tục đi phà ngắm dòng sông Cổ Chiên. \r\nĐến Cồn Chim, đoàn bắt đầu hành trình tham quan “điểm du lịch cộng đồng theo mô hình Thuận Thiên” mà theo người dân nơi đây là “người quê chỉ có tấm lòng” yêu lữ khách phương xa, yêu con tôm, cây lúa và cùng nhau gìn giữ tự nhiên: \r\nBếp xưa Nam Bộ, thưởng thức các món Nam Bộ truyền thống như trà 5 thứ đậu, bánh mứt dân gian, uống sương sâm, chèo bè, đi cầu khỉ, giở gió ... \r\nNhà Vẩy Rồng Nam Bộ, ngôi nhà đậm chất Miền Tây. Quý khách cùng tham gia làm các sản phẩm từ lá dừa, nghe hát tài tử về Cồn Chim do chính người dân sáng tác và biểu diễn. Tham gia các trò chơi dân gian: chọi lon, nhảy dây, bắn bi, banh đũa,…  khơi gợi lại ký ức tuổi thơ hay câu cua/ câu cá/ câu tôm (theo mùa vụ). \r\n12:00 Quý khách dùng bữa trưa tại nhà hàng địa phương với các món mang hương vị vùng quê Nam Bộ: Gỏi Hương Thủy Liễu, Tôm Cồn Chim, Bánh Xèo, Cơm - Canh Chua Bần - Cá Basa, …\r\nTham gia mô hình Chợ Quê bán các loại Nông sản của Cồn Chim như: cua, tôm, rau tập tàng, trứng, cá, bánh, mứt,…\r\nĐến TP. HCM. Xe và HDV đưa quý khách về điểm đón ban đầu. Kết thúc chương trình. Hẹn gặp lại quý khách trong những chuyến đi tuyệt vời sắp tới.');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tour_details`
--
ALTER TABLE `tour_details`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000005;

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000008;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10101003;

--
-- AUTO_INCREMENT cho bảng `tours`
--
ALTER TABLE `tours`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2000000042;

--
-- AUTO_INCREMENT cho bảng `tour_details`
--
ALTER TABLE `tour_details`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2000000041;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `FK_LOGIN_EMPLOYEE` FOREIGN KEY (`ID`) REFERENCES `employees` (`ID`);

--
-- Các ràng buộc cho bảng `tour_details`
--
ALTER TABLE `tour_details`
  ADD CONSTRAINT `tour_details_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `tours` (`ID`);
COMMIT;
