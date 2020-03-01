-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2019 at 10:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LeBevs`
--

-- --------------------------------------------------------

--
-- Table structure for table `Appointments`
--

CREATE TABLE `Appointments` (
  `client_ID` int(11) DEFAULT NULL,
  `appDate` date DEFAULT NULL,
  `appTime` time DEFAULT NULL,
  `service` varchar(15) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Appointments`
--

INSERT INTO `Appointments` (`client_ID`, `appDate`, `appTime`, `service`, `price`) VALUES
(10121, NULL, NULL, 'Wash, Flat Iron', '65'),
(12133, NULL, NULL, 'Haircut', '25'),
(21354, NULL, NULL, 'Box Braids', '100'),
(31234, NULL, NULL, 'Relaxer, Trim', '60');

-- --------------------------------------------------------

--
-- Table structure for table `Clients`
--

CREATE TABLE `Clients` (
  `client_ID` int(10) NOT NULL,
  `clientfName` varchar(20) DEFAULT NULL,
  `clientlName` varchar(20) DEFAULT NULL,
  `clientNumber` varchar(15) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `service` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Clients`
--

INSERT INTO `Clients` (`client_ID`, `clientfName`, `clientlName`, `clientNumber`, `email`, `service`) VALUES
(10121, 'Holly', 'Parks', '(246)212-3345', 'hollyp@hotmail.com', 'Wash, Flat Iron'),
(12133, 'James', 'Charles', '(246)431-2130', 'jamesc@hotmail.com', 'Haircut'),
(21354, 'Carter', 'Skeete', '(246)433-5121', 'carters@hotmail.com', 'Box Braids'),
(31234, 'Lisa', 'Harper', '(246)430-5670', 'lisaharp@outlook.com', 'Relaxer, Trim, ');

-- --------------------------------------------------------

--
-- Table structure for table `Employees`
--

CREATE TABLE `Employees` (
  `employee_ID` int(10) NOT NULL,
  `employeeFname` varchar(15) DEFAULT NULL,
  `employeeLname` varchar(15) DEFAULT NULL,
  `employeeNum` varchar(15) DEFAULT NULL,
  `employeeSalary` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Employees`
--

INSERT INTO `Employees` (`employee_ID`, `employeeFname`, `employeeLname`, `employeeNum`, `employeeSalary`) VALUES
(5671, 'Beverley', 'Weekes', '(246)221-0507', '4000'),
(21322, 'Leanne', 'Weekes', '(246)881-2526', '2500');

-- --------------------------------------------------------

--
-- Table structure for table `Services`
--

CREATE TABLE `Services` (
  `service` varchar(15) DEFAULT NULL,
  `servicefee` varchar(5) DEFAULT NULL,
  `stock_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Stock`
--

CREATE TABLE `Stock` (
  `stock_ID` int(10) NOT NULL,
  `supplierName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Supplier`
--

CREATE TABLE `Supplier` (
  `supplierName` varchar(20) DEFAULT NULL,
  `payment` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Appointments`
--
ALTER TABLE `Appointments`
  ADD KEY `client_ID` (`client_ID`);

--
-- Indexes for table `Clients`
--
ALTER TABLE `Clients`
  ADD PRIMARY KEY (`client_ID`);

--
-- Indexes for table `Employees`
--
ALTER TABLE `Employees`
  ADD PRIMARY KEY (`employee_ID`);

--
-- Indexes for table `Services`
--
ALTER TABLE `Services`
  ADD KEY `stock_ID` (`stock_ID`);

--
-- Indexes for table `Stock`
--
ALTER TABLE `Stock`
  ADD PRIMARY KEY (`stock_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Appointments`
--
ALTER TABLE `Appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`client_ID`) REFERENCES `Clients` (`client_ID`);

--
-- Constraints for table `Services`
--
ALTER TABLE `Services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`stock_ID`) REFERENCES `Stock` (`stock_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
