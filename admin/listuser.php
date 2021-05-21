<?php
$con=mysqli_connect("localhost","root","","kitaab");

if(isset($_POST['init'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $pincode=$_POST['pincode'];
    

    $i=$_FILES['imgup']['name'];
  $buf=$_FILES['imgup']['tmp_name'];
  move_uploaded_file($buf,"pimages/".$i);

$ins="INSERT INTO signup SET name='$name', email='$email', password='$password', contact='$contact', dob='$dob', gender='$gender', address='$address', pincode='$pincode', profile='$i'  ";
$con->query($ins);

header("location:important.php");
}
?>