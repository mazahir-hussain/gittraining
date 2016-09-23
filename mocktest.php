<?php

require 'test_mock.php';

/**
 * test case for Admin class
 */
class AdminTest extends PHPUnit_Framework_TestCase
{
  /**
   * tests instance of User
   * @return calls functions in both Admin and User Class
   */
  public function testingusers()
  {
    $user = $this->getMockBuilder(User::class)
    ->setMethods(['callMe'])
    ->getMock();

    $user->expects($this->once())
    ->method('callMe')
    ->with($this->equalTo('Set'));

    $admin = new Admin;
    $admin->setUser($user);

    $admin->informUser();
  }
}
