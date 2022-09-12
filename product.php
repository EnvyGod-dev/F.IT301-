<!DOCTYPE html>
<html>
<body>

<?php
session_start();


$username = "";
$email    = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'lab2', '', 'project');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}



$sql = "SELECT id, username, email, img FROM users";
$result = $db->query($sql);


if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        print "<br> id: ". $row["id"]. "<br> - Name: ". $row["username"]. "<br> - Email: " . $row["email"] . "<br>";
      print "<img src=\"".$row["img"]."\">";
     
    }
} else {
    print "done";
}



$db->close();   
        ?> 



</body>
</html>