<?php 

session_start();
include("../connect.php");

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $query = "SELECT * FROM eo WHERE email='$email'";
    $select = mysqli_query($conn,$query);
    $display = mysqli_fetch_assoc($select);
    if($password == $display['password']){
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        header("Location: ../../Pages/EO/Profile/myEventEO.php");
    } else{
        header("Location: ../../Pages/EO/loginEO.php?error=true");
    }
}
?>