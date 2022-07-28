<?php   
require_once __DIR__ . '/Products.php';

class Dogs extends Products {
    // override
    public $animals = 'cani';
};

$pettorina = new Dogs('Pettorina', 15.00);
$croccantiniCani = new Dogs('Croccantini', 8);
    $croccantiniCani->use = 'cibo';
?>