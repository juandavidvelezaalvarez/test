<?php
error_reporting(E_ALL);
$url = 'https://servicios.laequidadseguros.coop/cotizador/ServletCodigoFasecoldaPlaca?placa=bru268';
$homepage = file_get_contents($url);
echo $homepage;
?>
