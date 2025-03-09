-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 09, 2025 at 08:32 AM
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
  `disease_histories` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`disease_histories`)),
  `disease` varchar(255) DEFAULT NULL,
  `eating_habits` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`eating_habits`)),
  `sleep_patterns` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`sleep_patterns`)),
  `eat_recommendation` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`eat_recommendation`)),
  `sleep_recommendation` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`sleep_recommendation`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `physical_activity` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bmi_data`
--

INSERT INTO `bmi_data` (`id`, `user_id`, `user_name`, `height`, `weight`, `age`, `gender`, `bmi_category`, `bmi`, `range_category`, `disease_histories`, `disease`, `eating_habits`, `sleep_patterns`, `eat_recommendation`, `sleep_recommendation`, `created_at`, `updated_at`, `physical_activity`) VALUES
(1, 1, 'Admin', '175.00', '80.00', 24, 'Laki-laki', 'Overweight', '26.12', '25 - 29.9', '[\"Hipertensi (Tekanan Darah Tinggi)\"]', 'Sehat', '[\"Teratur makan 3 kali sehari\"]', '[\"Tidur jam 10\"]', '[\"Kurangi konsumsi kalori, lebih banyak makan sayuran.\",\"Pilih makanan rendah lemak dan protein tinggi.\"]', '[\"Tidur cukup dan hindari gangguan tidur. Latihan fisik dapat membantu meningkatkan kualitas tidur.\",\"Tidur minimal 7 jam per malam, hindari tidur yang berlebihan.\"]', '2025-03-08 07:00:36', '2025-03-08 07:00:36', '[\"Latihan Kardio: Lari, bersepeda, berenang, HIIT\",\"Latihan Kekuatan: Squats, Deadlifts, Push-ups\"]'),
(2, 1, 'Admin', '180.00', '70.00', 23, 'Laki-laki', 'Normal', '21.60', '8.5 - 24.9', '[\"Hipertensi (Tekanan Darah Tinggi)\"]', 'Sehat', '[\"Teratur makan 3 kali sehari\"]', '[\"Tidur jam 10\"]', '[\"Pertahankan pola makan yang seimbang dan bergizi.\",\"Perbanyak konsumsi serat dari buah dan sayuran.\"]', '[\"Tidur 7-8 jam per malam untuk mendukung kesehatan fisik dan mental.\",\"Pastikan tidur cukup dan hindari begadang.\"]', '2025-03-08 11:14:21', '2025-03-08 11:14:21', '[\"Latihan Kekuatan: Squats, Lunges, Deadlifts, Push-ups\",\"Aerobik: Lari ringan, bersepeda, berenang, berjalan cepat\"]'),
(3, 2, 'Admin2', '160.00', '45.00', 23, 'Perempuan', 'Underweight', '17.58', '< 18.5', '[\"Hipertensi (Tekanan Darah Tinggi)\"]', 'Sakit hati', '[\"Teratur makan 3 kali sehari\"]', '[\"Tidur jam 10\"]', '[\"Makan lebih sering, pilih makanan tinggi kalori dan protein.\",\"Konsumsi makanan yang mudah dicerna dan bergizi.\"]', '[\"Tidur cukup 7-9 jam untuk meningkatkan energi dan regenerasi tubuh.\",\"Tidur di ruangan yang gelap dan tenang untuk meningkatkan kualitas tidur.\"]', '2025-03-08 11:52:39', '2025-03-08 11:52:39', '[\"Latihan Kekuatan: Squats, Deadlifts, Push-ups\",\"Aerobik Moderat: Berjalan cepat, berenang, bersepeda ringan\"]'),
(4, 1, 'Admin', '180.00', '80.00', 24, 'Laki-laki', 'Normal', '24.69', '8.5 - 24.9', '[\"Diabetes\"]', 'Sehat', '[\"Teratur makan 3 kali sehari\"]', '[\"Tidur jam 10\"]', '[\"Pertahankan pola makan yang seimbang dan bergizi.\",\"Perbanyak konsumsi serat dari buah dan sayuran.\"]', '[\"Tidur 7-8 jam per malam untuk mendukung kesehatan fisik dan mental.\",\"Pastikan tidur cukup dan hindari begadang.\"]', '2025-03-08 21:43:42', '2025-03-08 21:43:42', '[\"Latihan Kekuatan: Squats, Lunges, Deadlifts, Push-ups\",\"Aerobik: Lari ringan, bersepeda, berenang, berjalan cepat\"]'),
(5, 4, 'homebridge', '166.00', '70.00', 33, 'Perempuan', 'Overweight', '25.40', '25 - 29.9', '[\"Diabetes\"]', 'Gula', '[\"Teratur makan 3 kali sehari\"]', '[\"Tidur jam 10\"]', '[\"Kurangi konsumsi kalori, lebih banyak makan sayuran.\",\"Pilih makanan rendah lemak dan protein tinggi.\"]', '[\"Tidur cukup dan hindari gangguan tidur. Latihan fisik dapat membantu meningkatkan kualitas tidur.\",\"Tidur minimal 7 jam per malam, hindari tidur yang berlebihan.\"]', '2025-03-08 23:48:14', '2025-03-08 23:48:14', '[\"Latihan Kardio: Lari, bersepeda, berenang, HIIT\",\"Latihan Kekuatan: Squats, Deadlifts, Push-ups\"]'),
(6, 4, 'homebridge', '166.00', '70.00', 33, 'Perempuan', 'Overweight', '25.40', '25 - 29.9', '[\"Diabetes\"]', 'Diabetes', '[\"Teratur makan 3 kali sehari\"]', '[\"Tidur jam 10\"]', '[\"Kurangi konsumsi kalori, lebih banyak makan sayuran.\",\"Pilih makanan rendah lemak dan protein tinggi.\"]', '[\"Tidur cukup dan hindari gangguan tidur. Latihan fisik dapat membantu meningkatkan kualitas tidur.\",\"Tidur minimal 7 jam per malam, hindari tidur yang berlebihan.\"]', '2025-03-08 23:52:47', '2025-03-08 23:52:47', '[\"Latihan Kardio: Lari, bersepeda, berenang, HIIT\",\"Latihan Kekuatan: Squats, Deadlifts, Push-ups\"]'),
(7, 4, 'homebridge', '166.00', '90.00', 33, 'Perempuan', 'Obesity', '32.66', '> 29.9', '[\"Diabetes\"]', 'Sehat', '[\"Teratur makan 3 kali sehari\"]', '[\"Tidur jam 10\"]', '[\"Fokus pada diet rendah kalori dan latihan fisik yang teratur.\",\"Kurangi konsumsi gula dan makanan olahan.\"]', '[\"Tidur cukup 7-9 jam per malam, hindari tidur terlalu lama.\",\"Tidur teratur untuk menjaga keseimbangan hormon tubuh.\"]', '2025-03-08 23:53:51', '2025-03-08 23:53:51', '[\"Latihan Kardio: Berjalan cepat, berenang, bersepeda, treadmill\",\"Latihan Kekuatan: Bodyweight exercises (push-ups, squats, lunges)\"]'),
(8, 4, 'homebridge', '166.00', '80.00', 33, 'Perempuan', 'Overweight', '29.03', '25 - 29.9', '[\"Diabetes\"]', 'Sehat', '[\"Teratur makan 3 kali sehari\"]', '[\"Tidur jam 10\"]', '[\"Kurangi konsumsi kalori, lebih banyak makan sayuran.\",\"Pilih makanan rendah lemak dan protein tinggi.\"]', '[\"Tidur cukup dan hindari gangguan tidur. Latihan fisik dapat membantu meningkatkan kualitas tidur.\",\"Tidur minimal 7 jam per malam, hindari tidur yang berlebihan.\"]', '2025-03-08 23:57:05', '2025-03-08 23:57:05', '[\"Latihan Kardio: Lari, bersepeda, berenang, HIIT\",\"Latihan Kekuatan: Squats, Deadlifts, Push-ups\"]'),
(9, 4, 'homebridge', '166.00', '89.00', 33, 'Perempuan', 'Obesity', '32.30', '> 29.9', '[\"Diabetes\"]', 'erre', '[\"Teratur makan 3 kali sehari\"]', '[\"Tidur jam 10\"]', '[\"Fokus pada diet rendah kalori dan latihan fisik yang teratur.\",\"Kurangi konsumsi gula dan makanan olahan.\"]', '[\"Tidur cukup 7-9 jam per malam, hindari tidur terlalu lama.\",\"Tidur teratur untuk menjaga keseimbangan hormon tubuh.\"]', '2025-03-09 00:01:11', '2025-03-09 00:01:11', '[\"Latihan Kardio: Berjalan cepat, berenang, bersepeda, treadmill\",\"Latihan Kekuatan: Bodyweight exercises (push-ups, squats, lunges)\"]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bmi_data`
--
ALTER TABLE `bmi_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bmi_data`
--
ALTER TABLE `bmi_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
