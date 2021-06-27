//Brandio
<?php

interface Insurance
{
    public function getInsuranceName();

    public function getYearsOfSponsorShip();
}


class Sigal implements Insurance
{

    public function getInsuranceName()
    {
        // TODO: Implement getInsuranceName() method.
        return "Sigal";
    }

    public function getYearsOfSponsorShip()
    {
        // TODO: Implement getYearsOfSponsorShip() method.
        return "Years Of Sponsorships 15";
    }
}

//$brand = new Brand;
//echo $brand->getFullName();

class Sigma implements Insurance
{

    public function getInsuranceName()
    {
        // TODO: Implement getInsuranceName() method.
        return "Sigma";
    }

    public function getYearsOfSponsorShip()
    {
        // TODO: Implement getYearsOfSponsorShip() method.
        return "Years Of Sponsorships 20";
    }
}


class Run
{
    public function getFullInfo(Insurance $instance)
    {
        return "<br> {$instance->getInsuranceName()}---{$instance->getYearsOfSponsorShip()} <br>";
    }
}

$run = new Run;
$sigal = new Sigal;
$sigma = new Sigma;

echo $run->getFullInfo($sigal);
echo $run->getFullInfo($sigma);