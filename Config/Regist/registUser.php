<?php
    session_start();
    include("../connect.php");
    if(isset($_POST['submit'])){
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $address = isset($_POST['address']) ? $_POST['address'] : null;
        $job = isset($_POST['job']) ? $_POST['job'] : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;
        $Cpassword = isset($_POST['Cpassword']) ? $_POST['Cpassword'] : null;

        $cekemail = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");
        if(mysqli_fetch_assoc($cekemail)){
            header("Location: ../../Pages/User/registUser.php?erroremail=true");
        } else{
            if($password == $Cpassword){
                $query = "INSERT INTO user (id, password, name, email, address, job,) VALUES ('','$password','$nama','$email','$address','$job')";
                $insert = mysqli_query($conn,$query);
                header("Location: ../index.php");
            } else{
                header("Location: .../../Pages/User/registUser.php?error=true");
            }
        }
    }
?>