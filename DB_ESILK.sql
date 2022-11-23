CREATE TABLE `classes` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `class_code` int,
  `subject` varchar(255),
  `teacher` varchar(255),
  `number_session` int,
  `schedule_id` int,
  `status` varchar(255),
  `price` int
);

CREATE TABLE `class_detail` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `student_id` int,
  `class_id` int,
  `room_id` int
);

CREATE TABLE `student` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `phone` int,
  `name` varchar(255),
  `email` varchar(255),
  `image` varchar(255),
  `toeic` int
);

CREATE TABLE `calendar` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `class_code` int,
  `date_time` datetime
);

CREATE TABLE `schedule` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `schedule_detail` varchar(255)
);

CREATE TABLE `rooms` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `rooms_name` int
);


