<?php 
    session_start();

    include("../connect.php");
    if(isset($_POST['submit'])){
        $email = $_SESSION['email'];
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $job = isset($_POST['job']) ? $_POST['job'] : null;
        $address = isset($_POST['address']) ? $_POST['address'] : null;

        $query = "UPDATE user SET name='$name', job='$job', address='$address' WHERE email='$email'";
        $insert = mysqli_query($conn,$query);

        header("Location: ../../Pages/User/Profile/accountUser.php");
    }
?>