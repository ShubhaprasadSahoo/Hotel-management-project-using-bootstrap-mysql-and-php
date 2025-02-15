<?php include 'db.php'; ?>
<?php
if (isset($_POST['checkin'])) {
    $id = $_POST['id'];

    $sql = "UPDATE bookings SET status = 'checked_in' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Check-in successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
header("location:checkin.php");
?>
