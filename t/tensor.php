<?php

$target_dir = "uploads/";


$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake 
image
if(isset($_POST["submit"])) 
{
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
 
   if($check !== false)
 {
        //echo "File is an image - " . $check["mime"] . ".";

        $uploadOk = 1;
    }
 else {
        echo "File is not an image.";

        $uploadOk = 0;
    }
}

// Check if $uploadOk is set to 0 by an error

if ($uploadOk == 0) 
{
    echo "Sorry, your file was not uploaded.";

// if everything is ok, try to upload file
} 
else
 {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
 {
     
    } else {
        echo "Sorry, there was an error uploading your file.";

    }
}


$r = shell_exec("sudo /home/cse/t.sh $target_file 2>&1");

$t = file_get_contents("/home/cse/r.txt");
preg_match("/(ga.*|mo.*)/",$t,$matches);

echo $matches[0];

 
?>

