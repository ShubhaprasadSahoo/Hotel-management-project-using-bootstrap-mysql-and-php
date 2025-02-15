<?php include 'db.php'; ?>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];
    $room_type = $_POST['room_type'];

    $sql = "INSERT INTO bookings (name, email, phone, check_in_date, check_out_date, room_type, status) 
            VALUES ('$name', '$email', '$phone', '$check_in_date', '$check_out_date', '$room_type', 'booked')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
header("location:payments.php");
?>