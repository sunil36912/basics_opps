<?php

class MyClass
{
    public $name = 'sunil';
    public $attendance = 20;
    public $marks = 897;
}

$myclass = new MyClass();
echo $myclass->name . '<br>';
$myclass->name = 'Monty';
echo $myclass->name;
