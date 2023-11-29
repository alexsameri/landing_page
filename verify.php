<?php
    require 'connects.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);

        $sql = "SELECT * FROM signed_up WHERE name='$username'";
        $result = $mysqli->query($sql);

        if($result->num_rows > 0){
            $row = $result->fetch_assoc();

            $passhash = $row['password'];

            if(password_verify($pass,$passhash)){
                echo "Welcome".$username;
            }else{
                echo "Wrong username or password";
            }
        }
    }