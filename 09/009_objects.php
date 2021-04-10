<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 10.04.2021
 * Time: 11:47
 */
class Car {
    private   $brand;
    private $year;

    public function __construct($brand, $year){
        $this->brand = $brand;
        $this->year = $year;
    }

    public function print_details() {
        echo "This car is a $this->year $this->brand.";
    }
}

$car = new Car("Toyota", 2006);
$car->print_details();