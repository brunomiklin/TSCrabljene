-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 10:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tscrabljene_baza`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ime` varchar(30) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `razred` int(11) NOT NULL,
  `smjer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `admin`, `email`, `password`, `ime`, `prezime`, `razred`, `smjer`) VALUES
(1, 1, 'admin@tscrabljene', 'bc30f2fbe92bd4cdb0e40980f96134e09266666ea1f7537256e377b542387cd999f9fd65ed8b7a67d559c3785792d8d8bad8feb8f982a935fdad2b8403dd6683', 'ADMIN', '', 0, ''),
(79, 0, 'miklinbruno@gmail.com', 'bc30f2fbe92bd4cdb0e40980f96134e09266666ea1f7537256e377b542387cd999f9fd65ed8b7a67d559c3785792d8d8bad8feb8f982a935fdad2b8403dd6683', 'Bruno', 'Miklin', 4, 'RT'),
(80, 0, 'david.mezga@gmail.com', '5c47df0387193f1649f193ba5005503fa69104ef2cddd270b1e7c9715187859923bb0699d21338e1f31374aa09f7b768770f715d9de0586784eb666c3e2bf1bc', 'David', 'Mezga', 4, 'ET'),
(81, 0, 'niko.trstenjak@gmail.hr', 'a2db083d0cfe6f3e31deeb166dc515055322b1ac88103c83b636e71122e8561ae55d12cb6363a4d5b958f2f4b2a73f95bd6cd0a558fe36fc9d4dd21420937273', 'Niko', 'Trstenjak', 4, 'ST');

-- --------------------------------------------------------

--
-- Table structure for table `objave`
--

CREATE TABLE `objave` (
  `id` int(11) NOT NULL,
  `korisnik_id` int(11) NOT NULL,
  `naslov` varchar(50) NOT NULL,
  `razred` int(1) NOT NULL,
  `smjer` varchar(2) NOT NULL,
  `kontakt` varchar(25) DEFAULT NULL,
  `cijena` int(255) NOT NULL,
  `datum` datetime NOT NULL DEFAULT current_timestamp(),
  `opis` text NOT NULL,
  `slika` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `objave`
--

INSERT INTO `objave` (`id`, `korisnik_id`, `naslov`, `razred`, `smjer`, `kontakt`, `cijena`, `datum`, `opis`, `slika`) VALUES
(45, 79, 'Prodajem rabljene udžbenike - RT', 1, 'RT', '996559429', 15, '2024-04-09 17:27:45', 'Prodajem dio udžbenika iz prvog razreda smjera tehničar za računalstvo. Možete me kontaktirati na instagramu @brunomiklin ili na mailu miklinbruno@gmail.com', '1712676465_slika1.jpg'),
(46, 79, 'Prodajem udžbenike - 4. tehničar za računalstvo', 4, 'RT', '996559429', 25, '2024-04-09 17:28:46', 'Prodajem sve udžbenike smjera tehničar za računalstvo. Možete me kontaktirati na instagramu @brunomiklin ili na mailu miklinbruno@gmail.com', '1712676526_slika2.jpg'),
(47, 79, 'Prodajem rabljene udžbenike - 3.RT', 3, 'RT', '996559429', 35, '2024-04-09 17:30:23', 'Prodajem ostatke udžbenika iz 3. razreda (hrvatski, matematika, fizika i engleski). \r\nMožete me kontaktirati na instagramu @brunomiklin ili na mailu miklinbruno@gmail.com', '1712676623_slika3.jpeg'),
(48, 80, 'Prodajem udžbenike - elektrotehničar', 2, 'ET', '9111300', 50, '2024-04-09 17:43:14', 'Prodajem stare udžbenike (matematika, hrvatski, fizika). Stanje 10 /10', '1712677394_slika4.jpg'),
(49, 80, 'Prodajem rabljene udžbenike - elektrotehnika', 4, 'ET', '9111300', 55, '2024-04-09 17:44:00', 'Prodajem sve udžbenike četvrti razred elektrotehnike.', '1712677440_slika6.jpg'),
(50, 81, 'Prodajem rabljene udžbenike ', 1, 'ST', '996359419', 32, '2024-04-09 17:51:29', 'Prodajem stare udžbenike iz prvog razreda.', '1712677889_slika 16.jpg'),
(51, 81, 'Prodajem rabljene udžbenike - 4.ST', 4, 'ST', '@nikotrstenjak', 15, '2024-04-09 17:53:59', 'Prodajem udžbenike matematiku i fiziku za četvrti razred za strojare.', '1712678039_slika 15.jpg'),
(52, 81, 'Prodajem udžbenike - 3.ST', 3, 'ST', '0996359419', 35, '2024-04-09 17:54:45', 'Prodajem sve udžbenike za smjer strojarstvo treči razred.', '1712678085_slika 14.jpg'),
(54, 79, 'Prodajem rabljene - 2. računlani tehničar', 2, 'RT', '0996559429', 40, '2024-04-09 21:15:56', 'Bok ja sam Bruno i prodajem rabljene knjige. Možete me još kontaktirat na moj instagram: brunomiklin', '1712690173_slika 17.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `objave`
--
ALTER TABLE `objave`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Test` (`korisnik_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `objave`
--
ALTER TABLE `objave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `objave`
--
ALTER TABLE `objave`
  ADD CONSTRAINT `Test` FOREIGN KEY (`korisnik_id`) REFERENCES `korisnici` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
