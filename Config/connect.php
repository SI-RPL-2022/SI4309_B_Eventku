<?php 
        $dbhost = "localhost";
        $dbuser = "root";
        $dbname = "rpl";
        $dbpass = "";

        $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,3306);

        if(!$conn) {
            echo "alert(Failed to connect)";
        }
    ?>