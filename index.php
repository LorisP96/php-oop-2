<!-- L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
BONUS:
Il pagamento avviene con la carta prepagata che deve contenere un saldo sufficiente all'acquisto. -->

<?php
require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/Dogs.php';
require_once __DIR__ . '/Cats.php';
require_once __DIR__ . '/Others.php';
var_dump($pettorina->getInfo(), $lettiera->getInfo(), $croccantiniCani->getInfo());
?>