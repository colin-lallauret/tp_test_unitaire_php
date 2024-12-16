<?php

class Money {
    private $amount;
    private $currency;

    public function __construct($amount, $currency) {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function __toString() {
        return $this->amount . ' ' . $this->currency;
    }
}

?>