-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 04, 2020 lúc 05:20 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `unitedpet`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_case`
--

CREATE TABLE `tbl_case` (
  `case_id` int(11) NOT NULL,
  `ng_bao_tin` varchar(200) DEFAULT NULL,
  `sdt` varchar(10) NOT NULL,
  `dia_diem_cuu` varchar(200) NOT NULL,
  `pet_id` int(11) NOT NULL,
  `tinh_trang_id` int(11) NOT NULL,
  `muc_do_id` int(11) NOT NULL,
  `tiep_nhan_id` int(11) NOT NULL,
  `ghi_chu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_gioi_tinh`
--

CREATE TABLE `tbl_gioi_tinh` (
  `gioi_tinh_id` int(11) NOT NULL,
  `ten_gioi_tinh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `tieu_de` varchar(300) NOT NULL,
  `mo_ta` varchar(500) NOT NULL,
  `noi_dung` text NOT NULL,
  `anh_minh_hoa` varchar(200) NOT NULL,
  `tac_gia` varchar(200) NOT NULL,
  `ngay_dang` timestamp NOT NULL DEFAULT current_timestamp(),
  `ghi_chu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `tieu_de`, `mo_ta`, `noi_dung`, `anh_minh_hoa`, `tac_gia`, `ngay_dang`, `ghi_chu`) VALUES
(2, 'Hãy dừng lại nếu bạn đang cho chó mèo ăn chay', 'Hãy dừng ngay lại việc cho chó mèo ăn chay hoặc rau củ quả với hàm lượng lớn trong một thời gian dài. Tại sao bạn phải cho chó mèo ăn thịt cá? Hãy chia sẻ nếu bạn là người yêu chó mèo chân chính. Bài viết dưới đây của Pet Mart sẽ phân tích đặc biệt vấn đề ăn chay dành riêng cho chó mèo.', '3 lý do khẳng định rằng chó mèo không ăn chay.\r\nThời gian gần đây chúng tôi có nhận được khá nhiều những ý kiến tranh luận về việc nên hay không cho chó mèo ăn rau củ. Ăn với hàm lượng như thế nào? Thời gian kéo dài ra sao? Và đặc biệt là có ý kiến còn khẳng định rằng chó mèo ăn chay và vẫn khỏe mạnh binh thường.Theo Tiến sĩ Lisa Weeth, một chuyên gia dinh dưỡng thú y, nói rằng: Bà thường không khuyến cáo chế độ cho chó mèo ăn chay. Vấn đề về dinh dưỡng của chó mèo dù là thịt hoặc thực vật cũng cần phải cung cấp đủ dưỡng chất thiết yếu một cách cân bằng. Đảm bảo cho sự phát triển toàn diện của thú cưng. Đặc biệt là trong độ tuổi từ 2 – 15 tháng đầu đời. Điều này gần như không thể với chế độ cho chó mèo ăn chay hoàn toàn.Trong bài viết này, chúng tôi sẽ tập hợp những kiến thức, tài liệu khoa học quốc tế và sự tư vấn của hội đồng bác sĩ thú y trong và ngoài nước để làm rõ tất cả các câu hỏi trên. Nếu các Sen lười đọc phần dẫn chứng có thể đi thẳng xuống phần kết luận ở cuối bài.Trước hết, chúng ta cần hiểu rõ một số tiên đề đã được khoa học chứng minh ở mèo về Protein – Carbohydrate – Vitamin như sau:Chó mèo là động vật ăn thịt. Bản năng mà Mẹ thiên nhiên trao tặng cho chó mèo là việc sống và lấy năng lượng từ Protein và là loại protein có nguồn gốc động vật. Không phải thực vật.Chó mèo có nhu cầu Carbohydrate (tinh bột-đường) chiếm rất ít (2-5% khẩu phần ăn). Vì hệ tiêu hóa của mèo thiếu enzyme amylase (amilaza) để phân giải carbohydrate thành đường đơn.Chó mèo lấy vitamin từ thịt, nội tạng và các thức ăn chưa tiêu hóa hết trong nội tạng của động vật mà nó săn được. Nếu thiếu vitamin, theo bản năng mèo sẽ ăn một số thực vật như cỏ. Nhưng sẽ không tiêu hóa) để bổ sung.Chó mèo ăn chay và rau củ có đủ chất không?Nếu các Sen đã cho chó mèo ăn chay (trộn cơm với rau củ) và khẳng định chúng sống bình thường. Xin thưa rằng tất cả động vật trên đời này đều “sống bình thường” cho đến khi phát bệnh và chết. Ăn chay sẽ dẫn đến thay đổi độ pH trong hệ tiết niệu, có thể dẫn đến sỏi thận.Ngoài ra nếu không có hoặc có quá ít protein động vật trong thức ăn cho mèo con sẽ gây thiếu hụt trầm trọng Taurine. Có thể gây mù mắt cho mèo do giảm tế bào võng mạc. Nếu các bạn muốn thay đổi thế giới thì hãy làm một mình. Vì người là động vật ăn tạp còn mèo là động vật ăn thịt. Hãy dừng ngay tội ác trái tự nhiên này lại nhé các Sen.Nếu cho mèo ăn một lượng Carbohydrate quá cao sẽ gây tiểu đường, béo phì, giảm sự hấp thu protein. Và hại đến nội quan do hệ tiêu hóa của mèo không được thiết kế để tiêu hóa quá nhiều tinh bột. Lưu ý rằng khoai tây có 20% carb, khoai lang là 21% và bí đỏ là 12%. Để bổ sung vitamin cho chó mèo, chúng ta có nguồn thức ăn giàu vitamin và khoáng chất như cá biển, hạt khô, cỏ lúa mạch (cỏ mèo), các loại thực phẩm bổ sung, và có thể từ rau củ.Protein của động vật và thực vật không giống nhauNếu chủ vật nuôi là một người thuần chay hoặc ăn chay và muốn biến thú cưng của mình thành một chú chó ăn chay hoàn toàn là một điều khá dễ hiểu. Vậy, một chú chó, chú mèo khỏe mạnh đã trưởng thành dần dần chuyển sang chế độ ăn thuần chay liệu có tốt không? Trong một số trường hợp vẫn có thể, miễn là chó mèo được cung cấp nguồn dinh dưỡng cân bằng phù hợp theo từng giai đoạn sống của chúng. Tuy nhiên, việc này không hề đơn giản như bạn nghĩ.Chế độ cho chó mèo ăn chay hoàn toàn có thể cung cấp một ít protein nhưng mức độ đó chưa đủ để chó phát triển. Ngoài ra, protein từ thực vật không có đủ lượng amino axit cần thiết. Nhằm đáp ứng nhu cầu chó cần như ở protein từ thịt động vật. Bác sĩ thú y nhìn vào chỉ số giá trị sinh học (BV), một phép đo được sử dụng để xác định hiệu quả của một loại protein cụ thể.Một vấn đề khác đối với protein từ thực vật là chúng có xu hướng ít tiêu hóa hơn so với protein từ thịt động vật. Vì vậy, nếu bạn cho chúng ăn đậu nành, nó sẽ được chuyển hóa khác với việc bạn cho chúng ăn thịt gà hoặc thịt bò. Và vì vậy chúng ta cần đảm bảo rằng các protein từ thực vật có khả năng tiêu hóa và chó có thể sử dụng chúng an toàn. Nếu không, chúng ta có thể mắc sai lầm lớn, đặc biệt là với chó mèo mang thai, mới đẻ đang cho con bú hoặc chó mèo đang trong độ tuổi phát triển.Theo Tiến sĩ Susan Jeffrey, một bác sĩ thú y tại Bệnh viện chăm sóc động vật Truesdell ở Madison, Wisconsin cho biết: Một số chế độ ăn thuần chay có thể thiếu các axit amin cần thiết như taurine và L-carnitine, thứ thường được tìm thấy trong thịt. Việc cung cấp thiếu các chất dinh dưỡng này có thể dẫn đến các vấn đề sức khỏe như bệnh tim. Thiếu taurine có thể dẫn đến bệnh cơ tim giãn ra.Tác hại của việc cho chó mèo ăn chay trong thời gian dàiNếu lạm dụng rau củ với lý do bổ sung Vitamin và chất xơ với hàm lượng lớn và trong thời gian dài sẽ có những bất lợi sau đây:Gây thừa Vitamin: Không kiểm soát hoặc không tính toán tốt lượng rau củ sẽ dẫn tới tình trạng này. Ngoài ra, nếu sử dụng sản phẩm có rau củ được cấp đông và rã đông thì sẽ mất đi hầu hết các vitamin tan trong nước vô tác dụng. Vitamin tổng hợp có thể khó hấp thu hơn Vitamin tự nhiên nhưng sẽ đầy đủ hơn. Vì nó đã được thiết kế dành riêng cho chó mèo, đảm kiểm soát liều lượng không gây dư thừa, ngộ độc.Gây dư thừa Carbonhydrate: Như đã nói ở trên, khoai tây luộc có 20% Carb, khoai lang là 21% và bí đỏ là 12%. Vậy để bổ sung như thế nào để lượng Carb không vượt quá 2 – 5% khẩu phần ăn của mèo là một điều cần tính toán rất kỹ bằng toán học. Không thể dựa vào kinh nghiệm như một số Sen bảo rằng: “ăn từ đó đến giờ có chết đâu”.Rau củ quả trộn không an toàn: Các loại thức ăn cho mèo tươi trộn rau củ thường sử dụng thành phần nguyên liệu này để bán với giá rẻ. Kéo theo việc sử dụng những sản phẩm động vật có chất lượng thấp như đầu cổ gà, xương gà để giảm giá thành. Các loại sản phẩm này dù xay nhuyễn vẫn có thể có xương dăm gây hóc xương. Hoặc nếu là xương nhọn có thể ghim vào cổ họng gây nhiễm trùng. Rau củ xay nhuyễn là môi trường lý tưởng cho vi khuẩn có hại phát triển. Đó là lý do thức ăn tươi có rau củ luôn phải bảo quản cấp đông.\r\nHơn nữa không phải tất cả thực phẩm chay cho chó đều được sản xuất như nhau. Để đảm bảo chế độ ăn của chó. Cần đáp ứng các tiêu chuẩn kiểm soát chất lượng dinh dưỡng nghiêm ngặt. Hãy xem nhãn hoặc gọi đến công ty. Trên bao sản phẩm thức ăn cho chó cần có câu khẳng định rằng thực phẩm này chứa đầy đủ dinh dưỡng. Hoặc ít nhất, nó phải tuân theo các yêu cầu của tổ chức AAFCO. Bên cạnh đó, sản phẩm thức ăn cho chó còn phải nêu rõ độ tuổi sử dụng phù hợp.Cho chó mèo ăn chay trong trường hợp nào?Tiến sĩ Joe Bartges, một chuyên gia dinh dưỡng thú y và giáo sư Y khoa Dinh dưỡng tại trường Đại học Georgia, Athens cho biết: Chế độ ăn thuần chay có thể là một chọn lựa hợp lý khi chó mèo của bạn đang cần tránh các protein từ thịt động vật. Ví dụ với bệnh thận, sỏi bàng quang urate và bệnh viêm ruột (IBD).Một số chó mèo rất nhạy cảm với protein từ thịt động vật nhiều hơn là protein từ thực vật. Vì vậy việc chuyển chúng sang thức ăn cho chó mèo thuần chay. Có thể có ích với trường hợp bênh đường ruột IBD.Điều đó không có nghĩa là ăn chay tốt hơn cho tất cả các trường hợp bệnh đường ruột IBD ở chó mèo. Với bệnh IBD, nó thực sự phụ thuộc vào mức độ phản ứng của từng cá thể. Vì vậy nếu chó mèo dị ứng với thực phẩm. Chúng ta cần theo dõi các thành phần protein đến từ đâu. Cho dù đó là nguồn gốc từ thực vật hay động vật.\r\nNhững lưu ý khi cho chó mèo ăn chay:\r\nNếu bạn buộc phải cho chó mèo ăn chay sau khi tham khảo ý kiến ​​bác sĩ thú y thì vẫn có một số điều cần lưu ý sau:\r\nĐầu tiên, protein từ thực vật có xu hướng làm cho nước tiểu có tính kiềm cao hơn. Nếu bạn chuyển hoàn toàn sang chế độ ăn chay hoàn toàn. Và đó là một loại protein vừa phải và không thêm bất kỳ chất acid uric nào. Nó có thể khiến cho chó của bạn có nguy cơ bị sỏi struvite.Những thay đổi dễ nhìn thấy trên bộ lông của chó. Nó có thể cho ta biết chó không hấp thu đủ lượng axit béo thiết yếu. Hãy quan sát bộ lông của chó có bóng hoặc trở nên xỉn màu và bẩn hay không? Chó có bị bong vảy da không? Mọi người thường nghĩ là những biểu hiện trên không liên quan gì đến việc thay đổi chế độ ăn uống vì phải mất từ ​​hai đến ba tháng mới xuất hiện.Nếu bạn nhận thấy bất kỳ thay đổi nào, hãy mang chó đến gặp bác sĩ thú y của bạn. Ngoài ra, tại kỳ kiểm tra sức khỏe định kỳ hàng năm của chó. Bác sĩ  sẽ làm xét nghiệm máu và phân tích nước tiểu. Để đảm bảo thức ăn được tiêu hóa và hấp thu theo cách cần thiết.Nguồn tham khảo về các thông tin liên quan đến mèo ăn chayFeeding Your Cat: Know the Basics of Feline Nutrition – Lisa A. Pierson, Tiến sĩ thuốc thú y, chuyên môn dinh dưỡng ngăn ngừa bệnh (Catinfo).Your cat’s nutritional needs – A Science-Based Guide For Pet Owners – Viện nghiên cứu khoa học quốc gia Mỹ.Taurine in cats – Tài liệu của hệ thống bệnh viện thú y VCA với hơn 750 bệnh viện ở Mỹ & Canada.The carnivore connection to nutritions in cats – Debra L. Zoran, Tiến sĩ thuốc thú y. Bài viết đã được thẩm định bởi Đại học dinh dưỡng thú y Hoa Kỳ (American College of Veterinary Nutrition).Các tài liệu đã được kiểm định có thể sử dụng chung cho người nuôi mèo ở khắp nơi trên thế giới. Nếu có sai biệt do môi trường sẽ không đáng kể.', 'hay-dung-lai-neu-ban-dang-cho-cho-meo-an-chay.jpg', 'Dan Chi', '2020-04-22 11:17:34', NULL),
(3, 'Giống chó Alaskan Malamute: khổng lồ liệu giá có rẻ?', 'Giống chó Alaskan Malamute hay chó Alaska, là một trong những giống chó kéo xe cổ xưa nhất trên thế giới. Tên của giống chó này được đặt theo tên Mahlemut, một bộ tộc Eskimo sống du mục ở phía tây Alaska. Giống chó này được sử dụng làm chó kéo xe nhờ sức chịu đựng phi thường của chúng. Hiện nay chúng được nuôi chủ yếu để làm chó cảnh. Bài viết này sẽ chủ yếu bàn về dòng chó chó Alaskan thuần chủng size Standard (kích thước tiêu chuẩn) mang tính phổ biến hơn. Giant Alaska do không phổ biến ở Việt', 'Giới thiệu về chó Alaskan Malamute\r\nChó Alaskan Malamute thường được gọi tắt là chó Alaska, là một giống chó kéo xe cổ xưa tại Alaska. Tên của chúng được đặt theo tên bộ tộc Mahlemut, một bộ tộc Eskimo sống du mục. Chó Alaska có thân hình cao lớn, khung xương chắc khỏe. Nhờ khả năng thích nghi và sức bền cực tốt, chúng đã được sử dụng để làm chó kéo xe.\r\n\r\nAlaskan trưởng thành có tính cách khá trầm tĩnh, thân thiện và trung thành với chủ chân. Chúng ít khi sủa bậy và yêu sạch sẽ, không có mùi hôi đặc trưng như nhiều giống chó khác.\r\n\r\nChó Alaska có khả năng xác định phương hướng rất tốt, thích vận động ngoài trời. Khứu giác của chúng rất nhạy bén, thích hợp để làm chó giữ nhà hoặc lao động. Tuy nhiên, chúng cũng rất hiếu động, thích tự do và ít tập trung hơn các giống chó nghiệp vụ, vì thế cần có người chủ nhiều kinh nghiệm để huấn luyện.\r\n\r\nNguồn gốc giống chó Alaskan Malamute\r\nBan đầu chó Alaska chỉ có kích thước trung bình, sau khi được lai tạo với các giống chó lớn, chúng đã có kích thước như ngày nay. Giống chó này có bộ lông dài và dày. Hình dáng của chúng có nhiều điểm giống với chó sói, vì thế thường bị lầm tưởng là giống chó lai sói.\r\n\r\nTheo AKC (Hiệp hội những người nuôi chó giống Mỹ), chó Alaska có chiều cao trung bình 63,5cm, cân nặng 39kg với chó đực, chiều cao 58,4cm, cân nặng 34kg với chó cái. Những con có kích thước chênh lệch khoảng 10cm cũng được chấp nhận.\r\n\r\nLà một trong những giống chó lao động, chúng sở hữu một khung xương cao to, chắc chắn. Đặc biệt xương chân khỏe và tương đối phát triển. Màu lông chó Alaska rất đa dạng, phổ biến nhất màu xám trắng, lông chồn, trắng hoặc đen trắng. Tuy nhiên mõm và bốn chân luôn luôn là màu trắng.\r\n\r\nBên cạnh dòng tiêu chuẩn, gần đây đã xuất hiện giống chó Alaskan có kích thước vượt trội, được gọi là Giant Alaska. Do nhiều vấn đề về xương khớp và khả năng phát triển của chó con, dòng chó này thường không được khuyến khích sinh sản. Đồng thời chúng không được các hiệp hội chó lớn như AKC, FCI công nhận.\r\n\r\nTuổi thọ của giống chó Alaskan Malamute không cao, chỉ khoảng 10-12 năm. Việc chó sống lâu và khỏe mạnh hay không có liên quan nhiều đến môi trường sống và chế độ tập luyện cua chúng. Alaska có thể nuôi trong những căn hộ chật hẹp nếu được vận động hàng ngày.\r\n\r\nTổng quan chung\r\nTên gọi khác: chó Alaska\r\nXếp loại: chó cỡ lớn\r\nNguồn gốc: Mỹ\r\nNhóm: chó cảnh, chó lao động\r\nChức năng: chó lao động\r\nTuổi thọ: 10-12 năm\r\nChiều cao: 58-71 cm\r\nGiá bán tham khảo: 9.000.000 – 11.000.000 VNĐ\r\nCân nặng: 39-56 kg\r\nĐặc điểm: thân thiện, biết trông nhà, chịu lạnh tốt\r\nTiêu chuẩn\r\nCũng giống như nhiều giống chó khác, giống chó Alaskan Malamute thuần chủng cũng có những tiêu chuẩn riêng để đánh giá. Các yếu tố này có thể xét trên các tiêu chí về ngoại hình, vóc dáng hay màu sắc. Giống chó Alaskan Malamute có chiều cao trung bình 63,5cm, cân nặng 39kg (với chó đực), 58,4 cm và 34kg (với chó cái). Những cá thể có cân nặng trên 54kg được phân loại vào nhóm “Giant Alaska”. Xương chấn rất lớn. Chân to và gân guốc. Giữa chân có gấp khuỷu (phải xờ nắn mới thấy). Trong khi đó chân chó Husky lại nhỏ hơn và thẳng tuột.\r\n\r\nMặc dù AKC hay FCI đều không quy định kích thước chính xác cho giống chó này, nhưng do những vấn đề sức khỏe nghiêm trọng có thể mắc phải, chúng được coi là một lỗi nhân giống và không được khuyến khích sinh sản.\r\n\r\nNhững chú Alaska nuôi tại Việt Nam kích thước có thể nhỏ hơn đôi chút. Do thời tiết ấm áp, chó Alaska khó đạt được đến kích thước cực đại. Cơ thể nhìn cân đối hài hòa về chiều cao, cân nặng. Tuy nhiên nhìn hơi thô và không được quý phái tinh tế như chó Husky.\r\n\r\nGiống chó Alaskan Malamute ở Việt Nam hiện nay có nguồn chủ yếu là tự phối giống trong nước. Còn 2 nguồn khác ít phổ biến, giá đắt hơn nhưng chất lượng cao hơn nhiều là chó nhập từ Thái hoặc Indo. Nguồn nhập từ Âu – Mỹ có giá cực đắt. Thường có giá gấp 20 lần giá chó Alaska trong nước.\r\n\r\nMột nguồn nữa là nhập từ Nga, giá thường gấp 8 – 10 lần trong nước. Rẻ hơn nhiều so với Alaska Âu – Mỹ nhưng nguồn này được nhập khá ít. Do thủ tục giấy tờ khá phức tạp và rắc rối. Và cũng là do chính sách bảo vệ nguồn gen của các nước này.\r\n\r\nNgoại hình chung\r\nGiống chó Alaskan Malamute tiêu chuẩn phải có dáng đi vững chãi, xương và cơ chắc khỏe, không có dị tật về ngoại hình. Giống chó này có ngực sâu, vai rộng và khỏe, phần còn lại phải cân xứng với tổng thể. Đầu không quá to so với cơ thể, khuôn mặt hiền hòa, thân thiện.\r\nMắt hình hạnh nhân, đuôi mắt hơi nghiêng, giữa hai mắt có một vài nếp nhăn. Đôi mắt sáng, linh động, thể hiện sự hứng thú với xung quanh. Tai có kích thước vừa phải, hơi nhỏ so với mặt, tai nhọn và đứng thẳng. Lỗ tai ở vị trí quá gần mắt hoặc rủ xuống bị coi là lỗi. Răng to và khớp với nhau.\r\nThân thể thon gọn, ngực nở, cổ và gáy vạm vỡ. Bả vai nghiêng vừa phải, eo khỏe với cơ bắp phát triển. Những cá thể có phần eo quá dài thường gặp những vấn đề về xương khớp. Lưng thẳng và hơi thấp dần về phía đuôi. Bốn chân thẳng, chân sau to với cơ đùi phát triển.\r\nBước đi của chó Alaska phải thẳng tắp, không có hiện tượng cong thành vòng kiềng. Chân sau và chân trước thẳng thành một đường. Huyền đề ở chân sau bị coi là khiếm khuyết và thường bị cắt bỏ sau khi sinh. Đuôi thường cuộn tròn sau lưng khi chúng không làm việc.\r\nChó Alaska có bộ lông phối hợp nhiều màu sắc, nhưng phổ biến nhất là xám trắng. Mũi luôn có màu đen trừ những con lông màu nâu đỏ. Bốn chân, phía trong đùi và bụng phải luôn có màu trắng. Phía trên mắt thường có đốm trắng, đôi khi đốm trắng này lan rộng tới trán.\r\nĐặc trưng của Alaska thuần chủng là có chiêc đuôi to, lông xù xì.\r\nĐầu và mặt\r\nChó Alaska và chó Husky có nhiều điểm tương đồng có thể gây nhầm lẫn. Nhưng nếu tìm hiểu sâu hơn một chút có thể dễ dàng nhận dạng được chúng. Đầu chó Alaska to bành ra, lông xù, bờm xung quanh cổ dầy. Mặt chó Alaska nhìn dữ dằn, trong khi Alaska nhìn thân thiện hơn. Nếu để ý bạn sẽ nhìn thấy chó Husky trong như đang cười mỉm khi ngậm miệng (giới nuôi chó gọi đó là “nụ cười Husky”).\r\n\r\nMặt chó Husky bành to, lông rậm và xù xì. Tai to vừa phải, cân đối so với mặt và có nhiều lông tơ bên trong. Mặt chó Alaska bị “gãy”, điểm gãy (điểm trán giao với mũi) được thấy rất rõ. Đây là một đặc điểm quan trọng để phân biệt 2 giống chó này.\r\n\r\nMàu mắt\r\nGiống chó Alaskan Malamute thuần chủng mắt màu gì? Mắt chó Alaska thuần chủng chỉ được công nhận 2 màu: nâu và nâu đen. Tất cả chó Alaska các màu mắt khác đều bị cho là chó bị lai tạp với các giống khác. Thường là kết quả của “cuộc tình ngang trái” giữa Alaska và Husky.\r\n\r\nBộ lông\r\nBộ lông là điểm quyến rũ nhất của giống chó này. Lông Alaska dày, thô nhưng mềm và bóng. Lông có 2 lớp. Lớp lông ngoài dài và thô, lớp trong mềm và mượt hơn. Với những chú chó Alaska lông 2 màu, thường màu sắc sẽ nhạt dần theo chiều từ cao xuống thấp và trắng toát ở phần bụng và ngực. Màu lông của giống chó Alaskan Malamute rất đa dạng, có thể có các màu sau:\r\n\r\nĐen – trắng: đây là màu phổ biến nhất của giống chó Alaska. Với màu sắc này, chó Alaska thuần chủng giá rẻ hơn so với các chú Alaska có màu sắc khác.\r\nXám trắng: đây là màu cũng rất phổ biến, nhìn tinh tế hơn đen trắng.\r\nNâu đỏ – trắng: đây là màu mà các trại bán chó Alaska thuần chủng tp hcm luôn trong tình trạng khan hiếm hàng. Một em Alaska nâu đỏ – trắng đẹp, thuần chủng thường được các trại bán chó Alaska thuần chủng hcm hoặc Hà Nội  bán ra đắt hơn vài triệu so với màu đen hoặc xám trắng.\r\nMàu Sable – trắng: là những em Husky có màu đen hoặc xám – trắng chủ đạo. Bên cạnh đó điểm thêm những mảng màu nâu đỏ. Màu này ở Việt Nam khá hiếm.\r\nBạc – trắng: màu xám rất nhạt kết hợp với màu trắng.\r\nTính cách\r\nGiống chó Alaskan Malamute nổi tiếng với tính cách trung thành, thân thiện với con người và các động vật khác. Giống chó này cũng có trí thông minh cao, chúng có khả năng nhận biết cảm xúc của con người thông qua nét mặt. Chúng cũng rất nhạy cảm và dễ bị stress nếu bị nhốt một chỗ.\r\nChó Alaska cần được vận động hàng ngày, chúng rất năng động và có thể thân thiện với cả người lạ. Tuy nhiên một số trường hợp, chúng có thể trở nên hung dữ nếu cảm thấy bị đe dọa. Cần thận trọng khi nuôi giống này trong nhà có trẻ nhỏ.\r\nChó Alaska rất dễ bị nhầm lẫn với Husky, cũng là một giống chó kéo xe phổ biến. Do hình dáng và tính cách chúng khá tương đồng. Tuy nhiên Alaska có kích thước lớn và lông dài hơn và có một vài đặc điểm riêng biệt. Đây đều là những giống chó tuyệt vời, và được ưa chuộng trên toàn thế giới.\r\nMôi trường sống\r\nGiống chó Alaskan Malamute sống ở vùng Bắc Cực, chúng chịu lạnh rất tốt nhưng rất sợ nóng. Chó Alaska không thích hợp sống tại những vùng khí hậu nóng và ẩm ướt. Do vóc dáng to lớn, chúng cần một không gian sống rộng rãi, và được vận động thường xuyên để giải tỏa năng lượng.\r\n\r\nChó Alaska không phù hợp với những người đi làm bận rộn, ít có thời gian rảnh rỗi. Bạn cần phải học cách chăm sóc chó Alaska thường xuyên để tránh các vấn đề về sức khỏe.\r\n\r\nĐánh giá chó Alaskan Malamute\r\nMức độ quấn chủ 60%\r\nMức độ sủa 20%\r\nMức độ rụng lông 60%\r\nMức độ mùi hôi 40%\r\nMức độ dễ làm đẹp 60%\r\nThân thiện với trẻ em 80%\r\nThân thiện với động vật khác 80%\r\nKhả năng vận động 80%\r\nKhả năng học hỏi 60%\r\nMức độ chảy dãi 20%\r\nKhả năng chịu lạnh 100%\r\nKhả năng chịu nóng 60%\r\nGiá chó Alaskan con tại Việt Nam\r\nNhìn chung giá mua bán chó Alaskan Malamute không có sự chênh lệch nhiều giữa các vùng miền trên cả nước. Giá của chúng thay đổi tùy theo chất lượng và nguồn gốc của từng con chó. Những con có dáng đẹp, lông đẹp luôn có giá cao. Chó có giấy, gia phả khủng, bố mẹ vô địch nhiều giải lại càng cao hơn nữa.\r\n\r\nChó Alaska có 2 loại chính được chia ra theo size, là Alaska Standard (khoảng 40 – 50kg khi trưởng thành) và Alaska Giant (khoảng 50 – 70kg). Chó con màu đen trắng là phổ biến nhất, chó màu nâu đỏ hiếm hơn và có giá cao hơn hẳn. Chó dòng đại luôn có giá đắt hơn dòng tiêu chuẩn.\r\n\r\nCần cảnh giác với những lời mời chào mua chó Alaska giá rẻ. Chó Alaska không phải là giống chó bản địa của Việt Nam, do đó để chăm sóc được một con chó khỏe mạnh cần chi phí khá cao. Do đó giá bán những con đạt chuẩn về chất lượng và độ thuần chủng ít khi dưới 9 triệu.\r\n\r\nKết luận\r\nGiống chó Alaskan Malamute thuần chủng hiện đang rất được ưa chuộng ở nước ta. Cùng với giống chó anh em Husky nhưng Alaska vẫn được yêu thích hơn cả. Dù giá có thể đắt gần gấp đôi nhưng các cụ đã nói “đắt sắt ra miếng”.\r\n\r\nỞ Việt Nam hiện nay, giá giống chó Alaskan Malamute có thể nói là đang khá loạn. Nhiều em Alaska được các cửa hàng hét giá trên trời. Trong khi lại xuất hiện một số em “phá giá”, có giá chỉ bằng 1 nửa thị trường. Vậy nên hãy tìm hiểu thật kỹ trước quyết định mua 1 em Alaska thuần chủng về với gia đình nhé. Hy vọng với những thông tin chia sẻ ở trên sẽ giúp bạn hiểu hơn về một chú chó Alaska thuần chủng đúng nghĩa.', 'alaskan-malamute.jpg', 'Thao Nhi', '2020-04-22 11:18:53', NULL),
(5, 'Góc lên đời: mèo hoang dụ người lạ mua đồ ăn rồi nghiễm nhiên được rước về làm \"boss\" để cung phụng', '', 'Chúng ta đều biết loài mèo là những sinh vật thông minh (ngoại trừ nhân vật chính trong Tom & Jerry), đặc biệt là những chú mèo hoang vốn phải tận dụng IQ tối đa để tồn tại qua ngày. Một trong số chúng còn \"cao tay\" đến mức tự tìm được chủ nhân rước mình về chăm sóc, như chú mèo Mexico dưới đây chẳng hạn.\r\n\r\nVào một ngày đẹp trời nọ,  khuôn mặt buồn rầu vì đói bụng của chú mèo này đã va phải ánh mắt của một nữ giáo viên 33 tuổi có tên Tania. Cuộc gặp gỡ tình cờ diễn ra trước cổng 1 siêu thị ở Piedras Negras, Mexico nên tất nhiên, chú mèo đã không bỏ qua cơ hội \"xin xỏ\" người bạn mới quen mua đồ ăn cho mình.\r\n\r\nGóc lên đời: mèo hoang dụ người lạ mua đồ ăn rồi nghiễm nhiên được rước về làm boss để cung phụng - Ảnh 1.\r\nChỉ sau khoảng vài giây, chú mèo đã dẫn Tania tới quầy bán thức ăn cho thú cưng và chỉ tận tay vào một túi thức ăn dành cho mèo. Đã xin xỏ thì tội gì không tranh thủ chọn \"brand\" yêu thích nhỉ?\r\n\r\n', '1-1587979002554585687874.jpg', '', '2020-04-30 14:05:54', NULL),
(6, 'Thương động vật côi cút mùa Covid-19, nhân viên khu bảo tồn quyết ở lại cách ly cùng chúng suốt 3 tháng', 'Không chỉ riêng Việt Nam mà nhiều nơi khác trên thế giới cũng đang chung sống với tình trạng \"cách ly xã hội\". Phần lớn mọi người tự cách ly trong căn nhà ấm cúng, đầy đủ tiện nghi hoặc di chuyển tới những vùng nông thôn yên bình, làm việc tại nhà thay vì tới văn phòng mỗi ngày.', 'Tuy nhiên ở một nơi xa xôi nào đó, có những người lại quyết định tự cách ly ở ngay nơi làm việc.\r\n\r\nCách đây 1 tuần, Paradise Park – khu bảo tồn động vật hoang dã ở Hayle, Cornwall, Anh quốc tuyên bố đóng cửa tạm thời do sự bùng phát của dịch Covid-19. Với họ, điều quan trọng nhất là phải đảm bảo các loài thú vẫn được chăm sóc chu đáo. Và nếu muốn vậy, họ phải đảm bảo được sức khỏe và an toàn cho các nhân viên khu bảo tồn.\r\n\r\nThương động vật côi cút mùa Covid-19, nhân viên khu bảo tồn quyết ở lại cách ly cùng chúng suốt 3 tháng - Ảnh 1.\r\nThương động vật côi cút mùa Covid-19, nhân viên khu bảo tồn quyết ở lại cách ly cùng chúng suốt 3 tháng - Ảnh 2.\r\nSau khi thông tin được công bố, 4 nhân viên III, Emily, Layla và Sarah-jane Muff đã không về nhà cách ly như mọi người mà tình nguyện chuyển vào ở trong khu bảo tồn và cách ly ngay tại đó. Trong thời gian tự cách ly 3 tháng, họ sẽ tiếp tục được hỗ trợ bởi 1 số đồng nghiệp đến theo ca.\r\n\r\nLý do ở lại được chia sẻ từ 1 nhân viên \"tự cách ly\"\r\n\r\nThương động vật côi cút mùa Covid-19, nhân viên khu bảo tồn quyết ở lại cách ly cùng chúng suốt 3 tháng - Ảnh 3.\r\nTheo chia sẻ của Izzy, việc cách ly trong khu bảo tồn là 1 biện pháp phòng ngừa rủi ro. Cô giải thích rằng trong trường hợp xấu nhất, nếu toàn bộ nhân viên không thể đến làm việc thì ít nhất cô và 3 đồng nghiệp còn lại vẫn đủ sức chăm sóc bầy thú.\r\n\r\nThương động vật côi cút mùa Covid-19, nhân viên khu bảo tồn quyết ở lại cách ly cùng chúng suốt 3 tháng - Ảnh 4.\r\nĐược biết, Paradise Park là nơi sinh sống của khoảng 1.200 con chim và một số loài có vú như gấu trúc đỏ, sóc đỏ, rái cá châu Á, chuột đồng và các loài động vật khác. Với hơn một nghìn loài động vật cư trú, việc chăm sóc, cho ăn, dọn dẹp, chữa bệnh và các hoạt động quan trọng khác không phải là 1 nhiệm vụ dễ dàng (ngay cả khi không phải chịu gánh nặng đại dịch).\r\n\r\nHọ làm gì trong thời gian cách ly 3 tháng?\r\n\r\nThương động vật côi cút mùa Covid-19, nhân viên khu bảo tồn quyết ở lại cách ly cùng chúng suốt 3 tháng - Ảnh 5.\r\n4 nhân viên tự cách ly cho biết, họ vẫn đang duy trì các công việc thường ngày của sở thú, bao gồm cả việc chăm sóc những chú chim cánh cụt Humboldt. Bắt đầu từ mùa lễ Phục Sinh, khu bảo tồn này đã bắt đầu triển khai \"Photocalls\" – chương trình lựa chọn một số du khách bất kỳ để giúp họ cho chim cánh cụt ăn, cưng nựng và chụp ảnh cùng với chúng.', 'paradise-park-cornwall-self-isolation-staff-4-5e84684c16cc0700-1585819526671858760147.jpg', '', '2020-04-30 14:18:44', NULL),
(7, '11 động vật chung thủy nhất thế giới tự nhiên', 'Những động vật được đề cập trong bài viết này luôn đi “có cặp có đôi” và luôn chung thủy trong suốt cuộc đời chúng.', 'Những loài vật chung thủy trong tự nhiên\r\n11. Vượn\r\n10. Thiên nga\r\n9. Kền kền đen\r\n8. Cá thần tiên Pháp\r\n7. Chó sói\r\n6. Chim hải âu\r\n5. Mối\r\n4. Chuột đồng\r\n3. Bồ câu\r\n2. Schistosoma mansoni\r\n1. Đại bàng đầu trắng\r\n\r\n11. Vượn\r\nLoài vượn sống tương đối bình đẳng với nhau nhưng cũng cực kì chung thủy. Con đực sẽ dành rất nhiều thời gian để chăm sóc, chải chuốt cho con cái và ngược lại.\r\n\r\n10. Thiên nga\r\nThiên nga\r\n\r\nSự kết hợp với nhau tạo thành hình trái tim của Thiên nga đã được lấy làm hình tượng cho tình yêu. Khi kết hợp với nhau, Thiên nga đực và cái sẽ chung sống với nhau trong rất nhiều năm, nó khá với việc “đến và đi” như những loài chim khác. Cả hai sẽ cùng bảo vệ lãnh thổ, ấp trứng và cùng nuôi con.\r\n\r\n9. Kền kền đen\r\nTuy có ngoại hình xấu xí và gây “ấn tượng xấu” với con người do ăn xác thối, tuy nhiên kền kền đen cũng rất chung thủy. Nếu “bắt quả tang” lăng nhăng, kền kền đen sẽ tấn công rất dữ dội.\r\n\r\n8. Cá thần tiên Pháp\r\nBạn sẽ rất khó để bắt gặp Cá thần tiên Pháp bơi một mình. Chúng luôn đi có đôi với nhau, thậm chí đi săn mồi cùng nhau. Khi đã kết hợp, Cá thần tiên Pháp sẽ chung sống với nhau hết đời.\r\n\r\n7. Chó sói\r\nChó sói\r\n\r\nChó sói rất chung thủy, khi đã “kết hôn”, chúng sẽ sống với nhau rất lâu. Thông thường, một gia đình sói sống hạnh phúc gồm 1 sói đực, 1 sói cái và con của chúng. Nhiều người đã ví gia đình sói giống với gia đình loài người.\r\n\r\n6. Chim hải âu\r\nHải âu bay rất xa trên đại dương và chúng luôn thực hiện những chuyến đi dài. Tuy nhiên, dù bay ở đâu thì chúng cũng sẽ trở về nơi mà bạn tình của nó đang đợi để sinh sản. “Tình cảm” của chúng kéo dài trong nhiều năm và khi kết hợp, chúng sẽ chung sống với nhau hết đời.\r\n\r\n5. Mối\r\nĐối với loài kiến, kiến chúa sẽ giết kiến đực ngay sau khi giao phối. Nhưng với loài mối, mối đực sau khi giao phối với mối chúa, chúng sẽ sinh sống với nhau và cùng “cai quản\" vương quốc của mình.\r\n\r\n4. Chuột đồng\r\nHầu hết các loài gặm nhấm đều nổi tiếng “lăng nhăng” nhưng chuột đồng (Praire Vole) là ngoại lệ. Chúng chỉ kết đôi một vợ một chồng, sinh sản thường xuyên từ 2-4 lứa/năm.\r\n\r\n3. Bồ câu\r\nChim bồ câu\r\n\r\nKhông phải ngẫu nhiên mà hình tượng bồ câu luôn có mặt trong các lễ cưới và sự chung thủy của chúng chính là nguyên nhân. Bồ câu luôn sống theo cặp với nhau và chăm sóc nhau đến hết cuộc đời chúng.\r\n\r\n2. Schistosoma mansoni\r\nKí sinh trùng này là nguyên nhân trực tiếp gây nên bệnh sán máng nguy hiểm. Chúng liên kết thành đôi và sinh sản trong cơ thể người đến hết đời.\r\n\r\n1. Đại bàng đầu trắng\r\nĐây là loài đại bàng biểu tượng cho Hoa Kỳ. Trừ khi một trong hai bị chết hoặc không có khả năng sinh sản, đại bàng đầu trắng luôn sống thành từng cặp với nhau. Một thống kê thú vị cho thấy, tỉ lệ “ly hôn” của đại bàng đầu trắng thậm chí còn thấp hơn rất nhiều so với tỉ lệ ly hôn ở Hoa Kỳ. Hiện tỉ lệ ly hôn của nước này đã vượt quá con số 50%.', 'cho-soi.jpg', 'nhint@gmail.com', '2020-05-01 10:31:46', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_pet`
--

CREATE TABLE `tbl_pet` (
  `pet_id` int(11) NOT NULL,
  `ten_pet` varchar(100) NOT NULL,
  `loai_pet_id` int(11) NOT NULL,
  `da_nhan_nuoi_id` int(11) NOT NULL,
  `mo_ta` text NOT NULL,
  `chu_nuoi_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_phan_hoi`
--

CREATE TABLE `tbl_phan_hoi` (
  `id` int(11) NOT NULL,
  `ten` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tieu_de` varchar(200) DEFAULT NULL,
  `noi_dung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `ho_ten` varchar(200) NOT NULL,
  `gioi_tinh_id` int(11) NOT NULL,
  `dia_chi` varchar(200) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mat_khau` varchar(200) NOT NULL,
  `vi_tri_id` int(11) NOT NULL,
  `anh` varchar(300) DEFAULT NULL,
  `ghi_chu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `ho_ten`, `gioi_tinh_id`, `dia_chi`, `sdt`, `email`, `mat_khau`, `vi_tri_id`, `anh`, `ghi_chu`) VALUES
(1, 'Thảo Nhi', 0, '', '', 'nhint@gmail.com', '1', 0, NULL, NULL),
(2, 'Ngọc Anh', 0, '', '', 'anhnn@gmail.com', '1', 0, NULL, NULL),
(3, 'Đan Chi', 0, '', '', 'chittd@gmail.com', '1', 0, NULL, NULL),
(4, 'Hoàng Dung', 0, '', '', 'dunght@gmail.com', '1', 0, NULL, NULL),
(5, 'Lâm Trần', 0, '', '', 'lamtt@gmail.com', '1', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_vi_tri`
--

CREATE TABLE `tbl_vi_tri` (
  `vi_tri_id` int(11) NOT NULL,
  `ten_vi_tri` varchar(100) NOT NULL,
  `dac_diem` text DEFAULT NULL,
  `mo_ta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_case`
--
ALTER TABLE `tbl_case`
  ADD PRIMARY KEY (`case_id`);

--
-- Chỉ mục cho bảng `tbl_gioi_tinh`
--
ALTER TABLE `tbl_gioi_tinh`
  ADD PRIMARY KEY (`gioi_tinh_id`);

--
-- Chỉ mục cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_phan_hoi`
--
ALTER TABLE `tbl_phan_hoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_vi_tri`
--
ALTER TABLE `tbl_vi_tri`
  ADD PRIMARY KEY (`vi_tri_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_case`
--
ALTER TABLE `tbl_case`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_gioi_tinh`
--
ALTER TABLE `tbl_gioi_tinh`
  MODIFY `gioi_tinh_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_phan_hoi`
--
ALTER TABLE `tbl_phan_hoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_vi_tri`
--
ALTER TABLE `tbl_vi_tri`
  MODIFY `vi_tri_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
