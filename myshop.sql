-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 22 2022 г., 16:49
-- Версия сервера: 5.5.62
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `attribute_group`
--

CREATE TABLE `attribute_group` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `attribute_group`
--

INSERT INTO `attribute_group` (`id`, `title`) VALUES
(1, 'Механизм'),
(2, 'Стекло'),
(3, 'Ремешок'),
(4, 'Корпус'),
(5, 'Индикация');

-- --------------------------------------------------------

--
-- Структура таблицы `attribute_product`
--

CREATE TABLE `attribute_product` (
  `attr_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `attribute_product`
--

INSERT INTO `attribute_product` (`attr_id`, `product_id`) VALUES
(1, 1),
(2, 4),
(2, 5),
(2, 11),
(2, 15),
(2, 16),
(2, 17),
(2, 20),
(2, 21),
(2, 22),
(3, 12),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(4, 2),
(4, 3),
(4, 27),
(4, 28),
(5, 1),
(5, 4),
(5, 5),
(5, 12),
(5, 13),
(6, 2),
(6, 29),
(6, 30),
(6, 31),
(6, 32),
(6, 33),
(7, 3),
(7, 6),
(8, 1),
(9, 2),
(9, 14),
(10, 4),
(10, 5),
(10, 13),
(11, 7),
(11, 8),
(11, 9),
(11, 10),
(12, 1),
(14, 3),
(16, 1),
(16, 4),
(16, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `attribute_value`
--

CREATE TABLE `attribute_value` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL,
  `attr_group_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `attribute_value`
--

INSERT INTO `attribute_value` (`id`, `value`, `attr_group_id`) VALUES
(1, 'Механика с автоподзаводом', 1),
(2, 'Механика с ручным заводом', 1),
(3, 'Кварцевый от батарейки', 1),
(4, 'Кварцевый от солнечного аккумулятора', 1),
(5, 'Сапфировое', 2),
(6, 'Минеральное', 2),
(7, 'Полимерное', 2),
(8, 'Стальной', 3),
(9, 'Кожаный', 3),
(10, 'Каучуковый', 3),
(11, 'Полимерный', 3),
(12, 'Нержавеющая сталь', 4),
(13, 'Титановый сплав', 4),
(14, 'Латунь', 4),
(15, 'Полимер', 4),
(16, 'Керамика', 4),
(17, 'Алюминий', 4),
(18, 'Аналоговые', 5),
(19, 'Цифровые', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE `brand` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'brand_no_image.jpg',
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`id`, `title`, `alias`, `img`, `description`) VALUES
(1, 'G-SHOCK', 'g-shock', 'g-shock.jpg', 'Абсолютно прочные'),
(2, 'BABY-G', 'baby-g', 'baby-g.jpg', 'Идеальное сочетание спорта и стиля'),
(3, 'EDIFICE', 'edifice', 'edifice.jpg', 'Скорость и интеллект'),
(4, 'SHEEN', 'sheen', 'sheen.png', 'cовершенство в каждой детали'),
(5, 'PRO TREK', 'pro-trek', 'pro-trek.png', 'Для любого приключения нужен надежный партнер'),
(6, 'Vintage', 'vintage', 'vintage.jpg', 'Premium Collection');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `parent_id` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `title`, `alias`, `parent_id`, `keywords`, `description`) VALUES
(1, 'Каталог', 'catalog', 0, 'Catalog', 'Catalog'),
(2, 'Мужские', 'men', 0, 'Men', 'Men'),
(3, 'Женские', 'women', 0, 'Women', 'Women'),
(4, 'Электронные', 'elektronnye', 2, 'Электронные', 'Электронные'),
(5, 'Механические', 'mehanicheskie', 2, 'mehanicheskie', 'mehanicheskie'),
(6, 'YACHT-MASTER', 'yacht‑master', 5, 'Yacht‑Master', 'Yacht‑Master'),
(7, 'G-SHOCK', 'g-shock', 4, 'G-shock', 'G-shock'),
(8, 'BABY-G', 'baby-g', 4, 'Baby-g', 'Baby-g'),
(9, 'EDIFICE', 'edifice', 4, 'Edifice', 'Edifice'),
(10, 'PRO TREK', 'pro trec', 5, 'Pro trec', 'Pro trec'),
(11, 'Электронные', 'elektronnye-11', 3, 'Электронные', 'Электронные'),
(12, 'Механические', 'mehanicheskie-12', 3, 'Механические', 'Механические'),
(13, 'SHEEN', 'sheen', 11, 'Sheen', 'Sheen'),
(14, 'VINTAGE', 'vintage', 12, 'Vintage', 'Vintage'),
(15, 'CASIO', 'casio', 1, 'Casio', 'Casio'),
(16, 'ROLEX', 'rolex', 1, 'Rolex', 'Rolex');

-- --------------------------------------------------------

--
-- Структура таблицы `currency`
--

CREATE TABLE `currency` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `code` varchar(3) NOT NULL,
  `symbol_left` varchar(10) NOT NULL,
  `symbol_right` varchar(10) NOT NULL,
  `value` float(15,2) NOT NULL,
  `base` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `currency`
--

INSERT INTO `currency` (`id`, `title`, `code`, `symbol_left`, `symbol_right`, `value`, `base`) VALUES
(1, 'доллар', 'USD', '', 'грн.', 25.80, '0'),
(2, 'рубль', 'RUB', '', '₽', 1.00, '1'),
(3, 'Евро', 'EUR', '€', '', 0.88, '0');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `product_id`, `img`) VALUES
(1, 2, 's-1.jpg'),
(2, 2, 's-2.jpg'),
(3, 2, 's-3.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `modification`
--

CREATE TABLE `modification` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `modification`
--

INSERT INTO `modification` (`id`, `product_id`, `title`, `price`) VALUES
(1, 1, 'Silver', 70299),
(2, 1, 'Black', 70999),
(3, 1, 'Dark Black', 72999),
(4, 1, 'Red', 69999),
(5, 2, 'Silver', 78499),
(6, 2, 'Red', 69299);

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL,
  `currency` varchar(10) NOT NULL,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `user_id`, `status`, `date`, `update_at`, `currency`, `note`) VALUES
(1, 2, '0', '2022-05-21 01:34:58', NULL, 'RUB', ''),
(2, 2, '0', '2022-05-21 02:01:13', NULL, 'RUB', ''),
(3, 4, '0', '2022-05-21 02:13:48', NULL, 'RUB', 'Test myshop_horologium Белых Кирилл 4ПКС15'),
(4, 4, '0', '2022-05-21 02:14:25', NULL, 'RUB', 'Test myshop_horologium Белых Кирилл 4ПКС15'),
(5, 4, '0', '2022-05-21 02:15:27', NULL, 'RUB', 'Test myshop_horologium Белых Кирилл 4ПКС15'),
(6, 4, '0', '2022-05-21 02:17:25', NULL, 'RUB', 'Test myshop_horologium Белых Кирилл 4ПКС15'),
(7, 4, '0', '2022-05-21 02:18:13', NULL, 'RUB', 'Test Б.К. Денисович 4ПКС15'),
(8, 4, '0', '2022-05-21 02:20:07', NULL, 'RUB', 'Test Б.К. Денисович 4ПКС15'),
(9, 4, '0', '2022-05-21 02:20:29', NULL, 'RUB', 'Test Б.К. Денисович 4ПКС15'),
(10, 4, '0', '2022-05-21 02:21:36', NULL, 'RUB', 'Test Б.К. Денисович 4ПКС15'),
(11, 4, '0', '2022-05-21 02:32:30', NULL, 'RUB', 'Test Белых Кирилл Денисович 4ПКС15'),
(12, 4, '0', '2022-05-21 02:33:02', NULL, 'RUB', 'Test Белых Кирилл Денисович 4ПКС15'),
(13, 4, '0', '2022-05-21 02:34:58', NULL, 'RUB', 'Test Белых Кирилл Денисович 4ПКС15'),
(14, 4, '0', '2022-05-21 02:36:03', NULL, 'RUB', 'Test Белых Кирилл Денисович 4ПКС15'),
(15, 4, '0', '2022-05-21 02:37:21', NULL, 'RUB', 'Test Белых Кирилл Денисович 4ПКС15'),
(16, 4, '0', '2022-05-21 02:39:53', NULL, 'RUB', 'Test Белых Кирилл Денисович 4ПКС15'),
(17, 4, '0', '2022-05-21 02:40:50', NULL, 'RUB', 'Test Белых Кирилл Денисович 4ПКС15'),
(18, 4, '0', '2022-05-21 02:44:47', NULL, 'RUB', 'Test Белых Кирилл Денисович 4ПКС15'),
(19, 4, '0', '2022-05-21 02:55:31', NULL, 'RUB', 'Test Белых Кирилл Денисович 4ПКС15'),
(20, 4, '0', '2022-05-21 03:02:50', NULL, 'RUB', 'Test Белых Кирилл Денисович 4ПКС15'),
(21, 4, '0', '2022-05-21 03:05:50', NULL, 'RUB', 'Test Белых Кирилл Денисович 4ПКС15'),
(22, 4, '0', '2022-05-21 12:54:26', NULL, 'RUB', 'Тест сильвер'),
(23, 4, '0', '2022-05-21 12:54:41', NULL, 'RUB', ''),
(24, 2, '0', '2022-05-21 17:17:12', NULL, 'RUB', 'Test работы спасибо\r\n'),
(25, 2, '1', '2022-05-21 19:06:41', '2022-05-21 19:07:32', 'RUB', 'test admin'),
(26, 1, '1', '2022-05-21 20:42:01', '2022-05-22 13:33:08', 'RUB', 'gg'),
(27, 6, '1', '2022-05-22 13:15:13', '2022-05-22 13:32:42', 'RUB', 'test test test'),
(28, 6, '0', '2022-05-22 13:15:56', NULL, 'RUB', 'test test test 2'),
(30, 1, '0', '2022-05-22 13:31:17', NULL, 'RUB', '');

-- --------------------------------------------------------

--
-- Структура таблицы `order_product`
--

CREATE TABLE `order_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `qty`, `title`, `price`) VALUES
(1, 1, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(2, 1, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(3, 1, 11, 1, 'ROLEX', 2724880),
(4, 2, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(5, 2, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(6, 2, 11, 1, 'ROLEX', 2724880),
(7, 3, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(8, 3, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(9, 3, 11, 1, 'ROLEX', 2724880),
(10, 4, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(11, 4, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(12, 4, 11, 1, 'ROLEX', 2724880),
(13, 5, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(14, 5, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(15, 5, 11, 1, 'ROLEX', 2724880),
(16, 6, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(17, 6, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(18, 6, 11, 1, 'ROLEX', 2724880),
(19, 7, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(20, 7, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(21, 7, 11, 1, 'ROLEX', 2724880),
(22, 8, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(23, 8, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(24, 8, 11, 1, 'ROLEX', 2724880),
(25, 9, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(26, 9, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(27, 9, 11, 1, 'ROLEX', 2724880),
(28, 10, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(29, 10, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(30, 10, 11, 1, 'ROLEX', 2724880),
(31, 11, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(32, 11, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(33, 11, 11, 1, 'ROLEX', 2724880),
(34, 12, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(35, 12, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(36, 12, 11, 1, 'ROLEX', 2724880),
(37, 13, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(38, 13, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(39, 13, 11, 1, 'ROLEX', 2724880),
(40, 14, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(41, 14, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(42, 14, 11, 1, 'ROLEX', 2724880),
(43, 15, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(44, 15, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(45, 15, 11, 1, 'ROLEX', 2724880),
(46, 16, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(47, 16, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(48, 16, 11, 1, 'ROLEX', 2724880),
(49, 17, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(50, 17, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(51, 17, 11, 1, 'ROLEX', 2724880),
(52, 18, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(53, 18, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(54, 18, 11, 1, 'ROLEX', 2724880),
(55, 19, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(56, 19, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(57, 19, 11, 1, 'ROLEX', 2724880),
(58, 20, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(59, 20, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(60, 20, 11, 1, 'ROLEX', 2724880),
(61, 21, 1, 2, 'CASIO G-SHOCK GWG-1000 (Black)', 70999),
(62, 21, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(63, 21, 11, 1, 'ROLEX', 2724880),
(64, 23, 1, 1, 'CASIO G-SHOCK GWG-1000 (Silver)', 70299),
(65, 24, 4, 3, 'CASIO BABY-G BGD-560-4E', 102299),
(66, 24, 1, 2, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(67, 25, 1, 3, 'CASIO G-SHOCK GWG-1000 (Silver)', 70299),
(68, 26, 34, 3, 'testadmin', 0),
(69, 27, 1, 3, 'CASIO G-SHOCK GWG-1000', 63399),
(70, 27, 1, 2, 'CASIO G-SHOCK GWG-1000 (Silver)', 70299),
(71, 27, 1, 1, 'CASIO G-SHOCK GWG-1000 (Red)', 69999),
(72, 28, 34, 10, 'testadmin', 0),
(74, 30, 3, 1, 'CASIO G-SHOCK GWG-2000', 48499);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `all_id` tinyint(3) UNSIGNED NOT NULL,
  `category_id` tinyint(3) UNSIGNED NOT NULL,
  `brand_id` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `content` text,
  `price` float NOT NULL DEFAULT '0',
  `old_price` float NOT NULL DEFAULT '0',
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'no_image.jpg',
  `hit` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `all_id`, `category_id`, `brand_id`, `title`, `alias`, `content`, `price`, `old_price`, `status`, `keywords`, `description`, `img`, `hit`) VALUES
(1, 0, 15, 1, 'CASIO G-SHOCK GWG-1000', 'GWG-1000-1A3ER', '<p></p>\n<p>Наручные часы CASIO G-SHOCK GWG-1000-1A3 коллекции MUDMASTER обладают максимальной и разносторонней защитой — от пыли, влаги, грязи, ударов, вибрации, механических повреждений. Они не только эффектно дополнят образ, но и станут незаменимым помощником в поездке, походе, при горных восхождениях и в других экстремальных условиях. Корпус и ремень выполнены из современных инновационных полимерных материалов повышенной прочности, сапфировое стекло устойчиво к появлению царапин и отличается максимальной прозрачностью.</p>\n\n                                            \n<p>Casio GWG 1000 1A3 обеспечивают отображение времени в 12 или 24-часовом формате. Часы легко настраиваются благодаря технологии Smart Access и автоматически корректируют положение стрелок, для корректировки также обеспечивается прием радиосигнала. В числе опций, повышающих удобство и функциональность при пользовании:</p>\n\n                                            \n <p>• солнечный аккумулятор, обеспечивающий работоспособность;</p>\n <p>• двойная яркая светодиодная подсветка для цифрового дисплея и стрелок;</p>\n <p>• высотометр с графиком набора высоты и памятью;</p>\n <p>• барометр, термометр, компас; таймер, секундомер, до 5 будильников;</p>\n \n\n                                            \n<p>Купить оригинальные GWG-1000-1A3 по цене, установленной брендом, с удобной доставкой и гарантиями вы можете в нашем интернет-магазине, официально представляющем Casio в России. Оформите заказ на сайте или по телефону +7(978) 062-30-35.<p>', 63399, 0, '1', NULL, NULL, 'new1.png', '1'),
(2, 0, 15, 1, 'CASIO G-SHOCK GA-2100CA', 'GA-2100CA-8AER', 'Наручные часы Casio G-SHOCK GA-2100CA-8AER в каталоге официального магазина Касио в Москве. Доставка часов курьером или в пункт выдачи\nзаказов в любом городе России. Если ищите где купить оригинальные часы Casio GA-2100CA-8AER с минеральным стеклом,  ремешком и классом водозащиты\n200WR от 18 295 рублей, оформите заказ через сайт или воспользуйтесь помощью консультанта по телефону +7(978) 062-30-35. Фотографии и отзывы владельцев на официальном сайте\nмагазина Casio в России.', 74300, 79999, '1', NULL, NULL, 'featured1.png\n', '0'),
(3, 0, 15, 1, 'CASIO G-SHOCK GWG-2000', 'GWG-2000TLC-1AER', 'Наручные часы Casio G-SHOCK GWG-2000TLC-1AER в каталоге официального магазина Касио в Москве. Доставка часов курьером или в пункт выдачи\nзаказов в любом городе России. Если ищите где купить оригинальные часы Casio GWG-2000TLC-1AER с сапфировым стеклом,  ремешком и классом водозащиты\n200WR от 130 757 рублей, оформите заказ через сайт или воспользуйтесь помощью консультанта по телефону +7(978) 062-30-35. Фотографии и отзывы владельцев на официальном сайте\nмагазина Casio в России.', 48499, 0, '1', NULL, NULL, 'product1.png', '0'),
(4, 0, 15, 2, 'CASIO BABY-G BGD-560-4E', 'BGD-560-4E', '<p>Идеальные часы для достижения отличных результатов для молодых и модных.</p>\n\n<b>Baby-G.</b>\n\n<p>Противоударный корпус</p>\n\n<p> защищает механизм от ударов и вибрации. Электролюминесцентная подсветка освещает весь циферблат, после отпускания кнопки свечение продолжается еще некоторое время. </p>\n<p>Мировое время</p>\n<p> – 48 городов (29 часовых поясов). Функция включения/отключения летнего времени. </p>\n<p>12-ти и 24-х часовой формат</p>\n<p> времени. Секундомер с точностью показаний 1/100с и временем измерения 1ч. </p>\n<p>Сплит-хронограф.</p>\n<p> обратного отсчета от 1мин до 24ч. Функция включения/отключения звука.</p>\n', 102299, 0, '1', NULL, NULL, 'new2.png', '1'),
(5, 0, 15, 2, 'CASIO BABY-G BA110', 'BA110-rose', 'Необычная аналого-цифровая модель женских часов BABY-G в мятном корпусе с белыми деталями циферблата. Аутентичная и стильная модель, которая может стать вашим ежедневным аксессуаром, гармонично дополняя собой практически любой лук! На борту: абсолютная ударопрочность, водозащита, светодиодная подсветка, таймер, секундомер и 5 будильников! Напомним, что женская серия BA-110 является одной из самых популярных и разнообразных среди всех моделей Baby-G. На сегодняшний день серия насчитывает более 50 разных расцветок, благодаря чему, каждая девушка сможет найти расцветку под свой вкус, настроение или образ.', 14499, 15599, '1', NULL, NULL, 'featured2.png', '0'),
(6, 0, 15, 2, 'CASIO BABY-G BA110', 'BA110', 'Необычная аналого-цифровая модель женских часов BABY-G в мятном корпусе с белыми деталями циферблата. Аутентичная и стильная модель, которая может стать вашим ежедневным аксессуаром, гармонично дополняя собой практически любой лук! На борту: абсолютная ударопрочность, водозащита, светодиодная подсветка, таймер, секундомер и 5 будильников! Напомним, что женская серия BA-110 является одной из самых популярных и разнообразных среди всех моделей Baby-G. На сегодняшний день серия насчитывает более 50 разных расцветок, благодаря чему, каждая девушка сможет найти расцветку под свой вкус, настроение или образ.', 40912, 0, '1', NULL, NULL, 'product2.png', '0'),
(7, 0, 15, 3, 'CASIO EDIFICE EFS-S560', 'EFS-S560DB-1AVUEF', 'Наручные часы Casio EDIFICE EFS-S560DB-1AVUEF в каталоге официального магазина Касио в Москве. Доставка часов курьером или в пункт выдачи\nзаказов в любом городе России. Если ищите где купить оригинальные часы Casio EFS-S560DB-1AVUEF с сапфировым стеклом, стальным ремешком и классом водозащиты\n100WR от 22 340 рублей, оформите заказ через сайт или воспользуйтесь помощью консультанта по телефону +7(978) 062-30-35. Фотографии и отзывы владельцев на официальном сайте\nмагазина Casio в России.', 92499, 0, '1', NULL, NULL, 'new3.png', '1'),
(8, 0, 15, 4, 'CASIO SHEEN SHB-100CG', 'SHB-100CG-4A', 'Нами уже был подмечен тот факт, что в часах японских производителей используются современнейшие технологии. Теперь пришла очередь обсудить новейшие часы Casio со встроенной Bluetooth-программой, разработанной для женской половины населения нашей планеты. Утонченными и изящными в коллекции Casio Sheen получились модели SHB-100CG-4A и SHB-200SG-7A. Уместно добавить, что английское слово Sheen на русском означает блеск.', 55799, 63299, '1', NULL, NULL, 'featured3.png', '0'),
(9, 0, 15, 5, 'CASIO PRO TREK PRW2500', 'PRW2500T', 'С солнечной батареей и радио синхронизацией\nВсе функции, полезные на пути к вершинам, в одном корпусе: кроме цифрового компаса, барометра, высотомера и термометра эти часы набирают дополнительные баллы благодаря наличию солнечной батареи и радио технологии Multiband 6. Для всех любителей водного спорта эта модель оснащена индикатором приливов и отливов; кроме того, часы водонепроницаемы при давлении до 20 бар.', 16974, 0, '1', NULL, NULL, 'product3.png', '0'),
(10, 0, 15, 6, 'CASIO VINTAGE A1000MPG', 'A1000MPG-9EF', 'Наручные часы Casio VINTAGE A1000MPG-9EF в каталоге официального магазина Касио в Москве. Доставка часов курьером или в пункт выдачи\nзаказов в любом городе России. Если ищите где купить оригинальные часы Casio A1000MPG-9EF с минеральным стеклом, стальным ремешком и классом водозащиты\nБрызгозащитаWR от 15 290 рублей, оформите заказ через сайт или воспользуйтесь помощью консультанта по телефону +7(978) 062-30-35. Фотографии и отзывы владельцев на официальном сайте\nмагазина Casio в России.', 59393, 0, '1', NULL, NULL, 'new4.png', '1'),
(11, 0, 16, 2, 'ROLEX', 'rolex', 'контент...', 2724880, 0, '1', NULL, NULL, 'rolex.png', '0'),
(12, 0, 16, 2, 'Часы 1', 'chasy-1', NULL, 100, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(13, 0, 7, 2, 'Часы 2', 'chasy-2', NULL, 105, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(14, 0, 7, 2, 'Часы 3', 'chasy-3', NULL, 110, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(15, 0, 7, 2, 'Часы 4', 'chasy-4', NULL, 115, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(16, 0, 7, 2, 'Часы 5', 'chasy-5', NULL, 115, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(17, 0, 7, 2, 'Часы 6', 'chasy-6', NULL, 120, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(20, 0, 7, 2, 'Часы 7', 'chasy-7', NULL, 120, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(21, 0, 7, 2, 'Часы 8', 'chasy-8', NULL, 120, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(22, 0, 7, 2, 'Часы 9', 'chasy-9', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(23, 0, 7, 2, 'Часы 10', 'chasy-10', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(24, 0, 7, 2, 'Часы 11', 'chasy-11', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(25, 0, 7, 2, 'Часы 12', 'chasy-12', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(26, 0, 7, 2, 'Часы 13', 'chasy-13', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(27, 0, 7, 2, 'Часы 14', 'chasy-14', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(28, 0, 7, 2, 'Часы 15', 'chasy-15', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(29, 0, 7, 2, 'Часы 16', 'chasy-16', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(30, 0, 7, 2, 'Часы 17', 'chasy-17', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(31, 0, 7, 2, 'Часы 18', 'chasy-18', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(32, 0, 7, 2, 'Часы 19', 'chasy-19', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(33, 0, 7, 2, 'Часы 20', 'chasy-20', NULL, 125, 0, '1', NULL, NULL, 'no_image.jpg', '0'),
(34, 0, 4, 0, 'testadmin', 'testadmin', 'testadmin', 0, 0, '1', 'testadmin', 'testadmin', 'testimonial1.jpg', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `related_product`
--

CREATE TABLE `related_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `related_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `related_product`
--

INSERT INTO `related_product` (`product_id`, `related_id`) VALUES
(1, 2),
(1, 4),
(1, 5),
(1, 11),
(2, 5),
(2, 10),
(5, 1),
(5, 7),
(5, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `email`, `name`, `address`, `role`) VALUES
(1, 'admin', '$2y$10$1j1JCty8.PnxYVd.YCzRp.PVBz.F8C8sVfVVEGrDG/r1lTXaOxiqG', 'admin@mail.ru', 'admin', 'Симферополь', 'admin'),
(2, 'admin_adminov', '$2y$10$Rcr9gM5TF2CXB.hxqGb8BeVwcVvshVxtK/0QfJVFW47gD0ku8BRNO', 'admin_adminov@mail.ru', 'admin_adminov', 'Симферополь', 'admin'),
(3, 'user', '$2y$10$6o7OTi2mFX3khthqefvAOOZeEGB8P5oaE8CeHth1j4qYQlZb2p6Hy', 'user@mail.ru', 'user', 'Симферополь', 'user'),
(4, 'haced17.0', '$2y$10$hRqYzmQJHl325lQEuKHV5OLg0LbALNbMXgseke7vjYEkXQUJk91x6', 'haced17.0@mail.ru', 'Кирилл', 'Симферополь, Хабаровская ул., 57.', 'user'),
(5, 'user_user', '$2y$10$rNvZGZZMV7WF7MZID185xOHtxk/RiFDH/VBDEB7zWGFjqQrI4Az1S', 'user_user@mail.ru', 'user_user', 'Симферополь', 'user'),
(6, 'testtesttest', '$2y$10$Tqwmsqafn4ncah2hczxcfe2NXkwxhwshPECexZFxVvR.zvAPstusS', 'testtesttest@mail.ru', 'testtesttest', 'testtesttest', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `attribute_group`
--
ALTER TABLE `attribute_group`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `attribute_product`
--
ALTER TABLE `attribute_product`
  ADD PRIMARY KEY (`attr_id`,`product_id`);

--
-- Индексы таблицы `attribute_value`
--
ALTER TABLE `attribute_value`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `value` (`value`),
  ADD KEY `attr_group_id` (`attr_group_id`);

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Индексы таблицы `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `modification`
--
ALTER TABLE `modification`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`),
  ADD KEY `category_id` (`category_id`,`brand_id`),
  ADD KEY `hit` (`hit`),
  ADD KEY `all_id` (`all_id`);

--
-- Индексы таблицы `related_product`
--
ALTER TABLE `related_product`
  ADD PRIMARY KEY (`product_id`,`related_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `attribute_group`
--
ALTER TABLE `attribute_group`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `attribute_value`
--
ALTER TABLE `attribute_value`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `modification`
--
ALTER TABLE `modification`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
