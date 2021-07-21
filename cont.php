<?php
session_start();
header('location:home.php');
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$msg = $_POST['msg'];



$con = new mysqli('localhost','root','Kunal@123','userregisteration');

if($con -> connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $con->prepare("insert into contactform(name,mobile,email,msg)values(?,?,?,?)");
    $stmt ->bind_param("siss",$name,$mobile,$email,$msg);
    $stmt ->execute();
    
    $stmt-> close();
    $con-> close();
}



?>