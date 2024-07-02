------------------------------------

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
  `user_type` varchar(255) NOT NULL,
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8mb4


--------------------------

CREATE TABLE `cart` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    item_name VARCHAR(100) NOT NULL,
    item_price DECIMAL(10,2) NOT NULL
);

--
-- Table structure for table `orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`,  `name`,  `price`, `image`) VALUES

(1, 'Manuel d allemand', 5, 'images/all3.webp'),
(2, 'Manuel d arabe', 5, 'images/ar7.webp'),
(3, 'Manuel de français', 5, 'images/fr7.webp'),
(4, 'Manuel de Mathématiques', 5, 'images/math9.webp'),
(6, 'Manuel de SVT', 5, 'images/sc2.webp'),
(7, 'Manuel de Histoire', 5, 'images/hist2.webp'),
(8, 'Manuel de physique', 5, 'images/phyinf4.webp'),

;

-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

