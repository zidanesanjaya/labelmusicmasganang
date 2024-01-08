-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 08, 2024 at 01:01 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `label_music`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `var1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `var2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `var3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `is_show` int NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `title`, `text`, `var1`, `var2`, `var3`, `is_show`, `type`, `created_at`, `updated_at`) VALUES
(2, 'Instagram', NULL, 'mdi mdi-instagram fa-2x', NULL, NULL, 1, 'social_media', '2024-01-07 08:12:33', '2024-01-07 07:01:09'),
(3, 'Facebook', NULL, 'mdi mdi-facebook fa-2x', NULL, NULL, 1, 'social_media', '2024-01-07 08:12:33', '2024-01-07 07:13:42'),
(4, 'Whatsapp', NULL, 'mdi mdi-whatsapp fa-2x', NULL, NULL, 1, 'social_media', '2024-01-07 08:12:33', '2024-01-07 07:32:45'),
(9, 'Linkedln', NULL, 'mdi mdi-linkedin fa-2x', NULL, NULL, 0, 'social_media', '2024-01-07 08:12:24', '2024-01-07 08:09:09'),
(25, 'Not Found', 'notfound.png', '0', NULL, NULL, 0, 'artist', '2024-01-07 13:17:34', '2024-01-07 11:10:01'),
(33, 'about', '<p>Ini About&nbsp; haha</p>', NULL, NULL, NULL, 1, 'about', '2024-01-07 11:43:29', '2024-01-07 11:25:54'),
(34, 'visi', '<p>Ini Visi</p>', NULL, NULL, NULL, 1, 'about', '2024-01-07 11:35:35', '2024-01-07 11:26:00'),
(35, 'misi', '<p>Ini Misi</p>', NULL, NULL, NULL, 1, 'about', '2024-01-07 11:35:35', '2024-01-07 11:26:05'),
(36, 'jumbotron1', 'IO0mQBuLm81DA5AEtUDg5ozwhQwhmaWtbH8IqUUr.png', NULL, NULL, NULL, 1, 'home', '2024-01-07 12:05:29', '2024-01-07 12:00:44'),
(37, 'jumbotron2', '9fUhPPAtDlBClneurELlxN2UGM4X9H9W5w7MmiuL.png', NULL, NULL, NULL, 1, 'home', '2024-01-07 12:05:29', '2024-01-07 12:00:54'),
(38, 'jumbotron3', 'rYwMhq2IR9RxiwwQdmXlyH7RSFgj6lUlN0TJBUOx.png', NULL, NULL, NULL, 1, 'home', '2024-01-07 12:05:29', '2024-01-07 12:01:05'),
(40, 'Ariel', 'CZOGDaus9cy2DZfpZSWFPr3BOnT7DxpgYDAHeuFq.jpg', '1', NULL, NULL, 1, 'artist', '2024-01-07 13:22:27', '2024-01-07 12:18:37'),
(41, 'Rossa', '2UDcIINMXTpSDTnmGMPnEXFrqXomWBbhlaW24rPw.jpg', '1', NULL, NULL, 1, 'artist', '2024-01-07 13:22:27', '2024-01-07 12:18:46'),
(42, 'Billie', '66Rr7YkOHgm1eUXN63nI0Y5fL7Zo64zTkOy2GBjI.jpg', '1', NULL, NULL, 1, 'artist', '2024-01-07 13:22:27', '2024-01-07 13:08:10'),
(44, 'artist_management', '<p>fsddsg gdfg</p>', NULL, NULL, NULL, 1, 'services', '2024-01-08 12:21:33', '2024-01-08 12:11:34'),
(45, 'music_publishing', '<p>2222</p>', NULL, NULL, NULL, 1, 'services', '2024-01-08 12:21:57', '2024-01-08 12:12:10'),
(46, 'content_provider', '<p>33333</p>', NULL, NULL, NULL, 1, 'services', '2024-01-08 12:21:57', '2024-01-08 12:12:21'),
(47, 'digital_distribution', '<p>4444</p>', NULL, NULL, NULL, 1, 'services', '2024-01-08 12:21:57', '2024-01-08 12:12:31'),
(48, 'brand_extension', '<p>5555</p>', NULL, NULL, NULL, 1, 'services', '2024-01-08 12:21:57', '2024-01-08 12:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `picture` text NOT NULL,
  `text` text NOT NULL,
  `is_show` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` text NOT NULL,
  `role` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'reynaldi1912', NULL, 'ae0b2b2d9c8c4662d42042dd3ae376b2', 'admin', '2024-01-01 02:10:58', '2024-01-01 02:10:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
