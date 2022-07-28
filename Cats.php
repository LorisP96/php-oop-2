<?php   
require_once __DIR__ . '/Products.php';

class Cats extends Products {
    // override
    public $animals = 'gatti';
};

$lettiera = new Cats('Lettiera', 20.00); 
    $lettiera->use = 'accessorio';
?>