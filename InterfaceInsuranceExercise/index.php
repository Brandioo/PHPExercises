//Brandio
<?php

interface Insurance
{
    public function getInsuranceName();

    public function getYearsOfSponsorShip();
}

interface InsuranceWithParameters
{
    public function getInsuranceName(string $name);

    public function getYearsOfSponsorShip(int $years);
}


class Sigal implements InsuranceWithParameters
{


    public function getInsuranceName(string $name)
    {
        // TODO: Implement getInsuranceName() method.
        return $name;
    }

    public function getYearsOfSponsorShip(int $years)
    {
        // TODO: Implement getYearsOfSponsorShip() method.
        return $years;
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

//$run = new Run;
//$sigal = new Sigal;
//$sigma = new Sigma;
//
////echo $run->getFullInfo($sigal);
//echo $run->getFullInfo($sigma);

class RunWithParameters
{
    public function getFullInfo(InsuranceWithParameters $instance)
    {
        $name = "Insurance for Car";
        $years = 5;
        return "<br> {$instance->getInsuranceName($name)}---{$instance->getYearsOfSponsorShip($years)} <br>";
    }
}


$runWithParameters = new RunWithParameters;
$sigal = new Sigal();
echo $runWithParameters->getFullInfo($sigal);
