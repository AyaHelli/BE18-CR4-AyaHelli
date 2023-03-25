<?php



function file_upload($image){
    $result=new stdClass();
    $result->fileName="book.jpg";
    $result->error=false;
    $fileName=$image["name"];
    $fileType=$image["type"];
    $fileError=$image["error"];
    $fileSize=$image["size"];
    $fileTempName=$image["tmp_name"];

    $fileExtention= strtolower(pathinfo($fileName,PATHINFO_EXTENSION));
    $filesAllowed= ["png","jpg","jpeg"];

    if($fileError == 4){
       #no picture has been choosen
       $result->errorMessage ="No picture was chosen,it can always be updated later.";
       return $result;
    }else{
    #you choose a picture
    if(in_array($fileExtention,$filesAllowed)){
     if($fileError == 0){
       if($fileSize< 500000){
        $fileNewName=uniqid(("")).".".$fileExtention;
        $to="../images/$fileNewName";
        if(move_uploaded_file($fileTempName,$to)){
            $result->error=false;
            $result->fileName=$fileNewName;
            return $result;
        }
       }else{
        $result->errorMessage= "The picture is bigger than allowed(500kb) <br> please choose a smaller picture";
       }
     }else{
        $result->errorMessage= "there was an error while uploading $fileError code , check php documentation";
     }
    }else{
        $result->errorMessage= "this file can't be uploaded";
        return $result;
     }
    }

}


?>
