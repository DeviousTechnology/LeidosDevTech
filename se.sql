-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2017 at 09:58 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `se`
--

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `ProjectID` int(10) NOT NULL,
  `ResourcesNeeded` varchar(200) DEFAULT NULL,
  `Budget` int(10) NOT NULL,
  `RequiredHeadcount` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`ProjectID`, `ResourcesNeeded`, `Budget`, `RequiredHeadcount`) VALUES
(1, 'Permit to Work, Construction Workers, Delivery Truck', 1000000, 250),
(2, 'Corporate Employees, Stationary', 50000, 50),
(3, 'Car, Sensors, Corporate Employees', 950000, 20),
(4, 'Delivery Truck, Car, Drivers', 700000, 35),
(5, 'Car, Sensors, Patent', 850000, 40),
(6, 'Permit to Work, Construction Workers, Delivery Truck', 1500000, 300);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` int(10) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Type` enum('admin','user') DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `JobRole` varchar(25) NOT NULL,
  `Image` longblob,
  `Location` varchar(25) NOT NULL,
  `PreferredLoc` varchar(25) DEFAULT NULL,
  `AvailableAfter` date DEFAULT NULL,
  `Skills` set('Project management','Languages','Confident','Hardworking','Communication','Leadership','Mathematics','Computers') NOT NULL,
  `Interests` set('Transport','Technology','Man-power','Legal','Machinery') DEFAULT NULL,
  `Activity` varchar(10) DEFAULT NULL,
  `Gender` varchar(50) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `FirstName`,`LastName`, `Type`, `Email`, `Password`, `JobRole`, `Image`, `Location`, `PreferredLoc`, `AvailableAfter`, `Skills`, `Interests`, `Activity`,`Gender`) VALUES
(2, 'Bello','Ahmed', 'admin', 'Bahmed@hw.com', 'huntingash', 'Project Manager', '', 'England', 'Canada', '2016-10-08', 'Project management', 'Technology', 'offline',`male`),
(3, 'Misbah ','Mandai', 'admin', 'Mmandai@hw.com', 'nanfoster', 'Project Manager', '', 'Canada', 'Australia', '2016-12-07', 'Communication', 'Man-power', 'offline',`female`),
(4, 'Philip ','Reid', 'user', 'preid3@harvard.edu', 'mangojuice', 'Financial Advisor', '', 'Canada', 'Canada', '2017-02-17', 'Mathematics', 'Legal', 'offline',`male`),
(5, 'Jeffrey ','Jenkins', 'user', 'jjenkins4@about.com', 'Jinkies', 'Architect', '', 'United Arab Emirates', 'United Arab Emirates', '2017-01-16', 'Communication', 'Machinery', 'offline',`female`),
(6, 'Maria ','Mendoza', 'user', 'mmendoza5@java.com', 'round12', 'Engineer', '', 'United Arab Emirates', 'Germany', '2017-03-25', 'Mathematics', 'Transport', 'offline',`female`),
(7, 'Aaron ','Russell', 'user', 'arussell6@homestead.com', 'trashyXO', 'Analyst', '', 'Germany', 'Germany', '2017-04-30', 'Computers', 'Machinery', 'offline',`male`),
(8, 'Rose','Long', 'user', 'rlong7@columbia.edu', 'catlover', 'Architect', '', 'Germany', 'Canada', '2017-03-19', 'Project management', 'Man-power', 'offline',`female`),
(9, 'Janice ','Griffin', 'user', 'jgriffin8@oaic.gov.au', 'griffin123', 'Engineer', '', 'Turkey', 'United Arab Emirates', '2017-01-10', 'Confident', 'Legal', 'offline',`female`),
(11, 'Gary','Brown', 'user', 'gbrowna@printfriendly.com', 'Gary321', 'Financial Advisor', '', 'Turkey', 'Germany', '2016-12-11', 'Hardworking', 'Transport', 'offline',`female`),
(12, 'Victor','Lopez', 'user', 'vlopezb@hao123.com', 'Jlopez', 'Engineer', '', 'England', 'Australia', '2017-02-12', 'Confident', 'Man-power', 'offline',`male`),
(13, 'Clarence','Myers', 'user', 'cmyersc@php.net', 'clarityMy', 'Engineer', '', 'Australia', 'Australia', '2017-03-19', 'Project management', 'Technology', 'offline',`female`),
(14, 'Carlos','Webb', 'user', 'cwebbd@slideshare.net', 'webbdesigner', 'Analyst', '', 'Australia', 'Canada', '2017-02-13', 'Leadership', 'Legal', 'offline',`male`),
(15, 'Pamela','Medina', 'user', 'pmedinae@weibo.com', 'abc123', 'Analyst', '', 'Canada', 'England', '2016-11-06', 'Mathematics', 'Transport', 'offline',`female`),
(16, 'Elizabeth ','Carr', 'user', 'ecarrf@google.fr', 'abc123', 'Architect', '', 'Canada', 'Germany', '2016-11-12', 'Confident', 'Machinery', 'offline',`female`),
(17, 'Andrea', ' Wallace','user', 'awallaceg@bluehost.com', 'abc123', 'Architect', '', 'England', 'Turkey', '2016-10-31', 'Computers', 'Transport', 'offline',`female`),
(18, 'Ryan',' Snyder', 'user', 'rsnyderh@hexun.com', 'abc123', 'Analyst', '', 'Australia', 'United Arab Emirates', '2017-01-13', 'Computers', 'Legal', 'offline',`male`),
(19, 'Jonathan',' Harrison', 'user', 'jharrisoni@whitehouse.gov', 'abc123', 'Engineer', '', 'Canada', 'United Arab Emirates', '2017-03-19', 'Confident', 'Transport', 'offline',`male`),
(20, 'Rebecca',' Shaw', 'user', 'rshawj@nature.com', 'abc123', 'Engineer', '', 'United Arab Emirates', 'Canada', '2016-12-09', 'Mathematics', 'Technology', 'offline',`female`),
(21, 'Albert ','Stevens', 'user', 'astevensk@privacy.gov.au', 'abc123', 'Analyst', '', 'United Arab Emirates', 'Australia', '2017-01-11', 'Leadership', 'Legal', 'offline',`male`),
(22, 'Frank',' Wood', 'user', 'fwoodl@nymag.com', 'abc123', 'Engineer', '', 'Australia', 'Germany', '2016-12-31', 'Confident', 'Machinery', 'offline',`male`),
(23, 'Dorothy',' Howard', 'user', 'dhowardm@ca.gov', 'abc123', 'Engineer', '', 'Canada', 'Germany', '2017-01-03', 'Languages', 'Transport', 'offline',`female`),
(24, 'Sean ','Schmidt', 'user', 'sschmidtn@blogs.com', 'abc123', 'Analyst', '', 'Germany', 'Canada', '2017-01-14', 'Hardworking', 'Technology', 'offline',`female`),
(25, 'Lillian ','Garcia', 'user', 'lgarciao@cbslocal.com', 'abc123', 'Financial Advisor', '', 'Germany', 'England', '2017-01-30', 'Confident', 'Machinery', 'offline',`female`),
(26, 'Chris ','Lopez', 'user', 'clopezp@noaa.gov', 'abc123', 'Financial Advisor', '', 'England', 'England', '2016-12-10', 'Communication', 'Transport', 'offline',`male`),
(27, 'Jennifer',' Gardner', 'user', 'jgardnerq@ifeng.com', 'abc123', 'Architect', '', 'Turkey', 'Turkey', '2016-12-23', 'Confident', 'Technology', 'offline',`female`),
(28, 'Phyllis',' Wright', 'user', 'pwrightr@seattletimes.com', 'abc123', 'Analyst', '', 'Canada', 'Canada', '2016-11-18', 'Confident', 'Machinery', 'offline',`female`),
(29, 'Janet ','Spencer', 'user', 'jspencers@comsenz.com', 'abc123', 'Analyst', '', 'United Arab Emirates', 'United Arab Emirates', '2017-03-16', 'Communication', 'Legal', 'offline',`female`),
(30, 'Eugene',' Adams', 'user', 'eadamst@comcast.net', 'abc123', 'Architect', '', 'Australia', 'Australia', '2016-11-29', 'Communication', 'Man-power', 'offline',`male`);

-- --------------------------------------------------------

--
-- Table structure for table `employees_audit`
--
-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `ProjectID` int(10) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Type` enum('Bid','Consultancy','Development','Delivery','Research','Construction','Administrative') NOT NULL,
  `Description` varchar(140) NOT NULL,
  `PrimaryLoc` varchar(25) NOT NULL,
  `SecondaryLoc` varchar(25) DEFAULT NULL,
  `SkillsReq` varchar(200) DEFAULT NULL,
  `Priority` enum('Urgent','Important','Moderate') NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ProjectID`, `Name`, `Type`, `Description`, `PrimaryLoc`, `SecondaryLoc`, `SkillsReq`, `Priority`, `StartDate`, `EndDate`) VALUES
(1, 'Town Bridge Construction', 'Construction', 'Costruct a bridge over the canal, connecting the two parts of the town.', 'England', NULL, 'Project management', 'Urgent', '2016-11-29', '2017-03-16'),
(2, 'Business Intelligence Pro', 'Administrative', 'Building upon of our existing data warehouse environment, the business intelligence project will provide timely access to data and visualiza', 'Canada', NULL, 'Leadership', 'Important', '2016-11-29', '2017-03-16'),
(3, 'Data Center Security Syst', 'Development', 'Development of an upgrade of the security system used in our data centers.', 'Australia', NULL, 'Hardworking', 'Moderate', '2016-11-29', '2017-03-16'),
(4, 'Confidential Documents De', 'Delivery', 'Ensure safety and Confidentiality of documents containing sensitive information and deliver them from UAE to England.', 'United Arab Emirates', 'England', 'Computers', 'Urgent', '2016-11-29', '2017-03-16'),
(5, 'Cancer Research', 'Research', 'Conduct investigator-initiated, hypothesis-driven research using genetics, genomics, protein science, proteomics, bioinformatics, high-perfo', 'Germany', NULL, 'Mathematics', 'Important', '2016-11-29', '2017-03-16'),
(6, 'Eiffel tower', 'Construction', 'Construction of the "Eiffel tower" in Canada.', 'Canada', NULL, 'Project management', 'Moderate', '2016-11-29', '2017-03-16');
(7, 'King County Solid Waste Division', 'Development', 'Recovering Recyclables in a Sustainably-designed Facility
Leidos designed a new, solid waste transfer station to help reduce disposal costs', 'Turkey', NULL, 'Project management', 'Moderate', '2013-12-22', '2015-02-19');
(8, 'Intelligent Energy Systems (IES)', 'Research', 'Leidos Implements its Smart Grid as a Service Solution for Western Alaska Villages Utilities
Leidos ', 'Germany', NULL, 'Mathematics', 'Urgent', '2017-05-02', '2017-07-09'); 
(9, 'Kodiak Electric Association, Inc.', 'Administrative', 'Relay Protection Study for Kodiak Electric Association
Leidos applies expertise in generation, transmission and distribution system protection and recommends equipment settings', 'United Arab Emirates', NULL, 'Confident', 'Moderate', '2012-10-08', '2012-12-31'); 
(10, 'U.S. Army Tank Automotive Research', 'Research', 'Aloha Microgrid Integrates and Manages Multiple Power Sources
Leidos supports the U.S. Army’s Tank Automotive Research, Development and Engineering Center (TARDEC) ', 'England', NULL, 'Engineering', 'Moderate', '2015-09-20', '2017-06-11'); 
(11, 'Northwest Energy Efficiency Alliance', 'Administrative', 'Leidos Helps Northwest Utilities Discover Creative Approach to Increase Energy Efficiencies
Leidos managed Northwest Energy Efficiency Alliance’s ', 'Australia', NULL, 'Languages', 'Moderate', '2014-12-29', '2016-02-16'); 
(12, 'StopWaste Partnership', 'Delivery', 'Reducing Waste, Energy, and Water Use in San Francisco’s East Bay
Leidos provides technical consulting support to StopWaste Partnership, a comprehensive business and environmental performance improvement initiative to help businesses ', 'Turkey', NULL, 'Project management', 'Urgent', '2014-10-20', '2015-02-01'); 
(13, 'Gradient Resources Inc', 'Consultancy', 'Leidos Provides Engineering, Procurement, and Construction Services for 62.5 Megawatt Geothermal Plant
Gradient Resources, a vertically integrated developer of geothermal energy projects, is executing an engineering, procurement,', 'Germany', NULL, 'Hardworking', 'Moderate', '2010-10-20', '2011-02-13'); 
(14, 'Department of Resources Recycling and Recovery', 'Research', 'Recycling goods and recovery of materials lost by pollution.', 'England', NULL, 'Project management', 'Urgent', '2011-11-11', '2014-12-12'); 
(15, 'U.S. Geothermal Inc.', 'Consultancy', 'Providing Complete DesignBuildSM Services for Geothermal Plant in San Emidio, Nev.
Repowering of an existing geothermal facility will allow U.S. Geothermal Inc. to take full advantage of the geothermal resource', 'Turkey', NULL, 'Leadership', 'Important', '2010-01-27', '2014-02-11'); 
(16, 'Port of Los Angeles and Port of Long Beach', 'Development', 'Innovative Strategy to Measure Air Pollution in San Pedro Bay
Leidos Engineering works closely with the Port of Los Angeles (POLA)', 'Canada', NULL, 'Computers', 'Moderate', '2012-11-25', '2013-01-13'); 
(17, 'Hudson Ranch Power I LLC', 'Construction', 'Geothermal Power Generating Facility
Leidos provided expert due diligence and independent engineering services ', 'Australia', NULL, 'Confident', 'Moderate', '2011-04-27', '2012-01-12'); 
(18, 'Terra Gen Sierra Holding', 'Delivery', 'DesignBuildSM Services for New Renewable Energy Generation Facility', 'Germany', NULL, 'Communication', 'Important', '2016-11-29', '2017-03-16'); 
(19, 'Naval Facilities Engineering Command Atlantic', 'Construction', 'Construction of the "Bloom Tower" in Ankara.', 'Turkey', NULL, 'Project management', 'Moderate', '2016-11-29', '2017-03-16'); 
(20, 'Brownsville Public Utilities', 'Administrative', 'Leidos Helps Texas Utility Win Grant to Improve Water and Wastewater Infrastructure', 'Germany', NULL, 'Communication', 'Moderate', '2015-10-25', '2016-02-16'); 
(21, 'Dr Pepper Snapple Group', 'Consultancy', 'Leidos Delivers Soft Drink Production and Distribution Center On-Time, Under Budget', 'Germany', NULL, 'Confident', 'Moderate', '2011-06-21', '2015-03-12'); 
(22, 'Wal-Mart Stores, Inc.', 'Construction', 'Leidos Provided Architecture and Engineering Services to Wal-Mart, Inc.', 'England', NULL, 'Confident', 'Moderate', '2014-04-21', '2011-02-12'); 
(23, 'HollyFrontier', 'Research', 'DesignBuild of Mild Gas/Oil Hydrocracker
Leidos performed the engineering, procurement, construction (EPC) DesignBuild℠ services', 'England', NULL, 'Project management', 'Urgent', '2010-17-11', '2014-12-12'); 
(24, 'General Motors', 'Consultancy', 'Enterprise-Wide, Real-Time Energy Commissioning Services', 'Turkey', NULL, 'Leadership', 'Important', '2010-01-27', '2014-02-11'); 
(25, 'Boral Bricks', 'Development', 'Leidos Delivers Turnkey Sustainable Solutions for Boral Bricks’ Manufacturing Plant', 'Canada', NULL, 'Computers', 'Moderate', '2012-11-25', '2013-01-13'); 
26, 'Magellan Midstream Partners', 'Texas Terminal Condensate Splitter
Leidos Engineering is providing engineering, procurement, and construction services', 'Australia', NULL, 'Confident', 'Moderate', '2011-04-27', '2012-01-12'); 
(27, 'Austin Energy', 'Delivery', 'Balancing Consumer Needs With Austin Energy’s Strategic Objectives', 'Germany', NULL, 'Communication', 'Important', '2016-11-29', '2017-03-16'); 
(28, 'Chamisa Energy, LLC', 'Construction', 'Analysis of Compressed Air Energy Storage for Equity Investment', 'Turkey', NULL, 'Project management', 'Moderate', '2016-11-29', '2017-03-16'); 
(29, 'Wichita Water Utilities', 'Administrative', 'Leidos Works with the City of Wichita to Save Millions on Water Treatment Plant', 'Germany', NULL, 'Communication', 'Moderate', '2015-10-25', '2016-02-16'); 
(30, 'Anheuser-Busch, Inc.', 'Consultancy', 'Providing Turnkey Installation Services for Anheuser-Busch Bottling Facilities, Under Budget', 'Germany', NULL, 'Confident', 'Moderate', '2011-06-21', '2015-03-12'); 
(31, 'Panda Power Funds', 'Construction', 'Quick Start Power Plant Project Assessment
Leidos provided independent engineering technical review services', 'England', NULL, 'Confident', 'Moderate', '2014-04-21', '2011-02-12'); 
(32, 'Cactus Drilling', 'Construction', 'Leidos Provides Engineering and Design Services for Cactus Drilling', 'United Arab Emirates', NULL, 'Project management', 'Urgent', '2016-11-29', '2017-03-16'),
(33, 'PowerShift Atlantic', 'Administrative', 'Balancing Wind Generation Across the Maritime Provinces', 'Canada', NULL, 'Leadership', 'Important', '2016-11-29', '2017-03-16'),
(34, 'Enova Energy Group', 'Development', 'Leidos Provides Financing, Construction Services for Plainfield Renewable Energy Plant', 'Australia', NULL, 'Hardworking', 'Moderate', '2016-11-29', '2017-03-16'),
(35, 'AT&T', 'Delivery', 'Leidos Helps AT&T Rebrand Its Corporate Briefing Center Through Interior Design and Advanced Communications Systems', 'United Arab Emirates', 'England', 'Computers', 'Urgent', '2016-11-29', '2017-03-16'),

(36, 'Tetra Pak Inc', 'Research', 'Liquid Food and Beverage Cartons Recycling Infrastructure Development', 'Germany', NULL, 'Mathematics', 'Important', '2016-11-29', '2017-03-16'),
(37, 'Saudi Electric Company', 'Construction', 'Leidos Assessed China’s Power Technology for Saudi Electric Company Power Plant ', 'Canada', NULL, 'Project management', 'Moderate', '2016-11-29', '2017-03-16');

(38, 'Lenolop systems Partners, L', 'Development', 'Texas Terminal Condensate Splitter
Leidos Engineering is providing engineering, procurement, and construction services', 'Turkey', NULL, 'Project management', 'Moderate', '2013-12-22', '2015-02-19');
(39, 'U.S. Army Corps of Engineers', 'Research', 'nnovative Remedial Investigation and Feasibility Study at Louisiana Artillery Range
Leidos is executing the remedial investigation ', 'Germany', NULL, 'Mathematics', 'Urgent', '2017-05-02', '2017-07-09'); 
(40, ' Alameda county Partnership', 'Development', 'Reducing Water Use in Los Angeles’s East Bay', 'Canada', NULL, 'Computers', 'Moderate', '2012-11-25', '2013-01-13'); --

CREATE TABLE `resources` (
  `ResourceID` int(10) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Type` enum('Transport','Technology','Man-power','Legal','Machinery','corporate') DEFAULT NULL,
  `Rcost` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`ResourceID`, `Name`, `Type`, `Rcost`) VALUES
(1, 'Delivery Truck', 'Transport', 200),
(2, 'Car', 'Transport', 100),
(3, 'Aircraft Mission Planner', 'Technology', 15000),
(4, 'Sensors', 'Technology', 7000),
(5, 'Patent', 'Legal', 10000),
(6, 'Permit to Work', 'Legal', 17000),
(7, 'Generator', 'Machinery', 6000),
(8, 'Transformer', 'Machinery', 9000),
(9, 'Construction Workers', 'Man-power', 1000),
(10, 'Corporate Employees', 'Man-power', 3000),
(11, 'Drivers', 'Man-power', 1000),
(12, 'Stationary', 'corporate', 900);

-- --------------------------------------------------------

--
-- Table structure for table `workingon`
--

CREATE TABLE `workingon` (
  `EmployeeID` int(10) DEFAULT NULL,
  `ProjectID` int(10) DEFAULT NULL,
  `PercentUtilisation` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workingon`
--

INSERT INTO `workingon` (`EmployeeID`, `ProjectID`, `PercentUtilisation`) VALUES
(2, 3, 10),
(2, 2, 10),
(2, 4, 80),
(3, 6, 100),
(4, 5, 60),
(4, 3, 25),
(5, 1, 30),
(5, 2, 30),
(5, 6, 30),
(6, 5, 100),
(7, 6, 100),
(8, 2, 100),
(9, 1, 50),
(9, 6, 50),
(11, 4, 80),
(12, 6, 76),
(13, 1, 50),
(13, 4, 30),
(14, 5, 70),
(14, 2, 25),
(15, 5, 79),
(16, 6, 100),
(17, 4, 90),
(18, 2, 50),
(18, 3, 50),
(19, 6, 40),
(19, 3, 40),
(20, 5, 75),
(20, 1, 25),
(21, 4, 100),
(22, 3, 100),
(23, 6, 100),
(24, 5, 100),
(25, 1, 60),
(25, 2, 35),
(26, 3, 60),
(26, 2, 15),
(26, 6, 15),
(27, 1, 90),
(28, 4, 100),
(29, 5, 95),
(30, 5, 65),
(30, 2, 30),
(NULL, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cost`
--
ALTER TABLE `cost`
  ADD KEY `cost_ibfk_1` (`ProjectID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `employees_audit`
--
ALTER TABLE `employees_audit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ProjectID`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`ResourceID`);

--
-- Indexes for table `workingon`
--
ALTER TABLE `workingon`
  ADD KEY `workingon_ibfk_1` (`EmployeeID`),
  ADD KEY `workingon_ibfk_2` (`ProjectID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmployeeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `employees_audit`
--
ALTER TABLE `employees_audit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `ProjectID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `ResourceID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cost`
--
ALTER TABLE `cost`
  ADD CONSTRAINT `cost_ibfk_1` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`) ON DELETE CASCADE;

--
-- Constraints for table `workingon`
--
ALTER TABLE `workingon`
  ADD CONSTRAINT `workingon_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`) ON DELETE CASCADE,
  ADD CONSTRAINT `workingon_ibfk_2` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
