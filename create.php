<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="create.css">
    <title>Document</title>
</head>
<body>
<h1 class="d-flex justify-content-center createline">CREATE</h1>
    <div class="container" class=" form-group" >
     <div class="info my-3">
     <form method="POST" action="a_create.php" placeholder="name of Book" class="form-control" enctype="multipart/form-data">
        <input type="text" placeholder="title of Book"  class="form-control" name="title"> <br>
        <input type="number" placeholder="type of Book" class="form-control" name="type"> <br>
        <input type="number" placeholder="ISBN of Book" class="form-control" name="ISBN"><br>
        <input type="file" placeholder="Image of Book" class="form-control" name="image"><br>
        <input type="text" placeholder="discription of Book" class="form-control" name="short_description"><br>
        <input type="text" placeholder="Publischer name of Book" class="form-control" name="publischer_name"><br>
        <input type="text" placeholder="Publischer address of Book" class="form-control" name="publischer_address"><br>
        <input type="text" placeholder="Publisch_date of Book" class="form-control" name="publisch_date"><br>
        <input type="text" placeholder="Publisch_date of Book" class="form-control" name="author_first_name"><br>
        <input type="text" placeholder="Publisch_date of Book" class="form-control" name="author_last_name"><br>
        <hr>
        <input type="submit" value="create" name="submit" class="sub d-flex justify-content-center btn btn-success createline">
    
     </form>
    </div>
    </div>
    
</body>
</html>