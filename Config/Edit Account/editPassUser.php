<?php 
    session_start();

    include("../connect.php");
    if(isset($_POST['submit'])){
        $email = $_SESSION['email'];
        echo $email;
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $job = isset($_POST['job']) ? $_POST['job'] : null;
        $address = isset($_POST['address']) ? $_POST['address'] : null;

        $query = "UPDATE user SET name='$name', job='$job', address='$address' WHERE email='$email'";
        $insert = mysqli_query($conn,$query);

        header("Location: ../../Pages/User/Profile/accountUser.php");
    }
?>

<?php 

session_start();
include("../connect.php");

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $query = "SELECT * FROM user WHERE email='$email'";
    $select = mysqli_query($conn,$query);
    $display = mysqli_fetch_assoc($select);
    if($password == $display['password']){
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        header("Location: ../../Pages/User/homePage.php");
    } else{
        header("Location: ../../Pages/User/homePage.php?error=true");
    }
}
?>