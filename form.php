<?php
session_start();
header('location:success.php');
$name = $_POST['name'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$age = $_POST['age'];

$address = $_POST['address'];


$con = new mysqli('localhost','root','Kunal@123','userregisteration');

if($con -> connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $con->prepare("insert into patientform(name,sex,email,mobile,age,address)values(?,?,?,?,?,?)");
    $stmt ->bind_param("sssiis",$name,$sex,$email,$mobile,$age,$address);
    $stmt ->execute();
    
    $stmt-> close();
    $con-> close();
}



?>