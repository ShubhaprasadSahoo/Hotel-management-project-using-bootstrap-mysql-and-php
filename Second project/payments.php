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
<h2 class="text-center">Hotel Payment Page</h2>
</div>
     
    <div class="w-50 m-auto">
    <form action="process_payment.php" method="POST">

        <div class="form-group">
        <label for="booking_id">Booking ID:</label>
        <input type="text" name="booking_id"  class="form-control" required>
     </div>
         <div class="form-group">
        <label for="user_id">User ID:</label>
        <input type="text" name="user_id" class="form-control"required>
</div>
        <div class="form-group">
        <label for="amount">Amount to Pay:</label>
        <input type="number" name="amount" step="0.01" class="form-control" required>
</div>
        <div class="form-group">
        <label for="payment_method">Payment Method:</label>
        <select name="payment_method" class="form-control" required>
            <option value="Credit Card">Credit Card</option>
            <option value="Debit Card">Debit Card</option>
            <option value="PayPal">PayPal</option>
            <option value="Bank Transfer">Bank Transfer</option>
        </select>
</div>

        <input type="submit" class="btn btn-primary" value="Pay Now">
    </form>
</div>
</section>






<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>