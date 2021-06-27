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
        echo "University name: {$this->name} <br>";
        echo "City: {$this->city} <br>";
        echo "Address: {$this->address} <br>";

        foreach ($this->courses as $course) {
            echo "Course Name: {$course->name} <br>";
            echo "Course Instructor: {$course->trainers->fullName} <br>";
            echo "---------------------------------------------<br>";
            echo "Students: <br>";
            foreach ($this->students as $student) {
                echo "Student Name: {$student->name} <br>";
                echo "Student LastName: {$student->lastName} <br>";
                echo "Student Age: {$student->age} <br>";
                echo "---------------------------------------------<br>";
            }
        }


        foreach ($this->trainers as $trainer) {
            echo "Trainer Full-Name: {$trainer->fullName} <br>";
            echo "---------------------------------------------<br>";
        }

    }

}

class Course
{
    public $name;
    public $time;
    public $students = [];
    public $trainers;

    public function __construct($name)
    {
        $this->name = $name;
    }


    public function setStudents(Student $students): void
    {
        $this->students[] = $students;
    }

    public function setTrainers(Trainer $trainers): void
    {
        $this->trainers = $trainers;
    }


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
    public array $courses = [];

    public function __construct($name, $course)
    {
        $this->fullName = $name;
        $this->course = $course;
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

}

$university = new University();
$university->setName("Epoka");
$university->setAddress("BULEVARDI Zogu 1");
$university->setCity("Tirana");

$course = new Course("PHP", "Silvi");
$studentBrand = new Student("Brand", "Citozi", 20);
$studentBesmir = new Student("Besmir", "Beqo", 25);
$trainerSilvi = new Trainer("Silvi", "PHP");
$university->setCourses($course);
$course->setStudents($studentBrand);
$course->setStudents($studentBesmir);
$course->setStudents($studentBesmir);

$course->setTrainers($trainerSilvi);
$trainerSilvi->setCourses($course);
$university->setTrainers($trainerSilvi);


$university->setStudents($studentBrand);
$university->setStudents($studentBesmir);

$university->printAll();