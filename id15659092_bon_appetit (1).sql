-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 22, 2021 at 08:59 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15659092_bon_appetit`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `tid` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `dob` date NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`tid`, `name`, `email`, `mobile`, `address`, `dob`, `password`) VALUES
(1, 'Rohan Muley', 'rohan@gmail.com', '7564258789', 'Bibwewadi', '2000-08-26', 'rohan123'),
(2, 'Prabhanjan ', 'prabhya@gmail.com', '6547899871', 'Satona', '2000-03-23', 'prabhya123'),
(3, 'Varad Deshpande', 'varad@gmail.com', '7878787878', 'Gavhane Road Parbhani', '2000-07-20', 'varad'),
(4, 'Swapnil Muley', 'swapnil@gmail.com', '9000000000', 'HADCO', '2000-06-23', 'swapnil'),
(9, 'Vedpal Vaidya', 'vedpal@gmail.com', '1234567890', 'Sahkar Nagar', '2000-01-31', 'vedpal@123'),
(10, 'Kunal Patki', 'kunal@gmail.com', '9898989898', 'Nanalpeth', '2004-05-01', 'kunnu'),
(12, 'Shrikant Patki', 'shrikant@gmail.com', '9879879876', 'Nanalpeth', '1969-06-03', 'benja123'),
(23, 'Rajan Gaul', 'rajan@gmail.com', '9865323265', 'Gavhane Chowk', '2000-11-04', 'rajan'),
(25, 'Shree Kulthe', 'shree@gmail.com', '8787878787', 'Nanal Peth Parbhani', '1999-01-10', 'shree'),
(26, 'Prasahan Patki', 'prasahan123@gmail.com', '7845125689', 'Nanalpeth Parbhani', '2000-02-26', 'prasahan'),
(28, 'Chinmaya Mandlik', 'chinmaya@gmail.com', '1234567891', 'Aurangabad', '2003-07-16', 'chinmaya'),
(29, 'Parimal Vasmatkar', 'parimal@gmail.com', '5656895689', 'Nanalpeth Parbhani', '2004-02-19', 'parimal'),
(30, 'Prajwal', 'a@a.com', '9999999999', 'Nanal Peth Parbhani', '2000-02-26', '123'),
(31, 'Prajwal', 'iamprajwal9@gmail.com', '7147141714', 'address 1 , India', '2000-02-26', '123456'),
(32, 'Tejas Takle', 'tejastakle@gmail.com', '9876543210', 'Deccan Gymkhana , Pune', '2000-05-17', 'tejas123'),
(33, 'Mandar Dhamale', 'mandardhamale11@gmail.com', '8888846194', 'Pune', '2020-12-11', 'mandar123'),
(34, 'Mansi Shukla', 'mansishukla164@gmail.com', '7666573576', 'Medical Chowk, Nagpur ', '1999-01-15', 'MP1626$$'),
(36, 'Rajan', 'rajan1@gmail.com', '5463214568', 'Parbhani', '2020-07-15', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `oid` int(11) NOT NULL,
  `date` date NOT NULL,
  `timeslot` text NOT NULL,
  `service_address` text NOT NULL,
  `payment_method` text NOT NULL,
  `feedback` text DEFAULT NULL,
  `ratings` int(1) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `spid` int(11) DEFAULT NULL,
  `flag` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`oid`, `date`, `timeslot`, `service_address`, `payment_method`, `feedback`, `ratings`, `cid`, `sid`, `spid`, `flag`) VALUES
(1, '2020-12-06', '10am-12pm', 'Nanal Peth Parbhani', 'Cash', 'Good', 4, 1, 1, 1, 1),
(3, '2018-10-05', '4pm to 5pm', 'Dhanakawadi', 'Cash', 'profressional', NULL, 2, 6, 6, 0),
(4, '2018-10-05', '1pm', 'kothrud', 'UPI', NULL, NULL, 3, 3, 5, 1),
(5, '2018-10-08', '4pm to 5pm', 'dhanakawadi', 'card', NULL, NULL, 2, 4, 5, 0),
(6, '2018-10-10', '4pm to 5pm', 'Dhanakawadi', 'Card', NULL, NULL, 2, 2, 1, 1),
(9, '2018-10-16', '5pm to 7pm', 'ABChowk', 'UPI', NULL, NULL, 2, 2, 1, 1),
(10, '2014-05-16', '5pm', 'wiman nagar', 'card', NULL, NULL, 2, 3, 5, 0),
(11, '2018-02-25', '5pm', 'warje', 'upi', NULL, NULL, 2, 4, 5, 0),
(12, '2018-05-05', '5pm', 'karve nagar', 'cash', NULL, NULL, 2, 4, 5, 0),
(13, '0001-11-11', '01:01', '1', '1', NULL, NULL, 3, NULL, NULL, 0),
(14, '2222-11-11', '11:02', '1', '1', NULL, NULL, 30, NULL, NULL, 0),
(15, '2020-12-12', '16:03', 'Nanal Peth , Parbhani', 'Cash', NULL, NULL, 31, 13, 5, 0),
(16, '2020-12-19', '17:40', 'O', 'K', NULL, NULL, 3, NULL, NULL, 0),
(17, '2020-12-14', '19:30', 'Pune', 'Cash', NULL, NULL, 32, NULL, NULL, 0),
(18, '2020-12-13', '14:24', 'Nanal Peth , Parbhani', 'UPI', NULL, NULL, 30, NULL, NULL, 0),
(19, '2020-12-13', '21:10', 'Nanal Peth , Parbhani', 'Cash', NULL, NULL, 31, 6, 6, 0),
(20, '2020-12-13', '22:12', 'Nanalpeth', 'Cash', NULL, NULL, 1, NULL, NULL, 0),
(21, '2020-12-13', '22:48', 'Pune', 'Cash', NULL, NULL, 31, 12, 5, 0),
(22, '2020-12-13', '22:53', 'Pune', 'UPI', NULL, NULL, 31, 4, 5, 0),
(23, '2020-12-13', '23:05', 'Nanal Peth , Parbhani', 'UPI', 'Wonderful', 6, 31, 16, 1, 1),
(24, '2020-12-13', '23:09', 'Nanal Peth , Parbhani', 'Cash', NULL, NULL, 1, NULL, NULL, 0),
(25, '2020-12-13', '23:13', 'Nanal Peth , Parbhani', 'UPI', NULL, NULL, 1, NULL, NULL, 0),
(31, '2020-12-18', '02:55', 'a', 'a', 'oiuyferwetyy98u', 4, 30, 9, 5, 1),
(32, '2020-12-14', '00:08', 'Nanal Peth , Parbhani', 'Cash', NULL, NULL, 1, 4, 5, 1),
(33, '1111-11-11', '11:21', 'a', 'a', NULL, NULL, 30, 10, 6, 0),
(34, '2020-12-01', '11:13', 'Nanal Peth , Parbhani', 'Cash', NULL, NULL, 31, 4, 5, 1),
(35, '2020-12-14', '15:43', 'Nanal Peth , Parbhani', 'Cash', 'Wonderful', 6, 31, 2, 1, 1),
(36, '2020-12-20', '19:51', 'Pune', 'UPI', 'Good', 5, 33, 1, 1, 1),
(37, '2020-12-21', '09:49', 'Nanal Peth , Parbhani', 'Cash', NULL, NULL, 31, 1, 1, 0),
(38, '2020-12-21', '10:31', 'Pune', 'UPI', NULL, NULL, 33, 1, 1, 0),
(39, '2020-12-21', '10:40', 'Pune', 'UPI', 'Good', 5, 33, 1, 1, 1),
(40, '2020-12-21', '15:47', 'Pune', 'Cash', 'Good!', 5, 33, 1, 1, 1),
(41, '2020-12-27', '00:51', 'Pune', 'UPI', 'Good!', 5, 33, 1, 1, 1),
(42, '2021-01-15', '20:29', 'Medical Chowk,Nagpur', 'Cash', NULL, NULL, 34, 17, 1, 0),
(43, '2021-01-15', '20:29', 'Medical Chowk,Nagpur', 'Cash', NULL, NULL, 34, 17, 1, 0),
(44, '2021-01-15', '20:29', 'Medical Chowk,Nagpur', 'Cash', NULL, NULL, 34, 17, 1, 0),
(45, '2021-02-07', '06:30', 'Parbhani', 'UPI', NULL, NULL, 36, 20, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `spid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `name` text NOT NULL,
  `category` text NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`spid`, `sid`, `name`, `category`, `price`, `description`) VALUES
(1, 1, 'Margharita', 'Dominos', 750, 'A hugely popular margherita, with a deliciously tangy single cheese topping'),
(1, 2, 'Triple Treat Box Veg', 'Pizza Hut', 750, 'Meal for 4. Any 2 Veg Medium Pizza, 1 Garlic Bread Stix, 1 Potato Poppers, 1 Tandoori Pocket Paneer'),
(5, 3, 'Triple Treat Box NonVeg', 'Pizza Hut', 700, 'Meal for 4. Any 2 Non-Veg Medium Pizza, 1 Garlic Bread Stix, 1 Potato Poppers, 1 Tandoori Pocket Paneer'),
(5, 4, 'Three Medium Veg Pizza ', 'Pizza Hut', 500, '1 Medium Spiced Paneer, 1 Medium Veggie Feast & 1 Medium Classic Tomato'),
(6, 6, 'Farm House', 'Dominos', 600, 'A pizza that goes ballistic on veggies! Check out this mouth watering overload of crunchy, crisp capsicum, succulent mushrooms and fresh tomatoes'),
(7, 7, 'Three Medium NonVeg Pizza', 'Pizza Hut', 600, '1 Medium Chicken Pepperoni, 1 Medium Spiced Chicken Meatballs, 1 Medium Chicken Sausage'),
(5, 8, 'Mexican Green Wave', 'Dominos', 800, 'A pizza loaded with crunchy onions, crisp capsicum, juicy tomatoes and jalapeno with a liberal sprinkling of exotic Mexican herbs.'),
(5, 9, 'Pepper Barbecue Chicken', 'Dominos', 1000, 'Pepper Barbecue Chicken I Cheese'),
(6, 10, 'Big Mac', 'Mcdonalds', 400, 'Big Mac sauce sandwiched between a sesame seed bun. It\'s topped off with pickles, crisp shredded lettuce, finely chopped onion and American cheese.'),
(5, 11, 'Non Veg Supreme', 'Dominos', 600, 'Bite into supreme delight of Black Olives, Onions, Grilled Mushrooms, Pepper BBQ Chicken, Peri-Peri Chicken, Grilled Chicken Rashers'),
(5, 12, 'Black Forrest Cake', 'Cafe Coffe Day', 300, 'Black Forrest Cake smothered with old-fashioned whipped cream and topped off with juicy cherries.'),
(5, 13, 'Masala Dosa', 'Indian', 100, 'Served with chutney and sambar'),
(1, 14, 'Chicken Whooper', 'Burger King', 150, 'Burger served with coke and onions'),
(5, 15, 'onion', 'Dominos', 500, 'Onion Pizza'),
(1, 16, 'Idli And Vada', 'Indian', 80, '2 pices of Idli and 2 pieces of Wada served Chutney And Sambar'),
(1, 17, 'Paneer Pizza', 'Dominos', 120, 'Paneer Pizza served with extraa Cheeze'),
(5, 18, 'Filet-o-Fish Burger', 'Mcdonalds', 145, 'Signature fish fillet patty served between two buns'),
(5, 19, 'Mcspicy Chicken Burger', 'Mcdonalds', 160, 'Juicy Chicken patty coated in crispy batter'),
(5, 20, 'Mcaloo Tikki Burger', 'Mcdonalds', 60, 'Crunchy potato and Peas patty topped with veg sauce'),
(5, 21, 'Veg Maharaja Mac', 'Mcdonalds', 200, 'Perfectly fried corn and cheese patty paired along with jalapeo'),
(5, 22, 'Mutton Whooper', 'Burger King', 260, 'Flame grilled signature mutton patty whooper'),
(5, 23, 'Chicken Whooper', 'Burger King', 170, 'Classic patty that will make you go yummmm!'),
(5, 24, 'Boss Whooper Veg', 'Burger King', 199, 'The BOSS of all veg burgers'),
(5, 25, 'Crispy Veg', 'Burger King', 75, 'Crispy veg patty burger our best seller!'),
(5, 26, 'BK Classic Veg', 'Burger King', 80, 'Garden Fresh Veg patty classic burger'),
(7, 27, 'Tropical Iceberg', 'Cafe Coffe Day', 133, 'Cold coffee with iceberg icecream'),
(7, 28, 'Cafe Latte', 'Cafe Coffe Day', 150, 'Hot coffee'),
(7, 29, 'Filter Coffee', 'Cafe Coffe Day', 100, 'Classic old coffee'),
(7, 30, 'Pineapple delight pastry', 'Cafe Coffe Day', 120, 'Pineapple flavored pastry'),
(7, 31, 'Medu Vada', 'Indian', 100, 'Medu Vada served with Coconut Chutney and Sambar'),
(7, 32, 'Uttapam', 'Indian', 120, ' Uttapam is a dosa-like preparation made with a mixture of rice, dhuli urad dal and fenugreek seeds.'),
(7, 33, 'Coffee', 'Cafe Coffe Day', 100, 'Plain coffee'),
(1, 34, 'Capsicum Pizza', 'Dominos', 100, 'Pizza');

-- --------------------------------------------------------

--
-- Table structure for table `service_provider`
--

CREATE TABLE `service_provider` (
  `spid` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `work_experience` text NOT NULL,
  `status` int(1) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_provider`
--

INSERT INTO `service_provider` (`spid`, `name`, `email`, `mobile`, `address`, `work_experience`, `status`, `password`) VALUES
(1, 'Prajwal Patki', 'prajwal@gmail.com', '6547893214', 'Parbhani', '5 Years', 1, 'prajwal123'),
(5, 'Tejas Takle', 'tejas@gmail.com', '6541238790', 'Deccan Gymkhana , Pune', '2 years', 1, 'tejas123'),
(6, 'Prasahan Patki', 'prasahan@gmail.com', '9874563210', 'Bibwewadi , Pune', '2 years', 1, 'prasahan123'),
(7, 'Mandar', 'mandar@gmail.com', '7090212121', 'dhanakawadi', '10 years', 1, 'mandar123'),
(8, 'Phunsukh Wangdu', 'phunsukh@gmail.com', '9874564567', 'Pimpri', '8years', 1, 'phunsukh123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`tid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `sid` (`sid`,`spid`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`sid`,`spid`),
  ADD KEY `spid` (`spid`);

--
-- Indexes for table `service_provider`
--
ALTER TABLE `service_provider`
  ADD PRIMARY KEY (`spid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `service_provider`
--
ALTER TABLE `service_provider`
  MODIFY `spid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_info`
--
ALTER TABLE `order_info`
  ADD CONSTRAINT `order_info_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`tid`),
  ADD CONSTRAINT `order_info_ibfk_2` FOREIGN KEY (`sid`,`spid`) REFERENCES `service` (`sid`, `spid`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `spid` FOREIGN KEY (`spid`) REFERENCES `service_provider` (`spid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
