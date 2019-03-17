<?php
$con = mysql_connect("localhost","norm","Dorwasps1!");
if ( ! $con) {
    die("Could not connect: " . mysql_error());
}
mysql_select_db("aihec", $con);

$sql = "INSERT INTO contact_info (FirstName, LastName, Subject)
        VALUES ('$_POST[FirstName]','$_POST[LastName]','$_POST[Subject]')";

if ( ! mysql_query($sql, $con)) {
    die('Error: ' . mysql_error());
}
mysql_close($con)
?>



