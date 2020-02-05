<?php 

include_once 'prodotto.php';
include_once 'maglietta.php';

$prodotto1 = new Prodotto('Maglietta', 'magl123', 10);

echo '<pre>';
var_dump($prodotto1);
echo '</pre>';

$prodotto2 = new Prodotto('Pantaloni', 'pant123', 20);

echo '<pre>';
var_dump($prodotto2);
echo '</pre>';

$prodotto3 = new Prodotto('Scarpe', 'scarp123', 15);

echo '<pre>';
var_dump($prodotto3);
echo '</pre>';

$maglietta = new Maglietta('Maglietta', 'magl123', 10, 'M');

echo '<pre>';
var_dump($maglietta);
echo '</pre>';

?>