<?php

 /**
  * this is the declaration of the class Admin
  */
class Admin
{
  protected $user1;
  protected $user2;
  protected $message;

  /**
   * constructs admin class by setting var message
   */
  public function __construct()
  {
    $message = "hello";
  }

  /**
   * sets the user object
   * @param User $user object User created
   */
  public function setUser(User $user)
  {

    $this->user1 = $user;
  }

  /**
   * informs user that object is created
   * @return sets object using string 'Set'
   */
  public function informUser()
  {
    $this->inform('Set');
  }

  /**
   * calls functio of User (call me) on object User
   * @param  [type] $par input from function inform User (set)
   * @return [type]      calls function
   */
  public function inform($par)
  {
    $this->message = $this->user1->callMe($par);
  }

}

/**
 * this is the User Class to create a USer object
 */
class User
{
  /**
   * this function returns a string to indicate that User object has been created
   * @param  [is_string] $par [string "Set"]
   * @return [type]      string to indicate Object exist
   */
  public function callMe($par)
  {
    "I am $par" . "\n";
  }
}

//$obj = new Admin;
//$obj->setUser();
//echo $obj->informUser();


 ?>
