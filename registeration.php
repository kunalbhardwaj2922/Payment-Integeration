<?php
 session_start();
 header('location:login.php');

$con = mysqli_connect('localhost','root','Kunal@123');
mysqli_select_db($con,'userregisteration');

$name = $_POST['user'];
$pass = $_POST['password'];
$email= $_POST['email'];
$mobile = $_POST['mobile'];

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Username taken";

}else{
    $reg = "insert into usertable(name,password,email,mobile) values ('$name','$pass','$email','$mobile')";
    mysqli_query($con, $reg);
    echo "Registeration Successfull";
}
?>