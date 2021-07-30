<?php require 'component/_nav.php' ?>

<!doctype html>
<html lang="en">

<head>

  <link rel="stylesheet" href="ss2.css">
  <script src="https://kit.fontawesome.com/9d973c37ce.js" crossorigin="anonymous"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">


  <title>QNA MAIN</title>
</head>


<style>
  body {
    background-color: black;
  }

  .card-body {
    padding: 0px;
  }

  h5 {
    padding-left: 6px;
  }

  ::before {
    padding: 5px;
    border: 2px solid black;
    border-radius: 22px;
  }

  .cardss {
    margin-bottom: 18px;
    border: 2px solid black;
    padding: 8px;
    padding-top: 20px;
    border-radius: 70px;
  }

  a.fas.fa-user.fa-lg {
    text-decoration: none;
  }

  .card.text-center {
    border: 2px solid black;
    margin-bottom: 4px;
  }

  h5.card-header {
    background-color: #fffdfd;
    color: #ea0000;
    border: 1px solid beige;
  }

  form {
    width: 70%;
    margin: 0 auto;
    padding: 16px;
    justify-content: center;
    text-align: center;
  }

  button.btn.btn-success {
    margin-top: 16px;
  }

  textarea#desc {
    BORDER: 2PX SOLID #00e256;
  }

  input#title {
    border: 2px solid limegreen;
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
    transition: 0.3s ease-in-out;
  }

  blockquote.blockquote.mb-0 {
    border: 2px solid red;
    padding: 55px;
    text-align: left;
    margin: 0 auto;
    width: 90%;
    background: black;
    color: red;
  }

  .footer-copyright.text-center.py-3 {
    background-color: black;
    border: 2px solid grey;
    color: white;
  }

  p.card-text {
    padding-left: 20px;
  }

  .alert.alert-dark:hover {
    padding: 30px;
    width: 90%;
  }

  .second.py-2.px-2 {
    padding: 40px;
    width: 90%;
    border: 2px solid black;
    background-color: white;
  }

  .second.py-2.px-2:hover {
    box-shadow: 5px 7px 7px 0px rgb(255 255 255 / 50%);
    width: 90%;
    border: 4px solid white;
    background-color: white;
  }

  .d-flex.justify-content-center.py-2 {
    margin: -46px;
  }

  a.fas.r.fa-lg {
    text-decoration: none;
    text-transform: capitalize;
  }

  h4 {
    color: white;
  }

  .second.py-2.px-2 {
    border-radius: 23px;
  }

  @media only screen and (max-width: 600px) {


    .second.py-2.px-2 {
      padding: 40px;
      width: 70%;
      border: 2px solid black;
      background-color: white;
    }

    .second.py-2.px-2:hover {
      box-shadow: 5px 7px 7px 0px rgb(255 255 255 / 50%);
      width: 80%;
      border: 4px solid white;
      background-color: white;
    }

    form {
      width: 90%;
      margin: 0 auto;
      padding: 16px;
      justify-content: center;
      text-align: center;
    }

    .second.py-2.px-2 {
      border-radius: 23px;
    }

  }
</style>



<body>
  <!--nav bar -->


  <?php require 'component/_connect.php' ?>

  <?php require 'component/_signup.php' ?>

  <?php require 'component/_login.php' ?>

  <?php require 'component/_connect2.php' ?>
  <!--required elements -->

  <!-- we itterate card here -->



  <?php

  $id = $_GET['catid'];

  $sql = "SELECT * FROM `categories` WHERE `cat_no` = $id";
  $results = mysqli_query($conn2, $sql);
  $num = mysqli_num_rows($results);

  while ($row = mysqli_fetch_assoc($results)) {
    echo '
  <div class="card text-center">
  <div class="card-body">
    <h5 class="card-header">' . $row['categorie'] . ' QNA</h5>
  </div>
</div>
    ';
  }
  ?>




  <!--form php here-->
  <?php
  $method = $_SERVER['REQUEST_METHOD'];

  if ($method == "POST") {
    $titlem = $_POST['title'];
    $descr = $_POST['desc'];
    $srno = $_POST['srno'];

    $sql2 = " SELECT * FROM `main` WHERE `main_title` LIKE '$titlem' AND `main_desc` LIKE '$descr' ";
    $resultr = mysqli_query($conn2, $sql2);
    $roww = mysqli_num_rows($resultr);

    if ($roww > 0) {
      echo "";
    } else {
      $sql = "INSERT INTO `main` (`main_title`, `main_desc`, `main_cat_id`, `main_user_id`, `timestamp`)VALUES 
  ( '$titlem', '$descr', '$id', '$srno', current_timestamp());";
      $results = mysqli_query($conn2, $sql);
    }
  }

  ?>




  <!--form div-->
  <?php
  if (isset($_SESSION['loggedin'])) {
    echo '<form action="" method="post">
  <div class="mb-3">
   <label for="exampleInputEmail1" class="form-label"><h4>ASK QUESTION WITH TITLE</h4></label>
   <input type="text" class="form-control" id="title" placeholder="Title" name="title" aria-describedby="emailHelp">
  
 </div>
<div class="form-floating">
 <label for="floatingTextarea"></label>
 <textarea class="form-control" placeholder="Leave a comment here" id="desc" name="desc" ></textarea>
  <input type="hidden" name="srno" value="' . $_SESSION['srno'] . '">
</div>
 <button type="submit" id="submit" class="btn btn-success">Submit</button>
</form> ';
  } else {
    echo '<div class="alert alert-dark" role="alert">
  <h4 class="alert-heading">pls login to ask question</h4>
  <p>IF YOU WANT TO COMMENT ON ANY QUESTION OR WANT TO READ THE COMMENT RELATED TO ANSWER PLS CLICK THE LINK RESPONED TO THE QUESTION</p>
  <hr>
  <p class="mb-0">pls ask question related to topics no vulgars words or breaking of rules is tollerated, so pls be carefull !</p>
</div>';
  }
  ?>
  <!--form closed -->










  <!--here we fetch ans from the database-->
  <?php
  $id = $_GET['catid'];
  $noresult = true;
  $sql = "SELECT * FROM `main` WHERE `main_cat_id` = $id";
  $results = mysqli_query($conn2, $sql);
  $num = mysqli_num_rows($results);

  while ($row = mysqli_fetch_assoc($results)) {
    $userid = $row['main_user_id'];
    $sqli = "SELECT username FROM qnauser WHERE srno = '$userid'";
    $result = mysqli_query($conn, $sqli);
    $num = mysqli_num_rows($result);
    $row2 = mysqli_fetch_assoc($result);
    $noresult = false;
    echo '
 

 <div class="container justify-content-center mt-5 border-left border-right">
    <div class="d-flex justify-content-center py-2">
        <div class="second py-2 px-2"> <a href="/shubham/QNA/MAINANS.php?mainid=' . $row['main_id'] . '" class="fas r fa-lg"> ' . $row['main_title'] . '</a>
            <div class="d-flex justify-content-between py-1 pt-2">
            <div><img src="https://i.imgur.com/AgAC1Is.jpg" width="18"><span class="text2"><b>' . $row2['username'] . '</b></span></div><br>
            </div>
            <P>' . $row['main_desc'] . '</p>
        </div>
    </div>
</div>

';
  }
  if ($noresult) {
    echo ' <div class="card-body">
  <blockquote class="blockquote mb-0">
    <p>Nothing to display here </p><br>
    <footer class="blockquote-footer">BE FIRST TO WRITE A COMMENT</footer>
  </blockquote>
</div>';
  }
  ?>






  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
       -->
</body>

</html>