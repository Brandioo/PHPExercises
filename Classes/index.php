<?php
//
//class Fruit
//{
//    public $name;
//
//    //magic method if it has two underlined lines.
//    public function __construct(string $name)
//    {
////       var_dump("Its running");
//        $this->name = $name;
//        var_dump($this);
//    }
//}

//$apple=new Fruit;
//$apple->name="Molle E Kuqe";

//$apple->name = "Brand";
//$apple = new Fruit("Molle E Kuqe");
//$jeshile = new Fruit("Molle Jeshile");

//$name = "Silvi";
//$name = "Brand";
//
//echo $name;


//class Person
//{
//    public $name;
//    private $lastName;
//
//    public function getFullName()
//    {
//        return "{$this->name} {$this->lastName}";
//    }
//
//    public function setFullName(string $name, string $lastName)
//    {
//        $this->name = $name;
//        $this->lastName = $lastName;
//    }
//}

//
//$brand=new Person;
//$brand->name="Brand Citozi-";
//
//echo $brand->name;
//
//
//
//$besmir=new Person;
//$besmir->name="Besmir Beqo";
//
//echo $besmir->name;


//$silvi=new Person;
//$silvi->name="Silvi Lila";
//$fullName=$silvi->name;
//$silvi->name="Besi";
//echo $fullName;

//$silvi = new Person;
//$silvi->setFullName("Brand", "Citozi");
//echo $silvi->getFullName();


//class Car
//{
//
//    public $name;
//    private $type;
//    public $kmPerHour;
//
//    protected function validate($name, $type, $kmPerHour)
//    {
//        if (empty($name) || empty($type) || empty($kmPerHour)) {
//            throw new Exception("Please Fill The Blanks");
//        }
//        return;
//    }
//
//    public function setFullName($name, $type, $kmPerHour)
//    {
//        $this->validate($name, $type, $kmPerHour);
//        $this->name = $name;
//        $this->type = $type;
//        $this->kmPerHour = $kmPerHour;
//    }
//
//
//    public function getFullName()
//    {
////        if (empty($this->name) || empty($this->type) || empty($this->kmPerHour)) {
////            return "Is empty.<br>";
////        }
//
//        $this->validate($this->name, $this->type, $this->kmPerHour);
//        return "{$this->name} {$this->type} {$this->kmPerHour}";
//    }
//
//}

//First Method
//$benz = new Car;
//$benz->setFullName("ML", null, 280);
//echo $benz->getFullName();

//Second Method
//try {
//    $benz = new Car;
//    $benz->setFullName("ML", null, 280);
//    echo $benz->getFullName();
//} catch (Exception $e) {
//    echo $e->getMessage();
//}


//$a = null;
//
//// True because $a is empty
//if (empty($a))
//{
//    echo "Variable 'a' is empty.<br>";
//}
//
//// True because $a is set
//if (isset($a)) {
//    echo "Variable 'a' is set";
//}


class Person
{
    protected $hair;
    protected $eyes;
    protected $nose;
    protected $lips;
    protected $height;
    protected $weight;
    protected $skinColor;
    protected $language;
}

class European extends Person
{
//    public function __construct()
//    {
//        $this->eyes="red";
//    }
//
//    public function getEyesColor()
//    {
//        $this->eyes = "Blue";
//        return $this->eyes;
//    }

    public function __construct()
    {
        $this->eyes = "Green";
        $this->hair = "Blonde";
        $this->skinColor = "White";
    }

    public function getStatistics()
    {
        echo "<br>";
        return "Europe: <br> Eyes: {$this->eyes} <br> Hair: {$this->hair} <br> Skin Color: {$this->skinColor} <br>";
    }

    public function getEyesColor()
    {
        echo "European Eye Color: ";
        return "{$this->eyes} <br>";
    }

    /**
     * @return string
     */
    public function getHair(): string
    {
        echo "European Hair Color: ";
        return "{$this->hair} <br>";
    }


    /**
     * @return string
     */
    public function getSkinColor(): string
    {
        echo "European Skin Color: ";
        return "{$this->skinColor} <br>";
    }
}


$euro = new European;
//$euro->hair = "Black<br>";
//echo $euro->hair;
//echo $euro->getEyesColor();
//echo $euro->getHair();
//echo $euro->getSkinColor();
echo $euro->getStatistics();


class Asiatic extends Person
{


    public function __construct()
    {
        $this->eyes = "Coffee";
        $this->hair = "Black";
        $this->skinColor = "Yellow";
    }

    public function getStatistics()
    {
        echo "<br>";
        return "Asia: <br> Eyes: {$this->eyes} <br> Hair: {$this->hair} <br> Skin Color: {$this->skinColor} <br>";
    }

}

$asiatic = new Asiatic;
echo $asiatic->getStatistics();

class African extends Person
{


    public function __construct()
    {
        $this->eyes = "Coffee";
        $this->hair = "Black";
        $this->skinColor = "Black";
    }

    public function getStatistics()
    {
        echo "<br>";
        return "Africa: <br> Eyes: {$this->eyes} <br> Hair: {$this->hair} <br> Skin Color: {$this->skinColor} <br>";
    }

}

$african = new African;
echo $african->getStatistics();


class American extends Person
{


    public function __construct()
    {
        $this->eyes = "Blue";
        $this->hair = "Brown";
        $this->skinColor = "White";
    }

    public function getStatistics()
    {
        echo "<br>";
        return "American: <br> Eyes: {$this->eyes} <br> Hair: {$this->hair} <br> Skin Color: {$this->skinColor} <br>";
    }

}

$american = new American;
echo $american->getStatistics();