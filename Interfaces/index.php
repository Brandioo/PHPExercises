//Brandio
<?php

interface IPerson
{
    public function getFullName();

    public function getAge();
}

abstract class AbstractClass implements IPerson
{
    public abstract function getLastName();

    public function getAge()
    {
        return "Ca moshe je";
    }
}

class Brand implements IPerson
{
    public function getFullName()
    {
        // TODO: Implement getFullName() method.
        return "Brand Citozi";
    }

    public function getAge()
    {
        // TODO: Implement getAge() method.
        return 20;
    }

    public static function getLastName()
    {
        echo "My last name is Citozi <br>";
    }
}

//$brand = new Brand;
//echo $brand->getFullName();

class Enrisa implements IPerson
{

    public function getFullName()
    {
        // TODO: Implement getFullName() method.
        return "Enrisa Hasanaj";
    }

    public function getAge()
    {
        // TODO: Implement getAge() method.
        return 14;
    }
}


class Silvi
{

    public function getFullName2()
    {
        // TODO: Implement getFullName() method.
        return "Silvi Lila";
    }

    public function getAge()
    {
        // TODO: Implement getAge() method.
        return 14;
    }
}

class Run
{
    public function getPersonFUllName($instance)
    {
        return $instance->getFullName2();
    }
}
//
//$run = new Run;
//$silvi = new Silvi;
//$brand1 = new Brand;
//
//echo $run->getPersonFUllName($silvi);
//echo $run->getPersonFUllName($brand1);

echo Brand::getLastName();