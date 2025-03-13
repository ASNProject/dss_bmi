-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2025 at 09:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_data`
--

CREATE TABLE `activity_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bmi_category` varchar(255) NOT NULL,
  `recommendation` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_data`
--

INSERT INTO `activity_data` (`id`, `bmi_category`, `recommendation`, `created_at`, `updated_at`) VALUES
(1, 'underweight', 'PAGI HARI\r\naktifitas ringan seperti:\r\nJalan kaki atau bersepeda selama 30 menit.\r\nSIANG HARI\r\nTidur Siang selama 30 menit (Diutamakan jam 11.00-13.00\r\nSORE HARI\r\nlatihan beban seperti\r\nPush up 3 set 8 repetisi\r\nsquats 3 set 8 repetisi\r\nsetelah latihan beban lakukan peregangan selama 5-10 menit\r\nHindari aktifitas fisik yang menguras kalori terlalu banyak seperti kardio', '2025-03-12 08:07:26', '2025-03-12 08:07:26'),
(2, 'normal', 'PAGI HARI\n10 menit peregangan atau yoga (fokus pada fleksibilitas dan pernapasan). \n20–30 menit jalan cepat atau lari ringan di luar ruangan.\nSIANG HARI\nGunakan waktu istirahat untuk berjalan kaki santai selama 15–20 menit. \nJika memungkinkan, lakukan 5 menit latihan ringan seperti plank, wall-sit, atau push-up.\nSORE HARI\naktifitas utama 30-60 menit seperti kardio,latihan kekuatan, atau kombinasi\nLatihan kardio:\n1. jalan cepat/joging 15-30 menit\n2. bersepeda 15-30 menit\n3. lompat tali 10 menit\n4. jumping jacks 1 menit\n5. naik turun tangga 10-15 menit\nLatihan kekuatan\n1. push up 3 set 10 repetisi\n2. sit up 3 set 10 repetisi\n3. pull up 3 set 5 repetisi\n4. squat 3 set 15 repetisi\n5. plank dengan durasi 30-60 detik', '2025-03-12 08:09:04', '2025-03-12 08:09:04'),
(3, 'overweight', 'PAGI:\n1. Jalan kaki cepat selama 30 menit di tempat datar.\n2. Bersepeda ringan selama 20-25 menit.\n3. Jogging ringan selama 10-15 menit.\n4. Latihan aerobik ringan seperti side steps selama 20 menit.\n5.Naik turun tangga selama 10-15 menit.\nSIANG:\n1. Latihan beban ringan seperti push-up (5-10 repetisi).\n2. Squat (10-15 repetisi) atau lunges (10-15 repetisi per kaki).\n3. Lompat tali ringan selama 5 menit dengan istirahat setiap menit.\n4.Plank selama 20-30 detik (2-3 set).\n5.Stretching dinamis seperti leg swings atau arm circles (10-15 repetisi).\nSORE/MALAM:\n1. Yoga ringan untuk fleksibilitas (poses seperti Child\'s Pose, Downward Dog).\n2. Peregangan seluruh tubuh selama 15 menit.\n3. Jalan kaki santai selama 20 menit untuk relaksasi.\n4.Latihan keseimbangan seperti berdiri dengan satu kaki selama 10-15 detik.', '2025-03-12 08:10:47', '2025-03-12 08:10:47'),
(4, 'obesity', 'PAGI:\n1. Jalan santai selama 20 menit, beristirahat setiap 5 menit jika diperlukan\n2. Latihan aerobik low-impact seperti stepping selama 10-15 menit.\n3. Aktivitas seperti peregangan tubuh bagian atas dan bawah selama 10 menit.\n4. Aktivitas rumah seperti menyapu selama 10-15 menit.\n5. Bersepeda statis dengan kecepatan rendah selama 10 menit.\nSIANG:\n1. Aktivitas air seperti berenang ringan selama 15 menit.\n2. Latihan elastisitas dengan resistance band (10 repetisi per gerakan).\n3. Jalan kaki di dalam rumah selama 15 menit.\n4. Gerakan yoga sederhana selama 10 menit\nSORE/MALAM:\n1. Latihan pernapasan diafragma selama 10 menit.\n2. Meditasi mindfulness sambil duduk di kursi selama 15 menit.\n3. Peregangan punggung dan kaki dengan durasi 10 menit.\n4. jalan santai selaman 10 menit\n5. yoga selama 5-10 menit', '2025-03-12 08:13:09', '2025-03-12 08:13:09'),
(5, 'obesity2', 'PAGI:\n1. Jalan santai 10-15 menit dengan alas kaki nyaman.\n2. Latihan mobilitas sendi seperti memutar bahu, leher, dan pergelangan kaki.\n3. Berdiri sambil menggerakkan tangan dan kaki secara perlahan selama 5 menit.\n4. Aktivitas ringan seperti peregangan punggung selama 10 menit.\n5. Bersepeda statis dengan kecepatan sangat rendah selama 5-10 menit.\nSIANG:\n1. Peregangan ringan untuk punggung, lengan, dan kaki.\n2. Aktivitas seperti membereskan rumah selama 10-15 menit.\n3. Latihan duduk-berdiri dari kursi (5-10 kali).\n4. yoga selama 10 menit\nSORE/MALAM:\n1. Yoga pemula seperti pose kursi (Chair Pose).\n2. Meditasi dengan musik santai selama 15 menit.\n3. Jalan santai selama 10 menit di sekitar rumah.\n4. Peregangan kaki dan tangan untuk relaksasi.\n5. Gerakan mobilitas seperti memutar pergelangan tangan dan kaki selama 5-10 menit.', '2025-03-12 08:17:45', '2025-03-12 08:17:45');

-- --------------------------------------------------------

--
-- Table structure for table `activity_patterns`
--

CREATE TABLE `activity_patterns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `disease` varchar(255) NOT NULL,
  `activity` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_patterns`
--

INSERT INTO `activity_patterns` (`id`, `disease`, `activity`, `created_at`, `updated_at`) VALUES
(1, 'Diabetes  ', 'Latihan aerobik dan kekuatan.', NULL, NULL),
(2, 'Jantung', 'Berjalan kaki, berenang, yoga.', NULL, NULL),
(3, 'Hipertensi', 'Latihan aerobik dan yoga.', NULL, NULL),
(4, 'Ginjal', 'Aktivitas ringan, seperti berjalan.', NULL, NULL),
(5, 'Asam Urat ', 'Latihan ringan, seperti berjalan atau yoga.', NULL, NULL),
(6, 'Celiac', 'Aktivitas fisik yang menyenangkan.', NULL, NULL),
(7, 'Refluks Gastroesofagus (GERD)  ', 'Berjalan setelah makan.', NULL, NULL),
(8, 'Liver', 'Aktivitas ringan, seperti yoga.', NULL, NULL),
(9, 'Kanker', 'Latihan ringan, seperti berjalan atau yoga.', NULL, NULL),
(10, 'Parkinson', 'Latihan fisik yang teratur dan stimulasi mental. ', NULL, NULL),
(11, 'Osteoporosis', 'Latihan beban, yoga, dan aktivitas yang meningkatkan keseimbangan.', NULL, NULL),
(12, 'ASMA', 'Latihan pernapasan, yoga, dan olahraga ringan.', NULL, NULL),
(13, 'Autoimun', 'Latihan ringan, meditasi, dan yoga.', NULL, NULL),
(14, 'Kolesterol Tinggi ', 'Olahraga aerobik, seperti jogging, bersepeda, atau berenang.', NULL, NULL),
(15, 'Sindrom Metabolik ', 'Latihan aerobik dan latihan kekuatan secara teratur.', NULL, NULL),
(16, 'Migrain', 'Latihan relaksasi, yoga, dan aktivitas fisik ringan.', NULL, NULL),
(17, 'Alzheimer', 'Latihan mental, aktivitas fisik teratur, dan interaksi sosial.', NULL, NULL),
(18, 'Fibromyalgia', 'Latihan ringan, seperti berjalan, yoga, dan teknik relaksasi.', NULL, NULL),
(19, 'Diabetes Tipe 2', 'Berjalan cepat, bersepeda, atau latihan kekuatan.', NULL, NULL),
(20, 'Kardiovaskular', 'Berjalan kaki, berenang, atau yoga.', NULL, NULL),
(21, 'Tiroid (Hipotiroidisme)', 'Latihan aerobik, seperti berjalan atau bersepeda.', NULL, NULL),
(22, 'Gout', 'Latihan ringan, seperti berjalan atau yoga.', NULL, NULL),
(23, 'Paru Obstruktif Kronis (PPOK)', 'Latihan pernapasan, berjalan, dan aktivitas ringan.', NULL, NULL),
(24, 'Maag (Gastritis)', 'Jalan santai dan latihan pernapasan.', NULL, NULL),
(25, 'Stroke', 'Latihan fisik ringan, seperti berjalan atau berenang.', NULL, NULL),
(26, 'TBC (Tuberkulosis)', 'Aktivitas ringan, seperti berjalan dan latihan pernapasan.', NULL, NULL),
(27, 'Hepatitis', 'Aktivitas ringan, seperti yoga atau berjalan.', NULL, NULL),
(28, 'Cacar Air', 'Istirahat yang cukup, aktivitas ringan seperti berjalan jika memungkinkan.', NULL, NULL),
(29, 'Demam Berdarah', 'Istirahat yang cukup, hindari aktivitas berat.', NULL, NULL),
(30, 'Tipes (Typhoid)', 'Istirahat yang cukup, hindari aktivitas berat.', NULL, NULL),
(31, 'Kista Ovarium', 'Latihan ringan, seperti yoga atau berjalan.', NULL, NULL),
(32, 'Osteoporosis', 'Latihan beban, yoga, dan aktivitas yang meningkatkan keseimbangan.', NULL, NULL),
(33, 'Anemia', 'Aktivitas ringan, seperti berjalan atau yoga.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bmi_data`
--

CREATE TABLE `bmi_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `height` decimal(5,2) NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `bmi_category` varchar(255) NOT NULL,
  `bmi` decimal(5,2) NOT NULL,
  `range_category` varchar(255) NOT NULL,
  `disease_histories` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `disease` varchar(255) DEFAULT NULL,
  `eating_habits` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `sleep_patterns` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `eat_recommendation` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `sleep_recommendation` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `physical_activity` text DEFAULT NULL,
  `calorie` decimal(10,0) NOT NULL,
  `food_restriction` text NOT NULL,
  `activity_pattern` text NOT NULL,
  `eat_pattern` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bmi_data`
--

INSERT INTO `bmi_data` (`id`, `user_id`, `user_name`, `height`, `weight`, `age`, `gender`, `bmi_category`, `bmi`, `range_category`, `disease_histories`, `disease`, `eating_habits`, `sleep_patterns`, `eat_recommendation`, `sleep_recommendation`, `created_at`, `updated_at`, `physical_activity`, `calorie`, `food_restriction`, `activity_pattern`, `eat_pattern`) VALUES
(1, 1, 'Admin', '170.00', '84.00', 28, 'Laki-laki', 'Obesity', '29.07', '25 - 29.9', 'Pusing', 'Diabetes', '3 kali sehari (Sarapan, Makan Siang, Makan Malam)', '10 jam per hari', 'Sumber karbohidrat\n1.100 g nasi merah (111 kalori dan 26 g protein)\n2.100 g kentang rebus (87 kalori dan 2 g protein)\n3.100 g ubi jalar (86 kalori dan 1.6 g protein)\n4.100 g oatmeal (68 kalori dan 2,4 g protein) \n5.100 g roti gandum utuh (247 kalori dan 13 g protein)\nSumber protein\n1.100 g dada ayam tanpa kulit (165 kalori dan 31 g protein)\n2.100 g ikan salmon (206 kalori dan 22 g protein)\n3.100 g kacang kedelai (446 kalori dan 36 g protein) \n4.100 g ikan tuna (132 kalori dan 28 g protein) \n5.100 g daging sapi tanpa lemak (143 kalori dan 26 g protein) \n6.100 g tempe (193 kalori dan 19 g protein) \nSayuran\n1.100 g broccoli (34 kalori dan 2.8 g protein) \n2.100 g bayam (23 kalori dan 2.9 g protein)\nBuah buahan\n1.100 g pepaya (43 kalori dan 0,5 g protein)\n2.100 g anggur (69 kalori dan 0,7 g protein)\n3.100 g alpukat atau 1/2 buah (160 kalori dan 2 g protein)\n4.1 buah pisang (90 kalori dan 1 g protein)\n5.1 buah apel (52 kalori dan 0,3 g protein)\n6.1 buah jeruk (75 kalori dan 0,7 g protein)', 'Waktu Tidur 7 sampai 8 Jam', '2025-03-13 01:41:37', '2025-03-13 01:41:37', 'PAGI:\n1. Jalan santai selama 20 menit, beristirahat setiap 5 menit jika diperlukan\n2. Latihan aerobik low-impact seperti stepping selama 10-15 menit.\n3. Aktivitas seperti peregangan tubuh bagian atas dan bawah selama 10 menit.\n4. Aktivitas rumah seperti menyapu selama 10-15 menit.\n5. Bersepeda statis dengan kecepatan rendah selama 10 menit.\nSIANG:\n1. Aktivitas air seperti berenang ringan selama 15 menit.\n2. Latihan elastisitas dengan resistance band (10 repetisi per gerakan).\n3. Jalan kaki di dalam rumah selama 15 menit.\n4. Gerakan yoga sederhana selama 10 menit\nSORE/MALAM:\n1. Latihan pernapasan diafragma selama 10 menit.\n2. Meditasi mindfulness sambil duduk di kursi selama 15 menit.\n3. Peregangan punggung dan kaki dengan durasi 10 menit.\n4. jalan santai selaman 10 menit\n5. yoga selama 5-10 menit', '1639', 'Pantangan: Makanan tinggi gula, karbohidrat sederhana.\r\nRekomendasi: Sayuran non-starch, biji-bijian utuh, protein tanpa lemak', 'Latihan aerobik dan kekuatan.', 'Pola makan 3x sehari\r\nSarapan (235 kalori dan 11,2 g protein):\r\n1.75 g nasi putih (98 kalori dan 2,0 g protein)\r\n\r\n2.1 butir telur rebus (68 kalori dan 6,3 g protein)\r\n\r\n3.100 g sayur bayam rebus (35 kalori dan 2,9 g protein)\r\n\r\n4.air putih secukupnya\r\n\r\nCemilan pagi (52 kalori dan 0,3 g protein):\r\n1.1 buah apel sedang (52 kalori dan 0,3 g protein)\r\n\r\nMakan siang (590 kalori dan 36,8 g protein):\r\n1.75 g nasi putih (98 kalori dan 2,0 g protein)\r\n\r\n2.75 g ayam panggang (165 kalori dan 23,3 g protein)\r\n\r\n3.150 g sayur asem (80 kalori dan 2,0 g protein)\r\n\r\n4.50 g tempe goreng (100 kalori dan 9,5 g protein)\r\n\r\n5.air putih secukupnya\r\n\r\nCemilan sore (90 kalori dan 1,1 g protein):\r\n1.1 buah pisang sedang (90 kalori dan 1,1 g protein)\r\n\r\nMakan malam (465 kalori dan 21,6 g protein):\r\n1.75 g nasi putih (98 kalori dan 2,0 g protein)\r\n\r\n2.75 g ikan bakar (123 kalori dan 16,5 g protein)\r\n\r\n3.100 g sayur tumis brokoli (50 kalori dan 2,8 g protein)\r\n\r\n4.50 g pepaya (22 kalori dan 0,2 g protein)\r\n\r\n5.air putih secukupnya\r\n\r\nCemilan malam (60 kalori dan 3,5 g protein):\r\n1.100 g yogurt rendah lemak (60 kalori dan 3,5 g protein)\r\n\r\nTotal kalori dan protein = 1504 kalori & 74,4 g protein\r\nHindari makanan yang mempunyai pemanis buatan dan juga pengawet\r\n'),
(2, 1, 'Admin', '170.00', '80.00', 28, 'Laki-laki', 'Obesity', '27.68', '25 - 29.9', NULL, 'Diabetes', '3 kali sehari (Sarapan, Makan Siang, Makan Malam)', '10 jam per hari', 'Sumber karbohidrat\n1.100 g nasi merah (111 kalori dan 26 g protein)\n2.100 g kentang rebus (87 kalori dan 2 g protein)\n3.100 g ubi jalar (86 kalori dan 1.6 g protein)\n4.100 g oatmeal (68 kalori dan 2,4 g protein) \n5.100 g roti gandum utuh (247 kalori dan 13 g protein)\nSumber protein\n1.100 g dada ayam tanpa kulit (165 kalori dan 31 g protein)\n2.100 g ikan salmon (206 kalori dan 22 g protein)\n3.100 g kacang kedelai (446 kalori dan 36 g protein) \n4.100 g ikan tuna (132 kalori dan 28 g protein) \n5.100 g daging sapi tanpa lemak (143 kalori dan 26 g protein) \n6.100 g tempe (193 kalori dan 19 g protein) \nSayuran\n1.100 g broccoli (34 kalori dan 2.8 g protein) \n2.100 g bayam (23 kalori dan 2.9 g protein)\nBuah buahan\n1.100 g pepaya (43 kalori dan 0,5 g protein)\n2.100 g anggur (69 kalori dan 0,7 g protein)\n3.100 g alpukat atau 1/2 buah (160 kalori dan 2 g protein)\n4.1 buah pisang (90 kalori dan 1 g protein)\n5.1 buah apel (52 kalori dan 0,3 g protein)\n6.1 buah jeruk (75 kalori dan 0,7 g protein)', 'Waktu Tidur 7 sampai 8 Jam', '2025-03-13 01:42:17', '2025-03-13 01:42:17', 'PAGI:\n1. Jalan santai selama 20 menit, beristirahat setiap 5 menit jika diperlukan\n2. Latihan aerobik low-impact seperti stepping selama 10-15 menit.\n3. Aktivitas seperti peregangan tubuh bagian atas dan bawah selama 10 menit.\n4. Aktivitas rumah seperti menyapu selama 10-15 menit.\n5. Bersepeda statis dengan kecepatan rendah selama 10 menit.\nSIANG:\n1. Aktivitas air seperti berenang ringan selama 15 menit.\n2. Latihan elastisitas dengan resistance band (10 repetisi per gerakan).\n3. Jalan kaki di dalam rumah selama 15 menit.\n4. Gerakan yoga sederhana selama 10 menit\nSORE/MALAM:\n1. Latihan pernapasan diafragma selama 10 menit.\n2. Meditasi mindfulness sambil duduk di kursi selama 15 menit.\n3. Peregangan punggung dan kaki dengan durasi 10 menit.\n4. jalan santai selaman 10 menit\n5. yoga selama 5-10 menit', '1567', 'Pantangan: Makanan tinggi gula, karbohidrat sederhana.\r\nRekomendasi: Sayuran non-starch, biji-bijian utuh, protein tanpa lemak', 'Latihan aerobik dan kekuatan.', 'Pola makan 3x sehari\r\nSarapan (235 kalori dan 11,2 g protein):\r\n1.75 g nasi putih (98 kalori dan 2,0 g protein)\r\n\r\n2.1 butir telur rebus (68 kalori dan 6,3 g protein)\r\n\r\n3.100 g sayur bayam rebus (35 kalori dan 2,9 g protein)\r\n\r\n4.air putih secukupnya\r\n\r\nCemilan pagi (52 kalori dan 0,3 g protein):\r\n1.1 buah apel sedang (52 kalori dan 0,3 g protein)\r\n\r\nMakan siang (590 kalori dan 36,8 g protein):\r\n1.75 g nasi putih (98 kalori dan 2,0 g protein)\r\n\r\n2.75 g ayam panggang (165 kalori dan 23,3 g protein)\r\n\r\n3.150 g sayur asem (80 kalori dan 2,0 g protein)\r\n\r\n4.50 g tempe goreng (100 kalori dan 9,5 g protein)\r\n\r\n5.air putih secukupnya\r\n\r\nCemilan sore (90 kalori dan 1,1 g protein):\r\n1.1 buah pisang sedang (90 kalori dan 1,1 g protein)\r\n\r\nMakan malam (465 kalori dan 21,6 g protein):\r\n1.75 g nasi putih (98 kalori dan 2,0 g protein)\r\n\r\n2.75 g ikan bakar (123 kalori dan 16,5 g protein)\r\n\r\n3.100 g sayur tumis brokoli (50 kalori dan 2,8 g protein)\r\n\r\n4.50 g pepaya (22 kalori dan 0,2 g protein)\r\n\r\n5.air putih secukupnya\r\n\r\nCemilan malam (60 kalori dan 3,5 g protein):\r\n1.100 g yogurt rendah lemak (60 kalori dan 3,5 g protein)\r\n\r\nTotal kalori dan protein = 1504 kalori & 74,4 g protein\r\nHindari makanan yang mempunyai pemanis buatan dan juga pengawet\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `disease_histories`
--

CREATE TABLE `disease_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `disease` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disease_histories`
--

INSERT INTO `disease_histories` (`id`, `disease`, `created_at`, `updated_at`) VALUES
(1, 'Diabetes', '2025-03-12 06:17:33', '2025-03-12 06:17:33'),
(2, 'Jantung', '2025-03-12 06:17:41', '2025-03-12 06:17:41'),
(3, 'Hipertensi', '2025-03-12 06:17:47', '2025-03-12 06:17:47'),
(4, 'Ginjal', '2025-03-12 06:17:57', '2025-03-12 06:17:57'),
(5, 'Asam Urat', '2025-03-12 06:18:07', '2025-03-12 06:18:07'),
(6, 'Celiac', '2025-03-12 06:18:20', '2025-03-12 06:18:20'),
(7, 'Refluks Gastroesofagus (GERD)', '2025-03-12 06:18:34', '2025-03-12 06:18:34'),
(8, 'Liver', '2025-03-12 06:18:41', '2025-03-12 06:18:41'),
(9, 'Kanker', '2025-03-12 06:18:46', '2025-03-12 06:18:46'),
(10, 'Parkinson', '2025-03-12 06:18:53', '2025-03-12 06:18:53'),
(11, 'Osteoporosis', '2025-03-12 06:19:05', '2025-03-12 06:19:05'),
(12, 'ASMA', '2025-03-12 06:19:17', '2025-03-12 06:19:17'),
(13, 'Autoimun', '2025-03-12 06:19:31', '2025-03-12 06:19:31'),
(14, 'Kolesterol Tinggi', '2025-03-12 06:19:38', '2025-03-12 06:19:38'),
(15, 'Sindrom Metabolik', '2025-03-12 06:19:48', '2025-03-12 06:19:48'),
(16, 'Migrain', '2025-03-12 06:19:57', '2025-03-12 06:19:57'),
(17, 'Alzheimer', '2025-03-12 06:20:14', '2025-03-12 06:20:14'),
(18, 'Fibromyalgia', '2025-03-12 06:20:25', '2025-03-12 06:20:25'),
(19, 'Diabetes Tipe 2', '2025-03-12 06:20:34', '2025-03-12 06:20:34'),
(20, 'Tiroid (Hipotiroidisme)', '2025-03-12 06:20:41', '2025-03-12 06:20:41'),
(21, 'Gout', '2025-03-12 06:20:49', '2025-03-12 06:20:49'),
(22, 'Kardiovaskular', '2025-03-12 06:21:00', '2025-03-12 06:21:00'),
(23, 'Paru Obstruktif Kronis (PPOK)', '2025-03-12 06:21:08', '2025-03-12 06:21:08'),
(24, 'Maag (Gastritis)', '2025-03-12 06:21:15', '2025-03-12 06:21:15'),
(25, 'Stroke', '2025-03-12 06:21:24', '2025-03-12 06:21:24'),
(26, 'TBC (Tuberkulosis)', '2025-03-12 06:21:31', '2025-03-12 06:21:31'),
(27, 'Hepatitis', '2025-03-12 06:21:40', '2025-03-12 06:21:40'),
(28, 'Cacar Air', '2025-03-12 06:21:47', '2025-03-12 06:21:47'),
(29, 'Demam Berdarah', '2025-03-12 06:24:27', '2025-03-12 06:24:27'),
(30, 'Tipes (Typhoid)', '2025-03-12 06:24:36', '2025-03-12 06:24:36'),
(31, 'Kista Ovarium', '2025-03-12 06:24:44', '2025-03-12 06:24:44'),
(32, 'Osteoporosis', '2025-03-12 06:24:51', '2025-03-12 06:24:51'),
(33, 'Anemia', '2025-03-12 06:24:57', '2025-03-12 06:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `eating_habits`
--

CREATE TABLE `eating_habits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `eating_habit` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eating_habits`
--

INSERT INTO `eating_habits` (`id`, `eating_habit`, `created_at`, `updated_at`) VALUES
(1, '3 kali sehari (Sarapan, Makan Siang, Makan Malam)', '2025-03-12 06:41:01', '2025-03-12 06:41:01'),
(2, '5-6 kali sehari (3 kali makan utama, 2-3 kali camilan ringan)', '2025-03-12 06:41:15', '2025-03-12 06:41:15'),
(3, 'Hanya makan satu kali per hari (makanan besar, biasanya di malam hari)', '2025-03-12 06:41:25', '2025-03-12 06:41:25'),
(4, 'Makan tidak terjadwal, bergantung pada rasa lapar', '2025-03-12 06:41:34', '2025-03-12 06:41:34'),
(5, 'Makan 4-5 kali sehari dengan porsi kecil', '2025-03-12 06:41:44', '2025-03-12 06:41:44');

-- --------------------------------------------------------

--
-- Table structure for table `eat_patterns`
--

CREATE TABLE `eat_patterns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bmi_category` varchar(255) NOT NULL,
  `recommendation` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eat_patterns`
--

INSERT INTO `eat_patterns` (`id`, `bmi_category`, `recommendation`, `created_at`, `updated_at`) VALUES
(1, 'underweight', 'Pola makan  3x sehari \r\nSarapan (785 kalori dan 43,7 g protein):\r\n1.2,5 centong nasi (325 kalori dan 6,7 g protein)\r\n\r\n2.100 g tempe goreng (200 kalori dan 19 g protein)\r\n\r\n3.2 butir telur (140 kalori dan 12 g protein)\r\n\r\n4.200 ml susu full cream (120 kalori dan 6 g protein)\r\n\r\n5.tambahkan sayuran\r\n\r\nMakan siang (778 kalori dan 53,7 g protein):\r\n1.2,5 centong nasi (325 kalori dan 6,7 g protein)\r\n\r\n2.100 g dada ayam panggang (165 kalori dan 31 g protein)\r\n\r\n3.100 g kacang merah (127 kalori dan 9 g protein)\r\n\r\n4.1 butir telur goreng (71 kalori dan 6,2 g protein)\r\n\r\n5.1 buah pisang berukuran sedang (90 kalori dan 1 g protein)\r\n\r\nMakan malam (952 kalori dan 41,7 g protein):\r\n1.2,5 centong nasi(325 kalori dan 6,7 g protein)\r\n\r\n2.100 g ikan goreng (150 kalori dan 23 g protein)\r\n\r\n3.100 g tahu goreng (117 kalori dan 8 g protein)\r\n\r\n4.1 buah alpuka( 360 kalori 4 g protein)\r\n\r\nTotal kalori dan protein = 2515 kalori & 139,1 g protein\r\nTambahkan cemilan di sela sela jam makan seperti buah buahan kacang kacangan dan roti untuk menambah kalori\r\n', NULL, NULL),
(2, 'normal', 'Pola makan 3x sehari \r\nSarapan ( 520 kalori dan 21,7 g protein):\r\n1.2 centong nasi (260 kalori dan 5,2 g protein)\r\n\r\n2.1 butir telur (70 kalori dan 6 g protein)\r\n\r\n3.50 g tempe goreng (100 kalori dan 9,5 g protein)\r\n\r\n4.1 buah pisang (90 kalori dan 1 g protein\r\n\r\n5.air putih secukupnya\r\n\r\nMakan siang (745-775 kalori dan 51,2 g protein):\r\n1.2 centong nasi (260 kalori dan 5,2 g protein)\r\n\r\n2.1 potong ayam goreng (200 kalori dan 40 g protein)\r\n\r\n3.1 butir telur goreng (85 kalori dan 6 g protein)\r\n\r\n4.tambahkan sayur pada hidangan (20-50 kalori)\r\n\r\n5.1/2 buah alpukat (180 kalori dan 2 g protein)\r\n\r\n6.air putih secukupnya\r\n\r\nMakan malam (550 kalori dan 21,2 g protein):\r\n1.2 centong nasi (260 kalori dan 5,2 g protein)\r\n\r\n2.1 ekor ikan goreng/85 g (200 kalori dan 15 g protein)\r\n\r\n3.1 buah pisang (90 kalori dan 1 g protein)\r\n\r\n4.air putih secukupnya\r\n\r\nTotal kalori dan protein = 1815-1845 kalori & 96,1 g protein\r\nTambahkan cemilan cemilan di sela sela jam makan agar mendapatkan asupan kalori dan protein tambahan\r\nhindari makanan yang memiliki pengawet\r\n', NULL, NULL),
(3, 'overweight', 'Pola makan 3x sehari disertai dengan snack\r\nSarapan (475 kalori dan 12,4 g protein):\r\n1.100 g nasi putih (130 kalori dan 2,7 g protein)\r\n\r\n2.1 butir telur dadar (90 kalori dan 6,3 g protein)\r\n\r\n3.100 g sayur bayam rebus (35 kalori dan 2,9 g protein)\r\n\r\n4.100 g buah pepaya (43 kalori dan 0,5 g protein)\r\n\r\n5.air putih secukupnya\r\n\r\nSnack pagi (90 kalori dan 1,1 g protein):\r\n1.1 buah pisang kecil (90 kalori dan 1,1 g protein)\r\n\r\nMakan siang (555 kalori dan 42,3 g protein):\r\n1.1/2 centong nasi putih (65 kalori dan 1,8 g protein)\r\n\r\n2.100 g ayam bakar (200 kalori dan 31 g protein)\r\n\r\n3.50 g tempe goreng (100 kalori dan 9,5 g protein)\r\n\r\n4.air putih secukupnya\r\n\r\nSnack sore (52 kalori dan 0,3 g protein):\r\n1.1 buah apel kecil (52 kalori dan 0,3 g protein)\r\n\r\nMakan malam (560 kalori dan 26,7 g protein):\r\n1.100 g nasi putih (130 kalori dan 2,7 g protein)\r\n\r\n2.100 g ikan bakar (200 kalori dan 22 g protein)\r\n\r\n3.200 g sup sayur (80 kalori dan 2 g protein)\r\n\r\n4.air putih secukupnya\r\n\r\nTotal kalori dan protein = 1732 kalori & 82,8\r\nHindari makanan ultra proses food\r\n', NULL, NULL),
(4, 'obesity', 'Pola makan 3x sehari\r\nSarapan (235 kalori dan 11,2 g protein):\r\n1.75 g nasi putih (98 kalori dan 2,0 g protein)\r\n\r\n2.1 butir telur rebus (68 kalori dan 6,3 g protein)\r\n\r\n3.100 g sayur bayam rebus (35 kalori dan 2,9 g protein)\r\n\r\n4.air putih secukupnya\r\n\r\nCemilan pagi (52 kalori dan 0,3 g protein):\r\n1.1 buah apel sedang (52 kalori dan 0,3 g protein)\r\n\r\nMakan siang (590 kalori dan 36,8 g protein):\r\n1.75 g nasi putih (98 kalori dan 2,0 g protein)\r\n\r\n2.75 g ayam panggang (165 kalori dan 23,3 g protein)\r\n\r\n3.150 g sayur asem (80 kalori dan 2,0 g protein)\r\n\r\n4.50 g tempe goreng (100 kalori dan 9,5 g protein)\r\n\r\n5.air putih secukupnya\r\n\r\nCemilan sore (90 kalori dan 1,1 g protein):\r\n1.1 buah pisang sedang (90 kalori dan 1,1 g protein)\r\n\r\nMakan malam (465 kalori dan 21,6 g protein):\r\n1.75 g nasi putih (98 kalori dan 2,0 g protein)\r\n\r\n2.75 g ikan bakar (123 kalori dan 16,5 g protein)\r\n\r\n3.100 g sayur tumis brokoli (50 kalori dan 2,8 g protein)\r\n\r\n4.50 g pepaya (22 kalori dan 0,2 g protein)\r\n\r\n5.air putih secukupnya\r\n\r\nCemilan malam (60 kalori dan 3,5 g protein):\r\n1.100 g yogurt rendah lemak (60 kalori dan 3,5 g protein)\r\n\r\nTotal kalori dan protein = 1504 kalori & 74,4 g protein\r\nHindari makanan yang mempunyai pemanis buatan dan juga pengawet\r\n', NULL, NULL),
(5, 'obesity2', 'Pola makan 3x sehari\r\nSarapan (200 kalori dan 10,55 g protein):\r\n1.50 g nasi putih (85 kalori dan 1,35 g protein)\r\n\r\n2.1 butir telur rebus (68 kalori dan 6,3 g protein)\r\n\r\n3.100 g sayur tumis bayam (47 kalori dan 2,9 g protein)\r\n\r\n4.air putih secukupnya\r\n\r\nCemilan pagi (45 kalori dan 0,9 g protein):\r\n1.1 buah jeruk sedang (45 kalori dan 0,9 g protein)\r\n\r\nMakan siang (600 kalori dan 46,35 g protein):\r\n1.50 g nasi putih (85 kalori dan 1,35 g protein)\r\n\r\n2.100 g ayam goreng (200 kalori dan 31 g protein)\r\n\r\n3.150 g sayur bening bayam dan jagung (50 kalori dan 4,5 g protein)\r\n\r\n4.50 g tahu goreng (120 kalori dan 9,5 g protein)\r\n\r\n5.air putih secukupnya\r\n\r\nCemilan sore (39 kalori dan 0,5 g protein):\r\n1.100 g buah pepaya (39 kalori dan 0,5 g protein)\r\n\r\nMakan malam (430 kalori dan 26,65 g protein):\r\n1.50 g nasi putih (85 kalori dan 1,35 g protein)\r\n\r\n2.100 g ikan goreng nila (210 kalori dan 22 g protein)\r\n\r\n3.100 g tumis kangkung (105 kalori dan 3 g protein)\r\n\r\n4.air putih secukupnya\r\n\r\nCemilan malam (60 kalori dan 3,5 g protein):\r\n1.100 g yogurt rendah lemak (60 kalori dan 3,5 g protein)\r\n\r\nTotal kalori dan protein = 1.374 kalori & 88,45 g protein\r\nHindari makanan ultra prosesfood dan juga yang memakai pemans buatan\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `eat_recomendations`
--

CREATE TABLE `eat_recomendations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bmi_category` varchar(255) NOT NULL,
  `recommendation` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eat_recomendations`
--

INSERT INTO `eat_recomendations` (`id`, `bmi_category`, `recommendation`, `created_at`, `updated_at`) VALUES
(1, 'underweight', 'Sumber karbohidrat\n1.satu centong nasi (130 kalori dan 2,7 g protein)\n2.satu centong nasi merah (112 kalori dan 2,6 g protein)\n3.satu potong roti gandum (100 kalori dan  4 g protein)\n4.100 g pasta/indomie (131 kalori dan 5 g protein)\n5.40 g oatmeal (150 kalori dan 5 g protein)\n6.satu buah kentang/100 g (90 kalori dan 3 g protein)\nSumber protein\n1.100 g dada ayam tanpa kulit (165 kalori dan 31 g protein)\n2.1 butir telur ayam (70 kalori dan 6 g protein)\n3.100 g daging sapi tanpa lemak (250 kalori dan 26 g protein)\n4.100 g tahu goreng (117 kalori dan 8 g protein)\n5.100 g tempe goreng (200 kalori dan 19 g protein)\n6.100 g kacang merah (127 kalori dan 9 g protein)\n7.100 g ikan (100-180 kalori dan 20-26 g protein)\n8.200 ml susu sapi murni (130 kalori dan 7 g protein)\nBuah buahan\n1.100 g pepaya (43 kalori dan 0,5 g protein)\n2.100 g anggur (69 kalori dan 0,7 g protein)\n3.100 g alpukat atau 1/2 buah (160 kalori dan 2 g protein)\n4.1 buah pisang (90 kalori dan 1 g protein)\n5.1 buah apel (52 kalori dan 0,3 g protein)\ndan tambahkan sayuran dalam hidangan', '2025-03-12 07:52:35', '2025-03-12 07:52:35'),
(2, 'normal', 'Sumber karbohidrat\n1.satu centong nasi (130 kalori dan 2,7 g protein)\n2.satu centong nasi merah (112 kalori dan 2,6 g protein)\n3.satu potong roti gandum (100 kalori dan  4 g protein)\n4.100 g pasta/indomie (131 kalori dan 5 g protein)\n5.40 g oatmeal (150 kalori dan 5 g protein)\n6.satu buah kentang/100 g (90 kalori dan 3 g protein)\nSumber protein\n1.100 g dada ayam tanpa kulit (165 kalori dan 31 g protein)\n2.1 butir telur ayam (70 kalori dan 6 g protein)\n3.100 g daging sapi tanpa lemak (250 kalori dan 26 g protein)\n4.100 g tahu goreng (117 kalori dan 8 g protein)\n5.100 g tempe goreng (200 kalori dan 19 g protein)\n6.100 g kacang merah (127 kalori dan 9 g protein)\n7.100 g ikan (100-180 kalori dan 20-26 g protein)\n8.200 ml susu sapi murni (130 kalori dan 7 g protein)\nBuah buahan\n1.100 g pepaya (43 kalori dan 0,5 g protein)\n2.100 g anggur (69 kalori dan 0,7 g protein)\n3.100 g alpukat atau 1/2 buah (160 kalori dan 2 g protein)\n4.1 buah pisang (90 kalori dan 1 g protein)\n5.1 buah apel (52 kalori dan 0,3 g protein)\ndan tambahkan sayuran dalam hidangan', '2025-03-12 07:55:37', '2025-03-12 07:55:37'),
(3, 'overweight', 'Sumber karbohidrat\r\n1.satu centong nasi (130 kalori dan 2,7 g protein)\r\n2.satu centong nasi merah (112 kalori dan 2,6 g protein)\r\n3.satu potong roti gandum (100 kalori dan  4 g protein)\r\n4.100 g pasta/indomie (131 kalori dan 5 g protein)\r\n5.40 g oatmeal (150 kalori dan 5 g protein)\r\n6.satu buah kentang/100 g (90 kalori dan 3 g protein)\r\nSumber protein\r\n1.100 g dada ayam tanpa kulit (165 kalori dan 31 g protein)\r\n2.1 butir telur ayam (70 kalori dan 6 g protein)\r\n3.100 g daging sapi tanpa lemak (250 kalori dan 26 g protein)\r\n4.100 g tahu goreng (117 kalori dan 8 g protein)\r\n5.100 g tempe goreng (200 kalori dan 19 g protein)\r\n6.100 g kacang merah (127 kalori dan 9 g protein)\r\n7.100 g ikan (100-180 kalori dan 20-26 g protein)\r\n8.200 ml susu sapi murni (130 kalori dan 7 g protein)\r\n9.1 ekor sedang ikan kembung panggang 90 g 189 (kalori dan 21 g protein\r\nBuah buahan\r\n1.100 g pepaya (43 kalori dan 0,5 g protein)\r\n2.100 g anggur (69 kalori dan 0,7 g protein)\r\n3.100 g alpukat atau 1/2 buah (160 kalori dan 2 g protein)\r\n4.1 buah pisang (90 kalori dan 1 g protein)\r\n5.1 buah apel (52 kalori dan 0,3 g protein)\r\n6.1 buah jeruk (75 kalori dan 0,7 g protein)\r\ndan tambahkan sayuran dalam hidangan', '2025-03-12 07:57:16', '2025-03-12 07:57:16'),
(4, 'obesity', 'Sumber karbohidrat\n1.100 g nasi merah (111 kalori dan 26 g protein)\n2.100 g kentang rebus (87 kalori dan 2 g protein)\n3.100 g ubi jalar (86 kalori dan 1.6 g protein)\n4.100 g oatmeal (68 kalori dan 2,4 g protein) \n5.100 g roti gandum utuh (247 kalori dan 13 g protein)\nSumber protein\n1.100 g dada ayam tanpa kulit (165 kalori dan 31 g protein)\n2.100 g ikan salmon (206 kalori dan 22 g protein)\n3.100 g kacang kedelai (446 kalori dan 36 g protein) \n4.100 g ikan tuna (132 kalori dan 28 g protein) \n5.100 g daging sapi tanpa lemak (143 kalori dan 26 g protein) \n6.100 g tempe (193 kalori dan 19 g protein) \nSayuran\n1.100 g broccoli (34 kalori dan 2.8 g protein) \n2.100 g bayam (23 kalori dan 2.9 g protein)\nBuah buahan\n1.100 g pepaya (43 kalori dan 0,5 g protein)\n2.100 g anggur (69 kalori dan 0,7 g protein)\n3.100 g alpukat atau 1/2 buah (160 kalori dan 2 g protein)\n4.1 buah pisang (90 kalori dan 1 g protein)\n5.1 buah apel (52 kalori dan 0,3 g protein)\n6.1 buah jeruk (75 kalori dan 0,7 g protein)', '2025-03-12 07:59:03', '2025-03-12 07:59:03'),
(5, 'obesity2', 'Sumber karbohidrat\n100 g beras merah (111 kalori dan 2.6 g protein)\n100 g ubi jalar (86 kalori dan 1.6 g protein)\n100 g singkong rebus (112 kalori dan 1.2 g protein) \n100 g jagung manis (86 kalori dan 3.2 g protein) \n100 g oatmeal (68 kalori dan 2.4 g protein)\nSumber protein\n100 g tahu (76 kalori dan 8 g protein)\n100 g dada ayam tanpa kulit (165 kalori dan 31 g protein)\n100 g tempe (193 kalori dan 18.5 g protein) \n100 g ikan kembung (103 kalori dan 22 g protein) \n100 g telur rebus (155 kalori dan 12.6 g protein)\nLauk rendah lemak\n100 g pepes ikan (124 kalori dan 20.3 g protein) \n100 g ayam bumbu kuning (tanpa kulit) (165 kalori dan 25 g protein) \n100 g sayur asem (54 kalori)\nSayuran\n100 g bayam (23 kalori dan 2.9 g protein)\n100 g brokoli (34 kalori dan 2.8 g protein)\n100 g kangkung (19 kalori dan 3 g protein) \n100 g daun singkong (38 kalori dan 6.8 g protein) \n100 g kacang panjang (47 kalori dan 2.8 g protein)\nBuah buahan\n100 g pepaya (43 kalori) \n100 g jambu biji (49 kalori) \n100 g semangka (30 kalori)\nHindari makanan berpengawet dan tinggi lemak', '2025-03-12 08:01:14', '2025-03-12 08:01:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_restrictions`
--

CREATE TABLE `food_restrictions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `disease` varchar(255) NOT NULL,
  `recommendation` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_restrictions`
--

INSERT INTO `food_restrictions` (`id`, `disease`, `recommendation`, `created_at`, `updated_at`) VALUES
(1, 'Diabetes', 'Pantangan: Makanan tinggi gula, karbohidrat sederhana.\r\nRekomendasi: Sayuran non-starch, biji-bijian utuh, protein tanpa lemak', NULL, NULL),
(2, 'Jantung', 'Pantangan    : Lemak jenuh, makanan tinggi kolesterol.\r\nRekomendasi    : Ikan berlemak, kacang-kacangan, buah-buahan, sayuran.\r\n', NULL, NULL),
(3, 'Hipertensi', 'Pantangan    : Garam berlebih, alkohol.\r\nRekomendasi    : Sayuran segar, buah-buahan, makanan rendah sodium.\r\n', NULL, NULL),
(4, 'Ginjal', 'Pantangan    : Protein berlebih, makanan tinggi kalium.\r\nRekomendasi    : Sayuran rendah kalium, protein moderat, karbohidrat kompleks.\r\n', NULL, NULL),
(5, 'Asam Urat  ', 'Pantangan    : Makanan tinggi purin.\r\nRekomendasi    : Buah ceri, sayuran, air yang cukup.\r\n', NULL, NULL),
(6, 'Celiac  ', 'Pantangan    : Gluten.\r\nRekomendasi    : Makanan bebas gluten, sayuran, buah-buahan.\r\n', NULL, NULL),
(7, 'Refluks Gastroesofagus (GERD)  ', 'Pantangan    : Makanan pedas, asam, berlemak.\r\nRekomendasi    : Makanan rendah lemak, oatmeal, pisang.\r\n', NULL, NULL),
(8, 'Liver  ', 'Pantangan    : Alkohol, makanan berlemak.\r\nRekomendasi    : Sayuran hijau, buah-buahan, protein rendah lemak.\r\n', NULL, NULL),
(9, 'Kanker  ', 'Pantangan    : Makanan olahan, tinggi gula, lemak trans.\r\nRekomendasi    : Sayuran cruciferous, buah-buahan, biji-bijian.\r\n', NULL, NULL),
(10, 'Parkinson  ', 'Pantangan    : Makanan tinggi lemak jenuh dan gula.\r\nRekomendasi    : Buah-buahan, sayuran.', NULL, NULL),
(11, 'Osteoporosis  ', 'Pantangan    : Makanan tinggi garam, kafein, dan alkohol.\r\nRekomendasi    : Makanan kaya kalsium (susu, yogurt), vitamin D (ikan berlemak, telur), dan sayuran hijau.', NULL, NULL),
(12, 'ASMA', 'Pantangan    : Makanan yang memicu alergi (kacang, susu), makanan olahan.\r\nRekomendasi    : Buah-buahan segar, sayuran, dan makanan kaya omega-3 (ikan, biji chia)', NULL, NULL),
(13, 'Autoimun', 'Pantangan    : Makanan olahan, gluten, dan produk susu.\r\nRekomendasi    : Makanan anti-inflamasi (sayuran, buah-buahan, lemak sehat).', NULL, NULL),
(14, 'Kolesterol Tinggi  ', 'Pantangan    : Makanan tinggi lemak jenuh dan trans (makanan cepat saji, margarin).\r\nRekomendasi    : Makanan tinggi serat (oatmeal, buah-buahan), lemak sehat (alpukat, minyak zaitun).', NULL, NULL),
(15, 'Sindrom Metabolik  ', 'Pantangan    : Gula tambahan, makanan olahan, dan lemak trans.\r\nRekomendasi    : Makanan utuh (sayuran, biji-bijian), protein tanpa lemak, dan lemak sehat.', NULL, NULL),
(16, 'Migrain ', 'Pantangan    : Makanan pemicu (keju tua, cokelat, alkohol).\r\nRekomendasi    : Makanan segar, kaya magnesium (kacang-kacangan, biji-bijian), dan hidrasi yang cukup.', NULL, NULL),
(17, 'Alzheimer', 'Pantangan    : Makanan tinggi gula dan lemak jenuh.\r\nRekomendasi    : Makanan kaya antioksidan (berry, sayuran hijau), lemak sehat (minyak zaitun, ikan).', NULL, NULL),
(18, 'Fibromyalgia', 'Pantangan    : Makanan olahan, gula, dan kafein.\r\nRekomendasi    : Makanan anti-inflamasi (sayuran, buah-buahan, biji-bijian utuh).', NULL, NULL),
(19, 'Diabetes Tipe 2', 'Pantangan: Makanan tinggi gula, karbohidrat sederhana.\r\nRekomendasi: Sayuran non-starch, biji-bijian utuh, protein tanpa lemak.', NULL, NULL),
(20, 'Tiroid (Hipotiroidisme)', 'Pantangan: Makanan goitrogenik dalam jumlah besar (kubis, brokoli, kedelai).\r\nRekomendasi: Makanan kaya yodium, sayuran segar, produk susu.', NULL, NULL),
(21, 'Gout', 'Pantangan: Makanan tinggi purin (jeroan, seafood, daging merah).\r\nRekomendasi: Buah ceri, sayuran, air yang cukup.', NULL, NULL),
(22, 'Kardiovaskular', 'Pantangan: Lemak jenuh, makanan tinggi garam.\r\nRekomendasi: Ikan berlemak, sayuran segar, buah-buahan.', NULL, NULL),
(23, 'Paru Obstruktif Kronis (PPOK)', 'Pantangan: Merokok, makanan tinggi garam.\r\nRekomendasi: Sayuran segar, buah-buahan, makanan bergizi.', NULL, NULL),
(24, 'Maag (Gastritis)', 'Pantangan: Makanan pedas, asam, berlemak, kafein, alkohol.\r\nRekomendasi: Makanan yang mudah dicerna, buah non-asam.', NULL, NULL),
(25, 'Stroke', 'Pantangan: Makanan tinggi garam, lemak jenuh, alkohol.\r\nRekomendasi: Sayuran hijau, buah-buahan, biji-bijian utuh.', NULL, NULL),
(26, 'TBC (Tuberkulosis)', 'Pantangan: Makanan tinggi gula, lemak jenuh.\r\nRekomendasi: Makanan bergizi (protein tinggi, sayuran, buah-buahan).', NULL, NULL),
(27, 'Hepatitis', 'Pantangan: Alkohol, makanan berlemak, makanan olahan.\r\nRekomendasi: Sayuran hijau, buah-buahan, protein tanpa lemak.', NULL, NULL),
(28, 'Cacar Air', 'Pantangan: Makanan pedas, berlemak, iritatif.\r\nRekomendasi: Makanan bergizi, makanan yang mudah dicerna.', NULL, NULL),
(29, 'Demam Berdarah', 'Pantangan: Makanan tinggi lemak, makanan asin.\r\nRekomendasi: Makanan kaya cairan, makanan bergizi.', NULL, NULL),
(30, 'Tipes (Typhoid)', 'Pantangan: Makanan pedas, berlemak, makanan mentah, tidak higienis.\r\nRekomendasi: Makanan yang dimasak dengan baik, mudah dicerna.', NULL, NULL),
(31, 'Kista Ovarium', 'Pantangan: Makanan tinggi gula, lemak jenuh, makanan olahan.\r\nRekomendasi: Sayuran segar, buah-buahan, makanan kaya serat.', NULL, NULL),
(32, 'Osteoporosis\r\n', 'Pantangan: Makanan tinggi garam, kafein, alkohol.\r\nRekomendasi: Makanan kaya kalsium, vitamin D, sayuran hijau.', NULL, NULL),
(33, 'Anemia', 'Pantangan: Makanan tinggi tanin (teh, kopi), makanan olahan.\r\nRekomendasi: Makanan kaya zat besi, vitamin C.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_03_07_101142_create_disease_histories_table', 2),
(5, '2025_03_07_101251_create_eating_habits_table', 2),
(6, '2025_03_07_101304_create_sleep_patterns_table', 2),
(7, '2025_03_07_115433_create_personal_access_tokens_table', 3),
(8, '2025_03_08_052937_create_eat_recomendations_table', 4),
(9, '2025_03_08_055833_create_sleep_recommendations_table', 5),
(10, '2025_03_08_065026_create_bmi_data_table', 6),
(11, '2025_03_08_134143_create_activity_data_table', 7),
(12, '2025_03_08_135433_add_physical_activity_to_bmi_data', 8),
(13, '2025_03_09_045108_create_password_resets_table', 9),
(14, '2025_03_12_153631_create_food_restrictions_table', 10),
(15, '2025_03_12_161949_create_activity_patterns_table', 11),
(16, '2025_03_12_163502_create_eat_patterns_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('LgeliTREsvdJofSCXAGQQ4tJoiohkL46BuePlvYN', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.3 Safari/605.1.15', 'YTozOntzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoiTmp2QXpQRnNtM08wZDBZM1RkV2lQTUR5YzlqQ3V1cDNrRklhRGFiaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fX0=', 1741855381),
('rHIJlc1U0F7QlSsfGKN5IDZyoOOLAYwJkBjbKO8y', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOW1qMWN2UmlxZ0hrd25zdERUZ0d5cXFiRGxqVHZ5Tm1GU1ZXRlJkeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9tZWFzdXJlbWVudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1741848853);

-- --------------------------------------------------------

--
-- Table structure for table `sleep_patterns`
--

CREATE TABLE `sleep_patterns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sleep_pattern` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sleep_patterns`
--

INSERT INTO `sleep_patterns` (`id`, `sleep_pattern`, `created_at`, `updated_at`) VALUES
(1, '10 jam per hari', '2025-03-12 06:43:06', '2025-03-12 06:43:06'),
(2, 'Tidur dari jam 12 AM hingga 10 AM', '2025-03-12 06:43:14', '2025-03-12 06:43:14'),
(3, 'Tidur siang 1-2 jam (biasanya dari jam 1 PM - 3 PM)', '2025-03-12 06:43:23', '2025-03-12 06:43:23'),
(4, 'Tidur pukul 9 PM - 6 AM (tidur lebih awal)', '2025-03-12 06:43:30', '2025-03-12 06:43:30'),
(5, 'Tidur pukul 2 AM - 12 PM (dengan durasi lebih panjang)', '2025-03-12 06:43:38', '2025-03-12 06:43:38');

-- --------------------------------------------------------

--
-- Table structure for table `sleep_recommendations`
--

CREATE TABLE `sleep_recommendations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bmi_category` varchar(255) NOT NULL,
  `recommendation` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sleep_recommendations`
--

INSERT INTO `sleep_recommendations` (`id`, `bmi_category`, `recommendation`, `created_at`, `updated_at`) VALUES
(1, 'underweight', 'Tidur cukup 7-9 jam untuk meningkatkan energi dan regenerasi tubuh.', '2025-03-07 23:09:36', '2025-03-07 23:09:36'),
(2, 'underweight', 'Tidur di ruangan yang gelap dan tenang untuk meningkatkan kualitas tidur.', '2025-03-07 23:10:02', '2025-03-07 23:10:02'),
(3, 'normal', 'Tidur 7-8 jam per malam untuk mendukung kesehatan fisik dan mental.', '2025-03-07 23:10:16', '2025-03-07 23:10:16'),
(4, 'normal', 'Pastikan tidur cukup dan hindari begadang.', '2025-03-07 23:10:25', '2025-03-07 23:10:25'),
(6, 'overweight', 'Tidur cukup dan hindari gangguan tidur. Latihan fisik dapat membantu meningkatkan kualitas tidur.', '2025-03-07 23:11:03', '2025-03-07 23:11:03'),
(7, 'overweight', 'Tidur minimal 7 jam per malam, hindari tidur yang berlebihan.', '2025-03-07 23:11:27', '2025-03-07 23:11:27'),
(8, 'obesity', 'Tidur cukup 7-9 jam per malam, hindari tidur terlalu lama.', '2025-03-07 23:11:39', '2025-03-07 23:11:39'),
(9, 'obesity', 'Tidur teratur untuk menjaga keseimbangan hormon tubuh.', '2025-03-07 23:11:48', '2025-03-07 23:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$8f5UpzNqASUuUkShGoB3.Oup73Fl5dPNLtOQ.yKCIcTwrFJ6.XVYy', NULL, '2025-03-05 03:47:56', '2025-03-05 03:47:56'),
(2, 'Admin2', 'admin2@gmail.com', NULL, '$2y$12$KPIvU1wuyIaRLt2iNZ6kYuUnUhqHbrqCF0WBOLBFow5IiIVDlbQLO', NULL, '2025-03-08 11:52:11', '2025-03-08 11:52:11'),
(3, 'IoTSe', 'iotse1997@gmail.com', NULL, '$2y$12$VV659K.zRTDhI3e89KHDSucHl/Ac0D30wW6XeBY3iHhZ8daEc4wUS', NULL, '2025-03-08 21:58:20', '2025-03-08 21:58:20'),
(4, 'homebridge', 'homebridge2022@gmail.com', NULL, '$2y$12$aPCvv/iDjVrsnHo9wg492u5W3iKWzf51SFm4VHRcyLvAJLMWTB1Ge', NULL, '2025-03-08 22:56:43', '2025-03-08 23:52:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_data`
--
ALTER TABLE `activity_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_patterns`
--
ALTER TABLE `activity_patterns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmi_data`
--
ALTER TABLE `bmi_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `disease_histories`
--
ALTER TABLE `disease_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eating_habits`
--
ALTER TABLE `eating_habits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eat_patterns`
--
ALTER TABLE `eat_patterns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eat_recomendations`
--
ALTER TABLE `eat_recomendations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food_restrictions`
--
ALTER TABLE `food_restrictions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sleep_patterns`
--
ALTER TABLE `sleep_patterns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sleep_recommendations`
--
ALTER TABLE `sleep_recommendations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_data`
--
ALTER TABLE `activity_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `activity_patterns`
--
ALTER TABLE `activity_patterns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `bmi_data`
--
ALTER TABLE `bmi_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `disease_histories`
--
ALTER TABLE `disease_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `eating_habits`
--
ALTER TABLE `eating_habits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `eat_patterns`
--
ALTER TABLE `eat_patterns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `eat_recomendations`
--
ALTER TABLE `eat_recomendations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_restrictions`
--
ALTER TABLE `food_restrictions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sleep_patterns`
--
ALTER TABLE `sleep_patterns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sleep_recommendations`
--
ALTER TABLE `sleep_recommendations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
