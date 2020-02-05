<?php 

class Prodotto {

    public $tipologia;
    public $codice;
    public $prezzo;

    public function __construct($type, $code, $price) {
        $this->tipologia = $type;
        $this->codice = $code;
        $this->prezzo = '€.' .$price;
    }

    public function calcolaSconto($perc_sconto) {
        $sconto = $this->prezzo * $perc_sconto / 100;
        $prezzo_scontato = $this->prezzo - $sconto;
        return $prezzo_scontato;
    }
}

?>