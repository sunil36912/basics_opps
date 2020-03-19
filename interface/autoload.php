<?php
spl_autoload_register('myAutoloader');

function myAutoloader($className)
{
    //$path = '/path/to/class/';

    include  $className . '.php';
}
