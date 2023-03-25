<?php
require_once "db_connect.php";
$sql= "SELECT * FROM `library`";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">


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
        
       
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row row-cols-3 my-4">
    <?php
foreach($rows as $rec){
   echo "<div><div class='card table' style='width: 18rem;'>
   <img src='{$rec['image']}' class='card-img-top imgstable'>
   <div class='card-body'>
     <h5 class='card-title'>{$rec['title']}</h5>
     <p class='card-text desc'>{$rec['short_description']}</p>
     <a href='delete.php?id={$rec["id"]}' class='btn btn-danger'>Delete</a>
     <a href='details.php?id={$rec["id"]}' class='btn btn-primary'>Details</a>
     <a href='update.php?id={$rec["id"]}' class='btn btn-warning'>Ubdate</a>
   </div>
 </div></div>" ;
}
?>
    </div>
</div>
</body>
</html>