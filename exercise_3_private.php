<?php

declare(strict_types=1);

/* EXERCISE 3
TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
TODO: Print this method on the screen on a new line.
USE TYPE HINTING EVERYWHERE!
*/

class Beverage
{
    //TODO: Make all properties private.

    // The Properties
    private string $color;
    private float $price;
    private string $temperature;


// The constructure with incoming parameters in the brackets

    public function __construct(string $color, float $price)
    {
        $this->color= $color;
        $this->price= $price;
        $this->temperature= "cold";
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }



    // The functions
    public function getInfoBeverage(): string
    {
        return "this beverage is $this->temperature and $this->color";
    }
}
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

    /**
     * @param float $alcoholPercentage
     */

    // making a setter for this property we want to modify
    public function setAlcoholPercentage(float $alcoholPercentage): void
    {
        $this->alcoholPercentage = $alcoholPercentage;
    }

    /**
     * @return float
     */
    // making a setter for this property we want to modify
    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    //TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

    private function beerInfo(): string
    {
        // for alcoholprecentage and name we don't need to call the get function because it's part of the child, for the color we need to because it's part of the parent(private)
        return "Hi i'm $this->name and have an alcohol percentage $this->alcoholPercentage and I have a " .$this->getColor(). " color.";
    }

    // calling the private function above in a public function
    public function printBeer(): string
    {
        return $this->beerInfo();
    }

}

// TODO: Make all the other prints work without error.

$duvel = new Beer('blond',3.5,"Duvel",8.5);

echo $duvel ->getInfoBeverage(); echo '<br>';

echo $duvel->getAlcoholPercentage(); echo '<br>';

//setting the alcoholpercentage to another  number
$duvel->setAlcoholPercentage(8);
// calling the new number
echo $duvel->getAlcoholPercentage(); echo '<br>';

// TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).

// setting a new color
$duvel->setColor('light');
// callingt the new color
echo $duvel->getColor();echo'<br>';

// TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."
// printing the information of the private function
echo $duvel->printBeer();
