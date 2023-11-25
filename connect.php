<?php
$servername = "localhost";
$username = "root";
$password="";
$database_name="landing_page";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check its connection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}
if(isset($_POST['save']))
{
    $Name = $_POST['Name'];
    $Email = $_post['Email'];

    $sql_query = "INSERT INTO signed_up (Name,Email)
    VALUES ('$Name','Email')";

    if (mysqli_connect($conn, $sql_query))
    {
        echo "New Details Entry inserted successfully"
    }
    else
    {
        echo "Error: " . $sql . "" .mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>