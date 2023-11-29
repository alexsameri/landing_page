<?php
    require 'connects.php';

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $password = password_hash(htmlspecialchars($_POST["password"]),PASSWORD_BCRYPT);

        $sql = "INSERT INTO signed_up(name,email,password) VALUES('$name','$email','$password')";
        $result = $mysqli->query($sql);
        echo "Account created successfully";
    }