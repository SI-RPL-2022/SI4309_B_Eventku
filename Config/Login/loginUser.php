<?php 

session_start();
include("connect.php");

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $query = "SELECT * FROM user WHERE email='$email'";
    $select = mysqli_query($conn,$query);
    $display = mysqli_fetch_assoc($select);
    if($password == $display['password']){
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        header("Location: ../index.php");
    } else{
        header("Location: ../pages/login.php?error=true");
    }
}
?>