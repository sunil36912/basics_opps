<?php
include('autoload.php');

class Mango extends Froot implements joosInterface
{


    public function joos()
    {
        echo 'here is joos of mango';
    }
}
$mango = new Froot();
$manyfroot = new frootsname();
$manyfroot->frootname(array('mango', 'apple'));

$mango->setColor($manyfroot);
print_r($mango->frootname);
