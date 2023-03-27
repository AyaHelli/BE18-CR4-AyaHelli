<?php
require "db_connect.php";
require "file_upload.php";
$id = $_GET["id"];
$sql="SELECT * FROM library WHERE id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if(isset($_POST["submit"])){
    $title = $_POST["title"];
    $type = $_POST["type"];
    $ISBN=$_POST["ISBN"];
    $image = file_upload($_FILES["image"]);
    $short_description = $_POST["short_description"];
    $publischer_name = $_POST["publischer_name"];
    $publischer_address= $_POST["publischer_address"];
    $publisch_date=$_POST["publisch_date"];
    $author_first_name=$_POST["author_first_name"];
    $author_last_name=$_POST["author_last_name"];

    if($image->error == 0){
      if ($row["image"] !="book.jpg"){
        unlink("images/{$row["image"]}");
          $sqlUbdate="UPDATE `library` SET `title`='$title',`image`='$image->fileName',`ISBN`='$ISBN',`short_description`='$short_description',`type`='$type',`author_first_name`='$author_first_name',`author_last_name`='$author_last_name',`publischer_name`='$publischer_name',`publischer_address`='$publischer_address',`publisch_date`='$publisch_date' WHERE id=$id";
        }
        
      
    }else{
        $sqlUbdate="UPDATE `library` SET `title`='$title',`ISBN`='$ISBN',`short_description`='$short_description',`type`='$type',`author_first_name`='$author_first_name',`author_last_name`='$author_last_name',`publischer_name`='$publischer_name',`publischer_address`='$publischer_address',`publisch_date`='$publisch_date' WHERE id=$id";
        if(mysqli_query($conn,$sqlUbdate)){
            header("refresh: 3; url= index.php");

    }

}
}
?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="update.css">
    <title>Document</title>
 </head>
   <body>
   <h1 class="d-flex justify-content-center createline">Update</h1>
      <div class="container" class=" form-group" >
      <div class="info my-3">
   <form method="POST"  placeholder="name of Book" class="form-control" enctype="multipart/form-data">
         <input type="text" placeholder="title of Book"  class="form-control" name="title" value="<?=$row["title"];?>">  <br>
         <input type="number" placeholder="type of Book" class="form-control" name="type" value="<?=$row["type"];?>"> <br>
         <input type="number" placeholder="ISBN of Book" class="form-control" name="ISBN" value="<?=$row["ISBN"]
         ;?>"><br>
         <input type="file" placeholder="Image of Book" class="form-control" name="image" value="<?=$row["image"];?>"><br>
         <input type="text" placeholder="discription of Book" class="form-control" name="short_description" value="<?=$row["short_description"];?>"><br>
         <input type="text" placeholder="Publischer name of Book" class="form-control" name="publischer_name" 
         value="<?=$row["publischer_name"];?>"> <br>
         <input type="text" placeholder="Publischer address of Book" class="form-control" name="publischer_address" 
         value="<?=$row["publischer_address"];?>"><br>
         <input type="text" placeholder="Publisch_date of Book" class="form-control" name="publisch_date" value="<?=$row["publisch_date"];?>"><br>
         <input type="text" placeholder="firstname of autor" class="form-control" name="author_first_name" value="<?=$row["author_first_name"];?>"><br>
         <input type="text" placeholder="lastname of author" class="form-control" name="author_last_name" value="<?=$row["author_last_name"] ;?>"><br>
         <hr>
         <input type="submit" value="Update" name="submit" class="sub d-flex justify-content-center btn btn-success createline">
      
   </form>
      </div>
      </div>
   </body> 
</html>