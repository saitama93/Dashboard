<?php
include('functions.php');

if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="assets/vendor/css/mdb.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

  <link rel="stylesheet" type="text/css" href="/assets/css/index.css">

</head>

<body>


  <?php include('header.php'); ?>


  <main>

    <div class="intro container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-12">

            <h1>Bienvenu <?php echo $_SESSION['user']['username']; ?></h1>
          </div>
          <div class="col-6 intro-content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, in quis. Magni beatae id,
              praesentium vel ipsum harum recusandae, eaque itaque maxime soluta nobis similique sit laboriosam error aut! Porro.
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam sunt voluptas laboriosam temporibus tempore suscipit
              sed voluptate recusandae, asperiores optio quam consectetur sint fugit ab voluptatum autem corporis officia maiores.
            </p>
          </div>
        </div>
      </div>
    </div>

  </main>














  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="assets/vendor/js/mdb.min.js"></script>

</body>

</html>