<?php

class Money
{
    private $amount;
    private $currency;

    public function __construct($amount, $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function __toString()
    {
        return $this->amount . ' ' . $this->currency;
    }

    public function add(Money $that)
    {
        if ($this->currency !== $that->currency) {
            throw new Exception("Devises différentes");
        }
        return new Money($this->amount + $that->amount, $this->currency);
    }
}
