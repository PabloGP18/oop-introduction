<?php

declare(strict_types=1);

/* EXERCISE 6
Copy the classes of exercise 2.
TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.
Use typehinting everywhere!
*/
class Beverage
{
    // The Properties
    private float $price;
    private string $temperature;
    private string $color;
    const barname = "het vervolg";

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

// The constructure with incoming parameters in the brackets

    public function __construct(string $color, float $price)
    {
        $this->color= $color;
        $this->price= $price;
        $this->temperature= "cold";
    }

    /**
     * @param mixed $temperature
     */


    // The functions
    public function getInfoBeverage(): string
    {
        return "this beverage is $this->temperature and $this->color";
    }

    public function constantInfo1(): string {
        return self::barname;
    }

}
// For every object you want to create, you just need to instantiate a new object.

//echo $beverage->getInfoBeverage();

class Beer extends Beverage {
    // The Properties
    private string $name;
    private float $alcoholPercentage;



    /**
     * @param string $name
     * @param float $alcoholPercentage
     */
    public function __construct(string $color, float $price, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage= $alcoholPercentage;
    }

    public function constantInfo2(): string{
       return self::barname;
    }
    /**
     * @return float
     */

    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

}

$beverage = new beverage("black", 2);
$duvel = new Beer('blond',3.5,"Duvel",8.5);

//creating constant method and calling the constant
define("barname","Het vervolg");
echo barname; echo "<br>";

// calling constant witch classname
echo Beer::barname; echo "<br>";
echo Beverage::barname; echo "<br>";

// calling constant with function in Beverage and Beer
echo $beverage->constantInfo1(); echo "<br>";
echo $duvel->constantInfo2();


