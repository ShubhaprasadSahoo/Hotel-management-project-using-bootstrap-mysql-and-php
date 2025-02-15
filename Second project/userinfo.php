<?php
$con=mysqli_connect('localhost','root');

if($con){
    echo "Connection sucessfull";
}
else{
    
    echo "No Connection";
}

mysqli_select_db($con,'feedback');
$user=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comments'];

$query="insert into userinfo(user, email, mobile, comment)
values('$user', '$email', '$mobile', '$comment' )";

mysqli_query($con, $query);

header("location:index.php");
?>