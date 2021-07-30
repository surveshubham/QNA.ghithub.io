<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

  <title>QNA Contact </title>
</head>

<style>
  p.card-text {
    text-align: center;
  }

  form {
    justify-content: center;
    text-align: justify;
    margin-top: 39px;
    text-align: center;
    width: 70%;
    border-bottom: 1px solid black;

  }

  label {
    margin: 8px;
  }


  button.btn.btn-primary {
    justify-content: center;
    margin-top: 23px;
  }


  input#exampleInputEmail1 {
    width: 70%;
    justify-content: center;
    margin: 0 auto;
    border: 0.5px solid black;
  }


  .contoiner {
    border-top: 1px solid black;
    position: relative;
    display: flex;
    flex-wrap: center;
    justify-content: center;
    width: 100%;
    margin-top: 110px;
  }

  .cards {
    width: 30%;
    border-right: 1px solid black;
    border-bottom: 1px solid black;

  }


  p.card-text {
    text-align: left;
    padding-right: 30px;
      padding-left:30px;
      padding-bottom: 30px;
      padding-right: 30px;
  }


  h2.card-title {
    text-align: left;
    padding-top: 33px;
    padding-left: 27px;
  }

  button.btn.btn-primary {
    margin-bottom: 16px;
    color: black;
    background-color: grey;
    border: 1px solid black;
  }


  @media only screen and (max-width: 840px) {

    .contoiner {
      border-top: 1px solid black;
      position: relative;
      display: flex;
      flex-direction: column;
      flex-wrap: center;
      justify-content: center;
      width: 100%;
      margin-top: 0px;
    }

    .cards {
      width: 100%;
      border-right: none;
      border-bottom: 1px solid black;
    }

    p.card-text {
      text-align: left;
      padding-right: 30px;
      padding-left:30px;
      padding-bottom: 30px;
      padding-right: 30px;
    }

    h2.card-title {
      text-align: left;
      padding-top: 33px;
      padding-left: 27px;
    }

    form {
      justify-content: center;
      text-align: justify;
      margin-top: 39px;
      text-align: center;
      width: 100%;
      border-bottom: 1px solid black;
    }

  }
</style>

<body>
  <?php require 'component/_nav.php' ?>

  <?php require 'component/_connect.php' ?>

  <?php require 'component/_signup.php' ?>

  <?php require 'component/_login.php' ?>

  <?php require 'component/_connect2.php' ?>

  <div class="contoiner">
    <div class="cards">
      <h2 class="card-title">Contact us</h2>
      <p class="card-text">Our address :- <br> 506/worli shiddart road near juhu beach East <br> pincode :- 00000
        <br>phone no:- 0008088-088-88
      </p>
    </div>


    <form>
      <h6>pls write the query by providing your email address and ask question respectfully<br>and follow every rule and regulation</h6>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">your query</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Type question">
      </div>


      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->
  <?php require 'component/_footer.php' ?>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
       -->
</body>

</html>