<?php
include('header.php');
?>


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS `2022.vinka.paul-valentin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `2022.vinka.paul-valentin`;

CREATE TABLE `PlaciVideoAMD` (
  `id` int(11) NOT NULL,
  `Producator` varchar(255) NOT NULL,
  `Serie` varchar(255) NOT NULL,
  `Numar` varchar(255) NOT NULL,
  `Performanta` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `PlaciVideoAMD` (`id`, `Producator`, `Serie`, `Numar`, `Performanta`) VALUES
(2, 'AMD', '5000', '5500XT', 42),
(3, 'NVIDIA', 'RTX', '2060', 50),
(4, 'AMD', '5000', '5700XT', 40),
(5, 'AMD', '5000', '5800XT', 50),
(6, 'AMD', '6000', '6500', 12),
(7, 'AMD', '6000', '6500XT', 15),
(9, 'AMD', '6000', '6600XT', 40),
(10, 'AMD', '6000', '6700XT', 60),
(11, 'AMD', '6000', '6800XT', 70),
(12, 'NVIDIA', 'RTX', '3060', 90),
(13, 'AMD', 'Radeon HD', 'HD6670', 2);

CREATE TABLE `ProcesoareAMD` (
  `id` int(11) NOT NULL,
  `Producator` varchar(255) NOT NULL,
  `Serie` varchar(255) NOT NULL,
  `Numar` varchar(255) NOT NULL,
  `Performanta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `ProcesoareAMD` (`id`, `Producator`, `Serie`, `Numar`, `Performanta`) VALUES
(1, 'AMD', 'Ryzen 5', 'Ryzen 5 2600', 45),
(6, 'AMD', 'Ryzen 7', 'Ryzen 3700x', 65),
(7, 'AMD', 'Ryzen 7', 'Ryzen 5700x', 81),
(8, 'AMD', 'RYZEN 3', '3200G', 15),
(9, 'AMD', 'Ryzen 3', '3100', 20),
(15, 'AMD ', 'ATHLON X2', '5200+', 2),
(16, 'INTEL', 'PENTIUM', 'G4560', 10);

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `user`, `passwd`, `obs`) VALUES
(1, 'admin', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 'Admin'),
(2, 'admin2', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 'Admin2'),
(3, 'admin3', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 'Admin3');


ALTER TABLE `PlaciVideoAMD`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `ProcesoareAMD`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `PlaciVideoAMD`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
ALTER TABLE `ProcesoareAMD`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;