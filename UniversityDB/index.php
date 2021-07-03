//Brand SDA Academy
<?php

class University
{
    public $name;
    public $address;
    public $city;
    public array $courses = [];
    public array $trainers = [];
    public array $students = [];
    public array $staffs = [];

    /**
     * @param array $staff
     */
    public function setStaff(Staff $staff): void
    {
        $this->staffs[] = $staff;
    }


    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return array
     */
    public function getCourses(): array
    {
        return $this->courses;
    }

    /**
     * @param array $courses
     */
//    public function setCourses(array $courses): void
//    {
//        $this->courses = $courses;
//    }

    public function setCourses(Course $courses): void
    {
        $this->courses[] = $courses;
    }

    /**
     * @return array
     */
    public function getTrainers(): array
    {
        return $this->trainers;
    }

    /**
     * @param array $trainers
     */
//    public function setTrainers(array $trainers): void
//    {
//        $this->trainers = $trainers;
//    }

    public function setTrainers(Trainer $trainers): void
    {
        $this->trainers[] = $trainers;
    }

    /**
     * @return array
     */
    public function getStudents(): array
    {
        return $this->students;
    }

    /**
     * @param array $students
     */

    public function setStudents(Student $students): void
    {
        $this->students[] = $students;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


    public function printAll()
    {
        echo "<br>";
        echo "<br>*University name: {$this->name} <br>";
        echo "---City: {$this->city} <br>";
        echo "---Address: {$this->address} <br>";
        echo "---------------------------------------------<br>";

        echo "University Staff: <br>";
        foreach ($this->staffs as $staff) {
            echo "---Name: {$staff->name} | | | ";
            echo "---Role: {$staff->role}<br>";
        }
        echo "---------------------------------------------<br>";
        echo "University Students: <br>";
        foreach ($this->students as $student) {
            echo "---Student Name: {$student->name} | | ";
            echo "---Student LastName: {$student->lastName} | | ";
            echo "---Student Age: {$student->age} <br>";
        }

        echo "---------------------------------------------<br>";
        echo "University Trainers: <br>";
        foreach ($this->trainers as $trainer) {
            echo "---Trainer Full-Name: {$trainer->fullName} <br>";
        }

        echo "---------------------------------------------<br>";
        foreach ($this->courses as $course) {
            echo "*Course <br>";
            echo "Course Name: {$course->name} | | ";
            echo "Course Instructor: {$course->trainers->fullName} <br>";
            echo "---------------------<br>";
            echo "Course Students: <br>";
            foreach ($course->students as $student) {
                echo "---Student Name: {$student->name} | | ";
                echo "---Student LastName: {$student->lastName} | | ";
                echo "---Student Age: {$student->age} <br>";
            }
            echo "---------------------------------------------<br>";
        }

    }

}

class Course
{
    public $name;
//    public $time;
    public $students = [];
    public $trainers;

    public function __construct($name, $trainers)
    {
        $this->name = $name;
        $this->trainers = $trainers;
    }


    public function setStudents(Student $students): void
    {
        $this->students[] = $students;
    }

//    public function setTrainers(Trainer $trainers): void
//    {
//        $this->trainers[] = $trainers;
//    }
}

class Student
{
    public $firstName;
    public $lastName;
    public $age;

    public function __construct($name, $lastName, $age)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
    }

}

class Trainer
{
    public $fullName;

    public function __construct($name)
    {
        $this->fullName = $name;
    }


}

class Staff
{
    public $name;
    public $role;

    public function __construct($name, $role)
    {
        $this->name = $name;
        $this->role = $role;
    }
}

//require_once = "./Uni.php"; //Required Class (Import)

$university = new University();
$university->setName("Epoka");
$university->setAddress("Autostrada Tirane-Durres Kilometri 5");
$university->setCity("Tirana");

$director = new Staff("Bilbil Beqiri", "Director");
$sekretare = new Staff("Xhoena Polis", "Sekretare");

$university->setStaff($director);
$university->setStaff($sekretare);

//set Trainers
$PHPtrainer = new Trainer("Silvi Lila");
$JAVAtrainer = new Trainer("Nick Balani");

//input in University
$university->setTrainers($PHPtrainer);
$university->setTrainers($JAVAtrainer);

//Set Courses
$PHPcourse = new Course("PHP", $PHPtrainer);
$JAVAcourse = new Course("JAVA", $JAVAtrainer);

//input in University
$university->setCourses($PHPcourse);
$university->setCourses($JAVAcourse);

//Set Students
$studentBrand = new Student("Brand", "Citozi", 20);
$studentXhoi = new Student("Xhoi", "Hysa", 18);
$studentBesmir = new Student("Besmir", "Beqo", 25);

//input in Course
$PHPcourse->setStudents($studentBrand);
$JAVAcourse->setStudents($studentXhoi);
$JAVAcourse->setStudents($studentBesmir);

//input in University
$university->setStudents($studentBrand);
$university->setStudents($studentXhoi);
$university->setStudents($studentBesmir);

$university->printAll();