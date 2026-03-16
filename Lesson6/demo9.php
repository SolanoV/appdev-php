<?php

//$_POSTS

$firstname='';
$lastname='';
$email='';
$show=false;
$file=null;

//var_dump($_SERVER['REQUEST_METHOD']);
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])){
        $firstname = htmlspecialchars($_POST['fname']);
        $lastname = htmlspecialchars($_POST['lname']);
        $email = htmlspecialchars($_POST['email']);
        $file=$_FILES['logo'];

        if($file['error']=== UPLOAD_ERR_OK){
            $uploadDir = 'uploads/';

            //make directory
            if(!is_dir($uploadDir)){
                mkdir($uploadDir, 0755, true);

            }

            //create a unique filename
            $filename= uniqid().'-'.$file['name'];
            echo $filename;

            //check file type
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            $fileExtension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

            if(in_array($fileExtension, $allowedExtensions)){
                //upload file
            if(move_uploaded_file($file['tmp_name'],$uploadDir.$filename)){
                echo 'File uploaded successfully';

            }
            else{
                echo 'Failed to upload file:' . $file['error'];
            }
            }else{
                echo('Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.');
            }

            


        }
        $show = true;


    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name info</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        First Name: <input type="text" name="fname">
        <br>
        Last Name: <input type="text" name="lname">
        <br>
        Email: <input type="text" name="email">
        <br>
        Logo: <input type="file" id="logo" name="logo">

        <input type="submit" name="submit" value="Send">
    </form>

    <?php if ($show): ?>
    <h1>You are now registered user</h1>
    <h3><?= $lastname. ' '.$firstname ?></h3>
    <h3><?= $email ?></h3>

    <?php endif; ?>
    
</body>
</html>