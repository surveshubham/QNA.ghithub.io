<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="ssss.css">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

  <title>QNA</title>
</head>

<STYLE>
  .alert.alert-success.alert-dismissible.fade.show {
    margin-bottom: 0px;
  }

  .alert.alert-danger.alert-dismissible.fade.show {
    margin-bottom: 0px;
  }

  .sec {
    WIDTH: 1200PX;
  }

  p.heead {
    color: white;
    margin-right: 12px;
  }

  .footer-copyright.text-center.py-3 {
    background-color: black;
    border: 2px solid grey;
    color: white;
  }

  .shu {
    background: black;
    color: white;
  }

  .sec:hover {
    box-shadow: 5px 7px 7px 0px rgb(255 255 255 / 50%);
    justify-content: center;
    position: relative;
    border: 2px solid black;
    width: 100%;
    color: black;
    margin: 16px;
    text-align: center;
    align-items: center;
    background-color: white;
  }

  .sec a.btn:hover {
    padding: 3px;
    background-color: rgb(85, 255, 93);
    color: rgb(0, 0, 0);
    margin-bottom: 5px;
    width: 72px;
  }

  @media only screen and (max-width: 600px) {
    img.card-img-top {
      height: 116px;
    }

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

  <!--corossal -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://source.unsplash.com/user/erondu/1600x650/?css,iphone" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1600x650/?coding,developer" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1600x650/?c++,coding" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!--corosall closed-->




  <h1 class="text-center">QNA - CATEGORIES</h1>





  <!-- we itterate card here -->
  <?php

  $sql = "SELECT * FROM `categories`";
  $results = mysqli_query($conn2, $sql);
  $num = mysqli_num_rows($results);
  while ($row = mysqli_fetch_assoc($results)) {
    $id =  $row['cat_no'];
    echo '
    <div class="shu">
      <div class="sec">
      <img src="https://source.unsplash.com/user/erondu/800x100/?coding ' . $row['categorie'] . ' , c++ , computers" class="card-img-top" alt="..." >
      <hr>
      <h6>' . $row['categorie'] . ' </h6>
      <p>' . $row['cat_desc'] . ' ...</p>
      
      <a href="/shubham/QNA/MAIN.php?catid=' . $id . '" class="btn">QNA</a>
     </div>
    </div>
    ';
  }
  ?>




  <?php require 'component/_footer.php' ?>
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