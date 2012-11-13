<?php
// starts the session
session_start();


//sets the session variables we want to save
$_SESSION['username'] = 'tjhardy';
$_SESSION['password'] = 'testpass';
$_SESSION['theme'] = 'green';
$_SESSION['greeting'] = 'Teresa';

// moves us to the next page where we will see the results 
header('Location: 04-getsession.php');

?>