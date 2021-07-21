<?php
session_start();
header('location:appointsuccess.php');
$name = $_POST['name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$mobile = $_POST['mobile'];
$diseases = $_POST['diseases'];
$symptoms = $_POST['symptoms'];



$con = new mysqli('localhost','root','Kunal@123','userregisteration');

if($con -> connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $con->prepare("insert into appointmentform(name,sex,age,mobile,diseases,symptoms)values(?,?,?,?,?,?)");
    $stmt ->bind_param("ssiiss",$name,$sex,$age,$mobile,$diseases,$symptoms);
    $stmt ->execute();
    
    $stmt-> close();
    $con-> close();
}



?>