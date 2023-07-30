<?php declare(strict_types=1);
    interface Shape{
        public function getArea():float;
    }

    class Square implements Shape{
        private float $length;
        public function __construct(float $length){
            $this->length=$length;
        }
        public function getArea():float{
            return $this->length*$this->length;
        }
    }

    class Rectangle implements Shape{
        private float $length;
        private float $width;
        public function __construct(float $length, float $width){
            $this->width=$width;
            $this->length=$length;
        }
        public function getArea():float{
            return $this->length*$this->width;
        }
    }

    class Circle implements Shape{
        private float $r;
        private const PI=3.14;

        public function __construct(float $r){
            $this->r=$r;
        }

        public function getArea():float{
            return self::PI*$this->r*$this->r;
        }
    }

    function calculateArea(Shape $shape):float{
        return $shape->getArea();
    }


    $circle= new Circle(5.0);
    $square= new Square(10.0);
    $rec= new Rectangle(15,3);

    echo 'Circle area= '.calculateArea($circle).'<br/>';
    echo 'Square area='.calculateArea($square).'<br/>';
    echo 'Rectangle area='.calculateArea($rec).'<br/>';
?>