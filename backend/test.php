<html>

<table>

<tr>

<td>Name</td>
<td>Age</td>
</tr>
<?php

// Enter username and password
$username = root;
$password = root;

// Create database connection using PHP Data Object (PDO)
$db = new PDO("mysql:host=localhost;dbname=mydb", $username, $password);

// Identify name of table within database
$table = 'jobs';

// Create the query - here we grab everything from the table
$stmt = $db->query('SELECT * from '.$table);

// Close connection to database
$db = NULL;

while($rows = $stmt->fetch()){

    <!DOCTYPE.html>
        <html>
        
            
        
        </html>
    echo "<tr><td>". $rows['jobname'] . "</td><td>" . $rows['location'] . "</td></tr>";
};
?>
</table>
</html>