<?php

declare(strict_types=1);

/* EXERCISE 4
Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.
USE TYPE HINTING EVERYWHERE!
*/

class Beverage
{
    // The Properties
    protected string $color;
    protected float $price;
    protected string $temperature;


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
    protected string $name;
    protected float $alcoholPercentage;


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
    public function setAlcoholPercentage(float $alcoholPercentage): void
    {
        $this->alcoholPercentage = $alcoholPercentage;
    }

    /**
     * @return float
     */

    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    //TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

    private function beerInfo(): string
    {
        return "Hi i'm " .$this->name. " and have an alcohol percentage" .$this->alcoholPercentage. " and I have a " .$this->color. " color.";
    }

    public function printBeer(): string
    {
        return $this->beerInfo();
    }

}
$duvel = new Beer('blond',3.5,"Duvel",8.5);

echo $duvel ->getInfoBeverage(); echo '<br>';

echo $duvel->getAlcoholPercentage(); echo '<br>';

$duvel->setAlcoholPercentage(8);
echo $duvel->getAlcoholPercentage(); echo '<br>';

$duvel->setColor('light');
echo $duvel->getColor();echo'<br>';

echo $duvel->printBeer();