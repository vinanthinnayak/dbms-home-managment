-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 12:32 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `billcal` (IN `uids` VARCHAR(10))  NO SQL
BEGIN
SELECT SUM(bills.amt)  as billsum FROM bills where bills.uid= uids and bills.dat=CURRENT_DATE();
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `homecal` (IN `uids` VARCHAR(10))  NO SQL
BEGIN
SELECT SUM(homeapp.amt) as  homesum FROM homeapp where homeapp.uid= uids and homeapp.dat=CURRENT_DATE();
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `medcal` (IN `uids` VARCHAR(10))  NO SQL
BEGIN
SELECT SUM(medicine.amt) as medsum FROM medicine where medicine.uid= uids and medicine.dat=CURRENT_DATE() ;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sumcal` (IN `uids` VARCHAR(10))  BEGIN
SELECT SUM(grocery.amt) as grocsum FROM grocery where grocery.uid= uids and grocery.dat=CURRENT_DATE() ;
SELECT SUM(bills.amt)  as billsum FROM bills where bills.uid= uids and bills.dat=CURRENT_DATE();
SELECT SUM(medicine.amt) as medsum FROM medicine where medicine.uid= uids and medicine.dat=CURRENT_DATE() ;
SELECT SUM(homeapp.amt) as  homesum FROM homeapp where homeapp.uid= uids and homeapp.dat=CURRENT_DATE();
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `sln` int(10) NOT NULL,
  `dat` date NOT NULL,
  `billno` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `amt` int(10) NOT NULL,
  `uid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`sln`, `dat`, `billno`, `name`, `amt`, `uid`) VALUES
(1, '2019-11-22', 3456, 'water', 187, 106),
(3, '2019-11-28', 567, 'gas', 490, 106),
(4, '2019-12-05', 4567, 'NewsPaper', 150, 106);

-- --------------------------------------------------------

--
-- Table structure for table `grocery`
--

CREATE TABLE `grocery` (
  `sln` int(10) NOT NULL,
  `dat` date NOT NULL,
  `item` varchar(10) NOT NULL,
  `qty` float NOT NULL,
  `amt` int(10) NOT NULL,
  `uid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grocery`
--

INSERT INTO `grocery` (`sln`, `dat`, `item`, `qty`, `amt`, `uid`) VALUES
(1, '2019-11-22', 'milk', 2.5, 45, 106),
(7, '2019-11-28', 'rava', 2.5, 54, 106),
(8, '2019-11-28', 'ragi', 2.7, 40, 106),
(10, '2019-11-29', 'vegetable', 2.5, 50, 106),
(11, '2019-11-29', 'milk', 2.5, 90, 106),
(12, '2019-12-09', 'milk', 2.5, 45, 106);

-- --------------------------------------------------------

--
-- Table structure for table `homeapp`
--

CREATE TABLE `homeapp` (
  `sln` int(10) NOT NULL,
  `dat` date NOT NULL,
  `appno` varchar(10) NOT NULL,
  `aname` varchar(10) NOT NULL,
  `acomp` varchar(10) NOT NULL,
  `amt` int(10) NOT NULL,
  `waranty` int(10) NOT NULL,
  `uid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homeapp`
--

INSERT INTO `homeapp` (`sln`, `dat`, `appno`, `aname`, `acomp`, `amt`, `waranty`, `uid`) VALUES
(1, '2019-11-23', '786', 'fridge', 'samsung', 5, 12000, 106),
(2, '2019-11-28', '78', 'washing', 'lg', 8, 2400, 106),
(3, '2019-11-01', '890', 'fridge', 'onida', 15000, 8, 777),
(4, '2019-11-29', '8907', 'tv', 'bravia', 32000, 5, 100),
(5, '2019-12-11', '09790', 'gasstove', 'peigion', 12000, 5, 106);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `usrname` varchar(10) NOT NULL,
  `pwd` int(5) NOT NULL,
  `uid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `sln` int(10) NOT NULL,
  `dat` date NOT NULL,
  `medname` varchar(10) NOT NULL,
  `doc` varchar(10) NOT NULL,
  `amt` int(10) NOT NULL,
  `uid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`sln`, `dat`, `medname`, `doc`, `amt`, `uid`) VALUES
(1, '2019-11-22', 'nurobin', 'karthik', 78, 106),
(3, '2019-11-28', 'jjic', 'vasudhha', 89, 106),
(4, '2019-11-28', 'inac40', 'ramesh', 550, 106),
(5, '2019-12-09', 'nurobin', 'dr.karthik', 35, 106);

-- --------------------------------------------------------

--
-- Table structure for table `summary`
--

CREATE TABLE `summary` (
  `sln` int(10) NOT NULL,
  `dat` date NOT NULL,
  `grocery` int(10) NOT NULL,
  `bills` int(10) NOT NULL,
  `medicine` int(10) NOT NULL,
  `homeapp` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `uid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `summary`
--

INSERT INTO `summary` (`sln`, `dat`, `grocery`, `bills`, `medicine`, `homeapp`, `total`, `uid`) VALUES
(5, '0000-00-00', 10, 10, 10, 10, 0, 106),
(11, '0000-00-00', 10, 1, 10, 10, 40, 106);

-- --------------------------------------------------------

--
-- Table structure for table `usercount`
--

CREATE TABLE `usercount` (
  `da` date NOT NULL,
  `ct` int(10) NOT NULL DEFAULT 2,
  `id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usercount`
--

INSERT INTO `usercount` (`da`, `ct`, `id`) VALUES
('2019-12-05', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `uname` varchar(10) NOT NULL,
  `pwd` int(10) NOT NULL,
  `fullname` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `uid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`uname`, `pwd`, `fullname`, `age`, `email`, `uid`) VALUES
('htt', 890, 'bhvhv', 70, 'giguu', 80),
('sangeeta', 100, 'sangeeta k', 46, 'sangi@mail', 100),
('venky', 101, 'venkatesh', 55, 'v2gmail', 101),
('suni', 123, 'sunidhi', 20, 'sungmail', 106),
('varsha', 111, 'varshavp', 24, 'vv2@', 111),
('hem', 123, 'hemantvk', 46, 'hemvk', 333),
('visi', 777, 'vismitha', 19, 'visu23', 777),
('sanji', 888, 'sanjana', 19, 'sanju23', 888);

--
-- Triggers `userdata`
--
DELIMITER $$
CREATE TRIGGER `trig1` BEFORE INSERT ON `userdata` FOR EACH ROW BEGIN
UPDATE `usercount` SET `da`=CURRENT_DATE(),`ct`=`ct`+1 WHERE `id`= 1;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trig2` AFTER DELETE ON `userdata` FOR EACH ROW BEGIN
UPDATE `usercount` SET `da`=CURRENT_DATE(),`ct`=`ct`-1 WHERE `id`= 1;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`sln`),
  ADD KEY `f4` (`uid`);

--
-- Indexes for table `grocery`
--
ALTER TABLE `grocery`
  ADD PRIMARY KEY (`sln`),
  ADD KEY `f3` (`uid`);

--
-- Indexes for table `homeapp`
--
ALTER TABLE `homeapp`
  ADD PRIMARY KEY (`sln`),
  ADD KEY `f2` (`uid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`usrname`,`pwd`),
  ADD KEY `f1` (`uid`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`sln`),
  ADD KEY `f5` (`uid`);

--
-- Indexes for table `summary`
--
ALTER TABLE `summary`
  ADD PRIMARY KEY (`sln`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `usercount`
--
ALTER TABLE `usercount`
  ADD PRIMARY KEY (`ct`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `sln` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `grocery`
--
ALTER TABLE `grocery`
  MODIFY `sln` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `homeapp`
--
ALTER TABLE `homeapp`
  MODIFY `sln` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `sln` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `summary`
--
ALTER TABLE `summary`
  MODIFY `sln` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `f4` FOREIGN KEY (`uid`) REFERENCES `userdata` (`uid`);

--
-- Constraints for table `grocery`
--
ALTER TABLE `grocery`
  ADD CONSTRAINT `f3` FOREIGN KEY (`uid`) REFERENCES `userdata` (`uid`);

--
-- Constraints for table `homeapp`
--
ALTER TABLE `homeapp`
  ADD CONSTRAINT `f2` FOREIGN KEY (`uid`) REFERENCES `userdata` (`uid`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `f1` FOREIGN KEY (`uid`) REFERENCES `userdata` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medicine`
--
ALTER TABLE `medicine`
  ADD CONSTRAINT `f5` FOREIGN KEY (`uid`) REFERENCES `userdata` (`uid`);

--
-- Constraints for table `summary`
--
ALTER TABLE `summary`
  ADD CONSTRAINT `summary_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `userdata` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
