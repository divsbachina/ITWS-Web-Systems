Part 1:

CREATE TABLE `courses` (
  `crn` int(5) NOT NULL,
  `prefix` varchar(4) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `number` smallint(4) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `section` int(2) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `students` (
  `rin` int(9) NOT NULL,
  `rcsID` char(7) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `street` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` char(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `zip` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


Part 2:

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `crn` int(11) NOT NULL,
  `rin` int(11) NOT NULL,
  `grade` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `courses` (`crn`, `prefix`, `number`, `title`, `section`, `year`) VALUES
(71399, 'CSCI', 1200, 'DataStructures', 2, 2022),
(73018, 'CSCI', 4440, 'Software Design and Documentation', 1, 2022),
(74941, 'ITWS', 1100, 'Introduction to ITWS', 2, 2022),
(75447, 'ITWS', 4130, 'Managing IT Resources', 1, 2022);

INSERT INTO `students` (`rin`, `rcsID`, `first_name`, `last_name`, `alias`, `phone`, `street`, `city`, `state`, `zip`) VALUES
(112364968, 'htoiu89', 'Chicken', 'Nugget', 'Christer', 22147483647, '8 Union Rd', 'Queens', 'NY', 11678),
(123456789, 'ba0bn94', 'Divya', 'Bachina', 'Alex', 2147483647, '67 Union Union Rd', 'Troy', 'NY', 12180),
(321459789, 'dyhiyr4', 'Di', 'Bhina', 'Dan', 2147483647, '890 Union Union Rd', 'Troy', 'NY', 12180),
(449083920, '89vjnk3', 'Divy', 'Houes', 'Chris', 2147483647, '23 Union Union Rd', 'Troy', 'NY', 12180);

INSERT INTO `grades` (`id`, `crn`, `rin`, `grade`) VALUES
(1, 71399, 661534196, 86),
(2, 71399, 661283234, 76),
(3, 71399, 661638923, 90),
(4, 73018, 661534196, 100),
(5, 73018, 661283234, 100),
(6, 73018, 661203984, 100),
(7, 74941, 661534196, 90),
(8, 74941, 661283234, 85),
(9, 75447, 661534196, 85),
(10, 75447, 661283234, 74);




In this lab, I spent a significant amount of time researching the various potential SQL commands. It took a while to get the function working and the html file only currently works for courses. If I had more time, I would've been able to create more pages for the modifications of various tables.








