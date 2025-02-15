<?php include 'db1.php'; ?>
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
            <h2 class="text-center">Payment Details</h2>
</div>
<table border="1" class="table">
    <tr>
        <th>payment_id</th>
        <th>booking_id</th>
        <th>user_id</th>
        <th>amount</th>
        <th>payment_status</th>
        <th>payment_method</th>
        <th>transction_id</th>
        <th>payment_date</th>
</tr>
<?php
$sql="SELECT * FROM payments";
$result=$conn->query($sql);

if($result->num_rows > 0){

while($row=$result->fetch_assoc()){
 echo "<tr>
           <td>".$row['payment_id']."</td>
           <td>".$row['booking_id']."</td>
           <td>".$row['user_id']."</td>
           <td>".$row['amount']."</td>
           <td>".$row['payment_status']."</td>
           <td>".$row['payment_method']."</td>
           <td>".$row['transaction_id']."</td>
           <td>".$row['payment_date']."</td>
           </tr>";
           
           
           
           
           
           
           
                 
}

  }else{
    echo "<tr><td colspan=8>No payments found</tr></td>";
  }



?>
</section>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>