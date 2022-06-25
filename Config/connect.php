<?php 
        $dbhost = "localhost";
        $dbuser = "root";
        $dbname = "rpl";
        $dbpass = "";

        $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        print_r($conn);
        if(!$conn) {
            echo "alert(Failed to connect)";
        }
    ?>