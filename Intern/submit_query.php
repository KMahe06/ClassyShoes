<?php

$name=$_POST['name'];
$dob=$_POST['dob'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$query=$_POST['query'];


$conn=mysqli_connect('localhost','root','');

mysqli_select_db($conn,'interndb');

$sql=( " insert into registerform (name, dob, mobile, email, query) VALUES ('$name', '$dob', '$mobile', '$email', '$query')");

mysqli_query($conn,$sql);
    echo "Registered successfully...";


include('register.php');
mysqli_close($conn);

?>
