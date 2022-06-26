<?php 

session_start();
include("../connect.php");

if(isset($_POST['submit'])){
    $email = $_SESSION['email'];
    $password = $_POST['password'];
    $newpass = $_POST['newpass'];
    $renewpass = $_POST['renewpass'];


    $query = "SELECT * FROM eo WHERE email='$email'";
    $select = mysqli_query($conn,$query);
    $display = mysqli_fetch_assoc($select);
    if($password == $display['password']){

        if($newpass==$renewpass){
            $query = "UPDATE eo SET password='$newpass' WHERE email='$email'";
            $insert = mysqli_query($conn,$query);
            echo "berhasil";
            header("Location: ../../Pages/EO/Profile/passwordEO.php?change=true");

        }else{
            header("Location: ../../Pages/EO/Profile/passwordEO.php?errorNew=true");
        }

    } else{
        header("Location: ../../Pages/EO/Profile/passwordEO.php?error=true");
    }
}
?>