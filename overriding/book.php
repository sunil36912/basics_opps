<?php
class parent_class
{
    public $name;
    public $class;

    public function text()
    {

        echo "Hello!! everyone I am parent class text method" . "</br>";
    }
}

class child extends parent_class
{
    public function text()
    {
        echo "Hello!! Everyone i am child class";
    }
}

$obj = new parent_class();
$obj->text();            // display the parent class method echo
$obj = new parent_class();

$obj = new child();
$obj->text(); // display the child class method echo
