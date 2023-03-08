<?php
if(isset($_POST['submit'])){

$file= $_FILES['file'];
$name= $_FILES['file']['name'];
$size =$_FILES['file']['size'];
$tmp_name= $_FILES['file']['tmp_name'];
$error= $_FILES['file']['error'];

$tempExtension = explode(".",$name);
$fileExtension = strtolower(end($tempExtension));
$required = array("pdf","png","jpg","jpeg","docx");
if(in_array($fileExtension,$required)){
     if($error ===0){
         if($size < 110000){
           $fileName = uniqid('',true).".".$fileExtension;
           $fileDestination = "../assets/uploads/upload/".$fileName;
           move_uploaded_file($tmp_name,$fileDestination);
           header("location:../index.php?uploadsuccess");
           exit();
         }else{
             echo "The file is to big";
             header("location:../index.php?error=filetoobig");
             exit();
         }

     }else{
         echo "The file has error";
         header("location:../index.php?error=filehaserror");
             exit();
     }
}else{
    echo "The uploaded file is unacceptable";
    header("location:../index.php?error=fileunacceptable");
    exit();
}












}




















?>