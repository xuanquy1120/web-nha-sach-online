<?php
$con=mysqli_connect("localhost","root","","kitaab");
$id=$_GET['id'];

$sel="SELECT * FROM signup WHERE id='$id'";
$dl=$con->query($sel);
$row=$dl->fetch_assoc();
$img=$row['profile'];

unlink("userimages/".$img);

$del="DELETE FROM signup WHERE id='$id'";
$con->query($del);


header("location:important.php");
?>