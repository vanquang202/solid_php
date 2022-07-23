<?php 
interface ShapeInterface {
    public function area();
}

interface SquareShapeInterface  
{
    public function getLength();
}

class Circle implements ShapeInterface{
    public $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function area()
    {
        return pi() * pow($this->radius, 2);
    }
};

class Square implements ShapeInterface , SquareShapeInterface{

    public $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function area()
    {
        return pow($this->length, 2);
    }

    public function getLength()
    {
        return $this->lenght;
    }
}

class AreaCalculator{

    public $shape;
    public function __construct($shape)
    { 
        $this->shape = $shape;
    }

    public function sum()
    {
        foreach($this->shape as $shape)
        {
             $area[] = $shape->area();
        }
        return array_sum($area);
    }

    public function stout()
    {
        return implode('',[
            "",
                "Sum of the areas of provided shapes: ",
                $this->sum(),
            ""
        ]);
    }
}

class AreaCalculator2 extends AreaCalculator{
    public function stout()
    {
        return "Run : " . $this->sum();
    }
}

$shapes = array(
    new Circle(2),
    new Square(5),
    new Square(6)
);

$areas = new AreaCalculator($shapes);
$areas2 = new AreaCalculator2($shapes);

echo $areas->stout();
echo "<br>";
echo $areas2->stout();