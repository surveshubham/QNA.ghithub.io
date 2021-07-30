<?php 
session_start();

session_unset();

session_destroy();
 
header("location: http://localhost/shubham/QNA/home.php?");

exit;

?>