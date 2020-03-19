<?php
include('mobile.php');
include('laser.php');

class Glaxy extends Mobile
{
    use Laser;
}

$obj = new Glaxy();
$obj->battery();
echo '<br>';
$obj->power();
echo '<br>';
