-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 05:20 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `detil` varchar(300) NOT NULL,
  `stok` int(100) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_brg`, `nama_brg`, `kategori`, `harga`, `detil`, `stok`, `gambar`) VALUES
(0, 'Grand Theft Auto V', 'PS4', 500000, 'Grand Theft Auto V is a 2013 action-adventure game developed by Rockstar North and published by Rockstar Games. It is the first main entry in the Grand Theft Auto series since 2008\'s Grand Theft Auto IV.', 50, 'gtavThumb.jpg'),
(1, 'SoS: Friends of Mineral Town', 'Switch', 550000, 'As a child, you spent a memorable summer on a farm in the country and experience a whole new world of excitement. Years have passed, and now the long-neglected farm that holds fond memories is yours! It is up to you to successfully rejuvenate the farm and build a life for yourself.', 30, 'fomtThumb.png'),
(2, 'NSUNS 4: Road to Boruto', 'PS4', 550000, 'In a completely New Hidden Leaf Village, enjoy the adventures of Boruto, Naruto\'s son!\r\nWhile you do your best to pass the chunnin exam, a new threat menaces the shinobi world.\r\nWill you be enough powerful to defeat it?', 40, 'naruto.jpg'),
(3, 'Call of Duty 3', 'XBOX', 200000, 'Call of Duty 3 is a 2006 first-person shooter video game developed by Treyarch and published by Activision. It is the third major installment in the Call of Duty series. It was released for PlayStation 3, Wii, Xbox 360, PlayStation 2 and Xbox.', 70, 'COD 3.jpg'),
(4, 'HM: The Lost Valley', '3DS', 150000, 'Harvest Moon: The Lost Valley is a farm simulation role-playing game developed by Tabot, Inc. for the Nintendo 3DS. It was released in North America on November 4, 2014, in Europe on June 19, 2015 and in Australia on June 20, 2015', 200, 'harvest.jpg'),
(5, 'Kingdom Hearts III', 'PS4', 700000, 'Kingdom Hearts III is a 2019 action role-playing game developed and published by Square Enix for the PlayStation 4 and Xbox One. It is the twelfth installment in the Kingdom Hearts series, and serves as a conclusion of the \"Dark Seeker saga\" plot arc beginning with the original game.', 56, 'kh3Thumb.jpg'),
(6, 'NieR: Automata', 'PS4', 350000, 'NieR: Automata tells the story of androids 2B, 9S and A2 and their battle to reclaim the machine-driven dystopia overrun by powerful machines.\r\n\r\nHumanity has been driven from the Earth by mechanical beings from another world.', 75, 'nierAThumb.jpg'),
(7, 'Pokemon Sword', 'Switch', 650000, 'Pokémon Sword is a role-playing video game developed by Game Freak and published by The Pokémon Company and Nintendo for the Nintendo Switch.', 120, 'pokemonSwThumb.jpeg'),
(8, 'Pokemon Shield', 'Switch', 650000, 'Pokémon Shield is a role-playing video game developed by Game Freak and published by The Pokémon Company and Nintendo for the Nintendo Switch.', 100, 'pokemonShThumb.jpeg'),
(9, 'TLoZ: Breath of the Wild', 'Switch', 500000, 'The Legend of Zelda: Breath of the Wild is an action-adventure game developed and published by Nintendo, released for the Nintendo Switch and Wii U consoles on March 3, 2017', 45, 'botwThumb.jpg'),
(10, 'Minecraft', 'XBOX', 250000, 'Explore infinite worlds and build everything from the simplest of homes to the grandest of castles. Play in creative mode with unlimited resources or mine deep into the world in survival mode, crafting weapons and armor to fend off dangerous mobs.', 140, 'minecraftThumb.jpg'),
(11, 'Final Fantasy XV', 'PS4', 365000, 'Final Fantasy XV follows Prince Noctis and his friends as he embarks on a journey to reclaim his kingdom that has been invaded by the empire of Niflheim. He discovers he is on a quest to combat the powers of darkness with the powers of light only the Lucian lineage of kings can wield.', 50, 'ffxvThumb.jpg'),
(12, 'MGS V: Phantom Pain', 'XBOX', 400000, 'Ushering in a new era for the METAL GEAR franchise with cutting-edge technology powered by the Fox Engine, METAL GEAR SOLID V: The Phantom Pain, will provide players a first-rate gaming experience as they are offered tactical freedom to carry out open-world missions.', 75, 'mgsvThumb.jpg'),
(13, 'Death Stranding', 'PS4', 720000, 'From legendary game creator Hideo Kojima comes an all-new, genre-defying experience. Sam Bridges must brave a world utterly transformed by the Death Stranding. Carrying the disconnected remnants of our future in his hands, he embarks on a journey to reconnect the shattered world one step at a time.', 80, 'dsThumb.jpg'),
(14, 'Fire Emblem: Three Houses', 'Switch', 620000, 'Fire Emblem: Three Houses is a tactical role-playing game, developed by Intelligent Systems and Koei Tecmo for the Nintendo Switch, and published worldwide by Nintendo on July 26, 2019. The game is an entry in the Fire Emblem series, and the first for home consoles since Fire Emblem: Radiant Dawn in', 54, 'fe3hThumb.jpg'),
(15, 'Final Fantasy VII: Remake', 'PS4', 870000, 'Final Fantasy VII Remake is an upcoming action role-playing game developed and published by Square Enix for the PlayStation 4. It is the first part of a series of multiple releases and is scheduled for 3 March 2020', 92, 'ff7rThumb.jpg'),
(16, 'Rune Factory 4', '3DS', 420000, 'Rune Factory 4 is a role-playing video game developed by Neverland Co. and published by Marvelous AQL for the Nintendo 3DS. It is the sixth game in the Rune Factory series, and the first to be released on the 3DS. It was released in Japan in July 2012, and in North America in October 2013.', 25, 'rf4Thumb.jpg'),
(17, 'Bravely Default', '3DS', 450000, 'Bravely Default is a turn-based RPG with random encounters and a battle system focused on the job system. The game uses a system of stocked points called \"BP\" (Brave Points) which characters use to gain extra turns.', 48, 'bfThumb.jpg'),
(18, 'Legends of Legacy', '3DS', 365000, 'The Legend of Legacy is a role-playing video game in which players take control of seven different characters as they explore the island of Avalon; each character has different starting statistics (stats).', 67, 'lolThumb.jpg'),
(19, 'Just Dance', 'XBOX', 280000, 'Just Dance is a rhythm game series developed and published by Ubisoft. The series was named after the Lady Gaga song of the same title. ', 14, 'justdanceThumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `e-mail` varchar(64) NOT NULL,
  `password` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `e-mail`, `password`) VALUES
('namates', 'emailtes', 'passtes'),
('Revyra Phoebe Fransiska', 'iniemail', 'a'),
('nama', 'mail', 'p'),
('Revyra Phoebe Fransiska', 'phoebe_yes@live.com', 'pass'),
('yeyeyeye', 'y', 'y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`e-mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
