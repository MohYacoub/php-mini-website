<?php
session_start();

$multi = $_SESSION["userdb"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"></link>
</head>
<body>

    <h1>Welcome Admin !</h1>
<?php

echo "<form method='post' action='delete.php'>";
echo "<table class='table table-striped' border = '1' border-collapse = 'collapse'>";
echo "<tr>";
echo "<th>Role</th>";
echo "<th>User Name</th>";
echo "<th>Password</th>";
echo "<th>Delete</th>";
foreach($multi as $key => $value){
    echo "<tr>";
    foreach($value as $k => $v){
        echo "<td>$v</td>";  
    }
    echo "<td><input type='submit' name='delete' value='Delete'></td>";
    echo "</tr>";
}
echo "</table>";
echo "</form>";


?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>