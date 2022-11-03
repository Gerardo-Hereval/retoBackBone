-- -------------------------------------------------------------
-- TablePlus 5.1.0(468)
--
-- https://tableplus.com/
--
-- Database: reto
-- Generation Time: 2022-11-03 03:41:25.5720
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE TABLE `zip_codes` (
  `d_codigo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_asenta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_tipo_asenta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `D_mnpio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_ciudad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_CP` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_oficina` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_CP` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_tipo_asenta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_mnpio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_asenta_cpcons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_zona` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_cve_ciudad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;