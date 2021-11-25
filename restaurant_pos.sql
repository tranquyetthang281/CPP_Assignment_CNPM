-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2021 lúc 04:21 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `restaurant_pos`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `address` varchar(1024) DEFAULT '',
  `state` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `level`, `name`, `phoneNumber`, `email`, `address`, `state`) VALUES
(1, 'minhtoan', '1915564', 2, 'Trần Minh', '0981710152', 'tranminhtoan.149@gmail.com', 'Nhà khách ĐHQG, Đông Hòa, Dĩ An', 1),
(2, 'toanem', '1234', 2, 'Minh Toàn', '0981710152', 'tranminhtoan.149@gmail.com', 'Nhà khách ĐHQG, Đông Hòa, Dĩ An', 1),
(3, 'admin', 'admin', 1, 'Admin', '', '', '', 1),
(4, 'user1', 'user1', 2, 'User1', '', '', '', 1),
(5, 'minhtoan149', 'minhtoan149', 2, 'toan', '0981710152', 'tranminhtoan.149@gmail.com', 'Nhà khách ĐHQG, Đông Hòa, Dĩ An', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `auto_ma_dat_phong`
--

CREATE TABLE `auto_ma_dat_phong` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `auto_ma_dat_phong`
--

INSERT INTO `auto_ma_dat_phong` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Beverages'),
(2, 'Breakfast'),
(3, 'Chicken'),
(4, 'Burgers'),
(5, 'Salads');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(350) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calories` int(11) DEFAULT NULL,
  `image` varchar(350) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `item`
--

INSERT INTO `item` (`id`, `category_id`, `name`, `price`, `description`, `calories`, `image`) VALUES
(2, 1, 'Chocolate Shake', 123, 'Milk, Sugar, Cream, Corn Syrup, Natural Flavor, Mono and Diglycerides, Cellulose Gum, Guar Gum, Carrageenan, Vitamin A Palmitate', 520, 'burger.png'),
(3, 1, 'Vanilla Shake', 123, 'Milk, Sugar, Cream, Corn Syrup, Natural Flavor, Mono and Diglycerides, Cellulose Gum, Guar Gum, Carrageenan, Vitamin A Palmitate', 820, 'burger.png'),
(5, 1, 'Iced Tea', 123, 'Water, Orange Pekoe and Pekoe Cut Black Tea., ice', 2, 'burger.png'),
(8, 2, 'Hotcakes', 123, 'Water, Enriched Flou, Whey, Corn Flour, Soybean Oil, Sugar, Eggs, Leavening, Dextrose, Emulsifier, Salt, Xanthan Gum, Natural Flavors, Beta Carotene (Color), Soy Lecithin.', 330, 'burger.png'),
(9, 2, 'Hash Browns', 123, 'Hash Browns Ingredients: Potatoes, Vegetable Oil, Salt, Corn Flour, Dehydrated Potato, Dextrose, Sodium Acid Pyrophosphate (maintain Color), Extractives Of Black Pepper.', 140, 'burger.png'),
(13, 3, 'Chicken McNuggets', 123, 'White Boneless Chicken, Water, Vegetable Oil (Canola Oil, Corn Oil, Soybean Oil, Hydrogenated Soybean Oil,..', 420, 'burger.png'),
(14, 4, 'Big Mac Burger', 123, 'Enriched Flour (Wheat Flour, Malted Barley Flour, Niacin, Iron, Thiamine Mononitrate, Riboflavin, Folic Acid), Water, Sugar, Yeast,...', 550, 'burger.png'),
(19, 2, 'Hash Browns', 123, 'Hash Browns Ingredients: Potatoes, Vegetable Oil, Salt, Corn Flour, Dehydrated Potato, Dextrose, Sodium Acid Pyrophosphate (maintain Color), Extractives Of Black Pepper.', 140, 'burger.png'),
(20, 3, 'Chicken McNuggets', 123, 'White Boneless Chicken, Water, Vegetable Oil (Canola Oil, Corn Oil, Soybean Oil, Hydrogenated Soybean Oil,..', 420, 'burger.png'),
(27, 4, 'Big Mac Burger', 123, 'Enriched Flour (Wheat Flour, Malted Barley Flour, Niacin, Iron, Thiamine Mononitrate, Riboflavin, Folic Acid), Water, Sugar, Yeast,...', 550, 'burger.png'),
(28, 4, 'Big Mac Burger', 123, 'Enriched Flour (Wheat Flour, Malted Barley Flour, Niacin, Iron, Thiamine Mononitrate, Riboflavin, Folic Acid), Water, Sugar, Yeast,...', 550, 'burger.png'),
(29, 4, 'Big Mac Burger', 123, 'Enriched Flour (Wheat Flour, Malted Barley Flour, Niacin, Iron, Thiamine Mononitrate, Riboflavin, Folic Acid), Water, Sugar, Yeast,...', 550, 'burger.png'),
(38, 2, 'item', 123, '123', 123, 'burger.png'),
(51, 3, 'item', 3123, '3123', 123123, 'burger.png'),
(57, 3, 'item', 123, '123', 123, 'burger.png'),
(69, 5, 'item', 123123, 'd', 123123, 'burger.png'),
(70, 5, 'item', 12123, '123', 123, 'burger.png'),
(71, 1, 'Nothing', 123, 'Nothing', 123, 'burger.png'),
(74, 5, 'item', 123, '123', 123, 'burger.png'),
(75, 5, 'item', 123, '123', 123, 'burger.png'),
(76, 1, 'item', 123, '1123', 123123, 'burger.png'),
(77, 2, 'item', 123, '123', 123, 'burger.png'),
(78, 3, 'item', 123, '123', 123, 'burger.png'),
(79, 1, 'item', 3333, '333', 3333, 'burger.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `item_in_cart`
--

CREATE TABLE `item_in_cart` (
  `id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `val` int(11) DEFAULT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `item_in_cart`
--

INSERT INTO `item_in_cart` (`id`, `item_id`, `name`, `image`, `total_price`, `val`, `username`) VALUES
(25, 2, 'Chocolate Shake', 'burger.png', 123, 1, 'toanem'),
(26, 3, 'Vanilla Shake', 'burger.png', 123, 1, 'toanem'),
(27, 5, 'Iced Tea', 'burger.png', 492, 4, 'toanem'),
(28, 71, 'Nothing', 'burger.png', 246, 2, 'toanem'),
(29, 2, 'Chocolate Shake', 'burger.png', 123, 1, 'toanem'),
(30, 3, 'Vanilla Shake', 'burger.png', 123, 1, 'toanem'),
(31, 5, 'Iced Tea', 'burger.png', 0, 0, 'toanem'),
(32, 71, 'Nothing', 'burger.png', 246, 2, 'toanem'),
(33, 2, 'Chocolate Shake', 'burger.png', 123, 1, 'toanem'),
(34, 3, 'Vanilla Shake', 'burger.png', 123, 1, 'toanem'),
(35, 5, 'Iced Tea', 'burger.png', 0, 0, 'toanem'),
(36, 71, 'Nothing', 'burger.png', 246, 2, 'toanem'),
(37, 5, 'Iced Tea', 'burger.png', 246, 2, 'user1'),
(38, 3, 'Vanilla Shake', 'burger.png', 123, 1, 'user1'),
(39, 71, 'Nothing', 'burger.png', 123, 1, 'user1'),
(40, 2, 'Chocolate Shake', 'burger.png', 123, 1, 'user1'),
(41, 2, 'Chocolate Shake', 'burger.png', 123, 1, 'toanem'),
(42, 3, 'Vanilla Shake', 'burger.png', 123, 1, 'toanem'),
(43, 5, 'Iced Tea', 'burger.png', 0, 0, 'toanem'),
(44, 71, 'Nothing', 'burger.png', 246, 2, 'toanem'),
(45, 2, 'Chocolate Shake', 'burger.png', 123, 1, 'toanem'),
(46, 3, 'Vanilla Shake', 'burger.png', 123, 1, 'toanem'),
(47, 5, 'Iced Tea', 'burger.png', 0, 0, 'toanem'),
(48, 71, 'Nothing', 'burger.png', 246, 2, 'toanem'),
(49, 2, 'Chocolate Shake', 'burger.png', 369, 3, 'minhtoan149'),
(50, 3, 'Vanilla Shake', 'burger.png', 492, 4, 'minhtoan149'),
(51, 5, 'Iced Tea', 'burger.png', 246, 2, 'minhtoan149'),
(52, 71, 'Nothing', 'burger.png', 246, 2, 'minhtoan149'),
(53, 2, 'Chocolate Shake', 'burger.png', 123, 1, 'toanem'),
(54, 3, 'Vanilla Shake', 'burger.png', 123, 1, 'toanem'),
(55, 5, 'Iced Tea', 'burger.png', 0, 0, 'toanem'),
(56, 71, 'Nothing', 'burger.png', 246, 2, 'toanem'),
(57, 2, 'Chocolate Shake', 'burger.png', 492, 4, 'minhtoan149'),
(58, 3, 'Vanilla Shake', 'burger.png', 492, 4, 'minhtoan149'),
(59, 5, 'Iced Tea', 'burger.png', 246, 2, 'minhtoan149'),
(60, 71, 'Nothing', 'burger.png', 246, 2, 'minhtoan149');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `orderID` char(16) NOT NULL,
  `orderDate` datetime DEFAULT NULL,
  `tableNumber` int(11) DEFAULT NULL,
  `totalPrice` int(11) DEFAULT NULL,
  `stateID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`orderID`, `orderDate`, `tableNumber`, `totalPrice`, `stateID`) VALUES
('DH25112021000005', '2021-11-25 05:40:34', 12, 984, 1),
('DH25112021000006', '2021-11-25 09:28:25', 123, 492, 2);

--
-- Bẫy `order`
--
DELIMITER $$
CREATE TRIGGER `tg_order_insert` BEFORE INSERT ON `order` FOR EACH ROW BEGIN
  INSERT INTO AUTO_MA_DAT_PHONG VALUES (NULL);
  SET NEW.orderID = CONCAT('DH', LPAD(DAY(CURRENT_DATE()), 2, '0'), 
									  LPAD(MONTH(CURRENT_DATE()), 2, '0'), 
									  YEAR(CURRENT_DATE()), 
                                      LPAD(LAST_INSERT_ID(), 6, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `state`
--

CREATE TABLE `state` (
  `stateID` int(11) NOT NULL,
  `stateName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `state`
--

INSERT INTO `state` (`stateID`, `stateName`) VALUES
(1, 'Chờ xác nhận'),
(2, 'Đã xác nhận'),
(3, 'Hủy');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `auto_ma_dat_phong`
--
ALTER TABLE `auto_ma_dat_phong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_item` (`category_id`);

--
-- Chỉ mục cho bảng `item_in_cart`
--
ALTER TABLE `item_in_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk1_item_cart` (`item_id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `fk_order` (`stateID`);

--
-- Chỉ mục cho bảng `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`stateID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `auto_ma_dat_phong`
--
ALTER TABLE `auto_ma_dat_phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT cho bảng `item_in_cart`
--
ALTER TABLE `item_in_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fk_item` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `item_in_cart`
--
ALTER TABLE `item_in_cart`
  ADD CONSTRAINT `fk1_item_cart` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order` FOREIGN KEY (`stateID`) REFERENCES `state` (`stateID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
