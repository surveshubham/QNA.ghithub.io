<?php 
 
 echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container-fluid">
     <a class="navbar-brand" href="#">QNA</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
         <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="http://localhost/shubham/QNA/home.php?#">Home</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="http://localhost/shubham/QNA/about.php?#">About</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="http://localhost/shubham/QNA/contact.php?#">Contact</a>
         </li>
         
       </ul>';

     session_start();
       if(isset($_SESSION['loggedin'])){
        echo '<li><P class="heead">welcome user :- '.$_SESSION['username'].'</P></li>
        <a class="btn btn-primary" href="/shubham/QNA/component/_logout.php?" role="button">logout</a>';
       }
     else{
        echo '
        <button class="btn btn-outline-success" type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop">login</button>
        <button class="btn btn-outline-success" type="submit"  data-bs-toggle="modal" data-bs-target="#exampleModal">signup</button>
        ';
       }
    echo'</nav>';
       
 


 include '_signup.php';
 include  '_login.php';

// signup error are written here what to display to the users 

//if succesfully login 
 if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>successfully signup</strong> please login to use all function
</div>';
 }

//if username exist in database
 if(isset($_GET['userexist']) && $_GET['userexist']=="true"){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>user already exists</strong>  please write a valid username 
</div>';
 }
 
//if password do not match to eachother
 if(isset($_GET['passnm']) && $_GET['passnm']=="true"){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>password do not match</strong>  please chek the password again
</div>';
 }
 


 if(isset($_GET['flogin']) && $_GET['flogin']=="true"){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>invalid credintials</strong> 
</div>';
 }


?>