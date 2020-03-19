<?php
include('autoload.php');

class Orange extends Froot
{


    public function joos()
    {
        echo 'here is joos of orange';
    }
    public function eatable()
    {
        echo 'you can eat me';
    }
}
$orange = new orange();
$orange->setColor('yellow');

echo $orange->color;
echo '<br>';
$orange->eatable();
