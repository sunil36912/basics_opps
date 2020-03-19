<?php
class MyFunction
{
    public $name;
    public $class;
    public $attendance;

    public function setvalue($name,  $class, $attendance)
    {
        $this->name = $name;
        $this->class = $class;
        $this->attendance = $attendance;
    }
}

$myfunction = new MyFunction();
$myfunction->setvalue('sunil', 10, 20);
echo $myfunction->name . '<br>' . $myfunction->class . '<br>' . $myfunction->attendance . '<br>';
