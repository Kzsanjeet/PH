
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//connetcing to the database
$con = new mysqli('localhost','root','');// but also can do new mysqli_connect() like this
if(!$con){
    echo "The connection did not established.";
}else{
    echo "connected to the database.";
    echo $con->connect_error(); //checking the error of the connection
}
?>
    
</body>
</html>
