<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style1.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <section class="my-5">
      <div class="py-5">  
    <h2 class="text-center">Hotel Booking Form</h2>
</div>

<div class="w-50 m-auto">
<form action="bookinginfo.php" method="POST">
    <div class="form-group">
        <label>Name</label>
     <input type="text" name="name" required class="form-control">
</div>
    <div class="form-group">
    <label>Email:</label>
     <input type="email" name="email" class="form-control"required>
</div>
 <div class="form-group">
    <label>Phone:</label>
 <input type="text" name="phone" required class="form-control">
</div>
<div class="form-group">
    <label>Check-in Date:</label>
     <input type="date" name="check_in_date" class="form-control" required>
</div>

<div class="form-group">
<label>Check-out Date:</label>
 <input type="date" name="check_out_date" class="form-control" required>
</div>

<div class="form-group">   
 <label>Room Type:</label> 
    <select name="room_type" class="form-control"required>
        <option value="Single">Single</option>
        <option value="Double">Double</option>
        <option value="Suite">Suite</option>
    </select>
</div>

<input type="submit" name="submit" class="btn btn-primary" value="Book Now">
</form>
</div>
</section>








<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>