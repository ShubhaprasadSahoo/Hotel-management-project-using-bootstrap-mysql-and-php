<?php include 'db.php'; ?>
<?php
if (isset($_POST['checkout'])) {
    $id = $_POST['id'];

    $sql = "UPDATE bookings SET status = 'checked_out' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Check-out successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}
header("location:checkout.php");
?>