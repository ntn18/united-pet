-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 08, 2020 lúc 07:44 PM
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
-- Cơ sở dữ liệu: `k19httta`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loai_tin_tuc`
--

CREATE TABLE `tbl_loai_tin_tuc` (
  `id` int(11) NOT NULL,
  `ten_loai_tin_tuc` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loai_tin_tuc`
--

INSERT INTO `tbl_loai_tin_tuc` (`id`, `ten_loai_tin_tuc`, `ghi_chu`) VALUES
(1, 'Tin sự kiện', NULL),
(2, 'Tin Công nghệ', NULL),
(3, 'Tin khuyến mại', NULL),
(4, 'Tin tuyển dụng', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nguoi_dung`
--

CREATE TABLE `tbl_nguoi_dung` (
  `id` int(11) NOT NULL,
  `ho_ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nguoi_dung`
--

INSERT INTO `tbl_nguoi_dung` (`id`, `ho_ten`, `email`, `mat_khau`, `ghi_chu`) VALUES
(1, 'Chu Văn Huy', 'chuvanhuy@gmail.com', '419c0d25271153706075c379ea18120d', NULL),
(2, 'Nguyễn Thị Mai', 'maint@gmail.com', '1e10a94f4dd9a12fe858116ead414a75', NULL),
(3, 'Chu Huệ Mẫn', 'manch@gmail.com', '4f139c4abc0745cf5c05abf5adb4f1c2', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tin_tuc`
--

CREATE TABLE `tbl_tin_tuc` (
  `id` int(11) NOT NULL,
  `loai_tin_id` int(11) NOT NULL,
  `tieu_de` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `anh_minh_hoa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `so_luot_doc` int(11) NOT NULL,
  `tac_gia` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_dang` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_tin_tuc`
--

INSERT INTO `tbl_tin_tuc` (`id`, `loai_tin_id`, `tieu_de`, `mo_ta`, `noi_dung`, `anh_minh_hoa`, `so_luot_doc`, `tac_gia`, `ngay_dang`) VALUES
(2, 1, 'Bốn loại thuốc tiềm năng điều trị Covid-19', 'Các nhà nghiên cứu trên toàn thế giới đang trong cuộc đua tìm ra loại thuốc hiệu quả và an toàn để điều trị Covid-19.', 'Các nhà nghiên cứu trên toàn thế giới đang trong cuộc đua tìm ra loại thuốc hiệu quả và an toàn để điều trị Covid-19.\r\n\r\nThông thường, việc phát triển một loại thuốc mới mất nhiều năm liền. Song với nỗ lực của giới chuyên gia, tuần trước, Tổ chức Y tế Thế giới (WHO) đã xác nhận danh sách 4 loại thuốc kháng virus tiềm năng điều trị Covid-19. Danh sách có tên gọi Solidarity bao gồm: thuốc điều trị Ebola Remdesivir, tổ hợp thuốc kháng HIV/AIDS lopinavir và ritonavir, tổ hợp thuốc khác giữa lopinavir và ritonavir cộng thêm interferon beta (thuốc chữa đa xơ cứng) và thuốc sốt rét Chloroquine.\r\n\r\nRemdesivir là thuốc tiêm tĩnh mạch phát triển bởi công ty công nghệ sinh học Gilead Sciences, được báo cáo là một ứng cử viên tiềm năng. Các nhà khoa học trên thế giới đang tiến hành 5 thử nghiệm lâm sàng để kiểm chứng độ an toàn và hiệu quả của nó đối với virus. Kết quả của hai trong số đó sẽ có vào tháng 4.\r\n\r\nThuốc lần đầu được sử dụng với mục đích nhân đạo cho các bệnh nhân nghiêm trọng ở Trung Quốc và mở rộng đến các nước khác vào tháng 2. Song nhà sản xuất sau đó đã tuyên bố ngừng phân phối bởi nhu cầu sử dụng nhân đạo quá lớn.', '4 loai thuoc dieu tri covid-19.jpg', 0, 'VnExpress.net', '2020-03-25 00:54:37'),
(4, 2, 'Giá TV 4K màn hình 75 inch lao dốc', 'Giá TV 4K cỡ lớn tại Việt Nam đã xuống thấp nhất trong vòng ba năm trở lại đây.', 'Hai năm trước, NU7100, mẫu TV 4K tầm trung của Samsung, có giá 80 triệu đồng cho phiên bản 75 inch. Hiện tại, hai mẫu TV 4K kích thước 75 inch đời 2020 của Samsung, TU7000 và TU8100, với thông số tương tự NU7000 nói trên nhưng giá lần lượt 42,9 và 47,9 triệu đồng.\r\n\r\nThực tế, giá TV 4K cỡ 75 inch ở Việt Nam còn thấp hơn mức 40 triệu đồng. Tiêu biểu là Samsung RU7100. Sau đợt điều chỉnh giữa tháng 3, dòng TV 4K phổ thông đời 2019 này còn chưa tới 29 triệu đồng cho phiên bản 75 inch. Trước đó, mức niêm yết của model này là 60 triệu đồng, chênh lệch với giá hiện tại hơn 50%. Samsung cũng còn một model 75 inch khác giá giảm một nửa là Q65R thuộc dòng QLED cao cấp hơn. Giá sản phẩm đã xuống 35 triệu đồng, trong khi mức niêm yết ban đầu là 84 triệu đồng.\r\n\r\nNgay cả với Sony, thương hiệu điện tử Nhật Bản ít khi giảm giá sản phẩm, nay cũng có nhiều mẫu điều chỉnh sâu. Điển hình là mẫu X8000G còn 32 triệu đồng cho phiên bản 75 inch. Sản phẩm này trở thành TV 4K có giá thấp nhất từ trước đến giờ của Sony tại Việt Nam. So với mức niêm yết gần 49,8 triệu đồng trước đây, giá thực tế đã thấp hơn gần 40%.\r\n\r\nMẫu 4K cao cấp hơn của Sony, X8500G, cũng không nằm ngoài xu hướng. Tính tới giữa tháng 3, model 75 inch đã xuống dưới 40 triệu đồng. Cùng thời điểm này năm ngoái, model 75 inch tiền nhiệm, X8500F, vẫn được bán với giá hơn 50 triệu đồng.\r\n\r\nHiện tại, số lượng TV 4K kích thước 75 inch ở thị trường Việt Nam đã quá nhiều khiến các hãng phải giảm giá để cạnh tranh. Thống kê tại một siêu thị điện máy ở Hà Nội, số model 75 inch đang được bán là 40 mẫu, nhiều gấp rưỡi năm ngoái và gấp đôi hai năm trước. Riêng tầm giá 30 triệu đồng đã có gần 10 lựa chọn với 5 thương hiệu khác nhau. Trong khi chỉ một năm trước, số tiền này chỉ đủ mua TV 4K tầm 65 inch. Đó còn chưa kể thị trường còn xuất hiện TV 4K kích thước lớn từ Trung Quốc với giá xấp xỉ 20 triệu đồng, như model 75A8 của TCL. \r\n\r\nĐầu 2020, hãng nghiên cứu thị trường IHS Market dự báo giá TV 4K cỡ lớn 65 đến 75 inch sẽ tiếp tục giảm mạnh trong năm nay. Lý do nằm ở chi phí sản xuất các tấm nền LCD cỡ lớn ngày càng giảm. Các nhà máy sản xuất màn hình LCD thế hệ 10,5 đã sẵn sàng đáp ứng nhu cầu lớn. \r\n\r\nIHS Market cũng dự đoán doanh số TV 75 inch trở lên trong 2020 sẽ tăng gấp đôi năm ngoái, lên mức 7% thị phần, tính riêng tại Mỹ. Ở Việt Nam, từ năm 2017, thị phần TV kích thước từ 75 inch đã tăng hơn 50% sau mỗi năm.\r\n\r\nSo với màn hình 65 inch, diện tích hiển thị của màn hình 75 inch lớn hơn 30% dù chỉ tăng kích cỡ thêm 10 inch. Còn so với màn hình 55 inch, diện tích hiển thị của TV cỡ lớn này rộng gần gấp đôi.\r\n\r\nVới TV 4K kích cỡ 75 inch, khoảng cách ngồi xem phù hợp là từ  2,2 đến 3,8 m.', 'tv4k.jpg', 0, 'Kim Chi', '2020-03-25 00:58:19'),
(5, 1, 'Hà Nội chính thức đóng cửa Bệnh viện Bạch Mai', 'Mô tả', 'Nội dung', '', 0, '', '2020-03-30 01:46:35'),
(6, 2, 'Số ca nhiễm nCoV lên 194', 'Sáng 30/3, Bộ Y tế ghi nhận thêm 6 ca dương tính nCoV, đều thuộc công ty Trường Sinh, đơn vị cung cấp dịch vụ cho Bệnh viện Bạch Mai.', ' Thứ hai, 30/3/2020, 05:56 (GMT+7) Số ca nhiễm nCoV lên 194  Sáng 30/3, Bộ Y tế ghi nhận thêm 6 ca dương tính nCoV, đều thuộc công ty Trường Sinh, đơn vị cung cấp dịch vụ cho Bệnh viện Bạch Mai.  ', '', 0, '', '2020-03-30 01:49:12'),
(8, 2, 'Check tin công nghệ', '1', '1', '', 0, '', '2020-04-08 01:42:38'),
(9, 2, 'Loại tin sự kiện', 'Bla bla', 'Bla bla', '', 0, '', '2020-04-08 01:58:03'),
(10, 1, 'Sự kiện Covid -19 tấn công toàn cầu', 'Bla bla', 'Bla bLA', 'COVID-191.jpg', 0, '', '2020-04-08 02:13:18'),
(11, 2, 'COVID 19 THAY ĐỔI CÁCH HỌC CỦA HỌC SINH', 'bLA BLA', 'bLA BLA', 'COVID-19.jpg', 0, '', '2020-04-08 02:14:59');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_loai_tin_tuc`
--
ALTER TABLE `tbl_loai_tin_tuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_loai_tin_tuc`
--
ALTER TABLE `tbl_loai_tin_tuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
