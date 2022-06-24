# OOP introduction

### The exercises:

### Exercise 1 classes

- Created a class
- Create properties
- Made a default value for a property
- Made a function and return a string
- Instantiated an object and print the info of the function

````php
class Beverage
{
    public string $color;
    public float $price;
    public string $temperature;



    public function __construct(string $color, float $price, string $temperature ="cold")
    {
        $this->color= $color;
        $this->price= $price;
        $this->temperature= $temperature;
    }

    public function getInfoBeverage(): string
    {
        return "this beverage is $this->temperature and $this->color";
    }
}
$beverage = new beverage("black", 2,"cola");

echo $beverage->getInfoBeverage();

````

### Exercise 2 extending

- Made a class(child) that extends from the parent
- Made properties in the child class
- Created a construct in the child class that includes the parent properties and sets the child properties
- Printed new object information 


````php
class Beverage
{
    public string $color;
    public float $price;
    public string $temperature;

    
    public function __construct(string $color, float $price)
    {
        $this->color= $color;
        $this->price= $price;
        $this->temperature= "cold";
    }
    
    public function getInfoBeverage(): string
    {
        return "this beverage is $this->temperature and $this->color";
    }
}
$beverage = new beverage("black", 2);

class Beer extends Beverage {
    
    public string $name;
    public float $alcoholPercentage;


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
     * @return float
     */

    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

}

$duvel = new Beer('blond',3.5,"Duvel",8.5);

echo $duvel ->getInfoBeverage(); echo '<br>';
echo $duvel->getAlcoholPercentage(); echo '<br>';
echo $duvel->alcoholPercentage; echo '<br>';
echo $duvel->color;
````

### Exercise 3 private

- Made the properties private from exercise 2
- Getting and setting the property color so i could change this because it's private
- Created a private method and created another public method to show/print the information of the private one

```php
class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;
    
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

    public function getInfoBeverage(): string
    {
        return "this beverage is $this->temperature and $this->color";
    }
}
class Beer extends Beverage {
    
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


    private function beerInfo(): string
    {
        return "Hi i'm $this->name and have an alcohol percentage $this->alcoholPercentage and I have a " .$this->getColor(). " color.";
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
```

### Exercise 4 properties

- made all the properties protected
- now i can call the properties in the function of the child without using the getter in the function

```php
class Beverage
{

    protected string $color;
    protected float $price;
    protected string $temperature;

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

    public function getInfoBeverage(): string
    {
        return "this beverage is $this->temperature and $this->color";
    }
}
class Beer extends Beverage {

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

    private function beerInfo(): string
    {
        return "Hi i'm $this->name and have an alcohol percentage $this->alcoholPercentage and I have a  .$this->color  color.";
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
```

## The objective

> Lost for a second? Have a look at [this example](#an-example)

### 🌱 Must haves - the basics
- [x] [Exercise 1](exercise_1_classes.php)
- [x] [Exercise 2](exercise_2_extending.php)

### 🌱 Must haves - digging deeper
- [x] [Exercise 3](exercise_3_private.php)
- [x] [Exercise 4](exercise_4_protected.php)
- [x] [Exercise 5](exercise_5_public.php)

### 🌼 Nice to haves
- [ ] [Exercise 6](exercise_6_const.php)
- [ ] [Exercise 7](exercise_7_static.php)

## An example

Let's say we have a list of animals from the zoo:
```php
const listOfAnimals = [
    {
        animalType : 'monkey',
        order : 'mammal',
        amount : 25
    },
    {
        animalType : 'donkey',
        order : 'mammal',
        amount : 3
    },
    {
        animalType : 'turkey',
        order : 'bird',
        amount : 500
    }
]
```

Instead of having to create this data ourselves in the format above, we can make use of OOP structures.
With OOP we would create a class `Animal`, that class will serve as some sort of "blueprint" for creating animals.
Think of it as similar to an object, but on steroids.

#### Step one: the blueprint (class)

This class has 3 important parts:
1. the public strings
    - the properties that your class will use.
2. The Constructor
    - The constructor is where your class will receive the data and apply it to the properties mentioned above
3. The functions
    - You can use functions to manipulate the data and have any result you want.

```php
<?php

class Animal = 
{
    // The Properties
    public $animalType;
    public $order;
    public $amount;
    
    // The Constructor with incoming parameters in the brackets
    public function __construct($animalType, $order, $amount)
    {
        // in a sentence it would be: "set this class's properties with the same value as the incoming parameters"
        $this->animalType = $animalType;
        $this->order = $order;
        $this->amount = $amount;
    };
    
    // The functions
    public function sayHelloToAnimal()
    {
        echo "Hello, $this->animalType";
    };
}
```
#### Step two: instantiating the object

For every object you want to create, you just need to instantiate a **new** object.

```php
<?php

$animal1 = new Animal("monkey", "mammal", 25);
$animal2 = new Animal("donkey", "mammal", 3);
$animal3 = new Animal("turkey", "bird", 500);
```
#### Step 3: use it!

Now that we created 3 animal objects. we can also start to use them in our code!

```php
<?php

$animal1->sayHelloToAnimal(); // Will result in: "Hello, monkey"
$animal2->sayHelloToAnimal(); // Will result in: "Hello, donkey"
$animal3->sayHelloToAnimal(); // Will result in: "Hello, turkey"
```

### Have fun!

![](https://c.tenor.com/CyzTOF-I6hIAAAAC/clone-twin.gif)
