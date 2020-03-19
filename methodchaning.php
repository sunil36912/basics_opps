<?php
class MyFunction
{
    public $dinner = 40;
    public $desert = 50;
    public $coldring = 5;
    public $bill;

    public function __construct($bill)
    {
        $this->bill = $bill;
    }

    public function dinner($person)
    {
        $this->bill +=  $this->dinner * $person;
        return $this;
    }

    public function desert($person)
    {
        $this->bill +=  $this->desert * $person;
        return $this;
    }
    public function __destruct()
    {
        echo $this->bill;
    }
}

$myfunction = new MyFunction(4);
$myfunction->dinner(4)->bill;
