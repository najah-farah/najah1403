

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ethics_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminusername` varchar(15) NOT NULL,
  `adminpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminusername`, `adminpassword`) VALUES
('admin123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `eao`
--

CREATE TABLE `eao` (
  `username` varchar(15) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eao`
--

INSERT INTO `eao` (`username`, `firstname`, `lastname`, `password`) VALUES
('Peter', 'Peter', 'Rig', 'peter123');

-- --------------------------------------------------------

--
-- Table structure for table `ethicsform`
--

CREATE TABLE `ethicsform` (
  `name` varchar(50) NOT NULL,
  `supervisor` varchar(50) NOT NULL,
  `school` varchar(100) NOT NULL,
  `studentno` varchar(15) NOT NULL,
  `program` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sdate` date NOT NULL,
  `duration` int(10) NOT NULL,
  `nhs` tinyint(1) NOT NULL,
  `human` tinyint(1) NOT NULL,
  `des` longtext NOT NULL,
  `fileupload` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ethicsform`
--

INSERT INTO `ethicsform` (`name`, `supervisor`, `school`, `studentno`, `program`, `title`, `sdate`, `duration`, `nhs`, `human`, `des`, `fileupload`) VALUES
('najah', 'mike', 'computer', '123', 'IT', '1', '0000-00-00', 12, 0, 0, ' dkjds', 0x506172617068726173696e67322e646f6378),
('farah', 'daved', 'aberdeen', '125', 'art', '1', '0000-00-00', 12, 0, 0, ' dsjkd', 0x506172617068726173696e672e646f6378),
('ali', 'peter', 'sunnybank', '987', 'engneering', '1', '0000-00-00', 13, 0, 0, ' jsajsaj', 0x506172617068726173696e672e646f6378);

-- --------------------------------------------------------

--
-- Table structure for table `experiment`
--

CREATE TABLE `experiment` (
  `experimentid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `student1` varchar(15) NOT NULL,
  `student2` varchar(15) DEFAULT NULL,
  `student3` varchar(15) DEFAULT NULL,
  `student4` varchar(15) DEFAULT NULL,
  `student5` varchar(15) DEFAULT NULL,
  `teacher` varchar(15) NOT NULL,
  `sb1` tinyint(1) NOT NULL,
  `sb2` tinyint(1) NOT NULL,
  `sb3` tinyint(1) NOT NULL,
  `sb4` tinyint(1) NOT NULL,
  `sb5` tinyint(1) NOT NULL,
  `as1` tinyint(1) NOT NULL,
  `as2` tinyint(1) NOT NULL,
  `as3` tinyint(1) NOT NULL,
  `as4` tinyint(1) NOT NULL,
  `as5` tinyint(1) NOT NULL,
  `ap1` tinyint(1) NOT NULL,
  `ap2` tinyint(1) NOT NULL,
  `ap3` tinyint(1) NOT NULL,
  `ap4` tinyint(1) NOT NULL,
  `ap5` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experiment`
--

INSERT INTO `experiment` (`experimentid`, `name`, `description`, `student1`, `student2`, `student3`, `student4`, `student5`, `teacher`, `sb1`, `sb2`, `sb3`, `sb4`, `sb5`, `as1`, `as2`, `as3`, `as4`, `as5`, `ap1`, `ap2`, `ap3`, `ap4`, `ap5`) VALUES
(1, 'Fitness', ' interview and survey', 'ali', '', '', '', '', 'Jane', 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `username` varchar(15) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `firstname`, `lastname`, `password`) VALUES
('ali', 'saad', 'Ahamad', 'ali123');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `username` varchar(15) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`username`, `firstname`, `lastname`, `password`) VALUES
('Jane', 'Jane', 'Smith', 'jane123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminusername`);

--
-- Indexes for table `experiment`
--
ALTER TABLE `experiment`
  ADD PRIMARY KEY (`experimentid`),
  ADD KEY `student1` (`student1`,`student2`,`student3`,`student4`,`student5`,`teacher`),
  ADD KEY `student1_2` (`student1`),
  ADD KEY `student1_3` (`student1`),
  ADD KEY `teacherFK` (`teacher`),
  ADD KEY `studentFK2` (`student2`),
  ADD KEY `studentFK3` (`student3`),
  ADD KEY `studentFK4` (`student4`),
  ADD KEY `studentFK5` (`student5`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `experiment`
--
ALTER TABLE `experiment`
  MODIFY `experimentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `experiment`
--
ALTER TABLE `experiment`
  ADD CONSTRAINT `studentFK1` FOREIGN KEY (`student1`) REFERENCES `student` (`username`),
  ADD CONSTRAINT `teacherFK` FOREIGN KEY (`teacher`) REFERENCES `teacher` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
