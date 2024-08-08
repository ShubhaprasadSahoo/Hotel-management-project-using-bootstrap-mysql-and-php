<?php
$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection suecssful";

}else{
    echo "No connection";
}

mysqli_select_db($con ,'youtubuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query="insert into userdata(username, email, mobile, comment)
   values('$user', '$email', '$mobile', '$comments')";

mysqli_query($con, $query);

header('location:index.php');


?>