
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `account` (
  `acc_id` int(5) NOT NULL,
  `acc_name` varchar(255) NOT NULL,
  `acc_password` varchar(255) NOT NULL,
  `acc_email` varchar(255) NOT NULL,
  `acc_address` varchar(255) NOT NULL,
  `acc_phone` varchar(255) NOT NULL,
  `acc_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `orders` (
  `order_id` int(5) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_name` text NOT NULL,
  `order_address` text NOT NULL,
  `order_email` text NOT NULL,
  `order_tal` text NOT NULL,
  `order_key` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--

CREATE TABLE `orders_detail` (
  `detail_id` int(5) NOT NULL,
  `order_id` int(5) NOT NULL,
  `pro_id` int(5) NOT NULL,
  `qty` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(5) NOT NULL,
  `pro_name` text NOT NULL,
  `pro_price` text NOT NULL,
  `pro_size` text NOT NULL,
  `pro_detail` text NOT NULL,
  `pro_image` text NOT NULL,
  `pro_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
ALTER TABLE `account`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
