<?php
$con=mysqli_connect("localhost","root");
if($con){
    echo "Connection Sucessful";
}
else{
    echo "No connection";
}

mysqli_select_db($con , 'contactinfo');

$fname= $_POST['firstname'];
$lname=$_POST['lastname'];
$emailid=$_POST['email'];
$mobileno=$_POST['mobile'];
$adharno=$_POST['adhar'];
$male=$_POST['male'];
$female=$_POST['female'];

$query="insert into contactdetails(fname, lname, email, mobile,  adharno, male, female)
values('$fname', '$lname', '$emailid', '$mobileno', '$adharno', '$male', '$female')";

mysqli_query($con, $query);

header("location:https://business.paytm.com/payment-gateway");

?>