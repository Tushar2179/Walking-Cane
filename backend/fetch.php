<?php

    $conn = mysqli_connect('localhost','root','root','mydb');
    $query = "SELECT * FROM 'users'";
    $result = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
    echo "".$row["ufname"]." ".$row["ulname"]."<br>";
}

?>