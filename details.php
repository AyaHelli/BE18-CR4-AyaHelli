<?php
require_once "db_connect.php";
$id = $_GET["id"];
$sql= "SELECT * FROM `library` WHERE id = $id ";
$result=mysqli_query($conn,$sql);
$text="";
$row=mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="details.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary nav">
  <div class="container-fluid">
    <a class="navbar-brand titleL" href="#"><i class="fa-solid fa-book-open-reader"></i> open library</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Create</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="update.php">Ubdate</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    
    <?php
  echo " <div class='detailscard'><div class='card'>

    <img src='{$row['image']}' >
    <h5 class='card-title'>{$row['title']}</h5>
    <p class='card-text'>{$row['short_description']}</p>
    <p class='card-text'>
    <h4> ISBN: </h4>  {$row['ISBN']}</p> <hr>
    <p class='card-text'> <h4> Type : </h4>{$row['type']}</p><hr>
    <h2> Author :</h2> 
    <p class='card-text'> <h4> first name : </h4>
    {$row['author_first_name']}</p> 
    <p class='card-text'> <h4> last name : </h4>
    {$row['author_last_name']}</p> <hr>

    <p class='card-text d-flex justify-content-start'> <h4> Publischer Name: </h4> {$row['publischer_name']}</p><hr>
    <p class='card-text d-flex justify-content-start'> <h4> Publischer Address: </h4> {$row['publischer_address']}
    </p><hr>
    <p class='card-text d-flex justify-content-start'><h4> Publisch Date: </h4> {$row['publisch_date']}</p><hr>
    
    <a href='index.php'' class='btn btn-primary btnback'>Back</a>
  </div>
  </div> ";

?>
    </div>
</div>


    
</body>
</html>