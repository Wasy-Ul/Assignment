<?php

    class shape{
        protected function area()
        {}
    }

    class Circle{
        protected $Radius;

        function __construct($r)
        {
            $this->Radius=$r;
        }
        public function area()
        {
            echo "The area of a circle is: ". M_PI * pow($this->Radius,2)."<br><br>";
        }
    }

    class Rectangle{
        public $height,$width;

        function __construct($h,$w){
            $this->height=$h;$this->width=$w;
        }

        public function area(){
            echo "The area of a rectangle is: ".$this->height*$this->width."<br>";
        }
    }

    $obj1= new Circle(5);
    $obj1->area();
    $obj2= new Rectangle(5,8);
    $obj2->area();
?>