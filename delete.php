<?php
    require_once "db_connect.php";

    $id = $_GET["id"];


    $sql= "DELETE FROM `library` WHERE id = $id ";
    if(mysqli_query($conn, $sql)){
        echo "you deleted a book";
        header("refresh: 3; url= index.php");
    }
    ?>