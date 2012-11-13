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

// constructor function
  public function __construct($in_fn,$in_ln,$in_h,$in_e,$in_ht)
  {
	$this->firstName = $in_fn;
	$this->lastName = $in_ln;
	$this->hair = $in_h;
	$this->eyes = $in_e;
	$this->height = $in_ht;
  }


// get info method
public function getPersonInfo()
  {
  print "<font size='+3'>" . $this->firstName . " " . $this->lastName . " has " . $this->hair 
	  . " hair, " . $this->eyes . " eyes, and is " . $this->height . ".</font>";
  }
}


// declare a new Person instance and set properties via the constructor

$fn = "Teresa";
$ln = "Hardy";
$h = "brown and greying";
$e = "blue";
$ht = "way, way too short";

$Teresa = new Person($fn,$ln,$h,$e,$ht);


// call the method 'getPersonInfo' to pull out properties

$Teresa->getPersonInfo();

?>