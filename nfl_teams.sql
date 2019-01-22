-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 16, 2019 at 05:58 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petchest_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `nfl_teams`
--

CREATE TABLE `nfl_teams` (
  `id` int(11) NOT NULL,
  `city` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `logo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nfl_teams`
--

INSERT INTO `nfl_teams` (`id`, `city`, `name`, `logo`) VALUES
(1, 'Arizona', 'Cardinals', 'https://a.espncdn.com/i/teamlogos/nfl/500/ari.png'),
(2, 'Atlanta', 'Falcons', 'https://a.espncdn.com/i/teamlogos/nfl/500/atl.png'),
(3, 'Baltimore', 'Ravens', 'https://a.espncdn.com/i/teamlogos/nfl/500/bal.png'),
(4, 'Buffalo', 'Bills', 'https://cdn.freebiesupply.com/images/large/2x/buffalo-bills-logo-transparent.png'),
(5, 'Carolina', 'Panthers', 'https://a1.espncdn.com/combiner/i?img=%2Fi%2Fteamlogos%2Fnfl%2F500%2Fcar.png'),
(6, 'Chicago', 'Bears', 'https://a.espncdn.com/i/teamlogos/nfl/500/chi.png'),
(7, 'Cincinnati', 'Bengals', 'https://a.espncdn.com/combiner/i?img=%2Fi%2Fteamlogos%2Fnfl%2F500%2Fcin.png'),
(8, 'Clevland', 'Browns', 'https://a4.espncdn.com/combiner/i?img=%2Fi%2Fteamlogos%2Fnfl%2F500%2Fcle.png'),
(9, 'Dallas', 'Cowboys', 'https://a.espncdn.com/i/teamlogos/nfl/500/scoreboard/dal.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nfl_teams`
--
ALTER TABLE `nfl_teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nfl_teams`
--
ALTER TABLE `nfl_teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
