-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 26, 2020 at 10:00 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `role_based_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_users`
--

CREATE TABLE `all_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `user_password` varchar(300) NOT NULL,
  `user_role` varchar(20) NOT NULL,
  `signup_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_users`
--

INSERT INTO `all_users` (`user_id`, `username`, `user_password`, `user_role`, `signup_date`) VALUES
(2, 'Mulenga', '$2y$10$P4A.Sh0aPOa6iMb3cMnsJ.pT2Cwxbh7p0HUkEzeWhFY2U7K7LfmNm', 'user', '2020-06-25 13:42:23'),
(3, 'Mutale', '$2y$10$9v8bx/PhpelXNPSTkSYsM./XHsibJF2aiByFS0fT2MuQtnjJwflp2', 'admin', '2020-06-25 14:04:26'),
(4, 'Smith', '$2y$10$21ylhh09i617I82WOCocj.BohT50kQrId1ktc2HL5ZRKSyre2AWy.', 'user', '2020-06-26 09:56:14'),
(5, 'Mike', '$2y$10$5jPu4tkvU3vhA6sDPcUXPePThXWZbKvOaXEo2JcGyEXEeCSYMvrd.', 'user', '2020-06-26 09:56:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_users`
--
ALTER TABLE `all_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_users`
--
ALTER TABLE `all_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
