<?php
require 'dvdconn.php';
$sql_update="INSERT INTO superstars(st_id ,st_firstname,st_lastname,st_gender,st_age) VALUES ('$_POST[st_id ]','$_POST[st_firstname]' ,'$_POST[st_lastname]' ,'$_POST[st_gender]','$_POST[st_age]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/PHP-SQL-LAB/PHP-Exercise2/mainmenu.php");
}

?>