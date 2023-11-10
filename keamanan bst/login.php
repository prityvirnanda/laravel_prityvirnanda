<?php 
session_start();
include_once 'database.php';

    if(isset($_post["login"])){
        $username =$_post["username"];
        $password =$_post["password"];

        $login = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password ='$password'");
        if(mysqli_num_rows($login) == 0){
            die('Username and password not valid');
            
        }else if(isset($_post["login"]) && isset($_post["remember"])){
        $username =$_post["username"];
        $password =$_post["password"]; 

        $login = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password ='$password'");
        setcookie('id','administrator',time()+250);
        $_SESSION['login'] = true;
        header('location:index.php');
     }else{
        $_SESSION['login'] = true;
        header('location: index.php');  
     }
}
?>