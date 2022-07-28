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
require_once __DIR__ . '/User.php';
$marcello->getCoupon($lettiera);
$marcello->getCoupon($croccantiniCani);
$host1234->getCoupon($lettiera);
$host1234->getCoupon($croccantiniCani);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Totale Utente Loggato <?php echo $marcello->totalPrice ?> € </h2>
    <h2> Totale Utente NON Loggato <?php echo $host1234->totalPrice ?> € </h2>
</body>
</html>