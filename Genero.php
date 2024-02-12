<?php declare(strict_types=1);


enum Genero : string{
    case Drama = "drama";
    case Comedia = "comedia";
    case Belica = "belica";
    case Ficcion = "ciencia ficción";

    public function getGenero() : string{
        return match($this){
            self::Drama => "drama",
            self::Comedia => "comedia",
            self::Belica => "belica",
            self::Ficcion => "ciencia ficicón"
        };
    }
}
?>