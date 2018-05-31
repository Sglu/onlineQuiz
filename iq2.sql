--
-- Database: `iq2`
--

-- --------------------------------------------------------

--
-- Table structure for table `hint`
--

CREATE TABLE `hint` (
  `level` int(11) NOT NULL,
  `hin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hint`
--

INSERT INTO `hint` (`level`, `hin`) VALUES
(21, 'FIND THE NUMBER OF SINGLE,DOUBLE,TRIPLE,QUAD AND OCTA TRIANGLES.'),
(22, 'ADD THE NUMBERS AND OBESERV THE BIGGEST SUIT'),
(23, 'TAKE PAIRS OF DOMINOES AND CALCULATE THE SUM OF THE DOTS THEY ARE DISPLAYING.'),
(24, 'USE THE PROPERTY OF SIMMILARITY OF TRIANGLES'),
(25, 'CONSIDER HORSES FROM PREVIOUS GROUPS.');

-- --------------------------------------------------------

--
-- Table structure for table `que`
--

CREATE TABLE `que` (
  `questionno` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `ans` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `minus` int(11) NOT NULL,
  `name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `que`
--

INSERT INTO `que` (`questionno`, `time`, `ans`, `marks`, `minus`, `name`) VALUES
(1, 50, 4, 3, 0, '101.png'),
(2, 50, 3, 3, 0, '102.png'),
(3, 50, 1, 3, 0, '103.png'),
(4, 50, 3, 3, 0, '104.png'),
(5, 50, 2, 3, 0, '105.png'),
(6, 80, 1, 4, 1, '106.png'),
(7, 80, 3, 4, 1, '107.png'),
(8, 80, 1, 4, 1, '108.png'),
(9, 80, 3, 4, 1, '109.png'),
(10, 80, 4, 4, 1, '110.png'),
(11, 110, 3, 4, 1, '111.png'),
(12, 110, 1, 4, 1, '112.png'),
(13, 110, 2, 4, 1, '113.png'),
(14, 110, 4, 4, 1, '114.png'),
(15, 110, 4, 4, 1, '115.png'),
(16, 140, 3, 4, 1, '116.png'),
(17, 140, 3, 4, 1, '117.png'),
(18, 140, 3, 4, 1, '118.png'),
(19, 140, 2, 4, 1, '119.png'),
(20, 140, 4, 4, 1, '120.png'),
(21, 170, 1, 8, 2, '121.png'),
(22, 170, 1, 8, 2, '122.png'),
(23, 170, 2, 8, 2, '123.png'),
(24, 170, 2, 8, 2, '124.png'),
(25, 170, 2, 8, 2, '125.png');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `questionno` int(11) NOT NULL,
  `time` int(11) NOT NULL DEFAULT '60',
  `ans` int(11) NOT NULL DEFAULT '1',
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`questionno`, `time`, `ans`, `name`) VALUES
(1, 60, 3, '77.png'),
(2, 60, 3, '144.png'),
(3, 40, 3, '120.png'),
(4, 60, 4, '4.PNG'),
(5, 40, 3, '99.png'),
(6, 60, 4, '147.png'),
(7, 60, 1, '477.png'),
(8, 60, 3, '78.png'),
(9, 30, 3, '255.png'),
(10, 40, 4, '888.png'),
(11, 60, 1, '66.png'),
(12, 60, 1, '155.png'),
(13, 60, 3, '178.png'),
(14, 60, 3, '199.png'),
(15, 60, 3, '444.PNG'),
(16, 80, 2, '999.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `marks` int(11) NOT NULL,
  `time` int(100) NOT NULL,
  `status` int(100) NOT NULL,
  `wans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `password`, `level`, `marks`, `time`, `status`, `wans`) VALUES
(1, 'TEAM A', 'ICELLA', 1, 0, 70, 0, 0),
(2, 'TEAM B', 'ICELLB', 1, 0, 70, 0, 0),
(3, 'TEAM C', 'ICELLC', 1, 0, 70, 0, 0),
(4, 'TEAM D', 'ICELLD', 1, 0, 70, 0, 0),
(5, 'TEAM E', 'ICELLE', 1, 0, 70, 0, 0),
(6, 'TEAM F', 'ICELLF', 1, 0, 70, 0, 0),
(7, 'TEAM G', 'ICELLG', 1, 0, 70, 0, 0),
(8, 'TEAM H', 'ICELLH', 1, 0, 70, 0, 0),
(9, 'TEAM I', 'ICELLI', 1, 0, 70, 0, 0),
(10, 'TEAM J', 'ICELLJ', 1, 0, 70, 0, 0),
(11, 'TEAM K', 'ICELLK', 1, 0, 70, 0, 0),
(12, 'TEAM L', 'ICELLL', 1, 0, 70, 0, 0),
(13, 'TEAM M', 'ICELLM', 1, 0, 70, 0, 0),
(14, 'TEAM N', 'ICELLN', 1, 0, 70, 0, 0),
(15, 'TEAM O', 'ICELLO', 1, 0, 70, 0, 0),
(16, 'TEAM P', 'ICELLP', 1, 0, 70, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hint`
--
ALTER TABLE `hint`
  ADD PRIMARY KEY (`level`);

--
-- Indexes for table `que`
--
ALTER TABLE `que`
  ADD PRIMARY KEY (`questionno`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`questionno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
