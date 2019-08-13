<?php


require_once('dbconnect.php');
$ufname=$_GET['user'];
$ulname=$_GET['lname'];
$pwd=$_GET['pwd'];
$email=$_GET['email'];

echo "<br>";

$my_query = "";

$my_query= "select * from users where email = '$email'";

$result = mysqli_query($connection, $my_query);

if(mysqli_num_rows($result) > 0)
{
    echo "SORRY THIS E-MAIL ALREADY EXISTS <br> PLEASE CHOOSE ANOTHER E-MAIL";
}
else
{
    $my_query =" INSERT INTO users (ufname, ulname, email, pwd) VALUES ('$ufname','$ulname','$email','$pwd')" ;
    echo"<br>";
    $result= mysqli_query($connection,$my_query);
    if($result)
    {
        include 'thankyouacc.html';
    }
    else
    {
        echo"<br> error to post";
    }
}
mysqli_close();

?>