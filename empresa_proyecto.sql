-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla transvinueza.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_ced_ruc` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cli_nom_rasocial` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `cli_direccion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cli_telefono` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cli_correo` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `cli_estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`cli_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla transvinueza.clientes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`cli_id`, `cli_ced_ruc`, `cli_nom_rasocial`, `cli_direccion`, `cli_telefono`, `cli_correo`, `cli_estado`) VALUES
	(1, '1745236695001', 'Obraciv', 'Parque la Carolina', '025512469', 'obraciv_ec@hotmail.com', 1),
	(2, '1722305679001', 'Emuldec', 'Edificio Metropolitano', '023544109', 'emuldec_ecu@hotmail.com', 1);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Volcando estructura para tabla transvinueza.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_ruc` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `emp_razon_social` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `emp_rep_legal` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `emp_telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `emp_direccion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `emp_correo` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla transvinueza.empresa: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` (`emp_id`, `emp_ruc`, `emp_razon_social`, `emp_rep_legal`, `emp_telefono`, `emp_direccion`, `emp_correo`) VALUES
	(1, '1792309727001', 'Transvinueza Cia Ltda.', 'Edison Miguel Vinueza', '023678556', 'Cutuglahua', 'edison-transv@hotmail.com');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;

-- Volcando estructura para tabla transvinueza.facturas
CREATE TABLE IF NOT EXISTS `facturas` (
  `fac_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `cli_id` int(11) NOT NULL,
  `cg_id` int(11) NOT NULL,
  `fac_numero` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `fac_fecha` date NOT NULL,
  `fac_iva` float NOT NULL DEFAULT '0',
  `fac_descuento` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`fac_id`),
  KEY `emp_id` (`emp_id`),
  KEY `cli_id` (`cli_id`),
  KEY `FK_facturas_guias_transporte` (`cg_id`),
  CONSTRAINT `FK_facturas_clientes` FOREIGN KEY (`cli_id`) REFERENCES `clientes` (`cli_id`),
  CONSTRAINT `FK_facturas_empresa` FOREIGN KEY (`emp_id`) REFERENCES `empresa` (`emp_id`),
  CONSTRAINT `FK_facturas_guias_transporte` FOREIGN KEY (`cg_id`) REFERENCES `guias_transporte` (`cg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla transvinueza.facturas: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `facturas` DISABLE KEYS */;
INSERT INTO `facturas` (`fac_id`, `emp_id`, `cli_id`, `cg_id`, `fac_numero`, `fac_fecha`, `fac_iva`, `fac_descuento`) VALUES
	(1, 1, 1, 1, '1', '2021-06-01', 1, 0),
	(2, 1, 1, 1, '2', '2021-06-01', 1, 0),
	(3, 1, 2, 2, '3', '2021-06-06', 1, 0),
	(4, 1, 2, 1, '4', '2021-06-06', 1, 200),
	(5, 1, 2, 1, '5', '2021-06-08', 1, 500);
/*!40000 ALTER TABLE `facturas` ENABLE KEYS */;

-- Volcando estructura para tabla transvinueza.facturas_detalle
CREATE TABLE IF NOT EXISTS `facturas_detalle` (
  `det_id` int(11) NOT NULL AUTO_INCREMENT,
  `fac_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `det_cant` float NOT NULL,
  `det_valu` float NOT NULL,
  PRIMARY KEY (`det_id`),
  KEY `FK_facturas_detalle_facturas` (`fac_id`),
  KEY `FK_facturas_detalle_productos` (`pro_id`),
  CONSTRAINT `FK_facturas_detalle_facturas` FOREIGN KEY (`fac_id`) REFERENCES `facturas` (`fac_id`),
  CONSTRAINT `FK_facturas_detalle_productos` FOREIGN KEY (`pro_id`) REFERENCES `productos` (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla transvinueza.facturas_detalle: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `facturas_detalle` DISABLE KEYS */;
INSERT INTO `facturas_detalle` (`det_id`, `fac_id`, `pro_id`, `det_cant`, `det_valu`) VALUES
	(4, 2, 1, 1600, 1.25),
	(5, 1, 1, 500, 1.25),
	(7, 3, 2, 90, 4.5),
	(8, 3, 4, 100, 4.25),
	(11, 4, 3, 1000, 3),
	(12, 4, 1, 1200, 2);
/*!40000 ALTER TABLE `facturas_detalle` ENABLE KEYS */;

-- Volcando estructura para tabla transvinueza.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla transvinueza.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla transvinueza.guias_transporte
CREATE TABLE IF NOT EXISTS `guias_transporte` (
  `cg_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_id` int(11) NOT NULL,
  `per_id` int(11) NOT NULL,
  `chofer_id` int(11) NOT NULL,
  `tra_id` int(11) NOT NULL,
  `tip_id` int(11) NOT NULL,
  `cg_fecha` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `cg_numero_guia` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `cg_origen` varchar(200) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `cg_destino` varchar(200) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `cg_observaciones` varchar(600) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`cg_id`),
  KEY `cli_id` (`cli_id`),
  KEY `per_id` (`per_id`),
  KEY `chofer_id` (`chofer_id`),
  KEY `tra_id` (`tra_id`),
  KEY `tip_id` (`tip_id`),
  CONSTRAINT `FK_guias_transporte_clientes` FOREIGN KEY (`cli_id`) REFERENCES `clientes` (`cli_id`),
  CONSTRAINT `FK_guias_transporte_personas` FOREIGN KEY (`per_id`) REFERENCES `personas` (`per_id`),
  CONSTRAINT `FK_guias_transporte_personas_2` FOREIGN KEY (`chofer_id`) REFERENCES `personas` (`per_id`),
  CONSTRAINT `FK_guias_transporte_tipos_producto` FOREIGN KEY (`tip_id`) REFERENCES `tipos_producto` (`tip_id`),
  CONSTRAINT `FK_guias_transporte_trailers` FOREIGN KEY (`tra_id`) REFERENCES `trailers` (`tra_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla transvinueza.guias_transporte: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `guias_transporte` DISABLE KEYS */;
INSERT INTO `guias_transporte` (`cg_id`, `cli_id`, `per_id`, `chofer_id`, `tra_id`, `tip_id`, `cg_fecha`, `cg_numero_guia`, `cg_origen`, `cg_destino`, `cg_observaciones`) VALUES
	(1, 1, 3, 4, 1, 1, '2021-06-06', '1', 'Ambato', 'Tulcán', NULL),
	(2, 2, 3, 4, 2, 2, '2021-06-05', '2', 'Esmeraldas', 'Guayaquil', NULL);
/*!40000 ALTER TABLE `guias_transporte` ENABLE KEYS */;

-- Volcando estructura para tabla transvinueza.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla transvinueza.migrations: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla transvinueza.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla transvinueza.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla transvinueza.personas
CREATE TABLE IF NOT EXISTS `personas` (
  `per_id` int(11) NOT NULL AUTO_INCREMENT,
  `per_cedula` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_apellidos` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_nombres` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_direccion` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_telefono` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_fnacimiento` date NOT NULL,
  `per_estado_civil` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_sexo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `per_usuario` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_tipo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `per_estado` int(11) NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`per_id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla transvinueza.personas: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` (`per_id`, `per_cedula`, `per_apellidos`, `per_nombres`, `per_direccion`, `per_telefono`, `per_fnacimiento`, `per_estado_civil`, `per_sexo`, `name`, `per_usuario`, `per_tipo`, `email`, `per_estado`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(3, '1710241926', 'Vinueza', 'Daniela', 'Guamani', '0985632237', '2021-05-11', 'soltera', 'femenino', 'Daniela Vinueza', 'daniela16v', 'A', 'daniela-vinueza1606@hotmail.com', 1, NULL, '$2y$10$0ks80iqsjDgx0SMPG/6Ig.O.nAoGA7cpHkq7uUjcA0p.x12MnR9PG', 'cYY6jzIXEOw2ougqFOLD3WpiMSxMf6EcGlDWqp0adbKVJ7T7ahmeOL6sDaQ1', '2021-05-11 21:48:16', '2021-05-11 21:48:16'),
	(4, '1735565852', 'Mendoza', 'Juan', 'El Beaterio', '0994512463', '1978-05-13', 'Casado', 'masculino', 'Juan Mendoza', 'mendozaju', 'C', 'mendozaj@hotmail.com', 1, NULL, '$10$0ks80iqsjDgx0SMPG/6Ig.O.nAoGA7cpHkq7uUjcA0p.x12MnR9PG', NULL, NULL, NULL),
	(5, '1715847896', 'Vinueza', 'Elizabeth', 'Guamani', '0985632237', '1993-05-24', 'Soltero', 'Mujer', 'Elizabeth Vinueza', 'eli24', 'E', 'elizabeth@hotmail.com', 1, NULL, '$2y$10$aSr2/vGNWqzDz6kWaJnuKO.McoeMkWKf9aVnS5Uas5u8MWlZBErmO', NULL, '2021-06-16 22:01:06', '2021-06-16 22:01:06');
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;

-- Volcando estructura para tabla transvinueza.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `tip_id` int(11) NOT NULL,
  `pro_descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `pro_observaciones` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`pro_id`),
  KEY `tip_id` (`tip_id`),
  CONSTRAINT `FK_productos_tipos_producto` FOREIGN KEY (`tip_id`) REFERENCES `tipos_producto` (`tip_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla transvinueza.productos: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`pro_id`, `tip_id`, `pro_descripcion`, `pro_observaciones`) VALUES
	(1, 1, 'Modificado de curado lento', NULL),
	(2, 2, 'Cloro', 'Contenedores frágiles'),
	(3, 1, 'Modificado tipo 4', NULL),
	(4, 2, 'Cloruro de sodio', NULL);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla transvinueza.tipos_producto
CREATE TABLE IF NOT EXISTS `tipos_producto` (
  `tip_id` int(11) NOT NULL AUTO_INCREMENT,
  `tip_descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `tip_estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`tip_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla transvinueza.tipos_producto: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tipos_producto` DISABLE KEYS */;
INSERT INTO `tipos_producto` (`tip_id`, `tip_descripcion`, `tip_estado`) VALUES
	(1, 'Asfalto', 1),
	(2, 'Químicos', 1),
	(3, 'Emulsión', 1);
/*!40000 ALTER TABLE `tipos_producto` ENABLE KEYS */;

-- Volcando estructura para tabla transvinueza.trailers
CREATE TABLE IF NOT EXISTS `trailers` (
  `tra_id` int(11) NOT NULL AUTO_INCREMENT,
  `tra_placa` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `tra_modelo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tra_color` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tra_año` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `tra_estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`tra_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla transvinueza.trailers: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `trailers` DISABLE KEYS */;
INSERT INTO `trailers` (`tra_id`, `tra_placa`, `tra_modelo`, `tra_color`, `tra_año`, `tra_estado`) VALUES
	(1, 'JAA5886', 'Internacional', 'Azul', '2008', 1),
	(2, 'PDA5886', 'Frightliner', 'Blanco', '2012', 1);
/*!40000 ALTER TABLE `trailers` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
