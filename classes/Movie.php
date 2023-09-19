<?php 


class Movie {
    public $titolo;
    public $anno_uscita;
    public $genere;

    function __construct($_titolo,$_anno_uscita,$_genere) 
    {
        $this->titolo = $_titolo;
        $this->anno_uscita = $_anno_uscita;
        $this->genere = $_genere;
    }

    public function getMovie() {
        echo "<h2>{$this->titolo}</h2>
        <div>{$this->anno_uscita}</div>
        <div>{$this->genere}</div>";
    }
}



?>