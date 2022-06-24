<?php

declare(strict_types=1);

/* EXERCISE 2
TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPE HINTING EVERYWHERE!
*/

class Beverage
{
    // The Properties
    public string $color;
    public float $price;
    public string $temperature;


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
}
// For every object you want to create, you just need to instantiate a new object.
$beverage = new beverage("black", 2);

//echo $beverage->getInfoBeverage();

//TODO: Make class beer that extends from Beverage.

// this is the way how to extend an existing class
class Beer extends Beverage {

    //TODO: Create the properties name (string) and alcoholPercentage (float).

    // The Properties
    public string $name;
    public float $alcoholPercentage;


    /**
     * @param string $name
     * @param float $alcoholPercentage
     */

    //TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

    //you have to put the properties of the parent and the child in the construct function
    public function __construct(string $color, float $price, string $name, float $alcoholPercentage)
    {
        // how to add the parent properties to the construct
        parent::__construct($color, $price);
        $this->name = $name;
        $this->alcoholPercentage= $alcoholPercentage;
    }

    /**
     * @return float
     */

    //TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

}

// initiating a new object with all the properties.
$duvel = new Beer('blond',3.5,"Duvel",8.5);

//calling the object
echo $duvel ->getInfoBeverage(); echo '<br>';

// TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

// 2 ways how to call the alcohol percentage
echo $duvel->getAlcoholPercentage(); echo '<br>';
echo $duvel->alcoholPercentage; echo '<br>';


echo $duvel->color;
