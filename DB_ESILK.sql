-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2022 lúc 04:15 AM
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
-- Cơ sở dữ liệu: `db_esilk`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `class_code` int(11) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories_subjects`
--

CREATE TABLE `categories_subjects` (
  `id` int(10) NOT NULL,
  `subject_title` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories_subjects`
--

INSERT INTO `categories_subjects` (`id`, `subject_title`) VALUES
(2, 'Tiếng Anh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `room_id` int(10) NOT NULL,
  `class_code` varchar(255) DEFAULT NULL,
  `class_name` varchar(20) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `teacher_id` int(10) DEFAULT NULL,
  `number_session` int(11) DEFAULT NULL,
  `schedule_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `classes`
--

INSERT INTO `classes` (`id`, `room_id`, `class_code`, `class_name`, `subject`, `teacher_id`, `number_session`, `schedule_id`, `status`, `price`) VALUES
(59, 2, 'ENT2225.98', 'Tiếng Anh cơ bản', 'Tiếng Anh', 2, 17, 1, 'Còn lớp', 2000000),
(60, 2, 'WE17314', 'Tiếng Anh nâng cao', 'Tiếng Anh', 5, 17, 2, 'Còn lớp', 2000000),
(62, 4, 'ENT2225.99', 'Tiếng Anh nâng cao 2', 'Tiếng Anh', 4, 17, 4, 'Còn lớp', 2000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `class_detail`
--

CREATE TABLE `class_detail` (
  `id` int(11) NOT NULL,
  `class_id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `room_id` int(10) NOT NULL,
  `schedule_id` int(10) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `class_detail`
--

INSERT INTO `class_detail` (`id`, `class_id`, `student_id`, `room_id`, `schedule_id`, `teacher_id`, `status`) VALUES
(200, 57, 1, 2, 2, 4, 'Đã thanh toán'),
(202, 56, 1, 1, 1, 2, 'Đã thanh toán'),
(219, 59, 5, 2, 1, 2, 'Đã thanh toán'),
(220, 60, 5, 2, 2, 5, 'Đã thanh toán'),
(221, 59, 1, 2, 1, 2, 'Đã thanh toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rate_it`
--

CREATE TABLE `rate_it` (
  `id` int(10) NOT NULL,
  `rate_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `id_class_detail` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `rate_it`
--

INSERT INTO `rate_it` (`id`, `rate_detail`, `id_class_detail`) VALUES
(30, 'Khóa học chất lượng quá ạ.', 203),
(31, 'Cảm ơn Trung tâm Anh ngữ Esilk đã cho em một nền tảng tiếng Anh vững chắc.', 204),
(32, 'Em thấy khóa học tiếng anh cơ bản này rất hay. Em cảm ơn trung tâm rất nhiều ạ.', 205),
(33, 'Rất ổn', 203),
(34, 'Cảm ơn Trung tâm Anh ngữ Esilk đã cho em một nền tảng tiếng Anh vững chắc.', 206),
(35, 'Cảm ơn Trung tâm Anh ngữ Esilk đã cho em một nền tảng tiếng Anh vững chắc.', 206),
(36, 'Em thấy khóa học tiếng anh cơ bản này rất hay. Em cảm ơn trung tâm rất nhiều ạ.', 206),
(37, 'Rất ổn', 206),
(38, 'Rất ổn', 206),
(39, 'Khóa học chất lượng quá ạ.', 206),
(40, 'Rất ổn', 206),
(41, 'Rất ổn', 206),
(42, 'Rất ổn', 206),
(43, 'Em thấy khóa học tiếng anh cơ bản này rất hay. Em cảm ơn trung tâm rất nhiều ạ.', 206),
(44, 'Cảm ơn Trung tâm Anh ngữ Esilk đã cho em một nền tảng tiếng Anh vững chắc.', 206),
(45, 'Rất ổn', 206),
(46, 'Khóa học chất lượng quá ạ.', 206),
(47, 'Rất ổn', 206),
(48, 'Cảm ơn Trung tâm Anh ngữ Esilk đã cho em một nền tảng tiếng Anh vững chắc.', 205),
(49, 'Khóa học chất lượng quá ạ.', 205),
(50, 'Cảm ơn Trung tâm Anh ngữ Esilk đã cho em một nền tảng tiếng Anh vững chắc.', 206),
(51, 'Rất ổn', 206),
(52, 'Cảm ơn Trung tâm Anh ngữ Esilk đã cho em một nền tảng tiếng Anh vững chắc.', 206),
(54, 'Cảm ơn Trung tâm Anh ngữ Esilk đã cho em một nền tảng tiếng Anh vững chắc.', 206),
(55, 'Em thấy khóa học tiếng anh cơ bản này rất hay. Em cảm ơn trung tâm rất nhiều ạ.', 206),
(56, 'Rất ok !!!', 207),
(58, 'Hay', 211),
(63, 'Cảm ơn Trung tâm Anh ngữ Esilk đã cho em một nền tảng tiếng Anh vững chắc.', 218),
(64, 'Cảm ơn trung tâm nhiều ạ.', 220);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rooms`
--

CREATE TABLE `rooms` (
  `id_room` int(11) NOT NULL,
  `rooms_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `rooms`
--

INSERT INTO `rooms` (`id_room`, `rooms_name`) VALUES
(1, 'TACB01'),
(2, 'TACB02'),
(3, 'TANC01'),
(4, 'TANC02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `schedule_detail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `schedule`
--

INSERT INTO `schedule` (`id`, `schedule_detail`) VALUES
(1, 'Thứ 2, 4, 6 ca 1'),
(2, 'Thứ 2, 4, 6 ca 2'),
(3, 'Thứ 3, 5, 7 ca 1'),
(4, 'Thứ 3, 5, 7 ca 2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(299) NOT NULL,
  `toeic` int(11) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`id`, `phone`, `name`, `email`, `image`, `password`, `toeic`, `role`) VALUES
(1, '123456789', 'Nguyen Viet Phuc', 'Nguviphu@gmail.com', 'public/image/users/01a6e3a3809123b852aee4462f5e772b7dfb3e0a5a.jpg', 'Phuc3005', NULL, 0),
(2, '123456789', 'Nguyen Viet Phuc', 'Nguviphu@gmail.com', 'public/image/users/01a6e3a3809123b852aee4462f5e772b7dfb3e0a5a.jpg', 'Phuc305', NULL, 0),
(3, '0123456789', 'Nguyen Viet Phuc', 'Nguviphu@gmail.com', 'public/image/users/01a6e3a3809123b852aee4462f5e772b7dfb3e0a5a.jpg', 'Phuc3005', NULL, 0),
(4, '0123456788', 'Nguyen Viet Phuc', 'Nguviph1u@gmail.com', 'public/image/users/01a6e3a3809123b852aee4462f5e772b7dfb3e0a5a.jpg', 'Phuc3005', NULL, 0),
(5, '0888525597', 'Đặng Đức Chính', 'toiyeucahat003@gmail.com', 'public/image/users/user1.jpg', 'Chinh03', NULL, 1),
(6, '0343544095', 'Đặng Ngọc Hiệp', 'dangngochiep2000@gmail.com', 'public/image/users/4a.jpg', 'Hiep31122005', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teacher`
--

CREATE TABLE `teacher` (
  `id_teacher` int(10) NOT NULL,
  `name_teacher` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `teacher`
--

INSERT INTO `teacher` (`id_teacher`, `name_teacher`) VALUES
(2, 'Nguyễn Thị Vân Anh'),
(4, 'Nguyễn Thị Linh'),
(5, 'Vũ Anh Tú'),
(6, 'Nguyễn Anh Phúc'),
(7, 'Đặng Đức Chính ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories_subjects`
--
ALTER TABLE `categories_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_room` (`room_id`);

--
-- Chỉ mục cho bảng `class_detail`
--
ALTER TABLE `class_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rate_it`
--
ALTER TABLE `rate_it`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id_room`);

--
-- Chỉ mục cho bảng `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id_teacher`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories_subjects`
--
ALTER TABLE `categories_subjects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `class_detail`
--
ALTER TABLE `class_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT cho bảng `rate_it`
--
ALTER TABLE `rate_it`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id_teacher` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
