<?php
$server = "";
$username = "";
$password = "";
$dbname = "";
$conn = mysqli_connect($server, $username, $password, $dbname);


// $conn=mysqli_connect("localhost", "root");

if($conn)
{
    echo "Conection successfull ! .";
}
else
{
    echo "No connection !";
}

    mysqli_select_db($conn, 'Bootstrap_thapa');

    $user= $_POST['user'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $comments= $_POST['comments'];

    $query= "insert into userinfodeta (user, email, mobile, comments) values ('$user','$email','$mobile','$comments')";
    mysqli_query($conn, $query);

    header('location:index.php');
    

?>