<html>
    <head>
        <title>Sunshine hotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style1.css">
</head>
<body>
<?php include 'navbar.php' ?>
<!--form-->
<section class="my-5">
    <div class="py-5">
    <h2 class="text-center">Payment</h2>
</div>

<div class="w-50 m-auto">
<form action="payment.php" method="post">

<div class="form-group">
    <label> Full Name</label>
    <input type="text" name="name" autocomplete="off" class="form-control">
    </div>

    <div class="form-group">
        <label>Mobile No:-</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
</div>

<div class="form-group">
    <label>Adhar no:-</label>
    <input type="text" name="Adhar" autocomplete="off" class="form-control">
</div>

<div class="form-group">
    <label>Email id</label>
    <input type="email" name="email" autocomplete="off" class="form-control">
    <div>

        <div class="form-group">
            <label>Gender</label>
            <p>Male<input type="radio" name="radio1" value="Male">
            Female <input type="radio" name="radio2" value="Female"></p>
        </div>
        
 <div class="form-group">
    <button type="Submit" class="btn btn-primary">Make Payment</button>
</div>

</form>
</div>
</section>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>