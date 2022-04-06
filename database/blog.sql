-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 08:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(500) NOT NULL,
  `blog_description` longtext NOT NULL,
  `category_id` int(11) NOT NULL,
  `inserted_date` date NOT NULL DEFAULT current_timestamp(),
  `upload_doc` varchar(500) NOT NULL,
  `upload_type` varchar(256) NOT NULL,
  `folder_name` varchar(100) NOT NULL,
  `del` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_description`, `category_id`, `inserted_date`, `upload_doc`, `upload_type`, `folder_name`, `del`) VALUES
(1, 'Planet MySQL', 'Planet MySQL is the official MySQL blog that regularly publishes latest news and updates about MySQL database. It also has a well-known Q&A forum where users can post their questions, and expect a quick response. It publishes up to 3-4 new blog posts daily from its community members, mostly about configurations and optimizations.', 1, '2022-04-04', '1649068812mysql.png', 'image', '04.04.2022', 0),
(2, 'MySQL Tutorials', 'MySQL Tutorials contains a nice collection of tutorials suitable for beginners as well as advanced database administrators. Many of their tutorials also contain an interactive SQL editor that allows you to try SQL queries and analyze results.', 1, '2022-04-04', '1649070426mysql1.png', 'image', '04.04.2022', 0),
(3, 'Several Nines Blog', 'Several Nines creates advanced database management products for open source databases. Their database blog provides rich tips, articles and tools to help you manage your database efficiently. Their articles are more about database deployment in cloud and clusters. So it is quite useful for administrators in medium-large businesses and enterprises.', 1, '2022-04-04', '1649070516MySQL2.jpg', 'image', '04.04.2022', 0),
(4, 'Scalegrid blog', 'Scalegrid provides hosted database management services for popular databases. Their blog regularly publishes quality articles, tutorials and tips to help you make the most of working with your databases. They also publish performance benchmarks and comparisons among different tools and database configurations, to help readers pick the right technology for their business.', 1, '2022-04-04', '1649070681MySQL3.png', 'image', '04.04.2022', 0),
(5, ' PHP Manual', 'Arguably one of the best PHP blogs of all time for beginners and developers, PHP manual brings to you every single thing that you are going to need in order to learn more about PHP. You can post comments and then experience all the functions that PHP offers. Not to mention that you will also learn about the practical applications of PHP.', 2, '2022-04-04', '1649088128php.png', 'image', '04.04.2022', 0),
(6, ' SitePoint: PHP Blog for Beginners', 'Most applications and concepts of PHP web development are covered in this blog and that is why you need to give this website and also the blog posts here a chance. For beginners out there who have no idea about PHP, this is the perfect platform to know.', 2, '2022-04-04', '1649088166php.png', 'image', '04.04.2022', 0),
(7, 'FromDev: PHP Tutorials', 'There is no doubt that FromDev is one of the best platforms where you are going to find some PHP as well as some other web development-related blogs as well. So, there is simply not a single speck of doubt about the fact that you should try it once.', 2, '2022-04-04', '1649088214php.png', 'image', '04.04.2022', 0),
(8, 'Blogs from PHP Developer', 'With an operating experience of more than one decade, this blog site posts many materials on the amazing PHP language that people want to learn. Not to mention that there are explanations along with some other code examples that will help you out.', 2, '2022-04-04', '1649088264php.png', 'image', '04.04.2022', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `emp_email` varchar(100) DEFAULT NULL,
  `emp_password` varchar(100) NOT NULL,
  `emp_designation` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `user_type`, `name`, `username`, `emp_email`, `emp_password`, `emp_designation`) VALUES
(1, 'Admin', 'ashish Ji', 'admin', 'rvermamba@gmail.com', 'admin', 'Admin'),
(2, 'Vendor', 'Akash', 'akash', 'rvermamba@gmail.com', 'akash', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `master_category`
--

CREATE TABLE `master_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(250) DEFAULT NULL,
  `inserted_date` date NOT NULL DEFAULT current_timestamp(),
  `del` int(1) DEFAULT 0 COMMENT '0=not deleted ,1=deleted '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_category`
--

INSERT INTO `master_category` (`id`, `category_name`, `inserted_date`, `del`) VALUES
(1, 'MySQL', '2022-04-04', 0),
(2, 'PHP', '2022-04-04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `email`, `password`, `name`, `mobile`, `address`) VALUES
(123456, 'admin@phpzag.com', '12345', 'Admin', 12345678912, 'New Delhi 110096 India.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_category`
--
ALTER TABLE `master_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `master_category`
--
ALTER TABLE `master_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123457;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
