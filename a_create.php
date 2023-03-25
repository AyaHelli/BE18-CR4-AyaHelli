<?php
require "db_connect.php";
require "file_upload.php";

if($_POST){
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

    $sql = "INSERT INTO `library`(`title`, `image`, `ISBN`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publischer_name`, `publischer_address`, `publisch_date`) VALUES ('$title','$image->fileName','$ISBN','$short_description','$type','$author_first_name','$author_last_name' ,'$publischer_name','$publischer_address','$publisch_date')";

    if(mysqli_query($conn, $sql)){
        echo "Success";
    }else{
        echo "something ";
    }
   
    
}
