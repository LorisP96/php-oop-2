<?php  
    class Products {
        public $name;
        public $price = 0;
        public $animals;
        public $use;

        public function __construct ($_name, $_price) {
            $this->name = $_name;
            $this->price = $_price;
        }

        public function getInfo() {
            if ($this->animals === null && $this->use === null) {
                return "$this->name , $this->price €";
            } elseif ($this->animals === null && $this->use !== null){
                return "$this->name , accessorio comune, $this->price €";
            } elseif ($this->animals !== null && $this->use === null) {
                return "$this->name , per $this->animals, $this->price €";
            } else {
                return "$this->name , accessori per $this->animals, $this->price €";
            }
        }
    }
?>