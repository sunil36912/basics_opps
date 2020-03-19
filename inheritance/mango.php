<?php
include('autoload.php');

class Mango extends Froot
{


    public function joos()
    {
        echo 'here is joos of mango';
    }
}
$mango = new Mango();
$mango->setColor('red');
echo $mango->color;
