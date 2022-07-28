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

        // ?per genere|| creare array vuoto e pushare nell'array gli oggetti tramite funzione

        public function getInfo() {
            if ($this->animals === null && $this->use === null) {
                return "$this->name , $this->price €";
            } elseif ($this->animals === null && $this->use !== null){
                return "$this->name , accessorio comune, $this->price €";
            } elseif ($this->animals !== null && $this->use === null) {
                return "$this->name , per $this->animals, $this->price €";
            } else {
                return "$this->name , $this->use per $this->animals, $this->price €";
            }
        }
    }
?>