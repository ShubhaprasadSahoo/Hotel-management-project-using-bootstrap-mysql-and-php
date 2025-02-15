<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunshine</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style1.css">
</head>
<body>
  <?php include 'navbar.php' ?>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Guest Check-In</h2>
</div>


<div class="w-50 m-auto">
<form method="POST" action="">

     <div class="form-group">
        <label for="guest_name">Guest Name:</label>
        <input type="text" name="guest_name" id="guest_name" required class="form-control">
      </div>
     
      <div class="form-group">
        <label for="room_number">Room Number:</label>
        <input type="number" name="room_number" id="room_number" required class="form-control">
       </div>

       <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Check-In">
</div>
    </form>

</div>

</section>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>  
</body>
</html>



<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $guest_name = $_POST['guest_name'];
    $room_number = $_POST['room_number'];
    $check_in_date = date("Y-m-d H:i:s");

    // Insert guest details into the database
    $sql = "INSERT INTO guest_details (guest_name, check_in_date, room_number, status)
            VALUES ('$guest_name', '$check_in_date', '$room_number', 'Checked In')";

    if ($conn->query($sql) === TRUE) {
        echo "Guest checked in successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
header("location:checkin.php");
?>