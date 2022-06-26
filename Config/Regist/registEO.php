<?php
    session_start();
    include("../connect.php");
    if(isset($_POST['submit'])){
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $address = isset($_POST['address']) ? $_POST['address'] : null;
        $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;
        $Cpassword = isset($_POST['Cpassword']) ? $_POST['Cpassword'] : null;

        $queryCek = "SELECT * FROM eo WHERE email = '$email'";
        $cekemail = mysqli_query($conn, $queryCek);
        
        if(mysqli_fetch_assoc($cekemail)){
            header("Location: ../../Pages/EO/registEO.php?erroremail=true");
        } else{
            if($password == $Cpassword){
                $query = "INSERT INTO eo (email, password, name, address, phone) VALUES ('$email','$password','$name','$address','$phone')";
                $insert = mysqli_query($conn,$query);
                header("Location: ../../index.php");
            } else{
                header("Location: ../../Pages/EO/registEO.php?error=true");
            }
        }
    }
?>