-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 06:14 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gogreen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`) VALUES
(1, 'admin', 'YWRtaW4=', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `challenge`
--

CREATE TABLE `challenge` (
  `cid` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `description` text NOT NULL,
  `start-date` text NOT NULL,
  `end-date` text NOT NULL,
  `registrations` int(11) DEFAULT NULL,
  `completions` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `challenge`
--

INSERT INTO `challenge` (`cid`, `name`, `type`, `description`, `start-date`, `end-date`, `registrations`, `completions`, `active`) VALUES
(1, 'One day Challenge', 'tree-plantation', 'Global environmental challenges, such as impacts of climate change, loss of biodiversity, over-use of natural resources and environmental and health.', '2020-01-19', '2020-01-29', 0, 0, 1),
(2, 'Tree Plantation for 5 days continuously', 'tree-plantation', 'Tree-planting is the process of transplanting tree seedlings, generally for forestry, land reclamation, or landscaping purpose.', '2020-01-19', '2020-01-20', 0, 0, 1),
(3, 'Soil exploitation and overbuilding', 'cleanliness', 'Because of human activities including polluting farming practices, soil contamination, building and infrastructure construction, farming soils are damaged.', '2020-01-17', '2020-01-22', 0, 0, 1),
(4, 'Walk 10000 Steps daily', 'other', 'Completing an extra 10,000 steps each day typically burns about 2000 to 3500 extra calories each week.', '2020-01-16', '2020-01-17', 0, 0, 1),
(5, '1 week challenge ', 'tree-plantation', 'Plant at least 4 tree within one week and get some exciting GoGreen goodies.', '2020-01-24', '2020-01-30', 0, 0, 1),
(6, 'Car Pool for continuously 1 month', 'other', 'Carpooling is the sharing of car journeys so that more than one person travels in a car', '2020-01-24', '2020-01-30', 0, 0, 1),
(7, 'Sunday Challenge!!!', 'cleanliness', 'Make a group of 10-15 people and clean river side areas for 4 weeks continuously.', '2020-01-17', '2020-01-22', 0, 0, 1),
(8, 'Tree Plantation for 5 days continuously', 'tree-plantation', 'Tree-planting is the process of transplanting tree seedlings, generally for forestry, land reclamation, or landscaping purpose.', '2020-01-25', '2020-01-25', 0, 0, 1),
(9, 'One day Challenge', 'tree-plantation', 'Global environmental challenges, such as impacts of climate change, loss of biodiversity, over-use of natural resources and environmental and health.', '2020-01-19', '2020-01-29', 0, 0, 1),
(10, 'Tree Plantation for 5 days continuously', 'tree-plantation', 'Tree-planting is the process of transplanting tree seedlings, generally for forestry, land reclamation, or landscaping purpose.', '2020-01-19', '2020-01-20', 0, 0, 1),
(11, 'Soil exploitation and overbuilding', 'cleanliness', 'Because of human activities including polluting farming practices, soil contamination, building and infrastructure construction, farming soils are damaged.', '2020-01-17', '2020-01-22', 0, 0, 1),
(12, 'Walk 10000 Steps daily', 'other', 'Completing an extra 10,000 steps each day typically burns about 2000 to 3500 extra calories each week.', '2020-01-16', '2020-01-17', 0, 0, 1),
(13, '1 week challenge ', 'tree-plantation', 'Plant at least 4 tree within one week and get some exciting GoGreen goodies.', '2020-01-24', '2020-01-30', 0, 0, 1),
(14, 'Car Pool for continuously 1 month', 'other', 'Carpooling is the sharing of car journeys so that more than one person travels in a car', '2020-01-24', '2020-01-30', 0, 0, 1),
(15, 'Sunday Challenge!!!', 'cleanliness', 'Make a group of 10-15 people and clean river side areas for 4 weeks continuously.', '2020-01-17', '2020-01-22', 0, 0, 1),
(16, 'Tree Plantation for 5 days continuously', 'tree-plantation', 'Tree-planting is the process of transplanting tree seedlings, generally for forestry, land reclamation, or landscaping purpose.', '2020-01-25', '2020-01-25', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `uid` int(11) NOT NULL,
  `id` text NOT NULL,
  `comment` text NOT NULL,
  `discuss` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`uid`, `id`, `comment`, `discuss`) VALUES
(1, '37', 'I am also facing same problem', 1),
(3, '37', 'Good Going people', 2),
(4, '37', 'Nice work', 2),
(5, '37', 'I also agree with you', 3),
(6, '37', 'Completely true brother', 3),
(7, '37', 'Very Devastating situation ', 2),
(8, '37', 'Some people really care about environment', 1),
(9, '37', 'That\'s a Great Initiative', 3),
(14, '1', 'Keep it up guys', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ecofriendlyproducts`
--

CREATE TABLE `ecofriendlyproducts` (
  `epid` int(10) UNSIGNED NOT NULL,
  `old` text NOT NULL,
  `alternative` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

Insert into `ecofriendlyproducts`(`old`,`alternative`,`description`) values('plastic straws','stainless steel straws','Plastic straws are really, really bad for the environment. They are not recyclable, and they are really damaging to marine life.Luckily, these stainless steel straws are a cheap, easy, and ~fancy~ way to do your part to reduce the number of plastic straws clogging the seas.  ');
Insert into `ecofriendlyproducts`(`old`,`alternative`,`description`) values('plastic utensils','reusable bamboo utensil set','The To Go Ware utensils come in a pouch made from recycled plastic (you can choose from a variety of colors), and the set is made up of a bamboo spoon, a fork, a knife, and chopsticks. They are lightweight and easy to carry ');
Insert into `ecofriendlyproducts`(`old`,`alternative`,`description`) values('rubber footwear','wool footwear','Allbirds created an innovative wool fabric made specifically for footwear.By wearing a pair of Allbirds wool shoes you can wear a pair of comfortable shoes from a company that found a new use for naturally existing materials, rather than relying on cheaper synthetics.');
Insert into `ecofriendlyproducts`(`old`,`alternative`,`description`) values('plastic cups','reusable coffee cups','In a similar style to coffee cups you get from Starbucks and other shops, Onya’s reusable coffee cups are made out of 100% food safe silicone.');
Insert into `ecofriendlyproducts`(`old`,`alternative`,`description`) values('plastic bags','disposable waste bag','Smart alternative to the non biodegradable plastic bags');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `evid` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `host` text NOT NULL,
  `description` text NOT NULL,
  `venue` text NOT NULL,
  `city` text NOT NULL,
  `start-date` text NOT NULL,
  `end-date` text NOT NULL,
  `registrations` int(11) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`evid`, `name`, `type`, `host`, `description`, `venue`, `city`, `start-date`, `end-date`, `registrations`, `active`) VALUES
(1, 'Cleanliness Drive', 'cleanliness', '', 'event-attachments/soil.jpg', 'Lnmiit Jaipur', 'Jaipur', '2020-01-18', '2020-01-30', 0, 1),
(2, 'Tree Plantation', 'tree-plantation', '', 'event-attachments/treeplant.jpg', 'MNIT JAIPUR', 'Jaipur', '2020-01-23', '2020-01-31', 0, 2),
(3, 'Green energy seminar', 'awareness', '', 'event-attachments/hold.jpg', 'Mumbai', 'Mumbai', '2020-01-19', '2020-01-29', 1, 1),
(4, 'Renewable energy', 'awareness', '1', 'event-attachments/infobg.jpg', 'New Delhi', 'New Dehli', '2020-01-23', '2020-01-30', 0, 1),
(5, 'GoGreen Meet', 'other', '1', 'event-attachments/meet.jpg', 'Jaipur', 'Jaipur', '2020-04-08', '2020-04-25', 1, 1),
(6, 'Marathon', 'awareness', '1', 'event-attachments/marathon.jfif', 'Dehradun', 'Dehradun', '2020-01-07', '2020-01-10', 0, 2),
(7, 'Geeckathon', 'other', '1', 'event-attachments/geckathon.jfif', 'Lnmiit ', 'Jaipur', '2020-01-01', '2020-01-04', 0, 2),
(8, 'Yoga program', 'other', '1', 'event-attachments/yoga.jfif', 'Kolkata', 'Kolkata', '2019-11-05', '2020-01-23', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `isid` int(10) UNSIGNED NOT NULL,
  `host` text NOT NULL,
  `category` text NOT NULL,
  `heading` text NOT NULL,
  `issue` text NOT NULL,
  `attachments` text NOT NULL,
  `upvotes` int(11) NOT NULL,
  `status` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`isid`, `host`, `category`, `heading`, `issue`, `attachments`, `upvotes`, `status`, `location`) VALUES
(1, '', 'Waste Management', 'Waste Segrigation', 'Waste segregation means dividing waste into dry and wet. Dry waste includes wood and related products, metals and glass. Wet waste typically refers to organic waste usually generated by eating establishments and are heavy in weight due to dampness', 'issue-attachments/garbage.jpg', 2, '1', 'New Delhi'),
(2, '1', 'Water Related', 'Improper sewage management', 'If sewage is only partially treated before it is disposed of, it can contaminate water and harm huge amounts of wildlife. Alternatively, leaking or flooding can cause completely untreated sewage to enter rivers and other water sources, causing them to become polluted', 'issue-attachments/sewage.jfif', 0, '1', 'Mumbai'),
(3, '1', 'Other', 'Deforestation', 'Deforestation, clearance, clearcutting or clearing is the removal of a forest or stand of trees from land which is then converted to a non-forest use. Deforestation can involve conversion of forest land to farms, ranches, or urban use. The most concentrated deforestation occurs in tropical rain forests. ', 'issue-attachments/de.jpg', 0, '1', 'Jaipur');

-- --------------------------------------------------------

--
-- Table structure for table `password_req`
--

CREATE TABLE `password_req` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `token` text NOT NULL,
  `datetimesss` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile_challenges`
--

CREATE TABLE `profile_challenges` (
  `uid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_challenges`
--

INSERT INTO `profile_challenges` (`uid`, `user_id`, `cid`) VALUES
(1, 37, 1),
(2, 1, 1),
(3, 1, 2),
(4, 1, 3),
(5, 1, 7),
(6, 37, 4),
(7, 1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `rid` int(10) UNSIGNED NOT NULL,
  `uid` text NOT NULL,
  `type` text NOT NULL,
  `eid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`rid`, `uid`, `type`, `eid`) VALUES
(1, '1', 'event', '5'),
(2, '', 'event', '3');

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

CREATE TABLE `solution` (
  `sid` int(10) UNSIGNED NOT NULL,
  `user` text NOT NULL,
  `isid` text NOT NULL,
  `description` text NOT NULL,
  `attachments` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(10) UNSIGNED NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `address` text NOT NULL,
  `contact` text NOT NULL,
  `points` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `email`, `password`, `name`, `city`, `state`, `address`, `contact`, `points`, `description`) VALUES
(1, 'anmolmittal53@gmail.com', 'YW5tb2w=', 'Anmol Mittal', 'JAIPUR', 'mnit, jaipur', 'hostel no 8, room no F-59, Mnit, jaipur', '7016268722', 690, ''),
(37, '2017umt1501@mnit.ac.in', 'ZGlrc2hh', 'Suryaprakash Agarwal', 'Chandigarh', 'Chandigarh', 'MNIT JAIPUR', '7895200248', 300, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `challenge`
--
ALTER TABLE `challenge`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `ecofriendlyproducts`
--


--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`evid`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`isid`);

--
-- Indexes for table `profile_challenges`
--
ALTER TABLE `profile_challenges`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `solution`
--
ALTER TABLE `solution`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `challenge`
--
ALTER TABLE `challenge`
  MODIFY `cid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ecofriendlyproducts`
--
ALTER TABLE `ecofriendlyproducts`
  MODIFY `epid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `evid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `isid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profile_challenges`
--
ALTER TABLE `profile_challenges`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `rid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `solution`
--
ALTER TABLE `solution`
  MODIFY `sid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
