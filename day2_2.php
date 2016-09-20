<?php

/**
* this file will have a class to creat objects of different people
*/

/**
* this interface will be used for all parent and child classes
*/

interface aPerson
{
  public function getName();
  public function getAge();
  public function getRole();
}

/**
* this class is a basic abstract Person class which will be inherited
*/

class Person implements aPerson
{
  private $name;
  private $age;
  private $role;

  public function __construct($name,$age,$role)
  {
    $this->name = $name;
    $this->age = $age;
    $this->role = $role;
  }

  /**
  * these two functions return the private properties of the Person class
  * @return name and age
  */

  public function getName()
  {
    return $this->name;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function getRole()
  {
    return $this->role;
  }
}

/**
* this class will be for the admin
*/

class Admin
{

/**
* this fucntion creates a new object Person and assigns it the admin role
* @param are name, age and role
* @return new Person
*/


  public static function makeAdmin($name,$age)
  {
    return new Person($name,$age,"admin");
  }
}

/**
* this class will be for the User
*/


class User
{

  /**
  * this fucntion creates a new object Person and assigns it the user role
  * @param are name, age and role
  * @return new Person
  */

  public static function makeUser($name,$age)
  {
    return new Person($name,$age,"user");
  }
}

$person1 = Admin::makeAdmin("Mazahir", "23");

echo $person1->getName() . "\n" . $person1->getAge() . "\n" . $person1->getRole() . "\n";

$person1 = User::makeUser("Ali", "24");

echo $person1->getName() . "\n" . $person1->getAge() . "\n" . $person1->getRole() . "\n";




?>
