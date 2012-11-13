<?php

// database connection string, deliberately bungled so we can play with errors...
$conn = new mysqli('localhost','blah','blah','blah');

// some code to do work goes here...

$conn -> close();
?>