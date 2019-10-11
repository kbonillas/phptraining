<?php
class Square {
    public $width = 0;

    public function circumference () {
        return (4 * $this->width);
    }
}

class Rectangle {
    // Declare properties
    public $length = 0;
    public $width = 0;

    public function testy() {
        echo "it works";
    }

    // Method to get perimeter
    public function getPerimeter() {
        return (2 * ($this->length + $this->width));
    }

    // Mthod to get the area
    public function getArea() {
        return ($this->length * $this->width);
    }
}

?>