

CREATE TABLE `usuario` (
  `id` int(5) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `tipodocumento` varchar(50) NOT NULL,
  `numeroDocumento` varchar(15) NOT NULL,
  `div` varchar(3) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `edad` varchar(3) NOT NULL,
  `departamento` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL);

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `usuario`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

