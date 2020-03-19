<?php
spl_autoload_register('myAutoloader');
class Froot
{
    public $frootname;
    public $color;
    public $quantity;

    public function setColor(frootsname $frootsname)
    {

        $this->frootname = $frootsname;
    }
}
