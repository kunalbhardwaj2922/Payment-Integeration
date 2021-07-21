<?php
$conn =mysqli_connect("localhost","root","Kunal@123","razorpay");

if (mysqli_connect_errno()){
    echo "Failed :" .mysqli_connect_error();
    exit();

}
?>