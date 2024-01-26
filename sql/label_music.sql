-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 26, 2024 at 12:57 PM
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
-- Table structure for table `artists_detail`
--

CREATE TABLE `artists_detail` (
  `id` int NOT NULL,
  `debut` varchar(255) DEFAULT NULL,
  `debut_album` varchar(255) DEFAULT NULL,
  `top_track` varchar(255) DEFAULT NULL,
  `album` varchar(255) DEFAULT NULL,
  `text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `var1` varchar(255) DEFAULT NULL,
  `information_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `artists_detail`
--

INSERT INTO `artists_detail` (`id`, `debut`, `debut_album`, `top_track`, `album`, `text`, `var1`, `information_id`, `created_at`, `updated_at`) VALUES
(1, '1999s', 'Sidewinders', 'M.I.A , Afterlife , Nightmare , Second Heartbeat , Unholy Confessions', 'Nightmare , Hail To The King , City Of Evil , Waking The Fallens', 'Brian mendapatkan gitar pertamanya dari nenek dan kakeknya. Salah satu lagu pertama yang ia pelajari adalah lagu Stairway to Heaven karya Led Zeppelin. Ketika Brian duduk di kelas 6, ia sudah bisa menebak chord dari sebuah lagu hanya dengan menggunakan pendengarannya. Setelah Brian diberi gitar, dia mengatakan bahwa sekolah sudah tidak ada gunanya. Nilai bagus hanya dia peroleh sampai ia duduk di kelas 4.\r\n\r\nBrian memasuki grup musik Avenged Sevenfold sebagai gitaris ketika ia berumur 18 tahun pada akhir tahun 1999. Dia juga memainkan piano pada lagu \"Beast and the Harlot\" dan \"Sidewinder\". Dia menciptakan lagu pertamanya berjudul \"So Far Away\" untuk mengenang sahabat sekaligus drummer Avenged Sevenfold, James Owen Sullivan atau lebih dikenal dengan The Rev yang meninggal pada tanggal 28 Desember 2009.\r\n\r\nSaat ini Brian menjadi Fastest Guitarist of All Time ke-3 versi Guitar World dan menjadi Gitarist terbaik dunia urutan ke-87 versi Guitar World.s', 'yuAs9ayk2q6aTdJALC6WFaqmtjj7JYC7c8AnTQSG.jpg', 43, NULL, '2024-01-26 11:51:36');

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
  `var4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `var5` text,
  `is_show` int NOT NULL DEFAULT '0',
  `type` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `title`, `text`, `var1`, `var2`, `var3`, `var4`, `var5`, `is_show`, `type`, `created_at`, `updated_at`) VALUES
(2, 'Instagram', NULL, 'fa fa-instagram', '@ganangproduct', NULL, '', NULL, 1, 'social_media', '2024-01-13 09:37:51', '2024-01-07 07:01:09'),
(3, 'Facebook', NULL, 'fa fa-facebook', 'ganangproduct', NULL, '', NULL, 1, 'social_media', '2024-01-13 09:37:56', '2024-01-07 07:13:42'),
(4, 'Whatsapp', NULL, 'fa fa-whatsapp', '085123321123', NULL, '', NULL, 1, 'social_media', '2024-01-13 09:38:12', '2024-01-07 07:32:45'),
(9, 'Linkedln', NULL, 'fa fa-linkedin', 'ganangmusic', NULL, '', NULL, 0, 'social_media', '2024-01-13 09:38:21', '2024-01-07 08:09:09'),
(33, 'about', '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A odit corporis vero praesentium natus odio aliquid iusto repellat similique, ipsum repellendus molestias ducimus obcaecati, alias fugiat facilis minus maxime sunt! Odit, similique deleniti dolore nihil reiciendis architecto explicabo soluta, odio dolorem consectetur eos expedita quisquam suscipit? Omnis perspiciatis, dolore expedita quod adipisci eveniet magnam nulla reiciendis veniam impedit cumque assumenda. Sint dicta corrupti eligendi aperiam consectetur placeat qui deleniti odio, assumenda delectus corporis alias atque rem tempora totam architecto, accusamus doloremque recusandae, minima nemo! Praesentium quasi quidem quod nulla doloremque. Ut, quia! Minus id, sapiente</p>', 'mUdsNWzZyxyc6rIDprkVEigZ8Us2pX19lQII9ej8.jpg', 'Lz5RQKnn8sSzVpvwd0t6bZe9fPb4wql1k3aKNssZ.jpg', 'FgacRbSKbnPSyIqq8wuXeSeK9X0FCNAd2VHYBZcO.jpg', '0maBUFKgqDOsiBVNHnTWEiPoxu50NIyMxx6Xp5yZ.jpg', '<p>voluptas vitae asperiores, nobis cumque ut deleniti repellat iusto omnis dicta quaerat eius, sed beatae consequuntur in deserunt! Veritatis, dicta ad repellendus dolorem maxime placeat. Commodi distinctio perspiciatis, sed, maxime fugiat architecto voluptas suscipit at ipsum tempore, repellat dignissimos quae eius doloribus non enim unde fugit rerum. Reiciendis laborum cumque, deserunt dolorem ex iure est! Facilis quaerat aperiam in atque ut numquam eius autem labore! Cum sapiente a rerum dicta facere quasi perferendis! Illum vero eveniet fugit vitae incidunt placeat consectetur aperiam voluptas ipsum nobis! Saepe voluptatem inventore, pariatur harum eveniet odio omnis a fugit dignissimos tempore vero deserunt earum molestias veniam incidunt nihil assumenda nesciunt aspernatur delectus sed sit. Sed iste quia ipsa assumenda! Ipsa cumque, et accusantium vitae excepturi perspiciatis. Consequatur voluptatum, mollitia, recusandae impedit repudiandae eius odio ab repellendus dolore provident deserunt possimus magnam vel, adipisci dolorem labore vitae hic cumque facilis? Id culpa magni iusto maxime veniam dicta recusandae magnam hic, delectus labore maiores? Distinctio, deleniti vero quibusdam maiores natus excepturi illum magnam quia animi! Exercitationem totam sequi praesentium dolorum illo! Assumenda aliquam similique optio dolorum quia totam rerum voluptatibus sequi unde deserunt tempora sed, quaerat fuga beatae nemo voluptatem illo ducimus deleniti quas facere ab magnam voluptatum! Debitis, expedita impedit.</p>', 1, 'about', '2024-01-26 12:55:21', '2024-01-07 11:25:54'),
(34, 'visi', '<p>Ini Visi</p>', NULL, NULL, NULL, '', NULL, 1, 'about', '2024-01-07 11:35:35', '2024-01-07 11:26:00'),
(35, 'misi', '<p>Ini Misi</p>', NULL, NULL, NULL, '', NULL, 1, 'about', '2024-01-07 11:35:35', '2024-01-07 11:26:05'),
(36, 'jumbotron1', '7SegslP2SetnYGFDn2QzQUd8QrmFGqMuPkJ8Q7cN.jpg', NULL, NULL, NULL, '', NULL, 1, 'home', '2024-01-13 06:57:31', '2024-01-07 12:00:44'),
(37, 'jumbotron2', 'yiskZFjEvxdkpcsyMW4fUeBKXiIWYGVjBORsxcIs.jpg', NULL, NULL, NULL, '', NULL, 1, 'home', '2024-01-13 06:57:31', '2024-01-07 12:00:54'),
(38, 'jumbotron3', '1H1ERpUyNITAifi21ZIUwEBnXpPlvniSMyHDsyrC.jpg', NULL, NULL, NULL, '', NULL, 1, 'home', '2024-01-13 06:57:31', '2024-01-07 12:01:05'),
(43, 'Synyster Gatess', 'NyhArnsVgYMseSCaAURLwYF84danI4x9tyJapwrl.jpg', '1', NULL, NULL, '', NULL, 1, 'artist', '2024-01-26 12:10:01', '2024-01-13 07:01:45'),
(44, 'Herman Li', 'jaPNY2Jt5ZltniuszlkeqKsLg7B0WP1MIGxUTGYR.jpg', '1', NULL, NULL, '', NULL, 1, 'artist', '2024-01-26 12:10:01', '2024-01-13 07:01:56'),
(45, 'Daron', '9kx16FjHrf5cGckK4N3PluHC0a5NQMXhUPxss6Yg.jpg', '1', NULL, NULL, '', NULL, 1, 'artist', '2024-01-26 12:10:01', '2024-01-13 07:02:06'),
(46, 'artist_management', '<p>Artist Management Services</p>', 'eFsCBv1Q9YEoeTgQBA7chLcklI0nFwaD7NsgOzAs.jpg', NULL, NULL, '', NULL, 1, 'services', '2024-01-13 12:20:07', '2024-01-13 07:08:50'),
(47, 'music_publishing', '<p>Music Publishing Services</p>', 'hZJhIttuVRqCsCbMFz3jQIRcPuxvUYONw35yvnts.jpg', NULL, NULL, '', NULL, 1, 'services', '2024-01-13 12:20:07', '2024-01-13 07:08:57'),
(48, 'content_provider', '<p>Content Provider Services</p>', 'enxD0aE9BcRljBKg3wbnNwfGLdonEQNr7na5IiFX.jpg', NULL, NULL, '', NULL, 1, 'services', '2024-01-13 12:20:07', '2024-01-13 07:09:16'),
(49, 'digital_distribution', '<p>Digital Distribution Services</p>', 'LFe6TEba9eKQQQnVKrCk4IYbKTnqS5HYWV29vJjt.jpg', NULL, NULL, '', NULL, 1, 'services', '2024-01-13 12:20:07', '2024-01-13 07:09:25'),
(50, 'brand_extension', '<p>Brand Extension Services</p>', 'ze4W9J0NyDs4ufJhw9we7WHdr4IHDZgqmsd1mSfB.jpg', NULL, NULL, '', NULL, 1, 'services', '2024-01-13 12:20:07', '2024-01-13 07:09:38'),
(51, 'status_clicked', '0', NULL, NULL, NULL, '', NULL, 1, 'status', '2024-01-14 02:51:19', '2024-01-14 02:51:19');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `is_send` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `full_name`, `email`, `phone`, `message`, `is_send`, `created_at`, `updated_at`) VALUES
(1, 'Reynaldi', 'reynaldihalo@gmail.com', '08124121212', 'Saya Ingin bergabung dengan label anda', 0, '2024-01-13 13:19:19', '2024-01-13 13:19:19'),
(2, 'Zidane', 'zidane@gmail.com', '08934284328', 'Halo Saya ingin bergabung dengan label music anda , saya tertarik masuk', 0, '2024-01-13 13:26:04', '2024-01-13 13:26:04'),
(4, 'Rama', 'rama@gmail.com', '08124121212', 'saya ingin bergabung dengan label music anda , saya harap saya bisa berkontribusi banyak dengan label music dan membuatnya semakin besar , besar harapan saya untuk bergabung dengan label anda , terima kasih', 0, '2024-01-13 13:42:25', '2024-01-13 13:42:25'),
(5, 'Fago', 'fago@gmail.com', '08124121212', 'saya ingin bergabung dengan label music anda , saya harap saya bisa berkontribusi banyak dengan label music dan membuatnya semakin besar , besar harapan saya untuk bergabung dengan label anda , terima kasih', 1, '2024-01-13 13:50:57', '2024-01-13 13:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `title`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Cinta Yang Sempurna - Kangen Band', 'wlbmdFixsH854R0QWiSzqXHB5lChGPdS296DvqAR.mp3', NULL, '2024-01-13 08:57:55');

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
-- Indexes for table `artists_detail`
--
ALTER TABLE `artists_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
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
-- AUTO_INCREMENT for table `artists_detail`
--
ALTER TABLE `artists_detail`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
