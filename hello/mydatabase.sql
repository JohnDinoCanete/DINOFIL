
'​
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"'
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
​
​
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
​
--
-- Database: `aicsstressdb`
--
​
-- --------------------------------------------------------
​
--
-- Table structure for table `tusers`
--
​
CREATE TABLE `tusers` (
  `ID` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dated_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
​
--
-- Dumping data for table `tusers`
--
​
INSERT INTO `tusers` (`ID`, `username`, `password`, `nickname`, `role`, `dated_created`) VALUES
(1, 'johndoe', '12345', 'jhonny', 'admin', '2019-10-28'),
(2, 'Quennie123', 'unidentified', 'Kyu', 'student', '2019-10-28'),
(3, 'Ben', '12345', 'Justin', 'Admin', '2019-10-28');
​
--
-- Indexes for dumped tables
--
​
--
-- Indexes for table `tusers`
--
ALTER TABLE `tusers`
  ADD PRIMARY KEY (`ID`);
​
--
-- AUTO_INCREMENT for dumped tables
--
​
--
-- AUTO_INCREMENT for table `tusers`
--
ALTER TABLE `tusers`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;
​
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;