-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2019 at 05:48 AM
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
  `clientFname` varchar(10) DEFAULT NULL,
  `clientLname` varchar(10) DEFAULT NULL,
  `appDate` date DEFAULT NULL,
  `appTime` time DEFAULT NULL,
  `service` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Clients`
--

CREATE TABLE `Clients` (
  `clientfName` varchar(20) DEFAULT NULL,
  `clientlName` varchar(20) DEFAULT NULL,
  `clientNumber` varchar(15) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Clients`
--

INSERT INTO `Clients` (`clientfName`, `clientlName`, `clientNumber`, `email`) VALUES
('Adeyah', 'McKenzie', '(246)511-2323', 'adeyah@hotmail.com'),
('Holly', 'Parks', '(246)212-3345', 'hollyp@hotmail.com'),
('James', 'Charles', '(246)431-2130', 'jamesc@hotmail.com'),
('Carter', 'Skeete', '(246)433-5121', 'carters@hotmail.com'),
('Lisa', 'Harper', '(246)430-5670', 'lisaharp@outlook.com'),
('Till', 'Jarvis', '(246)234-2323', 'till@hotmail.com');

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
-- Constraints for table `Services`
--
ALTER TABLE `Services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`stock_ID`) REFERENCES `Stock` (`stock_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
