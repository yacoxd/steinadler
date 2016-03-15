-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-02-2014 a las 22:49:30
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_standler`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_language`
--

CREATE TABLE IF NOT EXISTS `st_language` (
  `lang_id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_name` varchar(45) DEFAULT NULL,
  `lang_description` text,
  `lang_sufix` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`lang_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `st_language`
--

INSERT INTO `st_language` (`lang_id`, `lang_name`, `lang_description`, `lang_sufix`) VALUES
(1, 'Ingles', NULL, 'english'),
(2, 'Español', NULL, 'spanish'),
(3, 'Chino', NULL, 'chinese');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_location`
--

CREATE TABLE IF NOT EXISTS `st_location` (
  `lo_id` int(11) NOT NULL AUTO_INCREMENT,
  `lo_name` varchar(250) DEFAULT NULL,
  `lo_address` text,
  `lo_phone1` varchar(250) DEFAULT NULL,
  `lo_phone2` varchar(250) DEFAULT NULL,
  `lo_phone3` varchar(250) DEFAULT NULL,
  `lo_phone4` varchar(250) DEFAULT NULL,
  `lo_email1` varchar(250) DEFAULT NULL,
  `lo_email2` varchar(250) DEFAULT NULL,
  `lo_user_created` varchar(45) DEFAULT NULL,
  `lo_date_created` datetime DEFAULT NULL,
  `lo_user_modified` varchar(45) DEFAULT NULL,
  `lo_date_modified` datetime DEFAULT NULL,
  `lo_page` int(11) NOT NULL,
  PRIMARY KEY (`lo_id`),
  KEY `fk_locations_page_idx` (`lo_page`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `st_location`
--

INSERT INTO `st_location` (`lo_id`, `lo_name`, `lo_address`, `lo_phone1`, `lo_phone2`, `lo_phone3`, `lo_phone4`, `lo_email1`, `lo_email2`, `lo_user_created`, `lo_date_created`, `lo_user_modified`, `lo_date_modified`, `lo_page`) VALUES
(1, 'Twain', 'Taipei City, XinYi District XinYi Rd Sec.5, Nr.8, 14F Taipei Manhattan Building', '886 (02) 8758-2205', '886 (02) 8758-2333', NULL, NULL, ':service@steinadlerco.com', '', NULL, NULL, 'yacoxd', '2014-02-17 10:45:12', 13),
(2, 'Hong Kong', 'No 109-111 Gloucester Road, 14F, Tung Wai Commercial Building, Wanchai', '852 3752-1937', '852 3013-7020', NULL, NULL, 'service@steinadlerco.com', '', NULL, NULL, 'yacoxd', '2014-02-17 10:46:14', 13),
(3, 'Shanghai', '8F Yueda 889, No.1111 Chang Shou Rd. Jing''an district, Shanghai', '86 (0) 21-2230-1889', '86 (0) 21-2230-1777', NULL, NULL, 'service@steinadlerco.com', '', NULL, NULL, 'yacoxd', '2014-02-17 10:46:38', 13),
(4, 'Guatemala', 'Centro Empresarial Zona Pradera, Torre I, Nr. 1207', '502 2221-6154', '502 4212-0743', NULL, NULL, 'service@steinadlerco.com', '', NULL, NULL, 'yacoxd', '2014-02-17 10:47:03', 13),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_login_attempt`
--

CREATE TABLE IF NOT EXISTS `st_login_attempt` (
  `at_id` int(11) NOT NULL AUTO_INCREMENT,
  `at_ip_address` varchar(45) DEFAULT NULL,
  `at_time` datetime DEFAULT NULL,
  `at_user` int(11) NOT NULL,
  PRIMARY KEY (`at_id`),
  KEY `fk_user_id__user_idx` (`at_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `st_login_attempt`
--

INSERT INTO `st_login_attempt` (`at_id`, `at_ip_address`, `at_time`, `at_user`) VALUES
(1, '127.0.0.1', '2014-01-05 04:53:25', 1),
(2, '127.0.0.1', '2014-01-05 04:57:21', 1),
(3, '127.0.0.1', '2014-01-16 11:30:29', 1),
(4, '127.0.0.1', '2014-01-21 06:15:20', 1),
(5, '127.0.0.1', '2014-01-21 06:15:25', 1),
(6, '127.0.0.1', '2014-02-09 06:11:36', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_new`
--

CREATE TABLE IF NOT EXISTS `st_new` (
  `new_id` int(11) NOT NULL AUTO_INCREMENT,
  `new_title` varchar(250) DEFAULT NULL,
  `new_descripton` text,
  `new_date` datetime DEFAULT NULL,
  `new_page` int(11) NOT NULL,
  `new_user_created` varchar(45) DEFAULT NULL,
  `new_user_modified` varchar(45) DEFAULT NULL,
  `new_date_created` datetime DEFAULT NULL,
  `new_date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`new_id`),
  KEY `fk_news_page_idx` (`new_page`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `st_new`
--

INSERT INTO `st_new` (`new_id`, `new_title`, `new_descripton`, `new_date`, `new_page`, `new_user_created`, `new_user_modified`, `new_date_created`, `new_date_modified`) VALUES
(4, NULL, 'sadfsad', '2014-01-04 00:00:00', 17, 'yacoxd', NULL, '2014-01-17 12:44:14', NULL),
(5, NULL, 'Our Guatemala City Branch is now ready for business. Check out our Guatemala City office; contact details in the CONTACT US link.', '2013-10-29 00:00:00', 16, 'yacoxd', NULL, '2014-02-17 10:38:44', NULL),
(6, NULL, 'Lobster Season begins! Notice to our customers: Regulations on Lobster Fishing are being strictly followed by our direct suppliers and fisheries. Fresh Lobster is now available from Canada and the Caribbean. Contact us for more information. ', '2013-07-01 00:00:00', 16, 'yacoxd', NULL, '2014-02-17 10:39:07', NULL),
(7, NULL, 'Our Shanghai Branch is now ready for business. Check out our Shanghai office contact details in the CONTACTS US link.', '2013-04-12 00:00:00', 16, 'yacoxd', NULL, '2014-02-17 10:39:25', NULL),
(8, NULL, 'Our Logistics division website is up and running! Check it out at www.steinadlerlogistics.com ', '2013-02-02 00:00:00', 16, 'yacoxd', NULL, '2014-02-17 10:39:45', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_page`
--

CREATE TABLE IF NOT EXISTS `st_page` (
  `pa_id` int(11) NOT NULL AUTO_INCREMENT,
  `pa_title` varchar(250) DEFAULT NULL,
  `pa_tags` text,
  `pa_description` text,
  `pa_url` text,
  `pa_language` int(11) NOT NULL,
  `pa_user_createed` varchar(45) DEFAULT NULL,
  `pa_user_modified` varchar(45) DEFAULT NULL,
  `pa_date_created` datetime DEFAULT NULL,
  `pa_date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`pa_id`),
  KEY `fk_page_language_idx` (`pa_language`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `st_page`
--

INSERT INTO `st_page` (`pa_id`, `pa_title`, `pa_tags`, `pa_description`, `pa_url`, `pa_language`, `pa_user_createed`, `pa_user_modified`, `pa_date_created`, `pa_date_modified`) VALUES
(1, 'Home', 'Home', 'Home ', 'home', 1, 'admin', 'yacoxd', '2014-01-11 00:00:00', '2014-02-17 10:37:12'),
(2, 'En 1', 'En 2', 'En 3', 'home', 2, 'admin', 'yacoxd', '2014-01-11 00:00:00', '2014-01-12 01:42:39'),
(3, '', '', '', 'home', 3, 'admin', 'yacoxd', '2014-01-11 00:00:00', '2014-02-04 04:05:18'),
(4, 'Industrial', 'INDUSTRIAL', 'INDUSTRIAL', 'industrial', 1, 'admin', 'yacoxd', '2014-01-11 00:00:00', '2014-02-17 10:41:32'),
(5, NULL, NULL, NULL, 'industrial', 2, 'admin', 'yacoxd', '2014-01-11 00:00:00', NULL),
(6, NULL, NULL, NULL, 'industrial', 3, 'admin', 'yacoxd', '2014-01-11 00:00:00', NULL),
(7, 'Construction', 'Construction', 'Construction', 'construction', 1, 'admin', 'yacoxd', '2014-01-11 00:00:00', '2014-02-17 10:40:19'),
(8, NULL, NULL, NULL, 'construction', 2, 'admin', 'yacoxd', '2014-01-11 00:00:00', NULL),
(9, NULL, NULL, NULL, 'construction', 3, 'admin', 'yacoxd', '2014-01-11 00:00:00', NULL),
(10, 'Agribusiness', 'Agribusiness', 'Agribusiness', 'agribusiness', 1, 'admin', 'yacoxd', '2014-01-11 00:00:00', '2014-02-17 10:43:17'),
(11, NULL, NULL, NULL, 'agribusiness', 2, 'admin', 'yacoxd', '2014-01-11 00:00:00', NULL),
(12, NULL, NULL, NULL, 'agribusiness', 3, 'admin', 'yacoxd', '2014-01-11 00:00:00', NULL),
(13, 'CONTACT US', 'CONTACT US', 'CONTACT US', 'locations', 1, 'admin', 'yacoxd', NULL, '2014-02-17 10:44:37'),
(14, NULL, NULL, NULL, 'locations', 2, 'admin', 'yacoxd', NULL, NULL),
(15, NULL, NULL, NULL, 'locations', 3, 'admin', 'yacoxd', NULL, NULL),
(16, 'About Us', 'About Us', 'About Us', 'about_us', 1, 'admin', 'yacoxd', NULL, '2014-02-17 10:37:46'),
(17, 'about e', 'about e', 'about e', 'about_us', 2, 'admin', 'yacoxd', NULL, '2014-01-16 12:27:43'),
(18, NULL, NULL, NULL, 'about_us', 3, 'admin', 'yacoxd', NULL, NULL),
(19, 'Services', 'Services', 'Services', 'services', 1, 'admin', 'yacoxd', NULL, '2014-02-17 10:47:46'),
(20, NULL, NULL, NULL, 'services', 2, 'admin', 'yacoxd', NULL, NULL),
(21, NULL, NULL, NULL, 'services', 3, 'admin', 'yacoxd', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_product`
--

CREATE TABLE IF NOT EXISTS `st_product` (
  `pr_id` int(11) NOT NULL AUTO_INCREMENT,
  `pr_name` varchar(250) DEFAULT NULL,
  `pr_description` text,
  `pr_image` text,
  `pr_title_image` text,
  `pr_alt_image` text,
  `pr_page` int(11) NOT NULL,
  `pr_catalog` varchar(250) DEFAULT NULL,
  `pr_user_created` varchar(45) DEFAULT NULL,
  `pr_date_created` datetime DEFAULT NULL,
  `pr_user_modified` varchar(45) DEFAULT NULL,
  `pr_date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`pr_id`),
  KEY `fk_productos_page_idx` (`pr_page`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `st_product`
--

INSERT INTO `st_product` (`pr_id`, `pr_name`, `pr_description`, `pr_image`, `pr_title_image`, `pr_alt_image`, `pr_page`, `pr_catalog`, `pr_user_created`, `pr_date_created`, `pr_user_modified`, `pr_date_modified`) VALUES
(1, 'EQUIPMENT', '<p>We offer aA wide range of industrial equipment, including fForklifts, overhead cranes, agricultural machinery, truck tires, truck scales, trailer &amp; truck chassis and dump trucks. All of our products complying with the highest quality standards and good manufacturing practices.</p>', 'productos-equipment.png', 'EQUIPMENT', 'EQUIPMENT', 4, 'Certificacion_de_Cumplimiento_persona_individual_y_juridica.pdf', NULL, NULL, 'yacoxd', '2014-02-17 10:41:44'),
(2, 'ENERGY', '<p>We can provide our customers with tailor-made solutions when it comes to their power supply needs. We exclusively manage 4 lines of energy products: Independent solar generators and equipment, on-grid solar generators and equipment and fuel-based generators. Our 4th product is, also a generator but instead of energy, it can supply drinkable potable and drinking waterand clean water. &nbsp;</p>', 'productos-energy.png', 'Energy', 'Energy', 4, NULL, NULL, NULL, 'yacoxd', '2014-02-17 10:41:57'),
(3, 'SOLAR LIGHTING', '<p>We offer dDifferent sSolutions to fit your lighting needs, mostly focused on city and park lighting, solar sStreet lighting, commercial and industrial lLighting. Our efficient LED lamps are able to save up to 85 percent of the cost compared to conventional lighting solutions.</p>', 'productos-solar-lightning.png', 'SOLAR LIGHTING', 'SOLAR LIGHTING', 4, NULL, NULL, NULL, 'yacoxd', '2014-02-17 10:42:11'),
(4, 'Steel', NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(5, 'Wire & Mesh', NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(6, 'Interiors', NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL),
(7, 'Steel', NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL),
(8, 'Wire & Mesh', NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL),
(9, 'Interiors', NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL),
(10, 'STEEL', '<p>A wide range of Steel products are made and, which can be totally customized to fit your needs. All of our Steel Products comply with the highest quality standards and good manufacturing practices.</p>', 'productos-steel.png', 'Steel', 'Steel', 7, 'Certificacion_de_Cumplimiento_persona_individual_y_juridica.pdf', NULL, NULL, 'yacoxd', '2014-02-17 10:40:36'),
(11, 'WIRE & MESH', '<p>Our different types of steel wire, galvanized wire, wire-mesh and heavy duty nails, including roofing nails and concrete nails. Every item is produced according to the highest manufacturing standards and ensuresing durable quality.</p>', 'productos-wire.png', 'WIRE & MESH', 'WIRE & MESH', 7, 'GRUPO-NUEVA-VIDA-EN-CRISTO-volante.pdf', NULL, NULL, 'yacoxd', '2014-02-17 10:40:52'),
(12, 'Interiors & Finishing ', '<p>We offer a wide selection of finishing products and interior design products, such as plywood, gypsum boards, roofing tiles, dry wall, wood veneered panels, PVC and fiberglass panels, PVC doors and special weather and sound insulating materials.</p>', 'productos-interiors.png', 'Interiors & Finishing ', 'Interiors & Finishing ', 7, 'Trabajo-10.pdf', NULL, NULL, 'yacoxd', '2014-02-17 10:41:07'),
(13, NULL, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL),
(19, 'Timber and special woods', '<p>We run a responsible and sustainable business. Most of our wood products and timber is are exported from Nicaragua, one of the few countries which that allowspermit to exporting special wood types such as cocobolo, teak, and rosewood, among others. Sustainability and re-plantation are essential parts of our business, as well as. Also creating jobs and enhancing export volume for the country of Nicaragua. Our timber is used in Asia for a wide variety of finished quality products.&nbsp;&nbsp;</p>', 'productos-timber-and-special-woods.png', 'TIMBER AND SPECIAL WOODS', 'TIMBER AND SPECIAL WOODS', 10, NULL, NULL, NULL, 'yacoxd', '2014-02-17 10:43:39'),
(20, 'Meat & Seafood ', '<p>We can provide our customers with excellent meat types and seafood, all original from Central America and the Caribbean. One of our top-selling products is our Caribbean &ldquo;Spiny Lobster&rdquo; which can be sold whole lobster or tails only.&nbsp; Other product lines are also available, such as Spanish Pork cold cuts or &ldquo;Iberico&rdquo; ham, chicken paws as well as other chicken cuts, shrimp and other types of fish are also available. Please check out catalog for more information about our products.</p>', 'productos-meat.png', 'Meat & Seafood ', 'Meat & Seafood ', 10, NULL, NULL, NULL, 'yacoxd', '2014-02-17 10:43:56'),
(21, 'Coffee ', '<p>All of our coffee is exported from Guatemala to one of our Asian branches, where we take care of its roasting and quality assurance. Our business is focused on reaching the food service industry, with freshly roasted coffee according to their taste, type and packaging needs. We are proudly the first Latin-American coffee roaster established in Asia Pacific. For more information, please download our product catalog.</p>', 'productos-coffee.png', 'Coffee ', 'Coffee ', 10, NULL, NULL, NULL, 'yacoxd', '2014-02-17 10:44:11'),
(22, NULL, NULL, NULL, NULL, NULL, 11, NULL, NULL, NULL, NULL, NULL),
(23, NULL, NULL, NULL, NULL, NULL, 11, NULL, NULL, NULL, NULL, NULL),
(24, NULL, NULL, NULL, NULL, NULL, 11, NULL, NULL, NULL, NULL, NULL),
(25, NULL, NULL, NULL, NULL, NULL, 12, NULL, NULL, NULL, NULL, NULL),
(26, NULL, NULL, NULL, NULL, NULL, 12, NULL, NULL, NULL, NULL, NULL),
(27, NULL, NULL, NULL, NULL, NULL, 12, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_service`
--

CREATE TABLE IF NOT EXISTS `st_service` (
  `sv_id` int(11) NOT NULL AUTO_INCREMENT,
  `sv_title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sv_description` text COLLATE utf8_unicode_ci,
  `sv_page` int(11) DEFAULT NULL,
  PRIMARY KEY (`sv_id`),
  KEY `fk_service_page_idx` (`sv_page`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `st_service`
--

INSERT INTO `st_service` (`sv_id`, `sv_title`, `sv_description`, `sv_page`) VALUES
(1, 'Cocoa (CC)', '<p>Exchange: ICE<br />Contract Size: 10 Metric Tons</p>', 19),
(2, 'Coffee (KC)', '<p>Exchange: ICE<br />Contract Size: 37,500 pounds</p>', 19),
(3, 'Corn (C)', '<p>Exchange: CBOT<br />Contract Size: 5,000 Bushels</p>', 19),
(4, 'Soybeans (S)', '<p>Exchange: CBOT<br />Contract Size: 5,000 Bushels</p>', 19),
(5, 'Sugar (SB)', '<p>Exchange: ICE<br />Contract Size: 112,000 Pounds</p>', 19),
(6, NULL, NULL, 20),
(7, NULL, NULL, 20),
(8, NULL, NULL, 20),
(9, NULL, NULL, 20),
(10, NULL, NULL, 20),
(11, NULL, NULL, 20),
(12, NULL, NULL, 21),
(13, NULL, NULL, 21),
(14, NULL, NULL, 21),
(15, NULL, NULL, 21),
(16, NULL, NULL, 21),
(17, NULL, NULL, 21),
(18, 'Wheat (W)', '<p>Exchange: CBOT<br />Contract Size: 5,000 Bushels</p>', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_text`
--

CREATE TABLE IF NOT EXISTS `st_text` (
  `text_id` int(11) NOT NULL AUTO_INCREMENT,
  `text_description` text COLLATE utf8_unicode_ci,
  `text_page` int(11) NOT NULL,
  `text_order` int(11) DEFAULT NULL,
  `text_type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`text_id`),
  KEY `fk_text_page_idx` (`text_page`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=88 ;

--
-- Volcado de datos para la tabla `st_text`
--

INSERT INTO `st_text` (`text_id`, `text_description`, `text_page`, `text_order`, `text_type`) VALUES
(1, 'Steinadler is the German name for the  "Golden Eagle" species. ', 1, 1, 'INPUT'),
(2, 'En 1', 2, 1, 'INPUT'),
(3, '', 3, 1, 'INPUT'),
(4, 'Their excellent accuracy for achieving what they aim for,  their sharp vision and their high altitude flight is what inspires us to accomplish goals and provide excellent service every day. ', 1, 2, 'INPUT'),
(5, 'En 2', 2, 2, 'INPUT'),
(6, '在德文中，Steinadler的意思是“金雕”。金雕命中目标的高度精准性、锐利的视野、飞行的高度等等，每日都激励着我们努力地实现目标并提供优质的服务。', 3, 2, 'INPUT'),
(7, 'INDUSTRIAL', 4, 1, 'INPUT'),
(8, NULL, 5, 1, 'INPUT'),
(9, NULL, 6, 1, 'INPUT'),
(10, '<p style="text-align: left;">At Steinadler we bring our customers a great selection of industrial supplies and materials. We offer a wide range and scale of products, including industrial motor vehicles, agricultural motor vehicles, forklifts, cranes and overhead cranes, solar and diesel energy plants and LED lighting among other electrical and industrial tools. We work hand in hand with major producers and plants in Asia, providing our service to industrial and individual customers. As part of our services, our company also conducts pre-shipment inspections in order to always provide a transparent, top-notch service and a good customer experience for the customer. Our company runs under a strong financial backupendorsement, giving customers assurance and flexibility on their shipping/purchasing/financing choices. Please click on each category for more information about our product lines. If a part or product is not listed, contact us for more details and services.</p>', 4, 2, 'TEXTAREA'),
(11, NULL, 5, 2, 'TEXTAREA'),
(12, NULL, 6, 2, 'TEXTAREA'),
(13, 'Please click on each category for more information about our product lines. If a part or product is not listed, contact us for more details and services.', 4, 3, 'TEXTAREA'),
(14, NULL, 5, 3, 'TEXTAREA'),
(15, NULL, 6, 3, 'TEXTAREA'),
(16, 'BUILDING MATERIALS', 7, 1, 'INPUT'),
(17, NULL, 8, 1, 'INPUT'),
(18, NULL, 9, 1, 'INPUT'),
(19, '<p>With our main export markets being Central America, South America and the Caribbean we are focused on supplying Land Developers and Distributors with the best and most durable building materials and building equipment. Not only have we partnered-up with some of the largest factories in Asia (some of them even listed as Ffortune 500 companies), but we also run our own logistics Logistics divisionDivision. As part of our services, our company also conducts pre-shipment inspections in order to always provide a transparent, top-notch service and customer experience. Our company runs under a strong financial backup, giving customers assurance and flexibility on their shipping/purchasing/financing choices. Please click on each category for more information about our product lines. If a part or product is not listed, contact us for more details and services.</p>', 7, 2, 'TEXTAREA'),
(20, NULL, 8, 2, 'TEXTAREA'),
(21, NULL, 9, 2, 'TEXTAREA'),
(22, 'Please click on each category for more information about our product lines. If a part or product is not listed, contact us for more details and services.', 7, 3, 'TEXTAREA'),
(23, NULL, 8, 3, 'TEXTAREA'),
(24, NULL, 9, 3, 'TEXTAREA'),
(25, 'AGRIBUSINESS', 10, 1, 'INPUT'),
(26, NULL, 11, 1, 'INPUT'),
(27, NULL, 12, 1, 'INPUT'),
(28, '<p>Steinadler Agribusiness division was established due to the high demand of agricultural products in the Asia Pacific region and China. We are focused on 3 categories:</p>\r\n<p>1. Timber and special woods, which are essential for the furniture, flooring and veneer industries.</p>\r\n<p>2. Seafood and meat, which are an important commodity and a big part of nutrition.</p>\r\n<p>3. Coffee, which is exported from our own farms to our roasting facilities in Asia.</p>\r\n<p>Our agricultural products line is aimed to at the Asian markets which at the same time creates new jobs, wealth and better conditions for Latin American farmers and fisheries.&nbsp; As part of our services, we provide all the logistics chain and distribution from any of our Asian branches. Please click on each category for more information about our product lines. If a product is not listed, contact us for more details and services.</p>', 10, 2, 'TEXTAREA'),
(29, NULL, 11, 2, 'TEXTAREA'),
(30, NULL, 12, 2, 'TEXTAREA'),
(31, 'Please click on each category for more information about our product lines. If a product is not listed, contact us for more details and services.', 10, 3, 'TEXTAREA'),
(32, NULL, 11, 3, 'TEXTAREA'),
(33, NULL, 12, 3, 'TEXTAREA'),
(34, 'ABOUT US', 16, 1, 'INPUT'),
(35, 'about e 1', 17, 1, 'INPUT'),
(36, NULL, 18, 1, 'INPUT'),
(37, '<p>Steinadler is the German name for the species "Golden Eagle" species. Their excellent accuracy for achieving what they are aim for,ing to, their sharp vision and their high altitude flight is are what inspires us each day to accomplish goals and provide an excellent service every&nbsp; day. Not only by being accurate and aiming for perfection on in what we do, but to offering the best quality products under the same terms. At Steinadler Co. we focus on providing tailored Solutions.</p>\r\n<h3>Our Locations</h3>\r\n<p>Our offices are strategically located in Taipei, Hong Kong, Shanghai and in Guatemala City. Taiwan is a country rich in tradition and culture but contrastinged with high Technology and excellent logistics. Hong Kong, is our entrance to Mainland China, a city full of diverse culture but most important, strong financial services. Shanghai, a place known for its strong industry and excellent manufacturing quality. Guatemala became our important hub for Central and Latin America, where we can provide after-sales service and excellent assistance to our customers.&nbsp; All of our office locations were chosen aiming to fully support our clients and partners with a wide range of services.</p>', 16, 2, 'TEXTAREA'),
(38, '<p>about e 2</p>', 17, 2, 'TEXTAREA'),
(39, NULL, 18, 2, 'TEXTAREA'),
(72, 'OUR SERVICES', 19, 1, 'INPUT'),
(73, NULL, 20, 1, 'INPUT'),
(74, NULL, 21, 1, 'INPUT'),
(75, '<p>We provide capital management services by investing ion agricultural commodities, which are traded at the New York and Chicago Mercantile Stock Exchanges. We aim to provide you with flexible investment plans which fit your projections and expectations. We minimize risk on your investments by managing your portfolio using firm strategies, and based on our wide broad experience in agricultural markets troughout over the years. We specialize in trading cocoa, coffee, sugar, corn and, wheat among other commodities.</p>', 19, 2, 'TEXTAREA'),
(76, NULL, 20, 2, 'TEXTAREA'),
(77, NULL, 21, 2, 'TEXTAREA'),
(78, 'WHY COMMODITIES?', 19, 3, 'INPUT'),
(79, NULL, 20, 3, 'INPUT'),
(80, NULL, 21, 3, 'INPUT'),
(81, '<p>Through Over the past few years, we acquired vast experience by the trading of physical agricultural commodities, making us confident and able to obtain solid results. By knowing the markets, we can easily gain get an edgeadvantage and be able to trade in favorable conditions.</p>', 19, 4, 'TEXTAREA'),
(82, NULL, 20, 4, 'TEXTAREA'),
(83, NULL, 21, 4, 'TEXTAREA'),
(84, 'WHY', 19, 5, 'INPUT'),
(85, NULL, 20, 5, 'INPUT'),
(86, NULL, 21, 5, 'INPUT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `st_user`
--

CREATE TABLE IF NOT EXISTS `st_user` (
  `us_id` int(11) NOT NULL,
  `us_first_name` varchar(250) DEFAULT NULL,
  `us_last_name` varchar(250) DEFAULT NULL,
  `us_description` text,
  `us_email` varchar(50) NOT NULL,
  `us_username` varchar(50) NOT NULL,
  `us_password` varchar(250) DEFAULT NULL,
  `us_key_password` text,
  `us_date_password_modified` datetime DEFAULT NULL,
  `us_status` varchar(250) DEFAULT NULL,
  `us_user_created` varchar(250) DEFAULT NULL,
  `us_date_created` varchar(250) DEFAULT NULL,
  `us_user_modified` varchar(250) DEFAULT NULL,
  `us_date_modified` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`us_id`),
  UNIQUE KEY `us_email_UNIQUE` (`us_email`),
  UNIQUE KEY `us_username_UNIQUE` (`us_username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `st_user`
--

INSERT INTO `st_user` (`us_id`, `us_first_name`, `us_last_name`, `us_description`, `us_email`, `us_username`, `us_password`, `us_key_password`, `us_date_password_modified`, `us_status`, `us_user_created`, `us_date_created`, `us_user_modified`, `us_date_modified`) VALUES
(1, 'Abner', 'Tellez', NULL, 'atellezsazo@gmail.com', 'yacoxd', '$2a$08$AOmEunWrZa296eg6cZurf.i6Wp.D97WytnhcSW11oN2fIOnDRlK76', '47685526ec46d4ffdf8263816fd4f7e9', '2014-01-01 04:20:54', 'A', 'yacoxd', '2013-12-15', NULL, NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `st_location`
--
ALTER TABLE `st_location`
  ADD CONSTRAINT `fk_locations_page` FOREIGN KEY (`lo_page`) REFERENCES `st_page` (`pa_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `st_login_attempt`
--
ALTER TABLE `st_login_attempt`
  ADD CONSTRAINT `fk_user_id__user` FOREIGN KEY (`at_user`) REFERENCES `st_user` (`us_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `st_new`
--
ALTER TABLE `st_new`
  ADD CONSTRAINT `fk_news_page` FOREIGN KEY (`new_page`) REFERENCES `st_page` (`pa_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `st_page`
--
ALTER TABLE `st_page`
  ADD CONSTRAINT `fk_page_language` FOREIGN KEY (`pa_language`) REFERENCES `st_language` (`lang_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `st_product`
--
ALTER TABLE `st_product`
  ADD CONSTRAINT `fk_productos_page` FOREIGN KEY (`pr_page`) REFERENCES `st_page` (`pa_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `st_service`
--
ALTER TABLE `st_service`
  ADD CONSTRAINT `fk_service_page` FOREIGN KEY (`sv_page`) REFERENCES `st_page` (`pa_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `st_text`
--
ALTER TABLE `st_text`
  ADD CONSTRAINT `fk_text_page` FOREIGN KEY (`text_page`) REFERENCES `st_page` (`pa_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
