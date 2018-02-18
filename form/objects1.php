<?php
  $title = "Objects " ;
  //class represent sigular since we make one common class , instanciate and store under value or array ... in variable for people
  class Person {
    //create property, most case make property as private 
    private $firstName = '';
    private $lastName = '';
    private $birthDate = ''; //since age is alwayse change, date of birth is profer then age
    public function __construct( $fName, $lName, $birth) {  //parameter name better to be different to not confuse later
      //statements to execute
      //instead of this., use $this-> property itself
      $this->firstName = $fName;
      $this->lastName = $lName;
      $this->birthDate = $birth;
    }
    //create method  once we get instanciate class, we can change property by using set/get method
    public function setFirstName($fName) {
      $this->firstName = $fName;
    }
    public function setLasttName($lName) {
      $this->lastName = $lName;
    }
    public function setDateOfBirth($birth) {
      $dateOfBirth = new DateTime($birth);
      $this->birthDate = $dateOfBirth ->format('Y-j-d H:i:s');;   //$this->$birthDate = $birth;
    }
    //getter in here we don't manupulate variable
    public function getFirstName() {
      return $this->firstName;
    }
    public function getLasttName() {
      return $this->lastName;
    }
    public function getBirthDate() {
      return $this->birthDate;
    }
    //by using setter and getter, check validation 
  }
  //make subclass
  class Employee extends Person {
    //Person class is super class, Employee is subclass
    private $ssn, $hireDate; //only Employee store these property
    public function __construct( $fName, $lName, $birth, $socsec, $hired) {  
      $this ->ssn = $socsec;
      $this ->hireDate = $hired;
      parent::__construc($fName, $lName, $birth);
    }
    public function setSSN($socsec) {
      $this->ssn = $socsec;
    }
    public function setHireDate($hired) {
      $this->hireDate = $hired;
    }
    public function getSSN() {
      return $this->ssn;
    }
    public function getHireDate() {
      return $this->hireDate;
    }
  }
  //instanceate class
  $firstPerson = new Person('John', 'Doe', '19800101');
  $secondPerson = new Person('Jane', 'Doe', '19701231');


?>
<!doctype html>
<html>
  <head>
    <title><?php echo $title; ?></title>
  </head>
  <body>
  <h2>First Person</h2>
  <?php echo $firstPerson->getFirstName();?>
  <h2>date of birth</h2>
  <?php echo $firstPerson->getBirthDate();?>
  <h2></h2>

<!--
function5, 





-->
  </body>
</html>