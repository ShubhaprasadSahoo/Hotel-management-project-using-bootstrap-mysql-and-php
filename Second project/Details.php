<?php include 'db.php'; ?>

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
    <?php include 'navbar.php'; ?>
<section class="my-5">
    <div class="py-5">
<h2 class="text-center">All Booking Details</h2>

<table border="1" class="table">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Check-in Date</th>
        <th>Check-out Date</th>
        <th>Room Type</th>
        <th>Status</th>
    </tr>

    <?php
    $sql = "SELECT * FROM bookings";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['phone'] . "</td>
                    <td>" . $row['check_in_date'] . "</td>
                    <td>" . $row['check_out_date'] . "</td>
                    <td>" . $row['room_type'] . "</td>
                    <td>" . $row['status'] . "</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='8'>No bookings found.</td></tr>";
    }
    ?>

</table>
</section>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>