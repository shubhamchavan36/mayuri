-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2017 at 02:10 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lilytowels`
--

-- --------------------------------------------------------

--
-- Table structure for table `manage_pages`
--

CREATE TABLE `manage_pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manage_pages`
--

INSERT INTO `manage_pages` (`id`, `title`, `description`, `image`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'ABOUT US', '<p>The <strong>Yemul Group</strong> was laid in 1942 by<strong> Shri. Bhumayya Muttayya Yemul</strong> &nbsp;With our first manufacturing product Handloom Saree with 12 looms. Over the period of experience we expanded into Cotton Long cloth and &nbsp;on power loomslater we expanded into Jecqurad Chaddars &amp; Terry Towels in 1988 with the name of Yemul Industries. Over the period of time introduced <strong>Yemul Weaving Mills, Yemul Udyog &amp; Yemul Tex</strong>.</p>\r\n\r\n<p><strong>Yemul Industries</strong> is one of jacquard terry towel manufacturer in India. Yemul Industries produces wide range of terry towels which includes Jacquard Designer Towels, Jacquard Crepe Towels, Institutional Towels, Logo Towels and many more for domestic and overseas customer. Yemul Industries are spread over an area of 45,000 sq. ft. with 100 jacquard Power Looms.The works are situated at Solapur, Maharashtra, India. Our production capacity 300 tons per annum. Our popular brand LILY TOWELS is very well known to the customers.We also supplies Merchant Exportersmany years.</p>\r\n\r\n<p><strong>Yemul Industries</strong> is committed to customer satisfaction. At Yemul Industries our customers satisfaction is our number one priority. All of our endeavors are centered on meeting the needs of the customer.</p>\r\n\r\n<p><strong>Yemul Industries</strong> is committed to quality. Our finished product is a direct reflection of our company. We pride ourselves in making sure at great attention to detail is given to each item we provide. Our staff has having good experience in their fields to accomplish this task. This attention to detail allows us to produce uniform quality products for all of your textile needs.</p>\r\n\r\n<p>With our extensive knowledge of textiles and our experience with the development of various terry towel products we can manufacture terry towels as per your specifications. Get in touch with us and let us know your requirements so we can start the process right away.<br />\r\n&nbsp;</p>\r\n', 'about-2512170949.jpg', 1, '2017-12-25', 1, '2017-06-30'),
(2, 'Our Vision', '<p>Arror sit voluptatem accusantium doloremque laudantium,totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae</p>\r\n', NULL, 1, '2017-12-23', NULL, NULL),
(3, 'Our Mission', 'Arror sit voluptatem accusantium doloremque laudantium,totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae ', NULL, NULL, NULL, NULL, NULL),
(4, 'Our Values', 'Arror sit voluptatem accusantium doloremque laudantium,totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae ', NULL, NULL, NULL, NULL, NULL),
(5, 'Quality Assurance', '<p>Arror sit voluptatem accusantium doloremque laudantium,totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dictasunt explicabo. Nemo enim ipsam voluptatem.</p>\r\n', NULL, 1, '2017-12-22', NULL, NULL),
(6, 'Markets We Serve', 'Arror sit voluptatem accusantium doloremque laudantium,totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae ', NULL, NULL, NULL, NULL, NULL),
(7, 'Featured Fabrics', 'Arror sit voluptatem accusantium doloremque laudantium,totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae ', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1511435540),
('m130524_201442_init', 1511435543);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `size` varchar(100) NOT NULL,
  `cm` varchar(100) NOT NULL,
  `gsm` varchar(100) NOT NULL,
  `colors` varchar(100) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `updated_on` date DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `image`, `description`, `size`, `cm`, `gsm`, `colors`, `created_by`, `created_on`, `updated_on`, `updated_by`) VALUES
(1, 'Lily Crepe', 'product-04121718.jpg', 'Lily Crepe Towel', '1218, 1421, 1624, 1932, 2448, 2754, 3060, 3672', '45gm, 65gm, 95gm, 150gm, 275gm, 350gm, 425gm, 600gm', '67.5, 97.55, 142.5, 252.63, 550, 700, 850, 1200', '8', 1, '2017-12-04', '2017-12-19', 1),
(2, 'Lily White', 'product-04121738.JPG', 'Lily White Towel ', '1218, 1421, 1624, 1932, 2448, 2754, 3060, 3672', '45gm, 65gm, 95gm, 150gm, 275gm, 350gm, 425gm, 600gm', '67.5, 97.55, 142.5, 252.63, 550, 700, 850, 1200', '8', 1, '2017-12-04', '2017-12-19', 1),
(3, 'Lily Dark Crepe', 'product-05121736.JPG', 'Lily Dark Crepe Towel', '1421, 1624, 2448, 3060', '65gm, 95gm, 275gm, 425gm', '97.55, 142.5, 550, 850', '4', 1, '2017-12-05', '2017-12-19', 1),
(4, 'Lily Safari', 'product-05121737.jpg', 'Lily Safari Towel', '1218, 1421, 1624, 1932, 2448, 2754, 3060', '45gm, 65gm, 95gm, 150gm, 275gm, 350gm, 425gm, ', '67.5, 97.55, 142.5, 252.63, 550, 700, 850', '7', 1, '2017-12-05', '2017-12-19', 1),
(5, 'Lily white Gold', 'white-gold-2.JPG', 'Lily white Gold Towel', '3060', '600gm', '1200', '1', 1, '2017-12-05', '2017-12-24', 1),
(6, 'Lily Fancy', 'product-05121730.JPG', 'Lily Fancy Towel', '1218, 1421, 1624, 2448, 2754, 3060', '45gm, 65gm, 95gm, 275gm, 350gm, 425gm, ', '67.5, 97.55, 142.5, 550, 700, 850', '6', 1, '2017-12-05', '2017-12-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `updated_on` date DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `title`, `description`, `updated_on`, `updated_by`) VALUES
(1, 'Meta Title', 'Lily Towels', '2017-11-23', 1),
(2, 'Meta Description', 'Lily Towels', '2017-11-21', 1),
(3, 'Meta Keywords', 'Lily Towels', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `title`, `sub_title`, `image`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'LILY CREPE TOWELS', 'with international quality standards', 'slide-23111705.jpg', 1, '2017-11-23', 1, '2017-12-25'),
(2, 'LILY SAFARI TOWELS', '100% Cotton towels', 'slide-23111728.jpg', 1, '2017-11-23', 1, '2017-12-25'),
(3, 'LILY DARK CREPE TOWELS', 'Start the day with the right towel', 'slide-23111748.jpg', 1, '2017-11-23', 1, '2017-12-25'),
(4, 'LILY FANCY TOWELS', 'Turn your bathrooms into powerful spaces', 'slide-25121712.jpg', 1, '2017-11-23', 1, '2017-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `social_activities`
--

CREATE TABLE `social_activities` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_activities`
--

INSERT INTO `social_activities` (`id`, `title`, `description`, `image`, `active`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'Blood Camp', 'donate the blood ', 'socialactivities-24121724.jpg', 1, 1, '2017-12-24', 1, '2017-12-24'),
(2, 'Child Health Camp', 'Child Health Camp', 'socialactivities-24121702.jpg', 1, 1, '2017-12-24', 1, '2017-12-24'),
(3, 'Eye Camp', 'Eye Camp', 'socialactivities-24121715.jpg', 1, 1, '2017-12-24', 1, '2017-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `title`, `logo`, `alt`, `url`) VALUES
(1, 'Facebook', 'icon091116124608.png', 'www.facebook.com', 'https://www.facebook.com/'),
(2, 'Twitter', NULL, 'www.twitter.com', 'https://twitter.com/'),
(3, 'Google Plus', NULL, 'https://plus.google.com/', 'https://plus.google.com/');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Z_GjYxlHxl2Nv3RQ0DLIbF7jM6Mopfcr', '$2y$13$k/ZaLYkaG.JiESyCcIXWAetNgYNmGkJNzFoXInTur.RT6b/0Dk5nK', NULL, 'admin@gmail.com', 10, 1511435595, 1511435595);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manage_pages`
--
ALTER TABLE `manage_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_activities`
--
ALTER TABLE `social_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manage_pages`
--
ALTER TABLE `manage_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `social_activities`
--
ALTER TABLE `social_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
