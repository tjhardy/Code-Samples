<?php

error_reporting(E_ALL);

// set up new class 'Person'
class Person
{
  const UNIVERSITY = "ISU";

  protected $firstName;
  protected $lastName;

// constructor function
  public function __construct($in_fn,$in_ln)
  {
	$this->firstName = $in_fn;
	$this->lastName = $in_ln;
  }

  public function getPersonInfo()
  {
  print "<font size='+3'>Generic Person Info: " . $this->firstName . " " . $this->lastName . " works at " . self::UNIVERSITY . ".</font>";
  }
}

// extend the class "Person"
class Faculty extends Person
{
   // get info method
  public function getFacultyInfo($in_col)
  {
  print "<font size='+3'>Faculty Info: " . $this->firstName . " " . $this->lastName . " teaches at " . parent::UNIVERSITY . " in the " . $in_col  . ".</font>";
  }
}

// declare a new Person instance and set properties via the constructor
$fn = "Teresa";
$ln = "Hardy";

$Teresa = new Person($fn,$ln);
$Teresa->getPersonInfo();

print "<br/><br/>";

// declare a new Faculty instance and set properties via the constructor
$fn = "Teresa";
$ln = "Hardy";
$col = "College of Technology";

$Teresa = new Faculty($fn,$ln);
$Teresa->getFacultyInfo($col);
?>