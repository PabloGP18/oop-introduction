<?php

declare(strict_types=1);

/* EXERCISE 5
Copy the class of exercise 1.
TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/

class Beverage
{
   //TODO: Change the properties to private.

    // The Properties
    private string $color;
    private float $price;
    private string $temperature;
    // private float $newPrice;


// The constructure with incoming parameters in the brackets

    public function __construct(string $color, float $price, string $temperature ="cold")
    {
        $this->color= $color;
        $this->price= $price;
        $this->temperature= $temperature;
    }

    /**
     * @param mixed $temperature
     */


    // The functions
    public function getInfoBeverage(): string
    {
        return "this beverage is $this->temperature and $this->color";
    }

    //TODO: Fix the errors without using getter and setter functions.

    // making a new function to  change the price
    function printNewPrice (float $newPrice)
    {
        if($newPrice <= 0){
            return "no free drinks for you!";
        }
        // this is how we change the price by making a new property
        $this->price=$newPrice;
        return "this beverage is $this->temperature and $this->color and $this->price euro";
    }
}
// For every object you want to create, you just need to instantiate a new object.
$beverage = new beverage("black", 2);
// Now that we created an animal object. we can also start to use them in our code!

//$beverage->temperature="warm"; To change default string

echo $beverage->getInfoBeverage(); echo "<br>";


//TODO: Change the price to 3.5 euro and print it also on the screen on a new line.

// printing the new price
echo $beverage->printNewPrice(3.5);
