<?php
class student
{
    const PI = 3.14767;
    public static $name = 'sunil';
    public static $class;
    public static $division;

    public static function setValues($name, $class, $division)
    {
        self::$name = $name;
        self::$class = $class;
        self::$division = $division;
    }

    public  function area($radius)
    {
        return $radius * $radius * self::PI;
    }
}
student::setValues('sunil', 10, 'A');
$student = new student();
echo $student->area(4);
