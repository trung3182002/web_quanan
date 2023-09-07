-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 02:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `amthuc`
--

CREATE TABLE `amthuc` (
  `MaMon` int(11) NOT NULL,
  `TenMon` text NOT NULL,
  `NoiDung` text NOT NULL,
  `DanhGia` float NOT NULL,
  `Calo` int(11) NOT NULL,
  `DonGia` int(11) NOT NULL,
  `Hinh` text NOT NULL,
  `MaLoai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `amthuc`
--

INSERT INTO `amthuc` (`MaMon`, `TenMon`, `NoiDung`, `DanhGia`, `Calo`, `DonGia`, `Hinh`, `MaLoai`) VALUES
(1, 'Cơm Tấm', 'Cơm tấm là món ăn nổi tiếng gắn liền với văn hóa ẩm thực Sài Gòn. Gạo tấm là phần đầu hạt gạo khi xay bị vỡ ra, còn chứa cả phôi và cám gạo, rất thơm và chứa nhiều dinh dưỡng. Tuy nhiên nếu không mua được gạo tấm, bạn có thể dùng gạo tẻ và cán vỡ để nấu món ăn này.\r\nCơm tấm khi nấu lên có độ dẻo, thậm chí hơi nát, hơi nhã nhưng khi kết hợp với các món ăn kèm như chả trứng, thịt/sườn nướng và đặc biệt là rưới nước mắm kẹo lên thì vô cùng hợp vị, cho cảm giác thơm ngon đưa miệng vô cùng.', 4, 400, 70000, 'sang1.jpg', 1),
(2, 'Mì Xào Bay', 'Được biết món mì bay này vốn có nguồn gốc từ Singapore từ nhiều năm trước, với tên gốc là \"flying noodles\" và được một tiệm mì tại đây sáng chế nhờ vào thủ thuật nhỏ đó là gắn một que trụ ngay giữa tô mì. Sau đó thay vì cho mì vào nằm gọn trong tô, người ta sẽ máng những vắt mì lên que trụ đó. Nhờ vậy mà tạo được cảm giác giống như sợi mì nhẹ bẫng và có khả năng bay lơ lửng giữa không trung.', 3.5, 400, 40000, 'sang2.jpg', 1),
(3, 'Xôi', 'Những hàng xôi mặn được bày bán rất nhiều trên các đường phố Sài thành. Thực chất đây là món xôi ăn kèm với các loại nước sốt. Vị dẻo thơm của gạo nếp quyện vào phần nước dùng đậm đà và các loại thịt thơm ngon như: xá xíu, thịt gà, ruốc, lạp xưởng … đều khiến cho những tín đồ ẩm thực phải mê mẩn.', 3, 400, 30000, 'sang3.jpg', 1),
(4, 'Bún Bò', 'Bún bò Huế có những gì? Một tô bún bò chuẩn vị Huế sẽ gồm sợi bún, thịt bò, tiết heo, chả cua và nước dùng. Nguyên liệu làm bún là bột gạo pha với bột lọc theo tỷ lệ chuẩn để sợi bún có độ dai vừa phải. Thịt bò được chọn là phần bắp chân trước, nạm bò hoặc bắp hoa màu đỏ tươi, mỡ bò màu vàng nhạt. Chả cua màu vàng cam bắt mắt được làm từ gạch và thịt cua xay nhuyễn với vị béo, bùi tự nhiên.', 4, 400, 70000, 'sang4.jpg', 1),
(5, 'Bánh Mì', 'Bánh mì là một món ăn Việt Nam, với lớp vỏ ngoài là một ổ bánh mì nướng có da giòn, ruột mềm, còn bên trong là phần nhân. Tùy theo văn hóa vùng miền hoặc sở thích cá nhân, người ta có thể chọn nhiều nhân bánh mì khác nhau. Tuy nhiên, loại nhân bánh truyền thống thường chứa chả lụa, thịt, cá, thực phẩm chay hoặc mứt trái cây, kèm theo một số nguyên liệu phụ khác như patê, bơ, rau, ớt và đồ chua.', 4, 300, 30000, 'sang5.jpg', 1),
(6, 'Bún Đậu Mắm Tôm', 'Bún đậu mắm tôm là món ăn đơn giản, dân dã trong ẩm thực miền Bắc Việt Nam. Đây là món thường được dùng như bữa ăn nhẹ, ăn chơi. Thành phần chính gồm có bún tươi, đậu hũ chiên vàng, chả cốm, nem chua,dồi chó, mắm tôm pha chanh, ớt và ăn kèm với các loại rau thơm như tía tô, kinh giới, rau húng, xà lách, cà pháo...', 3, 300, 40000, 'sang6.jpg', 1),
(7, 'Bánh Cuốn', 'Bánh cuốn được biết đến như một loại bánh được làm từ bột gạo hấp, cán mỏng rồi sau đó cuộn với nhân gồm thịt, mộc nhĩ, nấm hương thái nhỏ, được rắc bên trên một chút hành khô, ăn kèm với nước chấm chua ngọt đúng điệu.', 3, 300, 30000, 'sang7.jpg', 1),
(8, 'Bánh Bột Lộc', 'Bánh bột lọc thường được hấp hoặc luộc, và gói bằng lá chuối. Nếu gói bằng lá chuối, thì gọi là bánh bột lọc lá. Nếu không có lá chuối gói lại thì gọi là bánh bột lọc trần. Nhân bánh theo truyền thống là một con tôm nướng nguyên vỏ và một lát thịt lợn. Nhưng có một số nơi bây giờ người ta bỏ nhân vào gồm tôm không vỏ, không có mỡ lợn, chỉ có thịt lợn xay, nấm và hành tây. Ngoài bột sắn, tinh bột ngô và bột gạo cũng được thêm vào trong quá trình làm bánh bột lọc.', 3, 300, 30000, 'sang8.jpg', 1),
(9, 'Hủ Tiếu Nam Vang', 'Hủ tiếu Nam Vang là một món ăn có có nguồn gốc từ Phnôm Pênh, Campuchia. Cộng đồng người Hoa ở Nam Vang (tên phiên âm Hán Việt của Phnôm Pênh) đã chế biến lại, sau đó đưa món ăn này về Việt Nam. Về sau, hủ tiếu Nam Vang được thêm nhiều loại gia vị đậm đà hơn để phù hợp với văn hóa ẩm thực của người Việt và trở thành đặc sản Sài Gòn, nổi tiếng ba miền.', 5, 400, 100000, 'sang9.jpg', 1),
(10, 'Phở', 'Thành phần chính của phở là bánh phở và nước dùng cùng với thịt bò hoặc thịt gà cắt lát mỏng. Thịt bò thích hợp nhất để nấu phở là thịt, xương từ các giống bò ta (bò nội, bò vàng). Ngoài ra còn kèm theo các gia vị như: tương, tiêu, chanh, nước mắm, ớt, vân vân. Những gia vị này được thêm vào tùy theo khẩu vị của người dùng. Phở thông thường được dùng để làm món điểm tâm buổi sáng hoặc lót dạ buổi đêm; nhưng ở các thành phố lớn, món ăn này có thể được thưởng thức cả ngày.', 5, 400, 100000, 'sang10.jpg', 1),
(11, 'Thịt Nguội Cuộn Phô Mai', 'Những chiếc chong chóng giăm bông và pho mát này được làm dễ dàng bằng cách sử dụng bột cuộn hình lưỡi liềm mua ở cửa hàng. Chúng chứa đầy phô mai tan chảy và giăm bông mặn ngọt, bên trên là rau mùi tây tươi và hạt anh túc thơm ngon để tạo nên kết cấu và hương vị mà bạn và khách của bạn sẽ yêu thích.', 4, 600, 170000, 'trua1.jpg', 2),
(12, 'Ớt Nhồi Thịt', 'Trong số tất cả các loại thực phẩm bạn có thể nhồi, ớt nhồi đứng đầu danh sách của chúng tôi. Ớt chuông đủ lớn để chứa được nhiều ớt, đủ chắc để giữ nguyên hình dạng trong lò nướng và đủ hương vị dịu nhẹ để ăn kèm với hầu hết mọi thứ. Ở đây, chúng tôi sẽ làm đầy chúng với thịt bò, cơm cà chua và phô mai Monterey Jack cắt nhỏ, nhưng bạn có thể tùy chỉnh chúng để phù hợp với khẩu vị của mình.', 4, 500, 50000, 'trua2.jpg', 2),
(13, 'Bánh Mì Nhồi Thịt Heo', 'Món ăn ngày lễ đáng yêu này sẽ trở thành một huyền thoại ngay lập tức cho tất cả gia đình và bạn bè của bạn. Đó là một thành phần tuyệt vời cho bữa trưa ăn nhẹ, biến một trong những ứng dụng yêu thích của chúng tôi lợn trong chăn thành vật trang trí lễ hội.', 4, 600, 40000, 'trua3.jpg', 2),
(14, 'Thịt Bò Hầm Tiêu Xanh', 'Thịt bò hầm là món ăn không thể thiếu trong thời tiết se lạnh. Nếu bạn chuẩn bị cho ngày trọng đại, kiểu cổ điển ấm cúng này cũng có tiềm năng trang điểm mạnh mẽ. Chuẩn bị nó vào ngày hôm trước, sau đó bảo quản trong tủ lạnh cho đến khi bạn sẵn sàng phục vụ vào ngày hôm sau.', 5, 700, 200000, 'trua4.jpg', 2),
(15, 'Gà Tây Thăn', 'Ai nói gà tây chỉ dành cho bữa tối Lễ tạ ơn? Nếu bạn đang phục vụ một bữa trưa thịnh soạn hơn cho Giáng sinh, món thăn gà tây này là món chính hoàn hảo kết hợp với khoai tây nướng và đậu xanh có vị tỏi. Nó cũng là một lát mỏng tuyệt vời cho bánh mì gà tây!', 5, 700, 300000, 'trua5.jpg', 2),
(16, 'Bánh Mì Kẹp Thịt Kiểu Pháp', 'Những miếng vuông nhúng kiểu Pháp dễ dàng này chứa đầy hương vị phức hợp (nhờ hành tây caramen!), VÀ có đủ để nuôi một đám đông đang đói. Lối tắt hoàn hảo cho món bánh mì kẹp kiểu Pháp, chúng tôi sẽ làm đi làm lại những món này.', 5, 400, 60000, 'trua6.jpg', 2),
(17, 'Mì Gà Crockpot ', 'Món phở gà tự làm đã rất dễ nấu, nhưng việc cho tất cả nguyên liệu vào nồi nấu chậm còn dễ dàng hơn nữa. Món súp nhẹ này là món cổ điển ấm cúng cho mùa đông và là món khai vị hoàn hảo cho bữa trưa trước bữa tối Giáng sinh của bạn.', 4.5, 400, 50000, 'trua7.jpg', 2),
(18, 'Súp Gnocchi Gà Olive Garden', 'Gnocchi là một loại thực phẩm chủ yếu trong tủ đựng thức ăn bị đánh giá thấp, tuyệt vời như ngôi sao của một món ăn, nhưng cũng hoạt động cực kỳ tốt trong súp. Nó gần giống như làm bánh bao gà với một nửa thời gian và công sức! Để đi xa hơn, chúng tôi khuyên bạn nên tự làm nước dùng gà để thực sự dậy mùi (hiểu chưa?) theo công thức này!', 4, 500, 60000, 'trua8.jpg', 2),
(19, 'Bó Xôi với Phô Mai', 'Món bánh quiche rau bina béo ngậy, béo ngậy này chỉ là món ăn nổi bật cho bữa nửa buổi vào những dịp đặc biệt. Một món salad arugula đơn giản và một ít khoai tây chiên giòn sẽ hoàn thiện bữa ăn nửa buổi đầy đủ này một cách độc đáo.', 4, 400, 50000, 'trua9.jpg', 2),
(20, 'Súp Cua', 'Quá ngon', 4, 400, 50000, 'chay2.jpg', 1),
(21, 'Pasta Gà Nướng', 'Bữa tối với mì ống nổi tiếng là nhanh chóng, nhưng hãy thành thật mà nói: Đun sôi một nồi nước sẽ mất rất nhiều thời gian. Được rồi, có thể không thực sự là mãi mãi, nhưng nó có thể cảm thấy như vậy. Nhập mì ống gà nướng không cần đun sôi thông minh này, cho phép lò nướng làm tất cả công việc cho bạn.', 4, 600, 100000, 'toi1.jpg', 3),
(22, 'Bánh Mì Cột Kiểu Pháp', 'Được xếp lớp với giăm bông, hành tây Thụy Sĩ và caramen, thanh trượt này có thể trở thành thứ bắt buộc phải có trong kỳ nghỉ mới của bạn. Bên cạnh việc chắc chắn sẽ thu hút khách, những thanh trượt này còn là món ăn tuyệt vời cho bữa tiệc vì chúng rất dễ kết hợp với nhau. Tách cuộn, xếp lớp, nướng và chỉ trong vài phút, bạn đã có cả chục chiếc bánh mì nóng hổi, ​​thơm ngon.', 4, 500, 50000, 'toi2.jpg', 3),
(23, 'Kem Kale & Gnocchi Nướng', 'Những người hâm mộ món rau bina phủ kem sẽ hoàn toàn thích món bánh nướng gnocchi và cải xoăn béo ngậy, béo ngậy này, món ăn phụ cổ điển được đặt ở vị trí chính giữa trên đĩa của bạn với gnocchi là điểm thu hút chính. Thật nhanh chóng để kết hợp với nhau vì gnocchi nấu ngay trong nước sốt, khiến chúng trở nên béo ngậy và thơm ngon hơn.', 4, 600, 40000, 'toi3.jpg', 3),
(24, 'Panera Súp Bí Mùa Thu', 'Panera có một sự sùng bái xung quanh món súp của họ, và đặc biệt là món súp bí mùa thu của họ. Phiên bản bắt chước của chúng tôi có bí đỏ, bí ngô, cà rốt và hẹ để có hương vị ngọt ngào và trọn vẹn mà bạn sẽ không phải xếp hàng để mua.', 5, 700, 50000, 'toi4.jpg', 3),
(25, 'Cracker Thùng Gà và Bánh Bao', 'Bây giờ bạn có thể làm một bát hấp gồm món ăn cổ điển, thoải mái của Cracker Barrel tại nhà! Công thức sao chép này tỏ lòng kính trọng đối với sự tinh khiết trong công thức của họ—không có đậu Hà Lan, cà rốt, rau hoặc những thứ tương tự trong món ăn. Thay vào đó, hãy phục vụ nó với một số mặt rau!', 4, 700, 30000, 'toi5.jpg', 3),
(26, 'Thịt Nguội Tráng Men', 'Giăm bông xoắn ốc rất ngon, nhưng chúng cho rất nhiều thịt. Nếu bạn đang phục vụ một lễ kỷ niệm ngày lễ chỉ với một số ít người, bít tết giăm bông là lựa chọn phù hợp! Thay vì nướng và tráng men cả một miếng giăm bông, chỉ cần làm cho mọi người món bít tết thơm ngon, được nấu chín hoàn hảo của riêng họ.', 3, 400, 60000, 'toi6.jpg', 3),
(27, 'Bánh Mì Nướng Kiểu Pháp', 'Nếu bữa trưa đồng nghĩa với bữa nửa buổi với bạn, thì chúng tôi có ba từ dành cho bạn sẽ thay đổi trò chơi bữa nửa buổi của bạn mãi mãi: Qua đêm. Người Pháp. Nướng. Tất nhiên, chúng tôi thích bánh mì nướng kiểu Pháp thông thường cho bữa sáng vào phút cuối cho một hoặc hai người, nhưng bánh mì nướng kiểu Pháp qua đêm sẽ tốt hơn rất nhiều cho đám đông và nó cho phép bạn tận hưởng buổi sáng mà không phải vội vã vào bếp.', 4, 400, 50000, 'toi7.jpg', 3),
(28, 'Món Thịt Hầm Khoai Tây Nướng', 'Chúng ta sẽ không bao giờ sánh kịp thiên tài của người đã phát minh ra món khoai tây nướng hai lần. Tuy nhiên, chúng tôi nghĩ rằng chúng tôi đã khá gần với món thịt hầm này. Chúng tôi biến mặt có lót giấy bạc thành món thịt hầm béo ngậy, béo ngậy, món ăn được yêu thích ngay lập tức trong bất kỳ bữa ăn ngày lễ nào.', 5, 500, 270000, 'toi8.jpg', 3),
(29, 'Chân Cừu Non', 'Ai nói rằng bạn phải đợi đến giờ ăn tối để có một bữa tiệc? Chuẩn bị một miếng thịt đắt tiền như thế này có thể khiến bạn lo lắng, nhưng chúng tôi hứa, BẠN CÓ THỂ LÀM ĐƯỢC! Ngay cả khi được chuẩn bị siêu đơn giản, nó vẫn có thể cực kỳ ngon.', 5, 400, 250000, 'toi9.jpg', 3),
(30, 'Cá Hồi Pesto Nướng', 'Cần một bữa ăn trưa đặc biệt nhanh chóng? Đây chính là nó! Mặc dù bạn có thể tự làm món sốt pesto cho công thức này (cũng siêu nhanh và dễ làm sẵn) nhưng món sốt pesto mua ở cửa hàng khiến món ăn này gần như không cần tốn nhiều công sức.', 5, 400, 300000, 'toi10.jpg', 3),
(32, 'Salad Giòn', 'Chúng tôi đã tạo ra món salad cải xoăn này như một sự kính trọng dành cho món giòn. Mỗi thành phần đã được chọn để khuếch đại kết cấu đồng thời thêm hương vị đậm đà. Chúng tôi đã bao gồm táo xanh, đậu phộng rang và bắp cải, nhưng hãy tiếp tục và thêm bất kỳ thành phần nào có độ giòn mà bạn thích!', 3, 100, 30000, 'chay1.jpg', 4),
(33, 'Farro và Salad Đậu Trắng', 'Chúng tôi khuyên bạn nên dùng nước sốt chanh tươi và kết thúc món salad này với một ít pho mát dê để tăng thêm vị béo ngậy của kem, nhưng nếu không thì thực sự không có gì xảy ra. Hoán đổi các loại đậu khác nhau, bất kỳ loại rau rang theo mùa yêu thích nào của bạn hoặc thậm chí các loại rau xanh khác nhau.', 4, 100, 40000, 'chay2.jpg', 4),
(34, 'Salad Phô Mai Củ Cải Nướng', 'Những người yêu thích củ cải hãy vui mừng! Đây là món salad lý tưởng: phô mai dê kem (feta phụ nếu bạn thích), củ cải đường nướng, bơ và rau arugula. Bí quyết là thay vì mua củ cải đã sơ chế, bạn chỉ cần bọc chúng trong giấy bạc và nướng như khoai tây nướng.', 4, 100, 40000, 'chay3.jpg', 4),
(35, 'Xà Lách Mầm Parmesan Brussels', 'Chúng tôi thú nhận: Chúng tôi đã nhảy lên chuyến tàu mầm Brussels và không bao giờ nhìn lại. Có rất nhiều cách ngon để chế biến chúng quay, nướng, chiên ngập dầu...chúng ta có cần tiếp tục không? Tuy nhiên, một trong những cách yêu thích để chế biến rau mầm nổi tiếng là trộn salad tươi. Được trộn với sự kết hợp của hạnh nhân nướng, phô mai Parmesan bào và hạt lựu, đây là món ăn tuyệt vời nhất cho bất kỳ bữa ăn Giáng sinh nào.', 4, 150, 40000, 'chay4.jpg', 4),
(36, 'Salad Waldorf', 'Được tạo ra vào năm 1896 cho một vũ hội từ thiện được tổ chức tại khách sạn Waldorf-Astoria ở Thành phố New York, món salad này từng chỉ bao gồm ba thành phần: táo, cần tây và mayo. Nghe có vẻ lạ, nhưng đó là một cổ điển. Phiên bản hiện đại của chúng tôi bổ sung nho mọng nước và quả óc chó, tất cả được bao bọc trong lớp nước sốt kem chanh.', 4, 150, 30000, 'chay5.jpg', 4),
(37, 'Salad Khoai Lang', 'Chúng tôi khuyên bạn nên trang trí món chay này để biến bữa tiệc ngày lễ thành một bữa ăn chính no lâu hơn. Đó là một cách nhẹ nhàng nhưng đậm chất lễ hội để bắt đầu lễ kỷ niệm ngày lễ của bạn, chúng tôi sẽ viện mọi lý do để phục vụ món salad siêu ngon này.', 3, 100, 40000, 'chay6.jpg', 4),
(38, 'Herby Nướng Falafel với Bạc Hà Cay', 'Nhờ đậu xanh, món salad này sẽ giúp bạn no trong nhiều giờ. Nó thỏa mãn theo cách mà những chiếc lá xanh không bao giờ có được. Bạn muốn giữ cho nó không có sữa? Bổ sung một dạng protein khác thay cho feta, hoặc một nắm hạt nướng cắt nhỏ.', 3, 100, 40000, 'chay7.jpg', 4),
(39, 'Nước Dừa', 'Nước dừa mát lạnh từ thiên nhiên', 3, 90, 20000, 'nuoc1.jpg', 5),
(40, '7 Up', 'Nước ngọt có gas', 3, 150, 20000, 'nuoc2.jpg', 5),
(41, 'Pepis', 'Nước ngọt có gas', 3, 150, 20000, 'nuoc3.jpg', 5),
(42, 'Coca Cola', 'Nước ngọt có gas', 3, 150, 20000, 'nuoc4.jpg', 5),
(43, 'Bò Hút', 'Nước tăng lực', 3, 150, 30000, 'nuoc5.jpg', 5),
(44, 'Nước Khoáng', 'Nước khoáng tinh khiết', 3, 50, 15000, 'nuoc6.jpg', 5),
(45, 'Sprite', 'Nước ngọt có gas', 3, 140, 20000, 'nuoc7.jpg', 5),
(46, 'Nước Cam Twister', 'Nước cam ép nguyên chất', 3, 100, 25000, 'nuoc8.jpg', 5),
(47, 'Trà Ô Long', 'Trà ô long từ lá trà thiên nhiên', 3, 100, 20000, 'nuoc9.jpg', 5),
(48, 'Cocktail', 'Thức uống hỗn hợp có cồn', 4, 200, 50000, 'nuoc10.jpg', 5),
(52, 'Súp Cua Đồng', 'quá lắm', 0, 0, 60000, 'RauNgot.JPG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `MaBanner` int(11) NOT NULL,
  `Source` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`MaBanner`, `Source`) VALUES
(1, 'banner1.jpg'),
(2, 'banner2.jpg'),
(3, 'banner3.jpg'),
(4, 'banner4.jpg'),
(5, 'banner5.jpg'),
(6, 'banner6.jpg'),
(7, 'banner7.jpg'),
(8, 'banner8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `MaBai` int(11) NOT NULL,
  `TenTieuDe` text NOT NULL,
  `NoiDung` text NOT NULL,
  `NgayDang` date NOT NULL,
  `Hinh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cauhoi`
--

CREATE TABLE `cauhoi` (
  `MaCau` int(11) NOT NULL,
  `CauHoi` text NOT NULL,
  `TraLoi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cauhoi`
--

INSERT INTO `cauhoi` (`MaCau`, `CauHoi`, `TraLoi`) VALUES
(1, 'Làm cách nào để đặt một đơn hàng trên trang web của bạn?', 'Để đặt một đơn hàng trên trang web của chúng tôi, bạn chỉ cần thực hiện các bước sau đây:\r\nTruy cập vào trang chủ của chúng tôi.\r\nDùng tính năng tìm kiếm hoặc duyệt qua danh mục sản phẩm để tìm món ăn bạn muốn đặt.\r\nChọn món ăn và thêm vào giỏ hàng.\r\nKiểm tra lại giỏ hàng của bạn và điền thông tin cần thiết như địa chỉ giao hàng và phương thức thanh toán.\r\nHoàn tất quá trình thanh toán bằng cách làm theo hướng dẫn trên trang web.\r\nĐơn hàng của bạn sẽ được xác nhận và chúng tôi sẽ giao hàng đến địa chỉ bạn đã cung cấp.'),
(2, 'Bạn có hỗ trợ giao hàng tận nơi không?', 'Vâng, chúng tôi cung cấp dịch vụ giao hàng tận nơi cho khách hàng. Chúng tôi cam kết giao hàng nhanh chóng và đảm bảo đồ ăn đến tay bạn trong thời gian ngắn nhất có thể.'),
(3, 'Phí vận chuyển và thời gian giao hàng là bao nhiêu?', 'Phí vận chuyển và thời gian giao hàng có thể khác nhau tùy thuộc vào vị trí của bạn và loại sản phẩm bạn đặt hàng. Khi bạn điền thông tin địa chỉ giao hàng trong quá trình đặt hàng, chúng tôi sẽ cung cấp thông tin chi tiết về phí vận chuyển và thời gian giao hàng cho bạn.'),
(4, 'Bạn có chấp nhận thanh toán bằng phương thức nào?', 'Chúng tôi chấp nhận nhiều phương thức thanh toán khác nhau để thuận tiện cho khách hàng, bao gồm:\r\nThẻ tín dụng/debit.\r\nChuyển khoản ngân hàng.\r\nCác ví điện tử như PayPal, Google Pay, Apple Pay, và Samsung Pay.\r\nTiền mặt khi nhận hàng (áp dụng tùy thuộc vào khu vực giao hàng).'),
(5, 'Bạn có chính sách hoàn trả hàng không đúng chất lượng không?', 'Đúng, chúng tôi cam kết chất lượng và sự hài lòng của khách hàng. Nếu bạn nhận được một món hàng không đúng chất lượng, vui lòng liên hệ với chúng tôi trong vòng 24 giờ sau khi nhận hàng để được hỗ trợ hoàn trả hoặc đổi sản phẩm.'),
(6, 'Tôi có thể theo dõi đơn hàng của mình không?', 'Vâng, chúng tôi cung cấp dịch vụ theo dõi đơn hàng cho khách hàng. Khi đơn hàng của bạn được xác nhận, chúng tôi sẽ cung cấp cho bạn một số hóa đơn hoặc liên kết để bạn có thể theo dõi tình trạng giao hàng của mình trực tuyến. Bạn cũng có thể liên hệ trực tiếp với đội ngũ chăm sóc khách hàng của chúng tôi để được hỗ trợ thêm trong việc theo dõi đơn hàng.');

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `MaDG` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `NoiDung` text NOT NULL,
  `Sao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daubep`
--

CREATE TABLE `daubep` (
  `MaDB` int(11) NOT NULL,
  `TenDB` text NOT NULL,
  `FB` text NOT NULL,
  `Insta` text NOT NULL,
  `Youtube` text NOT NULL,
  `Hinh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `daubep`
--

INSERT INTO `daubep` (`MaDB`, `TenDB`, `FB`, `Insta`, `Youtube`, `Hinh`) VALUES
(1, 'Nilay Hirpara', 'https://www.facebook.com/gordonramsay', 'https://www.instagram.com/gordongram/?fbclid=IwAR3b1q7RU9xdel5JaTg7FMkPlWML5Vb3lzGkfPsSUytYgJ3kLYItMGGrQng', 'https://www.youtube.com/GordonRamsay', 'db1.jpg'),
(2, 'Navnit Kumar', 'https://www.facebook.com/gordonramsay', 'https://www.instagram.com/gordongram/?fbclid=IwAR3b1q7RU9xdel5JaTg7FMkPlWML5Vb3lzGkfPsSUytYgJ3kLYItMGGrQng', 'https://www.youtube.com/GordonRamsay', 'db4.jpg'),
(3, 'Gordon Ramsay', 'https://www.facebook.com/gordonramsay', 'https://www.instagram.com/gordongram/?fbclid=IwAR3b1q7RU9xdel5JaTg7FMkPlWML5Vb3lzGkfPsSUytYgJ3kLYItMGGrQng', 'https://www.youtube.com/GordonRamsay', 'db3.jpg'),
(4, 'Nilay Hirpara', 'https://www.facebook.com/gordonramsay', 'https://www.instagram.com/gordongram/?fbclid=IwAR3b1q7RU9xdel5JaTg7FMkPlWML5Vb3lzGkfPsSUytYgJ3kLYItMGGrQng', 'https://www.youtube.com/GordonRamsay', 'db2.jpg'),
(5, 'Pranav Badgal', 'https://www.facebook.com/gordonramsay', 'https://www.instagram.com/gordongram/?fbclid=IwAR3b1q7RU9xdel5JaTg7FMkPlWML5Vb3lzGkfPsSUytYgJ3kLYItMGGrQng', 'https://www.youtube.com/GordonRamsay', 'db5.jpg'),
(6, 'Priyotosh Dey', 'https://www.facebook.com/gordonramsay', 'https://www.instagram.com/gordongram/?fbclid=IwAR3b1q7RU9xdel5JaTg7FMkPlWML5Vb3lzGkfPsSUytYgJ3kLYItMGGrQng', 'https://www.youtube.com/GordonRamsay', 'db6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDH` int(11) NOT NULL,
  `NgayDat` date NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaMon` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `ThanhTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `MaGH` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaMon` int(11) NOT NULL,
  `SLMon` int(11) NOT NULL,
  `SLTrongGio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `TenKH` text NOT NULL,
  `SDT` text NOT NULL,
  `Email` text NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` text NOT NULL,
  `DiaChi` text NOT NULL,
  `Hinh` text NOT NULL,
  `MatKhau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `SDT`, `Email`, `NgaySinh`, `GioiTinh`, `DiaChi`, `Hinh`, `MatKhau`) VALUES
(1, 'Lê Huỳnh Phúc', '0369999999', 'phuc@gmail.com', '2002-10-20', 'Nam', 'Bình Tân', 'kh1.jpg', 'phuc123'),
(2, 'Trương Thành Trung', '0986666666', 'trung@gmail.com', '2002-11-10', 'Nam', 'Tân Kỳ Tân Quý', 'kh2.jpg', 'trung123'),
(3, 'Lê Thị Xuân', '0360125956', 'xuan@gmail.com', '2000-10-20', 'Nữ', 'Gò Vấp', 'kh3.jpg', 'xuan123'),
(4, 'Văn Sơn', '0789526486', 'son@gmail.com', '2002-10-20', 'Nam', 'Bình Tân', 'kh4.jpg', 'son123'),
(5, 'Nguyễn Mạnh Khang', '085632158', 'khang@gmail.com', '2001-10-13', 'Nam', 'Tên Lửa', 'kh5.jpg', 'khang123'),
(6, 'Nguyễn Thị Hoa', '0546832145', 'hoa@gmail.com', '1990-10-20', 'Nữ', 'Sư Vạn Hạnh', 'kh6.jpg', 'hoa123'),
(7, 'Lê Văn Tòng', '0734562495', 'tong@gmail.com', '1998-10-20', 'Nam', 'Bình Tân', 'kh7.jpg', 'tong123'),
(8, 'Chương Văn Tuấn', '0456235985', 'tuan@gmail.com', '2000-12-22', 'Nam', 'Trường Chinh', 'kh8.jpg', 'tuan123'),
(9, 'Lê Thị Anh Thư', '0366845624', 'thu@gmail.com', '2001-10-20', 'Nữ', 'Hoàng Hoa Thám', 'kh9.jpg', 'thu123'),
(10, 'Nguyễn Thị Trang', '03621548954', 'trang@gmail.com', '1996-10-20', 'Nữ', 'Bình Tân', 'kh10.jpg', 'trang123'),
(11, 'HEHEHE', '1323', 'hehe@gmail.com', '2023-05-06', 'Nam', 'Nước Nhật', '', '123');

-- --------------------------------------------------------

--
-- Table structure for table `loaiamthuc`
--

CREATE TABLE `loaiamthuc` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` text NOT NULL,
  `HinhMH` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaiamthuc`
--

INSERT INTO `loaiamthuc` (`MaLoai`, `TenLoai`, `HinhMH`) VALUES
(1, 'Ăn Sáng', 'menu1.png'),
(2, 'Ăn Trưa', 'menu2.png'),
(3, 'Ăn Tối', 'menu3.png'),
(4, 'Ăn Chay', 'menu4.png'),
(5, 'Thức Uống', 'menu5.png');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(11) NOT NULL,
  `TenNV` text NOT NULL,
  `SDT` text NOT NULL,
  `Email` text NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` text NOT NULL,
  `DiaChi` text NOT NULL,
  `MatKhau` text NOT NULL,
  `Hinh` text NOT NULL,
  `Quyen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `SDT`, `Email`, `NgaySinh`, `GioiTinh`, `DiaChi`, `MatKhau`, `Hinh`, `Quyen`) VALUES
(1, 'Lê Huỳnh Phúc', '0369999999', 'phuc@gmail.com', '2002-10-20', 'Nam', 'Bình Tân', 'phuc123', 'nv3.jpg', 'ADMIN'),
(2, 'Trương Thành Trung', '0799999999', 'trung@gmail.com', '2002-06-22', 'Nam', 'Tân Kỳ Tân Quý', 'trung123', 'nv2.jpg', 'NV'),
(3, 'Nguyễn Đình Toàn', '03215584765', 'toan@gmail.com', '2000-10-20', 'Nam', 'Sơn Kỳ', 'toan123', 'nv3.jpg', 'NV'),
(4, 'Trần Anh Tuấn', '0981558475', 'tuan@gmail.com', '1990-10-20', 'Nam', 'Gò Vấp', 'tuan123', 'nv4.jpg', 'NV'),
(5, 'Phan Nguyễn Tân', '0771558475', 'tan@gmail.com', '1999-10-20', 'Nam', 'Quận 5', 'tan123', 'nv5.jpg', 'NV'),
(6, 'Lê Hồng Ánh', '0361558475', 'anh@gmail.com', '2000-11-23', 'Nữ', 'Bình Trị Đông', 'anh123', 'nv6.jpg', 'NV'),
(7, 'Nguyễn Thị Thơ', '0771558475', 'tho@gmail.com', '2001-10-16', 'Nữ', 'Tân Phú', 'tho123', 'nv7.jpg', 'NV'),
(8, 'Trương Mỹ Nhân', '0321558475', 'mynhan@gmail.com', '2002-10-20', 'Nữ', 'Tân Bình', 'mynhan123', 'nv8.jpg', 'NV'),
(9, 'Lê Tấn Phát', '0781558435', 'phat@gmail.com', '2003-10-20', 'Nam', 'Tân Bình', 'phat123', 'nv9.jpg', 'NV'),
(10, 'Phan Văn Tèo', '0321558475', 'teo@gmail.com', '1990-10-20', 'Nam', 'Quận 7', 'teo123', 'nv10.jpg', 'NV'),
(11, 'Doraemon', '0235465465', 'doraemon@gmail.com', '2023-05-10', 'Nam', 'Nước Nhật', '', 'nv10.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amthuc`
--
ALTER TABLE `amthuc`
  ADD PRIMARY KEY (`MaMon`),
  ADD KEY `FK_AT_LAT` (`MaLoai`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`MaBanner`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`MaBai`);

--
-- Indexes for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`MaCau`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`MaDG`),
  ADD KEY `FK_DG_KH` (`MaKH`);

--
-- Indexes for table `daubep`
--
ALTER TABLE `daubep`
  ADD PRIMARY KEY (`MaDB`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDH`),
  ADD KEY `FK_DH_KH` (`MaKH`),
  ADD KEY `FK_DH_AT` (`MaMon`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaGH`),
  ADD KEY `FK_GH_KH` (`MaKH`),
  ADD KEY `FK_GH_AT` (`MaMon`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`),
  ADD UNIQUE KEY `Email` (`Email`) USING HASH;

--
-- Indexes for table `loaiamthuc`
--
ALTER TABLE `loaiamthuc`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`),
  ADD UNIQUE KEY `Email` (`Email`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amthuc`
--
ALTER TABLE `amthuc`
  MODIFY `MaMon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `MaBanner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `MaBai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `MaCau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `MaDG` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daubep`
--
ALTER TABLE `daubep`
  MODIFY `MaDB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `MaGH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `loaiamthuc`
--
ALTER TABLE `loaiamthuc`
  MODIFY `MaLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `amthuc`
--
ALTER TABLE `amthuc`
  ADD CONSTRAINT `FK_AT_LAT` FOREIGN KEY (`MaLoai`) REFERENCES `loaiamthuc` (`MaLoai`);

--
-- Constraints for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `FK_DG_KH` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `FK_DH_AT` FOREIGN KEY (`MaMon`) REFERENCES `amthuc` (`MaMon`),
  ADD CONSTRAINT `FK_DH_KH` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `FK_GH_AT` FOREIGN KEY (`MaMon`) REFERENCES `amthuc` (`MaMon`),
  ADD CONSTRAINT `FK_GH_KH` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
