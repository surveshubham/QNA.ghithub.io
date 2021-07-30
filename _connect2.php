<?php   
$servername = "localhost";
$username = "root";
$password = "";
$database = "categories";


$conn2 = mysqli_connect($servername , $username , $password , $database);


if(!$conn2){
    echo 'connection failed';
}else{
    echo "";
}

?>