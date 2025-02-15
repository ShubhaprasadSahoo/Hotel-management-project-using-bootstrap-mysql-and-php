<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunshinet</title>

</head> <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style1.css">
<body>
    <?php include 'navbar.php'; ?>
    
<section class="my-5">
    
    <div class="py-5">
<h2 class="text-center">Check-in</h2>
</div>

<div class="w-50 m-auto">
<form action="checkininfo.php" method="POST">
    
<div class="form-group">
    <label>Booking ID:</label> 
    <input type="number" name="id" class="form-control" required>

</div>
<input type="submit" name="checkin" class="btn btn-primary" value="Check-in">
</form>
</div>
</section>
     
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>