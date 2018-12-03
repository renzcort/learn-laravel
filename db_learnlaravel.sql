-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2018 at 10:57 AM
-- Server version: 5.6.37
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_learnlaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(5) NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Via Composer Create-Project', 'Alternatively, you may also install Laravel by issuing the Composer create-project command in your terminal:\r\nInstallation\r\nInstallation\r\nServer Requirements\r\nInstalling Laravel\r\nConfiguration\r\nWeb Server Configuration\r\nPretty URLs\r\n\r\nInstallation\r\nLaracasts provides a free, thorough introduction to Laravel for newcomers to the framework. It''s a great place to start your journey.\r\n\r\n\r\nServer Requirements\r\nThe Laravel framework has a few system requirements. Of course, all of these requirements are satisfied by the Laravel Homestead virtual machine, so it''s highly recommended that you use Homestead as your local Laravel development environment.\r\n\r\nHowever, if you are not using Homestead, you will need to make sure your server meets the following requirements:\r\n\r\nPHP >= 7.1.3\r\nOpenSSL PHP Extension\r\nPDO PHP Extension\r\nMbstring PHP Extension\r\nTokenizer PHP Extension\r\nXML PHP Extension\r\nCtype PHP Extension\r\nJSON PHP Extension\r\n\r\nInstalling Laravel\r\nLaravel utilizes Composer to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.\r\n\r\nVia Laravel Installer\r\nFirst, download the Laravel installer using Composer:\r\n\r\ncomposer global require laravel/installer\r\nMake sure to place composer''s system-wide vendor bin directory in your $PATH so the laravel executable can be located by your system. This directory exists in different locations based on your operating system; however, some common locations include:\r\n\r\nmacOS: $HOME/.composer/vendor/bin\r\nGNU / Linux Distributions: $HOME/.config/composer/vendor/bin\r\nOnce installed, the laravel new command will create a fresh Laravel installation in the directory you specify. For instance, laravel new blog will create a directory named blog containing a fresh Laravel installation with all of Laravel''s dependencies already installed:\r\n\r\nlaravel new blog\r\nVia Composer Create-Project\r\nAlternatively, you may also install Laravel by issuing the Composer create-project command in your terminal:\r\n\r\ncomposer create-project --prefer-dist laravel/laravel blog\r\nLocal Development Server\r\nIf you have PHP installed locally and you would like to use PHP''s built-in development server to serve your application, you may use the serve Artisan command. This command will start a development server at http://localhost:8000:', '2018-11-21 04:16:08', '2018-11-20 21:16:08', NULL),
(2, 'Configuration Tesss', 'After installing Laravel, you should configure your web server''s document / web root to be the  public directory. The index.php in this directory serves as the front controller for all HTTP requests entering your application.', '2018-11-21 04:16:08', '2018-11-20 21:16:08', NULL),
(4, 'Hallo Sukabumi', 'ini bekasi description', '2018-11-21 04:16:08', '2018-11-20 21:16:08', NULL),
(5, 'Hallo Bekasi Kota', 'ini bekasi Kota description', '2018-11-21 04:16:08', '2018-11-20 21:16:08', NULL),
(6, 'Hallo Bekasi Kota baru', 'ini bekasi Kota description', '2018-11-21 04:16:08', '2018-11-20 21:16:08', NULL),
(7, 'Hallo Bekasi barat Kota baru', 'ini bekasi Kota description', '2018-11-21 04:16:08', '2018-11-20 21:16:08', NULL),
(10, 'Hallo Surabaya', 'ini bekasi Kota description', '2018-11-21 04:16:08', '2018-11-20 21:16:08', NULL),
(11, 'ini post baru juga', 'tes post baru jugf', '2018-11-21 04:17:06', '2018-11-20 21:17:06', '2018-11-20 21:17:06'),
(12, 'Prof.', 'Rerum consequatur ad debitis possimus et voluptatem. Reprehenderit maiores aut expedita laudantium distinctio iste.', '2018-11-21 06:42:45', NULL, NULL),
(13, 'Dr.', 'Earum consequatur quo at perferendis est. Voluptates aut tempora ipsam occaecati ut ipsum. Aperiam corporis provident laudantium.', '2018-11-21 06:42:45', NULL, NULL),
(14, 'Mrs.', 'Odio ea repudiandae et corrupti facere et laboriosam. Sunt rerum quod ad minus veniam non. Eum voluptatem quis dolore ut.', '2018-11-21 06:42:45', NULL, NULL),
(15, 'Mrs.', 'Aut voluptates in aut rerum. Laudantium ex inventore ipsam. Accusamus ad vero quidem totam numquam.', '2018-11-21 06:42:45', NULL, NULL),
(16, 'Prof.', 'Iusto asperiores est accusantium ab quos minus tempora. Officia tempora molestias saepe et. Id repellat nesciunt voluptate. Quis est esse expedita. Esse est aperiam harum quis quo omnis.', '2018-11-21 06:42:45', NULL, NULL),
(17, 'Mr.', 'Fugiat non aspernatur maiores explicabo nihil. Ipsum quia consequatur eveniet qui. Excepturi quidem modi dignissimos eum est earum.', '2018-11-21 06:42:45', NULL, NULL),
(18, 'Mrs.', 'Nulla sit atque totam aperiam aliquid sed. Qui et voluptas eaque. Qui incidunt et deleniti. At est id earum voluptas qui natus. Tenetur quia nesciunt tenetur quis aut.', '2018-11-21 06:42:45', NULL, NULL),
(19, 'Prof.', 'Et numquam nesciunt omnis facilis. Vero repellat nihil nulla deleniti animi. Qui qui eius omnis ut qui.', '2018-11-21 06:42:45', NULL, NULL),
(20, 'Dr.', 'Rerum quia odit placeat hic dolore non. Ducimus neque nihil aliquid mollitia. Saepe quia numquam qui quia voluptates quia impedit. Deserunt voluptatibus cum molestiae aspernatur qui non deleniti ut.', '2018-11-21 06:42:46', NULL, NULL),
(21, 'Mr.', 'Qui dicta dolore maxime minima. Quis molestiae explicabo id explicabo repellat labore. Provident odio consequatur consequatur animi ut est suscipit laudantium. Libero ut molestiae rem natus.', '2018-11-21 06:42:46', NULL, NULL),
(22, 'Dr.', 'Sit ut et similique. Quisquam ut eveniet nihil nam delectus itaque consequatur. Eius velit architecto id temporibus.', '2018-11-21 06:53:52', NULL, NULL),
(23, 'Prof.', 'Ut quod accusantium magni corrupti non. Hic perspiciatis qui sit.', '2018-11-21 06:53:52', NULL, NULL),
(24, 'Prof.', 'Labore quam vitae pariatur ipsam. Quae aliquid quis tempore qui impedit modi non. Aut eum fugiat nam voluptatem.', '2018-11-21 06:53:52', NULL, NULL),
(25, 'Prof.', 'Ut quos occaecati officia harum. Eos qui qui quia repellendus amet possimus sed et. Sit ad sunt ut tenetur et earum enim.', '2018-11-21 06:53:52', NULL, NULL),
(26, 'Mrs.', 'Labore tempore impedit a est. Saepe blanditiis vitae at ad. Voluptatibus et sint id alias eos ut. Dolore consequatur soluta est voluptatem dolores.', '2018-11-21 06:53:52', NULL, NULL),
(27, 'Dr.', 'Iste corrupti et numquam qui incidunt commodi iure. Sit incidunt doloribus neque repellendus veritatis quas. Necessitatibus explicabo consequatur sint dolore.', '2018-11-21 06:53:52', NULL, NULL),
(28, 'Prof.', 'Doloremque dolor officiis aut cumque aut illum sapiente et. Molestiae adipisci quisquam eaque. Debitis vero quis ipsam est.', '2018-11-21 06:53:52', NULL, NULL),
(29, 'Dr.', 'Vitae sed vero rerum omnis voluptatibus asperiores sed. Vel culpa aut accusamus. Nulla accusamus aliquam non non doloribus. Laborum commodi eveniet est ratione voluptas qui facilis accusantium.', '2018-11-21 06:53:52', NULL, NULL),
(30, 'Ms.', 'Labore sed qui aut in at dicta. Quidem reprehenderit eligendi est quos.', '2018-11-21 06:53:52', NULL, NULL),
(31, 'Ms.', 'Et sit qui aut hic maiores in. Totam voluptate omnis laboriosam quibusdam. Culpa placeat qui voluptas quos quia. Odit ipsa exercitationem quis temporibus similique ea nihil nam.', '2018-11-21 06:53:52', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE IF NOT EXISTS `forums` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2018_11_21_043642_create_forums_table', 2),
(6, '2018_12_03_093852_create_posts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Post One', 'This Is Body', '2018-12-03 03:13:42', '2018-12-03 03:13:42'),
(2, 'Post Two', 'This is Post Two ', '2018-12-03 03:15:04', '2018-12-03 03:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
