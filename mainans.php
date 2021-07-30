<!doctype html>
<html lang="en">

<head>

<link rel="stylesheet" href="ss2.css">
<script src="https://kit.fontawesome.com/9d973c37ce.js" crossorigin="anonymous"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

  
  <title>QNA MAINANS</title>
</head>

<STYLE> 

body {
    margin: 0;
    font-family: var(--bs-font-sans-serif);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #0c0909;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
}

.box {
    margin: 0 auto;
    width: 90%;
    height: auto;
    padding: 45px;
    
}
.alert.alert-success {
    MARGIN: 0 AUTO;
    WIDTH: auto;
   
    MARGIN-BOTTOM: 20PX;
}

.cardss {
    background-color: white;
    color: black;
    margin-bottom: 18px;
    padding: 8px;
    padding-top: 9px;
    border-radius: 14px;
    border: 2px solid white;
    padding-top: 19px;
    transition: 0.05s ease-in-out;
}

.cardss:hover{
    background-color: white;
    color: black;
    margin-bottom: 18px;
    padding: 15px;
    padding-top: 9px;
    border-radius: 14px;
    border: 2px solid white;
    padding-top: 19px;
    box-shadow: 5px 7px 7px 0px rgb(255 255 255 / 50%);
}


a.fas.fa-user.fa-lg {
    text-decoration: none;
}

::before {
    padding: 5px;
    border: 2px solid black;
    border-radius: 22px;
}

h3 {
    text-align: center;
    color:white;
}

p.card-text {
    margin-left: 36px;
}

textarea#desc {
    justify-content: center;
    border-radius: 19px;
    border: 2px solid black;
    width: 85%;
    margin: 0 auto;
}

form {
    justify-content: center;
    text-align: center;
}

button.btn.btn-success {
    margin-top: 5px;
    margin-bottom: 15px;
}

p.heead {
    color: white;
    margin-right: 12px;
}

.alert.alert-dark {
    width: 80%;
    margin: 0 auto;
    padding: 26px;
    margin-top: 19px;
    margin-bottom: 22px;
}

h4.alert-heading {
    text-align: center;
}

</STYLE>

<body>
  <!--nav bar -->
  <?php require 'component/_nav.php' ?>
    
  <?php require 'component/_connect.php' ?>

  <?php require 'component/_signup.php' ?>
  
  <?php require 'component/_login.php' ?>

  <?php require 'component/_connect2.php' ?>
  <!--required elements -->




<!-- we itterate card here -->


<!--here we fetch ans from the database-->
<?php  
$id = $_GET['mainid'];

$sql ="SELECT * FROM `main` WHERE `main_id` = $id" ;
$results = mysqli_query($conn2, $sql);
$num = mysqli_num_rows($results);

while($row = mysqli_fetch_assoc($results))
{
 echo'
 <div class="alert alert-success" role="alert">
  <h4 class="alert-heading"> Q. '.$row['main_title'].'</h4>
  <p>'.$row['main_desc'].'</p>
  <hr>
  <p class="mb-0">note:- pls do not abuse anyone or hurt anyone feeling write ans if you know take info dont spread hate here</p>
</div>
 ';
}
?>





<!--form php here-->
<?php
 $method = $_SERVER['REQUEST_METHOD'];
 
 if($method == "POST") {

  $descr = $_POST['desc'];
  $srno = $_POST['srno'];

  $sql2 = "SELECT * FROM `comment` WHERE `com` LIKE '$descr'";
  $result = mysqli_query($conn2 , $sql2);
  $row = mysqli_num_rows($result);

  if($row>0){
    echo "";
  }
  else{
  $sql ="INSERT INTO `comment` (`com`, `main_cat_id`, `com_by`) VALUES  ( '$descr', '$id', '$srno');" ;
  $results = mysqli_query($conn2, $sql);
}
}

?>

<?php

if(isset($_SESSION['loggedin'])){
      echo '<form action="'.$_SERVER['REQUEST_URI'].'" method="post">
      <div class="form-floating">
        <label for="floatingTextarea"></label>
      <textarea class="form-control" placeholder="Leave a comment here" id="desc" name="desc" > </textarea>
      <input type="hidden" name="srno" value="'.$_SESSION['srno'].'">
      </div>
       <button type="submit" class="btn btn-success">Submit</button>
     </form>';
    }
    else{
      echo '<div class="alert alert-dark" role="alert">
      <h4 class="alert-heading">login to comment your answer</h4>
      <p>only authorized user is able to write the comment so pls login ! or you will not able to write the comment but you can see the commentent answer below </p>
      <hr>
      <p class="mb-0">pls comment respectfully , and follow all the rules properly , dont use any vulgar language only answer the respected 
      question</p>
    </div>';
    }
?>

 <!--form closed -->

 <h3>comments related to answer</h3>


<!-- comment ka box -->
<div class="box">
<?php
 $id = $_GET['mainid'];
 $noresult = true; 
 $sql ="SELECT * FROM `comment` WHERE `main_cat_id` = $id" ;
 $results = mysqli_query($conn2, $sql);
 $num = mysqli_num_rows($results);
 
 while($row = mysqli_fetch_assoc($results))
   {
   $userid = $row['com_by'];
   $sqli = "SELECT username FROM qnauser WHERE srno = '$userid'";
   $result = mysqli_query($conn,$sqli);
   $num = mysqli_num_rows($result);
   $row2 = mysqli_fetch_assoc($result);
   $noresult = false; 
    echo '<div class="cardss">
    <a href="" class="fas fa-user fa-lg"> '.$row2['username'].' </a>
      <p class="card-text">'.$row['com'].'</p>
   </div>';
      }
   if($noresult){
     echo ' <div class="card-body">
     <blockquote class="blockquote mb-0">
       <p>Nothing to display here </p><br>
       <footer class="blockquote-footer">BE FIRST TO WRITE A COMMENT</footer>
     </blockquote>
   </div>';
   }
        
?>
</div>
<!-- comment ka box close here -->


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
       -->
</body>

</html>