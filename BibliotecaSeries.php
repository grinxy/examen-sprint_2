<?php declare(strict_types=1);
require_once "Serie.php";
class BibliotecaSeries
{

    private array $series = [];

    public function __construct(array $series)
    {
        $this->series = $series;

    }

    public function anadirSerie(Serie $serie): void
    {
        $this->series[] = $serie;
    }
    public function ratingAbove(): string
    {
        $seriesAbove = [];  
        $output = "";
        foreach ($this->series as $serie) {
            if ($serie->getRating() >= 4) {
                $seriesAbove[] = $serie;
                $output .= $serie;
            }
        }
        return  "Las series con rating superior o igual a 4 son:" . $output;

    }

    public function maxTemporadas(): string
    {
        $maxTemporadas = 0;


        foreach ($this->series as $serie) {

            if ($serie->getNumTemporadas() > $maxTemporadas) {
                $serieMaxTemporadas = $serie;
            }
        }
        if (!empty($serieMaxTemporadas)) {
            $output = PHP_EOL . "La serie con mas temporadas es: $serieMaxTemporadas";
        } else {
            $output = PHP_EOL . "No se han encontrado series";
        }

        return $output;
    }
}
?>