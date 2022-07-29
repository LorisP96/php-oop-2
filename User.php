<?php
    require_once __DIR__ . '/Coupon.php';
    
    class User {
        use Coupon;
        public $userPrice = 0;
        public $totalPice = 0;
        public $cart = [];

        public function getPrice($product_) {
            
            $this->getCoupon();
            $this->userPrice = $product_->price - ($product_->price * $this->sale) / 100;
            $this->cart[] = $product_;
            $this->totalPrice += $this->userPrice;
            return "$this->totalPrice €";
        }
    };

    $marcello = new User;
        $marcello->name = 'Marcello Marcelluzzo';
        $marcello->email = 'marcelluzzo@marcello.it';
    
    $host1234 = new User;
?>

<!-- require_once __DIR__ . '/User.php';

class UserLogged extends User {
    $UserLogged->sale = 20;

    public function __construct($_name, $_email) {
        $UserLogged->name = $_name;
        $UserLogged->email = $_email;
    }
}; -->