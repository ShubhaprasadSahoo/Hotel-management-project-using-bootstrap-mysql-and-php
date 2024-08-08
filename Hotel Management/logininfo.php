<?php
$con=mysqli_connect("localhost","root");

if($con){
    echo "Connection Sucessfull";
}
else{
    echo "No Connection";
}

mysqli_select_db($con,'logininfo');

$username=$_POST['username'];
$password=$_POST['pswd'];

$query="insert into login(Name, Password)
   values('$username', '$password')";

mysqli_query($con, $query);

header('location:index.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $user=$_POST['username'];
    if(empty($user)){
        echo "Username cannot be empty"."<br>";
    }
    elseif(!preg_match("/^[a-zA-Z]*$/",$user)){
        echo "Only white spaces and alphabets are allowed."."<br>";

    }

    else{
        echo "The username entered is: $user"."<br>";
    }
    $pass=$_POST['pswd'];

    if(empty($pass)){
        echo "Password canmot be empty"."<br>";
    }
    else{
        echo "The password is: $pass";
    }



    }


?>