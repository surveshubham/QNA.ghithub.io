<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
 include '_connect.php';

     $username = $_POST['username'];
     $pass = $_POST['password'];
     $cpass = $_POST['cpassword'];

    
     $sqlc = "SELECT * FROM `qnauser` WHERE `username` LIKE '$username'";
     $result = mysqli_query($conn,$sqlc);
     $row = mysqli_num_rows($result);
      
     if($row > 0){
        header("location: http://localhost/shubham/QNA/home.php?userexist=true");
     }
      elseif($pass != $cpass){
        header("location: http://localhost/shubham/QNA/home.php?passnm=true");
     }
     else{  
       
       $sql = "INSERT INTO `qnauser` ( `username`, `password`) VALUES ('$username', '$pass');"; 
       $results = mysqli_query($conn,$sql);
        
        if($result){
             echo 'useradded succesfully';
            header("location: http://localhost/shubham/QNA/home.php?signupsuccess=true");
        }
       
        
        
     }
     
}


?>