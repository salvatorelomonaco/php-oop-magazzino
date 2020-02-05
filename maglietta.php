<?php 

include_once 'prodotto.php';

class Maglietta extends Prodotto {
    public $taglia;

    public function __construct($titolo, $codice, $prezzo, $size) {
        //richiamo il construct di Libro
        parent::__construct($titolo,$codice, $prezzo);
        $this->taglia = $size;
    }
}

?>