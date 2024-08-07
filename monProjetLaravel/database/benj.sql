-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 07 août 2024 à 07:30
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `benj`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'cat 1'),
(2, 'cat 2'),
(3, 'cat 3');

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `postal_code` varchar(10) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `address`, `postal_code`, `city`) VALUES
(1, 'Chuck', 'Norris', '123 Main St', '12345', 'Ville de Chuck'),
(2, 'Charlize', 'Theron', '456 Oak Ave', '67890', 'Ville de Charlize'),
(3, 'Ryan', 'Gosling', '789 Pine Rd', '54321', 'Ville de Ryan');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_11_24_145812_init_playground', 1);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `number` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `customer_id` int DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `number` (`number`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `number`, `customer_id`, `date`, `total_amount`) VALUES
(1, 'CMD001', 1, '2024-07-02 16:05:38', 120.00),
(2, 'CMD002', 1, '2024-06-27 16:05:38', 1050.00),
(3, 'CMD003', 2, '2024-06-24 16:05:38', 150.00),
(4, 'CMD004', 2, '2024-06-26 16:05:38', 1020.00),
(5, 'CMD005', 2, '2024-07-02 16:05:38', 600.00);

-- --------------------------------------------------------

--
-- Structure de la table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
CREATE TABLE IF NOT EXISTS `order_product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(1, 1, 1, 1),
(2, 1, 3, 2),
(3, 2, 13, 1),
(4, 2, 9, 2),
(5, 3, 1, 1),
(6, 3, 9, 1),
(7, 4, 3, 2),
(8, 4, 13, 1),
(9, 5, 1, 1),
(10, 5, 13, 1);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `description` text,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `weight` decimal(10,2) DEFAULT NULL,
  `quantity` int NOT NULL,
  `is_available` tinyint(1) DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image_url`, `weight`, `quantity`, `is_available`, `category_id`, `color`) VALUES
(1, 'Running Shoes', 'High-performance running shoes with superior cushioning.', 100.00, 'running_shoes.jpg', 1.00, 10, 1, 1, NULL),
(2, 'Basketball Sneakers', 'Durable basketball sneakers designed for comfort and agility.', 100.00, 'basketball_sneakers.jpg', 1.00, 10, 1, 1, NULL),
(3, 'Flip Flops', 'Comfortable flip flops perfect for the beach.', 10.00, 'flip_flops.jpg', 0.50, 1, 1, 1, NULL),
(4, 'Slippers', 'Cozy slippers for indoor use.', 10.00, 'slippers.jpg', 0.50, 1, 1, 1, NULL),
(5, 'Kids Sandals', 'Lightweight and comfortable sandals for kids.', 10.00, 'kids_sandals.jpg', 0.50, 1, 0, 1, NULL),
(6, 'Formal Shoes', 'Elegant formal shoes suitable for office wear.', 10.00, 'formal_shoes.jpg', 0.50, 1, 0, 1, NULL),
(7, 'Casual Sneakers', 'Stylish casual sneakers for everyday wear.', 13.00, 'casual_sneakers.jpg', 0.50, 0, 1, 2, NULL),
(8, 'Hiking Boots', 'Durable hiking boots designed for rough terrains.', 13.00, 'hiking_boots.jpg', 0.50, 0, 1, 2, NULL),
(9, 'Leather Boots', 'High-quality leather boots for a rugged look.', 50.00, 'leather_boots.jpg', 1.20, 2, 1, 2, NULL),
(10, 'Winter Boots', 'Insulated winter boots to keep your feet warm.', 50.00, 'winter_boots.jpg', 1.20, 2, 1, 2, NULL),
(11, 'Designer Heels', 'Elegant designer heels for special occasions.', 500.00, 'designer_heels.jpg', 1.20, 5, 1, 3, NULL),
(12, 'Running Shoes Pro', 'Advanced running shoes for professional athletes.', 500.00, 'running_shoes_pro.jpg', 1.20, 5, 1, 3, NULL),
(13, 'Vintage Sneakers', 'Retro-style sneakers for a unique look.', 500.00, 'vintage_sneakers.jpg', 1.20, 5, 1, 3, 'black');

-- --------------------------------------------------------

--
-- Structure de la table `sql_playground_test`
--

DROP TABLE IF EXISTS `sql_playground_test`;
CREATE TABLE IF NOT EXISTS `sql_playground_test` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sql_playground_test`
--

INSERT INTO `sql_playground_test` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Campus Numérique In The Alps', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
