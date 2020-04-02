<html>
<h1>TP_n°7_langage_PHP</h1>
<hr>
<h2>Exercice_2</h2>

<?php

interface Shape
{
    public function getArea();
}

class Square implements Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;

    }
    public function getArea()
    {
        return $this->width * $this->height;

    }
}

class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function getArea()
    {
        return pi()*$this->radius * $this->radius;
    }
}

$square = new Square(6, 6);
$circle = new Circle(6);
$shape = array($square, $circle);
foreach ($shape as $s){
    echo get_class($s)." area = ". $s->getArea(). "<br>";
}

?>
