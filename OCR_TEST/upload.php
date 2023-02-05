<?php 

if(isset($_FILES['image'])){
    $file_name = $_FILES['image']['name'];
    $file_tmp =$_FILES['image']['tmp_name'];
    move_uploaded_file($file_tmp,"image_test/".$file_name);
    echo "<h3>Image Upload Success</h3>";
    echo '<img src="image_test/'.$file_name.'" style="width:100%">';
    
    shell_exec('"C:\\Program Files (x86)\\Tesseract-OCR\\tesseract" "C:\\wamp64\\www\\ProgChayeInit\\image_test\\'.$file_name.'" out');
    
    echo "<br><h3>OCR after reading</h3><br><pre>";
    
    $myfile = fopen("out.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("out.txt"));
    fclose($myfile);
    echo "</pre>";
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <!-- shell_exec('"C:\\Program Files (x86)\\Tesseract-OCR\\tesseract" "C:\\wamp64\\www\\images_test\\'.$file_name.'" out');
    
    echo "<br><h3>OCR after reading</h3><br><pre>";
    
    $myfile = fopen("out.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("out.txt"));
    fclose($myfile);
    echo "</pre>";
-->
</body>
</html>