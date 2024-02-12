<?php declare(strict_types=1);
require_once "Genero.php";
class Serie
{

    private string $nombre;
    private int $numTemporadas;
    private string $inicioSerie;
    private int $rating;
    private Genero $genero;

    public function __construct(string $nombre, int $numTemporads, string $inicioSerie, int $rating, Genero $genero)
    {
        $this->nombre = $nombre;
        $this->numTemporadas = $numTemporads;
        $this->inicioSerie = $inicioSerie;
        $this->rating = $rating;
        $this->genero = $genero;
        
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }
    public function getNumTemporadas(): int
    {
        return $this->numTemporadas;
    }
    public function getInicioSerie(): string
    {
        return $this->inicioSerie;
    }
    public function getGenero(): string
    {
        return $this->genero->getGenero();
    }
    public function getRating(): int
    {
        return $this->rating;
    }
    public function setRating(int $rating) : void{
        $this->rating = $rating;
    }
 
    public function __toString(): string
    {
        return PHP_EOL . "Serie: $this->nombre - Numero Temporadas: $this->numTemporadas - Inicio Serie: $this->inicioSerie 
        - Genero: {$this->genero->getGenero()} Rating: $this->rating" . PHP_EOL;
    }
}




?>