<?php
// add the connection file so the script can use the connection object to 'talk' to the db
include("./inc/conn.php");

//grab each needed values from form and put them into an sql statement
$sql = "INSERT INTO survey(name,q1,q2,comments) VALUES('" . $_POST["name"] . "','" . $_POST["q1"] . "','" . $_POST["q2"] . "','" . $_POST["comments"] . "')";

// the connection object executes the insert query, stores result in $result
$result = @$conn->query($sql);

// now, let's see what we have in the database

// Second sql query - a select query this time...
$sql2 = "SELECT * FROM survey";

// second set of results, but note that it uses same connection object
$records = @$conn->query($sql2);

echo "<i>The following records are currently stored in the database: </i><br/><br/>";	

// takes $result array and loops through records
while (($row_data = @$records->fetch_assoc()) !== NULL)
{
	echo "Record #" . $row_data["survey_id"] . "<br/><b>Name: " . $row_data["name"] . "</b><br/>Answer to Question 1: " . $row_data["q1"] . "<br/>Answer to Question 2: " . $row_data["q2"] .  "<br/>Comments: " . $row_data["comments"] . "<br/><br/>";
}

  // close connection when through
  $conn -> close();
?>