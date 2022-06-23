<?php

declare(strict_types=1);

/* EXERCISE 1
TODO: Create a class beverage.
TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
TODO: Have a default value "cold" in the construct for temperature.
Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
TODO: Print the temperature on the screen.
USE TYPE HINTING EVERYWHERE!
*/

class Beverage
{
    // The Properties
    public $color;
    public $price;
    public $temperature;
    public $name;


// The constructure with incoming parameters in the brackets

    public function __construct(string $color, float $price, string $name)
    {
        $this->color= $color;
        $this->price= $price;
        $this->temperature= "cold";
        $this->name= $name;
    }

    /**
     * @param mixed $temperature
     */


    // The functions
    public function getInfoBeverage(): void
    {
        echo "this $this->name is $this->temperature and $this->color";
    }
}
// For every object you want to create, you just need to instantiate a new object.
$beverage = new beverage("black", 2,"cola");
// Now that we created 3 animal objects. we can also start to use them in our code!
$beverage->getInfoBeverage();

