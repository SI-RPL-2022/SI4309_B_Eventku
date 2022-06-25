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
        
        $queryCek = "SELECT * FROM user WHERE email = '$email'";
        $cekemail = mysqli_query($conn, $queryCek);
        $cekAvailEmail = mysqli_fetch_assoc($cekemail);
        $emailDB = $cekAvailEmail['email'];
        
        if($emailDB!=0){
            header("Location: ../../Pages/User/registUser.php?erroremail=true");
            
        } else{
            if($password == $Cpassword){
                $query = "INSERT INTO user (email, password, name, address, job) VALUES ('$email','$password','$name','$address','$job')";
                $insert = mysqli_query($conn,$query);
                echo ($insert);
                // echo "berhasil";
                // header("Location: ../../index.php");
            } else{

                header("Location: ../../Pages/User/registUser.php?error=true");
            }
        }
    }
?>