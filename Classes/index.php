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




class Person
{
    public $name;
}
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


$silvi=new Person;
$silvi->name="Silvi Lila";
$fullName=$silvi->name;
$silvi->name="Besi";
echo $fullName;