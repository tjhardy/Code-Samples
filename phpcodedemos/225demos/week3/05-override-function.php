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
  print "<font size='+3'>" . $this->firstName . " " . $this->lastName . " works at " . self::UNIVERSITY . ".</font>";
  }
}

// extend the class "Person"
class Faculty extends Person
{
  protected $col;

  // make a public constructor that calls the parent constructor
  public function __construct($in_fn,$in_ln,$in_col)
  {
    parent::__construct($in_fn,$in_ln);
	$this->col = $in_col;
  }

  // get info method
  public function getPersonInfo()
  {
  print "<font size='+3'>" . $this->firstName . " " . $this->lastName . " teaches at " . parent::UNIVERSITY . " in the " . $this->col  . ".</font>";
  }
}

// declare a new Person instance and set properties via the constructor

$fn = "Teresa";
$ln = "Hardy";
$col = "College of Technology";

$Teresa = new Faculty($fn,$ln,$col);

// call the overridden method 'getPersonInfo' to pull out properties
$Teresa->getPersonInfo();

print "<br/><br/>";
?>