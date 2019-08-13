<?php


require_once('dbconnect.php');


$pwd=$_GET['pwd'];
$email=$_GET['email'];

echo "<br>";

$my_query = "";

$my_query= "select * from users where email = '$email' and pwd = '$pwd'";

$result = mysqli_query($connection, $my_query);

if(mysqli_num_rows($result) > 0)
{
    echo "Congrats you are now logged in!!";
}
else
{
    echo"Invalis E-mail or Password";
}