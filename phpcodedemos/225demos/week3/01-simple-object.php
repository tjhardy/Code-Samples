<?php

error_reporting(E_ALL);

// set up new class 'Person'

class Person
{
  public $firstName;
  public $lastName;
  public $hair;
  public $eyes;
  public $height;

public function getPersonInfo()
  {
  print "<font size='+3'>" . $this->firstName . " " . $this->lastName . " has " . $this->hair 
	  . " hair, " . $this->eyes . " eyes, and is " . $this->height . ".</font>";
  }
}


// declare a new Person instance and set properties manually

$Teresa = new Person();
$Teresa->firstName = "Teresa";
$Teresa->lastName = "Hardy";
$Teresa->hair = "brown but greying";
$Teresa->eyes = "blue";
$Teresa->height = "too short";


// call the method 'getPersonInfo' to pull out properties

$Teresa->getPersonInfo();

?>