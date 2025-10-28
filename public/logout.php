<?php
session_start(); //we don't need any kind of form for the logout page, we will just start session and destroy <it class="


//remove all session variables
session_unset();

//destroy the session

session_destroy();

//redirect to login page
header("Location: login.php");
exit()
?>
