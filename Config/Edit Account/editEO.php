<?php 
    session_start();

    include("../connect.php");
    if(isset($_POST['submit'])){
        $email = $_SESSION['email'];
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
        $address = isset($_POST['address']) ? $_POST['address'] : null;

        $query = "UPDATE eo SET name='$name', phone='$phone', address='$address' WHERE email='$email'";
        $insert = mysqli_query($conn,$query);

        header("Location: ../../Pages/EO/Profile/accountEO.php");
    }
?>
