<?php
$error;
if(!empty($_POST['yoo']) && !empty($_POST['password'])){
    $nickname = $_POST['yoo'];
    $password = $_POST['password'];
    if($nickname =="usuario" && $password =="123"){
        $error = "OK"; 
        echo "Accedió";
    }else{
        $error = "incorrecto";
        header("Location: index.php?error=$error");
    } 
}else{
   $error = "vacio"; 
   header("Location: index.php?error=$error");

}