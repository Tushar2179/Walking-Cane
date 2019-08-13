<?php


require_once('dbconnect.php');
$jobname=$_GET['jobname'];
$date=$_GET['date'];
$location=$_GET['location'];
$about=$_GET['about'];
$ministry=$_GET['ministry'];

echo "<br>";


$my_query = "";

$my_query= "select * from jobs where jobname = '$jobname'";

$result = mysqli_query($connection, $my_query);

if(mysqli_num_rows($result) > 0)
{
    echo "SORRY THIS JOB ALREADY EXISTS <br> PLEASE CHOOSE ANOTHER JOB";
}
else
{
    $my_query =" INSERT INTO jobs (jobname, date, location, about, ministry) VALUES ('$jobname','$date','$location','$about','$ministry')" ;
    echo"<br>";
    $result= mysqli_query($connection,$my_query);
    if($result)
    {
        include 'thankyou.html';
    }
    else
    {
        echo"<br> error to post";
    }
}
mysqli_close();

?>