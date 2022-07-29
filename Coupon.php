<?php

trait Coupon {
    public $name;
    public $email;
    public $sale = 0;

    public function getCoupon() {
        if($this->name === null || $this->email === null ) {
            $this->sale = 0;
        } else {
            $this->sale = 20;
        }
    }
}

?>