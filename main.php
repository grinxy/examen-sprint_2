<?php declare(strict_types=1);
require_once "Serie.php";
require_once "Genero.php";
require_once "BibliotecaSeries.php";

$serie = new Serie("Fargo", 4, "24/12/2012", 3, Genero::Drama);
$serie2 = new Serie("Stranger Things", 5, "12/02/2008", 5, Genero::Ficcion);
$serie3 = new Serie("Succession", 5, "20/04/2020", 4, Genero::Belica);

$bibliotecaSeries = new BibliotecaSeries([$serie, $serie2, $serie3]);

echo $bibliotecaSeries->ratingAbove();
echo $bibliotecaSeries->maxTemporadas();


?>