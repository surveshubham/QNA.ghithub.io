<?php

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
  include '_connect.php';

  $username = $_POST['lusername'];
  $pass = $_POST['lpassword'];
 
  $sql = "SELECT * FROM `qnauser` WHERE `username` LIKE '$username' AND `password` LIKE '$pass' ";
  $result = mysqli_query($conn,$sql);
  $numrow = mysqli_num_rows($result);
   
   if($numrow==1){
    echo 'username exist in databsase';
    $row = mysqli_fetch_assoc($result);
    echo ''.$row['srno'].'';
    session_start();
     $_SESSION['loggedin']=true;
     $_SESSION['srno']=$row['srno'];  //here we fetch srno from the users.
     $_SESSION['username']=$username;
     header("location: http://localhost/shubham/QNA/home.php?");
  } 
  else{
    echo "invalid credintials";  //have to put an alert here.
    header("location: http://localhost/shubham/QNA/home.php?flogin=true");
  }

 }              
?>

