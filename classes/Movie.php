<?php 


class Movie {
    public $titolo;
    public $anno_uscita;
    public $genere;
    public $regia;
    public $poster;

    function __construct($_titolo,$_anno_uscita,$_genere) 
    {
        $this->titolo = $_titolo;
        $this->anno_uscita = $_anno_uscita;
        $this->genere = $_genere;
    }

    public function getPosterPath($path) {
        $this->poster = './'.$path;
    }

    public function printMovieCard() {
?>
    <div class="card">
        <div class="poster">
            <img src="<?php echo $this->poster ?>" alt="cover">
        </div>
        <div class="desc">
            <h2><?php echo $this->titolo ?></h2>
            <h3><?php echo $this->anno_uscita ?></h3>
            <div style="padding: 8px 0;"><?php echo $this->genere ?></div>
            <div><?php echo $this->regia ?></div>
        </div>
    </div>

<?php
    }

}



?>